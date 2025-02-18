<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name',
        'storage_limit',
        'monthly_price',
        'annual_price',
        'status',
        'enable_chatgpt',
        'trial_days',
        'max_users',
        'max_projects',
        'description',
    ];

    public function arrDuration()
    {
        return [
            'Unlimited' => 'Unlimited',
            'Month' => 'Per Month',
            'Year' => 'Per Year',
        ];
    }
}
 
