@extends('layouts.backend')

@section('content')
  <!-- Hero -->
  <div class="bg-body-light" style="display: none;">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Заявки</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Preama Work</li>
            <li class="breadcrumb-item active" aria-current="page">Заявки</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- END Hero -->

@php
$orders = [
  [
    "Клиент"    => "Центр Красок",
    "Объект"    => "Москва, улица Ивана Франко, 46",
    "Адрес"     => "Москва, улица Ивана Франко, 46",
    "Дней"      => "2",
    "Человек"   => "1",
    "Часов"     => "11",
  ], [
    "Клиент"    => "Концерн Знак",
    "Объект"    => "Концерн Знак",
    "Адрес"     => "Москва, Каширский проезд, д. 23.",
    "Дней"      => "6",
    "Человек"   => "3",
    "Часов"     => "11",
  ], [
    "Клиент"    => "ЭРСТВАК",
    "Объект"    => "Москва, 2-й Иртышский проезд, 4с1",
    "Адрес"     => "Москва, 2-й Иртышский проезд, 4с1",
    "Дней"      => "7",
    "Человек"   => "2",
    "Часов"     => "8",
  ], [
    "Клиент"    => "ЭРСТВАК",
    "Объект"    => "Москва, 2-й Иртышский проезд, 4с1",
    "Адрес"     => "Москва, 2-й Иртышский проезд, 4с1",
    "Дней"      => "7",
    "Человек"   => "2",
    "Часов"     => "8",
  ], [
    "Клиент"    => "ООО «дормакаба Евразия»",
    "Объект"    => "Дормакаба",
    "Адрес"     => "Москва, улица Карьер, 2",
    "Дней"      => "12",
    "Человек"   => "1",
    "Часов"     => "8",
  ], [
    "Клиент"    => "Центр Красок",
    "Объект"    => "Москва, улица Ивана Франко, 46",
    "Адрес"     => "Москва, улица Ивана Франко, 46",
    "Дней"      => "1",
    "Человек"   => "1",
    "Часов"     => "11",
  ], [
    "Клиент"    => "Центр Красок",
    "Объект"    => "Москва, улица Ивана Франко, 46",
    "Адрес"     => "Москва, улица Ивана Франко, 46",
    "Дней"      => "1",
    "Человек"   => "1",
    "Часов"     => "11",
  ], [
    "Клиент"    => "Яблоко",
    "Объект"    => "Золотое Яблоко",
    "Адрес"     => "Москва, Пресненская набережная, 2",
    "Дней"      => "2",
    "Человек"   => "1",
    "Часов"     => "11",
  ], [
    "Клиент"    => "СДОБС ФУДС",
    "Объект"    => "СДОБС ФУДС",
    "Адрес"     => "г Коломна, ул. Колхозная, дом 12а",
    "Дней"      => "0",
    "Человек"   => "1",
    "Часов"     => "11",
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">Добавить заявку</button>
        <div class="block-options">
          <input type="text" class="form-control" placeholder="Поиск" name="search">
        </div>
      </div>

      <div class="block-content">
        <!-- All Orders Table -->
        <div class="table-responsive">
          <table class="table table-borderless table-striped table-vcenter fs-sm">
            <thead>
              <tr>
                <th class="d-none d-xl-table-cell">Клиент</th>
                <th class="d-none d-xl-table-cell">Объект</th>
                <th class="d-none d-xl-table-cell">Адрес</th>
                <th class="d-none d-sm-table-cell text-end">Дней</th>
                <th class="d-none d-sm-table-cell text-end">Человек</th>
                <th class="d-none d-sm-table-cell text-end">Часов</th>
                <th class="d-none d-sm-table-cell text-end">Действия</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order) 
              <tr>
                <td class="d-none d-xl-table-cell text-start">{{ $order['Клиент'] }}</td>
                <td class="d-none d-xl-table-cell text-start">{{ $order['Объект'] }}</td>
                <td class="d-none d-xl-table-cell text-start">{{ $order['Адрес'] }}</td>
                <td class="d-none d-sm-table-cell text-end">{{ $order['Дней'] }}</td>
                <td class="d-none d-sm-table-cell text-end">{{ $order['Человек'] }}</td>
                <td class="d-none d-sm-table-cell text-end">{{ $order['Часов'] }}</td>
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


  <!-- Create Customer Modal -->
  <div class="modal fade" id="modal-create" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Добавление заявки</h3>
          </div>
          <div class="block-content block-content-full">
            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
              
              <div class="mb-4">
                <label class="form-label">ФИО</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Пол</label>
                <select class="form-select">
                  <option>Мужчина</option>
                  <option>Женщина</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Телефон</label>
                <input type="text" class="form-control" placeholder="">
              </div>

            </form>
          </div>
          <div class="block-content block-content-full text-end bg-body">
            <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Отмена</button>
            <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Добавить</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Create Customer Modal -->

@endsection
