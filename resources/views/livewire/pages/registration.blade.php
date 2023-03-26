<div class="h-screen w-full pt-16 px-10 bg-slate-50">
    <div>
        <div class="flex flex-row h-[820px]">
            <div class="w-1/2">
                <img class="object-cover h-full" src="https://images.unsplash.com/photo-1608501078713-8e445a709b39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
            </div>
            <div class=" w-1/2 px-[104px] bg-white drop-shadow-lg pt-[96px]">
                <div>
                    <h1 class="text-black font-semibold text-[48px]">Let's level up your brand, <br>together</h1>
                <p class="text-[#667085] mt-[24px]">You can reach us anytime via
                    <a class="text-[#6941C6] text-[20px]" href="">hi@untitledui.com</a>
                </p>
                </div>

                <div class="mt-[48px]">
                    <form wire:submit.prevent="submit">
                        <div>
                            <p class="font-medium text-[#344054] text-[14px]">
                                Name
                            </p>
                            <input class="border-solid border-2 rounded-md w-full mt-[6px] font-normal px-[12px] py-[16px]" placeholder="Your name" type="text" name="name" wire:model="name">

                            <p class="font-medium text-[#344054] text-[14px] mt-[24px]">
                                Email
                            </p>
                            <input class="border-solid border-2 rounded-md w-full mt-[6px] font-normal px-[12px] py-[16px]" placeholder="Your nameyou@company.com" type="text" name="email" wire:model="email">

                            <p class="font-medium text-[#344054] text-[14px] mt-[24px]">
                                Password
                            </p>
                            <input class="border-solid border-2 rounded-md w-full mt-[6px] font-normal px-[12px] py-[16px]" placeholder="Your password" type="password" name="password" wire:model="password">

                            <div class="flex flex-col items-center justify-center">
                                <button class="bg-[#7F56D9] w-full h-[48px] text-white rounded-md text-[16px] font-medium mt-[32px]" type="submit">Register</button>
                            </div>

                        </div>

                    </form>

                </div>
            </div>

        </div>




    </div>


</div>
