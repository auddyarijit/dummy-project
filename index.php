<?php include("header.php");?>
<style>
   .project_planning_img{
   border-radius: 101px;
   border: 2px solid;
   }
   .work{
   height:150px;
   }
   .card-title{
   font-size: 14px;
   font-weight: 600;
   margin-bottom: 15px;
   }
   .card-text{
   letter-spacing: 0.5px;
   line-height: 25px;
   font-size: 13px !important;
   color: #5e5e5e;
   font-weight: 400;
   margin-bottom: 20px;
   }
   .service-icon{
   font-size:25px;
   color: #0095d0;
   margin-right:10px;
   }
   .service-heading{
   color: #0098d1;
   font-weight: 550;
   font-size: 22px;
   }
   .service-text{
   line-height: 1.8pc;
   letter-spacing: 0.4px;
   }
   .service-text-right{
   margin-left: 20px!important;
   }
   /*.container-prodcut{
   width: 1000px;
   }*/
   .center{
   width: 100%;
   height: 100vh;
   display: flex;
   justify-content: center;
   align-items: center;
   }
   .char{
   font-size:40px;
   height: 40px;
   animation: an 1s ease-out 1 both;
   display: inline-block;
   }
   @keyframes an{
   from{
   opacity: 0;
   transform: perspective(500px) translate3d(-35px, -40px, -150px) rotate3d(1, -1, 0, 35deg);
   }
   to{
   opacity: 1;
   transform: perspective(500px) translate3d(0, 0, 0);
   }
   }
   @media only screen and (max-width: 600px) {
   .owl-carousel-item img{
      height:500px!important;
   }
   }
</style>
<!-- About Start -->
<div class="container-fluid p-0 mb-5">
   <div class="owl-carousel header-carousel position-relative">
      <div class="owl-carousel-item ">
         <img class="img-fluid" src="img/slider/banner-1.png" alt="">
      </div>
      <div class="owl-carousel-item position-relative">
         <img class="img-fluid" src="img/DigiVarsity.png" alt="">
      </div>
     <!--  <div class="owl-carousel-item position-relative">
         <img class="img-fluid" src="img/slider/banner-1.png" alt="">
      </div> -->
   </div>
</div>
<div class="container-xxl py-5">
   <div class="container">
      <div class="row g-5">
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" >
            <h6 class="section-title bg-white text-start  pe-3">About Us</h6>
            <h2 class="mb-4">Welcome to TechSum IT Solutions</h2>
            <p class="mb-4" style="text-align: justify;">Techsum IT Solutions Pvt Ltd works with the aim of providing best in class services to its clients. Since our inception, we are providing host of services to our clients, in the field of ICT (Information Communication Technology) like Digital Evaluation, Online Assessments, End to End Automation of University, Paper and Pencil Exams, Result Processing, Computer lab Set-U, and Software Development & Testing, to various clients across Government and Private sectors.</p>
           <a class="btn read_more py-3 px-4 mt-2" href="about.php">Read More</a>
         </div>
         <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
            <div class="position-relative h-100">
               <img class="img-fluid position-absolute w-100 h-100" src="img/about/about-home.avif" alt="" style="object-fit: cover; border-radius: 10px;">
            </div>
         </div>
      </div>
   </div>
</div>
<!-- About End -->
<!-- Service Start -->
<!-- <div class="container-xxl py-5">
   <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
         <h6 class="section-title bg-white text-center  px-3">Digital Valuation</h6>
         <h1 class="mb-5" id="text">Project Planning</h1>
      </div>
      <div class="row g-4">
         <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item text-center pt-3">
               <div class="p-4">
                  <img src="img/home-concept-item-1.png" class="project_planning_img">
                  <h5 class="my-3">Strategy</h5>
                  <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item text-center pt-3">
               <div class="p-4">
                  <img src="img/home-concept-item-2.png" class="project_planning_img">
                  <h5 class="my-3">Planning</h5>
                  <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item text-center pt-3">
               <div class="p-4">
                  <img src="img/home-concept-item-3.png" class="project_planning_img">
                  <h5 class="my-3">Development</h5>
                  <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="service-item text-center pt-3">
               <div class="p-4">
                  <img src="img/testing.png" class="project_planning_img work">
                  <h5 class="my-3">Testing</h5>
                  <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div> -->
<!-- Service End -->
<!-- Categories Start -->
<div class="container-xxl py-5 category">
   <div class="container container-prodcut">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
         <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
         <h1 class="mb-5 " id="text">Our Products</h1>
         <div class="row g-3">
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3 wow zoomIn" data-wow-delay="0.1s">
               <a class="position-relative d-block overflow-hidden" href="product.php">
               <img class="product-img" src="img/product/digimarker1.png" alt="">
               </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3 wow zoomIn" data-wow-delay="0.1s">
               <a class="position-relative d-block overflow-hidden" href="">
               <img class="product-img" src="img/product/digiVarsity.png" alt="">
               </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3 wow zoomIn" data-wow-delay="0.5s">
               <a class="position-relative d-block overflow-hidden" href="">
               <img class="product-img" src="img/product/awsum.png" alt="">
               </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3 wow zoomIn" data-wow-delay="0.1s">
               <a class="position-relative d-block overflow-hidden" href="">
               <img class="product-img" src="img/product/e-pragti.png" alt="">
               </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-3 wow zoomIn" data-wow-delay="0.1s">
               <a class="position-relative d-block overflow-hidden" href="">
               <img class="product-img" src="img/product/bbs.png" alt="">
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
      <!--   <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6> -->
      <h1 class="my-5 w3-animate-bottom">Our Services</h1>
   </div>
   <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6 ml-2">
         <div class="w3-animate-left left-service ">
            <h4 class="service-heading"><i class="fa fa-desktop service-icon" aria-hidden="true"></i> Software Development</h4>
            <p class="service-text">Application Devlopment, Software Product Development, Web Development and many more</p>
         </div>
         <div class="w3-animate-left left-service ">
            <h4 class="service-heading"><i class="fa fa-book service-icon" aria-hidden="true"></i> Examination Management</h4>
            <p class="service-text">We offer below services which covers the complete spectrum of End to End Examination Management System.</p>
         </div>
         <div class="w3-animate-left left-service ">
            <h4 class="service-heading"><i class="fa fa-futbol-o service-icon" aria-hidden="true"></i> Digitization</h4>
            <p class="service-text">We offer below services which covers the complete spectrum of End to End Examination Management System.</p>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
         <div class="my-3">
            <img src="img/service/service-images-new.png" alt="" class="w-100">
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
         <div class="pl-5 w3-animate-right service-text-right">
            <h4 class="service-heading"><i class="fa fa-university service-icon" aria-hidden="true"></i> University Automation</h4>
            <p class="service-text ">A digital solution which has student’s centric services along with the workflow based processes for University.</p>
         </div>
         <!--  <div class="pl-5 w3-animate-right service-text-right">
            <h4 class="service-heading"><i class="fa fa-inr service-icon" aria-hidden="true"></i> Fees Managment</h4>
            <p class="service-text ">Techsum provides Digital Fees Collection as service to educational institutes of all sizes.</p>
            </div> -->
         <div class="pl-5 w3-animate-right service-text-right">
            <h4 class="service-heading"><i class="fa fa-life-ring service-icon" aria-hidden="true"></i> Managed IT Services</h4>
            <p class="service-text ">Managed IT services allow businesses to delegate their IT operations to an expert third-party organization</p>
         </div>
      </div>
   </div>
</div>
<script>
   var text = document.getElementById('text');
       var newDom = '';
       var animationDelay = 6;
   
       for(let i = 0; i < text.innerText.length; i++)
       {
           newDom += '<span class="char">' + (text.innerText[i] == ' ' ? '&nbsp;' : text.innerText[i])+ '</span>';
       }
   
       text.innerHTML = newDom;
       var length = text.children.length;
   
       for(let i = 0; i < length; i++)
       {
           text.children[i].style['animation-delay'] = animationDelay * i + 'ms';
       }
</script>
<?php include("footer.php")?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>