@extends('templates.template')


@section('main')
    {{-- <button type="button" class="btn btn-primary" onclick="fetchData()">測試</button>
    <a href="{{ route('test.step2') }}">我問號</a> --}}
    {{-- {{ $hasBeen }} --}}
    <form action="{{ route('test.step1Store') }}" method="POST">
        @csrf
        <input type="tel" name="phone" value="{{ $phone }}">
        <input type="text" name="name" value="{{ $name }}">
        <button type="submit">下一步</button>
    </form>
@endsection

@section('js')
    <script>
        function fetchData() {
            const formData = new FormData();
            formData.append('test', 123456);
            formData.append('_token', '{{ csrf_token() }}');
            fetch('/fetch/test', {
                method: 'POST',
                body: formData,
            });
        }
    </script>
@endsection
