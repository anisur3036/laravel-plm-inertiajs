<template>
	<app-layout>
		<div class="bg-white">
			<div class="flex items-center justify-center bg-gray-400">
				<h2 class="text-gray-800 py-2 px-1 text-2xl">Create Invoices</h2>
			</div>
			<div class="p-4 flex justify-between">
				<div class="flex flex-col">
					<h3>Customer Detials</h3>
					<input type="text" aria-label="Name" name="customer" />
				</div>
				<div class="flex flex-col">
					<div class="flex items-center justify-between">
						<h3>Number</h3>
						<span>auto generated</span>
					</div>
					<input type="text" />
				</div>
				<div class="flex flex-col">
					<div class="flex items-center justify-between">
						<h3>Reference</h3>
						<span>Optional</span>
					</div>
					<input type="text" />
				</div>
			</div>
		</div>
	</app-layout>
</template>
<script>
import AppLayout from "@/shared/AppLayout";
export default {
	components: { AppLayout },
	data() {
		return {
			form: null,
		};
	},
};
</script>
