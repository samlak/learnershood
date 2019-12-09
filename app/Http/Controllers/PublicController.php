<?php

namespace App\Http\Controllers;

use App\School;
use App\Department;
use App\Course;
use App\CourseMaterial;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $schools = School::withCount('courseMaterials')->take(12)->get();
        $departments = Department::withCount('courseMaterials')->take(12)->get();
        $courses = Course::withCount('courseMaterials')->take(12)->get();
        return view('index', compact('schools', 'departments', 'courses'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function courses()
    {
        $schools = School::withCount('courseMaterials')->take(12)->get();
        return view('courses', compact('schools'));
    }
    public function preview($token)
    {
        $courseMaterial =  CourseMaterial::where('token', $token)->firstOrFail();
        $similarCourseMaterials = CourseMaterial::where('course_id', $courseMaterial->course_id)->take(6)->get();
        return view('preview', compact('courseMaterial', 'similarCourseMaterials'));
    }
    public function search(Request $request)
    {
        return view('search');
    }

    public function singleCourse($code)
    {
        $schools = School::withCount('courseMaterials')->take(4)->get();
        return view('course', compact('schools'));
    }

    public function showContent($code)
    {
        $similarSchools = School::take(6)->get();
        return view('content', compact('school', 'similarSchools'));
    }

    public function singleSchool($code)
    {
        $school = School::where('short_name', $code)->firstOrFail();
        $similarSchools = School::take(6)->get();
        return view('school', compact('school', 'similarSchools'));
    }
    public function schools(Request $request)
    {
        if($request->name){
            $schools = School::where('full_name', 'like', $request->name.'%')->get()->all();
        }else{
            $schools = School::paginate(50);
        }
        return view('schools', compact('schools'));
    }

    public function singleDepartment($school, $code)
    {
        $school= School::where('short_name', $school)->firstOrFail();
        $department = Department::where('school_id', $school->id)->where('short_name', $code)->firstOrFail();
        $similarDepartments = Department::where('school_id', $school->id)->take(6)->get();
        return view('department', compact('department', 'similarDepartments'));
    }
    public function departments(Request $request)
    {
        if($request->name){
            $departments = Department::where('full_name', 'like', $request->name.'%')->get()->all();
        }else{
            $departments = Department::paginate(50);
        }
        return view('departments', compact('departments'));
    }

}
