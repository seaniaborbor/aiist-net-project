<?php

namespace App\Models;

use CodeIgniter\Model;

class CertificateModel extends Model
{
    protected $table            = 'certificates';
    protected $primaryKey       = 'certId';
    protected $allowedFields    = ['dateIssued','course','certificateType', 'duration', 'studentName'];
}
