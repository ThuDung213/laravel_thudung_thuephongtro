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
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #0d0c0c;
            border: 1px solid #198754;
            /* Thêm border cho mỗi ô */
        }


        th {
            background-color: #f2f2f2;
        }
    </style>
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
                            <a class="nav-link" href="#">{{ __('homepage.Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('homepage.About') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('homepage.Services') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ __('homepage.Contact') }}</a>
                        </li>
                        <li class="nav-item pl-2 dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @if (session()->has('locale'))
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
                                            width="20" height="20"
                                            class="d-inline-block align-text-top me-1">Tiếng
                                        Việt</a></li>
                                <li><a class="dropdown-item" href="{{ url('/en') }}"><img
                                            src="./public/download-5@2x.png" alt="Flag 2" width="20"
                                            height="20" class="d-inline-block align-text-top me-1">English</a></li>
                                <li><a class="dropdown-item" href="{{ url('/jp') }}"><img
                                            src="./public/download-6@2x.png" alt="Flag 3" width="20"
                                            height="20" class="d-inline-block align-text-top me-1">日本語</a></li>
                                <li><a class="dropdown-item" href="{{ url('/fr') }}"><img
                                            src="./public/download (1).png" alt="Flag 4" width="20"
                                            height="20" class="d-inline-block align-text-top me-1">French</a></li>
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
                <h3>{{ __('homepage.PROJECT TO SUPPORT BUILDING A LIVESTOCK AND GARDEN MODEL IN CO-TU PEOPLE VILLAGE') }}
                </h3>
                <div class="d-flex justify-content-between">
                    <div class="time">{{ __('homepage.Time: 11/2023 - 11/2028') }}</div>
                    <a class="">
                        <img class="pngimg-3-icon" alt="" src="{{ asset('public/pngimg-3@2x.png') }}"
                            width="30" height="30" />
                    </a>
                </div>

                <p>{{ __('homepage.Pa Cang Village of Co-Tu residents now receive electricity and water. Many of the
                                                                    families have by habit grown crops and raised livestock for decades...') }}
                </p>
                <div class="board-file">
                    <a class="icon-link icon-link-hover px-4"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);"
                        href="https://drive.google.com/file/d/1FOtMgIyNB5_v_9YwaIHJsc_rpV9LPJtR/view?usp=sharing">
                        <img class="cab7b7832b72fff018dcb404a62828-icon" alt=""
                            src="{{ asset('public/cab7b7832b72fff018dcb404a6282846-3@2x.png') }}" width="20"
                            height="20" />
                        {{ __('homepage.Plan file') }}
                    </a>
                    <a class="icon-link icon-link-hover"
                        style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                        <img class="cfe32d067a-3-icon" alt=""
                            src="{{ asset('public/690cfe32d067a-3@2x.png') }}" width="20" height="20" />
                        {{ __('homepage.Pitch file') }}
                    </a>
                </div>
                <div class="pg-bar">
                    <p>{{ __('homepage.Progress') }}</p>
                    <img class="chart-icon" alt="" src="{{ asset('public/chart2.svg') }}" width="350"
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
                        {{ __('homepage.Be a contributor or sponsor') }}
                    </button>
                    <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title text-center" style="text-align: center; color: #198754;">
                                        {{ __('homepage.TÀI TRỢ') }}
                                    </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="message-text"
                                                class="col-form-label">{{ __('homepage.Nội
                                                                                                                                                                                                dung') }}</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for=""
                                                class="col-form-label">{{ __('homepage.Tên*') }}</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for=""
                                                class="col-form-label">{{ __('homepage.Mail*') }}</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for=""
                                                class="col-form-label">{{ __('homepage.Số điện
                                                                                                                                                                                                thoại') }}</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                    </form>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="" data-bs-dismiss="modal"
                                        style="color: #fff; background-color: #198754; border-radius: 5px; border: #198754">{{ __('homepage.Gửi') }}</button>
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
        <h1 class="text-center">{{ __('homepage.SPECIFIC PROGRAMS') }}</h1>

        {{-- upcoming program --}}
        <div class="">
            <h2>{{ __('homepage.UPCOMING PROGRAMS') }}</h2>
            <div class="overflow-hidden text-left">
                <div class="row gx-5 justify-content-evenly">
                    <div class="col-5 border border-success rounded ">
                        <iframe class="board-img img-fluid" width="500" height="400"
                            src="https://www.youtube.com/embed/96LUDfTQU0o?si=WpcGl3j2oNqv0i2D"
                            title="YouTube video player" frameborder="0" style="height: 300px"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                        <div class="board-content">
                            <h3>{{ __('homepage.Dự Án Phát Triển Làng Pà-Ong') }}</h3>
                            <div class="d-flex justify-content-between">
                                <div class="time">{{ __('homepage.Time: 11/2023 - 11/2028') }}</div>
                                <a class="p-4">
                                    <img class="pngimg-3-icon" alt=""
                                        src="{{ asset('public/pngimg-3@2x.png') }}" width="30" height="30" />
                                </a>
                            </div>

                            <p>{{ __('homepage.It has survived not only five centuries, but also the leap into electronic
                                                                                                                    typesetting, remaining when an unknown printer took a galley of type and scrambled it to
                                                                                                                    make a type specimen book. essentially.') }}
                            </p>
                            <div class="board-file">
                                <a class="icon-link icon-link-hover px-4"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                                    <img class="cab7b7832b72fff018dcb404a62828-icon" alt=""
                                        src="{{ asset('public/cab7b7832b72fff018dcb404a6282846-3@2x.png') }}"
                                        width="20" height="20" />
                                    {{ __('homepage.Plan file') }}
                                </a>
                                <a class="icon-link icon-link-hover"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                                    <img class="cfe32d067a-3-icon" alt=""
                                        src="{{ asset('public/690cfe32d067a-3@2x.png') }}" width="20"
                                        height="20" />
                                    {{ __('homepage.Pitch file') }}
                                </a>
                            </div>
                            <div class="pg-bar">
                                <p>{{ __('homepage.Progress') }}</p>
                                <img class="chart-icon" alt="" src="{{ asset('public/chart2.svg') }}"
                                    width="400" height="6" />
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="d-flex justify-content-left">
                                    <img id="myImage" class="icon-2445095-1280-12" alt=""
                                        src="./public/icon2445095-1280-12@2x.png" width="40" height="40"
                                        onclick="increaseValue()" />
                                    <p id="myValue" class="mt-2">700</p>
                                </div>

                                <script>
                                    function increaseValue() {
                                        var valueElement = document.getElementById("myValue");
                                        var currentValue = parseInt(valueElement.innerHTML);
                                        valueElement.innerHTML = currentValue + 1;
                                    }
                                </script>
                                <button type="button" class="" data-bs-toggle="modal"
                                    data-bs-target="#myModal"
                                    style="color: #fff; background-color: #198754; border-radius: 2.5rem; border: #198754">
                                    {{ __('homepage.Be a contributor or sponsor') }}
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title text-center"
                                                    style="text-align: center; color: #198754;">
                                                    {{ __('homepage.TÀI TRỢ') }}
                                                </h4>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal"></button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label for="message-text"
                                                            class="col-form-label">{{ __('homepage.Nội dung') }}</label>
                                                        <textarea class="form-control" id="message-text"></textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for=""
                                                            class="col-form-label">{{ __('homepage.Tên*') }}</label>
                                                        <input type="text" class="form-control"
                                                            id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for=""
                                                            class="col-form-label">{{ __('homepage.Mail*') }}</label>
                                                        <input type="text" class="form-control"
                                                            id="recipient-name">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for=""
                                                            class="col-form-label">{{ __('homepage.Số điện
                                                                                                                                                                                                                                                thoại') }}</label>
                                                        <input type="text" class="form-control"
                                                            id="recipient-name">
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="" data-bs-dismiss="modal"
                                                    style="color: #fff; background-color: #198754; border-radius: 5px; border: #198754">{{ __('homepage.Gửi') }}</button>
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
                            <h3>{{ __('homepage.Dự Án Phát Triển Làng Pà-Ong') }}</h3>
                            <div class="d-flex justify-content-between">
                                <div class="time">{{ __('homepage.Time: 11/2023 - 11/2028') }}</div>
                                <a class="p-4">
                                    <img class="pngimg-3-icon" alt=""
                                        src="{{ asset('public/pngimg-3@2x.png') }}" width="30" height="30" />
                                </a>
                            </div>

                            <p>{{ __('homepage.It has survived not only five centuries, but also the leap into electronic
                                                                                                                    typesetting, remaining when an unknown printer took a galley of type and scrambled it to
                                                                                                                    make a type specimen book. essentially.') }}
                            </p>
                            <div class="board-file">
                                <a class="icon-link icon-link-hover px-4"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                                    <img class="cab7b7832b72fff018dcb404a62828-icon" alt=""
                                        src="{{ asset('public/cab7b7832b72fff018dcb404a6282846-3@2x.png') }}"
                                        width="20" height="20" />
                                    {{ __('homepage.Plan file') }}
                                </a>
                                <a class="icon-link icon-link-hover"
                                    style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);">
                                    <img class="cfe32d067a-3-icon" alt=""
                                        src="{{ asset('public/690cfe32d067a-3@2x.png') }}" width="20"
                                        height="20" />
                                    {{ __('homepage.Pitch file') }}
                                </a>
                            </div>
                            <div class="pg-bar">
                                <p>{{ __('homepage.Progress') }}</p>
                                <img class="chart-icon" alt="" src="{{ asset('public/chart2.svg') }}"
                                    width="400" height="6" />
                            </div>
                            <div class="d-flex justify-content-between mt-4">
                                <div class="d-flex justify-content-left">
                                    <img id="myImage" class="icon-2445095-1280-12" alt=""
                                        src="./public/icon2445095-1280-12@2x.png" width="40" height="40"
                                        onclick="increaseValue()" />
                                    <p id="myValue" class="mt-2">700</p>
                                </div>

                                <script>
                                    function increaseValue() {
                                        var valueElement = document.getElementById("myValue");
                                        var currentValue = parseInt(valueElement.innerHTML);
                                        valueElement.innerHTML = currentValue + 1;
                                    }
                                </script>
                            </div>

                            <script>
                                function increaseValue() {
                                    var valueElement = document.getElementById("myValue");
                                    var currentValue = parseInt(valueElement.innerHTML);
                                    valueElement.innerHTML = currentValue + 1;
                                }
                            </script>
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#myModal"
                                style="color: #fff; background-color: #198754; border-radius: 2.5rem; border: #198754">
                                {{ __('homepage.Be a contributor or sponsor') }}
                            </button>
                            <!-- The Modal -->
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title text-center"
                                                style="text-align: center; color: #198754;">
                                                {{ __('homepage.TÀI TRỢ') }}
                                            </h4>
                                            <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"></button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="message-text"
                                                        class="col-form-label">{{ __('homepage.Nội
                                                                                                                                                                                                                                dung') }}</label>
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for=""
                                                        class="col-form-label">{{ __('homepage.Tên*') }}</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for=""
                                                        class="col-form-label">{{ __('homepage.Mail*') }}</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for=""
                                                        class="col-form-label">{{ __('homepage.Số điện
                                                                                                                                                                                                                                thoại') }}</label>
                                                    <input type="text" class="form-control" id="recipient-name">
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class=" " data-bs-dismiss="modal"
                                                style="color: #fff; background-color: #198754; border-radius: 5px; border: #198754">{{ __('homepage.Gửi') }}</button>
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
        <h1 class="text-center">{{ __('homepage.NEWS') }}</h1>
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
                        <span>Tue, 2023/12/25'</span>
                        <div class="title">STARTING THE PILOT PROJECT TO BUILD A GARDEN ECONOMIC
                            MODEL</div>
                        <div class="text">
                            {{ __('homepage.Ngày thứ tại, Ban lãnh đạo Xã Cà Dy, Đại diện cho cụm dân cư,
                                                                                                                và Đại diện Smile Eye charity đã họp và thống nhất dự án phát hõ trợ đồng hành thực tế với
                                                                                                                người dân để phát triển cụm. Mỗi hộ có diện tích vườn trên 500m2. Có điện nước đầy đủ. Hơn
                                                                                                                nữa bà con có tập quán trồng trọt và chăn nuôi.') }}
                        </div>
                        <button>{{ __('homepage.Read more') }}</button>
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
                        <span>{{ __('homepage.Tue, 2023/12/25') }}</span>
                        <div class="title">
                            {{ __('homepage.STARTING THE PILOT PROJECT TO BUILD A GARDEN ECONOMIC
                                                                                                                MODEL') }}
                        </div>
                        <div class="text">
                            {{ __('homepage.Ngày thứ tại, Ban lãnh đạo Xã Cà Dy, Đại diện cho cụm dân cư,
                                                                                                                và Đại diện Smile Eye charity đã họp và thống nhất dự án phát hõ trợ đồng hành thực tế với
                                                                                                                người dân để phát triển cụm. Mỗi hộ có diện tích vườn trên 500m2. Có điện nước đầy đủ. Hơn
                                                                                                                nữa bà con có tập quán trồng trọt và chăn nuôi.') }}
                        </div>
                        <button>{{ __('homepage.Read more') }}</button>
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
                        <span>{{ __('homepage.Tue, 2023/12/25') }}</span>
                        <div class="title">
                            {{ __('homepage.STARTING THE PILOT PROJECT TO BUILD A GARDEN ECONOMIC
                                                                                                                MODEL') }}
                        </div>
                        <div class="text">
                            {{ __('homepage.Ngày thứ tại, Ban lãnh đạo Xã Cà Dy, Đại diện cho cụm dân cư,
                                                                                                                và Đại diện Smile Eye charity đã họp và thống nhất dự án phát hõ trợ đồng hành thực tế với
                                                                                                                người dân để phát triển cụm. Mỗi hộ có diện tích vườn trên 500m2. Có điện nước đầy đủ. Hơn
                                                                                                                nữa bà con có tập quán trồng trọt và chăn nuôi.') }}
                        </div>
                        <button>{{ __('homepage.Read more') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Contributors --}}
    <div class="contributors">
        <h1 class="text-center">CONTRIBUTORS</h1>
        <div class="infos section" id="infos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="left-image">
                                        <img src="{{ asset('public/contributor.jpg') }}" alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="section-heading">
                                        <h2>
                                            Đinh Thị Đông Phương
                                        </h2>
                                        <span><em>PHD. chuyên ngành công nghệ thông tin, Nhật Bản</em></span><br>
                                        <span><em>BA chuyên ngành sư phạm toán tin, tâm lý, giáo dục</em></span>
                                        <div class="line-dec mt-3"></div>
                                        <p>
                                            Tôi được sinh ra và lớn lên ở 1 vùng quê tỉnh Quảng Nam. Tuổi thơ của tôi đầy ắp
                                            những trải nghiệm với tự nhiên và đầy tình yêu thương. Tôi và đám bạn trẻ con
                                            chơi đủ thứ trò, nào là trốn tìm, bắn trổng, bắn bi, chơi kèn lá, chơi ô quan,
                                            nhảy dây, đan lờ bắt cá bắt cua, leo cây hái trái, vào hang bắt dơi, etc. Bố tôi
                                            là giáo viên nhưng ông cũng là nông dân rất giỏi. Ngoài giờ làm việc, ông làm đủ
                                            thứ. Vỡ đất trồng lúa, chăn nuôi, nấu rượu, làm bún, làm mì, cắt tóc, sửa xe,
                                            làm nhà, etc. Mẹ tôi cũng là giáo viên, và bà cũng làm đủ thứ ngoài giờ. Bà làm
                                            thuốc nam, dạy thêm, buôn bán, etc. Bố mẹ tôi luôn hỗ trơ nhau khi làm việc. Tôi
                                            theo chân bố, chân mẹ trong hầu hết các công việc của ông bà nên tôi được trải
                                            nghiệm và học hỏi rất nhiều điều thú vị...
                                        </p>
                                        <a class='mt-3' href="#"><i class="bi bi-book"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section" id="section_523525734">
        <div class="bg section-bg fill bg-fill bg-loaded">





        </div>



        <div class="section-content relative">

            <div class="container section-title-container">
                <h1 class="section-title section-title-center"><b></b><span class="section-title-main"
                        style="font-size:150%;color:rgb(0, 0, 0);">Q&amp;A</span><b></b></h1>
            </div>
            <span class="scroll-to" data-label="Scroll to: #qas" data-bullet="false" data-link="#qas"
                data-title="QAs"><a name="qas"></a></span>
            <div class="row" id="row-303443696">

                <div id="col-375192784" class="col small-12 large-12">
                    <div class="col-inner">


                        <div id="text-1357899619" class="text hide-for-small">

                            <table>
                                <tbody>
                                    <tr>
                                        <td><span style="color: #000000;"><strong>1.</strong></span></td>
                                        <td><span style="color: #000000;"><b>Q.&nbsp;</b></span> <span
                                                style="font-weight: 400; color: #000000;">Nếu chúng ta phát triển
                                                được một ngôi làng, thì chúng ta cũng cũng sẽ tìm ra cách phát triển
                                                những ngôi làng khác. Do vậy tôi thấy rất thú vị và muốn hiểu hơn về
                                                các chương trình cụ thể của dự án, từ đó tôi có thể sắp xếp để tham
                                                gia một vài chương trình nào đó.</span></td>
                                        <td><span style="color: #000000;"><strong>A.</strong></span> <span
                                                style="font-weight: 400; color: #000000;">Cảm ơn bạn.</span> <span
                                                style="font-weight: 400; color: #000000;">Đúng vậy, dự án có nhiều
                                                chương trình. Về cơ bản đó là các chương trình đào tạo bằng làm và
                                                học thực tế:</span>
                                            <p></p>
                                            <ul>
                                                <li style="font-weight: 400;" aria-level="1"><span
                                                        style="font-weight: 400; color: #000000;">Phát triển nông
                                                        nghiệp bền vững, bảo vệ môi trường</span></li>
                                                <li style="font-weight: 400;" aria-level="1"><span
                                                        style="font-weight: 400; color: #000000;">Phát triển kỹ năng
                                                        sống cho trẻ em</span></li>
                                                <li style="font-weight: 400;" aria-level="1"><span
                                                        style="font-weight: 400; color: #000000;">Nâng cao kỹ năng
                                                        làm nghề, làm sản phẩm, dịch vụ</span></li>
                                                <li style="font-weight: 400;" aria-level="1"><span
                                                        style="font-weight: 400; color: #000000;">Phát triển kỹ năng
                                                        làm kinh doanh</span></li>
                                                <li style="font-weight: 400;" aria-level="1"><span
                                                        style="font-weight: 400; color: #000000;">Phát triển kỹ năng
                                                        giao tiếp và ngoại ngữ</span></li>
                                            </ul>
                                            <p><span style="color: #000000;"><span style="font-weight: 400;">Hãy gọi
                                                        0962 414 125 hoặc email </span><a style="color: #000000;"
                                                        href="mailto:dinhdongphuong@gmail.com"><span
                                                            style="font-weight: 400;">dinhdongphuong@gmail.com</span></a><span
                                                        style="font-weight: 400;"> để bạn nắm rõ&nbsp; và đăng ký
                                                        tham gia bạn nhé.&nbsp;</span></span></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;"><span
                                                style="color: #000000;"><strong>2.</strong></span></td>
                                        <td><span style="color: #000000;"><b>Q.&nbsp;</b></span> <span
                                                style="font-weight: 400; color: #000000;">Nếu tôi tham gia, thì tôi
                                                sẽ ở đâu, và ăn uống thế nào?</span></td>
                                        <td><span style="color: #000000;"><b>A.</b></span> <span
                                                style="font-weight: 400; color: #000000;">Tùy vào chương trình cụ
                                                thể. Nếu chương trình yêu cầu tham gia đào tạo thực tế tại ngôi làm
                                                thì chúng ta sẽ ở lại trong làng. Ban tổ chức sẽ sắp xếp cho
                                                bạn.&nbsp;</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="text-align: center;"><span
                                                    style="color: #000000;"><strong>3.</strong></span></p>
                                        </td>
                                        <td><span style="color: #000000;"><b>Q.&nbsp;</b></span> <span
                                                style="font-weight: 400; color: #000000;">Tôi muốn đóng góp một số ý
                                                kiến cho dự án. Tôi liên lạc với ai?</span></td>
                                        <td><span style="color: #000000;"><b>A.</b></span> <span
                                                style="color: #000000;"><span style="font-weight: 400;">Cảm ơn&nbsp;
                                                    những ý kiến đóng góp chân thành của bạn. Bạn gọi 0962 414 125
                                                    hoặc email </span><a style="color: #000000;"
                                                    href="mailto:dinhdongphuong@gmail.com"><span
                                                        style="font-weight: 400;">dinhdongphuong@gmail.com</span></a><span
                                                    style="font-weight: 400;"> cho Phương nhé.</span></span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="text-align: center;"><span
                                                    style="color: #000000;"><b>4.</b></span></p>
                                        </td>
                                        <td><span style="color: #000000;"><b>Q.&nbsp;</b></span> <span
                                                style="font-weight: 400; color: #000000;">Tôi muốn đứng ra vận động
                                                quyên góp cho dự án. Tôi liên lạc ai?</span></td>
                                        <td><span style="color: #000000;"><b>A.</b></span> <span
                                                style="color: #000000;"><span style="font-weight: 400;">Cảm ơn sự hỗ
                                                    trợ và cộng tác chân thành của bạn. Bạn gọi 0962 414 125 hoặc
                                                    email </span><a style="color: #000000;"
                                                    href="mailto:dinhdongphuong@gmail.com"><span
                                                        style="font-weight: 400;">dinhdongphuong@gmail.com</span></a><span
                                                    style="font-weight: 400;"> cho Phương để nắm rõ hơn về dự án
                                                    nhé.&nbsp;</span></span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p style="text-align: center;"><span
                                                    style="color: #000000;"><b>5.</b></span></p>
                                        </td>
                                        <td><span style="color: #000000;"><b>Q.&nbsp;</b></span> <span
                                                style="font-weight: 400; color: #000000;">Dự án có nhận sự tài trợ
                                                bằng tiền không?&nbsp;</span></td>
                                        <td>
                                            <p><span style="color: #000000;"><b>A.</b></span> <span
                                                    style="font-weight: 400; color: #000000;">Mỗi chương trình của
                                                    dự án có nội dung chi tiết được đăng ở website. Nếu là chương
                                                    trình cần sự hỗ trợ về tài chính, bạn hỗ trợ bằng cách chuyển
                                                    khoản đến tài khoản của chức Smile Eye Charity. </span></p>
                                            <p><span style="font-weight: 400; color: #000000;">Số tài khoản:</span>
                                            </p>
                                            <ul>
                                                <li><span style="color: #000000;">MB bank, 020166669999, Smile Eye
                                                        Charity</span></li>
                                                <li><span style="color: #000000;">Techcombank, 22296699, Smile Eye
                                                        Charity</span></li>
                                            </ul>
                                            <p><span style="font-weight: 400; color: #000000;">Chúng tôi sẽ liên lạc
                                                    lại cho bạn ngay sau khi xác nhận sự hỗ trợ của
                                                    bạn.&nbsp;</span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>



                            <style>
                                #text-2271907822 {
                                    color: rgb(0, 0, 0);
                                }

                                #text-2271907822>* {
                                    color: rgb(0, 0, 0);
                                }
                            </style>
                        </div>

                    </div>
                </div>


            </div>
        </div>


        <style>
            #section_523525734 {
                padding-top: 30px;
                padding-bottom: 30px;
            }

            #section_523525734 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
            }

            #section_523525734 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
            }
        </style>

    </section>
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
                            <i class="fas fa-gem me-3 text-secondary"></i>Smile Eye Charity
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            THÔNG TIN CÔNG TY
                        </h6>
                        <p>
                            Tên Công Ty: CTY phi lợi nhuận hoạt động từ thiện
                            Smile Eye Charity (viết tắt là Smile Eye Charity)
                        </p>
                        <p>
                            Mã số Thuế: 4001273487
                        </p>
                        <p>
                            Số tài khoản: MB bank, 020166669999, Smile Eye Charitys
                        </p>
                        <p>
                            Techcombank, 22296699, Smile Eye Charity
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            GIỜ LÀM VIỆC
                        </h6>
                        <p>
                            Từ thứ 2 đến thứ 7: 8h30-17h30
                        </p>
                        <p>
                            Hỗ trợ: 24/7
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">CONTACT</h6>
                        <p>
                            Hotline: 0962 414 125
                        </p>
                        <p> Email: dinhdongphuong@gmail.com
                        </p>
                        <p>Địa Chỉ: Thôn Pà-Ong, Xã Cà Dy, Huyện Nam Giang, Quảng Nam</p>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/"> Smile Eye Charity</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>

</html>
