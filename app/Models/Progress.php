<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Progress extends Model
{
use HasFactory;

    // Nama tabel (opsional, kalau tabelmu bukan bentuk jamak)
    protected $table = 'user_progress';

    // Primary key (opsional, default-nya "id")
    protected $primaryKey = 'progress_id';

    

    // Kolom yang boleh diisi (biar aman waktu insert/update)
    protected $fillable = [
        'user_id',
        'stage_id',
        'attempt_remaining',
        'status'
    ];
}
