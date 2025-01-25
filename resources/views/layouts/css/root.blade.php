<style>
    <style>.register__card {
        border: none;
        border-radius: 0;
        display: flex;
    }
    .register__card:focus,
    .register__card:hover {
        transition: ease-in-out all .2s;
        box-shadow: 0 0 10px 0 rgba(0, 0, 0, .4);
        text-decoration: none;
    }
    .register__card .card-img-top {
        border-radius: 0;
        background-color: rgba(192, 192, 192, 0.7);
        height: 188px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .register__card .card-img-top img {
        width: auto;
        height: 188px;
    }
    .register__card .card-img-top .open-label {
        opacity: 0;
        display: flex;
        position: absolute;
        inset: 0;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.5);
        color: #ffffff;
        transition: ease-in-out all .2s;
    }
    .register__card:hover .card-img-top .open-label {
        opacity: 1;
    }
    .register__card .card-header {
        position: absolute;
        top: 2rem;
        left: 0;
        right: 0;
        padding: 0;
        border-left: 0.5rem solid #227b8b;
        border-bottom: 0;
        background: none;
        overflow: hidden;
    }
    .register__card .card-header span {
        background-color: #227b8b;
        color: #ffffff;
        font-size: 1.2rem;
        font-weight: bold;
        padding: 0.5rem;
        line-height: 2.2rem;
        white-space: break-spaces;
        vertical-align: middle;
        padding-inline: 0.5rem;
    }
    .register__card .card-body {
        padding: 1rem 0.5rem 0;
    }
    .register__card .card-body,
    .register__card .card-footer {
        padding-left: .5rem;
        padding-right: .5rem;
        color: #6c757d;
    }
    .register__card:hover .card-body,
    .register__card:hover .card-footer {
        color: #545b62;
    }
    .register__card .card-footer {
        text-align: center;
        margin-top: auto;
    }
    .register__card:hover .card-footer .btn-secondary {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62;
    }
    .register__card > :last-child {
        padding-bottom: .5rem;
    }
    .register__card .card-footer {
        background-color: transparent;
        border: none;
    }
    .registers .card-deck .card {
        max-width: 255px;
    }
    .register__card_draft {
        border: 3px double orange;
        opacity: 0.5;
    }
    .register__card_archived {
        border: 3px double red;
        opacity: 0.5;
    }
    .register__card_unpublished {
        border: 3px double blue;
        opacity: 0.5;
    }
    .register__card_draft:hover,
    .register__card_archived:hover,
    .register__card_unpublished:hover {
        opacity: 1;
    }</style>
<style>.navbar-nav_three {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        margin-bottom: 2rem;
    }
    .navbar-nav_three .nav-item {
        flex-grow: 1;
        width: 33%;
    }</style>
</style>
