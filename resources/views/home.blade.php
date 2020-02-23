@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
          window.addEventListener('keyup', function (event) {
 
        switch (event.keyCode) {
            // case 118: // F7
            // 	$('#barang').focus();
            // 	break;
            case 81: // tombol q
            window.location.href = "/user";
                break;
            case 87: // tombol w
            window.location.href = "/pembelian";
                break;
            case 69: // tombol e
            window.location.href = "/penjualan";
                break;
        }
    }, false);
    </script>
@endsection
