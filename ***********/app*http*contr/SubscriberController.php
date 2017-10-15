<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Subscriber $subscriber-????????///

    public function index(Subscriber $subscriber)
    {
        //asc
        $subscribers = $subscriber->orderBy('id_subscriber', 'desc')->get();

//'subscribers' -> Subscriber::latest()->paginate(10);
        return view('subscriber.subscribers_index', compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subscriber.subscribers_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Subscriber $subscriber, SubscriberRequest $request)
    {
        $subscriber->create($request->all());

        return redirect()->route('subscriber.subscribers_index');
    }

    /**
     * Display the specified resource.
     *
     * TODO: $id -> $subscriber
     *
     * @param  Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        return view('subscriber.subscribers_show', compact('subscriber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   // Subscriber $post or id
    public function edit(Subscriber $subscriber)
    {
       // $data = [
         //   'title' => 'Update info'

        //];
        return view('subscriber.subscribers_edit', compact('subscriber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  SubscriberRequest  $request
     * @param  Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriberRequest $request, Subscriber $subscriber)
    {
        $subscriber->update($request->all());
        return redirect()->route('subscriber.subscribers_index');

    /**
     * Remove the specified resource from storage.
     *
     * @param  Subscriber  $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();

        return redirect()->route('subscriber.subscribers_index');
    }
}
