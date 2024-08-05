@extends('components.layouts.app')

@section('title', 'Login')

@section('content')
<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
	<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[480px]">
		<div class="bg-white px-6 py-12 shadow sm:rounded-lg sm:px-12">
			@error('email')
			<div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded relative" role="alert">
				<strong class="font-normal text-sm">Fout!</strong>
				<span class="block sm:inline text-sm">{{ $message }}</span>
			</div>
			@enderror
			<form class="space-y-6" action="{{route('login')}}" method="POST">
				@csrf
				<div>
					<label for="email" class="block text-sm font-medium leading-6 text-gray-900">Emailadres</label>
					<div class="mt-2">
						<input id="email" name="email" type="email" autocomplete="email" required
							class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
					</div>
				</div>

				<div>
					<label for="password" class="block text-sm font-medium leading-6 text-gray-900">Wachtwoord</label>
					<div class="mt-2">
						<input id="password" name="password" type="password" autocomplete="current-password" required
							class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
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
</div>
@endsection