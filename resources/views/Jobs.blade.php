<x-layout>
    <x-slot:heading>
        Jobs listing
    </x-slot:heading>
    <h1>Welcome to the About Page !</h1>

    @foreach ($jobs as $job)
    <li>
        <a href="/Jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
            <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary'] }} per year.
        </a>
    </li>
    @endforeach

</x-layout>
