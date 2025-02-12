<div class="px-4 sm:px-6 lg:px-8">
    <h1 class="cursor-pointer text-xl leading-6 text-gray-900">Dashboard</h1>
    <div>
        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-primary p-3">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M352 48l224 0c8.8 0 16 7.2 16 16l0 384c0 8.8-7.2 16-16 16l-160 0c0 18-6 34.6-16 48l176 0c35.3 0 64-28.7 64-64l0-384c0-35.3-28.7-64-64-64L352 0c-35.3 0-64 28.7-64 64l0 60.6 48 44L336 64c0-8.8 7.2-16 16-16zm61.2 208l18.8 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16l0 4.6 6.1 5.6c11.2 10.3 19.2 23.4 23.1 37.9zm2.8 96l16 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-16 0 0 64zm64-144l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm16 80c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM400 96c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm80 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zM20.8 237C7.5 249.1 0 266.2 0 284.2L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-163.8c0-17.9-7.5-35.1-20.8-47.2l-128-117.3c-24.5-22.4-62-22.4-86.5 0L20.8 237zM48 284.2c0-4.5 1.9-8.8 5.2-11.8L181.2 155c6.1-5.6 15.5-5.6 21.6 0l128 117.3c3.3 3 5.2 7.3 5.2 11.8L336 448c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-163.8zM144 296l0 48c0 13.3 10.7 24 24 24l48 0c13.3 0 24-10.7 24-24l0-48c0-13.3-10.7-24-24-24l-48 0c-13.3 0-24 10.7-24 24z"/></svg>
                    </div>
                    <p class="ml-16 truncate text-sm font-normal text-gray-700">Aantal projecten</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-normal text-gray-900">
                        {{ $this->projectCount }}
                    </p>
                    <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="{{ route('auth.project.index') }}" class="font-normal text-primary hover:text-primary/80">Bekijk alle</a>
                        </div>
                    </div>
                </dd>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-primary p-3">
                        <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M160 160l0-48L67 42.3 42.3 67 112 160l48 0zm32 0l0 9.4 99.3 99.3 14.1-14.1L328 232l22.6 22.6L489.4 393.4 512 416l-22.6 22.6-50.7 50.7L416 512l-22.6-22.6L254.6 350.6 232 328l22.6-22.6 14.1-14.1L169.4 192l-9.4 0-64 0L0 64 64 0 192 96l0 64zM416 466.7L466.7 416 328 277.3 277.3 328 416 466.7zM22.6 377.4L166.1 233.9l22.6 22.6L45.3 400 112 466.7 218.7 360l22.6 22.6L134.6 489.4 112 512 89.4 489.4 22.6 422.6 0 400l22.6-22.6zM480 160c0-10.7-1.3-21.1-3.8-31l-53.6 53.6-9.4 9.4L400 192l-48 0-32 0 0-32 0-48 0-13.3 9.4-9.4L383 35.8c-9.9-2.5-20.3-3.8-31-3.8c-46.5 0-87.2 24.8-109.6 61.8L216.7 74.5C245.1 29.7 295.1 0 352 0c19.9 0 38.9 3.6 56.5 10.3c10.6 4 20.7 9.1 30.1 15.2L415.3 48.7 352 112l0 16 0 32 32 0 16 0 63.3-63.3 23.3-23.3c6.1 9.4 11.2 19.5 15.2 30.1c6.6 17.6 10.3 36.6 10.3 56.5c0 57.2-30 107.3-75.1 135.6l-23.4-23.4C453.1 250.5 480 208.4 480 160zM120 414.6L97.4 392 120 369.4 142.6 392 120 414.6z"/></svg>
                    </div>
                    <p class="ml-16 truncate text-sm font-normal text-gray-700">Aantal diensten</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-normal text-gray-900">
                        {{ $this->serviceCount }}
                    </p>
                    <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="{{ route('auth.service.index') }}" class="font-normal text-primary hover:text-primary/80">Bekijk alle</a>
                        </div>
                    </div>
                </dd>
            </div>
            <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
                <dt>
                    <div class="absolute rounded-md bg-primary p-3">
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                        </svg>
                    </div>
                    <p class="ml-16 truncate text-sm font-normal text-gray-700">Aantal paginaweergaven</p>
                </dt>
                <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
                    <p class="text-2xl font-normal text-gray-900">
                        {{ Illuminate\Support\Number::forHumans($this->pageViews) }}
                    </p>
                    <div class="absolute inset-x-0 bottom-0 bg-gray-50 px-4 py-4 sm:px-6">
                        <div class="text-sm">
                            <a href="{{ route('auth.page-views.index') }}" class="font-normal text-primary hover:text-primary/80">Bekijk alle</a>
                        </div>
                    </div>
                </dd>
            </div>
        </dl>
    </div>
</div>
