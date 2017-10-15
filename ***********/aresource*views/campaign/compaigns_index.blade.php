@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Compaigns</div>

                    <div class="panel-body">
                        {{ link_to_route('compaign.compaigns_create', 'create', null, ['class' => 'btn btn-info btn-xs']) }}
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="5%">id</th>

                                <th width="25%">Name</th>        
                                <th width="25%">Template</th>
                                <th width="50%">Bunch</th>
                                <th width="50%">Description</th>
                                <th width="10%">Status</th>
                                <th width="10%">Time</th>
                                <th width="20%">Action</th>
                            </tr>
                            <tr>
                                <td colspan="7" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                             @if( ! $compaigns->isEmpty() )
                            <!--///////////////////////////////-->
                        @foreach ($compaigns->templates->bunches as $model)
                            <tr>
                                <td>{{$model->id_compaign}}</td>

                                <td>{{$model->name_compaign}}</td>
                                <td>{{$model->template_id}}</td>
                                <td>{{$model->bunch_id}}</td>
                                <td>{{$model->description_compaign}}</td>
                                <td>{{$model->status_compaign}}</td>
                                
                                <td>{{$model->created_at}}</td>
                                <td>{{$model->created_by}}</td>
                                
                                <!--??????????????????????????????????created_at_compaigns-->
                                <td>
                                    {{Form::open(['class' => 'confirm-delete', 'route' => ['compaign.destroy', $model->id_compaign], 'method' => 'DELETE'])}}
                                    {{ link_to_route('compaign.compaigns_show', 'send', [$model->id_compaign], ['class' => 'btn btn-info btn-xs']) }} |
                                    {{ link_to_route('compaign.compaigns_edit', 'edit', [$model->id_compaign], ['class' => 'btn btn-success btn-xs']) }} |
                                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                    {{Form::close()}}
                                </td>

                            </tr>
                        @endforeach
                        <div class="text-center">
                            { !! $scompaigns->render() !!}

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
