@extends('layouts.backend')

@section('js')
<script src="{{ asset('js/addTableRow.js') }}"></script>
<script>
  document.addEventListener("DOMContentLoaded", function(event) {
    document.getElementById('addRowBtn').addEventListener('click', () => {
      addTableRowFromForm('form', 'table');
    });
  });
</script>
@endsection

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
    "Название"           => "ТимПак Про",
    "Город"              => "Воронеж",
    "Направления"        => "",
    "Адрес"              => "Воронежская область, Рамонский район, село Айдарово, Первая промышленная улица, 1/9",
  ], [
    "Название"           => "ЛЭЗ",
    "Город"              => "Москва",
    "Направления"        => "",
    "Адрес"              => "Московская область, Красногорск, квартал Коммунальный, 2",
  ], [
    "Название"           => "Грантекс",
    "Город"              => "Самара",
    "Направления"        => "",
    "Адрес"              => "Самарская область, Тольятти, Новозаводская улица, 8/156",
  ], [
    "Название"           => "ОФИСМАГ",
    "Город"              => "Москва",
    "Направления"        => "",
    "Адрес"              => "Москва, Мироновская улица, 33",
  ], [
    "Название"           => "Интертрейд",
    "Город"              => "Москва",
    "Направления"        => "",
    "Адрес"              => "Московская область, Богородский городской округ, Ногинск, Бетонная улица, 1",
  ], [
    "Название"           => "ДЕТЕКА",
    "Город"              => "Москва",
    "Направления"        => "",
    "Адрес"              => "Московская область, городской округ Мытищи, посёлок Птицефабрики, Фабричная улица, вл6с8",
  ], [
    "Название"           => "АвтоС",
    "Город"              => "Воронеж",
    "Направления"        => "",
    "Адрес"              => "Воронежская область, Рамонский район, село Айдарово, Первая промышленная улица, 1/9",
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-customers-create">Добавить объект</button>
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
                <th class="d-none d-sm-table-cell">Название</th>
                <th class="d-none d-sm-table-cell">Город</th>
                <th class="d-none d-sm-table-cell">Направления</th>
                <th class="d-none d-sm-table-cell">Адрес</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rows as $row) 
              <tr>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Название'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Город'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Направления'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Адрес'] }}</td>
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
        <!-- <nav aria-label="Photos Search Navigation">
          <ul class="pagination justify-content-end mt-2">
            <li class="page-item"><a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">←</a></li>
            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
            <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">→</a></li>
          </ul>
        </nav> -->
        <!-- END Pagination -->
      </div>
    </div>
  </div>
  <!-- END Page Content -->

  <!-- Create Customer Modal -->
  <div class="modal fade" id="modal-customers-create" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Добавление объекта</h3>
          </div>
          <div class="block-content block-content-full">
            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
              
              <div class="mb-4">
                <label class="form-label">Клиент</label>
                <select class="form-select">
                  <option>ТимПак Про</option>
                  <option>ЛЭЗ</option>
                  <option>Грантекс</option>
                  <option>ОФИСМАГ</option>
                  <option>Интертрейд</option>
                  <option>ДЕТЕКА</option>
                  <option>АвтоС</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Город</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Адрес</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Название объекта</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">ФИО контактного лица</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Телефон контактного лица</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Должность контактного лица</label>
                <input type="text" class="form-control" placeholder="">
              </div>

            </form>
          </div>
          <div class="block-content block-content-full text-end bg-body">
            <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-dismiss="modal">Отмена</button>
            <button type="button" id="addRowBtn" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Добавить</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Create Customer Modal -->
@endsection
