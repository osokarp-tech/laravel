<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\SurveyHistory;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'survey';
    protected $primaryKey = 'survey_id';

    public function survey_histories()
    {
        return $this->hasMany(SurveyHistory::class);
    }
}
