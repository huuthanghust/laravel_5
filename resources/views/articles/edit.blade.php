@extends ('layouts.master')
@section ('head.title')
Chỉnh sửa bài viết 
@stop
@section ('body.content')
<div class="row">
     <div class="col-sm-6 col-sm-offset-3">
</form>
    {!! Form::model($article,[
        'route'=>['article.update',$article->id], 'method' => 'PUT', 
        'class' => 'form - horizontal'
      ]) !!}
    @include('articles._form', ['button_name' => 'Update'])
    {!! Form::close()!!}
     </div>
    }
</div>
@stop