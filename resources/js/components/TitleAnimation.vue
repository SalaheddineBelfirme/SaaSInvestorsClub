<template>
<div  class="typewriter items-center  arial-font p-3  h-[80px] ml-10 capitalize mt-4 text-5xl font-normal text-black text-left leading-normal">SaasInvertors</div>

</template>

<style >

.typewriter {
	width: 21.5px;
	white-space: nowrap;
	overflow: hidden;
	border-right: 4px solid #212121;
	animation: cursor 0.5s step-start infinite,
    text 4s steps(18) alternate infinite;
}

@keyframes cursor {
	0%, 100% { 
    border-color: #212121; 
   
  }
}

@keyframes text {
	0% { 
    width: 0; 
    color: rgb(0, 0, 0);
        
  }
	100% { 
    color:rgb(0, 30, 255) ;
    width: 90%;
    
  }
}
</style>


  <script lang="ts">
  export default {
    name:'TitleAnim',
    mounted(){
        // var text = document.getElementById('sec-text');
        // const textLoad = () => {
        //     setTimeout(() => {
        //         text.textContent = "SaasInvertors";
        //     }, 0);
        //     setTimeout(() => {
        //         text.textContent = "I'am a Developper full stack";
        //     }, 4000);
        //     setTimeout(() => {
        //         text.textContent = "YouTuber";
        //     }, 8000); //1s = 1000 milliseconds
        // }
        // textLoad();
        // setInterval(textLoad, 12000);
    }
  }
        
</script>

