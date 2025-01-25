@extends('layouts.layout-origin')
@section('content')

<body class="page page_registers page_registers-index page_without-background scrolling-down" data-new-gr-c-s-check-loaded="14.1216.0" data-gr-ext-installed="" data-hasqtip="0">
<div class="page__inner">
    <header class="page__header">
        <div class="page__header-inner">
            <nav id="w14" class="navbar_page-header navbar-expand-lg navbar">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src="{{ asset('storage/images/logo.png') }}" alt=""></a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#w14-collapse" aria-controls="w14-collapse" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
                    <div id="w14-collapse" class="collapse navbar-collapse">
                        <ul id="w15" class="navbar-nav nav"><li class="dropdown nav-item"><a class="dropdown-toggle nav-link active" href="/" data-toggle="dropdown">Datubāzes</a><div id="w16" class="dropdown-menu"><a class="dropdown-item" href="/registri/parada-atgusanas-pakalpojumu-sniedzeji"><i class="icon icon_collection fa-solid fa-piggy-bank"></i> Parāda atgūšanas pakalpojumu sniedzēji </a>
                                    <a class="dropdown-item" href="/registri/pateretaju-kreditesanas-pakalpojumu-sniedzeji"><i class="icon icon_collection fa-solid fa-comments-dollar"></i> Patērētāju kreditēšanas pakalpojumu sniedzēji</a>
                                    <a class="dropdown-item" href="/registri/hipotekaro-kreditu-starpnieki-un-to-parstavji"><i class="icon icon_collection fa-solid fa-hand-holding-dollar"></i> Hipotekāro kredītu starpnieki un to pārstāvji</a>
                                    <a class="dropdown-item" href="/registri/publiskie-spelu-laukumi"><i class="icon icon_collection fa-brands fa-fort-awesome"></i> Publiskie spēļu  laukumi</a>
                                    <a class="dropdown-item" href="/registri/gazes-balonu-tirdzniecibas-vietas"><i class="icon icon_collection fa-solid fa-fire-flame-simple"></i> Gāzes balonu tirdzniecības vietas</a>
                                    <a class="dropdown-item" href="/registri/naftas-gazes-balonu-uzpildes-stacijas"><i class="icon icon_collection fa-solid fa-gas-pump"></i> Naftas gāzes balonu uzpildes stacijas</a>
                                    <a class="dropdown-item" href="/registri/nedrosas-un-neatbilstosas-preces"><i class="icon icon_collection fa-solid fa-book-skull"></i> Nedrošās un neatbilstošās preces</a>
                                    <a class="dropdown-item" href="/registri/rakstveida-apnemsanas"><i class="icon icon_collection fa-solid fa-hand"></i> Rakstveida apņemšanās</a>
                                    <a class="dropdown-item" href="/registri/ptac-lemumi"><i class="icon icon_collection fa-solid fa-pen-fancy"></i> PTAC Lēmumi</a>
                                    <a class="dropdown-item" href="/registri/arpustiesas-pateretaju-stridu-risinataji"><i class="icon icon_collection fa-solid fa-user-tie"></i> Ārpustiesas patērētāju strīdu risinātāji</a>
                                    <a class="dropdown-item" href="/registri/pateretaju-stridu-risinasanas-komisijas-lemumi"><i class="icon icon_collection fa-solid fa-handshake-angle"></i> Patērētāju strīdu risināšanas komisijas lēmumi</a>
                                    <a class="dropdown-item" href="/registri/melnais-saraksts"><i class="icon icon_collection fa-solid fa-triangle-exclamation"></i> Melnais saraksts</a>
                                    <a class="dropdown-item" href="/registri/aizdomigie-interneta-un-sazinas-objekti"><i class="icon icon_collection fa-solid fa-triangle-exclamation"></i> Aizdomīgie interneta un saziņas objekti</a>
                                    <a class="dropdown-item" href="/registri/turisma-pakalpojumu-sniedzeji"><i class="icon icon_collection fa-solid fa-suitcase-rolling"></i> Tūrisma pakalpojumu sniedzēji</a></div></li>
                            <li class="nav-item"><a class="nav-link" href="/ka-lietot">Kā lietot</a></li>
                            <li class="nav-item"><a class="nav-link" href="/sazinaties">Sazināties</a></li></ul>        <div id="w17" class="ml-auto widget-block widget-block_user-panel">

                        </div>
                        <div id="w18" class="widget-block widget-block_anchor_button">
                            <a class="btn btn-primary btn-primary-style-2 widget widget_anchor_button" href="https://ptac.gov.lv">Doties uz ptac.gov.lv</a>
                        </div>
                    </div>
                </div>
            </nav>        <div id="w19" class="page__heading container widget-block widget-block_heading">
                <h1 class="page__heading-text widget widget_heading" style="display: none;">PTAC reģistri</h1>
            </div>
            <div id="w20" class="alerts container"></div>    </div>
    </header>
    <div class="page__content">
        <div class="page__content-inner">
            <div class="container">
                <div class="registers">
                    <form class="filters position-relative">

                        <div class="input-group mb-3">
                            <input type="text" class="search-text form-control" placeholder="Ievadi atslēgvārdus" aria-label="Ievadi atslēgvārdus" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button type="button" class="search-btn btn btn-outline-secondary" id="button-addon2">Meklēt
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="registers-index" class="widget-block widget-block_bootstrap-4-cards widget-block_configurable">
                        <div class="widget widget_bootstrap-4-cards"><div class="row row-cols-4" style="row-gap: 1.5rem;"><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="parada-atgusanas-pakalpojumu-sniedzeji"><a class="register__card mb-3 h-100 register__card_published card item item_1" href="/registri/parada-atgusanas-pakalpojumu-sniedzeji"><div class="card-img-top"><div id="w0" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/parada-atgusanas-paksniedzeji5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/parada-atgusanas-paksniedzeji5.jpg')}}" alt="Parāda atgūšanas pakalpojumu sniedzēji" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Parāda atgūšanas pakalpojumu sniedzēji</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Parāda atgūšanas pakalpojumu sniedzēji </span></div><div class="card-body"><div class="register__abstract card-text">Parāda atgūšanas pakalpojuma sniedzēji, kuri saņēmuši licenci parāda atgūšanas pakalpojuma sniegšanai.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="pateretaju-kreditesanas-pakalpojumu-sniedzeji"><a class="register__card mb-3 h-100 register__card_published card item item_2" href="/registri/pateretaju-kreditesanas-pakalpojumu-sniedzeji"><div class="card-img-top"><div id="w1" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/pateretaju-kreditesanas-pak-sniedzeji5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/pateretaju-kreditesanas-pak-sniedzeji5.jpg')}}" alt="Patērētāju kreditēšanas pakalpojumu sniedzēji" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Patērētāju kreditēšanas pakalpojumu sniedzēji</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Patērētāju kreditēšanas pakalpojumu sniedzēji</span></div><div class="card-body"><div class="register__abstract card-text">Kapitālsabiedrības, kuras saņēmušas licenci patērētāju kreditēšanas pakalpojumu sniegšanai.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="hipotekaro-kreditu-starpnieki-un-to-parstavji"><a class="register__card mb-3 h-100 register__card_published card item item_3" href="/registri/hipotekaro-kreditu-starpnieki-un-to-parstavji"><div class="card-img-top"><div id="w2" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/hipotekaro-kreditu-starpnieki-un-parstavji5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/collections/hipotekaro-kreditu-starpnieki-un-parstavji5.jpg')}}" alt="Hipotekāro kredītu starpnieki un to pārstāvji" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Hipotekāro kredītu starpnieki un to pārstāvji</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Hipotekāro kredītu starpnieki un to pārstāvji</span></div><div class="card-body"><div class="register__abstract card-text">Informācija par reģistrētiem hipotekāriem kredītu starpniekiem un to pārstāvjiem.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="publiskie-spelu-laukumi"><a class="register__card mb-3 h-100 register__card_published card item item_4" href="/registri/publiskie-spelu-laukumi"><div class="card-img-top"><div id="w3" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/spelu-laukumi5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/spelu-laukumi5.jpg')}}" alt="Publiskie spēļu  laukumi" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Publiskie spēļu  laukumi</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Publiskie spēļu  laukumi</span></div><div class="card-body"><div class="register__abstract card-text">PTAC reģistrēti publiskie spēļu un rekreācijas laukumi</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="gazes-balonu-tirdzniecibas-vietas"><a class="register__card mb-3 h-100 register__card_published card item item_5" href="/registri/gazes-balonu-tirdzniecibas-vietas"><div class="card-img-top"><div id="w4" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture>
                                                        <source type="image/jpeg" srcset="{{ asset('storage/images/gazesbaloni.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/gazesbaloni.jpg')}}" alt="Gāzes balonu tirdzniecības vietas" itemprop="image">
                                                    </picture>
                                                </div>
                                                <div class="media-body"><div style="display: none" property="name">Gāzes balonu tirdzniecības vietas</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Gāzes balonu tirdzniecības vietas</span></div><div class="card-body"><div class="register__abstract card-text">Gāzes balonu tirdzniecības vietu reģistrā reģistrēto tirdzniecības vietu publiskā datubāze</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="naftas-gazes-balonu-uzpildes-stacijas"><a class="register__card mb-3 h-100 register__card_published card item item_6" href="/registri/naftas-gazes-balonu-uzpildes-stacijas"><div class="card-img-top"><div id="w5" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture>
                                                        <source type="image/jpeg" srcset="{{ asset('storage/images/uzpildes-vietas5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/uzpildes-vietas5.jpg')}}" alt="Naftas gāzes balonu uzpildes stacijas" itemprop="image">
                                                    </picture>
                                                </div>
                                                <div class="media-body"><div style="display: none" property="name">Naftas gāzes balonu uzpildes stacijas</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Naftas gāzes balonu uzpildes stacijas</span></div><div class="card-body"><div class="register__abstract card-text">Bīstamo iekārtu reģistrā reģistrētās sašķidrinātās naftas gāzes balonu uzpildes stacijas.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="nedrosas-un-neatbilstosas-preces"><a class="register__card mb-3 h-100 register__card_published card item item_7" href="/registri/nedrosas-un-neatbilstosas-preces"><div class="card-img-top"><div id="w6" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/nedrosas-preces5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/nedrosas-preces5.jpg')}}" alt="Nedrošās un neatbilstošās preces" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Nedrošās un neatbilstošās preces</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Nedrošās un neatbilstošās preces</span></div><div class="card-body"><div class="register__abstract card-text">PTAC atklātas nedrošas un neatbilstošas preces, t.sk. būvizstrādājumi.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="rakstveida-apnemsanas"><a class="register__card mb-3 h-100 register__card_published card item item_8" href="/registri/rakstveida-apnemsanas"><div class="card-img-top"><div id="w7" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/rakstveida-apnemsanas5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/rakstveida-apnemsanas5.jpg')}}" alt="Rakstveida apņemšanās" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Rakstveida apņemšanās</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Rakstveida apņemšanās</span></div><div class="card-body"><div class="register__abstract card-text">PTAC saņemtās komersantu rakstveida apņemšanās par labprātīgu patērētāju kolektīvo interešu pārkāpumu novēršanu.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="ptac-lemumi"><a class="register__card mb-3 h-100 register__card_published card item item_9" href="/registri/ptac-lemumi"><div class="card-img-top"><div id="w8" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/ptac-lemumi5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/ptac-lemumi5.jpg')}}" alt="PTAC Lēmumi" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">PTAC Lēmumi</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">PTAC Lēmumi</span></div><div class="card-body"><div class="register__abstract card-text">PTAC izdotie administratīvie akti patērētāju kolektīvo interešu lietās.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="arpustiesas-pateretaju-stridu-risinataji"><a class="register__card mb-3 h-100 register__card_published card item item_10" href="/registri/arpustiesas-pateretaju-stridu-risinataji"><div class="card-img-top"><div id="w9" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/arpustiesas-pateretaju-stridu-risinataji5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/arpustiesas-pateretaju-stridu-risinataji5.jpg')}}" alt="Ārpustiesas patērētāju strīdu risinātāji" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Ārpustiesas patērētāju strīdu risinātāji</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Ārpustiesas patērētāju strīdu risinātāji</span></div><div class="card-body"><div class="register__abstract card-text">Ārpustiesas patērētāju strīdu risinātāji</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="pateretaju-stridu-risinasanas-komisijas-lemumi"><a class="register__card mb-3 h-100 register__card_published card item item_11" href="/registri/pateretaju-stridu-risinasanas-komisijas-lemumi"><div class="card-img-top"><div id="w10" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/9pateretstridriskomislem5.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/9pateretstridriskomislem5.jpg')}}" alt="Patērētāju strīdu risināšanas komisijas lēmumi" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Patērētāju strīdu risināšanas komisijas lēmumi</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Patērētāju strīdu risināšanas komisijas lēmumi</span></div><div class="card-body"><div class="register__abstract card-text">Anonimizēti Patērētāju strīdu risināšanas  komisijas lēmumi.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="melnais-saraksts"><a class="register__card mb-3 h-100 register__card_published card item item_12" href="/registri/melnais-saraksts"><div class="card-img-top"><div id="w11" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/melnais-saraksts9.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/melnais-saraksts9.jpg')}}" alt="Komersanti kuri neievēro lēmumus" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Komersanti kuri neievēro lēmumus</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Melnais saraksts</span></div><div class="card-body"><div class="register__abstract card-text">Komersanti, kas nav izpildījuši Patērētāju strīdu risināšanas komisijas lēmumus.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="aizdomigie-interneta-un-sazinas-objekti"><a class="register__card mb-3 h-100 register__card_published card item item_13" href="/registri/aizdomigie-interneta-un-sazinas-objekti"><div class="card-img-top"><div id="w12" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/melnais-saraksts10.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/melnais-saraksts10.jpg')}}" alt="Patērētājam riskantie interneta objekti" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Patērētājam riskantie interneta objekti</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Aizdomīgie interneta un saziņas objekti</span></div><div class="card-body"><div class="register__abstract card-text">Datubāzē tiek ietverta informācija, lai sabiedrību brīdinātu par aizdomīgiem interneta objektiem, lai preventīvi brīdinātu sabiedrību un novērstu iespējamu kaitējumu patērētājiem.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div><div class="register-col col-12 col-sm-6 col-md-3" data-identifier="turisma-pakalpojumu-sniedzeji"><a class="register__card mb-3 h-100 register__card_published card item item_14" href="/registri/turisma-pakalpojumu-sniedzeji"><div class="card-img-top"><div id="w13" class="widget-block widget-block_file-media">
                                                <div class="media widget widget_file-media media_public media_image" itemscope="" itemtype="https://schema.org/ImageObject">
                                                    <picture><source type="image/jpeg" srcset="{{ asset('storage/images/turisma-pakalpojumi9.jpg')}}">
                                                        <img class="img-fluid" src="{{ asset('storage/images/urisma-pakalpojumi9.jpg')}}" alt="Tūrisma aģenti" itemprop="image"></picture></div>
                                                <div class="media-body"><div style="display: none" property="name">Tūrisma aģenti</div></div>
                                            </div>
                                        </div><div class="register__name card-header"><span class="register__name">Tūrisma pakalpojumu sniedzēji</span></div><div class="card-body"><div class="register__abstract card-text">Tūrisma pakalpojumu sniedzēji, kuri ir reģistrēti un/ vai saņēmuši licenci komplekso tūrisma pakalpojumu sniegšanai.</div></div><div class="card-footer"><div class="btn btn-secondary">Atvērt</div></div></a></div></div></div>
                    </div>
                </div>            </div>
        </div>
    </div>
    <footer class="page__footer">
        <div class="page__footer-inner">
            <nav id="w21" class="navbar_page-footer navbar-expand-lg mb-5 navbar">
                <div class="container">
                    <a class="navbar-brand" href="/"><img src="{{ asset('storage/images//footer_navbar_brand/logoinverted.png')}}" alt=""></a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#w21-collapse" aria-controls="w21-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div id="w21-collapse" class="collapse navbar-collapse">
                        <ul id="w22" class="navbar-nav mr-auto nav"><li class="nav-item"><a class="nav-link active" href="/">Datubāzes</a></li>
                            <li class="nav-item"><a class="nav-link" href="/ka-lietot">Kā lietot</a></li>
                            <li class="nav-item"><a class="nav-link" href="/sazinaties">Sazināties</a></li></ul>            <div id="w23" class="widget-block widget-block_anchor_button">
                            <a class="btn btn-primary btn-primary-style-2 widget widget_anchor_button" href="https://ptac.gov.lv">Doties uz ptac.gov.lv</a>
                        </div>
                    </div>
                </div>
            </nav>            <div class="container">
                <ul id="w24" class="navbar-nav navbar-nav_three nav"><li class="nav-item"><a class="nav-link" href="/registri/parada-atgusanas-pakalpojumu-sniedzeji"><i class="icon icon_collection fa-solid fa-piggy-bank"></i> Parāda atgūšanas pakalpojumu sniedzēji </a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/pateretaju-kreditesanas-pakalpojumu-sniedzeji"><i class="icon icon_collection fa-solid fa-comments-dollar"></i> Patērētāju kreditēšanas pakalpojumu sniedzēji</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/hipotekaro-kreditu-starpnieki-un-to-parstavji"><i class="icon icon_collection fa-solid fa-hand-holding-dollar"></i> Hipotekāro kredītu starpnieki un to pārstāvji</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/publiskie-spelu-laukumi"><i class="icon icon_collection fa-brands fa-fort-awesome"></i> Publiskie spēļu  laukumi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/gazes-balonu-tirdzniecibas-vietas"><i class="icon icon_collection fa-solid fa-fire-flame-simple"></i> Gāzes balonu tirdzniecības vietas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/naftas-gazes-balonu-uzpildes-stacijas"><i class="icon icon_collection fa-solid fa-gas-pump"></i> Naftas gāzes balonu uzpildes stacijas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/nedrosas-un-neatbilstosas-preces"><i class="icon icon_collection fa-solid fa-book-skull"></i> Nedrošās un neatbilstošās preces</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/rakstveida-apnemsanas"><i class="icon icon_collection fa-solid fa-hand"></i> Rakstveida apņemšanās</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/ptac-lemumi"><i class="icon icon_collection fa-solid fa-pen-fancy"></i> PTAC Lēmumi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/arpustiesas-pateretaju-stridu-risinataji"><i class="icon icon_collection fa-solid fa-user-tie"></i> Ārpustiesas patērētāju strīdu risinātāji</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/pateretaju-stridu-risinasanas-komisijas-lemumi"><i class="icon icon_collection fa-solid fa-handshake-angle"></i> Patērētāju strīdu risināšanas komisijas lēmumi</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/melnais-saraksts"><i class="icon icon_collection fa-solid fa-triangle-exclamation"></i> Melnais saraksts</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/aizdomigie-interneta-un-sazinas-objekti"><i class="icon icon_collection fa-solid fa-triangle-exclamation"></i> Aizdomīgie interneta un saziņas objekti</a></li>
                    <li class="nav-item"><a class="nav-link" href="/registri/turisma-pakalpojumu-sniedzeji"><i class="icon icon_collection fa-solid fa-suitcase-rolling"></i> Tūrisma pakalpojumu sniedzēji</a></li></ul>            </div>
            <div class="container text-muted text-center pb-1">
                <p>
                    <span>registri.ptac.gov.lv</span>
                    |
                    <span>77.219.1.80</span>
                </p>
                <p>© 2025 Patērētāju tiesību aizsardzības centrs Visas tiesības aizsargātas.</p>
            </div>
        </div>
    </footer>
</div>



<div id="gridmanWrapper" style="position: fixed; height: 0px; width: 0px; z-index: 99999; top: 0px; left: 0px;"></div><div id="rememberry__extension__root" style="all: unset;"></div></body>
@endsection
