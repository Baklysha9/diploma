<template>
 <form onSubmit="return false;">
          <div class="form-group">
            <label for="email">Your name:</label>
            <input type="text" class="form-control" id="name" placeholder="Mia" v-model="name">
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
            console.log(response);
            this.services = response.data;
            });
            $('#phone').mask("+7(999) 999-99-99");
            console.log('form loaded');
        },
        methods: {
        sendForm: function() {
            let serviceOne = $('.select:eq(0) option:selected').text();
            let serviceTwo = $('.select:eq(1) option:selected').text();
            let serviceThree = $('.select:eq(2) option:selected').text();
            console.log(serviceOne);
            console.log(serviceTwo);
            console.log(serviceThree);
            let postBody = {
                name : this.name,
                phone : this.phone,
                serviceOne: serviceOne,
                serviceTwo: serviceTwo,
                serviceThree: serviceThree,
            }
            console.log(postBody);
            const str = JSON.stringify(postBody);
            axios.post('/sendEmail', str)
            .then((response) => {
            console.log(response);
            })
            .catch((error) => {
            console.log(error);
            });
        },
        addService: function() {
            if ($('.select').length < 3) {
                let clone = $('.select:last').clone();
                $(clone).css('margin-left', '0');
                $(clone).css('margin-bottom', '10px');
                $('.added').prepend(clone);
            }      
        }
        }
    }
</script>
