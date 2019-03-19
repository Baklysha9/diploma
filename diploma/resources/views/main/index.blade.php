@extends('layout')

@section('content')

<div class="container">
<div class="row person_row">
  <div class="col-6 col-sm-6 col-md-6">
  <img src="{{ asset('img/businessportrait-basel-natascha-jansen.jpg')}}" alt="person" class="person_main shadow-sm">
  </div>
  <div class="col-6 col-sm-6 col-md-6 person_content shadow-sm">
  <h1 class="">Welcome! Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
  <p class="">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis totam quis quae nesciunt blanditiis! Possimus iste esse enim provident, nesciunt accusantium molestias perferendis vel ipsam dolorum, quod eligendi culpa deserunt.</p>
  
<form action="/action_page.php">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
</div>


<div class="container">
<div class="viewport">
<ul data-current='0' class='slidewrapper'>
    <li class="slide">slide-content 1</li>
    <li class="slide">slide-content 2</li>
    <li class="slide">slide-content 3</li>
    <li class="slide">slide-content 4</li>
    <li class="slide">slide-content 5</li>
    <li class="slide">slide-content 6</li>
    <li class="slide">slide-content 7</li>
    <li class="slide">slide-content 8</li>
    <li class="slide">slide-content 9</li>
    <li class="slide">slide-content 10</li>
    <li class="slide">slide-content 11</li>
</ul>   
</div>

  <!-- <div class="card-deck mb-3 text-center">
    <div class="card mb-6 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$0<small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div> -->
    
  </div>

@endsection