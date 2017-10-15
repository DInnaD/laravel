<?php

namespace App\Http\Controllers;

use App\Http\Requests\BunchRequest;
use App\Bunch;
use App\Http\Requests\SubscriberRequest;
use App\Subscriber;
use Illuminate\Http\Request;

class BunchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Post $post-????????///

    public function index(Bunch $bunch, Subscriber $subscriber)
    {
        //asc
       $bunches = $bunch->orderBy('id_bunch', 'desc')->get();
          
        //'bunches' -> Bunch::latest()->paginate(10);
        // 'subscribers' -> Subscriber::latest();
         return view('bunch.bunches_index', compact('bunches', 'subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bunch.bunches_create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Bunch $bunch, BunchRequest $request)
    {
        $bunch->create($request->all());

        return redirect()->route('bunch.bunches_index');
    }

    /**
     * Display the specified resource.
     *
     * TODO: $id -> $bunch
     *
     * @param  Bunch  $bunch
     * @return \Illuminate\Http\Response
     */
    public function show(Bunch $bunch)
    {
        return view('bunch.bunches_show', compact('bunch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   // Post $bunch or id
    public function edit(Bunch $bunch)
    {
       // $data = [
         //   'title' => 'Update info'

        //];
        return view('bunch.bunches_edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  BunchRequest  $request
     * @param  Bunch  $bunch
     * @return \Illuminate\Http\Response
     */
    public function update(BunchRequest $request, Bunch $bunch)
    {
        $bunch->update($request->all());
        return redirect()->route('bunch.bunches_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Bunch  $bunch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bunch $bunch)
    {
        $bunch->delete();

        return redirect()->route('bunch.bunches_index');
    }
}
