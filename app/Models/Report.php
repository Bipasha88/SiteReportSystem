<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function reportHistories()
    {
        return $this->hasMany(ReportHistory::class);
    }

    public function inspectedItems()
    {
        return $this->hasMany(InspectedItem::class);
    }
}
