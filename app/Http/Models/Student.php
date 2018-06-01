<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model{
    use SoftDeletes;

    // protected $table = 'categories';
    protected $fillable = [
        'nim','name','gender','phonenumber','address'
    ];

    protected $guarded = ['id'];
}