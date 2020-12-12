<template>
	<app-layout>
		
	  <div class="flex justify-center items-center h-screen bg-gray-200 px-6">
	    <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
	      <div class="flex justify-center items-center">
	        <img class="w-10 h-10 mr-2" src="/img/SKCL-Logo.png" alt="SKCL" />
	        <span class="text-gray-700 font-semibold text-2xl">Create Account</span>
	      </div>

	      <form class="mt-4" @submit.prevent="submit">
	        <label class="relative block">
	          <span class="text-gray-700 text-sm">Your name</span>
	          <input
	            :class="
	              errors.name
	                ? 'border-red-300 focus:ring-red-300 focus:red-opacity-50'
	                : 'border-green-300 focus:ring-green-300 focus:green-opacity-50'
	            "
	            type="text"
	            class="py-1 px-2 mt-1 border block w-full rounded-md focus:ring-1"
	            v-model="form.name"
	          />
	          <p v-if="errors.name" class="mt-1 text-sm text-red-600">
	            {{ errors.name }}
	          </p>
	        </label>
	        <label class="relative block">
	          <span class="text-gray-700 text-sm">Email</span>
	          <input
	            type="email"
	            :class="
	              errors.email
	                ? 'border-red-300 focus:ring-red-300 focus:red-opacity-50'
	                : 'border-green-300 focus:ring-green-300 focus:green-opacity-50'
	            "
	            class="py-1 px-2 mt-1 border block w-full rounded-md focus:ring-1"
	            v-model="form.email"
	          />
	          <p v-if="errors.email" class="mt-1 text-sm text-red-600">
	            {{ errors.email }}
	          </p>
	        </label>

	        <label class="block mt-3">
	          <span class="text-gray-700 text-sm">Password</span>
	          <input
	            type="password"
	            :class="
	              errors.password
	                ? 'border-red-300 focus:ring-red-300 focus:red-opacity-50'
	                : 'border-green-300 focus:ring-green-300 focus:green-opacity-50'
	            "
	            class="py-1 px-2 mt-1 border block w-full rounded-md focus:ring-1"
	            v-model="form.password"
	          />
	          <p v-if="errors.password" class="mt-1 text-sm text-red-600">
	            {{ errors.password }}
	          </p>
	        </label>
	        <div class="flex flex-col mt-6">
	          <button
	            type="submit"
	            class="py-2 px-4 text-center bg-green-600 rounded-md w-full text-white text-sm hover:bg-green-500"
	          >
	            Create User
	          </button>
	        </div>
	      </form>
	    </div>
	  </div>
	</app-layout>
</template>

<script>
import AppLayout from "@/shared/AppLayout";
export default {
  components: {
    AppLayout
  },
  data() {
    return {
    	sending: false,
      form: {
        name: null,
        email: null,
        password: null
      },
      errors: {}
    };
  },
  methods: {
    submit() {
      this.errors = {};
      if (!this.form.name) {
        const name = 'Name is Required';
        this.errors = { ...this.errors, name };
      }

      if (!this.form.email) {
        const email = 'Email is Required';
        this.errors = { ...this.errors, email };
      } else if (
        /^([a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]{2,})+@([a-zA-Z0-9-]{2,})+\.([a-zA-Z0-9-]{2,6})$/.test(
          this.form.email
        ) === false
      ) {
        const email = 'Email is not valid.';
        this.errors = { ...this.errors, email };
      }

      if (!this.form.password) {
        const password = 'Password is Required';
        this.errors = { ...this.errors, password };
      } else if (this.form.password.length < 8) {
        const password = 'Password must 6 be charactar lentgh.';
        this.errors = { ...this.errors, password };
      }
      
      const data = new FormData()
      data.append('name', this.form.name || '')
      data.append('email', this.form.email || '')
      data.append('password', this.form.password || '')

      this.$inertia.post(this.route('users.create'), data, {
        onStart: () => this.sending = true,
        onFinish: () => this.sending = false,
      })
    },
    check_pass(val) {
      let password = null;
      if (val.length <= 5) {
        password = 'Password at least 6 character length.';
      }
      // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
      if (
        val.length > 6 &&
        (val.match(/[a-z]/) ||
          val.match(/\d+/) ||
          val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))
      ) {
        password = 'Password is less good.';
      }

      // If the password length is greater than 6 and contain alphabet,number,special character respectively
      if (
        val.length > 5 &&
        ((val.match(/[a-z]/) && val.match(/\d+/)) ||
          (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) ||
          (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))
      ) {
        password = 'Password is good.';
      }

      // If the password length is greater than 6 and must contain alphabets,numbers and special characters
      if (
        val.length > 6 &&
        val.match(/[a-z]/) &&
        val.match(/\d+/) &&
        val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)
      ) {
        password = 'Password is strong.';
      }
    }
  }
};
</script>
