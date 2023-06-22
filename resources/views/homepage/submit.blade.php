@extends('app')
@section('content')
    <div class="hk-pg-wrapper   ">

        <div class="container ">
            <div class="row">
                <div class="col-xl-12 ">

                    <section class="hk-sec-wrapper mt-100">

                        <h3 class="hk-sec-title text-white text-center color-wrap  "
                            style=" background-color:rgb(17,40,77); padding:10px;">አዲስ አበባ ሳይንስና ቴክኖሎጂ ዩኒቨርሲቲ የሰራተኞች የ ስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <p class="mb-25"> </p>

                        <div class="row">
                            <div class="col-sm">
                                <h1 class="text-center text-wrap font-30 font-weight-600">ማመልከችዎ በተሳካ ሁኔታ ተልኳል።</h1>
                                <h1 class="text-center text-wrap font-24 font-weight-600">ማመልከቻዎን download በማድረግ ፕሪንት አድርገዉ
                                    በመፈረም ወደ ሰው ኅብት ያስገቡ። </h1>
                                <a href="{{ route('export_pdf', $form->id) }}">
                                    <button
                                        class="btn  float-right text-white bg-blue-dark-4 btn-wth-icon btn-rounded icon-right  "
                                        style="text-align:center"><span class="btn-text">Download</span><i
                                            class="fa fa-download"></i></button></a>
                                {{-- <a class="btn btn-dark" href="{{ url('edit-stepone', $form->id) }}">
                                    edit
                                </a> --}}

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
