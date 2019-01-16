@extends('admin.public.layout')

@section('title')登录系统@endsection

@push('style')
    <!-- Font Awesome -->
    <link href="{{ \App\Component\asset('static/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ \App\Component\asset('static/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ \App\Component\asset('static/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
@endpush

@section('body')
    <body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form>
                        <h1>Login Form</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="account" id="account" name="account" value="13193310336" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="password" id="password" name="password" value="original2018" required="" />
                        </div>
                        <div>
                            <a class="btn btn-default submit" href="javascript:;">Login in</a>
                            {{--<a class="reset_pass" href="#">Lost your password?</a>--}}
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            {{--<p class="change_link">New to site?--}}
                                {{--<a href="#signup" class="to_register"> Create Account </a>--}}
                            {{--</p>--}}

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            {{--<div id="register" class="animate form registration_form">--}}
                {{--<section class="login_content">--}}
                    {{--<form>--}}
                        {{--<h1>Create Account</h1>--}}
                        {{--<div>--}}
                            {{--<input type="text" class="form-control" placeholder="Username" required="" />--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<input type="email" class="form-control" placeholder="Email" required="" />--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<input type="password" class="form-control" placeholder="Password" required="" />--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<a class="btn btn-default submit" href="index.html">Submit</a>--}}
                        {{--</div>--}}

                        {{--<div class="clearfix"></div>--}}

                        {{--<div class="separator">--}}
                            {{--<p class="change_link">Already a member ?--}}
                                {{--<a href="#signin" class="to_register"> Log in </a>--}}
                            {{--</p>--}}

                            {{--<div class="clearfix"></div>--}}
                            {{--<br />--}}

                            {{--<div>--}}
                                {{--<h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>--}}
                                {{--<p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</section>--}}
            {{--</div>--}}
        </div>
    </div>
    </body>
@endsection

@push('script')
    <script>
        var userName = $('#account').val(),
            password = $('#password').val();
        console.log(userName);
        console.log(password);

        $(function () {
           $('.submit').click(function () {
               $.post('{{ \App\Component\url('admin/auth/auth/doLogin') }}', {userName: userName, password: password}, function (response) {
                   window.location.href = '{{ \App\Component\url('admin/main/console') }}';
               })
           });
        });
    </script>
@endpush