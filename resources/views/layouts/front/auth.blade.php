@extends('layouts.front')
@section('content')
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">
						<div class="tab-container">
                            @yield('account')
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->
@endsection