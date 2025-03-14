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
    "Создан" => "30.08.2023 20:08",
    "Город" => "Москва и Московская область",
    "Телефон" => "7 (913) 750 49-06",
    "ФИО" => "Дмитрий Александрович Бауэр",
    "Роли" => "Полный доступ",
  ], 
  [
    "Создан" => "06.02.2023 21:36",
    "Город" => "Москва и Московская область",
    "Телефон" => "7 (911) 990 16-66",
    "ФИО" => "Маргарита Чарлин Сергеевна Австрийская-Разумовская",
    "Роли" => "Партнёр - руководитель отдела продаж",
  ], 
  [
    "Создан" => "27.01.2023 17:31",
    "Город" => "Москва и Московская область",
    "Телефон" => "7 (916) 029 04-10",
    "ФИО" => "Елена Викторовна Васильева",
    "Роли" => "Партнер - бухгалтерия",
  ], 
  [
    "Создан" => "27.01.2023 17:29",
    "Город" => "Москва и Московская область",
    "Телефон" => "7 (925) 322 31-98",
    "ФИО" => "Маргарита Юрьевна Трофимова",
    "Роли" => "Полный доступ",
  ], 
  [
    "Создан" => "27.01.2023 17:19",
    "Город" => "Москва и Московская область",
    "Телефон" => "7 (960) 352 11-36",
    "ФИО" => "Елена Иванова",
    "Роли" => "Партнер - менеджер по найму",
  ], 
  [
    "Создан" => "07.10.2021 15:12",
    "Город" => "Москва и Московская область",
    "Телефон" => "7 (925) 121 98-51",
    "ФИО" => "Алексей Владимирович Шаповалов",
    "Роли" => "Кастомизация",
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <button type="button" class="btn btn-primary">Добавить оператора</button>
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
                <th class="d-none d-sm-table-cell">Создан</th>
                <th class="d-none d-sm-table-cell">Город</th>
                <th class="d-none d-sm-table-cell">Телефон</th>
                <th class="d-none d-sm-table-cell">ФИО</th>
                <th class="d-none d-sm-table-cell">Роли</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rows as $row) 
              <tr>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Создан'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Город'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Телефон'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['ФИО'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Роли'] }}</td>
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
