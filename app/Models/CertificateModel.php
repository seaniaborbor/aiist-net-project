<?php

namespace App\Models;

use CodeIgniter\Model;

class CertificateModel extends Model
{
    protected $table            = 'certificates';
    protected $allowedFields    = [
        
    'certId', 
    'dateIssued',
    'course',
    'certificateType',
    'duration',
    'studentName'
    ];
}
