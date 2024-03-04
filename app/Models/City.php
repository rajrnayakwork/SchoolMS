<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'citys';
    protected $primaryKey = 'id';

    public function student(){
        return $this->belongsTo(Student::class,'id');
    }

}
