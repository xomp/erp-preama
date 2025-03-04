<!-- Side Navigation -->
<div class="content-side content-side-full">
	<ul class="nav-main">
	<li class="nav-main-item">
		<a class="nav-main-link {{ request()->is('dashboard') ? 'active' : '' }}" href="/dashboard">
		<i class="nav-main-link-icon fa fa-location-arrow"></i>
		<span class="nav-main-link-name">Главная</span>
		</a>
	</li>

	<li class="nav-main-item">
		<a class="nav-main-link {{ request()->is('orders') ? 'active' : '' }}" href="/orders">
		<i class="nav-main-link-icon fa fa-folder-plus"></i>
		<span class="nav-main-link-name">Заявки</span>
		</a>
	</li>
	
	<li class="nav-main-item {{ request()->route()->getName() == 'shifts' ? 'open' : '' }}">
		<a class="nav-main-link nav-main-link-submenu {{ request()->route()->getName() == 'shifts' ? ' active' : '' }}" data-toggle="submenu" href="/deals">
		<i class="nav-main-link-icon fa fa-check-to-slot"></i>
		<span class="nav-main-link-name">Смены</span>
		</a>
		<ul class="nav-main-submenu">
			<li class="nav-main-item">
				<a class="nav-main-link {{ request()->is('shifts/search') ? 'active' : '' }}" href="/shifts/search">
					<span class="nav-main-link-name">Сбор откликов</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">В работе</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Согласование времени</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">В оплате</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Архив</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Отмененные</span>
				</a>
			</li>
		</ul>
	</li>
	
	<li class="nav-main-item {{ request()->route()->getName() == 'customers' ? 'open' : '' }}">
		<a class="nav-main-link nav-main-link-submenu {{ request()->route()->getName() == 'customers' ? 'active' : '' }}" data-toggle="submenu" href="/deals">
		<i class="nav-main-link-icon fa fa-user-check"></i>
		<span class="nav-main-link-name">Клиенты</span>
		</a>
		<ul class="nav-main-submenu">
			<li class="nav-main-item">
				<a class="nav-main-link {{ request()->is('customers') ? 'active' : '' }}" href="/customers">
					<span class="nav-main-link-name">База клиентов</span>
				</a>
				<a class="nav-main-link {{ request()->is('objects') ? 'active' : '' }}" href="/objects">
					<span class="nav-main-link-name">Объекты</span>
				</a>
				<a class="nav-main-link {{ request()->is('customers-people') ? 'active' : '' }}" href="/customers-people">
					<span class="nav-main-link-name">Контакты</span>
				</a>
				<a class="nav-main-link {{ request()->is('invoices') ? 'active' : '' }}" href="/invoices">
					<span class="nav-main-link-name">Выставление счетов</span>
				</a>
			</li>
		</ul>
	</li>
	
	<li class="nav-main-item {{ request()->route()->getName() == 'workers' ? 'open' : '' }}">
		<a class="nav-main-link nav-main-link-submenu {{ request()->route()->getName() == 'workers' ? 'active' : '' }}" data-toggle="submenu" href="/deals">
		<i class="nav-main-link-icon fa fa-address-card"></i>
		<span class="nav-main-link-name">Работники</span>
		</a>
		<ul class="nav-main-submenu">
			<li class="nav-main-item">
				<a class="nav-main-link {{ request()->is('workers') ? 'active' : '' }}" href="/workers">
					<span class="nav-main-link-name">База работников</span>
				</a>
				<a class="nav-main-link {{ request()->is('verifications') ? 'active' : '' }}" href="/verifications">
					<span class="nav-main-link-name">Верификация</span>
				</a>
				<a class="nav-main-link {{ request()->is('tags') ? 'active' : '' }}" href="/tags">
					<span class="nav-main-link-name">Теги</span>
				</a>
				<a class="nav-main-link {{ request()->is('professions') ? 'active' : '' }}" href="/professions">
					<span class="nav-main-link-name">Профессии</span>
				</a>
				<a class="nav-main-link {{ request()->is('tax-cabinet') ? 'active' : '' }}" href="/tax-cabinet">
					<span class="nav-main-link-name">Налоги</span>
				</a>
			</li>
		</ul>
	</li>
	
	<li class="nav-main-item {{ request()->route()->getName() == 'operators' ? 'open' : '' }}">
		<a class="nav-main-link nav-main-link-submenu {{ request()->route()->getName() == 'operators' ? 'active' : '' }}" data-toggle="submenu" href="/deals">
		<i class="nav-main-link-icon fa fa-users"></i>
		<span class="nav-main-link-name">Пользователи</span>
		</a>
		<ul class="nav-main-submenu">
			<li class="nav-main-item">
				<a class="nav-main-link {{ request()->is('customer-operators') ? 'active' : '' }}" href="/customer-operators">
					<span class="nav-main-link-name">Операторы клиентов</span>
				</a>
				<a class="nav-main-link {{ request()->is('operators') ? 'active' : '' }}" href="/operators">
					<span class="nav-main-link-name">Операторы партнеров</span>
				</a>
			</li>
		</ul>
	</li>
	
	<li class="nav-main-item">
		<a class="nav-main-link nav-main-link-submenu{{ request()->is('deals') ? ' active_1' : '' }}" data-toggle="submenu" href="/deals">
		<i class="nav-main-link-icon fa fa-users-rectangle"></i>
		<span class="nav-main-link-name">Рекрутинг</span>
		</a>
		<ul class="nav-main-submenu">
			<li class="nav-main-item">
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Вакансии</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Все</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Новые регистрации</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">В обработке</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Стали самозанятыми</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Готовы к работе</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Действущие</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Отказ</span>
				</a>
			</li>
		</ul>
	</li>

	<li class="nav-main-item">
		<a class="nav-main-link {{ request()->is('dashboard') ? 'active_1' : '' }}" href="/dashboard">
		<i class="nav-main-link-icon fa fa-book"></i>
		<span class="nav-main-link-name">Выгрузки</span>
		</a>
	</li>

	<li class="nav-main-item">
		<a class="nav-main-link {{ request()->is('dashboard') ? 'active_1' : '' }}" href="/dashboard">
		<i class="nav-main-link-icon fa fa-cogs"></i>
		<span class="nav-main-link-name">Интеграции</span>
		</a>
	</li>
	
	<li class="nav-main-item">
		<a class="nav-main-link nav-main-link-submenu{{ request()->is('deals') ? ' active_1' : '' }}" data-toggle="submenu" href="/deals">
		<i class="nav-main-link-icon fa fa-folder-tree"></i>
		<span class="nav-main-link-name">Документы</span>
		</a>
		<ul class="nav-main-submenu">
			<li class="nav-main-item">
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Договоры с клиентами</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Договоры с работниками</span>
				</a>
				<a class="nav-main-link" href="/deals">
					<span class="nav-main-link-name">Акты самозанятых</span>
				</a>
			</li>
		</ul>
	</li>
	

	{{--
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
	--}}
	</ul>
</div>
<!-- END Side Navigation -->