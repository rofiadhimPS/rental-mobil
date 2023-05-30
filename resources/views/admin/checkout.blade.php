@extends('components.sidebar')

@section('container')
            <nav class="navbar w-100" style="padding: 2% 0; background-image: linear-gradient(to right, #001743 , #350261); color: white;">
                <div style="margin-left: 5%;">
                    <h1>{{$title}}</h1>
                </div>
            </nav>

            <div class="container">
              <div class="row">
              <div class="col-8 offset-2">
                <div class="card mt-5">
                    <div class="card-header">
                        My Products
                    </div>
                    <div class="card-body">
                        @include('components.alert')
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
                                        <td>{{$checkout->Product->price}}K</td>
                                        <td>{{$checkout->created_at->format('M d Y')}}</td>
                                        <td>
                                          @if ($checkout->is_paid)
                                            <span class="badge bg-success">Paid</span>
                                          @else
                                            <span class="badge bg-warning">Waiting</span>
                                          @endif
                                        </td>
                                        <td>
                                          @if (!$checkout->is_paid)
                                            <form action="{{route('admin.checkout.update', $checkout->id)}}" method="post">
                                              @csrf
                                              <button class="btn btn-primary btn-sm">Set to Paid</button>
                                            </form>
                                          @endif
                                        </td>
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
            </div>
@endsection
