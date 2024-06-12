<x-app-layout>
    <div class="mt-8">
        <form method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto ">
            @csrf()
            <div>

                <!-- <x-input-label for="subject" :value="__('Subject')" />
                <x-text-input  name="subject" type="text" class="mt-2 block w-full" autofocus  /> -->
                <x-input-label class="mt-4" for="data" :value="__('Yours')" />
                <x-text-input name="data" type="text" class="mt-2 block w-full" autofocus />
                <x-input-error name="data" class="mt-2" :messages="$errors->get('data')" />
                <x-primary-button class="mt-4">{{ __('Send') }}</x-primary-button>
                <div>
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('thread') }}">
                        chatBoXx
                    </a>

                </div>
            </div>
        </form>
        
</x-app-layout>