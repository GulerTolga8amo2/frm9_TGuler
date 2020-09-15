@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>

        <div class="col-md-8 mt-5">
            <h1>welkom bericht</h1>
            <p>orem ipsum dolor sit amet, consectetur adipiscing elit.
                Aliquam dui nisl, elementum non leo sed, condimentum efficitur libero.
                Aenean sed elit nulla. Duis nec fringilla elit. Morbi dapibus eleifend urna.
                Vivamus ligula nunc, tempor sed ex nec, accumsan scelerisque massa. Duis ac mollis</p>
        </div>
        </div>
    </div>
</div>
@endsection
