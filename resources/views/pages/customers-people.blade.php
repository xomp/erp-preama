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
    "Телефон"  => "7 (906) 050-02-53",
    "Имя"      => "Маргарита",
    "Отчество" => "Юрьевна",
    "Фамилия"  => "Трофимова",
  ], [
    "Телефон"  => "7 (905) 050-02-53",
    "Имя"      => "Анна",
    "Отчество" => "Ивановна",
    "Фамилия"  => "Кожевникова",
  ], [
    "Телефон"  => "7 (985) 538-24-25",
    "Имя"      => "Елена",
    "Отчество" => "Борисовна",
    "Фамилия"  => "Белова",
  ], [
    "Телефон"  => "7 (958) 538-24-25",
    "Имя"      => "Игорь",
    "Отчество" => "Петрович",
    "Фамилия"  => "Иванова",
  ], [
    "Телефон"  => "7 (995) 501-22-92",
    "Имя"      => "Евгений",
    "Отчество" => "Викторович",
    "Фамилия"  => "Самойлов",
  ], [
    "Телефон"  => "7 (903) 103-62-24",
    "Имя"      => "Алена",
    "Отчество" => "Васильевна",
    "Фамилия"  => "Фоменко",
  ], 
];
@endphp

  <!-- Page Content -->
  <div class="content">
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <button type="button" class="btn btn-primary">Добавить контакт</button>
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
                <th class="d-none d-sm-table-cell">Телефон</th>
                <th class="d-none d-sm-table-cell">Имя</th>
                <th class="d-none d-sm-table-cell">Отчество</th>
                <th class="d-none d-sm-table-cell">Фамилия</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($rows as $row) 
              <tr>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Телефон'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Имя'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Отчество'] }}</td>
                <td class="d-none d-sm-table-cell text-start">{{ $row['Фамилия'] }}</td>
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
