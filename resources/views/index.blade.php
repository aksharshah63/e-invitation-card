<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    @php
            $boy_name = str_replace('','-',$weddings->boy_name);
            $girl_name = str_replace('','-',$weddings->girl_name);
      @endphp
    <title>
            @if(isset($boy_name) && isset($girl_name))
                {{'Wedding-Invitation-'.ucfirst($boy_name).'-Weds-'.ucfirst($girl_name)}}
            @else
                Wedding Invitation
            @endif
    </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="{{ucfirst($boy_name) .' Weds '. ucfirst($girl_name)}}"/>
    <meta property="og:image" content="{{ \App\Utility::postgetImageUrl($weddings->banner_image)}}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/preloader.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick-theme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@if (!empty($weddings->banner_image))
<style>

  .back-img{
    background-image: url('{{ \App\Utility::postgetImageUrl($weddings->banner_image)}}') !important;
  }
  </style>
  @else 
  <style>

    .back-img{
      background-image: url('{{asset("images/banner_image.jpg")}}') !important;
    }
    </style>
  @endif
<style>
  #groom-img{
    background-image: url({{ \App\Utility::postgetImageUrl($weddings->boy_image)}});
  }
  #bride-img{
    background-image: url({{ \App\Utility::postgetImageUrl($weddings->girl_image)}})
  }
  .slick-track {
    margin: 0 auto;
}
</style>

</head>

<body>
  <div id="loader_wrapper">
    <div class="heart1">
       <div class="heart-piece-0"></div>
       <div class="heart-piece-1"></div>
       <div class="heart-piece-2"></div>
       <div class="heart-piece-3"></div>
       <div class="heart-piece-4"></div>
       <div class="heart-piece-5"></div>
       <div class="heart-piece-6"></div>
       <div class="heart-piece-7"></div>
       <div class="heart-piece-8"></div>
    </div>
 </div>
@php
        $image = array('dandiya-ras.jpg','ganesha.jpg','haldi.jpg','engage.jpg','hath-dhan.jpg','mayra.jpg','mehndi.jpg','reception.jpg','sangit.jpg','wedding.jpg');
    @endphp
    <div class="modal fade landing_modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-modal="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="save-the-date">
              <h3 id="curve-text" style="display:block">
                  <span class="char1" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-2px) translateY(48px) rotate(-46deg)">W</span><span class="char2" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-4px) translateY(35px) rotate(-40deg)">e</span><span class="char3" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-5px) translateY(30px) rotate(-37deg)">'</span><span class="char4" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-6px) translateY(25px) rotate(-33deg)">r</span><span class="char5" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-6px) translateY(17px) rotate(-28deg)">e</span><span class="char6 empty" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-6px) translateY(13px) rotate(-24deg)"> </span><span class="char7" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-5px) translateY(9px) rotate(-20deg)">G</span><span class="char8" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-4px) translateY(5px) rotate(-14deg)">e</span><span class="char9" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-3px) translateY(2px) rotate(-9deg)">t</span><span class="char10" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-1px) translateY(0px) rotate(-4deg)">t</span><span class="char11" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(0px) translateY(0px) rotate(-1deg)">i</span><span class="char12" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(1px) translateY(0px) rotate(3deg)">n</span><span class="char13" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(2px) translateY(2px) rotate(8deg)">g</span><span class="char14 empty" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(4px) translateY(3px) rotate(12deg)"> </span><span class="char15" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(5px) translateY(7px) rotate(17deg)">M</span><span class="char16" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(6px) translateY(13px) rotate(23deg)">a</span><span class="char17" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(6px) translateY(19px) rotate(29deg)">r</span><span class="char18" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(6px) translateY(27px) rotate(35deg)">r</span><span class="char19" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(5px) translateY(33px) rotate(38deg)">i</span><span class="char20" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(4px) translateY(39px) rotate(42deg)">e</span><span class="char21" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(1px) translateY(50px) rotate(48deg)">d</span>
              </h3>
              <div class="waves-block">
                 <div class="waves wave-1"></div>
                 <div class="waves wave-2"></div>
                 <div class="waves wave-3"></div>
              </div>
              <h4>Save the date</h4>
              <span class="date">{{$weddings_date}}</span>
          </div>

          <div class="row">
              <div class="col-12">
                  <div class="wed-names">
                      <span class="b-name">{{ucfirst($boy_name)}}</span> 
                      <h1>
                          <svg fill="#8bd9c1" class="heart-svg" version="1.1" width="120px" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 21.623 21.623" style="enable-background:new 0 0 21.623 21.623" xml:space="preserve">
                          <g>
                              <g>
                                  <path d="M21.402,7.896c-0.382-0.958-1.212-1.679-2.535-2.205c-0.107-0.043-0.221-0.08-0.338-0.113c-1.181-0.329-2.679-0.13-3.761,0.735c-0.479-1.3-1.657-2.244-2.837-2.574c-0.118-0.033-0.235-0.059-0.348-0.078c-1.405-0.235-2.488-0.045-3.31,0.576C7.456,4.853,6.966,5.87,6.812,7.26c-0.371,3.376,4.163,10.225,4.356,10.514c0.088,0.132,0.217,0.222,0.361,0.262c0.144,0.041,0.302,0.03,0.446-0.039c0.313-0.148,7.685-3.678,9.112-6.759C21.674,9.969,21.78,8.845,21.402,7.896z M20.095,11.501c0,0,0.735-3.53-2.217-4.849C17.878,6.651,21.724,7.141,20.095,11.501z M6.085,7.825C6.09,7.787,6.096,7.751,6.1,7.713c-0.728,0.26-1.427,0.879-1.699,1.701c-0.722-0.54-1.7-0.638-2.46-0.398c-0.075,0.023-0.149,0.051-0.217,0.08c-0.851,0.369-1.375,0.855-1.603,1.486c-0.226,0.625-0.134,1.354,0.275,2.167c0.994,1.974,5.894,4.106,6.102,4.196c0.095,0.04,0.198,0.044,0.29,0.015c0.093-0.03,0.175-0.091,0.23-0.18c0.052-0.084,0.617-1.011,1.207-2.207C7.051,12.337,5.89,9.601,6.085,7.825z M1.231,12.694c-1.237-1.237,0-2.554,0-2.554C0.37,11.646,1.231,12.694,1.231,12.694z"></path>
                              </g>
                          </g>
                          </svg> 
                      </h1>
                      <span class="g-name">{{ucfirst($girl_name)}}</span>
                      </div>
                  </div>
              </div>
          <div class="play-music mb-4">
              <h3 class="text-center mb-4">Would you like to play music?</h3>
              <div class="row justify-content-center">
                      <button type="button" class="btn submit-btn btn-yes mr-3" data-dismiss="modal">Yes</button>
                      <button type="button" class="btn submit-btn btn-no" data-dismiss="modal">No</button>
              </div>
          </div>
        </div>
      </div>
  </div>
  <div class="sec-1">
    <div class="overlay"></div>
    <div class="back-img">
      <div class="save-the-date">
        <h3 id="curve-text" style="display:block"><span class="char1" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-2px) translateY(48px) rotate(-46deg)">W</span><span class="char2" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-4px) translateY(35px) rotate(-40deg)">e</span><span class="char3" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-5px) translateY(30px) rotate(-37deg)">'</span><span class="char4" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-6px) translateY(25px) rotate(-33deg)">r</span><span class="char5" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-6px) translateY(17px) rotate(-28deg)">e</span><span class="char6 empty" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-6px) translateY(13px) rotate(-24deg)"> </span><span class="char7" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-5px) translateY(9px) rotate(-20deg)">G</span><span class="char8" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-4px) translateY(5px) rotate(-14deg)">e</span><span class="char9" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-3px) translateY(2px) rotate(-9deg)">t</span><span class="char10" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(-1px) translateY(0px) rotate(-4deg)">t</span><span class="char11" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(0px) translateY(0px) rotate(-1deg)">i</span><span class="char12" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(1px) translateY(0px) rotate(3deg)">n</span><span class="char13" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(2px) translateY(2px) rotate(8deg)">g</span><span class="char14 empty" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(4px) translateY(3px) rotate(12deg)"> </span><span class="char15" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(5px) translateY(7px) rotate(17deg)">M</span><span class="char16" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(6px) translateY(13px) rotate(23deg)">a</span><span class="char17" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(6px) translateY(19px) rotate(29deg)">r</span><span class="char18" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(6px) translateY(27px) rotate(35deg)">r</span><span class="char19" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(5px) translateY(33px) rotate(38deg)">i</span><span class="char20" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(4px) translateY(39px) rotate(42deg)">e</span><span class="char21" style="display:inline-block;transition:none 0s ease 0s;transform:translateX(1px) translateY(50px) rotate(48deg)">d</span></h3>
        <div class="waves-block">
           <div class="waves wave-1"></div>
           <div class="waves wave-2"></div>
           <div class="waves wave-3"></div>
        </div>
        <h4>Save the date
        </h4>
        <span class="date">{{$weddings_date}}</span>
     </div>
    </div>
  </div>


      <section class="sec-2">
          <div class="container">
              <div class="wed-photos">
                  <div class="row align-items-center">
                      <div class="col-lg-4 col-md-4">
                          <div class="photos-box">
                              <div class="sub-pbox" id="groom-img" >
                                  
                              </div>

                          </div>
                          <div class="social-icon">
                            <ul class="social">
                                @if ( $weddings->boy_instgram != null || $weddings->boy_instagram != "")
                                <li><a role="button" aria-label="Instagram link" target="_blank" rel="noreferrer" href="{{$weddings->boy_instagram}}"><i class="fa fa-instagram"></i></a></li>
                                @endif
                                @if ( $weddings->boy_facebook != null || $weddings->boy_facebook != "")
                                  <li><a role="button" aria-label="Facebook link" target="_blank" rel="noreferrer" href="{{$weddings->boy_facebook}}"><i class="fa fa-facebook-f"></i></a></li>
                                  @endif
                                  @if ( $weddings->boy_twitter != null || $weddings->boy_twitter != "")
                                  <li><a role="button" aria-label="Twitter link" target="_blank" rel="noreferrer" href="{{$weddings->boy_twitter}}"><i class="fa fa-twitter"></i></a></li>
                                  @endif
                                  @if ( $weddings->boy_pinterest != null || $weddings->boy_pinterest != "")
                                  <li><a role="button" aria-label="Pinterest link" target="_blank" rel="noreferrer" href="{{$weddings->boy_pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                                  @endif
                             </ul>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                          <div class="wed-names">
                            @php
                                  $boy_name = str_replace('-',' ',$weddings->boy_name);
                            @endphp
                             <span class="b-name">{{ucfirst($boy_name)}}</span> <h1><svg  fill="#8bd9c1" class="heart-svg" version="1.1" width="120px" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 21.623 21.623" style="enable-background:new 0 0 21.623 21.623" xml:space="preserve">
                              <g>
                                 <g>
                                    <path d="M21.402,7.896c-0.382-0.958-1.212-1.679-2.535-2.205c-0.107-0.043-0.221-0.08-0.338-0.113c-1.181-0.329-2.679-0.13-3.761,0.735c-0.479-1.3-1.657-2.244-2.837-2.574c-0.118-0.033-0.235-0.059-0.348-0.078c-1.405-0.235-2.488-0.045-3.31,0.576C7.456,4.853,6.966,5.87,6.812,7.26c-0.371,3.376,4.163,10.225,4.356,10.514c0.088,0.132,0.217,0.222,0.361,0.262c0.144,0.041,0.302,0.03,0.446-0.039c0.313-0.148,7.685-3.678,9.112-6.759C21.674,9.969,21.78,8.845,21.402,7.896z M20.095,11.501c0,0,0.735-3.53-2.217-4.849C17.878,6.651,21.724,7.141,20.095,11.501z M6.085,7.825C6.09,7.787,6.096,7.751,6.1,7.713c-0.728,0.26-1.427,0.879-1.699,1.701c-0.722-0.54-1.7-0.638-2.46-0.398c-0.075,0.023-0.149,0.051-0.217,0.08c-0.851,0.369-1.375,0.855-1.603,1.486c-0.226,0.625-0.134,1.354,0.275,2.167c0.994,1.974,5.894,4.106,6.102,4.196c0.095,0.04,0.198,0.044,0.29,0.015c0.093-0.03,0.175-0.091,0.23-0.18c0.052-0.084,0.617-1.011,1.207-2.207C7.051,12.337,5.89,9.601,6.085,7.825z M1.231,12.694c-1.237-1.237,0-2.554,0-2.554C0.37,11.646,1.231,12.694,1.231,12.694z"></path>
                                 </g>
                              </g>
                           </svg> 
                           @php
                                  $girl_name = str_replace('-',' ',$weddings->girl_name);
                            @endphp
                          </h1><span class="g-name">{{ucfirst($girl_name)}}</span></h1>
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="photos-box bride">
                            <div class="sub-pbox" id="bride-img" >
                            </div>
                        </div>
                        <div class="social-icon">
                            <ul class="social">
                                @if ( $weddings->girl_instgram != null || $weddings->girl_instagram != "")
                              <li><a role="button" aria-label="Instagram link" target="_blank" rel="noreferrer" href="{{$weddings->girl_instagram}}"><i class="fa fa-instagram"></i></a></li>
                              @endif
                              @if ( $weddings->girl_facebook != null || $weddings->girl_facebook != "")
                                <li><a role="button" aria-label="Facebook link" target="_blank" rel="noreferrer" href="{{$weddings->girl_facebook}}"><i class="fa fa-facebook-f"></i></a></li>
                                @endif
                                @if ( $weddings->girl_twitter != null || $weddings->girl_twitter != "")
                                <li><a role="button" aria-label="Twitter link" target="_blank" rel="noreferrer" href="{{$weddings->girl_twitter}}"><i class="fa fa-twitter"></i></a></li>
                                @endif
                                @if ( $weddings->girl_pinterest != null || $weddings->girl_pinterest != "")
                                <li><a role="button" aria-label="Pinterest link" target="_blank" rel="noreferrer" href="={{$weddings->girl_pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                                @endif
                             </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

      <section class="sec-3">
        <div class="img-back-save sec-3-img-back">
            <img src="{{asset('frontend/images/save-back.png')}}">
        </div>
        <div class="container">
          <div class="save-head">
              <img src="{{asset('frontend/images/sec-title-flower.png')}}">
              <h1>Save The Date</h1>
              <h3>{{$weddings_date}}</h3>
              @php
                  $newDate = date("Y/m/d", strtotime($weddings->wedding_date));
              @endphp
          </div>
          <div class="timer"><h1 id="demo"> </h1></div>
          <div class="save-counter countdown" data-count={{$newDate}}>
              <div class="row">
                  <div class="col-6 col-md-3">
                      <div class="save-timer">
                          <div class="save-img">
                              <h3>%d</h3>
                              <h4>Days</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-3">
                      <div class="save-timer">
                          <div class="save-img">
                              <h3>%h</h3>
                              <h4>Hours</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-3">
                      <div class="save-timer">
                          <div class="save-img">
                              <h3>%m</h3>
                              <h4>Minutes</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-3">
                      <div class="save-timer">
                          <div class="save-img">
                              <h3>%s</h3>
                              <h4>Seconds</h4>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="img-back-save img-back-2">
          <img src="{{asset('frontend/images/save-back-1.png')}}">
      </div>
    </section>

  @if(count($occasion) > 0)
    <section class="story-section sec-4" id="story">
        <div class="head-sec-4 save-head">
            <h1>Occasions</h1>
            <h3><img src="{{asset('frontend/images/section-title.png')}}"></h3>
        </div>
        <div class="container">
          <div class="row">
            <div class="col col-xs-12">
              <div class="story-timeline">
                <?php $a=1 ?>
                    @foreach ($occasion as $occation_list)
                     <?php $a++; ?>
                     @php
                        $myDateTime = DateTime::createFromFormat('Y-m-d', $occation_list->date);
                        $formattedweddingdate = $myDateTime->format('d');
                        $formattedweddingdate1 = $myDateTime->format('M');
                        $time = \Carbon\Carbon::parse($occation_list->time);
                        $result= $time->format('h:i');
                      @endphp 
                        @if ($a%2==0)
                        <div class="row">
                            <div class="col col-md-6 col-12 text-holder right-heart">
                              <span class="heart">
                                <span>  <strong>{{$formattedweddingdate}} {{$formattedweddingdate1}} </strong><br> {{$result}} {{$occation_list->AM_PM}}
                                </span>
                              </span>
                              <div class="story-text right-align-text">
                                <h3>{{$occation_list->name}}</h3>

                               <div class="location_right_section" > <p><i class="fa fa-map-marker location_icons" aria-hidden="true"></i><span> {{$occation_list->location}}</span></p></div>
                                  <p class="description_section" > {!!$occation_list->description!!}</p>
                                  <div class="submit-area">
                                  <a href="https://www.google.com/maps?q={{$occation_list->location}}" target = '_blank' ><button type="submit" class="submit-btn">See location</button></a>
                                  </div>
                              </div>
                            </div>
                            <div class="col col-md-6 col-12 img-right-holder">
                              <div class="img-holder right-align-text">
                                @if (in_array($occation_list->image, $image))
                                <img src="{{ asset('images/'. $occation_list->image)}}" alt="" class="img img-responsive">
                                @else
                                <img src="{{asset('occasion/images/'.$weddings->id.'/'.$occation_list->image)}}" alt="" class="img img-responsive">
                                @endif
                                <!-- <div class="story-shape-img">
                                    <img src="assets/images/story/shape.png" alt="">
                                  </div> -->
                              </div>
                            </div>
                        </div>
                    @else
                    <div class="row">
                    <div class="col col-md-6 col-12 img-left-holder">
                          <div class="img-holder right-align-text left-site">
                            @if (in_array($occation_list->image, $image))
                            <img src="{{ asset('images/'. $occation_list->image)}}" alt="" class="img img-responsive">
                            @else
                            <img src="{{asset('occasion/images/'.$weddings->id.'/'.$occation_list->image)}}" alt="" class="img img-responsive">
                            @endif
                            <!-- <div class="story-shape-img">
                                <img src="assets/images/story/shape.png" alt="">
                              </div> -->
                          </div>
                        </div>
                        <div class="col col-md-6 col-12 text-holder">
                          <span class="heart">
                            <span>  <strong>{{$formattedweddingdate}} {{$formattedweddingdate1}} </strong><br> {{$result}} {{$occation_list->AM_PM}}
                            </span>
                          </span>
                          <div class="story-text">
                            <h3>{{$occation_list->name}}</h3>

                            <div class="location_left_section" ><p> <i class="fa fa-map-marker location_icons" aria-hidden="true"></i><span> {{$occation_list->location}}</span></p></div>
                                  <p class="description_section" > {!!$occation_list->description!!}</p>
                            <div class="submit-area">
                                    <a href="https://www.google.com/maps?q={{$occation_list->location}}" target = '_blank' ><button type="submit" class="submit-btn">See location</button></a>
                                  </div>
                          </div>
                        </div>
                      </div>
                    @endif

                @endforeach

                <div class="row">
                  <div class="col offset-md-6 col-md-6 col-12 text-holder">
                    <span class="heart">
                      <i class="fa fa-heart" aria-hidden="true"></i>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- end row -->
        </div> <!-- end container -->
      </section>
  @endif
  @if(count($grooms) > 0 || count($brides) > 0)
      <section class="sec-3 sec-5">
          <div class="container">
          @if(count($grooms) > 0)
            <div class="save-head">
                <img src="{{asset('frontend/images/sec-title-flower.png')}}">
                <h1>Groom Family Members</h1>

            </div>

            <div class="team-leader">
                <div class="row">
                  @foreach ($grooms as $groom)
                    <div class="col-md-6 col-lg-4 team-main-box">

                        <div class="main-team">
                            <div class=" wpo-testimonials-img"></div>
                            <div class="photos-box">
                              <img src="{{ \App\Utility::groomgetImageUrl($groom->image, $groom->wedding_id)}}">
                            </div>
                        </div>
                        <div class="team-box-text">
                            <h1>{{ucfirst($groom->name)}}</h1>
                            <p>{{ucfirst($groom->relationship)}}</p>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
            @endif
                @if(count($brides) > 0)
            <div class="save-head">
                <img src="{{asset('frontend/images/sec-title-flower.png')}}">
                <h1>Bride Family Members
                </h1>

            </div>

            <div class="team-leader">
                <div class="row">
                  @foreach ($brides as $bride)
                    <div class="col-md-6 col-lg-4 team-main-box">

                        <div class="main-team">
                            <div class=" wpo-testimonials-img"></div>
                            <div class="photos-box">
                              <img src="{{ \App\Utility::bridegetImageUrl($bride->image, $bride->wedding_id)}}">
                            </div>
                        </div>
                        <div class="team-box-text">
                          <h1>{{ucfirst($bride->name)}}</h1>
                          <p>{{ucfirst($bride->relationship)}}</p>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
            @endif
          </div>
      </section>
      @endif

      <div id="myModal" class="modal new-lightbox">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <?php $a=0;?>
            @foreach ($gallery as $gallery_list)
            <?php $a++ ?>
          <div class="mySlides">
            <div class="numbertext">{{$a}}</div>
            <img src="{{asset('gallery/images/'.$weddings->id.'/'.$gallery_list->image)}}" style="width:100%">
          </div>
          @endforeach
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

          <div class="caption-container">
            <p id="caption"></p>
          </div>
        </div>
      </div>
      @if(count($gallery) > 0)
      <section class="sec-6 gallery-sec-main">

            <div class="save-head">
                <img src="{{asset('frontend/images/sec-title-flower.png')}}">
                <h1>Our Wedding Gallery</h1>

            </div>
            <div class="gallery-sec">
                <?php $b=0;?>
                @foreach ($gallery as $gallery_list)
                <?php $b++;?>
                <div class="dh-container">
                    <div class="dh-overlay"><i class="fa fa-plus" aria-hidden="true" ></i></div>
                    <img src="{{asset('gallery/images/'.$weddings->id.'/'.$gallery_list->image)}}" alt="Hiking" onclick="openModal();currentSlide({{$b}})"/>
                </div>
                @endforeach
            </div>
              <div class="lightbox">
                <div class="title"></div>
                <div class="filter"></div>
                <div class="arrowr"></div>
                <div class="arrowl"></div>
                <div class="close"></div>
              </div>
              <div class="submit-area">
                <button type="submit" class="submit-btn" id="see-gall">See More</button>
              </div>
      </section>
      @endif
      @if(count($videos) > 0)
<section class="sec-7">
    <div class="save-head">
        <img src="{{asset('frontend/images/sec-title-flower.png')}}">
        <h1>Video Gallery</h1>

    </div>
    <div class="slider-video">
        <div class="slider">
          @foreach ($videos as $video)
            <div class="slide">
            <iframe width="100%" height="315" src="{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          @endforeach
          </div>
    </div>
</section>
@endif
{{-- <section class="contact-section" id="contact">
    <div class="container">
      <div class="main-form">
      <div class="contact-section-wrapper">
        <div class="contact-form-area">
          <div class="section-title">
            <div class="save-head">
                <img src="{{asset('frontend/images/sec-title-flower.png')}}">
                <h1>Will you attend?
                </h1>

            </div>

          </div>
          <form method="post" class="contact-validation-active" id="contact-form-main" novalidate="novalidate">
            <div>
              <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
            <div>
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div>
              <input type="text" class="form-control" name="adress" id="adress" placeholder="Adress">
            </div>
            <div>
              <select name="service" class="form-control">
                <option disabled="disabled" selected="">Services</option>
                <option>Photography</option>
                <option>The Rehearsal Dinner</option>
                <option>The Afterparty</option>
                <option>Videographers</option>
                <option>Perfect Cake</option>
                <option>All Of The Above</option>
              </select>
            </div>
            <div>
              <select name="guest" class="form-control">
                <option disabled="disabled" selected="">Number Of Guests</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
                <option>05</option>
              </select>
            </div>
            <div>
              <select name="meal" class="form-control last">
                <option disabled="disabled" selected="">Meal Preferences</option>
                <option>Chicken Soup</option>
                <option>Motton Kabab</option>
                <option>Chicken BBQ</option>
                <option>Mix Salad</option>
                <option>Beef Ribs </option>
              </select>
            </div>
            <div>
              <textarea name="" class="form-control" placeholder="Your Message" id="" cols="" rows="15"></textarea>
            </div>
            <div class="submit-area">
              <button type="submit" class="submit-btn">Send An Inquiry</button>
            </div>
          </form>
          <div class="border-style"></div>
        </div>

      </div>
      <div class="vector-1">
        <img src="{{asset('frontend/images/flower-pattern-1.png')}}" alt="" class="flower-pattern1">
        <img src="{{asset('frontend/images/conact-couple.png')}}" alt="">
      </div>
      <div class="vector-2">
        <img src="{{asset('frontend/images/flower-pattern-2.png')}}" alt="">
      </div>
    </div>
    </div>
  </section> --}}

<footer class="footer-sec">
  <!-- <audio loop="" controls=""  autoplay>


 </audio> -->
@if(!empty($weddings->audio))
 <audio controls id="music">
  <source src="{{ \App\Utility::audioImageUrl($weddings->audio)}}" type="audio/mpeg">
</audio>
@else
<audio controls id="music">
    <source src="{{asset('frontend/audio/02-Dilbaro.mp3')}}" type="audio/mpeg">
  </audio>
@endif
    <div class="save-head">
        <img src="{{asset('frontend/images/sec-title-flower.png')}}">
        <h1>Invited By</h1>
    </div>
    <div class="foot-sec">
  <div class="sub-dev-sec container">
      <div class="row align-items-center">
          <div class="col-md-12">
              <div class="footer-box">

                  <!-- <div class="title-box">
                    <div class="double-line double-line-top">
                        <i class="fi flaticon-social"></i>
                        <i class="fi flaticon-social"></i>
                    </div>
                    {{-- <h2>Contact Us</h2> --}}
                    <div class="double-line double-line-bottom"></div>
                </div> -->
                <div class="con-text-main">

                  <div class="con-text">
                    @php
                        $invited_by_name= (explode(",",$weddings->invited_by_name));
                        $invited_by_phone= (explode(",",$weddings->invited_by_phone));
                    @endphp
                    @foreach ($invited_by_name as $item)
                    <h4>
                    {{ucwords($item)}}
                  </h4>
                    @endforeach

                    <p> {{ucwords($weddings->invited_by_address)}}</p>
                  </div>
                  <div class="con-text">

                    <p>Phone no. : {{$weddings->invited_by_phone}}</p>
                  </div>
                </div>

              </div>
          </div>

          <div class="col-md-12">
            <div class="footer-box fb-2">
                <div class="btn-sec">
                    <div class="btn-box">
                      <a href="tel:{{$invited_by_phone[0]}}"><button> <i class="fa fa-phone" aria-hidden="true"></i> Call</button></a>
                    </div>
                    <div class="btn-box">
                        <a href="https://api.whatsapp.com/send?phone={{$weddings->country_code}} {{$invited_by_phone[0]}}"><button> <i class="fa fa-whatsapp" aria-hidden="true"></i>Whatsapp</button></a>
                    </div>
                    <div class="btn-box">
                      <a href="sms:{{$weddings->country_code}} {{$invited_by_phone[0]}}"><button>Message</button></a>
                    </div>
                    <div class="btn-box">
                      <a href="https://www.google.com/maps?q={{$weddings->invited_by_address}}" target = '_blank' ><button>Direction</button></a>
                    </div>
                </div>

            </div>
          </div>
      </div>

<!-- <div class="thank-you-sec">
    <h1>Thank you</h1>
</div> -->

  </div>
</div>
  <div class="copy-rights">
    <p>Copyright 2021, Made with love by Sparkle Infotech</p>
</div>
</footer>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
      <script src="{{asset('frontend/js/counter.js')}}" ></script>
      <script src="{{asset('frontend/js/grid-gallery.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.directional-hover.min.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/jquery.slick/1.5.0/slick.min.js"></script>
      <script type="text/javascript">
          $('.slider').slick({
  autoplay:true,
  autoplaySpeed:4000,
  arrows:false,
  prevArrow:'<button type="button" class="slick-prev"></button>',
  nextArrow:'<button type="button" class="slick-next"></button>',
  pauseOnHover: false,
    pauseOnFocus: false,
    cssEase: 'linear',
  slidesToShow:3,
  slidesToScroll:1,
  responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
          },
        },
      ]
  });

        document.addEventListener("mousemove", parallax);
        function parallax(e){
            this.querySelectorAll('.layer').forEach(layer => {
                const speed = layer.getAttribute('data-speed')

                const x = (window.innerWidth - e.pageX*speed)/400
                const y = (window.innerHeight - e.pageY*speed)/400

                layer.style.transform = `translateX(${x}px) translateY(${y}px)`
            })
        }

        $(window).load(function() {
				$('.dh-container').directionalHover();
			});
		</script>
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();


$('#see-gall').click(function(){
$('.gallery-sec').addClass('act-gall');
$('#see-gall').hide();
});

setTimeout(function(){ 
    $( document ).ready(function() {
    $("#exampleModal").modal("show");
    });
   }, 3400);

    var audio = document.getElementById("music");
    function play() {
        audio.play();
    }
    function stop() {
        audio.pause();
    }
  
    $(".btn-yes").click(function(){
      play();
      $("#exampleModal").modal("hide");
    })
    $(".btn-no").click(function(){
      stop();
      $("#exampleModal").modal("hide");
    })

    setTimeout(function(){
 	$('#loader_wrapper').css('display','none')
}, 3400); 
    </script>
</body>

</html>