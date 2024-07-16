<x-layouts>
    <x-slot:heading>
        Job
    </x-slot:heading>
<h1 class="font-bold text-lg"><strong>{{ $job['title']}}</strong></h1>
<p class="text-sm">
    Pays a Salary of <strong>{{ $job['Salary']}}</strong> per year.
</p>
</x-layouts>