@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <p>This is the dashboard. Only authenticated users can access this page.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
