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
    "Создана" => "21.08.2024 19:30",
    "Наименование" => "кондитер",
    "Наименование от 5" => "кондитеров",
    "Наименование до 5" => "кондитеров",
    "Наименование в чеке" => "кондитер",
  ], [
    "Создана" => "16.10.2023 21:35",
    "Наименование" => "Подсобный рабочий",
    "Наименование от 5" => "Подсобный рабочий",
    "Наименование до 5" => "Подсобный рабочий",
    "Наименование в чеке" => "Подсобный рабочий",
  ], [
    "Создана" => "19.09.2023 19:03",
    "Наименование" => "Посудомойщица",
    "Наименование от 5" => "Посудомойщица",
    "Наименование до 5" => "Посудомойщица",
    "Наименование в чеке" => "Посудомойщица",
  ], [
    "Создана" => "19.09.2023 18:30",
    "Наименование" => "Повар",
    "Наименование от 5" => "Поваров",
    "Наименование до 5" => "Поваров",
    "Наименование в чеке" => "Повар",
  ], [
    "Создана" => "28.08.2023 17:53",
    "Наименование" => "Помощник повара",
    "Наименование от 5" => "Помощник повара",
    "Наименование до 5" => "Помощник повара",
    "Наименование в чеке" => "Помощник повара",
  ], [
    "Создана" => "06.07.2023 20:22",
    "Наименование" => "Упаковщик",
    "Наименование от 5" => "Упаковщиков",
    "Наименование до 5" => "Упаковщиков",
    "Наименование в чеке" => "Упаковщик",
  ], [
    "Создана" => "15.06.2023 21:10",
    "Наименование" => "Горничная",
    "Наименование от 5" => "Горничных",
    "Наименование до 5" => "Горничных",
    "Наименование в чеке" => "Горничная",
  ], [
    "Создана" => "26.05.2023 21:19",
    "Наименование" => "Водитель ричтрака",
    "Наименование от 5" => "Водитель ричтрака",
    "Наименование до 5" => "Водитель ричтрака",
    "Наименование в чеке" => "Услуга водителя ричтрака",
  ], [
    "Создана" => "26.05.2023 21:12",
    "Наименование" => "Водитель погрузчика",
    "Наименование от 5" => "Водителей погрузчиков",
    "Наименование до 5" => "Водителя погрузчика",
    "Наименование в чеке" => "Услуга водителя погрузчика",
  ], [
    "Создана" => "14.04.2023 14:48",
    "Наименование" => "Дворник",
    "Наименование от 5" => "Дворников",
    "Наименование до 5" => "Дворника",
    "Наименование в чеке" => "Услуга по уборки",
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <button type="button" class="btn btn-primary">Добавить профессию</button>
        <div class="block-options">
          <input type="text" class="form-control" placeholder="Поиск">
        </div>
      </div>

      <div class="block-content">
        <!-- All Orders Table -->
        <div class="table-responsive">
          <table class="table table-borderless table-striped table-vcenter fs-sm">
            <thead>
              <tr>
                <th class="d-none d-sm-table-cell">Создана</th>
                <th class="d-none d-sm-table-cell">Наименование</th>
                <th class="d-none d-sm-table-cell">Наименование от 5</th>
                <th class="d-none d-sm-table-cell">Наименование до 5</th>
                <th class="d-none d-sm-table-cell">Наименование в чеке</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rows as $row) 
              <tr>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Создана'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Наименование'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Наименование от 5'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Наименование до 5'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Наименование в чеке'] }}</td>
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
