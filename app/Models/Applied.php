<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Applied extends Model
{
    protected $table = 'applied'; 
    // use HasFactory;

    public function course() {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
