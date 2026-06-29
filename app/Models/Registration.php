<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'nama',
        'no_telepon',
        'nomor_id',
        'biaya_langganan',
        'alamat',
        'follow_ig',
        'follow_tiktok',
        'review_gmaps',
        'bukti_ig',
        'bukti_tiktok_jernih',
        'bukti_tiktok_creatif',
        'bukti_gmaps',
    ];

    protected $casts = [
        'follow_ig'    => 'boolean',
        'follow_tiktok' => 'boolean',
        'review_gmaps'  => 'boolean',
    ];
}
