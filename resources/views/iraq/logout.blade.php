{% load static %}
<!-- /* ======== Start Logout Page ======== */ -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> {% if title %}
    <title>تطوع / {{title}}</title>
    {% else %}
    <title>تطوع</title>
    {% endif%}
    <link rel="stylesheet" href="{% static 'iraq/css/bootstrap.min.css' %}">
    <link rel="stylesheet" type="text/css" href="{% static 'iraq/css/main.css' %}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
@section('content')
{{-- {% block content %} --}}

<div class="row Boxshadow bg-primary m-2 Borders1">
    <div class="col-sm-12 col-lg-6">
        <img style="margin-top:150px;margin-right:300px" src="{% static 'iraq/images/logout.png' %}" alt="Cinque Terre">
    </div>
    <div class="col-sm-12 col-lg-4" style="margin-left:100px">
        <p class="text-white text-center font-size1" style="margin-top:200px">تم الخروج عزيزي</p>
        <p class="pb-5 font-weight-bold text-center" style="font-size:30px"><a class="text-decoration-none text-white" href="{% url 'doLogin' %}"> سجل الدخول من هنا</a></p>
    </div>
</div>
@endsection
{{-- {% endblock %} --}}
<!-- /* ======== End Logout Page ======== */ -->
