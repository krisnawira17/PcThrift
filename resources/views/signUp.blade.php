<x-header>
    <div style="background-image:url(https://computertechnicians.b-cdn.net/wp-content/uploads/2022/05/gaming-computer-setup.jpeg) " class="h-[90vh] bg-no-repeat bg-cover bg-center max-w-screen ">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8 justify-center items-center">
            <div class="mx-auto max-w-lg bg-slate-900 rounded-xl">
                <form
                action=""
                class="mt-[12vh] mb-0 space-y-4 rounded-lg p-4 shadow-lg sm:p-6 lg:p-8 text-white">
                <img src="{{URL('images/navLogo.png')}}" class="flex justify-center items-center w-1/2 h-1/2 object-contain mx-auto">
                <p class="text-center text-lg font-medium">Create your account</p>
        
                <div>
                <label for="username" class="sr-only">Email</label>
                <div class="relative">
                    <input
                    type="text"
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm text-black"
                    placeholder="Enter Username"
                    />
        
                    <span
                    class="absolute inset-y-0 right-0 grid place-content-center px-4"
                    >
                   
                    </span>
                </div>
                </div>
        
                <div>
                <label for="password" class="sr-only">Password</label>
                <div class="relative">
                    <input
                    type="password"
                    class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm text-black"
                    placeholder="Enter password"
                    />
        
                    <span
                    class="absolute inset-y-0 right-0 grid place-content-center px-4 text-black"
                    >
                    </span>
                </div>
                </div>

                <div>
                    <label for="email" class="sr-only">Password</label>
            
                    <div class="relative">
                        <input
                        type="email"
                        class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm text-black"
                        placeholder="Enter email"
                        />
            
                        <span
                        class="absolute inset-y-0 right-0 grid place-content-center px-4"
                        >
                        </span>
                    </div>
                    </div>

                    <div>
                        <label for="phone" class="sr-only">Password</label>
                
                        <div class="relative">
                            <input
                            type="tel"
                            class="w-full rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm text-black"
                            placeholder="Enter phone number"
                            />
                
                            <span
                            class="absolute inset-y-0 right-0 grid place-content-center px-4"
                            >
                            </span>
                        </div>
                        </div>
        
                <button
                type="submit"
                class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">
                Sign Up
                </button>
        
                <p class="text-center text-sm text-gray-500">
                Already have an account ?
                <a class="underline" href="{{route('signIn')}}">Sign in</a>
                </p>
            </form>
            </div>
    </div>
</x-header>