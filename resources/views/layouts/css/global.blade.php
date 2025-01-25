<style>
    html,
    body {
        min-height: 100%;
    }

    /**
     * Yii
     */
    .not-set {
        color: #c55;
        font-style: italic;
    }

    /**
     * Yii - GridView
     */
    a.asc:after,
    a.desc:after {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings';
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        padding-left: 5px;
    }

    a.asc:after {
        content: /*"\e113"*/ "\e151";
    }

    a.desc:after {
        content: /*"\e114"*/ "\e152";
    }

    .sort-numerical a.asc:after {
        content: "\e153";
    }

    .sort-numerical a.desc:after {
        content: "\e154";
    }

    .sort-ordinal a.asc:after {
        content: "\e155";
    }

    .sort-ordinal a.desc:after {
        content: "\e156";
    }

    .grid-view th {
        white-space: nowrap;
    }

    /**
     * Yii - Forms
     */
    .hint-block {
        display: block;
        margin-top: 5px;
        color: #999;
    }

    .error-summary {
        color: #a94442;
        background: #fdf7f7;
        border-left: 3px solid #eed3d7;
        padding: 10px 20px;
        margin: 0 0 15px 0;
    }

    .required-mark {
        color: #a94442;
    }

    /**
     * Forms - styled radios #1
     */
    .radios-style1 .custom-radio {
        padding: 0;
    }

    .radios-style1 .custom-radio .custom-control-label {
        padding: 1rem;
        border-top: 1px solid silver;
        display: block;
        cursor: pointer;
    }

    .radios-style1 .custom-radio .custom-control-label:hover {
        background-color: rgba(128, 189, 1, 0.1);
    }

    .radios-style1 .custom-radio:last-child .custom-control-label {
        border-bottom: 1px solid silver;
    }

    .radios-style1 .custom-radio .custom-control-label::before,
    .radios-style1 .custom-radio .custom-control-label::after {
        content: none;
    }

    .radios-style1 .custom-radio .custom-radio__marker {
        color: #fff;
        background-color: #80bd01;
        border-radius: 12px;
        height: 24px;
        display: inline-block;
        margin-right: 0.5rem;
        padding: 0 7px;
    }

    .radios-style1 .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
        color: #000;
    }

    .radios-style1 .custom-control-input:checked ~ .custom-control-label {
        color: #fff;
        background-color: #80bd01;
    }

    .radios-style1 .custom-control-input:checked ~ .custom-control-label .custom-radio__marker {
        color: #80bd01;
        background-color: #fff;
    }

    /**
     * Bootstrap  - nav
     */

    /* align the logout "link" (button in form) of the navbar */
    .nav li > form > button.logout {
        padding: 15px;
        border: none;
    }

    @media (max-width: 767px) {
        .nav li > form > button.logout {
            display: block;
            text-align: left;
            width: 100%;
            padding: 10px 15px;
        }
    }

    .nav > li > form > button.logout:focus,
    .nav > li > form > button.logout:hover {
        text-decoration: none;
    }

    .nav > li > form > button.logout:focus {
        outline: none;
        box-shadow: none;
    }

    /**
     * Typography
     */
    html,
    body {
        color: #1f1d1d;
    }

    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
        color: #000000;
    }

    h1 {
        text-transform: uppercase;
        font-size: 1.6rem;
        font-weight: normal;
    }
    .page__heading-text {
        margin: 3rem 0;
    }

    h1 strong {
        display: block;
        font-size: 2.4rem;
    }

    /* Large devices (desktops, less than 1200px) */
    @media (max-width: 1199.98px) {
        h1 strong {
            font-size: 2rem;
        }
    }

    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 992px) {
        h1 strong {
            font-size: 1.5rem;
        }
    }

    h2 {
        font-size: 1.6rem;
        font-weight: normal;
        margin-bottom: 2rem;
    }

    a {
        color: #227b8b;
    }

    a:hover {
        color: #1f2a44;
    }

    /**
     * Typography - bullets
     */
    .bullet {
        text-align: center;
        color: #fff;
        background-color: #80bd01;
        border-radius: 13px;
        height: 26px;
        width: 26px;
        display: inline-block;
        margin-right: 0.5rem;
        font-size: 0.8rem;
        padding: 5px;
        line-height: 16px;
    }

    .bullet_lg {
        height: 40px;
        width: 40px;
        border-radius: 20px;
        line-height: 30px;
    }

    .bullet_red {
        background-color: #CF0304;
    }

    /**
     * Widget - Picture
     */
    .widget_picture .figure-img {
        display: block;
        margin: 0;
    }

    .widget_picture .figure-caption {
        margin-top: 0.5rem;
    }

    /**
     * Buttons
     */
    .btn,
    .nav-pills .nav-link {
        border-radius: 0;
    }


    .btn_again,
    .btn_next {
        text-transform: uppercase;
        color: #ffffff;
        font-weight: bolder;
        text-align: center;
        padding: 10px;
        margin: 10px;
        display: block;
    }

    .btn-link {
        color: hsl(189, 61%, 34%);
    }

    .btn-link:hover {
        color: hsl(189, 61%, 50%);
    }

    .btn-primary-style-2,
    .nav-pills .nav-link.active {
        background-color: hsl(189, 61%, 34%);
        border-color: hsl(189, 61%, 25%);
        color: #ffffff;
    }

    .nav-pills .nav-link,
    .btn-primary-style-2:hover {
        background-color: #ffffff;
        border-color: hsl(189, 61%, 25%);
        color: hsl(189, 61%, 34%);
    }

    .nav-pills .nav-link.active {
        border: none;
    }

    .nav-pills .nav-link:hover {
        text-decoration: underline;
    }

    .btn-warning-style-2 {
        background-color: #e8730a;
        border-color: #e86d00;
        color: #ffffff;
        text-transform: uppercase;
        font-weight: bold;
    }

    .btn-warning-style-2:hover {
        background-color: #C44912;
        border-color: #C44912;
        color: #ffffff;
    }

    .btn-success-style-2 {
        background-color: #7fbc03;
        border-color: #7fbc03;
        color: #ffffff;
        text-transform: uppercase;
        font-weight: bold;
    }

    .btn-success-style-2:hover {
        background-color: #45A013;
        border-color: #45A013;
        color: #ffffff;
    }

    /**
     * Icons
     */
    .fa-file-word {
        color: #4b87e4;
    }

    .fa-file-excel {
        color: #0f9d58;
    }

    .fa-file-video {
        color: #000;
    }

    .fa-file-pdf {
        color: #ea4335;
    }

    .fa-file-powerpoint {
        color: #fd7541;
    }

    .ck-content {
        padding: 0 !important;
    }

    .page_loader {
        color: #fff;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    /**
     * Bootstrap - Modal
     */
    .modal {
        z-index: 1051;
    }

    /**
     * div based tables
     */
    .div-table-header .div-table-row {
        border-bottom: 2px solid #29b8c0;
        margin-bottom: 1rem;
    }

    .div-table-col__label {
        font-weight: bold;
        font-size: 1.2rem;
        padding: 1rem 0;
    }

    .div-table-header .div-table-col-inner {
    }

    .div-table-body .div-table-col {
        border-right: 2px solid #eeeeee;
    }

    .div-table-body .div-table-col:last-child {
        border-right: none;
    }

    @media (max-width: 991.98px) {
        .div-table-body .div-table-col {
            border-right: none;
        }
    }

    .div-table-body .div-table-row {
        margin-bottom: 1rem;
        border-bottom: 2px solid #eeeeee;
        padding-bottom: 1rem;
    }

    @media (max-width: 991.98px) {
        .div-table-body .div-table-row {
            border-bottom-color: #29b8c0;
        }
    }

    .alerts .alert {
        margin: 1rem 0;
    }

    .loader {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 100;
        background-color: rgba(255, 255, 255, 0.8);
    }

    .pagination {
        border-radius: 0;
        justify-content: flex-end;
    }

    .pagination .page-item .page-link {
        border: none;
        color: hsl(189, 61%, 34%);
    }

    .pagination .page-item.active .page-link {
        font-weight: bold;
        color: #ffffff;
        background-color: hsl(189, 61%, 34%);
    }

    /**
     * Select2
     */
    .select2-results__options--nested .select2-results__option {
        padding-top: 0!important;
        padding-bottom: 0!important;
        line-height: 1.2;
    }

    pre.data {outline: 1px solid #ccc; padding: 5px; margin: 5px; }
    pre .string { color: green; }
    pre .number { color: darkorange; }
    pre .boolean { color: blue; }
    pre .null { color: magenta; }
    pre .key { color: red; }
</style>
