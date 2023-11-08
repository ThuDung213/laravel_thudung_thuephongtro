<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shippori Mincho:wght@800&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work Sans:wght@400;500&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair Display:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Circular Std:wght@400&display=swap" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Abhaya Libre ExtraBold:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto Sans:wght@400;600;700&display=swap" />
    <link rel="stylesheet" href="./common.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    {{-- header --}}
    {{-- <div class="header bg">
        <div class="navbar navbar-expand-lg">
            <div class="">
                Phone: 123-456-7890
                <a href="mailto:info@example.com">Email: info@example.com</a>
            </div>
            <div class="collapse navbar-collapse justify-content-end ms-1">
                <a href="#" target="_blank"><img class="insta-icon" alt="" src="./public/insta.svg" /></a>
                <a href="#" target="_blank"><img class="fb-icon" alt="" src="./public/fb.svg" /></a>
                <a href="#" target="_blank"><img class="twiter-icon" alt="" src="./public/twiter.svg" /></a>
            </div>
        </div>
    </div> --}}
    {{-- navbar --}}
    <div class="container-fluid" style="padding: 0%">
        <nav class="navbar navbar-expand-lg navbar-light bg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./public/logo.png" alt="Logo" width="30" height="30"
                        class="d-inline-block align-text-top me-2">
                    Smile Eye Charity
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{__('homepage.Home')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{__('homepage.About')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{__('homepage.Services')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{__('homepage.Contact')}}</a>
                        </li>
                        <li class="nav-item pl-2 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @if(session()->has('locale'))
                                @switch(session()->get('locale'))
                                @case('vi')
                                <img width="20" height="20" class="flag-icon-vietnam" alt=""
                                    src="./public/flag-of-north-vietnam-19451955-1@2x.png" />
                                Tiếng Việt
                                @break
                                @case('en')
                                <img width="20" height="20" class="flag-icon-english" alt=""
                                    src="./public/download-5@2x.png" />
                                English
                                @break
                                @case('jp')
                                <img width="20" height="20" class="flag-icon-japanese" alt=""
                                    src="./public/download-6@2x.png" />
                                日本語
                                @break
                                @case('fr')
                                <img width="20" height="20" class="flag-icon-french" alt=""
                                    src="./public/download (1).png" />
                                Français
                                @break
                                @default
                                <img width="20" height="20" class="flag-icon-unknown" alt=""
                                    src="/path/to/unknown-flag.png" />
                                Unknown Language
                                @endswitch
                                @else
                                <img width="20" height="20" class="flag-icon-unknown" alt=""
                                    src="/path/to/unknown-flag.png" />
                                Unknown Language
                                @endif
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                                <li><a class="dropdown-item" href="{{ url('/vi') }}"><img
                                            src="./public/flag-of-north-vietnam-19451955-1@2x.png" alt="Flag 1"
                                            width="20" height="20" class="d-inline-block align-text-top me-1">Tiếng
                                        Việt</a></li>
                                <li><a class="dropdown-item" href="{{ url('/en') }}"><img
                                            src="./public/download-5@2x.png" alt="Flag 2" width="20" height="20"
                                            class="d-inline-block align-text-top me-1">English</a></li>
                                <li><a class="dropdown-item" href="{{ url('/jp') }}"><img
                                            src="./public/download-6@2x.png" alt="Flag 3" width="20" height="20"
                                            class="d-inline-block align-text-top me-1">日本語</a></li>
                                <li><a class="dropdown-item" href="{{ url('/fr') }}"><img
                                            src="./public/download (1).png" alt="Flag 4" width="20" height="20"
                                            class="d-inline-block align-text-top me-1">French</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- main-board --}}
    <div class="main-board container">
        <div class="row justify-content-between">
            <div class="col-md-7">
                <iframe class="group-item board-img" width="650" height="400"
                    src="https://www.youtube.com/embed/TKpN7cVX7y8?si=KANkoCAeu7xDvyry" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
            <div class="col-md-4 board-content">
                <h3>{{__('homepage.PROJECT TO SUPPORT BUILDING A LIVESTOCK AND GARDEN MODEL IN CO-TU PEOPLE VILLAGE')}}
                </h3>
                <div class="d-flex justify-content-between">
                    <div class="time">{{__('homepage.Time: 11/2023 - 11/2028')}}</div>
                    <a class="">
                        <img class="pngimg-3-icon" alt="" src="{{ asset('public/pngimg-3@2x.png') }}" width="30"
                            height="30" />
                    </a>
                </div>

                <p>{{__('homepage.Pa Cang Village of Co-Tu residents now receive electricity and water. Many of the
                    families have by habit grown crops and raised livestock for decades...')}}</p>
                <div class="board-file">
                    <a class="icon-link icon-link-hover px-4"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                        href="https://drive.google.com/file/d/1FOtMgIyNB5_v_9YwaIHJsc_rpV9LPJtR/view?usp=sharing">
                        <img class="cab7b7832b72fff018dcb404a62828-icon" alt=""
                            src="{{ asset('public/cab7b7832b72fff018dcb404a6282846-3@2x.png') }}" width="20"
                            height="20" />
                        {{__('homepage.Plan file')}}
                    </a>
                    <a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                        <img class="cfe32d067a-3-icon" alt="" src="{{ asset('public/690cfe32d067a-3@2x.png') }}"
                            width="20" height="20" />
                        {{__('homepage.Pitch file')}}
                    </a>
                </div>
                <div class="pg-bar">
                    <p>{{__('homepage.Progress')}}</p>
                    <img class="chart-icon" alt="" src="{{ asset('public/chart2.svg') }}" width="350" height="6" />
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <div class="d-flex justify-content-left">
                        <img class="icon-2445095-1280-12" alt="" src="{{ asset('public/icon2445095-1280-12@2x.png') }}"
                            width="40" height="40" />
                        <p class="mt-2">700k</p>
                    </div>
                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#myModal"
                        style="color: #fff; background-color: #198754; border-radius: 2.5rem; border: #198754">
                        {{__('homepage.Be a contributor or sponsor')}}
                    </button>
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title text-center" style="text-align: center; color: #198754;">
                                        {{__('homepage.TÀI TRỢ')}}
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">{{__('homepage.Nội
                                                dung')}}</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">{{__('homepage.Tên*')}}</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">{{__('homepage.Mail*')}}</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="col-form-label">{{__('homepage.Số điện
                                                thoại')}}</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                    </form>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="" data-bs-dismiss="modal"
                                        style="color: #fff; background-color: #198754; border-radius: 5px; border: #198754">{{__('homepage.Gửi')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- specific programs --}}
    <div class="program mt-5">
        <h1 class="text-center">{{__('homepage.SPECIFIC PROGRAMS')}}</h1>

        {{-- upcoming program --}}
        <div class="">
            <h2>{{__('homepage.UPCOMING PROGRAMS')}}</h2>
            <div class="overflow-hidden text-left">
                <div class="row gx-5 justify-content-evenly">
                    <div class="col-5 border border-success rounded ">
                        <iframe class="board-img img-fluid" width="500" height="400"
                            src="https://www.youtube.com/embed/96LUDfTQU0o?si=WpcGl3j2oNqv0i2D"
                            title="YouTube video player" frameborder="0" style="height: 300px"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="board-content">
                            <h3>{{__('homepage.Dự Án Phát Triển Làng Pà-Ong')}}</h3>
                            <div class="d-flex justify-content-between">
                                <div class="time">{{__('homepage.Time: 11/2023 - 11/2028')}}</div>
                                <a class="p-4">
                                    <img class="pngimg-3-icon" alt="" src="{{ asset('public/pngimg-3@2x.png') }}"
                                        width="30" height="30" />
                                </a>
                            </div>

                            <p>{{__('homepage.It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. essentially.')}}</p>
                            <div class="board-file">
                                <a class="icon-link icon-link-hover px-4"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                                    <img class="cab7b7832b72fff018dcb404a62828-icon" alt=""
                                        src="{{ asset('public/cab7b7832b72fff018dcb404a6282846-3@2x.png') }}" width="20"
                                        height="20" />
                                    {{__('homepage.Plan file')}}
                                </a>
                                <a class="icon-link icon-link-hover"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                                    <img class="cfe32d067a-3-icon" alt=""
                                        src="{{ asset('public/690cfe32d067a-3@2x.png') }}" width="20" height="20" />
                                    {{__('homepage.Pitch file')}}
                                </a>
                            </div>
                            <div class="pg-bar">
                                <p>{{__('homepage.Progress')}}</p>
                                <img class="chart-icon" alt="" src="{{ asset('public/chart2.svg') }}" width="400"
                                    height="6" />
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="d-flex justify-content-left">
                                    <img class="icon-2445095-1280-12" alt=""
                                        src="{{ asset('public/icon2445095-1280-12@2x.png') }}" width="40" height="40" />
                                    <p class="mt-2">700k</p>
                                </div>
                                <button type="button" class="" data-bs-toggle="modal" data-bs-target="#myModal"
                                    style="color: #fff; background-color: #198754; border-radius: 2.5rem; border: #198754">
                                    {{__('homepage.Be a contributor or sponsor')}}
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-center"
                                                    style="text-align: center; color: #198754;">
                                                    {{__('homepage.TÀI TRỢ')}}
                                                </h4>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="message-text"
                                                            class="col-form-label">{{__('homepage.Nội dung')}}</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for=""
                                                            class="col-form-label">{{__('homepage.Tên*')}}</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for=""
                                                            class="col-form-label">{{__('homepage.Mail*')}}</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="col-form-label">{{__('homepage.Số điện
                                                            thoại')}}</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="" data-bs-dismiss="modal"
                                                    style="color: #fff; background-color: #198754; border-radius: 5px; border: #198754">{{__('homepage.Gửi')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 border border-success rounded ">
                        <iframe class="board-img img-fluid" width="500" height="400"
                            src="https://www.youtube.com/embed/96LUDfTQU0o?si=WpcGl3j2oNqv0i2D"
                            title="YouTube video player" frameborder="0" style="height: 300px"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="board-content">
                            <h3>{{__('homepage.Dự Án Phát Triển Làng Pà-Ong')}}</h3>
                            <div class="d-flex justify-content-between">
                                <div class="time">{{__('homepage.Time: 11/2023 - 11/2028')}}</div>
                                <a class="p-4">
                                    <img class="pngimg-3-icon" alt="" src="{{ asset('public/pngimg-3@2x.png') }}"
                                        width="30" height="30" />
                                </a>
                            </div>

                            <p>{{__('homepage.It has survived not only five centuries, but also the leap into electronic
                                typesetting, remaining when an unknown printer took a galley of type and scrambled it to
                                make a type specimen book. essentially.')}}</p>
                            <div class="board-file">
                                <a class="icon-link icon-link-hover px-4"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                                    <img class="cab7b7832b72fff018dcb404a62828-icon" alt=""
                                        src="{{ asset('public/cab7b7832b72fff018dcb404a6282846-3@2x.png') }}" width="20"
                                        height="20" />
                                    {{__('homepage.Plan file')}}
                                </a>
                                <a class="icon-link icon-link-hover"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                                    <img class="cfe32d067a-3-icon" alt=""
                                        src="{{ asset('public/690cfe32d067a-3@2x.png') }}" width="20" height="20" />
                                    {{__('homepage.Pitch file')}}
                                </a>
                            </div>
                            <div class="pg-bar">
                                <p>{{__('homepage.Progress')}}</p>
                                <img class="chart-icon" alt="" src="{{ asset('public/chart2.svg') }}" width="400"
                                    height="6" />
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="d-flex justify-content-left">
                                    <img class="icon-2445095-1280-12" alt=""
                                        src="{{ asset('public/icon2445095-1280-12@2x.png') }}" width="40" height="40" />
                                    <p class="mt-2">700k</p>
                                </div>
                                <button type="button" class="" data-bs-toggle="modal" data-bs-target="#myModal"
                                    style="color: #fff; background-color: #198754; border-radius: 2.5rem; border: #198754">
                                    {{__('homepage.Be a contributor or sponsor')}}
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-center"
                                                    style="text-align: center; color: #198754;">
                                                    {{__('homepage.TÀI TRỢ')}}
                                                </h4>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="message-text"
                                                            class="col-form-label">{{__('homepage.Nội dung')}}</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for=""
                                                            class="col-form-label">{{__('homepage.Tên*')}}</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for=""
                                                            class="col-form-label">{{__('homepage.Mail*')}}</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="col-form-label">{{__('homepage.Số điện
                                                            thoại')}}</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class=" " data-bs-dismiss="modal"
                                                    style="color: #fff; background-color: #198754; border-radius: 5px; border: #198754">{{__('homepage.Gửi')}}</button>
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
    </div>

    {{-- Blog --}}
    <div class="blog mt-5 justify-content-center">
        <h1 class="text-center">{{__('homepage.NEWS')}}</h1>
        <div class="">
            <div class="card blog-card">
                <input type="radio" name="select" id="tap-1" checked>
                <input type="radio" name="select" id="tap-2">
                <input type="radio" name="select" id="tap-3">
                <input type="checkbox" id="tapImg">
                <div class="sliders">
                    <label for="tap-1" class="tap tap-1"></label>
                    <label for="tap-2" class="tap tap-2"></label>
                    <label for="tap-3" class="tap tap-3"></label>
                </div>
                <div class="inner-part">
                    <label for="tapImg" class="img">
                        <iframe class="img-1" src="https://www.youtube.com/embed/TKpN7cVX7y8?si=KANkoCAeu7xDvyry"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </label>
                    <div class="content content-1">
                        <span>{{__('homepage.Tue, 2023/12/25')}}</span>
                        <div class="title">{{__('homepage.STARTING THE PILOT PROJECT TO BUILD A GARDEN ECONOMIC
                            MODEL')}}</div>
                        <div class="text">{{__('homepage.Ngày thứ tại, Ban lãnh đạo Xã Cà Dy, Đại diện cho cụm dân cư,
                            và Đại diện Smile Eye charity đã họp và thống nhất dự án phát hõ trợ đồng hành thực tế với
                            người dân để phát triển cụm. Mỗi hộ có diện tích vườn trên 500m2. Có điện nước đầy đủ. Hơn
                            nữa bà con có tập quán trồng trọt và chăn nuôi.')}}</div>
                        <button>{{__('homepage.Read more')}}</button>
                    </div>
                </div>
                <div class="inner-part">
                    <label for="tapImg" class="img">
                        <iframe class="img-2" src="https://www.youtube.com/embed/TKpN7cVX7y8?si=KANkoCAeu7xDvyry"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </label>
                    <div class="content content-2">
                        <span>{{__('homepage.Tue, 2023/12/25')}}</span>
                        <div class="title">{{__('homepage.STARTING THE PILOT PROJECT TO BUILD A GARDEN ECONOMIC
                            MODEL')}}</div>
                        <div class="text">{{__('homepage.Ngày thứ tại, Ban lãnh đạo Xã Cà Dy, Đại diện cho cụm dân cư,
                            và Đại diện Smile Eye charity đã họp và thống nhất dự án phát hõ trợ đồng hành thực tế với
                            người dân để phát triển cụm. Mỗi hộ có diện tích vườn trên 500m2. Có điện nước đầy đủ. Hơn
                            nữa bà con có tập quán trồng trọt và chăn nuôi.')}}</div>
                        <button>{{__('homepage.Read more')}}</button>
                    </div>
                </div>
                <div class="inner-part">
                    <label for="tapImg" class="img">
                        <iframe class="img-3" src="https://www.youtube.com/embed/TKpN7cVX7y8?si=KANkoCAeu7xDvyry"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </label>
                    <div class="content content-3">
                        <span>{{__('homepage.Tue, 2023/12/25')}}</span>
                        <div class="title">{{__('homepage.STARTING THE PILOT PROJECT TO BUILD A GARDEN ECONOMIC
                            MODEL')}}</div>
                        <div class="text">{{__('homepage.Ngày thứ tại, Ban lãnh đạo Xã Cà Dy, Đại diện cho cụm dân cư,
                            và Đại diện Smile Eye charity đã họp và thống nhất dự án phát hõ trợ đồng hành thực tế với
                            người dân để phát triển cụm. Mỗi hộ có diện tích vườn trên 500m2. Có điện nước đầy đủ. Hơn
                            nữa bà con có tập quán trồng trọt và chăn nuôi.')}}</div>
                        <button>{{__('homepage.Read more')}}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Contributors --}}

    <!-- Footer -->
    <footer class=" mt-4 text-center text-lg-start bg-footer">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Right -->
            <div>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 link-secondary">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary">{{__('homepage.Company name')}}</i>
                        </h6>
                        <p>
                            {{__('homepage.Here you can use rows and columns to organize your footer content. Lorem
                            ipsum dolor sit amet, consectetur adipisicing elit.')}}
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            {{__('homepage.Products')}}
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">{{__('homepage.Angular')}}</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">{{__('homepage.React')}}</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">{{__('homepage.Vue')}}</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">{{__('homepage.Laravel')}}</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            {{__('homepage.Useful links')}}
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">{{__('homepage.Pricing')}}</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">{{__('homepage.Settings')}}</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">{{__('homepage.Orders')}}</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">{{__('homepage.Help')}}</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">{{__('homepage.Contact')}}</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> {{__('homepage.New York, NY 10012, US')}}</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            {{__('homepage.info@example.com')}}
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> {{__('homepage.+ 01 234 567 88')}}</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> {{__('homepage.+ 01 234 567 89')}}</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>

        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>