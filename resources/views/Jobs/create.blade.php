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
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                               <!-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">cbrow.com</span> -->
                                <!-- U can Add required at the End of The line Below -->
                                <input type="text" name="title" id="title"  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Software Engineer">
                            </div>
                            <!--To Throw error under the filed -->
                            @error('title')
                                <p class="text-xs text-red-500 font-semibold italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="Salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                               <!-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">cbrow.com</span> -->
                                <!-- U can Add required at the End of The line Below -->
                                <input type="text" name="Salary" id="Salary"  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$700,000">
                            </div>

                            @error('Salary')
                            <p class="text-xs text-red-500 font-semibold italic mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
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
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
         </div>
    </div>
    </form>

</x-layouts>
