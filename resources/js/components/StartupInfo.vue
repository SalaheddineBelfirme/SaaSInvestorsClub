<template>


<form class="space-y-6" action="#">
                  <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
              <label class="text-black dark:text-gray-200" for="name"
                >Name</label
              >

              <input
              v-model="name"
                name="name"
                type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 :ring"
              />
            </div>

            <div>
              <label class="text-black dark:text-gray-200" for="price"
                >Price</label
              >
              <input
                name="author"
               
                type="number"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label class="text-black dark:text-gray-200" for="emailAddress"
                >Date Open
              </label>
              <input
                name="date_open"
      
                type="time"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label class="text-black dark:text-gray-200" for="emailAddress"
                >Date Close</label
              >
              <input
                name="date_close"
              
                type="time"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Description</label
              >
              <textarea
                name="description"
                type="textarea"
               
                
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 :outline-none"
              ></textarea>
            </div>

            <div>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Location</label
              >
              <input
                name="location"
               
                type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>

            <div class="">
              <a
               
              >
                <i
                  class="fa-solid fa-circle-plus float-left text-3xl text-blackcursor-pointer"
                ></i>
              </a>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Select Category</label
              >
              <select
                name="category"
               
                class="block mb-8 w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              >
                <option Selected>Select Category</option>
               
              </select>

              <div class="">
                <button
                  @click=""
                  type="button"
                  class="px-6 py-2 leading-5 text-black transition-colors duration-200 transform bg-yellow-700 rounded-md"
                >
                  Save
                </button>
              </div>
            </div>

            <div class="flex w-full gap-5">
              <div
                class="mt-1 w-full flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
              >
                <div class="space-y-1 text-center">
                  <svg
                    class="mx-auto h-12 w-12 text-white"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 48 48"
                    aria-hidden="true"
                  >
                    <path
                      d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label
                      for="file-upload"
                      class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-700 hover:text-indigo-500 f focus-within:ring-2 focus-within:ring-offset-2"
                    >
                    </label>
                    <button
                      type="button"
                      id="upload_widget"
                      class="text-yellow-700 font-extrabold text-md"
                      
                    >
                      Upload a file
                    </button>

                    <p class="pl-1 text-white">or drag and drop</p>
                  </div>
                  <p class="text-xs text-white">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
          </div>
                </form>

<!-- 
<div  class="fixed top-0 left-0 right-0 z-50  w-full p-4 overflow-x- overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
     
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3>
                <form class="space-y-6" action="#">
                  <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
              <label class="text-black dark:text-gray-200" for="name"
                >Name</label
              >

              <input
                name="name"
                type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 :ring"
              />
            </div>

            <div>
              <label class="text-black dark:text-gray-200" for="price"
                >Price</label
              >
              <input
                name="author"
               
                type="number"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label class="text-black dark:text-gray-200" for="emailAddress"
                >Date Open
              </label>
              <input
                name="date_open"
      
                type="time"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label class="text-black dark:text-gray-200" for="emailAddress"
                >Date Close</label
              >
              <input
                name="date_close"
              
                type="time"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Description</label
              >
              <textarea
                name="description"
                type="textarea"
               
                
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 :outline-none"
              ></textarea>
            </div>

            <div>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Location</label
              >
              <input
                name="location"
               
                type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>

            <div class="">
              <a
               
              >
                <i
                  class="fa-solid fa-circle-plus float-left text-3xl text-blackcursor-pointer"
                ></i>
              </a>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Select Category</label
              >
              <select
                name="category"
               
                class="block mb-8 w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              >
                <option Selected>Select Category</option>
               
              </select>

              <div class="">
                <button
                  @click=""
                  type="button"
                  class="px-6 py-2 leading-5 text-black transition-colors duration-200 transform bg-yellow-700 rounded-md"
                >
                  Save
                </button>
              </div>
            </div>

            <div class="flex w-full gap-5">
              <div
                class="mt-1 w-full flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
              >
                <div class="space-y-1 text-center">
                  <svg
                    class="mx-auto h-12 w-12 text-white"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 48 48"
                    aria-hidden="true"
                  >
                    <path
                      d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label
                      for="file-upload"
                      class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-700 hover:text-indigo-500 f focus-within:ring-2 focus-within:ring-offset-2"
                    >
                    </label>
                    <button
                      type="button"
                      id="upload_widget"
                      class="text-yellow-700 font-extrabold text-md"
                      
                    >
                      Upload a file
                    </button>

                    <p class="pl-1 text-white">or drag and drop</p>
                  </div>
                  <p class="text-xs text-white">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
          </div>
                </form>
            </div>
        </div>
    </div>
</div> 

 -->





<!-- <dialog id="my_modal_3" class="modal">  method="dialog" -->

<!-- 

<form action=""   class="modal-backdrop w-[720px] p-3 rounded"  enctype="multipart/form-data">

     
          <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
              <label class="text-black dark:text-gray-200" for="name"
                >Name</label
              >

              <input
                name="name"
                type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 :ring"
              />
            </div>

            <div>
              <label class="text-black dark:text-gray-200" for="price"
                >Price</label
              >
              <input
                name="author"
               
                type="number"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label class="text-black dark:text-gray-200" for="emailAddress"
                >Date Open
              </label>
              <input
                name="date_open"
      
                type="time"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label class="text-black dark:text-gray-200" for="emailAddress"
                >Date Close</label
              >
              <input
                name="date_close"
              
                type="time"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>
            <div>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Description</label
              >
              <textarea
                name="description"
                type="textarea"
               
                
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 :outline-none"
              ></textarea>
            </div>

            <div>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Location</label
              >
              <input
                name="location"
               
                type="text"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              />
            </div>

            <div class="">
              <a
               
              >
                <i
                  class="fa-solid fa-circle-plus float-left text-3xl text-blackcursor-pointer"
                ></i>
              </a>
              <label
                class="text-black dark:text-gray-200"
                for="passwordConfirmation"
                >Select Category</label
              >
              <select
                name="category"
               
                class="block mb-8 w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600"
              >
                <option Selected>Select Category</option>
               
              </select>

              <div class="">
                <button
                  @click=""
                  type="button"
                  class="px-6 py-2 leading-5 text-black transition-colors duration-200 transform bg-yellow-700 rounded-md"
                >
                  Save
                </button>
              </div>
            </div>

            <div class="flex w-full gap-5">
              <div
                class="mt-1 w-full flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md"
              >
                <div class="space-y-1 text-center">
                  <svg
                    class="mx-auto h-12 w-12 text-white"
                    stroke="currentColor"
                    fill="none"
                    viewBox="0 0 48 48"
                    aria-hidden="true"
                  >
                    <path
                      d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label
                      for="file-upload"
                      class="relative cursor-pointer bg-white rounded-md font-medium text-yellow-700 hover:text-indigo-500 f focus-within:ring-2 focus-within:ring-offset-2"
                    >
                    </label>
                    <button
                      type="button"
                      id="upload_widget"
                      class="text-yellow-700 font-extrabold text-md"
                      
                    >
                      Upload a file
                    </button>

                    <p class="pl-1 text-white">or drag and drop</p>
                  </div>
                  <p class="text-xs text-white">PNG, JPG, GIF up to 10MB</p>
                </div>
              </div>
            </div>
          </div>
        </form> -->

</template>

<script>

export default {

    name:'Startupinfo',

}
</script>