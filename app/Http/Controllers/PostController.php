<?php

namespace App\Http\Controllers;
use App\Models\Myuser;
use App\Models\Mypost;
use App\Models\Mycomment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mypost = Mypost::all();
        
        $mycomment = Mycomment::all();
        
        $myuser = Myuser::all();

        $array = array('post' => $mypost, 'user' => $myuser,'comment' => $mycomment);

        return response()->json($array);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mypost = new Mypost();
        $mypost->user_id=$request->get('user_id');
        $mypost->content=$request->get('post_content');
        $mypost->save();

        $mycomment = Mycomment::all();

        $myuser = Myuser::all();

        $array = array('post' =>$mypost ,'comment' => $mycomment, 'user' => $myuser);

        return response()->json($array);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
