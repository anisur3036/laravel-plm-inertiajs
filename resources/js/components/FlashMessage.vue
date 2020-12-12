<template>
  <transition name="slide-fade">
    <div
      v-if="toast.success && show && !$popstate"
      class="mb-8 mt-16 mr-2 flex items-center justify-between bg-green-500 rounded max-w-3xl absolute top-0 right-0"
    >
      <div class="flex items-center">
        <svg class="mx-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <div class="py-4 text-white text-sm font-medium">
          {{ toast.success }}
        </div>
      </div>
      <button type="button" class="group mr-2 p-2" @click="show = false">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <div
      v-if="
        toast.error && show && !popstate"
      class="mb-8 mt-16 mr-2 flex items-center justify-between bg-red-500 rounded max-w-3xl absolute top-0 right-0"
    >
      <div class="flex items-center">
        <svg class="mx-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>
        <div
          class="py-4 text-white text-sm font-medium"
        >
          {{ toast.error }}
        </div>
      </div>
      <button type="button" class="group mr-2 p-2" @click="show = false">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
  </transition>
</template>

<script>
export default {
  props: {
    toast: Object
  },
  data() {
    return {
      show: false,
    };
  },
  watch: { 
    toast: {
      immediate: true,
      handler() {
        this.show= true

        setTimeout(() => this.show = false, 2000);
      }
    }
  }
};
</script>

<style scoped>
  /* Enter and leave animations can use different */
/* durations and timing functions.              */
  .slide-fade-enter-active {
    transition: all .3s ease;
  }
  .slide-fade-leave-active {
    transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
  }
  .slide-fade-enter, .slide-fade-leave-to
  /* .slide-fade-leave-active below version 2.1.8 */ {
    transform: translateX(10px);
    opacity: 0;
  }
</style>
