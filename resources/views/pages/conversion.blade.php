@extends('layouts.backend')

@section('css')
<style>
  .bars-title {
    padding: 0px 20px 20px;
    margin-top: -10px;
    text-align: right;
  }
</style> 
@endsection

@section('js')
<!-- jQuery (required for Easy Pie Chart + jQuery Sparkline Plugins) -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script defer src="{{ asset('js/plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script defer src="{{ asset('js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('js/plugins/chart.js/chart.umd.js') }}"></script>

<!-- Page JS Helpers (Easy Pie Chart + jQuery Sparkline Plugins) -->
<script defer src="{{ asset('js/conversion.js') }}"></script>
@endsection

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Конверсия</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Preama ERP</li>
            <li class="breadcrumb-item active" aria-current="page">Конверсия</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Charts -->
    <!-- jQuery Sparkline (.js-sparkline class is initialized in Helpers.jqSparkline() -->
    <!-- For more info and examples you can check out http://omnipotent.net/jquery.sparkline/#s-about -->
    <!-- <h2 class="content-heading">Charts</h2> -->
   
    <div class="row">
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
              <i class="far fa-2x fa-user-circle text-success"></i>
            </div>
            <div class="ms-3 text-end">
              <p class="fs-3 fw-medium mb-0">
                178
              </p>
              <p class="text-muted mb-0">
                Новый лид
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
              <i class="far fa-2x fa-user-circle text-warning"></i>
            </div>
            <div class="ms-3 text-end">
              <p class="fs-3 fw-medium mb-0">
                63
              </p>
              <p class="text-muted mb-0">
                Принято в работу
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
              <i class="far fa-2x fa-user-circle text-primary"></i>
            </div>
            <div class="ms-3 text-end">
              <p class="fs-3 fw-medium mb-0">
                22
              </p>
              <p class="text-muted mb-0">
                Договор отправлен
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
              <i class="far fa-2x fa-user-circle text-danger"></i>
            </div>
            <div class="ms-3 text-end">
              <p class="fs-3 fw-medium mb-0">
                47
              </p>
              <p class="text-muted mb-0">
                Отказ
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
   
    <!-- Lines -->
    <div class="row">
      <!-- Bars -->
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
              <!-- Sparkline Container -->
              <span class="js-sparkline" data-type="bar"
              data-points="[7,9,5,2,3,4,8,3]"
              data-height="40px"
              data-bar-color="#82b54b"
              data-bar-width="6"
              data-bar-spacing="3"
              data-tooltip-suffix=""></span>
            </div>
            <div class="ms-3 text-end">
              <p class="fs-3 fw-medium mb-0">
                23%
              </p>
            </div>
          </div>
          <p class="text-muted mb-0 bars-title"> Новый лид </p>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
              <!-- Sparkline Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[68,25,36,62,59,80,75,89]"
                    data-height="40px"
                    data-bar-color="#e69f17"
                    data-bar-width="6"
                    data-bar-spacing="3"
                    data-tooltip-suffix=""></span>
            </div>
            <div class="ms-3 text-end">
              <p class="fs-3 fw-medium mb-0">
                17%
              </p>
            </div>
          </div>
          <p class="text-muted mb-0 bars-title"> Принято в работу </p>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
              <!-- Sparkline Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[340,330,360,340,360,350,370,360]"
                    data-height="40px"
                    data-bar-width="6"
                    data-bar-spacing="3"
                    data-tooltip-suffix=""></span>
            </div>
            <div class="ms-3 text-end">
              <p class="fs-3 fw-medium mb-0">
                12%
              </p>
            </div>
          </div>
          <p class="text-muted mb-0 bars-title"> Договор отправлен </p>
        </a>
      </div>
      <div class="col-md-6 col-xl-3">
        <a class="block block-rounded block-link-pop" href="javascript:void(0)">
          <div class="block-content block-content-full d-flex align-items-center justify-content-between">
            <div>
              <!-- Sparkline Container -->
              <span class="js-sparkline" data-type="bar"
                    data-points="[21,17,19,25,24,25,18,27]"
                    data-height="40px"
                    data-bar-color="#e04f1a"
                    data-bar-width="6"
                    data-bar-spacing="3"
                    data-tooltip-suffix=""></span>
            </div>
            <div class="ms-3 text-end">
              <p class="fs-3 fw-medium mb-0">
                33%
              </p>
            </div>
          </div>
          <p class="text-muted mb-0 bars-title"> Отказ </p>
        </a>
      </div>
      <!-- END Bars -->
    </div>
    <!-- Lines -->

    <!-- Store Growth -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">
          Цели
        </h3>
        <div class="block-options">
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
            <i class="si si-refresh"></i>
          </button>
        </div>
      </div>
      <div class="block-content block-content-full">
        <div class="row">
          <div class="col-md-5 col-xl-4 d-md-flex align-items-md-center">
            <div class="p-md-2 p-lg-3">
              <div class="py-3">
                <div class="fs-1 fw-bold">230</div>
                <div class="fw-semibold">Заявок с сайта</div>
                <!-- <div class="py-3 d-flex align-items-center">
                  <div class="bg-success-light p-2 rounded me-3">
                    <i class="fa fa-fw fa-arrow-up text-success"></i>
                  </div>
                  <p class="mb-0">
                    You have a <span class="fw-semibold text-success">12% customer growth</span> in the last 30 days. This is amazing, keep it up!
                  </p>
                </div> -->
              </div>
              <div class="py-3">
                <div class="fs-1 fw-bold">165</div>
                <div class="fw-semibold">Звонков</div>
                <!-- <div class="py-3 d-flex align-items-center">
                  <div class="bg-success-light p-2 rounded me-3">
                    <i class="fa fa-fw fa-arrow-up text-success"></i>
                  </div>
                  <p class="mb-0">
                    You’ve managed to add <span class="fw-semibold text-success">12% more products</span> in the last 30 days. Store’s portfolio is growing!
                  </p>
                </div> -->
              </div>
            </div>
          </div>
          <div class="col-md-7 col-xl-8 d-md-flex align-items-md-center">
            <div class="p-md-2 p-lg-3 w-100" style="height: 450px;">
              <!-- Bars Chart Container -->
              <!-- Chart.js Chart is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _js/pages/be_pages_dashboard.js -->
              <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
              <canvas id="js-chartjs-analytics-bars"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Store Growth -->

  </div>
  <!-- END Page Content -->

@endsection
