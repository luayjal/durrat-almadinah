<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'mobile'=>'required',
            'project' => 'required|in:درة تبوك,درة المدينة المنورة',
            'beneficiary'=>'required|in:نعم,لا'
        ],[
            'required' => 'هذا الحقل مطلوب '
        ]);

        Subscriber::create($request->all());
        return redirect()->back();
        
    }

  
}
