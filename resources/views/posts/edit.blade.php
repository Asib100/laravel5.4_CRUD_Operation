@extends('posts.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="pull-left">
        <h3>Edit Post</h3>
      </div>
    </div>
  </div>

  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <strong>There were some problems with your input.</strong><br>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
<!--return 'asib';-->
  {!! Form::model($post, ['method'=>'PATCH','route'=>['posts.update', $post->id]])!!}
    @include('posts.form')
  {!! Form::close() !!}

@endsection