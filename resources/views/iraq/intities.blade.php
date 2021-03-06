{{-- {% extends "iraq/base.html" %} {% load static %} --}}
@extends('iraq/base')
<!-- /* ======== Start Intities Page ======== */ -->
@section('content')
{{-- {% block content %} --}}
<div class="row m-0 pt-2 background4" style="background-color:#F6FCFD">
    <div class="col-sm-12 col-lg-5 p-5">
        <img class="img-responsive image-width1" src="/images/volunteer.png" alt="app">
    </div>
    <div class="col-sm-12 col-md-7" style="margin-top:100px">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <form class="pb-5" action="{% url 'search_Intities_results2' %}" method="get">
                    <input class="pr-3 Boxshadow bg-white Borders4 border-0 font-size3" style="height:45px;width:380px" name="q" stype="text" placeholder="ابحث المؤسسات حسب الاسم او المحافظة او التصنيف">
                    <button type="submit" style="height:45px;width:40px" class="text-white border-0 text-center background1 Boxshadow Borders4"><i class="fa fa-search pr-1"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>



<div style="border:4px solid white;" data-placement="top" title="عدد المؤسسات" class="mr-5 font-size3 text-white mt-3 badge rounded-circle pt-3 pb-3 pr-4 pl-4 Boxshadow bg-primary float-right">
    {{-- {{intitys.count}} --}}
</div>
<br><br><br>


<!--====== Start Cards ======-->
<div>
    <!--Section: Cards-->
    {{-- <section class="text-center"> --}}
        <!--Grid row-->
        {{-- <div class="row wow fadeIn mr-1 ml-1" style="visibility: visible; animation-name: fadeIn;"> --}}
            {{-- {% if intitys %} {% for intity in intitys %} --}}
            {{-- <div class="col-sm-12 col-md-6 col-lg-3 rounded-top"> --}}
                <!--Card image-->
                {{-- <img class="card-img-top mt-4 Borders image-width1" style="height:150px;" src="/media/{{ intity.intities_pic }}" alt="Card image"> --}}
                <!--Card content-->
                {{-- <div class="card-body Boxshadow image-width1 Borders4"> --}}
                    <!--Title-->
                    {{-- <div class="col text-center mb-3 Color2 font-size1" data-placement="top" title="اسم المؤسسة">{{ intity.name }}</div> --}}
                    {{-- <div class="row font-weight-normal text-white"> --}}
                        {{-- <div class="col Boxshadow text-center pt-2 pb-2 background1 font-size Borders4" style="height:40px;">
                            <i class="fas fa-map-marked-alt ml-3" data-placement="top" title="المحافظة"></i> {{ intity.region }}
                        </div>
                        <div class="col Boxshadow text-center pt-2 pb-2 background1 font-size Borders4 mb-2" style="height:40px;margin-right:5px">
                            <i class="fas fa-book-reader ml-3" data-placement="top" title="التصنيف"></i> {{ intity.classification }}
                        </div>
                    </div>
                    <div class="Boxshadow text-center pt-2 pb-2 background1 text-white font-size Borders4" style="height:40px;">
                        <i class="fas fa-calendar-alt ml-3" data-placement="top" title="تاريخ التأسيس"></i> {{ intity.created}}
                    </div>
                </div>
            </div> --}}
            {{-- {% endfor %} --}}
        {{-- </div>
    </section> --}}
    <!--Section: Cards-->
{{-- </div> --}}
<!--====== EndCards ======-->


<!--====== Start Not found ======-->
{{-- {% else %} --}}
{{-- <div class="Boxshadow text-center background mt-4 Borders1 mr-4 ml-3 mb-3" style="height:440px;width:100%">
    <div class="row">
        <div class="m-auto">
            <div class="mt-2 mb-2">
                <p class="card-title font-weight-bold pb-4 pt-4 text-center Color" style="font-size:25px"> لا توجد معلومات</p>
                <img class="mb-4 " src="{% static 'iraq/images/informationR.png' %} " style="height:228px; width:350px; margin-right: 70px;margin-top:20px" alt="Not Found">
            </div>
        </div>
    </div>
</div>
</div> --}}
{{-- {% endif %} --}}
<!--====== End Not found ======-->


{{-- <div class="cup ">
</div> --}}
@endsection
{{-- {% endblock %} --}}
<!-- /* ======== End Intities Page ======== */ -->
