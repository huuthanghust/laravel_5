@extends ('layouts.master')
@section ('head.title')
Tao moi bai viet
@stop
@section ('body.content')
<div class="row">
     <div class="col-sm-6 col-sm-offset-3">
</form>
    {!! Form::open([
        'route'=>['article.store'], 'method' => 'POST', 
        'class' => 'form - horizontal'
      ]) !!}
    @include('articles._form', ['button_name' => 'Create'])
    {!! Form::close()!!}
     </div>
    }
</div>
@stop