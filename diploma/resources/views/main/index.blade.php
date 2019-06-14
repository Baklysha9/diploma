@extends('layout')

@section('content')
  <div class="container">
  <div class="modal" style="display:none;">
      <h2></h2>
      <p></p>    
      <img src="" alt="modal">
      </div>
    <div class="row person_row shadow-sm">
      <div class="col-sm-12 col-md-6">
        <img src="{{ asset('img/businessportrait-basel-natascha-jansen.jpg')}}" alt="person" class="person_main">
      </div>
      <div class="col-sm-12 col-md-6 person_content ">
        <h1 class=""><span>Willkommen zurück!</span><br>Warum ist es wichtig, rechtzeitig Hilfe von einer Kosmetikerin zu suchen?</h1>
        <p class="">Was bedeutet Zeit? Mit der Zeit bedeutet dies, dass Sie Ihre Haut nicht erst pflegen müssen, wenn Sie die ersten Anzeichen der Hautalterung bemerken, sondern viel früher. Sagen wir einfach, wenn Sie bereits 25 Jahre alt sind, können Sie sich eine gute Kosmetikerin aussuchen.
Regelmäßige Eingriffe wie Reinigung, Peeling, klassische und therapeutische Gesichtsmassage ermöglichen es Ihnen, die Durchblutung der Hautzellen zu stimulieren und in gutem Zustand zu halten. Durch die ständige Anwendung dieser Verfahren wird die Alterung der Haut verlangsamt und ihre Jugend und Schönheit bewahrt.</p>       
<mainform></mainform>
      </div>
    </div>
  </div>
  <slider></slider>
@endsection