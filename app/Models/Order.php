<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['amount', 'status'])]

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function orderable()
    {
        return $this->morphTo(); // Une commande "appartient" à ProductOrder ou SubscriptionOrder
    }
}
