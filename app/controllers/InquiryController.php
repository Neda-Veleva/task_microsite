<?php

class InquiryController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {   
        $inquiries = Inquiry::all();
        return View::make('inquiry.index')->with('inquiries', $inquiries);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('inquiry.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $inquiry = new Inquiry();
        $validator = Inquiry::validate($input);
        if($validator->fails()){
            return Redirect::to('/inquiries')->withErrors($validator)->withInput()->with('message', 'Incorrect data!');
        } else {
            Inquiry::saveInquiry($input);
            return Redirect::to('/inquiries');
        }

    }

}
