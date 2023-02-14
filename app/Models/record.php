<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    use HasFactory;
    protected $fillable=[
        'f_name',
        'l_name',
        'email',
        'date',
    ];
    protected $casts = [
        'name_program' => 'array',
    ];
}
