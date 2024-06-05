<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table = 'career_table'; // Replace 'your_menu_table' with your actual database table name
    protected $primaryKey = 'careerId'; // Replace 'id' with your primary key field name

    protected $allowedFields = ['careerName', 'careerStatus', 'careerDescription', 'careerPic'];
}