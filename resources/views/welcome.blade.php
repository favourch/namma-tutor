@extends('master.main')

@section('title')Welcome to NammaTutor.in @stop

@section('content')
<!-- Body Starts -->
<main>
   <div align="center"class="cyan">
<img src="images/ban.png" style="width:100%">
  </div>
  <div ng-controller="TypeHeadCtrl">
  <div class="section no-pad-bot"style="margin-top:-100px;">
  <div class="container">
    <div class="row">
      <div class="col s12">
      <div class="card cyan divwidth">
        <div class="card-content">
          <div class="col l2 m3 s4">
          <img src="images/prof_img.png" class="responsive-img">
          </div>
          <div class="hide-on-med-and-up col s8">
              <h5 style="font-size:1.2rem;font-weight:400;">Kiosk Browser Lockdown</h5>
              <h6 class="grey-text" style="font-size:1rem;">ProCo IT</h6>
          </div>
          <div class="col l10 m9 s12">
          <div class="hide-on-small-and-down">
            <h5 style="font-size:1.64rem;font-weight:400;">Kiosk Browser Lockdown</h5>
            <h6 class="grey-text" style="font-size:1rem;">ProCo IT</h6>
            <br>
          </div>
          </div>
          <div class="s12">
                    <div class="col s12 m8 l8">
      <input type="text" ng-model="search_param.term" style="text-indent:15px;background-color: #fff;-webkit-border-radius:font-size:41; 2px;-moz-border-radius: 2px;border-radius: 2px;border: 0;width: 100%;height: 45px;font-size: 15pt;color: #003350;font-weight: 400;">
                    </div> 
                    <div class="col s12 m2 l2">
  <!-- Dropdown Trigger -->
    <select class="browser-default" ng-model="search_param.id">
          <option value="" disabled selected>Choose City</option>

      <option ng-repeat="value in cityName" value="<%value.id%>"><%value.city_name%></option>
    </select>

                    </div>
                    <div class="col s12 m2 l2" align="center">
                      <a ng-click="search()" class="btn"style="height:40px; vertical-align:bottom;">Search</a>

              </div>          </div>
        </div>

      </div>
      </div>
    </div>
  </div>
</div>
  <div ng-include="'tutor/search/searchresult.html'"></div>

  <div ng-view></div>

</div>


<div class="container">

        <hr>
            <div class="row">
                  <div class="col s12 m3 l3">
                      <div class="card red">
                        <div class="black">Lenor ipme</div>
                      <div class="card-content white-text">
                      <p style="font-size:10pt">I am a web developer with six months of work experience in Bootstrap, UIKit, JQuery, Dropzone.js, HTML5, CSS3 and PHP5. Key strength is taking new initiatives and ability to learn new skills.</p>
                      </div>
                      <div class="card-action">
                        Your text area
                      </div>
                      </div>
                  </div>

                  <div class="col s12 m3 l3">
                      <div class="card red">
                        <div class="black">Lenor ipme</div>
                      <div class="card-content white-text">
                      <p style="font-size:10pt">I am a web developer with six months of work experience in Bootstrap, UIKit, JQuery, Dropzone.js, HTML5, CSS3 and PHP5. Key strength is taking new initiatives and ability to learn new skills.</p>
                      </div>
                      <div class="card-action">
                        Your text area
                      </div>
                      </div>                  
                  </div>

                  <div class="col s12 m3 l3">
                      <div class="card red">
                        <div class="black">Lenor ipme</div>
                      <div class="card-content white-text">
                      <p style="font-size:10pt">I am a web developer with six months of work experience in Bootstrap, UIKit, JQuery, Dropzone.js, HTML5, CSS3 and PHP5. Key strength is taking new initiatives and ability to learn new skills.</p>
                      </div>
                      <div class="card-action">
                        Your text area
                      </div>
                      </div>                   
                  </div>
                  
                  <div class="col s12 m3 l3">
                      <div class="card red">
                        <div class="black">Lenor ipme</div>
                      <div class="card-content white-text">
                      <p style="font-size:10pt">I am a web developer with six months of work experience in Bootstrap, UIKit, JQuery, Dropzone.js, HTML5, CSS3 and PHP5. Key strength is taking new initiatives and ability to learn new skills.</p>
                      </div>
                      <div class="card-action">
                        Your text area
                      </div>
                      </div>
                  </div>
            </div>
</div>
</main>
    <!-- Body Ends -->
    @stop

@section('page_script')
<script type="text/javascript">
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
  );</script>
  <style type="text/css">
    @media (max-width: 600px) {
    .divwidth{
    height:220pt;
    overflow:visible;
    }
  }
    @media (min-width: 600px) {
    .divwidth{
    height:150pt;
    overflow:visible;
    }}
  </style>
@stop
