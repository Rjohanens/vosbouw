<x-layouts.app>
	<div class="flex min-h-screen items-center justify-center">
		<div class="flex flex-col w-full max-w-md shadow-sm border rounded-md p-8">
			<h1 class="text-3xl text-center text-gray-900">Vos Bouw</h1>
			<form class="space-y-6" action="{{route('login')}}" method="POST">
				@csrf
				<div>
					<label for="email" class="block text-sm font-medium leading-6 text-gray-900">Emailadres</label>
					<div class="mt-2">
						<input id="email" name="email" type="email" autocomplete="email" required
							class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
					</div>
				</div>
				<div>
					<label for="password" class="block text-sm font-medium leading-6 text-gray-900">Wachtwoord</label>
					<div class="mt-2">
						<input id="password" name="password" type="password" autocomplete="current-password" required
							class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
					</div>
				</div>
				<div>
					<button type="submit"
						class="flex w-full justify-center rounded-md bg-orange-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orangen400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">
						Aanmelden
					</button>
				</div>
			</form>
		</div>
	</div>
</x-layouts.app>