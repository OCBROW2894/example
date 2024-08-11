<x-layouts>
    <x-slot:heading>
        LogIn
    </x-slot:heading>
    <form method="POST" action="/login">
        @csrf <!-- Cross Site Request Fodgery(CSRF) -->

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="email" >E-Mail</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" placeholder="kozukiOden@gmail.com" :value="old('email')" required/>
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>
                </div>


                <x-form-field>
                    <x-form-label for="password" >Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="password" id="password" type="password"  required/>
                        <x-form-error name="password" />
                    </div>
                </x-form-field>



            </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <x-form-submit-button>LogIn</x-form-submit-button>
            </div>
        </div>
    </form>

</x-layouts>
