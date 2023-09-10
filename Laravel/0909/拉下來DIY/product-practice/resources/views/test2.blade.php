@extends('templates.template')


@section('main')

<div>step02</div>
<div>電話：{{ $phone }}</div>
<div>名字：{{ $name }}</div>
<a href="{{ route('test.step1') }}"><button>回上一步</button></a>
@endsection

@section('js')
@endsection