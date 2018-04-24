@extends('layouts.template')

@section('header')
  <h2 class="title">Dashboard
    <a href="/newsann/create" class="btn btn-info" style="float: right">Create Post</a>
  </h2>
@endsection

@section('content')

                <div class="panel-body">
                    @if(count($news_anns) > 0)
                        <table class="table table-striped table-hover">
                            <tr class="bg-info">
                                <th>TITLE</th>
                                <th>CREATED AT</th>
                                <th>MANAGE</th>
                            </tr>
                             @foreach($news_anns as $news_anns)
                                <tr>
                                    <!--<td>
                                        <fieldset class="form-group">
                                            <input type="checkbox" id="checkbox">
                                            <label for="checkbox1"></label>
                                        </fieldset>
                                    </td>-->
                                    <td>{{$news_anns->ann_title}}</td>
                                    <td>{{$news_anns->created_at}}</td>
                                    <td>
                                        <a class="black-text" href="/newsann/{{$news_anns->ann_id}}"><i class="fa fa-eye">  Show</i></a></br>
                                        <a class="black-text" href="/newsann/{{$news_anns->ann_id}}/edit"><i class="fa fa-edit">  Edit</i></a></br>
                                    </td>
                                    <!--<td class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="/newsann" id="navbarDropdown" role="button" data-toggle="dropdown">Action <span class="caret"></span></a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <li>
                                                <a href="/newsann/{{$news_anns->ann_id}}" class="btn btn-info">Show</a>
                                            </li>
                                            <li>
                                                <a href="/newsann/{{$news_anns->ann_id}}/edit" class="btn btn-info">Edit</a>
                                            </li>
                                            <li style="float:unset">
                                                {!!Form::open(['action' => ['NewsAnnController@destroy', $news_anns->ann_id], 'method' => "NEWSANN"])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                                {!!Form::close()!!}
                                            </li>
                                            </ul>
                                    </td> -->
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>    
                    @endif
</div>
@endsection