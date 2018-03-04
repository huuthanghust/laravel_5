@extends ('layouts.master')
@section ('head.title')
Tao moi bai viet
@stop
@section ('body.content')
<div class="row">
     <div class="col-sm-6 col-sm-offset-3">
          
<form method="POST" action="{{route('article.store')}}">
  <input type="hidden" name="_token" value="{{csrf_token() }}">
  <div class="form-group">
    <label for="title">Tiêu đề</label>
    <input type="title" class="form-control" id="title"\ placeholder="Tiêu đề bài viết">
  </div>
  <div class="form-group">
    <label for="title">Nội dung bài viết</label>
    <input type="form-text" class="form-control" id="title" placeholder="Nhập nội dung bài viết">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
     </div>
</div>
@stop