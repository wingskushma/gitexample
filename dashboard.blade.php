@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
<h3>Welcome to your application dashboard!</h3>
@endsection
@section('footerScripts')
@parent
<script src="dashboard.js"></script>
<span>This is footer from child/dashboard</span>
<x-cancel-button text="Sign Up"/>
@endsection
