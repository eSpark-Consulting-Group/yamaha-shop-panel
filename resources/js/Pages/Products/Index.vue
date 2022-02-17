<template>
    <div class="card-sec">
        <div class="container">
            <div class="row notice-row">
                <div class="col-md-6 text-center d-flex align-items-center justify-content-center">
                    <select
                        id="ecom-results-sort"
                        name="ecom-results-sort"
                        class="form-select form-select-sm"
                        size="1"
                    >
                        <option value="0" disabled selected>Sorting</option>
                        <option value="1">New arrival order</option>
                        <option value="2">Price order</option>
                        <option value="3">Headquarters shipping date order</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <Product :key="index" :product="product" v-for="(product, index) in products.data" />

                <Pagination :paginator="products" center />
            </div>
        </div>
    </div>
</template>
<script setup>
import Product from './Components/Product.vue'
defineProps({ products: Object })
</script>
