<!DOCTYPE html>
<html lang="ar" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=+, initial-scale=1.0">
        <title>{{ config('app.name')}}</title>
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.rtl.min.css')}}">
        
        @stack('css')
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        
     
    </head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#">
                <img src="{{asset('front/img/logo.png')}}" alt="" width="50" height="50" class="d-inline-block  rounded-circle">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
         <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             
              <li>
                <a href="/" target="_blank" class="btn btn-outline-light">عرض الموقع</a>
              </li>
              <li class="mx-2">
                <form method="POST" id="logoutForm" action="{{ route('logout') }}">
                    @csrf

                </form>
                <a href="#" class="btn btn-outline-light" onclick="document.getElementById('logoutForm').submit()"> تسجيل الخروج </a>
            </li>
            </ul>
          </div> 
        </div>
      </nav>
    <main>
      <div class="container-fluid">
        <div class="row">
            <ul class="nav flex-column col-md-3 col-lg-2 bg-light">
              <li class="nav-item">
                <a class="nav-link  @if(request()->routeIs('admin.subscriber')) active @endif" aria-current="page" href="{{route('admin.subscriber')}}">المشتركين اليوم</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.all.subscriber')) active @endif" href="{{route('admin.all.subscriber')}}">جميع المشتركين</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.users.index')) active @endif" href="{{route('admin.users.index')}}">المستخدمين </a>
              </li>
             
            </ul>
         
          <div class="col-lg-9 content">
            {{ $slot}}
          </div>
        </div>
      </div>
      
     
    </main>
    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
    @stack('script')
</body>
</html>