<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>Homes</title>
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
</head>

<body>
    <main>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{asset('front/img/mnazel-Logo-2.png')}}" alt="" width="70" height="70">
              </a>
            </div>
          </nav>
          <div class="line"></div>
        <div class="background-from">
           
            <div class="container">
                <h1 class="mt-5 mb-5 text-center">للحجز والاستفسار</h1>

                <div class="row">
                    <div class="col-md-6 ">
                        <form action="">
                            <div class="mb-3">
                                <label for="" class="form-label">اسم المستفيد</label>
                                <input type="text" class="form-control" name="name" placeholder="اسم المستفيد">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">رقم الجوال</label>
                                <input type="text" class="form-control" name="mobile" placeholder="رقم الجوال">
                            </div>

                            <div>
                                <label for="" class="form-label">المشروع الذي ترغب في الحجز فيه</label>
                            </div>

                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="type" value="درة 1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    مشروع درة المدينة المنورة
                                </label>
                            </div>
        
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" value="درة تبوك">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    مشروع درة تبوك
                                </label>
                            </div>

                            <div class="mt-3">
                                <label for="" class="form-label">هل انت من مستفيدين برنامج سكني</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="نعم">
                                <label class="form-check-label" for="flexRadioDefault1">
                                  نعم
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" value="لا">
                                <label class="form-check-label" for="flexRadioDefault1">
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
                      <div class="col-md-6">
                    <img class="img-form mx-auto d-block"  src="{{asset('front/img/DM-Render-2.jpg')}}" width="600" height="550" alt="">
                </div> 
                </div>
            </div>
        </div>
    </main>


    <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>