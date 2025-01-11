<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('common.link')
</head>

<body>
    @include('admin.common.header')
    <div class="row" style="height: 90vh">
        {{-- Side bar section --}}
        <div class="side_bar_section col-2  position-fieed ">
            <div class="d-flex flex-column align-items-center h-100">
                <div class="flex-fill text-center">
                </div>
                <div class="flex-fill side_bar_item">
                    <a href="" class="text_light text-decoration-none fs-5"><i
                            class="fa-solid fa-house me-2"></i>Courses</a>
                </div>
                <div class="flex-fill side_bar_item">
                    <a href="" class="text_light text-decoration-none fs-5"><i
                            class="fa-solid fa-list me-2"></i>Degrees</a>
                </div>
                <div class="flex-fill side_bar_item">
                    <a href="" class="text_light text-decoration-none fs-5"><i
                            class="fa-solid fa-users me-2"></i>Students</a>
                </div>
                <div class="flex-fill side_bar_item">
                    <a href="" class="text_light text-decoration-none fs-5"><i
                            class="fa-solid fa-users me-2"></i>Lectures</a>
                </div>
                <div class="flex-fill side_bar_item">
                    <a href="" class="text_light text-decoration-none fs-5"><i
                            class="fa-solid fa-calendar-days me-2"></i>Shedules</a>
                </div>
            </div>
        </div>
        {{-- Main Section --}}
        <div class="main_section col-10">
            @yield('main_section')
        </div>
    </div>
</body>

</html>
