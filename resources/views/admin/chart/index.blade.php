@extends('admin')

@section('title', 'Biểu đồ')
@section('content')
    <div class="container mx-auto">

        <div class="mt-20 bg-white rounded shadow">
            {!! $chart->container() !!}
        </div>

    </div>

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}

@endsection