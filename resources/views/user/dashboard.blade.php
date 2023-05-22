@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    Pesanan Saya
                </h2>
            </div>
        </div>
        <div class="row my-5">
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $checkout)
                    <tr class="align-middle">
                        <td width="18%">
                            <img src="/assets/images/item_bootcamp.png" height="120" alt=" ">
                        </td>
                        <td>
                            <p class=" mb-2 ">
                                <strong>{{$checkout->Product->title}}</strong>
                            </p>
                            <p>
                                {{$checkout->created_at->format('M d, Y')}}
                            </p>
                        </td>
                        <td>
                            <strong>Rp {{$checkout->Product->price}}k</strong>
                        </td>
                        <td>
                            @if ($checkout->is_paid)
                            <strong><span class="text-success ">Payment Succes</span></strong>
                            @else
                                <strong>Waiting for Payment</strong>
                            @endif
                        </td>
                        <td>
                            <a href="https://wa.me/082347980205?text=Hi, Saya ingin bertanya tentang mobil {{$checkout->Product->title}}" class="btn btn-primary">
                                Contact Support
                            </a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <h2>No Data</h2>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection