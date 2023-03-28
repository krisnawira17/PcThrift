<x-header>
    <div class="flex flex-col m-[2vw]">
        <h1 class="font-bold text-[4vw]">User Profile</h1>

        <div class="flex flex-col m-[1vw]">
            <div class="flex flex-row mb-[4vh]">
                <img class="rounded-full overflow-hidden w-[12vw] mr-[2vw]" src="{{URL('images/mumei_ghost.PNG')}}">
                <a class="text-center my-auto text-[0.75vw] cursor-pointer font-semibold change_profile_picture_link">Change Profile Picture</a>
                <input type="file" id="profile_picture_input" hidden>
            </div>

            <div class="flex flex-row mb-[4vh]">
                <h2 class="mr-[2vw] text-[1.5vw]" >Name goes here</h2>
                <button  class="bg-white hover:bg-gray-100 text-black font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Change Username</button>
            </div>

            <div class="flex flex-row mb-[4vh]">
                <h2 class="mr-[2vw] text-[1.5vw]" >Old password here</h2>
                <button  class= "bg-white hover:bg-gray-100 text-black font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Change Password</button>
                
            </div>

            <div class="flex flex-row mb-[4vh]">
                <h2 class="mr-[2vw] text-[1.5vw]" >Confirm new password</h2>
            </div>

            <div class="flex flex-row mb-[4vh]">
                <h2 class="mr-[2vw] text-[1.5vw] username" >Email Here</h2>
                <button  class="bg-white hover:bg-gray-100 text-black font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Change Email</button>
            </div>

            <div class="flex flex-row mb-[4vh]">
                <h2 class="mr-[2vw] text-[1.5vw] username" >Phone number here</h2>
                <button  class="bg-white hover:bg-gray-100 text-black font-semibold py-2 px-4 border border-gray-400 rounded-full shadow">Change Number</button>
            </div>
            <button class="bg-white border max-w-xs text-black rounded-lg font-semibold mb-[4vh] py-2 px-4">Confirm Change</button>
            <button class="bg-white border max-w-xs text-black rounded-lg font-semibold text-center  py-2 px-4" onclick="window.location='{{ route('manageOrder') }}'"s>Manage Order</button>
 
        </div>
        
    </div>
    
</x-header>