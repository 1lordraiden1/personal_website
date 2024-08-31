<x-layout name="job {{ $job['id']}}">
    <x-slot:heading>
        Job
    </x-slot:heading>
    <ul>

        <h2 class="font-bold text-lg">

            <p><strong>{{ $job->title }} </strong></p>

        </h2>

        <p>
            Pays {{$job['salary']}} per year.
        </p>


        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>

       <!--  <p class="sm:col-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        </p>
 -->

    </ul>
</x-layout>