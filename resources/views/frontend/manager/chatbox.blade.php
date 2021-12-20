<div class="chat-container">
    <div class="head chat-head">
        <div class="chatprofile">
            <div class="usershortname">UN</div>
        </div>
        <div class="headun chat-headun">
            <h6 class="username-title">Paul Bertrand</h6>
            <ul class="username-menus chatuser-menu">
                <li><a href="javascript:void(0)">Active</a></li>
                <li><a href="javascript:void(0)">Gallery</a></li>
                <li><a href="javascript:void(0)">Find</a></li>
            </ul>
        </div>
    </div>
    <div class="mid chat-mid">
        <div class="fixed-msg-label">
            <label>Aujourd’hui</label>
        </div>

        <ul class="mid-top appendmsg">

            @php $lastid =0; @endphp @foreach ($messagelist as $message)
            @php $lastid = $message->id; @endphp
            @if($message->type == "manager")
            <li class="right">
                <div class="msg-content chatmsg-content ">
                    <span class="time">{{auth()->guard('web')->user()->first_name}} {{auth()->guard('web')->user()->last_name}} , {{Commontimeago::convertDMTime($message->created_at) }}</span>
                    @if($message->message != "")
                    <p>{{$message->message}}
                    </p>
                    @else
                    <p><a target="_blank" href="{{URL::to('/')}}/{{$message->image}}">Opne File</a>
                    </p>
                    @endif
                </div>
                <div class="chatprofile">
                    <img src="{{URL::to('/')}}/{{auth()->user()->profile_photo_path}}" onerror='this.onerror=null;this.src="{{URL::to("/")}}/frontend/images/profile-change.svg";'>
                </div>
            </li>
            @else
            <li class="left">
                <div class="chatprofile">
                    <div class="usershortname chat-username">UN</div>
                </div>
                <div class="msg-content chatmsg-content">
                    <span class="time">{{$message['getUserSenderData']->first_name}} {{$message['getUserSenderData']->last_name}}, {{Commontimeago::convertDMTime($message->created_at) }} </span>
                    @if($message->message != "")
                    <p>{{$message->message}}
                    </p>
                    @else
                    <p><a target="_blank" href="{{URL::to('/')}}/{{$message->image}}">Opne File</a>
                    </p>
                    @endif
                </div>

            </li>
            @endif
            @endforeach

        </ul>


    </div>
    <div>
        <form id="myForm2" name="myForm2" method="POST" enctype="multipart/form-data" onsubmit="return sendmessage({{$id}},{{$reciverid}});">
            @csrf
            <div class="bttom chat-bttom">

                <input type="text" class="form-control form-control-with-border bg-transparent" placeholder="Type a message..." id="chatmessage" name="chatmessage">
                <input type="hidden" name="type" id="type" value='manager'>
                <button id="sendbutton" class="btn"><i class="fa fa-paper-plane"></i> </button>
                <button type="button" class="btn btn-transparent">
                    <img src="{{asset('frontend/images/chat/smile.svg')}}">
                </button>
                <button type="button" class="btn btn-transparent">
                    <img src="{{asset('frontend/images/chat/art.svg')}}">
                </button>
                <input type="file" name="file" style="display: none;" id="msgfile" accept="image/*,application/pdf">
                <button id="OpenImgUpload" onclick="$('#msgfile').trigger('click'); return false;" type="button" class="btn btn-transparent">

                    <img src="{{asset('frontend/images/chat/paper-clip.svg')}}">
                </button>

            </div>
        </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script>
    $('.mid').scrollTop($('.mid')[0].scrollHeight);
    var lastmsgid = '{{$lastid}}';

    function getNemessage() {
      
        $.ajax({
            url: '{{URL::to("/")}}/last-mesage?id={{$id}}&reciverid={{$reciverid}}&lastid=' + lastmsgid,            
            method: "GET",
            success: function(messagelist) {
           
                console.log(messagelist);

                if (lastmsgid < messagelist.id) {
                    var chatmsg = "";
                    var chatfile = "";
                    
                    if (messagelist.type == 'manager') {
                        if (messagelist.messag !== null) {
                          chatmsg = "<li class='right'><div class='msg-content chatmsg-content'><span class='time'>"+ messagelist.get_user_reciver_data.first_name + messagelist.get_user_reciver_data.last_name + "," + moment(messagelist.created_at).format('dd MMM h:mma') + "</span><p>" + messagelist.message + "</p></div><div class='chatprofile'><img src='{{URL::to('/')}}/'" + messagelist.get_user_reciver_data.profile_photo_path +"'></div></li>";
                        } else {
                           chatfile = "<li class='right'><div class='msg-content chatmsg-content '><span class='time'>"+ messagelist.get_user_reciver_data.first_name + messagelist.get_user_reciver_data.last_name +","+ moment(messagelist.created_at).format('dd MMM h:mma') + "</span><p><a target='_blank' href='{{URL::to('/')}}/" + messagelist.image + "'>Opne File</a></p></div><div class='chatprofile'><img src='{{URL::to('/')}}/" + messagelist.get_user_reciver_data.profile_photo_path +"'></div></li>";
                        }
                        $(".appendmsg").append(chatmsg + chatfile);
                    } else {
                        
                        if (messagelist.messag !== null) {
                          chatmsg = "<li class='left'><div class='chatprofile'><img src='{{URL::to('/')}}/'" + messagelist.get_user_sender_data.profile_photo_path +"'></div><div class='msg-content chatmsg-content'><span class='time'>"+ messagelist.get_user_sender_data.first_name + messagelist.get_user_sender_data.last_name + "," + moment(messagelist.created_at).format('dd MMM h:mma') + "</span><p>" + messagelist.message + "</p></div></li>";
                        } else {
                           chatfile = "<li class='left'><div class='chatprofile'><img src='{{URL::to('/')}}/" + messagelist.get_user_sender_data.profile_photo_path +"'></div><div class='msg-content chatmsg-content '><span class='time'>"+ messagelist.get_user_sender_data.first_name + messagelist.get_user_sender_data.last_name +","+ moment(messagelist.created_at).format('dd MMM h:mma') + "</span><p><a target='_blank' href='{{URL::to('/')}}/" + messagelist.image + "'>Opne File</a></p></div></li>";
                        }
              
                        $(".appendmsg").append(chatmsg + chatfile);
                    }
                    $('.mid').scrollTop($('.mid')[0].scrollHeight);
                }
                if (messagelist != "") {
                    lastmsgid = messagelist.id;
                }
                console.log(lastmsgid);
          

            }
           
        });
      
    }

    setInterval(function() {
        getNemessage()
    }, 5000);
</script>