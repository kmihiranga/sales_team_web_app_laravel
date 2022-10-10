@extends('layout')

@section('content')
    <div class="py-5 text-center">
        <h2>Edit a Sales Team</h2>
        <p class="lead">Use below form to edit a sales team.</p>
    </div>

    <div class="row">
        <div class="col-md-7 col-lg-8">
            <x-link-button :class-name="'secondary float-end'" href="{{ route('sales_team.index') }}">Back To List</x-link-button>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-md-7 col-lg-8">
            <form method="post" action="{{ route('sales_team.update', $salesTeamById->id) }}" class="needs-validation" novalidate>
                {{ csrf_field() }}
                @method('put')
                <div class="row g-3">
                    <div class="col-md-8">
                        @if(count($errors) > 0)
                        <x-validation-error>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </x-validation-error>
                        @endif
                    </div>
                    <div class="col-12">
                        <x-form-label :title="'person_name'">Full Name</x-form-label>
                        <x-text-field name="person_name" :type="'text'" :id="'person_name'" :placeholder="'Full Name'" value="{{ $salesTeamById->person_name }}"></x-text-field>
                        @if($errors->has('person_name'))
                            <x-text-field-error>Please provide a full name</x-text-field-error>
                        @endif
                    </div>

                    <div class="col-12">
                        <x-form-label :title="'email'">Email Address</x-form-label>
                        <x-text-field name="email" :type="'text'" :id="'email'" :placeholder="'Email Address'" value="{{ $salesTeamById->email }}"></x-text-field>
                        @if($errors->has('email'))
                            <x-text-field-error>Please provide a email</x-text-field-error>
                        @endif
                    </div>

                    <div class="col-12">
                        <x-form-label :title="'telephone'">Telephone</x-form-label>
                        <x-text-field name="telephone" :type="'text'" :id="'telephone'" :placeholder="'Telephone'" value="{{ $salesTeamById->telephone }}"></x-text-field>
                        @if($errors->has('telephone'))
                            <x-text-field-error>Please provide a telephone</x-text-field-error>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <x-form-label :title="'joined_date'">Joined Date</x-form-label>
                        <x-date-picker name="joined_date" :id="'joined_date'" value="{{ old('joined_date') }}" value="{{ $salesTeamById->joined_date }}"></x-date-picker>
                        @if($errors->has('joined_date'))
                            <x-text-field-error>Please provide a joined date</x-text-field-error>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <x-form-label :title="'current_route'">Current Routes</x-form-label>
                        <x-selection name="current_route" :placeholder="'Select a current route'" :id="'current_route'" value="{{ $salesTeamById->current_route }}">
                            <option value="">Choose...</option>
                            @if(!empty($currentRoutes))
                                @foreach($currentRoutes as $currentRoute)
                                    <option value="{{ $currentRoute->id }}" {{ $salesTeamById->current_route === $currentRoute->id ? 'selected' : ''}}>{{ $currentRoute->route_name }}</option>
                                @endforeach
                            @endif
                        </x-selection>
                        @if($errors->has('current_routes'))
                            <x-text-field-error>Please provide a current route</x-text-field-error>
                        @endif
                    </div>

                    <div class="col-12">
                        <x-form-label :title="'comments'">Comments</x-form-label>
                        <x-text-area name="comments" :placeholder="'comment...'" :id="'comments'">
                            {{ $salesTeamById->comments }}
                        </x-text-area>
                    </div>
                </div>

                <hr class="my-4">


                <x-secondary-button :class-name="'warning btn-lg w-100'" :type="'submit'">Update sales team details</x-secondary-button>
            </form>
        </div>
    </div>
@stop
