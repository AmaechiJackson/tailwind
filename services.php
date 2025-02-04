<?php
 include_once ('templates/header.php'); 
?>


<body class="p-0 m-0 ">
<main ></main>
   <!-- Banner Section -->
   <div class="relative bg-[url('./templates/images/serveAIrob.jpg')] bg-cover  bg-center h-[587px]">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-darkgrBan bg-opacity-70"></div>
    <!-- Content -->
   
    <div class="relative flex px-16 md:flex-row smd:items-start ">
     <div class="text-white ">
        <!-- Row 1: Logo -->
        <div class="w-[129px] h-[69] mt-24  ">
          <img src="templates/images/awol high rez 2.svg" alt="Logo" class="w-24 h-auto">
        </div>
        <h1 class="mt-2 y-0">Innovate your space, Enhance your Life</h1>
      </div>
      </div>
    <div class="relative py-16 mx-auto mt-16 translate-y-[-15px]">
    <h1 class="mb-16 text-6xl font-bold text-center text-white ">Our Services</h1>
        </div>   
  </div>




  <!-- OUR SERVICE OFFERINGS -->
  <div class="bg-green-100">

<div class="container px-16 py-8 mx-auto">
    <h1 class="mb-8 text-6xl font-bold text-center">Our<br>
    Service<br>
    Offering</h1>
    
    <div class="flex flex-wrap -mx-4">
        <!-- First Card -->
        <div class="w-full px-4 mb-8 md:w-1/3">
            <div class="p-6 bg-white border-2 shadow-md border-myOraDrk rounded-2xl">
                <div class="mb-4 text-center">
                    <img src="templates/images/servAiPower.svg" alt="Icon" class="mx-auto">
                </div>
                <h2 class="mb-2 text-xl font-bold">AI-Powered Interior Design Recommendations:</h2>
                <hr class="mb-4 border-t-4 border-myOraDrk">
                <p>
                    Users can upload photos of their spaces to receive AI-generated suggestions for color schemes,
                    layouts, and decor enhancements. This feature is designed to provide accessible, high-quality
                    design insights tailored to individual tastes and preferences.
                </p>
            </div>
        </div>

        <!-- Second Card -->
        <div class="w-full px-4 mb-8 md:w-1/3">
            <div class="p-6 bg-white border-2 shadow-md rounded-2xl border-myOraDrk">
                <div class="mb-4 text-center">
                <img src="templates/images/sercSocialChat.svg" alt="Icon" class="mx-auto">
                </div>
                <h2 class="mb-2 text-xl font-bold">Social Chat Space for Designers:</h2>
                <hr class="mb-4 border-t-4 border-myOraDrk">
                <p>
                A dedicated community space where interior designers can connect, post job listings, share recent
                projects, and celebrate achievements. This feature fosters networking and community engagement,
                positioning AwoAI as both a design tool and a social platform.
                </p>
            </div>
        </div>

        <!-- Third Card -->
        <div class="w-full px-4 mb-8 md:w-1/3">
            <div class="p-6 bg-white border-2 shadow-md border-myOraDrk rounded-2xl">
                <div class="mb-4 text-center">
                <img src="templates/images/servFutureServ.svg" alt="Icon" class="mx-auto">
                </div>
                <h2 class="mb-2 text-xl font-bold">Future Service Additions:</h2>
                <hr class="mb-4 border-t-4 border-myOraDrk">
                <p>
                Planned enhancements include furniture and decor recommendations from partner brands, premium
                AI-driven design insights, and exclusive deals for users. As the platform grows, these additional
                services will help create a comprehensive, all-in-one solution for interior design enthusiasts and
                professionals 
                </p>
            </div>
        </div>
    </div>
</div>

</div>




<!-- CALL TO ACTION: ARE YOU READY -->
<div class="flex items-center justify-center bg-transparent">
    <!-- Horizontal Rectangle -->
    <div class="flex flex-wrap items-center justify-between w-full max-w-6xl px-16 py-8 bg-customGreen rounded-2xl">
        <!-- Text -->
        <h1 class="text-4xl font-bold text-white ">
            Are You Ready to Start Using Your Space?
        </h1>
        <!-- Button -->
        <a href="sign_up.php" 
           class="flex items-center justify-center text-lg font-semibold text-white rounded-lg shadow-lg bg-gradient-to-t from-myOraDrk to-myOraLgt md:text-xl"
           style="width: 274px; height: 72px;">
            Create Account
        </a>
    </div>
</div>







<!-- LAST SECTION: HAVE MORE QUESTIONS -->

<div>
    <div class="p-16 bg-green-100">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
            <!-- Left Column -->
            <div class="flex flex-col items-start justify-center">
            <span class="text-3xl">Have a concern?</span>
                <h1 class="text-6xl font-bold">We are always ready to help at every step.</h1>
                <div class="flex items-center mt-4">
                    
                    <!-- <img src="templates/images/abtPhone2.svg" alt="Logo" class=""> -->
                    <!-- <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26c.41.27.91.27 1.32 0L21 8m-9 4v9m5-10a9.003 9.003 0 00-9-9V3a9.003 9.003 0 00-9 9h2a7.002 7.002 0 0114 0h2z"></path>
                    </svg> -->
                </div>
               <!-- Button -->
        <a href="sign_up.php" 
           class="flex items-center justify-center mt-10 text-lg font-semibold text-white rounded-lg shadow-lg bg-gradient-to-t from-myOraDrk to-myOraLgt md:text-xl"
           style="width: 274px; height: 72px;">
            Create Account
        </a>
            </div>

            <!-- Right Column -->
            <div class="max-w-md p-8 mx-auto bg-customGreen rounded-xl">
                    <h2 class="mb-6 text-2xl font-bold text-white">Seeking Information?</h2>
                    <form action="#" method="POST" class="space-y-4">
                        <input 
                            type="text" 
                            name="name" 
                            placeholder="Your name" 
                            class="w-full px-4 py-3 text-gray-800 bg-gray-100 rounded-md outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Your email" 
                            class="w-full px-4 py-3 text-gray-800 bg-gray-100 rounded-md outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                        <input 
                            type="text" 
                            name="subject" 
                            placeholder="Subject" 
                            class="w-full px-4 py-3 text-gray-800 bg-gray-100 rounded-md outline-none focus:ring-2 focus:ring-orange-500"
                            required>
                        <textarea 
                            name="description" 
                            placeholder="Describe your image" 
                            class="w-full px-4 py-3 text-gray-800 bg-gray-100 rounded-md outline-none focus:ring-2 focus:ring-orange-500"
                            rows="4" required></textarea>
                        <button 
                            type="submit" 
                            class="w-full py-3 font-medium text-white transition rounded-md bg-gradient-to-t from-myOraDrk to-myOraLgt hover:bg-orange-600">
                            Submit
                        </button>
                    </form>
                </div>
        </div>
    </div>
</div>



  </body>


  <?php
include_once ('templates/footer.php'); 
?>