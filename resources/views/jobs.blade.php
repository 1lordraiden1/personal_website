<x-layout name="about">
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>This is jobs page</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/">
                    <strong>{{ $job['title']}}: </strong> Pays {{$job['salary']}} per year
                </a>
            </li>

        @endforeach
    </ul>
</x-layout>