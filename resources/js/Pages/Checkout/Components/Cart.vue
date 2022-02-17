<template>
    <h6>{{ __('List of selected products') }}</h6>

    <Product :key="index" :product="product" v-for="(product, index) in cart.products" />

    <div class="cart-bottom-row px-3">
        <div class="row">
            <div class="col-6">
                <h2 class="text-black mb-0">{{ __("Total") }}</h2>
            </div>
            <div class="col-6">
                <h2 class="text-black text-end mb-0">{{ total }}</h2>
            </div>
        </div>
    </div>
    <div
        class="cart-button-row d-flex justify-content-center justify-content-lg-between align-items-center"
    >
        <InertiaLink
            as="button"
            href="/cart"
            class="btn rounded-pill btn-dark"
        >{{ __("RETURN TO CART") }}</InertiaLink>
    </div>
</template>
<script setup>
import { computed } from 'vue';
import { Currency } from '@/Helpers';
import Product from '../Components/Product.vue';
const props = defineProps({ cart: Object })


const total = computed(() => {
    let totalAmount = props.cart.products.reduce((n, { meta }) => (n + Number(meta.partition_amount)), 0);

    if (isNaN(totalAmount)) totalAmount = 0;

    return Currency().format(totalAmount);
})

</script>
