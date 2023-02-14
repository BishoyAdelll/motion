<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Survey Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>

@if (\Session::has('success'))

    <div class="alert alert-success text-center">
        <ul>
            <li style="color: black;list-style: none;">{!! Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger" style="color: #000">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <header class="text-center pt-5">
        <h1 id="title">المعرفة والاتجاهات والممارسات حول تغير المناخ وصحة الإنسان بين الشباب</h1>
        <p id="description">الغرض من الدراسة هو جمع المعلومات التي من شأنها أن تساعد على تحسين المعرفة والمواقف وسلوكيات الشباب تجاه تغير المناخ. سنطرح عليك بعض الأسئلة حول ما تعرفه أو لاحظته بشأن تغير المناخ ، وكيف تشعر ووجهات نظرك حول بعض القضايا المتعلقة بالمناخ وماذا تفعل عندما يتعلق الأمر بالكوارث التي تسببها الاختلافات في المناخ. إجاباتك سرية ، ومشاركتك طوعية تمامًا. سيستغرق التقييم حوالي 20 دقيقة من وقتك. سنكون ممتنين لمساعدتكم في الرد على هذه الأسئلة.</p>
    </header>
    <main class="questions">
        <form id="survey-form" action="{{route('form.store')}}" method="post" class=" was-validated" autocomplete="off" >
        @csrf

            <h5 class="text-center">المعرفة والاتجاهات والممارسات حول تغير المناخ وصحة الإنسان بين الشباب</h5>
            <div class="form-group" >
                <label for="name" id="name-label">الأسم</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="الأسم" required/>
                <span class="error"></span>

            </div>
            <div class="form-group">
                <label for="date" id="date-label">التاريخ</label>
                <input type="date" id="date" name="date" class="form-control" placeholder="التاريخ" required/>
                <span class="error"></span>
            </div>
            <div class="form-group">
                <label for="email" id="email-label">الأيميل</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="الأيميل" required/>
                <span class="error"></span>
            </div>
            <div class="form-group">
                <label for="phone" id="phone-label">الموبايل</label>
                <input type="number" id="phone" name="phone" class="form-control" placeholder="الموبايل" required/>
                <span class="error"></span>
            </div>
            <hr>

            {{-------------------------------------------------------------------------------------------------}}
            <h5 class="text-center">القسم 1: الخصائص الديمغرافية</h5>
            <div class="form-group">
                <label for="age">ما هو عمرك؟</label>
                <select name="age" id="age" required>
                    <option>اختر عمرك</option>
                    <option value="الشباب (أقل من 30 سنة)" >الشباب (أقل من 30 سنة)</option>
                    <option value="البلوغ المبكر (30 - 45 سنة)" >البلوغ المبكر (30 - 45 سنة)</option>
                    <option value="منتصف العمر (45 - 60 سنة)" >منتصف العمر (45 - 60 سنة)</option>
                    <option value="الشيخوخة (> 60 سنة)" >الشيخوخة (> 60 سنة)</option>
                </select>
            </div>
            <div class="form-group">
                <p>النوع؟</p>
                <label for="gender_male">
                    <input type="radio" id="gender_male"
                           name="gender"  class="input-radio" value="ذكر" />ذكر</label>

                <label for="gender_female">
                    <input type="radio" id="gender_female"
                           name="gender"  class="input-radio" value="أنثى" />أنثى</label>
            </div>

            <div class="form-group">
                <label for="governorate" id="governorate-label">المحافظة</label>
{{--                <input type="text" id="governorate" name="governorate" class="form-control" placeholder="المحافظة" required/>--}}
                <select name="governorate" id="governorate" required>
                    <option>اختر المحافظة </option>
                    <option value="Kalyobiya">Kalyobiya </option>
                    <option value="Suez" >Suez </option>
                    <option value="Cairo" >Cairo </option>
                    <option value="Giza" >Giza </option>
                    <option value="Alexandria" >Alexandria </option>
                    <option value="Sharqeia" >Sharqeia </option>
                    <option value="Damietta" >Damietta </option>
                    <option value="Kafr El Shiekh" >Kafr El Shiekh</option>
                    <option value="The Red Sea" >The Red Sea </option>
                    <option value="El-Beheira" >El-Beheira </option>
                    <option value="Assiut" >Assiut </option>
                    <option value="Ismailia" >Ismailia </option>
                    <option value="New Valley" >New Valley </option>
                    <option value="Qena" >Qena </option>
                    <option value="South Sinai" >South Sinai </option>
                    <option value="Sohag" >Sohag </option>
                    <option value="Fayoum" >Fayoum </option>
                    <option value="Bani Souwaif" >Bani Souwaif </option>
                    <option value="Port-Said" >Port-Said </option>
                    <option value="Matrouh" >Matrouh </option>
                    <option value="Menia" >Menia </option>
                    <option value="Dakahliya" >Dakahliya </option>
                    <option value="Aswan" >Aswan </option>
                    <option value="North Sinai" >North Sinai </option>
                    <option value="Monofiya" >Monofiya </option>
                    <option value="Luxor" >Luxor </option>
                    <option value="Al Gharbya" >Al Gharbya</option>

                </select>
                <span class="error"></span>
            </div>
            <div class="form-group">
                <label for="region">المنطقة</label>
                <select name="region" id="region" required>
                    <option>اختر المنطقة</option>
                    <option value="المركز / المدينة" >المركز / المدينة</option>
                    <option value="الحي / الوحدة المحلية" >الحي / الوحدة المحلية</option>
                    <option value="القرية" >القرية</option>
                    <option value="عزبة / نجع / الشيخ" >عزبة / نجع / الشيخ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="educational_level">ما هو مستواك التعليمي؟</label>
                <select name="educational_level" id="educational_level" required>
                    <option>اختر مستواك التعليمي</option>
                    <option value="مدارس" >مدارس</option>
                    <option value="جامعي" >جامعي</option>
                    <option value="اخرى" >اخرى</option>
                </select>
            </div>
            <div class="form-group">
                <label for="university">اكتب اسم الجامعة</label>
                <input type="text" id="university" name="university" placeholder=""class="form-control" placeholder="نرجو أختيار الجامعة" required/>
            </div>
            <div class="form-group">
                <label for="college">نرجو كتابة الكلية</label>
                <input type="text" id="college" name="college" class="form-control" placeholder="نرجو كتابة الكلية" required/>
            </div>
            <div class="form-group">
                <p>هل أنت عضو في أي منظمة طلابية؟</p>
                <label for="student_organization_yes">
                    <input type="radio" id="student_organization_yes"
                           name="student_organization" value="1" class="input-radio"/>نعم</label>

                <label for="student_organization_no">
                    <input type="radio" id="student_organization_no"
                           name="student_organization" value="0" class="input-radio"/>لا</label>
            </div>

            <div class="form-group">
                <label for="organization_name">نرجو توضيح اسم المنظمة</label>
                <input type="text" id="organization_name" name="organization_name" class="form-control" placeholder="نرجو توضيح اسم المنظمة" required/>
            </div>
            <hr>

            {{-------------------------------------------------------------------------------------------------}}
            <h5 class="text-center">القسم 2: المعرفة بتغير المناخ</h5>
            <div class="form-group">
                <p>هل سمعت مصطلح تغير المناخ؟</p>
                <label for="climate_change_term_yes">
                    <input type="radio" id="climate_change_term_yes"
                           name="climate_change_term" value="1" class="input-radio"/>نعم</label>

                <label for="climate_change_term_no">
                    <input type="radio" id="climate_change_term_no"
                           name="climate_change_term" value="0" class="input-radio"/>لا</label>
            </div>
            <div class="form-group">
                <label for="climate_change_concept">ماذا يعني مفهوم تغير المناخ ؟</label>
                <input type="text" id="climate_change_concept" name="climate_change_concept" class="form-control" placeholder="ماذا يعني مفهوم تغير المناخ ؟" required/>
            </div>
            <div class="form-group">
                <p class="h_check">
                    بالنسبة لتغير المناخ
                    فى رأيك ماهى الأنواع الثلاثة الأكثر شيوعًا؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="climate_change_types_1">
                    <input type="checkbox" id="climate_change_types_1" name="climate_change_types[]"  value="عدم استقرار درجة الحرارة  ( التطرف الحراراى)" />عدم استقرار درجة الحرارة  ( التطرف الحراراى) </label>
                <label for="climate_change_types_2">
                    <input type="checkbox" id="climate_change_types_2" name="climate_change_types[]"  value="الارتفاع الشديد فى درجة الحرارة" />الارتفاع الشديد فى درجة الحرارة</label>
                <label for="climate_change_types_3">
                    <input type="checkbox" id="climate_change_types_3" name="climate_change_types[]"  value="تغيير نمط هطول الأمطار" />تغيير نمط هطول الأمطار</label>
                <label for="climate_change_types_4">
                    <input type="checkbox" id="climate_change_types_4" name="climate_change_types[]"  value="كثرة الأعاصير أو المد والجزر" />كثرة الأعاصير أو المد والجزر</label>
                <label for="climate_change_types_5">
                    <input type="checkbox" id="climate_change_types_5" name="climate_change_types[]"  value="الفيضانات الشديدة فى بعض المناطق" />الفيضانات الشديدة فى بعض المناطق</label>
                <label for="climate_change_types_6">
                    <input type="checkbox" id="climate_change_types_6" name="climate_change_types[]"  value="ارتفاع مستوى مياه البحار و المحيطات" />ارتفاع مستوى مياه البحار و المحيطات </label>
                <label for="climate_change_types_7">
                    <input type="checkbox" id="climate_change_types_7" name="climate_change_types[]"  value="الزلازل الأرضية / البراكين" />الزلازل الأرضية / البراكين</label>
                <label for="climate_change_types_8">
                    <input type="checkbox" id="climate_change_types_8" name="climate_change_types[]"  value="الجفاف" />الجفاف </label>
                <label for="climate_change_types_9">
                    <input type="checkbox" id="climate_change_types_9" name="climate_change_types[]"  value="الاختلافات في موسمية المحاصيل" />الاختلافات في موسمية المحاصيل </label>
                <label for="climate_change_types_10">
                    <input type="checkbox" id="climate_change_types_10" name="climate_change_types[]"  value="زيادة الآفات الحشرية" />زيادة الآفات الحشرية</label>
                <label for="climate_change_types_11">
                    <input type="checkbox" id="climate_change_types_11" name="climate_change_types[]"  value="انخفاض مخزون الأسماك" />انخفاض مخزون الأسماك</label>
                <label for="climate_change_types_12">
                    <input type="checkbox" id="climate_change_types_12" name="climate_change_types[]"  value="زيادة الأمراض المنقولة بالنواقل / المياه" />زيادة الأمراض المنقولة بالنواقل / المياه</label>
            </div>
            <div class="form-group">
                <p class="h_check">
                    بالنسبة لتغير المناخ
                    في رأيك
                    ماهي أهم ثلاثة أسباب ؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="climate_change_causes_1">
                    <input type="checkbox" id="climate_change_causes_1" name="climate_change_causes[]"  value="إزالة الغابات (قطع الأشجار)" />إزالة الغابات (قطع الأشجار)</label>
                <label for="climate_change_causes_2">
                    <input type="checkbox" id="climate_change_causes_2" name="climate_change_causes[]"  value="النقل مثل قيادة السيارة أو الحافلة أو القارب (انبعاثات المركبات)" />النقل مثل قيادة السيارة أو الحافلة أو القارب (انبعاثات المركبات)</label>
                <label for="climate_change_causes_3">
                    <input type="checkbox" id="climate_change_causes_3" name="climate_change_causes[]"  value="حرق الوقود الأحفوري مثل الفحم والنفط والغاز الطبيعي (انبعاثات الكربون المفرطة)" />حرق الوقود الأحفوري مثل الفحم والنفط والغاز الطبيعي (انبعاثات الكربون المفرطة)</label>
                <label for="climate_change_causes_4">
                    <input type="checkbox" id="climate_change_causes_4" name="climate_change_causes[]"  value="الاستخدام السيئ للطاقة النووية" />الاستخدام السيئ للطاقة النووية</label>
                <label for="climate_change_causes_5">
                    <input type="checkbox" id="climate_change_causes_5" name="climate_change_causes[]"  value="الممارسات الزراعية السيئة (مثل الرعي الجائر وإساءة استخدام المبيدات)" />الممارسات الزراعية السيئة (مثل الرعي الجائر وإساءة استخدام المبيدات)</label>
                <label for="climate_change_causes_6">
                    <input type="checkbox" id="climate_change_causes_6" name="climate_change_causes[]"  value="الممارسات الصناعية السيئة (مثل انبعاثات المصنع، التخلص غير السليم من النفايات)" />الممارسات الصناعية السيئة (مثل انبعاثات المصنع، التخلص غير السليم من النفايات)</label>
                <label for="climate_change_causes_7">
                    <input type="checkbox" id="climate_change_causes_7" name="climate_change_causes[]"  value="استخدام الكربون في توليد الكهرباء" />استخدام الكربون في توليد الكهرباء</label>
                <label for="climate_change_causes_8">
                    <input type="checkbox" id="climate_change_causes_8" name="climate_change_causes[]"  value="نظم التدوال السيئ للمخلفات" />نظم التدوال السيئ للمخلفات</label>
                <label for="climate_change_causes_9">
                    <input type="checkbox" id="climate_change_causes_9" name="climate_change_causes[]"  value="الاستخدام المفرط و الخاطئ للمبيدات" />الاستخدام المفرط و الخاطئ للمبيدات</label>
                <label for="climate_change_causes_10">
                    <input type="checkbox" id="climate_change_causes_10" name="climate_change_causes[]" value="تقليل المساحات الخضراء والبناء على الأراضي الزراعية" />تقليل المساحات الخضراء والبناء على الأراضي الزراعية</label>
            </div>
            <div class="form-group">
                <p class="h_check">
                    فى رأيك ماهي اصدق ثلاث مصادر للحصول على معلوماتك
                    حول تغير المناخ ؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="climate_change_info_1">
                    <input type="checkbox" id="climate_change_info_1" name="climate_change_info[]"  value="جريدة / مجلة / مجلات علمية" />جريدة / مجلة / مجلات علمية</label>
                <label for="climate_change_info_2">
                    <input type="checkbox" id="climate_change_info_2" name="climate_change_info[]"  value="الإذاعة والتلفزيون" />الإذاعة والتلفزيون</label>
                <label for="climate_change_info_3">
                    <input type="checkbox" id="climate_change_info_3" name="climate_change_info[]"  value="المدرسة / الكلية / الجامعة" />المدرسة / الكلية / الجامعة</label>
                <label for="climate_change_info_4">
                    <input type="checkbox" id="climate_change_info_4" name="climate_change_info[]"  value="أفراد الأسرة / الأقارب / الأصدقاء" />أفراد الأسرة / الأقارب / الأصدقاء</label>
                <label for="climate_change_info_5">
                    <input type="checkbox" id="climate_change_info_5" name="climate_change_info[]"  value="القادة الدينيون / قادة المجتمع / العاملون في المنظمات غير الحكومية" />القادة الدينيون / قادة المجتمع / العاملون في المنظمات غير الحكومية</label>
                <label for="climate_change_info_6">
                    <input type="checkbox" id="climate_change_info_6" name="climate_change_info[]"  value="وسائل التواصل الاجتماعي (فيسبوك - تويتر - انستجرام)" />وسائل التواصل الاجتماعي (فيسبوك - تويتر - انستجرام)</label>
                <label for="climate_change_info_7">
                    <input type="checkbox" id="climate_change_info_7" name="climate_change_info[]"  value="الجهات الحكومية / المواقع الإلكترونية للجهات الحكومية" />الجهات الحكومية / المواقع الإلكترونية للجهات الحكومية</label>
                <label for="climate_change_info_8">
                    <input type="checkbox" id="climate_change_info_8" name="climate_change_info[]"  value="المواقع الإلكترونية لمنظمات الأمم المتحدة" />المواقع الإلكترونية لمنظمات الأمم المتحدة</label>
                <label for="climate_change_info_9">
                    <input type="checkbox" id="climate_change_info_9" name="climate_change_info[]"  value="المنظمات الغير الحكومية NGOs" />المنظمات الغير الحكومية NGOs</label>
                <label for="climate_change_info_10">
                    <input type="checkbox" id="climate_change_info_10" name="climate_change_info[]" value="المجموعات البيئية / موردي الطاقة" />المجموعات البيئية / موردي الطاقة</label>
            </div>
            <hr>

            {{-------------------------------------------------------------------------------------------------}}
            <h5 class="text-center">القسم 3: السلوكيات تجاه تغير المناخ</h5>
            <div class="form-group">
                <label for="climate_change_concern">ما مدى قلقك بشأن تغير المناخ و الأثار المترتبة علية؟</label>
                <select name="climate_change_concern" id="climate_change_concern" required>
                    <option>اختر مدى قلقك</option>
                    <option value="قلق جدا" >قلق جدا</option>
                    <option value="غير مهتم" >غير مهتم</option>
                    <option value="قلق إلى حد ما" >قلق إلى حد ما</option>
                    <option value="لا أعرف / لست متأكدًا" >لا أعرف / لست متأكدًا</option>
                </select>
            </div>
            <hr style="width: 50%;margin:20px auto;">
            <h5 style="text-decoration: underline">فيما يتعلق بتغير المناخ وتأثيراته.</h5>
            <p>حدد مستوى موافقتك على المفهوم التالي:</p>
            <div class="form-group">
                <label for="climate_change_immutable">1.	تغير المناخ عملية غير قابلة للتغير</label>
                <select name="climate_change_immutable" id="climate_change_immutable" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="climate_change_made">2.	هل تغير المناخ من صنع الإنسان أم فعل الله</label>
                <select name="climate_change_made" id="climate_change_made" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="earth_temperature">3.	تغير المناخ هو تقلب طبيعي في درجة حرارة الأرض</label>
                <select name="earth_temperature" id="earth_temperature" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pollution_from_industry">4.	التلوث من الصناعة هو السبب الرئيسي لتغير المناخ</label>
                <select name="pollution_from_industry" id="pollution_from_industry" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="impact_on_health">5.	هناك تأثير لتغير المناخ على صحتي </label>
                <select name="impact_on_health" id="impact_on_health" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="impact_on_mental_health">6.	لقد أثر تغير المناخ على صحتي النفسية مثل الإجهاد النفسى والاكتئاب</label>
                <select name="impact_on_mental_health" id="impact_on_mental_health" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="infectious_diseases_increase">7.	يمكن أن تزداد الأمراض المعدية، على سبيل المثال، COVID-19 بسبب أحداث تغير المناخ</label>
                <select name="infectious_diseases_increase" id="infectious_diseases_increase" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="because_of_modern_society">8.	تغير المناخ أمر لا مفر منه بسبب أعمال المجتمع الحديث</label>
                <select name="because_of_modern_society" id="because_of_modern_society" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="developing_countries_get_blame">9.	ينبغي أن تتحمل البلدان النامية الجزء الأكبر من اللوم عن تغير المناخ</label>
                <select name="developing_countries_get_blame" id="developing_countries_get_blame" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="scares_me">10.	تغير المناخ أمر يخيفني</label>
                <select name="scares_me" id="scares_me" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="can_be_solved">11.	هل تعتقد أن مشكلة تغير المناخ يمكن حلها</label>
                <select name="can_be_solved" id="can_be_solved" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <div class="form-group">
                <label for="catastrophic_effects">12.	من المحتمل أن تكون آثار تغير المناخ كارثية</label>
                <select name="catastrophic_effects" id="catastrophic_effects" required>
                    <option>حدد مستوى موافقتك</option>
                    <option value="موافق" >موافق</option>
                    <option value="محايد" >محايد</option>
                    <option value="غير موافق" >غير موافق</option>
                </select>
            </div>
            <hr style="width: 50%;margin:20px auto;">
            <div class="form-group">
                <p class="h_check">
                    فى رأيك، ما هي اخطر تأثيرات لتغير المناخ والطاقة والبيئة على الشباب / الأطفال؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="most_dangerous_impacts_1">
                    <input type="checkbox" id="most_dangerous_impacts_1" name="most_dangerous_impacts[]"  value="الصحة" />الصحة</label>
                <label for="most_dangerous_impacts_2">
                    <input type="checkbox" id="most_dangerous_impacts_2" name="most_dangerous_impacts[]"  value="التعليم" />التعليم</label>
                <label for="most_dangerous_impacts_3">
                    <input type="checkbox" id="most_dangerous_impacts_3" name="most_dangerous_impacts[]"  value="الحماية الاجتماعية" />الحماية الاجتماعية</label>
                <label for="most_dangerous_impacts_4">
                    <input type="checkbox" id="most_dangerous_impacts_4" name="most_dangerous_impacts[]"  value="حماية الطفل" />حماية الطفل</label>
                <label for="most_dangerous_impacts_5">
                    <input type="checkbox" id="most_dangerous_impacts_5" name="most_dangerous_impacts[]"  value="التغذية" />التغذية</label>
                <label for="most_dangerous_impacts_6">
                    <input type="checkbox" id="most_dangerous_impacts_6" name="most_dangerous_impacts[]"  value="عدم المساواة" />عدم المساواة</label>
                <label for="most_dangerous_impacts_7">
                    <input type="checkbox" id="most_dangerous_impacts_7" name="most_dangerous_impacts[]"  value="اخرى (اذكر)" />اخرى (اذكر) </label>
            </div>
            <div class="form-group">
                <p class="h_check">
                    فى رأيك، ما هي أهم الإجراءات أو الأنشطة اللازمة لجعل النظام التعليمي أكثر مرونة لمعالجة آثار تغير المناخ و الطاقة
                    والبيئة على الأطفال؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="most_important_actions_1">
                    <input type="checkbox" id="most_important_actions_1" name="most_important_actions[]"  value="يجب تدريس آثار تغير المناخ و الطاقة والبيئة على الأطفال بشكل صريح في المناهج الدراسية بالمدرسة" />يجب تدريس آثار تغير المناخ و الطاقة والبيئة على الأطفال بشكل صريح في المناهج الدراسية بالمدرسة</label>
                <label for="most_important_actions_2">
                    <input type="checkbox" id="most_important_actions_2" name="most_important_actions[]"  value="زيادة الوعي واستخدام التكنولوجيا الخضراء" />زيادة الوعي واستخدام التكنولوجيا الخضراء</label>
                <label for="most_important_actions_3">
                    <input type="checkbox" id="most_important_actions_3" name="most_important_actions[]"  value="موارد كافية في الكتب المدرسية، وكتب العمل، وأدلة المعلمين، وCD المدمجة لـ آثار تغير المناخ و الطاقة والبيئة على الأطفال)" />موارد كافية في الكتب المدرسية، وكتب العمل، وأدلة المعلمين، وCD المدمجة لـ آثار تغير المناخ و الطاقة والبيئة على الأطفال)</label>
                <label for="most_important_actions_4">
                    <input type="checkbox" id="most_important_actions_4" name="most_important_actions[]"  value="موارد كافية في الكتب المدرسية، وكتب العمل، وأدلة المعلمين، وCD المدمجة لـ آثار تغير المناخ و الطاقة والبيئة على الأطفال)" />موارد كافية في الكتب المدرسية، وكتب العمل، وأدلة المعلمين، وCD المدمجة لـ آثار تغير المناخ و الطاقة والبيئة على الأطفال)</label>
                <label for="most_important_actions_5">
                    <input type="checkbox" id="most_important_actions_5" name="most_important_actions[]"  value="التدريب المهني والمنصات لدعمي في مناقشة آثار تغير المناخ و الطاقة والبيئة على الأطفال مع المعلمين في المدارس" />التدريب المهني والمنصات لدعمي في مناقشة آثار تغير المناخ و الطاقة والبيئة على الأطفال مع المعلمين في المدارس</label>
                <label for="most_important_actions_6">
                    <input type="checkbox" id="most_important_actions_6" name="most_important_actions[]"  value="الدراسات الفنية: يتم تضمين قضايا تغير المناخ في التقييم التلخيصي للمدرسة" />الدراسات الفنية: يتم تضمين قضايا تغير المناخ في التقييم التلخيصي للمدرسة</label>
            </div>
            <hr style="width: 50%;margin:20px auto;">
            <h5 style="text-decoration: underline">فى رأيك أن أيًا مما يلي مهم في مساعدة المجتمع على منع تأثير تغير المناخ؟</h5>
            <p>يرجى تحديد الإجراءات الوقائية التالية وأهميتها في منع تأثير تغير المناخ:</p>
            <div class="form-group">
                <label for="environmental_laws">1.	الامتثال للقوانين البيئية للحد من التلوث والانبعاثات</label>
                <select name="environmental_laws" id="environmental_laws" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="build_structures">2.	بناء هياكل لحماية الساحل</label>
                <select name="build_structures" id="build_structures" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="energy_conservation">3.	الحفاظ على الطاقة والموارد الطبيعية</label>
                <select name="energy_conservation" id="energy_conservation" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="water_conservation">4.	تشجيع الحفاظ على المياه وإعادة استخدامها </label>
                <select name="water_conservation" id="water_conservation" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="settlement_of_coastal_areas">5.	نبذ بناء مستوطنات جديدة في المناطق الساحلية / إعادة توطين المناطق الساحلية المعرضة للخطر</label>
                <select name="settlement_of_coastal_areas" id="settlement_of_coastal_areas" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="reduce_deforestation">6.	تقليل إزالة الغابات و تعزيزسياسات التشجير</label>
                <select name="reduce_deforestation" id="reduce_deforestation" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="farming_practice">7.	تعزيز ممارسة الزراعة الجيد</label>
                <select name="farming_practice" id="farming_practice" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="increase_awareness">8.	زيادة الوعي العام بقضايا تغير المناخ و تعزيز المشاركة المجتمعية </label>
                <select name="increase_awareness" id="increase_awareness" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="disaster_management">9.	خطط إدارة الكوارث والتأهب للطوارئ</label>
                <select name="disaster_management" id="disaster_management" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <div class="form-group">
                <label for="investing_in_technology">10.	الاستثمار في التكنولوجيا والابتكار وتقليل استهلاك الطاقة</label>
                <select name="investing_in_technology" id="investing_in_technology" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="فى منتهى الأهمية" >فى منتهى الأهمية</option>
                    <option value="مهم بعض الشيء" >مهم بعض الشيء</option>
                    <option value="ليس من المهم" >ليس من المهم</option>
                </select>
            </div>
            <hr>
            <h5 class="text-center">القسم 4: الممارسات المتعلقة بتغير المناخ</h5>
            <div class="form-group">
                <label for="trying_to_take_action">هل أنت تحاول اتخاذ أي إجراءات لتقليل تأثير تغير المناخ في حياتك اليومية ؟</label>
                <select name="trying_to_take_action" id="trying_to_take_action" required>
                    <option>حدد مستوى الأهمية</option>
                    <option value="نعم">نعم</option>
                    <option value="لا" >لا</option>
                    <option value="لا اعرف" >لا اعرف</option>
                </select>
            </div>
            <div class="form-group">
                <p class="h_check">
                    اذا كانت الإجابة بنعم
                    ما هي الإجراءات التي تتابعها فى حياتك اليومية لتقليل أو منع تأثير تغير المناخ؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="actions_you_are_following_1">
                    <input type="checkbox" id="actions_you_are_following_1" name="actions_you_are_following[]"  value="توفير الطاقة في المنازل مثل أطفئ الأنوار التي لا أستخدمها" />توفير الطاقة في المنازل مثل أطفئ الأنوار التي لا أستخدمها </label>
                <label for="actions_you_are_following_2">
                    <input type="checkbox" id="actions_you_are_following_2" name="actions_you_are_following[]"  value="نعتاد استخدام بدائل السيارات مثل ركوب الدراجات" />نعتاد استخدام بدائل السيارات مثل ركوب الدراجات </label>
                <label for="actions_you_are_following_3">
                    <input type="checkbox" id="actions_you_are_following_3" name="actions_you_are_following[]"  value="تناول المزيد من الخضروات و الفاكهة" />تناول المزيد من الخضروات و الفاكهة </label>
                <label for="actions_you_are_following_4">
                    <input type="checkbox" id="actions_you_are_following_4" name="actions_you_are_following[]"  value="إعادة التفكير في السفر" />إعادة التفكير في السفر </label>
                <label for="actions_you_are_following_5">
                    <input type="checkbox" id="actions_you_are_following_5" name="actions_you_are_following[]"  value="تقليل الهدر في الطعام" />تقليل الهدر في الطعام </label>
                <label for="actions_you_are_following_6">
                    <input type="checkbox" id="actions_you_are_following_6" name="actions_you_are_following[]"  value="نعيد استخدام ما لدينا" />نعيد استخدام ما لدينا</label>
                <label for="actions_you_are_following_7">
                    <input type="checkbox" id="actions_you_are_following_7" name="actions_you_are_following[]"  value="تغير مصادر الطاقة في المنازل مثل شراء المصابيح الموفرة للطاقة" />تغير مصادر الطاقة في المنازل مثل شراء المصابيح الموفرة للطاقة</label>
                <label for="actions_you_are_following_8">
                    <input type="checkbox" id="actions_you_are_following_8" name="actions_you_are_following[]"  value="استخدام المركبات الكهربائية" />استخدام المركبات الكهربائية </label>
                <label for="actions_you_are_following_9">
                    <input type="checkbox" id="actions_you_are_following_9" name="actions_you_are_following[]"  value="اختيار منتجات صديقة للبيئة" />اختيار منتجات صديقة للبيئة </label>
                <label for="actions_you_are_following_10">
                    <input type="checkbox" id="actions_you_are_following_10" name="actions_you_are_following[]" value="المشاركة في حملة حول القضايا البيئية مثل حملة التشجير" />المشاركة في حملة حول القضايا البيئية مثل حملة التشجير </label>
            </div>
            <div class="form-group">
                <p class="h_check">
                    إذا كانت الإجابة بلا،
                    فما الذي منعك من اتخاذ إجراءات لمنع أو تقليل تأثير تغير المناخ على مجتمعك؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="what_prevented_you_1">
                    <input type="checkbox" id="what_prevented_you_1" name="what_prevented_you[]"  value="ليس لدي معلومات كافية حول تغير المناخ للمشاركة" />ليس لدي معلومات كافية حول تغير المناخ للمشاركة </label>
                <label for="what_prevented_you_2">
                    <input type="checkbox" id="what_prevented_you_2" name="what_prevented_you[]"  value="ليس على دراية بالإجراءات التي يمكن / ينبغي اتخاذها" />ليس على دراية بالإجراءات التي يمكن / ينبغي اتخاذها </label>
                <label for="what_prevented_you_3">
                    <input type="checkbox" id="what_prevented_you_3" name="what_prevented_you[]"  value="لا املك الموارد المادية والمالية" />لا املك الموارد المادية والمالية </label>
                <label for="what_prevented_you_4">
                    <input type="checkbox" id="what_prevented_you_4" name="what_prevented_you[]"  value="لست على علم للآثار السلبية لتغير المناخ" />لست على علم للآثار السلبية لتغير المناخ</label>
                <label for="what_prevented_you_5">
                    <input type="checkbox" id="what_prevented_you_5" name="what_prevented_you[]"  value="أشعر بالعجز ولم تتم دعوتي للمشاركة فى اى نشاط توعية عن تغير المناخ" />أشعر بالعجز ولم تتم دعوتي للمشاركة فى اى نشاط توعية عن تغير المناخ </label>
                <label for="what_prevented_you_6">
                    <input type="checkbox" id="what_prevented_you_6" name="what_prevented_you[]"  value="اخرى (اذكر)" />اخرى (اذكر) </label>
            </div>
            <div class="form-group">
                <p class="h_check">
                    هل تعرف أي من الإجراءات التالية اتخذتها الحكومة فى بلدك لتقليل أو منع تأثير تغير المناخ في المجتمع؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="actions_taken_1">
                    <input type="checkbox" id="actions_taken_1" name="actions_taken[]"  value="الحد من استخدام الوقود الأحفوري (الفحم والنفط والغاز الطبيعي)" />الحد من استخدام الوقود الأحفوري (الفحم والنفط والغاز الطبيعي)</label>
                <label for="actions_taken_2">
                    <input type="checkbox" id="actions_taken_2" name="actions_taken[]"  value="تطبيق إجراءات كفاءة الطاقة في القطاعات الصناعية والتجارية" />تطبيق إجراءات كفاءة الطاقة في القطاعات الصناعية والتجارية</label>
                <label for="actions_taken_3">
                    <input type="checkbox" id="actions_taken_3" name="actions_taken[]"  value="زيادة البحث والتطوير في مجال تقنيات الطاقة المتجددة" />زيادة البحث والتطوير في مجال تقنيات الطاقة المتجددة</label>
                <label for="actions_taken_4">
                    <input type="checkbox" id="actions_taken_4" name="actions_taken[]"  value="تقديم الدعم لقطاع الزراعة لتحسين أداء المحاصيل" />تقديم الدعم لقطاع الزراعة لتحسين أداء المحاصيل</label>
                <label for="actions_taken_5">
                    <input type="checkbox" id="actions_taken_5" name="actions_taken[]"  value="زيادة الوعي العام بقضايا تغير المناخ" />زيادة الوعي العام بقضايا تغير المناخ</label>
                <label for="actions_taken_6">
                    <input type="checkbox" id="actions_taken_6" name="actions_taken[]"  value="نظم الإنذار المبكر عن الآثار ذات الصلة بالصحة (مثل حمى الضنك)" />نظم الإنذار المبكر عن الآثار ذات الصلة بالصحة (مثل حمى الضنك)</label>
                <label for="actions_taken_7">
                    <input type="checkbox" id="actions_taken_7" name="actions_taken[]"  value="أنظمة الإنذار من الفيضانات" />أنظمة الإنذار من الفيضانات</label>
                <label for="actions_taken_8">
                    <input type="checkbox" id="actions_taken_8" name="actions_taken[]"  value="فرض قانون البناء" />فرض قانون البناء</label>
            </div>
            <div class="form-group">
                <p class="h_check">
                    ما هي التحديات الرئيسية التي يمكن أن يواجهها بلدك / حكومتك في تطبيق الإجراءات لمنع أو تقليل تغير المناخ؟
                </p>
                <p>يمكن تحديد أكثر من اختيار</p>

                <label for="main_challenges_1">
                    <input type="checkbox" id="main_challenges_1" name="main_challenges[]"  value="المالية" />المالية</label>
                <label for="main_challenges_2">
                    <input type="checkbox" id="main_challenges_2" name="main_challenges[]"  value="التقنية" />التقنية</label>
                <label for="main_challenges_3">
                    <input type="checkbox" id="main_challenges_3" name="main_challenges[]"  value="التكنولوجيا" />التكنولوجيا</label>
                <label for="main_challenges_4">
                    <input type="checkbox" id="main_challenges_4" name="main_challenges[]"  value="المؤسسية" />المؤسسية</label>
                <label for="main_challenges_5">
                    <input type="checkbox" id="main_challenges_5" name="main_challenges[]"  value="أخرى (اذكر)" />أخرى (اذكر)</label>
            </div>

            <input type="submit" class="btn btn-primary" id="submit" value="إرسال"/>
        </form>
    </main>
</div>

<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>
    $('#myForm').validator()
</script>
</body>
</html>
