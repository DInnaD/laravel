<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Template $post-????????///

    public function index(Template $template)
    {
        //asc
        $templetes = $templete->orderBy('id_template', 'desc')->get();
//'subscribers' -> Subscriber::latest()->paginate(10);
        return view('template.templates_index', compact('templates'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templete.templates_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Template $templete, TemplateRequest $request)
    {
        $templete->create($request->all());

        return redirect()->route('template.index');
    }

    /**
     * Display the specified resource.
     *
     * TODO: $id -> $template
     *
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        return view('template.templates_show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   // Template $template or id
    public function edit(Template $template)
    {
       // $data = [
         //   'title' => 'Update info'

        //];
        return view('template.templates_edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TemplateRequest  $request
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function update(TemplateRequest $request, Template $template)
    {
        $template->update($request->all());
        return redirect()->route('template.templates_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Template  $template
     * @return \Illuminate\Http\Response
     */
    public function destroy(Template $template)
    {
        $template->delete();

        return redirect()->route('template.templates_index');
    }
}
