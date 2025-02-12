<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $title ?? 'Vos Bouw B.V.' }}</title>
	@vite('resources/css/app.css')
</head>
<body class="font-rubik">
	<div>
		@include('includes.auth.components.sidebar.container')
		<div class="lg:pl-72">
			@include('includes.auth.components.topbar')
			<main class="py-10">
				<div class="px-4 sm:px-6 lg:px-8">
					{{ $slot }}
				</div>
			</main>
		</div>
	</div>
	<livewire:toast />
</body>
</html>
