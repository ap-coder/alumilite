@extends('site.layouts.app')

@section('content')
    <div id="result"></div>
@endsection

@section('headcss') @endsection
@section('headjs') @endsection

@section('footjs')
    <script>
        $( "#result" ).load( "http://codecorp.local/support/mcodes/embed" );
    </script>
@endsection
