<x-layouts.app>
	<div class="flex min-h-screen items-center justify-center">
		<div class="flex flex-col w-full max-w-md shadow-sm border rounded-md p-8">
			<h1 class="text-3xl text-center text-gray-900">Vos Bouw</h1>
			<form class="space-y-6" action="{{route('login')}}" method="POST">
				@csrf
				<x-input label="Emailadres" name="email" type="email" value="{{ old('email') }}" required />
				<x-input label="Wachtwoord" name="password" type="password" required />

				<div class="flex justify-end pt-6">
					<x-inputs.button variant="primary" type="submit" label="Aanmelden" />
				</div>
			</form>
		</div>
	</div>
</x-layouts.app>