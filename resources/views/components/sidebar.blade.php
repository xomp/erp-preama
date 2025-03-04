{{--
<!-- Sidebar -->
<!--
	Sidebar Mini Mode - Display Helper classes

	Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
	Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
		If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

	Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
	Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
	Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
-->
--}}

<nav id="sidebar" aria-label="Main Navigation">
	<!-- Side Header -->
	<div class="bg-header-dark">
	<div class="content-header bg-white-5">
		<!-- Logo -->
		<a class="fw-semibold text-white tracking-wide" href="/">
			<span class="text-uppercase">Preama Work</span>
		</a>
		<!-- END Logo -->
	</div>
	</div>
	<!-- END Side Header -->

	<!-- Sidebar Scrolling -->
	<div class="js-sidebar-scroll">
		<div class="smini-hidden">
			<div class="content-side content-side-full d-flex align-items-center bg-body-light" style="border-bottom: 1px solid #ddd;">
				<a class="img-link d-inline-block" href="javascript:void(0)">
					<img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('media/avatars/avatar0.jpg') }}" alt="">
				</a>
				<div class="ms-3">
					<a class="fw-semibold" href="javascript:void(0)">Дмитрий</a>
					<div class="fs-sm">+7 (913) 750-49-06</div>
				</div>
			</div>
		</div>
		
		@include('components.nav')
	</div>
	<!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->