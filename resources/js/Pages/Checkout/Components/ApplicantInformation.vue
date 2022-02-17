<template>
    <div class="row">
        <div class="col-xl-6">
            <div class="mb-4">
                <label class="form-label w-100">{{ __("Email address") }}</label>
                <input type="text" class="form-control" :value="$page.props.user.email" disabled />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-4">
                <label class="form-label w-100">{{ __("Full name") }}</label>
                <input type="text" class="form-control" :value="$page.props.user.name" disabled />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-4">
                <label class="form-label w-100">{{ __("Zip code") }}</label>
                <input type="text" class="form-control" :value="$page.props.user.zip" disabled />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-4">
                <label class="form-label w-100" for="val-username">{{ __("Prefecture") }}</label>
                <input
                    type="text"
                    class="form-control"
                    :value="$page.props.user.prefecture?.title"
                    disabled
                />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-4">
                <label class="form-label w-100" for="val-username">{{ __("Municipality") }}</label>
                <input
                    type="text"
                    class="form-control"
                    :value="$page.props.user.municipality"
                    disabled
                />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-4">
                <label class="form-label w-100" for="val-username">{{ __("Lot name") }}</label>
                <input type="text" class="form-control" :value="$page.props.user.lot" disabled />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-4">
                <label class="form-label w-100" for="val-username">{{ __("Building name") }}</label>
                <input type="text" class="form-control" :value="$page.props.user.building" disabled />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-4">
                <label class="form-label w-100" for="val-username">{{ __("Department name") }}</label>
                <input
                    type="text"
                    class="form-control"
                    :value="$page.props.user.department"
                    disabled
                />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-2">
                <label class="form-label w-100" for="val-username">{{ __("Telephone number") }}</label>
                <input type="text" class="form-control" :value="$page.props.user.phone" disabled />
            </div>
        </div>
        <div class="col-xl-6">
            <div class="mb-2">
                <label class="form-label w-100" for="val-username">{{ __("Fax number") }}</label>
                <input type="text" class="form-control" :value="$page.props.user.fax" disabled />
            </div>
        </div>
    </div>
</template>
<script setup>

</script>
