<?php

class PageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $pages = Page::all();
            return View::make('pages.index')->with('pages', $pages);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('pages.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $input = Input::all();
            
            $page = new Page();
            
            $validator = Page::validate($input);
            if($validator->fails()){
                return Redirect::to('admin/page/create')->withErrors($validator)->withInput()->with('message', 'Incorrect data!');
            } else {
                Page::newPage($input);
                return Redirect::to('/admin/page/index')->with('message', 'Create new page!');
            }   
            
            
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $page = Page::find($id);
            
            return View::make('pages.show')->with('page', $page);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $page = Page::find($id);
            
            return View::make('pages.edit')->with('page', $page);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            $input = Input::all();                                
            
            $validator = Page::validate($input);
            if($validator->fails()){
                return Redirect::to('/admin/page/{id}/edit')->withErrors($validator)->withInput()->with('message', 'Incorrect data!');
            } else {
                $page_id = Page::find($id);
                Page::updatePage($input, $page_id);
                return Redirect::to('/admin/page/index')->with('message', 'Edit page!');
            }

	}

}
