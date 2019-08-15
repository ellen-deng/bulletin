<!-- news index -->
@extends('layout.main')
@section('content')
<!--
<iframe src="123" width="250px" height="150px" frameborder="0" scrolling="no"></iframe>
<img src="/123.jpg" alt="">
-->
<br>
<form method="post" action="/">
    @csrf
    <div class="col-md-4">
        <input id="keyword" name="keyword" type="search" placeholder="title keyword" class="form-control input-md">
    </div>
    <button type="submit" class="btn btn-md btn-default"><span class="glyphicon glyphicon-search"></span></button>
</form>
<br>
<table border="0" class="table table-hover">
    <thead>
        <tr>
            <th>Time</th>
            <th>Title</th>
            @if (Session::has('member_id')&&(Session::get('rank')==1))
            <th align="right"><a href="/news/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $news)
        <tr>
            <td>{{$news->updated_at."/".$news->category['category_name']}}</td>
            <td><h4><a href="/content/{{$news->news_id}}" >{{$news->title}}</a> </h4></td>

            @if ((Session::has('member_id'))&&(Session::get('rank')==1))
            <td>
                <span class="pull-right">
                <form method="post" action="/news/{{$news->news_id}}">
                    <a href="/news/{{$news->news_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> |
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
                </form>
                </span>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

