<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Student;
use App\Models\Clazz;
use App\Http\Requests\StudentRequest;
use App\Validators\StudentValidator;
use App\Repositories\StudentRepository;

class StudentController extends Controller
{
    protected $studentValidator;

    protected $student;

    protected $class;

    public function __construct(Student $student,
         StudentValidator $studentValidator,
         Clazz $clazz,
         StudentRepository $studentRepository)
    {
        $this->student = $student;
        $this->studentValidator = $studentValidator;
        $this->clazz = $clazz;
        $this->studentRepository = $studentRepository;
    }

    // public function detail($id)
    // {
    //     dd($id);
    // }

    public function create()
    {
        $classes  = $this->clazz->all();

        return view('student.create', compact('classes'));
    }

    public function store(Request $request, Student $student)
    {
        $this->studentValidator->validate($request);
        // $this->validate($request, [
        //         'name' => 'required',
        //         'phone_number' => 'required'
        //     ]
        // );

        $std = $this->studentRepository->create($request->all());

        dd($std);

        return redirect('/student');
    }

    public function destroy(Student $student) : JsonResponse
    {
        $student->delete();

        return new JsonResponse(null, 204);
    }

    public function index()
    {
        $students = $this->student->all();

        return view('student.index', compact('students'));
    }
}
