<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemResources extends Model
{
    use HasFactory;

    protected $fillable = [
        'inspected_item_id',
        'resource_url',
        'thumbnail_url',
        'resource_type',
        'created_by',
        'updated_by',
    ];

    public function inspectedItem()
    {
        return $this->belongsTo(InspectedItem::class);
    }
}
