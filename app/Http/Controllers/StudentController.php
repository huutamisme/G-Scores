<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index', [
            'student' => null,
            'sbd' => null,
        ]);
    }

    public function checkScore(Request $request)
    {
        $data = $request->validate(
            [
                'sbd' => ['required', 'regex:/^[0-9]{8}$/'],
            ],
            [
                'sbd.required' => 'Vui lòng nhập số báo danh.',
                'sbd.regex' => 'Số báo danh phải gồm đúng 8 chữ số.',
            ]
        );

        $student = Student::where('sbd', $data['sbd'])->first();

        return view('student.index', [
            'student' => $student,
            'sbd' => $data['sbd'],
        ]);
    }

    public function leaderboard(Request $request)
    {
        $block = $request->get('block', 'A00');

        if (!array_key_exists($block, Student::BLOCKS)) {
            $block = 'A00';
        }

        $subjects = Student::getSubjectsByBlock($block);

        $topStudents = Student::topByBlock($block)->get();

        return view('student.leaderboard', [
            'block' => $block,
            'subjects' => $subjects,
            'blocks' => Student::BLOCKS,
            'topStudents' => $topStudents,
        ]);
    }

    public function report(Request $request)
    {
        $subject = $request->get('subject', 'toan');

        if (!array_key_exists($subject, Student::SUBJECTS)) {
            $subject = 'toan';
        }

        $stats = [
            '>=8' => Student::where($subject, '>=', 8)->count(),
            '6-8' => Student::where($subject, '<', 8)->where($subject, '>=', 6)->count(),
            '4-6' => Student::where($subject, '<', 6)->where($subject, '>=', 4)->count(),
            '<4'  => Student::where($subject, '<', 4)->count(),
        ];

        return view('student.report', [
            'subjects' => Student::SUBJECTS,
            'subject' => $subject,
            'stats' => $stats,
        ]);
    }
}
