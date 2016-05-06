<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\profile;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        if(Auth::check()) {
            $profile = profile::paginate(15);

            return view('profile.index', compact('profile'));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        return view('profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        
        profile::create($request->all());

        Session::flash('flash_message', 'profile added!');

        return redirect('profile/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $profile = profile::findOrFail($id);

        return view('profile.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        if(Auth::check() && $id == Auth::id()) {
            $profile = profile::findOrFail($id);

            return view('profile.edit', compact('profile'));
        } else {
            return redirect('/login');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        if(Auth::check() && $id == Auth::id()) {
            $profile = profile::findOrFail($id);
            $profile->update($request->all());

            \Session::flash('flash_message','Office successfully added.');
            return redirect('/profile/'.$id.'/edit');

        } else {
            redirect('/login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        profile::destroy($id);

        Session::flash('flash_message', 'profile deleted!');

        return redirect('profile/profile');
    }
}
