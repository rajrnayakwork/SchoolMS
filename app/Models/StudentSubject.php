<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentSubject extends Model
{
    use HasFactory;
    protected $table = 'students_subjects';

    public $timestamps = false;

    public function student(){
        return $this->belongsTo(Student::class,'id');
    }

}
