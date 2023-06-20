<template>
  <header>
    <nav
      class="flex flex-wrap items-center justify-between border-b w-full py-4 md:py-0 px-4 p-4 text-lg text-gray-700 bg-white z-10 h-[60px  ]"
    >
      <div>
        <a href="/">
         <img class="w-40" src="https://res.cloudinary.com/dli4titxf/image/upload/v1685618731/Traffic/Capture_d_%C3%A9cran_2023-06-01_121536.png" />
        </a>
      </div>

      <svg @click="OpenToggel()"
        xmlns="http://www.w3.org/2000/svg"
        id="menu-button"
        class="h-6 w-6 cursor-pointer md:hidden block"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16"
        />
      </svg>

      <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
        <ul
          class="pt-4 text-base   text-gray-700 md:flex md:justify-between md:pt-0"
        >
          <li>
            <a class="md:p-4 py-2 block hover:text-purple-400" href="#"
              >Features</a
            >
          </li>
          <li>
            <a class="md:p-4 py-2 block hover:text-purple-400" href="#"
              >Pricing</a
            >
          </li>
          <li>
            <a class="md:p-4 py-2 block hover:text-purple-400" href="#"
              >Customers</a
            >
          </li>
          <li>
            <a class="md:p-4 py-2 block hover:text-purple-400" href="#">Blog</a>
          </li>
          <li>
            <a
              href="#"
             
              data-modal-target="authentication-modal"
              data-modal-toggle="authentication-modal"
              class="md:p-4 py-2 block hover:text-purple-400 text-purple-500"
              >Sign in</a
            >
          </li>
          
        </ul>
        <routerLink class="max-md:w-full max-md:flex  max-md:justify-center    max-sm:w-full max-sm:flex max-sm:justify-center" to="/sell-your-startup">
        <button class="block btnsell w-50 h-15  items-center px-4 py-2  font-sans arial-font text-white text-md font-normal leading-7 bg-indigo-500 "> Sell Your Startup</button>
    </routerLink>
    </div>
    </nav>
  </header>

  <AuthModalCom/>
  
</template>



<style scoped>
.btnsell {
  animation: headShake 0.5s linear 1s alternate;
}

@keyframes headShake {
  0% {
    transform: translateX(0);
  }
  25% {
    transform: translateX(-10px) rotate(-5deg);
  }
  75% {
    transform: translateX(10px) rotate(5deg);
  }
  100% {
    transform: translateX(0);
  }
}




</style>
 
<script  setup>

import { onMounted } from 'vue';
import AuthModalCom from './AuthModalCom.vue';
import { initFlowbite } from 'flowbite';



onMounted(() => {
    initFlowbite();
})

 function OpenToggel(){
  const button = document.getElementById('menu-button');
 const menu = document.getElementById('menu');


 button.addEventListener('click', () => {
  menu.classList.toggle('hidden');
  });
 }

 

</script>
