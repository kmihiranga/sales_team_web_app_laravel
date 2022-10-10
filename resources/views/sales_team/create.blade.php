@extends('layout')

@section('content')
    <div class="py-5 text-center">
        <h2>Create a Sales Team</h2>
        <p class="lead">Use below form to create a sales team.</p>
    </div>

    <div class="row g-5">
        <div class="col-md-7 col-lg-8">
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-12">
                        <x-form-label :title="'person_name'">Full Name</x-form-label>
                        <x-text-field :type="'text'" :id="'person_name'" :placeholder="'Full Name'" value="{{ old('person_name') }}"></x-text-field>
                    </div>

                    <div class="col-12">
                        <x-form-label :title="'email'">Email Address</x-form-label>
                        <x-text-field :type="'text'" :id="'email'" :placeholder="'Email Address'" value="{{ old('email') }}"></x-text-field>
                    </div>

                    <div class="col-12">
                        <x-form-label :title="'telephone'">Telephone</x-form-label>
                        <x-text-field :type="'text'" :id="'telephone'" :placeholder="'Telephone'" value="{{ old('telephone') }}"></x-text-field>
                    </div>

                    <div class="col-md-6">
                        <x-form-label :title="'joined_date'">Joined Date</x-form-label>
                        <x-date-picker :id="'joined_date'" value="{{ old('joined_date') }}"></x-date-picker>
                    </div>

                    <div class="col-md-6">
                        <x-form-label :title="'current_routes'">Current Routes</x-form-label>
                        <x-selection :placeholder="'Select a current route'" :id="'current_routes'">
                            <option value="">Choose...</option>
                            
                        </x-selection>
                    </div>
                </div>

                <hr class="my-4">


                <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
            </form>
        </div>
    </div>
@stop
