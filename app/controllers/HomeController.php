<?php

class HomeController extends BaseController {

	public function home(){            
            $page = Page::find(1);
            return View::make('index')->with('page', $page);
	}
        
}
