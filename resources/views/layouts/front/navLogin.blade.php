@if (Route::has('login') && Auth::check())
    <li class="top-links-item">
        <a href="#">{{ auth()->user()->firstName }}</a>
        <div class="top-links-section">
            <div class="form-group">
                <a href="{{ url('/home') }}">Dashboard</a>
            </div>
            <div class="form-group">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> 
                    {{ __('Logout') }} 
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
            </div>
        </div>
    </li>
@elseif (Route::has('login') && !Auth::check())
    <li class="top-links-item">
        <a href="#">Login</a>
        <div class="top-links-section">
            <form id="top-login" autocomplete="off" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input name="email" type="email" class="form-control" placeholder="Email address">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group form-check">
                    <input name="remember"  class="form-check-input" type="checkbox"  value="" id="top-login-checkbox">
                    <label class="form-check-label" for="top-login-checkbox">Remember Me</label>
                </div>
                <button class="btn btn-danger w-100" type="submit">Sign in</button>
            </form>
            <div class="product-title">
                <h3 style="font-size: 15px;">
                    <a href="{{ route('login') }}">Or go to Login Page</a>
                </h3>
            </div>
        </div>
    </li>
    
@endif