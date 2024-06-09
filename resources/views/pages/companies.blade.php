@extends('layouts.backend')

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Компании</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Preama ERP</li>
            <li class="breadcrumb-item active" aria-current="page">Компании</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">

    <div class="row items-push">
      <div class="col-md-6 col-xl-4">
        <!-- Alternative Project #1 -->
        <div class="block block-rounded h-100 mb-0">
          <div class="block-content bg-gd-primary py-6 text-center" style="background: linear-gradient(135deg, #4fbbee, #a2d28b) !important">
            <h3 class="fs-4 fw-bold mb-1">
              <a class="text-white link-fx" href="javascript:void(0)">Биохимпласт</a>
            </h3>
            <h4 class="fs-6 text-white-75 mb-0">Москва</h4>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <div class="row g-sm">
              <div class="col-6">
                <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-user-plus me-1 text-muted"></i> Сотрудники
                </a>
              </div>
              <div class="col-6">
                <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-eye me-1 text-muted"></i> Обзор
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Alternative Project #1 -->
      </div>
      <div class="col-md-6 col-xl-4">
        <!-- Alternative Project #2 -->
        <div class="block block-rounded h-100 mb-0">
          <div class="block-content bg-gd-dusk py-6 text-center" style="background: linear-gradient(135deg, #dbfe01, #99ae18) !important">
            <h3 class="fs-4 fw-bold mb-1">
              <a class="text-white link-fx" href="javascript:void(0)">Золотое Яблоко</a>
            </h3>
            <h4 class="fs-6 text-white-75 mb-0">Новосибирск</h4>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <div class="row g-sm">
              <div class="col-6">
                <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-user-plus me-1 text-muted"></i> Сотрудники
                </a>
              </div>
              <div class="col-6">
                <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-eye me-1 text-muted"></i> Обзор
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Alternative Project #2 -->
      </div>
      <div class="col-xl-4">
        <!-- Alternative Project #3 -->
        <div class="block block-rounded h-100 mb-0">
          <div class="block-content bg-gd-lake py-6 text-center" style="background: linear-gradient(135deg, #db1b22, #8f1216) !important">
            <h3 class="fs-4 fw-bold mb-1">
              <a class="text-white link-fx" href="javascript:void(0)">Фаворит</a>
            </h3>
            <h4 class="fs-6 text-white-75 mb-0">Москва</h4>
          </div>
          <div class="block-content block-content-full bg-body-light">
            <div class="row g-sm">
              <div class="col-6">
                <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-user-plus me-1 text-muted"></i> Сотрудники
                </a>
              </div>
              <div class="col-6">
                <a class="btn btn-sm w-100 btn-alt-secondary" href="javascript:void(0)">
                  <i class="fa fa-eye me-1 text-muted"></i> Обзор
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Alternative Project #3 -->
      </div>
    </div>

  </div>
  <!-- END Page Content -->
@endsection
