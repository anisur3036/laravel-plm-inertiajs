<template>
  <header
    class="flex justify-between items-center py-2 px-6 bg-gray-800 border-b-2 border-indigo-600"
  >
    <ul class="flex items-center space-x-4">
      <button
        @click="isOpen = true"
        class="text-gray-200 hover:text-indigo-400 focus:outline-none lg:hidden"
      >
        <svg
          class="h-6 w-6"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M4 6H20M4 12H20M4 18H11"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>
      <li><a class="font-bold text-2xl text-gray-200 hover:text-indigo-400" href="/">SKCL</a></li>
      <li><a class="text-gray-200 hover:text-indigo-400" href="/">About</a></li>
      <li><a class="text-gray-200 hover:text-indigo-400" href="/">Pending List</a></li>
      <li><a class="text-gray-200 hover:text-indigo-400" href="">User Setup</a></li>
      <li><a class="text-gray-200 hover:text-indigo-400" href="">Master Setup</a></li>
      <li><a class="text-gray-200 hover:text-indigo-400" href="">Critical Path</a></li>
      <li><a class="text-gray-200 hover:text-indigo-400" href="">Catalog</a></li>
    </ul>

    <div class="flex items-center">
      <div class="relative">
        <button
        @click="notificationOpen = !notificationOpen"
         class="flex mx-4 text-gray-600 focus:outline-none">
        <svg
          class="h-6 w-6 text-gray-200 hover:text-indigo-400"
          viewBox="0 0 24 24"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
        <span class="flex bottom-0.5 right-1 h-2 w-2 relative">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
        </span>
      </button>
        <div
          v-show="notificationOpen"
          @click="notificationOpen = false"
          class="fixed inset-0 h-full w-full z-10"
        ></div>

        <div
          v-show="notificationOpen"
          class="absolute right-1/3 mt-2 py-2 w-64 bg-white rounded-md shadow-xl z-20"
        >
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-700 border-b border-gray-800 hover:bg-gray-800 hover:text-white"
            >Your pending job more 80%</a
          >
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-700 border-b border-gray-800 hover:bg-gray-800 hover:text-white"
            >Near Shipment 6832/2</a
          >
          <inertia-link
            :href="route('logout')"
            method="post"
            class="block px-4 py-2 text-sm text-gray-700 border-b border-gray-800 hover:bg-gray-800 hover:text-white"
            >Work Properly</inertia-link
          >
        </div>
      </div>
      <div class="relative">
        <button
          @click="dropdownOpen = !dropdownOpen"
          class="relative z-10 block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none"
        >
          <img
            class="h-full w-full object-cover"
            src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=296&q=80"
            alt="Your avatar"
          />
        </button>

        <div
          v-show="dropdownOpen"
          @click="dropdownOpen = false"
          class="fixed inset-0 h-full w-full z-10"
        ></div>

        <div
          v-show="dropdownOpen"
          class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20"
        >
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-800 hover:text-white"
            >Profile</a
          >
          <a
            href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-800 hover:text-white"
            >Products</a
          >
          <inertia-link
            :href="route('logout')"
            method="post"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-800 hover:text-white"
            >Log out</inertia-link
          >
        </div>
      </div>
    </div>
  </header>
</template>

<script>
  export default {
    data() {
      return {
        isOpen: false,
        dropdownOpen: false,
        notificationOpen: false
      }
    }
  }
</script>
