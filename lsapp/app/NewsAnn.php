<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsAnn extends Model
{
    // Table Name
    protected $table = 'news_anns';
    // Primary Key
    public $primaryKey = 'ann_id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}