<template>
  <div class="checkout-sec">
    <div class="row">
      <div class="col-lg-6 pe-sm-5 checkout-left-col">
        <Cart :cart="cart" />
      </div>
      <div class="col-lg-6 checkout-accordian bg-white ps-0">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item border-0">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >{{ __("Delivery destination information setting") }}</button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Company name") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        :class="['form-control', form.errors.company && 'is-invalid']"
                        id="val-username"
                        v-model="form.company"
                      />
                      <div
                        v-if="form.errors.company"
                        class="invalid-feedback"
                      >{{ form.errors.company }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Zip code") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.zip"
                        :class="['form-control', form.errors.zip && 'is-invalid']"
                      />
                      <div v-if="form.errors.zip" class="invalid-feedback">{{ form.errors.zip }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="example-select">
                        {{ __("Prefecture") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <select
                        v-model="form.prefecture"
                        :class="['form-select', form.errors.prefecture && 'is-invalid']"
                      >
                        <option
                          :key="index"
                          v-for="(prefecture, index) in prefectures"
                        >{{ prefecture.title }}</option>
                      </select>
                      <div
                        v-if="form.errors.prefecture"
                        class="invalid-feedback"
                      >{{ form.errors.prefecture }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Municipality") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.municipality"
                        :class="['form-control', form.errors.municipality && 'is-invalid']"
                      />
                      <div
                        v-if="form.errors.municipality"
                        class="invalid-feedback"
                      >{{ form.errors.municipality }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Lot name") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.lot"
                        :class="['form-control', form.errors.lot && 'is-invalid']"
                      />
                      <div v-if="form.errors.lot" class="invalid-feedback">{{ form.errors.lot }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Building name") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.building"
                        :class="['form-control', form.errors.building && 'is-invalid']"
                      />
                      <div
                        v-if="form.errors.building"
                        class="invalid-feedback"
                      >{{ form.errors.building }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Phone number") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.phone"
                        :class="['form-control', form.errors.phone && 'is-invalid']"
                      />
                      <div v-if="form.errors.phone" class="invalid-feedback">{{ form.errors.phone }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Person in charge") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.person_in_charge"
                        :class="['form-control', form.errors.person_in_charge && 'is-invalid']"
                      />
                      <div
                        class="invalid-feedback"
                        v-if="form.errors.person_in_charge"
                      >{{ form.errors.person_in_charge }}</div>
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <div class="mb-2">
                      <label class="form-label w-100 big-label" for="val-username">
                        {{ __("Desired delivery period") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end font-12"
                        >* {{ __("required items") }}</span>
                      </label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">{{ __("From") }}</label>
                      <input
                        type="date"
                        v-model="form.desired_delivery_from"
                        :class="['form-control', form.errors.desired_delivery_from && 'is-invalid']"
                      />
                      <div
                        v-if="form.errors.desired_delivery_from"
                        class="invalid-feedback"
                      >{{ form.errors.desired_delivery_from }}</div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">{{ __("To") }}</label>
                      <input
                        type="date"
                        v-model="form.desired_delivery_to"
                        :class="['form-control', form.errors.desired_delivery_to && 'is-invalid']"
                      />
                      <div
                        class="invalid-feedback"
                        v-if="form.errors.desired_delivery_to"
                      >{{ form.errors.desired_delivery_to }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >{{ __("Applicant information") }}</button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <ApplicantInformation />
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >{{ __("Quote requester information") }}</button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Name") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.requester_name"
                        :class="['form-control', form.errors.requester_name && 'is-invalid']"
                      />
                      <div
                        v-if="form.errors.requester_name"
                        class="invalid-feedback"
                      >{{ form.errors.requester_name }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Email address") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.requester_email"
                        :class="['form-control', form.errors.requester_email && 'is-invalid']"
                      />
                      <div
                        class="invalid-feedback"
                        v-if="form.errors.requester_email"
                      >{{ form.errors.requester_email }}</div>
                    </div>
                  </div>
                  <div class="col-xl-6">
                    <div class="mb-4">
                      <label class="form-label w-100" for="val-username">
                        {{ __("Phone number") }}
                        <span
                          id="val-username-error"
                          class="text-red float-end"
                        >* {{ __("required items") }}</span>
                      </label>
                      <input
                        type="text"
                        v-model="form.requester_phone"
                        :class="['form-control', form.errors.requester_phone && 'is-invalid']"
                      />
                      <div
                        class="invalid-feedback"
                        v-if="form.errors.requester_phone"
                      >{{ form.errors.requester_phone }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseFour"
                aria-expanded="false"
                aria-controls="collapseFour"
              >{{ __("Transmission matters") }}</button>
            </h2>
            <div
              id="collapseFour"
              class="accordion-collapse collapse"
              aria-labelledby="headingFour"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <div class="row">
                  <div class="col-xl-12">
                    <div class="mb-4">
                      <textarea
                        rows="4"
                        v-model="form.transmission_matter"
                        :class="['form-control', form.errors.transmission_matter && 'is-invalid']"
                      ></textarea>
                      <div
                        v-if="form.errors.transmission_matter"
                        class="invalid-feedback"
                      >{{ form.errors.transmission_matter }}</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="quote-btn">
          <button
            type="button"
            @click="checkout"
            class="btn rounded-pill btn-danger w-100"
          >{{ __("TO REQUEST A QUOTE") }}</button>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import Cart from './Components/Cart.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import ApplicantInformation from './Components/ApplicantInformation.vue'
import { Laravel } from '@/Helpers';

const props = defineProps({ cart: Object, prefectures: Array, user: Object })

const form = useForm({
  lot: "",
  zip: "",
  phone: "",
  company: "",
  building: "",
  prefecture: "",
  municipality: "",
  person_in_charge: "",
  transmission_matter: "",
  desired_delivery_to: "",
  desired_delivery_from: "",
  requester_name: props.user.name,
  requester_email: props.user.email,
  requester_phone: props.user.phone,
})


function checkout() {
  form.post(Laravel.route('quotations.store'))
}
</script>
