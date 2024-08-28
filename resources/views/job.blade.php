<x-layout name="job {{ $job['id']}}">
    <x-slot:heading>
        Job Page
    </x-slot:heading>
    <h1>This is job {{$job['id']}} page</h1>

    <ul>

        <li>

            <p><strong>{{ $job['title']}}: </strong> Pays {{$job['salary']}} per year</p>

        </li>


    </ul>
</x-layout>