<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mounting;

class MountingHistory extends Model
{
    use HasFactory;
    protected $table = 'mounting_histories';
    protected $primaryKey = 'id_mounting_history';

    public function mounting()
    {
        return $this->belongsTo(Mounting::class);
    }
}
