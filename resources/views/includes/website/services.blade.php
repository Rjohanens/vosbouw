<div x-data="{ tabIndex: 0 }" class="mt-24 bg-stone-100 py-24">
    <div class="grid grid-cols-2 px-16">
        <div class="flex flex-col">
            <div>
                <h1 class="text-4xl text-stone-700 font-light">Onze diensten</h1>
                <div class="w-12 h-1 bg-orange-500 mt-4"></div>
            </div>
            <div class="flex flex-col divide-y divide-stone-300 mt-6 cursor-pointer">
                <div @click="tabIndex = 0" :class="tabIndex === 0 ? '!bg-orange-500 !text-white': ''" class="flex justify-between p-4 text-lg font-normal text-stone-700 bg-stone-100 hover:bg-stone-200 transition duration-300">
                    <span>Dienst</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                </div>
                <div @click="tabIndex = 1" :class="tabIndex === 1 ? '!bg-orange-500 !text-white': ''" class="flex justify-between p-4 text-lg font-normal text-stone-700 bg-stone-100 hover:bg-stone-200 transition duration-300">
                    <span>Dienst</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                </div>
                <div @click="tabIndex = 2" :class="tabIndex === 2 ? '!bg-orange-500 !text-white': ''" class="flex justify-between p-4 text-lg font-normal text-stone-700 bg-stone-100 hover:bg-stone-200 transition duration-300">
                    <span>Dienst</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                </div>
                <div @click="tabIndex = 3" :class="tabIndex === 3 ? '!bg-orange-500 !text-white': ''" class="flex justify-between p-4 text-lg font-normal text-stone-700 bg-stone-100 hover:bg-stone-200 transition duration-300">
                    <span>Dienst</span>
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                </div>
            </div>
        </div>
        <div x-show="tabIndex === 0" class="flex flex-col pl-16">
            <div class="w-full bg-stone-300 aspect-video rounded-lg"></div>
            <p class="mt-6 text-sm leading-8 text-stone-700">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis neque itaque architecto, soluta praesentium nemo obcaecati iure repellendus quaerat aperiam nulla, tempore aliquid ipsum animi vitae laborum, pariatur eum ipsam.
            </p>
            <div class="flex justify-between items-center">
                <x-button class="mt-8">
                    <div class="flex space-x-2 items-center">
                        <span>Lees meer</span>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </div>
                </x-button>
                <div class="flex items-center space-x-2 py-3">
                    <svg @click="tabIndex = 3" class="w-4 h-4 text-stone-400 hover:text-stone-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                    <svg @click="tabIndex = 1" class="w-4 h-4 text-stone-400 hover:text-stone-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                </div>
            </div>
        </div>
        <div x-show="tabIndex === 1" class="flex flex-col pl-16">
            <div class="w-full bg-stone-400 aspect-video rounded-lg"></div>
            <p class="mt-6 text-sm leading-8 text-stone-700">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis neque itaque architecto, soluta praesentium nemo obcaecati iure repellendus quaerat aperiam nulla, tempore aliquid ipsum animi vitae laborum, pariatur eum ipsam.
            </p>
            <div class="flex justify-between items-center">
                <x-button class="mt-8">
                    <div class="flex space-x-2 items-center">
                        <span>Lees meer</span>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </div>
                </x-button>
                <div class="flex items-center space-x-2 py-3">
                    <svg @click="tabIndex = 0" class="w-4 h-4 text-stone-400 hover:text-stone-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                    <svg @click="tabIndex = 2" class="w-4 h-4 text-stone-400 hover:text-stone-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                </div>
            </div>
        </div>
        <div x-show="tabIndex === 2" class="flex flex-col pl-16">
            <div class="w-full bg-stone-500 aspect-video rounded-lg"></div>
            <p class="mt-6 text-sm leading-8 text-stone-700">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis neque itaque architecto, soluta praesentium nemo obcaecati iure repellendus quaerat aperiam nulla, tempore aliquid ipsum animi vitae laborum, pariatur eum ipsam.
            </p>
            <div class="flex justify-between items-center">
                <x-button class="mt-8">
                    <div class="flex space-x-2 items-center">
                        <span>Lees meer</span>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </div>
                </x-button>
                <div class="flex items-center space-x-2 py-3">
                    <svg @click="tabIndex = 1" class="w-4 h-4 text-stone-400 hover:text-stone-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                    <svg @click="tabIndex = 3" class="w-4 h-4 text-stone-400 hover:text-stone-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                </div>
            </div>
        </div>
        <div x-show="tabIndex === 3" class="flex flex-col pl-16">
            <div class="w-full bg-stone-600 aspect-video rounded-lg"></div>
            <p class="mt-6 text-sm leading-8 text-stone-700">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis neque itaque architecto, soluta praesentium nemo obcaecati iure repellendus quaerat aperiam nulla, tempore aliquid ipsum animi vitae laborum, pariatur eum ipsam.
            </p>
            <div class="flex justify-between items-center">
                <x-button class="mt-8">
                    <div class="flex space-x-2 items-center">
                        <span>Lees meer</span>
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                    </div>
                </x-button>
                <div class="flex items-center space-x-2 py-3">
                    <svg @click="tabIndex = 2" class="w-4 h-4 text-stone-400 hover:text-stone-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
                    <svg @click="tabIndex = 0"class="w-4 h-4 text-stone-400 hover:text-stone-600 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                </div>
            </div>
        </div>
    </div>
</div>