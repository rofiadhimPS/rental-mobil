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
                            <a href="https://wa.me/082347980205?text=Hi, Saya ingin bertanya tentang mobil {{$checkout->Product->title}}" class="btn btn-primary btn-sm">
                                Contact Support
                            </a>
                            <button type="button" onclick="handleDelete({{ $checkout->id }})" class="btn btn-primary btn-sm" style=" background-color: black;  border: 0;">Batalkan Pesanan</button>
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

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #360363;">
              <h5 class="modal-title fs-4" id="exampleModalLabel" style="color: white;">Batalkan Pesanan?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex justify-content-center">
              <img src="{{ asset('images/Website development.png') }}">
            </div>
            <div class="modal-footer d-flex flex-column">
              <form action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-primary"  style="background-color: black;">Iya, Batalkan</button>
              </form>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            </div>
          </div>
        </div>
      </div>
    
</section>
@section('script')
    <script>
        function handleDelete(id){
            var id = id;
            var url = "{{ route('user.pesanan.destroy', ':id') }}".replace(':id', id);

            $('#deleteModal').modal('show')
            $('#deleteModal form').attr('action', url);
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@endsection