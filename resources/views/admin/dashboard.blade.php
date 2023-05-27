@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-8 offset-2">
        <div class="card">
            <div class="card-header">
                My Products
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Register Data</th>
                            <th>Paid Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($checkouts as $checkout)
                            <tr>
                                <td>{{$checkout->User->name}}</td>
                                <td>{{$checkout->Product->title}}</td>
                                <td>{{$checkout->Product->price}}</td>
                                <td>{{$checkout->created_at->format('M d Y')}}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">No Product Registered</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

