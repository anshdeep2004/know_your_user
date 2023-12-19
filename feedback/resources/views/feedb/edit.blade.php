<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{ url('update-feedback/'.$feedback->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$feedback->name" autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$feedback->email" autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="rating" :value="__('Rate us on the Scale of 0 to 5')" />
                        <x-text-input id="rating" class="block mt-1 w-full" type="text" name="rating" :value="$feedback->rating" autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                    </div>

                    <x-input-label for="feedback" :value="__('Feedback')" />
                    <div>
                        <textarea
                            name="feedback"
                            placeholder="{{ __('Help us Improve.') }}"
                            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            {{ old('feedback') }}</textarea>
                        <x-input-error :messages="$errors->get('feedback')" class="mt-2" />
                    </div>
                    
                    <div>
                        <x-input-label for="contact" :value="__('Contact')" />
                        <x-text-input id="contact" class="block mt-1 w-full" type="text" name="contact" :value="$feedback->contact" autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('contact')" class="mt-2" />
                    </div>
                    <div>
                        <x-primary-button class="ms-3">
                            {{ __('Update feedback') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
