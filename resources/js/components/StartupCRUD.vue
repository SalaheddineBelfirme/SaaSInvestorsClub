<template>

  <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
    <div class="flex flex-col h-full">
      <!-- Table -->
      <div
        class="w-full max-w-4xl mt-10 mx-auto bg-white shadow-lg rounded-sm border border-gray-200"
      >
        <header class="px-5 py-4 border-b border-gray-100">
          <h2 class="font-semibold text-gray-800">Starups</h2>
        </header>
        <div class="p-3">
  
          <div class="overflow-x-auto">
            <table
              class="w-full table-auto border-collapse bg-white text-left text-sm text-gray-500"
            >
              <thead class="bg-gray-50">
                <!-- <svg
          class="p-3  "
          version="1.1"
          width="70"
          height="70"
          id="_x34_"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          viewBox="0 0 512 512"
          xml:space="preserve"
          fill="#000000"
        >
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g
            id="SVGRepo_tracerCarrier"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></g>
          <g id="SVGRepo_iconCarrier">
            <g>
              <g>
                <g>
                  <g>
                    <g>
                      <rect
                        x="298.656"
                        y="312.18"
                        transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 406.748 869.2086)"
                        style="fill: #344d7f"
                        width="169.474"
                        height="76.369"
                      ></rect>
                      <g>
                        <path
                          style="fill: #e5e5e4"
                          d="M398.886,425.781c1.1,6.066,2.597,11.209,4.378,15.558 c7.921,19.353,21.443,23.069,30.565,23.069c9.119,0,22.641-3.716,30.562-23.069c1.781-4.349,3.278-9.492,4.378-15.558 c1.445-7.958,2.206-17.515,2.027-28.967c-0.357-22.837-5.974-42.219-12.727-57.401c-10.697-24.046-24.24-37.555-24.24-37.555 s-13.547,13.509-24.243,37.555c-6.753,15.183-12.37,34.565-12.727,57.401C396.68,408.266,397.441,417.823,398.886,425.781z"
                        ></path>
                        <path
                          style="fill: #2a90b2"
                          d="M397.65,427.262l-0.224-1.215c-1.525-8.438-2.22-18.278-2.046-29.253 c0.311-19.999,4.634-39.513,12.855-57.986l0.39-0.882h50.408l0.39,0.882c8.213,18.458,12.537,37.973,12.855,57.986 c0.174,10.932-0.521,20.772-2.046,29.246l-0.224,1.222H397.65z"
                        ></path>
                        <path
                          style="fill: #2a90b2"
                          d="M398.886,425.781h69.883c1.445-7.958,2.206-17.515,2.027-28.967 c-0.357-22.837-5.974-42.219-12.727-57.401h-48.483c-6.753,15.183-12.37,34.565-12.727,57.401 C396.68,408.266,397.441,417.823,398.886,425.781z"
                        ></path>
                        <path
                          style="fill: #2a90b2"
                          d="M403.264,441.339c7.921,19.353,21.443,23.069,30.565,23.069 c9.119,0,22.641-3.716,30.562-23.069H403.264z"
                        ></path>
                      </g>
                    </g>
                    <g>
                      <polygon
                        style="fill: #344d7f"
                        points="175.802,317.468 121.163,372.107 74.372,418.824 55.937,437.259 1.965,383.286 2.483,382.768 45.868,339.383 57.122,328.129 109.984,275.267 111.538,273.713 121.83,263.422 "
                      ></polygon>
                      <g>
                        <path
                          style="fill: #e5e5e4"
                          d="M75.409,396.835c0.148,8.292-0.222,15.547-1.037,21.989c-0.222,2.443-0.592,4.738-0.963,6.96 c-1.11,6.071-2.591,11.18-4.368,15.547c-7.922,19.398-21.471,23.1-30.577,23.1c-4.146,0-9.18-0.741-14.141-3.406 c-4.738-2.443-9.476-6.663-13.401-13.401c-1.11-1.925-2.073-3.998-3.035-6.293c-1.777-4.368-3.258-9.476-4.368-15.547 c-1.481-7.996-2.221-17.547-1.999-28.948c0.074-4.517,0.296-8.959,0.814-13.179c0-0.296,0-0.592,0.148-0.888 c1.777-16.88,6.367-31.391,11.698-43.385c10.735-23.988,24.284-37.536,24.284-37.536s9.329,9.329,18.657,26.283 c1.851,3.406,3.776,7.182,5.553,11.254C69.486,354.56,75.039,373.958,75.409,396.835z"
                        ></path>
                        <path
                          style="fill: #2a90b2"
                          d="M2.286,427.269l-0.224-1.215c-1.554-8.409-2.234-18.249-2.024-29.246 c0.09-5.227,0.354-9.464,0.828-13.332c-0.011-0.188-0.011-0.752,0.286-1.359c1.435-14.496,5.412-29.239,11.677-43.337 l0.39-0.882h50.416l0.394,0.875c8.206,18.299,12.533,37.828,12.862,58.043c0.145,8.199-0.195,15.458-1.048,22.197 c-0.221,2.429-0.593,4.757-0.972,7.02l-0.206,1.236H2.286z"
                        ></path>
                        <path
                          style="fill: #2a90b2"
                          d="M75.409,396.835c0.148,8.292-0.222,15.547-1.037,21.989c-0.222,2.443-0.592,4.738-0.963,6.96 H3.519c-1.481-7.996-2.221-17.547-1.999-28.948c0.074-4.517,0.296-8.959,0.814-13.179c0-0.296,0-0.592,0.148-0.888 c1.777-16.88,6.367-31.391,11.698-43.385h48.494C69.486,354.56,75.039,373.958,75.409,396.835z"
                        ></path>
                        <path
                          style="fill: #2a90b2"
                          d="M69.042,441.331c-7.922,19.398-21.471,23.1-30.577,23.1c-4.146,0-9.18-0.741-14.141-3.406 c-4.738-2.443-9.476-6.663-13.401-13.401c-1.11-1.925-2.073-3.998-3.035-6.293H69.042z"
                        ></path>
                      </g>
                    </g>
                  </g>
                  <ellipse
                    style="fill: #2a90b2"
                    cx="236.142"
                    cy="472.257"
                    rx="79.486"
                    ry="39.743"
                  ></ellipse>
                  <path
                    style="fill: #2a90b2"
                    d="M354.008,360.039c-0.074,0.518-0.222,0.963-0.37,1.481c-0.741,3.628-1.555,7.181-2.517,10.587 c-0.888,3.406-1.851,6.663-2.887,9.847c-0.814,2.665-1.703,5.256-2.591,7.774c-1.111,3.035-2.221,5.923-3.406,8.736 c-0.962,2.369-1.999,4.59-3.035,6.738c-0.592,1.333-1.258,2.591-1.925,3.85c-0.592,1.259-1.259,2.517-1.925,3.702 c-3.998,7.404-8.366,13.845-12.882,19.546c-1.481,1.777-2.962,3.479-4.442,5.108c-3.332,3.702-6.812,7.034-10.365,10.069 c-1.259,1.037-2.517,1.999-3.776,2.962c-0.222,0.148-0.444,0.37-0.666,0.518c-21.693,16.362-45.607,20.952-64.486,21.248 c-0.888,0.074-1.777,0.074-2.591,0.074c-0.815,0-1.703,0-2.592-0.074c-18.879-0.296-42.867-4.961-64.486-21.323 c-13.474-10.143-26.061-24.728-35.982-45.68c-4.59-9.625-8.662-20.582-11.92-33.094c-0.963-3.406-1.777-6.959-2.517-10.587 c-0.148-0.518-0.296-0.963-0.37-1.481c-4.886-23.099-7.404-50.863-6.811-84.179c0-0.74,0-1.481,0.074-2.147 c1.555-65.448,20.286-120.976,42.867-164.583c0.296-0.518,0.518-1.036,0.814-1.48C187.5,45.607,227.183,8.07,234.809,1.185 C235.697,0.37,236.142,0,236.142,0s3.554,3.11,9.476,9.033c0.666,0.666,1.333,1.333,2.073,2.073 c6.071,6.219,14.141,15.03,23.247,26.209c5.775,7.181,11.994,15.325,18.361,24.506c1.11,1.555,2.221,3.183,3.331,4.812 c2.813,4.146,5.627,8.44,8.44,12.956c1.925,3.11,3.85,6.219,5.775,9.477c0.222,0.444,0.444,0.814,0.666,1.184 c2.073,3.628,4.146,7.256,6.219,11.031c0.296,0.444,0.518,0.963,0.74,1.407c0.888,1.629,1.777,3.258,2.592,4.961h0.074 c0.222,0.444,0.445,0.963,0.741,1.48c22.581,43.607,41.313,99.135,42.867,164.583c0.074,0.666,0.074,1.407,0.074,2.147 C361.411,309.176,358.894,336.94,354.008,360.039z"
                  ></path>
                  <path
                    style="fill: #e5e5e4"
                    d="M362.3,275.267v0.592c0.592,31.688-1.703,60.117-6.885,84.476l-0.222,1.184H117.091l-0.222-1.184 c-5.183-24.358-7.478-52.788-6.885-84.476v-0.592c1.111-57.526,15.622-113.646,43.089-166.804l0.444-0.814H318.84l0.37,0.814 c17.325,33.538,29.466,68.261,36.278,103.725c1.333,6.367,2.369,12.734,3.258,19.175c0.814,5.405,1.407,10.809,1.924,16.214 c0.222,2.221,0.444,4.442,0.592,6.663C361.781,261.275,362.151,268.234,362.3,275.267z"
                  ></path>
                  <path
                    style="fill: #e5e5e4"
                    d="M353.989,360.038H118.294c-4.873-23.12-7.44-50.884-6.837-84.155 c1.205-66.345,20.148-122.653,42.924-166.762h163.52c22.777,44.109,41.719,100.417,42.924,166.762 C361.429,309.154,358.863,336.918,353.989,360.038z"
                  ></path>
                  <path
                    style="fill: #e5e5e4"
                    d="M339.224,405.238c-26.715,56.225-72.32,67.021-103.087,67.021 c-30.757,0-76.362-10.796-103.077-67.021H339.224z"
                  ></path>
                  <path
                    style="fill: #2a90b2"
                    d="M236.142,328.352c-49.558,0-89.878-40.319-89.878-89.877c0-49.558,40.319-89.877,89.878-89.877 c49.558,0,89.877,40.319,89.877,89.877C326.019,288.033,285.701,328.352,236.142,328.352z"
                  ></path>
                  <g style="opacity: 0.2">
                    <path
                      style="fill: #ffffff"
                      d="M253.466,156.661c-0.518-0.148-1.111-0.148-1.629-0.148c-3.332,0-6.293,2.295-7.033,5.701 c-0.814,3.998,1.703,7.848,5.627,8.662c0.518,0.074,1.036,0.148,1.48,0.148c3.406,0,6.442-2.369,7.108-5.775 c0.148-0.518,0.148-1.037,0.148-1.555C259.167,160.363,256.872,157.401,253.466,156.661z M227.331,162.288 c-0.741-3.406-3.776-5.775-7.182-5.775c-0.518,0-0.962,0.074-1.481,0.148c-3.924,0.814-6.441,4.738-5.553,8.662 c0.667,3.406,3.702,5.701,7.034,5.701c0.518,0,1.037,0,1.555-0.148c3.405-0.74,5.775-3.702,5.775-7.108 C227.479,163.25,227.405,162.806,227.331,162.288z M285.228,170.802c-1.333-0.962-2.813-1.407-4.368-1.407 c-2.221,0-4.442,1.037-5.849,2.962c-2.296,3.258-1.629,7.848,1.629,10.217c1.333,0.888,2.814,1.333,4.294,1.333 c2.221,0,4.442-1.037,5.849-2.962c0.962-1.333,1.407-2.813,1.407-4.368C288.189,174.355,287.153,172.209,285.228,170.802z M197.125,172.431c-1.407-1.925-3.628-2.962-5.923-2.962c-1.481,0-2.962,0.444-4.294,1.407 c-3.184,2.369-3.924,6.885-1.555,10.143c1.407,1.999,3.628,2.962,5.849,2.962c1.48,0,3.035-0.444,4.294-1.333 c1.999-1.407,3.036-3.702,3.036-5.923C198.531,175.244,198.087,173.689,197.125,172.431z M308.475,196.566 c-1.333-2.369-3.776-3.628-6.293-3.628c-1.258,0-2.517,0.296-3.628,0.962c-3.48,1.999-4.664,6.515-2.666,9.995h0.074 c1.333,2.295,3.776,3.554,6.219,3.554c1.259,0,2.517-0.296,3.702-0.962c2.295-1.333,3.628-3.776,3.628-6.219 C309.512,199.01,309.142,197.751,308.475,196.566z M173.655,194.049c-1.111-0.667-2.369-0.963-3.628-0.963 c-2.517,0-4.96,1.258-6.367,3.628c-1.999,3.48-0.814,7.922,2.665,9.921c1.185,0.666,2.443,0.963,3.628,0.963 c2.517,0,4.96-1.259,6.293-3.628c0.667-1.184,1.037-2.443,1.037-3.702C177.283,197.825,175.95,195.382,173.655,194.049z M319.285,229.587c-0.37-3.702-3.554-6.515-7.182-6.515c-0.296,0-0.518,0.074-0.814,0.074c-3.998,0.444-6.885,3.998-6.441,7.996 c0.37,3.702,3.554,6.515,7.255,6.515c0.222,0,0.518,0,0.741-0.074c3.702-0.37,6.515-3.554,6.515-7.182 C319.359,230.105,319.285,229.883,319.285,229.587z M160.921,223.294h-0.666c-3.702,0-6.886,2.739-7.33,6.515 c-0.37,3.998,2.518,7.551,6.515,7.996h0.741c3.702,0,6.885-2.813,7.255-6.515v-0.666 C167.436,226.922,164.697,223.738,160.921,223.294z M311.067,255.055c-0.741-0.222-1.555-0.37-2.295-0.37 c-3.036,0-5.849,1.925-6.886,5.035c-1.258,3.776,0.889,7.922,4.664,9.18c0.815,0.222,1.555,0.296,2.295,0.296 c3.036,0,5.923-1.925,6.886-5.034c0.222-0.74,0.37-1.48,0.37-2.295C316.101,258.831,314.176,256.018,311.067,255.055z M170.397,259.868c-0.962-3.11-3.776-5.034-6.812-5.034c-0.814,0-1.554,0.148-2.295,0.37c-3.85,1.258-5.923,5.33-4.664,9.18 c0.963,3.035,3.85,4.96,6.885,4.96c0.741,0,1.481-0.074,2.221-0.296c3.109-1.037,5.034-3.85,5.034-6.885 C170.768,261.348,170.619,260.608,170.397,259.868z M297.814,284.003c-1.407-1.258-3.109-1.851-4.812-1.851 c-1.999,0-3.998,0.815-5.479,2.443c-2.665,2.962-2.443,7.552,0.592,10.291c1.407,1.184,3.109,1.851,4.813,1.851 c1.999,0,3.998-0.814,5.479-2.443c1.259-1.407,1.851-3.109,1.851-4.812C300.257,287.483,299.443,285.484,297.814,284.003z M184.834,284.67c-1.407-1.555-3.405-2.369-5.404-2.369c-1.777,0-3.479,0.592-4.886,1.851 c-2.962,2.739-3.184,7.329-0.518,10.291c1.407,1.555,3.405,2.369,5.404,2.369c1.703,0,3.48-0.592,4.887-1.851 c1.555-1.407,2.369-3.406,2.369-5.405C186.685,287.853,186.093,286.077,184.834,284.67z M273.974,305.178 c-1.185-2.666-3.85-4.294-6.663-4.294c-0.962,0-1.999,0.222-2.961,0.667c-3.628,1.629-5.331,5.923-3.628,9.625 c1.185,2.665,3.85,4.294,6.589,4.294c1.037,0,2.073-0.222,3.036-0.666c2.665-1.185,4.294-3.85,4.294-6.663 C274.64,307.177,274.418,306.141,273.974,305.178z M208.082,301.624c-0.963-0.444-1.999-0.666-2.961-0.666 c-2.813,0-5.479,1.629-6.663,4.294c-1.629,3.702,0,7.996,3.702,9.625c0.962,0.444,1.925,0.666,2.962,0.666 c2.739,0,5.405-1.629,6.589-4.368c0.444-0.962,0.667-1.925,0.667-2.962C212.376,305.474,210.747,302.809,208.082,301.624z M236.29,307.547c-0.074,0-0.074,0-0.148,0h-0.074c-3.998,0.074-7.182,3.258-7.182,7.329c0,3.998,3.258,7.255,7.256,7.255h0.074 c0.074,0,0.074,0,0.074,0s0,0,0.074,0c3.998,0,7.255-3.258,7.255-7.33C243.545,310.805,240.288,307.547,236.29,307.547z"
                    ></path>
                  </g>
                  <path
                    style="fill: #ffb54d"
                    d="M236.142,298.218c-32.943,0-59.744-26.801-59.744-59.744c0-32.943,26.801-59.744,59.744-59.744 c32.942,0,59.743,26.801,59.743,59.744C295.886,271.417,269.085,298.218,236.142,298.218z"
                  ></path>
                  <g style="opacity: 0.3">
                    <path
                      style="fill: #ffffff"
                      d="M193.406,243.931c-5.165,0-9.352-4.187-9.352-9.352c0-28.721,23.366-52.087,52.088-52.087 c5.165,0,9.352,4.187,9.352,9.352c0,5.165-4.187,9.352-9.352,9.352c-18.408,0-33.385,14.976-33.385,33.383 C202.758,239.744,198.571,243.931,193.406,243.931z"
                    ></path>
                  </g>
                  <polygon
                    style="fill: #344d7f"
                    points="236.132,346.485 216.043,354.243 236.132,489.837 256.22,354.243 "
                  ></polygon>
                </g>
              </g>
              <path
                style="opacity: 0.06; fill: #040000"
                d="M469.942,383.652l0.37-0.37l-0.453-0.453c-1.891-16.828-6.465-31.446-11.789-43.417 c-10.697-24.046-24.24-37.555-24.24-37.555s-9.329,9.422-18.616,26.326L362.28,275.25c-1.145-57.542-15.62-113.658-43.063-166.808 l-0.412-0.803h-1.701C281.177,38.777,236.201,0.072,236.142,0.021V512c43.899,0,79.486-17.794,79.486-39.743 c0-7.837-4.6-15.124-12.434-21.281c13.47-10.128,26.066-24.767,36.03-45.739c4.583-9.642,8.598-20.651,11.897-33.145l46.75,46.75 c0.288,2.428,0.62,4.757,1.016,6.939c1.1,6.066,2.597,11.209,4.378,15.558c7.921,19.353,21.443,23.069,30.565,23.069 c9.119,0,22.641-3.716,30.562-23.069c1.781-4.349,3.278-9.492,4.378-15.558c1.445-7.958,2.206-17.514,2.027-28.967 C470.725,392.274,470.396,387.912,469.942,383.652z"
              ></path>
            </g>
          </g>
        </svg> -->
                <tr>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                    Startup
                  </th>

                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                    Owner
                  </th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                    Source
                  </th>
                  <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                    Domain
                  </th>
                  <th
                    scope="col"
                    class="px-6 py-4 font-medium text-gray-900"
                  ></th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                <tr v-for="startup in startups" class="hover:bg-gray-50">
                  <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="relative h-12 w-12">
                      <img
                        class="h-full w-full object-cover object-center"
                        :src="startup.Traffic_Metrics"
                        alt=""
                      />
                    </div>

                    <div class="text-sm">
                      <div class="font-medium text-gray-700">
                        {{ startup.name }}
                      </div>
                    </div>
                  </th>
                  <td class="px-6 py-4">
                    {{ startup.user.name }}
                  </td>
                  <td class="px-6 py-4"></td>
                  <td class="px-6 py-4">{{ startup.category.name }}</td>
                  <td class="px-6 py-4">
                    <div class="flex justify-end items-center gap-1">
                      {{ startup.status }}
                       <a
                        v-if="startup.status === 0"
                        @click.prevent="AcceptStartup(startup.id)"
                        href="#"
                      >
                        <svg
                          class="w-7 h-7 cursor-pointer"
                          viewBox="0 0 60 60"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="#000000"
                        >
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g
                            id="SVGRepo_tracerCarrier"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></g>
                          <g id="SVGRepo_iconCarrier">
                            <defs></defs>
                            <path
                              class="cls-1"
                              d="M800,510a30,30,0,1,1,30-30A30,30,0,0,1,800,510Zm-16.986-23.235a3.484,3.484,0,0,1,0-4.9l1.766-1.756a3.185,3.185,0,0,1,4.574.051l3.12,3.237a1.592,1.592,0,0,0,2.311,0l15.9-16.39a3.187,3.187,0,0,1,4.6-.027L817,468.714a3.482,3.482,0,0,1,0,4.846l-21.109,21.451a3.185,3.185,0,0,1-4.552.03Z"
                              id="check"
                              transform="translate(-770 -450)"
                            ></path>
                          </g>
                        </svg>
                      </a>
                      <a @click.prevent="deleteStartup(startup.id)" href="#">
                        <svg
                          class="w-8 h-8 cursor-pointer"
                          viewBox="0 0 512 512"
                          version="1.1"
                          xml:space="preserve"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          fill="#ff0000"
                          stroke="#ff0000"
                        >
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g
                            id="SVGRepo_tracerCarrier"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></g>
                          <g id="SVGRepo_iconCarrier">
                            <g id="Layer_1"></g>
                            <g id="Layer_2">
                              <g>
                                <path
                                  class="st0"
                                  d="M263.24,43.5c-117.36,0-212.5,95.14-212.5,212.5s95.14,212.5,212.5,212.5s212.5-95.14,212.5-212.5 S380.6,43.5,263.24,43.5z M367.83,298.36c17.18,17.18,17.18,45.04,0,62.23v0c-17.18,17.18-45.04,17.18-62.23,0l-42.36-42.36 l-42.36,42.36c-17.18,17.18-45.04,17.18-62.23,0v0c-17.18-17.18-17.18-45.04,0-62.23L201.01,256l-42.36-42.36 c-17.18-17.18-17.18-45.04,0-62.23v0c17.18-17.18,45.04-17.18,62.23,0l42.36,42.36l42.36-42.36c17.18-17.18,45.04-17.18,62.23,0v0 c17.18,17.18,17.18,45.04,0,62.23L325.46,256L367.83,298.36z"
                                ></path>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </a> 

        
                  <a @click.prevent="getstarup(startup) "  href="#">
                        
                        <svg
                          class="w-7 h-7 cursor-pointer"
                          fill="#3cc1d3"
                          viewBox="0 0 64 64"
                          id="Layer_1_1_"
                          version="1.1"
                          xml:space="preserve"
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          stroke="#3cc1d3"
                        >
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g
                            id="SVGRepo_tracerCarrier"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          ></g>
                          <g id="SVGRepo_iconCarrier">
                            <g>
                              <path
                                d="M36,21c0-2.206-1.794-4-4-4s-4,1.794-4,4s1.794,4,4,4S36,23.206,36,21z M30,21c0-1.103,0.897-2,2-2s2,0.897,2,2 s-0.897,2-2,2S30,22.103,30,21z"
                              ></path>
                              <path
                                d="M27,41v6h10v-6h-2V27h-8v6h2v8H27z M29,31v-2h4v14h2v2h-6v-2h2V31H29z"
                              ></path>
                              <path
                                d="M32,1C14.907,1,1,14.907,1,32s13.907,31,31,31s31-13.907,31-31S49.093,1,32,1z M32,61C16.009,61,3,47.991,3,32 S16.009,3,32,3s29,13.009,29,29S47.991,61,32,61z"
                              ></path>
                              <path
                                d="M32,7c-5.236,0-10.254,1.607-14.512,4.649l1.162,1.628C22.567,10.479,27.184,9,32,9c12.682,0,23,10.318,23,23 c0,4.816-1.479,9.433-4.277,13.35l1.628,1.162C55.393,42.254,57,37.236,57,32C57,18.215,45.785,7,32,7z"
                              ></path>
                              <path
                                d="M32,55C19.318,55,9,44.682,9,32c0-4.817,1.479-9.433,4.277-13.35l-1.627-1.162C8.608,21.746,7,26.764,7,32 c0,13.785,11.215,25,25,25c5.236,0,10.254-1.607,14.512-4.649l-1.162-1.628C41.433,53.521,36.816,55,32,55z"
                              ></path>
                            </g>
                          </g>
                        </svg>
                      </a> 

                    
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <nav>
          <ol class="flex justify-center gap-1 text-xs font-medium">
    <li>
      <a
        href="#"
        class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
        @click="goToPage(pagination.current_page - 1)"
        :disabled="pagination.current_page === 1"
      >
        <span class="sr-only">Prev Page</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-3 w-3"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"
          />
        </svg>
      </a>
    </li>

    <li v-for="pageNumber in pagination.last_page" :key="pageNumber">
      <a
        href="#"
        class="block h-8 w-8 rounded border border-gray-100 bg-white text-center leading-8 text-gray-900"
        :class="{
          'border-blue-600 bg-blue-600 text-white': pageNumber === pagination.current_page,
          'hover:bg-light-300': pageNumber !== pagination.current_page
        }"
        @click="goToPage(pageNumber)"
      >
        {{ pageNumber }}
      </a>
    </li>

    <li>
      <a
        href="#"
        class="inline-flex h-8 w-8 items-center justify-center rounded border border-gray-100 bg-white text-gray-900 rtl:rotate-180"
        @click="goToPage(pagination.current_page + 1)"
        :disabled="pagination.current_page === pagination.last_page"
      >
        <span class="sr-only">Next Page</span>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-3 w-3"
          viewBox="0 0 20 20"
          fill="currentColor"
        >
          <path
            fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"
          />
        </svg>
      </a>
    </li>
  </ol>
        </nav>
      </div>
    </div>
  </section>


</template>

<style>
.cls-1 {
  fill: #699f4c;
  fill-rule: evenodd;
}

.st0 {
  fill: #ff0000;
}
.st1 {
  fill: none;
  stroke: #ff0000;
  stroke-width: 32;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke-miterlimit: 10;
}
</style>

<script setup>
import { initFlowbite } from 'flowbite'
import StartupInfo from "@/components/StartupInfo.vue";
import Swal from "sweetalert2";
import axios from "@/libs/axios";
import { ref, onMounted } from "vue";





// Get all startups

const startups = ref("");
const pagination = ref({});


function getstartups(page = 1) {
  axios.get(`/api/startups?page=${page}`).then((response) => {
    startups.value = response.data.data.data;
    pagination.value = response.data.data;
  });
}

function getstarup(startup){
  console.log(startup.name);
  name=startup.name
  
  
}

function goToPage(pageNumber) {
  if (pageNumber >= 1 && pageNumber <= pagination.value.last_page) {
    pagination.value.current_page = pageNumber;
    getstartups(pageNumber);
  }
}



// Delete Or Archive startup
async function deleteStartup(id) {
  await axios.get("/sanctum/csrf-cookie");
  Swal.fire({
    title:
      '<p class="arial-font font-sans text-black font-normal text-md">Please choose what you want?</p>',
    icon: "question",
    showDenyButton: true,
    showCancelButton: true,
    cancelButtonColor: "#000000",
    confirmButtonText: "Archive",
    confirmButtonColor: "#0078FF",
    denyButtonText: `Delete`,
    denyButtonColor: "#FF0000",
  }).then((result) => {
    //  Archive
    if (result.isConfirmed) {
      try {
        const currentStatu = startups.value.find(
          (startup) => startup.id === id
        );
        if (currentStatu.status === 0) {
          Swal.fire({
            toast: true,
            position: "top-end",
            icon: "error",
            title: "This Startup Has Already Archived",
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
          });
        } else {
          let data = new FormData();
          data.append("status", "0");
          axios.post("/api/updatestatu/" + id, data).then((response) => {
            const updatedStartup = startups.value.find(
              (startup) => startup.id === id
            );
            if (updatedStartup) {
              updatedStartup.status = 0;
            }
            Swal.fire({
              toast: true,
              position: "top-end",
              icon: "success",
              title: response.data.message,
              showConfirmButton: false,
              timer: 1500,
              timerProgressBar: true,
            });
          });
        }
      } catch (error) {
        Swal.fire({
          toast: true,
          position: "top-end",
          icon: "error",
          title: error.data.message,
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
        });
        console.log(error);
      }

      // Delete startup
    } else if (result.isDenied) {
      try {
        axios.post("/api/startup/" + id).then((response) => {
          Swal.fire({
            toast: true,
            position: "top-end",
            icon: "success",
            title: response.data.message,
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
          });
        });
        startups.value = startups.value.filter((startup) => startup.id !== id);
      } catch (error) {
        Swal.fire({
          toast: true,
          position: "top-end",
          icon: "error",
          title: error.data.message,
          showConfirmButton: false,
          timer: 1500,
          timerProgressBar: true,
        });
        console.log(error);
      }
    }
  });
}

// Function for Accept startups

async function AcceptStartup(id) {
  await axios.get("/sanctum/csrf-cookie");

  try {
    let data = new FormData();
    data.append("status", "1");
    axios.post("/api/updatestatu/" + id, data).then((response) => {
      const updatedStartup = startups.value.find(
        (startup) => startup.id === id
      );
      if (updatedStartup) {
        updatedStartup.status = 1;
      }
      Swal.fire({
        toast: true,
        position: "top-end",
        icon: "success",
        title: response.data.message,
        showConfirmButton: false,
        timer: 1500,
        timerProgressBar: true,
      });
    });
  } catch (error) {
    Swal.fire({
      toast: true,
      position: "top-end",
      icon: "error",
      title: error,
      showConfirmButton: false,
      timer: 1500,
      timerProgressBar: true,
    });
    console.log(error);
  }
}

onMounted(() => {
  getstartups();
});
</script>
