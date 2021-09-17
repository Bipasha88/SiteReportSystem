<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_id',
        'version',
        'published_at',
        'resource_url',
        'dropbox_url',
        'created_by',
        'updated_by',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
