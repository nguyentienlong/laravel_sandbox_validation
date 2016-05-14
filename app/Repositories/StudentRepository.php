<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    protected $studentModel;

    public function __construct(Student $studentModel)
    {
        $this->studentModel = $studentModel;
    }

    public function create($params) {

        return $this->studentModel
            ->create($params)
            ->id;
    }
}
