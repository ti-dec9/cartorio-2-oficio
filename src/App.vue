<template>
  <html class="h-screen bg-base-100 scroll-smooth" data-theme="cmyk">
  <Navbar></Navbar>
  <Background></Background>
  <RI></RI>
  <Services></Services>
  <Notas></Notas>
  <Contato></Contato>
  <Footer></Footer>
  </html>
</template>

<script setup>
import Navbar from './components/Navbar.vue';
import Notas from './components/Notas.vue';
import Background from './components/Background.vue';
import RI from './components/RI.vue';
import Services from './components/Services.vue';
import Footer from './components/Footer.vue';
import Contato from './components/Contato.vue';
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
</style>
