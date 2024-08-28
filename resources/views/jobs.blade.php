<x-layout name="jobs">
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>This is jobs page</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title']}}: </strong> Pays {{$job['salary']}} per year
                </a>
            </li>

        @endforeach
    </ul>
</x-layout>