<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table = 'course_table'; 
    protected $primaryKey = 'courseId';

    protected $allowedFields = ['courseName', 'courseStatus', 'coursecareer', 'courseDuration', 'coursePic', 'courseDescription'];
}