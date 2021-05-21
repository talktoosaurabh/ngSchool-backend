@extends('layout.master')

@section('pageTitle', 'ngSchool | Login ')

@section('content')

<div id="navSection">
    @include('layout.header')
</div>




<div class="main_div">
    <div class="sub_div">
        <h3 class="text-center">login</h3>
        <p class="text-center">Get started with your free account</p>

        <div>
            <form method="post">
              <div class="align-items-center">
                <div class="mt-4">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-user "></i></div>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" required>
                  </div>
                </div>
                <div class="mt-3">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                    </div>
                    <input type="password" class="form-control"  placeholder="Password" required>
                  </div>
                </div>
                <div class="text-center mt-3">
                    <a href="/register" >Don't have an Account?</a>
                </div>
                <div class="mt-3">
                  <button type="submit" class="form-control btn btn-primary mb-2">Login</button>
                </div>
              </div>
            </form>
        </div>
    </div>
</div>


<div id="footerSection">
    @include('layout.footer')
</div>

@endsection


