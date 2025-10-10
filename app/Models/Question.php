<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    // Nama tabel (opsional, kalau tabelmu bukan bentuk jamak)
    protected $table = 'questions';

    // Primary key (opsional, default-nya "id")
    protected $primaryKey = 'question_id';

    

    // Kolom yang boleh diisi (biar aman waktu insert/update)
    protected $fillable = [
        'question_detail',
        'question_answer'
    ];
}
