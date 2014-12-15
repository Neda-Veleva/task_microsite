<?php

class Page extends Eloquent {
    
    protected $table = 'pages';
    protected $fillable = [];
    /** 
     * Relationship
     */
    public function user() {
        return $this->belongsTo('User');
    }
    
}