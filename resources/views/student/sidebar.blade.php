
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu page-sidebar-menu-closed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search sidebar-search-bordered" action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li>
					<a href="{{ route('Schedule') }}">
					<i class="icon-calendar"></i>
					<span class="title">My Schedule</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-badge"></i>
					<span class="title">My Grades</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-notebook"></i>
					<span class="title">My Quizzes</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-speech"></i>
					<span class="title">My Exams</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title">My Projects</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-users"></i>
					<span class="title">My Classmates</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-users"></i>
					<span class="title">My Teachers</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-book-open"></i>
					<span class="title">Books</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-list"></i>
					<span class="title">My History</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-credit-card"></i>
					<span class="title">Reciept</span>
					</a>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
