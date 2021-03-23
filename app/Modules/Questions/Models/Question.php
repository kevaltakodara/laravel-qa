<?php

namespace App\Modules\Questions\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getUrlAttribute()
    {
        return route('question.show', $this->id);
    }

    public function getCreatedDateAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function getStatusAttribute()
    {
        if($this->answers > 0){
            if($this->best_answer_id){
                return 'answered-accepted';
            }

            return 'answered';
        }else {
            return 'unanswered';
        }
    }
}