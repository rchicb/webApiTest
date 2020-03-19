<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Employee::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $dataRequest=$request->all();
            //   dd($request);
        // return $request;
        
        $auxEmployee =new Employee();
        // $auxEmployee = $request;
        $auxEmployee->employee_name=$dataRequest['employee_name'];
        $auxEmployee->employee_salary =$dataRequest['employee_salary'];
        $auxEmployee->employee_age =$dataRequest['employee_age'];
        $auxEmployee->save();

        return $auxEmployee;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
    $dataRequest=$request->all();

    $auxEmployee =Employee::find($id);
    // $auxEmployee = $request;
    $auxEmployee->employee_name=$dataRequest['employee_name'];
    $auxEmployee->employee_salary =$dataRequest['employee_salary'];
    $auxEmployee->employee_age =$dataRequest['employee_age'];
    $auxEmployee->update();

    return $auxEmployee;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $auxEmployee=Employee::find($id);
        $auxEmployee->delete();

    }
}
