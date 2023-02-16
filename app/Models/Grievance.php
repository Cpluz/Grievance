<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
class Grievance extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'name',
        'email',
        'place',
        'subject',
        'desc',
        'image',
        'places_id',
        'is_completed',
        'remark',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
    ];

    public function place(): BelongsTo{
        return $this->belongsTo(Place::class, 'places_id','id' );
    }
}
