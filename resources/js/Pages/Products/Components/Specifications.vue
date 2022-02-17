<template>
    <div class="col-xl-5 px-xl-0">
        <div class="table-col bg-white border-20">
            <h2 class="text-black mb-0">{{ product.title }}</h2>
            <p
                class="text-grey mb-3 mt-1"
                v-if="tags.length"
            >{{ __("Tags") }}: {{ tags.join(" / ") }}</p>
            <table>
                <tr>
                    <th>{{ __("Made date") }}</th>
                    <td>{{ Moment(product.meta?.manufactured_at).format("LL") }}</td>
                </tr>
                <tr>
                    <th>{{ __("Headquarters shipping date") }}</th>
                    <td>{{ Moment(product.meta?.shipped_at || new Date()).format("LL") }}</td>
                </tr>
                <tr>
                    <th>{{ __("Model") }}</th>
                    <td>{{ product.meta?.model }}</td>
                </tr>
                <tr>
                    <th>{{ __("Unit") }}</th>
                    <td>{{ product.meta?.unit }}</td>
                </tr>
                <tr>
                    <th>{{ __("Genre") }}</th>
                    <td>{{ product.meta?.genre }}</td>
                </tr>
                <tr>
                    <th>{{ __("Power") }}</th>
                    <td>{{ product.meta?.capacity }}</td>
                </tr>
                <tr>
                    <th>{{ __("Capacity") }}</th>
                    <td>{{ product.meta?.genre }}</td>
                </tr>
                <tr>
                    <th>{{ __("Color") }}</th>
                    <td>{{ product.meta?.color }}</td>
                </tr>
                <tr>
                    <th>{{ __("Windshield specifications") }}</th>
                    <td>{{ product.meta?.genre }}</td>
                </tr>
                <tr>
                    <th>{{ __("Bag support") }}</th>
                    <td>{{ product.meta?.bag_support }}</td>
                </tr>
                <tr>
                    <th>{{ __("ROM specifications") }}</th>
                    <td>{{ product.meta?.rom_specification }}</td>
                </tr>
                <tr>
                    <th>{{ __("OP included") }}</th>
                    <td>{{ product.meta?.op_included }}</td>
                </tr>
                <tr>
                    <th>{{ __("Degree") }}</th>
                    <td>{{ product.meta?.degree }}</td>
                </tr>
                <tr>
                    <th>{{ __("Manufacturer maintenance") }}</th>
                    <td>{{ product.meta?.maintenance === '1' ? 'Yes' : 'No' }}</td>
                </tr>
                <tr>
                    <th>{{ __("Repair location") }}</th>
                    <td>{{ product.meta?.repair_location }}</td>
                </tr>
            </table>
        </div>
    </div>
</template>
<script setup>
import Moment from 'moment'
import { computed } from 'vue';
const props = defineProps({ product: Object })



const tags = computed(() => props.product?.tags?.map(({ name }) => name))
</script>
