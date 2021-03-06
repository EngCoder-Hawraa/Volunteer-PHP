{{-- {% load static %} --}}

<!-- /* ======== Start Resister User Page ======== */ -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- {% if title %} --}}
    {{-- <title>تطوع / {{title}}</title>
    {% else %}
    <title>تطوع</title>
    {% endif%} --}}
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

{{-- {% block content %} --}}
<body>
    <div class="background4">
        {{-- <div class="form-group p-5 mb-5">
            {% if messages %} {% for message in messages %} {% if message.tags == 'success' %}
            <div class="alert alert-success text-center Boxshadow border-0 Borders4">{{ message }}</div>
            {% elif message.tags == 'error' %}
            <div class="alert alert-danger text-center Boxshadow border-0 Borders4">{{ message }}</div>
            {% endif %} {% endfor %} {% endif %}
        </div> --}}
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="user_card flex-direction-column Boxshadow bg-white">
                    <form action="/register_user" method="POST">
                        {{-- {% csrf_token %} --}}
                        <div class="head-title H4 background1 Borders5">
                            <img class="mr-5" style="width:60px;height:185px;margin-top:-120px" src="/images/register.png" alt="Register">
                            <p class="text-center pt-2 text-white" style="margin-top:-80px">تسجيل المستخدم</p>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="username" class="col-sm-3 col-form-label mr-2 font-size4">اسم المستخدم</label>
                            <div class="col-sm-8">
                                <input type="text" class="fa pr-3 Borders7 Boxshadow Borders4 Color2" placeholder="&#xf007" style="height:46px;width:370px" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label mr-2 font-size4">البريد الالكتروني</label>
                            <div class="col-sm-8">
                                <input type="text" class="fa pr-3 Borders7 Boxshadow Borders4 Color2" placeholder="&#xf658" style="height:46px;width:370px" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password1" class="col-sm-3 col-form-label mr-2 font-size4">كلمة المرور</label>
                            <div class="col-sm-8">
                                <input type="text" class="fa pr-3 Borders7 Boxshadow Borders4 Color2" placeholder="&#xf084" style="height:46px;width:370px" name="password1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password2" class="col-sm-3 col-form-label mr-2 font-size4">تأكيد كلمة المرور</label>
                            <div class="col-sm-8">
                                <input type="text" class="fa pr-3 Borders7 Boxshadow Borders4 Color2" placeholder="&#xf084" style="height:46px;width:370px" name="password2">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div style="padding-right:100px" class="g-recaptcha pt-2 pb-2" data-sitekey="6LefydgZAAAAAEn2C5V0OKVEAWpJMGnHD-M4qjzn">
                            </div>
                        </div>
                        <input class="H3 btn font-weight-normal image-width1 login_btn text-white background1 Boxshadow mb-3 Borders4 font-size1" name="submit" type="submit" value="تسجيل">
                        <div class="border-top mt-4 pt-2 pb-4">
                        </div>
                        <small class="pt-2 text-center">إذا كان لديك حساب من قبل فيمكنك <a class="text-decoration-none" href="{{ url('/doLogin') }}">الدخول من هنا</a></small>
                        <div class="head-title1"></div>
                    </form>
                    <div class="head-title1 H4 background1 Boxshadow Borders6"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- {% endblock %} --}}
    <!-- ======== Start Java Script ======== -->
    <!-- <script src="{% static 'iraq/js/myStyle.js' %}"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- ======== End Java Script ======== -->
</body>

</html>
<!-- /* ======== End Register User Page ======== */ -->
