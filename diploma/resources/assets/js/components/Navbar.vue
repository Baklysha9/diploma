<template>
<div>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav align-items-center">
      <li class="nav-item actives">
        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/price">Price</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li>
      <li class="nav-item">
      <button type="button" class="btn btn-primary">Sign up</button>
      </li>
    </ul>
  </div>
</nav>
</div>
</template>
<script>
    export default {
        mounted() {
        //    $('.navbar a').click(function () {
        //        console.log($(this).text());
        //        $(this).parent().addClass('active');
        //    });
    }
    }
</script>
<style>
.navbar {
    z-index:1;
}
</style>

