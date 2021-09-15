{{-- {% load static %} --}}
<!-- /* ======== Start Base Page======== */ -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- {% if title %} --}}
    {{-- <title>تطوع / {{title}}</title> --}}
    {{-- {% else %} --}}
    <title>تطوع</title>
    {{-- {% endif%} --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href='resources/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>

<body>
    <!-- ==========  Start Navbar  ========== -->
    <nav class="Boxshadow nav navbar navbar-inverse navbar-expand-md bg-white navbar-light sticky-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggler border-0 text-dark" type="button" data-toggle="collapse" data-target="#menu">
                    <span class="fas fa-list-ul"> </span>
                </button>
            </div>
            <img class="image-width image-height" src="{% static 'iraq/images/logo.png' %}" alt="Logo">
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right ml-auto">
                    <li class="nav-item">
                        <a class="nav-links text-decoration-none" href="{{ url('') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-links text-decoration-none" href="{{ url('/intities') }}">المؤسسات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-links text-decoration-none" href="{{ url('/about') }}">من نحن</a>
                    </li>
                </ul>
                <button class="H background1 text-white Borders btn col-md-1 text-center border-0 mt-2 mb-2" onclick=document.location="{{ url ('doLogin') }}">دخول</button>
                <button class="H  btn-primary Borders btn col-md-1 border-0 mt-2  mb-2 mr-md-2" onclick=document.location="{{ url ('register_type') }}">تسجيل</button>
            </div>
        </div>
    </nav>
    <!-- ========  End Navbar  ======== -->
    <!-- /* ======== Start Block content ======== */ -->
    @yield('content')
    {{-- {% block content %} {% endblock content %} --}}
    <!-- /* ======== End Block content ======== */ -->


    <!-- ======== Start Footer Section ======== -->
    {{-- {% include 'iraq/footer.html' %} --}}
    <!-- ======== End  Footer Section ======== -->



    <!-- ======== Start Java Script ======== -->
    <!-- <script src="{% static 'iraq/js/myStyle.js' %}"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- <script>
            $(document).ready(function() {
                $("button").click(function() {
                    $("a").addClass("active");
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.menu-toggle').click(function() {
                    $('nav').toggleClass('active')
                })
            })
        </script>

        <script>
            $(document).ready(function() {
                $('.navbar li a').click(function() {
                    $(this).addClass('active').siblings().removeClass('active');
                    $('.navbar a').removeClass('active');
                });
            });
        </script> -->
    <!-- ======== End Java Script ======== -->

</body>

</html>
<!-- /* ======== End Base Page======== */ -->