<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\practice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classes = Classes::all();
        return view('Classes.index',compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $practice=practice::all();
        return view('Classes.create',compact('practice'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'room_no' => 'required|numeric',
            'building' => 'required|in:oldbuilding,newbuilding',
            'practices_id' => 'required|exists:practices,id',
        ]);
    
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
         $class=new Classes();
         $class->room_no=$request->room_no;
         $class->building=$request->building;
         $class->practices_id=$request->practices_id;
         $class->save();
         return redirect()->route('Classes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Classes $classes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classes = Classes::find($id);
        $practice=practice::all();
        return view('Classes.edit',compact('practice','classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classes $classes)
    {
        $classes->room_no=$request->room_no;
        $classes->building=$request->building;
        $classes->practices_id=$request->practices_id;
        $classes->save();
        return redirect()->route('Classes.index')->with('success', 'It is Updateed successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $classes = Classes::find($id);
        $classes->delete();
        return redirect()->route('Classes.index')->with('success', 'It is Updateed successfully');
    }
}
