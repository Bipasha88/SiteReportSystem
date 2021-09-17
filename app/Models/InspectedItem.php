<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectedItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'resource_url',
        'thumbnail_url',
        'resource_type',
        'report_id',
        'created_by',
        'updated_by',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }

    public function itemResources()
    {
        return $this->hasMany(ItemResources::class);
    }
}
