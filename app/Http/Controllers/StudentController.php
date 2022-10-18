<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session()->has("message")){
            $this->data["message"]=Session()->get("message");
        }
        $this->data["alldata"]=Student::all();
        return view("viewallstudent.viewall",$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data["editdata"]=new student();
        return view("addstudent.addstudent",$this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Student();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->roll=$request->roll;
        $data->reg=$request->reg;
        $data->password=$request->password;
        $data->address=$request->address;
        $data->save();
        Session()->flash("message","student insert Sccessfully");
        return redirect()->to("/students");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $this->data["singleshow"]=$student;
        return view("singleshow.singleshow",$this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $this->data["editdata"]=$student;
        return view("addstudent.addstudent",$this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $data=$request;
        $student->name=$data["name"];
        $student->email=$data["email"];
        $student->password=$data["password"];
        $student->roll=$data["roll"];
        $student->reg=$data["reg"];
        $student->address=$data["address"];
        $student->save();
        Session()->flash("message","Student Update successfully");
        return redirect()->to("/students");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
       $student->delete();
       Session()->flash("message","Student Delete Successfully");
       return redirect()->to('/students');
    }
}
