<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    public function index() {
        return view('student.index');
    }
    public function checkScore(Request $request)
    {
        $data = $request->validate(
            [
                'sbd' => [
                    'required',
                    'regex:/^[0-9]{8}$/'
                ]
            ],
            [
                'sbd.required' => 'Vui lòng nhập số báo danh.',
                'sbd.regex' => 'Số báo danh phải gồm đúng 8 chữ số.'
            ]
        );

        $student = Student::where('sbd', $data['sbd'])->first();

        return view('student.index', [
            'student' => $student,
            'sbd' => $data['sbd'],
        ]);
    }

}
