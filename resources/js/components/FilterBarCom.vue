<template>
    
  <div class="flex mt-5 justify-around">
    <select placeholder="" class=" text-black border-2  border-black w-[200px] p-2" name="" id="">
      <option class="">Default Sort</option>
      <option>Price</option>
      <option>Name</option>
    </select>



    <select placeholder="" class="text-black border-2  border-black w-[200px] p-2" name="" id="">
      <option class="">Filter</option>
      <option>Price</option>
      <option>Name</option>
    </select>
    <!-- <div class="flex">
      <div class="w-10 cursor-pointer bg-black p-2">
        <i
          class="fa-solid fa-magnifying-glass text-2xl text-white self-center"
        ></i>
      </div>
      <input 
        type="text"
        
        placeholder="Search"
        class="w-60 border border-black p-2"
      />
    </div> -->

    <div class="search-box border-2 border-black">
     <input class="search-txt" type="text" name="" placeholder="Type to Search">
<a class="  bg-black float-right w-10 h-10 rounded-full flex justify-center items-center text-white no-underline transition duration-400" href="#">
  <i class="fas fa-search text-xl"></i>
</a>
</div>
  </div>
</template>

<style scoped>

.search-box
{
  
  background : #ffffff;
  height : 60px;
  border-radius : 50px;
  padding : 10px;
  
}

.search-txt
{
  border:none;
  background:none;
  outline:none;
  float:left;
  padding:0;
  color: #000000;
  font-size:16px;
  transition : 0.4s;
  line-height: 40px;
  width : 0px;
}
.search-box:hover > .search-txt
{
  width: 240px;
  padding: 0 6px;
}
.search-box:hover > .search-btn
{
 background:white;
}
</style>
<script lang="ts">
export default {
    name:'FilterBarCom',

}
</script>