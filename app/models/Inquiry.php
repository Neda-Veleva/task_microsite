<?php

class Inquiry extends Eloquent {
    
    protected $table = 'inquiries';
    protected $fillable = [];
    
    /** 
     * Relationship
     */
    public function user() {
        return $this->belongsTo('User');
    }
    
    //Validation New Inquiry
    public static $rules = array(
        'email' => 'required',
        'subject' => 'required',
        'content' => 'required',       
    );

    public static function validate($input) {
        return Validator::make($input, static::$rules);        
    }
    
    public static function saveInquiry($input) {
        $inquiry = new Inquiry();
        $inquiry->name = Input::get('name');
        $inquiry->family = Input::get('family');
        $inquiry->email = Input::get('email');
        $inquiry->subject = Input::get('subject');
        $inquiry->content = Input::get('content');
        $inquiry->save();
    }
}