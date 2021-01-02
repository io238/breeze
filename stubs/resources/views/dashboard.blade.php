<x-app-layout>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>

    <h1>
        Welcome, {{ Auth::user()->name }}
    </h1>

    You are logged in!

    <hr class="my-10">

    @php($colors = ['brand', 'secondary', 'gray', 'info', 'success', 'warning', 'danger'])
    @php($statuses = ['info', 'success', 'warning', 'danger'])
    @php($sizes = ['sm', 'default', 'lg'])

    <h2>
        Badges
    </h2>

    @foreach($sizes as $size)
        <div class="mb-10">
            <h4 class="text-xs uppercase text-gray-400 font-medium">Size: {{ $size }}</h4>

            @foreach($colors as $color)
                <x-badge :type="$color" :size="$size">
                    {{ $color }}
                </x-badge>
            @endforeach
        </div>
    @endforeach


    <hr class="my-10">


    <h2>
        Alerts
    </h2>

    @foreach($statuses as $status)
        <x-alert :type="$status">
            This is an alert for the type "{{ $status }}".

            <x-slot name="details">
                Here are some details.
            </x-slot>
        </x-alert>
    @endforeach


    <hr class="my-10">


    <h2>
        Table
    </h2>

    <x-table show="2">
        <x-slot name="header">
            <x-th>Heading</x-th>
            <x-th>Heading</x-th>
            <x-th>Heading</x-th>
        </x-slot>
        <x-slot name="body">
            @foreach($colors as $color)
                <x-tr :iterator="$loop->iteration" :limit="true">
                    <x-td class="text-{{ $color }}-500">{{ $color }}</x-td>
                    <x-td>Cell</x-td>
                    <x-td>Cell</x-td>
                </x-tr>
            @endforeach
        </x-slot>
    </x-table>


    <hr class="my-10">


    <h2>
        Buttons
    </h2>

    <div class="space-y-5">
        @foreach($sizes as $size)
            <div>
                <h4 class="text-xs uppercase text-gray-400 font-medium">Size: {{ $size }}</h4>

                <button class="btn btn-{{ $size }}">
                    Default
                </button>

                @foreach($colors as $color)
                    <button class="btn btn-{{ $color }} btn-{{ $size }}">
                        {{ $color }}
                    </button>
                @endforeach
            </div>
        @endforeach
    </div>




    <hr class="my-10">


    <h2>
        Form Elements
    </h2>

    <div class="flex flex-col md:flex-row justify-start gap-5">
        <input name="test1" type="text" autocomplete="off" />
        <input name="test2" type="date" autocomplete="date" />
        <select name="select">
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
        </select>
    </div>

    <div class="mt-5">
        <textarea placeholder="This is a textarea..." class="w-full"></textarea>
    </div>

    <div class="mt-5 flex gap-5">
        <label class="wrapper" for="check1">
            <input type="checkbox" id="check1" />
            Checkbox 1
        </label>

        <label class="wrapper" for="radio1">
            <input type="radio" name="radiogroup1" id="radio1" />
            Radio 1
        </label>
        <label class="wrapper" for="radio2">
            <input type="radio" name="radiogroup1" id="radio2" />
            Radio 2
        </label>
    </div>

    <div class="mt-5 flex justify-end">
        <input type="submit" class="btn" value="Submit" />
    </div>




    <x-slot name="footer">
        <div class="text-sm text-gray-500">
            Today is the <span class="font-semibold">{{ now()->format('jS \o\f F Y') }}</span> and the page was loaded <span class="font-semibold"><x-timeago :time="now()" /></span>
        </div>
    </x-slot>
</x-app-layout>
