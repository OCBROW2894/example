<x-layouts>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    
    @foreach ( $jobs as $job )
      <ul>
         <a href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
            <li><strong>{{ $job['title']}}</strong>. Pays a Salary of <strong>{{ $job['Salary']}}</strong> per year.</li>
         </a>
      </ul>
        
    @endforeach

</x-layouts>