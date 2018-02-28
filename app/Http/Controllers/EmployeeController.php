<?php

namespace App\Http\Controllers;

use Excel;
use App\Employee;
use App\EmployeeTraining;
use App\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        $trainings = Training::all();

        return view('employee.index', compact(['employees','trainings']));
    }


    public function training(Request $request)
    {

            foreach($request->t_id as $d){
                $e = new EmployeeTraining();
                $e->emp_id = $request->emp_id;
                $e->t_id = $d;
                $e->save();
            }
        return redirect()->back()->with('success','Training Successfully Added!');
    }


    public function  upload(Request $request)
    {
        echo '<pre>';
        $excel = Excel::load($request->file('file'), function($reader){
            $reader->each(function($sheet){

                print_r($sheet->toArray());

            });
        });

    }


    public function create()
    {
        return view('employee.add-employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstname'=>'required|min:3|max:255',
            'middlename'=>'nullable|min:3|max:255',
            'lastname'=>'required|min:3|max:255',
        ]);


        $fname = substr($data['firstname'],0,2);

        $data['username'] = $fname.$data['lastname'];
        $data['password'] = Hash::make($data['username']);
        $data['image'] = 'default/user.png';;


        $employee = Employee::create($data);

        return back()->with('success', ucwords($employee->firstname).' '.ucwords($employee->lastname).' Successfully Added!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emp = Employee::find(2);
        dd($emp->trainings);
        $employee = Employee::find($id);

        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
