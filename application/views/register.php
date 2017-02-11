<!DOCTYPE html>
<html>
<head>
    <style>
        .fc.old-theme-fix {
            overflow: visible;
        }

        .fc.old-theme-fix:after {
            clear: both;
            display: block;
            content: '';
        }

        .tt-dropdown-menu {
            max-height: 300px;
            overflow-y: auto;
            min-width: 160px;
            margin-top: 2px;
            padding: 5px 5px;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
            background-clip: padding-box;

        }

        .twitter-typeahead {
            display: inherit !important;
        }

        .twitter-typeahead .tt-query, .twitter-typeahead .tt-hint {
            margin-bottom: 0;
        }

        .tt-suggestion, .tt-footer {
            display: block;
            padding: 1px 0px 1px 10px;
        }

        .tt-suggestion.tt-is-under-cursor, .tt-footer.tt-is-under-cursor {
            color: #fff;
            background-color: #428bca;
        }

        .tt-suggestion.tt-is-under-cursor a, .tt-footer.tt-is-under-cursor a {
            color: #fff;
        }

        .tt-suggestion.tt-cursor, .tt-footer.tt-cursor {
            color: #fff;
            background-color: #428bca;
        }

        .tt-suggestion p, .tt-footer p {
            margin: 0;
        }
    </style>
    <style>
        .spinner-container, .spinner {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 100%;
            width: 100%;
        }

        .spinner-container {
            z-index: 900;
            overflow: hidden;

        &
        .animate .spinner {

        &
        .slide-up {
            opacity: 0;
        }

        &
        .fade-in {
            opacity: 0;
        }

        }
        }

        .spinner {
            height: 100%;
            opacity: 0.6;
            background: #fff;

        &
        .slide-up {
        @include transition-property(opacity, bottom);
        @include transition-duration(0.3 s);
        }

        &
        .fade-in {
        @include transition-property(opacity);
        @include transition-duration(1 s);
        }

        .spin {
            position: absolute;
            top: 50%;
            left: 50%;
        }

        }

        .spinner {
            background: rgba(255, 255, 255, 0);
        }

        .spinner-screen {
            position: fixed;
            z-index: 10000;
            height: 100%;
            width: 100%;
        }
    </style>


<!--    <script type="text/javascript" async="" src="/served_assets/js/insales_counter.js?5"></script>-->

    <style type="text/css">cufon {
            text-indent: 0 !important;
        }

        @media screen, projection {
            cufon {
                display: inline !important;
                display: inline-block !important;
                position: relative !important;
                vertical-align: middle !important;
                font-size: 1px !important;
                line-height: 1px !important;
            }

            cufon cufontext {
                display: -moz-inline-box !important;
                display: inline-block !important;
                width: 0 !important;
                height: 0 !important;
                overflow: hidden !important;
                text-indent: -10000in !important;
            }

            cufon canvas {
                position: relative !important;
            }
        }

        @media print {
            cufon {
                padding: 0 !important;
            }

            cufon canvas {
                display: none !important;
            }
        }
    </style>
    <title>Регистрация</title>
    <link href="/served_assets/css/checkout-69769e705ab952b0c34379965d46141c.css" media="screen" rel="stylesheet"
          type="text/css">
    <link href="/served_assets/css/custom_checkout.css" rel="stylesheet">
</head>
<body>
<div class="header-bg">
    <div class="header-blur"></div>
</div>
<div class="wrapper header fc">
    <div class="shop-name fl">
        <a href="/" target="_blank">
            <div id="logo_bg"></div>
            <img alt="logo" id="logo"
                 src="/served_assets/img/loaded_logo.png">
        </a>
    </div>
    <div class="phone fr">(495) 123-45-67</div>
</div>
<div class="wrapper body fc">

    <div class="page-title">Регистрация
    </div>
    <div id="flash_messages"></div>

    <div id="top_info"></div>
    <div class="set wide_set">
        <form accept-charset="UTF-8" action="/client_account/contacts" class="new_client" id="new_client" method="post">
            <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"></div>
            <input id="client_registered" name="client[registered]" type="hidden" value="1">

            <div class="set-block">

                <div class="field fc">
                    <div class="field-label">
                        <label for="client_name">Контактное лицо (ФИО):</label><span class="warning">*</span>
                    </div>
                    <div class="field-content">
                        <input class="textfield" type="text" id="client_name" name="client[name]" value="">
                        <div class="small"></div>
                    </div>
                </div>
                <div class="field fc">
                    <div class="field-label">
                        <label for="client_phone">Контактный телефон:</label><span class="warning">*</span>
                    </div>
                    <div class="field-content">
                        <input class="textfield" type="text" id="client_phone" name="client[phone]" value="">
                        <div class="small">Например: +7(926)111-11-11</div>
                    </div>
                </div>
                <div class="field fc">
                    <div class="field-label">
                        <label for="client_email">E-mail:</label><span class="warning">*</span>
                    </div>
                    <div class="field-content">
                        <input class="textfield" type="text" id="client_email" name="client[email]" value="">
                        <div class="small"></div>
                    </div>
                </div>


                <div class="field fc">
                    <div class="field-label">Пароль:<span class="warning">*</span></div>
                    <div class="field-content"><input class="textfield" id="client_password" name="client[password]"
                                                      size="30" type="password"></div>
                </div>
                <div class="field fc">
                    <div class="field-label">Повторите пароль:<span class="warning">*</span></div>
                    <div class="field-content"><input class="textfield" id="client_password_confirmation"
                                                      name="client[password_confirmation]" size="30" type="password">
                    </div>
                </div>


                <div class="field fc">
                    <div class="field-label"></div>
                    <div class="field-content"><input class="button" name="commit" type="submit"
                                                      value="Зарегистрировать"></div>
                </div>
            </div>
        </form>

    </div>
</div>
<link href="/served_assets/css/insales_panel-22268b31467501fb1fa1343f09aa0222.css" media="screen" rel="stylesheet"
      type="text/css">
<link href="/served_assets/css/demoshop_panel-6db123698092fa9025fc8ed61c835334.css" media="screen" rel="stylesheet"
      type="text/css">
</body>
</html>