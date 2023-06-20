<template>

    <div class="space-y-4 ">
                <h1 class="text-md font-bold text-left arial-font font-sans leading-6 text-gray-900">Revenue  Metrics*</h1>
                <button type="button" @click.prevent="open()" class="border-2  float-left border-indigo-500 text-black h-12 w-40"><i class="fa-solid fa-cloud-arrow-up"></i> Upload File</button>
                <img v-if="RevenueImage" class="h-60 w-60" :src="RevenueImage" alt="">
              </div>
    </template>
    <script setup>
    
    import { ref , defineEmits } from "vue";
    
    const emit = defineEmits(["urlUpdatedRevenue"]);

    const cloudName = "dnqnmggba"; // replace with your own cloud name
    const uploadPreset = "q40zikgw"; // replace with your own upload preset
    
    const myWidget = cloudinary.createUploadWidget(
      {
        cloudName: cloudName,
        uploadPreset: uploadPreset,
        // cropping: true, //add a cropping step
        // showAdvancedOptions: true,  //add advanced options (public_id and tag)
        // sources: [ "local", "url"], // restrict the upload sources to URL and local files
        // multiple: false,  //restrict upload to a single file
        folder: "Revenue", //upload files to the specified folder
        // tags: ["users", "profile"], //add the given tags to the uploaded files
        // context: {alt: "user_uploaded"}, //add the given context data to the uploaded files
        // clientAllowedFormats: ["images"], //restrict uploading to image files only
        // maxImageFileSize: 2000000,  //restrict file size to less than 2MB
        // maxImageWidth: 2000, //Scales the image down to a width of 2000 pixels before uploading
        // theme: "purple", //change to a purple theme
      },
      (error, result) => {
        if (!error && result && result.event === "success") {
          console.log("Done! Here is the image info: ", result.info.url);
          const publicId = result.info.public_id;

     const blurredUrl = `http://res.cloudinary.com/${cloudName}/image/upload/e_blur:2000/${publicId}`;
      RevenueImage.value = result.info.url
      console.log(blurredUrl);
        emit("urlUpdatedRevenue",[result.info.url]);
          // document
          //   .getElementById("uploadedimage")
          //   .setAttribute("src", result.info.secure_url);
        }
      }
    );
    
    function open() {
      myWidget.open();
    }
    
    const RevenueImage = ref('')
    
    </script>