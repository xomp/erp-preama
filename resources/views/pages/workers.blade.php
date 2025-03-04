@extends('layouts.backend')

@section('js')
<!-- Page JS Plugins -->
<!-- <script src="/js/plugins/raty-js/jquery.raty.js"></script> -->

<!-- Page JS Code -->
<!-- <script src="/js/be_comp_rating.min.js"></script> -->

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
    "Дата регистрации" => "17.02.2023 16:20",
    "Партнер" => "ИП Шаповалова О.А.",
    "Оператор" => "Елена Иванова",
    "Город" => "Санкт Петербург",
    "Телефон" => "7 (792) 155 29-05",
    "Имя" => "Артем",
    "Фамилия" => "Федотов",
    "Выполнено" => "0",
    "Отказов" => "0",
    "Штрафов" => "0",
    "Баланс" => "0",
    "Маржа" => "0",
    "ИНН" => "782704069700",
    "Самозанятый" => "Да",
    "Оплата налога" => "Нет",
    "Подключен к платформе" => "Да",
  ], [
    "Дата регистрации" => "17.02.2023 16:47",
    "Партнер" => "ИП Шаповалова О.А.",
    "Оператор" => "Елена Иванова",
    "Город" => "Новосибирск",
    "Телефон" => "7 (791) 306 61-51",
    "Имя" => "Сергей",
    "Фамилия" => "Трифонов",
    "Выполнено" => "0",
    "Отказов" => "0",
    "Штрафов" => "0",
    "Баланс" => "0",
    "Маржа" => "0",
    "ИНН" => "540232630763",
    "Самозанятый" => "Да",
    "Оплата налога" => "Нет",
    "Подключен к платформе" => "Нет",
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">Добавить работника</button>
        <div class="block-options">
          <input type="text" class="form-control" placeholder="Поиск" name="search">
        </div>
      </div>

      <div class="block-content">
        <!-- All Orders Table -->
        <div class="table-responsive">
          <table class="table table-borderless table-striped table-vcenter fs-sm" id="dataTable">
            <thead>
              <tr>
                <!-- <th class="d-none d-sm-table-cell">Дата регистрации</th> -->
                <th class="d-none d-sm-table-cell">Рейтинг</th>
                <th class="d-none d-sm-table-cell">Партнер</th>
                <th class="d-none d-sm-table-cell">Оператор</th>
                <th class="d-none d-sm-table-cell">Город</th>
                <th class="d-none d-sm-table-cell">Телефон</th>
                <th class="d-none d-sm-table-cell">Имя</th>
                <th class="d-none d-sm-table-cell">Фамилия</th>
                <th class="d-none d-sm-table-cell">Выполнено</th>
                <th class="d-none d-sm-table-cell">Отказов</th>
                <th class="d-none d-sm-table-cell">Штрафов</th>
                <th class="d-none d-sm-table-cell">Баланс</th>
                <th class="d-none d-sm-table-cell">Маржа</th>
                <th class="d-none d-sm-table-cell">ИНН</th>
                <th class="d-none d-sm-table-cell">Самозанятый</th>
                <th class="d-none d-sm-table-cell">Оплата налога</th>
                <th class="d-none d-sm-table-cell">Подключен к платформе</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rows as $row) 
              <tr>
                <!-- <td class="d-none d-sm-table-cell text-start">{{ $row['Дата регистрации'] }}</td> -->
                <td class="d-none d-sm-table-cell text-start">
                  <div style="width: 110px;" class="js-rating push" data-cancel="true" data-score="3" style="cursor: pointer;"><i data-alt="1" class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>&nbsp;<i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>&nbsp;<i data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!"></i>&nbsp;<i data-alt="4" class="fa fa-fw fa-star text-warning" title="That’s nice!"></i>&nbsp;<i data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i><input name="score" type="hidden" value="4"></div>
                </td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Партнер'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Оператор'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Город'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Телефон'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Имя'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Фамилия'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Выполнено'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Отказов'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Штрафов'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Баланс'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Маржа'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['ИНН'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Самозанятый'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Оплата налога'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Подключен к платформе'] }}</td>
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
  <div class="modal fade" id="modal-create" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="block block-rounded block-themed block-transparent mb-0">
          <div class="block-header block-header-default">
            <h3 class="block-title">Добавление работника</h3>
          </div>
          <div class="block-content block-content-full">
            <form action="" method="POST" enctype="multipart/form-data" onsubmit="return false;" id="dataForm">
              
              <div class="mb-4">
                <label class="form-label">Источник</label>
                <select class="form-select">
                  <option>Неизвестно</option>
                  <option>Avito.ru</option>
                  <option>Работу.ру</option>
                  <option>SuperJob</option>
                  <option>HH.ru</option>
                  <option>Кадровое агентство</option>
                  <option>Другой сайт</option>
                </select>
              </div>

              <div class="mb-4">
                <label class="form-label">Фамилия</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Имя</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Отчество</label>
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
              <div class="mb-4">
                <label class="form-label">Почта</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">ИНН</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Город</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Гражданство</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Банковская карта</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Номер счёта</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Банк</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Дата рождения</label>
                <input type="date" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Серия паспорта</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Номер паспорта</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Кем выдан</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Код подразделения</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Когда выдан</label>
                <input type="date" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Образование</label>
                <select class="form-select">
                  <option>Среднее</option>
                  <option>Средне-специальное</option>
                  <option>Высшее</option>
                  <option>Неполное высшее</option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Специальность</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Размер одежды</label>
                <input type="text" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label class="form-label">Размер обуви</label>
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
