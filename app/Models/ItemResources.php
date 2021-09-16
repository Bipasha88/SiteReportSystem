<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemResources extends Model
{
    use HasFactory;

    public function inspectedItem()
    {
        return $this->belongsTo(InspectedItem::class);
    }
}
