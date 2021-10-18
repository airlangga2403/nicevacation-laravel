<?php

namespace App\Http\Controllers;

use App\Models\redirects;
use Illuminate\Http\Request;

class RedirectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('home');
    }

    public function flights()
    {
        return view('flights');
    }
    
    public function hotel()
    {
        return view('hotel');
    }

    public function car()
    {
        return view('car');
    }

    
    public function cart()
    {
        return view('cart');
    }

    
    public function login()
    {
        return view('login');
    }

    
    public function register()
    {
        return view('register');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\redirects  $redirects
     * @return \Illuminate\Http\Response
     */
    public function show(redirects $redirects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\redirects  $redirects
     * @return \Illuminate\Http\Response
     */
    public function edit(redirects $redirects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\redirects  $redirects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, redirects $redirects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\redirects  $redirects
     * @return \Illuminate\Http\Response
     */
    public function destroy(redirects $redirects)
    {
        //
    }
}
