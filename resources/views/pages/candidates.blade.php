@extends('layouts.backend')

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Соискатели</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Preama ERP</li>
            <li class="breadcrumb-item active" aria-current="page">Соискатели</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

@php
$candidates = [
  [
    'name'   => 'Рогов Петр',
    'city'   => 'Домодедово',
    'job'    => 'Грузчик',
    'status' => 'Кандидат',
  ], [
    'name'   => 'Карен Позоян',
    'city'   => 'Москва',
    'job'    => 'Водитель',
    'status' => 'Резерв',
  ], [
    'name'   => 'Татьяна Нечаева',
    'city'   => 'Подольск',
    'job'    => 'Коплектовщик',
    'status' => 'Кандидат',
  ], [
    'name'   => 'Васюк Василий',
    'city'   => 'Пушкино',
    'job'    => 'Грузчик',
    'status' => 'Кандидат',
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content">
    <div class="row">
      @foreach ($candidates as $candidate)
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-center" href="/candidate">
          <div class="block-content block-content-full">
            <img class="img-avatar" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
            <div class="js-rating" data-score="3" style="cursor: pointer;"><i data-alt="1" class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>&nbsp;<i data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!"></i>&nbsp;<i data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!"></i>&nbsp;<i data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i><input name="score" type="hidden" value="3"></div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light">
            <p class="fw-semibold mb-0">{{ $candidate['name'] }}</p>
            <p class="fs-sm fw-medium text-muted mb-0">
              {{ $candidate['city'] }}
            </p>
          </div>
          <div class="block-content block-content-full">
            <div class="row g-sm">
              <div class="col-6">
                <p class="fs-sm fw-medium text-muted mb-0">
                  {{ $candidate['status'] }}
                </p>
              </div>
              <div class="col-6">
                <p class="fs-sm fw-medium text-muted mb-0">
                  {{ $candidate['job'] }}
                </p>
              </div>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
  <!-- END Page Content -->
@endsection
