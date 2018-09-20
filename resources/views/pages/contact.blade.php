@extends('main')
@section('title', '| Contact')
@section('content')
    <div class="row">
        <div class="col-md-12">
            
  <h1>Contact Me</h1>
  <form action="{{url('contact')}}" methos="POST">
    {{csrf_field()}}
  <div class="form-group">
    <label name="email">Email address</label>
    <input type="email" name="email" id="email" class="form-control">
   
  </div>
  <div class="form-group">
    <label name="subject">Subject</label>
    <input type="subject" name="subject" class="form-control">
   
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Message</label>
    <textarea class="form-control" id="message" name="message"></textarea>
  </div>
  <input type="submit" value="Send Message" class="btn btn-success">
</form> 
  
 
</div>
        </div>
@endsection('content')