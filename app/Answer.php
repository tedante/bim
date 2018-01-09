<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TestAnswer
 *
 * @package App
 * @property string $question
 * @property string $option
 * @property tinyInteger $correct
*/
class Answer extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'name', 'question_id', 'option_id', 'correct'];

    public static function boot()
    {
        parent::boot();

        // TestAnswer::observe(new \App\Observers\UserActionsObserver);
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
