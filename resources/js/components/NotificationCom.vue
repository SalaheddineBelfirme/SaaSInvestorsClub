<template>
<button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
            <svg class="h-6 w-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
            </svg>
            <span v-if="DisabledCount" class="absolute top-2 right-3 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">
                {{count}}</span>
        
        </button>
<!-- test -->
        <div v-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

        <div v-show="dropdownOpen" class="absolute right-0 top-10 mt-30 bg-white rounded-md shadow-lg overflow-hidden z-20" style="width:20rem;">
            <div class="py-2">
               
                <a @click.prevent="NavigateStartups(notification.id)" v-for="notification in notifications" href="#" class="flex items-center px-4 py-3 border-b hover:bg-gray-100 -mx-2">
                    <img class="h-8 w-8 rounded-full object-cover mx-1" :src="notification.UserImage">
                    <p class="text-gray-600 text-left text-sm mx-2">
                        <span class="font-extrabold text-black" href="#">{{ notification.UserName }}&nbsp;</span>{{ notification.Notification }} </p>
                </a>
            </div>

            
        </div>
    
</template>

  <script setup>
  import { ref,onMounted } from 'vue';
  import axios from "@/libs/axios"
  
  const  dropdownOpen = ref(false);
  const notifications = ref([])
  const count = ref('');
  const DisabledCount = ref(true)

   async function GetNotifications(){
  await axios.get('/api/getNotifications')
   .then((response)=>{
    notifications.value = response.data.data 
    console.log(notifications.value)
   })
  await axios.get('/api/getCount')
  .then((response)=>{
   count.value = response.data
     if(response.data === 0){
        DisabledCount.value = false
     }
  })
   }

   async function NavigateStartups(id){
        
       await axios.post('/api/deleteNotify/'+id)
        .then((response)=>{
            console.log(response.data.message);
        })
     dropdownOpen.value = false 
     localStorage.setItem("lastSection",'section3')  
     window.location.reload()
    }

   onMounted(()=>{
    GetNotifications()
   })
   
 </script>