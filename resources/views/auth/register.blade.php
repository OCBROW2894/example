<x-layouts>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf <!-- Cross Site Request Fodgery(CSRF) -->

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="first_name" >First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" placeholder="Oden" required/>

                            <x-form-error name="first_name" />
                        </div>
                    </x-form-field>
                </div>
                <x-form-field>
                    <x-form-label for="last_name" >Last Name</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="last_name" id="last_name" placeholder="Kozuki" required/>
                        <x-form-error name="last_name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="email" >E-Mail</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="email" id="email" type="email" placeholder="kozukiOden@gmail.com" required/>
                        <x-form-error name="email" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password" >Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="password" id="password" type="password"  required/>
                        <x-form-error name="password" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirmation" >Confirm Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input name="password_confirmation" id="password_confirmation" type="password" required/>
                        <x-form-error name="password_confirmation" />
                    </div>
                </x-form-field>

            </div>


            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <x-form-submit-button>Register</x-form-submit-button>
            </div>
        </div>
    </form>

</x-layouts>
