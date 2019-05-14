@extends('layout')

@section('content')
<div class="container">
    <div class="row person_row shadow-sm">
        <div class="col-sm-12 col-md-9 padding-out contactsInfo">
            <div style="margin-top:7%;">
                <h3>Kontakt</h3>
                <p><b>JOLIE-Kosmetik - Institut de Beauté</b><br>Steinenvorstadt Nr. 8<br>4051 Basel</p>
                <p><b>Elena Brezger:</b><br>E-Mail: joliekosmetik1@gmail.com<br>Tel. 0041 61 281 53 73<br>Fax: 0041 61 271 96 40</p>    
            </div>

            <script type="text/javascript">
                (function() {
                    if (window.pluso)
                        if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso == undefined) {
                        window.ifpluso = 1;
                        var d = document,
                            s = d.createElement('script'),
                            g = 'getElementsByTagName';
                        s.type = 'text/javascript';
                        s.charset = 'UTF-8';
                        s.async = true;
                        s.src = ('https:' == window.location.protocol ? 'https' : 'http') + '://share.pluso.ru/pluso-like.js';
                        var h = d[g]('body')[0];
                        h.appendChild(s);
                    }
                })();
            </script>
            <div class="pluso" data-background="#fff" data-options="big,round,line,horizontal,nocounter,theme=04" data-services="facebook,twitter,livejournal,linkedin,vkontakte,bookmark,email" data-url="http://salon.com" data-title="Салон"></div>
        </div>
        <div class="col-sm-12 col-md-3 padding-out">
            <img class="contactsImage" src="{{ asset('img/Basispflege .jpg')}}" alt="person">
        </div>


        <div class="col-sm-12 col-md-12 padding-out">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1346.3604673452794!2d7.587630393442471!3d47.55375986704126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4791b9ad1425175b%3A0x1655e31ba697b6ea!2zU3RlaW5lbnZvcnN0YWR0IDgsIDQwNTEgQmFzZWwsINCo0LLQtdC50YbQsNGA0LjRjw!5e0!3m2!1sru!2sru!4v1557747988403!5m2!1sru!2sru" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>


        <div class="col-sm-12 col-md-12 padding-out" style="text-align:center">
            <h3>Unser Salon:</h3>
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
