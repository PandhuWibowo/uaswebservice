<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'students';

    // protected $fillable = [
    //     'nim', 'nama', 'telp', 'email', 'alamat', 'fakultas', 'prodi'
    // ];
    protected $fillable = [
        'nim','name','gender','phonenumber','address'
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = ['id'];

}
