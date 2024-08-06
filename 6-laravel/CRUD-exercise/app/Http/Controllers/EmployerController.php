<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employers = Employer::all();

        return view('employer.index', compact('employers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $employer = new Employer();
        $employer->name = $request->name;
        $employer->phone = $request->phone;
        $employer->email = $request->email;
        $employer->address = $request->address;
        $employer->save();

        return redirect()->route('employer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employer = Employer::find($id);
        return view('employer.edit', compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employer = Employer::find($id);
        $employer->name = $request->name;
        $employer->phone = $request->phone;
        $employer->email = $request->email;
        $employer->address = $request->address;
        $employer->update();

        return redirect()->route('employer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employer = Employer::find($id);
        if ($employer) {
            $employer->delete();
            return back();
        }
    }
}
