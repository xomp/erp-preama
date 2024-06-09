@extends('layouts.backend')


@section('css')
@endsection

@section('js')
<!-- jQuery (required for Easy Pie Chart + jQuery Sparkline plugin) -->
<script src="{{ asset('js/lib/jquery.min.js') }}"></script>

<!-- Page JS Plugins -->
<script defer src="{{ asset('js/plugins/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
<script defer src="{{ asset('js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script defer src="{{ asset('js/plugins/chart.js/chart.umd.js') }}"></script>

<!-- Page JS Code -->
<script defer src="{{ asset('js/sourcers.js') }}"></script>
@endsection

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Источники</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Preama ERP</li>
            <li class="breadcrumb-item active" aria-current="page">Источники</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">

    <!-- Chart.js Charts are initialized in js/pages/be_comp_charts.min.js which was auto compiled from _js/pages/be_comp_charts.js -->
    <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
    <!-- <h2 class="content-heading">Chart.js</h2> -->
    <div class="row">
      <div class="col-xl-6">
        <!-- Lines Chart -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Визиты</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
            </div>
          </div>
          <div class="block-content block-content-full text-center">
            <div class="py-3">
              <!-- Lines Chart Container -->
              <canvas id="js-chartjs-lines" style="height: 340px"></canvas>
            </div>
          </div>
        </div>
        <!-- END Lines Chart -->
      </div>
      <div class="col-xl-6">
        <!-- Pie Chart -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Устройства</h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
            </div>
          </div>
          <div class="block-content block-content-full text-center">
            <div class="py-3">
              <!-- Pie Chart Container -->
              <canvas id="js-chartjs-pie" style="height: 340px"></canvas>
            </div>
          </div>
        </div>
        <!-- END Pie Chart -->
      </div>
    </div>
    <!-- END Chart.js Charts -->


    <!-- Latest Orders + Stats -->
    <div class="row">
      <div class="col-md-12">
        <!--  Latest Orders -->
        <div class="block block-rounded block-mode-loading-refresh">
          <div class="block-header block-header-default">
            <h3 class="block-title">
              Источник трафика
            </h3>
            <div class="block-options">
              <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
              </button>
            </div>
          </div>
          <div class="block-content">
            <table class="table table-striped table-hover table-borderless table-vcenter fs-sm">
              <thead>
                <tr class="text-uppercase">
                  <th>Источник</th>
                  <th class="text-end">Просмотры</th>
                  <th class="text-end">Посетители</th>
                  <th class="text-end">Отказы</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <span class="fw-semibold">Переходы из поисковых систем</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">1205</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">1033</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <span class="fs-sm text-muted">23.01%</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Переходы по рекламе</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">995</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">899</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <span class="fs-sm text-muted">29.01%</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Прямые заходы</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">575</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">567</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <span class="fs-sm text-muted">43.12%</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Переходы по ссылкам на сайтах</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">410</span>
                  </td>
                  <td class="text-end">
                  <span class="fs-sm text-muted">397</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <span class="fs-sm text-muted">19.89%</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Внутренние переходы</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">515</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">466</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <span class="fs-sm text-muted">17.90%</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Переходы из социальных сетей</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">288</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">261</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <span class="fs-sm text-muted">15.40%</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Сайты объявлений</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">102</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">95</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <span class="fs-sm text-muted">9.16%</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span class="fw-semibold">Каталоги</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">56</span>
                  </td>
                  <td class="text-end">
                    <span class="fs-sm text-muted">44</span>
                  </td>
                  <td class="d-none d-sm-table-cell text-end fw-medium">
                    <span class="fs-sm text-muted">10.12%</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- END Latest Orders -->
      </div>
      <!-- <div class="col-md-4 d-flex flex-column">
        <div class="block block-rounded">
          <div class="block-content block-content-full d-flex justify-content-between align-items-center flex-grow-1">
            <div class="me-3">
              <p class="fs-3 fw-bold mb-0">
                35,698
              </p>
              <p class="text-muted mb-0">
                Completed orders
              </p>
            </div>
            <div class="item rounded-circle bg-body">
              <i class="fa fa-check fa-lg text-primary"></i>
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light fs-sm text-center">
            <a class="fw-medium" href="javascript:void(0)">
              View Archive
              <i class="fa fa-arrow-right ms-1 opacity-25"></i>
            </a>
          </div>
        </div>
        <div class="block block-rounded text-center d-flex flex-column flex-grow-1">
          <div class="block-content block-content-full d-flex align-items-center flex-grow-1">
            <div class="w-100">
              <div class="item rounded-3 bg-body mx-auto my-3">
                <i class="fa fa-archive fa-lg text-primary"></i>
              </div>
              <div class="fs-1 fw-bold">75</div>
              <div class="text-muted mb-3">Products out of stock</div>
              <div class="d-inline-block px-3 py-1 rounded-pill fs-sm fw-semibold text-warning bg-warning-light">
                5% of portfolio
              </div>
            </div>
          </div>
          <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
            <a class="fw-medium" href="javascript:void(0)">
              Order supplies
              <i class="fa fa-arrow-right ms-1 opacity-25"></i>
            </a>
          </div>
        </div>
      </div> -->
    </div>
    <!-- END Latest Orders + Stats -->

  </div>
  <!-- END Page Content -->
@endsection
