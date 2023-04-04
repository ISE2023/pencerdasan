<div class="flex justify-center items-center">
    <div class="rounded-lg h-[41rem] w-[35rem] bg-[#19A7CE] shadow-lg shadow-blue-300">
        <div class="rounded-t-lg bg-[#146C94] text-white text-xl h-14  p-4 text-center font-bold">Register Account</div>
        <form  wire:submit.prevent="submit">
            <div class="mt-4 mx-8">
                <div class="font-bold inline-block">
                    Email
                </div>
                <div class="inline-block ml-2 mb-1">
                    @error('email')
                        [{{ $message }}]
                    @enderror
                </div>
                <input class="w-[31rem] shadow rounded pl-2 py-1" type="text" name="email" id="email" placeholder="type your email here" wire:model="email">
            </div>
            <div class="mt-4 mx-8">
                <div></div>
                <div class="font-bold inline-block">
                    ID Number
                </div>
                <div class="inline-block ml-2 mb-1">
                    @error('idNum')
                        [{{ $message }}]
                    @enderror
                </div>
                <input class="w-[31rem] shadow rounded pl-2 py-1" type="number" name="idNum" id="idNum" placeholder="type your id number here" wire:model="idNum">
            </div>
            <div class="mt-4 mx-8">
                <div class="font-bold inline-block">
                    User Name
                </div>
                <div class="inline-block ml-2 mb-1">
                    @error('userName')
                        [{{ $message }}]
                    @enderror
                </div>
                <input class="w-[31rem] shadow rounded pl-2 py-1" type="text" name="userName" id="userName" placeholder="type your username here" wire:model="userName">
            </div>
            <div class="mt-4 mx-8">
                <div class="font-bold inline-block">
                    Password
                </div>
                <div class="inline-block ml-2 mb-1">
                    @error('password')
                        [{{ $message }}]
                    @enderror
                </div>
                <input class="w-[31rem] shadow rounded pl-2 py-1" type="password" name="password" id="password" placeholder="type your password here" wire:model="password">
            </div>
            <div class="mt-4 mx-8">
                <div class="inline-block font-bold">
                    Gender
                </div>
                <div class="inline-block ml-16 font-bold">
                    Male
                    <input class="shadow" type="radio" name="gender" id="genderMale" value="male" wire:model="gender">
                </div>
                <div class="inline-block ml-16 font-bold">
                    Female
                    <input class="shadow" type="radio" name="gender" id="genderFemale" value="female" wire:model="gender">
                </div>
                <div>
                    @error('gender')
                        [{{ $message }}]
                    @enderror
                </div>
            </div>
            <div class="my-4 mx-8">
                <div class="inline-block font-bold">Account Type</div>
                <select class="ml-4 w-48 shadow rounded pl-2 py-1" name="accountType" id="accountType" wire:model="accountType">
                    <option value="" disabled>Choose Account Type</option>
                    <option value="guest">Guest</option>
                    <option value="student">Student</option>
                    <option value="teacher">Teacher</option>
                </select>
                <div>
                    @error('accountType')
                    [{{ $message }}]
                    @enderror
                </div>
            </div>
            <div class="my-4 mx-8">
                <div class="inline-block font-bold">Certification</div>
                <input class="shadow rounded" type="file" name="file" id="file" wire:model="file">
                </select>
                <div>
                    @error('file')
                    [{{ $message }}]
                    @enderror
                </div>
            </div>
            <div class="my-4 mx-8">
                <div class="inline-block font-bold">Subscribe to our news?</div>
                <input class="inline-block shadow rounded ml-2" type="checkbox" value="true" name="wantNews" id="wantNews" wire:model="wantNews">
                </select>
            </div>
            {{-- To make: File, checkbox --}}
            <div class=" my-4 mx-8">
                <button class="bg-blue-600 p-2 rounded w-full font-bold shadow hover:bg-blue-700" type="submit">submit</button>
            </div>
        </form>
    </div>
</div>