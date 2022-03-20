@include('partials.top')
<body>
    <div id="app" class="container">
    @include('partials.header')
     @yield('main-content')   
        <div class="row">
        @include('statistics.totalStatistics')
        </div>
        <div class="row">
        @include('statistics.genderWiseStatistics')
        @include('statistics.ageWiseStatistics')
        @include('district.districtWisePatients')
        @include('partials.footer')
        </div>

<!-- <div class="container fixed-bottom">
<div class="row">
<div class="col-12">
<ul class="bg-info text-white py-2 px-3 m-0 list-unstyled rounded-top">
<marquee behavior="scroll" class="list-inline" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="5">
                                <i class="fas fa-arrow-alt-circle-right fa-sm"></i>
    <li class="list-inline-item scrollbar">করোনা বাংলাদেশ এপিআই এ আপনাকে স্বাগতম!</li>
                                <i class="fas fa-arrow-alt-circle-right fa-sm"></i>
    <li class="list-inline-item scrollbar">API এ বেশ কিছু তথ্য পরিবর্তন করা হয়েছে। [21-04-2020]</li>
                                <i class="fas fa-arrow-alt-circle-right fa-sm"></i>
    <li class="list-inline-item scrollbar">নমুনা পরিক্ষার তথ্য যুক্ত করা হয়েছে। [21-04-2020]</li>
                                <i class="fas fa-arrow-alt-circle-right fa-sm"></i>
    <li class="list-inline-item scrollbar">লিঙ্গ ও বয়সের তথ্য হালনাগাদ করা হয়েছে। [21-04-2020]</li>
                                <i class="fas fa-arrow-alt-circle-right fa-sm"></i>
    <li class="list-inline-item scrollbar">ওয়েবসাইট বাংলা ভাষায় করা হয়েছে। [21-04-2020]</li>
                                <i class="fas fa-arrow-alt-circle-right fa-sm"></i>
    <li class="list-inline-item scrollbar">নতুন উইজেড যুক্ত করা হয়েছে। [21-04-2020]</li>
                            </marquee>
</ul>
</div>
</div>
</div> -->
    
 @include('partials.bottom')