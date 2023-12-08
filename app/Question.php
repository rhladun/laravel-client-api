<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{


    protected $fileble = ['title', 'body'];

   /* Get the user that owns the Question
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */

    public function user(): BelongsTo  {
        return $this->belongsTo(User::class, 'questions_user_id_foreign');
    }

}
