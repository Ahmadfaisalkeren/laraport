<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS Portfolio</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css?v=3.2.0') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css"
        rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <script nonce="76be9157-afb8-43c4-b21f-f459459deeac">
        (function(w, d) {
            ! function(cM, cN, cO, cP) {
                cM.zarazData = cM.zarazData || {};
                cM.zarazData.executed = [];
                cM.zaraz = {
                    deferred: [],
                    listeners: []
                };
                cM.zaraz.q = [];
                cM.zaraz._f = function(cQ) {
                    return function() {
                        var cR = Array.prototype.slice.call(arguments);
                        cM.zaraz.q.push({
                            m: cQ,
                            a: cR
                        })
                    }
                };
                for (const cS of ["track", "set", "debug"]) cM.zaraz[cS] = cM.zaraz._f(cS);
                cM.zaraz.init = () => {
                    var cT = cN.getElementsByTagName(cP)[0],
                        cU = cN.createElement(cP),
                        cV = cN.getElementsByTagName("title")[0];
                    cV && (cM.zarazData.t = cN.getElementsByTagName("title")[0].text);
                    cM.zarazData.x = Math.random();
                    cM.zarazData.w = cM.screen.width;
                    cM.zarazData.h = cM.screen.height;
                    cM.zarazData.j = cM.innerHeight;
                    cM.zarazData.e = cM.innerWidth;
                    cM.zarazData.l = cM.location.href;
                    cM.zarazData.r = cN.referrer;
                    cM.zarazData.k = cM.screen.colorDepth;
                    cM.zarazData.n = cN.characterSet;
                    cM.zarazData.o = (new Date).getTimezoneOffset();
                    if (cM.dataLayer)
                        for (const cZ of Object.entries(Object.entries(dataLayer).reduce(((c_, da) => ({
                                ...c_[1],
                                ...da[1]
                            }))))) zaraz.set(cZ[0], cZ[1], {
                            scope: "page"
                        });
                    cM.zarazData.q = [];
                    for (; cM.zaraz.q.length;) {
                        const db = cM.zaraz.q.shift();
                        cM.zarazData.q.push(db)
                    }
                    cU.defer = !0;
                    for (const dc of [localStorage, sessionStorage]) Object.keys(dc || {}).filter((de => de
                        .startsWith("_zaraz_"))).forEach((dd => {
                        try {
                            cM.zarazData["z_" + dd.slice(7)] = JSON.parse(dc.getItem(dd))
                        } catch {
                            cM.zarazData["z_" + dd.slice(7)] = dc.getItem(dd)
                        }
                    }));
                    cU.referrerPolicy = "origin";
                    cU.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(cM.zarazData)));
                    cT.parentNode.insertBefore(cU, cT)
                };
                ["complete", "interactive"].includes(cN.readyState) ? zaraz.init() : cM.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        @includeIf('layouts.navbar')

        @includeIf('layouts.sidebar')

        <div class="content-wrapper">

            <section class="content">
                @yield('content')
            </section>

        </div>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>


        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>



    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('AdminLTE/dist/js/adminlte.js?v=3.2.0') }}"></script>


    <script src="{{ asset('AdminLTE/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>

    <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>

    <script src="{{ asset('AdminLTE/dist/js/pages/dashboard2.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    {{-- Validator --}}
    <script src="{{ asset('AdminLTE/dist/js/validator.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    {{-- CKEditor --}}
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

    @stack('scripts')
</body>

</html>
