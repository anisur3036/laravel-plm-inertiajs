<template>
  <div class="flex h-screen bg-gray-200 font-roboto">
    <!-- <Sidebar /> -->

    <div class="flex-1 flex flex-col overflow-hidden">
      <Header />

      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-2 py-6">
          <!-- <transition name="flash-message"
            enter-active-class="transform ease-out duration-300 delay-300 transition"
            enter-class="translate-x-4 opacity-0"
            enter-to-class="translate-x-0 opacity-100"
            leave-active-class="transition ease-in duration-100"
            leave-class="opacity-100"
            leave-to-class="opacity-0"
            move-class="transition duration-300"> -->
            <FlashMessage />
          <!-- </transition> -->
          <slot />
        </div>
      </main>
    </div>
  </div>
</template>

<script>
import Header from "./Header";
import FlashMessage from "@/components/FlashMessage.vue";
export default {
  components: {
    Header,
    FlashMessage,
  },
  methods: {
    notify() {
      setTimeout(() => {
        //
      }, 3000);
    },
  },
};
</script>
