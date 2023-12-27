<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'route_id',
        'bus_id',
        'departure_location_id',
        'destination_location_id',
        'departure_time',
        'arrival_time',
        'available_days',
        'status',
        'price'
    ];

    protected $casts = [
        'departure_time' => 'timestamp:H:m',
        'arrival_time' => 'timestamp:H:m',
        'available_days' => 'json'
    ];


    protected $hidden = ['created_at', 'updated_at'];


    public function route(): BelongsTo
    {
        return $this->belongsTo(Route::class);
    }

    public function bus(): BelongsTo
    {
        return $this->belongsTo(Bus::class);
    }

    public function departureLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'departure_location_id');
    }

    public function destinationLocation(): BelongsTo
    {
        return $this->belongsTo(Location::class, 'destination_location_id');
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }


}
