 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Covid-19 Testing Management System</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template --> 
  <link href="{{ asset('css/scrolling-nav.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="/">Covid19-TMS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item active">
            <a class="nav-link js-scroll-trigger" href="#live_updates">Live Updates</a>
          </li>
           <li class="nav-item ">
            <a class="nav-link js-scroll-trigger" href="#online_process">Vaccine Online Process</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Coronavirus </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Covid-19 Symptoms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Prevention</a>
          </li>
           
           <li class="nav-item active" style="padding-left: 100px;
    margin-top: 5px;">

          @if(Auth::check())
            <a href="dashboard" class="d-none mr-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="d-none mr-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Login</a>
            <a href="{{ route('register') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            Registration</a>
          @endif

          </li>


        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>COVID19-TMS</h1>
      <p class="lead">COVID19 - Testing Management System</p>
    </div>
  </header>


<section id="current_situation" class="sc-eCImPb fTSmsw  undefined section_padding section_bg overflow-hidden">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <div class="section__title">
          <h4 class="react-reveal" style="animation-fill-mode: both; animation-duration: 1000ms; animation-delay: 0ms; animation-iteration-count: 1; opacity: 1; animation-name: react-reveal-582557402176727-1;">কোভিড-১৯ বর্তমান পরিস্থিতি </h4>
        </div>
      </div>
    </div>
    <div class="row  align-items-center">
      <div class="col-12 col-md-12">
        <div class="sc-hiCibw eXiOBo map_dataset_area row  w-100 justify-content-center justify-content-md-between  align-items-center">
          <div class="mobile__btns d-lg-none row justify-content-center row-cols-2">
            <div class="my-2">
              <div class="map_dataset_wrapper">
                <div class="map_dataset">
                  <button class="">গত ২৪ ঘন্টা</button>
                </div>
              </div>
            </div>
            <div class=" my-2">
              <div class="map_dataset_wrapper">
                <div class="map_dataset">
                  <button class="">গত ৭ দিন</button>
                </div>
              </div>
            </div>
            <div class=" my-2">
              <div class="map_dataset_wrapper">
                <div class="map_dataset">
                  <button class="">গত ৩০ দিন</button>
                </div>
              </div>
            </div>
            <div class=" my-2">
              <div class="map_dataset_wrapper">
                <div class="map_dataset">
                  <button class="active">সর্বমোট</button>
                </div>
              </div>
            </div>
          </div>
          <div class="data_set_buttons col-3 col-md-3 col-lg-3 col-xl-3 d-none d-lg-block">
            <div class=" my-2">
              <div class="map_dataset_wrapper">
                <div class="map_dataset">
                  <button class="">গত ২৪ ঘন্টা</button>
                </div>
              </div>
            </div>
            <div class=" my-2">
              <div class="map_dataset_wrapper">
                <div class="map_dataset">
                  <button class="">গত ৭ দিন</button>
                </div>
              </div>
            </div>
            <div class=" my-2">
              <div class="map_dataset_wrapper">
                <div class="map_dataset">
                  <button class="">গত ৩০ দিন</button>
                </div>
              </div>
            </div>
            <div class=" my-2">
              <div class="map_dataset_wrapper">
                <div class="map_dataset">
                  <button class="active">সর্বমোট</button>
                </div>
              </div>
            </div>
          </div>
 
        </div>
      </div>
    </div>
  </div>
</section>





  <section id="live_updates" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Live Updates: Total Test Done</h2>
          <hr />

        <div class="row  align-items-center">
          <div class="col-12 col-md-12">
            <div class="sc-hiCibw eXiOBo map_dataset_area row  w-100 justify-content-center justify-content-md-between  align-items-center">
              
            
              <div class="col-12  col-lg-10 col-xl-10 justify-content-center" style="margin: 0 auto;">
                <div class=" row row-cols-2 p-0 justify-content-center">

 
                   <div class="col-6 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data">
                      <h4>Barishal</h4>
                      <h4>{{ $Barishal }}</h4>
                    </div>
                  </div>
                   <div class="col-6 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data">
                      <h4>Chattogram</h4>
                      <h4>{{ $Chattogram }}</h4>
                    </div>
                  </div>
                  <div class=" col-6 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data">
                      <h4>Dhaka</h4>
                      <h4>{{ $Dhaka }}</h4>
                    </div>
                  </div>
                  <div class="col-6 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data">
                      <h4>Khulna</h4>
                      <h4>{{ $Khulna }}</h4>
                    </div>
                  </div>
                  <div class="col-6 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data">
                      <h4>Rajshahi</h4>
                      <h4>{{ $Rajshahi }}</h4>
                    </div>
                  </div>
                  <div class="col-6 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data">
                      <h4>Rangpur</h4>
                      <h4>{{ $Rangpur }}</h4>
                    </div>
                  </div>
                  <div class="col-6 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data">
                      <h4>Mymensingh</h4>
                      <h4>{{ $Mymensingh }}</h4>
                    </div>
                  </div>
                  <div class="col-6 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data">
                      <h4>Sylhet</h4>
                      <h4>{{ $Sylhet }}</h4>
                    </div>
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


 

  <section id="online_process" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>কোভিড-১৯ করোনা ভ্যাকসিন গ্রহণের প্রক্রিয়া</h2>
          <hr />

        <div class="row align-items-center">
          <div class="col-12 col-md-12">
            <div class="sc-hiCibw eXiOBo2 map_dataset_area row  w-100 justify-content-center justify-content-md-between  align-items-center">
              
              <div class="col-12  col-lg-10 col-xl-10 justify-content-center" style="margin: 0 auto;">
                <div class=" row row-cols-2 p-0 justify-content-center">

                   <div class="col-4 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data2">
                      <img src="{{ asset('images/step1.png') }}">
                      <h4 class="mt-3 mb-2">অনলাইনে নিবন্ধন</h4>
                       <p>প্রথমে এই পোর্টালের মাধ্যমে জাতীয় পরিচয়পত্র ও সঠিক মোবাইল নম্বর যাচাইপূর্বক অনলাইনে নিবন্ধন সম্পন্ন করবেন।</p>
                    </div>
                  </div>
                  
                   <div class="col-4 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data2">
                      <img src="{{ asset('images/step2.png') }}">
                      <h4 class="mt-3 mb-2">SMS নোটিফিকেশন</h4>
                       <p>অনলাইনে নিবন্ধন পরবর্তী তথ্য যাচাইপূর্বক পর্যায়ক্রমে টিকা প্রদানের তারিখ ও কেন্দ্রের নাম উল্লেখপূর্বক মুঠোফোনে খুদেবার্তা পাবেন।</p>
                    </div>
                  </div>
                  
                   <div class="col-4 col-md-4   d_&amp;_d my-2   justify-content-center text-center">
                    <div class="district_and_division_data2">
                      <img src="{{ asset('images/step3.png') }}">
                      <h4 class="mt-3 mb-2">টিকা কেন্দ্রে টিকা গ্রহণ</h4>
                       <p>মুঠোফোনে খুদেবার্তা প্রাপ্তি সাপেক্ষে টিকাকার্ড জাতীয় পরিচয়পত্র ও সম্মতিপত্রসহ নির্দিষ্ট তারিখে টিকাদান কেন্দ্রে স্ব-শরীরে উপস্থিত হয়ে কোভিড-১৯ টিকা গ্রহণ করবেন।</p>
                    </div>
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







  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About this page</h2>
          <p class="lead">Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19, virus will experience mild to moderate, respiratory illness & recover without requiring special treatment. Older people and those with underlying medical problem like cardiovascular disease.</p>
          <p class="lead">The COVID-19 virus spread primarily through droplet of saliva or discharge from the nose when an infected person coughs or sneezes so it’s important that you also practice respiratory etiquette.</p>
         
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Covid-19 Symptoms</h2>
          <hr />
<p><strong>Hight Fever 2-14 days!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
             <hr />
<p><strong>Dry Cough 2-14 days!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
          <hr />
<p><strong>Shortness of breath!</strong><br />
Reported illnesses have ranged from mild symptoms to severe illness and death</p>
        </div>
      </div>
    </div>
  </section>



  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Prevention</h2>
  <ul>
            <li>Wash your Hands often</li>
            <li>Wear A Face mask</li>
            <li>Avoid contact with sick people</li>
            <li>Always cover your cough or sneeze</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; COVID-TMS 2023</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>
