<form class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
    <div class="px-4 py-6 sm:p-8">
        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-2">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First
                    name</label>
                <div class="mt-2">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last
                    name</label>
                <div class="mt-2">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                    address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="phone"
                    class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                <div class="mt-2">
                    <input type="text" name="phone" id="phone" autocomplete="phone"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>





            <div class="sm:col-span-2">
                <label for="birthday"
                    class="block text-sm font-medium leading-6 text-gray-900">Birthday</label>
                <div class="mt-2">
                    <input type="text" name="birthday" id="birthday" autocomplete="birthday"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">City</label>
                <div class="mt-2">
                    <input type="text" name="city" id="city" autocomplete="address-level2"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>


        </div>

        <div class="mt-6 first:mt-0">
            <label for="gender" class="flex items-center justify-between sm:justify-start">
                <span class="text-gray">Género</span>
            </label>
            <ul class="flex flex-col items-start sm:items-center sm:flex-row mt-4">
                <li class="flex-shrink-0 mt-3 first:ml-0 sm:ml-5 first:mt-0 sm:mt-0">
                    <label class="relative flex items-center cursor-pointer">
                        <input wire:model="gender" wire:click="updateGender" type="radio" name="gender"
                            value="male" class="absolute left-0 opacity-0 account-gender">
                        <div
                            class="flex items-center justify-center w-5 h-5 border border-gray-500 rounded-full">
                        </div>
                        <span class="ml-2 text-sm">Male</span>
                    </label>
                </li>
                <li class="flex-shrink-0 mt-3 first:ml-0 sm:ml-5 first:mt-0 sm:mt-0">
                    <label class="relative flex items-center cursor-pointer">
                        <input wire:model="gender" wire:click="updateGender" type="radio" name="gender"
                            value="female" class="absolute left-0 opacity-0 account-gender">
                        <div
                            class="flex items-center justify-center w-5 h-5 border border-gray-500 rounded-full">
                        </div>
                        <span class="ml-2 text-sm">Female</span>
                    </label>
                </li>
                <li class="flex-shrink-0 mt-3 first:ml-0 sm:ml-5 first:mt-0 sm:mt-0">
                    <label class="relative flex items-center cursor-pointer">
                        <input wire:model="gender" wire:click="updateGender" type="radio" name="gender"
                            value="other" class="absolute left-0 opacity-0 account-gender">
                        <div
                            class="flex items-center justify-center w-5 h-5 border border-gray-500 rounded-full">
                        </div>
                        <span class="ml-2 text-sm">Other</span>
                    </label>
                </li>
            </ul>
        </div>
    </div>
</form>