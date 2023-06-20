<template>


<div class="flex justify-center h-screen mt-10 px-8">
    
    <form class="max-w-2xl" @submit.prevent="updateuser()">
         <div class="border shadow rounded-lg p-3">
            <div class="py-5 border-b relative">
                  <img class="h-28 mx-auto border border-gray-400 rounded-full w-28" :src="userImage" />
           <div @click="open" class="absolute cursor-pointer left-[57%] top-[60%] w-6 h-6 rounded-full bg-indigo-500"><i class="fa-solid fa-pen text-xs text-white"></i></div>
             </div>
        <div class="flex flex-wrap  dark:bg-gray-600">
            
            <h2 class="text-xl text-gray-600 dark:text-gray-300 pb-2">Account settings:</h2>

            <div class="flex text-left flex-col gap-2 w-full border-gray-400">

                <div>
                    <label class="text-gray-600 dark:text-gray-400">Full name
                    </label>
                    <input
                    v-model="UserName"
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow dark:bg-gray-600 dark:text-gray-100"
                        type="text">
                </div>

                <div>
                    <label class="text-gray-600 dark:text-gray-400">Email</label>
                    <input
                    v-model="UserEmail"
                        class="w-full py-3 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow dark:bg-gray-600 dark:text-gray-100"
                        type="text">
                </div>
               
                 
               

                
                <div class="flex justify-end">
                    <button 
                        class="py-1.5 px-3 m-1 text-center bg-violet-700 border rounded-md text-white  hover:bg-violet-500 hover:text-gray-100 dark:text-gray-200 dark:bg-violet-700"
                        type="submit">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
</template>

*<script setup>
import axios from "@/libs/axios";
import Swal from "sweetalert2";
import Cookies from "js-cookie";
import { ref,onMounted } from "vue";




const cloudName = "dli4titxf"; // replace with your own cloud name
const uploadPreset = "dgqh5xrx"; // replace with your own upload preset

const myWidget = cloudinary.createUploadWidget(
  {
    cloudName: cloudName,
    uploadPreset: uploadPreset,
    folder: "user", //upload files to the specified folder
  },
 async  (error, result) => {
    if (!error && result && result.event === "success") {
      console.log("Done! Here is the image info: ", result.info.url);
      
      userImage.value = result.info.url;
       console.log(userImage.value);

    }
  }
);

function open() {
  myWidget.open();
}
 
 async function updateuser(){
    await axios.get("/sanctum/csrf-cookie");
    let form = new FormData();
      form.append('image', userImage.value);
      form.append('name',UserName.value)
      form.append('email',UserEmail.value)
        try{
            
        await  axios.post('/api/userupdate/'+UserId.value, form)
        .then((response)=>{
            
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title: response.data.message,
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true,
            });
            Cookies.set('Auth',JSON.stringify(response.data.data))
        })

        }catch(error){
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "error",
              title: error,
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true,
            });
        }

    

  }

const userImage = ref(JSON.parse(Cookies.get('Auth')).image);
const UserName = ref(JSON.parse(Cookies.get('Auth')).name)
const UserEmail = ref(JSON.parse(Cookies.get('Auth')).email)
const UserId = ref(JSON.parse(Cookies.get('Auth')).id)
onMounted(()=>{

   
})
</script>

