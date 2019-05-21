@extends('layout')

@section('content')
  <div class="container">
    <div class="row person_row shadow-sm">
      <div class="col-sm-12 col-md-6">
        <img src="{{ asset('img/businessportrait-basel-natascha-jansen.jpg')}}" alt="person" class="person_main">
      </div>
      <div class="col-sm-12 col-md-6 person_content ">
        <h1 class=""><span>Willkommen zurück!</span><br>Lorem ipsum dolor sit table for your potential.</h1>
        <p class="">Die Formularsteuerelemente von Bootstrap erweitern unsere Formatvorlagen für neu gestartete Formulare um Klassen. Verwenden Sie diese Klassen, um die benutzerdefinierten Anzeigen für ein konsistenteres Rendering in allen Browsern und Geräten zu aktivieren.
Stellen Sie sicher, dass Sie für alle Eingaben ein geeignetes Typattribut verwenden (z. B. E-Mail für E-Mail-Adresse oder Nummer für numerische Informationen), um neuere Eingabesteuerelemente wie E-Mail-Bestätigung, Nummernauswahl und mehr nutzen zu können.</p>
       <mainform></mainform>
      </div>
    </div>
  </div>
  <slider></slider>
@endsection