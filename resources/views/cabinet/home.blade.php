@extends('layouts.app')

@section('cabinet_nav')
    @include ('cabinet._nav', ['page' => 'home'])
@stop

@section('content')

    @include('cabinet.widgets._car_advert_widget', $countCarAdvertCabinet)

{{--    @dd($countCarAdvertCabinet);--}}
{{--    [--}}
{{--    'carAdvertActivateCount' => $carAdvertActivateCount,--}}
{{--    'carAdvertDeActivateCount' => $carAdvertDeActivateCount--}}
{{--    'carAdvertModerationCount' => $carAdvertDeActivateCount--}}
{{--    ]--}}

@endsection

@section('script_cdn')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
@endsection