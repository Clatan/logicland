<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRole extends Model
{
    use HasFactory;

    // Nama tabel (opsional, kalau tabelmu bukan bentuk jamak)
    protected $table = 'user_role';

    // Primary key (opsional, default-nya "id")
    protected $primaryKey = 'user_role_id';

    

    // Kolom yang boleh diisi (biar aman waktu insert/update)
    protected $fillable = [
        'user_id',
        'role_id'
    ];
}
