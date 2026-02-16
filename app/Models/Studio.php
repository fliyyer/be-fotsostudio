<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Studio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'phone',
        'opening_time',
        'closing_time',
        'slot_duration',
        'max_booking_per_slot',
        'thumbnail',
        'is_active',
    ];

    public function photoPackages(): HasMany
    {
        return $this->hasMany(PhotoPackage::class);
    }

    public function addons(): HasMany
    {
        return $this->hasMany(Addon::class);
    }

    public function studioSchedules(): HasMany
    {
        return $this->hasMany(StudioSchedule::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function studioPhotos(): HasMany
    {
        return $this->hasMany(StudioPhoto::class);
    }

    public function blockedDates(): HasMany
    {
        return $this->hasMany(BlockedDate::class);
    }
}
