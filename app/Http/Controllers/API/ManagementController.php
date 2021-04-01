<?php

namespace App\Http\Controllers\API;

use App\DailyRecord;
use App\Http\Controllers\Controller;
use App\Http\Resources\DailyRecordResource;
use App\Http\Resources\InvResource;
use App\Http\Resources\UserResource;
use App\Investigation;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ManagementController extends Controller
{

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function admin()
    {
        return view('admin.admin');
    }


    public function dailyrecord()
    {
        return DailyRecordResource::collection(DailyRecord::latest()->paginate(1));
    }

    public function profile()
    {
        return UserResource::collection(Profile::latest()->paginate(1));
    }

    public function inv()
    {
        return InvResource::collection(Investigation::latest()->paginate(1));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
