@extends('main')
@section('title','|View Post')
@section('content')
<div class="row">
	<div class="col-md-8">
<h1>{{$post->title}}</h1>
<p class="lead">{{$post->body}}</p>
</div>
<div class="col-md-4">
<div class="well">
	<div class="col-md-4">
        <dl class="dl-horizontal">
            <dt>Url</dt>
            <p><a href="{{ url($post->slug) }}">{{url($post->slug)}}</a></p>
        </dl>
        <dl class="dl-horizontal">
        	<dt>Created at</dt>
        	<dd>{{date('M j,Y H:i',strtotime($post->created_at))}}</dd>
        </dl>
        <dl class="dl-horizontal">
        	<dt>Last Updated at</dt>
        	<dd>{{date('M j,Y H:i',strtotime($post->updated_at))}}</dd>
        </dl>
        <hr>
        <div class="row">
        <div class="col-sm-6">
        	{!!Html::LinkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary'))!!}  	
        </div>
        <div class="col-sm-6">
                {!!Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!}
                 {{Form::submit('Delete',array('class'=>'btn btn-danger'))}}
        	{!!Form::Close()!!}
        </div>		
        </div>
        <div class="row">
                    <div class="col-md-12 ml-23">
                        {{ Html::linkRoute('posts.index', '<< See All Posts', array(), ['class' => 'btn btn-outline-secondary']) }}
                    </div>
                </div>
</div>
</div>
</div>
</div>
</div>
@endsection