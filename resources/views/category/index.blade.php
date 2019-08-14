<!-- category index -->
@extends('layout.main')
@section('content')

<table border="0" class="table table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>Category</th>
            @if (Session::has('member_id'))
            <th align="right"><a href="/category/create" class="btn btn-md btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> 新增</a></th>
            @endif
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        @foreach ($category as $category)
        <tr>
            <td>{{$i++}}</td>
            <td><h4>{{$category->category_name}}</h4></td>

            @if (Session::has('member_id'))
            <td>
            <span class="pull-right">
            <form method="post" action="/category/{{$category->category_id}}">
                <a href="/category/{{$category->category_id}}/edit" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-pencil"></span> 修改</a> |
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
