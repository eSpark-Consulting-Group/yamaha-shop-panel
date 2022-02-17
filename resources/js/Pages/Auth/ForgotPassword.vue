<template>
    <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
        <div class="w-100">
            <div class="text-center mb-5">
                <p class="mb-3">
                    <img src="/images/logo.svg" style="height: 30px;" />
                </p>
                <h1 class="fw-bold mb-2">{{ __("Request Password Reset") }}</h1>
                <p class="fw-medium text-muted">
                    {{ __("Forgot your password? No problem.") }}
                    <br />
                    {{ __("Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.") }}
                </p>
            </div>

            <div class="col-sm-8 mx-auto" v-if="status">
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <div class="flex-shrink-0">
                        <i class="fa fa-fw fa-check"></i>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="mb-0">{{ __(status) }}</p>
                    </div>
                </div>
            </div>

            <div class="row g-0 justify-content-center">
                <div class="col-sm-8 col-xl-4">
                    <form class="js-validation-signin" method="POST" @submit.prevent="submit">
                        <div class="mb-4">
                            <input
                                required
                                autofocus
                                type="text"
                                v-model="form.email"
                                :placeholder="__('Email Address')"
                                :class="form.errors.email && 'is-invalid'"
                                class="form-control form-control-lg form-control-alt py-3"
                            />
                            <div
                                v-if="form.errors.email"
                                class="invalid-feedback animated fadeIn"
                            >{{ form.errors.email }}</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <button
                                type="submit"
                                :disabled="form.processing"
                                class="w-100 btn btn-lg btn-alt-primary"
                            >
                                <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i>
                                {{ __("Email Password Reset Link") }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import AuthLayout from '@/Layouts/Auth.vue'
export default {

    layout: AuthLayout,

    props: {
        status: String
    },

    data() {
        return {
            form: this.$inertia.form({
                email: ''
            })
        }
    },

    methods: {
        submit() {
            this.form.post('/forgot-password')
        }
    }
}
</script>
