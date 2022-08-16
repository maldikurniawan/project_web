<x-app-layout>


    <!-- component -->
<div class="bg-gray-200 font-sans h-screen w-full flex flex-row justify-center items-center">
    <div class="card w-96 mx-auto bg-white  shadow-xl hover:shadow">
       <img class="w-32 mx-auto rounded-full -mt-20 border-8 border-white" src="https://greatmind.id/uploads/contributor-detail/714388385e467b5a9b7b15c595b14dafb3707ec3.jpg" alt="">
       <div class="text-center mt-2 text-3xl font-medium">{{$student->nama_depan}}</div>
       <div class="text-center mt-2 font-light text-sm">{{$student->email_address}}</div>
       <div class="text-center font-normal text-lg">{{$student->npm}}</div>
       <div class="px-6 text-center mt-2 font-light text-sm">
         <p>
           Front end Developer, avid reader. Love to take a long walk, swim
         </p>
       </div>
       <hr class="mt-8">
       <div class="flex p-4">
         <div class="w-1/2 text-center">
           <span class="font-bold">100 k</span> Followers
         </div>
         <div class="w-0 border border-gray-300">

         </div>
         <div class="w-1/2 text-center">
           <span class="font-bold">9.0 k</span> Following
         </div>
       </div>
    </div>
  </div>


</x-app-layout>
