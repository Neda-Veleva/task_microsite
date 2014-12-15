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
    
    //Validation New Page
    public static $rules = array(
        'title' => 'required',
        'content' => 'required',        
    );

    public static function validate($input) {
        return Validator::make($input, static::$rules);        
    }


    //Create New Page
    public static function newPage($input) {
        
        $title = strtolower(Input::get('title'));
        $pieces = array_map('trim', explode(' ', $title));
        $slug = implode('-', $pieces);
        $page = new Page;
        $page->user_id = Auth::user()->id;
        $page->title = ucwords($title);
        $page->content = Input::get('content');
        $page->slug = $slug;
        $page->save();
    }

    public static function updatePage($input, $id){

        $title = strtolower(Input::get('title'));
        $pieces = array_map('trim', explode(' ', $title));
        $slug = implode('-', $pieces);

        $page = $id;
        $page->title = ucwords($title);
        $page->content = Input::get('content');
        $page->slug = $slug;
        $page->save();

    }
}