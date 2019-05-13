<template>
 <form onSubmit="return false;">
          <div class="form-group">
            <label for="email">Your name:</label>
            <input type="text" class="form-control" id="name" v-model="name">
          </div>
          <div class="form-group">
            <label for="pwd">Your phone:</label>
            <input type="text" class="form-control" id="phone" v-model="phone">
          </div>
          <button type="submit" class="btn btn-primary" v-on:click="sendForm">Submit</button>
        </form>
</template>
<script>
    export default {
        data: function() {
            return {
                name: '',
                phone: ''
            }
        },
        mounted() {
            console.log('form loaded');
        },
        methods: {
        sendForm: function() {
            let postBody = {
                name : this.name,
                phone : this.phone
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
        }
        }
    }
</script>
