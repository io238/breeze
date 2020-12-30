<x-app-layout>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>

    You are logged in! Yeah!

    <x-slot name="footer">
        <div class="text-sm text-gray-500">
            Now it's {{ now() }}
        </div>
    </x-slot>
</x-app-layout>
