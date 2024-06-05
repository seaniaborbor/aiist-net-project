<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorsModel extends Model
{
    protected $table            = 'visitors';
    protected $primaryKey       = 'ipId';
    
    protected $allowedFields    = ['IpAddress'];

  
}
