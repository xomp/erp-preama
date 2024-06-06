@extends('layouts.backend')

@section('js')
<!-- Page JS Plugins -->
<script defer src="/js/plugins/fullcalendar/index.global.min.js"></script>
<script defer src="/js/plugins/fullcalendar/ru.global.min.js"></script>

<!-- Page JS Code -->
<script defer src="/js/be_comp_calendar.js"></script>
@endsection

@section('css')
<style>
	
</style>
@endsection

@section('content')

<!-- Full Calendar (functionality is initialized in js/pages/be_comp_calendar.min.js which was auto compiled from _js/pages/be_comp_calendar.js ) -->
<!-- For more info and examples you can check out https://fullcalendar.io/ -->
<div class="row g-0 flex-xl-grow-1">
	<div class="col-xl-3">
	<div class="content ">
		<!-- Toggle Side Content -->
		<div class="d-xl-none push">
		<!-- Class Toggle, functionality initialized in Helpers.dmToggleClass() -->
		<button type="button" class="btn w-100 btn-alt-primary" data-toggle="class-toggle" data-target="#side-content" data-class="d-none">
			Calendar Options
		</button>
		</div>
		<!-- END Toggle Side Content -->

		<!-- Side Content -->
		<div id="side-content" class="d-none d-xl-block push">
		<!-- Add Event Form -->
		<form class="js-form-add-event push">
			<div class="input-group">
			<input type="text" class="js-add-event form-control border-0" placeholder="Add Event..">
			<span class="input-group-text bg-body-extra-light border-0">
				<i class="fa fa-fw fa-plus-circle"></i>
			</span>
			</div>
		</form>
		<!-- END Add Event Form -->

		<!-- Event List -->
		<ul id="js-events" class="list list-events">
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-info-light text-info">Codename X</div>
			</li>
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-success-light text-success">Weekend Adventure</div>
			</li>
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-info-light text-info">Project Mars</div>
			</li>
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-warning-light text-warning">Meeting</div>
			</li>
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-success-light text-success">Walk the dog</div>
			</li>
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-info-light text-info">AI schedule</div>
			</li>
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-success-light text-success">Cinema</div>
			</li>
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-danger-light text-danger">Project X</div>
			</li>
			<li>
			<div class="js-event p-2 fs-sm fw-medium rounded bg-warning-light text-warning">Skype Meeting</div>
			</li>
		</ul>
		<div class="text-center">
			<em class="fs-sm text-muted">
			<i class="fa fa-arrows-alt"></i> Drag and drop events on the calendar
			</em>
		</div>
		<!-- END Event List -->
		</div>
		<!-- END Side Content -->
	</div>
	</div>
	<div class="col-xl-9 bg-body-dark">
	<div class="content">
		<div class="block block-rounded">
		<div class="block-content block-content-full">
			<!-- Calendar Container -->
			<div id="js-calendar" class="p-xl-4"></div>
		</div>
		</div>
	</div>
	</div>
</div>

@endsection