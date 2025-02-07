@extends('layout')

@section('content')
<div class="container">
    <div class="row person_row shadow-sm">
        <div class="col-sm-12 col-md-9 padding-out contactsInfo">
            <div style="margin-top:7%;">
                <h3>Kontakts</h3>
                <p><b>JOLIE-Kosmetik - Institut de Beauté</b><br>Steinenvorstadt Nr. 8<br>4051 Basel</p>
                <p><b>Elena Brezger:</b><br>E-Mail: joliekosmetik1@gmail.com<br>Tel. 0041 61 281 53 73<br>Fax: 0041 61 271 96 40</p>    
            </div>

            <a href ='https://www.instagram.com/?hl=ru'><img class="icon" src='img/instagram-256x256.png'></a>
            <a href ='https://www.facebook.com'><img class="icon" src='img/facebook.png'></a>
            <a href="tel:+1234567890"><img class="icon" src='img/whatsapp.png'></a>
        </div>
        <div class="col-sm-12 col-md-3 padding-out">
            <img class="contactsImage" src="{{ asset('img/basispflege.jpg')}}" alt="person">
        </div>


        <div class="col-sm-12 col-md-12 padding-out">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1346.3604673452794!2d7.587630393442471!3d47.55375986704126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791b9ad1425175b%3A0x1655e31ba697b6ea!2zU3RlaW5lbnZvcnN0YWR0IDgsIDQwNTEgQmFzZWwsINCo0LLQtdC50YbQsNGA0LjRjw!5e0!3m2!1sru!2sru!4v1557747988403!5m2!1sru!2sru" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


        <div class="col-sm-12 col-md-12 padding-out" style="text-align:center">
            <h3 class="headKontact">Unser Salon:</h3>
        </div>
        <div class="col-sm-12 col-md-6 padding-out">
        <img style="width:100%;" src="{{ asset('img/contacts.jpg')}}" alt="photo salon">
        </div>
        <div class="col-sm-12 col-md-6 padding-out">
        <img style="width:100%;" src="{{ asset('img/kommunikationsfotografie-13.jpg')}}" alt="photo salon">
        </div>
       

    </div>
</div>
@endsection
