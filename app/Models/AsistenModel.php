<?php


namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten';
    protected $primaryKey = 'nim';
    protected $allowedFields = [ 'no', 'nim', 'nama', 'praktikum', 'ipk'];
}
?>