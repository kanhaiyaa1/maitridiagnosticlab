@extends('maitridiagnosticlab/layout')


@section('title','Clinical Chemistry Laboratory Tests | Maitri Diagnostic Lab')
@section('meta_description','Clinical chemistry laboratory tests in Ambala for biochemical analysis. Comprehensive test menu for accurate diagnosis at Maitri Diagnostic Lab.')
@section('og_image', asset('maitridiagnosticlab/wp-content/uploads/2015/10/Clinical-Chemistry.jpg'))



@section('main')




<div class="head_panel">
    <div style="background-image: url({{asset('maitridiagnosticlab/wp-content/uploads/2015/10/CLINICAL-chemistry-revised.jpg')}}); height: 113px;" class="full_width_photo   ">


      <div class="hgroup">

        <div class="title diagonal-bgcolor-trans   ">
          <div class="container">
            <h1>Clinical Chemistry</h1>
          </div>
        </div>

        <div class="subtitle body-bg_section   ">
          <div class="container">   
            <p></p>
          </div>
        </div>

      </div>


    </div>
</div>



<div class="brand-colors"> </div>


<div class="main foo" data-colorset="foo">
<!--    >> START ========================= CONTENT AREA ========================  -->
<section class="sidebar_on padding_top_half"><div class="container"><div class="row">
<!--   START >> ========================= MAIN COLUMN ========================  -->
<div class="col-sm-8 col-md-8 main_col ">
<section class="vc_row wpb_row vc_row-fluid">
    <div class="row">
            <div class="wpb_column vc_column_container col-sm-12 margin_bottom_grid">
                <div class="wpb_wrapper">

  <div class="wpb_text_column wpb_content_element ">
    <div class="wpb_wrapper">
      <ul>
<li>We have an exhaustive test menu including most clinical chemistry tests requested by clinicians (refer to test menu for details).</li>
<li>We have trained and experienced phlebotomists ensuring a hassle free experience during blood sample collection (correctly labelled samples collected in hospitals are also accepted in the lab).</li>
<li>The tests are performed in FDA approved dry chemistry analyzer with stringent quality control practices.</li>
<li>Any critical value(s) is informed to the patient by sms (if mobile number available) immediately upon testing the sample.</li>
<li>Constant effort is made to maintain a turnaround time of maximum 2 hours between sample received by the lab and report generation.</li>
</ul>

    </div>
  </div>

                </div>
            </div>
    </div>
</section>


      
      <div id="new_comment">
              <div class="new_comment">
                    </div>
            </div>

    </div>
<!--    << END ========================= MAIN COLUMN ========================  -->







@include('maitridiagnosticlab/sidebar')









</div>
</div>
</section>
<!--    << END ========================= CONTENT AREA ========================  -->
</div>






@endsection