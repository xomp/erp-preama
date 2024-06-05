<!-- Header -->
<header id="page-header">
	<!-- Header Content -->
	<div class="content-header">
	<!-- Left Section -->
	<div class="space-x-1">
		<!-- Toggle Sidebar -->
		<!-- Layout API, functionality initialized in Template._uiApiLayout()-->
		<button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
		<i class="fa fa-fw fa-bars"></i>
		</button>
		<!-- END Toggle Sidebar -->

		<!-- Open Search Section -->
		<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
		<button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="header_search_on">
		<i class="fa fa-fw opacity-50 fa-search"></i> <span class="ms-1 d-none d-sm-inline-block">Поиск</span>
		</button>
		<!-- END Open Search Section -->
	</div>
	<!-- END Left Section -->

	<!-- Right Section -->
	<div class="space-x-1">
		<!-- User Dropdown -->
		<div class="dropdown d-inline-block">
		<button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-fw fa-user d-sm-none"></i>
			<span class="d-none d-sm-inline-block">Профиль</span>
			<i class="fa fa-fw fa-angle-down opacity-50 ms-1 d-none d-sm-inline-block"></i>
		</button>
		<div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
			<div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
			Дмитрий Бауэр
			</div>
			<div class="p-2">
			<a class="dropdown-item" href="javascript:void(0)">
				<i class="far fa-fw fa-user me-1"></i> Профиль
			</a>
			<div role="separator" class="dropdown-divider"></div>
			<a class="dropdown-item" href="javascript:void(0)">
				<i class="far fa-fw fa-building me-1"></i> Настройки
			</a>

			<div role="separator" class="dropdown-divider"></div>
			<a class="dropdown-item" href="javascript:void(0)">
				<i class="far fa-fw fa-arrow-alt-circle-left me-1"></i> Выйти
			</a>
			</div>
		</div>
		</div>
		<!-- END User Dropdown -->

	</div>
	<!-- END Right Section -->
	</div>
	<!-- END Header Content -->

	<!-- Header Search -->
	<div id="page-header-search" class="overlay-header bg-header-dark">
	<div class="content-header">
		<form class="w-100" action="/dashboard" method="POST">
		@csrf
		<div class="input-group">
			<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
			<button type="button" class="btn btn-alt-primary" data-toggle="layout" data-action="header_search_off">
			<i class="fa fa-fw fa-times-circle"></i>
			</button>
			<input type="text" class="form-control border-0" placeholder="Что ищем?" id="page-header-search-input" name="page-header-search-input">
		</div>
		</form>
	</div>
	</div>
	<!-- END Header Search -->

	<!-- Header Loader -->
	<!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
	<div id="page-header-loader" class="overlay-header bg-header-dark">
	<div class="bg-white-10">
		<div class="content-header">
		<div class="w-100 text-center">
			<i class="fa fa-fw fa-sun fa-spin text-white"></i>
		</div>
		</div>
	</div>
	</div>
	<!-- END Header Loader -->
</header>
<!-- END Header -->