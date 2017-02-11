<!DOCTYPE html>

<html class="inline-editor-disabled">
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
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!--    <script type="text/javascript" src="//bam.nr-data.net/1/fd0d8ed08d?a=40346406&amp;v=1016.8b58850&amp;to=c14IQRMOXV4EQR1DUF9BFRoTDl5GTlpcVF1ICwtcEhI%3D&amp;rst=2971&amp;ref=http://demo33063.myinsales.ru/&amp;qt=6&amp;ap=271&amp;be=665&amp;fe=2089&amp;dc=1074&amp;perf=%7B%22timing%22:%7B%22of%22:1486318703836,%22n%22:0,%22u%22:486,%22ue%22:486,%22f%22:0,%22dn%22:6,%22dne%22:6,%22c%22:6,%22ce%22:62,%22rq%22:63,%22rp%22:472,%22rpe%22:474,%22dl%22:497,%22di%22:1740,%22ds%22:1740,%22de%22:2026,%22dc%22:2753,%22l%22:2753,%22le%22:2806%7D,%22navigation%22:%7B%7D%7D&amp;jsonp=NREUM.setToken"></script>-->
    <!--    <script src="//js-agent.newrelic.com/nr-1016.min.js"></script>-->
    <script type="text/javascript" async="" src="/served_assets/js/insales_counter.js?5"></script>
    <script type="text/javascript">window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "fd0d8ed08d",
            "applicationID": "40346406",
            "transactionName": "c14IQRMOXV4EQR1DUF9BFRoTDl5GTlpcVF1ICwtcEhI=",
            "queueTime": 6,
            "applicationTime": 271,
            "agent": ""
        }</script>
    <script type="text/javascript">window.NREUM || (NREUM = {}), __nr_require = function (e, t, n) {
            function r(n) {
                if (!t[n]) {
                    var o = t[n] = {exports: {}};
                    e[n][0].call(o.exports, function (t) {
                        var o = e[n][1][t];
                        return r(o || t)
                    }, o, o.exports)
                }
                return t[n].exports
            }

            if ("function" == typeof __nr_require)return __nr_require;
            for (var o = 0; o < n.length; o++)r(n[o]);
            return r
        }({
            1: [function (e, t, n) {
                function r() {
                }

                function o(e, t, n) {
                    return function () {
                        return i(e, [(new Date).getTime()].concat(u(arguments)), t ? null : this, n), t ? void 0 : this
                    }
                }

                var i = e("handle"), a = e(2), u = e(3), c = e("ee").get("tracer"), f = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = f);
                var s = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace
                    ", "inlineHit", "addRelease"], l = "api - ", p = l + "ixn - ";
                    a(s, function (e, t) {
                        f[t] = o(l + t, !0, "api")
                    }), f.addPageAction = o(l + "addPageAction", !0), f.setCurrentRouteName = o(l + "routeName", !0), t.exports = newrelic, f.interaction = function () {
                        return (new r).get()
                    };
                var d = r.prototype = {
                    createTracer: function (e, t) {
                        var n = {}, r = this, o = "function" == typeof t;
                        return i(p + "tracer", [Date.now(), e, n], r), function () {
                            if (c.emit((o ? "" : "no-") + "fn-start", [Date.now(), r, o], n), o)try {
                                return t.apply(this, arguments)
                            } finally {
                                c.emit("fn-end", [Date.now()], n)
                            }
                        }
                    }
                };
                a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (e, t) {
                    d[t] = o(p + t)
                }), newrelic.noticeError = function (e) {
                    "string" == typeof e && (e = new Error(e)), i("err", [e, (new Date).getTime()])
                }
            }, {}], 2: [function (e, t, n) {
                function r(e, t) {
                    var n = [], r = "", i = 0;
                    for (r in e)o.call(e, r) && (n[i] = t(r, e[r]), i += 1);
                    return n
                }

                var o = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}], 3: [function (e, t, n) {
                function r(e, t, n) {
                    t || (t = 0), "undefined" == typeof n && (n = e ? e.length : 0);
                    for (var r = -1, o = n - t || 0, i = Array(o < 0 ? 0 : o); ++r < o;)i[r] = e[t + r];
                    return i
                }

                t.exports = r
            }, {}], ee: [function (e, t, n) {
                function r() {
                }

                function o(e) {
                    function t(e) {
                        return e && e instanceof r ? e : e ? c(e, u, i) : i()
                    }

                    function n(n, r, o) {
                        if (!p.aborted) {
                            e && e(n, r, o);
                            for (var i = t(o), a = v(n), u = a.length, c = 0; c < u; c++)a[c].apply(i, r);
                            var f = s[w[n]];
                            return f && f.push([y, n, r, i]), i
                        }
                    }

                    function d(e, t) {
                        b[e] = v(e).concat(t)
                    }

                    function v(e) {
                        return b[e] || []
                    }

                    function g(e) {
                        return l[e] = l[e] || o(n)
                    }

                    function m(e, t) {
                        f(e, function (e, n) {
                            t = t || "feature", w[n] = t, t in s || (s[t] = [])
                        })
                    }

                    var b = {}, w = {}, y = {
                        on: d,
                        emit: n,
                        get: g,
                        listeners: v,
                        context: t,
                        buffer: m,
                        abort: a,
                        aborted: !1
                    };
                    return y
                }

                function i() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (p.aborted = !0, s = p.backlog = {})
                }

                var u = "nr@context", c = e("gos"), f = e(2), s = {}, l = {}, p = t.exports = o();
                p.backlog = s
            }, {}], gos: [function (e, t, n) {
                function r(e, t, n) {
                    if (o.call(e, t))return e[t];
                    var r = n();
                    if (Object.defineProperty && Object.keys)try {
                        return Object.defineProperty(e, t, {value: r, writable: !0, enumerable: !1}), r
                    } catch (i) {
                    }
                    return e[t] = r, r
                }

                var o = Object.prototype.hasOwnProperty;
                t.exports = r
            }, {}], handle: [function (e, t, n) {
                function r(e, t, n, r) {
                    o.buffer([e], r), o.emit(e, t, n)
                }

                var o = e("ee").get("handle");
                t.exports = r, r.ee = o
            }, {}], id: [function (e, t, n) {
                function r(e) {
                    var t = typeof e;
                    return !e || "object" !== t && "function" !== t ? -1 : e === window ? 0 : a(e, i, function () {
                                return o++
                            })
                }

                var o = 1, i = "nr@id", a = e("gos");
                t.exports = r
            }, {}], loader: [function (e, t, n) {
                function r() {
                    if (!h++) {
                        var e = y.info = NREUM.info, t = l.getElementsByTagName("script")[0];
                        if (setTimeout(f.abort, 3e4), !(e && e.licenseKey && e.applicationID && t))return f.abort();
                        c(b, function (t, n) {
                            e[t] || (e[t] = n)
                        }), u("mark", ["onload", a()], null, "api");
                        var n = l.createElement("script");
                        n.src = "//" + e.agent, t.parentNode.insertBefore(n, t)
                    }
                }

                function o() {
                    "complete" === l.readyState && i()
                }

                function i() {
                    u("mark", ["domContent", a()], null, "api")
                }

                function a() {
                    return (new Date).getTime()
                }

                var u = e("handle"), c = e(2), f = e("ee"), s = window, l = s.document, p = "addEventListener
                ", d = "
                attachEvent
                ", v = s.XMLHttpRequest, g = v && v.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    CT: clearTimeout,
                    XHR: v,
                    REQ: s.Request,
                    EV: s.Event,
                    PR: s.Promise,
                    MO: s.MutationObserver
                }, e(1);
                var m = "" + location, b = {
                    beacon: "bam.nr-data.net",
                    errorBeacon: "bam.nr-data.net",
                    agent: "js-agent.newrelic.com/nr-1016.min.js"
                }, w = v && g && g[p] && !/CriOS/.test(navigator.userAgent), y = t.exports = {
                    offset: a(),
                    origin: m,
                    features: {},
                    xhrWrappable: w
                };
                l[p] ? (l[p]("DOMContentLoaded", i, !1), s[p]("load", r, !1)) : (l[d]("onreadystatechange
                ", o), s[d]("
                onload
                ", r)), u("
                mark
                ", ["
                firstbyte
                ", a()], null, "
                api
                ");
                var h = 0
            }, {}]
        }, {}, ["loader"]);</script>
    <meta data-config="{&quot;money_with_currency_format&quot;:{&quot;delimiter&quot;:&quot;&quot;,&quot;separator&quot;:&quot;.&quot;,&quot;format&quot;:&quot;%n&amp;nbsp;%u&quot;,&quot;unit&quot;:&quot;\u0440\u0443\u0431&quot;,&quot;show_price_without_cents&quot;:0},&quot;currency_code&quot;:&quot;RUR&quot;,&quot;new_ya_metrika&quot;:null,&quot;ecommerce_data_container&quot;:&quot;dataLayer&quot;,&quot;common_js_version&quot;:null,&quot;account_id&quot;:79355,&quot;hide_items_out_of_stock&quot;:false,&quot;enable_comparison&quot;:true,&quot;locale&quot;:&quot;ru&quot;,&quot;client_group&quot;:null}"
          name="shop-config">
    <meta name="js-evnvironment" content="production">
    <meta name="default-locale" content="ru">
    <meta name="insales-redefined-api-methods" content="[]">
    <script src="/served_assets/js/shop_bundle-ce306071be6801f7eae474fcd5d36b88.js"
            type="text/javascript"></script>
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
    <style type="text/css"></style>
    <!--InsalesCounter -->
    <script type="text/javascript">
        if (typeof(__id) == 'undefined') {
            var __id = 79355;

            (function () {
                var ic = document.createElement('script');
                ic.type = 'text/javascript';
                ic.async = true;
                ic.src = '/javascripts/insales_counter.js?5';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ic, s);
            })();
        }
    </script>
    <!-- /InsalesCounter -->

    <title>GADGE|SQUARE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Название магазина">
    <meta name="keywords" content="Название магазина">
    <meta name="robots" content="index,follow">
    <link rel="stylesheet" type="text/css" href="/served_assets/css/theme.css" media="all">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

    <script type="text/javascript" src="/served_assets/js/empty.js"></script>
    <script type="text/javascript"
            src="/served_assets/js/jq.slider.js"></script>
    <script type="text/javascript"
            src="/served_assets/js/jq.cart.js"></script>
    <script type="text/javascript"
            src="/served_assets/js/shadowbox.js"></script>
    <script type="text/javascript"
            src="/served_assets/js/jquery.MetaData.js"></script>
    <script type="text/javascript"
            src="/served_assets/js/rating.js"></script>
    <script type="text/javascript"
            src="/served_assets/js/jq.theme.js"></script>
    <script type="text/javascript">$.fn.rating.options.cancel = 'Сбросить';</script>
    <script type="text/javascript">var cv_currency_format = "{\"delimiter\":\"\",\"separator\":\".\",\"format\":\
        " % n & nbsp;
        %
        u
        \
        ",\"unit\":\"\\u0440\\u0443\\u0431\",\"show_price_without_cents\":0}";</script>
    <script type="text/javascript">
        jQuery(window).bind("load", function () {
            prepare_slider(jQuery('#slider_list'), jQuery('#left_but'), jQuery('#right_but'));
            prepare_slider2(jQuery('#slider_list_2'), jQuery('#left_but_2'), jQuery('#right_but_2'));
            intro();
            intro2();
            jQuery('.cms-index-index .block:last').css('margin-bottom', 0);
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $("a.add_to_compare").click(function (e) {
                e.preventDefault()
            });
            new InSales.Compare({
                selector: 'a.add_to_compare',
                draw: function (products) {
                    var text = '';
                    if (products.length == 0) {
                        $('#compare_div').hide();
                        $('.compare_message').show();
                        text += '<div class="sidebar-block-2"> <div class="top_bg"> <div class="bot_bg
                        "><div class="
                        left_bg
                        "> <div class="
                        right - bg
                        "> <div class="
                        left - top
                        "> <div class="
                        right - top
                        "><div class="
                        left - bot
                        "><div class="
                        right - bot
                        "><div class="
                        block - title
                        "> <strong><span>Сравнить товары</span></strong> </div><div class="
                        block - content
                        ">';
                        text += '<div class="noforcompare"><p>нет товаров для сравнения</p></div>';
                        text += '</div>';
                    } else {
                        text += '<div class="sidebar-block-2"> <div class="top_bg"> <div class="bot_bg
                        "><div class="
                        left_bg
                        "> <div class="
                        right - bg
                        "> <div class="
                        left - top
                        "> <div class="
                        right - top
                        "><div class="
                        left - bot
                        "><div class="
                        right - bot
                        "><div class="
                        block - title
                        "> <strong><span>Сравнить товары</span></strong> </div><div class="
                        block - content
                        clearfix
                        "><ol id="
                        compare - items
                        " class="
                        parse_items3
                        ">';
                        $(products).each(function (index, product) {
                            text += '<li class="parse_item item">';
                            text += '<a href="javascript:;" class="remove_item remove_compare btn-remove" rel="' + product.id + '">Удалить позицию</a>';
                            text += '<p class="product-name">' + product.title + '</p>';
                            text += '</li>'
                        });
                        text += '</ol><div class="actions"><button type="button" title="Сравнить
                        " onclick="
                        location.href = \'/compares\'" class="button"><span><span>Сравнить</span></span></button></div></div> </div>  </div> </div></div> </div></div></div> </div> </div>'
                    }
                    $('#compare').html(text);
                }
            });
        });
    </script>

    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css"
          href="/served_assets/css/styles-ie.css" media="all"/>
    <![endif]-->
</head>
<body class="<?= @$main ?> cms-homecatalog-product-view">
<noscript>
    &lt;div class="noscript"&gt;
    &lt;div class="noscript-inner"&gt;
    &lt;p&gt;&lt;strong&gt;JavaScript seem to be disabled in your browser.&lt;/strong&gt;&lt;/p&gt;
    &lt;p&gt;You must have JavaScript enabled in your browser to utilize the functionality of this website.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
</noscript>
<div class="header-container">
    <div class="page">
        <div class="header">
            <a href="/" title="GADGE|SQUARE" class="logo clearfix">
                <img  src="/served_assets/img/loaded_logo.png" alt="Название магазина">
            </a>
            <div class="quick-access">

                <div class="clear"></div>
                <div class="welcome-msg"><span><span>(495) 123-45-67</span></span></div>
                <div class="clear"></div>

                <ul class="links">

                    <li class="first "><a href="/" class="active" title="Главная">Главная<span></span></a></li>

                    <li class=" "><a href="/delivery" title="Условия доставки">Условия доставки<span></span></a></li>

                    <li class=" "><a href="/client_account/login" title="Личный кабинет">Личный кабинет<span></span></a></li>

                    <li class=" last"><a href="/news" title="Новости">Новости<span></span></a></li>

                </ul>

                <div class="clear"></div>
                <form id="search_mini_form" action="/search" method="get">

                    <div class="form-search">
                        <label for="search">Поиск:</label>
                        <input id="search" type="text" name="q"
                               onfocus="if (this.value == 'поисковый запрос') { this.value=''; }"
                               onblur="if (this.value == '') { this.value='поисковый запрос' }" value="поисковый запрос"
                               class="input-text">
                        <button type="submit" title="Поиск" class="button"><span><span>Поиск</span></span></button>
                    </div>
                </form>
            </div>
            <div class="header-cart">
                <a href="/cart_items">Корзина:</a>

                <p>товаров: <span class="cart_items_count">1</span></p>
                <p>сумма: <span class="cart_items_price"> 67700&nbsp;руб</span></p>

            </div>
        </div>
    </div>
</div>
<div class="menu-wrapper">
    <div class="page">
        <div class="nav-container">
            <ul id="nav">

                <li class=" first  level-top"><a href="/product/" class="level-top"><span>Планшеты</span></a>
                </li>

                <li class="   level-top"><a href="/product/" class="level-top"><span>Смартфоны</span></a>
                </li>

                <li class="   level-top"><a href="/product/" class="  level-top"><span>Фото и видео</span></a>
                    <ul>

                        <li class=" first ">
                            <a href="/product/">
                                <span>Объективы </span>
                            </a>
                        </li>

                        <li class="last"><a href="/product/"><span>Вспышки </span></a></li>

                    </ul>
                </li>

                <li class="last level-top"><a href="/product/" class="level-top"><span>Аксессуары</span></a></li>

            </ul>
        </div>
    </div>
</div>


<?= @$slider ?>

<div class="wrapper">
    <div class="page">
        <div class="main-container col2-left-layout">
            <div class="main">
                <?= @$breadcrumbs ?>
                <div class="main-block">
                    <div class="corners-top">
                        <div>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="content-box">
                        <div class="full-width">

                            <? if ($this->uri->segment(1) == 'cart_items'){ ?>
                            <div class="col-main" style="float: left; width: auto">
                                <div class="cart">

                                    <? } else { ?>
                                    <div class="col-main">
                                        <? } ?>
                                        <div class="page-title category-title">
                                            <div class="bot-bg">
                                                <div class="left-bg">
                                                    <div class="right-bg">
                                                        <div class="left-top">
                                                            <div class="right-top">
                                                                <div class="left-bot">
                                                                    <div class="right-bot">
                                                                        <h1><?= @$header ?></h1>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--               main             -->
                                        <?= @$content ?>
                                        <!--end main-->

                                    </div>
                                    <!--side bar-->
                                    <? if (!@$sidebar) { ?>

                                    <? } else { ?>
                                        <div class="col-<?= (isset($sidebar_direct) && !empty($sidebar_direct)) ? 'right' : 'left' ?> sidebar">
                                            <div class="block block-cart">
                                                <div class="sidebar-block">
                                                    <div class="top_bg">
                                                        <div class="bot_bg">
                                                            <div class="left_bg">
                                                                <div class="right-bg">
                                                                    <div class="left-top">
                                                                        <div class="right-top">
                                                                            <div class="left-bot">
                                                                                <div class="right-bot parse_cart">
                                                                                    <div class="block-title">
                                                                                        <strong><span>Моя корзина</span></strong>
                                                                                    </div>
                                                                                    <div class="block-content">
                                                                                        <p class="empty basket_empty"
                                                                                           style="display:none">
                                                                                            В Вашей корзине пока нет
                                                                                            товаров.
                                                                                        </p>
                                                                                        <div class="basket_full">
                                                                                            <div class="summary">
                                                                                                <p class="amount"> Всего
                                                                                                    в
                                                                                                    корзине
                                                                                                    <a href="/cart_items/"><strong
                                                                                                                class="items_count">1</strong>
                                                                                                        шт.</a></p>
                                                                                                <p class="subtotal"><span
                                                                                                            class="label">Сумма:</span>
                                                                                                    <span class="price parse_total_price">67700&nbsp;руб</span>
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="actions">
                                                                                                <button type="button"
                                                                                                        title="оформить заказ"
                                                                                                        class="button"
                                                                                                        onclick="location.href='/cart_items/'">
                                                                                                    <span> <span>Оформить</span> </span>
                                                                                                </button>
                                                                                            </div>
                                                                                            <p class="block-subtitle">
                                                                                                Товары
                                                                                                в
                                                                                                корзине:</p>
                                                                                            <ol id="cart-sidebar"
                                                                                                class="mini-products-list parse_items">

                                                                                                <li class="item parse_item dataid20402454">
                                                                                                    <a href="/product/canon-ef-14mm-f28l-ii-usm"
                                                                                                       title="Canon EF 14mm f/2.8L II USM"
                                                                                                       class="product-image"><img
                                                                                                                src="//static12.insales.ru/images/products/1/2298/13019386/micro_15283.jpg"
                                                                                                                class="parse_img"></a>
                                                                                                    <div class="product-details">
                                                                                                        <a
                                                                                                                id="delete_20402454"
                                                                                                                href="/cart_items/20402454"
                                                                                                                title="Удалить с корзины"
                                                                                                                class="parse_remove_action btn-remove"
                                                                                                                data-id="dataid20402454">
                                                                                                            &nbsp;</a>
                                                                                                        <p class="product-name">
                                                                                                            <a
                                                                                                                    href="/product/canon-ef-14mm-f28l-ii-usm"
                                                                                                                    class="parse_product_url">Canon
                                                                                                                EF 14mm
                                                                                                                f/2.8L
                                                                                                                II
                                                                                                                USM</a>
                                                                                                        </p>
                                                                                                        <strong id="item_quantity_20402454"
                                                                                                                class="parse_item_quantity">1</strong>
                                                                                                        x
                                                                                                        <span class="price parse_sale_price">67700&nbsp;руб</span>
                                                                                                    </div>
                                                                                                </li>

                                                                                            </ol>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="order_item_js_template" style="display: none;">
                                                    <li class="item parse_item dataid"><a href="" title=""
                                                                                          class="product-image"><img
                                                                    src=""
                                                                    class="parse_img"></a>
                                                        <div class="product-details"><a id="delete_" href=""
                                                                                        title="Удалить с корзины"
                                                                                        class="parse_remove_action btn-remove"
                                                                                        data-id="dataid">&nbsp;</a>
                                                            <p class="product-name"><a href=""
                                                                                       class="parse_product_url"></a>
                                                            </p>
                                                            <strong id="item_quantity_"
                                                                    class="parse_item_quantity"></strong> x
                                                            <span class="price parse_sale_price"></span></div>
                                                    </li>
                                                </div>
                                            </div>

                                            <div class="block block-list">
                                                <div class="sidebar-block-2">
                                                    <div class="top_bg">
                                                        <div class="bot_bg">
                                                            <div class="left_bg">
                                                                <div class="right-bg">
                                                                    <div class="left-top">
                                                                        <div class="right-top">
                                                                            <div class="left-bot">
                                                                                <div class="right-bot">
                                                                                    <div class="block-title">
                                                                                        <strong><span>Акции и распродажи</span></strong>
                                                                                    </div>
                                                                                    <div class="block-content"><p><a
                                                                                                    href="/collection/planshety/product/apple-ipad-mini-16gb-wi-fi"><img
                                                                                                        style="border: 0pt none;"
                                                                                                        src="//static12.insales.ru/files/1/501/508405/original/action.png"
                                                                                                        height="300"
                                                                                                        width="175"></a>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="block block-list block-compare" id="compare"
                                                 style="margin-bottom: 0px;">
                                                <div class="sidebar-block-2">
                                                    <div class="top_bg">
                                                        <div class="bot_bg">
                                                            <div class="left_bg">
                                                                <div class="right-bg">
                                                                    <div class="left-top">
                                                                        <div class="right-top">
                                                                            <div class="left-bot">
                                                                                <div class="right-bot">
                                                                                    <div class="block-title">
                                                                                        <strong><span>Сравнить товары</span></strong>
                                                                                    </div>
                                                                                    <div class="block-content">
                                                                                        <div class="noforcompare"><p>нет
                                                                                                товаров
                                                                                                для
                                                                                                сравнения</p></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <? } ?>
                                    <!--end sidebar-->

                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="corners-bot">
                                <div>
                                    <div>&nbsp;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-container">
                    <div class="footer">
                        <ul class="links">

                            <li class="first "><a href="/feedback" title="Обратная связь">Обратная связь</a></li>

                            <li class=" "><a href="/" class="active" title="Главная страница">Главная страница</a></li>

                            <li class=" "><a href="/login" title="Регистрация/Вход">Регистрация/Вход</a></li>

                            <li class=" "><a href="/delivery" title="Доставка">Доставка</a></li>

                            <li class=" last"><a href="/news" title="Новости">Новости</a></li>

                        </ul>
                        <br class="clear">
                        <div class="right"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--<script src="/served_assets/shop/insales_panel-6f4088ffc4a68cf8a0fd0ad3e6c60323.js" type="text/javascript"></script>-->
        <!--<link href="/served_assets/shop/insales_panel-22268b31467501fb1fa1343f09aa0222.css" media="screen" rel="stylesheet"-->
        <!--      type="text/css">-->
        <!--<link href="/served_assets/shop/demoshop_panel-6db123698092fa9025fc8ed61c835334.css" media="screen" rel="stylesheet"-->
        <!--      type="text/css">-->
        <!--<div class="is-site" id="insales-panel">-->
        <!--    <div class="msgs-row">-->
        <!--        <div class="msgs-container" id="runtime-msgs"></div>-->
        <!--    </div>-->
        <!--    <div class="is-header">-->
        <!--        <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"-->
        <!--             x="0px" y="0px" width="133px" height="43px" viewBox="0 0 136.516 48.154"-->
        <!--             enable-background="new 0 0 136.516 48.154" xml:space="preserve">-->
        <!--  <path fill="#ffffff-->
        <!--        " d="M35.102,25.505c-1.248-4.098-0.935-8.557,1.241-12.449c3.725-6.654,11.723-9.526,19.243-7.473l2.183,3.468-->
        <!--        l-3.494,2.902c-7.52-1.438-14.602,0.842-17.693,6.368C35.352,20.515,34.892,22.979,35.102,25.505L35.102,25.505z"></path>-->
        <!--            <g>-->
        <!--                <path fill="#ffffff" d="M10.986,47.626H5.099V18.097h5.888V47.626z"></path>-->
        <!--                <path fill="#ffffff-->
        <!--        " d="M33.881,47.626h-5.8V34.708c-0.06-0.995-0.447-1.83-1.165-2.505c-0.718-0.674-1.589-1.039-2.614-1.099-->
        <!--        c-1.113,0.03-2.029,0.381-2.746,1.055c-0.719,0.675-1.121,1.494-1.209,2.461v13.007h-5.888V26.139h5.888v1.318-->
        <!--        c1.436-1.23,3.223-1.846,5.361-1.846c2.285,0,4.219,0.864,5.8,2.592c1.582,1.729,2.373,3.896,2.373,6.504V47.626z"></path>-->
        <!--                <path fill="#ffffff-->
        <!--        " d="M60.658,38.97c0,3.047-1.136,5.339-3.405,6.877c-2.271,1.538-5.105,2.307-8.503,2.307-->
        <!--        c-4.453-0.029-8.48-1.641-12.084-4.834l4.262-4.262c2.549,1.963,5.259,3.031,8.13,3.207c1.758,0,3.164-0.285,4.219-0.856-->
        <!--        c1.054-0.571,1.581-1.354,1.581-2.351c0.029-0.996-0.454-1.816-1.45-2.461s-2.68-1.113-5.053-1.406-->
        <!--        c-3.516-0.439-6.086-1.435-7.712-2.988c-1.626-1.552-2.425-3.384-2.395-5.492c0-2.578,0.886-4.717,2.658-6.416-->
        <!--        c1.772-1.698,4.328-2.562,7.668-2.593c4.071,0.088,7.558,1.362,10.458,3.823L54.857,25.7c-1.669-1.289-3.69-1.992-6.063-2.109-->
        <!--        c-1.758,0-3.003,0.257-3.735,0.769c-0.732,0.513-1.099,1.165-1.099,1.956c0.029,0.82,0.418,1.436,1.165,1.845-->
        <!--        c0.747,0.411,1.999,0.703,3.757,0.879c3.72,0.352,6.613,1.385,8.679,3.099S60.658,36.128,60.658,38.97z"></path>-->
        <!--                <path fill="#ffffff-->
        <!--        " d="M82.729,47.626h-5.58v-0.703c-1.729,0.674-3.633,1.011-5.713,1.011c-2.373,0-4.321-0.674-5.844-2.021-->
        <!--        c-1.524-1.347-2.285-3.076-2.285-5.185c0-2.227,0.842-4.079,2.526-5.56c1.685-1.479,3.801-2.219,6.35-2.219-->
        <!--        c1.729,0,3.412,0.191,5.054,0.571c0.058-0.791-0.235-1.421-0.879-1.89c-0.645-0.468-1.655-0.717-3.032-0.747-->
        <!--        c-2.051,0-4.043,0.527-5.977,1.582l-2.284-4.569c2.929-1.523,5.683-2.285,8.261-2.285c2.812,0,5.082,0.659,6.811,1.978-->
        <!--        c1.729,1.317,2.593,3.325,2.593,6.02V47.626z M77.148,41.738v-3.207c-1.758-0.352-3.413-0.527-4.966-0.527-->
        <!--        c-0.938,0-1.722,0.234-2.351,0.703c-0.631,0.469-0.945,1.04-0.945,1.714c0,0.645,0.374,1.216,1.121,1.713-->
        <!--        c0.747,0.499,1.647,0.747,2.702,0.747C74.32,42.88,75.801,42.5,77.148,41.738z"></path>-->
        <!--                <path fill="#ffffff" d="M92.272,47.626h-5.888v-26.98l5.888-2.944V47.626z"></path>-->
        <!--                <path fill="#ffffff-->
        <!--        " d="M115.312,38.75H101.25c0.264,1.23,0.82,2.197,1.67,2.899c0.85,0.703,1.86,1.041,3.032,1.011-->
        <!--        c1.318,0,2.489-0.512,3.516-1.537l3.91,3.075c-1.963,2.549-4.453,3.823-7.47,3.823c-3.047,0-5.537-1.047-7.471-3.142-->
        <!--        c-1.933-2.095-2.899-4.782-2.899-8.063c0-2.08,0.439-3.999,1.318-5.757s2.123-3.104,3.734-4.042s3.296-1.406,5.054-1.406-->
        <!--        c1.786,0,3.449,0.527,4.987,1.582c1.538,1.054,2.702,2.453,3.493,4.196S115.312,35.586,115.312,38.75z M109.512,33.873-->
        <!--        c-0.206-0.938-0.675-1.67-1.406-2.197c-0.732-0.527-1.554-0.805-2.461-0.835c-0.908,0.03-1.735,0.308-2.482,0.835-->
        <!--        s-1.224,1.26-1.429,2.197H109.512z"></path>-->
        <!--                <path fill="#ffffff-->
        <!--        " d="M136.516,41.43c0,1.758-0.784,3.296-2.351,4.614c-1.567,1.318-4.064,1.978-7.492,1.978-->
        <!--        c-3.018,0-6.343-0.819-9.975-2.461l2.593-5.141c2.694,1.553,5.229,2.358,7.602,2.416c1.846-0.058,2.944-0.241,3.296-0.549-->
        <!--        s0.527-0.622,0.527-0.945c0-0.321-0.198-0.637-0.594-0.944s-1.619-0.666-3.669-1.076c-2.52-0.498-4.577-1.245-6.174-2.241-->
        <!--        s-2.425-2.373-2.482-4.131c-0.06-2.167,0.725-3.933,2.351-5.295s3.786-2.043,6.481-2.043c3.046,0,6.181,0.82,9.403,2.461-->
        <!--        l-2.461,4.877c-2.49-1.083-4.73-1.67-6.723-1.758c-1.084,0-1.883,0.117-2.395,0.352c-0.514,0.235-0.77,0.587-0.77,1.055-->
        <!--        c0.059,0.352,0.314,0.631,0.77,0.835c0.453,0.205,1.486,0.513,3.098,0.923c2.9,0.674,5.119,1.509,6.657,2.505-->
        <!--        S136.516,39.38,136.516,41.43z"></path>-->
        <!--            </g>-->
        <!--</svg>-->
        <!--    </div>-->
        <!--    <ul class="is-nav">-->
        <!--        <li class="is-preview-title is-ellipsis">-->
        <!--            <div class="is-label-theme-preview"><a href="http://www.insales.ru/collection/themes">Шаблоны-->
        <!--                    интернет-магазина</a></div>-->
        <!--            Шаблон интернет магазина - Gadge Square-->
        <!--        </li>-->
        <!--    </ul>-->
        <!--    <ul class="domoshop-button is-nav is-nav-right" data-demoshop-auth="//auth.insales.ru/authorized_domains"-->
        <!--        id="demo-use-theme" style="display: none">-->
        <!--        <li class="is-theme-action btn-group dropdown"><a class="is-panel-button" href="/admin2/remote_themes/31071448"-->
        <!--                                                          rel="external" title="Тема окажется в списке установленных.">Купить-->
        <!--                тему</a><a class="dropdown-toggle is-panel-button" data-toggle="is-dropdown" href="#"-->
        <!--                           type="button"><span class="caret"></span></a>-->
        <!--            <ul class="is-dropdown-menu dropdown-menu-right" role="menu">-->
        <!--                <li><a href="/admin2/remote_themes/31071448" rel="external"-->
        <!--                       title="Тема окажется в списке установленных.">Купить тему</a></li>-->
        <!--                <li><a href="/admin2/remote_themes/31071448/preview" rel="external"-->
        <!--                       title="Предпросмотр вашего магазина с этой темой.">Примерить тему</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--    </ul>-->
        <!--    <ul class="is-nav is-nav-right" data-demoshop-auth="//auth.insales.ru/authorized_domains"-->
        <!--        id="demo-create-shop" style="">-->
        <!--        <li class="is-theme-action"><a class="is-panel-button"-->
        <!--                                       href="http://www.insales.ru/page/registration_template?demo_shop_account=demo33063&amp;remote_theme_id=31071448"-->
        <!--                                       rel="external"><span>Создать свой магазин</span>-->
        <!--                <small>на этом шаблоне</small>-->
        <!--            </a></li>-->
        <!--    </ul>-->
        <!--    <a class="is-toggle-panel" href="#" rel="external"><i class="glyphicon panelicon-toggle"></i></a></div>-->
        <!---->
        <!--<div id="sb-container">-->
        <!--    <div id="sb-overlay"></div>-->
        <!--    <div id="sb-wrapper">-->
        <!--        <div id="sb-title">-->
        <!--            <div id="sb-title-inner"></div>-->
        <!--        </div>-->
        <!--        <div id="sb-wrapper-inner">-->
        <!--            <div id="sb-body">-->
        <!--                <div id="sb-body-inner"></div>-->
        <!--                <div id="sb-loading">-->
        <!--                    <div id="sb-loading-inner"><span>загрузка</span></div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--        <div id="sb-info">-->
        <!--            <div id="sb-info-inner">-->
        <!--                <div id="sb-counter"></div>-->
        <!--                <div id="sb-nav"><a id="sb-nav-close" title="Закрыть" onclick="Shadowbox.close()"></a><a-->
        <!--                            id="sb-nav-next" title="Следующая" onclick="Shadowbox.next()"></a><a id="sb-nav-play"-->
        <!--                                                                                                 title="Пуск"-->
        <!--                                                                                                 onclick="Shadowbox.play()"></a><a-->
        <!--                            id="sb-nav-pause" title="Пауза" onclick="Shadowbox.pause()"></a><a id="sb-nav-previous"-->
        <!--                                                                                               title="Предыдущая"-->
        <!--                                                                                               onclick="Shadowbox.previous()"></a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
</body>
</html>