<?php

namespace App\Transformers;

use App\Student;

use League\Fractal\TransformerAbstract;

class StudentTransformer extends TransformerAbstract
{
    public function transform(Student $student)
    {
        return [
            'nim'           => $student->nim, 
            'name'          => $student->name,
            'gender'        => $student->gender,
            'phonenumber'   => $student->phonenumber,
            'address'       => $student->address
        ];
    }
}