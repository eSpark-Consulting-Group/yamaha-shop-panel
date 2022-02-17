<template>
    <div class="main-sec">
        <div class="row">
            <Gallery :product="product" />

            <Specifications :product="product" />

            <AddToCart :product="product" />
        </div>
    </div>
</template>
<script setup>
import Gallery from "./Components/Gallery.vue";
import AddToCart from "./Components/AddToCart.vue";
import Specifications from "./Components/Specifications.vue";

defineProps({ product: Object })

</script>
