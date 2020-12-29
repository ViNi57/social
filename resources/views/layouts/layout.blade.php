<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('head')
</head>

<body>
    <nav class="nav" >
        <div class="top">
            <div class="itempart">
                <div class="company">
                    <a class="bor" href="{{ route('home') }}"><img style="width:100px;" src="/images/company.png"></a>
                </div>

                <div class="search">
                <form class="fsfaas" id="foooorm" action="{{ route('search') }}" method="post">
                    @csrf
                    <input class="inp" type="text" autocapitalize="none" class="form-controller" id="search" name="search" placeholder="Search" >
                    <input type="submit" form="foooorm" style="display:none;" />
                </form>
                </div>

                <div class="navigate">
                    <div class="icons">
                        <div class="home">
                            <a href="{{ route('home') }}">
                                <svg aria-label="Home" class="h" fill="#262626" height="48" viewBox="0 0 48 48" width="48">
                                        <path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
                                        </svg>
                            </a>
                        </div>
                        <div class="messages">
                            <a  alt="DM">
                                <svg aria-label="DM" class="DM" fill="#262626" height="48" viewBox="0 0 48 48" width="48">
                                    <path d="M17.218,2.268L2.477,8.388C2.13,8.535,2.164,9.05,2.542,9.134L9.33,10.67l1.535,6.787c0.083,0.377,0.602,0.415,0.745,0.065l6.123-14.74C17.866,2.46,17.539,2.134,17.218,2.268 M3.92,8.641l11.772-4.89L9.535,9.909L3.92,8.641z M11.358,16.078l-1.268-5.613l6.157-6.157L11.358,16.078z">
                                    </path>
                                    </svg>
                            </a>
                        </div>

                        <div class="notification">
                            <a  alt="notification">
                                <svg aria-label="notif" class="n" fill="#262626" height="48" viewBox="0 0 48 48" width="48">
                                        <path d="M14.38,3.467l0.232-0.633c0.086-0.226-0.031-0.477-0.264-0.559c-0.229-0.081-0.48,0.033-0.562,0.262l-0.234,0.631C10.695,2.38,7.648,3.89,6.616,6.689l-1.447,3.93l-2.664,1.227c-0.354,0.166-0.337,0.672,0.035,0.805l4.811,1.729c-0.19,1.119,0.445,2.25,1.561,2.65c1.119,0.402,2.341-0.059,2.923-1.039l4.811,1.73c0,0.002,0.002,0.002,0.002,0.002c0.23,0.082,0.484-0.033,0.568-0.262c0.049-0.129,0.029-0.266-0.041-0.377l-1.219-2.586l1.447-3.932C18.435,7.768,17.085,4.676,14.38,3.467 M9.215,16.211c-0.658-0.234-1.054-0.869-1.014-1.523l2.784,0.998C10.588,16.215,9.871,16.447,9.215,16.211 M16.573,10.27l-1.51,4.1c-0.041,0.107-0.037,0.227,0.012,0.33l0.871,1.844l-4.184-1.506l-3.734-1.342l-4.185-1.504l1.864-0.857c0.104-0.049,0.188-0.139,0.229-0.248l1.51-4.098c0.916-2.487,3.708-3.773,6.222-2.868C16.187,5.024,17.489,7.783,16.573,10.27"></path>
                                        </svg>
                            </a>
                        </div>

                        <div class="profile">
                            <a href="{{ route('pv') }}" alt="profile">
                                <svg aria-label="pv" class="n" fill="#262626" height="48" viewBox="0 0 48 48" width="48">
                                    <path d="M12.075,10.812c1.358-0.853,2.242-2.507,2.242-4.037c0-2.181-1.795-4.618-4.198-4.618S5.921,4.594,5.921,6.775c0,1.53,0.884,3.185,2.242,4.037c-3.222,0.865-5.6,3.807-5.6,7.298c0,0.23,0.189,0.42,0.42,0.42h14.273c0.23,0,0.42-0.189,0.42-0.42C17.676,14.619,15.297,11.677,12.075,10.812 M6.761,6.775c0-2.162,1.773-3.778,3.358-3.778s3.359,1.616,3.359,3.778c0,2.162-1.774,3.778-3.359,3.778S6.761,8.937,6.761,6.775 M3.415,17.69c0.218-3.51,3.142-6.297,6.704-6.297c3.562,0,6.486,2.787,6.705,6.297H3.415z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('main')
    <footer class="foot ">
        <nav class="li">
            <ul class="list">
                <li class="K"><a class="RR" href="">About</a></li>
                <li class="K"><a class="RR" href="">Help</a></li>
                <li class="K"><a class="RR" href="">Press</a></li>
                <li class="K"><a class="RR" href="">Privacy</a></li>
                <li class="K"><a class="RR" href="">Terms</a></li>
            </ul>
        </nav>
        <span class="DEVELOPER">RON_VINI</span>
        </div>

    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        ( function($) {
            $(document).ready(function(){
                $('.like').click(function(e){
                    console.log(e);
                    e.preventDefault();
                    var like = e.target.previousElementSibling == null;
                    var postid = e.target.parentNode.dataset['postid'];
                    var data={
                        islike : like,
                        post_id : postid,
                    }
                    axios.post("{{ route('likee') }}",data)
                    .then(response =>{
                        $("[data-postid='" + response['data']['post_id'] +"'] > .active-like").attr('class','hghguj like');
                        e.currentTarget.className='hghguj like active-like'
                    }).catch((error) => {
                    console.log('Not good man :(');
                    })
                    //  location.reload();
                    //  location.reload();
                    //  console.log(e);
                    // $('.ekil').load(' .ekil');
                    // $('.ekilsid').load(' .ekilsid');
                    // $('.ekil').load(' .ekil');
                });
            });
        } )( jQuery ) ;
    </script>
    {{-- <script>

              setTimeout(function(){
                window.location.reload(1);
                    },500000000000000000);
                </script> --}}
</body>
{{-- <script src="http://unpkg.com/turbolinks"></script> --}}
</html>