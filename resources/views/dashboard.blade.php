@extends('layout.app')

@section('content')
<h1 class="text-center">Welcome @if(session()->has('name'))<span style="text-transform: capitalize">{{ session()->get('name')}} </span>@else To DashBoard @endif   </h1>

@endsection
