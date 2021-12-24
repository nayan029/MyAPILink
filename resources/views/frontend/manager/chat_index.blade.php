@extends('frontend.master')
@section('title')
<title>ApiLink | candidate message</title>
@endsection
@section('content')

<section class="pt-5">
    <div class="container">

        <div class="card sr-card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="c-profile-sec">
                            <div class="d-flex align-items-center">
                                <img src="{{URL::to('/')}}/{{auth()->user()->profile_photo_path}}" onerror='this.onerror=null;this.src="{{URL::to("/")}}/frontend/images/profile-change.svg";' alt="candidate-profile" class="c-profimage">
                                <div class="pl-3">
                                    <h5 class="dark-tit">{{auth()->guard('web')->user()->first_name}} {{auth()->guard('web')->user()->last_name}} </h5>
                                    <div class="c-prof-headertext">
                                        <p class="mb-0">Auxiliaire de crèche</p>
                                        <p class="mb-0">
                                            <span><img src="{{asset('frontend/images/map.svg')}}" width="12px"></span> {{auth()->guard('web')->user()->city}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 d-flex align-items-end">
                        <div class="progress-main">
                            <span>Mon profil rempli</span>
                            <div class="profile-progress">
                                <div class="progress">
                                    <div class="progress-bar" style="width:50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                        <span>50%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card sr-card tab-card ">
            <ul class="nav connection-tab edit-line-tab tab-card-ul" id="candidate-message" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="mycandidate-profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="21.963" height="24.333" viewBox="0 0 21.963 24.333">
                            <g id="Icon_feather-user" data-name="Icon feather-user" transform="translate(1.5 1.5)">
                                <path id="Path_3483" class="svg-stroke" data-name="Path 3483" d="M24.963,29.611v-2.37A4.741,4.741,0,0,0,20.222,22.5H10.741A4.741,4.741,0,0,0,6,27.241v2.37" transform="translate(-6 -8.278)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                </path>
                                <path id="Path_3484" class="svg-stroke" data-name="Path 3484" d="M21.482,9.241A4.741,4.741,0,1,1,16.741,4.5,4.741,4.741,0,0,1,21.482,9.241Z" transform="translate(-7.259 -4.5)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3">
                                </path>
                            </g>
                        </svg>Profil professionnel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mycandidate-profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="23.622" height="31" viewBox="0 0 23.622 31">
                            <g id="Group_233" data-name="Group 233" transform="translate(0 0)">
                                <path id="Path_3478" class="paths-svg" data-name="Path 3478" d="M739,703H720.1a.216.216,0,0,0-.052-.031,2.736,2.736,0,0,1-2.31-2.974q0-9.53,0-19.06c0-2.057,0-4.115,0-6.172a2.567,2.567,0,0,1,1.153-2.243A6.9,6.9,0,0,1,720.1,672h13.322a5.363,5.363,0,0,1,.565.435q3.485,3.471,6.962,6.95a1.308,1.308,0,0,1,.41,1c-.009,3.178-.005,6.356-.005,9.534q0,5.145,0,10.291a2.72,2.72,0,0,1-1.813,2.634C739.366,702.9,739.18,702.947,739,703Zm-6.721-29.183H720.642c-.745,0-1.082.341-1.082,1.1q0,12.593,0,25.185c0,.746.342,1.086,1.094,1.086h17.8a.947.947,0,0,0,1.088-1.091q0-9.338,0-18.677v-.333h-.374c-1.393,0-2.785.008-4.178,0a2.688,2.688,0,0,1-2.664-2.27,6.409,6.409,0,0,1-.048-1.025C732.273,676.474,732.276,675.164,732.276,673.816Zm1.818,1.365c0,1.079-.01,2.146,0,3.212a.885.885,0,0,0,.9.869c1.027.009,2.054,0,3.081,0a.257.257,0,0,0,.078-.018Z" transform="translate(-717.742 -672)" fill="#7d7d7d"></path>
                                <path id="Path_3479" class="paths-svg" data-name="Path 3479" d="M791.6,830.98c1.784,0,3.569,0,5.354,0a.91.91,0,1,1-.017,1.816q-2.48,0-4.961,0-2.889,0-5.777,0a.908.908,0,0,1-.909-1.267.923.923,0,0,1,.926-.55C788.014,830.982,789.808,830.98,791.6,830.98Z" transform="translate(-779.763 -818.144)" fill="#7d7d7d"></path>
                                <path id="Path_3480" class="paths-svg" data-name="Path 3480" d="M791.567,875.98c1.795,0,3.589,0,5.384,0a.91.91,0,1,1-.013,1.816q-2.193,0-4.386,0-3.176,0-6.352,0a.908.908,0,0,1-.912-1.265.922.922,0,0,1,.925-.552C788,875.982,789.783,875.98,791.567,875.98Z" transform="translate(-779.76 -859.511)" fill="#7d7d7d"></path>
                                <path id="Path_3481" class="paths-svg" data-name="Path 3481" d="M791.568,920.98c1.795,0,3.589,0,5.384,0a.91.91,0,1,1-.014,1.816q-2.253,0-4.507,0-3.115,0-6.231,0a.908.908,0,0,1-.912-1.265.922.922,0,0,1,.925-.552C788,920.982,789.784,920.98,791.568,920.98Z" transform="translate(-779.76 -900.878)" fill="#7d7d7d"></path>
                                <path id="Path_3482" class="paths-svg" data-name="Path 3482" d="M789.847,965.995q1.738,0,3.477,0a.914.914,0,1,1,.012,1.815q-3.522,0-7.045,0a.913.913,0,1,1-.012-1.815Q788.063,965.992,789.847,965.995Z" transform="translate(-779.823 -942.26)" fill="#7d7d7d"></path>
                            </g>
                        </svg>Dossier de candidature</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mycandidate-profile.html"><svg xmlns="http://www.w3.org/2000/svg" id="Group_1876" class="tab-img1" data-name="Group 1876" width="47" height="47" viewBox="0 0 47 47">
                            <g id="Ellipse_112" data-name="Ellipse 112" fill="#fff" stroke="#7d7d7d" stroke-width="1" class="svg-stroke">
                                <circle cx="23.5" cy="23.5" r="23.5" stroke="none" />
                                <circle cx="23.5" cy="23.5" r="23" fill="none" />
                            </g>
                            <path id="Icon_feather-bookmark" class="svg-stroke" data-name="Icon feather-bookmark" d="M23.969,25.674l-8.234-5.882L7.5,25.674V6.853A2.353,2.353,0,0,1,9.853,4.5H21.616a2.353,2.353,0,0,1,2.353,2.353Z" transform="translate(7.365 8.413)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>Mes candidatures</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mycandidate-profile.html"><svg xmlns="http://www.w3.org/2000/svg" width="31.788" height="31.79" viewBox="0 0 31.788 31.79">
                            <g id="Group_412" data-name="Group 412" transform="translate(-659.637 -659.617)">
                                <path id="Path_3745" class="paths-svg" data-name="Path 3745" d="M691.325,676.314v.494a.294.294,0,0,0-.053.07q-2.4,6.726-4.8,13.454a1.405,1.405,0,0,1-.889.975H660.112a.747.747,0,0,1-.375-.745q.01-9.776,0-19.553c0-.6.158-.758.771-.758H665v-.408q0-4.441,0-8.882a1.1,1.1,0,0,1,1.252-1.244h12.272a1.071,1.071,0,0,1,1.214,1.211c0,.391,0,.781,0,1.172a2.483,2.483,0,0,0,.029.254c.462,0,.9,0,1.343,0,.874,0,1.263.389,1.264,1.256,0,.449,0,.9,0,1.367.481,0,.922,0,1.363,0a1.107,1.107,0,0,1,1.27,1.261c0,1.213,0,2.426,0,3.639v.373h.824c.892,0,1.283.388,1.283,1.273q0,1.82,0,3.639v.349c.964,0,1.888.024,2.81-.008A1.277,1.277,0,0,1,691.325,676.314Zm-30.3,13.932h24.366l4.886-13.684h-.346q-11.843,0-23.685-.005a.4.4,0,0,0-.459.316q-1.833,5.181-3.69,10.354C661.74,688.22,661.387,689.215,661.021,690.246ZM674.642,675.5a4.769,4.769,0,0,1-1.719-3.464,4.645,4.645,0,0,1,1.4-3.59,4.752,4.752,0,0,1,6.077-.46,4.62,4.62,0,0,1,1.96,3.674,4.709,4.709,0,0,1-1.724,3.836h3.29v-9.443H671.347V675.5Zm4.032-14.7h-12.6v14.7h1.565v-.349q0-5.752,0-11.5a2.184,2.184,0,0,1,.028-.46,1.072,1.072,0,0,1,1.2-.828q4.718,0,9.435,0h.371Zm-9.964,2.634v12.062h1.563v-.392q0-4.426,0-8.852a1.112,1.112,0,0,1,1.262-1.266q4.7,0,9.406,0h.371v-1.553Zm-7.86,10.5-.038.014v13.63l.04.007,3.881-10.871c-.582.1-1.087.18-1.591.268a1.128,1.128,0,0,1-1.492-.86Q661.252,675.02,660.851,673.926Zm15.27-1.143c-.779-1.171-.753-2.234.061-3a2.12,2.12,0,0,1,2.714-.167,2.061,2.061,0,0,1,.8,1.274,2.137,2.137,0,0,1-.556,1.888,2.33,2.33,0,0,1,1.09,1.6,3.6,3.6,0,0,0,.205-4.942,3.668,3.668,0,1,0-5.4,4.956A2.419,2.419,0,0,1,676.121,672.783Zm-15.091-1.462c.551,1.519,1.091,3,1.623,4.485.067.186.193.148.322.127.576-.1,1.151-.208,1.729-.286.233-.031.305-.109.3-.345-.012-1.119-.005-2.238-.005-3.357v-.624Zm16.609,4.26c.472-.12.936-.231,1.4-.362a.3.3,0,0,0,.182-.2,1.3,1.3,0,0,0-.541-1.288,1.961,1.961,0,0,0-1.191-.325,1.433,1.433,0,0,0-1.413,1.587.329.329,0,0,0,.187.229C676.705,675.355,677.161,675.461,677.638,675.581Zm8.4-.084v-4.174h-1.009V675.5Zm-8.413-5.242a1.047,1.047,0,0,0-1.041,1.04,1.07,1.07,0,0,0,1.064,1.058,1.053,1.053,0,0,0,1.033-1.081A1.032,1.032,0,0,0,677.627,670.256Z" transform="translate(0)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2">
                                </path>
                                <path id="Path_3746" class="paths-svg" data-name="Path 3746" d="M988.142,814.126h-1.009v-4.174h1.009Z" transform="translate(-302.102 -138.628)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2"></path>
                                <path id="Path_3747" class="paths-svg" data-name="Path 3747" d="M796.122,898.2c-1.172,0-2.343,0-3.515,0a1.586,1.586,0,0,1-1.724-1.726,1.259,1.259,0,0,1,0-.154.911.911,0,0,0-.581-1.109,1.975,1.975,0,0,1-.9-2.391,2.1,2.1,0,0,1,4.074.291,2.073,2.073,0,0,1-1.259,2.27.374.374,0,0,0-.287.447c.017.235,0,.473,0,.709a.541.541,0,0,0,.607.61c.73.007,1.459,0,2.189,0h4.841c.625,0,.773-.15.774-.786a1.136,1.136,0,0,1,0-.123.837.837,0,0,0-.541-1.012,1.986,1.986,0,0,1-.933-2.406,2.1,2.1,0,0,1,4.09.36,2.077,2.077,0,0,1-1.276,2.2.379.379,0,0,0-.291.448,7.255,7.255,0,0,1-.007.863,1.548,1.548,0,0,1-1.6,1.5C798.568,898.2,797.345,898.2,796.122,898.2Zm-4.16-3.881a1,1,0,0,0,.424-1.219,1.053,1.053,0,0,0-1.084-.689,1.066,1.066,0,0,0-.946.945.905.905,0,0,0,.51.94c.052-.6.184-.814.524-.825S791.881,893.67,791.962,894.314Zm9.48-.03a.932.932,0,0,0,.446-1.088,1.062,1.062,0,0,0-1.011-.793,1.087,1.087,0,0,0-1.022.825.934.934,0,0,0,.467,1.055c.082-.609.217-.811.546-.819S801.3,893.629,801.441,894.285Z" transform="translate(-119.554 -213.735)" fill="#7d7d7d" stroke="#707070" stroke-width="0.2"></path>
                            </g>
                        </svg>Portfolio</a>
                </li>

            </ul>

        </div>
    </div>
    <!-- message -->
    <div>
        <div class="message-row res-message-row row pt-5" id="msgdiv">
            <div class="col1">
                <div class="message-left-header profile-left-head1">
                    <div>
                        <h5 class="msg-left-header-name">Ma messagerie</h5>
                        <p class="msg-left-header-email">someone@example.com</p>
                    </div>
                    <div class="btn-d">
                        <button class="btn btn-transparent"><img class="" src="{{asset('frontend/images/chat/menu-dots.svg')}}"></button>
                    </div>
                </div>
                <div class="message-small-search msg-small-search">
                    <div class="message-small-search-one msg-small-search-one">
                        <img class="message-small-icon" src="{{asset('frontend/mages/chat/search.svg')}}">
                        <input class="form-control form-control-with-border bg-transparent message-small-control" type="text" name="" placeholder="Search from here..">
                    </div>
                    <div class="message-small-two">
                        <button class="btn btn-transparent"><img class="message-small-btn-img msg-small-btn-img" src="{{asset('frontend/images/chat/search-filter.svg')}}"> </button>
                    </div>
                </div>
                <div class="chat-dots">
                    <img src="images/chat/blue-dot.svg" alt="">

                </div>
                <ul class="chat-user-small scrollbar-design profile-chat-design">
                    @foreach($chatList as $user)
                   
                    <li class="active">
                        <div class="chatprofile">
                            <div class="usershortname"><img src="{{URL::to('/')}}/{{ ($user->sender_id != auth()->user()->id) ? $user['getUserSenderData']->profile_photo_path : $user['getUserReciverData']->profile_photo_path}}" onerror='this.onerror=null;this.src="{{URL::to("/")}}/frontend/images/profile-change.svg";'></div>
                        </div>
                        <div onclick="msgbox({{$user->job_id}},{{ ($user->sender_id != auth()->user()->id) ? $user->sender_id : $user->reciver_id}});" class="chatprofile-content">
                        <h5>{{($user->sender_id != auth()->user()->id) ? $user['getUserSenderData']->first_name.' '.$user['getUserSenderData']->last_name : $user['getUserReciverData']->first_name .' '.$user['getUserReciverData']->last_name}}</h5>
                            <div class="msg-time">
                                <p>Hi, How are you today?</p>
                                <span>18:41</span>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>

            </div>

            <!--chat-->
            <div class="col2 bg-white" id="messagelist"></div>
            <!--chat-->
        </div>

    </div>
    <!-- end message -->
</section>

</div>
@endsection
@section('script')


<script type="text/javascript ">
    $('document').ready(function() {

        $("#candidate-message a").click(function() {
            $("#msgdiv").hide();
            $("#tabcontentdiv ").show();
        });
    });
</script>
<script>
    function msgbox(id, $reciverId) {

        $.ajax({
            url: '{{URL::to("/")}}/manager-message-list-ajax?id=' + id + '&reciverid=' + $reciverId,
            method: "GET",
            success: function(data) {
                $('#messagelist').html(data);

            }

        });

    }
</script>
<script>
    function sendmessage(id,reciverId) {
      
      var temp = 0;
      var mess = $("#chatmessage").val();
      var bookingfile = $("#msgfile").val();
      var FileExtension = bookingfile.replace(/^.*\./, '');

      if (mess.trim() == '') {
          temp++;
          if (bookingfile != '') {

              var Filesize = $("#msgfile")[0].files[0].size;
              if ($.inArray(FileExtension, ['gif', 'png', 'jpg', 'jpeg', 'bmp', 'jfif', 'pdf', 'PDF']) == -1) {
                  temp++;
              }
              if (Filesize > 10000000) {
                  temp++;

              }

          }
          temp--;

      }

      if (temp == 0) {

          $('#sendbutton').prop('disabled', true);

          var url = '{{URL::to("/")}}/candidate-sendmessage?id=' + id +'&reciverid='+reciverId;
          event.preventDefault();
          $.ajax({
              url: url,
              method: "POST",
              data: new FormData(myForm2),
              _token: '{{ csrf_token() }}',
              dataType: 'JSON',
              contentType: false,
              cache: false,
              processData: false,
              success: function(response) {

                  if (response.success) {
                      $('#chatmessage').val('');
                      $('#msgfile').val('');
                      msgbox(id,reciverId);
                      $('#sendbutton').prop('disabled', false);
                  } else {

                      $('#sendbutton').prop('disabled', false);
                  }

              }

          });

      } else {

          return false;
      }

  }
</script>

@endsection
</body>

</html>