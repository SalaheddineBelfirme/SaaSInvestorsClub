<template>
  <NavBarCom />
  <section
    class="w-full h-auto bg-gray-50 relative flex justify-between overflow-hidden"
  >
    <div data-aos="fade-right" class="w-[400px] container ml-3 h-screen">
      <TitleAnimation />
      <h1
        class="arial-font p-3 ml-10 capitalize mt-0 text-5xl font-normal text-black text-left leading-normal"
      >
        Startups For Sale. <strong> Zero Commission. </strong>
      </h1>
    </div>

    <div class="w-50 relative">
      <img
        data-aos="fade-left"
        src="https://saaslandwp.com/demo/wp-content/uploads/2022/02/banner_bg_stl2.png"
        alt=""
      />
      <img
        data-aos="fade-up-left"
        class="absolute top-0 left-40"
        src="https://saaslandwp.com/demo/wp-content/uploads/2018/11/banner_img.png"
        alt=""
      />
    </div>
  </section>
  <section class="relative w-full h-[250px]">
    <CardConterCom />
  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path
      fill="#FAFAFA"
      fill-opacity="1"
      d="M0,160L120,181.3C240,203,480,245,720,234.7C960,224,1200,160,1320,128L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"
    ></path>
  </svg>
  <section class="w-full h-auto bg-gray-50 p-5">
    <div class="pl-40 my-10 space-y-6">
      <h1
        class="leading-9 arial-font text-left subpixel-antialiased font-semibold text-black text-4xl"
      >
        Popular Startups For Sale 🚀
      </h1>
      <p class="text-left arial-font text-xl text-gray-400">
        Browse our popular SaasInvertors-starup listings
      </p>
    </div>
    <FilterBarCom />
    <div class="flex flex-wrap items-left gap-5 my-10 p-8 justify-evenly">
      <CardStartupCom v-for="startup in startups" :data="startup" />
    </div>
    <!-- component -->
    <div class="flex justify-center">
      <button
        class="border border-indigo-500 text-indigo-500 block rounded-sm font-bold py-3 px-5 mr-2 flex items-center hover:bg-indigo-500 hover:text-white"
        @click="previousPage"
      >
        <svg
          class="h-5 w-5 mr-2 fill-current"
          version="1.1"
          id="Layer_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="-49 141 512 512"
          style="enable-background: new -49 141 512 512"
          xml:space="preserve"
        >
          <path
            id="XMLID_10_"
            d="M438,372H36.355l72.822-72.822c9.763-9.763,9.763-25.592,0-35.355c-9.763-9.764-25.593-9.762-35.355,0 l-115.5,115.5C-46.366,384.01-49,390.369-49,397s2.634,12.989,7.322,17.678l115.5,115.5c9.763,9.762,25.593,9.763,35.355,0 c9.763-9.763,9.763-25.592,0-35.355L36.355,422H438c13.808,0,25-11.193,25-25S451.808,372,438,372z"
          ></path>
        </svg>
        Previous page
      </button>
      <button
        class="border border-teal-500 bg-indigo-500 text-white block rounded-sm font-bold py-3 px-5 ml-2 flex items-center"
        @click="nextPage"
      >
        Next page
        <svg
          class="h-5 w-5 ml-2 fill-current"
          clasversion="1.1"
          id="Layer_1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          viewBox="-49 141 512 512"
          style="enable-background: new -49 141 512 512"
          xml:space="preserve"
        >
          <path
            id="XMLID_11_"
            d="M-24,422h401.645l-72.822,72.822c-9.763,9.763-9.763,25.592,0,35.355c9.763,9.764,25.593,9.762,35.355,0
            l115.5-115.5C460.366,409.989,463,403.63,463,397s-2.634-12.989-7.322-17.678l-115.5-115.5c-9.763-9.762-25.593-9.763-35.355,0
            c-9.763,9.763-9.763,25.592,0,35.355l72.822,72.822H-24c-13.808,0-25,11.193-25,25S-37.808,422-24,422z"
          />
        </svg>
      </button>
    </div>

  </section>
   <p> <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, accusantium. Soluta doloremque nihil nostrum consequuntur facere? Harum recusandae ab veniam et, dolorum similique quod rerum nihil qui modi! Quo, id.</h1></p>
  <PricingCom/>

</template>

<script>
import NavBarCom from "@/components/NavBarCom.vue";
import TitleAnimation from "@/components/TitleAnimation.vue";
import CardConterCom from "@/components/CardConterCom.vue";
import FilterBarCom from "@/components/FilterBarCom.vue";
import CardStartupCom from "@/components/CardStartupCom.vue";
import PricingCom from '@/components/PricingCom.vue'

import axios from "@/libs/axios";

export default {
  name: "HomeView",
  components: {
    NavBarCom,
    TitleAnimation,
    CardConterCom,
    FilterBarCom,
    CardStartupCom,
    PricingCom,

  },
  data() {
    return {
      startups: [],
      startupsbtn: [],
      // Array to store the paginated data
    };
  },
  created() {
    this.getData();
  },
  methods: {
    async getUser() {
      console.log("in login");
      await axios.get("/sanctum/csrf-cookie");
      axios
        .get("/api/user")
        .then((response) => {
          console.log("user. here");
          console.log(response);
        })
        .catch((error) => {
          console.log(error);
        });
    },
    async getData() {
      // Make an API request to retrieve the paginated data from your Laravel backend
      // Assuming you are using axios for API requests
      await axios.get("/sanctum/csrf-cookie");
      axios
        .get("/api/startup_for_card")
        .then((response) => {
          this.startups = response.data.data;
          console.log(response.data.data)
          this.startupsbtn = response.data.links;
        })
        .catch((error) => {
          console.log(error);
        });
    },

    async previousPage() {
      // Make an API request to retrieve the previous page of data
      if (this.startupsbtn.prev) {
        await axios.get("/sanctum/csrf-cookie");
        axios
          .get(this.startupsbtn.prev)
          .then((response) => {
            this.startups = response.data.data;
            this.startupsbtn = response.data.links;
          })
          .catch((error) => {
            console.log(error);
          });
      }
    },
    async nextPage() {
      await axios.get("/sanctum/csrf-cookie");

      // Make an API request to retrieve the next page of data
      if (this.startupsbtn.next) {
        console.log("next");
        // await axios.get("/sanctum/csrf-cookie");
        axios
          .get(this.startupsbtn.next)

          .then((response) => {
            console.log(response);
            this.startups = response.data.data;
            this.startupsbtn = response.data.links;
          })
          .catch((error) => {
            console.log("la");
            console.log(error);
          });
      }
    },
  },
};
</script>
