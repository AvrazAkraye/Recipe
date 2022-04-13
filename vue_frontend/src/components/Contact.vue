<template>
  <div class="gw_team_contact">
    <div class="gw_team_title">
      <div class="title_flex">
        <div class="left">
          <span>Contact</span>
          <h3>Get in Touch</h3>
        </div>
      </div>
    </div>
    <!-- End Title -->

    <div class="map_wrap">
      <iframe
        id="gmap_canvas"
        src="https://www.google.com/maps/place/GW+Training+Centre/@36.1843377,43.7077368,9.92z/data=!4m9!1m2!2m1!1sgw+erbil!3m5!1s0x40071f3088e5bf11:0xa63dac323516bb8d!8m2!3d36.2567825!4d43.9868774!15sCghndyBlcmJpbCIDiAEBkgEQY29ycG9yYXRlX29mZmljZQ"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
      ></iframe>
    </div>
    <!-- End Google Map -->

    <div class="fields">
      <ValidationObserver v-slot="{ handleSubmit }">
        <form class="contact_form" @submit.prevent="handleSubmit(onSubmit)">
          <div class="first">
            <ul>
              <ValidationProvider
                name="name"
                rules="required"
                v-slot="{ errors }"
              >
                <li>
                  <input
                    v-model="formData.name"
                    type="text"
                    placeholder="Name"
                    autocomplete="off"
                  />
                  <span class="inpur-error">{{ errors[0] }}</span>
                </li>
              </ValidationProvider>

              <ValidationProvider
                name="email"
                rules="required|email"
                v-slot="{ errors }"
              >
                <li>
                  <input
                    type="text"
                    rules="required|email"
                    v-model="formData.email"
                    placeholder="email"
                  />
                  <span class="inpur-error">{{ errors[0] }}</span>
                </li>
              </ValidationProvider>
              <ValidationProvider
                name="message"
                rules="required"
                v-slot="{ errors }"
              >
                <li>
                  <textarea
                    v-model="formData.message"
                    placeholder="Message"
                  ></textarea>
                  <span class="inpur-error">{{ errors[0] }}</span>
                </li>
              </ValidationProvider>
            </ul>
          </div>
          <div class="gw_team_button">
            <button type="submit" class="ib-button">Send Message</button>
          </div>
        </form>
      </ValidationObserver>
    </div>
    <!-- END FIELDS -->
  </div>
</template>

<script>
  import { ValidationObserver } from "vee-validate";
  import { ValidationProvider } from "vee-validate/dist/vee-validate.full.esm";
  export default {
    components: {
      ValidationObserver,
      ValidationProvider,
    },
    data() {
      return {
        formData: {
          name: "",
          email: "",
          message: "",
        },
      };
    },
    methods: {
      onSubmit() {
        console.log(this.formData);
         alert("submit toDo");
      },
    },
  };
</script>
