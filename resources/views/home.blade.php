@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        @if (session('info'))
            <div class="alert alert-success" role="alert">
                {{ session('info') }}
            </div>
        @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{  $page['title'] }}</div>
                <div class="card-body">
                    @include( $page['name'] )
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
