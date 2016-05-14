<?php

namespace Test\Units;

use Mockery as m;

class TestStudentRepository extends TestCase
{
    public function test_create_a_student()
    {
        $params = [
            'id' => 1,
            'name' => 'foo',
            'phone_number' => '0988888888',
        ];

        $studentModel = m::mock(\App\Models\Student::class);

        $studentModel->shouldReceive('create')
            ->with($params)
            ->andReturnSelf();

        $studentModel->shouldReceive('getAttribute')
            ->with('id')
            ->andReturn(1);

        $studentRepository = new \App\Repositories\StudentRepository($studentModel);

        $expectedResult = $studentRepository->create($params);

        $this->assertEquals(1, $params['id']);
    }
}
