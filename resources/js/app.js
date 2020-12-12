import { App, plugin } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import Vue from 'vue'
import PortalVue from 'portal-vue';
import VueMeta from 'vue-meta'

import './bootstrap'
InertiaProgress.init({
  // The delay after which the progress bar will
  // appear during navigation, in milliseconds.
  delay: 250,

  // The color of the progress bar.
  color: '#F81',

  // Whether to include the default NProgress styles.
  includeCSS: true,

  // Whether the NProgress spinner will be shown.
  showSpinner: false,
})
Vue.use(plugin);
Vue.use(VueMeta);
Vue.use(PortalVue);
Vue.prototype.$route = (...args) => route(...args).url();
Vue.mixin({ methods: { route }});
Vue.prototype.$popstate = false;

const app = document.getElementById('app');
new Vue({
		metaInfo: {
	    titleTemplate: title => (title ? `${title} | PLM Server` : 'PLM Server')
	  },
    mounted() {
      window.addEventListener('popstate', ()=> {
        this.$popstate = true;
      });
    },
    render: (h) =>
      h(App, {
          props: {
            initialPage: JSON.parse(app.dataset.page),
            resolveComponent: (name) => require(`./Pages/${name}`).default,
          },
      }),
}).$mount(app);

