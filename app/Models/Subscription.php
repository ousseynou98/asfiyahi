<?php

namespace App\Models;

use App\Models\Country;
use App\Models\SubscriptionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_type_id',
        'first_name',
        'last_name',
        'birth_date',
        'birth_place',
        'phone',
        'country_id',
        'payment_method',
        'address',
    ];

    public function subscriptionType()
    {
        return $this->belongsTo(SubscriptionType::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
