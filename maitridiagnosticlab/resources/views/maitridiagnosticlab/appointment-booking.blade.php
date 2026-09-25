@extends('maitridiagnosticlab/layout')


@section('title','Online Appointment for Blood Test in Ambala, Maitri Diagnostic Lab')
@section('meta_title','Online Appointment for Blood Test in Ambala, Maitri Diagnostic Lab')
@section('meta_description','Now book an Appointment online for any kind of blood test at Maitri Diagnostic Lab, Ambala based pathology lab Assured for genuine report and coast effective.')
@section('meta_keywords','Online Appointment for Blood Test in Ambala, Maitri Diagnostic Lab')



@section('main')





<div class="head_panel">

    <div 
	    style="background-image: url({{asset('maitridiagnosticlab/wp-content/uploads/2015/10/book-an-appointment.jpg')}}); height: 132px;" 
	    class="full_width_photo"
    >


      <div class="hgroup">

        <div class="title diagonal-bgcolor-trans   ">
          <div class="container">
            <h1>Book an Appointment</h1>
          </div>
        </div>

        <div class="subtitle body-bg_section   ">
          <div class="container">   
            <p>
            	Fill in the Form or call us directly at 
            	<b> 
            		<a href="tel:918708920805" target="_blank">(+91) 87089 20805</a>
            	</b>
            </p>
          </div>
        </div>

      </div>


    </div>
</div>



<div class="brand-colors"> </div>


<div class="main foo" data-colorset="foo">
<!--    >> START ========================= CONTENT AREA ========================  -->

<!--   START >> ========================= MAIN COLUMN ========================  -->
<section class="vc_row wpb_row vc_row-fluid">
	<div class="container">
		<div class="row">
            <div class="wpb_column vc_column_container col-sm-12 margin_bottom_grid">
                <div class="wpb_wrapper">
<div lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>


<form action="{{route('contact-submit')}}" method="post"   >@csrf



<div class="row">
<div class="col-sm-12">
    
    
    
<div class="col-sm-6">
    <label>Your Name<b>*</b><br>
        <span class="wpcf7-form-control-wrap your-name">
            <input required type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-form-control form-control wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name">
        </span>
    </label>
</div>



<div class="col-sm-6">
    <label>Email Address<b>*</b><br>
        <span class="wpcf7-form-control-wrap email-908">
            <input required type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-form-control form-control wpcf7-form-control form-control wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email Address">
        </span>
    </label>
</div>



<div class="col-sm-4">
    <label>Phone Number<b>*</b><br>
        <span class="wpcf7-form-control-wrap tel-246">
            <input required type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-form-control form-control wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone Number">
        </span>
    </label>
</div>



<div class="col-sm-4">
    <label>Select Gender<b>*</b><br>
        <span class="wpcf7-form-control-wrap menu-gender">
            <select required name="gender" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                <option value="" disabled selected>Please Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </span>
    </label>
</div>


<div class="col-sm-4">
    <label>Date Of Birth<b>*</b><br>
        <span class="wpcf7-form-control-wrap date-bob">
            <input required type="date" name="dob" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" aria-required="true" aria-invalid="false" placeholder="Date Of Birth">
        </span>
    </label>
</div>


<div class="col-sm-6">
    <label>Select a Service<b>*</b><br>
        <span class="wpcf7-form-control-wrap menu-426">
            <select required name="service" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                <option value="" disaled selected >Select a Service</option>
                <option value="Histopathology">Histopathology</option>
                <option value="Immunohistochemistry for malignancy">Immunohistochemistry for malignancy</option>
                <option value="Cytology">Cytology</option>
                <option value="Hematology">Hematology</option>
                <option value="Clinical Pathology">Clinical Pathology</option>
                <option value="Clinical Chemistry">Clinical Chemistry</option>
                <option value="Hormones">Hormones</option>
                <option value="Common Cancer Markers">Common Cancer Markers</option>
                <option value="Infectious Disease Serology">Infectious Disease Serology</option>
                <option value="Others">Others</option>
            </select>
        </span>
    </label>
</div>


<div class="col-sm-6">
    <label>Appointment Date<b>*</b><br>
        <span class="wpcf7-form-control-wrap date-966">
            <input required type="date" name="appointment_date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" min="2017-01-01" aria-required="true" aria-invalid="false" placeholder="Appointment Date">
        </span>
    </label>
</div>


<div class="col-sm-6">
    <label>Appointment Time<b>*</b><br>
        <span class="wpcf7-form-control-wrap menu-time">
            <select required name="appointment_time" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                <option value="" disabled selected >Select Appointment Time</option>
                <option value="9:00AM">9:00AM</option>
                <option value="9:30AM">9:30AM</option>
                <option value="10:00AM">10:00AM</option>
                <option value="10:30AM">10:30AM</option>
                <option value="11:00AM">11:00AM</option>
                <option value="11:30AM">11:30AM</option>
                <option value="12:00PM">12:00PM</option>
                <option value="01:00PM">01:00PM</option>
                <option value="01:30PM">01:30PM</option>
                <option value="02:00PM">02:00PM</option>
                <option value="02:30PM">02:30PM</option>
                <option value="03:00PM">03:00PM</option>
                <option value="03:30PM">03:30PM</option>
                <option value="04:00PM">04:00PM</option>
                <option value="04:30PM">04:30PM</option>
                <option value="05:00PM">05:00PM</option>
                <option value="05:30PM">05:30PM</option>
                <option value="06:00PM">06:00PM</option>
                <option value="06:30PM">06:30PM</option>
                <option value="07:00PM">07:00PM</option>
            </select>
        </span>
    </label>
</div>




<div class="col-sm-12">
    <label>Additional Message<b>*</b><br>
        <span class="wpcf7-form-control-wrap your-message">
            <textarea required name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-form-control wpcf7-form-control form-control" aria-invalid="false" placeholder="Additional Message"></textarea>
        </span> 
    </label><br>
    <input required type="submit" value="Send" class="wpcf7-form-control wpcf7-submit btn btn-primary">
</div>


</div>
<div class="wpcf7-response-output wpcf7-display-none"></div></div></form>
                </div>
            </div>
		</div>
	</div>
</div></section>


<section class="vc_row wpb_row vc_row-fluid no_top_padding">
	<div class="container">
		<div class="row">
            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_40 vc_sep_dashed vc_sep_pos_align_center vc_sep_color_blue vc_separator-has-text"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><h4>OR</h4><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
</div><!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center      app-teaser-box ">


	<div class="figure ">
		<a href="tel:918708920805" title="" target=""> 
			<!-- <i class="lin icon-basic-smartphone"></i> -->
      <i class="fa fa-phone" aria-hidden="true"></i>
		</a>
	</div>

  <div class="content text-center  ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
       Call Us On
       </h4>
      
    </div>

	<div class="desc">
     	<p>
	     	<a href="tel:9187089 20805">87089 20805</a>
      </p>
	</div> 


  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
		</div>
	</div>
</section>
      
      <div id="new_comment">
      <div class="container">        <div class="new_comment">
                    </div>
      </div>      </div>

    
<!--    << END ========================= MAIN COLUMN ========================  -->

<!--    << END ========================= CONTENT AREA ========================  -->
</div>



@endsection