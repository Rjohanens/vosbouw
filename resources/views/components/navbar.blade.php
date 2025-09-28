<header class="fixed z-50 bg-dark w-full">
  <nav aria-label="Global" class="flex w-full items-center justify-between px-6 py-4 lg:px-8">
    <div class="flex lg:flex-1">
      <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
        <div class="flex items-center space-x-2.5">
          <span class="sr-only">Vos Bouw</span>
          <img src="{{ asset('images/logo.png')}}" alt="" class="h-8 w-auto" />
          <div class="flex flex-col">
            <span class="text-white">Vos Bouw</span>
            <span class="text-xs text-white -mt-1">Bouw- en aannemersbedrijf</span>
          </div>
        </div>
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white">
        <span class="sr-only">Open menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <el-popover-group class="hidden lg:flex lg:gap-x-12">
      <a href="{{ route('project.index') }}" class="text-sm/6 font-medium text-white hover:text-primary dark:text-white">Projecten</a>
      <a href="{{ route('service.index') }}" class="text-sm/6 font-medium text-white hover:text-primary dark:text-white">Diensten</a>
      <a href="{{ route('contact.index') }}" class="text-sm/6 font-medium text-white hover:text-primary dark:text-white">Contact</a>
    </el-popover-group>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <x-inputs.button variant="primary" label="Offerte aanvragen" />
    </div>
  </nav>
  <el-dialog>
    <dialog id="mobile-menu" class="m-0 p-0 backdrop:bg-transparent lg:hidden">
      <div tabindex="0" class="fixed inset-0 focus:outline focus:outline-0">
        <el-dialog-panel class="fixed inset-y-0 right-0 z-10 flex w-full flex-col justify-between overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10 dark:bg-gray-900 dark:sm:ring-white/10">
          <div class="p-6">
            <div class="flex items-center justify-between">
              <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                <div class="flex items-center space-x-2.5">
                  <span class="sr-only">Vos Bouw</span>
                  <img src="{{ asset('images/logo.png')}}" alt="" class="h-8 w-auto" />
                  <div class="flex flex-col">
                    <span class="text-dark">Vos Bouw</span>
                    <span class="text-xs text-dark -mt-1">Bouw- en aannemersbedrijf</span>
                  </div>
                </div>
              </a>
              <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-700 dark:text-gray-400">
                <span class="sr-only">Close menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                  <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10 dark:divide-white/10">
                <div class="space-y-2 py-6">
                  <a href="{{ route('project.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-normal text-dark hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Projecten</a>
                  <a href="{{ route('service.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-normal text-dark hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Diensten</a>
                  <a href="{{ route('contact.index') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-normal text-dark hover:bg-gray-50 dark:text-white dark:hover:bg-white/5">Contact</a>                </div>
                <div class="py-6">
                  <x-inputs.button variant="primary" label="Offerte aanvragen" class="w-full" />
                </div>
              </div>
            </div>
          </div>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>
</header>
