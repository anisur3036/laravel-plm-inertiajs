<template>
  <div class="flex justify-center items-center h-screen bg-gray-200 px-6">
    <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
      <div class="flex justify-center items-center">
        <img class="w-10 h-10 mr-2" src="img/SKCL-Logo.png" alt="SKCL" />
        <span class="text-gray-700 font-semibold text-2xl">Login</span>
      </div>

      <form class="mt-4" @submit.prevent="submit">
        <label class="block">
          <span class="text-gray-700 text-sm">Email</span>
          <input
            type="email"
            class="py-1 px-2 mt-1 border border-green-200 block w-full rounded-md focus:ring-1 focus:ring-green-200 focus:green-opacity-50"
            v-model="form.email"
          />
        </label>

        <label class="block mt-3">
          <span class="text-gray-700 text-sm">Password</span>
          <input
            type="password"
            class="py-1 px-2 border border-green-200 mt-1 block w-full rounded-md focus:ring-1 focus:ring-green-200 focus:green-opacity-50"
            v-model="form.password"
          />
        </label>

        <div class="flex justify-between items-center mt-4">
          <label class="inline-flex items-center">
            <input
              type="checkbox"
              class="h-4 w-4 rounded border border-green-200 focus:ring-1 focus:ring-green-200 focus:green-opacity-50 text-green-500"
              v-model="form.remember"
            />
            <span class="mx-2 text-green-600 text-sm">Remember me</span>
          </label>
          <div>
            <a
              class="block text-sm fontme text-green-700 hover:underline"
              href="#"
              >Forgot your password?</a
            >
          </div>
        </div>

        <div class="flex flex-col mt-6">
          <button
            type="submit"
            class="py-2 px-4 text-center bg-green-600 rounded-md w-full text-white text-sm hover:bg-green-500"
          >
            Sign in
          </button>
          <span class="text-center mt-3 text-green-600"
            >Do not have account?
            <inertia-link class="text-red-400 hover:underline" href="/register"
              >Register now</inertia-link
            ></span
          >
        </div>
      </form>
    </div>
  </div>
</template>

<script>
// import LoadingButton from '@/Shared/LoadingButton';
// import Logo from '@/Shared/Icon'

export default {
  metaInfo: { title: 'Login' },
  components: {
    // LoadingButton
    // Logo,
  },
  props: {
    errors: Object
  },
  data() {
    return {
      sending: false,
      form: {
        email: 'anisur@yahoo.com',
        password: 'password',
        remember: null
      }
    };
  },
  methods: {
    submit() {
      const data = {
        email: this.form.email,
        password: this.form.password,
        remember: this.form.remember
      };

      this.$inertia.post(route('login.attempt'), data, {
        onStart: () => (this.sending = true),
        onFinish: () => (this.sending = false)
      });
    }
  }
};
</script>
