<template>
    <div class="bg-image" style="background-image: url('/images/bg/photo28@2x.jpg');">
        <div class="row g-0 bg-primary-dark-op">
            <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                    <div class="w-100">
                        <InertiaLink
                            href="/"
                            class="link-fx fw-semibold fs-2 text-white"
                        >{{ $store.getters.appName }}</InertiaLink>
                        <p class="text-white-75 me-xl-8 mt-2"></p>
                    </div>
                </div>
                <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                    <p class="fw-medium text-white-50 mb-0">
                        <strong>{{ $store.getters.appName }}</strong> ©
                        <span
                            data-toggle="year-copy"
                            class="js-year-copy-enabled"
                        >{{ $store.getters.appCopyright }}</span>
                    </p>
                    <ul class="list list-inline mb-0 py-2" v-if="false">
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-white-75 fw-medium" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-light">
                <slot></slot>

                <div
                    class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start"
                >
                    <p class="fw-medium text-black-50 py-2 mb-0">
                        <strong>{{ $store.getters.appName }}</strong> ©
                        <span
                            data-toggle="year-copy"
                            class="js-year-copy-enabled"
                        >{{ $store.getters.appCopyright }}</span>
                    </p>
                    <ul class="list list-inline py-2 mb-0" v-if="false">
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
</script>
