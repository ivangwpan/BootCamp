@extends('Templates.template')

@section('main')
<p>
    歡迎，{{ Auth::user()->name }}
</p>    
@endsection