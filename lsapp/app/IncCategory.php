<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncCategory extends Model
{
        // Table Name
        protected $table = 'inc_categories';
        // Primary Key
        public $primaryKey = 'inc_id';
        // Timestamps
        //public $timestamps = true;
    
        public function inc_reports(){
            return $this->belongsTo('App\Reportr');
        }
}
