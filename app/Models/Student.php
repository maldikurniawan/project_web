<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=
    ['nama_depan', 'nama_belakang', 'npm', 'no_telp', 'jenjang_studi', 'semester', 'email_address'];
}
