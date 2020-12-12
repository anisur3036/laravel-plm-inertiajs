<template>
  <div v-cloak class="flex h-screen bg-gray-200 font-roboto">
    <!-- <Sidebar /> -->

    <div class="flex-1 flex flex-col overflow-hidden">
      <Header />

      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-2 py-6">
            <FlashMessage :toast="$page.props.flash" />
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
  data() {
    return {
      // toastMessage: this.toastMessage
    }
  }
};
</script>
