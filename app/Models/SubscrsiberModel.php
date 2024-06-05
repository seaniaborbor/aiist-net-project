<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscrsiberModel extends Model
{
    protected $table = 'subscribers'; // Replace 'your_menu_table' with your actual database table name
    protected $primaryKey = 'subscriberId'; // Replace 'id' with your primary key field name

protected $allowedFields = [
'subscriberEmail'
];

}
	