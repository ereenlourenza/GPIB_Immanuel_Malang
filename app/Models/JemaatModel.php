<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JemaatModel extends Model
{
    use HasFactory;

    protected $table = 'tb_jemaat';
    protected $primaryKey = 'id_jemaat';
    protected $fillable = ['nama', 'tanggal_lahir', 'alamat', 'no_telepon', 'email', 'status_aktif'];
}
