<template>
	<app-layout>
		<h2>{{ $page.props.auth.user.name }}</h2>
	</app-layout>
</template>

<script>
	import AppLayout from '@/shared/AppLayout'
	export default {
		metaInfo: { title: 'Welcome' },
		components: {
			AppLayout,
		},
		created() {
      window.addEventListener('popstate', () => {
        if(this.$page.props.popstate.back) {
        	window.location.href= '/';
        }
      })
    },
	}
</script>

