<template>
  <div
    id="authentication-modal"
    tabindex="-1"
    aria-hidden="true"
    class="fixed top-0 left-0 bg-black/75 right-0 z-50 hidden w-full p-4 overflow-x-hidden md:inset-0 h-[calc(100%)] max-h-full"
  >
    <div class="relative w-full max-w-md max-h-full">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button
          type="button"
          class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
          data-modal-hide="authentication-modal"
          ref="myButton"
        >
          <svg
            aria-hidden="true"
            class="w-5 h-5"
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
          <span class="sr-only">Close modal</span>
        </button>
        <div v-show="!resetform" class="px-6 py-6 lg:px-8">
          <h1
            v-show="!fullname"
            class="mb-4 text-2xl font-medium text-gray-900 dark:text-white"
          >
            Sign in to our platform
          </h1>
          <h1
            v-show="fullname"
            class="mb-4 text-2xl font-medium text-gray-900 dark:text-white"
          >
            Sign up to our platform
          </h1>
          <form class="space-y-6" action="#">
            <div v-show="fullname">
              <label
                for="name"
                class="block mb-2 text-sm text-left font-medium text-gray-900 dark:text-white"
                >Full Name*</label
              >
              <input
                type="text"
                name="name"
                id="name"
                v-model="name"
                placeholder="Jhon Jakson"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
              />
            </div>
            <div v-show="fullname">
              <label
                for="name"
                class="block mb-2 text-sm text-left font-medium text-gray-900 dark:text-white"
                >N°Phone*</label
              >
              <input
                type="text"
                name="n_phone"
                id="n_phone"
                v-model="phone_number"
                placeholder="+2126********"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
              />
            </div>

            <div v-show="fullname">
              <label
                for="CIN"
                class="block mb-2 text-sm text-left font-medium text-gray-900 dark:text-white"
                >CIN*</label
              >
              <input
                type="text"
                name="CIN"
                id="CIN"
                v-model="cin"
                placeholder="HH******"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
              />
            </div>

            <div>
              <label
                class="block mb-2 text-left text-sm font-medium text-gray-900 dark:text-white"
              >
                <span class="block text-sm font-medium text-slate-700"
                  >Email*</span
                >
                <input
                  type="email"
                  v-model="email"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                  placeholder="name@company.com"
                  required
                />
                <!-- <p
                  class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm"
                >
                  Please provide a valid email address.
                </p> -->
              </label>
            </div>

            <div>
              <label
                for="password"
                class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white"
                >password*</label
              >
              <input
                type="password"
                name="password"
                id="password"
                v-model="password"
                placeholder="••••••••"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
              />
            </div>

            <div v-show="fullname">
              <label
                for="password"
                class="block text-left mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >
                Confirmation password*</label
              >
              <input
                type="password"
                name="password"
                id="password_confirmation"
                placeholder="••••••••"
                v-model="password_confirmation"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                required
              />
            </div>

            <div v-show="!fullname" class="flex justify-between">
              <div class="flex items-start">
                <div class="flex items-center h-5">
                  <input
                    id="remember"
                    type="checkbox"
                    value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                    required
                  />
                </div>

                <label
                  for="remember"
                  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                  >Remember me</label
                >
              </div>
              <a
                @click.prevent="disabledform()"
                href="#"
                class="text-sm text-blue-700 hover:underline dark:text-blue-500"
                >Lost Password?</a
              >
            </div>
            <button
              v-show="!fullname"
              type="submit"
              @click.prevent="login()"
              class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Login to your account
            </button>

            <button
              v-show="fullname"
              type="submit"
              @click.prevent="register()"
              class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Regiseter to your account
            </button>

            <div
              v-show="!fullname"
              class="text-sm font-medium text-gray-500 dark:text-gray-300"
            >
              Not registered?
              <a
                @click.prevent="fullnameInput"
                href="#"
                class="text-blue-700 hover:underline dark:text-blue-500"
                >Create account</a
              >
            </div>

            <div
              v-show="fullname"
              class="text-sm font-medium text-gray-500 dark:text-gray-300"
            >
              Already a member?
              <a
                @click.prevent="fullnameInput"
                href="#"
                class="text-blue-700 hover:underline dark:text-blue-500"
              >
                Log in here</a
              >
            </div>
          </form>
        </div>

        <div
          v-show="resetform"
          class="max-w-lg mx-auto my-10 bg-white p-8 rounded-xl shadow shadow-slate-300"
        >
          <h1 class="text-4xl font-medium">Reset password</h1>
          <p class="text-slate-500">Fill up the form to reset the password</p>

          <form action="" class="my-10">
            <div class="flex flex-col space-y-5">
              <label for="email">
                <p class="font-medium text-slate-700 pb-2">Email address</p>
                <input
                  id="email"
                  v-model="resetemail"
                  name="email"
                  type="email"
                  class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow"
                  placeholder="Enter email address"
                />
              </label>

              <div v-if="errors.email" class="error">{{ errors.email[0] }}</div>
 
              <button
                @click.prevent="ResetPassword()"
                class="w-full py-3 font-medium text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z"
                  />
                </svg>

                <span>Reset password</span>
              </button>
              <p class="text-center">
                Not registered yet?
                <a
                  href="#"
                  class="text-indigo-600 font-medium inline-flex space-x-1 items-center"
                  ><span>Register now </span
                  ><span
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-4 w-4"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                      /></svg></span
                ></a>
              </p>
            </div>
          </form>
          <div v-if="successMessage" class="text-green-400">{{ successMessage }}</div>
         <div v-if="errorMessage" class="text-red-400">{{ errorMessage }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "@/libs/axios";
import Swal from "sweetalert2";
import Cookies from "js-cookie";
import CryptoJS from 'crypto-js';



export default {
  name: "AuthModalCom",
  // setup() {
  //   const fullname = ref(false);

  //   const
  //   return {
  //     fullname,
  //     fullnameInput
  //   };
  // },

  data() {
    return {
      fullname: false,
      name: "",
      phone_number: "",
      cin: "",
      email: "",
      password: "",
      password_confirmation: "",
      resetform: false,
      resetemail: "",
      errorMessage:'',
      successMessage:'',
      errors:{},
      user:null
     
    };
  },
  // computed: {
  //   user() {
  //     return this.$store.getters.getUser;
  //   },
  // },
  mounted() {
 
   
  },

 

  methods: {
    fullnameInput() {
      this.fullname = !this.fullname;
    },
  
    // Register Method
    async register() {
      await axios.get("/sanctum/csrf-cookie");
      let form_data = new FormData();
      form_data.append("name", this.name);
      form_data.append("phone_number", this.phone_number);
      form_data.append("CIN", this.cin);
      form_data.append("email", this.email);
      form_data.append("password", this.password);
      form_data.append("password_confirmation", this.password_confirmation);
      try {
        await axios.post("/register", form_data)
        .then((response) => {

          Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title:response.data.message,
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true,
            });
       
        console.log(response.data.data);
        console.log(response.data.message);
        console.log(response.data.accessToken);

        localStorage.setItem('authToken',response.data.accessToken);
        Cookies.set('Auth',JSON.stringify(response.data.data))
          const UserRole = JSON.stringify(response.data.data.role)
       
          const hashedValue = CryptoJS.SHA256(UserRole).toString();
          Cookies.set('Role', hashedValue);
           
          if(UserRole === '2'){
            this.$router.push('/adminarea')
          }else {
            this.$router.go(-1)
          }
          
           });


      } catch (error) {
        Swal.fire({
          toast:true,
          position: "top-end",
          icon: "error",
          title: error,
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
        });
       console.log(error)
        
      }
      await this.triggerButtonClick();
    },
    // Login methods

    async login() {
      await axios.get("/sanctum/csrf-cookie")
      let form_data = new FormData();
      form_data.append("email", this.email);
      form_data.append("password", this.password);
      try {

        await axios 
          .post("/login", form_data,)
          .then((response) => {
              let message = response.data.message;
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title: message,
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true,
            });
            console.log(response.data.data);
            console.log(message);
            localStorage.setItem('authToken',response.data.accessToken);
          Cookies.set('Auth',JSON.stringify(response.data.data))
          const UserRole = JSON.stringify(response.data.data.role)
       
          const hashedValue = CryptoJS.SHA256(UserRole).toString();
          Cookies.set('Role', hashedValue);
           
          if(UserRole === '2'){
            this.$router.push('/adminarea')
          }else {
            this.$router.go(-1)
          }
            
          
            
          })
          

      } catch (error) {
        Swal.fire({
          toast: true,
          position: "top-end",
          icon: "error",
          title: error,
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
        });

        console.log(error);
      }
     
      await this.triggerButtonClick();
    

    },
    // Closed the Modal
    triggerButtonClick() {
      this.$refs.myButton.click(); // Programmatically trigger the button click event
    },
    // the method for disabled reset Password form
    disabledform() {
      this.resetform = true;
    },

  
    // Th request for reset password

    async ResetPassword() {
      await axios.get("/sanctum/csrf-cookie");

      let form_data = new FormData();
      form_data.append("email", this.resetemail);
    
    axios.post('/forgot-password',form_data)
        .then(response => {
          this.successMessage = response.data.status;
          this.errorMessage = '';
          this.errors = {};
        })
        .catch(error => {
          if (error.response.status === 422) {
            this.errors = error.response.data.errors;
            this.errorMessage = '';
          } else {
            this.errorMessage = error.response.data.message;
            this.errors = {};
          }
          this.successMessage = '';
        });
    },

  },
};
</script>
