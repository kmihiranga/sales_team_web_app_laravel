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
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection