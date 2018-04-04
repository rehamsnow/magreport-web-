<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
        // Table Name
        protected $table = 'inc_reports';
        // Primary Key
        public $primaryKey = 'rep_id';
        // Timestamps
        public $timestamps = true;
    
        public function inc_categories(){
            return $this->belongsTo('App\IncCategory');
}
}