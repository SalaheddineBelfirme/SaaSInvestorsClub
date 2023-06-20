<template>
  <!-- This is an example component -->
  <div>
    <nav class="bg-white h-20 border-b border-gray-200 fixed z-30 w-full">
      <div class="">
        <div class="flex items-center justify-between">
          <div class="flex items-center justify-start">
            <button
              id="toggleSidebarMobile"
              aria-expanded="true"
              aria-controls="sidebar"
              class="lg:hidden mr-2 text-gray-600 hover:text-gray-900 cursor-pointer p-2 hover:bg-gray-100 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 rounded"
            >
              <svg
                id="toggleSidebarMobileHamburger"
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <svg
                id="toggleSidebarMobileClose"
                class="w-6 h-6 hidden"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <a href="#" class="text-xl font-bold flex items-center lg:ml-2.5">
              <img
                src="https://demo.themesberg.com/windster/images/logo.svg"
                class="h-6 mr-2"
                alt="Windster Logo"
              />
              <span class="self-center whitespace-nowrap">Windster</span>
            </a>
          </div>

    <div class="flex gap-4 items-center relative">
      
    
            
          <NotificationCom/>
          
            <img class="w-8 h-8" :src="userImage" alt="">
          </div>
        </div>
      </div>
    </nav>
    <div class="flex overflow-hidden bg-white pt-16">
      <aside
        @change-section="changeSection"
        id="sidebar"
        class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
        aria-label="Sidebar"
      >
        <div
          class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0"
        >
          <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-white divide-y space-y-1">
              <ul class="space-y-8 pb-2">
                <li>
                  <form action="#" method="GET" class="lg:hidden">
                    <label for="mobile-search" class="sr-only">Search</label>
                    <div class="relative">
                      <div
                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                      >
                        <svg
                          class="w-5 h-5 text-gray-500"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                          ></path>
                        </svg>
                      </div>
                      <input
                        type="text"
                        name="email"
                        id="mobile-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5"
                        placeholder="Search"
                      />
                    </div>
                  </form>
                </li>
                <li>
                  <a
                    href="#"
                    @click.prevent="changeSection('section1')"
                    class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group"
                  >
                    <svg
                      class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                      <path
                        d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"
                      ></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                  </a>
                </li>

                <li>
                  <a
                    href="#"
                    @click.prevent="changeSection('section2')"
                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group"
                  >
                    <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                    fill="currentColor"
                      xmlns="http://www.w3.org/2000/svg"
                      height="1em"
                      viewBox="0 0 640 512"
                    >
                      <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                      <path
                        d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"
                      />
                    </svg>
                    <span class="ml-3 whitespace-nowrap">Users</span>
                  </a>
                </li>
                <li>
                  <a 
                    href="#"
                    @click.prevent="changeSection('section3')"
                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group"
                  >
          
                    <svg
                      class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <span class="ml-3 whitespace-nowrap">Products</span>
                  </a>
                </li>

                <li>
                  <a
                    href="#"
                    @click.prevent="changeSection('section4')"
                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group"
                  >
                    <svg
                      class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <span class="ml-3 whitespace-nowrap">Profile</span>
                  </a>
                </li>

                <li>
                  
                  <a @click.prevent="logout()"
                    href="#"
                    class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group"
                  >
                    <svg
                      class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75"
                      fill="currentColor"
                      viewBox="0 0 20 20"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <span class="ml-3 whitespace-nowrap">Logout</span>
                  </a>
                </li>
            
              </ul>
            </div>
          </div>
        </div>
      </aside>
      <div
        class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10"
        id="sidebarBackdrop"
      ></div>

      <div
        id="main-content"
        class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64"
      >
        <DashboardCom v-if="currentSection === 'section1'" />
        <UsersCom v-if="currentSection === 'section2'" />
        <StartupCRUDVue v-if="currentSection === 'section3'" />
        <AdminProfile v-if="currentSection === 'section4'"/>
        <StartupInfo v-if="currentSection === 'section5'"/>

        
      </div>
    </div>
  </div>

</template>

<script>

import StartupInfo from "../components/StartupInfo.vue";
import DashboardCom from "../components/DashboardCom.vue";
import UsersCom from "@/components/UsersCom.vue";
import StartupCRUDVue from "@/components/StartupCRUD.vue";
import AdminProfile from "@/components/AdminProfile.vue"
import NotificationCom from "@/components/NotificationCom.vue"
import Cookies from "js-cookie";
import axios from "@/libs/axios"

export default {
  data() {
    return {
      dropdownOpen:false,
      currentSection: localStorage.getItem("lastSection")
        ? localStorage.getItem("lastSection")
        : "section1",
      searchQuery: "",
      userImage:JSON.parse(Cookies.get('Auth')).image
    };
  },
  mounted(){
  console.log(this.userImage);
  },
  components: {
    DashboardCom,
    UsersCom,
    StartupCRUDVue,
    AdminProfile,
    NotificationCom,
    StartupInfo
  },
  methods: {
    changeSection(section) {
      this.currentSection = section;

      localStorage.setItem("lastSection", section);

      if (
        section === "section1" ||
        localStorage.getItem("lastSection") === "section1"
      ) {
      } else if (
        section === "section2" ||
        localStorage.getItem("lastSection") === "section2"
      ) {
      } else if (
        section === "section3" ||
        localStorage.getItem("lastSection") === "section3"
      ) {
      } else if (
        section === "section4" ||
        localStorage.getItem("lastSection") === "section4"
      ) {
      }
    },
    async logout(){
     
     await axios.post('/logout')
      .then((response)=>{

        Cookies.remove('Auth')
        Cookies.remove('Role')
        window.location.href = '/'
        Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title:response.data.message,
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true,
            });
        
        
      })
    },

    search() {
      if (this.searchQuery) {
        if (window.find && window.getSelection) {
          const searchResult = window.find(this.searchQuery);
          if (!searchResult) {
            alert("No matches found");
          }
        } else {
          alert("Your browser does not support the search functionality");
        }
      }
    },
  },
};
</script>
