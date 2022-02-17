<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-white position-relative" id="nav1">
        <div class="container-fluid">
            <div class="nav-left d-flex align-items-center">
                <button
                    type="button"
                    aria-label="Toggle navigation"
                    @click="toggleNavMenu = !toggleNavMenu"
                    class="navbar-toggler position-relative"
                >
                    <span class="navbar-toggler-icon"></span>
                    <div v-if="toggleNavMenu" class="toggle-menu bg-white">
                        <ul>
                            <li @click="onClickNavMenuItems">
                                <InertiaLink
                                    class="text-black"
                                    :href="Laravel.route('index')"
                                >トップ</InertiaLink>
                            </li>
                            <li @click="onClickNavMenuItems">
                                <InertiaLink
                                    class="text-black"
                                    :href="Laravel.route('shop.index')"
                                >商品一覧</InertiaLink>
                            </li>
                            <li @click="onClickNavMenuItems">
                                <InertiaLink
                                    :href="Laravel.route('faq.index')"
                                    class="text-black"
                                >よくある質問</InertiaLink>
                            </li>
                            <li @click="onClickNavMenuItems">
                                <InertiaLink
                                    class="text-black"
                                    :href="Laravel.route('notices.index')"
                                >お知らせ一覧</InertiaLink>
                            </li>
                            <li @click="onClickNavMenuItems">
                                <InertiaLink
                                    class="text-black"
                                    :href="Laravel.route('contact')"
                                >お問い合わせ</InertiaLink>
                            </li>
                            <li @click="onClickNavMenuItems">
                                <InertiaLink
                                    class="text-black"
                                    href="#"
                                >ご利用ガイド</InertiaLink>
                            </li>

                            <li @click="onClickNavMenuItems">
                                <InertiaLink
                                    class="text-black"
                                    href="#"
                                >マイページ</InertiaLink>
                            </li>
                        </ul>
                    </div>
                </button>

                <p
                    class="mb-0 ms-1 ms-sm-4 text-black fw-bold d-none d-lg-inline-block"
                >店舗：ヤマハ直営</p>
                <InertiaLink class="navbar-brand d-none d-lg-inline-block" href="/">
                    <img src="/images/logo.svg" alt="site-logo" />
                </InertiaLink>
            </div>

            <div class="nav-center d-block d-lg-none">
                <InertiaLink class="navbar-brand" href="/">
                    <img src="/images/logo.svg" alt="site-logo" />
                </InertiaLink>
            </div>

            <div class="nav-right d-flex align-items-center position-relative">
                <p
                    @click="toggleUserMenu = !toggleUserMenu"
                    class="m-0 text-grey text-capitalize d-none d-lg-inline-block"
                >
                    ようこそ 鈴木将和 様
                    <!-- <span class="text-black fw-bold">{{ $page.props.user.name }}</span> -->
                </p>

                <span @click="toggleUserMenu = !toggleUserMenu" class="ps-2 user-img">
                    <i class="fa far fa-user"></i>
                </span>

                <InertiaLink href="/cart" class="px-3 cart d-lg-inline-block">
                    <i class="fa far fa-cart-plus text-black"></i>
                    <span
                        class="cart-count"
                        v-if="$page.props?.cart?.products_count"
                    >{{ $page.props?.cart?.products_count }}</span>
                </InertiaLink>

                <span class="d-lg-inline-block">
                    <i class="fa far fa-search"></i>
                </span>

                <div class="d-inline-block ps-2">
                    <LanguageSwitcher />
                </div>

                <div v-if="toggleUserMenu" class="toggle-menu2 bg-white">
                    <div
                        class="user-name pb-3 mb-2 border-bottom rounded-top d-inline-block d-lg-none"
                    >
                        <p class="mt-2 mb-0 fw-bold text-black">{{ $page.props.user.name }}</p>
                    </div>
                    <ul>
                        <!-- <li @click="onClickUserMenuItems">
                            <InertiaLink
                                :href="Laravel.route('quotations.index')"
                                class="text-black"
                            >{{ __('Quotation list') }}</InertiaLink>
                        </li>
                        <li @click="onClickUserMenuItems">
                            <InertiaLink
                                class="text-black"
                                :href="Laravel.route('orders.index')"
                            >{{ __("Orders List") }}</InertiaLink>
                        </li>
                        <li @click="onClickUserMenuItems">
                            <a href="javascript:void(0);" class="text-black">{{ __("Profile") }}</a>
                        </li>
                        <li @click="onClickUserMenuItems">
                            <InertiaLink
                                class="text-black"
                                :href="Laravel.route('inqueries.index')"
                            >{{ __("Inquiry") }}</InertiaLink>
                        </li> -->
                        <li @click="onClickUserMenuItems">
                            <InertiaLink
                                as="button"
                                href="/logout"
                                method="post"
                                class="rounded-pill btn-danger text-uppercase border-0 py-2 px-3"
                            >ログアウト</InertiaLink>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div v-if="$page.props.title" class="page-heading bg-white text-center py-3">
        <h1 class="mb-0 text-uppercase">{{ __($page.props.title) }}</h1>
    </div>
</template>
<script setup>
import { ref } from 'vue';
import { Laravel } from '@/Helpers';


const toggleNavMenu = ref(false)

const toggleUserMenu = ref(false)

function onClickNavMenuItems() {
    toggleUserMenu.value = false;
}

function onClickUserMenuItems() {
    toggleUserMenu.value = false;
    toggleNavMenu.value = false;
}
</script>
