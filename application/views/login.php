<!DOCTYPE html>
<html lang='ru' xml:lang='ru' xmlns='http://www.w3.org/1999/xhtml'>
<meta data-config="{&quot;money_with_currency_format&quot;:{&quot;delimiter&quot;:&quot;&quot;,&quot;separator&quot;:&quot;.&quot;,&quot;format&quot;:&quot;%n&amp;nbsp;%u&quot;,&quot;unit&quot;:&quot;\u0440\u0443\u0431&quot;,&quot;show_price_without_cents&quot;:0},&quot;currency_code&quot;:&quot;RUR&quot;,&quot;new_ya_metrika&quot;:null,&quot;ecommerce_data_container&quot;:&quot;dataLayer&quot;,&quot;common_js_version&quot;:null,&quot;account_id&quot;:79355,&quot;hide_items_out_of_stock&quot;:false,&quot;enable_comparison&quot;:true,&quot;locale&quot;:&quot;ru&quot;,&quot;client_group&quot;:null}"
      name="shop-config"/>
<head>
    <meta name='js-evnvironment' content='production'/>
    <meta name='default-locale' content='ru'/>
    <meta name='insales-redefined-api-methods' content="[]"/>
    <script src="/served_assets/js/shop_bundle-ce306071be6801f7eae474fcd5d36b88.js" type="text/javascript"></script>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
    <script type="text/javascript">window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "fd0d8ed08d",
            "applicationID": "40346406",
            "transactionName": "c14IQRMOXV4EQR1DUF9BFRoAAlJdFF1GH0tVQhVcDg9CHQ9WRQ==",
            "queueTime": 1,
            "applicationTime": 203,
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
                var s = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"], l = "api-", p = l + "ixn-";
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
                        n.src = "https://" + e.agent, t.parentNode.insertBefore(n, t)
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

                var u = e("handle"), c = e(2), f = e("ee"), s = window, l = s.document, p = "addEventListener", d = "attachEvent", v = s.XMLHttpRequest, g = v && v.prototype;
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
                l[p] ? (l[p]("DOMContentLoaded", i, !1), s[p]("load", r, !1)) : (l[d]("onreadystatechange", o), s[d]("onload", r)), u("mark", ["firstbyte", a()], null, "api");
                var h = 0
            }, {}]
        }, {}, ["loader"]);
    </script>
    <meta content='noindex, nofollow' name='robots'>
    <title>Вход в кабинет покупателя
    </title>
    <link href="/served_assets/css/checkout-69769e705ab952b0c34379965d46141c.css" media="screen" rel="stylesheet"
          type="text/css"/>
    <link href='/served_assets/css/custom_checkout.css' rel='stylesheet'>
    <script type="text/javascript" src="/served_assets/js/dev.js"></script>
</head>
<body>
<div class='header-bg'>
    <div class='header-blur'></div>
</div>
<div class='wrapper header fc'>
    <div class='shop-name fl'>
        <a href='/' target='_blank'>
            <div id='logo_bg'></div>
            <img alt='logo' id='logo' src="https://assets3.insales.ru/assets/1/49/573489/v_1455886663/build/loaded_logo.png">
        </a>
    </div>
    <div class='phone fr'>(495) 123-45-67</div>
</div>
<div class='wrapper body fc'>

    <div class='page-title'>Вход в кабинет покупателя
    </div>
    <div id="flash_messages">
        <div class="message"><p class="error">Сочетание логина и пароля не подходит</p></div>
    </div>

    <div id='top_info'></div>
    <div class='set wide_set'>
        <form accept-charset="UTF-8" action="/client_account/session" method="post">
            <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;"/></div>
            <div class='set-block small_label'>

                <div class='field fc'>
                    <div class='field-label'>
                        Email:
                    </div>
                    <div class='field-content'>
                        <input class="textfield" id="email" name="email" style="width: 200px;" type="text"/>
                    </div>
                </div>
                <div class='field fc'>
                    <div class='field-label'>
                        Пароль:
                    </div>
                    <div class='field-content'>
                        <input class="textfield" id="password" name="password" style="width: 200px;" type="password"/>
                    </div>
                </div>
                <div class='field fc'>
                    <div class='field-content'>
                        <input class='button' name='commit' type='submit' value='Войти'>
                    </div>
                </div>
                <div class='field fc'>
                    <div class='field-content'>
                        <a href="/client_account/password/change">Восстановить пароль</a>
                    </div>
                </div>
                <div class='field fc'>
                    <div class='field-content'>
                        <a href="/client_account/contacts/new">Зарегистрироваться</a>
                        <div class='service_logins' style='margin-top:6px;'>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
</body>
</html>
