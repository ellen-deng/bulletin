<!-- category edit -->
@extends('layout.main')
@section('content')

<form method="post" action="/category/{{$category->category_id}}" class="form-horizontal">
    @csrf
    @method('PUT')
    <fieldset>
        <!-- Form Name -->
        <legend></legend>
        <input type="hidden" id="member" name="member" value="{{Session::get('member_id')}}">

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="category">category name:</label>
            <div class="col-md-4">
                <input id="category" name="category" value="{{$category->category_name}}" type="text" placeholder="" class="form-control input-md" >
            </div>
        </div>

        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="okOrCancel"></label>
            <div class="col-md-8">
                <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-success" value="OK">OK</button>
                <button type="submit" id="okOrCancel" name="okOrCancel" class="btn btn-danger" value="Cancel">Cancel</button>
            </div>
        </div>
    </fieldset>
</form>

@endsection
