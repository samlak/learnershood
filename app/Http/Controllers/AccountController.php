<?php

namespace App\Http\Controllers;

use App\User;
use App\Library;
use App\School;
use App\Department;

use Auth;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function submit()
    {
        return view('submit');
    }
    public function library()
    {
        $user = User::findOrFail(Auth::user()->id);
        $library = Library::where('user_id', $user->id)->paginate(24);
        return view('library', compact('user', 'library'));
    }
    public function account()
    {
        $user = User::findOrFail(Auth::user()->id);
        $library = Library::where('user_id', $user->id)->take(12)->get();
        return view('account', compact('user', 'library'));
    }
    public function profile()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('profile', compact('user'));
    }
    public function changePassword()
    {
        return view('changepassword');
    }
   
    public function addCourse()
    {
        return view('addcourse');
    }
    public function storeCourse()
    {
    }
    public function editCourse()
    {
        return view('editcourse');
    }
    public function updateCourse()
    {
    }

    public function addSchool()
    {
        return view('addschool');
    }
    public function storeSchool(Request $request)
    {
        School::create([
            'short_name' => $request->short_name,
            'full_name' => $request->full_name,
        ]); 
        $request->session()->flash('addSchool', 'New school added successfully');
        return redirect('/account');
    }
    public function editSchool()
    {
        return view('editschool');
    }
    public function updateSchool()
    {
    }

    public function addDepartment()
    {
        $schools = School::get()->all();
        return view('adddepartment', compact('schools'));
    }
    public function storeDepartment(Request $request)
    {
        Department::create($request->all()); 
        $request->session()->flash('addDepartment', 'New department added successfully');
        return redirect('/account');
    }
    public function editDepartment()
    {
        return view('editdepartment');
    }
    public function updateDepartment()
    {
    }
}
