<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemain extends Model
{
    use HasFactory;

    protected $table = 'daftarpemain';
    protected $primaryKey = 'id'; // Menentukan primary key
    protected $fillable = ['nama_pemain', 'nomor_punggung', 'posisi'];
}
