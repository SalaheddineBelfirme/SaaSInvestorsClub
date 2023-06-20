<template>
  <NavBarCom />

  <section class="space-y-10 pt-10 h-auto">
    <div class="flex flex-col gap-5 items-center">
      <div class="w-[460px]">
        <h1
          class="arial-font text-left font-sans text-3xl leading-7 text-black font-bold"
        >
          Hey 👋 founder!
        </h1>
      </div>
      <div class="w-[460px] space-y-2">
        <h1
          class="arial-font text-left font-sans text-2xl leading-7 text-black font-bold"
        >
          Let's start with your details
        </h1>
        <p
          class="text-black text-left font-sans arial-font font-normal text-md"
        >
          Your startup should be working and have market validation:<strong
            >users and revenue.</strong
          >
        </p>
      </div>
    </div>
    <!-- Form for Sell Startups -->
    <form
      @submit.prevent="AddStartUp()"
      class="flex flex-col h-auto p-6 items-center"
    >
      <div class="w-[500px] space-y-10">
        <hr class="border" />
        <!-- Seller Informaton -->
        <div v-show="form1Disabled" class="space-y-8">
          <div class="w-full h-auto">
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Your first name*</label
            >
            <input
              type="text"
              name="Ownername"
              placeholder="Elon"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div class="w-full h-auto">
            <label
              for="email"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Your Email address*</label
            >
            <input
              type="email"
              name="email"
              id="email"
              v-model="email"
              placeholder="example@gmail.com"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div class="w-full h-auto">
            <a
              href="#form2"
              class="bg-indigo-500 h-12 w-full float-right text-white border border-indigo-500 rounded-md pl-10 pr-10 pt-3 font-semibold leading-6"
              @click="disableForm(1)"
            >
              Get Ready
            </a>
          </div>
        </div>
        <!--  Start up Information -->
        <div id="form2" class="pt-20 space-y-6" v-show="form2Disabled">
          <div class="flex flex-col gap-4">
            <span
              class="text-red-100 w-40 bg-indigo-900 rounded-md px-3 font-normal py-2 text-md"
              >Step 2 of 6 →</span
            >
            <h1
              class="arial-font font-sans text-black text-left text-3xl font-bold leading-6"
            >
              Tell us more about your startup
            </h1>
          </div>
          <div>
            <label
              for="Startupname"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >What's your startup's name?*</label
            >
            <input
              type="text"
              name="Startupname"
              id="Ownername"
              v-model="name"
              placeholder="Saas Invertors"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="stat"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >What's your startup's website?*</label
            >
            <input
              type="link"
              name="StartupWebsite"
              id="StartupWebsite"
              v-model="website"
              placeholder="https://atlasweb.solutions"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >What does your startup do?*</label
            >
            <input
              type="text"
              v-model="Startup_Description_Short"
              placeholder="One sentence that best describes your project"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Where are you based?*</label
            >
            <input
              type="text"
              v-model="location"
              placeholder="Marrakech,Morocco"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div class="w-full h-auto">
            <a
              href="#form3"
              class="bg-indigo-500 h-12 w-full float-right text-white border border-indigo-500 rounded-md pl-10 pr-10 pt-3 font-semibold leading-6"
              @click="disableForm(2)"
            >
              Next Step: Startup Overview
            </a>
          </div>
        </div>
        <!-- Startup Overview -->
        <div id="form3" class="pt-14 space-y-6" v-show="form3Disabled">
          <div class="space-y-8 flex flex-col">
            <span
              class="text-red-100 w-40 bg-indigo-900 rounded-md px-3 font-normal py-2 text-md"
              >Step 3 of 6 →</span
            >
            <h1
              class="arial-font font-sans text-black text-left text-3xl font-bold leading-6"
            >
              Startup Overview
            </h1>
            <p
              class="text-black text-left font-sans arial-font font-normal text-md"
            >
              <strong>Tell a story:</strong> how did you start? Why are you
              selling it? What is the most important thing you reached with this
              startup? Buyers will love your story and it's a good point for
              your sale.
            </p>
          </div>
          <div>
            <label
              for="Startupname"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Share a brief story of your startup*</label
            >
            <textarea
              v-model="Overview_desc"
              placeholder="Please describe your project in detail"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="stat"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >How many customers do you have?*</label
            >
            <input
              type="number"
              v-model="NB_customers"
              placeholder="It could be both free, trial, or paying users"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Category?*</label
            >
            <select
              v-model="categorie_id"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            >
              <option selected>Select Category</option>
              <option :value="Category.id" v-for="Category in Categories">
                {{ Category.name }}
              </option>
            </select>
          </div>

          <div>
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >When did you launch?*</label
            >
            <input
              type="text"
              v-model="date_launch"
              placeholder="2023"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >What is your business model and pricing?*</label
            >
            <input
              type="text"
              v-model="Businessmodel_pricing"
              placeholder="Describe how your project makes money"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <!-- Startup Overview (contd.) -->
          <div class="space-y-4">
            <hr class="border" />
            <h1
              class="arial-font font-sans text-black text-left text-3xl font-bold leading-6"
            >
              Startup Overview (contd.)
            </h1>
          </div>

          <div>
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Who are your competitors?*</label
            >
            <input
              type="text"
              v-model="Competitors"
              placeholder="Who are some of your biggest competitors?"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Who is your target customer?*</label
            >
            <input
              type="text"
              v-model="target_customer"
              placeholder="Developers, designers, marketers"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >What assets are you including in the sale?*</label
            >
            <input
              type="text"
              v-model="assets"
              placeholder="Eg. website, domain, email list, social media profiles, etc."
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="Ownername"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >What's your tech stack?*</label
            >
            <input
              type="text"
              v-model="Tech_Stack"
              placeholder="React, Node.js, Airtable, Notion, etc."
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div class="w-full h-auto">
            <a
              href="#form4"
              class="bg-indigo-500 h-12 w-full float-right text-white border border-indigo-500 rounded-md pl-10 pr-10 pt-3 font-semibold leading-6"
              @click="disableForm(3)"
            >
              Next Step: Financial Details
            </a>
          </div>
        </div>
        <!-- Financial Details -->
        <div id="form4" class="pt-20 space-y-6" v-show="form4Disabled">
          <div class="space-y-4 flex flex-col">
            <span
              class="text-red-100 w-40 bg-indigo-900 rounded-md px-3 font-normal py-2 text-md"
              >Step 4 of 6 →</span
            >
            <h1
              class="arial-font font-sans text-black text-left text-3xl font-bold leading-6"
            >
              Financial Details
            </h1>
            <p class="text-left">
              ✅ It isn't required to be recurring revenue. It can be a one-time
              revenue throughout the year.
            </p>
            <p class="text-left">
              ✅ Set asking price reasonably. Buyers look for the opportunity
              but pay for performance.
            </p>
          </div>
          <div>
            <label
              for="Startupname"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >What is your Annual Recurring Revenue (ARR)?*</label
            >
            <input
              type="number"
              v-model="ARR"
              placeholder="$10,000 "
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              for="stat"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Expenses*</label
            >
            <input
              v-model="Expenses"
              id="Expenses"
              placeholder="$100 for Webflow, $20 for domain, etc"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div>
            <label
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Asking Price*</label
            >
            <input
              type="text"
              name="price"
              id="price"
              v-model="price"
              placeholder="$30,000"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              required
            />
          </div>

          <div class="w-full h-auto">
            <a
              href="#form5"
              class="bg-indigo-500 h-12 w-full float-right text-white border border-indigo-500 rounded-md pl-10 pr-10 pt-3 font-semibold leading-6"
              @click="disableForm(4)"
            >
              Next Step: Metrics
            </a>
          </div>
        </div>
        <!-- Metrics Images -->
        <div id="form5" class="pt-20 space-y-6" v-show="form5Disabled">
          <div class="space-y-4 flex flex-col">
            <span
              class="text-red-100 w-40 bg-indigo-900 rounded-md px-3 font-normal py-2 text-md"
              >Step 5 of 6 →</span
            >
            <h1
              class="arial-font font-sans text-black text-left text-3xl font-bold leading-6"
            >
              Metrics
            </h1>
            <p class="text-left">
              ✅ Upload Google Analytics or another analytics screenshot showing
              traffic metrics. Buyers prefer to contact startups with traffic
              screenshots first.
            </p>
            <p class="text-left">
              ✅ Upload Stripe or another payment gateway screenshot showing
              revenue breakdown. Buyers love startups with revenue screenshots.
            </p>
          </div>
          <hr class="border" />
          <div class="flex flex-col gap-4">
            <!-- TrafficComponent -->
            <TrafficButtonCld @urlUpdated="handleUrlUpdate" />
            <!-- RevenueComponent -->
            <RevenueButtonCld @urlUpdatedRevenue="UrlUpdateRevenue" />
          </div>
          <div class="w-full h-auto">
            <a
              href="#form6"
              class="bg-indigo-500 h-12 w-full float-right text-white border border-indigo-500 rounded-md pl-10 pr-10 pt-3 font-semibold leading-6"
              @click="disableForm(5)"
            >
              Next Step: How It Works
            </a>
          </div>
        </div>
        <!-- How it works -->
        <div id="form6" class="pt-20 space-y-6" v-show="form6Disabled">
          <div class="space-y-4 flex flex-col">
            <span
              class="text-red-100 w-40 bg-indigo-900 rounded-md px-3 font-normal py-2 text-md"
              >Step 6 of 6 →</span
            >
            <h1
              class="arial-font font-sans text-black text-left text-3xl font-bold leading-6"
            >
              How It Works (Optional)
            </h1>
            <p class="text-left">
              ✅ Share a link to a short video explaining how your project
              works. It could be either YouTube or Loom link.
            </p>
            <p class="text-left">
              ✅ Based on our data, founders with video receive 50% more
              requests from buyers. Here is a sweet.
              <a
                class="text-indigo-500"
                target="_blank"
                href="https://www.loom.com/share/5085085404b8487f984f535b1e82baed"
                >Example</a
              >
            </p>
          </div>
          <hr class="border" />
          <div class="w-full h-auto">
            <label
              for="video"
              class="block text-left mb-2 text-md font-bold arial-font font-sans leading-6 text-gray-900 dark:text-white"
              >Video URL</label
            >
            <input
              type="text"
              v-model="Video"
              placeholder="https://www.loom.com/your-video-url"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
              
            />
          </div>
          <div class="w-full h-auto">
            <button v-if="!this.Checkuser"
              class="bg-red-700/50 cursor-not-allowed h-12 w-full float-right text-white rounded-md pl-10 pr-10 pt-2 font-semibold leading-6"
              type="button"
            >
              Submit For Review
            </button>
            <button v-if="this.Checkuser"
              class="bg-red-700 h-12 w-full float-right text-white rounded-md pl-10 pr-10 pt-2 font-semibold leading-6"
              type="submit"
            >
              Submit For Review
            </button>
          </div>
        </div>
      </div>
    </form>
  </section>
  
</template>

<style >
.my-popup {
  background-color: #ff0000 !important;
  color: #ffffff !important;
}
.my-confirm-button {
  background-color: rgb(76, 4, 4) !important;
  color: white !important;
  width: 70px !important;
  margin-left: 70% !important;
}
</style>

<script>
import NavBarCom from "@/components/NavBarCom.vue";
import TrafficButtonCld from "@/components/TrafficButtonCld.vue";
import RevenueButtonCld from "@/components/RevenueButtonCld.vue";
import axios from "@/libs/axios"
import Swal from "sweetalert2";
import Cookies from "js-cookie"

export default {
  components: {
    NavBarCom,
    TrafficButtonCld,
    RevenueButtonCld,
  },
  data() {
    return {
      // Startup Informtions
      name: null,
      website: null,
      email: null,
      Startup_Description_Short: null,
      location: null,
      Overview_desc: null,
      NB_customers: null,
      date_launch: null,
      Businessmodel_pricing: null,
      Competitors: null,
      target_customer: null,
      assets: null,
      Tech_Stack: null,
      ARR: null,
      Expenses: null,
      price: null,
      categorie_id: null,
      Video:null,
      owner: null,
      Revenue_Metrics: null,
      Traffic_Metrics: null,
      Revenue_Metrics_blur: null,
      Traffic_Metrics_blur: null,
      secureImagePath:null,
      // Form Change
      form1Disabled: true,
      form2Disabled: false,
      form3Disabled: false,
      form4Disabled: false,
      form5Disabled: true,
      form6Disabled: false,
      // Regex validation
      // All Categories
      Categories : null,
      // Attribut for check
      Checkuser:Cookies.get('Auth') ? Cookies.get('Auth') : '' 

    };
  },
  mounted(){

  

    this.getcategory()


    
    if(!(Cookies.get('Auth'))){
        
      Swal.fire({
  toast:true,
  title: 'You should be logged for sell your startup ',
  position:'top-end',
  allowOutsideClick:false,
  showConfirmButton: true,
  confirmButtonText:'I agree',
   customClass: {
    popup: 'my-popup',
    confirmButton: 'my-confirm-button',
  },
  }).then((result) => {
  if (result.isConfirmed) {
    // Programmatically trigger click event on the modal button
   
    
  }
});


    }


  },

  methods: {
    handleUrlUpdate(url) {
      // Handle the URL update here
      this.Traffic_Metrics = url[0];
      this.Traffic_Metrics_blur = url[1]
      // You can store it in a data property or perform any other actions
    },
    UrlUpdateRevenue(url) {
      this.Revenue_Metrics = url[0];
      this.Revenue_Metrics_blur = url[1]

    },

    disableForm(formNumber) {
      switch (formNumber) {
        case 1:
          this.form2Disabled = true;
          break;
        case 2:
          this.form3Disabled = true;
          break;
        case 3:
          this.form4Disabled = true;
          break;
        case 4:
          this.form5Disabled = true;
          break;
        case 5:
          this.form6Disabled = true;
          break;
      }
    },
    // Add Starup

    async AddStartUp() {
      await axios.get("/sanctum/csrf-cookie");
       const user_id = JSON.parse(Cookies.get('Auth')).id
       
      const formData = new FormData();
      formData.append("name", this.name);
      formData.append("website",this.website);
      formData.append("email",this.email);
      formData.append("Startup_Description_Short", this.Startup_Description_Short);
      formData.append("location", this.location);
      formData.append("Overview_desc",this.Overview_desc);
      formData.append("NB_customers",this.NB_customers);
      formData.append("date_launch", this.date_launch);
      formData.append("Businessmodel_pricing", this.Businessmodel_pricing);
      formData.append("Competitors", this.Competitors);
      formData.append("target_customer", this.target_customer);
      formData.append("assets", this.assets);
      formData.append("Tech_Stack", this.Tech_Stack);
      formData.append("ARR", this.ARR);
      formData.append("Expenses", this.Expenses);
      formData.append("price", this.price);
      formData.append("categorie_id",this.categorie_id);
      formData.append("user_id",user_id);
      formData.append("Video", this.Video);
      formData.append("Revenue_Metrics",this.Revenue_Metrics);
      formData.append("Traffic_Metrics",this.Traffic_Metrics);
      formData.append("Revenue_Metrics_blur",this.Revenue_Metrics_blur);
      formData.append("Traffic_Metrics_blur",this.Traffic_Metrics_blur);
      try{

        // const formDataArray = Array.from(formData.entries());
        //   console.log(formDataArray);
        // Log the entire FormData

        await axios.post("/api/AddStartUp", formData).then((response) => {
          // Get User
          axios.get("/api/user").then((response) => {
            const user_role = response.data.role;
            console.log(user_role);
          });

          // Create Notification
          console.log(user_id);
          const notify = new FormData();
          notify.append(
            "Notification",
            "Send You Request For Sell his startup"
          );
          notify.append("user_id", user_id);
          axios.post("/api/createNotify", notify).then((response) => {
            axios.post("/api/SendNotifyEmail").then((response) => {
              console.log(response.data.message);
            });
             
          });

          Swal.fire({
            toast: true,
            position: "top-end",
            icon: "success",
            title: response.data.message,
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
          });
          this.$router.push("/");
        });
    }catch (error){
      Swal.fire({
            position: "top-end",
            icon: "error",
            title: error.response.data.message,
            showConfirmButton: false,
            timer: 1500,
          });
      console.log(error);
    }
  
     

    },

    // Get All the Categories
    async getcategory(){
       await axios.get('/api/getCategories')
        .then((response)=>{
         this.Categories = response.data.data
         console.log(response.data.data)
        })
       },

       downloadImage() {
      const imageUrl = ' http://res.cloudinary.com/dli4titxf/image/upload/v1686672607/Traffic/54d38422400cb900cbb4d5ecb0a636fc-removebg-preview.png'; // Replace with the actual image URL
      const folderPath = 'downloads'; // Specify the desired folder path within the 'public' directory
      const filename = 'image.jpg'; // Specify the desired filename for the downloaded image

      const link = document.createElement('a');
      link.href = `${process.env.BASE_URL}${folderPath}/${filename}`;
      link.download = filename;
      link.target = '_blank';
      link.rel = 'noopener noreferrer';
      link.click();
    },
    




  },
};
</script>
