<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';

    public function studentSubjects(){
        return $this->hasmany(StudentSubject::class,'Student_id');
    }

    public function studentCity(){
        return $this->hasOne(City::class,'id');
    }

}
