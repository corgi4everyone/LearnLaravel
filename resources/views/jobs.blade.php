<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    @foreach ($jobs as $job)
        <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
            <li>{{ $job['title'] }} : Pays {{ $job['salary'] }} per month.</li>
        </a>
    @endforeach
</x-layout>
