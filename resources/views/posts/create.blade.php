@extends('main')
@section('title','|Create New Post')
@section('stylesheets')
{!!Html::style('css/parsley.css')!!}
@endsection
@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
<h1>Create New Post</h1>
{!! Form::open(array('route'=>'posts.store','data-parsley-validate'=>'','files' => true)) !!}
  {{Form::label('title', 'Title:')}}

  {{Form::text('title',null,array('class'=>'form-control','required' => '',  'maxlength' => '255'))}}
  {{ Form::label('slug', 'Slug:') }}
  {{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255') ) }}
   {{Form::label('body','Body:')}}
   {{Form::textarea('body',null,array('class'=>'form-control'))}}
   {{ Form::label('featured_img', 'Upload Featured Image') }}
   {{ Form::file('featured_img') }}
   {{Form::submit('Create Post',array('class'=>'btn btn-success btn-lg btn-block'))}}
{!! Form::close() !!}
</div>
</div>
@endsection
@section('scripts')
{!!Html::script('js/parsley.min.js')!!}
@endsection