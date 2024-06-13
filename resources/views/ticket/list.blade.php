<x-app-layout>

    <div class="max-w-sm mx-auto mt-16">
        <form action="#" method="POST" class="space-y-4" id="bookingForm" onsubmit="submitForm(event)">
            @csrf()
            <div>
                <label for="department" class="block text-sm font-medium 
                                  form-label text-gray-700">
                    Choose Ticket Department :
                </label>
                <select id="department" name="department" class="w-full border rounded-md p-2 
                                   form-select focus:outline-none 
                                   focus:ring-2 focus:ring-blue-500 
                                   focus:border-transparent" required onchange="changeSeatType()">

                    @foreach ($tickets as $ticket )

                    <option value="{{$ticket->name}}">{{$ticket->name}}</option>

                    @endforeach
                </select>
            </div>
            <x-primary-button class="mt-4">{{ __('Buy') }}</x-primary-button>
        </form>
    </div>

</x-app-layout>