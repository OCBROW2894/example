<x-layouts>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf <!-- Cross Site Request Fodgery(CSRF) -->
        @method('PATCH') <!-- This Is A Hint To The FrameWork what the actual method is, Because the browser currently doesn't Understand the PATCH method -->>

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title" >Title</x-form-label>
                            <x-form-input name="title" id="title" placeholder="Software Engineer" value="{{ $job->title }}" />
                            <x-form-error name="title"/>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label for="Salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="Salary" id="Salary" placeholder="$1,000,000" value="{{ $job->Salary }}" />
                            <x-form-error name="Salary"/>
                        </div>
                    </div>
                </div>


        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-medium">Delete</button>
            </div>

            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>

                <div>
                    <x-form-submit-button>Update</x-form-submit-button>
                </div>
            </div>
        </div>
       </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layouts>
