<template>
 <form onSubmit="return false;">
          <div class="form-group">
            <label for="email">Your name:</label>
            <input type="text" class="form-control" id="name" required pattern="^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$" placeholder="Mia" v-model="name">
          </div>
          <div class="form-group">
            <label for="pwd">Your phone:</label>
            <input type="tel" class="form-control" id="phone" placeholder="+7(999) 999-99-99" v-model="phone">
          </div>
           <label for="pwd">Select service:</label>
          <div class="form-row">
           <div class="form-group col-md-8">
            <select class="form-control select" id="1">
                <option>Select here</option>
                <option v-for="service in services">{{ service.name }}</option>
            </select>
          </div>
          <div class="form-group col-md-4">
          <button type="submit" class="btn btn-primary buttonAddServiceForm" v-on:click="addService">Add services</button>      
          </div> 
          <div class="form-group col-md-12 added">
           <button type="submit" class="btn btn-primary" v-on:click="sendForm">Send</button>    
            <img src="img/91.gif" alt="load" style="display:none;" class="loadGif">
            <span class="notice" style="display:none;">Проверьте данные</span>
          </div> 
           </div>
        </form>
</template>
<script>
    export default {
        data: function() {
            return {
                name: '',
                phone: '',
                services: []
            }
        },
        mounted() {
            axios.get('/getServices').then((response) => {
            this.services = response.data;
            });
            jQuery(function($){
                $("#phone").mask("+7 (999) 999-9999");
            });
        },
        methods: {
        sendForm: function() {
            $('.loadGif').css('width','30px');
            $('.loadGif').css('display','inline-block');
            let serviceOne = $('.select:eq(0) option:selected').text();
            let serviceTwo = $('.select:eq(1) option:selected').text();
            let serviceThree = $('.select:eq(2) option:selected').text();
                let postBody = {
                name : this.name,
                phone : $('#phone').val(),
                serviceOne: serviceOne,
                serviceTwo: serviceTwo,
                serviceThree: serviceThree,
            }
            const str = JSON.stringify(postBody);
            let letters = "^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$";
            if (!(this.name.match(letters)) || (serviceOne == 'Select here') || $('#phone').val() == '') {
                this.notice();
                return false;
            }
            axios.post('/sendEmail', str)
            .then((response) => {
            if (response.status == 200) {
                 $('.modal').fadeIn('slow', function() {
                    $('.loadGif').css('display','none');
                    $('.row').css('opacity','0.3');
                    $('.modal').css('display', 'block');
                    $('.modal').addClass('servicePage shadow-sm');
                    $('.modal').css({'width':'400px','height':'300px','border-radius':'20px'});
                    $('.modal img').prop('src', 'img/done.png');
                    $('.modal img').css({'width': '100px','margin-left': '150px' });
                    $('.modal h2').text('Заявка отправлена!');
                    $('.modal p').css({'font-family':'Advent Pro','text-align':'center'});
                    $('.modal p').text('Ваша заявка принята и будет обработана в ближайщее время. Мы вам перезвоним через 5 минут.');
                    $('.modal h2').css({'text-align':'center','font-family':'Marck Script','margin-top':'55px'});
                }); 
                 setTimeout(function()
                 { 
                    $('.modal').fadeOut('slow', function() {
                         $('.modal').css('display', 'none');
                         $('.row').css('opacity','1');
                    });
                 },3000);
               }
            })
            .catch((error) => {
               this.notice();
            });
        },
        addService: function() {
            if ($('.select').length < 3) {
                let clone = $('.select:last').clone();
                $(clone).css('margin-left', '0');
                $(clone).css('margin-bottom', '10px');
                $('.added').prepend(clone);
            }      
        },
        notice: function() {
            $('.loadGif').css('display','none');
                $('.notice').css('display','inline-block');
                $('.notice').css('color','#ec9393');
                setTimeout(function() { 
                    $('.notice').fadeOut('slow', function() {
                         $('.notice').css('display','none');
                    });
                },1500);
        }
        }
    }
</script>
