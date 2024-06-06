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
		<span class="text-uppercase">Preama ERP</span>
		</a>
		<!-- END Logo -->
	</div>
	</div>
	<!-- END Side Header -->

	<!-- Sidebar Scrolling -->
	<div class="js-sidebar-scroll">
		@include('components.nav')
	</div>
	<!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->