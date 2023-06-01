<?php

namespace App\Http\Controllers;


use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email|unique:teachers', // Update table name to "teachers"
            'phone' => 'required',
            'website' => 'required',
            'remarks' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'location_id' => 'required',
            'streetnr' => 'required',
            'codecity' => 'required',
        ]);

        $validatedData['approved'] = 0;

        $teacher = new Teacher;
        $teacher->firstname = $validatedData['firstname'];
        $teacher->lastname = $validatedData['lastname'];
        $teacher->email = $validatedData['email'];
        $teacher->phone = $validatedData['phone'];
        $teacher->website = $validatedData['website'];
        $teacher->remarks = $validatedData['remarks'];
        $teacher->description = $validatedData['description'];
        $teacher->category_id = $validatedData['category_id'];
        $teacher->location_id = $validatedData['location_id'];
        $teacher->approved = $validatedData['approved'];
        $teacher->streetnr = $validatedData['streetnr'];
        $teacher->codecity = $validatedData['codecity'];

        $teacher->save();

        $teacher = Teacher::latest()->firstOrFail();

        Mail::raw('New teacher entry from ' . $teacher->firstname . ' ' . $teacher->lastname . ' waiting for approval!', function ($message) {
            $message->to('rem@msn.com')->subject('New teacher entry waiting for approval!');
        });

        return redirect()->route('home')->with('success', 'Registration successful! You will be notified once your registration is approved.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
