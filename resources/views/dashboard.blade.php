<x-app-layout>
    <x-slot name="header">
<div>
<a class="btn btn-primary" href="{{ route('applications.index') }}"> Applications</a>
<a class="btn btn-primary" href="{{ route('contacts.index') }}"> Contacts</a>
<a class="btn btn-primary" href="{{ route('jobs.index') }}"> Jobs</a>
    </x-slot>

</x-app-layout>
