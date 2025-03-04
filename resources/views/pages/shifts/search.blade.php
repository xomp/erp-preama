@extends('layouts.backend')

@section('content')
  <!-- Hero -->
  <div class="bg-body-light" style="display: none;">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Клиенты</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Preama Work</li>
            <li class="breadcrumb-item active" aria-current="page">Клиенты</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

@php
$rows = [
  [
    "" => "",
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content shifts-search">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <input type="text" class="form-control" placeholder="Поиск">
      </div>

      <div class="block-content" style="min-height: 100vh;">
        <div id="accordion" role="tablist" aria-multiselectable="true" class="">
          
          <div class="block block-rounded mb-1">
            <div class="block-header block-header-default" role="tab" id="accordion2_h1">
              <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2_q1" aria-expanded="true" aria-controls="accordion2_q1">
                <!-- All Orders Table -->
                <div class="table-responsive">
                  <table class="table table-borderless table-vcenter fs-sm">
                    <tbody>
                      <tr>
                        <td class="d-none d-sm-table-cell text-start">05.09.2024</td>
                        <td class="d-none d-sm-table-cell text-start">ООО «дормакаба Евразия»</td>
                        <td class="d-none d-sm-table-cell text-start">Услуги разнорабочего на производстве</td>
                        <td class="d-none d-sm-table-cell text-start">Маргарита Юрьевна Трофимова / +79060500253</td>
                        <td class="d-none d-sm-table-cell text-start">Москва, улица Карьер, 2</td>
                        <td class="d-none d-sm-table-cell text-start">4800.00 \ 3000.00</td>
                        <td class="text-end fs-base" style="display: none;">
                          <div class="dropdown dropleft">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-dropleft-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="nav-main-link-icon fa fa-list"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-dark">
                              <a class="dropdown-item" href="javascript:void(0)">Редактировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Клонировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Удалить</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- END All Orders Table -->
              </a>
            </div>
            <div id="accordion2_q1" class="collapse" role="tabpanel" aria-labelledby="accordion2_h1">
              <div class="block-content">
                <!-- All Orders Table -->
                <div class="table-responsive">
                  <table class="table table-borderless table-vcenter fs-sm table-workers">
                    <thead>
                      <tr>
                        <th class="d-none d-sm-table-cell">Работник</th>
                        <th class="d-none d-sm-table-cell">Рейтинг</th>
                        <th class="d-none d-sm-table-cell">Телефон</th>
                        <th class="d-none d-sm-table-cell text-center">Самозанятый</th>
                        <th class="d-none d-sm-table-cell text-end">Действия</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="d-none d-sm-table-cell text-start">Иванилов Андрей</td>
                        <td class="d-none d-sm-table-cell text-start">
                          <div class="js-rating" data-score="3" style="cursor: pointer;"><i data-alt="1" class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>&nbsp;<i data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!"></i>&nbsp;<i data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!"></i>&nbsp;<i data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i><input name="score" type="hidden" value="3"></div>
                        </td>
                        <td class="d-none d-sm-table-cell text-start">+7 (916) 857 01-16</td>
                        <td class="d-none d-sm-table-cell text-center"><i class="si si-check text-success"></i></td>
                        <td class="text-end fs-base">
                          <div class="dropdown dropleft">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-dropleft-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="nav-main-link-icon fa fa-list"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-dark">
                              <a class="dropdown-item" href="javascript:void(0)">Редактировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Клонировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Удалить</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell text-start">Псарев Игорь</td>
                        <td class="d-none d-sm-table-cell text-start">
                          <div class="js-rating" data-score="3" style="cursor: pointer;"><i data-alt="1" class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>&nbsp;<i data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!"></i>&nbsp;<i data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!"></i>&nbsp;<i data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i><input name="score" type="hidden" value="3"></div>
                        </td>
                        <td class="d-none d-sm-table-cell text-start">+7 (913) 543 22-03</td>
                        <td class="d-none d-sm-table-cell text-center"><i class="si si-close text-danger"></i></td>
                        <td class="text-end fs-base">
                          <div class="dropdown dropleft">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-dropleft-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="nav-main-link-icon fa fa-list"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-dark">
                              <a class="dropdown-item" href="javascript:void(0)">Редактировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Клонировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Удалить</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- END All Orders Table -->
              </div>
            </div>
          </div>

          <div class="block block-rounded mb-1">
            <div class="block-header block-header-default" role="tab" id="accordion2_h2">
              <a class="fw-semibold" data-bs-toggle="collapse" data-bs-parent="#accordion2" href="#accordion2_q2" aria-expanded="true" aria-controls="accordion2_q2">
                <!-- All Orders Table -->
                <div class="table-responsive">
                  <table class="table table-borderless table-vcenter fs-sm">
                    <tbody>
                      <tr>
                        <td class="d-none d-sm-table-cell text-start">05.09.2024</td>
                        <td class="d-none d-sm-table-cell text-start">Центр Красок</td>
                        <td class="d-none d-sm-table-cell text-start">Услуга комплектовщика</td>
                        <td class="d-none d-sm-table-cell text-start">Маргарита Юрьевна Трофимова / +79060500253</td>
                        <td class="d-none d-sm-table-cell text-start">Москва, улица Ивана Франко, 46</td>
                        <td class="d-none d-sm-table-cell text-start">4950.00 \ 3500.00</td>
                        <td class="text-end fs-base" style="display: none;">
                          <div class="dropdown dropleft">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-dropleft-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="nav-main-link-icon fa fa-list"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-dark">
                              <a class="dropdown-item" href="javascript:void(0)">Редактировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Клонировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Удалить</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- END All Orders Table -->
              </a>
            </div>
            <div id="accordion2_q2" class="collapse" role="tabpanel" aria-labelledby="accordion2_h2">
              <div class="block-content">
                <!-- All Orders Table -->
                <div class="table-responsive">
                  <table class="table table-borderless table-vcenter fs-sm table-workers">
                    <thead>
                      <tr>
                        <th class="d-none d-sm-table-cell">Работник</th>
                        <th class="d-none d-sm-table-cell">Рейтинг</th>
                        <th class="d-none d-sm-table-cell">Телефон</th>
                        <th class="d-none d-sm-table-cell text-center">Самозанятый</th>
                        <th class="d-none d-sm-table-cell text-end">Действия</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="d-none d-sm-table-cell text-start">Иванилов Андрей</td>
                        <td class="d-none d-sm-table-cell text-start">
                          <div class="js-rating" data-score="3" style="cursor: pointer;"><i data-alt="1" class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>&nbsp;<i data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!"></i>&nbsp;<i data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!"></i>&nbsp;<i data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i><input name="score" type="hidden" value="3"></div>
                        </td>
                        <td class="d-none d-sm-table-cell text-start">+7 (916) 857 01-16</td>
                        <td class="d-none d-sm-table-cell text-center"><i class="si si-check text-success"></i></td>
                        <td class="text-end fs-base">
                          <div class="dropdown dropleft">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-dropleft-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="nav-main-link-icon fa fa-list"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-dark">
                              <a class="dropdown-item" href="javascript:void(0)">Редактировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Клонировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Удалить</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="d-none d-sm-table-cell text-start">Псарев Игорь</td>
                        <td class="d-none d-sm-table-cell text-start">
                          <div class="js-rating" data-score="3" style="cursor: pointer;"><i data-alt="1" class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>&nbsp;<i data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!"></i>&nbsp;<i data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!"></i>&nbsp;<i data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i><input name="score" type="hidden" value="3"></div>
                        </td>
                        <td class="d-none d-sm-table-cell text-start">+7 (913) 543 22-03</td>
                        <td class="d-none d-sm-table-cell text-center"><i class="si si-close text-danger"></i></td>
                        <td class="text-end fs-base">
                          <div class="dropdown dropleft">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-dropleft-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="nav-main-link-icon fa fa-list"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-dark">
                              <a class="dropdown-item" href="javascript:void(0)">Редактировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Клонировать</a>
                              <a class="dropdown-item" href="javascript:void(0)">Удалить</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- END All Orders Table -->
              </div>
            </div>
          </div>
          
        </div>      
      </div>
      
      <div class="block-content" style="display:none">
        <!-- All Orders Table -->
        <div class="table-responsive">
          <table class="table table-borderless table-striped table-vcenter fs-sm">
            <thead>
              <tr>
                <th class="d-none d-sm-table-cell"></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rows as $row) 
              <tr>
                <td class="d-none d-sm-table-cell text-start">{{ $row[''] }}</td>
                <td class="text-end fs-base">

                  <div class="dropdown dropleft">
                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" id="dropdown-dropleft-dark" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="nav-main-link-icon fa fa-list"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdown-dropleft-dark">
                      <a class="dropdown-item" href="javascript:void(0)">Редактировать</a>
                      <a class="dropdown-item" href="javascript:void(0)">Клонировать</a>
                      <a class="dropdown-item" href="javascript:void(0)">Удалить</a>
                    </div>
                  </div>

                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- END All Orders Table -->

        <!-- Pagination -->
        <nav aria-label="Photos Search Navigation">
          <ul class="pagination justify-content-end mt-2">
            <li class="page-item"><a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">←</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">→</a></li>
          </ul>
        </nav>
        <!-- END Pagination -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->
@endsection
