<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kategori';

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'nama_kategori'
    ];

    public function pakaian(): BelongsTo
    {
        return $this->belongsTo(Pakaian::class, 'kategori_id', 'id');
    }
}
