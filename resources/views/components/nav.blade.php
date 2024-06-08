<!-- Side Navigation -->
<div class="content-side content-side-full">
	<ul class="nav-main">
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
		<i class="nav-main-link-icon fa fa-location-arrow"></i>
		<span class="nav-main-link-name">Главная</span>
		</a>
	</li>

	<li class="nav-main-heading">Менеджер</li>
	<li class="nav-main-item">
		<a class="nav-main-link nav-main-link-submenu{{ request()->is('deals') ? ' active' : '' }}" data-toggle="submenu" href="/deals">
		<i class="nav-main-link-icon fa fa-display"></i>
		<span class="nav-main-link-name">Сделки</span>
		</a>
		<ul class="nav-main-submenu">
			<li class="nav-main-item">
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Преама</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Константа</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Все сделки</span>
				</a>
			</li>
		</ul>
	</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('sources') ? ' active' : '' }}" href="/sources">
		<i class="nav-main-link-icon fa fa-sitemap"></i>
		<span class="nav-main-link-name">Источники</span>
		</a>
	</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('conversion') ? ' active' : '' }}" href="/conversion">
		<i class="nav-main-link-icon fa fa-chart-simple"></i>
		<span class="nav-main-link-name">Конверсия</span>
		</a>
	</li>
	
	<li class="nav-main-heading">Рекрутер</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('candidates') ? ' active' : '' }}" href="/candidates">
			<i class="nav-main-link-icon fa fa-address-card"></i>
			<span class="nav-main-link-name">Соискатели</span>
		</a>
	</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('companies') ? ' active' : '' }}" href="/companies">
			<i class="nav-main-link-icon fa fa-rectangle-list"></i>
			<span class="nav-main-link-name">Компании</span>
		</a>
	</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('calendar') ? ' active' : '' }}" href="/calendar">
			<i class="nav-main-link-icon fa fa-calendar-days"></i>
			<span class="nav-main-link-name">Календарь</span>
		</a>
	</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('documents') ? ' active' : '' }}" href="/documents">
			<i class="nav-main-link-icon fa fa-file-lines"></i>
			<span class="nav-main-link-name">Документы</span>
		</a>
	</li>
	
	<li class="nav-main-heading">Другое</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('users') ? ' active' : '' }}" href="/users">
			<i class="nav-main-link-icon fa fa-users"></i>
			<span class="nav-main-link-name">Пользователи</span>
		</a>
	</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('integrations') ? ' active' : '' }}" href="/integrations">
			<i class="nav-main-link-icon fa fa-bolt"></i>
			<span class="nav-main-link-name">Интеграции</span>
		</a>
	</li>
	<li class="nav-main-item">
		<a class="nav-main-link{{ request()->is('settings') ? ' active' : '' }}" href="/settings">
			<i class="nav-main-link-icon fa fa-gear"></i>
			<span class="nav-main-link-name">Настройки</span>
		</a>
	</li>
	
	<li class="nav-main-heading">More</li>
	<li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
		<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
		<i class="nav-main-link-icon fa fa-lightbulb"></i>
		<span class="nav-main-link-name">Examples</span>
		</a>
		<ul class="nav-main-submenu">
		<li class="nav-main-item">
			<a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
			<span class="nav-main-link-name">DataTables</span>
			</a>
		</li>
		<li class="nav-main-item">
			<a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}" href="/pages/slick">
			<span class="nav-main-link-name">Slick Slider</span>
			</a>
		</li>
		<li class="nav-main-item">
			<a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
			<span class="nav-main-link-name">Blank</span>
			</a>
		</li>
		</ul>
	</li>
	<li class="nav-main-item">
		<a class="nav-main-link" href="/">
		<i class="nav-main-link-icon fa fa-globe"></i>
		<span class="nav-main-link-name">Landing</span>
		</a>
	</li>
	</ul>
</div>
<!-- END Side Navigation -->