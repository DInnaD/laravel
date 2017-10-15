<div class="form-group">
    {!!Form::label('name_compaign', 'Name') !!}
    {!!Form::text('name_compaign', null, ['class' => 'form-control']) !!}

    {!!Form::label('id_template', 'Template') !!}
    {!!Form::select('id_template', Template::latest()->pluck('id_template', 'name_template'))!!}

    {!!Form::label('id_bunch', 'Bunch') !!}
    {!!Form::select('id_bunch', Bunch::latest()->pluck('id_bunch', 'name_bunch'))!!}
    
    {!!Form::label('description_compaign', 'Description') !!}
    {!!Form::text('description_compaign', null, ['class' => 'form-control']) !!}

</div>

