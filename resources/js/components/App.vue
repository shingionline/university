<template>
    <div class="container">
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">University of Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <router-link class="nav-link" to="/">Home</router-link>
        </li>
        <li class="nav-item active">
          <router-link class="nav-link" to="/add">Add Student</router-link>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <br/>
        <router-view></router-view>
    </div>
</template>
  
<script>
    export default {}
</script>