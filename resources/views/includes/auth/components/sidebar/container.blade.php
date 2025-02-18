<div class="hidden lg:fixed lg:inset-y-0 lg:z-40 lg:flex lg:w-72 lg:flex-col">
    <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
      <div class="flex h-16 shrink-0 items-center">
        <span class="font-medium">
          Vos Bouw B.V.
        </span>
      </div>
      <nav class="flex flex-1 flex-col">
        <ul role="list" class="flex flex-1 flex-col gap-y-7">
          <li>
            <ul role="list" class="-mx-2 space-y-1">
              <x-sidebar.item label="Dashboard" icon="home" :to="route('auth.dashboard')" />
              <x-sidebar.item label="Projecten" icon="project" :to="route('auth.project.index')" />
              <x-sidebar.item label="Diensten" icon="service" :to="route('auth.service.index')" />
              <x-sidebar.item label="Categorieën" icon="list" :to="route('auth.category.index')" />
              <x-sidebar.item label="Paginaweergaven" icon="chart-line" :to="route('auth.page-views.index')" />
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </div>