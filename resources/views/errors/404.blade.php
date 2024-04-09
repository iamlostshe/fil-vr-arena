@extends('layouts.app')
@section('page')
    <div class="c-layout">
        <div class="c-page__meta">
            <div class="c-page__title">
                404
            </div>
            <div class="c-page__text">
                {!! __('errors.not_found') !!}
            </div>
        </div>
    </div>
@endsection
