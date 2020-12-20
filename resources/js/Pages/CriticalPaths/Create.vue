<template>
  <app-layout>
    <div class="flex justify-center items-center">
      <div class="flex flex-row space-x-3">
        <div class="flex flex-col space-y-1">
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="traking_no"
              >Traking No:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="traking_no"
              id="traking_no"
              maxlength="10"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="fri_date"
              >FRI Date:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="date"
              name="fri_date"
              id="fri_date"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="buyer_code"
              >Buyer Name:</label
            >
            <select
              class="flex-1 py-0 w-full rounded"
              name="buyer_code"
              id="buyer_code"
            >
              <option>Next</option>
              <option>H&M</option>
            </select>
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="order_no"
              >Order No:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="order_no"
              id="order_no"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="style">Style:</label>
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="style"
              id="style"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="file_no"
              >File:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="file_no"
              id="file_no"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="unit">Unit:</label>
            <select class="flex-1 py-0 w-full rounded" name="unit" id="unit">
              <option>PCS</option>
              <option>SETS</option>
            </select>
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="order_qty"
              >Order Qty:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="number"
              name="order_qty"
              id="order_qty"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="unit_price"
              >Unit Price(USD):</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="number"
              name="unit_price"
              id="unit_price"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="product_type"
              >Product Type:</label
            >
            <select
              class="flex-1 py-0 w-full rounded"
              name="product_type"
              id="product_type"
            >
              <option>MENS</option>
              <option>WEMENS</option>
            </select>
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="order_duration"
              >Order Duration:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="number"
              name="order_duration"
              id="order_duration"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="remarks"
              >Remarks:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="remarks"
              id="remarks"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="merchandiser"
              >Assign Merchandiser:</label
            >
            <select
              class="flex-1 py-0 w-full rounded"
              name="merchandiser"
              id="merchandiser"
            >
              <option>Asif Habib</option>
              <option>Mahbub Alam</option>
            </select>
          </div>
        </div>
        <div class="">
          <div class="flex items-center justify-center flex-col">
            <label for="img">Select Image</label>
            <input type="file" />
          </div>
        </div>
        <div class="flex flex-col space-y-1">
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="traking_no"
              >Traking No:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="traking_no"
              id="traking_no"
              maxlength="10"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="fri_date"
              >FRI Date:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="date"
              name="fri_date"
              id="fri_date"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="buyer_code"
              >Buyer Name:</label
            >
            <select
              class="flex-1 py-0 w-full rounded"
              name="buyer_code"
              id="buyer_code"
            >
              <option>Next</option>
              <option>H&M</option>
            </select>
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="order_no"
              >Order No:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="order_no"
              id="order_no"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="style">Style:</label>
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="style"
              id="style"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="file_no"
              >File:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="file_no"
              id="file_no"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="unit">Unit:</label>
            <select class="flex-1 py-0 w-full rounded" name="unit" id="unit">
              <option>PCS</option>
              <option>SETS</option>
            </select>
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="order_qty"
              >Order Qty:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="number"
              name="order_qty"
              id="order_qty"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="unit_price"
              >Unit Price(USD):</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="number"
              name="unit_price"
              id="unit_price"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="product_type"
              >Product Type:</label
            >
            <select
              class="flex-1 py-0 w-full rounded"
              name="product_type"
              id="product_type"
            >
              <option>MENS</option>
              <option>WEMENS</option>
            </select>
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="order_duration"
              >Order Duration:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="number"
              name="order_duration"
              id="order_duration"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="remarks"
              >Remarks:</label
            >
            <input
              class="flex-1 border rounded p-0 pl-1 w-full"
              type="text"
              name="remarks"
              id="remarks"
            />
          </div>
          <div class="flex items-center">
            <label class="mr-2 font-sans font-medium" for="merchandiser"
              >Assign Merchandiser:</label
            >
            <select
              class="flex-1 py-0 w-full rounded"
              name="merchandiser"
              id="merchandiser"
            >
              <option>Asif Habib</option>
              <option>Mahbub Alam</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>
<script>
// https://play.tailwindcss.com/gGf4LZoP0X?layout=preview
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
