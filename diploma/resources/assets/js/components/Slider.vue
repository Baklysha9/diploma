<template>
<div class="container">
    <div class="row person_row">
        <div class="col-sm-12 col-md-6">
                <p id="title"></p> 
        </div>
        <div class="col-sm-12 col-md-6 padding-out">
            <img src="" alt="" id="image">
        </div>
    </div>
</div>
</template>
<script>
import { slider } from "../scripts/slider";
    export default {
        mounted() {
            console.log('Component mounted.')
            slider();
        }
    }
</script>
<style>
        #sladier {
            width: 100%;
            text-align: center;
        }
        #left {
            height: 100%;
        }
        #right {
            height: 100%;
            float: right;
        }
        #image {
            width: 100%;
            height: 100%;
        }
        #title {
            padding: 6em 0;
        }
    </style>
