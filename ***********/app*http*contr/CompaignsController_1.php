<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompaignsRequest;
use App\Http\Requests\TemplateRequest;
use App\Http\Requests\BunchRequest;
use App\Compaigns;
use App\Template;
use App\Bunch;
use Illuminate\Http\Request;


class CompaignsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Compaigns $compaigns-????????///

    public function index(Compaigns $compaigns, Template $templates , Bunch $bunches)
    {
        //asc
       // $compaignses = $compaigns->orderBy('id_compaigns', 'desc')->get();

//        dd($compaignses);

//        return view('compaigns.index', ['compaignses' => $compaignses]);
        'buncheses' -> Bunch::latest();
        'templateses' -> Template::latest();
        'compaignses' -> Compaigns::latest()->paginate(10);
      
        return view('compaigns.compaigns_index', compact('buncheses', 'compaignses', 'templateses'));//bunch_id????????????
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dropdown
        return view('compaigns.compaigns_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Compaigns $compaigns, CompaignsRequest $request)
    {
        $compaigns->create($request->all());

        return redirect()->route('compaigns.index');
    }

        /**
     * Display the specified resource.
     *
     * TODO: $id -> $post
     *
     * @param  Compaigns  $post
     * @return \Illuminate\Http\Response
     */
    // beforsend  subject to from message
    public function show(Compaigns $compaigns)
    {
        return view('compaigns.compaigns_show', compact('compaigns'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   // Compaigns $compaigns or id
    public function edit(Compaigns $compaigns)
    {
       // $data = [
         //   'title' => 'Update info'

        //];
        return view('compaigns.compaigns_edit', compact('compaigns'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CompaignsRequest  $request
     * @param  Compaigns  $compaigns
     * @return \Illuminate\Http\Response
     */
    public function update(CompaignsRequest $request, Compaigns $compaigns)
    {
        $compaigns->update($request->all());
        return redirect()->route('compaigns.compaigns_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Compaigns  $compaigns
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compaigns $compaigns)
    {
        $compaigns->delete();

        return redirect()->route('compaigns.compaigns_index');
    }

       /**
     * Get the URL for the previous request.
     *
     * @param  mixed  $fallback
     * @return string
     *
    public function previous($fallback = false)
    {
        $referrer = $this->request->headers->get('referer');

        $url = $referrer ? $this->to($referrer) : $this->getPreviousUrlFromSession();

        if ($url) {
            return $url;
        } elseif ($fallback) {
            return $this->to($fallback);
        } else {
            return $this->to('/');
        }
    }*/

    /**
     * Get the previous URL from the session if possible.
     *
     * @return string|null
     *
    protected function getPreviousUrlFromSession()
    {
        $session = $this->getSession();

        return $session ? $session->previousUrl() : null;
    }*/
}

