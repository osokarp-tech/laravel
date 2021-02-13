<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Troubleshoot;

class TroubleshootHistory extends Model
{
    use HasFactory;
    protected $table = 'troubleshoot_histories';
    protected $primaryKey = 'id_troubleshoot_history';

    public function troubleshoot()
    {
        return $this->belongsTo(Troubleshoot::class);
    }
}
