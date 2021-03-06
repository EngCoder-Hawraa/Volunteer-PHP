{{-- {% extends "iraq/base.html" %} {% load static %} --}}
@extends('iraq/base')
<!-- /* ======== Start Index Page ======== */ -->
{{-- {% block content %} --}}
@section('content')
<!-- ======== Start Section Introduction Picture ======== -->
<div class="row background m-0">
    <div class="col-sm-4 mr-2">
        <p class="padding-top lead font-weight-bolder text-center Color pb-5">معا لعراق اجمل</p>
        <button style="margin-right:34%" class="font-size H Width text-white mb-5 background1 font-weight-normal Borders border-0 text-center Boxshadow" onclick=document.location="{{ url ('details') }}">قراءة المزيد</button>
    </div>
    <div class="col-sm-6 mt-5 pb-5">
        <img class="img-responsive image-width1" src="images/iraq.png" alt="intro">
    </div>
</div>
<!-- ======== End Section Introduction Picture ======== -->


<!-- ======== Start Section About APP ========-->
<div class="row Boxshadow Borders" id="container1">
    <div class="col-sm-4 p-5">
        <img class="img-responsive image-width1" src="/images/app.png" alt="app">
    </div>
    <div class="col-sm-8 mt-5">
        <p class="font-weight-bolder Color lead text-center ">عن التطبيق</p>
        <p class="mt-4 mr-2 font-weight-normal Color1 text-center"> تطبيق تم عمله ليكون دافع لكل شخص للتطوع لجعل بلده باحلى صورة و كيف الاشخاص تتسابق لاجل العراق و كذلك لاستثمار طاقات الشباب و استقطابهم لاجل هدف اسمى معالم البشرية و هو التطوع من اجل الانسانية بشكل عام و من اجل العراق و نفسه بشكل خاص و لتعليم الشباب
            ما هو التطوع و كيف يمكن الاستفادة منهم بامور تخدم وطنه و لانتشال الشباب من حالات الضياع و الفشل التي نجدها للاسف قد انتشرت في الكثير من الامور سواء بسبب البطالة او حتى امور خارجة عن ارادة الشخص يصنف في هذا التطبيق جميع المؤسسات الخيرية (صحة
            _فنون-تعليم ----الخ) حيث يمكن لاي مؤسسة خيرية في داخل العراق التسجيل في هذا التطبيق و في حالة احد المواطنين يريد التطوع يتفق مع هذه المؤسسة </p>
    </div>
</div>
<!-- ======== End Section About APP ========-->


<!--=========Start Section what volunteer ==========-->
<div class="row Boxshadow Borders" id="container1">
    <div class="col-sm-4 p-5">
        <img class="img-responsive image-width1" src="/images/whyV.png" alt="app">
    </div>
    <div class="col-sm-8 mt-5">
        <p class="font-weight-bolder text-center Color lead">ما هو التطوع؟</p>
        <p class="mt-4 ml-2 font-weight-normal Color1 text-center"> هو تقديم المساعدة والعون والجهد من أجل العمل على تحقيق الخير في المجتمع عموماً ولأفراده خصوصاً فهو ارادة ،داخلية واطلق عليه مسمى عمل تطوعي لان الانسان يقوم به طواعية دون اجبار من الاخرين على فعله، وغلبة لسلطة الخير على جانب الشر، ودليل على ازدهار
            المجتمع
        </p>
    </div>
</div>
<!--=========End Section what volunteer ==========-->
@endsection
{{-- {% endblock %} --}}
<!-- /* ======== End Index Page ======== */ -->
{{-- {% load static %} --}}
<!-- /* ======== Start Base Page======== */ -->



