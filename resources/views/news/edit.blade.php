<!-- news edit -->
@extends('layout.main')
@section('content')

<form method="post" action="/news/{{$news->news_id}}" class="form-horizontal">
    @csrf
    @method("PUT")
    <fieldset>
        <!-- Form Name -->
        <legend></legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Title :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
            <div class="col-md-4">
                <input id="title" name="title" type="text" value="{{$news->title}}" placeholder="wesdsdsd" class="form-control input-md" required="">
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="category">category :</label>
            <div class="col-md-4">
                <select id="category" name="category" class="form-control">
                    @foreach ($category as $category)
                    <option value="{{$category->category_id}}" {{ ($news->category_id == $category->category_id) ? 'selected' : '' }}>
                    {{$category->category_name}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="content">content :&nbsp;</label>
            <div class="col-md-4">
                <textarea class="form-control" id="content" name="content" rows="10">{{$news->content}}</textarea>
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
