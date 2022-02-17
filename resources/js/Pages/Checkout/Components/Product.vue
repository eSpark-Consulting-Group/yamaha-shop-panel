<template>
    <div class="cart-card d-flex bg-white border-20 align-items-start">
        <img
            :alt="product.title"
            style="height: 225px; width: 225px;"
            :src="product?.media.length ? product?.media[0].url : '/images/product-placeholder.png'"
        />
        <div class="product-description">
            <h5 class="text-red mb-0 fw-bold">{{ product?.manufacturer?.name }}</h5>
            <h4 class="mb-0 text-black fw-bold pt-1">{{ product?.model?.name }}</h4>
            <p class="text-grey mb-0 pt-2">
                {{ __("Headquarters shipping date") }}:
                <span
                    class="fw-bold"
                >{{ Moment(product.meta?.shipped_at).format("LL") }}</span>
            </p>
            <p class="text-grey mb-0">
                {{ __("Unit") }}
                <span class="fw-bold">{{ product.meta?.unit }}</span>
            </p>
            <h4 class="text-red m-0 fw-bold pt-1">{{ price }}</h4>
        </div>
    </div>
</template>
<script setup>
import Moment from 'moment'
import { Currency } from '@/Helpers';
import { computed } from 'vue';

const props = defineProps({ product: Object })


const price = computed(() => {

    let total = props.product.meta?.partition_amount;

    if (isNaN(total)) total = 0;

    return Currency().format(total);
})
</script>
