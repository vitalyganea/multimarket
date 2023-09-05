@php use Illuminate\Support\Facades\Auth; @endphp
@if(Auth::user())
    @include('backend.home.home')
@else
    @include('auth.login')
@endif


