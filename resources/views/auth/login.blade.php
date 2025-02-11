<x-layouts.app>

	<div class="flex min-h-screen items-center justify-center">
		<div class="flex flex-col w-full max-w-md shadow-sm border rounded-md p-8">
			<h1 class="text-3xl text-center text-gray-900">Vos Bouw</h1>
			@if(Auth::check())
				<div class="flex space-x-2 justify-center items-center mt-8">
					<form action="{{ route('auth.logout') }}" method="POST">
						@csrf
						<x-button-link type="submit" label="Uitloggen"></x-button-link>
					</form>
					<x-button :href="route('auth.dashboard')" label="Ga naar dashboard" icon="arrow-up"></x-button>
				</div>
			@else
				<form class="space-y-6" action="{{route('login')}}" method="POST">
					@csrf
					<x-input label="Emailadres" name="email" type="email" value="{{ old('email') }}" required />
					<x-input label="Wachtwoord" name="password" type="password" required />

					<div class="flex justify-end pt-6">
						<x-button type="submit" label="Aanmelden"></x-button>
					</div>
				</form>
			@endif
		</div>
	</div>
</x-layouts.app>