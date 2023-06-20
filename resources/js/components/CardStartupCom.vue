<template>
   <router-link :to="'/startup-listings?id='+data.id">
<div class="w-[360px] bg-white drop-shadow-2xl   h-[550px] items-center space-y-7 px-8 py-4 border border-black hover:border-2 hover:border-indigo-500" >
    <img class="w-full " :src="data.traffic_metrics_blur" alt="">
     <div class="space-y-5 text-left p-3">
        <h1 class="text-black   text-xl arial-font text-base font-semibold leading-6 no-underline">
         {{ data.startup_description_short.slice(0,47) }}
        </h1>
        <p class="font-normal leading-6 text-md text-gray-500">
            Find online communities and cohort based courses
        </p>
        <hr class="border">
        <div class="space-y-4 ">
         <div class="flex gap-2 ">
            <p class="font-semibold text-md font-sans arial-font text-base leading-6 text-black">ARR :</p>
            <p class="text-black">{{ data.arr }}</p>
         </div>
         <div class="flex gap-2">
            <p class="font-semibold text-md font-sans arial-font text-base leading-6 text-black">Category :</p>
            <p class="text-black" >{{ data.category }}</p>
         </div>
         <div class="flex gap-2">
            <p class="font-semibold text-md font-sans arial-font text-base leading-6 text-black">Asking Price :</p>
            <p class="text-black">{{ data.price }}DH</p>
         </div>
        </div>
     </div>
</div> 

</router-link>

</template>

<script >
export default {

    name:'CardStartupCom',

    props:{
      data:Object
    },
    
}

</script>