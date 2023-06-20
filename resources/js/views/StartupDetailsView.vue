<template>
<NavBarCom/>

<section class="pt-[3%] pl-[10%] pr-[10%] ">
   <div class=" flex gap-4 ">


    <!-- LEFT Wrap  -->
    <!-- First WRAP -->
    <div class="w-[664px] flex flex-col gap-4">

    <div class="border w-full border-gray-300 rounded-md p-10 shadow-md">
 
     <div class="text-left space-y-5 mb-4">
        <h1 class="arial-font h1 capitalize font-sans font-semibold text-3xl text-black">{{Onestartup.name}}</h1>
        <p class=" arial-font text-black  font-sans text-base font-normal leading-relaxed">{{ Onestartup.Startup_Description_Short }}</p>
        <p class="text-gray-500 mb-0 mr-1% text-sm leading-relaxed">Published on {{PublishDate}}</p>
     </div>
     <hr class="border">
       <img class="min-w-1/2 max-w-full rounded-md mt-5 mb-5 shadow-md" :src="Onestartup.Traffic_Metrics_blur" alt="">

    </div>

     

      <!-- SECONDE WRAP -->
        <div class="border text-left w-full border-gray-300 rounded-md p-3 shadow-md">
            <!-- Overview -->
         <div class="p-10 space-y-4 mb-4">
          <h4 class="font-semibold text-black text-xl text-left  text-base leading-6">Overview 🔍</h4>
          <div class="space-y-4">
          <p>{{ Onestartup.Overview_desc }}</p>
          <div class="">
           <p>
            ✅ {{ Onestartup.ARR}}$ on ARR
           </p>
           <p>✅{{Onestartup.NB_customers}} Customers</p>
           <p>✅Business model:{{Onestartup.Businessmodel_pricing}}</p>
           <p>✅Built with {{ Onestartup.Tech_Stack }}</p>
        </div>
           </div>
         </div>
         <!-- End Overview -->
         <hr class="border">
         <!-- Business Model 💸 -->
            <div class="p-10 space-y-3">
              <h1 class="font-semibold text-black text-xl text-left  text-base leading-6">Business Model 💸</h1>
              <p class="text-md font-normal  ">{{Onestartup.Businessmodel_pricing}}</p>
            </div>
           <!-- End Business Model 💸 -->
           <hr class="border">
           <!-- target_customer -->
           <div class="p-10 space-y-3">
              <h1 class="font-semibold text-black text-xl text-left  text-base leading-6">Target Customer 🎯</h1>
              <p class="text-md font-normal  ">{{Onestartup.target_customer}}</p>
            </div>
           <!-- End target_customer -->
           <hr class="border">
           <!-- Tech Stack 🏗 -->
           <div class="p-10 space-y-3">
              <h1 class="font-semibold text-black text-xl text-left  text-base leading-6">Tech Stack 🏗</h1>
              <p class="text-md font-normal">{{Onestartup.Tech_Stack}}</p>
            </div>
           <!-- END Tech Stack 🏗 -->
           <hr class="border">
           <!-- Expenses 💵 -->
           <div class="p-10 space-y-3">
              <h1 class="font-semibold text-black text-xl text-left  text-base leading-6">Expenses 💵</h1>
              <p class="text-md font-normal">{{Onestartup.Expenses}}</p>
            </div>
           <!-- END Expenses 💵 -->
           <hr class="border">
           <!-- Included Assets 🧵 -->
           <div class="p-10 space-y-3">
              <h1 class="font-semibold text-black text-xl text-left  text-base leading-6">Included Assets 🧵</h1>
              <p class="text-md font-normal">{{Onestartup.assets}}</p>
            </div>
           <!-- END Included Assets 🧵 -->
           <hr class="border">
           <!-- Competitors 🏎 -->
           <div class="p-10 space-y-3">
              <h1 class="font-semibold text-black text-xl text-left  text-base leading-6">Competitors 🏎</h1>
              <p class="text-md font-normal">{{Onestartup.Competitors}}</p>
            </div>
           <!-- END Competitors 🏎 -->
           <hr class="border">
           <!-- Traffic Metrics 📈 -->
           <div class="max-h-full max-w-full min-h-0 min-w-0 bg-white  rounded-none mb-0 p-6">
            <h1 class="font-semibold text-black text-xl text-left  text-base leading-6">Traffic Metrics 📈</h1>
            <div class="p-5">
            <img class="min-w-1/2 max-w-full rounded-md mt-5 mb-5 " :src="Onestartup.Traffic_Metrics_blur" alt="">
            </div>
           </div>
            <!-- END Traffic Metrics 📈 -->
            <hr class="border">
            <!-- Revenue Metrics 🤑 -->
            <div class="max-h-full max-w-full min-h-0 min-w-0 bg-white  rounded-none mb-0 p-6">
            <h1 class="font-semibold text-black text-xl text-left  text-base leading-6">Revenue Metrics 🤑</h1>
            <div class="p-5">
            <img class="min-w-1/2 max-w-full rounded-md mt-5 mb-5 " :src="Onestartup.Revenue_Metrics_blur" alt="">
            </div>
           </div>
            <!-- end Revenue Metrics 🤑 -->
            <hr class="border">
         </div>

     </div>

   
     <div class="h-[500px] text-left stickyPosition  w-[360px]  bg-white border border-gray-300 rounded-md py-8 px-8 pb-5   shadow-md">
      <div class="space-y-4">
      <h1 class="font-semibold arial-font  text-black text-xl text-left  text-base leading-6">Asking Price:</h1>
      <h3 class="text-2xl arial-font font-sans font-thin  leading-3 ">{{ Onestartup.price }}MD</h3>   
      </div>
   <hr class="border mt-10">

   <div class=" flex flex-col items-center justify-center py-4 gap-5 h-40  w-[270px]">
    <a href="#" class="bg-indigo-500 font-bold arial-font font-sans uppercase pl-8 py-3  text-white w-full h-12  hover:bg-indigo-700  rounded-md">Contact the founder 🔒</a>
    <a href="#" class="bg-white pl-8 uppercase arial-font font-sans font-bold py-3 border border-black text-black  hover:border-indigo-500 hover:text-indigo-500  w-full h-12  rounded-md">VISIT STARTUP WEBSITE 🔒</a>
   </div>
   <hr class="border mt-3">
     <div class="space-y-3 pt-5 text-black  ">
      <p class="space-x-2 text-sm " ><span>💰</span><strong>ARR :</strong>  {{ Onestartup.ARR}}MD</p>
      <p class="space-x-2 text-sm" ><span>🎯</span><strong>Customers :</strong>  {{ Onestartup.NB_customers}}</p>   
      <p class="space-x-2 text-sm" ><span>🙌🏻</span><strong>Launched :</strong>  {{PublishDate.split(',')[1]}}</p>
      <p class="space-x-2 text-sm" ><span>🔍</span><strong>Category :</strong>  {{Onestartup.category.name}}</p>
      </div>

 </div>
   



   </div>

</section>

</template>

<style>

.stickyPosition{
position: -webkit-sticky;
position: sticky  !important;
top: 5% !important;
}

</style>

<script >

import axios from "@/libs/axios"
import NavBarCom from "@/components/NavBarCom.vue";

 export default {

    components:{
        NavBarCom
    },
    
    data(){

        return{
         Onestartup:'',
         PublishDate:''
        }
    },
    created(){
        this.getStartup()
    },
    

    props: {
    id: {
      type: String,
      default: null,
    },
    },
    methods:{

       async getStartup(){
       await axios.post('/api/Show/'+this.id)
        .then((response)=>{
            this.Onestartup = response.data.data
              console.log(response.data.data);
            this.PublishDate = response.data.PublishDate
            console.log(response.data.data.name);
            console.log(response.data.PublishDate);

        })

        }   
    
    }
 }

</script>