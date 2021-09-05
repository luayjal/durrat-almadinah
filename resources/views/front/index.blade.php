<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>{{ config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
</head>

<body>
    
    <main>
        <div class="background-from">
            <nav class="navbar navbar-light">
                <div class="container-fluid d-flex justify-content-center">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('front/img/logo.png')}}" alt="" width="200" height="200" class="d-inline-block  rounded-circle">
                    </a>
                </div>
            </nav>
            <div class="container">
                <h2 class="mb-3">للحجز والاستفسار</h2>

                <div class="row">
                    <div class="col-md-7">
                        <form action="{{route('store')}}" method="POST">
                            @csrf
                            <div class="mb-3 ">
                                <label for="" class="form-label">اسم المستفيد</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="اسم المستفيد">

                                @error('name')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            

                            <div class="mb-3">
                                <label for="" class="form-label">رقم الجوال</label>
                                <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="رقم الجوال">

                                @error('mobile')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div>
                                <label for="" class="form-label">المشروع الذي ترغب في الحجز فيه</label>
                            </div>

                            <div class="form-check ">
                                <input class="form-check-input @error('project') is-invalid @enderror" type="radio" name="project" value="درة المدينة المنورة">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    مشروع درة المدينة المنورة
                                </label>

                               
                            </div>
        
                            <div class="form-check">
                                <input class="form-check-input @error('project') is-invalid @enderror" type="radio" name="project" value="درة تبوك">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    مشروع درة تبوك
                                </label>
                            </div>

                            <div class="mt-3">
                                <label for="" class="form-label">هل انت من مستفيدين برنامج سكني</label>

                                @error('beneficiary')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input  @error('beneficiary') is-invalid @enderror"  type="radio" name="beneficiary" value="نعم">
                                <label class="form-check-label" for="">
                                  نعم
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('beneficiary') is-invalid @enderror" type="radio" name="beneficiary" value="لا">
                                <label class="form-check-label" for="">
                                  لا
                                </label>
                            </div>

                            <div class="mb-2 mt-3">
                                <label for="" class="form-label">ملاحظات</label>
                                <textarea class="form-control" name="notes" rows="5"></textarea>
                            </div>
                            <div class="mt-3  ">
                                
                               <button class="btn btn-outline-brown  btn-lg" type="submit">تسجيل</button>
                            </div>

                        </form>
                    </div>
                    <!--  <div class="col-md-7">
                    <img class="img-fluid" src="img/DM-Render-2.jpg" alt="" srcset="">
                </div> -->
                </div>
            </div>
        </div>
    </main>


    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>