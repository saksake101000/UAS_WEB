@extends('layouts.app')

@section('title', '')

@section('contents')
@section('contents')
<div class="row">
    <div class="col-md-12">
        <h2>Dashboard</h2>
        <div class="card">
            <div class="card-header">
                Overview
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card bg-primary mb-3">
                            <div class="card-header">Total Products</div>
                            <div class="card-body text-white">
                                <h5 class="card-title ">{{ $totalProducts }}</h5>
                                <p class="card-text">Number of products available.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning mb-3">
                            <div class="card-header">Total Users</div>
                            <div class="card-body text-white">
                                <h5 class="card-title">{{ $totalUsers }}</h5>
                                <p class="card-text">Number of registered users.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection