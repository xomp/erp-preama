@extends('layouts.backend')

@section('content')

  <!-- Page Content -->
  <div class="content">
    <!-- All Orders -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">{{ $pipeline }}</h3>
        <div class="block-options">
          <!-- <div class="dropdown">
            <button type="button" class="btn btn-alt-secondary" id="dropdown-ecom-filters" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Фильтр
              <i class="fa fa-angle-down ms-1"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-ecom-filters">
              <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Принято в работу
                <span class="badge bg-black-50 rounded-pill">12</span>
              </a>
              <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Договор отп.
                <span class="badge bg-black-50 rounded-pill">20</span>
              </a>
              <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Отказ
                <span class="badge bg-black-50 rounded-pill">5</span>
              </a>
              <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Новый лид
                <span class="badge bg-black-50 rounded-pill">280</span>
              </a>
              <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                Все
                <span class="badge bg-black-50 rounded-pill">19k</span>
              </a>
            </div>
          </div> -->
        </div>
      </div>
      <!-- Search Form -->
      <!-- <div class="block-content bg-body-dark">
        <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
          <div class="mb-4">
            <input type="text" class="form-control form-control-alt" id="dm-ecom-orders-search" name="dm-ecom-orders-search" placeholder="Поиск по сделкам">
          </div>
        </form>
      </div> -->
      <!-- END Search Form -->
      <div class="block-content">
        <!-- All Orders Table -->
        <div class="table-responsive">
          <table class="table table-borderless table-striped table-vcenter fs-sm">
            <thead>
              <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="d-none d-sm-table-cell text-center">Дата создания</th>
                <th>Статус</th>
                <th class="d-none d-xl-table-cell">Имя</th>
                <th class="d-none d-xl-table-cell text-center">Источник</th>
                <th class="d-none d-sm-table-cell text-end">Контакт</th>
                <th class="text-center">Действия</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019265</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">26.11.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-warning">Принято в работу</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Рустам</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019264</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">08.08.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-danger">Отказ</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Инна</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019263</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">14.02.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-success">Новый лид</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Мадина</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  hh
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019262</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">26.06.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-success">Новый лид</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Фарида</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Сайт
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019261</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">03.03.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-success">Новый лид</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Зафар</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Сайт
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019260</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">27.07.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-danger">Отказ</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Ахмед</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Сайт
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019259</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">21.12.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-success">Новый лид</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Юрий</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Сайт
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019258</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">25.10.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-danger">Отказ</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Мелисса</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019257</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">02.09.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-danger">Отказ</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Рамзия</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  hh
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019256</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">15.01.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-info">Договор отправлен</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Адам</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  hh
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019255</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">22.08.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-success">Новый лид</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Альберт</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019254</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">20.02.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-warning">Принято в работу</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Николай</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019253</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">09.03.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-warning">Принято в работу</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Анна</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019252</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">03.12.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-warning">Принято в работу</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Максим</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019251</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">02.01.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-warning">Принято в работу</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Юлия</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019250</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">17.04.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-danger">Отказ</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Амбер</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019249</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">07.02.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-danger">Отказ</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Наталья</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Сайт
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019248</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">06.05.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-danger">Отказ</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Рашид</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <a class="fw-semibold" href="javascript:void(0)">
                    <strong>019247</strong>
                  </a>
                </td>
                <td class="d-none d-sm-table-cell text-center">04.09.2024</td>
                <td class="fs-base">
                  <span class="badge rounded-pill bg-danger">Отказ</span>
                </td>
                <td class="d-none d-xl-table-cell">
                  <a class="fw-semibold" href="javascript:void(0)">Жасмин</a>
                </td>
                <td class="d-none d-xl-table-cell text-center">
                  Авито
                </td>
                <td class="d-none d-sm-table-cell text-end">
                  <strong>8992423...</strong>
                </td>
                <td class="text-center fs-base">
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                    <i class="fa fa-fw fa-times text-danger"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- END All Orders Table -->

        <!-- Pagination -->
        <nav aria-label="Photos Search Navigation">
          <ul class="pagination justify-content-end mt-2">
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                Назад
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
              <a class="page-link" href="javascript:void(0)">4</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="javascript:void(0)" aria-label="Next">
                Далее
              </a>
            </li>
          </ul>
        </nav>
        <!-- END Pagination -->
      </div>
    </div>
    <!-- END All Orders -->
  </div>
  <!-- END Page Content -->
@endsection
