<div class="form-group">
    {!!Form::label('name_bunch', 'Name') !!}
    {!!Form::text('name_bunch', null, ['class' => 'form-control']) !!}
    {!!Form::label('description_bunch', 'Description') !!}
    {!!Form::text('description_bunch', null, ['class' => 'form-control']) !!}
    {!!Form::label('id_subscriber', 'Subscriber') !!}
    {!!Form::select('id_subscriber', Subscriber::latest()->pluck('id_subscriber', 'mail_count_subscriber'))!!}
</div>

