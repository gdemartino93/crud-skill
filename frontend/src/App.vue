<script setup>
import { RouterLink, RouterView } from 'vue-router'
// import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <header>
    <div class="wrapper">

      <nav class="d-flex justify-content-center align-items-center gap-5">
        <RouterLink to="/" class="bg-black bg-gradient fw-bold text-white p-3 rounded-pill ">Home</RouterLink>
        <RouterLink to="/skills" class="bg-black bg-gradient fw-bold text-white p-3 rounded-pill ">Skills</RouterLink>
      </nav>
    </div>
  </header>

  <RouterView />
</template>

