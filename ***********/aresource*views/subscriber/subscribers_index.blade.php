@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Subscribers</div>

                    <div class="panel-body">
                        {{ link_to_route('subscriber.subscribers_create', 'create', null, ['class' => 'btn btn-info btn-xs']) }}
                        <div class="text-right"><i class="badge">{{$email_count_subscriber}}</i></div><br>
                        <hr>
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                            <!--95%-->
                                <th width="5%">id</th>
                                <th width="15%">First Name</th>
                                <th width="15%">Last Name</th>
                                <th width="20%">Email</th>
                                <th width="5%">Viewed</th>
                                <th width="5%">Unsubscrib</th>

                                
                                <th width="10%">Time</th>
                                <!--Actions-->
                                <th width="15%">Actions</th>
                            </tr>
                            <tr>
                            <!--colspan="4" id not-->
                                <td colspan="7" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                    @if( ! $subscribers->isEmpty() )        
                            
                        @foreach ($subscribers as $model)
                            <tr>
                             <!--_subscribers-->
                                <td>{{$model->id_subscriber}}</td>
                                

                                <td>{{$model->firstname_subscriber}}</td>
                                <td>{{$model->lastname_subscriber}}</td>
                                <td>{{$model->email_subscriber}}</td>
                                 <td>{{$model->viewed_subscriber}}</td>
                                <td>{{$model->unsubscriber_subscriber}}</td>
                                
                                <td>{{$model->created_at}}</td>
                                <td>{{$model->created_by}}</td>
                                <!--??????????????????????????????????created_at_subscribers-->
                                <td>
                                    {{Form::open(['class' => 'confirm-delete', 'route' => ['subscriber.destroy', $model->id_subscriber], 'method' => 'DELETE'])}}
                                    {{ link_to_route('subscriber.subscribers_show', 'info', [$model->id_subscriber], ['class' => 'btn btn-info btn-xs']) }} |
                                    {{ link_to_route('subscriber.subscribers_edit', 'edit', [$model->id_subscriber], ['class' => 'btn btn-success btn-xs']) }} |
                                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                    {{Form::close()}}
                                </td>

                            </tr>
                        @endforeach
                        <div class="text-center">
                            { !! $subscribers->render() !!}

                        </div>
                            }

                    @endif  
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
