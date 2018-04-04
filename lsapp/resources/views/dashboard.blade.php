@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Dashboard</h1>
                </div>

                <div class="panel-body">
                    <a href="/newsann/create" class="btn btn-primary">Create Post</a>   
                    <h2>News and Announcements</h2>
                    @if(count($news_anns) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>TITLE</th>
                                <th>LOCATION</th>
                                <th>CREATED AT</th>
                                <th>MANAGE</th>
                            </tr>
                             @foreach($news_anns as $news_anns)
                                <tr>
                                    <td>{{$news_anns->ann_title}}</td>
                                    <td>{{$news_anns->ann_location}}</td>
                                    <td>{{$news_anns->created_at}}</td>
                                    <td class="nav-item dropdown btn btn-link">
                                            <a class="nav-link dropdown-toggle" href="/newsann" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a href="/newsann/{{$news_anns->ann_id}}" class="btn btn-light">Show</a>
                                            <li>
                                                <a href="/newsann/{{$news_anns->ann_id}}/edit" class="btn btn-light">Edit</a>
                                            <li>
                                                {!!Form::open(['action' => ['NewsAnnController@destroy', $news_anns->ann_id], 'method' => "NEWSANN"])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!!Form::close()!!}
                                            </li>
                                            </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
