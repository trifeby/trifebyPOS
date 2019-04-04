    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <meta name="twitter:site" content="@metroui">
        <meta name="twitter:creator" content="@pimenov_sergey">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="Metro 4 Components Library">
        <meta name="twitter:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
        <meta name="twitter:image" content="https://metroui.org.ua/images/m4-logo-social.png">

        <meta property="og:url" content="https://metroui.org.ua/v4/index.html">
        <meta property="og:title" content="Metro 4 Components Library">
        <meta property="og:description" content="Metro 4 is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.">
        <meta property="og:type" content="website">
        <meta property="og:image" content="https://metroui.org.ua/images/m4-logo-social.png">
        <meta property="og:image:secure_url" content="https://metroui.org.ua/images/m4-logo-social.png">
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="968">
        <meta property="og:image:height" content="504">

        <meta name="author" content="Sergey Pimenov">
        <meta name="description" content="The most popular HTML, CSS, and JS library in Metro style.">
        <meta name="keywords" content="HTML, CSS, JS, Metro, CSS3, Javascript, HTML5, UI, Library, Web, Development, Framework">

        <link rel="shortcut icon" href="metromini/docs/favicon.ico" type="image/x-icon">
        <link rel="icon" href="metromini/docs/favicon.ico" type="image/x-icon">

        <link href="metromini/docs/metro/css/metro-all.css?ver=@@b-version" rel="stylesheet">
        <link href="metromini/docs/start/start.css" rel="stylesheet">

        <title>POS SMK 10</title>
        <style type="text/css">
        .a-color{
            background-color: #33691e;
        }
    </style>
    </head>
    <body class="a-color fg-white h-vh-100 m4-cloak">

        <div class="container-fluid start-screen h-100">
            <h2 class="start-screen-title"><a href="{{url('home')}}"><span class="mif-arrow-left icon"></span></a>&nbsp;Main Menu</h2>

            <div class="container tiles-area clear">
                <div class="tiles-grid tiles-group size-2 fg-white">
                   
                  
                </div>

       
                     <div class="tiles-grid" style="
        width:100px;height:100px;
        background-repeat:no-repeat;
        background-position:center center;">
   
                     
              @if(Auth::user()->akses == "Admin")
               <div data-role="tile" data-size="large" style="grid-column-start: 2; grid-row: 2" class="bg-green tile-large" data-role-tile="true">
                        <a href="{{route('toko.all')}}" data-role="tile" class="slide bg-green normal fg-white">
                            <div data-role="tile" class="bg-green" data-size="large">
                                <span class="mif-shop icon"></span>
                                <span class="branding-bar">Informasi Toko</span>
                       
                            </div>
                        </a>
                    </div>
 @endif
 @if(Auth::user()->akses == "Admin" || Auth::user()->akses == "SuperAdmin")
    <div data-role="tile" data-size="large" class="bg-red tile-large" style="grid-column-start: 3; grid-row: 2" data-role-tile="true">
         <a href="{{route('inventory.index')}}" data-role="tile" class="slide bg-red dark fg-white" >
                            <div data-role="tile" class="bg-red fg-white" data-size="large">
                                <span class="mif-cabinet icon"></span>
                                <span class="branding-bar">Inventory</span>
                               
                            </div>
                        </a>
    </div>
        <div data-role="tile" data-size="large" style="grid-column-start: 2; grid-row: 3" class="bg-orange darken-4 tile-large" data-role-tile="true">
             <a href="{{route('pos.index')}}" data-role="tile" class="slide bg-orange darken-4 fg-white">
                                <div data-role="tile" class="bg-orange darken-3" data-size="large">
                                    <span class="mif-cart icon"></span>
                                    <span class="branding-bar">Point of Sale</span>
                 
                                </div>
                            </a>
        </div>

    </div> 
                    @endif

                    @if(Auth::user()->akses == "Kasir")
                <div data-role="tile" data-size="large" style="grid-column-start: 3; grid-row: 3" class="bg-light-blue darken-2 tile-large" data-role-tile="true"> <a href="{{route('barangmasuk.all')}}" data-role="tile" class="slide bg-light-blue darken-2 fg-white">
                            <div data-role="tile" class="bg-light-blue darken-2" data-size="large">
                                <span class="mif-pencil icon"></span>
                                <span class="branding-bar">Laporan Kasir</span>
                     
                            </div>
                        </a>    </div>

                    @endif
                </div>


              

     
            </div>
        </div>


        <script src="metromini/docs/js/jquery-3.3.1.min.js"></script>
        <script src="metromini/docs/metro/js/metro.js"></script>
        <script src="metromini/docs/start/start.js"></script>

    </body>
    </html>