<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Government Portal</title>
    @include('layouts.css.bootstrap')
{{--    @include('layouts.css.all-min')--}}
{{--    @include('layouts.css.animate')--}}
    @include('layouts.css.global')
{{--    @include('layouts.css.effects')--}}
    @include('layouts.css.layout')
{{--    @include('layouts.css.mgmt')--}}
{{--    @include('layouts.css.site')--}}
{{--    @include('layouts.css.file-media')--}}
{{--    @include('layouts.css.user-panel')--}}
    @include('layouts.css.root')
</head>
{{--<body class="min-h-screen bg-gray-50">--}}

@yield('content')



<script src="{{ asset('storage/js/jquery.js')}}"></script>
<script src="{{ asset('storage/js/yii.js')}}"></script>
<script src="{{ asset('storage/js/es6-shim.min.js')}}"></script>
<script src="{{ asset('storage/js/site.js')}}"></script>
<script src="{{ asset('storage/js/fileMedia.js')}}"></script>
<script src="{{ asset('storage/js/bootstrap.bundle.js')}}"></script>

<script>jQuery(function ($) {
        jQuery('#w0').fileMedia({"id":"w0","assetBaseUrl":"\/assets\/5777f916","name":"Parāda atgūšanas pakalpojumu sniedzēji","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/parada-atgusanas-paksniedzeji5.jpg","openInDialog":true});
        jQuery('#w1').fileMedia({"id":"w1","assetBaseUrl":"\/assets\/5777f916","name":"Patērētāju kreditēšanas pakalpojumu sniedzēji","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/pateretaju-kreditesanas-pak-sniedzeji5.jpg","openInDialog":true});
        jQuery('#w2').fileMedia({"id":"w2","assetBaseUrl":"\/assets\/5777f916","name":"Hipotekāro kredītu starpnieki un to pārstāvji","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/hipotekaro-kreditu-starpnieki-un-parstavji5.jpg","openInDialog":true});
        jQuery('#w3').fileMedia({"id":"w3","assetBaseUrl":"\/assets\/5777f916","name":"Publiskie spēļu  laukumi","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/spelu-laukumi5.jpg","openInDialog":true});
        jQuery('#w4').fileMedia({"id":"w4","assetBaseUrl":"\/assets\/5777f916","name":"Gāzes balonu tirdzniecības vietas","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/gazesbaloni.jpg","openInDialog":true});
        jQuery('#w5').fileMedia({"id":"w5","assetBaseUrl":"\/assets\/5777f916","name":"Naftas gāzes balonu uzpildes stacijas","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/uzpildes-vietas5.jpg","openInDialog":true});
        jQuery('#w6').fileMedia({"id":"w6","assetBaseUrl":"\/assets\/5777f916","name":"Nedrošās un neatbilstošās preces","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/nedrosas-preces5.jpg","openInDialog":true});
        jQuery('#w7').fileMedia({"id":"w7","assetBaseUrl":"\/assets\/5777f916","name":"Rakstveida apņemšanās","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/rakstveida-apnemsanas5.jpg","openInDialog":true});
        jQuery('#w8').fileMedia({"id":"w8","assetBaseUrl":"\/assets\/5777f916","name":"PTAC Lēmumi","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/ptac-lemumi5.jpg","openInDialog":true});
        jQuery('#w9').fileMedia({"id":"w9","assetBaseUrl":"\/assets\/5777f916","name":"Ārpustiesas patērētāju strīdu risinātāji","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/arpustiesas-pateretaju-stridu-risinataji5.jpg","openInDialog":true});
        jQuery('#w10').fileMedia({"id":"w10","assetBaseUrl":"\/assets\/5777f916","name":"Patērētāju strīdu risināšanas komisijas lēmumi","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/9pateretstridriskomislem5.jpg","openInDialog":true});
        jQuery('#w11').fileMedia({"id":"w11","assetBaseUrl":"\/assets\/5777f916","name":"Komersanti kuri neievēro lēmumus","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/melnais-saraksts9.jpg","openInDialog":true});
        jQuery('#w12').fileMedia({"id":"w12","assetBaseUrl":"\/assets\/5777f916","name":"Patērētājam riskantie interneta objekti","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/melnais-saraksts10.jpg","openInDialog":true});
        jQuery('#w13').fileMedia({"id":"w13","assetBaseUrl":"\/assets\/5777f916","name":"Tūrisma aģenti","url":"https:\/\/registri.ptac.gov.lv\/uploads\/collections\/turisma-pakalpojumi9.jpg","openInDialog":true});
        let registersElm = $('.registers')
        let filtersElm = registersElm.find('.filters')
        let registerElms = registersElm.find('.register-col')
        let searchTextElm = filtersElm.find('.search-text')
        let searchBtnElm = filtersElm.find('.search-btn')
        window.searchIndex = []
        registerElms.each(function() {
            const registerElm = $(this)
            let labelElm = registerElm.find('.register__label')
            let abstractElm = registerElm.find('.register__abstract')
            if (labelElm.length > 0 && labelElm.text().length > 0) {
                searchIndex.push([labelElm.text().toLowerCase(), registerElm.data('identifier')])
            }
            if (abstractElm.length > 0 && abstractElm.text().length > 0) {
                searchIndex.push([abstractElm.text().toLowerCase(), registerElm.data('identifier')])
            }
        })
        const performSearch = function() {
            let searchString = searchTextElm.val()
            if (searchString.length > 0) {
                searchString = searchString.toLowerCase()
                registerElms.filter('.search_match').removeClass('search_match')
                searchIndex.forEach(function(entryData) {
                    if (entryData[0].indexOf(searchString) >= 0) {
                        registerElms.filter('[data-identifier="' + entryData[1] + '"]').addClass('search_match')
                    }
                })
                registerElms.filter(':not(.search_match)').hide()
            } else {
                registerElms.filter('.search_match').removeClass('search_match')
                registerElms.show()
            }
        }
        filtersElm.on('submit', (e) => {
            performSearch()
            e.preventDefault()
            return false
        })
        searchTextElm.on('keyup', () => {
            performSearch()
        })
        searchBtnElm.on('click', () => {
            performSearch()
        })
        filtersElm.find('.loader').remove()
    });</script>

{{--</body>--}}
</html>
