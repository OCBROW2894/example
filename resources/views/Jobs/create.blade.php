<x-layouts>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf <!-- Cross Site Request Fodgery(CSRF) -->

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create A New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Just fill the Fields with  Relative Details.😊</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title" >Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Software Engineer"/>

                            <x-form-error name="title" />
                        </div>
                    </x-form-field>
                    </div>
                    <x-form-field>
                        <x-form-label for="Salary" >Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="Salary" id="Salary" placeholder="$1,000,000" />
                            <x-form-error name="Salary" />
                        </div>
                    </x-form-field>
                </div>

                <!-- Throwing all the errors to the view
                <div class="mt-10">
                 {{--   @if($errors->any()) --}}
                        <ul>
                      {{--      @foreach($errors->all() as $error) --}}
                      {{--          <li class="text-red-500 italic">{{$error}}</li> --}}
                     {{--       @endforeach --}}
                        </ul>
                  {{--  @endif --}}
                </div>
                -->


        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
           <x-form-submit-button>Save</x-form-submit-button>
        </div>
         </div>
    </div>
    </form>

</x-layouts>
