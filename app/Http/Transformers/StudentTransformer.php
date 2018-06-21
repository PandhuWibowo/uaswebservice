<?php

namespace App\Http\Transformers;
use League\Fractal\TransformerAbstract;
use App\Http\Models\Student;
class StudentTransformer extends TransformerAbstract
{   
    public function transform(Student $field){
        return [
            'id'                => $field->id,
            'nim_mahasiswa'     => $field->nim, 
            'nama_mahasiswa'    => $field->name,
            'jenkel_mahasiswa'  => $field->gender,
            'no_tel'            => $field->phonenumber,
            'address'           => $field->address
        ];
    }
}