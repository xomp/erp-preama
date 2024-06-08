@extends('layouts.backend')

@section('js')
<!-- Page JS Plugins -->
<script defer src="{{ asset('js/plugins/chart.js/chart.umd.js') }}"></script>

<!-- Page JS Code -->
<script defer src="{{ asset('js/be_pages_ecom_dashboard.js') }}"></script>
@endsection

@section('content')

  <!-- Page Content -->
  <div class="content">
    <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
      <div>
        <h1 class="h3 mb-1">Главная</h1>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="row items-push">
      <div class="col-sm-6 col-xl-3">
        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
          <div class="block-content block-content-full flex-grow-1">
            <div class="item rounded-3 bg-body mx-auto my-3">
              <i class="fa fa-users fa-lg text-primary"></i>
            </div>
            <div class="fs-1 fw-bold">1255</div>
            <div class="text-muted mb-3">Лидов</div>
            <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-success bg-success-light">
              <i class="fa fa-caret-up me-1"></i>
              19.2%
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
            <a class="fw-medium" href="/deals">
              Все сделки
              <i class="fa fa-arrow-right ms-1 opacity-25"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
          <div class="block-content block-content-full flex-grow-1">
            <div class="item rounded-3 bg-body mx-auto my-3">
              <i class="fa fa-address-book fa-lg text-primary"></i>
            </div>
            <div class="fs-1 fw-bold">204</div>
            <div class="text-muted mb-3">Соискателей</div>
            <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-danger bg-danger-light">
              <i class="fa fa-caret-down me-1"></i>
              2.3%
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
            <a class="fw-medium" href="/candidates">
              Все контакты
              <i class="fa fa-arrow-right ms-1 opacity-25"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
          <div class="block-content block-content-full flex-grow-1">
            <div class="item rounded-3 bg-body mx-auto my-3">
              <i class="fa fa-chart-line fa-lg text-primary"></i>
            </div>
            <div class="fs-1 fw-bold">23.4%</div>
            <div class="text-muted mb-3">Конверсия</div>
            <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-success bg-success-light">
              <i class="fa fa-caret-up me-1"></i>
              7.9%
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
            <a class="fw-medium" href="/conversion">
              Конверсия
              <i class="fa fa-arrow-right ms-1 opacity-25"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-xl-3">
        <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
          <div class="block-content block-content-full">
            <div class="item rounded-3 bg-body mx-auto my-3">
              <i class="fa fa-coins fa-lg text-primary"></i>
            </div>
            <div class="fs-1 fw-bold">1920 ₽</div>
            <div class="text-muted mb-3">Стоимость лида</div>
            <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-danger bg-danger-light">
              <i class="fa fa-caret-down me-1"></i>
              0.3%
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
            <a class="fw-medium" href="/sources">
              Аналитика
              <i class="fa fa-arrow-right ms-1 opacity-25"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Orders Overview -->
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Статистика за неделю</h3>
        <div class="block-options">
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
            <i class="si si-refresh"></i>
          </button>
        </div>
      </div>
      <div class="block-content block-content-full">
        <!-- Chart.js is initialized in js/pages/be_pages_ecom_dashboard.min.js which was auto compiled from _js/pages/be_pages_ecom_dashboard.js) -->
        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
        <canvas id="js-chartjs-overview" style="height: 420px;"></canvas>
      </div>
    </div>
  </div>
  <!-- END Orders Overview -->
  
  <!-- END Page Content -->
@endsection
