@extends('maitridiagnosticlab/layout')


@section('title','Clinical Pathology Laboratory Tests | Maitri Diagnostic Lab')
@section('meta_description','Clinical pathology testing in Ambala including urine, stool, and semen analysis. Comprehensive sample processing by expert pathologists at Maitri Diagnostic Lab.')
@section('og_image', asset('maitridiagnosticlab/wp-content/uploads/2015/10/Clinical-Pathology.jpg'))



@section('main')




<div class="head_panel">
    <div style="background-image: url({{asset('maitridiagnosticlab/wp-content/uploads/2017/01/CLINICAL-PATHOLOGY-1.jpg')}}); height: 113px;" class="full_width_photo   ">


      <div class="hgroup">

        <div class="title diagonal-bgcolor-trans   ">
          <div class="container">
            <h1>Clinical Pathology</h1>
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
<li>The processing of all clinical pathology samples including urine, stool, semen analysis are performed by trained technicians under active supervision of pathologist who performs the final microscopic evaluation and reporting.</li>
<li>The patients are requested to provide fresh urine and semen samples in the laboratory premise itself for best evaluation of sample and accurate reporting.</li>
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