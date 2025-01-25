<style>
    .page {
        height: 100%;
        background-color: #ffffff;
    }
    .page__inner {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: stretch;
    }
    .page__content {
        flex-grow: 1;
    }
    .page__header,
    .page__content,
    .page__footer {
        flex-shrink: 0;
    }
    .page__header {
        margin-bottom: 1rem;
    }
    .page__footer {
        margin-top: auto;
    }
    .page__footer-inner {
        margin-top: 1rem;
        background-color: #3d4351;
        color: #ffffff;
    }
    .page__footer a {
        color: #ffffff;
    }

    .page_with-background {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        background-color: #3d4351;
        background-attachment: fixed;
    }

    .page_with-background .page__content-inner > .row > .col_right {
        background-color: rgba(255, 255, 255, 0.92);
    }

    .page_with-background .page__content-inner > .row > .col_right .col__inner,
    .page_with-background .page__content-inner > .row > .col_left .col__inner {
        position: relative;
    }

    .page_with-background .page__content-inner > .row > .col_right .col__inner {
        padding: 2rem 5rem;
    }

    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 991.98px) {
        .page_with-background .page__content-inner > .row > .col_right .col__inner {
            padding: 2rem;
        }
    }

    /* Extra small devices (portrait phones, less than 576px) */
    @media (max-width: 575.98px) {
        .page_with-background .page__content-inner > .row > .col_right .col__inner {
            padding: 0.5rem;
        }
    }

    .page_with-background .page__content-inner > .row > .col_left .col__inner {
        padding: 0.5rem 0;
        height: 100%;
    }

    .page_with-background .page__content-inner > .row > .col_left .col__inner:after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        backdrop-filter: blur(4px);
        z-index: -1;
    }

    .page_with-background .page__content-inner > .row > .col_left .chapter-heading,
    .page_with-background .page__content-inner > .row > .col_left h1 {
        color: #fff;
        text-shadow: 0 0 4px #0000001a;
    }


    .navbar_page-header,
    .navbar_page-footer {
        padding-top: 0;
    }
    .navbar_page-header .container,
    .navbar_page-footer .container {
        align-items: stretch;
    }
    .navbar_page-header .collapse,
    .navbar_page-footer .collapse {
        border-bottom: 2px solid #eeeeee;
        padding-left: 1rem;
    }
    .navbar_page-header .navbar-nav,
    .navbar_page-footer .navbar-nav {
        height: 100%;
    }
    .navbar_page-header .navbar-nav .nav-link,
    .navbar_page-footer .navbar-nav .nav-link {
        padding-top: 2rem;
    }
    .navbar_page-header .navbar-nav .nav-link {
        color: #000000;
    }
    .navbar_page-footer .navbar-nav .nav-link,
    .page__footer .navbar-nav .nav-link {
        color: #acacac;
    }
    @media (min-width: 992px) {
        .navbar_page-header .navbar-nav .nav-link,
        .navbar_page-footer .navbar-nav .nav-link,
        .page__footer .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 1rem;
            margin-right: 1rem;
        }
    }
    .navbar_page-header .navbar-nav .nav-link.active,
    .navbar_page-footer .navbar-nav .nav-link.active,
    .page__footer .navbar-nav .nav-link.active {
        color: #ffffff;
        background-color: #227b8b;
    }
    .navbar_page-header .navbar-nav .nav-link:hover,
    .navbar_page-footer .navbar-nav .nav-link:hover,
    .page__footer .navbar-nav .nav-link:hover {
        color: #ffffff;
        background-color: #1f2a44;
    }
    .navbar_page-header .navbar-brand {
        border-left: 10px solid #227b8b;
    }
    .navbar_page-header .navbar-brand,
    .navbar_page-footer .navbar-brand {
        height: 4.3125em;
        padding-left: 0;
        padding-right: 0.9375em;
        width: 240px;
        display: flex;
        align-items: center;
        position: relative;
    }
    .navbar_page-header .navbar-brand {
        padding-left: 0.9375em;
    }
    .navbar_page-header .navbar-brand img,
    .navbar_page-footer .navbar-brand img {
        /*-webkit-backface-visibility: hidden;*/
        /*transform-origin: center left;*/
        /*-webkit-transform-origin: center left;*/
        /*image-rendering: -webkit-optimize-contrast;*/
        width: 100%;
        height: auto;
    }
    .navbar_page-header .navbar-brand img {
        /*transform: translateZ(0) scale(.5);*/
        /*-webkit-transform: translateZ(0) scale(.5);*/
    }
    .navbar_page-footer .navbar-brand img {
        /*-webkit-backface-visibility: hidden;*/
        /*transform: translateZ(0) scale(.65);*/
        /*-webkit-transform: translateZ(0) scale(.65);*/
    }
    .navbar_page-header .navbar-nav .dropdown-menu {
        margin-top: 0;
        padding-top: 0;
        border-radius: 0;
        border-color: #227b8b;
        box-shadow: 0 5px 10px 0 #227b8b38;
    }
    .navbar_page-header .navbar-nav .dropdown-menu .dropdown-item.active,
    .navbar_page-header .navbar-nav .dropdown-menu .dropdown-item:active {
        background-color: #227b8b;
    }

    .footer-logo-img {
        width: 100%;
        height: auto;
    }

    /*.page__content-inner {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
    }*/
    .page_full-size .page__content-inner > div {
        width: 100%;
        min-height: 100vh;
    }

    .region_global-top-right {
        position: fixed;
        z-index: 1051;
        top: 0;
        right: 0;
    }
    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 992px) {
        .region_global-top-right {
            position: absolute;
        }
    }

    .region_global-bottom-left {
        position: fixed;
        z-index: 1030;
        bottom: 0;
        left: 0;
    }

    .col_right .widget {
        margin-bottom: 1rem;
    }
</style>
