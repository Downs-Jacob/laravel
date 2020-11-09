@extends('layouts.app')

@section('content')
    <div class="container">
        <ul>
            @foreach($notifications as $notification)
                <li>
                    @if($notification->type === 'App\Notifications\PaymentRecieved')
                        We Have Recieved a Payment of ${{ $notification->data['amount']/100 }} from You
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
@endsection
