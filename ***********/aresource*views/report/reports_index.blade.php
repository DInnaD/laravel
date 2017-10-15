@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reports</div>

                    <div class="panel-body">
                        
                        <table class="table table-bordered table-responsive table-striped">
                            <tr>
                                <th width="25%">id</th>
                                <th width="20%">Status</th>
                                <th width="25%">Viewed</th>
                                <th width="25%">Unsubscribers</th>
                                
                            </tr>
                            <tr>
                                <td colspan="3" class="light-green-background no-padding" title="Create new template">
                                    <div class="row centered-child">
                                        <div class="col-md-12">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @if( ! $reports->isEmpty() ) 
                        @foreach ($reports->compaigns->subscribers as $model)
                            <tr>
                                <td>{{$model->id_report}}</td>

                                <td>{{$model->status_compaign}}</td>
                                <td>{{$model->viewed_subscriber}}</td>
                                <td>{{$model->unsubscriber_subscriber}}</td>

                                <td>{{$model->created_at}}</td>
                                <td>{{$model->created_by}}</td>
                                <td>
                                    
                                    {{ link_to_route('report.reports_show', 'info', [$model->id_report], ['class' => 'btn btn-info btn-xs']) }} 
                                    
                                </td>

                            </tr>
                        @endforeach
                        <div class="text-center">
                            { !! $reports->render() !!}

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
