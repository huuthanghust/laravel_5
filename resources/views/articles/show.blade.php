@extends ('layouts.master')
@section ('head.title')
Tieu de bai viet
@stop
@section ('body.content')
     <div class="container">
          <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                    <a href="{{url('/')}}" class="btn btn-link">
                         <span class="glyphicon glyphicon-chevron-left"></span> Back to home
                    </a>
               </div>
          </div>

          <div class="row">
               <div class="col-sm-6 col-sm-offset-3">
                    <h2>
                         {{$article->title}}
                    </h2>
                    <p>{{$article->content}}</p>
                    
               </div>
          </div>
         

     </div>
@stop