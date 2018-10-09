<header class="navbar navbar-expand fixed-top bg-dark">
	<div class="container">
		<div class="col offset-1 col-10">
			<a id="logo" href="#">Sample App</a>
			<nav>
				<ul class="navbar-nav justify-content-end">
				@if (Auth::check())
					<li<a href="#">用户列表</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							{{ Auth::user()->name }}
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{ route('users.show',Auth::user()->id )}}">
									个人中心
								</a>
							</li>
							<li>
								<a href="#">
									编辑资料
								</a>
							</li>
							<li class="diliver">		
							</li>
							<li>
								<a id="logout" href="#">
									<form action="{{ route('logout') }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
									<button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
									</form>
								</a>
							</li>
						</ul>
					</li>
					@else
					<li class="nav-item">
						<a href="{{ route('help') }}" class="nav-link">帮助</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('login') }}" class="nav-link">登录</a>
					</li>
					@endif
				</ul>
			</nav>
		</div>
	</div>
</header>
