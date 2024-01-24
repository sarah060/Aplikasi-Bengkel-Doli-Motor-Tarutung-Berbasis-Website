<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
<meta name="author" content="Spruko Technologies Private Limited">
<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico">
<title>@yield('title')</title>
@include('admin.layouts.head')
</head>

<body class="app sidebar-mini ltr light-mode">
    <div id="layout-wrapper">
        @include('admin.layouts.header')
        <div>
            <div class="main-content app-content mt-0">
                <div class="side-app">
                    <div class="main-container container-fluid">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footer')
    </div>
    @include('admin.layouts.js')
</body>

</html>
