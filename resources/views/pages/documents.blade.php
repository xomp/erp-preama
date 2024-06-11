@extends('layouts.backend')

@section('content')
  <!-- Hero -->
  <div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Документы</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Preama ERP</li>
            <li class="breadcrumb-item active" aria-current="page">Документы</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

  <!-- Page Content -->
  <div class="content">
    <!-- Topics -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title"></h3>
        <div class="block-options">
          <button type="button" class="btn-block-option me-2">
            <i class="fa fa-arrow-up-from-bracket me-1"></i> Загрузить документ
          </button>
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
          <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
            <i class="si si-refresh"></i>
          </button>
        </div>
      </div>
      <div class="block-content">
        <!-- Topics -->
        <table class="table table-striped table-borderless table-vcenter">
          <thead>
            <tr class="bg-body-dark">
              <th colspan="2">Название</th>
              <th class="d-none d-md-table-cell text-center" style="width: 100px;">Контакт</th>
              <th class="d-none d-md-table-cell" style="width: 200px;">Дата создания</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center" style="width: 40px;">
                <i class="fa fa-file text-xwork"></i>
              </td>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">ООО "Золотое Яблоко" - договор.docx</a>
                <!-- <div class="fs-sm text-muted mt-1">
                  <a href="javascript:void(0)">Thomas Riley</a> on <span>June 20, 2018</span>
                </div> -->
              </td>
              <td class="d-none d-md-table-cell text-center">
                <a class="fw-semibold" href="javascript:void(0)">Михаил</a>
              </td>
              <td class="d-none d-md-table-cell">
                <span class="fs-sm">by <a href="javascript:void(0)">Елена К.</a><br>on <span>June 21, 2018</span></span>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 40px;">
                <i class="fa fa-file text-xwork"></i>
              </td>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">Счёт на оплату 20.04.2024.pdf</a>
                <!-- <div class="fs-sm text-muted mt-1">
                  <a href="javascript:void(0)">Marie Duncan</a> on <span>June 25, 2018</span>
                </div> -->
              </td>
              <td class="d-none d-md-table-cell text-center">
                <a class="fw-semibold" href="javascript:void(0)">Салтын</a>
              </td>
              <td class="d-none d-md-table-cell">
                <span class="fs-sm">by <a href="javascript:void(0)">Андрей П.</a><br>on <span>June 18, 2018</span></span>
              </td>
            </tr>
            <tr>
              <td class="text-center" style="width: 40px;">
                <i class="fa fa-file text-xwork"></i>
              </td>
              <td>
                <a class="fw-semibold" href="javascript:void(0)">Акт выполненных работ - январь 2024г.xls</a>
                <!-- <div class="fs-sm text-muted mt-1">
                  <a href="javascript:void(0)">Laura Carr</a> on <span>June 15, 2018</span>
                </div> -->
              </td>
              <td class="d-none d-md-table-cell text-center">
                <a class="fw-semibold" href="javascript:void(0)">Алексей</a>
              </td>
              <td class="d-none d-md-table-cell">
                <span class="fs-sm">by <a href="javascript:void(0)">Елена К.</a><br>on <span>June 13, 2018</span></span>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- END Topics -->

        <!-- Pagination -->
        <nav aria-label="Topics navigation">
          <ul class="pagination justify-content-end">
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                <span aria-hidden="true">
                  <i class="fa fa-angle-left"></i>
                </span>
                <span class="visually-hidden">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="javascript:void(0)">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                <span aria-hidden="true">
                  <i class="fa fa-angle-right"></i>
                </span>
                <span class="visually-hidden">Next</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- END Pagination -->
      </div>
    </div>
    <!-- END Topics -->
  </div>
  <!-- END Page Content -->
@endsection
