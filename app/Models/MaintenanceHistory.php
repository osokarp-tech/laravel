<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maintenance;

class MaintenanceHistory extends Model
{
    use HasFactory;
    protected $table = 'maintenance_histories';
    protected $primaryKey = 'id_maintenance_history';

    public function maintenance()
    {
        return $this->belongsTo(Maintenance::class);
    }
}
