@extends('layouts.app')

@section('content')
@include('layouts.partial.header')

<main class="main-wrapper">
    <section class="primary-bg-color lefticon-intro-imodules">
        <div class="section-common-space-form">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4"></div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="comments-section">
                            <h2 class="com-title text-center">Sign up as a Company</h2>
                            <div class="clearfix single-comment mdl-shadow--2dp jumbo-shadow">
                                <form action="#" class="matx-form-valid" method="post" name="frmChange" onSubmit="return submitCompanyForm(event)">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield"><input class="mdl-textfield__input"
                                                    type="text" id="fullname"><label class="mdl-textfield__label" for="name">Full
                                                    Name</label></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield"><input class="mdl-textfield__input"
                                                    type="email" id="email"><label class="mdl-textfield__label" for="email">Email</label></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield"><input class="mdl-textfield__input"
                                                    type="text" id="phone"><label class="mdl-textfield__label" for="phone">Phone
                                                    Number</label></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield"><input class="mdl-textfield__input"
                                                    type="text" id="company"><label class="mdl-textfield__label"
                                                    for="company">Company
                                                    Name</label></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield"><input class="mdl-textfield__input"
                                                    type="password" id="password"><label class="mdl-textfield__label"
                                                    for="password">Password</label></div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mdl-textfield mdl-js-textfield"><input class="mdl-textfield__input"
                                                    type="password" id="cpassword"><label class="mdl-textfield__label"
                                                    for="cpassword">Confirm Password</label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                                <div class="text-left"><button type="submit" class="mdl-button btn-full mdl-js-button mdl-button--raised mdl-js-ripple-effect btn-black btn-default btn-submit btn-block">
                                                        <span class="btn-text">{{ __('SIGN UP') }}</span>
                                                        <!-- <i class="fa fa-spinner fa-spin" id="action-loader"></i> -->
                                                        <div id="action-loader" style="padding-left:-20px; display: none"
                                                            class="loader-wrapper">
                                                            <div class="matx-preloader"></div>
                                                        </div>
                                                    </button></div>
                                        </div>
                                        <p class="text-center form-txt">Already have an Account? <a href="{{route('login')}}">Login
                                                here</a></p>
                                        <p class="text-center ">Not a Tester? <a href="{{ url('register/tester') }}">Sign
                                                up
                                                as a Tester</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('layouts.partial.footer')

@endsection

<script type="text/javascript" src="{{asset('assets/auth/js/register.js')}}"></script>