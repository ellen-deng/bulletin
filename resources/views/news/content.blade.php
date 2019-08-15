<!-- news content -->
@extends('layout.main')
@section('content')

<table class="table table-hover">
    <tbody>
        <tr>
            <td><h2>{{$news->title}}</h2></td>
            <td></td>

            @if (Session::has('member_id')&&(Session::get('rank')==1))
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
        <tr>
            <td colspan="3">{{$news->category['category_name']}}</td>
        </tr>
        <tr>
            <td colspan="3">{{$news->updated_at}}</td>
        </tr>
        <tr>
            <td colspan="3"><img src="/123.jpg" alt=""><p>{{$news->content}}</p></td>
        </tr>
    </tbody>
</table>

@endsection

