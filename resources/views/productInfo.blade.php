<x-header>
    <div class="flex border bg-white text-black m-4 rounded-lg  mx-auto w-[90vw] h-[80vh]">
        <div class="flex flex-row">
            <a href="{{ url()->previous() }}" class="w-[2vw] ml-2 my-1"><img src="{{URL('images/back.png')}}"></a>
            <div class="flex flex-row">
                <img src="{{$image}}" class="w-[40vh] object-contain mr-[5vw]">
            <div class="flex flex-col">
                <h1 class="text-[2vw] font-bold">{{$name}}</h1>
                <p class="text-[2vw] font-semibold" id="price" data-price="{{$price}}">{{$price}}</p>
                <p class="text-[1.5vw]">Details:</p>
                <p class="text-[1.5vw] break-all h-[100vh]">Details goes here</p>
            </div>

                <div class="flex flex-col font-semibold items w-[40vw] my-auto ml-[4vw] mr-[4vw] border p-12 rounded-md">
                    <h1 class="mb-[2vh] text-[1.5vw] font-semibold">{{$name}}</h1>
                    <div class="flex flex-col mb-[4vh]">
                        <p class="mb-[2vh] text-[1vw]">Product State</p>

                        <div class="flex-row">
                            <label for="brandNew" class="border bg-gray-300 rounded-md p-4 mr-[2vw] cursor-pointer">
                                <input type="radio" id="brandNew" name="state" class="hidden" value="0">
                                <span class="text-[0.9vw]">Brand New</span>   
                            </label>
                            <label for="second" class="border bg-gray-300 rounded-md p-4 mr-[2vw] cursor-pointer">
                                <input type="radio" id="second" name="state" class="hidden" value="1">
                                <span class="text-[0.9vw]">Second</span>
                            </label>
                        </div>

                    </div>

                    <div class="mb-[2vh] flex flex-col">
                        <h1 class="mb-[2vh] text-[1vw]">Amount</h1>
                        <div class="flex-row flex mb-[2vh]">
                            <button class="bg-gray-300 px-2 py-1 rounded-l-lg" id="decrease-button">-</button>
                            <input type="number" id="amount" class="border border-gray-300 px-2 py-1 w-16 text-center " value="1">
                            <button class="bg-gray-300 px-2 py-1 rounded-r-lg" id="increase-button">+</button>
                        </div>  
                    </div>

                    <div class="flex flex-row justify-between mb-[2vh]">
                        <p>Subtotal</p>
                        <p id="subTotal">Price</p>
                    </div>

                    <div>
                        <button class="border bg-gray-600 hover:bg-gray-700 text-white rounded-md h-[5vh] w-[7vw] text-[1vw] shadow-lg hover:shadow-none mr-[2vw]">Add to cart</button>
                        <button class="border bg-gray-600 hover:bg-gray-700 text-white rounded-md h-[5vh] w-[7vw] text-[1vw] shadow-lg hover:shadow-none">Buy Now</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-header>