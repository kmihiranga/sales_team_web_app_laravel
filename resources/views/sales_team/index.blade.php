@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Sales Team</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <x-link-button :class-name="'secondary float-end'" href="{{ route('sales_team.create') }}">Add New</x-link-button>
                    </div>
                </div>
                <div class="row mt-2">
                    @if(session()->has('message'))
                        <x-success-alert>{{ session()->get('message') }}</x-success-alert>
                    @endif
                </div>
                <div class="row mt-5">
                    <div class="container">
                        <x-sales-team.data-table :sales-teams="$salesTeams"></x-sales-team.data-table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="container">
                    <div class="row">
                        <div class="d-flex">
                            {!! $salesTeams->links() !!}
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection