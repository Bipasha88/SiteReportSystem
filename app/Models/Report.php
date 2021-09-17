<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'job_id',
        'inspected',
        'started_at',
        'finished_at',
        'address',
        'inspected_by',
        'company',
        'status',
        'created_by',
        'updated_by'
    ];
    protected $dates = [ 'deleted_at' ];

    public function reportHistories()
    {
        return $this->hasMany(ReportHistory::class);
    }

    public function inspectedItems()
    {
        return $this->hasMany(InspectedItem::class);
    }
}
