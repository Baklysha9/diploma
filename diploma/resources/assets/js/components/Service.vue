<template>
<div>
 <div id ="servicePage" class="container shadow-sm"></div>
<div class="place-service">

<div v-for="service in services" class="card borderBox shadow-sm" style="width: 18rem;">
  <div class="card-body" >
    <h5 class="card-title titleCard">{{service.name}}</h5>
    <p class="card-text bodyCard">{{ service.description | truncate }}</p>
    <a href="#" class="btn btn-primary btnCard shadow-sm" :id="service.id" v-on:click="showCardInfo">Подробнее</a>
  </div>
</div>
</div>
</div>
</template>
<script>
    export default {
      data: function() {
        return {
          services: [],
          service: []
        }
      },
      filters: {
        truncate: function(value) {
        if (value.length > 120) {
          value = value.substring(0, 117) + '...';
        }
          return value
        }
      },
      mounted() {
        this.update();
      },
      methods: {
        update: function () {
          axios.get('/getServices').then((response) => {
            console.log(response);
            this.services = response.data;
          });
        },
        showCardInfo: function (e) {
          console.log('###',e.target.id);
          $('.place-service').css('opacity', 0.1);
          $('.serviceTitle').css('opacity', 0.1);
          $('.place-service').css('pointerEvents', 'none');
          $('.navbar').css('opacity', 0.1);
          $('.navbar').css('pointerEvents', 'none')  
          
          axios.get('/getService/'+e.target.id).then((response) => {
            console.log(response);
            this.service = response.data;
            $('#servicePage').addClass('servicePage');
            $('#servicePage').css('display', 'block');
            $('#servicePage').html('');
            let img = document.createElement('img');
            let h1 = document.createElement('h1');
            img.src = this.service.img;
            img.style.width = '100%';
            img.style.display = 'block';
            img.style.margin = '0 auto';

            $('#servicePage').html("<div class='row'><div class='col-sm-12 col-md-6 firstColum'></div><div class='col-sm-12 col-md-6 secondColum'></div></div>");
            $('.firstColum').append(img);
            document.querySelector('.secondColum').innerHTML += "<div class='servicePageInfo'><h1 style=''>"+this.service.name+"</h1><h4>Description:</h4><p>"+this.service.description+"</p>"+""+"<h4>Price:</h4><h4 id='price'><span>"+this.service.price+" ₣</span><br>(Preis pro Leistung oder pro Stunde)</h4><h4 style='margin-top:20px;'>Dauer des Verfahrens:</h4><h4 id='time'><span>"+this.service.count_time+" stunde</span> </h4>"+"<h4 style='margin-top:20px;font-size:24px;'>fertige Beispiele -> <a href ='https://www.instagram.com/?hl=ru'><img style='width:50px; height:50px; border-radius: 16px;' src='img/instagram-256x256.png'></a>"+"</div>";
            $('#servicePage').append("<h1 class='buttonClose'></h1>");

            // $('#servicePage').append(img);
            // $('#servicePage').append("<h1 class='buttonClose'></h1>");
            // document.getElementById('servicePage').innerHTML += "<div style='display:inline-block;vertical-align:top;width: 60%;text-align: center; margin-top:20px;'><h1 style=''>"+this.service.name+"</h1><h4>Description:</h4>"+this.service.description+"</h4>"+""+"<h4>Price:<br>"+this.service.price+"</h4></h4><h4 style='margin-top:20px;'>Time:<br>"+this.service.count_time+"</h4>"+"<h4 style='margin-top:20px;font-size:15px;'><a href ='#'><img style='width:150px; height:40px;' src='img/banki.jpg'></a>"+"</div>";


              document.querySelector('.buttonClose').addEventListener('click', function () {
              document.getElementById('servicePage').style.display ='none';
              document.querySelector('.place-service').style.opacity = 1;
               $('.serviceTitle').css('opacity', 1);
              document.querySelector('.place-service').style.pointerEvents = '';
               document.querySelector('.navbar').style.opacity = 1;
              document.querySelector('.navbar').style.pointerEvents = '';
      });

          }) 
          .catch(function (error) {
            console.log(error);
            $('.place-service').css('opacity', 1);
            $('.place-service').css('pointerEvents', '')  
          });
      }
    }
    }
</script>
