<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = UserType::latest()->get();
        return view('backEnd.user_type.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backEnd.user_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:user_types,title'
        ]);
        $types = new UserType();
        $types->title =$request->title;
        $types->status = $request->status;
        $types->save();
        return redirect()->back()->with('success',"User Type Created Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(UserType $userType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserType $userType)
    {
        $type = UserType::find($userType->id);
        //return $type;
        return view('backEnd.user_type.edit',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserType $userType)
    {
        $request->validate([
            'title'=>'required'
        ]);
        $types = UserType::find($userType->id);
        $types->title =$request->title;
        $types->status = $request->status;
        $types->save();
        return redirect()->route('user-type.index')->with('success',"User Type Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserType $userType)
    {
        $userType->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
