<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pakaian extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pakaian';

    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'gambar_pakaian',
        'nama_pakaian',
        'kategori_id',
        'size',
        'harga',
        'stok',
        'keterangan',
    ];

    public function pakaian(): HasMany
    {
        return $this->hasMany(Pakaian::class, 'id');
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

}
