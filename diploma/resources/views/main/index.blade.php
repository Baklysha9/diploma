@extends('layout')

@section('content')
  <div class="container">
    <div class="row person_row shadow-sm">
      <div class="col-sm-12 col-md-6">
        <img src="{{ asset('img/businessportrait-basel-natascha-jansen.jpg')}}" alt="person" class="person_main">
      </div>
      <div class="col-sm-12 col-md-6 person_content ">
        <h1 class="">Welcome! Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
        <p class="">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis totam quis quae nesciunt blanditiis! Possimus iste esse enim provident, nesciunt accusantium molestias perferendis vel ipsam dolorum, quod eligendi culpa deserunt.</p>
       <mainform></mainform>
      </div>
    </div>
  </div>
  <slider></slider>
@endsection