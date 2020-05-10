@extends('layouts.app')

@section('content')
  
  <div class="container">
    <div class="row">
      <div class="col-md-12 pt-4 pb-4">
        <h1 class="text-center ">Our Contact Information</h1>
          <div class="row">
            <div class="col-md-4 text-center">
              <span style="font-size:2.5rem; color:Dodgerblue;"><i class="fas fa-map-marker-alt"></i></span><br>  Kilagal, Kathnamdu, Bagmati-44600, Nepal
            </div>
            <div class="col-md-4 text-center">
            <span style="font-size:2.5rem; color:Dodgerblue;">
              <i class="far fa-envelope-open"></i></span><br>
                info@techloopers.com
            </div>
            <div class="col-md-4 text-center">
              <span style="font-size:2.5rem; color:Dodgerblue;">
                <i class="fas fa-mobile-alt"></i></span><br>
                  +977 1 9841-681463, 9841-681461
            </div>
          </div>
      </div>
    </div>
  </div>

  <h1>Get in touch</h1>
  <form method="post" action="{{ route('contact-form-submit') }}">
    @csrf
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="name" >
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="email" >
      <small id="email" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="subject">Subject</label>
      <input type="text" class="form-control" name="subject" id="subject" aria-describedby="subject"  >
    </div>
  <div class="form-group">
    <label for="message">Your Message</label>
    <textarea class="form-control" name="message" id="message" rows="3" ></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Reach out to us!</button>
</form>
@endsection
