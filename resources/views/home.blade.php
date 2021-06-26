@extends('layouts.layout')
@section('content')

    @include('elements.company_service')

    @include('elements.vision_and_mission')

    @include('elements.highlight_overview')

    @include('elements.blog_carousel', ['data' => $data->blogHightLight])

    @include('elements.review', ['data' => $data->review])

    @include('elements.project_carousel')

    @include('elements.question_ask', ['data' => $data->questionAsk])
@endsection
