<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    use HasFactory;
    protected $table = "tb_guru";
    protected $primaryKey = "guru_id";
    protected $guarded = [];


    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'guru_id_nip', 'kelas_id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'guru_id_user', 'id');
    }
}
