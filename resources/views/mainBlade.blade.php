@extends('bladeLayout')

@section('template_content')
<h1 class=" text-center text-2xl text-indigo-700 text-semibold">{{ $page->title }}</h1>
<section class="bg-slate-300 mt-12 p-6">{!! $content  !!}</section>
@endsection