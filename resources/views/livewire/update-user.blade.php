<div class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2">
    @if (session()->has('message'))
        <x-notify>
            {{ session('message') }}
        </x-notify>
    @endif
      
    <div class="px-4 py-6 sm:p-8">
        <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-3">
                <form wire:submit.prevent="updateName">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900 flex items-center justify-between">
                        <span class="text-gray-500">Name</span>
                        <a
                            href="#"
                            wire:click.prevent="editName"
                            class="{{ $toggleName ? 'hidden' : ''}} text-teal-500 hover:text-blue-700 transition duration-300 ease-in-out py-1 px-3 sm:mr-0 -mr-3"
                        >
                            <svg class="flex-shrink-0 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                            </svg>
                        </a>
                        @if ($toggleName)
                            <button type="submit" class="text-indigo-500 hover:text-indigo-700 transition duration-300 ease-in-out text-xs py-1 px-3 -mb-px sm:mr-0 -mr-3">
                                Save
                            </button>
                        @endif
                    </label>
                    <div class="mt-2">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            autocomplete="off"
                            wire:model="name"
                            class="{{ $toggleName ? '' : 'pointer-events-none' }} block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </form>
            </div>

            <div class="sm:col-span-3">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                    <span class="text-gray-500">Email address</span>
                </label>
                <div class="mt-2">
                    <input 
                        id="email"
                        name="email"
                        type="email"
                        autocomplete="email"
                        wire:model.defer="email"
                        class="pointer-events-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-2">
                <form wire:submit.prevent="updatePhone">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900 flex items-center justify-between">
                        <span class="text-gray-500">Phone</span>
                        <a
                            href="#"
                            wire:click.prevent="editPhone"
                            class="{{ $togglePhone ? 'hidden' : ''}} text-teal-500 hover:text-blue-700 transition duration-300 ease-in-out py-1 px-3 sm:mr-0 -mr-3"
                        >
                            <svg class="flex-shrink-0 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                            </svg>
                        </a>
                        @if ($togglePhone)
                            <button type="submit" class="text-indigo-500 hover:text-indigo-700 transition duration-300 ease-in-out text-xs py-1 px-3 -mb-px sm:mr-0 -mr-3">
                                Save
                            </button>
                        @endif
                    </label>
                    <div class="mt-2">
                        <input
                            wire:model.defer="phone"
                            type="text"
                            name="phone"
                            id="phone"
                            autocomplete="off"
                            maxlength="10"
                            class="{{ $togglePhone ? '' : 'pointer-events-none' }} block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </form>
                @error('phone')<span class="text-sm font-medium text-red-800">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-2">
                <form wire:submit.prevent="updateBirthday">
                    <label for="birthday" class="block text-sm font-medium leading-6 text-gray-900 flex items-center justify-between">
                        <span class="text-gray-500">Birthday</span>
                        <a
                            href="#"
                            wire:click.prevent="editBirthday"
                            class="{{ $toggleBirthday ? 'hidden' : ''}} text-teal-500 hover:text-blue-700 transition duration-300 ease-in-out py-1 px-3 sm:mr-0 -mr-3"
                        >
                            <svg class="flex-shrink-0 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                            </svg>
                        </a>
                        @if ($toggleBirthday)
                            <button type="submit" class="active account-submit text-indigo-500 hover:text-indigo-700 transition duration-300 ease-in-out text-xs py-1 px-3 -mb-px -mr-3">
                                Save
                            </button>
                        @endif
                    </label>
                    <div class="mt-2">
                        <input
                            type="text"
                            name="birthday"
                            id="datepicker"
                            tabindex="-1"
                            wire:model="birthday"
                            wire:change="$set('birthday', $event.target.value)"
                            autocomplete="off"
                            class="pointer-events-none block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </form>
                @error('birthday')<span class="text-sm font-medium text-red-800">{{ $message }}</span>@enderror
            </div>

            <div class="sm:col-span-2">
                <form wire:submit.prevent="updateCity">
                    <label for="city" class="block text-sm font-medium leading-6 text-gray-900 flex items-center justify-between">
                        <span class="text-gray-500">City</span>
                        <a
                            href="#"
                            wire:click.prevent="editCity"
                            class="{{ $toggleCity ? 'hidden' : ''}} text-teal-500 hover:text-blue-700 transition duration-300 ease-in-out py-1 px-3 sm:mr-0 -mr-3"
                        >
                            <svg class="flex-shrink-0 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z"></path>
                            </svg>
                        </a>
                        @if ($toggleCity)
                            <button type="submit" class="active account-submit text-indigo-500 hover:text-indigo-700 transition duration-300 ease-in-out text-xs py-1 px-3 -mb-px -mr-3">
                                Save
                            </button>
                        @endif
                    </label>
                    <div class="mt-2">
                        <input
                            type="text"
                            name="city"
                            wire:model="city"
                            id="city"
                            autocomplete="off"
                            class="{{ $toggleCity ? '' : 'pointer-events-none' }}  block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </form>
            </div>


        </div>

        <div class="mt-6 first:mt-0">
            <label for="gender" class="block text-sm font-medium leading-6 text-gray-900 flex items-center justify-between sm:justify-start">
                <span class="text-gray-500">Gender</span>
            </label>
            <fieldset class="mt-4">
                <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                  <div class="flex items-center">
                    <input id="male" wire:model="gender" wire:click="updateGender" name="gender" value="male" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="male" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Male</label>
                  </div>
                  <div class="flex items-center">
                    <input id="female" wire:model="gender" wire:click="updateGender" name="gender" value="female" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="female" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Female</label>
                  </div>
                  <div class="flex items-center">
                    <input id="other" wire:model="gender" wire:click="updateGender" name="gender" value="other" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="other" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Other</label>
                  </div>
                </div>
              </fieldset>
        </div>
    </div>
</div>

@push('scripts')
<script>
    window.addEventListener('livewire:init', () => {
        Livewire.on('name', (event) => {
            document.getElementById('name').focus();
        })

        Livewire.on('phone', (event) => {
            document.getElementById('phone').focus();
        })

        Livewire.on('birthday', (event) => {
            document.getElementById('datepicker').focus();
        })

        Livewire.on('city', (event) => {
            document.getElementById('city').focus();
        })
    });
</script>
@endpush