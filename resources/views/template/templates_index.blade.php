@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <!--Templates-->
                    <div class="panel-heading">Templates</div>

                    <div class="panel-body">
                    <!--templates.templates_   , templates_-->
                        {{ link_to_route('template.templates_create', 'create', null, ['class' => 'btn btn-info btn-xs']) }}
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                            <!--95%-->
                                <th width="5%">id</th>
                                <th width="20%">Name</th>
                                <th width="25%">Content</th>
                                <th width="15%">Time</th>
                                <!--Actions-->
                                <th width="30%">Actions</th>
                            </tr>
                            <tr>
                            <!--colspan="4" id not-->
                                <td colspan="4" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @if( ! $templates->isEmpty() )
                        <!--///////////////////////////////-->      
                            <!--templates-->
                        @foreach ($templates as $model)
                            <tr>
                             <!--_templates-->
                                <td>{{$model->id_template}}</td>
                                <td>{{$model->name_template}}</td>
                                <td>{{$model->content_template}}</td>                                
                                <td>{{$model->created_at}}</td>
                                <td>{{$model->created_by}}</td>
                                <!--??????????????????????????_templates-->
                                <td>
                                    {{Form::open(['class' => 'confirm-delete', 'route' => ['template.destroy', $model->id_template], 'method' => 'DELETE'])}}
                                    {{ link_to_route('template.templates_show', 'info', [$model->id_template], ['class' => 'btn btn-info btn-xs']) }} |
                                    {{ link_to_route('template.templates_edit', 'edit', [$model->id_template], ['class' => 'btn btn-success btn-xs']) }} |
                                    {{Form::button('Delete', ['class' => 'btn btn-danger btn-xs', 'type' => 'submit'])}}
                                    {{Form::close()}}
                                </td>

                            </tr>
                        @endforeach
                        <div class="text-center">
                            { !! $template->render() !!}

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
