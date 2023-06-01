<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('home', compact('teachers'));
    }

    public function search(Request $request)
    {
        $searchName = $request->input('search_name');
        $teachers = Teacher::query()
            ->where('firstname', 'like', '%' . $searchName . '%')
            ->orWhere('lastname', 'like', '%' . $searchName . '%')
            ->get();

        return view('home', compact('teachers'));
    }

    public function searchByCategory(Request $request)
    {
        $categoryId = $request->query('category_id');
        $teachers = Teacher::whereHas('category', function ($query) use ($categoryId) {
            $query->where('id', $categoryId);
        })->get();

        return view('home', compact('teachers'));
    }

    public function searchByLocation(Request $request)
    {
        $locationId = $request->query('location_id');
        $teachers = Teacher::whereHas('location', function ($query) use ($locationId) {
            $query->where('id', $locationId);
        })->get();

        return view('home', compact('teachers'));
    }

    public function contact($id)
    {
        $teacher = Teacher::findOrFail($id);
        $email = $teacher->email;

        // Pass the email and teacher to the view and display the teachercontact.blade.php
        return view('teachercontact', compact('email', 'teacher'));
    }

}