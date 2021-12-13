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

        <ul class="appendmsg">
            @php $lastid =0; @endphp @foreach ($messagelist as $message)
            @php $lastid = $message->id; @endphp
            @if($message->type == "user")
            <li class="right">
                <div class="msg-content chatmsg-content ">
                    <span class="time">{{auth()->guard('web')->user()->first_name}} {{auth()->guard('web')->user()->last_name}} , 16:40</span>
                    <p>{{$message->message}}
                    </p>
                </div>
                <div class="chatprofile">
                    <img src="{{asset('frontend/images/chat/chat-user.svg')}}">
                </div>
            </li>
            @else
            <li class="left">
                <div class="chatprofile">
                    <div class="usershortname chat-username">UN</div>
                </div>
                <div class="msg-content chatmsg-content">
                    <span class="time">User, 16:40</span>
                    <p>{{$message->message}}</p>
                </div>

            </li>
            @endif
            @endforeach
        </ul>


    </div>
    <div>
        <form id="myForm2" name="myForm2" method="POST" enctype="multipart/form-data" onsubmit="return sendmessage(1);">
            @csrf
            <div class="bttom chat-bttom">

                <input type="text" class="form-control form-control-with-border bg-transparent" placeholder="Type a message..." id="chatmessage" name="chatmessage">
                <input type="hidden" name="type" id="type" value='user'>
                <button id="sendbutton" class="btn"><i class="fa fa-paper-plane"></i> </button>
                <button type="button" class="btn btn-transparent">
                    <img src="{{asset('frontend/images/chat/smile.svg')}}">
                </button>
                <button type="button" class="btn btn-transparent">
                    <img src="{{asset('frontend/images/chat/art.svg')}}">
                </button>
                <button type="button" class="btn btn-transparent">
                    <input type="file" name="file" id="msgfile" accept="image/*,application/pdf">
                    <img src="{{asset('frontend/images/chat/paper-clip.svg')}}">
                </button>

            </div>
        </form>
    </div>
</div>