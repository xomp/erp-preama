@extends('layouts.backend')

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Пользователи</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Preama ERP</li>
            <li class="breadcrumb-item active" aria-current="page">Пользователи</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <div class="row">

    <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content block-content-full bg-gd-sea">
            <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
          </div>
          <div class="block-content block-content-full">
            <p class="fw-semibold mb-0">Алексей Шаповалов</p>
            <p class="fs-sm fw-medium text-muted mb-0">
              Администратор
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content block-content-full bg-gd-fruit">
            <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
          </div>
          <div class="block-content block-content-full">
            <p class="fw-semibold mb-0">Елена К.</p>
            <p class="fs-sm fw-medium text-muted mb-0">
              Менеджер
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content block-content-full bg-gd-aqua">
            <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
          </div>
          <div class="block-content block-content-full">
            <p class="fw-semibold mb-0">Дмитрий Бауэр</p>
            <p class="fs-sm fw-medium text-muted mb-0">
              Администратор
            </p>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
          <div class="block-content block-content-full bg-dark">
            <img class="img-avatar img-avatar-thumb" src="{{ asset('media/avatars/avatar15.jpg') }}" alt="">
          </div>
          <div class="block-content block-content-full">
            <p class="fw-semibold mb-0">Андрей П.</p>
            <p class="fs-sm fw-medium text-muted mb-0">
              Рекрутер
            </p>
          </div>
        </a>
      </div>

    </div>
  </div>
  <!-- END Page Content -->
@endsection
