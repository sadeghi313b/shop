<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    @include('admin-panel.layouts.head-tag')
    @yield('head-tag') 
</head>

<body>
    <!--. ------------------------------- header -------------------------------- -->
    @include('admin-panel.layouts.header')

    <section class="body-container">
        <!--. --------------------------- sidebar ------------------------------- -->
        @include('admin-panel.layouts.sidebar')

        <!--. --------------------------- main ---------------------------------- -->
        <main class="main">
            @yield('content')
        </main>
    </section>

    <!--. ------------------------------- footer -------------------------------- -->
    @include('admin-panel.layouts.footer')

    <!--. ---------------------------- scripts ----------------------------- -->
    @include('admin-panel.layouts.scripts')
    @yield('script')
</body>
</html>
