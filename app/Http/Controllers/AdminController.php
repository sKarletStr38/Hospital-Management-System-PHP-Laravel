<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->specialty=$request->speciality;

        $doctor->save();

        return redirect()->back()->with('message','Doctor added successfully');

    }

    public function showAppointment()
    {   
        $data=appointment::all();
        return view('admin.showAppointment',compact('data'));
    }

    public function approved($id)
    {   
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id)
    {   
        $data=appointment::find($id);
        $data->status='Declined';
        $data->save();
        return redirect()->back();
    }

    public function showDoctor()
    {   
        $data=doctor::all();
        return view('admin.showDoctor',compact('data'));
    }
    public function delete_Doctor($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function update_Doctor($id)
    {
        $data=doctor::find($id);
        //$data->save();
        return view('admin.update_Doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $data=doctor::find($id);
        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->specialty=$request->specialty; //name=specialty from  update_Doctor
        $data->room=$request->room;

        $image=$request->file; //name=file from  update_Doctor
        if($image)
        {
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $data->image=$imagename;
        }
        
        $data->save();
        return redirect()->back()->with('message','Doctor details updated successfully');
    }

}
