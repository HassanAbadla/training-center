<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Applied;

class Course extends Model
{
    // use HasFactory;

    public function applied() {
        return $this->hasMany(Applied::class, 'course_id');
    }
}
