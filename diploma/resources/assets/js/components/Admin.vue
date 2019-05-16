<template>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4">
            <h3>Количество зарегестрированных пользователей: {{countUser}}</h3>
        </div>
        <div class="col-sm-12 col-md-4">
            <h3>Количество заявок с сайта: {{countOrder}}</h3>
        </div>
        <div class="col-sm-12 col-md-4">
            <h3>Количество услуг на сайте: {{countServices}}</h3>
        </div>
        <br>
        <br>
        <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Time</th>
                    <th scope="col">Control</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="service in services">
                    <th scope="row">{{service.id}}</th>
                    <td><textarea disabled="disabled" v-model="service.name"></textarea></td>
                    <td><textarea disabled="disabled" v-model="service.img"></textarea></td>
                    <td><textarea disabled="disabled" v-model="service.description"></textarea></td>
                    <td><textarea disabled="disabled" v-model="service.price"></textarea></td>
                    <td><textarea disabled="disabled" v-model="service.count_time"></textarea></td>
                    <td><button class="buttonEditServiceAdmin" :id="service.id" v-on:click="activateEdit">Edit</button></td>
                    <td><button class="buttonDeleteServiceAdmin" :id="service.id" v-on:click="deleteService">Delete</button></td>
                </tr>
            </tbody>
        </table>

        <button class="btn-primary buttonAddServiceAdmin" v-on:click="addService">Добавить</button>
    </div>
</div>
</template>
<script>
    export default {
        data: function() {
           return { 
            name: '',
            services: [],
            countUser: 0,
            countOrder:0,
            countServices:0
        }
      },
        mounted() {
            axios.get('/getServices').then((response) => {
                console.log(response);
                this.services = response.data;
                console.log(this.services.length);
                this.countServices = this.services.length;
            });
            axios.get('/admin-countUser').then((response) => {
                console.log(response);
                this.countUser = response.data;
            });
            console.log('Component mounted.');
        },
        methods: {
            activateEdit: function (e) {
              if ($(e.target).text() == 'Edit') {
                  let path = e.path[2];
                  let textarea = $(path).children().find('textarea');
                  textarea.prop('disabled', false);
                  $(e.target).text('Save');
              } else if ($(e.target).text() == 'Save') {
                  let path = e.path[2];
                  let textarea = $(path).children();
                  console.log($(textarea[0]).text());
                  let id = $(textarea[0]).text();
                  let t = $(path).children().find('textarea');
                  console.log(t);
                  let obj = {};
                  obj.id = id;
                  obj.name = $(t[0]).val();
                  obj.photo = $(t[1]).val();
                  obj.description = $(t[2]).val();
                  obj.price = $(t[3]).val();
                  obj.time = $(t[4]).val();
                  console.log(obj);
                  let str = JSON.stringify(obj);
                  axios.post('/admin-updateService', str).then(function (response) {
                     console.log(response);
                     let block = $(path).children().find('textarea');
                     block.prop('disabled', true);
                     $(e.target).text('Edit');
                  }).catch(function (error) {
                    console.log(error);
                  });
              }
            },
            deleteService: function (e) {
                console.log(e.target);
                let check = confirm('Вы точно хотите удалить этот сервис?');
                let path = e.path[2];
                let child = $(path).children();
                let id = $(child[0]).text();
                let obj = {};
                obj.id = id;
                let str = JSON.stringify(obj);
                if (check) {
                     axios.post('/admin-deleteService', str).then(function (response) {
                        console.log(response);
                        if (response.data == 'delete completed successfully') {
                            $(e.path[2]).remove();
                        }
                    }).catch(function (error) {
                        console.log(error);
                    });
                }
            },
            addService: function () {
                let number = $('tbody').find('tr:last th').text();
                let currentNumber = +number + 1;
                let obj = {};
                  obj.id = currentNumber;
                  obj.name = '...';
                  obj.img = '...';
                  obj.description = '...';
                  obj.price = 0;
                  obj.count_time = 0;
                  console.log(obj);
                this.services.push(obj);
            }
        }
    }
</script>
<style>
.table {
    margin-top: 100px;
}
textarea {
    width:100%;
    height:100%;
}
.buttonAddServiceAdmin {
    float:right;
    margin-bottom: 20px;
    width: 140px;
}
</style>