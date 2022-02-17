<template>
    <Header />
    <slot></slot>
    <Footer />
</template>
<script setup>
import Header from './Frontend/Header.vue';
import Footer from './Frontend/Footer.vue';
</script>
