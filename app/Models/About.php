<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory, SoftDeletes;

    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function(About $about){
    //         $about->user_id = auth()->id();
    //     });

    //     static::saving(function(About $about1){
    //         if (request()->hasFile('thumbabout1')){
    //             $about1->thumbabout1 = request()->file('thumbabout1')->storePublicly('files');
    //         }
    //     });

    //     // static::saving(function(About $about2){
    //     //     if (request()->hasFile('thumbabout2')){
    //     //         $about2->thumbabout2 = request()->file('thumbabout2')->storePublicly('files');
    //     //     }
    //     // });

    //     // static::saving(function(About $about3){
    //     //     if (request()->hasFile('thumbabout3')){
    //     //         $about3->thumbabout3 = request()->file('thumbabout3')->storePublicly('files');
    //     //     }
    //     // });

    //     // static::saving(function(About $about4){
    //     //     if (request()->hasFile('thumbabout4')){
    //     //         $about4->thumbabout4 = request()->file('thumbabout4')->storePublicly('files');
    //     //     }
    //     // });
    // }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }

    protected $guarded = [
        'id',
    ];

    protected $table = 'abouts';

    protected $fillable = [
        'thumbabout1',
        'thumbabout2',
        'thumbabout3',
        'thumbabout4',
        'slugabout',
    ];
}
