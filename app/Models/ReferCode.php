<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        'used',
    ];

    /**
     * Relationship: A refer code belongs to a user (the code owner)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Helper: Check if this referral code can still be used
     */
    public function canBeUsed()
    {
        return $this->used < $this->max_used;
    }
}
