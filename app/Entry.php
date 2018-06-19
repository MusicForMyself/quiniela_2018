<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'entries';
    
    protected $fillable = ["selection", "user_id", "created_at", "uploaded_at"];
    
}
