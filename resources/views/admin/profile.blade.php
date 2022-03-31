@extends('admin.layout')
@section('heading')Profile @endsection
@section('profile_css_link')<link rel="stylesheet" href="{{ asset('css/profile.css') }}">@endsection
@section('content')
<div class="home-content">
    <div class="overview-boxes">
        <div class="box">
            <div class="right-side">Change User Name</div>
        </div>
    </div>
    <div class="overview-boxes">
        <div class="box">
            <div class="right-side">Change Password</div>
        </div>
    </div>
</div>

@endsection