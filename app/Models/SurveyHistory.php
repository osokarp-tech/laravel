<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survey;

class SurveyHistory extends Model
{
    use HasFactory;
    protected $table = 'survey_histories';
    protected $primaryKey = 'id_survey_history';

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
