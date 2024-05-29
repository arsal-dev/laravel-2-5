<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $data = 'welcome page!';
        $languages = ['lang1' => 'html', 'lang2' => 'css', 'lang3' => 'javascript'];
        return view('welcome', ['myData' => $data, 'languages' => $languages]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function trash()
    {
        $teachers = Teacher::onlyTrashed()->paginate(10);
        return view('teacher.trash', ['teachers' => $teachers]);
    }

    public function restore($id)
    {
        Teacher::onlyTrashed()->find($id)->restore();

        return redirect()->route('teacher.index')->with('success', 'record restored successfully');
    }

    public function delete($id)
    {
        Teacher::onlyTrashed()->find($id)->forceDelete();

        return redirect()->route('teacher.index')->with('success', 'record deleted from trash successfully');
    }
}
