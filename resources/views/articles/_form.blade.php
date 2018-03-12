<div class="form-group">
      {!! Form::label('title','Tiêu đề',['class' => 'control-label']) !!}
      {!! Form::text('title', null, ['id'=>'title', 'class' => 'form-control' ]) !!}
    </div>
    <div class="form-group">
      {!! Form::label('content','Nội dung',['class' => 'control-label']) !!}
      {!! Form::text('content', null, ['id'=>'content', 'class' => 'form-control' ]) !!}
    </div>

    <div class="form-group">
      {!! Form::submit($button_name, ['class' => 'btn btn-primary'])!!}
    </div>