<x-layout>
    <x-slot:heading>
        Jobs listing
    </x-slot:heading>
    <h1 class="text-lg font-bold">{{$job->title}}</h1>
    <p>This job pays {{ $job->salary }} per year.</p>
    <h3><strong>Employer:</strong> {{$job->employer->name}}</h3>

    <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>


</x-layout>
