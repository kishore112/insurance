<?php

namespace App\Http\Controllers;


use App\Models\Insurance;
use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // $roles = Roles::all();
      //  return view('manage_users.create', ['roles' => $roles]);
        $insurance = Insurance::latest()->paginate(5);
        return view('insurance.home', compact('insurance'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('insurance.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'mobile' => 'required',
            'email_id' => 'required',
            'customer_no' => 'required',
            'health_advisor' => 'required'
        ]);
        Insurance::create($request->all());
        return redirect()->route('insurance.index')->with('success','Insurance created Successfully');
    }

    public function show(Insurance $insurance){
        return view('insurance.show',compact('insurance'));
    }
    public function edit(Insurance $insurance){
                 return view('insurance.edit',compact('insurance'));
    }

    public function update(Request $request, Insurance $insurance)
    {
        
        $request->validate([
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'mobile' => 'required',
        'email_id' => 'required',
         'customer_no' => 'required',
        'health_advisor' => 'required'
        ]); 
        
        $insurance->update($request->all());

        return redirect()->route('insurance.index')
        ->with('success','Insurance Details Updated Successfully');
    }
    public function destroy(Insurance $insurance)
    {
        $insurance->delete();

        return redirect()->route('insurance.index')
        ->with('success','Insurance deleted successfully');
    }
    public function adminHome()
    {
        return view('adminHome');
    }
}
