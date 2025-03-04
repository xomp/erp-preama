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
    "Дата регистрации" => "31.07.2024 17:46",
    "Схема работы"     => "Услуги с тарифами",
    "Менеджер"         => "Маргарита Юрьевна Трофимова",
    "НазваниеИмя"      => "ТимПак Про",
    "Баланс"           => "1 000 000 000 руб.",
    "Тип клиента"      => "Юридическое лицо",
    "НДС"              => "Нет",
    "ИНН"              => "9715381569",
    "КПП"              => "0",
  ], [
    "Дата регистрации" => "24.06.2024 19:08",
    "Схема работы"     => "Услуги с тарифами",
    "Менеджер"         => "Маргарита Юрьевна Трофимова",
    "НазваниеИмя"      => "ЛЭЗ",
    "Баланс"           => "975 800 руб.",
    "Тип клиента"      => "Юридическое лицо",
    "НДС"              => "Нет",
    "ИНН"              => "7716743200",
    "КПП"              => "77160100771601001",
  ], [
    "Дата регистрации" => "20.06.2024 18:17",
    "Схема работы"     => "Услуги с тарифами",
    "Менеджер"         => "Маргарита Юрьевна Трофимова",
    "НазваниеИмя"      => "Грантекс",
    "Баланс"           => "999 858 880 руб.",
    "Тип клиента"      => "Юридическое лицо",
    "НДС"              => "Нет",
    "ИНН"              => "9722035104",
    "КПП"              => "77220100772201001",
  ], [
    "Дата регистрации" => "10.06.2024 18:08",
    "Схема работы"     => "Услуги с тарифами",
    "Менеджер"         => "Маргарита Юрьевна Трофимова",
    "НазваниеИмя"      => "ОФИСМАГ",
    "Баланс"           => "1 000 000 руб.",
    "Тип клиента"      => "Юридическое лицо",
    "НДС"              => "Нет",
    "ИНН"              => "3666113066",
    "КПП"              => "36620100366201001",
  ], [
    "Дата регистрации" => "15.05.2024 18:50",
    "Схема работы"     => "Услуги с тарифами",
    "Менеджер"         => "Маргарита Юрьевна Трофимова",
    "НазваниеИмя"      => "Интертрейд",
    "Баланс"           => "1 000 000 000 руб.",
    "Тип клиента"      => "Юридическое лицо",
    "НДС"              => "Нет",
    "ИНН"              => "4029061148",
    "КПП"              => "40290100402901001",
  ], [
    "Дата регистрации" => "18.04.2024 16:00",
    "Схема работы"     => "Услуги с тарифами",
    "Менеджер"         => "Маргарита Юрьевна Трофимова",
    "НазваниеИмя"      => "ДЕТЕКА",
    "Баланс"           => "10 000 000 руб.",
    "Тип клиента"      => "Юридическое лицо",
    "НДС"              => "Нет",
    "ИНН"              => "3664249858",
    "КПП"              => "36640100366401001",
  ], [
    "Дата регистрации" => "09.04.2024 13:37",
    "Схема работы"     => "Услуги с тарифами",
    "Менеджер"         => "Маргарита Юрьевна Трофимова",
    "НазваниеИмя"      => "АвтоС",
    "Баланс"           => "943 300 руб.",
    "Тип клиента"      => "Юридическое лицо",
    "НДС"              => "Нет",
    "ИНН"              => "5022020095",
    "КПП"              => "50220100502201001",
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-customers-create">Добавить клиента</button>
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
                <th class="d-none d-sm-table-cell">Дата регистрации</th>
                <th class="d-none d-sm-table-cell">Схема работы</th>
                <th class="d-none d-sm-table-cell">Менеджер</th>
                <th class="d-none d-sm-table-cell">Название</th>
                <th class="d-none d-sm-table-cell">Баланс</th>
                <th class="d-none d-sm-table-cell">Тип клиента</th>
                <th class="d-none d-sm-table-cell">НДС</th>
                <th class="d-none d-sm-table-cell">ИНН</th>
                <th class="d-none d-sm-table-cell">КПП</th>
                <th class="d-none d-sm-table-cell">Действия</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rows as $row) 
              <tr>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Дата регистрации'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Схема работы'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Менеджер'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['НазваниеИмя'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Баланс'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Тип клиента'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['НДС'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['ИНН'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['КПП'] }}</td>
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
  <div class="modal fade" id="modal-customers-create" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Добавить клиента</h3>
          </div>
          <div class="block-content block-content-full">
            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return false;">
              <div class="mb-4">
                <label class="form-label">Схема работы</label>
                <select class="form-select">
                  <option value="">Услуги с тарифами</option>
                  <option value="">Услуги с комиссией</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Менеджер</label>
                <select class="form-select">
                  <option value="">Маргарита Юрьевна Трофимова</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Тип клиента</label>
                <select class="form-select">
                  <option value="">Юридическое лицо</option>
                  <option value="">Индивидуальный предприниматель</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Название</label>
                <input type="text" class="form-control" placeholder="Название">
              </div>
              <div class="row mb-4">
                <div class="col-3">
                  <label class="form-label">ИНН</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-3">
                  <label class="form-label">ОГРН</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-3">
                  <label class="form-label">КПП</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-3">
                  <label class="form-label">ОКПО</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-4">
                  <label class="form-label">Телефон</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-4">
                  <label class="form-label">Email</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-4">
                  <label class="form-label">Сайт</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label">Юридический адрес</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Почтовый адрес</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="row mb-4">
                <div class="col-4">
                  <label class="form-label">Договор</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-4">
                  <label class="form-label">Номер договора</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col-4">
                  <label class="form-label">Дата заключения</label>
                  <input type="date" class="form-control" placeholder="">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-6">
                  <label class="form-label">Основание для деятельности</label>
                  <select class="form-select">
                    <option value="">Устав</option>
                    <option value="">Генеральная доверенность</option>
                    <option value="">Доверенность</option>
                  </select>
                </div>
                <div class="col-6">
                  <label class="form-label">Руководитель</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
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
