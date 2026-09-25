@extends('maitridiagnosticlab/layout')

@section('title', 'Maitri Diagnostic Lab in Ambala | Trusted Pathology & Blood Tests')

@section('meta_description', 'Maitri Diagnostic Lab in Ambala offers accurate blood tests, pathology services, and home sample collection. Trusted by local families for reliable reports.')

@section('main')







    <div class="head_panel">
  <div class="slider_wrapper">
    <div id="head_panel_slider" class="owl-carousel">


      <!-- ============================ SLIDE ==========================-->

       <div class="stretchy_wrapper ratio_slider">

        <img src="{{asset('maitridiagnosticlab/wp-content/uploads/2017/01/Maitri-Diagnostic-homepage-banners.jpg')}}" alt="Maitri Diagnostic Lab - Trusted Pathology and Blood Testing Services in Ambala, Haryana" class="item" style="width: 100%; height: auto;">
        <div class="container">
        </div>

       </div>

      <!-- END========================= SLIDE ==========================-->

      <!-- ============================ SLIDE ==========================-->

       <div class="stretchy_wrapper ratio_slider">

        <img src="{{asset('maitridiagnosticlab/wp-content/uploads/2017/01/mairti-home-banner.jpg')}}" alt="Maitri Diagnostic Lab - Professional Diagnostic Testing and Pathology Services" class="item" style="width: 100%; height: auto;">
        <div class="container">
        </div>

       </div>

      <!-- END========================= SLIDE ==========================-->

    </div>
  </div>
</div>      <div class="brand-colors"> </div>
    
<!--    ========================= MAIN WRAPPER START ========================  -->
<span class="progress_ball"><i class="fa fa-refresh"></i></span>

      <div class="loader-modal"></div>
       <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
          <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
        </svg>
      </div><div class="main foo" data-colorset="foo">
<!--    >> START ========================= CONTENT AREA ========================  -->

<!--   START >> ========================= MAIN COLUMN ========================  -->
<section class="vc_row wpb_row vc_row-fluid no_padding no_cols_padding elevate transparent">
    <div class="container">
        
        <div class="row">
            <div class="wpb_column vc_column_container col-sm-3 col-xs-6 skincolored_section vc_custom_1446619389066">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  transparent boxed same_height_col  with_button   ">


    <div class="figure transparent">
        <a href="{{route('price-list')}}" title="Price List" target="_blank"> 
            <i class="fa fa-list" aria-hidden="true"></i>
        </a>
    </div>



  <div class="content text-center   with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
       Price List
       </h4>
       <p>Services on affordable prices</p> 
    </div>

    

    <div class="link centered">
        <a href="{{route('price-list')}}" class="btn btn-xs btn-secondary" rel="noopener noreferrer"><strong>More</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-3 col-xs-6 skincolored_section vc_custom_1447875610924">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  transparent boxed same_height_col  with_button   ">


  <div class="figure transparent">

    <a href="{{route('services')}}" title="Services" target="_blank"> 
        <i class="wmi icon-i-laboratory" style=" line-height: 83px; "></i>
    </a>


  </div>

  <div class="content text-center   with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
       Pathology Services
       </h4>
       <p>A list of all available</p> 
    </div>

    

    <div class="link centered">
        <a href="{{route('services')}}" services _blank class="btn btn-xs btn-secondary"><strong>More</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-3 col-xs-6 skincolored_section vc_custom_1447875785935">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  transparent boxed same_height_col  with_button   ">


  <div class="figure transparent">
        <a href="{{route('doctors')}}" title="doctors" target="_blank"> 
            <i class="fa fa-user-md"></i>
        </a>
  </div>

  <div class="content text-center   with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
       doctors
       </h4>
       <p>All our staff </p> 
    </div>

    

    <div class="link centered">
        <a href="{{route('doctors')}}" doctors _blank class="btn btn-xs btn-secondary"><strong>More</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-3 col-xs-6 skincolored_section vc_custom_1447875797423">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  transparent boxed same_height_col  with_button   ">


  <div class="figure transparent">

        <a href="{{route('appointment-booking')}}" title="" target="_blank">   
            <i class="fa fa-calendar" aria-hidden="true"></i>
        </a>


  </div>

  <div class="content text-center   with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
       Book an appointment
       </h4>
       <p>Call us or fill in a form</p> 
    </div>

    

    <div class="link centered">
        <a href="{{route('appointment-booking')}}" _blank class="btn btn-xs btn-secondary"><strong>Book</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="vc_row wpb_row vc_row-fluid no_top_padding white-bg">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container col-sm-6 margin_bottom_grid text-left">
                <div class="wpb_wrapper">
<div class="section_header subtitle_bottom   fancy text-left">

    <h1>Trusted Diagnostic & Pathology Lab in Ambala, Haryana</h1>



        <p>Personalized attention sets us apart</p>
</div>
    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <p>
Maitri Diagnostic Lab is a trusted pathology laboratory in Ambala, Haryana, providing accurate blood tests, advanced diagnostic services, and convenient home sample collection. Our experienced pathologists personally oversee every stage of testing to ensure reliable and timely reports for patients and doctors.
</p>


        </div>
    </div>


                        <div class="plethora_button wpb_content_element   text-left ">
                            <a href="{{route('about')}}" class=" btn btn-default with-icon icon-left" title="About Us" target="_self">
                                <i class="fa fa-hospital-o"></i> 
                                Read More
                            </a>
                        </div>

                </div>
            </div>
            <div class="doctors_profile wpb_column vc_column_container col-sm-6 text-left">
                <div class="wpb_wrapper">
<div class="team_members_grid row">


    <div class="col-sm-6 col-md-6">
      <div class="team_member teaser_box centered same_height_col skincolored_section">
        
        <a 
            href="{{route('profile.dr-akshay-bali')}}" 
            style="
            background-image: url({{asset('maitridiagnosticlab/wp-content/uploads/2015/11/Dr.-Akshay.jpg')}})" data-colorset="skincolored_section" class="linkify figure stretchy_wrapper ratio_1-1"></a>
        
        <div class="content boxed  with_button ">

          <div class="hgroup">
            <h4>Dr. Akshay Bali</h4>
             <p>MD (PATHOLOGY)</p> 
          </div>

          <div class="team_social">
          </div>

          <div class="desc">       
            <p></p>
          </div>

          <div class="link">
            <a href="{{route('profile.dr-akshay-bali')}}" data-colorset="skincolored_section" class="linkify btn btn-xs btn-default">View Full Profile</a>
          </div>

        </div>

      </div>
    </div>


    <div class="col-sm-6 col-md-6">
      <div class="team_member teaser_box centered same_height_col skincolored_section">
        
        <a 
        href="{{route('profile.dr-maitrayee-roy')}}" 
        style="background-image: url({{asset('maitridiagnosticlab/wp-content/uploads/2015/11/Dr.-Maitrayee-.jpg')}})" data-colorset="skincolored_section" class="linkify figure stretchy_wrapper ratio_1-1">
        </a>
        
        <div class="content boxed  with_button ">

          <div class="hgroup">
            <h4>Dr. Maitrayee Roy</h4>
             <p>MD (PATHOLOGY- GOLD MEDAL)</p> 
          </div>

          <div class="team_social">
          </div>

          <div class="desc">       
            <p></p>
          </div>

          <div class="link">
            <a href="{{route('profile.dr-maitrayee-roy')}}" data-colorset="skincolored_section" class="linkify btn btn-xs btn-default">View Full Profile</a>
          </div>

        </div>

      </div>
    </div>

                 
</div>
                </div>
            </div>
        </div>
    </div>
</section>


<section style="background-image: url('https://web.archive.org/web/20190609031406im_/http://maitridiagnosticlab.com/wp-content/uploads/2015/09/Histopathology-.jpg')" class="vc_row wpb_row vc_row-fluid specialize_section_home bgimage bg_vcenter">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<div class="section_header subtitle_bottom   fancy text-left">

    <h2>WE SPECIALIZE IN</h2>


        <p>Histopathology and Bone Marrow</p>
</div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-6">
                <div class="wpb_wrapper">
<div class="vc_row wpb_row vc_inner vc_row-fluid">            <div class="wpb_column vc_column_container col-sm-6">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  transparent boxed_special same_height_col  with_button   ">


  <div class="figure transparent">
        <a href="{{route('services.histopathology')}}" title="Histopathology" target="_blank"> 
            <i class="wmi icon-i-pathology"></i>
        </a>
  </div>

  <div class="content text-center   with_button ">
    
    <div class="hgroup">
        <h4 class="neutralize_links">
            <a href="{{route('services.histopathology')}}" histopathology _blank>
                Histopathology
            </a>
        </h4>
    </div>

     <div class="desc"><p>It deals with microscopic evaluation of tissues by trained and experienced pathologists for definitive diagnosis of disease.</p></div> 

    <div class="link centered">
        <a href="{{route('services.histopathology')}}" histopathology _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-6">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  transparent boxed_special same_height_col  with_button   ">

  <div class="figure transparent">


    <a href="{{route('bone-marrow')}}" title="Bone Marrow" target="_blank"> 
        <img src="https://web.archive.org/web/20190609031406im_/http://maitridiagnosticlab.com/wp-content/uploads/2015/09/bone-marrow.png" alt="bone marrow">   
    </a>

  </div>


  <div class="content text-center   with_button ">
    

    <div class="hgroup">
        <h4 class="neutralize_links">
            <a href="{{route('bone-marrow')}}" bone marrow _blank>
                bone marrow
            </a>
        </h4>
    </div>

    <div class="desc"><p>Bone marrow is the soft tissue inside bones that helps form blood cells. It is found in the hollow part of most bones.</p></div> 

    <div class="link centered">
        <a href="{{route('bone-marrow')}}" bone marrow _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-6">
                <div class="wpb_wrapper">

                </div>
            </div>
        </div>
    </div>
</section>


<section class="vc_row wpb_row vc_row-fluid no_padding mri-call-to-action-outer full_width">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<section class="vc_cta3-container">
    <div class="vc_general vc_cta3 mri-call-to-action vc_cta3-style-flat vc_cta3-shape-square vc_cta3-align-left vc_cta3-color-sky vc_cta3-icon-size-md vc_cta3-actions-right  wpb_animate_when_almost_visible wpb_left-to-right vc_custom_1484225738648">
                        <div class="vc_cta3_content-container">
                                    <div class="vc_cta3-content">
                <header class="vc_cta3-content-header">
                    <h2>Book an Appointment with one of our consultant</h2>                                 </header>
                <p>For more details call us: <a href="tel:918708920805" target="_blank">87089 20805</a></p>
<p>Visit Us: <strong>Bali Clinic, Baldev Nagar, Ambala City, Ambala, Haryana 134007</strong></p>
            </div>
                        <div class="vc_cta3-actions">
                            <div class="vc_btn3-container  wpb_animate_when_almost_visible wpb_right-to-left vc_btn3-inline">
                                <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-classic vc_btn3-icon-left vc_btn3-color-success" href="{{route('appointment-booking')}}" title="Book An Appointment" target="_blank"
                                style="padding-left: 20px;"
                                >
                                    <!-- <i class="vc_btn3-icon vc_li vc_li-calendar"></i>  -->
                                    <i class="fa fa-calendar" aria-hidden="true"></i>

                                    Book An Appointment
                                </a>
                            </div>
</div>      </div>
                    </div>
</section>


                </div>
            </div>
        </div>
    </div>
</section>


<section class="vc_row wpb_row vc_row-fluid secondary_section">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<div class="section_header subtitle_bottom   fancy text-left">

    <h2>Our Services</h2>


        <p></p>
</div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<div id="carousel-anything-1" class="carousel-anything-container owl-carousel has-arrows" data-items="4" data-scroll_per_page="" data-autoplay="5000" data-items-small="4" data-items-tablet="3" data-items-mobile="2" data-stop-on-hover="" data-speed-scroll="800" data-speed-rewind="1000" data-thumbnails="arrows" data-thumbnail-numbers="" data-navigation="true"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224773596">            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure transparent">


      <a href="{{route('services.histopathology')}}" title="HISTOPATHOLOGY" target="_blank"> 

        
<div 
class="figure transparent stretchy_wrapper ratio_4-3" 
style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/histopathology.jpg')}})">
    
</div> 
        
          

        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.histopathology')}}" histopathology _blank>
       HISTOPATHOLOGY
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.histopathology')}}" histopathology _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div>

<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224169193">            
    <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure transparent">


      <a href="{{route('services.immunohistochemistry')}}" title="" target="_blank"> 

        
<div 
class="figure transparent stretchy_wrapper ratio_4-3" 
style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/Immunohistochemistry.jpg')}})"
>
</div>



        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.immunohistochemistry')}}" _blank>
       IMMUNOHISTOCHEMISTRY
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.immunohistochemistry')}}" _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224219192">            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure transparent">


      <a href="{{route('services.cytopathology')}}" title="CYTOPATHOLOGY" target="_blank"> 

        
<div 
    class="figure transparent stretchy_wrapper ratio_4-3" 
    style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/CYTOPATHOLOGY.jpg')}})"
></div> 
        
          

        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.cytopathology')}}" cytopathology _blank>
       CYTOPATHOLOGY
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.cytopathology')}}" cytopathology _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224229979">            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure ">


      <a href="{{route('services.immunofluorescence')}}" title="IMMUNOFLUORESCENCE" target="_blank"> 

        
<div 
class="figure  stretchy_wrapper ratio_4-3" 
style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/immunofluorescence.jpg')}})"></div> 
        
          

        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.immunofluorescence')}}" immunofluorescence _blank>
       IMMUNOFLUORESCENCE
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.immunofluorescence')}}" immunofluorescence _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224251608">            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure ">


      <a href="{{route('services.hematology')}}" title="HEMATOLOGY" target="_blank"> 



        
<div 
    class="figure  stretchy_wrapper ratio_4-3" 
    style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/HEMATOLOGY.jpg')}})"
>    
</div> 
        
          

        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.hematology')}}" hematology _blank>
       HEMATOLOGY
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.hematology')}}" hematology _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224265831">            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure transparent">


      <a href="{{route('services.clinical-chemistry')}}" title="CLINICAL CHEMISTRY" target="_blank"> 

        
<div 
    class="figure transparent stretchy_wrapper ratio_4-3" 
    style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/CLINICAL-chemistry.jpg')}})">    
</div> 
        
          


        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.clinical-chemistry')}}" clinical chemistry _blank>
       CLINICAL CHEMISTRY
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.clinical-chemistry')}}" clinical chemistry _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224273456">            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure transparent">


      <a href="{{route('services.hormones-and-cancer-markers')}}" title="HORMONES AND CANCER MARKERS" target="_blank"> 

        
<div 
class="figure transparent stretchy_wrapper ratio_4-3" 
style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/HORMONES-AND-CANCER-MARKERS.jpg')}})"
></div> 
        
          

        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.hormones-and-cancer-markers')}}" hormones and cancer markers _blank>
       HORMONES AND CANCER MARKERS
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.hormones-and-cancer-markers')}}" hormones and cancer markers _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224281782">            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure ">


      <a href="{{route('services.clinical-pathology')}}" title="CLINICAL PATHOLOGY" target="_blank"> 

        
<div 
class="figure  stretchy_wrapper ratio_4-3" 
style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/CLINICAL-PATHOLOGY.jpg')}})">
</div> 
        
          

        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.clinical-pathology')}}" clinical pathology _blank>
       CLINICAL PATHOLOGY
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.clinical-pathology')}}" clinical pathology _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1484224289360">            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">
<!-- ========================== TEASER BOX ==========================-->

<div class="teaser_box wpb_content_element text-center  light_section    with_button   ">

  <div class="figure ">


      <a href="{{route('services.infectious-disease-serology')}}" title="INFECTIOUS DISEASE SEROLOGY" target="_blank"> 

        
<div 
class="figure  stretchy_wrapper ratio_4-3" 
style="background-image:url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/INFECTIOUS-DISEASE-SEROLOGY.jpg')}})"
>
</div> 
        
          

        

    </a>

  </div>


  <div class="content text-center boxed_special  with_button ">
    
    <div class="hgroup">
       <h4 class="neutralize_links">
        <a href="{{route('services.infectious-disease-serology')}}" infectious disease serology _blank>
       INFECTIOUS DISEASE SEROLOGY
        </a>
       </h4>
      
    </div>

    

    <div class="link centered">
        <a href="{{route('services.infectious-disease-serology')}}" infectious disease serology _blank class="btn btn-xs btn-primary"><strong>View Service</strong></a>
    </div>

  </div>

</div>

<!-- END======================= TEASER BOX ==========================-->
                </div>
            </div>
</div></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="vc_row wpb_row vc_row-fluid white-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">

        <h2>Best Diagnostic & Pathology Services in Ambala</h2><br>

        <div class="faq_block">

          <h3>Which is the best diagnostic lab in Ambala for blood tests?</h3>
          <p>
            Maitri Diagnostic Lab is widely trusted in Ambala for accurate blood tests, advanced pathology services, and reliable reporting overseen by experienced pathologists.
          </p>

          <h3>Which pathology lab in Ambala offers home sample collection?</h3>
          <p>
            Maitri Diagnostic Lab provides convenient home sample collection services across Ambala, making diagnostic testing comfortable and accessible for patients of all ages.
          </p>

          <h3>Which diagnostic centre in Ambala gives fast and reliable reports?</h3>
          <p>
            Maitri Diagnostic Lab in Ambala is known for timely and accurate diagnostic reports, supported by modern testing equipment and strict quality checks.
          </p>

        </div>

      </div>
    </div>
  </div>
</section>


<section 
style="background-image: url({{asset('maitridiagnosticlab/wp-content/uploads/2015/09/doctor_blue_left.jpg')}})" 
class="vc_row wpb_row vc_row-fluid secondary_section text-center transparent_film vcenter bgimage bg_vcenter"
>

    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container col-sm-12 text-center">
                <div class="wpb_wrapper">
<div class="section_header subtitle_bottom   fancy text-center">

    <h2>Need a personalized health check up?</h2>


        <p>‘One sized shoe does not fit all’</p>
</div><div class="vc_row wpb_row vc_inner vc_row-fluid PERSONALIZED-HEALTH">            <div class="wpb_column vc_column_container col-sm-6">
                <div class="wpb_wrapper">
<div class="plethora_button wpb_content_element   text-right ">
    <a href="{{route('personalized-health-check')}}" class=" btn btn-success with-icon icon-left" title="PERSONALIZED HEALTH CHECK" target=" _blank">

         <i class="fa fa-file-text-o"></i> 
        Read More
        

    </a>
</div>
                </div>
            </div>
            <div class="wpb_column vc_column_container col-sm-6">
                <div class="wpb_wrapper">
<div class="plethora_button wpb_content_element   text-left ">
    <a href="{{route('contact')}}" class=" btn btn-secondary with-icon icon-left" title="Contact Us" target=" _blank">

        <!-- <i class="lin icon-basic-smartphone"></i>  -->
        <i class="fa fa-phone" aria-hidden="true"></i>

        Contact Us
        

    </a>
</div>
                </div>
            </div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="vc_row wpb_row vc_row-fluid vbottom " style="display:none;">
    <div class="container">
        <div class="row">
            <div class="wpb_column vc_column_container col-sm-12">
                <div class="wpb_wrapper">

    <div class="wpb_text_column wpb_content_element ">
        <div class="wpb_wrapper">
            <h2 class="title2">Latest blog post</h2>

        </div>
    </div>
<!-- vc_grid start -->
<div class="vc_grid-container-wrapper vc_clearfix">
    <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid" data-initial-loading-animation="bounce" data-vc-grid-settings="{&quot;page_id&quot;:145,&quot;style&quot;:&quot;all&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1486980577751-0e0c4a69-1542-5&quot;,&quot;tag&quot;:&quot;vc_basic_grid&quot;}" data-vc-request="http://maitridiagnosticlab.com/wp-admin/admin-ajax.php" data-vc-post-id="145" data-vc-public-nonce="5e0004e48d">
    </div>
</div><!-- vc_grid end -->
<div class="plethora_button wpb_content_element   text-right ">
    <a href="https://web.archive.org/web/20190609031406/http://maitridiagnosticlab.com/blog/" class="btn-lg btn btn-secondary with-icon icon-right" title="Our Blog" target=" _blank">

        
        View All
         <i class="fa fa-long-arrow-right"></i> 

    </a>
</div>
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


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Which is the best diagnostic lab in Ambala for blood tests?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maitri Diagnostic Lab is a trusted diagnostic centre in Ambala offering accurate blood tests, pathology services, and reliable reporting under expert supervision."
      }
    },
    {
      "@type": "Question",
      "name": "Which pathology lab in Ambala offers home sample collection?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maitri Diagnostic Lab provides home sample collection services across Ambala, ensuring convenience, safety, and accurate diagnostic testing."
      }
    },
    {
      "@type": "Question",
      "name": "Which diagnostic centre in Ambala gives fast and reliable reports?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Maitri Diagnostic Lab in Ambala is known for timely diagnostic reports, supported by modern equipment and experienced pathologists."
      }
    }
  ]
}
</script>


@endsection