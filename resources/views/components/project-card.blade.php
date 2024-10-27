<article class="relative isolate group flex flex-col justify-end overflow-hidden rounded-2xl bg-zinc-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80 shadow-md">
    <img src="{{ $project->thumbnail()?->getUrl() }}" alt="{{ $project->title }}" class="absolute inset-0 -z-10 h-full w-full object-cover group-hover:scale-105 transition duration-300">
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-zinc-900/70 via-zinc-900/30"></div>
    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-zinc-900/10"></div>

    <div class="flex flex-wrap items-center gap-y-1 overflow-hidden text-sm leading-6 text-white">
      <time datetime="2020-03-16" class="mr-8">
        {{ $project->execution_date->format('M d, Y') }}
      </time>
      <div class="-ml-4 flex items-center gap-x-4">
        <svg viewBox="0 0 2 2" class="-ml-0.5 h-0.5 w-0.5 flex-none fill-white">
          <circle cx="1" cy="1" r="1" />
        </svg>
        <div class="flex justify-center items-center px-2 py-0.5 rounded-full bg-primary">
            <span class="text-xs text-white">{{ $project->category?->name }}</span>
        </div>
      </div>
    </div>
    <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
      <a href="{{ route('project.show', $project) }}" class="flex space-x-2 justify-between items-center">
        <span class="absolute inset-0"></span>
        {{ $project->title }}
        <div class="opacity-0 translate-y-full group-hover:translate-y-0 group-hover:opacity-100 transition duration-300 w-fit p-2 bg-primary rounded-full">
          <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
        </div>
      </a>
    </h3>
  </article>
  