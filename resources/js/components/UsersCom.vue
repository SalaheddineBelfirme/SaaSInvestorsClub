<template>
  <!-- component -->
  <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
    <div class="flex flex-col justify-center h-full">
      <!-- Table -->
      <div
        class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200"
      >
        <header class="px-5 py-4 border-b border-gray-100">
          <h2 class="font-semibold text-gray-800">Customers</h2>
        </header>
        <div class="p-3">
          <div class="overflow-x-auto">
            <table class="table-auto w-full">
              <thead
                class="text-xs font-semibold uppercase text-gray-400 bg-gray-50"
              >
                <tr>
                  <th class="p-2 whitespace-nowrap">
                    <div class="font-semibold text-left">Name</div>
                  </th>
                  <th class="p-2 whitespace-nowrap">
                    <div class="font-semibold text-left">Email</div>
                  </th>
                  <th class="p-2 whitespace-nowrap">
                    <div class="font-semibold text-left">Statu</div>
                  </th>
                  <th class="p-2 whitespace-nowrap"></th>
                </tr>
              </thead>
              <tbody class="text-sm divide-y divide-gray-100">
                <tr v-for="user in users">
                  <td class="p-2 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3">
                        <img
                          class="rounded-full"
                          :src="user.image"
                          width="40"
                          height="40"
                          alt="Philip Harbach"
                        />
                      </div>
                      <div class="font-medium text-gray-800">
                        {{ user.name }}
                      </div>
                    </div>
                  </td>
                  <td class="p-2 whitespace-nowrap">
                    <div class="text-left">{{ user.email }}</div>
                  </td>
                  <td class="p-2 whitespace-nowrap">
                    <div
                      v-if="user.role == '1'"
                      class="text-left font-medium text-green-500"
                    >
                      Premium
                    </div>
                    <div
                      v-if="user.role == '0'"
                      class="text-left font-medium text-red-500"
                    >
                      Free user
                    </div>
                  </td>
                  <td class="p-2 whitespace-nowrap">
                    <span class="space-x-3">
                      <button type="button">
                        <i class="fa-solid fa-trash text-red-600"></i>
                      </button>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <nav>
          <ol class="flex justify-center gap-1 text-xs font-medium">
    <li>
      <a
        href="#"
        class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
        @click="goToPage(pagination.current_page - 1)"
        :disabled="pagination.current_page === 1"
      >
        <span class="sr-only">Prev Page</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-3 w-3"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"
          />
        </svg>
      </a>
    </li>

    <li v-for="pageNumber in pagination.last_page" :key="pageNumber">
      <a
        href="#"
        class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
        :class="{
          'border-blue-600 bg-blue-600 text-white': pageNumber === pagination.current_page,
          'hover:bg-light-300': pageNumber !== pagination.current_page
        }"
        @click="goToPage(pageNumber)"
      >
        {{ pageNumber }}
      </a>
    </li>

    <li>
      <a
        href="#"
        class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
        @click="goToPage(pagination.current_page + 1)"
        :disabled="pagination.current_page === pagination.last_page"
      >
        <span class="sr-only">Next Page</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-3 w-3"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"
          />
        </svg>
      </a>
    </li>
  </ol>
        </nav>
      </div>
    </div>
  </section>
</template>

<script setup>

import axios from "@/libs/axios";
import { ref, onMounted } from "vue";

const users = ref("");
const pagination = ref({
});

function getUsers(page = 1) {
  axios
    .get(`/api/Users?page=${page}`)
    .then((response) => {
      users.value = response.data.data.data;
      pagination.value = response.data.data;
      console.log( pagination.value)
      console.log(users.value);
    })
    .catch((error) => {
      console.error(error);
    });
}

function goToPage(pageNumber) {
  if (pageNumber >= 1 && pageNumber <= pagination.value.last_page) {
    pagination.value.current_page = pageNumber;
    getUsers(pageNumber);
  }
}

onMounted(() => {
  getUsers();
});
</script>
