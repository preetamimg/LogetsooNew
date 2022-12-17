/*
 Highstock JS v10.2.1 (2022-08-29)

 (c) 2009-2021 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(V, O) {
    "object" === typeof module && module.exports ? (O["default"] = O,
    module.exports = V.document ? O(V) : O) : "function" === typeof define && define.amd ? define("highcharts/highstock", function() {
        return O(V)
    }) : (V.Highcharts && V.Highcharts.error(16, !0),
    V.Highcharts = O(V))
}
)("undefined" !== typeof window ? window : this, function(V) {
    function O(c, D, f, F) {
        c.hasOwnProperty(D) || (c[D] = F.apply(null, f),
        "function" === typeof CustomEvent && V.dispatchEvent(new CustomEvent("HighchartsModuleLoaded",{
            detail: {
                path: D,
                module: c[D]
            }
        })))
    }
    var f = {};
    O(f, "Core/Globals.js", [], function() {
        var c;
        (function(c) {
            c.SVG_NS = "http://www.w3.org/2000/svg";
            c.product = "Highcharts";
            c.version = "10.2.1";
            c.win = "undefined" !== typeof V ? V : {};
            c.doc = c.win.document;
            c.svg = c.doc && c.doc.createElementNS && !!c.doc.createElementNS(c.SVG_NS, "svg").createSVGRect;
            c.userAgent = c.win.navigator && c.win.navigator.userAgent || "";
            c.isChrome = -1 !== c.userAgent.indexOf("Chrome");
            c.isFirefox = -1 !== c.userAgent.indexOf("Firefox");
            c.isMS = /(edge|msie|trident)/i.test(c.userAgent) && !c.win.opera;
            c.isSafari = !c.isChrome && -1 !== c.userAgent.indexOf("Safari");
            c.isTouchDevice = /(Mobile|Android|Windows Phone)/.test(c.userAgent);
            c.isWebKit = -1 !== c.userAgent.indexOf("AppleWebKit");
            c.deg2rad = 2 * Math.PI / 360;
            c.hasBidiBug = c.isFirefox && 4 > parseInt(c.userAgent.split("Firefox/")[1], 10);
            c.hasTouch = !!c.win.TouchEvent;
            c.marginNames = ["plotTop", "marginRight", "marginBottom", "plotLeft"];
            c.noop = function() {}
            ;
            c.supportsPassiveEvents = function() {
                var f = !1;
                if (!c.isMS) {
                    var D = Object.defineProperty({}, "passive", {
                        get: function() {
                            f = !0
                        }
                    });
                    c.win.addEventListener && c.win.removeEventListener && (c.win.addEventListener("testPassive", c.noop, D),
                    c.win.removeEventListener("testPassive", c.noop, D))
                }
                return f
            }();
            c.charts = [];
            c.dateFormats = {};
            c.seriesTypes = {};
            c.symbolSizes = {};
            c.chartCount = 0
        }
        )(c || (c = {}));
        "";
        return c
    });
    O(f, "Core/Utilities.js", [f["Core/Globals.js"]], function(c) {
        function f(e, b, h, v) {
            var p = b ? "Highcharts error" : "Highcharts warning";
            32 === e && (e = "" + p + ": Deprecated member");
            var l = r(e)
              , k = l ? "" + p + " #" + e + ": www.highcharts.com/errors/" + e + "/" : e.toString();
            if ("undefined" !== typeof v) {
                var u = "";
                l && (k += "?");
                M(v, function(b, e) {
                    u += "\n - ".concat(e, ": ").concat(b);
                    l && (k += encodeURI(e) + "=" + encodeURI(b))
                });
                k += u
            }
            C(c, "displayError", {
                chart: h,
                code: e,
                message: k,
                params: v
            }, function() {
                if (b)
                    throw Error(k);
                n.console && -1 === f.messages.indexOf(k) && console.warn(k)
            });
            f.messages.push(k)
        }
        function B(e, b) {
            var h = {};
            M(e, function(v, p) {
                if (H(e[p], !0) && !e.nodeType && b[p])
                    v = B(e[p], b[p]),
                    Object.keys(v).length && (h[p] = v);
                else if (H(e[p]) || e[p] !== b[p] || p in e && !(p in b))
                    h[p] = e[p]
            });
            return h
        }
        function F(e, b) {
            return parseInt(e, b || 10)
        }
        function z(e) {
            return "string" === typeof e
        }
        function E(e) {
            e = Object.prototype.toString.call(e);
            return "[object Array]" === e || "[object Array Iterator]" === e
        }
        function H(e, b) {
            return !!e && "object" === typeof e && (!b || !E(e))
        }
        function w(e) {
            return H(e) && "number" === typeof e.nodeType
        }
        function t(e) {
            var b = e && e.constructor;
            return !(!H(e, !0) || w(e) || !b || !b.name || "Object" === b.name)
        }
        function r(e) {
            return "number" === typeof e && !isNaN(e) && Infinity > e && -Infinity < e
        }
        function a(e) {
            return "undefined" !== typeof e && null !== e
        }
        function d(e, b, h) {
            var v = z(b) && !a(h), p, l = function(b, h) {
                a(b) ? e.setAttribute(h, b) : v ? (p = e.getAttribute(h)) || "class" !== h || (p = e.getAttribute(h + "Name")) : e.removeAttribute(h)
            };
            z(b) ? l(h, b) : M(b, l);
            return p
        }
        function g(e, b) {
            var h;
            e || (e = {});
            for (h in b)
                e[h] = b[h];
            return e
        }
        function m() {
            for (var e = arguments, b = e.length, h = 0; h < b; h++) {
                var v = e[h];
                if ("undefined" !== typeof v && null !== v)
                    return v
            }
        }
        function q(e, b) {
            c.isMS && !c.svg && b && a(b.opacity) && (b.filter = "alpha(opacity=".concat(100 * b.opacity, ")"));
            g(e.style, b)
        }
        function x(e) {
            return Math.pow(10, Math.floor(Math.log(e) / Math.LN10))
        }
        function J(e, b) {
            return 1E14 < e ? e : parseFloat(e.toPrecision(b || 14))
        }
        function I(e, b, h) {
            var v = c.getStyle || I;
            if ("width" === b)
                return b = Math.min(e.offsetWidth, e.scrollWidth),
                h = e.getBoundingClientRect && e.getBoundingClientRect().width,
                h < b && h >= b - 1 && (b = Math.floor(h)),
                Math.max(0, b - (v(e, "padding-left", !0) || 0) - (v(e, "padding-right", !0) || 0));
            if ("height" === b)
                return Math.max(0, Math.min(e.offsetHeight, e.scrollHeight) - (v(e, "padding-top", !0) || 0) - (v(e, "padding-bottom", !0) || 0));
            n.getComputedStyle || f(27, !0);
            if (e = n.getComputedStyle(e, void 0)) {
                var p = e.getPropertyValue(b);
                m(h, "opacity" !== b) && (p = F(p))
            }
            return p
        }
        function M(e, b, h) {
            for (var v in e)
                Object.hasOwnProperty.call(e, v) && b.call(h || e[v], e[v], v, e)
        }
        function K(e, b, h) {
            function v(b, v) {
                var p = e.removeEventListener || c.removeEventListenerPolyfill;
                p && p.call(e, b, v, !1)
            }
            function p(p) {
                var h;
                if (e.nodeName) {
                    if (b) {
                        var l = {};
                        l[b] = !0
                    } else
                        l = p;
                    M(l, function(b, e) {
                        if (p[e])
                            for (h = p[e].length; h--; )
                                v(e, p[e][h].fn)
                    })
                }
            }
            var l = "function" === typeof e && e.prototype || e;
            if (Object.hasOwnProperty.call(l, "hcEvents")) {
                var n = l.hcEvents;
                b ? (l = n[b] || [],
                h ? (n[b] = l.filter(function(b) {
                    return h !== b.fn
                }),
                v(b, h)) : (p(n),
                n[b] = [])) : (p(n),
                delete l.hcEvents)
            }
        }
        function C(e, b, h, v) {
            h = h || {};
            if (y.createEvent && (e.dispatchEvent || e.fireEvent && e !== c)) {
                var p = y.createEvent("Events");
                p.initEvent(b, !0, !0);
                h = g(p, h);
                e.dispatchEvent ? e.dispatchEvent(h) : e.fireEvent(b, h)
            } else if (e.hcEvents) {
                h.target || g(h, {
                    preventDefault: function() {
                        h.defaultPrevented = !0
                    },
                    target: e,
                    type: b
                });
                p = [];
                for (var l = e, n = !1; l.hcEvents; )
                    Object.hasOwnProperty.call(l, "hcEvents") && l.hcEvents[b] && (p.length && (n = !0),
                    p.unshift.apply(p, l.hcEvents[b])),
                    l = Object.getPrototypeOf(l);
                n && p.sort(function(b, e) {
                    return b.order - e.order
                });
                p.forEach(function(b) {
                    !1 === b.fn.call(e, h) && h.preventDefault()
                })
            }
            v && !h.defaultPrevented && v.call(e, h)
        }
        var A = c.charts
          , y = c.doc
          , n = c.win;
        (f || (f = {})).messages = [];
        Math.easeInOutSine = function(e) {
            return -.5 * (Math.cos(Math.PI * e) - 1)
        }
        ;
        var u = Array.prototype.find ? function(e, b) {
            return e.find(b)
        }
        : function(e, b) {
            var h, v = e.length;
            for (h = 0; h < v; h++)
                if (b(e[h], h))
                    return e[h]
        }
        ;
        M({
            map: "map",
            each: "forEach",
            grep: "filter",
            reduce: "reduce",
            some: "some"
        }, function(e, b) {
            c[b] = function(h) {
                var v;
                f(32, !1, void 0, (v = {},
                v["Highcharts.".concat(b)] = "use Array.".concat(e),
                v));
                return Array.prototype[e].apply(h, [].slice.call(arguments, 1))
            }
        });
        var l, k = function() {
            var e = Math.random().toString(36).substring(2, 9) + "-"
              , b = 0;
            return function() {
                return "highcharts-" + (l ? "" : e) + b++
            }
        }();
        n.jQuery && (n.jQuery.fn.highcharts = function() {
            var e = [].slice.call(arguments);
            if (this[0])
                return e[0] ? (new (c[z(e[0]) ? e.shift() : "Chart"])(this[0],e[0],e[1]),
                this) : A[d(this[0], "data-highcharts-chart")]
        }
        );
        u = {
            addEvent: function(e, b, h, v) {
                void 0 === v && (v = {});
                var p = "function" === typeof e && e.prototype || e;
                Object.hasOwnProperty.call(p, "hcEvents") || (p.hcEvents = {});
                p = p.hcEvents;
                c.Point && e instanceof c.Point && e.series && e.series.chart && (e.series.chart.runTrackerClick = !0);
                var l = e.addEventListener || c.addEventListenerPolyfill;
                l && l.call(e, b, h, c.supportsPassiveEvents ? {
                    passive: void 0 === v.passive ? -1 !== b.indexOf("touch") : v.passive,
                    capture: !1
                } : !1);
                p[b] || (p[b] = []);
                p[b].push({
                    fn: h,
                    order: "number" === typeof v.order ? v.order : Infinity
                });
                p[b].sort(function(b, e) {
                    return b.order - e.order
                });
                return function() {
                    K(e, b, h)
                }
            },
            arrayMax: function(e) {
                for (var b = e.length, h = e[0]; b--; )
                    e[b] > h && (h = e[b]);
                return h
            },
            arrayMin: function(e) {
                for (var b = e.length, h = e[0]; b--; )
                    e[b] < h && (h = e[b]);
                return h
            },
            attr: d,
            clamp: function(e, b, h) {
                return e > b ? e < h ? e : h : b
            },
            cleanRecursively: B,
            clearTimeout: function(e) {
                a(e) && clearTimeout(e)
            },
            correctFloat: J,
            createElement: function(e, b, h, v, p) {
                e = y.createElement(e);
                b && g(e, b);
                p && q(e, {
                    padding: "0",
                    border: "none",
                    margin: "0"
                });
                h && q(e, h);
                v && v.appendChild(e);
                return e
            },
            css: q,
            defined: a,
            destroyObjectProperties: function(e, b) {
                M(e, function(h, v) {
                    h && h !== b && h.destroy && h.destroy();
                    delete e[v]
                })
            },
            discardElement: function(e) {
                e && e.parentElement && e.parentElement.removeChild(e)
            },
            erase: function(e, b) {
                for (var h = e.length; h--; )
                    if (e[h] === b) {
                        e.splice(h, 1);
                        break
                    }
            },
            error: f,
            extend: g,
            extendClass: function(e, b) {
                var h = function() {};
                h.prototype = new e;
                g(h.prototype, b);
                return h
            },
            find: u,
            fireEvent: C,
            getMagnitude: x,
            getNestedProperty: function(e, b) {
                for (e = e.split("."); e.length && a(b); ) {
                    var h = e.shift();
                    if ("undefined" === typeof h || "__proto__" === h)
                        return;
                    b = b[h];
                    if (!a(b) || "function" === typeof b || "number" === typeof b.nodeType || b === n)
                        return
                }
                return b
            },
            getStyle: I,
            inArray: function(e, b, h) {
                f(32, !1, void 0, {
                    "Highcharts.inArray": "use Array.indexOf"
                });
                return b.indexOf(e, h)
            },
            isArray: E,
            isClass: t,
            isDOMElement: w,
            isFunction: function(e) {
                return "function" === typeof e
            },
            isNumber: r,
            isObject: H,
            isString: z,
            keys: function(e) {
                f(32, !1, void 0, {
                    "Highcharts.keys": "use Object.keys"
                });
                return Object.keys(e)
            },
            merge: function() {
                var e, b = arguments, h = {}, v = function(b, e) {
                    "object" !== typeof b && (b = {});
                    M(e, function(p, h) {
                        "__proto__" !== h && "constructor" !== h && (!H(p, !0) || t(p) || w(p) ? b[h] = e[h] : b[h] = v(b[h] || {}, p))
                    });
                    return b
                };
                !0 === b[0] && (h = b[1],
                b = Array.prototype.slice.call(b, 2));
                var p = b.length;
                for (e = 0; e < p; e++)
                    h = v(h, b[e]);
                return h
            },
            normalizeTickInterval: function(e, b, h, v, p) {
                var l = e;
                h = m(h, x(e));
                var n = e / h;
                b || (b = p ? [1, 1.2, 1.5, 2, 2.5, 3, 4, 5, 6, 8, 10] : [1, 2, 2.5, 5, 10],
                !1 === v && (1 === h ? b = b.filter(function(b) {
                    return 0 === b % 1
                }) : .1 >= h && (b = [1 / h])));
                for (v = 0; v < b.length && !(l = b[v],
                p && l * h >= e || !p && n <= (b[v] + (b[v + 1] || b[v])) / 2); v++)
                    ;
                return l = J(l * h, -Math.round(Math.log(.001) / Math.LN10))
            },
            objectEach: M,
            offset: function(e) {
                var b = y.documentElement;
                e = e.parentElement || e.parentNode ? e.getBoundingClientRect() : {
                    top: 0,
                    left: 0,
                    width: 0,
                    height: 0
                };
                return {
                    top: e.top + (n.pageYOffset || b.scrollTop) - (b.clientTop || 0),
                    left: e.left + (n.pageXOffset || b.scrollLeft) - (b.clientLeft || 0),
                    width: e.width,
                    height: e.height
                }
            },
            pad: function(e, b, h) {
                return Array((b || 2) + 1 - String(e).replace("-", "").length).join(h || "0") + e
            },
            pick: m,
            pInt: F,
            relativeLength: function(e, b, h) {
                return /%$/.test(e) ? b * parseFloat(e) / 100 + (h || 0) : parseFloat(e)
            },
            removeEvent: K,
            splat: function(e) {
                return E(e) ? e : [e]
            },
            stableSort: function(e, b) {
                var h = e.length, v, p;
                for (p = 0; p < h; p++)
                    e[p].safeI = p;
                e.sort(function(e, p) {
                    v = b(e, p);
                    return 0 === v ? e.safeI - p.safeI : v
                });
                for (p = 0; p < h; p++)
                    delete e[p].safeI
            },
            syncTimeout: function(e, b, h) {
                if (0 < b)
                    return setTimeout(e, b, h);
                e.call(0, h);
                return -1
            },
            timeUnits: {
                millisecond: 1,
                second: 1E3,
                minute: 6E4,
                hour: 36E5,
                day: 864E5,
                week: 6048E5,
                month: 24192E5,
                year: 314496E5
            },
            uniqueKey: k,
            useSerialIds: function(e) {
                return l = m(e, l)
            },
            wrap: function(e, b, h) {
                var v = e[b];
                e[b] = function() {
                    var b = Array.prototype.slice.call(arguments)
                      , e = arguments
                      , l = this;
                    l.proceed = function() {
                        v.apply(l, arguments.length ? arguments : e)
                    }
                    ;
                    b.unshift(v);
                    b = h.apply(this, b);
                    l.proceed = null;
                    return b
                }
            }
        };
        "";
        return u
    });
    O(f, "Core/Chart/ChartDefaults.js", [], function() {
        return {
            alignThresholds: !1,
            panning: {
                enabled: !1,
                type: "x"
            },
            styledMode: !1,
            borderRadius: 0,
            colorCount: 10,
            allowMutatingData: !0,
            defaultSeriesType: "line",
            ignoreHiddenSeries: !0,
            spacing: [10, 10, 15, 10],
            resetZoomButton: {
                theme: {
                    zIndex: 6
                },
                position: {
                    align: "right",
                    x: -10,
                    y: 10
                }
            },
            zoomBySingleTouch: !1,
            zooming: {
                singleTouch: !1,
                resetButton: {
                    theme: {
                        zIndex: 6
                    },
                    position: {
                        align: "right",
                        x: -10,
                        y: 10
                    }
                }
            },
            width: null,
            height: null,
            borderColor: "#335cad",
            backgroundColor: "#ffffff",
            plotBorderColor: "#cccccc"
        }
    });
    O(f, "Core/Color/Color.js", [f["Core/Globals.js"], f["Core/Utilities.js"]], function(c, f) {
        var D = f.isNumber
          , F = f.merge
          , z = f.pInt;
        f = function() {
            function f(D) {
                this.rgba = [NaN, NaN, NaN, NaN];
                this.input = D;
                var w = c.Color;
                if (w && w !== f)
                    return new w(D);
                if (!(this instanceof f))
                    return new f(D);
                this.init(D)
            }
            f.parse = function(c) {
                return c ? new f(c) : f.None
            }
            ;
            f.prototype.init = function(c) {
                var w;
                if ("object" === typeof c && "undefined" !== typeof c.stops)
                    this.stops = c.stops.map(function(a) {
                        return new f(a[1])
                    });
                else if ("string" === typeof c) {
                    this.input = c = f.names[c.toLowerCase()] || c;
                    if ("#" === c.charAt(0)) {
                        var t = c.length;
                        var r = parseInt(c.substr(1), 16);
                        7 === t ? w = [(r & 16711680) >> 16, (r & 65280) >> 8, r & 255, 1] : 4 === t && (w = [(r & 3840) >> 4 | (r & 3840) >> 8, (r & 240) >> 4 | r & 240, (r & 15) << 4 | r & 15, 1])
                    }
                    if (!w)
                        for (r = f.parsers.length; r-- && !w; ) {
                            var a = f.parsers[r];
                            (t = a.regex.exec(c)) && (w = a.parse(t))
                        }
                }
                w && (this.rgba = w)
            }
            ;
            f.prototype.get = function(c) {
                var w = this.input
                  , t = this.rgba;
                if ("object" === typeof w && "undefined" !== typeof this.stops) {
                    var r = F(w);
                    r.stops = [].slice.call(r.stops);
                    this.stops.forEach(function(a, d) {
                        r.stops[d] = [r.stops[d][0], a.get(c)]
                    });
                    return r
                }
                return t && D(t[0]) ? "rgb" === c || !c && 1 === t[3] ? "rgb(" + t[0] + "," + t[1] + "," + t[2] + ")" : "a" === c ? "".concat(t[3]) : "rgba(" + t.join(",") + ")" : w
            }
            ;
            f.prototype.brighten = function(c) {
                var w = this.rgba;
                if (this.stops)
                    this.stops.forEach(function(r) {
                        r.brighten(c)
                    });
                else if (D(c) && 0 !== c)
                    for (var t = 0; 3 > t; t++)
                        w[t] += z(255 * c),
                        0 > w[t] && (w[t] = 0),
                        255 < w[t] && (w[t] = 255);
                return this
            }
            ;
            f.prototype.setOpacity = function(c) {
                this.rgba[3] = c;
                return this
            }
            ;
            f.prototype.tweenTo = function(c, w) {
                var t = this.rgba
                  , r = c.rgba;
                if (!D(t[0]) || !D(r[0]))
                    return c.input || "none";
                c = 1 !== r[3] || 1 !== t[3];
                return (c ? "rgba(" : "rgb(") + Math.round(r[0] + (t[0] - r[0]) * (1 - w)) + "," + Math.round(r[1] + (t[1] - r[1]) * (1 - w)) + "," + Math.round(r[2] + (t[2] - r[2]) * (1 - w)) + (c ? "," + (r[3] + (t[3] - r[3]) * (1 - w)) : "") + ")"
            }
            ;
            f.names = {
                white: "#ffffff",
                black: "#000000"
            };
            f.parsers = [{
                regex: /rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]?(?:\.[0-9]+)?)\s*\)/,
                parse: function(c) {
                    return [z(c[1]), z(c[2]), z(c[3]), parseFloat(c[4], 10)]
                }
            }, {
                regex: /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/,
                parse: function(c) {
                    return [z(c[1]), z(c[2]), z(c[3]), 1]
                }
            }];
            f.None = new f("");
            return f
        }();
        "";
        return f
    });
    O(f, "Core/Color/Palettes.js", [], function() {
        return {
            colors: "#7cb5ec #434348 #90ed7d #f7a35c #8085e9 #f15c80 #e4d354 #2b908f #f45b5b #91e8e1".split(" ")
        }
    });
    O(f, "Core/Time.js", [f["Core/Globals.js"], f["Core/Utilities.js"]], function(c, f) {
        var D = c.win
          , F = f.defined
          , z = f.error
          , E = f.extend
          , H = f.isObject
          , w = f.merge
          , t = f.objectEach
          , r = f.pad
          , a = f.pick
          , d = f.splat
          , g = f.timeUnits
          , m = c.isSafari && D.Intl && D.Intl.DateTimeFormat.prototype.formatRange
          , q = c.isSafari && D.Intl && !D.Intl.DateTimeFormat.prototype.formatRange;
        f = function() {
            function x(a) {
                this.options = {};
                this.variableTimezone = this.useUTC = !1;
                this.Date = D.Date;
                this.getTimezoneOffset = this.timezoneOffsetFunction();
                this.update(a)
            }
            x.prototype.get = function(a, d) {
                if (this.variableTimezone || this.timezoneOffset) {
                    var m = d.getTime()
                      , g = m - this.getTimezoneOffset(d);
                    d.setTime(g);
                    a = d["getUTC" + a]();
                    d.setTime(m);
                    return a
                }
                return this.useUTC ? d["getUTC" + a]() : d["get" + a]()
            }
            ;
            x.prototype.set = function(a, d, g) {
                if (this.variableTimezone || this.timezoneOffset) {
                    if ("Milliseconds" === a || "Seconds" === a || "Minutes" === a && 0 === this.getTimezoneOffset(d) % 36E5)
                        return d["setUTC" + a](g);
                    var x = this.getTimezoneOffset(d);
                    x = d.getTime() - x;
                    d.setTime(x);
                    d["setUTC" + a](g);
                    a = this.getTimezoneOffset(d);
                    x = d.getTime() + a;
                    return d.setTime(x)
                }
                return this.useUTC || m && "FullYear" === a ? d["setUTC" + a](g) : d["set" + a](g)
            }
            ;
            x.prototype.update = function(d) {
                var g = a(d && d.useUTC, !0);
                this.options = d = w(!0, this.options || {}, d);
                this.Date = d.Date || D.Date || Date;
                this.timezoneOffset = (this.useUTC = g) && d.timezoneOffset || void 0;
                this.getTimezoneOffset = this.timezoneOffsetFunction();
                this.variableTimezone = g && !(!d.getTimezoneOffset && !d.timezone)
            }
            ;
            x.prototype.makeTime = function(d, g, m, x, C, A) {
                if (this.useUTC) {
                    var y = this.Date.UTC.apply(0, arguments);
                    var n = this.getTimezoneOffset(y);
                    y += n;
                    var u = this.getTimezoneOffset(y);
                    n !== u ? y += u - n : n - 36E5 !== this.getTimezoneOffset(y - 36E5) || q || (y -= 36E5)
                } else
                    y = (new this.Date(d,g,a(m, 1),a(x, 0),a(C, 0),a(A, 0))).getTime();
                return y
            }
            ;
            x.prototype.timezoneOffsetFunction = function() {
                var a = this
                  , d = this.options
                  , g = d.getTimezoneOffset
                  , m = d.moment || D.moment;
                if (!this.useUTC)
                    return function(a) {
                        return 6E4 * (new Date(a.toString())).getTimezoneOffset()
                    }
                    ;
                if (d.timezone) {
                    if (m)
                        return function(a) {
                            return 6E4 * -m.tz(a, d.timezone).utcOffset()
                        }
                        ;
                    z(25)
                }
                return this.useUTC && g ? function(a) {
                    return 6E4 * g(a.valueOf())
                }
                : function() {
                    return 6E4 * (a.timezoneOffset || 0)
                }
            }
            ;
            x.prototype.dateFormat = function(d, g, m) {
                if (!F(g) || isNaN(g))
                    return c.defaultOptions.lang && c.defaultOptions.lang.invalidDate || "";
                d = a(d, "%Y-%m-%d %H:%M:%S");
                var x = this
                  , q = new this.Date(g)
                  , A = this.get("Hours", q)
                  , y = this.get("Day", q)
                  , n = this.get("Date", q)
                  , u = this.get("Month", q)
                  , l = this.get("FullYear", q)
                  , k = c.defaultOptions.lang
                  , e = k && k.weekdays
                  , b = k && k.shortWeekdays;
                q = E({
                    a: b ? b[y] : e[y].substr(0, 3),
                    A: e[y],
                    d: r(n),
                    e: r(n, 2, " "),
                    w: y,
                    b: k.shortMonths[u],
                    B: k.months[u],
                    m: r(u + 1),
                    o: u + 1,
                    y: l.toString().substr(2, 2),
                    Y: l,
                    H: r(A),
                    k: A,
                    I: r(A % 12 || 12),
                    l: A % 12 || 12,
                    M: r(this.get("Minutes", q)),
                    p: 12 > A ? "AM" : "PM",
                    P: 12 > A ? "am" : "pm",
                    S: r(q.getSeconds()),
                    L: r(Math.floor(g % 1E3), 3)
                }, c.dateFormats);
                t(q, function(b, e) {
                    for (; -1 !== d.indexOf("%" + e); )
                        d = d.replace("%" + e, "function" === typeof b ? b.call(x, g) : b)
                });
                return m ? d.substr(0, 1).toUpperCase() + d.substr(1) : d
            }
            ;
            x.prototype.resolveDTLFormat = function(a) {
                return H(a, !0) ? a : (a = d(a),
                {
                    main: a[0],
                    from: a[1],
                    to: a[2]
                })
            }
            ;
            x.prototype.getTimeTicks = function(d, m, x, q) {
                var C = this, A = [], y = {}, n = new C.Date(m), u = d.unitRange, l = d.count || 1, k;
                q = a(q, 1);
                if (F(m)) {
                    C.set("Milliseconds", n, u >= g.second ? 0 : l * Math.floor(C.get("Milliseconds", n) / l));
                    u >= g.second && C.set("Seconds", n, u >= g.minute ? 0 : l * Math.floor(C.get("Seconds", n) / l));
                    u >= g.minute && C.set("Minutes", n, u >= g.hour ? 0 : l * Math.floor(C.get("Minutes", n) / l));
                    u >= g.hour && C.set("Hours", n, u >= g.day ? 0 : l * Math.floor(C.get("Hours", n) / l));
                    u >= g.day && C.set("Date", n, u >= g.month ? 1 : Math.max(1, l * Math.floor(C.get("Date", n) / l)));
                    if (u >= g.month) {
                        C.set("Month", n, u >= g.year ? 0 : l * Math.floor(C.get("Month", n) / l));
                        var e = C.get("FullYear", n)
                    }
                    u >= g.year && C.set("FullYear", n, e - e % l);
                    u === g.week && (e = C.get("Day", n),
                    C.set("Date", n, C.get("Date", n) - e + q + (e < q ? -7 : 0)));
                    e = C.get("FullYear", n);
                    q = C.get("Month", n);
                    var b = C.get("Date", n)
                      , h = C.get("Hours", n);
                    m = n.getTime();
                    !C.variableTimezone && C.useUTC || !F(x) || (k = x - m > 4 * g.month || C.getTimezoneOffset(m) !== C.getTimezoneOffset(x));
                    m = n.getTime();
                    for (n = 1; m < x; )
                        A.push(m),
                        m = u === g.year ? C.makeTime(e + n * l, 0) : u === g.month ? C.makeTime(e, q + n * l) : !k || u !== g.day && u !== g.week ? k && u === g.hour && 1 < l ? C.makeTime(e, q, b, h + n * l) : m + u * l : C.makeTime(e, q, b + n * l * (u === g.day ? 1 : 7)),
                        n++;
                    A.push(m);
                    u <= g.hour && 1E4 > A.length && A.forEach(function(b) {
                        0 === b % 18E5 && "000000000" === C.dateFormat("%H%M%S%L", b) && (y[b] = "day")
                    })
                }
                A.info = E(d, {
                    higherRanks: y,
                    totalRange: u * l
                });
                return A
            }
            ;
            x.prototype.getDateFormat = function(a, d, m, x) {
                var q = this.dateFormat("%m-%d %H:%M:%S.%L", d)
                  , A = {
                    millisecond: 15,
                    second: 12,
                    minute: 9,
                    hour: 6,
                    day: 3
                }
                  , y = "millisecond";
                for (n in g) {
                    if (a === g.week && +this.dateFormat("%w", d) === m && "00:00:00.000" === q.substr(6)) {
                        var n = "week";
                        break
                    }
                    if (g[n] > a) {
                        n = y;
                        break
                    }
                    if (A[n] && q.substr(A[n]) !== "01-01 00:00:00.000".substr(A[n]))
                        break;
                    "week" !== n && (y = n)
                }
                return this.resolveDTLFormat(x[n]).main
            }
            ;
            return x
        }();
        "";
        return f
    });
    O(f, "Core/DefaultOptions.js", [f["Core/Chart/ChartDefaults.js"], f["Core/Color/Color.js"], f["Core/Globals.js"], f["Core/Color/Palettes.js"], f["Core/Time.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E) {
        f = f.parse;
        var D = E.merge
          , w = {
            colors: F.colors,
            symbols: ["circle", "diamond", "square", "triangle", "triangle-down"],
            lang: {
                loading: "Loading...",
                months: "January February March April May June July August September October November December".split(" "),
                shortMonths: "Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),
                weekdays: "Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),
                decimalPoint: ".",
                numericSymbols: "kMGTPE".split(""),
                resetZoom: "Reset zoom",
                resetZoomTitle: "Reset zoom level 1:1",
                thousandsSep: " "
            },
            global: {},
            time: {
                Date: void 0,
                getTimezoneOffset: void 0,
                timezone: void 0,
                timezoneOffset: 0,
                useUTC: !0
            },
            chart: c,
            title: {
                text: "Chart title",
                align: "center",
                margin: 15,
                widthAdjust: -44
            },
            subtitle: {
                text: "",
                align: "center",
                widthAdjust: -44
            },
            caption: {
                margin: 15,
                text: "",
                align: "left",
                verticalAlign: "bottom"
            },
            plotOptions: {},
            labels: {
                style: {
                    position: "absolute",
                    color: "#333333"
                }
            },
            legend: {
                enabled: !0,
                align: "center",
                alignColumns: !0,
                className: "highcharts-no-tooltip",
                layout: "horizontal",
                labelFormatter: function() {
                    return this.name
                },
                borderColor: "#999999",
                borderRadius: 0,
                navigation: {
                    activeColor: "#003399",
                    inactiveColor: "#cccccc"
                },
                itemStyle: {
                    color: "#333333",
                    cursor: "pointer",
                    fontSize: "0.75em",
                    fontWeight: "bold",
                    textOverflow: "ellipsis"
                },
                itemHoverStyle: {
                    color: "#000000"
                },
                itemHiddenStyle: {
                    color: "#cccccc"
                },
                shadow: !1,
                itemCheckboxStyle: {
                    position: "absolute",
                    width: "0.813em",
                    height: "0.813em"
                },
                squareSymbol: !0,
                symbolPadding: 5,
                verticalAlign: "bottom",
                x: 0,
                y: 0,
                title: {
                    style: {
                        fontWeight: "bold"
                    }
                }
            },
            loading: {
                labelStyle: {
                    fontWeight: "bold",
                    position: "relative",
                    top: "45%"
                },
                style: {
                    position: "absolute",
                    backgroundColor: "#ffffff",
                    opacity: .5,
                    textAlign: "center"
                }
            },
            tooltip: {
                enabled: !0,
                animation: B.svg,
                borderRadius: 3,
                dateTimeLabelFormats: {
                    millisecond: "%A, %b %e, %H:%M:%S.%L",
                    second: "%A, %b %e, %H:%M:%S",
                    minute: "%A, %b %e, %H:%M",
                    hour: "%A, %b %e, %H:%M",
                    day: "%A, %b %e, %Y",
                    week: "Week from %A, %b %e, %Y",
                    month: "%B %Y",
                    year: "%Y"
                },
                footerFormat: "",
                headerShape: "callout",
                hideDelay: 500,
                padding: 8,
                shape: "callout",
                shared: !1,
                snap: B.isTouchDevice ? 25 : 10,
                headerFormat: '<span style="font-size: 0.63em">{point.key}</span><br/>',
                pointFormat: '<span style="color:{point.color}">\u25cf</span> {series.name}: <b>{point.y}</b><br/>',
                backgroundColor: f("#f7f7f7").setOpacity(.85).get(),
                borderWidth: 1,
                shadow: !0,
                stickOnContact: !1,
                style: {
                    color: "#333333",
                    cursor: "default",
                    fontSize: "0.75em",
                    whiteSpace: "nowrap"
                },
                useHTML: !1
            },
            credits: {
                enabled: !0,
                href: "https://www.highcharts.com?credits",
                position: {
                    align: "right",
                    x: -10,
                    verticalAlign: "bottom",
                    y: -5
                },
                style: {
                    cursor: "pointer",
                    color: "#999999",
                    fontSize: "0.563em"
                },
                text: "Highcharts.com"
            }
        };
        w.chart.styledMode = !1;
        "";
        var t = new z(D(w.global, w.time));
        c = {
            defaultOptions: w,
            defaultTime: t,
            getOptions: function() {
                return w
            },
            setOptions: function(r) {
                D(!0, w, r);
                if (r.time || r.global)
                    B.time ? B.time.update(D(w.global, w.time, r.global, r.time)) : B.time = t;
                return w
            }
        };
        "";
        return c
    });
    O(f, "Core/Animation/Fx.js", [f["Core/Color/Color.js"], f["Core/Globals.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = c.parse
          , z = f.win
          , E = B.isNumber
          , H = B.objectEach;
        return function() {
            function c(t, r, a) {
                this.pos = NaN;
                this.options = r;
                this.elem = t;
                this.prop = a
            }
            c.prototype.dSetter = function() {
                var t = this.paths
                  , r = t && t[0];
                t = t && t[1];
                var a = this.now || 0
                  , d = [];
                if (1 !== a && r && t)
                    if (r.length === t.length && 1 > a)
                        for (var g = 0; g < t.length; g++) {
                            for (var m = r[g], q = t[g], x = [], J = 0; J < q.length; J++) {
                                var I = m[J]
                                  , c = q[J];
                                E(I) && E(c) && ("A" !== q[0] || 4 !== J && 5 !== J) ? x[J] = I + a * (c - I) : x[J] = c
                            }
                            d.push(x)
                        }
                    else
                        d = t;
                else
                    d = this.toD || [];
                this.elem.attr("d", d, void 0, !0)
            }
            ;
            c.prototype.update = function() {
                var t = this.elem
                  , r = this.prop
                  , a = this.now
                  , d = this.options.step;
                if (this[r + "Setter"])
                    this[r + "Setter"]();
                else
                    t.attr ? t.element && t.attr(r, a, null, !0) : t.style[r] = a + this.unit;
                d && d.call(t, a, this)
            }
            ;
            c.prototype.run = function(t, r, a) {
                var d = this
                  , g = d.options
                  , m = function(a) {
                    return m.stopped ? !1 : d.step(a)
                }
                  , q = z.requestAnimationFrame || function(a) {
                    setTimeout(a, 13)
                }
                  , x = function() {
                    for (var a = 0; a < c.timers.length; a++)
                        c.timers[a]() || c.timers.splice(a--, 1);
                    c.timers.length && q(x)
                };
                t !== r || this.elem["forceAnimate:" + this.prop] ? (this.startTime = +new Date,
                this.start = t,
                this.end = r,
                this.unit = a,
                this.now = this.start,
                this.pos = 0,
                m.elem = this.elem,
                m.prop = this.prop,
                m() && 1 === c.timers.push(m) && q(x)) : (delete g.curAnim[this.prop],
                g.complete && 0 === Object.keys(g.curAnim).length && g.complete.call(this.elem))
            }
            ;
            c.prototype.step = function(t) {
                var r = +new Date
                  , a = this.options
                  , d = this.elem
                  , g = a.complete
                  , m = a.duration
                  , q = a.curAnim;
                if (d.attr && !d.element)
                    t = !1;
                else if (t || r >= m + this.startTime) {
                    this.now = this.end;
                    this.pos = 1;
                    this.update();
                    var x = q[this.prop] = !0;
                    H(q, function(a) {
                        !0 !== a && (x = !1)
                    });
                    x && g && g.call(d);
                    t = !1
                } else
                    this.pos = a.easing((r - this.startTime) / m),
                    this.now = this.start + (this.end - this.start) * this.pos,
                    this.update(),
                    t = !0;
                return t
            }
            ;
            c.prototype.initPath = function(t, r, a) {
                function d(a, d) {
                    for (; a.length < K; ) {
                        var m = a[0]
                          , n = d[K - a.length];
                        n && "M" === m[0] && (a[0] = "C" === n[0] ? ["C", m[1], m[2], m[1], m[2], m[1], m[2]] : ["L", m[1], m[2]]);
                        a.unshift(m);
                        x && (m = a.pop(),
                        a.push(a[a.length - 1], m))
                    }
                }
                function g(a, d) {
                    for (; a.length < K; )
                        if (d = a[Math.floor(a.length / J) - 1].slice(),
                        "C" === d[0] && (d[1] = d[5],
                        d[2] = d[6]),
                        x) {
                            var m = a[Math.floor(a.length / J)].slice();
                            a.splice(a.length / 2, 0, d, m)
                        } else
                            a.push(d)
                }
                var m = t.startX
                  , q = t.endX;
                a = a.slice();
                var x = t.isArea
                  , J = x ? 2 : 1;
                r = r && r.slice();
                if (!r)
                    return [a, a];
                if (m && q && q.length) {
                    for (t = 0; t < m.length; t++)
                        if (m[t] === q[0]) {
                            var I = t;
                            break
                        } else if (m[0] === q[q.length - m.length + t]) {
                            I = t;
                            var c = !0;
                            break
                        } else if (m[m.length - 1] === q[q.length - m.length + t]) {
                            I = m.length - t;
                            break
                        }
                    "undefined" === typeof I && (r = [])
                }
                if (r.length && E(I)) {
                    var K = a.length + I * J;
                    c ? (d(r, a),
                    g(a, r)) : (d(a, r),
                    g(r, a))
                }
                return [r, a]
            }
            ;
            c.prototype.fillSetter = function() {
                c.prototype.strokeSetter.apply(this, arguments)
            }
            ;
            c.prototype.strokeSetter = function() {
                this.elem.attr(this.prop, D(this.start).tweenTo(D(this.end), this.pos), void 0, !0)
            }
            ;
            c.timers = [];
            return c
        }()
    });
    O(f, "Core/Animation/AnimationUtilities.js", [f["Core/Animation/Fx.js"], f["Core/Utilities.js"]], function(c, f) {
        function D(a) {
            return t(a) ? r({
                duration: 500,
                defer: 0
            }, a) : {
                duration: a ? 500 : 0,
                defer: 0
            }
        }
        function F(a, d) {
            for (var m = c.timers.length; m--; )
                c.timers[m].elem !== a || d && d !== c.timers[m].prop || (c.timers[m].stopped = !0)
        }
        var z = f.defined
          , E = f.getStyle
          , H = f.isArray
          , w = f.isNumber
          , t = f.isObject
          , r = f.merge
          , a = f.objectEach
          , d = f.pick;
        return {
            animate: function(d, m, q) {
                var x, g = "", I, M;
                if (!t(q)) {
                    var K = arguments;
                    q = {
                        duration: K[2],
                        easing: K[3],
                        complete: K[4]
                    }
                }
                w(q.duration) || (q.duration = 400);
                q.easing = "function" === typeof q.easing ? q.easing : Math[q.easing] || Math.easeInOutSine;
                q.curAnim = r(m);
                a(m, function(a, A) {
                    F(d, A);
                    M = new c(d,q,A);
                    I = void 0;
                    "d" === A && H(m.d) ? (M.paths = M.initPath(d, d.pathArray, m.d),
                    M.toD = m.d,
                    x = 0,
                    I = 1) : d.attr ? x = d.attr(A) : (x = parseFloat(E(d, A)) || 0,
                    "opacity" !== A && (g = "px"));
                    I || (I = a);
                    "string" === typeof I && I.match("px") && (I = I.replace(/px/g, ""));
                    M.run(x, I, g)
                })
            },
            animObject: D,
            getDeferredAnimation: function(a, d, q) {
                var m = D(d)
                  , g = 0
                  , r = 0;
                (q ? [q] : a.series).forEach(function(a) {
                    a = D(a.options.animation);
                    g = d && z(d.defer) ? m.defer : Math.max(g, a.duration + a.defer);
                    r = Math.min(m.duration, a.duration)
                });
                a.renderer.forExport && (g = 0);
                return {
                    defer: Math.max(0, g - r),
                    duration: Math.min(g, r)
                }
            },
            setAnimation: function(a, m) {
                m.renderer.globalAnimation = d(a, m.options.chart.animation, !0)
            },
            stop: F
        }
    });
    O(f, "Core/Renderer/HTML/AST.js", [f["Core/Globals.js"], f["Core/Utilities.js"]], function(c, f) {
        var D = c.SVG_NS
          , F = f.attr
          , z = f.createElement
          , E = f.css
          , H = f.error
          , w = f.isFunction
          , t = f.isString
          , r = f.objectEach
          , a = f.splat
          , d = (f = c.win.trustedTypes) && w(f.createPolicy) && f.createPolicy("highcharts", {
            createHTML: function(a) {
                return a
            }
        })
          , g = d ? d.createHTML("") : "";
        try {
            var m = !!(new DOMParser).parseFromString(g, "text/html")
        } catch (q) {
            m = !1
        }
        w = function() {
            function q(a) {
                this.nodes = "string" === typeof a ? this.parseMarkup(a) : a
            }
            q.filterUserAttributes = function(a) {
                r(a, function(d, m) {
                    var g = !0;
                    -1 === q.allowedAttributes.indexOf(m) && (g = !1);
                    -1 !== ["background", "dynsrc", "href", "lowsrc", "src"].indexOf(m) && (g = t(d) && q.allowedReferences.some(function(a) {
                        return 0 === d.indexOf(a)
                    }));
                    g || (H(33, !1, void 0, {
                        "Invalid attribute in config": "".concat(m)
                    }),
                    delete a[m])
                });
                return a
            }
            ;
            q.parseStyle = function(a) {
                return a.split(";").reduce(function(a, d) {
                    d = d.split(":").map(function(a) {
                        return a.trim()
                    });
                    var m = d.shift();
                    m && d.length && (a[m.replace(/-([a-z])/g, function(a) {
                        return a[1].toUpperCase()
                    })] = d.join(":"));
                    return a
                }, {})
            }
            ;
            q.setElementHTML = function(a, d) {
                a.innerHTML = q.emptyHTML;
                d && (new q(d)).addToDOM(a)
            }
            ;
            q.prototype.addToDOM = function(d) {
                function m(d, g) {
                    var x;
                    a(d).forEach(function(a) {
                        var d = a.tagName
                          , y = a.textContent ? c.doc.createTextNode(a.textContent) : void 0
                          , n = q.bypassHTMLFiltering;
                        if (d)
                            if ("#text" === d)
                                var u = y;
                            else if (-1 !== q.allowedTags.indexOf(d) || n) {
                                d = c.doc.createElementNS("svg" === d ? D : g.namespaceURI || D, d);
                                var l = a.attributes || {};
                                r(a, function(n, e) {
                                    "tagName" !== e && "attributes" !== e && "children" !== e && "style" !== e && "textContent" !== e && (l[e] = n)
                                });
                                F(d, n ? l : q.filterUserAttributes(l));
                                a.style && E(d, a.style);
                                y && d.appendChild(y);
                                m(a.children || [], d);
                                u = d
                            } else
                                H(33, !1, void 0, {
                                    "Invalid tagName in config": d
                                });
                        u && g.appendChild(u);
                        x = u
                    });
                    return x
                }
                return m(this.nodes, d)
            }
            ;
            q.prototype.parseMarkup = function(a) {
                var g = [];
                a = a.trim().replace(/ style=(["'])/g, " data-style=$1");
                if (m)
                    a = (new DOMParser).parseFromString(d ? d.createHTML(a) : a, "text/html");
                else {
                    var x = z("div");
                    x.innerHTML = a;
                    a = {
                        body: x
                    }
                }
                var r = function(a, d) {
                    var m = a.nodeName.toLowerCase()
                      , g = {
                        tagName: m
                    };
                    "#text" === m && (g.textContent = a.textContent || "");
                    if (m = a.attributes) {
                        var n = {};
                        [].forEach.call(m, function(l) {
                            "data-style" === l.name ? g.style = q.parseStyle(l.value) : n[l.name] = l.value
                        });
                        g.attributes = n
                    }
                    if (a.childNodes.length) {
                        var u = [];
                        [].forEach.call(a.childNodes, function(l) {
                            r(l, u)
                        });
                        u.length && (g.children = u)
                    }
                    d.push(g)
                };
                [].forEach.call(a.body.childNodes, function(a) {
                    return r(a, g)
                });
                return g
            }
            ;
            q.allowedAttributes = "aria-controls aria-describedby aria-expanded aria-haspopup aria-hidden aria-label aria-labelledby aria-live aria-pressed aria-readonly aria-roledescription aria-selected class clip-path color colspan cx cy d dx dy disabled fill height href id in markerHeight markerWidth offset opacity orient padding paddingLeft paddingRight patternUnits r refX refY role scope slope src startOffset stdDeviation stroke stroke-linecap stroke-width style tableValues result rowspan summary target tabindex text-align text-anchor textAnchor textLength title type valign width x x1 x2 y y1 y2 zIndex".split(" ");
            q.allowedReferences = "https:// http:// mailto: / ../ ./ #".split(" ");
            q.allowedTags = "a abbr b br button caption circle clipPath code dd defs div dl dt em feComponentTransfer feFuncA feFuncB feFuncG feFuncR feGaussianBlur feOffset feMerge feMergeNode filter h1 h2 h3 h4 h5 h6 hr i img li linearGradient marker ol p path pattern pre rect small span stop strong style sub sup svg table text textPath thead tbody tspan td th tr u ul #text".split(" ");
            q.emptyHTML = g;
            q.bypassHTMLFiltering = !1;
            return q
        }();
        "";
        return w
    });
    O(f, "Core/FormatUtilities.js", [f["Core/DefaultOptions.js"], f["Core/Utilities.js"]], function(c, f) {
        function D(r, a, d, g) {
            r = +r || 0;
            a = +a;
            var m = F.lang
              , q = (r.toString().split(".")[1] || "").split("e")[0].length
              , x = r.toString().split("e")
              , J = a;
            if (-1 === a)
                a = Math.min(q, 20);
            else if (!H(a))
                a = 2;
            else if (a && x[1] && 0 > x[1]) {
                var c = a + +x[1];
                0 <= c ? (x[0] = (+x[0]).toExponential(c).split("e")[0],
                a = c) : (x[0] = x[0].split(".")[0] || 0,
                r = 20 > a ? (x[0] * Math.pow(10, x[1])).toFixed(a) : 0,
                x[1] = 0)
            }
            c = (Math.abs(x[1] ? x[0] : r) + Math.pow(10, -Math.max(a, q) - 1)).toFixed(a);
            q = String(t(c));
            var f = 3 < q.length ? q.length % 3 : 0;
            d = w(d, m.decimalPoint);
            g = w(g, m.thousandsSep);
            r = (0 > r ? "-" : "") + (f ? q.substr(0, f) + g : "");
            r = 0 > +x[1] && !J ? "0" : r + q.substr(f).replace(/(\d{3})(?=\d)/g, "$1" + g);
            a && (r += d + c.slice(-a));
            x[1] && 0 !== +r && (r += "e" + x[1]);
            return r
        }
        var F = c.defaultOptions
          , z = c.defaultTime
          , E = f.getNestedProperty
          , H = f.isNumber
          , w = f.pick
          , t = f.pInt;
        return {
            dateFormat: function(r, a, d) {
                return z.dateFormat(r, a, d)
            },
            format: function(r, a, d) {
                var g = "{"
                  , m = !1
                  , q = /f$/
                  , x = /\.([0-9])/
                  , J = F.lang
                  , t = d && d.time || z;
                d = d && d.numberFormatter || D;
                for (var c = []; r; ) {
                    var f = r.indexOf(g);
                    if (-1 === f)
                        break;
                    var C = r.slice(0, f);
                    if (m) {
                        C = C.split(":");
                        g = E(C.shift() || "", a);
                        if (C.length && "number" === typeof g)
                            if (C = C.join(":"),
                            q.test(C)) {
                                var A = parseInt((C.match(x) || ["", "-1"])[1], 10);
                                null !== g && (g = d(g, A, J.decimalPoint, -1 < C.indexOf(",") ? J.thousandsSep : ""))
                            } else
                                g = t.dateFormat(C, g);
                        c.push(g)
                    } else
                        c.push(C);
                    r = r.slice(f + 1);
                    g = (m = !m) ? "}" : "{"
                }
                c.push(r);
                return c.join("")
            },
            numberFormat: D
        }
    });
    O(f, "Core/Renderer/RendererUtilities.js", [f["Core/Utilities.js"]], function(c) {
        var f = c.clamp, B = c.pick, F = c.stableSort, z;
        (function(c) {
            function D(c, t, r) {
                var a = c, d = a.reducedLen || t, g = function(a, d) {
                    return (d.rank || 0) - (a.rank || 0)
                }, m = function(a, d) {
                    return a.target - d.target
                }, q, x = !0, J = [], I = 0;
                for (q = c.length; q--; )
                    I += c[q].size;
                if (I > d) {
                    F(c, g);
                    for (I = q = 0; I <= d; )
                        I += c[q].size,
                        q++;
                    J = c.splice(q - 1, c.length)
                }
                F(c, m);
                for (c = c.map(function(a) {
                    return {
                        size: a.size,
                        targets: [a.target],
                        align: B(a.align, .5)
                    }
                }); x; ) {
                    for (q = c.length; q--; )
                        d = c[q],
                        g = (Math.min.apply(0, d.targets) + Math.max.apply(0, d.targets)) / 2,
                        d.pos = f(g - d.size * d.align, 0, t - d.size);
                    q = c.length;
                    for (x = !1; q--; )
                        0 < q && c[q - 1].pos + c[q - 1].size > c[q].pos && (c[q - 1].size += c[q].size,
                        c[q - 1].targets = c[q - 1].targets.concat(c[q].targets),
                        c[q - 1].align = .5,
                        c[q - 1].pos + c[q - 1].size > t && (c[q - 1].pos = t - c[q - 1].size),
                        c.splice(q, 1),
                        x = !0)
                }
                a.push.apply(a, J);
                q = 0;
                c.some(function(d) {
                    var m = 0;
                    return (d.targets || []).some(function() {
                        a[q].pos = d.pos + m;
                        if ("undefined" !== typeof r && Math.abs(a[q].pos - a[q].target) > r)
                            return a.slice(0, q + 1).forEach(function(a) {
                                return delete a.pos
                            }),
                            a.reducedLen = (a.reducedLen || t) - .1 * t,
                            a.reducedLen > .1 * t && D(a, t, r),
                            !0;
                        m += a[q].size;
                        q++;
                        return !1
                    })
                });
                F(a, m);
                return a
            }
            c.distribute = D
        }
        )(z || (z = {}));
        return z
    });
    O(f, "Core/Renderer/SVG/SVGElement.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/Color/Color.js"], f["Core/Globals.js"], f["Core/Utilities.js"]], function(c, f, B, F) {
        var D = c.animate
          , E = c.animObject
          , H = c.stop
          , w = B.deg2rad
          , t = B.doc
          , r = B.svg
          , a = B.SVG_NS
          , d = B.win
          , g = F.addEvent
          , m = F.attr
          , q = F.createElement
          , x = F.css
          , J = F.defined
          , I = F.erase
          , M = F.extend
          , K = F.fireEvent
          , C = F.isArray
          , A = F.isFunction
          , y = F.isString
          , n = F.merge
          , u = F.objectEach
          , l = F.pick
          , k = F.pInt
          , e = F.syncTimeout
          , b = F.uniqueKey;
        c = function() {
            function h() {
                this.element = void 0;
                this.onEvents = {};
                this.opacity = 1;
                this.renderer = void 0;
                this.SVG_NS = a;
                this.symbolCustomAttribs = "x y width height r start end innerR anchorX anchorY rounded".split(" ")
            }
            h.prototype._defaultGetter = function(b) {
                b = l(this[b + "Value"], this[b], this.element ? this.element.getAttribute(b) : null, 0);
                /^[\-0-9\.]+$/.test(b) && (b = parseFloat(b));
                return b
            }
            ;
            h.prototype._defaultSetter = function(b, e, h) {
                h.setAttribute(e, b)
            }
            ;
            h.prototype.add = function(b) {
                var e = this.renderer
                  , v = this.element;
                b && (this.parentGroup = b);
                this.parentInverted = b && b.inverted;
                "undefined" !== typeof this.textStr && "text" === this.element.nodeName && e.buildText(this);
                this.added = !0;
                if (!b || b.handleZ || this.zIndex)
                    var h = this.zIndexSetter();
                h || (b ? b.element : e.box).appendChild(v);
                if (this.onAdd)
                    this.onAdd();
                return this
            }
            ;
            h.prototype.addClass = function(b, e) {
                var v = e ? "" : this.attr("class") || "";
                b = (b || "").split(/ /g).reduce(function(b, e) {
                    -1 === v.indexOf(e) && b.push(e);
                    return b
                }, v ? [v] : []).join(" ");
                b !== v && this.attr("class", b);
                return this
            }
            ;
            h.prototype.afterSetters = function() {
                this.doTransform && (this.updateTransform(),
                this.doTransform = !1)
            }
            ;
            h.prototype.align = function(b, e, h) {
                var v = {}, p = this.renderer, L = p.alignedObjects, n, k, a;
                if (b) {
                    if (this.alignOptions = b,
                    this.alignByTranslate = e,
                    !h || y(h))
                        this.alignTo = n = h || "renderer",
                        I(L, this),
                        L.push(this),
                        h = void 0
                } else
                    b = this.alignOptions,
                    e = this.alignByTranslate,
                    n = this.alignTo;
                h = l(h, p[n], "scrollablePlotBox" === n ? p.plotBox : void 0, p);
                n = b.align;
                var G = b.verticalAlign;
                p = (h.x || 0) + (b.x || 0);
                L = (h.y || 0) + (b.y || 0);
                "right" === n ? k = 1 : "center" === n && (k = 2);
                k && (p += (h.width - (b.width || 0)) / k);
                v[e ? "translateX" : "x"] = Math.round(p);
                "bottom" === G ? a = 1 : "middle" === G && (a = 2);
                a && (L += (h.height - (b.height || 0)) / a);
                v[e ? "translateY" : "y"] = Math.round(L);
                this[this.placed ? "animate" : "attr"](v);
                this.placed = !0;
                this.alignAttr = v;
                return this
            }
            ;
            h.prototype.alignSetter = function(b) {
                var e = {
                    left: "start",
                    center: "middle",
                    right: "end"
                };
                e[b] && (this.alignValue = b,
                this.element.setAttribute("text-anchor", e[b]))
            }
            ;
            h.prototype.animate = function(b, p, h) {
                var v = this
                  , n = E(l(p, this.renderer.globalAnimation, !0));
                p = n.defer;
                l(t.hidden, t.msHidden, t.webkitHidden, !1) && (n.duration = 0);
                0 !== n.duration ? (h && (n.complete = h),
                e(function() {
                    v.element && D(v, b, n)
                }, p)) : (this.attr(b, void 0, h || n.complete),
                u(b, function(b, e) {
                    n.step && n.step.call(this, b, {
                        prop: e,
                        pos: 1,
                        elem: this
                    })
                }, this));
                return this
            }
            ;
            h.prototype.applyTextOutline = function(b) {
                var e = this.element;
                -1 !== b.indexOf("contrast") && (b = b.replace(/contrast/g, this.renderer.getContrast(e.style.fill)));
                var v = b.split(" ");
                b = v[v.length - 1];
                if ((v = v[0]) && "none" !== v && B.svg) {
                    this.fakeTS = !0;
                    this.ySetter = this.xSetter;
                    v = v.replace(/(^[\d\.]+)(.*?)$/g, function(b, e, v) {
                        return 2 * Number(e) + v
                    });
                    this.removeTextOutline();
                    var h = t.createElementNS(a, "tspan");
                    m(h, {
                        "class": "highcharts-text-outline",
                        fill: b,
                        stroke: b,
                        "stroke-width": v,
                        "stroke-linejoin": "round"
                    });
                    b = e.querySelector("textPath") || e;
                    [].forEach.call(b.childNodes, function(b) {
                        var e = b.cloneNode(!0);
                        e.removeAttribute && ["fill", "stroke", "stroke-width", "stroke"].forEach(function(b) {
                            return e.removeAttribute(b)
                        });
                        h.appendChild(e)
                    });
                    var l = 0;
                    [].forEach.call(b.querySelectorAll("text tspan"), function(b) {
                        l += Number(b.getAttribute("dy"))
                    });
                    v = t.createElementNS(a, "tspan");
                    v.textContent = "\u200b";
                    m(v, {
                        x: Number(e.getAttribute("x")),
                        dy: -l
                    });
                    h.appendChild(v);
                    b.insertBefore(h, b.firstChild)
                }
            }
            ;
            h.prototype.attr = function(b, e, h, l) {
                var v = this.element, p = this.symbolCustomAttribs, n, k = this, a, G;
                if ("string" === typeof b && "undefined" !== typeof e) {
                    var d = b;
                    b = {};
                    b[d] = e
                }
                "string" === typeof b ? k = (this[b + "Getter"] || this._defaultGetter).call(this, b, v) : (u(b, function(e, h) {
                    a = !1;
                    l || H(this, h);
                    this.symbolName && -1 !== p.indexOf(h) && (n || (this.symbolAttr(b),
                    n = !0),
                    a = !0);
                    !this.rotation || "x" !== h && "y" !== h || (this.doTransform = !0);
                    a || (G = this[h + "Setter"] || this._defaultSetter,
                    G.call(this, e, h, v),
                    !this.styledMode && this.shadows && /^(width|height|visibility|x|y|d|transform|cx|cy|r)$/.test(h) && this.updateShadows(h, e, G))
                }, this),
                this.afterSetters());
                h && h.call(this);
                return k
            }
            ;
            h.prototype.clip = function(b) {
                return this.attr("clip-path", b ? "url(" + this.renderer.url + "#" + b.id + ")" : "none")
            }
            ;
            h.prototype.crisp = function(b, e) {
                e = e || b.strokeWidth || 0;
                var v = Math.round(e) % 2 / 2;
                b.x = Math.floor(b.x || this.x || 0) + v;
                b.y = Math.floor(b.y || this.y || 0) + v;
                b.width = Math.floor((b.width || this.width || 0) - 2 * v);
                b.height = Math.floor((b.height || this.height || 0) - 2 * v);
                J(b.strokeWidth) && (b.strokeWidth = e);
                return b
            }
            ;
            h.prototype.complexColor = function(e, p, h) {
                var v = this.renderer, l, L, k, a, d, G, m, N, g, q, x = [], A;
                K(this.renderer, "complexColor", {
                    args: arguments
                }, function() {
                    e.radialGradient ? L = "radialGradient" : e.linearGradient && (L = "linearGradient");
                    if (L) {
                        k = e[L];
                        d = v.gradients;
                        G = e.stops;
                        g = h.radialReference;
                        C(k) && (e[L] = k = {
                            x1: k[0],
                            y1: k[1],
                            x2: k[2],
                            y2: k[3],
                            gradientUnits: "userSpaceOnUse"
                        });
                        "radialGradient" === L && g && !J(k.gradientUnits) && (a = k,
                        k = n(k, v.getRadialAttr(g, a), {
                            gradientUnits: "userSpaceOnUse"
                        }));
                        u(k, function(b, e) {
                            "id" !== e && x.push(e, b)
                        });
                        u(G, function(b) {
                            x.push(b)
                        });
                        x = x.join(",");
                        if (d[x])
                            q = d[x].attr("id");
                        else {
                            k.id = q = b();
                            var P = d[x] = v.createElement(L).attr(k).add(v.defs);
                            P.radAttr = a;
                            P.stops = [];
                            G.forEach(function(b) {
                                0 === b[1].indexOf("rgba") ? (l = f.parse(b[1]),
                                m = l.get("rgb"),
                                N = l.get("a")) : (m = b[1],
                                N = 1);
                                b = v.createElement("stop").attr({
                                    offset: b[0],
                                    "stop-color": m,
                                    "stop-opacity": N
                                }).add(P);
                                P.stops.push(b)
                            })
                        }
                        A = "url(" + v.url + "#" + q + ")";
                        h.setAttribute(p, A);
                        h.gradient = x;
                        e.toString = function() {
                            return A
                        }
                    }
                })
            }
            ;
            h.prototype.css = function(b) {
                var e = this.styles
                  , v = {}
                  , h = this.element
                  , l = !e;
                b.color && (b.fill = b.color);
                e && u(b, function(b, p) {
                    e && e[p] !== b && (v[p] = b,
                    l = !0)
                });
                if (l) {
                    e && (b = M(e, v));
                    if (null === b.width || "auto" === b.width)
                        delete this.textWidth;
                    else if ("text" === h.nodeName.toLowerCase() && b.width)
                        var L = this.textWidth = k(b.width);
                    this.styles = b;
                    L && !r && this.renderer.forExport && delete b.width;
                    var a = n(b);
                    h.namespaceURI === this.SVG_NS && ["textOutline", "textOverflow", "width"].forEach(function(b) {
                        return a && delete a[b]
                    });
                    x(h, a);
                    this.added && ("text" === this.element.nodeName && this.renderer.buildText(this),
                    b.textOutline && this.applyTextOutline(b.textOutline))
                }
                return this
            }
            ;
            h.prototype.dashstyleSetter = function(b) {
                var e = this["stroke-width"];
                "inherit" === e && (e = 1);
                if (b = b && b.toLowerCase()) {
                    var v = b.replace("shortdashdotdot", "3,1,1,1,1,1,").replace("shortdashdot", "3,1,1,1").replace("shortdot", "1,1,").replace("shortdash", "3,1,").replace("longdash", "8,3,").replace(/dot/g, "1,3,").replace("dash", "4,3,").replace(/,$/, "").split(",");
                    for (b = v.length; b--; )
                        v[b] = "" + k(v[b]) * l(e, NaN);
                    b = v.join(",").replace(/NaN/g, "none");
                    this.element.setAttribute("stroke-dasharray", b)
                }
            }
            ;
            h.prototype.destroy = function() {
                var b = this
                  , e = b.element || {}
                  , h = b.renderer
                  , l = e.ownerSVGElement
                  , n = h.isSVG && "SPAN" === e.nodeName && b.parentGroup || void 0;
                e.onclick = e.onmouseout = e.onmouseover = e.onmousemove = e.point = null;
                H(b);
                if (b.clipPath && l) {
                    var k = b.clipPath;
                    [].forEach.call(l.querySelectorAll("[clip-path],[CLIP-PATH]"), function(b) {
                        -1 < b.getAttribute("clip-path").indexOf(k.element.id) && b.removeAttribute("clip-path")
                    });
                    b.clipPath = k.destroy()
                }
                if (b.stops) {
                    for (l = 0; l < b.stops.length; l++)
                        b.stops[l].destroy();
                    b.stops.length = 0;
                    b.stops = void 0
                }
                b.safeRemoveChild(e);
                for (h.styledMode || b.destroyShadows(); n && n.div && 0 === n.div.childNodes.length; )
                    e = n.parentGroup,
                    b.safeRemoveChild(n.div),
                    delete n.div,
                    n = e;
                b.alignTo && I(h.alignedObjects, b);
                u(b, function(e, p) {
                    b[p] && b[p].parentGroup === b && b[p].destroy && b[p].destroy();
                    delete b[p]
                })
            }
            ;
            h.prototype.destroyShadows = function() {
                (this.shadows || []).forEach(function(b) {
                    this.safeRemoveChild(b)
                }, this);
                this.shadows = void 0
            }
            ;
            h.prototype.dSetter = function(b, e, h) {
                C(b) && ("string" === typeof b[0] && (b = this.renderer.pathToSegments(b)),
                this.pathArray = b,
                b = b.reduce(function(b, e, p) {
                    return e && e.join ? (p ? b + " " : "") + e.join(" ") : (e || "").toString()
                }, ""));
                /(NaN| {2}|^$)/.test(b) && (b = "M 0 0");
                this[e] !== b && (h.setAttribute(e, b),
                this[e] = b)
            }
            ;
            h.prototype.fadeOut = function(b) {
                var e = this;
                e.animate({
                    opacity: 0
                }, {
                    duration: l(b, 150),
                    complete: function() {
                        e.hide()
                    }
                })
            }
            ;
            h.prototype.fillSetter = function(b, e, h) {
                "string" === typeof b ? h.setAttribute(e, b) : b && this.complexColor(b, e, h)
            }
            ;
            h.prototype.getBBox = function(b, e) {
                var p = this.alignValue
                  , v = this.element
                  , n = this.renderer
                  , k = this.styles
                  , a = this.textStr
                  , d = n.cache
                  , u = n.cacheKeys
                  , m = v.namespaceURI === this.SVG_NS;
                e = l(e, this.rotation, 0);
                var g = n.styledMode ? v && h.prototype.getStyle.call(v, "font-size") : k && k.fontSize, N;
                if (J(a)) {
                    var q = a.toString();
                    -1 === q.indexOf("<") && (q = q.replace(/[0-9]/g, "0"));
                    q += ["", e, g, this.textWidth, p, k && k.textOverflow, k && k.fontWeight].join()
                }
                q && !b && (N = d[q]);
                if (!N) {
                    if (m || n.forExport) {
                        try {
                            var y = this.fakeTS && function(b) {
                                var e = v.querySelector(".highcharts-text-outline");
                                e && x(e, {
                                    display: b
                                })
                            }
                            ;
                            A(y) && y("none");
                            N = v.getBBox ? M({}, v.getBBox()) : {
                                width: v.offsetWidth,
                                height: v.offsetHeight,
                                x: 0,
                                y: 0
                            };
                            A(y) && y("")
                        } catch (W) {
                            ""
                        }
                        if (!N || 0 > N.width)
                            N = {
                                x: 0,
                                y: 0,
                                width: 0,
                                height: 0
                            }
                    } else
                        N = this.htmlGetBBox();
                    if (n.isSVG && (n = N.width,
                    b = N.height,
                    m && (N.height = b = {
                        "0.688em,17": 14,
                        "0.813em,20": 16
                    }["" + (g || "") + ",".concat(Math.round(b))] || b),
                    e)) {
                        m = Number(v.getAttribute("y") || 0) - N.y;
                        p = {
                            right: 1,
                            center: .5
                        }[p || 0] || 0;
                        k = e * w;
                        g = (e - 90) * w;
                        var C = n * Math.cos(k);
                        e = n * Math.sin(k);
                        y = Math.cos(g);
                        k = Math.sin(g);
                        n = N.x + p * (n - C) + m * y;
                        g = n + C;
                        y = g - b * y;
                        C = y - C;
                        m = N.y + m - p * e + m * k;
                        p = m + e;
                        b = p - b * k;
                        e = b - e;
                        N.x = Math.min(n, g, y, C);
                        N.y = Math.min(m, p, b, e);
                        N.width = Math.max(n, g, y, C) - N.x;
                        N.height = Math.max(m, p, b, e) - N.y
                    }
                    if (q && ("" === a || 0 < N.height)) {
                        for (; 250 < u.length; )
                            delete d[u.shift()];
                        d[q] || u.push(q);
                        d[q] = N
                    }
                }
                return N
            }
            ;
            h.prototype.getStyle = function(b) {
                return d.getComputedStyle(this.element || this, "").getPropertyValue(b)
            }
            ;
            h.prototype.hasClass = function(b) {
                return -1 !== ("" + this.attr("class")).split(" ").indexOf(b)
            }
            ;
            h.prototype.hide = function() {
                return this.attr({
                    visibility: "hidden"
                })
            }
            ;
            h.prototype.htmlGetBBox = function() {
                return {
                    height: 0,
                    width: 0,
                    x: 0,
                    y: 0
                }
            }
            ;
            h.prototype.init = function(b, e) {
                this.element = "span" === e ? q(e) : t.createElementNS(this.SVG_NS, e);
                this.renderer = b;
                K(this, "afterInit")
            }
            ;
            h.prototype.invert = function(b) {
                this.inverted = b;
                this.updateTransform();
                return this
            }
            ;
            h.prototype.on = function(b, e) {
                var p = this.onEvents;
                if (p[b])
                    p[b]();
                p[b] = g(this.element, b, e);
                return this
            }
            ;
            h.prototype.opacitySetter = function(b, e, h) {
                this.opacity = b = Number(Number(b).toFixed(3));
                h.setAttribute(e, b)
            }
            ;
            h.prototype.removeClass = function(b) {
                return this.attr("class", ("" + this.attr("class")).replace(y(b) ? new RegExp("(^| )".concat(b, "( |$)")) : b, " ").replace(/ +/g, " ").trim())
            }
            ;
            h.prototype.removeTextOutline = function() {
                var b = this.element.querySelector("tspan.highcharts-text-outline");
                b && this.safeRemoveChild(b)
            }
            ;
            h.prototype.safeRemoveChild = function(b) {
                var e = b.parentNode;
                e && e.removeChild(b)
            }
            ;
            h.prototype.setRadialReference = function(b) {
                var e = this.element.gradient && this.renderer.gradients[this.element.gradient];
                this.element.radialReference = b;
                e && e.radAttr && e.animate(this.renderer.getRadialAttr(b, e.radAttr));
                return this
            }
            ;
            h.prototype.setTextPath = function(e, h) {
                var p = this;
                h = n(!0, {
                    enabled: !0,
                    attributes: {
                        dy: -5,
                        startOffset: "50%",
                        textAnchor: "middle"
                    }
                }, h);
                var l = this.renderer.url
                  , v = this.text || this
                  , k = v.textPath
                  , a = h.attributes
                  , d = h.enabled;
                e = e || k && k.path;
                k && k.undo();
                e && d ? (h = g(v, "afterModifyTree", function(h) {
                    if (e && d) {
                        var n = e.attr("id");
                        n || e.attr("id", n = b());
                        var k = {
                            x: 0,
                            y: 0
                        };
                        J(a.dx) && (k.dx = a.dx,
                        delete a.dx);
                        J(a.dy) && (k.dy = a.dy,
                        delete a.dy);
                        v.attr(k);
                        p.attr({
                            transform: ""
                        });
                        p.box && (p.box = p.box.destroy());
                        k = h.nodes.slice(0);
                        h.nodes.length = 0;
                        h.nodes[0] = {
                            tagName: "textPath",
                            attributes: M(a, {
                                "text-anchor": a.textAnchor,
                                href: "" + l + "#".concat(n)
                            }),
                            children: k
                        }
                    }
                }),
                v.textPath = {
                    path: e,
                    undo: h
                }) : (v.attr({
                    dx: 0,
                    dy: 0
                }),
                delete v.textPath);
                this.added && (v.textCache = "",
                this.renderer.buildText(v));
                return this
            }
            ;
            h.prototype.shadow = function(b, e, h) {
                var p = [], l = this.element, n = this.oldShadowOptions, v = {
                    color: "#000000",
                    offsetX: this.parentInverted ? -1 : 1,
                    offsetY: this.parentInverted ? -1 : 1,
                    opacity: .15,
                    width: 3
                }, k = !1, a;
                !0 === b ? a = v : "object" === typeof b && (a = M(v, b));
                a && (a && n && u(a, function(b, e) {
                    b !== n[e] && (k = !0)
                }),
                k && this.destroyShadows(),
                this.oldShadowOptions = a);
                if (!a)
                    this.destroyShadows();
                else if (!this.shadows) {
                    var d = a.opacity / a.width;
                    var G = this.parentInverted ? "translate(".concat(a.offsetY, ", ").concat(a.offsetX, ")") : "translate(".concat(a.offsetX, ", ").concat(a.offsetY, ")");
                    for (v = 1; v <= a.width; v++) {
                        var N = l.cloneNode(!1);
                        var g = 2 * a.width + 1 - 2 * v;
                        m(N, {
                            stroke: b.color || "#000000",
                            "stroke-opacity": d * v,
                            "stroke-width": g,
                            transform: G,
                            fill: "none"
                        });
                        N.setAttribute("class", (N.getAttribute("class") || "") + " highcharts-shadow");
                        h && (m(N, "height", Math.max(m(N, "height") - g, 0)),
                        N.cutHeight = g);
                        e ? e.element.appendChild(N) : l.parentNode && l.parentNode.insertBefore(N, l);
                        p.push(N)
                    }
                    this.shadows = p
                }
                return this
            }
            ;
            h.prototype.show = function(b) {
                void 0 === b && (b = !0);
                return this.attr({
                    visibility: b ? "inherit" : "visible"
                })
            }
            ;
            h.prototype.strokeSetter = function(b, e, l) {
                this[e] = b;
                this.stroke && this["stroke-width"] ? (h.prototype.fillSetter.call(this, this.stroke, "stroke", l),
                l.setAttribute("stroke-width", this["stroke-width"]),
                this.hasStroke = !0) : "stroke-width" === e && 0 === b && this.hasStroke ? (l.removeAttribute("stroke"),
                this.hasStroke = !1) : this.renderer.styledMode && this["stroke-width"] && (l.setAttribute("stroke-width", this["stroke-width"]),
                this.hasStroke = !0)
            }
            ;
            h.prototype.strokeWidth = function() {
                if (!this.renderer.styledMode)
                    return this["stroke-width"] || 0;
                var b = this.getStyle("stroke-width")
                  , e = 0;
                if (b.indexOf("px") === b.length - 2)
                    e = k(b);
                else if ("" !== b) {
                    var h = t.createElementNS(a, "rect");
                    m(h, {
                        width: b,
                        "stroke-width": 0
                    });
                    this.element.parentNode.appendChild(h);
                    e = h.getBBox().width;
                    h.parentNode.removeChild(h)
                }
                return e
            }
            ;
            h.prototype.symbolAttr = function(b) {
                var e = this;
                "x y r start end width height innerR anchorX anchorY clockwise".split(" ").forEach(function(h) {
                    e[h] = l(b[h], e[h])
                });
                e.attr({
                    d: e.renderer.symbols[e.symbolName](e.x, e.y, e.width, e.height, e)
                })
            }
            ;
            h.prototype.textSetter = function(b) {
                b !== this.textStr && (delete this.textPxLength,
                this.textStr = b,
                this.added && this.renderer.buildText(this))
            }
            ;
            h.prototype.titleSetter = function(b) {
                var e = this.element
                  , h = e.getElementsByTagName("title")[0] || t.createElementNS(this.SVG_NS, "title");
                e.insertBefore ? e.insertBefore(h, e.firstChild) : e.appendChild(h);
                h.textContent = String(l(b, "")).replace(/<[^>]*>/g, "").replace(/&lt;/g, "<").replace(/&gt;/g, ">")
            }
            ;
            h.prototype.toFront = function() {
                var b = this.element;
                b.parentNode.appendChild(b);
                return this
            }
            ;
            h.prototype.translate = function(b, e) {
                return this.attr({
                    translateX: b,
                    translateY: e
                })
            }
            ;
            h.prototype.updateShadows = function(b, e, h) {
                var l = this.shadows;
                if (l)
                    for (var p = l.length; p--; )
                        h.call(l[p], "height" === b ? Math.max(e - (l[p].cutHeight || 0), 0) : "d" === b ? this.d : e, b, l[p])
            }
            ;
            h.prototype.updateTransform = function() {
                var b = this.scaleX
                  , e = this.scaleY
                  , h = this.inverted
                  , n = this.rotation
                  , k = this.matrix
                  , a = this.element
                  , P = this.translateX || 0
                  , d = this.translateY || 0;
                h && (P += this.width,
                d += this.height);
                P = ["translate(" + P + "," + d + ")"];
                J(k) && P.push("matrix(" + k.join(",") + ")");
                h ? P.push("rotate(90) scale(-1,1)") : n && P.push("rotate(" + n + " " + l(this.rotationOriginX, a.getAttribute("x"), 0) + " " + l(this.rotationOriginY, a.getAttribute("y") || 0) + ")");
                (J(b) || J(e)) && P.push("scale(" + l(b, 1) + " " + l(e, 1) + ")");
                P.length && !(this.text || this).textPath && a.setAttribute("transform", P.join(" "))
            }
            ;
            h.prototype.visibilitySetter = function(b, e, h) {
                "inherit" === b ? h.removeAttribute(e) : this[e] !== b && h.setAttribute(e, b);
                this[e] = b
            }
            ;
            h.prototype.xGetter = function(b) {
                "circle" === this.element.nodeName && ("x" === b ? b = "cx" : "y" === b && (b = "cy"));
                return this._defaultGetter(b)
            }
            ;
            h.prototype.zIndexSetter = function(b, e) {
                var h = this.renderer
                  , l = this.parentGroup
                  , n = (l || h).element || h.box
                  , p = this.element;
                h = n === h.box;
                var a = !1;
                var v = this.added;
                var d;
                J(b) ? (p.setAttribute("data-z-index", b),
                b = +b,
                this[e] === b && (v = !1)) : J(this[e]) && p.removeAttribute("data-z-index");
                this[e] = b;
                if (v) {
                    (b = this.zIndex) && l && (l.handleZ = !0);
                    e = n.childNodes;
                    for (d = e.length - 1; 0 <= d && !a; d--) {
                        l = e[d];
                        v = l.getAttribute("data-z-index");
                        var u = !J(v);
                        if (l !== p)
                            if (0 > b && u && !h && !d)
                                n.insertBefore(p, e[d]),
                                a = !0;
                            else if (k(v) <= b || u && (!J(b) || 0 <= b))
                                n.insertBefore(p, e[d + 1] || null),
                                a = !0
                    }
                    a || (n.insertBefore(p, e[h ? 3 : 0] || null),
                    a = !0)
                }
                return a
            }
            ;
            return h
        }();
        c.prototype["stroke-widthSetter"] = c.prototype.strokeSetter;
        c.prototype.yGetter = c.prototype.xGetter;
        c.prototype.matrixSetter = c.prototype.rotationOriginXSetter = c.prototype.rotationOriginYSetter = c.prototype.rotationSetter = c.prototype.scaleXSetter = c.prototype.scaleYSetter = c.prototype.translateXSetter = c.prototype.translateYSetter = c.prototype.verticalAlignSetter = function(b, e) {
            this[e] = b;
            this.doTransform = !0
        }
        ;
        "";
        return c
    });
    O(f, "Core/Renderer/RendererRegistry.js", [f["Core/Globals.js"]], function(c) {
        var f;
        (function(f) {
            f.rendererTypes = {};
            var D;
            f.getRendererType = function(c) {
                void 0 === c && (c = D);
                return f.rendererTypes[c] || f.rendererTypes[D]
            }
            ;
            f.registerRendererType = function(z, B, F) {
                f.rendererTypes[z] = B;
                if (!D || F)
                    D = z,
                    c.Renderer = B
            }
        }
        )(f || (f = {}));
        return f
    });
    O(f, "Core/Renderer/SVG/SVGLabel.js", [f["Core/Renderer/SVG/SVGElement.js"], f["Core/Utilities.js"]], function(c, f) {
        var D = this && this.__extends || function() {
            var c = function(a, d) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var m in d)
                        d.hasOwnProperty(m) && (a[m] = d[m])
                }
                ;
                return c(a, d)
            };
            return function(a, d) {
                function g() {
                    this.constructor = a
                }
                c(a, d);
                a.prototype = null === d ? Object.create(d) : (g.prototype = d.prototype,
                new g)
            }
        }()
          , F = f.defined
          , z = f.extend
          , E = f.isNumber
          , H = f.merge
          , w = f.pick
          , t = f.removeEvent;
        return function(r) {
            function a(d, g, m, q, x, c, t, f, K, C) {
                var A = r.call(this) || this;
                A.paddingLeftSetter = A.paddingSetter;
                A.paddingRightSetter = A.paddingSetter;
                A.init(d, "g");
                A.textStr = g;
                A.x = m;
                A.y = q;
                A.anchorX = c;
                A.anchorY = t;
                A.baseline = K;
                A.className = C;
                A.addClass("button" === C ? "highcharts-no-tooltip" : "highcharts-label");
                C && A.addClass("highcharts-" + C);
                A.text = d.text(void 0, 0, 0, f).attr({
                    zIndex: 1
                });
                var y;
                "string" === typeof x && ((y = /^url\((.*?)\)$/.test(x)) || A.renderer.symbols[x]) && (A.symbolKey = x);
                A.bBox = a.emptyBBox;
                A.padding = 3;
                A.baselineOffset = 0;
                A.needsBox = d.styledMode || y;
                A.deferredAttr = {};
                A.alignFactor = 0;
                return A
            }
            D(a, r);
            a.prototype.alignSetter = function(a) {
                a = {
                    left: 0,
                    center: .5,
                    right: 1
                }[a];
                a !== this.alignFactor && (this.alignFactor = a,
                this.bBox && E(this.xSetting) && this.attr({
                    x: this.xSetting
                }))
            }
            ;
            a.prototype.anchorXSetter = function(a, g) {
                this.anchorX = a;
                this.boxAttr(g, Math.round(a) - this.getCrispAdjust() - this.xSetting)
            }
            ;
            a.prototype.anchorYSetter = function(a, g) {
                this.anchorY = a;
                this.boxAttr(g, a - this.ySetting)
            }
            ;
            a.prototype.boxAttr = function(a, g) {
                this.box ? this.box.attr(a, g) : this.deferredAttr[a] = g
            }
            ;
            a.prototype.css = function(d) {
                if (d) {
                    var g = {};
                    d = H(d);
                    a.textProps.forEach(function(a) {
                        "undefined" !== typeof d[a] && (g[a] = d[a],
                        delete d[a])
                    });
                    this.text.css(g);
                    var m = "width"in g;
                    "fontSize"in g || "fontWeight"in g ? this.updateTextPadding() : m && this.updateBoxSize()
                }
                return c.prototype.css.call(this, d)
            }
            ;
            a.prototype.destroy = function() {
                t(this.element, "mouseenter");
                t(this.element, "mouseleave");
                this.text && this.text.destroy();
                this.box && (this.box = this.box.destroy());
                c.prototype.destroy.call(this)
            }
            ;
            a.prototype.fillSetter = function(a, g) {
                a && (this.needsBox = !0);
                this.fill = a;
                this.boxAttr(g, a)
            }
            ;
            a.prototype.getBBox = function() {
                this.textStr && 0 === this.bBox.width && 0 === this.bBox.height && this.updateBoxSize();
                var a = this.padding
                  , g = w(this.paddingLeft, a);
                return {
                    width: this.width,
                    height: this.height,
                    x: this.bBox.x - g,
                    y: this.bBox.y - a
                }
            }
            ;
            a.prototype.getCrispAdjust = function() {
                return this.renderer.styledMode && this.box ? this.box.strokeWidth() % 2 / 2 : (this["stroke-width"] ? parseInt(this["stroke-width"], 10) : 0) % 2 / 2
            }
            ;
            a.prototype.heightSetter = function(a) {
                this.heightSetting = a
            }
            ;
            a.prototype.onAdd = function() {
                var a = this.textStr;
                this.text.add(this);
                this.attr({
                    text: F(a) ? a : "",
                    x: this.x,
                    y: this.y
                });
                this.box && F(this.anchorX) && this.attr({
                    anchorX: this.anchorX,
                    anchorY: this.anchorY
                })
            }
            ;
            a.prototype.paddingSetter = function(a, g) {
                E(a) ? a !== this[g] && (this[g] = a,
                this.updateTextPadding()) : this[g] = void 0
            }
            ;
            a.prototype.rSetter = function(a, g) {
                this.boxAttr(g, a)
            }
            ;
            a.prototype.shadow = function(a) {
                a && !this.renderer.styledMode && (this.updateBoxSize(),
                this.box && this.box.shadow(a));
                return this
            }
            ;
            a.prototype.strokeSetter = function(a, g) {
                this.stroke = a;
                this.boxAttr(g, a)
            }
            ;
            a.prototype["stroke-widthSetter"] = function(a, g) {
                a && (this.needsBox = !0);
                this["stroke-width"] = a;
                this.boxAttr(g, a)
            }
            ;
            a.prototype["text-alignSetter"] = function(a) {
                this.textAlign = a
            }
            ;
            a.prototype.textSetter = function(a) {
                "undefined" !== typeof a && this.text.attr({
                    text: a
                });
                this.updateTextPadding()
            }
            ;
            a.prototype.updateBoxSize = function() {
                var d = this.text
                  , g = d.element.style
                  , m = {}
                  , q = this.padding
                  , x = this.bBox = E(this.widthSetting) && E(this.heightSetting) && !this.textAlign || !F(d.textStr) ? a.emptyBBox : d.getBBox();
                this.width = this.getPaddedWidth();
                this.height = (this.heightSetting || x.height || 0) + 2 * q;
                g = this.renderer.fontMetrics(g && g.fontSize, d);
                this.baselineOffset = q + Math.min((this.text.firstLineMetrics || g).b, x.height || Infinity);
                this.heightSetting && (this.baselineOffset += (this.heightSetting - g.h) / 2);
                this.needsBox && !d.textPath && (this.box || (d = this.box = this.symbolKey ? this.renderer.symbol(this.symbolKey) : this.renderer.rect(),
                d.addClass(("button" === this.className ? "" : "highcharts-label-box") + (this.className ? " highcharts-" + this.className + "-box" : "")),
                d.add(this)),
                d = this.getCrispAdjust(),
                m.x = d,
                m.y = (this.baseline ? -this.baselineOffset : 0) + d,
                m.width = Math.round(this.width),
                m.height = Math.round(this.height),
                this.box.attr(z(m, this.deferredAttr)),
                this.deferredAttr = {})
            }
            ;
            a.prototype.updateTextPadding = function() {
                var a = this.text;
                if (!a.textPath) {
                    this.updateBoxSize();
                    var g = this.baseline ? 0 : this.baselineOffset
                      , m = w(this.paddingLeft, this.padding);
                    F(this.widthSetting) && this.bBox && ("center" === this.textAlign || "right" === this.textAlign) && (m += {
                        center: .5,
                        right: 1
                    }[this.textAlign] * (this.widthSetting - this.bBox.width));
                    if (m !== a.x || g !== a.y)
                        a.attr("x", m),
                        a.hasBoxWidthChanged && (this.bBox = a.getBBox(!0)),
                        "undefined" !== typeof g && a.attr("y", g);
                    a.x = m;
                    a.y = g
                }
            }
            ;
            a.prototype.widthSetter = function(a) {
                this.widthSetting = E(a) ? a : void 0
            }
            ;
            a.prototype.getPaddedWidth = function() {
                var a = this.padding
                  , g = w(this.paddingLeft, a);
                a = w(this.paddingRight, a);
                return (this.widthSetting || this.bBox.width || 0) + g + a
            }
            ;
            a.prototype.xSetter = function(a) {
                this.x = a;
                this.alignFactor && (a -= this.alignFactor * this.getPaddedWidth(),
                this["forceAnimate:x"] = !0);
                this.xSetting = Math.round(a);
                this.attr("translateX", this.xSetting)
            }
            ;
            a.prototype.ySetter = function(a) {
                this.ySetting = this.y = Math.round(a);
                this.attr("translateY", this.ySetting)
            }
            ;
            a.emptyBBox = {
                width: 0,
                height: 0,
                x: 0,
                y: 0
            };
            a.textProps = "color direction fontFamily fontSize fontStyle fontWeight lineHeight textAlign textDecoration textOutline textOverflow width".split(" ");
            return a
        }(c)
    });
    O(f, "Core/Renderer/SVG/Symbols.js", [f["Core/Utilities.js"]], function(c) {
        function f(c, t, r, a, d) {
            var g = [];
            if (d) {
                var m = d.start || 0
                  , q = H(d.r, r);
                r = H(d.r, a || r);
                var x = (d.end || 0) - .001;
                a = d.innerR;
                var J = H(d.open, .001 > Math.abs((d.end || 0) - m - 2 * Math.PI))
                  , f = Math.cos(m)
                  , M = Math.sin(m)
                  , K = Math.cos(x)
                  , C = Math.sin(x);
                m = H(d.longArc, .001 > x - m - Math.PI ? 0 : 1);
                g.push(["M", c + q * f, t + r * M], ["A", q, r, 0, m, H(d.clockwise, 1), c + q * K, t + r * C]);
                z(a) && g.push(J ? ["M", c + a * K, t + a * C] : ["L", c + a * K, t + a * C], ["A", a, a, 0, m, z(d.clockwise) ? 1 - d.clockwise : 0, c + a * f, t + a * M]);
                J || g.push(["Z"])
            }
            return g
        }
        function B(c, t, r, a, d) {
            return d && d.r ? F(c, t, r, a, d) : [["M", c, t], ["L", c + r, t], ["L", c + r, t + a], ["L", c, t + a], ["Z"]]
        }
        function F(c, t, r, a, d) {
            d = d && d.r || 0;
            return [["M", c + d, t], ["L", c + r - d, t], ["C", c + r, t, c + r, t, c + r, t + d], ["L", c + r, t + a - d], ["C", c + r, t + a, c + r, t + a, c + r - d, t + a], ["L", c + d, t + a], ["C", c, t + a, c, t + a, c, t + a - d], ["L", c, t + d], ["C", c, t, c, t, c + d, t]]
        }
        var z = c.defined
          , E = c.isNumber
          , H = c.pick;
        return {
            arc: f,
            callout: function(c, t, r, a, d) {
                var g = Math.min(d && d.r || 0, r, a)
                  , m = g + 6
                  , q = d && d.anchorX;
                d = d && d.anchorY || 0;
                var x = F(c, t, r, a, {
                    r: g
                });
                if (!E(q))
                    return x;
                c + q >= r ? d > t + m && d < t + a - m ? x.splice(3, 1, ["L", c + r, d - 6], ["L", c + r + 6, d], ["L", c + r, d + 6], ["L", c + r, t + a - g]) : x.splice(3, 1, ["L", c + r, a / 2], ["L", q, d], ["L", c + r, a / 2], ["L", c + r, t + a - g]) : 0 >= c + q ? d > t + m && d < t + a - m ? x.splice(7, 1, ["L", c, d + 6], ["L", c - 6, d], ["L", c, d - 6], ["L", c, t + g]) : x.splice(7, 1, ["L", c, a / 2], ["L", q, d], ["L", c, a / 2], ["L", c, t + g]) : d && d > a && q > c + m && q < c + r - m ? x.splice(5, 1, ["L", q + 6, t + a], ["L", q, t + a + 6], ["L", q - 6, t + a], ["L", c + g, t + a]) : d && 0 > d && q > c + m && q < c + r - m && x.splice(1, 1, ["L", q - 6, t], ["L", q, t - 6], ["L", q + 6, t], ["L", r - g, t]);
                return x
            },
            circle: function(c, t, r, a) {
                return f(c + r / 2, t + a / 2, r / 2, a / 2, {
                    start: .5 * Math.PI,
                    end: 2.5 * Math.PI,
                    open: !1
                })
            },
            diamond: function(c, t, r, a) {
                return [["M", c + r / 2, t], ["L", c + r, t + a / 2], ["L", c + r / 2, t + a], ["L", c, t + a / 2], ["Z"]]
            },
            rect: B,
            roundedRect: F,
            square: B,
            triangle: function(c, t, r, a) {
                return [["M", c + r / 2, t], ["L", c + r, t + a], ["L", c, t + a], ["Z"]]
            },
            "triangle-down": function(c, t, r, a) {
                return [["M", c, t], ["L", c + r, t], ["L", c + r / 2, t + a], ["Z"]]
            }
        }
    });
    O(f, "Core/Renderer/SVG/TextBuilder.js", [f["Core/Renderer/HTML/AST.js"], f["Core/Globals.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = f.doc
          , z = f.SVG_NS
          , E = f.win
          , H = B.attr
          , w = B.extend
          , t = B.fireEvent
          , r = B.isString
          , a = B.objectEach
          , d = B.pick;
        return function() {
            function g(a) {
                var d = a.styles;
                this.renderer = a.renderer;
                this.svgElement = a;
                this.width = a.textWidth;
                this.textLineHeight = d && d.lineHeight;
                this.textOutline = d && d.textOutline;
                this.ellipsis = !(!d || "ellipsis" !== d.textOverflow);
                this.noWrap = !(!d || "nowrap" !== d.whiteSpace);
                this.fontSize = d && d.fontSize
            }
            g.prototype.buildSVG = function() {
                var a = this.svgElement
                  , g = a.element
                  , x = a.renderer
                  , J = d(a.textStr, "").toString()
                  , t = -1 !== J.indexOf("<")
                  , f = g.childNodes;
                x = this.width && !a.added && x.box;
                var K = /<br.*?>/g
                  , C = [J, this.ellipsis, this.noWrap, this.textLineHeight, this.textOutline, this.fontSize, this.width].join();
                if (C !== a.textCache) {
                    a.textCache = C;
                    delete a.actualWidth;
                    for (C = f.length; C--; )
                        g.removeChild(f[C]);
                    t || this.ellipsis || this.width || a.textPath || -1 !== J.indexOf(" ") && (!this.noWrap || K.test(J)) ? "" !== J && (x && x.appendChild(g),
                    J = new c(J),
                    this.modifyTree(J.nodes),
                    J.addToDOM(g),
                    this.modifyDOM(),
                    this.ellipsis && -1 !== (g.textContent || "").indexOf("\u2026") && a.attr("title", this.unescapeEntities(a.textStr || "", ["&lt;", "&gt;"])),
                    x && x.removeChild(g)) : g.appendChild(D.createTextNode(this.unescapeEntities(J)));
                    r(this.textOutline) && a.applyTextOutline && a.applyTextOutline(this.textOutline)
                }
            }
            ;
            g.prototype.modifyDOM = function() {
                var a = this
                  , d = this.svgElement
                  , g = H(d.element, "x");
                d.firstLineMetrics = void 0;
                for (var c; c = d.element.firstChild; )
                    if (/^[\s\u200B]*$/.test(c.textContent || " "))
                        d.element.removeChild(c);
                    else
                        break;
                [].forEach.call(d.element.querySelectorAll("tspan.highcharts-br"), function(m, x) {
                    m.nextSibling && m.previousSibling && (0 === x && 1 === m.previousSibling.nodeType && (d.firstLineMetrics = d.renderer.fontMetrics(void 0, m.previousSibling)),
                    H(m, {
                        dy: a.getLineHeight(m.nextSibling),
                        x: g
                    }))
                });
                var r = this.width || 0;
                if (r) {
                    var t = function(m, x) {
                        var y = m.textContent || ""
                          , n = y.replace(/([^\^])-/g, "$1- ").split(" ")
                          , u = !a.noWrap && (1 < n.length || 1 < d.element.childNodes.length)
                          , l = a.getLineHeight(x)
                          , k = 0
                          , e = d.actualWidth;
                        if (a.ellipsis)
                            y && a.truncate(m, y, void 0, 0, Math.max(0, r - parseInt(a.fontSize || 12, 10)), function(b, e) {
                                return b.substring(0, e) + "\u2026"
                            });
                        else if (u) {
                            y = [];
                            for (u = []; x.firstChild && x.firstChild !== m; )
                                u.push(x.firstChild),
                                x.removeChild(x.firstChild);
                            for (; n.length; )
                                n.length && !a.noWrap && 0 < k && (y.push(m.textContent || ""),
                                m.textContent = n.join(" ").replace(/- /g, "-")),
                                a.truncate(m, void 0, n, 0 === k ? e || 0 : 0, r, function(b, e) {
                                    return n.slice(0, e).join(" ").replace(/- /g, "-")
                                }),
                                e = d.actualWidth,
                                k++;
                            u.forEach(function(b) {
                                x.insertBefore(b, m)
                            });
                            y.forEach(function(b) {
                                x.insertBefore(D.createTextNode(b), m);
                                b = D.createElementNS(z, "tspan");
                                b.textContent = "\u200b";
                                H(b, {
                                    dy: l,
                                    x: g
                                });
                                x.insertBefore(b, m)
                            })
                        }
                    }
                      , f = function(a) {
                        [].slice.call(a.childNodes).forEach(function(m) {
                            m.nodeType === E.Node.TEXT_NODE ? t(m, a) : (-1 !== m.className.baseVal.indexOf("highcharts-br") && (d.actualWidth = 0),
                            f(m))
                        })
                    };
                    f(d.element)
                }
            }
            ;
            g.prototype.getLineHeight = function(a) {
                var d;
                a = a.nodeType === E.Node.TEXT_NODE ? a.parentElement : a;
                this.renderer.styledMode || (d = a && /(px|em)$/.test(a.style.fontSize) ? a.style.fontSize : this.fontSize || this.renderer.style.fontSize || 12);
                return this.textLineHeight ? parseInt(this.textLineHeight.toString(), 10) : this.renderer.fontMetrics(d, a || this.svgElement.element).h
            }
            ;
            g.prototype.modifyTree = function(a) {
                var d = this
                  , m = function(g, x) {
                    var c = g.attributes;
                    c = void 0 === c ? {} : c;
                    var q = g.children
                      , r = g.style;
                    r = void 0 === r ? {} : r;
                    var A = g.tagName
                      , y = d.renderer.styledMode;
                    if ("b" === A || "strong" === A)
                        y ? c["class"] = "highcharts-strong" : r.fontWeight = "bold";
                    else if ("i" === A || "em" === A)
                        y ? c["class"] = "highcharts-emphasized" : r.fontStyle = "italic";
                    r && r.color && (r.fill = r.color);
                    "br" === A ? (c["class"] = "highcharts-br",
                    g.textContent = "\u200b",
                    (x = a[x + 1]) && x.textContent && (x.textContent = x.textContent.replace(/^ +/gm, ""))) : "a" === A && q && q.some(function(a) {
                        return "#text" === a.tagName
                    }) && (g.children = [{
                        children: q,
                        tagName: "tspan"
                    }]);
                    "#text" !== A && "a" !== A && (g.tagName = "tspan");
                    w(g, {
                        attributes: c,
                        style: r
                    });
                    q && q.filter(function(a) {
                        return "#text" !== a.tagName
                    }).forEach(m)
                };
                a.forEach(m);
                t(this.svgElement, "afterModifyTree", {
                    nodes: a
                })
            }
            ;
            g.prototype.truncate = function(a, d, g, c, r, t) {
                var m = this.svgElement, x = m.renderer, A = m.rotation, y = [], n = g ? 1 : 0, u = (d || g || "").length, l = u, k, e = function(b, e) {
                    e = e || b;
                    var h = a.parentNode;
                    if (h && "undefined" === typeof y[e])
                        if (h.getSubStringLength)
                            try {
                                y[e] = c + h.getSubStringLength(0, g ? e + 1 : e)
                            } catch (G) {
                                ""
                            }
                        else
                            x.getSpanWidth && (a.textContent = t(d || g, b),
                            y[e] = c + x.getSpanWidth(m, a));
                    return y[e]
                };
                m.rotation = 0;
                var b = e(a.textContent.length);
                if (c + b > r) {
                    for (; n <= u; )
                        l = Math.ceil((n + u) / 2),
                        g && (k = t(g, l)),
                        b = e(l, k && k.length - 1),
                        n === u ? n = u + 1 : b > r ? u = l - 1 : n = l;
                    0 === u ? a.textContent = "" : d && u === d.length - 1 || (a.textContent = k || t(d || g, l))
                }
                g && g.splice(0, l);
                m.actualWidth = b;
                m.rotation = A
            }
            ;
            g.prototype.unescapeEntities = function(d, g) {
                a(this.renderer.escapes, function(a, m) {
                    g && -1 !== g.indexOf(a) || (d = d.toString().replace(new RegExp(a,"g"), m))
                });
                return d
            }
            ;
            return g
        }()
    });
    O(f, "Core/Renderer/SVG/SVGRenderer.js", [f["Core/Renderer/HTML/AST.js"], f["Core/Color/Color.js"], f["Core/Globals.js"], f["Core/Renderer/RendererRegistry.js"], f["Core/Renderer/SVG/SVGElement.js"], f["Core/Renderer/SVG/SVGLabel.js"], f["Core/Renderer/SVG/Symbols.js"], f["Core/Renderer/SVG/TextBuilder.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H, w, t) {
        var r = B.charts, a = B.deg2rad, d = B.doc, g = B.isFirefox, m = B.isMS, q = B.isWebKit, x = B.noop, J = B.SVG_NS, I = B.symbolSizes, M = B.win, K = t.addEvent, C = t.attr, A = t.createElement, y = t.css, n = t.defined, u = t.destroyObjectProperties, l = t.extend, k = t.isArray, e = t.isNumber, b = t.isObject, h = t.isString, v = t.merge, p = t.pick, G = t.pInt, Q = t.uniqueKey, S;
        B = function() {
            function L(b, e, a, h, l, p, n) {
                this.width = this.url = this.style = this.isSVG = this.imgCount = this.height = this.gradients = this.globalAnimation = this.defs = this.chartIndex = this.cacheKeys = this.cache = this.boxWrapper = this.box = this.alignedObjects = void 0;
                this.init(b, e, a, h, l, p, n)
            }
            L.prototype.init = function(b, e, a, h, l, p, n) {
                var k = this.createElement("svg").attr({
                    version: "1.1",
                    "class": "highcharts-root"
                })
                  , v = k.element;
                n || k.css(this.getStyle(h));
                b.appendChild(v);
                C(b, "dir", "ltr");
                -1 === b.innerHTML.indexOf("xmlns") && C(v, "xmlns", this.SVG_NS);
                this.isSVG = !0;
                this.box = v;
                this.boxWrapper = k;
                this.alignedObjects = [];
                this.url = this.getReferenceURL();
                this.createElement("desc").add().element.appendChild(d.createTextNode("Created with Highcharts 10.2.1"));
                this.defs = this.createElement("defs").add();
                this.allowHTML = p;
                this.forExport = l;
                this.styledMode = n;
                this.gradients = {};
                this.cache = {};
                this.cacheKeys = [];
                this.imgCount = 0;
                this.setSize(e, a, !1);
                var L;
                g && b.getBoundingClientRect && (e = function() {
                    y(b, {
                        left: 0,
                        top: 0
                    });
                    L = b.getBoundingClientRect();
                    y(b, {
                        left: Math.ceil(L.left) - L.left + "px",
                        top: Math.ceil(L.top) - L.top + "px"
                    })
                }
                ,
                e(),
                this.unSubPixelFix = K(M, "resize", e))
            }
            ;
            L.prototype.definition = function(b) {
                return (new c([b])).addToDOM(this.defs.element)
            }
            ;
            L.prototype.getReferenceURL = function() {
                if ((g || q) && d.getElementsByTagName("base").length) {
                    if (!n(S)) {
                        var b = Q();
                        b = (new c([{
                            tagName: "svg",
                            attributes: {
                                width: 8,
                                height: 8
                            },
                            children: [{
                                tagName: "defs",
                                children: [{
                                    tagName: "clipPath",
                                    attributes: {
                                        id: b
                                    },
                                    children: [{
                                        tagName: "rect",
                                        attributes: {
                                            width: 4,
                                            height: 4
                                        }
                                    }]
                                }]
                            }, {
                                tagName: "rect",
                                attributes: {
                                    id: "hitme",
                                    width: 8,
                                    height: 8,
                                    "clip-path": "url(#".concat(b, ")"),
                                    fill: "rgba(0,0,0,0.001)"
                                }
                            }]
                        }])).addToDOM(d.body);
                        y(b, {
                            position: "fixed",
                            top: 0,
                            left: 0,
                            zIndex: 9E5
                        });
                        var e = d.elementFromPoint(6, 6);
                        S = "hitme" === (e && e.id);
                        d.body.removeChild(b)
                    }
                    if (S)
                        return M.location.href.split("#")[0].replace(/<[^>]*>/g, "").replace(/([\('\)])/g, "\\$1").replace(/ /g, "%20")
                }
                return ""
            }
            ;
            L.prototype.getStyle = function(b) {
                return this.style = l({
                    fontFamily: '"Lucida Grande", "Lucida Sans Unicode", Arial, Helvetica, sans-serif',
                    fontSize: "0.75em"
                }, b)
            }
            ;
            L.prototype.setStyle = function(b) {
                this.boxWrapper.css(this.getStyle(b))
            }
            ;
            L.prototype.isHidden = function() {
                return !this.boxWrapper.getBBox().width
            }
            ;
            L.prototype.destroy = function() {
                var b = this.defs;
                this.box = null;
                this.boxWrapper = this.boxWrapper.destroy();
                u(this.gradients || {});
                this.gradients = null;
                b && (this.defs = b.destroy());
                this.unSubPixelFix && this.unSubPixelFix();
                return this.alignedObjects = null
            }
            ;
            L.prototype.createElement = function(b) {
                var e = new this.Element;
                e.init(this, b);
                return e
            }
            ;
            L.prototype.getRadialAttr = function(b, e) {
                return {
                    cx: b[0] - b[2] / 2 + (e.cx || 0) * b[2],
                    cy: b[1] - b[2] / 2 + (e.cy || 0) * b[2],
                    r: (e.r || 0) * b[2]
                }
            }
            ;
            L.prototype.buildText = function(b) {
                (new w(b)).buildSVG()
            }
            ;
            L.prototype.getContrast = function(b) {
                b = f.parse(b).rgba.map(function(b) {
                    b /= 255;
                    return .03928 >= b ? b / 12.92 : Math.pow((b + .055) / 1.055, 2.4)
                });
                b = .2126 * b[0] + .7152 * b[1] + .0722 * b[2];
                return 1.05 / (b + .05) > (b + .05) / .05 ? "#FFFFFF" : "#000000"
            }
            ;
            L.prototype.button = function(e, a, h, n, p, k, L, u, d, g) {
                void 0 === p && (p = {});
                var P = this.label(e, a, h, d, void 0, void 0, g, void 0, "button")
                  , N = this.styledMode;
                e = p.states || {};
                var G = 0;
                p = v(p);
                delete p.states;
                var x = v({
                    color: "#333333",
                    cursor: "pointer",
                    fontWeight: "normal"
                }, p.style);
                delete p.style;
                var y = c.filterUserAttributes(p);
                P.attr(v({
                    padding: 8,
                    r: 2
                }, y));
                if (!N) {
                    y = v({
                        fill: "#f7f7f7",
                        stroke: "#cccccc",
                        "stroke-width": 1
                    }, y);
                    k = v(y, {
                        fill: "#e6e6e6"
                    }, c.filterUserAttributes(k || e.hover || {}));
                    var A = k.style;
                    delete k.style;
                    L = v(y, {
                        fill: "#e6ebf5",
                        style: {
                            color: "#000000",
                            fontWeight: "bold"
                        }
                    }, c.filterUserAttributes(L || e.select || {}));
                    var q = L.style;
                    delete L.style;
                    u = v(y, {
                        style: {
                            color: "#cccccc"
                        }
                    }, c.filterUserAttributes(u || e.disabled || {}));
                    var X = u.style;
                    delete u.style
                }
                K(P.element, m ? "mouseover" : "mouseenter", function() {
                    3 !== G && P.setState(1)
                });
                K(P.element, m ? "mouseout" : "mouseleave", function() {
                    3 !== G && P.setState(G)
                });
                P.setState = function(e) {
                    1 !== e && (P.state = G = e);
                    P.removeClass(/highcharts-button-(normal|hover|pressed|disabled)/).addClass("highcharts-button-" + ["normal", "hover", "pressed", "disabled"][e || 0]);
                    N || (P.attr([y, k, L, u][e || 0]),
                    e = [x, A, q, X][e || 0],
                    b(e) && P.css(e))
                }
                ;
                N || P.attr(y).css(l({
                    cursor: "default"
                }, x));
                return P.on("touchstart", function(b) {
                    return b.stopPropagation()
                }).on("click", function(b) {
                    3 !== G && n.call(P, b)
                })
            }
            ;
            L.prototype.crispLine = function(b, e, a) {
                void 0 === a && (a = "round");
                var h = b[0]
                  , l = b[1];
                n(h[1]) && h[1] === l[1] && (h[1] = l[1] = Math[a](h[1]) - e % 2 / 2);
                n(h[2]) && h[2] === l[2] && (h[2] = l[2] = Math[a](h[2]) + e % 2 / 2);
                return b
            }
            ;
            L.prototype.path = function(e) {
                var a = this.styledMode ? {} : {
                    fill: "none"
                };
                k(e) ? a.d = e : b(e) && l(a, e);
                return this.createElement("path").attr(a)
            }
            ;
            L.prototype.circle = function(e, a, h) {
                e = b(e) ? e : "undefined" === typeof e ? {} : {
                    x: e,
                    y: a,
                    r: h
                };
                a = this.createElement("circle");
                a.xSetter = a.ySetter = function(b, e, a) {
                    a.setAttribute("c" + e, b)
                }
                ;
                return a.attr(e)
            }
            ;
            L.prototype.arc = function(e, a, h, l, p, n) {
                b(e) ? (l = e,
                a = l.y,
                h = l.r,
                e = l.x) : l = {
                    innerR: l,
                    start: p,
                    end: n
                };
                e = this.symbol("arc", e, a, h, h, l);
                e.r = h;
                return e
            }
            ;
            L.prototype.rect = function(e, a, h, l, p, n) {
                p = b(e) ? e.r : p;
                var k = this.createElement("rect");
                e = b(e) ? e : "undefined" === typeof e ? {} : {
                    x: e,
                    y: a,
                    width: Math.max(h, 0),
                    height: Math.max(l, 0)
                };
                this.styledMode || ("undefined" !== typeof n && (e["stroke-width"] = n,
                e = k.crisp(e)),
                e.fill = "none");
                p && (e.r = p);
                k.rSetter = function(b, e, a) {
                    k.r = b;
                    C(a, {
                        rx: b,
                        ry: b
                    })
                }
                ;
                k.rGetter = function() {
                    return k.r || 0
                }
                ;
                return k.attr(e)
            }
            ;
            L.prototype.setSize = function(b, e, a) {
                this.width = b;
                this.height = e;
                this.boxWrapper.animate({
                    width: b,
                    height: e
                }, {
                    step: function() {
                        this.attr({
                            viewBox: "0 0 " + this.attr("width") + " " + this.attr("height")
                        })
                    },
                    duration: p(a, !0) ? void 0 : 0
                });
                this.alignElements()
            }
            ;
            L.prototype.g = function(b) {
                var e = this.createElement("g");
                return b ? e.attr({
                    "class": "highcharts-" + b
                }) : e
            }
            ;
            L.prototype.image = function(b, a, h, l, p, n) {
                var k = {
                    preserveAspectRatio: "none"
                }
                  , v = function(b, e) {
                    b.setAttributeNS ? b.setAttributeNS("http://www.w3.org/1999/xlink", "href", e) : b.setAttribute("hc-svg-href", e)
                };
                e(a) && (k.x = a);
                e(h) && (k.y = h);
                e(l) && (k.width = l);
                e(p) && (k.height = p);
                var L = this.createElement("image").attr(k);
                a = function(e) {
                    v(L.element, b);
                    n.call(L, e)
                }
                ;
                n ? (v(L.element, "data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="),
                h = new M.Image,
                K(h, "load", a),
                h.src = b,
                h.complete && a({})) : v(L.element, b);
                return L
            }
            ;
            L.prototype.symbol = function(b, e, a, h, k, v) {
                var L = this, u = /^url\((.*?)\)$/, g = u.test(b), m = !g && (this.symbols[b] ? b : "circle"), N = m && this.symbols[m], G;
                if (N) {
                    "number" === typeof e && (G = N.call(this.symbols, Math.round(e || 0), Math.round(a || 0), h || 0, k || 0, v));
                    var P = this.path(G);
                    L.styledMode || P.attr("fill", "none");
                    l(P, {
                        symbolName: m || void 0,
                        x: e,
                        y: a,
                        width: h,
                        height: k
                    });
                    v && l(P, v)
                } else if (g) {
                    var x = b.match(u)[1];
                    var c = P = this.image(x);
                    c.imgwidth = p(I[x] && I[x].width, v && v.width);
                    c.imgheight = p(I[x] && I[x].height, v && v.height);
                    var q = function(b) {
                        return b.attr({
                            width: b.width,
                            height: b.height
                        })
                    };
                    ["width", "height"].forEach(function(b) {
                        c[b + "Setter"] = function(b, e) {
                            var a = this["img" + e];
                            this[e] = b;
                            n(a) && (v && "within" === v.backgroundSize && this.width && this.height && (a = Math.round(a * Math.min(this.width / this.imgwidth, this.height / this.imgheight))),
                            this.element && this.element.setAttribute(e, a),
                            this.alignByTranslate || (b = ((this[e] || 0) - a) / 2,
                            this.attr("width" === e ? {
                                translateX: b
                            } : {
                                translateY: b
                            })))
                        }
                    });
                    n(e) && c.attr({
                        x: e,
                        y: a
                    });
                    c.isImg = !0;
                    n(c.imgwidth) && n(c.imgheight) ? q(c) : (c.attr({
                        width: 0,
                        height: 0
                    }),
                    A("img", {
                        onload: function() {
                            var b = r[L.chartIndex];
                            0 === this.width && (y(this, {
                                position: "absolute",
                                top: "-999em"
                            }),
                            d.body.appendChild(this));
                            I[x] = {
                                width: this.width,
                                height: this.height
                            };
                            c.imgwidth = this.width;
                            c.imgheight = this.height;
                            c.element && q(c);
                            this.parentNode && this.parentNode.removeChild(this);
                            L.imgCount--;
                            if (!L.imgCount && b && !b.hasLoaded)
                                b.onload()
                        },
                        src: x
                    }),
                    this.imgCount++)
                }
                return P
            }
            ;
            L.prototype.clipRect = function(b, e, a, h) {
                var l = Q() + "-"
                  , p = this.createElement("clipPath").attr({
                    id: l
                }).add(this.defs);
                b = this.rect(b, e, a, h, 0).add(p);
                b.id = l;
                b.clipPath = p;
                b.count = 0;
                return b
            }
            ;
            L.prototype.text = function(b, e, a, h) {
                var l = {};
                if (h && (this.allowHTML || !this.forExport))
                    return this.html(b, e, a);
                l.x = Math.round(e || 0);
                a && (l.y = Math.round(a));
                n(b) && (l.text = b);
                b = this.createElement("text").attr(l);
                if (!h || this.forExport && !this.allowHTML)
                    b.xSetter = function(b, e, a) {
                        for (var h = a.getElementsByTagName("tspan"), l = a.getAttribute(e), p = 0, n; p < h.length; p++)
                            n = h[p],
                            n.getAttribute(e) === l && n.setAttribute(e, b);
                        a.setAttribute(e, b)
                    }
                    ;
                return b
            }
            ;
            L.prototype.fontMetrics = function(b, e) {
                b = !this.styledMode && /px/.test(b) || !M.getComputedStyle ? b || e && e.style && e.style.fontSize || this.style && this.style.fontSize : e && z.prototype.getStyle.call(e, "font-size");
                b = /px/.test(b) ? G(b) : 12;
                e = 24 > b ? b + 3 : Math.round(1.2 * b);
                return {
                    h: e,
                    b: Math.round(.8 * e),
                    f: b
                }
            }
            ;
            L.prototype.rotCorr = function(b, e, h) {
                var l = b;
                e && h && (l = Math.max(l * Math.cos(e * a), 4));
                return {
                    x: -b / 3 * Math.sin(e * a),
                    y: l
                }
            }
            ;
            L.prototype.pathToSegments = function(b) {
                for (var a = [], l = [], p = {
                    A: 8,
                    C: 7,
                    H: 2,
                    L: 3,
                    M: 3,
                    Q: 5,
                    S: 5,
                    T: 3,
                    V: 2
                }, n = 0; n < b.length; n++)
                    h(l[0]) && e(b[n]) && l.length === p[l[0].toUpperCase()] && b.splice(n, 0, l[0].replace("M", "L").replace("m", "l")),
                    "string" === typeof b[n] && (l.length && a.push(l.slice(0)),
                    l.length = 0),
                    l.push(b[n]);
                a.push(l.slice(0));
                return a
            }
            ;
            L.prototype.label = function(b, e, a, h, l, p, n, k, v) {
                return new E(this,b,e,a,h,l,p,n,k,v)
            }
            ;
            L.prototype.alignElements = function() {
                this.alignedObjects.forEach(function(b) {
                    return b.align()
                })
            }
            ;
            return L
        }();
        l(B.prototype, {
            Element: z,
            SVG_NS: J,
            escapes: {
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                "'": "&#39;",
                '"': "&quot;"
            },
            symbols: H,
            draw: x
        });
        F.registerRendererType("svg", B, !0);
        "";
        return B
    });
    O(f, "Core/Renderer/HTML/HTMLElement.js", [f["Core/Globals.js"], f["Core/Renderer/SVG/SVGElement.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = this && this.__extends || function() {
            var a = function(d, g) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var g in d)
                        d.hasOwnProperty(g) && (a[g] = d[g])
                }
                ;
                return a(d, g)
            };
            return function(d, g) {
                function m() {
                    this.constructor = d
                }
                a(d, g);
                d.prototype = null === g ? Object.create(g) : (m.prototype = g.prototype,
                new m)
            }
        }()
          , z = c.isFirefox
          , E = c.isMS
          , H = c.isWebKit
          , w = c.win
          , t = B.css
          , r = B.defined
          , a = B.extend
          , d = B.pick
          , g = B.pInt;
        return function(m) {
            function c() {
                return null !== m && m.apply(this, arguments) || this
            }
            D(c, m);
            c.compose = function(a) {
                if (-1 === c.composedClasses.indexOf(a)) {
                    c.composedClasses.push(a);
                    var d = c.prototype
                      , g = a.prototype;
                    g.getSpanCorrection = d.getSpanCorrection;
                    g.htmlCss = d.htmlCss;
                    g.htmlGetBBox = d.htmlGetBBox;
                    g.htmlUpdateTransform = d.htmlUpdateTransform;
                    g.setSpanRotation = d.setSpanRotation
                }
                return a
            }
            ;
            c.prototype.getSpanCorrection = function(a, d, g) {
                this.xCorr = -a * g;
                this.yCorr = -d
            }
            ;
            c.prototype.htmlCss = function(g) {
                var m = "SPAN" === this.element.tagName && g && "width"in g
                  , c = d(m && g.width, void 0);
                if (m) {
                    delete g.width;
                    this.textWidth = c;
                    var x = !0
                }
                g && "ellipsis" === g.textOverflow && (g.whiteSpace = "nowrap",
                g.overflow = "hidden");
                this.styles = a(this.styles, g);
                t(this.element, g);
                x && this.htmlUpdateTransform();
                return this
            }
            ;
            c.prototype.htmlGetBBox = function() {
                var a = this.element;
                return {
                    x: a.offsetLeft,
                    y: a.offsetTop,
                    width: a.offsetWidth,
                    height: a.offsetHeight
                }
            }
            ;
            c.prototype.htmlUpdateTransform = function() {
                if (this.added) {
                    var a = this.renderer
                      , d = this.element
                      , m = this.translateX || 0
                      , c = this.translateY || 0
                      , q = this.x || 0
                      , C = this.y || 0
                      , A = this.textAlign || "left"
                      , y = {
                        left: 0,
                        center: .5,
                        right: 1
                    }[A]
                      , n = this.styles;
                    n = n && n.whiteSpace;
                    t(d, {
                        marginLeft: m,
                        marginTop: c
                    });
                    !a.styledMode && this.shadows && this.shadows.forEach(function(b) {
                        t(b, {
                            marginLeft: m + 1,
                            marginTop: c + 1
                        })
                    });
                    this.inverted && [].forEach.call(d.childNodes, function(b) {
                        a.invertChild(b, d)
                    });
                    if ("SPAN" === d.tagName) {
                        var u = this.rotation
                          , l = this.textWidth && g(this.textWidth)
                          , k = [u, A, d.innerHTML, this.textWidth, this.textAlign].join()
                          , e = void 0;
                        e = !1;
                        if (l !== this.oldTextWidth) {
                            if (this.textPxLength)
                                var b = this.textPxLength;
                            else
                                t(d, {
                                    width: "",
                                    whiteSpace: n || "nowrap"
                                }),
                                b = d.offsetWidth;
                            (l > this.oldTextWidth || b > l) && (/[ \-]/.test(d.textContent || d.innerText) || "ellipsis" === d.style.textOverflow) && (t(d, {
                                width: b > l || u ? l + "px" : "auto",
                                display: "block",
                                whiteSpace: n || "normal"
                            }),
                            this.oldTextWidth = l,
                            e = !0)
                        }
                        this.hasBoxWidthChanged = e;
                        k !== this.cTT && (e = a.fontMetrics(d.style.fontSize, d).b,
                        !r(u) || u === (this.oldRotation || 0) && A === this.oldAlign || this.setSpanRotation(u, y, e),
                        this.getSpanCorrection(!r(u) && this.textPxLength || d.offsetWidth, e, y, u, A));
                        t(d, {
                            left: q + (this.xCorr || 0) + "px",
                            top: C + (this.yCorr || 0) + "px"
                        });
                        this.cTT = k;
                        this.oldRotation = u;
                        this.oldAlign = A
                    }
                } else
                    this.alignOnAdd = !0
            }
            ;
            c.prototype.setSpanRotation = function(a, d, g) {
                var m = {}
                  , c = E && !/Edge/.test(w.navigator.userAgent) ? "-ms-transform" : H ? "-webkit-transform" : z ? "MozTransform" : w.opera ? "-o-transform" : void 0;
                c && (m[c] = m.transform = "rotate(" + a + "deg)",
                m[c + (z ? "Origin" : "-origin")] = m.transformOrigin = 100 * d + "% " + g + "px",
                t(this.element, m))
            }
            ;
            c.composedClasses = [];
            return c
        }(f)
    });
    O(f, "Core/Renderer/HTML/HTMLRenderer.js", [f["Core/Renderer/HTML/AST.js"], f["Core/Renderer/SVG/SVGElement.js"], f["Core/Renderer/SVG/SVGRenderer.js"], f["Core/Utilities.js"]], function(c, f, B, F) {
        var D = this && this.__extends || function() {
            var c = function(a, d) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var g in d)
                        d.hasOwnProperty(g) && (a[g] = d[g])
                }
                ;
                return c(a, d)
            };
            return function(a, d) {
                function g() {
                    this.constructor = a
                }
                c(a, d);
                a.prototype = null === d ? Object.create(d) : (g.prototype = d.prototype,
                new g)
            }
        }()
          , E = F.attr
          , H = F.createElement
          , w = F.extend
          , t = F.pick;
        return function(r) {
            function a() {
                return null !== r && r.apply(this, arguments) || this
            }
            D(a, r);
            a.compose = function(d) {
                -1 === a.composedClasses.indexOf(d) && (a.composedClasses.push(d),
                d.prototype.html = a.prototype.html);
                return d
            }
            ;
            a.prototype.html = function(a, g, m) {
                var d = this.createElement("span")
                  , x = d.element
                  , r = d.renderer
                  , I = r.isSVG
                  , M = function(a, d) {
                    ["opacity", "visibility"].forEach(function(g) {
                        a[g + "Setter"] = function(m, n, u) {
                            var l = a.div ? a.div.style : d;
                            f.prototype[g + "Setter"].call(this, m, n, u);
                            l && (l[n] = m)
                        }
                    });
                    a.addedSetters = !0
                };
                d.textSetter = function(a) {
                    a !== this.textStr && (delete this.bBox,
                    delete this.oldTextWidth,
                    c.setElementHTML(this.element, t(a, "")),
                    this.textStr = a,
                    d.doTransform = !0)
                }
                ;
                I && M(d, d.element.style);
                d.xSetter = d.ySetter = d.alignSetter = d.rotationSetter = function(a, g) {
                    "align" === g ? d.alignValue = d.textAlign = a : d[g] = a;
                    d.doTransform = !0
                }
                ;
                d.afterSetters = function() {
                    this.doTransform && (this.htmlUpdateTransform(),
                    this.doTransform = !1)
                }
                ;
                d.attr({
                    text: a,
                    x: Math.round(g),
                    y: Math.round(m)
                }).css({
                    position: "absolute"
                });
                r.styledMode || d.css({
                    fontFamily: this.style.fontFamily,
                    fontSize: this.style.fontSize
                });
                x.style.whiteSpace = "nowrap";
                d.css = d.htmlCss;
                I && (d.add = function(a) {
                    var g = r.box.parentNode
                      , m = [];
                    if (this.parentGroup = a) {
                        var c = a.div;
                        if (!c) {
                            for (; a; )
                                m.push(a),
                                a = a.parentGroup;
                            m.reverse().forEach(function(a) {
                                function n(b, h) {
                                    a[h] = b;
                                    "translateX" === h ? e.left = b + "px" : e.top = b + "px";
                                    a.doTransform = !0
                                }
                                var l = E(a.element, "class")
                                  , k = a.styles || {};
                                c = a.div = a.div || H("div", l ? {
                                    className: l
                                } : void 0, {
                                    position: "absolute",
                                    left: (a.translateX || 0) + "px",
                                    top: (a.translateY || 0) + "px",
                                    display: a.display,
                                    opacity: a.opacity,
                                    cursor: k.cursor,
                                    pointerEvents: k.pointerEvents,
                                    visibility: a.visibility
                                }, c || g);
                                var e = c.style;
                                w(a, {
                                    classSetter: function(b) {
                                        return function(e) {
                                            this.element.setAttribute("class", e);
                                            b.className = e
                                        }
                                    }(c),
                                    on: function() {
                                        m[0].div && d.on.apply({
                                            element: m[0].div,
                                            onEvents: a.onEvents
                                        }, arguments);
                                        return a
                                    },
                                    translateXSetter: n,
                                    translateYSetter: n
                                });
                                a.addedSetters || M(a)
                            })
                        }
                    } else
                        c = g;
                    c.appendChild(x);
                    d.added = !0;
                    d.alignOnAdd && d.htmlUpdateTransform();
                    return d
                }
                );
                return d
            }
            ;
            a.composedClasses = [];
            return a
        }(B)
    });
    O(f, "Core/Axis/AxisDefaults.js", [], function() {
        var c;
        (function(c) {
            c.defaultXAxisOptions = {
                alignTicks: !0,
                allowDecimals: void 0,
                panningEnabled: !0,
                zIndex: 2,
                zoomEnabled: !0,
                dateTimeLabelFormats: {
                    millisecond: {
                        main: "%H:%M:%S.%L",
                        range: !1
                    },
                    second: {
                        main: "%H:%M:%S",
                        range: !1
                    },
                    minute: {
                        main: "%H:%M",
                        range: !1
                    },
                    hour: {
                        main: "%H:%M",
                        range: !1
                    },
                    day: {
                        main: "%e. %b"
                    },
                    week: {
                        main: "%e. %b"
                    },
                    month: {
                        main: "%b '%y"
                    },
                    year: {
                        main: "%Y"
                    }
                },
                endOnTick: !1,
                gridLineDashStyle: "Solid",
                gridZIndex: 1,
                labels: {
                    autoRotation: void 0,
                    autoRotationLimit: 80,
                    distance: void 0,
                    enabled: !0,
                    indentation: 10,
                    overflow: "justify",
                    padding: 5,
                    reserveSpace: void 0,
                    rotation: void 0,
                    staggerLines: 0,
                    step: 0,
                    useHTML: !1,
                    x: 0,
                    zIndex: 7,
                    style: {
                        color: "#666666",
                        cursor: "default",
                        fontSize: "0.688em"
                    }
                },
                maxPadding: .01,
                minorGridLineDashStyle: "Solid",
                minorTickLength: 2,
                minorTickPosition: "outside",
                minPadding: .01,
                offset: void 0,
                opposite: !1,
                reversed: void 0,
                reversedStacks: !1,
                showEmpty: !0,
                showFirstLabel: !0,
                showLastLabel: !0,
                startOfWeek: 1,
                startOnTick: !1,
                tickLength: 10,
                tickPixelInterval: 100,
                tickmarkPlacement: "between",
                tickPosition: "outside",
                title: {
                    align: "middle",
                    rotation: 0,
                    useHTML: !1,
                    x: 0,
                    y: 0,
                    style: {
                        color: "#666666"
                    }
                },
                type: "linear",
                uniqueNames: !0,
                visible: !0,
                minorGridLineColor: "#f2f2f2",
                minorGridLineWidth: 1,
                minorTickColor: "#999999",
                lineColor: "#ccd6eb",
                lineWidth: 1,
                gridLineColor: "#e6e6e6",
                gridLineWidth: void 0,
                tickColor: "#ccd6eb"
            };
            c.defaultYAxisOptions = {
                reversedStacks: !0,
                endOnTick: !0,
                maxPadding: .05,
                minPadding: .05,
                tickPixelInterval: 72,
                showLastLabel: !0,
                labels: {
                    x: -8
                },
                startOnTick: !0,
                title: {
                    rotation: 270,
                    text: "Values"
                },
                stackLabels: {
                    animation: {},
                    allowOverlap: !1,
                    enabled: !1,
                    crop: !0,
                    overflow: "justify",
                    formatter: function() {
                        var c = this.axis.chart.numberFormatter;
                        return c(this.total || 0, -1)
                    },
                    style: {
                        color: "#000000",
                        fontSize: "0.688em",
                        fontWeight: "bold",
                        textOutline: "0.063em contrast"
                    }
                },
                gridLineWidth: 1,
                lineWidth: 0
            };
            c.defaultLeftAxisOptions = {
                labels: {
                    x: -15
                },
                title: {
                    rotation: 270
                }
            };
            c.defaultRightAxisOptions = {
                labels: {
                    x: 15
                },
                title: {
                    rotation: 90
                }
            };
            c.defaultBottomAxisOptions = {
                labels: {
                    autoRotation: [-45],
                    x: 0
                },
                margin: 15,
                title: {
                    rotation: 0
                }
            };
            c.defaultTopAxisOptions = {
                labels: {
                    autoRotation: [-45],
                    x: 0
                },
                margin: 15,
                title: {
                    rotation: 0
                }
            }
        }
        )(c || (c = {}));
        return c
    });
    O(f, "Core/Foundation.js", [f["Core/Utilities.js"]], function(c) {
        var f = c.addEvent, B = c.isFunction, F = c.objectEach, z = c.removeEvent, E;
        (function(c) {
            c.registerEventOptions = function(c, t) {
                c.eventOptions = c.eventOptions || {};
                F(t.events, function(r, a) {
                    c.eventOptions[a] !== r && (c.eventOptions[a] && (z(c, a, c.eventOptions[a]),
                    delete c.eventOptions[a]),
                    B(r) && (c.eventOptions[a] = r,
                    f(c, a, r)))
                })
            }
        }
        )(E || (E = {}));
        return E
    });
    O(f, "Core/Axis/Tick.js", [f["Core/FormatUtilities.js"], f["Core/Globals.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = f.deg2rad
          , z = B.clamp
          , E = B.correctFloat
          , H = B.defined
          , w = B.destroyObjectProperties
          , t = B.extend
          , r = B.fireEvent
          , a = B.isNumber
          , d = B.merge
          , g = B.objectEach
          , m = B.pick;
        f = function() {
            function q(a, d, g, m, c) {
                this.isNewLabel = this.isNew = !0;
                this.axis = a;
                this.pos = d;
                this.type = g || "";
                this.parameters = c || {};
                this.tickmarkOffset = this.parameters.tickmarkOffset;
                this.options = this.parameters.options;
                r(this, "init");
                g || m || this.addLabel()
            }
            q.prototype.addLabel = function() {
                var d = this
                  , g = d.axis
                  , q = g.options
                  , f = g.chart
                  , K = g.categories
                  , C = g.logarithmic
                  , A = g.names
                  , y = d.pos
                  , n = m(d.options && d.options.labels, q.labels)
                  , u = g.tickPositions
                  , l = y === u[0]
                  , k = y === u[u.length - 1]
                  , e = (!n.step || 1 === n.step) && 1 === g.tickInterval;
                u = u.info;
                var b = d.label, h;
                K = this.parameters.category || (K ? m(K[y], A[y], y) : y);
                C && a(K) && (K = E(C.lin2log(K)));
                if (g.dateTime)
                    if (u) {
                        var v = f.time.resolveDTLFormat(q.dateTimeLabelFormats[!q.grid && u.higherRanks[y] || u.unitName]);
                        var p = v.main
                    } else
                        a(K) && (p = g.dateTime.getXDateFormat(K, q.dateTimeLabelFormats || {}));
                d.isFirst = l;
                d.isLast = k;
                var G = {
                    axis: g,
                    chart: f,
                    dateTimeLabelFormat: p,
                    isFirst: l,
                    isLast: k,
                    pos: y,
                    tick: d,
                    tickPositionInfo: u,
                    value: K
                };
                r(this, "labelFormat", G);
                var Q = function(b) {
                    return n.formatter ? n.formatter.call(b, b) : n.format ? (b.text = g.defaultLabelFormatter.call(b),
                    c.format(n.format, b, f)) : g.defaultLabelFormatter.call(b, b)
                };
                q = Q.call(G, G);
                var S = v && v.list;
                d.shortenLabel = S ? function() {
                    for (h = 0; h < S.length; h++)
                        if (t(G, {
                            dateTimeLabelFormat: S[h]
                        }),
                        b.attr({
                            text: Q.call(G, G)
                        }),
                        b.getBBox().width < g.getSlotWidth(d) - 2 * n.padding)
                            return;
                    b.attr({
                        text: ""
                    })
                }
                : void 0;
                e && g._addedPlotLB && d.moveLabel(q, n);
                H(b) || d.movedLabel ? b && b.textStr !== q && !e && (!b.textWidth || n.style.width || b.styles.width || b.css({
                    width: null
                }),
                b.attr({
                    text: q
                }),
                b.textPxLength = b.getBBox().width) : (d.label = b = d.createLabel({
                    x: 0,
                    y: 0
                }, q, n),
                d.rotation = 0)
            }
            ;
            q.prototype.createLabel = function(a, g, m) {
                var c = this.axis
                  , x = c.chart;
                if (a = H(g) && m.enabled ? x.renderer.text(g, a.x, a.y, m.useHTML).add(c.labelGroup) : null)
                    x.styledMode || a.css(d(m.style)),
                    a.textPxLength = a.getBBox().width;
                return a
            }
            ;
            q.prototype.destroy = function() {
                w(this, this.axis)
            }
            ;
            q.prototype.getPosition = function(a, d, g, m) {
                var c = this.axis
                  , x = c.chart
                  , A = m && x.oldChartHeight || x.chartHeight;
                a = {
                    x: a ? E(c.translate(d + g, void 0, void 0, m) + c.transB) : c.left + c.offset + (c.opposite ? (m && x.oldChartWidth || x.chartWidth) - c.right - c.left : 0),
                    y: a ? A - c.bottom + c.offset - (c.opposite ? c.height : 0) : E(A - c.translate(d + g, void 0, void 0, m) - c.transB)
                };
                a.y = z(a.y, -1E5, 1E5);
                r(this, "afterGetPosition", {
                    pos: a
                });
                return a
            }
            ;
            q.prototype.getLabelPosition = function(a, d, g, m, c, q, A, y) {
                var n = this.axis
                  , u = n.transA
                  , l = n.isLinked && n.linkedParent ? n.linkedParent.reversed : n.reversed
                  , k = n.staggerLines
                  , e = n.tickRotCorr || {
                    x: 0,
                    y: 0
                }
                  , b = m || n.reserveSpaceDefault ? 0 : -n.labelOffset * ("center" === n.labelAlign ? .5 : 1)
                  , h = {};
                g = 0 === n.side ? g.rotation ? -8 : -g.getBBox().height : 2 === n.side ? e.y + 8 : Math.cos(g.rotation * D) * (e.y - g.getBBox(!1, 0).height / 2);
                H(c.y) && (g = 0 === n.side && n.horiz ? c.y + g : c.y);
                a = a + c.x + b + e.x - (q && m ? q * u * (l ? -1 : 1) : 0);
                d = d + g - (q && !m ? q * u * (l ? 1 : -1) : 0);
                k && (m = A / (y || 1) % k,
                n.opposite && (m = k - m - 1),
                d += n.labelOffset / k * m);
                h.x = a;
                h.y = Math.round(d);
                r(this, "afterGetLabelPosition", {
                    pos: h,
                    tickmarkOffset: q,
                    index: A
                });
                return h
            }
            ;
            q.prototype.getLabelSize = function() {
                return this.label ? this.label.getBBox()[this.axis.horiz ? "height" : "width"] : 0
            }
            ;
            q.prototype.getMarkPath = function(a, d, g, m, c, q) {
                return q.crispLine([["M", a, d], ["L", a + (c ? 0 : -g), d + (c ? g : 0)]], m)
            }
            ;
            q.prototype.handleOverflow = function(a) {
                var d = this.axis
                  , g = d.options.labels
                  , c = a.x
                  , q = d.chart.chartWidth
                  , x = d.chart.spacing
                  , A = m(d.labelLeft, Math.min(d.pos, x[3]));
                x = m(d.labelRight, Math.max(d.isRadial ? 0 : d.pos + d.len, q - x[1]));
                var y = this.label, n = this.rotation, u = {
                    left: 0,
                    center: .5,
                    right: 1
                }[d.labelAlign || y.attr("align")], l = y.getBBox().width, k = d.getSlotWidth(this), e = {}, b = k, h = 1, v;
                if (n || "justify" !== g.overflow)
                    0 > n && c - u * l < A ? v = Math.round(c / Math.cos(n * D) - A) : 0 < n && c + u * l > x && (v = Math.round((q - c) / Math.cos(n * D)));
                else if (q = c + (1 - u) * l,
                c - u * l < A ? b = a.x + b * (1 - u) - A : q > x && (b = x - a.x + b * u,
                h = -1),
                b = Math.min(k, b),
                b < k && "center" === d.labelAlign && (a.x += h * (k - b - u * (k - Math.min(l, b)))),
                l > b || d.autoRotation && (y.styles || {}).width)
                    v = b;
                v && (this.shortenLabel ? this.shortenLabel() : (e.width = Math.floor(v) + "px",
                (g.style || {}).textOverflow || (e.textOverflow = "ellipsis"),
                y.css(e)))
            }
            ;
            q.prototype.moveLabel = function(a, d) {
                var m = this
                  , c = m.label
                  , q = m.axis
                  , x = q.reversed
                  , A = !1;
                c && c.textStr === a ? (m.movedLabel = c,
                A = !0,
                delete m.label) : g(q.ticks, function(n) {
                    A || n.isNew || n === m || !n.label || n.label.textStr !== a || (m.movedLabel = n.label,
                    A = !0,
                    n.labelPos = m.movedLabel.xy,
                    delete n.label)
                });
                if (!A && (m.labelPos || c)) {
                    var y = m.labelPos || c.xy;
                    c = q.horiz ? x ? 0 : q.width + q.left : y.x;
                    q = q.horiz ? y.y : x ? q.width + q.left : 0;
                    m.movedLabel = m.createLabel({
                        x: c,
                        y: q
                    }, a, d);
                    m.movedLabel && m.movedLabel.attr({
                        opacity: 0
                    })
                }
            }
            ;
            q.prototype.render = function(a, d, g) {
                var c = this.axis
                  , q = c.horiz
                  , x = this.pos
                  , A = m(this.tickmarkOffset, c.tickmarkOffset);
                x = this.getPosition(q, x, A, d);
                A = x.x;
                var y = x.y;
                c = q && A === c.pos + c.len || !q && y === c.pos ? -1 : 1;
                q = m(g, this.label && this.label.newOpacity, 1);
                g = m(g, 1);
                this.isActive = !0;
                this.renderGridLine(d, g, c);
                this.renderMark(x, g, c);
                this.renderLabel(x, d, q, a);
                this.isNew = !1;
                r(this, "afterRender")
            }
            ;
            q.prototype.renderGridLine = function(a, d, g) {
                var c = this.axis
                  , q = c.options
                  , x = {}
                  , A = this.pos
                  , y = this.type
                  , n = m(this.tickmarkOffset, c.tickmarkOffset)
                  , u = c.chart.renderer
                  , l = this.gridLine
                  , k = q.gridLineWidth
                  , e = q.gridLineColor
                  , b = q.gridLineDashStyle;
                "minor" === this.type && (k = q.minorGridLineWidth,
                e = q.minorGridLineColor,
                b = q.minorGridLineDashStyle);
                l || (c.chart.styledMode || (x.stroke = e,
                x["stroke-width"] = k || 0,
                x.dashstyle = b),
                y || (x.zIndex = 1),
                a && (d = 0),
                this.gridLine = l = u.path().attr(x).addClass("highcharts-" + (y ? y + "-" : "") + "grid-line").add(c.gridGroup));
                if (l && (g = c.getPlotLinePath({
                    value: A + n,
                    lineWidth: l.strokeWidth() * g,
                    force: "pass",
                    old: a
                })))
                    l[a || this.isNew ? "attr" : "animate"]({
                        d: g,
                        opacity: d
                    })
            }
            ;
            q.prototype.renderMark = function(a, d, g) {
                var c = this.axis
                  , q = c.options
                  , x = c.chart.renderer
                  , A = this.type
                  , y = c.tickSize(A ? A + "Tick" : "tick")
                  , n = a.x;
                a = a.y;
                var u = m(q["minor" !== A ? "tickWidth" : "minorTickWidth"], !A && c.isXAxis ? 1 : 0);
                q = q["minor" !== A ? "tickColor" : "minorTickColor"];
                var l = this.mark
                  , k = !l;
                y && (c.opposite && (y[0] = -y[0]),
                l || (this.mark = l = x.path().addClass("highcharts-" + (A ? A + "-" : "") + "tick").add(c.axisGroup),
                c.chart.styledMode || l.attr({
                    stroke: q,
                    "stroke-width": u
                })),
                l[k ? "attr" : "animate"]({
                    d: this.getMarkPath(n, a, y[0], l.strokeWidth() * g, c.horiz, x),
                    opacity: d
                }))
            }
            ;
            q.prototype.renderLabel = function(d, g, c, q) {
                var x = this.axis
                  , r = x.horiz
                  , A = x.options
                  , y = this.label
                  , n = A.labels
                  , u = n.step;
                x = m(this.tickmarkOffset, x.tickmarkOffset);
                var l = d.x;
                d = d.y;
                var k = !0;
                y && a(l) && (y.xy = d = this.getLabelPosition(l, d, y, r, n, x, q, u),
                this.isFirst && !this.isLast && !A.showFirstLabel || this.isLast && !this.isFirst && !A.showLastLabel ? k = !1 : !r || n.step || n.rotation || g || 0 === c || this.handleOverflow(d),
                u && q % u && (k = !1),
                k && a(d.y) ? (d.opacity = c,
                y[this.isNewLabel ? "attr" : "animate"](d).show(!0),
                this.isNewLabel = !1) : (y.hide(),
                this.isNewLabel = !0))
            }
            ;
            q.prototype.replaceMovedLabel = function() {
                var a = this.label
                  , d = this.axis
                  , g = d.reversed;
                if (a && !this.isNew) {
                    var c = d.horiz ? g ? d.left : d.width + d.left : a.xy.x;
                    g = d.horiz ? a.xy.y : g ? d.width + d.top : d.top;
                    a.animate({
                        x: c,
                        y: g,
                        opacity: 0
                    }, void 0, a.destroy);
                    delete this.label
                }
                d.isDirty = !0;
                this.label = this.movedLabel;
                delete this.movedLabel
            }
            ;
            return q
        }();
        "";
        return f
    });
    O(f, "Core/Axis/Axis.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/Axis/AxisDefaults.js"], f["Core/Color/Color.js"], f["Core/DefaultOptions.js"], f["Core/Foundation.js"], f["Core/Globals.js"], f["Core/Axis/Tick.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H, w) {
        var t = c.animObject
          , r = F.defaultOptions
          , a = z.registerEventOptions
          , d = E.deg2rad
          , g = w.arrayMax
          , m = w.arrayMin
          , q = w.clamp
          , x = w.correctFloat
          , J = w.defined
          , I = w.destroyObjectProperties
          , M = w.erase
          , K = w.error
          , C = w.extend
          , A = w.fireEvent
          , y = w.isArray
          , n = w.isNumber
          , u = w.isString
          , l = w.merge
          , k = w.normalizeTickInterval
          , e = w.objectEach
          , b = w.pick
          , h = w.relativeLength
          , v = w.removeEvent
          , p = w.splat
          , G = w.syncTimeout
          , Q = function(e, a) {
            return k(a, void 0, void 0, b(e.options.allowDecimals, .5 > a || void 0 !== e.tickAmount), !!e.tickAmount)
        };
        c = function() {
            function k(b, e) {
                this.zoomEnabled = this.width = this.visible = this.userOptions = this.translationSlope = this.transB = this.transA = this.top = this.ticks = this.tickRotCorr = this.tickPositions = this.tickmarkOffset = this.tickInterval = this.tickAmount = this.side = this.series = this.right = this.positiveValuesOnly = this.pos = this.pointRangePadding = this.pointRange = this.plotLinesAndBandsGroups = this.plotLinesAndBands = this.paddedTicks = this.overlap = this.options = this.offset = this.names = this.minPixelPadding = this.minorTicks = this.minorTickInterval = this.min = this.maxLabelLength = this.max = this.len = this.left = this.labelFormatter = this.labelEdge = this.isLinked = this.height = this.hasVisibleSeries = this.hasNames = this.eventOptions = this.coll = this.closestPointRange = this.chart = this.bottom = this.alternateBands = void 0;
                this.init(b, e)
            }
            k.prototype.init = function(e, h) {
                var k = h.isX;
                this.chart = e;
                this.horiz = e.inverted && !this.isZAxis ? !k : k;
                this.isXAxis = k;
                this.coll = this.coll || (k ? "xAxis" : "yAxis");
                A(this, "init", {
                    userOptions: h
                });
                this.opposite = b(h.opposite, this.opposite);
                this.side = b(h.side, this.side, this.horiz ? this.opposite ? 0 : 2 : this.opposite ? 1 : 3);
                this.setOptions(h);
                var l = this.options
                  , d = l.labels
                  , v = l.type;
                this.userOptions = h;
                this.minPixelPadding = 0;
                this.reversed = b(l.reversed, this.reversed);
                this.visible = l.visible;
                this.zoomEnabled = l.zoomEnabled;
                this.hasNames = "category" === v || !0 === l.categories;
                this.categories = l.categories || (this.hasNames ? [] : void 0);
                this.names || (this.names = [],
                this.names.keys = {});
                this.plotLinesAndBandsGroups = {};
                this.positiveValuesOnly = !!this.logarithmic;
                this.isLinked = J(l.linkedTo);
                this.ticks = {};
                this.labelEdge = [];
                this.minorTicks = {};
                this.plotLinesAndBands = [];
                this.alternateBands = {};
                this.len = 0;
                this.minRange = this.userMinRange = l.minRange || l.maxZoom;
                this.range = l.range;
                this.offset = l.offset || 0;
                this.min = this.max = null;
                h = b(l.crosshair, p(e.options.tooltip.crosshairs)[k ? 0 : 1]);
                this.crosshair = !0 === h ? {} : h;
                -1 === e.axes.indexOf(this) && (k ? e.axes.splice(e.xAxis.length, 0, this) : e.axes.push(this),
                e[this.coll].push(this));
                this.series = this.series || [];
                e.inverted && !this.isZAxis && k && "undefined" === typeof this.reversed && (this.reversed = !0);
                this.labelRotation = n(d.rotation) ? d.rotation : void 0;
                a(this, l);
                A(this, "afterInit")
            }
            ;
            k.prototype.setOptions = function(b) {
                this.options = l(f.defaultXAxisOptions, "yAxis" === this.coll && f.defaultYAxisOptions, [f.defaultTopAxisOptions, f.defaultRightAxisOptions, f.defaultBottomAxisOptions, f.defaultLeftAxisOptions][this.side], l(r[this.coll], b));
                A(this, "afterSetOptions", {
                    userOptions: b
                })
            }
            ;
            k.prototype.defaultLabelFormatter = function(b) {
                var e = this.axis;
                b = this.chart.numberFormatter;
                var a = n(this.value) ? this.value : NaN
                  , h = e.chart.time
                  , l = this.dateTimeLabelFormat
                  , k = r.lang
                  , p = k.numericSymbols;
                k = k.numericSymbolMagnitude || 1E3;
                var d = e.logarithmic ? Math.abs(a) : e.tickInterval
                  , v = p && p.length;
                if (e.categories)
                    var L = "".concat(this.value);
                else if (l)
                    L = h.dateFormat(l, a);
                else if (v && 1E3 <= d)
                    for (; v-- && "undefined" === typeof L; )
                        e = Math.pow(k, v + 1),
                        d >= e && 0 === 10 * a % e && null !== p[v] && 0 !== a && (L = b(a / e, -1) + p[v]);
                "undefined" === typeof L && (L = 1E4 <= Math.abs(a) ? b(a, -1) : b(a, -1, void 0, ""));
                return L
            }
            ;
            k.prototype.getSeriesExtremes = function() {
                var e = this, a = e.chart, h;
                A(this, "getSeriesExtremes", null, function() {
                    e.hasVisibleSeries = !1;
                    e.dataMin = e.dataMax = e.threshold = null;
                    e.softThreshold = !e.isXAxis;
                    e.stacking && e.stacking.buildStacks();
                    e.series.forEach(function(l) {
                        if (l.visible || !a.options.chart.ignoreHiddenSeries) {
                            var k = l.options
                              , p = k.threshold;
                            e.hasVisibleSeries = !0;
                            e.positiveValuesOnly && 0 >= p && (p = null);
                            if (e.isXAxis) {
                                if (k = l.xData,
                                k.length) {
                                    k = e.logarithmic ? k.filter(e.validatePositiveValue) : k;
                                    h = l.getXExtremes(k);
                                    var d = h.min;
                                    var v = h.max;
                                    n(d) || d instanceof Date || (k = k.filter(n),
                                    h = l.getXExtremes(k),
                                    d = h.min,
                                    v = h.max);
                                    k.length && (e.dataMin = Math.min(b(e.dataMin, d), d),
                                    e.dataMax = Math.max(b(e.dataMax, v), v))
                                }
                            } else if (l = l.applyExtremes(),
                            n(l.dataMin) && (d = l.dataMin,
                            e.dataMin = Math.min(b(e.dataMin, d), d)),
                            n(l.dataMax) && (v = l.dataMax,
                            e.dataMax = Math.max(b(e.dataMax, v), v)),
                            J(p) && (e.threshold = p),
                            !k.softThreshold || e.positiveValuesOnly)
                                e.softThreshold = !1
                        }
                    })
                });
                A(this, "afterGetSeriesExtremes")
            }
            ;
            k.prototype.translate = function(b, e, a, h, l, k) {
                var p = this.linkedParent || this
                  , d = h && p.old ? p.old.min : p.min;
                if (!n(d))
                    return NaN;
                var v = p.minPixelPadding;
                l = (p.isOrdinal || p.brokenAxis && p.brokenAxis.hasBreaks || p.logarithmic && l) && p.lin2val;
                var g = 1
                  , L = 0;
                h = h && p.old ? p.old.transA : p.transA;
                h || (h = p.transA);
                a && (g *= -1,
                L = p.len);
                p.reversed && (g *= -1,
                L -= g * (p.sector || p.len));
                e ? (k = (b * g + L - v) / h + d,
                l && (k = p.lin2val(k))) : (l && (b = p.val2lin(b)),
                b = g * (b - d) * h,
                k = (p.isRadial ? b : x(b)) + L + g * v + (n(k) ? h * k : 0));
                return k
            }
            ;
            k.prototype.toPixels = function(b, e) {
                return this.translate(b, !1, !this.horiz, void 0, !0) + (e ? 0 : this.pos)
            }
            ;
            k.prototype.toValue = function(b, e) {
                return this.translate(b - (e ? 0 : this.pos), !0, !this.horiz, void 0, !0)
            }
            ;
            k.prototype.getPlotLinePath = function(e) {
                function a(b, e, a) {
                    if ("pass" !== G && b < e || b > a)
                        G ? b = q(b, e, a) : t = !0;
                    return b
                }
                var h = this, k = h.chart, l = h.left, p = h.top, d = e.old, v = e.value, g = e.lineWidth, L = d && k.oldChartHeight || k.chartHeight, c = d && k.oldChartWidth || k.chartWidth, u = h.transB, m = e.translatedValue, G = e.force, y, x, r, f, t;
                e = {
                    value: v,
                    lineWidth: g,
                    old: d,
                    force: G,
                    acrossPanes: e.acrossPanes,
                    translatedValue: m
                };
                A(this, "getPlotLinePath", e, function(e) {
                    m = b(m, h.translate(v, void 0, void 0, d));
                    m = q(m, -1E5, 1E5);
                    y = r = Math.round(m + u);
                    x = f = Math.round(L - m - u);
                    n(m) ? h.horiz ? (x = p,
                    f = L - h.bottom,
                    y = r = a(y, l, l + h.width)) : (y = l,
                    r = c - h.right,
                    x = f = a(x, p, p + h.height)) : (t = !0,
                    G = !1);
                    e.path = t && !G ? null : k.renderer.crispLine([["M", y, x], ["L", r, f]], g || 1)
                });
                return e.path
            }
            ;
            k.prototype.getLinearTickPositions = function(b, e, a) {
                var h = x(Math.floor(e / b) * b);
                a = x(Math.ceil(a / b) * b);
                var k = [], l;
                x(h + b) === h && (l = 20);
                if (this.single)
                    return [e];
                for (e = h; e <= a; ) {
                    k.push(e);
                    e = x(e + b, l);
                    if (e === p)
                        break;
                    var p = e
                }
                return k
            }
            ;
            k.prototype.getMinorTickInterval = function() {
                var e = this.options;
                return !0 === e.minorTicks ? b(e.minorTickInterval, "auto") : !1 === e.minorTicks ? null : e.minorTickInterval
            }
            ;
            k.prototype.getMinorTickPositions = function() {
                var b = this.options
                  , e = this.tickPositions
                  , a = this.minorTickInterval
                  , h = this.pointRangePadding || 0
                  , k = this.min - h;
                h = this.max + h;
                var l = h - k
                  , p = [];
                if (l && l / a < this.len / 3) {
                    var n = this.logarithmic;
                    if (n)
                        this.paddedTicks.forEach(function(b, e, h) {
                            e && p.push.apply(p, n.getLogTickPositions(a, h[e - 1], h[e], !0))
                        });
                    else if (this.dateTime && "auto" === this.getMinorTickInterval())
                        p = p.concat(this.getTimeTicks(this.dateTime.normalizeTimeTickInterval(a), k, h, b.startOfWeek));
                    else
                        for (b = k + (e[0] - k) % a; b <= h && b !== p[0]; b += a)
                            p.push(b)
                }
                0 !== p.length && this.trimTicks(p);
                return p
            }
            ;
            k.prototype.adjustForMinRange = function() {
                var e = this.options, a = this.logarithmic, h = this.min, k = this.max, l = 0, p, n, d, v;
                this.isXAxis && "undefined" === typeof this.minRange && !a && (J(e.min) || J(e.max) || J(e.floor) || J(e.ceiling) ? this.minRange = null : (this.series.forEach(function(b) {
                    d = b.xData;
                    v = b.xIncrement ? 1 : d.length - 1;
                    if (1 < d.length)
                        for (p = v; 0 < p; p--)
                            if (n = d[p] - d[p - 1],
                            !l || n < l)
                                l = n
                }),
                this.minRange = Math.min(5 * l, this.dataMax - this.dataMin)));
                if (k - h < this.minRange) {
                    var u = this.dataMax - this.dataMin >= this.minRange;
                    var c = this.minRange;
                    var G = (c - k + h) / 2;
                    G = [h - G, b(e.min, h - G)];
                    u && (G[2] = this.logarithmic ? this.logarithmic.log2lin(this.dataMin) : this.dataMin);
                    h = g(G);
                    k = [h + c, b(e.max, h + c)];
                    u && (k[2] = a ? a.log2lin(this.dataMax) : this.dataMax);
                    k = m(k);
                    k - h < c && (G[0] = k - c,
                    G[1] = b(e.min, k - c),
                    h = g(G))
                }
                this.min = h;
                this.max = k
            }
            ;
            k.prototype.getClosest = function() {
                var b;
                this.categories ? b = 1 : this.series.forEach(function(e) {
                    var a = e.closestPointRange
                      , h = e.visible || !e.chart.options.chart.ignoreHiddenSeries;
                    !e.noSharedTooltip && J(a) && h && (b = J(b) ? Math.min(b, a) : a)
                });
                return b
            }
            ;
            k.prototype.nameToX = function(e) {
                var a = y(this.options.categories)
                  , h = a ? this.categories : this.names
                  , k = e.options.x;
                e.series.requireSorting = !1;
                J(k) || (k = this.options.uniqueNames && h ? a ? h.indexOf(e.name) : b(h.keys[e.name], -1) : e.series.autoIncrement());
                if (-1 === k) {
                    if (!a && h)
                        var l = h.length
                } else
                    l = k;
                "undefined" !== typeof l ? (this.names[l] = e.name,
                this.names.keys[e.name] = l) : e.x && (l = e.x);
                return l
            }
            ;
            k.prototype.updateNames = function() {
                var b = this
                  , e = this.names;
                0 < e.length && (Object.keys(e.keys).forEach(function(b) {
                    delete e.keys[b]
                }),
                e.length = 0,
                this.minRange = this.userMinRange,
                (this.series || []).forEach(function(e) {
                    e.xIncrement = null;
                    if (!e.points || e.isDirtyData)
                        b.max = Math.max(b.max, e.xData.length - 1),
                        e.processData(),
                        e.generatePoints();
                    e.data.forEach(function(a, h) {
                        if (a && a.options && "undefined" !== typeof a.name) {
                            var k = b.nameToX(a);
                            "undefined" !== typeof k && k !== a.x && (a.x = k,
                            e.xData[h] = k)
                        }
                    })
                }))
            }
            ;
            k.prototype.setAxisTranslation = function() {
                var e = this
                  , a = e.max - e.min
                  , h = e.linkedParent
                  , k = !!e.categories
                  , l = e.isXAxis
                  , p = e.axisPointRange || 0
                  , n = 0
                  , d = 0
                  , v = e.transA;
                if (l || k || p) {
                    var g = e.getClosest();
                    h ? (n = h.minPointOffset,
                    d = h.pointRangePadding) : e.series.forEach(function(a) {
                        var h = k ? 1 : l ? b(a.options.pointRange, g, 0) : e.axisPointRange || 0
                          , v = a.options.pointPlacement;
                        p = Math.max(p, h);
                        if (!e.single || k)
                            a = a.is("xrange") ? !l : l,
                            n = Math.max(n, a && u(v) ? 0 : h / 2),
                            d = Math.max(d, a && "on" === v ? 0 : h)
                    });
                    h = e.ordinal && e.ordinal.slope && g ? e.ordinal.slope / g : 1;
                    e.minPointOffset = n *= h;
                    e.pointRangePadding = d *= h;
                    e.pointRange = Math.min(p, e.single && k ? 1 : a);
                    l && (e.closestPointRange = g)
                }
                e.translationSlope = e.transA = v = e.staticScale || e.len / (a + d || 1);
                e.transB = e.horiz ? e.left : e.bottom;
                e.minPixelPadding = v * n;
                A(this, "afterSetAxisTranslation")
            }
            ;
            k.prototype.minFromRange = function() {
                return this.max - this.range
            }
            ;
            k.prototype.setTickInterval = function(e) {
                var a = this.chart
                  , h = this.logarithmic
                  , k = this.options
                  , l = this.isXAxis
                  , p = this.isLinked
                  , d = k.tickPixelInterval
                  , v = this.categories
                  , g = this.softThreshold
                  , c = k.maxPadding
                  , u = k.minPadding
                  , m = n(k.tickInterval) && 0 <= k.tickInterval ? k.tickInterval : void 0
                  , G = n(this.threshold) ? this.threshold : null;
                this.dateTime || v || p || this.getTickAmount();
                var L = b(this.userMin, k.min);
                var y = b(this.userMax, k.max);
                if (p) {
                    this.linkedParent = a[this.coll][k.linkedTo];
                    var q = this.linkedParent.getExtremes();
                    this.min = b(q.min, q.dataMin);
                    this.max = b(q.max, q.dataMax);
                    k.type !== this.linkedParent.options.type && K(11, 1, a)
                } else {
                    if (g && J(G))
                        if (this.dataMin >= G)
                            q = G,
                            u = 0;
                        else if (this.dataMax <= G) {
                            var r = G;
                            c = 0
                        }
                    this.min = b(L, q, this.dataMin);
                    this.max = b(y, r, this.dataMax)
                }
                h && (this.positiveValuesOnly && !e && 0 >= Math.min(this.min, b(this.dataMin, this.min)) && K(10, 1, a),
                this.min = x(h.log2lin(this.min), 16),
                this.max = x(h.log2lin(this.max), 16));
                this.range && J(this.max) && (this.userMin = this.min = L = Math.max(this.dataMin, this.minFromRange()),
                this.userMax = y = this.max,
                this.range = null);
                A(this, "foundExtremes");
                this.beforePadding && this.beforePadding();
                this.adjustForMinRange();
                !(v || this.axisPointRange || this.stacking && this.stacking.usePercentage || p) && J(this.min) && J(this.max) && (a = this.max - this.min) && (!J(L) && u && (this.min -= a * u),
                !J(y) && c && (this.max += a * c));
                n(this.userMin) || (n(k.softMin) && k.softMin < this.min && (this.min = L = k.softMin),
                n(k.floor) && (this.min = Math.max(this.min, k.floor)));
                n(this.userMax) || (n(k.softMax) && k.softMax > this.max && (this.max = y = k.softMax),
                n(k.ceiling) && (this.max = Math.min(this.max, k.ceiling)));
                g && J(this.dataMin) && (G = G || 0,
                !J(L) && this.min < G && this.dataMin >= G ? this.min = this.options.minRange ? Math.min(G, this.max - this.minRange) : G : !J(y) && this.max > G && this.dataMax <= G && (this.max = this.options.minRange ? Math.max(G, this.min + this.minRange) : G));
                n(this.min) && n(this.max) && !this.chart.polar && this.min > this.max && (J(this.options.min) ? this.max = this.min : J(this.options.max) && (this.min = this.max));
                this.tickInterval = this.min === this.max || "undefined" === typeof this.min || "undefined" === typeof this.max ? 1 : p && this.linkedParent && !m && d === this.linkedParent.options.tickPixelInterval ? m = this.linkedParent.tickInterval : b(m, this.tickAmount ? (this.max - this.min) / Math.max(this.tickAmount - 1, 1) : void 0, v ? 1 : (this.max - this.min) * d / Math.max(this.len, d));
                if (l && !e) {
                    var f = this.min !== (this.old && this.old.min) || this.max !== (this.old && this.old.max);
                    this.series.forEach(function(b) {
                        b.forceCrop = b.forceCropping && b.forceCropping();
                        b.processData(f)
                    });
                    A(this, "postProcessData", {
                        hasExtemesChanged: f
                    })
                }
                this.setAxisTranslation();
                A(this, "initialAxisTranslation");
                this.pointRange && !m && (this.tickInterval = Math.max(this.pointRange, this.tickInterval));
                e = b(k.minTickInterval, this.dateTime && !this.series.some(function(b) {
                    return b.noSharedTooltip
                }) ? this.closestPointRange : 0);
                !m && this.tickInterval < e && (this.tickInterval = e);
                this.dateTime || this.logarithmic || m || (this.tickInterval = Q(this, this.tickInterval));
                this.tickAmount || (this.tickInterval = this.unsquish());
                this.setTickPositions()
            }
            ;
            k.prototype.setTickPositions = function() {
                var b = this.options
                  , e = b.tickPositions
                  , a = this.getMinorTickInterval()
                  , h = this.hasVerticalPanning()
                  , k = "colorAxis" === this.coll
                  , l = (k || !h) && b.startOnTick;
                h = (k || !h) && b.endOnTick;
                k = b.tickPositioner;
                this.tickmarkOffset = this.categories && "between" === b.tickmarkPlacement && 1 === this.tickInterval ? .5 : 0;
                this.minorTickInterval = "auto" === a && this.tickInterval ? this.tickInterval / 5 : a;
                this.single = this.min === this.max && J(this.min) && !this.tickAmount && (parseInt(this.min, 10) === this.min || !1 !== b.allowDecimals);
                this.tickPositions = a = e && e.slice();
                if (!a) {
                    if (this.ordinal && this.ordinal.positions || !((this.max - this.min) / this.tickInterval > Math.max(2 * this.len, 200)))
                        if (this.dateTime)
                            a = this.getTimeTicks(this.dateTime.normalizeTimeTickInterval(this.tickInterval, b.units), this.min, this.max, b.startOfWeek, this.ordinal && this.ordinal.positions, this.closestPointRange, !0);
                        else if (this.logarithmic)
                            a = this.logarithmic.getLogTickPositions(this.tickInterval, this.min, this.max);
                        else
                            for (var p = b = this.tickInterval; p <= 2 * b; )
                                if (a = this.getLinearTickPositions(this.tickInterval, this.min, this.max),
                                this.tickAmount && a.length > this.tickAmount)
                                    this.tickInterval = Q(this, p *= 1.1);
                                else
                                    break;
                    else
                        a = [this.min, this.max],
                        K(19, !1, this.chart);
                    a.length > this.len && (a = [a[0], a.pop()],
                    a[0] === a[1] && (a.length = 1));
                    this.tickPositions = a;
                    k && (k = k.apply(this, [this.min, this.max])) && (this.tickPositions = a = k)
                }
                this.paddedTicks = a.slice(0);
                this.trimTicks(a, l, h);
                this.isLinked || (this.single && 2 > a.length && !this.categories && !this.series.some(function(b) {
                    return b.is("heatmap") && "between" === b.options.pointPlacement
                }) && (this.min -= .5,
                this.max += .5),
                e || k || this.adjustTickAmount());
                A(this, "afterSetTickPositions")
            }
            ;
            k.prototype.trimTicks = function(b, e, a) {
                var h = b[0]
                  , k = b[b.length - 1]
                  , l = !this.isOrdinal && this.minPointOffset || 0;
                A(this, "trimTicks");
                if (!this.isLinked) {
                    if (e && -Infinity !== h)
                        this.min = h;
                    else
                        for (; this.min - l > b[0]; )
                            b.shift();
                    if (a)
                        this.max = k;
                    else
                        for (; this.max + l < b[b.length - 1]; )
                            b.pop();
                    0 === b.length && J(h) && !this.options.tickPositions && b.push((k + h) / 2)
                }
            }
            ;
            k.prototype.alignToOthers = function() {
                var b = this, e = [this], a = b.options, h = "yAxis" === this.coll && this.chart.options.chart.alignThresholds, k = [], l;
                b.thresholdAlignment = void 0;
                if ((!1 !== this.chart.options.chart.alignTicks && a.alignTicks || h) && !1 !== a.startOnTick && !1 !== a.endOnTick && !b.logarithmic) {
                    var p = function(b) {
                        var e = b.options;
                        return [b.horiz ? e.left : e.top, e.width, e.height, e.pane].join()
                    }
                      , d = p(this);
                    this.chart[this.coll].forEach(function(a) {
                        var h = a.series;
                        h.length && h.some(function(b) {
                            return b.visible
                        }) && a !== b && p(a) === d && (l = !0,
                        e.push(a))
                    })
                }
                if (l && h) {
                    e.forEach(function(e) {
                        e = e.getThresholdAlignment(b);
                        n(e) && k.push(e)
                    });
                    var v = 1 < k.length ? k.reduce(function(b, e) {
                        return b + e
                    }, 0) / k.length : void 0;
                    e.forEach(function(b) {
                        b.thresholdAlignment = v
                    })
                }
                return l
            }
            ;
            k.prototype.getThresholdAlignment = function(b) {
                (!n(this.dataMin) || this !== b && this.series.some(function(b) {
                    return b.isDirty || b.isDirtyData
                })) && this.getSeriesExtremes();
                if (n(this.threshold))
                    return b = q((this.threshold - (this.dataMin || 0)) / ((this.dataMax || 0) - (this.dataMin || 0)), 0, 1),
                    this.options.reversed && (b = 1 - b),
                    b
            }
            ;
            k.prototype.getTickAmount = function() {
                var b = this.options
                  , e = b.tickPixelInterval
                  , a = b.tickAmount;
                !J(b.tickInterval) && !a && this.len < e && !this.isRadial && !this.logarithmic && b.startOnTick && b.endOnTick && (a = 2);
                !a && this.alignToOthers() && (a = Math.ceil(this.len / e) + 1);
                4 > a && (this.finalTickAmt = a,
                a = 5);
                this.tickAmount = a
            }
            ;
            k.prototype.adjustTickAmount = function() {
                var e = this
                  , a = e.finalTickAmt
                  , h = e.max
                  , k = e.min
                  , l = e.options
                  , p = e.tickPositions
                  , d = e.tickAmount
                  , v = e.thresholdAlignment
                  , g = p && p.length
                  , c = b(e.threshold, e.softThreshold ? 0 : null);
                var u = e.tickInterval;
                if (n(v)) {
                    var m = .5 > v ? Math.ceil(v * (d - 1)) : Math.floor(v * (d - 1));
                    l.reversed && (m = d - 1 - m)
                }
                if (e.hasData() && n(k) && n(h)) {
                    v = function() {
                        e.transA *= (g - 1) / (d - 1);
                        e.min = l.startOnTick ? p[0] : Math.min(k, p[0]);
                        e.max = l.endOnTick ? p[p.length - 1] : Math.max(h, p[p.length - 1])
                    }
                    ;
                    if (n(m) && n(e.threshold)) {
                        for (; p[m] !== c || p.length !== d || p[0] > k || p[p.length - 1] < h; ) {
                            p.length = 0;
                            for (p.push(e.threshold); p.length < d; )
                                void 0 === p[m] || p[m] > e.threshold ? p.unshift(x(p[0] - u)) : p.push(x(p[p.length - 1] + u));
                            if (u > 8 * e.tickInterval)
                                break;
                            u *= 2
                        }
                        v()
                    } else if (g < d) {
                        for (; p.length < d; )
                            p.length % 2 || k === c ? p.push(x(p[p.length - 1] + u)) : p.unshift(x(p[0] - u));
                        v()
                    }
                    if (J(a)) {
                        for (u = c = p.length; u--; )
                            (3 === a && 1 === u % 2 || 2 >= a && 0 < u && u < c - 1) && p.splice(u, 1);
                        e.finalTickAmt = void 0
                    }
                }
            }
            ;
            k.prototype.setScale = function() {
                var b = !1
                  , e = !1;
                this.series.forEach(function(a) {
                    b = b || a.isDirtyData || a.isDirty;
                    e = e || a.xAxis && a.xAxis.isDirty || !1
                });
                this.setAxisSize();
                var a = this.len !== (this.old && this.old.len);
                a || b || e || this.isLinked || this.forceRedraw || this.userMin !== (this.old && this.old.userMin) || this.userMax !== (this.old && this.old.userMax) || this.alignToOthers() ? (this.stacking && this.stacking.resetStacks(),
                this.forceRedraw = !1,
                this.getSeriesExtremes(),
                this.setTickInterval(),
                this.isDirty || (this.isDirty = a || this.min !== (this.old && this.old.min) || this.max !== (this.old && this.old.max))) : this.stacking && this.stacking.cleanStacks();
                b && this.panningState && (this.panningState.isDirty = !0);
                A(this, "afterSetScale")
            }
            ;
            k.prototype.setExtremes = function(e, a, h, k, l) {
                var p = this
                  , d = p.chart;
                h = b(h, !0);
                p.series.forEach(function(b) {
                    delete b.kdTree
                });
                l = C(l, {
                    min: e,
                    max: a
                });
                A(p, "setExtremes", l, function() {
                    p.userMin = e;
                    p.userMax = a;
                    p.eventArgs = l;
                    h && d.redraw(k)
                })
            }
            ;
            k.prototype.zoom = function(e, a) {
                var h = this
                  , k = this.dataMin
                  , l = this.dataMax
                  , p = this.options
                  , d = Math.min(k, b(p.min, k))
                  , n = Math.max(l, b(p.max, l));
                e = {
                    newMin: e,
                    newMax: a
                };
                A(this, "zoom", e, function(b) {
                    var e = b.newMin
                      , a = b.newMax;
                    if (e !== h.min || a !== h.max)
                        h.allowZoomOutside || (J(k) && (e < d && (e = d),
                        e > n && (e = n)),
                        J(l) && (a < d && (a = d),
                        a > n && (a = n))),
                        h.displayBtn = "undefined" !== typeof e || "undefined" !== typeof a,
                        h.setExtremes(e, a, !1, void 0, {
                            trigger: "zoom"
                        });
                    b.zoomed = !0
                });
                return e.zoomed
            }
            ;
            k.prototype.setAxisSize = function() {
                var e = this.chart
                  , a = this.options
                  , k = a.offsets || [0, 0, 0, 0]
                  , l = this.horiz
                  , p = this.width = Math.round(h(b(a.width, e.plotWidth - k[3] + k[1]), e.plotWidth))
                  , d = this.height = Math.round(h(b(a.height, e.plotHeight - k[0] + k[2]), e.plotHeight))
                  , n = this.top = Math.round(h(b(a.top, e.plotTop + k[0]), e.plotHeight, e.plotTop));
                a = this.left = Math.round(h(b(a.left, e.plotLeft + k[3]), e.plotWidth, e.plotLeft));
                this.bottom = e.chartHeight - d - n;
                this.right = e.chartWidth - p - a;
                this.len = Math.max(l ? p : d, 0);
                this.pos = l ? a : n
            }
            ;
            k.prototype.getExtremes = function() {
                var b = this.logarithmic;
                return {
                    min: b ? x(b.lin2log(this.min)) : this.min,
                    max: b ? x(b.lin2log(this.max)) : this.max,
                    dataMin: this.dataMin,
                    dataMax: this.dataMax,
                    userMin: this.userMin,
                    userMax: this.userMax
                }
            }
            ;
            k.prototype.getThreshold = function(b) {
                var e = this.logarithmic
                  , a = e ? e.lin2log(this.min) : this.min;
                e = e ? e.lin2log(this.max) : this.max;
                null === b || -Infinity === b ? b = a : Infinity === b ? b = e : a > b ? b = a : e < b && (b = e);
                return this.translate(b, 0, 1, 0, 1)
            }
            ;
            k.prototype.autoLabelAlign = function(e) {
                var a = (b(e, 0) - 90 * this.side + 720) % 360;
                e = {
                    align: "center"
                };
                A(this, "autoLabelAlign", e, function(b) {
                    15 < a && 165 > a ? b.align = "right" : 195 < a && 345 > a && (b.align = "left")
                });
                return e.align
            }
            ;
            k.prototype.tickSize = function(e) {
                var a = this.options
                  , h = b(a["tick" === e ? "tickWidth" : "minorTickWidth"], "tick" === e && this.isXAxis && !this.categories ? 1 : 0)
                  , k = a["tick" === e ? "tickLength" : "minorTickLength"];
                if (h && k) {
                    "inside" === a[e + "Position"] && (k = -k);
                    var l = [k, h]
                }
                e = {
                    tickSize: l
                };
                A(this, "afterTickSize", e);
                return e.tickSize
            }
            ;
            k.prototype.labelMetrics = function() {
                var b = this.tickPositions && this.tickPositions[0] || 0;
                return this.chart.renderer.fontMetrics(this.options.labels.style.fontSize, this.ticks[b] && this.ticks[b].label)
            }
            ;
            k.prototype.unsquish = function() {
                var e = this.options.labels, a = this.horiz, h = this.tickInterval, k = this.len / (((this.categories ? 1 : 0) + this.max - this.min) / h), l = e.rotation, p = this.labelMetrics(), v = Math.max(this.max - this.min, 0), g = function(b) {
                    var e = b / (k || 1);
                    e = 1 < e ? Math.ceil(e) : 1;
                    e * h > v && Infinity !== b && Infinity !== k && v && (e = Math.ceil(v / h));
                    return x(e * h)
                }, u = h, c, m, G = Number.MAX_VALUE;
                if (a) {
                    if (!e.staggerLines && !e.step)
                        if (n(l))
                            var y = [l];
                        else
                            k < e.autoRotationLimit && (y = e.autoRotation);
                    y && y.forEach(function(b) {
                        if (b === l || b && -90 <= b && 90 >= b) {
                            m = g(Math.abs(p.h / Math.sin(d * b)));
                            var e = m + Math.abs(b / 360);
                            e < G && (G = e,
                            c = b,
                            u = m)
                        }
                    })
                } else
                    e.step || (u = g(p.h));
                this.autoRotation = y;
                this.labelRotation = b(c, n(l) ? l : 0);
                return u
            }
            ;
            k.prototype.getSlotWidth = function(b) {
                var e = this.chart
                  , a = this.horiz
                  , h = this.options.labels
                  , k = Math.max(this.tickPositions.length - (this.categories ? 0 : 1), 1)
                  , l = e.margin[3];
                if (b && n(b.slotWidth))
                    return b.slotWidth;
                if (a && 2 > h.step)
                    return h.rotation ? 0 : (this.staggerLines || 1) * this.len / k;
                if (!a) {
                    b = h.style.width;
                    if (void 0 !== b)
                        return parseInt(String(b), 10);
                    if (l)
                        return l - e.spacing[3]
                }
                return .33 * e.chartWidth
            }
            ;
            k.prototype.renderUnsquish = function() {
                var b = this.chart
                  , e = b.renderer
                  , a = this.tickPositions
                  , h = this.ticks
                  , k = this.options.labels
                  , l = k.style
                  , p = this.horiz
                  , d = this.getSlotWidth()
                  , n = Math.max(1, Math.round(d - 2 * k.padding))
                  , v = {}
                  , g = this.labelMetrics()
                  , c = l.textOverflow
                  , m = 0;
                u(k.rotation) || (v.rotation = k.rotation || 0);
                a.forEach(function(b) {
                    b = h[b];
                    b.movedLabel && b.replaceMovedLabel();
                    b && b.label && b.label.textPxLength > m && (m = b.label.textPxLength)
                });
                this.maxLabelLength = m;
                if (this.autoRotation)
                    m > n && m > g.h ? v.rotation = this.labelRotation : this.labelRotation = 0;
                else if (d) {
                    var G = n;
                    if (!c) {
                        var y = "clip";
                        for (n = a.length; !p && n--; ) {
                            var q = a[n];
                            if (q = h[q].label)
                                q.styles && "ellipsis" === q.styles.textOverflow ? q.css({
                                    textOverflow: "clip"
                                }) : q.textPxLength > d && q.css({
                                    width: d + "px"
                                }),
                                q.getBBox().height > this.len / a.length - (g.h - g.f) && (q.specificTextOverflow = "ellipsis")
                        }
                    }
                }
                v.rotation && (G = m > .5 * b.chartHeight ? .33 * b.chartHeight : m,
                c || (y = "ellipsis"));
                if (this.labelAlign = k.align || this.autoLabelAlign(this.labelRotation))
                    v.align = this.labelAlign;
                a.forEach(function(b) {
                    var e = (b = h[b]) && b.label
                      , a = l.width
                      , k = {};
                    e && (e.attr(v),
                    b.shortenLabel ? b.shortenLabel() : G && !a && "nowrap" !== l.whiteSpace && (G < e.textPxLength || "SPAN" === e.element.tagName) ? (k.width = G + "px",
                    c || (k.textOverflow = e.specificTextOverflow || y),
                    e.css(k)) : e.styles && e.styles.width && !k.width && !a && e.css({
                        width: null
                    }),
                    delete e.specificTextOverflow,
                    b.rotation = v.rotation)
                }, this);
                this.tickRotCorr = e.rotCorr(g.b, this.labelRotation || 0, 0 !== this.side)
            }
            ;
            k.prototype.hasData = function() {
                return this.series.some(function(b) {
                    return b.hasData()
                }) || this.options.showEmpty && J(this.min) && J(this.max)
            }
            ;
            k.prototype.addTitle = function(b) {
                var e = this.chart.renderer, a = this.horiz, h = this.opposite, k = this.options.title, p = this.chart.styledMode, d;
                this.axisTitle || ((d = k.textAlign) || (d = (a ? {
                    low: "left",
                    middle: "center",
                    high: "right"
                } : {
                    low: h ? "right" : "left",
                    middle: "center",
                    high: h ? "left" : "right"
                })[k.align]),
                this.axisTitle = e.text(k.text || "", 0, 0, k.useHTML).attr({
                    zIndex: 7,
                    rotation: k.rotation,
                    align: d
                }).addClass("highcharts-axis-title"),
                p || this.axisTitle.css(l(k.style)),
                this.axisTitle.add(this.axisGroup),
                this.axisTitle.isNew = !0);
                p || k.style.width || this.isRadial || this.axisTitle.css({
                    width: this.len + "px"
                });
                this.axisTitle[b ? "show" : "hide"](b)
            }
            ;
            k.prototype.generateTick = function(b) {
                var e = this.ticks;
                e[b] ? e[b].addLabel() : e[b] = new H(this,b)
            }
            ;
            k.prototype.getOffset = function() {
                var a = this
                  , h = this
                  , k = h.chart
                  , l = h.horiz
                  , p = h.options
                  , d = h.side
                  , n = h.ticks
                  , v = h.tickPositions
                  , g = h.coll
                  , u = h.axisParent
                  , c = k.renderer
                  , m = k.inverted && !h.isZAxis ? [1, 0, 3, 2][d] : d
                  , G = h.hasData()
                  , y = p.title
                  , q = p.labels
                  , x = k.axisOffset;
                k = k.clipOffset;
                var r = [-1, 1, 1, -1][d], f = p.className, t, Q = 0, C = 0, I = 0;
                h.showAxis = t = G || p.showEmpty;
                h.staggerLines = h.horiz && q.staggerLines || void 0;
                if (!h.axisGroup) {
                    var S = function(b, e, h) {
                        return c.g(b).attr({
                            zIndex: h
                        }).addClass("highcharts-".concat(g.toLowerCase()).concat(e, " ") + (a.isRadial ? "highcharts-radial-axis".concat(e, " ") : "") + (f || "")).add(u)
                    };
                    h.gridGroup = S("grid", "-grid", p.gridZIndex);
                    h.axisGroup = S("axis", "", p.zIndex);
                    h.labelGroup = S("axis-labels", "-labels", q.zIndex)
                }
                G || h.isLinked ? (v.forEach(function(b) {
                    h.generateTick(b)
                }),
                h.renderUnsquish(),
                h.reserveSpaceDefault = 0 === d || 2 === d || {
                    1: "left",
                    3: "right"
                }[d] === h.labelAlign,
                b(q.reserveSpace, "center" === h.labelAlign ? !0 : null, h.reserveSpaceDefault) && v.forEach(function(b) {
                    I = Math.max(n[b].getLabelSize(), I)
                }),
                h.staggerLines && (I *= h.staggerLines),
                h.labelOffset = I * (h.opposite ? -1 : 1)) : e(n, function(b, e) {
                    b.destroy();
                    delete n[e]
                });
                if (y && y.text && !1 !== y.enabled && (h.addTitle(t),
                t && !1 !== y.reserveSpace)) {
                    h.titleOffset = Q = h.axisTitle.getBBox()[l ? "height" : "width"];
                    var K = y.offset;
                    C = J(K) ? 0 : b(y.margin, l ? 5 : 10)
                }
                h.renderLine();
                h.offset = r * b(p.offset, x[d] ? x[d] + (p.margin || 0) : 0);
                h.tickRotCorr = h.tickRotCorr || {
                    x: 0,
                    y: 0
                };
                y = 0 === d ? -h.labelMetrics().h : 2 === d ? h.tickRotCorr.y : 0;
                G = Math.abs(I) + C;
                I && (G = G - y + r * (l ? b(q.y, h.tickRotCorr.y + 8 * r) : q.x));
                h.axisTitleMargin = b(K, G);
                h.getMaxLabelDimensions && (h.maxLabelDimensions = h.getMaxLabelDimensions(n, v));
                "colorAxis" !== g && (l = this.tickSize("tick"),
                x[d] = Math.max(x[d], (h.axisTitleMargin || 0) + Q + r * h.offset, G, v && v.length && l ? l[0] + r * h.offset : 0),
                p = !h.axisLine || p.offset ? 0 : 2 * Math.floor(h.axisLine.strokeWidth() / 2),
                k[m] = Math.max(k[m], p));
                A(this, "afterGetOffset")
            }
            ;
            k.prototype.getLinePath = function(b) {
                var e = this.chart
                  , a = this.opposite
                  , h = this.offset
                  , k = this.horiz
                  , l = this.left + (a ? this.width : 0) + h;
                h = e.chartHeight - this.bottom - (a ? this.height : 0) + h;
                a && (b *= -1);
                return e.renderer.crispLine([["M", k ? this.left : l, k ? h : this.top], ["L", k ? e.chartWidth - this.right : l, k ? h : e.chartHeight - this.bottom]], b)
            }
            ;
            k.prototype.renderLine = function() {
                this.axisLine || (this.axisLine = this.chart.renderer.path().addClass("highcharts-axis-line").add(this.axisGroup),
                this.chart.styledMode || this.axisLine.attr({
                    stroke: this.options.lineColor,
                    "stroke-width": this.options.lineWidth,
                    zIndex: 7
                }))
            }
            ;
            k.prototype.getTitlePosition = function() {
                var b = this.horiz
                  , e = this.left
                  , a = this.top
                  , h = this.len
                  , k = this.options.title
                  , l = b ? e : a
                  , p = this.opposite
                  , d = this.offset
                  , n = k.x
                  , v = k.y
                  , g = this.axisTitle
                  , u = this.chart.renderer.fontMetrics(k.style.fontSize, g);
                g = g ? Math.max(g.getBBox(!1, 0).height - u.h - 1, 0) : 0;
                h = {
                    low: l + (b ? 0 : h),
                    middle: l + h / 2,
                    high: l + (b ? h : 0)
                }[k.align];
                e = (b ? a + this.height : e) + (b ? 1 : -1) * (p ? -1 : 1) * (this.axisTitleMargin || 0) + [-g, g, u.f, -g][this.side];
                b = {
                    x: b ? h + n : e + (p ? this.width : 0) + d + n,
                    y: b ? e + v - (p ? this.height : 0) + d : h + v
                };
                A(this, "afterGetTitlePosition", {
                    titlePosition: b
                });
                return b
            }
            ;
            k.prototype.renderMinorTick = function(b, e) {
                var a = this.minorTicks;
                a[b] || (a[b] = new H(this,b,"minor"));
                e && a[b].isNew && a[b].render(null, !0);
                a[b].render(null, !1, 1)
            }
            ;
            k.prototype.renderTick = function(b, e, a) {
                var h = this.ticks;
                if (!this.isLinked || b >= this.min && b <= this.max || this.grid && this.grid.isColumn)
                    h[b] || (h[b] = new H(this,b)),
                    a && h[b].isNew && h[b].render(e, !0, -1),
                    h[b].render(e)
            }
            ;
            k.prototype.render = function() {
                var b = this, a = b.chart, h = b.logarithmic, k = b.options, l = b.isLinked, p = b.tickPositions, d = b.axisTitle, v = b.ticks, g = b.minorTicks, u = b.alternateBands, c = k.stackLabels, m = k.alternateGridColor, y = b.tickmarkOffset, q = b.axisLine, x = b.showAxis, r = t(a.renderer.globalAnimation), f, Q;
                b.labelEdge.length = 0;
                b.overlap = !1;
                [v, g, u].forEach(function(b) {
                    e(b, function(b) {
                        b.isActive = !1
                    })
                });
                if (b.hasData() || l) {
                    var C = b.chart.hasRendered && b.old && n(b.old.min);
                    b.minorTickInterval && !b.categories && b.getMinorTickPositions().forEach(function(e) {
                        b.renderMinorTick(e, C)
                    });
                    p.length && (p.forEach(function(e, a) {
                        b.renderTick(e, a, C)
                    }),
                    y && (0 === b.min || b.single) && (v[-1] || (v[-1] = new H(b,-1,null,!0)),
                    v[-1].render(-1)));
                    m && p.forEach(function(e, k) {
                        Q = "undefined" !== typeof p[k + 1] ? p[k + 1] + y : b.max - y;
                        0 === k % 2 && e < b.max && Q <= b.max + (a.polar ? -y : y) && (u[e] || (u[e] = new E.PlotLineOrBand(b)),
                        f = e + y,
                        u[e].options = {
                            from: h ? h.lin2log(f) : f,
                            to: h ? h.lin2log(Q) : Q,
                            color: m,
                            className: "highcharts-alternate-grid"
                        },
                        u[e].render(),
                        u[e].isActive = !0)
                    });
                    b._addedPlotLB || (b._addedPlotLB = !0,
                    (k.plotLines || []).concat(k.plotBands || []).forEach(function(e) {
                        b.addPlotBandOrLine(e)
                    }))
                }
                [v, g, u].forEach(function(b) {
                    var h = []
                      , k = r.duration;
                    e(b, function(b, e) {
                        b.isActive || (b.render(e, !1, 0),
                        b.isActive = !1,
                        h.push(e))
                    });
                    G(function() {
                        for (var e = h.length; e--; )
                            b[h[e]] && !b[h[e]].isActive && (b[h[e]].destroy(),
                            delete b[h[e]])
                    }, b !== u && a.hasRendered && k ? k : 0)
                });
                q && (q[q.isPlaced ? "animate" : "attr"]({
                    d: this.getLinePath(q.strokeWidth())
                }),
                q.isPlaced = !0,
                q[x ? "show" : "hide"](x));
                d && x && (k = b.getTitlePosition(),
                d[d.isNew ? "attr" : "animate"](k),
                d.isNew = !1);
                c && c.enabled && b.stacking && b.stacking.renderStackTotals();
                b.old = {
                    len: b.len,
                    max: b.max,
                    min: b.min,
                    transA: b.transA,
                    userMax: b.userMax,
                    userMin: b.userMin
                };
                b.isDirty = !1;
                A(this, "afterRender")
            }
            ;
            k.prototype.redraw = function() {
                this.visible && (this.render(),
                this.plotLinesAndBands.forEach(function(b) {
                    b.render()
                }));
                this.series.forEach(function(b) {
                    b.isDirty = !0
                })
            }
            ;
            k.prototype.getKeepProps = function() {
                return this.keepProps || k.keepProps
            }
            ;
            k.prototype.destroy = function(b) {
                var a = this
                  , h = a.plotLinesAndBands
                  , k = this.eventOptions;
                A(this, "destroy", {
                    keepEvents: b
                });
                b || v(a);
                [a.ticks, a.minorTicks, a.alternateBands].forEach(function(b) {
                    I(b)
                });
                if (h)
                    for (b = h.length; b--; )
                        h[b].destroy();
                "axisLine axisTitle axisGroup gridGroup labelGroup cross scrollbar".split(" ").forEach(function(b) {
                    a[b] && (a[b] = a[b].destroy())
                });
                for (var l in a.plotLinesAndBandsGroups)
                    a.plotLinesAndBandsGroups[l] = a.plotLinesAndBandsGroups[l].destroy();
                e(a, function(b, e) {
                    -1 === a.getKeepProps().indexOf(e) && delete a[e]
                });
                this.eventOptions = k
            }
            ;
            k.prototype.drawCrosshair = function(e, a) {
                var h = this.crosshair, k = b(h && h.snap, !0), l = this.chart, p, d = this.cross;
                A(this, "drawCrosshair", {
                    e: e,
                    point: a
                });
                e || (e = this.cross && this.cross.e);
                if (h && !1 !== (J(a) || !k)) {
                    k ? J(a) && (p = b("colorAxis" !== this.coll ? a.crosshairPos : null, this.isXAxis ? a.plotX : this.len - a.plotY)) : p = e && (this.horiz ? e.chartX - this.pos : this.len - e.chartY + this.pos);
                    if (J(p)) {
                        var n = {
                            value: a && (this.isXAxis ? a.x : b(a.stackY, a.y)),
                            translatedValue: p
                        };
                        l.polar && C(n, {
                            isCrosshair: !0,
                            chartX: e && e.chartX,
                            chartY: e && e.chartY,
                            point: a
                        });
                        n = this.getPlotLinePath(n) || null
                    }
                    if (!J(n)) {
                        this.hideCrosshair();
                        return
                    }
                    k = this.categories && !this.isRadial;
                    d || (this.cross = d = l.renderer.path().addClass("highcharts-crosshair highcharts-crosshair-" + (k ? "category " : "thin ") + (h.className || "")).attr({
                        zIndex: b(h.zIndex, 2)
                    }).add(),
                    l.styledMode || (d.attr({
                        stroke: h.color || (k ? B.parse("#ccd6eb").setOpacity(.25).get() : "#cccccc"),
                        "stroke-width": b(h.width, 1)
                    }).css({
                        "pointer-events": "none"
                    }),
                    h.dashStyle && d.attr({
                        dashstyle: h.dashStyle
                    })));
                    d.show().attr({
                        d: n
                    });
                    k && !h.width && d.attr({
                        "stroke-width": this.transA
                    });
                    this.cross.e = e
                } else
                    this.hideCrosshair();
                A(this, "afterDrawCrosshair", {
                    e: e,
                    point: a
                })
            }
            ;
            k.prototype.hideCrosshair = function() {
                this.cross && this.cross.hide();
                A(this, "afterHideCrosshair")
            }
            ;
            k.prototype.hasVerticalPanning = function() {
                var b = this.chart.options.chart.panning;
                return !!(b && b.enabled && /y/.test(b.type))
            }
            ;
            k.prototype.validatePositiveValue = function(b) {
                return n(b) && 0 < b
            }
            ;
            k.prototype.update = function(e, a) {
                var h = this.chart;
                e = l(this.userOptions, e);
                this.destroy(!0);
                this.init(h, e);
                h.isDirtyBox = !0;
                b(a, !0) && h.redraw()
            }
            ;
            k.prototype.remove = function(e) {
                for (var a = this.chart, h = this.coll, k = this.series, l = k.length; l--; )
                    k[l] && k[l].remove(!1);
                M(a.axes, this);
                M(a[h], this);
                a[h].forEach(function(b, e) {
                    b.options.index = b.userOptions.index = e
                });
                this.destroy();
                a.isDirtyBox = !0;
                b(e, !0) && a.redraw()
            }
            ;
            k.prototype.setTitle = function(b, e) {
                this.update({
                    title: b
                }, e)
            }
            ;
            k.prototype.setCategories = function(b, e) {
                this.update({
                    categories: b
                }, e)
            }
            ;
            k.defaultOptions = f.defaultXAxisOptions;
            k.keepProps = "extKey hcEvents names series userMax userMin".split(" ");
            return k
        }();
        "";
        return c
    });
    O(f, "Core/Axis/DateTimeAxis.js", [f["Core/Utilities.js"]], function(c) {
        var f = c.addEvent, B = c.getMagnitude, F = c.normalizeTickInterval, z = c.timeUnits, E;
        (function(c) {
            function w() {
                return this.chart.time.getTimeTicks.apply(this.chart.time, arguments)
            }
            function t(d) {
                "datetime" !== d.userOptions.type ? this.dateTime = void 0 : this.dateTime || (this.dateTime = new a(this))
            }
            var r = [];
            c.compose = function(a) {
                -1 === r.indexOf(a) && (r.push(a),
                a.keepProps.push("dateTime"),
                a.prototype.getTimeTicks = w,
                f(a, "init", t));
                return a
            }
            ;
            var a = function() {
                function a(a) {
                    this.axis = a
                }
                a.prototype.normalizeTimeTickInterval = function(a, d) {
                    var g = d || [["millisecond", [1, 2, 5, 10, 20, 25, 50, 100, 200, 500]], ["second", [1, 2, 5, 10, 15, 30]], ["minute", [1, 2, 5, 10, 15, 30]], ["hour", [1, 2, 3, 4, 6, 8, 12]], ["day", [1, 2]], ["week", [1, 2]], ["month", [1, 2, 3, 4, 6]], ["year", null]];
                    d = g[g.length - 1];
                    var c = z[d[0]], m = d[1], r;
                    for (r = 0; r < g.length && !(d = g[r],
                    c = z[d[0]],
                    m = d[1],
                    g[r + 1] && a <= (c * m[m.length - 1] + z[g[r + 1][0]]) / 2); r++)
                        ;
                    c === z.year && a < 5 * c && (m = [1, 2, 5]);
                    a = F(a / c, m, "year" === d[0] ? Math.max(B(a / c), 1) : 1);
                    return {
                        unitRange: c,
                        count: a,
                        unitName: d[0]
                    }
                }
                ;
                a.prototype.getXDateFormat = function(a, d) {
                    var g = this.axis
                      , c = g.chart.time;
                    return g.closestPointRange ? c.getDateFormat(g.closestPointRange, a, g.options.startOfWeek, d) || c.resolveDTLFormat(d.year).main : c.resolveDTLFormat(d.day).main
                }
                ;
                return a
            }();
            c.Additions = a
        }
        )(E || (E = {}));
        return E
    });
    O(f, "Core/Axis/LogarithmicAxis.js", [f["Core/Utilities.js"]], function(c) {
        var f = c.addEvent, B = c.normalizeTickInterval, F = c.pick, z;
        (function(c) {
            function z(a) {
                var d = this.logarithmic;
                "logarithmic" !== a.userOptions.type ? this.logarithmic = void 0 : d || (this.logarithmic = new r(this))
            }
            function w() {
                var a = this.logarithmic;
                a && (this.lin2val = function(d) {
                    return a.lin2log(d)
                }
                ,
                this.val2lin = function(d) {
                    return a.log2lin(d)
                }
                )
            }
            var t = [];
            c.compose = function(a) {
                -1 === t.indexOf(a) && (t.push(a),
                a.keepProps.push("logarithmic"),
                f(a, "init", z),
                f(a, "afterInit", w));
                return a
            }
            ;
            var r = function() {
                function a(a) {
                    this.axis = a
                }
                a.prototype.getLogTickPositions = function(a, g, c, q) {
                    var d = this.axis
                      , m = d.len
                      , r = d.options
                      , f = [];
                    q || (this.minorAutoInterval = void 0);
                    if (.5 <= a)
                        a = Math.round(a),
                        f = d.getLinearTickPositions(a, g, c);
                    else if (.08 <= a) {
                        var t = Math.floor(g), C, A = r = void 0;
                        for (m = .3 < a ? [1, 2, 4] : .15 < a ? [1, 2, 4, 6, 8] : [1, 2, 3, 4, 5, 6, 7, 8, 9]; t < c + 1 && !A; t++) {
                            var y = m.length;
                            for (C = 0; C < y && !A; C++) {
                                var n = this.log2lin(this.lin2log(t) * m[C]);
                                n > g && (!q || r <= c) && "undefined" !== typeof r && f.push(r);
                                r > c && (A = !0);
                                r = n
                            }
                        }
                    } else
                        g = this.lin2log(g),
                        c = this.lin2log(c),
                        a = q ? d.getMinorTickInterval() : r.tickInterval,
                        a = F("auto" === a ? null : a, this.minorAutoInterval, r.tickPixelInterval / (q ? 5 : 1) * (c - g) / ((q ? m / d.tickPositions.length : m) || 1)),
                        a = B(a),
                        f = d.getLinearTickPositions(a, g, c).map(this.log2lin),
                        q || (this.minorAutoInterval = a / 5);
                    q || (d.tickInterval = a);
                    return f
                }
                ;
                a.prototype.lin2log = function(a) {
                    return Math.pow(10, a)
                }
                ;
                a.prototype.log2lin = function(a) {
                    return Math.log(a) / Math.LN10
                }
                ;
                return a
            }();
            c.Additions = r
        }
        )(z || (z = {}));
        return z
    });
    O(f, "Core/Axis/PlotLineOrBand/PlotLineOrBandAxis.js", [f["Core/Utilities.js"]], function(c) {
        var f = c.erase, B = c.extend, F = c.isNumber, z;
        (function(c) {
            var z = [], w;
            c.compose = function(c, a) {
                w || (w = c);
                -1 === z.indexOf(a) && (z.push(a),
                B(a.prototype, t.prototype));
                return a
            }
            ;
            var t = function() {
                function c() {}
                c.prototype.getPlotBandPath = function(a, d, g) {
                    void 0 === g && (g = this.options);
                    var c = this.getPlotLinePath({
                        value: d,
                        force: !0,
                        acrossPanes: g.acrossPanes
                    })
                      , q = []
                      , x = this.horiz;
                    d = !F(this.min) || !F(this.max) || a < this.min && d < this.min || a > this.max && d > this.max;
                    a = this.getPlotLinePath({
                        value: a,
                        force: !0,
                        acrossPanes: g.acrossPanes
                    });
                    g = 1;
                    if (a && c) {
                        if (d) {
                            var r = a.toString() === c.toString();
                            g = 0
                        }
                        for (d = 0; d < a.length; d += 2) {
                            var f = a[d]
                              , t = a[d + 1]
                              , K = c[d]
                              , C = c[d + 1];
                            "M" !== f[0] && "L" !== f[0] || "M" !== t[0] && "L" !== t[0] || "M" !== K[0] && "L" !== K[0] || "M" !== C[0] && "L" !== C[0] || (x && K[1] === f[1] ? (K[1] += g,
                            C[1] += g) : x || K[2] !== f[2] || (K[2] += g,
                            C[2] += g),
                            q.push(["M", f[1], f[2]], ["L", t[1], t[2]], ["L", C[1], C[2]], ["L", K[1], K[2]], ["Z"]));
                            q.isFlat = r
                        }
                    }
                    return q
                }
                ;
                c.prototype.addPlotBand = function(a) {
                    return this.addPlotBandOrLine(a, "plotBands")
                }
                ;
                c.prototype.addPlotLine = function(a) {
                    return this.addPlotBandOrLine(a, "plotLines")
                }
                ;
                c.prototype.addPlotBandOrLine = function(a, d) {
                    var g = this
                      , c = this.userOptions
                      , q = new w(this,a);
                    this.visible && (q = q.render());
                    if (q) {
                        this._addedPlotLB || (this._addedPlotLB = !0,
                        (c.plotLines || []).concat(c.plotBands || []).forEach(function(a) {
                            g.addPlotBandOrLine(a)
                        }));
                        if (d) {
                            var x = c[d] || [];
                            x.push(a);
                            c[d] = x
                        }
                        this.plotLinesAndBands.push(q)
                    }
                    return q
                }
                ;
                c.prototype.removePlotBandOrLine = function(a) {
                    var d = this.plotLinesAndBands
                      , g = this.options
                      , c = this.userOptions;
                    if (d) {
                        for (var q = d.length; q--; )
                            d[q].id === a && d[q].destroy();
                        [g.plotLines || [], c.plotLines || [], g.plotBands || [], c.plotBands || []].forEach(function(d) {
                            for (q = d.length; q--; )
                                (d[q] || {}).id === a && f(d, d[q])
                        })
                    }
                }
                ;
                c.prototype.removePlotBand = function(a) {
                    this.removePlotBandOrLine(a)
                }
                ;
                c.prototype.removePlotLine = function(a) {
                    this.removePlotBandOrLine(a)
                }
                ;
                return c
            }()
        }
        )(z || (z = {}));
        return z
    });
    O(f, "Core/Axis/PlotLineOrBand/PlotLineOrBand.js", [f["Core/Axis/PlotLineOrBand/PlotLineOrBandAxis.js"], f["Core/Utilities.js"]], function(c, f) {
        var B = f.arrayMax
          , D = f.arrayMin
          , z = f.defined
          , E = f.destroyObjectProperties
          , H = f.erase
          , w = f.fireEvent
          , t = f.merge
          , r = f.objectEach
          , a = f.pick;
        f = function() {
            function d(a, d) {
                this.axis = a;
                d && (this.options = d,
                this.id = d.id)
            }
            d.compose = function(a) {
                return c.compose(d, a)
            }
            ;
            d.prototype.render = function() {
                w(this, "render");
                var d = this
                  , c = d.axis
                  , q = c.horiz
                  , f = c.logarithmic
                  , J = d.options
                  , I = J.color
                  , M = a(J.zIndex, 0)
                  , K = J.events
                  , C = {}
                  , A = c.chart.renderer
                  , y = J.label
                  , n = d.label
                  , u = J.to
                  , l = J.from
                  , k = J.value
                  , e = d.svgElem
                  , b = []
                  , h = z(l) && z(u);
                b = z(k);
                var v = !e
                  , p = {
                    "class": "highcharts-plot-" + (h ? "band " : "line ") + (J.className || "")
                }
                  , G = h ? "bands" : "lines";
                f && (l = f.log2lin(l),
                u = f.log2lin(u),
                k = f.log2lin(k));
                c.chart.styledMode || (b ? (p.stroke = I || "#999999",
                p["stroke-width"] = a(J.width, 1),
                J.dashStyle && (p.dashstyle = J.dashStyle)) : h && (p.fill = I || "#e6ebf5",
                J.borderWidth && (p.stroke = J.borderColor,
                p["stroke-width"] = J.borderWidth)));
                C.zIndex = M;
                G += "-" + M;
                (f = c.plotLinesAndBandsGroups[G]) || (c.plotLinesAndBandsGroups[G] = f = A.g("plot-" + G).attr(C).add());
                v && (d.svgElem = e = A.path().attr(p).add(f));
                if (b)
                    b = c.getPlotLinePath({
                        value: k,
                        lineWidth: e.strokeWidth(),
                        acrossPanes: J.acrossPanes
                    });
                else if (h)
                    b = c.getPlotBandPath(l, u, J);
                else
                    return;
                !d.eventsAdded && K && (r(K, function(b, a) {
                    e.on(a, function(b) {
                        K[a].apply(d, [b])
                    })
                }),
                d.eventsAdded = !0);
                (v || !e.d) && b && b.length ? e.attr({
                    d: b
                }) : e && (b ? (e.show(),
                e.animate({
                    d: b
                })) : e.d && (e.hide(),
                n && (d.label = n = n.destroy())));
                y && (z(y.text) || z(y.formatter)) && b && b.length && 0 < c.width && 0 < c.height && !b.isFlat ? (y = t({
                    align: q && h && "center",
                    x: q ? !h && 4 : 10,
                    verticalAlign: !q && h && "middle",
                    y: q ? h ? 16 : 10 : h ? 6 : -4,
                    rotation: q && !h && 90
                }, y),
                this.renderLabel(y, b, h, M)) : n && n.hide();
                return d
            }
            ;
            d.prototype.renderLabel = function(a, d, c, f) {
                var g = this.axis
                  , m = g.chart.renderer
                  , q = this.label;
                q || (this.label = q = m.text(this.getLabelText(a), 0, 0, a.useHTML).attr({
                    align: a.textAlign || a.align,
                    rotation: a.rotation,
                    "class": "highcharts-plot-" + (c ? "band" : "line") + "-label " + (a.className || ""),
                    zIndex: f
                }).add(),
                g.chart.styledMode || q.css(t({
                    textOverflow: "ellipsis"
                }, a.style)));
                f = d.xBounds || [d[0][1], d[1][1], c ? d[2][1] : d[0][1]];
                d = d.yBounds || [d[0][2], d[1][2], c ? d[2][2] : d[0][2]];
                c = D(f);
                m = D(d);
                q.align(a, !1, {
                    x: c,
                    y: m,
                    width: B(f) - c,
                    height: B(d) - m
                });
                q.alignValue && "left" !== q.alignValue || q.css({
                    width: (90 === q.rotation ? g.height - (q.alignAttr.y - g.top) : g.width - (q.alignAttr.x - g.left)) + "px"
                });
                q.show(!0)
            }
            ;
            d.prototype.getLabelText = function(a) {
                return z(a.formatter) ? a.formatter.call(this) : a.text
            }
            ;
            d.prototype.destroy = function() {
                H(this.axis.plotLinesAndBands, this);
                delete this.axis;
                E(this)
            }
            ;
            return d
        }();
        "";
        "";
        return f
    });
    O(f, "Core/Tooltip.js", [f["Core/FormatUtilities.js"], f["Core/Globals.js"], f["Core/Renderer/RendererUtilities.js"], f["Core/Renderer/RendererRegistry.js"], f["Core/Utilities.js"]], function(c, f, B, F, z) {
        var D = c.format
          , H = f.doc
          , w = B.distribute
          , t = z.addEvent
          , r = z.clamp
          , a = z.css
          , d = z.defined
          , g = z.discardElement
          , m = z.extend
          , q = z.fireEvent
          , x = z.isArray
          , J = z.isNumber
          , I = z.isString
          , M = z.merge
          , K = z.pick
          , C = z.splat
          , A = z.syncTimeout;
        c = function() {
            function c(a, d) {
                this.allowShared = !0;
                this.container = void 0;
                this.crosshairs = [];
                this.distance = 0;
                this.isHidden = !0;
                this.isSticky = !1;
                this.now = {};
                this.options = {};
                this.outside = !1;
                this.chart = a;
                this.init(a, d)
            }
            c.prototype.applyFilter = function() {
                var a = this.chart;
                a.renderer.definition({
                    tagName: "filter",
                    attributes: {
                        id: "drop-shadow-" + a.index,
                        opacity: .5
                    },
                    children: [{
                        tagName: "feGaussianBlur",
                        attributes: {
                            "in": "SourceAlpha",
                            stdDeviation: 1
                        }
                    }, {
                        tagName: "feOffset",
                        attributes: {
                            dx: 1,
                            dy: 1
                        }
                    }, {
                        tagName: "feComponentTransfer",
                        children: [{
                            tagName: "feFuncA",
                            attributes: {
                                type: "linear",
                                slope: .3
                            }
                        }]
                    }, {
                        tagName: "feMerge",
                        children: [{
                            tagName: "feMergeNode"
                        }, {
                            tagName: "feMergeNode",
                            attributes: {
                                "in": "SourceGraphic"
                            }
                        }]
                    }]
                })
            }
            ;
            c.prototype.bodyFormatter = function(a) {
                return a.map(function(a) {
                    var l = a.series.tooltipOptions;
                    return (l[(a.point.formatPrefix || "point") + "Formatter"] || a.point.tooltipFormatter).call(a.point, l[(a.point.formatPrefix || "point") + "Format"] || "")
                })
            }
            ;
            c.prototype.cleanSplit = function(a) {
                this.chart.series.forEach(function(d) {
                    var l = d && d.tt;
                    l && (!l.isActive || a ? d.tt = l.destroy() : l.isActive = !1)
                })
            }
            ;
            c.prototype.defaultFormatter = function(a) {
                var d = this.points || C(this);
                var l = [a.tooltipFooterHeaderFormatter(d[0])];
                l = l.concat(a.bodyFormatter(d));
                l.push(a.tooltipFooterHeaderFormatter(d[0], !0));
                return l
            }
            ;
            c.prototype.destroy = function() {
                this.label && (this.label = this.label.destroy());
                this.split && this.tt && (this.cleanSplit(!0),
                this.tt = this.tt.destroy());
                this.renderer && (this.renderer = this.renderer.destroy(),
                g(this.container));
                z.clearTimeout(this.hideTimer);
                z.clearTimeout(this.tooltipTimeout)
            }
            ;
            c.prototype.getAnchor = function(a, d) {
                var l = this.chart, k = l.pointer, e = l.inverted, b = l.plotTop, h = l.plotLeft, n, p, c = 0, g = 0;
                a = C(a);
                this.followPointer && d ? ("undefined" === typeof d.chartX && (d = k.normalize(d)),
                k = [d.chartX - h, d.chartY - b]) : a[0].tooltipPos ? k = a[0].tooltipPos : (a.forEach(function(a) {
                    n = a.series.yAxis;
                    p = a.series.xAxis;
                    c += a.plotX || 0;
                    g += a.plotLow ? (a.plotLow + (a.plotHigh || 0)) / 2 : a.plotY || 0;
                    p && n && (e ? (c += b + l.plotHeight - p.len - p.pos,
                    g += h + l.plotWidth - n.len - n.pos) : (c += p.pos - h,
                    g += n.pos - b))
                }),
                c /= a.length,
                g /= a.length,
                k = [e ? l.plotWidth - g : c, e ? l.plotHeight - c : g],
                this.shared && 1 < a.length && d && (e ? k[0] = d.chartX - h : k[1] = d.chartY - b));
                return k.map(Math.round)
            }
            ;
            c.prototype.getLabel = function() {
                var n = this, c = this.chart.styledMode, l = this.options, k = this.split && this.allowShared, e = "tooltip" + (d(l.className) ? " " + l.className : ""), b = l.style.pointerEvents || (!this.followPointer && l.stickOnContact ? "auto" : "none"), h = function() {
                    n.inContact = !0
                }, v = function(b) {
                    var e = n.chart.hoverSeries;
                    n.inContact = n.shouldStickOnContact() && n.chart.pointer.inClass(b.relatedTarget, "highcharts-tooltip");
                    if (!n.inContact && e && e.onMouseOut)
                        e.onMouseOut()
                }, p, g = this.chart.renderer;
                if (n.label) {
                    var m = !n.label.hasClass("highcharts-label");
                    (k && !m || !k && m) && n.destroy()
                }
                if (!this.label) {
                    if (this.outside) {
                        m = this.chart.options.chart.style;
                        var y = F.getRendererType();
                        this.container = p = f.doc.createElement("div");
                        p.className = "highcharts-tooltip-container";
                        a(p, {
                            position: "absolute",
                            top: "0.063em",
                            pointerEvents: b,
                            zIndex: Math.max(this.options.style.zIndex || 0, (m && m.zIndex || 0) + 3)
                        });
                        t(p, "mouseenter", h);
                        t(p, "mouseleave", v);
                        f.doc.body.appendChild(p);
                        this.renderer = g = new y(p,0,0,m,void 0,void 0,g.styledMode)
                    }
                    k ? this.label = g.g(e) : (this.label = g.label("", 0, 0, l.shape, void 0, void 0, l.useHTML, void 0, e).attr({
                        padding: l.padding,
                        r: l.borderRadius
                    }),
                    c || this.label.attr({
                        fill: l.backgroundColor,
                        "stroke-width": l.borderWidth
                    }).css(l.style).css({
                        pointerEvents: b
                    }).shadow(l.shadow));
                    c && l.shadow && (this.applyFilter(),
                    this.label.attr({
                        filter: "url(#drop-shadow-" + this.chart.index + ")"
                    }));
                    if (n.outside && !n.split) {
                        var q = this.label
                          , A = q.xSetter
                          , r = q.ySetter;
                        q.xSetter = function(b) {
                            A.call(q, n.distance);
                            p.style.left = b + "px"
                        }
                        ;
                        q.ySetter = function(b) {
                            r.call(q, n.distance);
                            p.style.top = b + "px"
                        }
                    }
                    this.label.on("mouseenter", h).on("mouseleave", v).attr({
                        zIndex: 8
                    }).add()
                }
                return this.label
            }
            ;
            c.prototype.getPosition = function(a, d, l) {
                var k = this.chart, e = this.distance, b = {}, h = k.inverted && l.h || 0, n = this.outside, p = n ? H.documentElement.clientWidth - 2 * e : k.chartWidth, c = n ? Math.max(H.body.scrollHeight, H.documentElement.scrollHeight, H.body.offsetHeight, H.documentElement.offsetHeight, H.documentElement.clientHeight) : k.chartHeight, g = k.pointer.getChartPosition(), u = function(b) {
                    var h = "x" === b;
                    return [b, h ? p : c, h ? a : d].concat(n ? [h ? a * g.scaleX : d * g.scaleY, h ? g.left - e + (l.plotX + k.plotLeft) * g.scaleX : g.top - e + (l.plotY + k.plotTop) * g.scaleY, 0, h ? p : c] : [h ? a : d, h ? l.plotX + k.plotLeft : l.plotY + k.plotTop, h ? k.plotLeft : k.plotTop, h ? k.plotLeft + k.plotWidth : k.plotTop + k.plotHeight])
                }, m = u("y"), q = u("x"), y;
                u = !!l.negative;
                !k.polar && k.hoverSeries && k.hoverSeries.yAxis && k.hoverSeries.yAxis.reversed && (u = !u);
                var A = !this.followPointer && K(l.ttBelow, !k.inverted === u)
                  , f = function(a, k, l, p, d, v, c) {
                    var u = n ? "y" === a ? e * g.scaleY : e * g.scaleX : e
                      , m = (l - p) / 2
                      , G = p < d - e
                      , q = d + e + p < k
                      , y = d - u - l + m;
                    d = d + u - m;
                    if (A && q)
                        b[a] = d;
                    else if (!A && G)
                        b[a] = y;
                    else if (G)
                        b[a] = Math.min(c - p, 0 > y - h ? y : y - h);
                    else if (q)
                        b[a] = Math.max(v, d + h + l > k ? d : d + h);
                    else
                        return !1
                }
                  , r = function(a, h, k, l, p) {
                    var d;
                    p < e || p > h - e ? d = !1 : b[a] = p < k / 2 ? 1 : p > h - l / 2 ? h - l - 2 : p - k / 2;
                    return d
                }
                  , N = function(b) {
                    var e = m;
                    m = q;
                    q = e;
                    y = b
                }
                  , x = function() {
                    !1 !== f.apply(0, m) ? !1 !== r.apply(0, q) || y || (N(!0),
                    x()) : y ? b.x = b.y = 0 : (N(!0),
                    x())
                };
                (k.inverted || 1 < this.len) && N();
                x();
                return b
            }
            ;
            c.prototype.hide = function(a) {
                var d = this;
                z.clearTimeout(this.hideTimer);
                a = K(a, this.options.hideDelay);
                this.isHidden || (this.hideTimer = A(function() {
                    d.getLabel().fadeOut(a ? void 0 : a);
                    d.isHidden = !0
                }, a))
            }
            ;
            c.prototype.init = function(a, d) {
                this.chart = a;
                this.options = d;
                this.crosshairs = [];
                this.now = {
                    x: 0,
                    y: 0
                };
                this.isHidden = !0;
                this.split = d.split && !a.inverted && !a.polar;
                this.shared = d.shared || this.split;
                this.outside = K(d.outside, !(!a.scrollablePixelsX && !a.scrollablePixelsY))
            }
            ;
            c.prototype.shouldStickOnContact = function() {
                return !(this.followPointer || !this.options.stickOnContact)
            }
            ;
            c.prototype.isStickyOnContact = function() {
                return !(!this.shouldStickOnContact() || !this.inContact)
            }
            ;
            c.prototype.move = function(a, d, l, k) {
                var e = this
                  , b = e.now
                  , h = !1 !== e.options.animation && !e.isHidden && (1 < Math.abs(a - b.x) || 1 < Math.abs(d - b.y))
                  , n = e.followPointer || 1 < e.len;
                m(b, {
                    x: h ? (2 * b.x + a) / 3 : a,
                    y: h ? (b.y + d) / 2 : d,
                    anchorX: n ? void 0 : h ? (2 * b.anchorX + l) / 3 : l,
                    anchorY: n ? void 0 : h ? (b.anchorY + k) / 2 : k
                });
                e.getLabel().attr(b);
                e.drawTracker();
                h && (z.clearTimeout(this.tooltipTimeout),
                this.tooltipTimeout = setTimeout(function() {
                    e && e.move(a, d, l, k)
                }, 32))
            }
            ;
            c.prototype.refresh = function(a, d) {
                var l = this.chart
                  , k = this.options
                  , e = C(a)
                  , b = e[0]
                  , h = []
                  , n = k.formatter || this.defaultFormatter
                  , p = this.shared
                  , c = l.styledMode
                  , g = {};
                if (k.enabled && b.series) {
                    z.clearTimeout(this.hideTimer);
                    this.allowShared = !(!x(a) && a.series && a.series.noSharedTooltip);
                    this.followPointer = !this.split && b.series.tooltipOptions.followPointer;
                    a = this.getAnchor(a, d);
                    var u = a[0]
                      , m = a[1];
                    p && this.allowShared ? (l.pointer.applyInactiveState(e),
                    e.forEach(function(b) {
                        b.setState("hover");
                        h.push(b.getLabelConfig())
                    }),
                    g = {
                        x: b.category,
                        y: b.y
                    },
                    g.points = h) : g = b.getLabelConfig();
                    this.len = h.length;
                    n = n.call(g, this);
                    p = b.series;
                    this.distance = K(p.tooltipOptions.distance, 16);
                    if (!1 === n)
                        this.hide();
                    else {
                        if (this.split && this.allowShared)
                            this.renderSplit(n, e);
                        else {
                            var y = u
                              , A = m;
                            d && l.pointer.isDirectTouch && (y = d.chartX - l.plotLeft,
                            A = d.chartY - l.plotTop);
                            if (l.polar || !1 === p.options.clip || e.some(function(b) {
                                return b.series.shouldShowTooltip(y, A)
                            }))
                                d = this.getLabel(),
                                k.style.width && !c || d.css({
                                    width: this.chart.spacingBox.width + "px"
                                }),
                                d.attr({
                                    text: n && n.join ? n.join("") : n
                                }),
                                d.removeClass(/highcharts-color-[\d]+/g).addClass("highcharts-color-" + K(b.colorIndex, p.colorIndex)),
                                c || d.attr({
                                    stroke: k.borderColor || b.color || p.color || "#666666"
                                }),
                                this.updatePosition({
                                    plotX: u,
                                    plotY: m,
                                    negative: b.negative,
                                    ttBelow: b.ttBelow,
                                    h: a[2] || 0
                                });
                            else {
                                this.hide();
                                return
                            }
                        }
                        this.isHidden && this.label && this.label.attr({
                            opacity: 1
                        }).show();
                        this.isHidden = !1
                    }
                    q(this, "refresh")
                }
            }
            ;
            c.prototype.renderSplit = function(a, d) {
                function l(b, e, a, h, l) {
                    void 0 === l && (l = !0);
                    a ? (e = M ? 0 : E,
                    b = r(b - h / 2, T.left, T.right - h - (k.outside ? z : 0))) : (e -= B,
                    b = l ? b - h - t : b + t,
                    b = r(b, l ? b : T.left, T.right));
                    return {
                        x: b,
                        y: e
                    }
                }
                var k = this
                  , e = k.chart
                  , b = k.chart
                  , h = b.chartWidth
                  , n = b.chartHeight
                  , p = b.plotHeight
                  , c = b.plotLeft
                  , g = b.plotTop
                  , u = b.pointer
                  , y = b.scrollablePixelsY;
                y = void 0 === y ? 0 : y;
                var q = b.scrollablePixelsX
                  , A = b.scrollingContainer;
                A = void 0 === A ? {
                    scrollLeft: 0,
                    scrollTop: 0
                } : A;
                var f = A.scrollLeft;
                A = A.scrollTop;
                var x = b.styledMode
                  , t = k.distance
                  , N = k.options
                  , C = k.options.positioner
                  , T = k.outside && "number" !== typeof q ? H.documentElement.getBoundingClientRect() : {
                    left: f,
                    right: f + h,
                    top: A,
                    bottom: A + n
                }
                  , J = k.getLabel()
                  , W = this.renderer || e.renderer
                  , M = !(!e.xAxis[0] || !e.xAxis[0].opposite);
                e = u.getChartPosition();
                var z = e.left;
                e = e.top;
                var B = g + A
                  , D = 0
                  , E = p - y;
                I(a) && (a = [!1, a]);
                a = a.slice(0, d.length + 1).reduce(function(b, e, a) {
                    if (!1 !== e && "" !== e) {
                        a = d[a - 1] || {
                            isHeader: !0,
                            plotX: d[0].plotX,
                            plotY: p,
                            series: {}
                        };
                        var h = a.isHeader
                          , n = h ? k : a.series;
                        e = e.toString();
                        var v = n.tt
                          , u = a.isHeader;
                        var m = a.series;
                        var G = "highcharts-color-" + K(a.colorIndex, m.colorIndex, "none");
                        v || (v = {
                            padding: N.padding,
                            r: N.borderRadius
                        },
                        x || (v.fill = N.backgroundColor,
                        v["stroke-width"] = N.borderWidth),
                        v = W.label("", 0, 0, N[u ? "headerShape" : "shape"], void 0, void 0, N.useHTML).addClass((u ? "highcharts-tooltip-header " : "") + "highcharts-tooltip-box " + G).attr(v).add(J));
                        v.isActive = !0;
                        v.attr({
                            text: e
                        });
                        x || v.css(N.style).shadow(N.shadow).attr({
                            stroke: N.borderColor || a.color || m.color || "#333333"
                        });
                        n = n.tt = v;
                        u = n.getBBox();
                        e = u.width + n.strokeWidth();
                        h && (D = u.height,
                        E += D,
                        M && (B -= D));
                        m = a.plotX;
                        m = void 0 === m ? 0 : m;
                        G = a.plotY;
                        G = void 0 === G ? 0 : G;
                        v = a.series;
                        if (a.isHeader) {
                            m = c + m;
                            var y = g + p / 2
                        } else {
                            var q = v.xAxis
                              , A = v.yAxis;
                            m = q.pos + r(m, -t, q.len + t);
                            v.shouldShowTooltip(0, A.pos - g + G, {
                                ignoreX: !0
                            }) && (y = A.pos + G)
                        }
                        m = r(m, T.left - t, T.right + t);
                        "number" === typeof y ? (u = u.height + 1,
                        G = C ? C.call(k, e, u, a) : l(m, y, h, e),
                        b.push({
                            align: C ? 0 : void 0,
                            anchorX: m,
                            anchorY: y,
                            boxWidth: e,
                            point: a,
                            rank: K(G.rank, h ? 1 : 0),
                            size: u,
                            target: G.y,
                            tt: n,
                            x: G.x
                        })) : n.isActive = !1
                    }
                    return b
                }, []);
                !C && a.some(function(b) {
                    var e = (k.outside ? z : 0) + b.anchorX;
                    return e < T.left && e + b.boxWidth < T.right ? !0 : e < z - T.left + b.boxWidth && T.right - e > e
                }) && (a = a.map(function(b) {
                    var e = l(b.anchorX, b.anchorY, b.point.isHeader, b.boxWidth, !1);
                    return m(b, {
                        target: e.y,
                        x: e.x
                    })
                }));
                k.cleanSplit();
                w(a, E);
                var F = z
                  , Z = z;
                a.forEach(function(b) {
                    var e = b.x
                      , a = b.boxWidth;
                    b = b.isHeader;
                    b || (k.outside && z + e < F && (F = z + e),
                    !b && k.outside && F + a > Z && (Z = z + e))
                });
                a.forEach(function(b) {
                    var e = b.x
                      , a = b.anchorX
                      , h = b.pos
                      , l = b.point.isHeader;
                    h = {
                        visibility: "undefined" === typeof h ? "hidden" : "inherit",
                        x: e,
                        y: h + B,
                        anchorX: a,
                        anchorY: b.anchorY
                    };
                    if (k.outside && e < a) {
                        var p = z - F;
                        0 < p && (l || (h.x = e + p,
                        h.anchorX = a + p),
                        l && (h.x = (Z - F) / 2,
                        h.anchorX = a + p))
                    }
                    b.tt.attr(h)
                });
                a = k.container;
                y = k.renderer;
                k.outside && a && y && (b = J.getBBox(),
                y.setSize(b.width + b.x, b.height + b.y, !1),
                a.style.left = F + "px",
                a.style.top = e + "px")
            }
            ;
            c.prototype.drawTracker = function() {
                if (this.followPointer || !this.options.stickOnContact)
                    this.tracker && this.tracker.destroy();
                else {
                    var a = this.chart
                      , d = this.label
                      , l = this.shared ? a.hoverPoints : a.hoverPoint;
                    if (d && l) {
                        var k = {
                            x: 0,
                            y: 0,
                            width: 0,
                            height: 0
                        };
                        l = this.getAnchor(l);
                        var e = d.getBBox();
                        l[0] += a.plotLeft - d.translateX;
                        l[1] += a.plotTop - d.translateY;
                        k.x = Math.min(0, l[0]);
                        k.y = Math.min(0, l[1]);
                        k.width = 0 > l[0] ? Math.max(Math.abs(l[0]), e.width - l[0]) : Math.max(Math.abs(l[0]), e.width);
                        k.height = 0 > l[1] ? Math.max(Math.abs(l[1]), e.height - Math.abs(l[1])) : Math.max(Math.abs(l[1]), e.height);
                        this.tracker ? this.tracker.attr(k) : (this.tracker = d.renderer.rect(k).addClass("highcharts-tracker").add(d),
                        a.styledMode || this.tracker.attr({
                            fill: "rgba(0,0,0,0)"
                        }))
                    }
                }
            }
            ;
            c.prototype.styledModeFormat = function(a) {
                return a.replace('style="font-size: 0.63em"', 'class="highcharts-header"').replace(/style="color:{(point|series)\.color}"/g, 'class="highcharts-color-{$1.colorIndex}"')
            }
            ;
            c.prototype.tooltipFooterHeaderFormatter = function(a, d) {
                var l = a.series
                  , k = l.tooltipOptions
                  , e = l.xAxis
                  , b = e && e.dateTime;
                e = {
                    isFooter: d,
                    labelConfig: a
                };
                var h = k.xDateFormat
                  , v = k[d ? "footerFormat" : "headerFormat"];
                q(this, "headerFormatter", e, function(e) {
                    b && !h && J(a.key) && (h = b.getXDateFormat(a.key, k.dateTimeLabelFormats));
                    b && h && (a.point && a.point.tooltipDateKeys || ["key"]).forEach(function(b) {
                        v = v.replace("{point." + b + "}", "{point." + b + ":" + h + "}")
                    });
                    l.chart.styledMode && (v = this.styledModeFormat(v));
                    e.text = D(v, {
                        point: a,
                        series: l
                    }, this.chart)
                });
                return e.text
            }
            ;
            c.prototype.update = function(a) {
                this.destroy();
                M(!0, this.chart.options.tooltip.userOptions, a);
                this.init(this.chart, M(!0, this.options, a))
            }
            ;
            c.prototype.updatePosition = function(d) {
                var c = this.chart
                  , l = this.options
                  , k = c.pointer
                  , e = this.getLabel();
                k = k.getChartPosition();
                var b = (l.positioner || this.getPosition).call(this, e.width, e.height, d)
                  , h = d.plotX + c.plotLeft;
                d = d.plotY + c.plotTop;
                if (this.outside) {
                    l = l.borderWidth + 2 * this.distance;
                    this.renderer.setSize(e.width + l, e.height + l, !1);
                    if (1 !== k.scaleX || 1 !== k.scaleY)
                        a(this.container, {
                            transform: "scale(".concat(k.scaleX, ", ").concat(k.scaleY, ")")
                        }),
                        h *= k.scaleX,
                        d *= k.scaleY;
                    h += k.left - b.x;
                    d += k.top - b.y
                }
                this.move(Math.round(b.x), Math.round(b.y || 0), h, d)
            }
            ;
            return c
        }();
        "";
        return c
    });
    O(f, "Core/Series/Point.js", [f["Core/Renderer/HTML/AST.js"], f["Core/Animation/AnimationUtilities.js"], f["Core/DefaultOptions.js"], f["Core/FormatUtilities.js"], f["Core/Utilities.js"]], function(c, f, B, F, z) {
        var D = f.animObject
          , H = B.defaultOptions
          , w = F.format
          , t = z.addEvent
          , r = z.defined
          , a = z.erase
          , d = z.extend
          , g = z.fireEvent
          , m = z.getNestedProperty
          , q = z.isArray
          , x = z.isFunction
          , J = z.isNumber
          , I = z.isObject
          , M = z.merge
          , K = z.objectEach
          , C = z.pick
          , A = z.syncTimeout
          , y = z.removeEvent
          , n = z.uniqueKey;
        f = function() {
            function u() {
                this.colorIndex = this.category = void 0;
                this.formatPrefix = "point";
                this.id = void 0;
                this.isNull = !1;
                this.percentage = this.options = this.name = void 0;
                this.selected = !1;
                this.total = this.shapeArgs = this.series = void 0;
                this.visible = !0;
                this.x = void 0
            }
            u.prototype.animateBeforeDestroy = function() {
                var a = this
                  , k = {
                    x: a.startXPos,
                    opacity: 0
                }
                  , e = a.getGraphicalProps();
                e.singular.forEach(function(b) {
                    a[b] = a[b].animate("dataLabel" === b ? {
                        x: a[b].startXPos,
                        y: a[b].startYPos,
                        opacity: 0
                    } : k)
                });
                e.plural.forEach(function(b) {
                    a[b].forEach(function(b) {
                        b.element && b.animate(d({
                            x: a.startXPos
                        }, b.startYPos ? {
                            x: b.startXPos,
                            y: b.startYPos
                        } : {}))
                    })
                })
            }
            ;
            u.prototype.applyOptions = function(a, k) {
                var e = this.series
                  , b = e.options.pointValKey || e.pointValKey;
                a = u.prototype.optionsToObject.call(this, a);
                d(this, a);
                this.options = this.options ? d(this.options, a) : a;
                a.group && delete this.group;
                a.dataLabels && delete this.dataLabels;
                b && (this.y = u.prototype.getNestedProperty.call(this, b));
                this.formatPrefix = (this.isNull = C(this.isValid && !this.isValid(), null === this.x || !J(this.y))) ? "null" : "point";
                this.selected && (this.state = "select");
                "name"in this && "undefined" === typeof k && e.xAxis && e.xAxis.hasNames && (this.x = e.xAxis.nameToX(this));
                "undefined" === typeof this.x && e ? this.x = "undefined" === typeof k ? e.autoIncrement() : k : J(a.x) && e.options.relativeXValue && (this.x = e.autoIncrement(a.x));
                return this
            }
            ;
            u.prototype.destroy = function() {
                function l() {
                    if (k.graphic || k.dataLabel || k.dataLabels)
                        y(k),
                        k.destroyElements();
                    for (p in k)
                        k[p] = null
                }
                var k = this
                  , e = k.series
                  , b = e.chart;
                e = e.options.dataSorting;
                var h = b.hoverPoints, d = D(k.series.chart.renderer.globalAnimation), p;
                k.legendItem && b.legend.destroyItem(k);
                h && (k.setState(),
                a(h, k),
                h.length || (b.hoverPoints = null));
                if (k === b.hoverPoint)
                    k.onMouseOut();
                e && e.enabled ? (this.animateBeforeDestroy(),
                A(l, d.duration)) : l();
                b.pointCount--
            }
            ;
            u.prototype.destroyElements = function(a) {
                var k = this;
                a = k.getGraphicalProps(a);
                a.singular.forEach(function(e) {
                    k[e] = k[e].destroy()
                });
                a.plural.forEach(function(e) {
                    k[e].forEach(function(b) {
                        b.element && b.destroy()
                    });
                    delete k[e]
                })
            }
            ;
            u.prototype.firePointEvent = function(a, k, e) {
                var b = this
                  , h = this.series.options;
                (h.point.events[a] || b.options && b.options.events && b.options.events[a]) && b.importEvents();
                "click" === a && h.allowPointSelect && (e = function(e) {
                    b.select && b.select(null, e.ctrlKey || e.metaKey || e.shiftKey)
                }
                );
                g(b, a, k, e)
            }
            ;
            u.prototype.getClassName = function() {
                return "highcharts-point" + (this.selected ? " highcharts-point-select" : "") + (this.negative ? " highcharts-negative" : "") + (this.isNull ? " highcharts-null-point" : "") + ("undefined" !== typeof this.colorIndex ? " highcharts-color-" + this.colorIndex : "") + (this.options.className ? " " + this.options.className : "") + (this.zone && this.zone.className ? " " + this.zone.className.replace("highcharts-negative", "") : "")
            }
            ;
            u.prototype.getGraphicalProps = function(a) {
                var k = this, e = [], b = {
                    singular: [],
                    plural: []
                }, h;
                a = a || {
                    graphic: 1,
                    dataLabel: 1
                };
                a.graphic && e.push("graphic", "upperGraphic", "shadowGroup");
                a.dataLabel && e.push("dataLabel", "dataLabelPath", "dataLabelUpper", "connector");
                for (h = e.length; h--; ) {
                    var d = e[h];
                    k[d] && b.singular.push(d)
                }
                ["dataLabel", "connector"].forEach(function(e) {
                    var h = e + "s";
                    a[e] && k[h] && b.plural.push(h)
                });
                return b
            }
            ;
            u.prototype.getLabelConfig = function() {
                return {
                    x: this.category,
                    y: this.y,
                    color: this.color,
                    colorIndex: this.colorIndex,
                    key: this.name || this.category,
                    series: this.series,
                    point: this,
                    percentage: this.percentage,
                    total: this.total || this.stackTotal
                }
            }
            ;
            u.prototype.getNestedProperty = function(a) {
                if (a)
                    return 0 === a.indexOf("custom.") ? m(a, this.options) : this[a]
            }
            ;
            u.prototype.getZone = function() {
                var a = this.series
                  , k = a.zones;
                a = a.zoneAxis || "y";
                var e, b = 0;
                for (e = k[b]; this[a] >= e.value; )
                    e = k[++b];
                this.nonZonedColor || (this.nonZonedColor = this.color);
                this.color = e && e.color && !this.options.color ? e.color : this.nonZonedColor;
                return e
            }
            ;
            u.prototype.hasNewShapeType = function() {
                return (this.graphic && (this.graphic.symbolName || this.graphic.element.nodeName)) !== this.shapeType
            }
            ;
            u.prototype.init = function(a, k, e) {
                this.series = a;
                this.applyOptions(k, e);
                this.id = r(this.id) ? this.id : n();
                this.resolveColor();
                a.chart.pointCount++;
                g(this, "afterInit");
                return this
            }
            ;
            u.prototype.optionsToObject = function(a) {
                var k = this.series
                  , e = k.options.keys
                  , b = e || k.pointArrayMap || ["y"]
                  , h = b.length
                  , d = {}
                  , p = 0
                  , l = 0;
                if (J(a) || null === a)
                    d[b[0]] = a;
                else if (q(a))
                    for (!e && a.length > h && (k = typeof a[0],
                    "string" === k ? d.name = a[0] : "number" === k && (d.x = a[0]),
                    p++); l < h; )
                        e && "undefined" === typeof a[p] || (0 < b[l].indexOf(".") ? u.prototype.setNestedProperty(d, a[p], b[l]) : d[b[l]] = a[p]),
                        p++,
                        l++;
                else
                    "object" === typeof a && (d = a,
                    a.dataLabels && (k._hasPointLabels = !0),
                    a.marker && (k._hasPointMarkers = !0));
                return d
            }
            ;
            u.prototype.resolveColor = function() {
                var a = this.series
                  , k = a.chart.styledMode;
                var e = a.chart.options.chart.colorCount;
                delete this.nonZonedColor;
                if (a.options.colorByPoint) {
                    if (!k) {
                        e = a.options.colors || a.chart.options.colors;
                        var b = e[a.colorCounter];
                        e = e.length
                    }
                    k = a.colorCounter;
                    a.colorCounter++;
                    a.colorCounter === e && (a.colorCounter = 0)
                } else
                    k || (b = a.color),
                    k = a.colorIndex;
                this.colorIndex = C(this.options.colorIndex, k);
                this.color = C(this.options.color, b)
            }
            ;
            u.prototype.setNestedProperty = function(a, k, e) {
                e.split(".").reduce(function(b, e, a, d) {
                    b[e] = d.length - 1 === a ? k : I(b[e], !0) ? b[e] : {};
                    return b[e]
                }, a);
                return a
            }
            ;
            u.prototype.tooltipFormatter = function(a) {
                var k = this.series
                  , e = k.tooltipOptions
                  , b = C(e.valueDecimals, "")
                  , h = e.valuePrefix || ""
                  , d = e.valueSuffix || "";
                k.chart.styledMode && (a = k.chart.tooltip.styledModeFormat(a));
                (k.pointArrayMap || ["y"]).forEach(function(e) {
                    e = "{point." + e;
                    if (h || d)
                        a = a.replace(RegExp(e + "}", "g"), h + e + "}" + d);
                    a = a.replace(RegExp(e + "}", "g"), e + ":,." + b + "f}")
                });
                return w(a, {
                    point: this,
                    series: this.series
                }, k.chart)
            }
            ;
            u.prototype.update = function(a, k, e, b) {
                function h() {
                    d.applyOptions(a);
                    var b = l && d.hasDummyGraphic;
                    b = null === d.y ? !b : b;
                    l && b && (d.graphic = l.destroy(),
                    delete d.hasDummyGraphic);
                    I(a, !0) && (l && l.element && a && a.marker && "undefined" !== typeof a.marker.symbol && (d.graphic = l.destroy()),
                    a && a.dataLabels && d.dataLabel && (d.dataLabel = d.dataLabel.destroy()),
                    d.connector && (d.connector = d.connector.destroy()));
                    g = d.index;
                    p.updateParallelArrays(d, g);
                    n.data[g] = I(n.data[g], !0) || I(a, !0) ? d.options : C(a, n.data[g]);
                    p.isDirty = p.isDirtyData = !0;
                    !p.fixedBox && p.hasCartesianSeries && (c.isDirtyBox = !0);
                    "point" === n.legendType && (c.isDirtyLegend = !0);
                    k && c.redraw(e)
                }
                var d = this, p = d.series, l = d.graphic, c = p.chart, n = p.options, g;
                k = C(k, !0);
                !1 === b ? h() : d.firePointEvent("update", {
                    options: a
                }, h)
            }
            ;
            u.prototype.remove = function(a, k) {
                this.series.removePoint(this.series.data.indexOf(this), a, k)
            }
            ;
            u.prototype.select = function(a, k) {
                var e = this
                  , b = e.series
                  , h = b.chart;
                this.selectedStaging = a = C(a, !e.selected);
                e.firePointEvent(a ? "select" : "unselect", {
                    accumulate: k
                }, function() {
                    e.selected = e.options.selected = a;
                    b.options.data[b.data.indexOf(e)] = e.options;
                    e.setState(a && "select");
                    k || h.getSelectedPoints().forEach(function(b) {
                        var a = b.series;
                        b.selected && b !== e && (b.selected = b.options.selected = !1,
                        a.options.data[a.data.indexOf(b)] = b.options,
                        b.setState(h.hoverPoints && a.options.inactiveOtherPoints ? "inactive" : ""),
                        b.firePointEvent("unselect"))
                    })
                });
                delete this.selectedStaging
            }
            ;
            u.prototype.onMouseOver = function(a) {
                var k = this.series.chart
                  , e = k.pointer;
                a = a ? e.normalize(a) : e.getChartCoordinatesFromPoint(this, k.inverted);
                e.runPointActions(a, this)
            }
            ;
            u.prototype.onMouseOut = function() {
                var a = this.series.chart;
                this.firePointEvent("mouseOut");
                this.series.options.inactiveOtherPoints || (a.hoverPoints || []).forEach(function(a) {
                    a.setState()
                });
                a.hoverPoints = a.hoverPoint = null
            }
            ;
            u.prototype.importEvents = function() {
                if (!this.hasImportedEvents) {
                    var a = this
                      , k = M(a.series.options.point, a.options).events;
                    a.events = k;
                    K(k, function(e, b) {
                        x(e) && t(a, b, e)
                    });
                    this.hasImportedEvents = !0
                }
            }
            ;
            u.prototype.setState = function(a, k) {
                var e = this.series, b = this.state, h = e.options.states[a || "normal"] || {}, l = H.plotOptions[e.type].marker && e.options.marker, p = l && !1 === l.enabled, n = l && l.states && l.states[a || "normal"] || {}, m = !1 === n.enabled, u = this.marker || {}, y = e.chart, q = l && e.markerAttribs, A = e.halo, f, r = e.stateMarkerGraphic;
                a = a || "";
                if (!(a === this.state && !k || this.selected && "select" !== a || !1 === h.enabled || a && (m || p && !1 === n.enabled) || a && u.states && u.states[a] && !1 === u.states[a].enabled)) {
                    this.state = a;
                    q && (f = e.markerAttribs(this, a));
                    if (this.graphic && !this.hasDummyGraphic) {
                        b && this.graphic.removeClass("highcharts-point-" + b);
                        a && this.graphic.addClass("highcharts-point-" + a);
                        if (!y.styledMode) {
                            var x = e.pointAttribs(this, a);
                            var N = C(y.options.chart.animation, h.animation);
                            e.options.inactiveOtherPoints && J(x.opacity) && ((this.dataLabels || []).forEach(function(b) {
                                b && b.animate({
                                    opacity: x.opacity
                                }, N)
                            }),
                            this.connector && this.connector.animate({
                                opacity: x.opacity
                            }, N));
                            this.graphic.animate(x, N)
                        }
                        f && this.graphic.animate(f, C(y.options.chart.animation, n.animation, l.animation));
                        r && r.hide()
                    } else {
                        if (a && n) {
                            b = u.symbol || e.symbol;
                            r && r.currentSymbol !== b && (r = r.destroy());
                            if (f)
                                if (r)
                                    r[k ? "animate" : "attr"]({
                                        x: f.x,
                                        y: f.y
                                    });
                                else
                                    b && (e.stateMarkerGraphic = r = y.renderer.symbol(b, f.x, f.y, f.width, f.height).add(e.markerGroup),
                                    r.currentSymbol = b);
                            !y.styledMode && r && "inactive" !== this.state && r.attr(e.pointAttribs(this, a))
                        }
                        r && (r[a && this.isInside ? "show" : "hide"](),
                        r.element.point = this,
                        r.addClass(this.getClassName(), !0))
                    }
                    h = h.halo;
                    f = (r = this.graphic || r) && r.visibility || "inherit";
                    h && h.size && r && "hidden" !== f && !this.isCluster ? (A || (e.halo = A = y.renderer.path().add(r.parentGroup)),
                    A.show()[k ? "animate" : "attr"]({
                        d: this.haloPath(h.size)
                    }),
                    A.attr({
                        "class": "highcharts-halo highcharts-color-" + C(this.colorIndex, e.colorIndex) + (this.className ? " " + this.className : ""),
                        visibility: f,
                        zIndex: -1
                    }),
                    A.point = this,
                    y.styledMode || A.attr(d({
                        fill: this.color || e.color,
                        "fill-opacity": h.opacity
                    }, c.filterUserAttributes(h.attributes || {})))) : A && A.point && A.point.haloPath && A.animate({
                        d: A.point.haloPath(0)
                    }, null, A.hide);
                    g(this, "afterSetState", {
                        state: a
                    })
                }
            }
            ;
            u.prototype.haloPath = function(a) {
                return this.series.chart.renderer.symbols.circle(Math.floor(this.plotX) - a, this.plotY - a, 2 * a, 2 * a)
            }
            ;
            return u
        }();
        "";
        return f
    });
    O(f, "Core/Pointer.js", [f["Core/Color/Color.js"], f["Core/Globals.js"], f["Core/Tooltip.js"], f["Core/Utilities.js"]], function(c, f, B, F) {
        var z = c.parse
          , E = f.charts
          , D = f.noop
          , w = F.addEvent
          , t = F.attr
          , r = F.css
          , a = F.defined
          , d = F.extend
          , g = F.find
          , m = F.fireEvent
          , q = F.isNumber
          , x = F.isObject
          , J = F.objectEach
          , I = F.offset
          , M = F.pick
          , K = F.splat;
        c = function() {
            function c(a, d) {
                this.lastValidTouch = {};
                this.pinchDown = [];
                this.runChartClick = !1;
                this.eventsToUnbind = [];
                this.chart = a;
                this.hasDragged = !1;
                this.options = d;
                this.init(a, d)
            }
            c.prototype.applyInactiveState = function(a) {
                var d = [], c;
                (a || []).forEach(function(a) {
                    c = a.series;
                    d.push(c);
                    c.linkedParent && d.push(c.linkedParent);
                    c.linkedSeries && (d = d.concat(c.linkedSeries));
                    c.navigatorSeries && d.push(c.navigatorSeries)
                });
                this.chart.series.forEach(function(a) {
                    -1 === d.indexOf(a) ? a.setState("inactive", !0) : a.options.inactiveOtherPoints && a.setAllPointsToState("inactive")
                })
            }
            ;
            c.prototype.destroy = function() {
                var a = this;
                this.eventsToUnbind.forEach(function(a) {
                    return a()
                });
                this.eventsToUnbind = [];
                f.chartCount || (c.unbindDocumentMouseUp && (c.unbindDocumentMouseUp = c.unbindDocumentMouseUp()),
                c.unbindDocumentTouchEnd && (c.unbindDocumentTouchEnd = c.unbindDocumentTouchEnd()));
                clearInterval(a.tooltipTimeout);
                J(a, function(d, c) {
                    a[c] = void 0
                })
            }
            ;
            c.prototype.drag = function(a) {
                var d = this.chart
                  , c = d.options.chart
                  , g = this.zoomHor
                  , l = this.zoomVert
                  , k = d.plotLeft
                  , e = d.plotTop
                  , b = d.plotWidth
                  , h = d.plotHeight
                  , v = this.mouseDownX || 0
                  , p = this.mouseDownY || 0
                  , m = x(c.panning) ? c.panning && c.panning.enabled : c.panning
                  , q = c.panKey && a[c.panKey + "Key"]
                  , A = a.chartX
                  , f = a.chartY
                  , r = this.selectionMarker;
                if (!r || !r.touch)
                    if (A < k ? A = k : A > k + b && (A = k + b),
                    f < e ? f = e : f > e + h && (f = e + h),
                    this.hasDragged = Math.sqrt(Math.pow(v - A, 2) + Math.pow(p - f, 2)),
                    10 < this.hasDragged) {
                        var t = d.isInsidePlot(v - k, p - e, {
                            visiblePlotOnly: !0
                        });
                        !d.hasCartesianSeries && !d.mapView || !this.zoomX && !this.zoomY || !t || q || r || (this.selectionMarker = r = d.renderer.rect(k, e, g ? 1 : b, l ? 1 : h, 0).attr({
                            "class": "highcharts-selection-marker",
                            zIndex: 7
                        }).add(),
                        d.styledMode || r.attr({
                            fill: c.selectionMarkerFill || z("#335cad").setOpacity(.25).get()
                        }));
                        r && g && (g = A - v,
                        r.attr({
                            width: Math.abs(g),
                            x: (0 < g ? 0 : g) + v
                        }));
                        r && l && (g = f - p,
                        r.attr({
                            height: Math.abs(g),
                            y: (0 < g ? 0 : g) + p
                        }));
                        t && !r && m && d.pan(a, c.panning)
                    }
            }
            ;
            c.prototype.dragStart = function(a) {
                var d = this.chart;
                d.mouseIsDown = a.type;
                d.cancelClick = !1;
                d.mouseDownX = this.mouseDownX = a.chartX;
                d.mouseDownY = this.mouseDownY = a.chartY
            }
            ;
            c.prototype.drop = function(c) {
                var g = this
                  , n = this.chart
                  , u = this.hasPinched;
                if (this.selectionMarker) {
                    var l = this.selectionMarker
                      , k = l.attr ? l.attr("x") : l.x
                      , e = l.attr ? l.attr("y") : l.y
                      , b = l.attr ? l.attr("width") : l.width
                      , h = l.attr ? l.attr("height") : l.height
                      , v = {
                        originalEvent: c,
                        xAxis: [],
                        yAxis: [],
                        x: k,
                        y: e,
                        width: b,
                        height: h
                    }
                      , p = !!n.mapView;
                    if (this.hasDragged || u)
                        n.axes.forEach(function(d) {
                            if (d.zoomEnabled && a(d.min) && (u || g[{
                                xAxis: "zoomX",
                                yAxis: "zoomY"
                            }[d.coll]]) && q(k) && q(e)) {
                                var l = d.horiz
                                  , n = "touchend" === c.type ? d.minPixelPadding : 0
                                  , m = d.toValue((l ? k : e) + n);
                                l = d.toValue((l ? k + b : e + h) - n);
                                v[d.coll].push({
                                    axis: d,
                                    min: Math.min(m, l),
                                    max: Math.max(m, l)
                                });
                                p = !0
                            }
                        }),
                        p && m(n, "selection", v, function(b) {
                            n.zoom(d(b, u ? {
                                animation: !1
                            } : null))
                        });
                    q(n.index) && (this.selectionMarker = this.selectionMarker.destroy());
                    u && this.scaleGroups()
                }
                n && q(n.index) && (r(n.container, {
                    cursor: n._cursor
                }),
                n.cancelClick = 10 < this.hasDragged,
                n.mouseIsDown = this.hasDragged = this.hasPinched = !1,
                this.pinchDown = [])
            }
            ;
            c.prototype.findNearestKDPoint = function(a, d, c) {
                var n = this.chart
                  , l = n.hoverPoint;
                n = n.tooltip;
                if (l && n && n.isStickyOnContact())
                    return l;
                var k;
                a.forEach(function(e) {
                    var b = !(e.noSharedTooltip && d) && 0 > e.options.findNearestPointBy.indexOf("y");
                    e = e.searchPoint(c, b);
                    if ((b = x(e, !0) && e.series) && !(b = !x(k, !0))) {
                        b = k.distX - e.distX;
                        var a = k.dist - e.dist
                          , l = (e.series.group && e.series.group.zIndex) - (k.series.group && k.series.group.zIndex);
                        b = 0 < (0 !== b && d ? b : 0 !== a ? a : 0 !== l ? l : k.series.index > e.series.index ? -1 : 1)
                    }
                    b && (k = e)
                });
                return k
            }
            ;
            c.prototype.getChartCoordinatesFromPoint = function(a, d) {
                var c = a.series
                  , g = c.xAxis;
                c = c.yAxis;
                var l = a.shapeArgs;
                if (g && c) {
                    var k = M(a.clientX, a.plotX)
                      , e = a.plotY || 0;
                    a.isNode && l && q(l.x) && q(l.y) && (k = l.x,
                    e = l.y);
                    return d ? {
                        chartX: c.len + c.pos - e,
                        chartY: g.len + g.pos - k
                    } : {
                        chartX: k + g.pos,
                        chartY: e + c.pos
                    }
                }
                if (l && l.x && l.y)
                    return {
                        chartX: l.x,
                        chartY: l.y
                    }
            }
            ;
            c.prototype.getChartPosition = function() {
                if (this.chartPosition)
                    return this.chartPosition;
                var a = this.chart.container
                  , d = I(a);
                this.chartPosition = {
                    left: d.left,
                    top: d.top,
                    scaleX: 1,
                    scaleY: 1
                };
                var c = a.offsetWidth;
                a = a.offsetHeight;
                2 < c && 2 < a && (this.chartPosition.scaleX = d.width / c,
                this.chartPosition.scaleY = d.height / a);
                return this.chartPosition
            }
            ;
            c.prototype.getCoordinates = function(a) {
                var d = {
                    xAxis: [],
                    yAxis: []
                };
                this.chart.axes.forEach(function(c) {
                    d[c.isXAxis ? "xAxis" : "yAxis"].push({
                        axis: c,
                        value: c.toValue(a[c.horiz ? "chartX" : "chartY"])
                    })
                });
                return d
            }
            ;
            c.prototype.getHoverData = function(a, d, c, u, l, k) {
                var e = [];
                u = !(!u || !a);
                var b = function(b) {
                    return b.visible && !(!l && b.directTouch) && M(b.options.enableMouseTracking, !0)
                }
                  , h = {
                    chartX: k ? k.chartX : void 0,
                    chartY: k ? k.chartY : void 0,
                    shared: l
                };
                m(this, "beforeGetHoverData", h);
                var n = d && !d.stickyTracking ? [d] : c.filter(function(e) {
                    return e.stickyTracking && (h.filter || b)(e)
                });
                var p = u || !k ? a : this.findNearestKDPoint(n, l, k);
                d = p && p.series;
                p && (l && !d.noSharedTooltip ? (n = c.filter(function(e) {
                    return h.filter ? h.filter(e) : b(e) && !e.noSharedTooltip
                }),
                n.forEach(function(b) {
                    var a = g(b.points, function(b) {
                        return b.x === p.x && !b.isNull
                    });
                    x(a) && (b.boosted && b.boost && (a = b.boost.getPoint(a)),
                    e.push(a))
                })) : e.push(p));
                h = {
                    hoverPoint: p
                };
                m(this, "afterGetHoverData", h);
                return {
                    hoverPoint: h.hoverPoint,
                    hoverSeries: d,
                    hoverPoints: e
                }
            }
            ;
            c.prototype.getPointFromEvent = function(a) {
                a = a.target;
                for (var d; a && !d; )
                    d = a.point,
                    a = a.parentNode;
                return d
            }
            ;
            c.prototype.onTrackerMouseOut = function(a) {
                a = a.relatedTarget || a.toElement;
                var d = this.chart.hoverSeries;
                this.isDirectTouch = !1;
                if (!(!d || !a || d.stickyTracking || this.inClass(a, "highcharts-tooltip") || this.inClass(a, "highcharts-series-" + d.index) && this.inClass(a, "highcharts-tracker")))
                    d.onMouseOut()
            }
            ;
            c.prototype.inClass = function(a, d) {
                for (var c; a; ) {
                    if (c = t(a, "class")) {
                        if (-1 !== c.indexOf(d))
                            return !0;
                        if (-1 !== c.indexOf("highcharts-container"))
                            return !1
                    }
                    a = a.parentElement
                }
            }
            ;
            c.prototype.init = function(a, d) {
                this.options = d;
                this.chart = a;
                this.runChartClick = !(!d.chart.events || !d.chart.events.click);
                this.pinchDown = [];
                this.lastValidTouch = {};
                B && (a.tooltip = new B(a,d.tooltip),
                this.followTouchMove = M(d.tooltip.followTouchMove, !0));
                this.setDOMEvents()
            }
            ;
            c.prototype.normalize = function(a, c) {
                var g = a.touches
                  , m = g ? g.length ? g.item(0) : M(g.changedTouches, a.changedTouches)[0] : a;
                c || (c = this.getChartPosition());
                g = m.pageX - c.left;
                m = m.pageY - c.top;
                g /= c.scaleX;
                m /= c.scaleY;
                return d(a, {
                    chartX: Math.round(g),
                    chartY: Math.round(m)
                })
            }
            ;
            c.prototype.onContainerClick = function(a) {
                var c = this.chart
                  , g = c.hoverPoint;
                a = this.normalize(a);
                var u = c.plotLeft
                  , l = c.plotTop;
                c.cancelClick || (g && this.inClass(a.target, "highcharts-tracker") ? (m(g.series, "click", d(a, {
                    point: g
                })),
                c.hoverPoint && g.firePointEvent("click", a)) : (d(a, this.getCoordinates(a)),
                c.isInsidePlot(a.chartX - u, a.chartY - l, {
                    visiblePlotOnly: !0
                }) && m(c, "click", a)))
            }
            ;
            c.prototype.onContainerMouseDown = function(a) {
                var d = 1 === ((a.buttons || a.button) & 1);
                a = this.normalize(a);
                if (f.isFirefox && 0 !== a.button)
                    this.onContainerMouseMove(a);
                if ("undefined" === typeof a.button || d)
                    this.zoomOption(a),
                    d && a.preventDefault && a.preventDefault(),
                    this.dragStart(a)
            }
            ;
            c.prototype.onContainerMouseLeave = function(a) {
                var d = E[M(c.hoverChartIndex, -1)]
                  , g = this.chart.tooltip;
                g && g.shouldStickOnContact() && this.inClass(a.relatedTarget, "highcharts-tooltip-container") || (a = this.normalize(a),
                d && (a.relatedTarget || a.toElement) && (d.pointer.reset(),
                d.pointer.chartPosition = void 0),
                g && !g.isHidden && this.reset())
            }
            ;
            c.prototype.onContainerMouseEnter = function(a) {
                delete this.chartPosition
            }
            ;
            c.prototype.onContainerMouseMove = function(a) {
                var d = this.chart;
                a = this.normalize(a);
                this.setHoverChartIndex();
                a.preventDefault || (a.returnValue = !1);
                ("mousedown" === d.mouseIsDown || this.touchSelect(a)) && this.drag(a);
                d.openMenu || !this.inClass(a.target, "highcharts-tracker") && !d.isInsidePlot(a.chartX - d.plotLeft, a.chartY - d.plotTop, {
                    visiblePlotOnly: !0
                }) || (this.inClass(a.target, "highcharts-no-tooltip") ? this.reset(!1, 0) : this.runPointActions(a))
            }
            ;
            c.prototype.onDocumentTouchEnd = function(a) {
                var d = E[M(c.hoverChartIndex, -1)];
                d && d.pointer.drop(a)
            }
            ;
            c.prototype.onContainerTouchMove = function(a) {
                if (this.touchSelect(a))
                    this.onContainerMouseMove(a);
                else
                    this.touch(a)
            }
            ;
            c.prototype.onContainerTouchStart = function(a) {
                if (this.touchSelect(a))
                    this.onContainerMouseDown(a);
                else
                    this.zoomOption(a),
                    this.touch(a, !0)
            }
            ;
            c.prototype.onDocumentMouseMove = function(a) {
                var d = this.chart
                  , c = this.chartPosition;
                a = this.normalize(a, c);
                var g = d.tooltip;
                !c || g && g.isStickyOnContact() || d.isInsidePlot(a.chartX - d.plotLeft, a.chartY - d.plotTop, {
                    visiblePlotOnly: !0
                }) || this.inClass(a.target, "highcharts-tracker") || this.reset()
            }
            ;
            c.prototype.onDocumentMouseUp = function(a) {
                var d = E[M(c.hoverChartIndex, -1)];
                d && d.pointer.drop(a)
            }
            ;
            c.prototype.pinch = function(a) {
                var c = this
                  , g = c.chart
                  , u = c.pinchDown
                  , l = a.touches || []
                  , k = l.length
                  , e = c.lastValidTouch
                  , b = c.hasZoom
                  , h = {}
                  , v = 1 === k && (c.inClass(a.target, "highcharts-tracker") && g.runTrackerClick || c.runChartClick)
                  , p = {}
                  , G = c.selectionMarker;
                1 < k ? c.initiated = !0 : 1 === k && this.followTouchMove && (c.initiated = !1);
                b && c.initiated && !v && !1 !== a.cancelable && a.preventDefault();
                [].map.call(l, function(b) {
                    return c.normalize(b)
                });
                "touchstart" === a.type ? ([].forEach.call(l, function(b, a) {
                    u[a] = {
                        chartX: b.chartX,
                        chartY: b.chartY
                    }
                }),
                e.x = [u[0].chartX, u[1] && u[1].chartX],
                e.y = [u[0].chartY, u[1] && u[1].chartY],
                g.axes.forEach(function(b) {
                    if (b.zoomEnabled) {
                        var a = g.bounds[b.horiz ? "h" : "v"]
                          , e = b.minPixelPadding
                          , h = b.toPixels(Math.min(M(b.options.min, b.dataMin), b.dataMin))
                          , d = b.toPixels(Math.max(M(b.options.max, b.dataMax), b.dataMax))
                          , k = Math.max(h, d);
                        a.min = Math.min(b.pos, Math.min(h, d) - e);
                        a.max = Math.max(b.pos + b.len, k + e)
                    }
                }),
                c.res = !0) : c.followTouchMove && 1 === k ? this.runPointActions(c.normalize(a)) : u.length && (m(g, "touchpan", {
                    originalEvent: a
                }, function() {
                    G || (c.selectionMarker = G = d({
                        destroy: D,
                        touch: !0
                    }, g.plotBox));
                    c.pinchTranslate(u, l, h, G, p, e);
                    c.hasPinched = b;
                    c.scaleGroups(h, p)
                }),
                c.res && (c.res = !1,
                this.reset(!1, 0)))
            }
            ;
            c.prototype.pinchTranslate = function(a, d, c, g, l, k) {
                this.zoomHor && this.pinchTranslateDirection(!0, a, d, c, g, l, k);
                this.zoomVert && this.pinchTranslateDirection(!1, a, d, c, g, l, k)
            }
            ;
            c.prototype.pinchTranslateDirection = function(a, d, c, g, l, k, e, b) {
                var h = this.chart
                  , v = a ? "x" : "y"
                  , p = a ? "X" : "Y"
                  , n = "chart" + p
                  , m = a ? "width" : "height"
                  , u = h["plot" + (a ? "Left" : "Top")]
                  , q = h.inverted
                  , f = h.bounds[a ? "h" : "v"]
                  , r = 1 === d.length
                  , x = d[0][n]
                  , t = !r && d[1][n];
                d = function() {
                    "number" === typeof C && 20 < Math.abs(x - t) && (A = b || Math.abs(T - C) / Math.abs(x - t));
                    N = (u - T) / A + x;
                    y = h["plot" + (a ? "Width" : "Height")] / A
                }
                ;
                var y, N, A = b || 1, T = c[0][n], C = !r && c[1][n];
                d();
                c = N;
                if (c < f.min) {
                    c = f.min;
                    var J = !0
                } else
                    c + y > f.max && (c = f.max - y,
                    J = !0);
                J ? (T -= .8 * (T - e[v][0]),
                "number" === typeof C && (C -= .8 * (C - e[v][1])),
                d()) : e[v] = [T, C];
                q || (k[v] = N - u,
                k[m] = y);
                k = q ? 1 / A : A;
                l[m] = y;
                l[v] = c;
                g[q ? a ? "scaleY" : "scaleX" : "scale" + p] = A;
                g["translate" + p] = k * u + (T - k * x)
            }
            ;
            c.prototype.reset = function(a, d) {
                var c = this.chart
                  , g = c.hoverSeries
                  , l = c.hoverPoint
                  , k = c.hoverPoints
                  , e = c.tooltip
                  , b = e && e.shared ? k : l;
                a && b && K(b).forEach(function(b) {
                    b.series.isCartesian && "undefined" === typeof b.plotX && (a = !1)
                });
                if (a)
                    e && b && K(b).length && (e.refresh(b),
                    e.shared && k ? k.forEach(function(b) {
                        b.setState(b.state, !0);
                        b.series.isCartesian && (b.series.xAxis.crosshair && b.series.xAxis.drawCrosshair(null, b),
                        b.series.yAxis.crosshair && b.series.yAxis.drawCrosshair(null, b))
                    }) : l && (l.setState(l.state, !0),
                    c.axes.forEach(function(b) {
                        b.crosshair && l.series[b.coll] === b && b.drawCrosshair(null, l)
                    })));
                else {
                    if (l)
                        l.onMouseOut();
                    k && k.forEach(function(b) {
                        b.setState()
                    });
                    if (g)
                        g.onMouseOut();
                    e && e.hide(d);
                    this.unDocMouseMove && (this.unDocMouseMove = this.unDocMouseMove());
                    c.axes.forEach(function(b) {
                        b.hideCrosshair()
                    });
                    this.hoverX = c.hoverPoints = c.hoverPoint = null
                }
            }
            ;
            c.prototype.runPointActions = function(a, d) {
                var n = this.chart
                  , m = n.tooltip && n.tooltip.options.enabled ? n.tooltip : void 0
                  , l = m ? m.shared : !1
                  , k = d || n.hoverPoint
                  , e = k && k.series || n.hoverSeries;
                d = this.getHoverData(k, e, n.series, (!a || "touchmove" !== a.type) && (!!d || e && e.directTouch && this.isDirectTouch), l, a);
                k = d.hoverPoint;
                e = d.hoverSeries;
                var b = d.hoverPoints;
                d = e && e.tooltipOptions.followPointer && !e.tooltipOptions.split;
                var h = l && e && !e.noSharedTooltip;
                if (k && (k !== n.hoverPoint || m && m.isHidden)) {
                    (n.hoverPoints || []).forEach(function(a) {
                        -1 === b.indexOf(a) && a.setState()
                    });
                    if (n.hoverSeries !== e)
                        e.onMouseOver();
                    this.applyInactiveState(b);
                    (b || []).forEach(function(b) {
                        b.setState("hover")
                    });
                    n.hoverPoint && n.hoverPoint.firePointEvent("mouseOut");
                    if (!k.series)
                        return;
                    n.hoverPoints = b;
                    n.hoverPoint = k;
                    k.firePointEvent("mouseOver", void 0, function() {
                        m && k && m.refresh(h ? b : k, a)
                    })
                } else
                    d && m && !m.isHidden && (l = m.getAnchor([{}], a),
                    n.isInsidePlot(l[0], l[1], {
                        visiblePlotOnly: !0
                    }) && m.updatePosition({
                        plotX: l[0],
                        plotY: l[1]
                    }));
                this.unDocMouseMove || (this.unDocMouseMove = w(n.container.ownerDocument, "mousemove", function(b) {
                    var a = E[c.hoverChartIndex];
                    if (a)
                        a.pointer.onDocumentMouseMove(b)
                }),
                this.eventsToUnbind.push(this.unDocMouseMove));
                n.axes.forEach(function(e) {
                    var h = M((e.crosshair || {}).snap, !0), d;
                    h && ((d = n.hoverPoint) && d.series[e.coll] === e || (d = g(b, function(b) {
                        return b.series && b.series[e.coll] === e
                    })));
                    d || !h ? e.drawCrosshair(a, d) : e.hideCrosshair()
                })
            }
            ;
            c.prototype.scaleGroups = function(a, d) {
                var c = this.chart;
                c.series.forEach(function(g) {
                    var l = a || g.getPlotBox();
                    g.group && (g.xAxis && g.xAxis.zoomEnabled || c.mapView) && (g.group.attr(l),
                    g.markerGroup && (g.markerGroup.attr(l),
                    g.markerGroup.clip(d ? c.clipRect : null)),
                    g.dataLabelsGroup && g.dataLabelsGroup.attr(l))
                });
                c.clipRect.attr(d || c.clipBox)
            }
            ;
            c.prototype.setDOMEvents = function() {
                var a = this
                  , d = this.chart.container
                  , g = d.ownerDocument;
                d.onmousedown = this.onContainerMouseDown.bind(this);
                d.onmousemove = this.onContainerMouseMove.bind(this);
                d.onclick = this.onContainerClick.bind(this);
                this.eventsToUnbind.push(w(d, "mouseenter", this.onContainerMouseEnter.bind(this)));
                this.eventsToUnbind.push(w(d, "mouseleave", this.onContainerMouseLeave.bind(this)));
                c.unbindDocumentMouseUp || (c.unbindDocumentMouseUp = w(g, "mouseup", this.onDocumentMouseUp.bind(this)));
                for (var m = this.chart.renderTo.parentElement; m && "BODY" !== m.tagName; )
                    this.eventsToUnbind.push(w(m, "scroll", function() {
                        delete a.chartPosition
                    })),
                    m = m.parentElement;
                f.hasTouch && (this.eventsToUnbind.push(w(d, "touchstart", this.onContainerTouchStart.bind(this), {
                    passive: !1
                })),
                this.eventsToUnbind.push(w(d, "touchmove", this.onContainerTouchMove.bind(this), {
                    passive: !1
                })),
                c.unbindDocumentTouchEnd || (c.unbindDocumentTouchEnd = w(g, "touchend", this.onDocumentTouchEnd.bind(this), {
                    passive: !1
                })))
            }
            ;
            c.prototype.setHoverChartIndex = function() {
                var a = this.chart
                  , d = f.charts[M(c.hoverChartIndex, -1)];
                if (d && d !== a)
                    d.pointer.onContainerMouseLeave({
                        relatedTarget: a.container
                    });
                d && d.mouseIsDown || (c.hoverChartIndex = a.index)
            }
            ;
            c.prototype.touch = function(a, d) {
                var c = this.chart, g;
                this.setHoverChartIndex();
                if (1 === a.touches.length)
                    if (a = this.normalize(a),
                    (g = c.isInsidePlot(a.chartX - c.plotLeft, a.chartY - c.plotTop, {
                        visiblePlotOnly: !0
                    })) && !c.openMenu) {
                        d && this.runPointActions(a);
                        if ("touchmove" === a.type) {
                            d = this.pinchDown;
                            var l = d[0] ? 4 <= Math.sqrt(Math.pow(d[0].chartX - a.chartX, 2) + Math.pow(d[0].chartY - a.chartY, 2)) : !1
                        }
                        M(l, !0) && this.pinch(a)
                    } else
                        d && this.reset();
                else
                    2 === a.touches.length && this.pinch(a)
            }
            ;
            c.prototype.touchSelect = function(a) {
                return !(!this.chart.options.chart.zooming.singleTouch || !a.touches || 1 !== a.touches.length)
            }
            ;
            c.prototype.zoomOption = function(a) {
                var d = this.chart
                  , c = d.options.chart;
                d = d.inverted;
                var g = c.zooming.type || "";
                /touch/.test(a.type) && (g = M(c.zooming.pinchType, g));
                this.zoomX = a = /x/.test(g);
                this.zoomY = c = /y/.test(g);
                this.zoomHor = a && !d || c && d;
                this.zoomVert = c && !d || a && d;
                this.hasZoom = a || c
            }
            ;
            return c
        }();
        "";
        return c
    });
    O(f, "Core/MSPointer.js", [f["Core/Globals.js"], f["Core/Pointer.js"], f["Core/Utilities.js"]], function(c, f, B) {
        function D() {
            var a = [];
            a.item = function(a) {
                return this[a]
            }
            ;
            g(q, function(d) {
                a.push({
                    pageX: d.pageX,
                    pageY: d.pageY,
                    target: d.target
                })
            });
            return a
        }
        function z(a, d, c, g) {
            var m = H[f.hoverChartIndex || NaN];
            "touch" !== a.pointerType && a.pointerType !== a.MSPOINTER_TYPE_TOUCH || !m || (m = m.pointer,
            g(a),
            m[d]({
                type: c,
                target: a.currentTarget,
                preventDefault: t,
                touches: D()
            }))
        }
        var E = this && this.__extends || function() {
            var a = function(d, c) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return a(d, c)
            };
            return function(d, c) {
                function g() {
                    this.constructor = d
                }
                a(d, c);
                d.prototype = null === c ? Object.create(c) : (g.prototype = c.prototype,
                new g)
            }
        }()
          , H = c.charts
          , w = c.doc
          , t = c.noop
          , r = c.win
          , a = B.addEvent
          , d = B.css
          , g = B.objectEach
          , m = B.removeEvent
          , q = {}
          , x = !!r.PointerEvent;
        return function(g) {
            function f() {
                return null !== g && g.apply(this, arguments) || this
            }
            E(f, g);
            f.isRequired = function() {
                return !(c.hasTouch || !r.PointerEvent && !r.MSPointerEvent)
            }
            ;
            f.prototype.batchMSEvents = function(a) {
                a(this.chart.container, x ? "pointerdown" : "MSPointerDown", this.onContainerPointerDown);
                a(this.chart.container, x ? "pointermove" : "MSPointerMove", this.onContainerPointerMove);
                a(w, x ? "pointerup" : "MSPointerUp", this.onDocumentPointerUp)
            }
            ;
            f.prototype.destroy = function() {
                this.batchMSEvents(m);
                g.prototype.destroy.call(this)
            }
            ;
            f.prototype.init = function(a, c) {
                g.prototype.init.call(this, a, c);
                this.hasZoom && d(a.container, {
                    "-ms-touch-action": "none",
                    "touch-action": "none"
                })
            }
            ;
            f.prototype.onContainerPointerDown = function(a) {
                z(a, "onContainerTouchStart", "touchstart", function(a) {
                    q[a.pointerId] = {
                        pageX: a.pageX,
                        pageY: a.pageY,
                        target: a.currentTarget
                    }
                })
            }
            ;
            f.prototype.onContainerPointerMove = function(a) {
                z(a, "onContainerTouchMove", "touchmove", function(a) {
                    q[a.pointerId] = {
                        pageX: a.pageX,
                        pageY: a.pageY
                    };
                    q[a.pointerId].target || (q[a.pointerId].target = a.currentTarget)
                })
            }
            ;
            f.prototype.onDocumentPointerUp = function(a) {
                z(a, "onDocumentTouchEnd", "touchend", function(a) {
                    delete q[a.pointerId]
                })
            }
            ;
            f.prototype.setDOMEvents = function() {
                g.prototype.setDOMEvents.call(this);
                (this.hasZoom || this.followTouchMove) && this.batchMSEvents(a)
            }
            ;
            return f
        }(f)
    });
    O(f, "Core/Legend/Legend.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/FormatUtilities.js"], f["Core/Globals.js"], f["Core/Series/Point.js"], f["Core/Renderer/RendererUtilities.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E) {
        var D = c.animObject
          , w = c.setAnimation
          , t = f.format;
        c = B.isFirefox;
        var r = B.marginNames;
        B = B.win;
        var a = z.distribute
          , d = E.addEvent
          , g = E.createElement
          , m = E.css
          , q = E.defined
          , x = E.discardElement
          , J = E.find
          , I = E.fireEvent
          , M = E.isNumber
          , K = E.merge
          , C = E.pick
          , A = E.relativeLength
          , y = E.stableSort
          , n = E.syncTimeout;
        z = E.wrap;
        E = function() {
            function c(a, d) {
                this.allItems = [];
                this.contentGroup = this.box = void 0;
                this.display = !1;
                this.group = void 0;
                this.offsetWidth = this.maxLegendWidth = this.maxItemWidth = this.legendWidth = this.legendHeight = this.lastLineHeight = this.lastItemY = this.itemY = this.itemX = this.itemMarginTop = this.itemMarginBottom = this.itemHeight = this.initialItemY = 0;
                this.options = void 0;
                this.padding = 0;
                this.pages = [];
                this.proximate = !1;
                this.scrollGroup = void 0;
                this.widthOption = this.totalItemWidth = this.titleHeight = this.symbolWidth = this.symbolHeight = 0;
                this.chart = a;
                this.init(a, d)
            }
            c.prototype.init = function(a, k) {
                this.chart = a;
                this.setOptions(k);
                k.enabled && (this.render(),
                d(this.chart, "endResize", function() {
                    this.legend.positionCheckboxes()
                }),
                this.proximate ? this.unchartrender = d(this.chart, "render", function() {
                    this.legend.proximatePositions();
                    this.legend.positionItems()
                }) : this.unchartrender && this.unchartrender())
            }
            ;
            c.prototype.setOptions = function(a) {
                var d = C(a.padding, 8);
                this.options = a;
                this.chart.styledMode || (this.itemStyle = a.itemStyle,
                this.itemHiddenStyle = K(this.itemStyle, a.itemHiddenStyle));
                this.itemMarginTop = a.itemMarginTop || 0;
                this.itemMarginBottom = a.itemMarginBottom || 0;
                this.padding = d;
                this.initialItemY = d - 5;
                this.symbolWidth = C(a.symbolWidth, 16);
                this.pages = [];
                this.proximate = "proximate" === a.layout && !this.chart.inverted;
                this.baseline = void 0
            }
            ;
            c.prototype.update = function(a, d) {
                var e = this.chart;
                this.setOptions(K(!0, this.options, a));
                this.destroy();
                e.isDirtyLegend = e.isDirtyBox = !0;
                C(d, !0) && e.redraw();
                I(this, "afterUpdate")
            }
            ;
            c.prototype.colorizeItem = function(a, d) {
                a.legendGroup[d ? "removeClass" : "addClass"]("highcharts-legend-item-hidden");
                if (!this.chart.styledMode) {
                    var e = this.options
                      , b = a.legendItem
                      , h = a.legendLine
                      , k = a.legendSymbol
                      , c = this.itemHiddenStyle.color;
                    e = d ? e.itemStyle.color : c;
                    var l = d ? a.color || c : c
                      , g = a.options && a.options.marker
                      , n = {
                        fill: l
                    };
                    b && b.css({
                        fill: e,
                        color: e
                    });
                    h && h.attr({
                        stroke: l
                    });
                    k && (g && k.isMarker && (n = a.pointAttribs(),
                    d || (n.stroke = n.fill = c)),
                    k.attr(n))
                }
                I(this, "afterColorizeItem", {
                    item: a,
                    visible: d
                })
            }
            ;
            c.prototype.positionItems = function() {
                this.allItems.forEach(this.positionItem, this);
                this.chart.isResizing || this.positionCheckboxes()
            }
            ;
            c.prototype.positionItem = function(a) {
                var d = this
                  , e = this.options
                  , b = e.symbolPadding
                  , h = !e.rtl
                  , c = a._legendItemPos;
                e = c[0];
                c = c[1];
                var p = a.checkbox
                  , l = a.legendGroup;
                l && l.element && (b = {
                    translateX: h ? e : this.legendWidth - e - 2 * b - 4,
                    translateY: c
                },
                h = function() {
                    I(d, "afterPositionItem", {
                        item: a
                    })
                }
                ,
                q(l.translateY) ? l.animate(b, void 0, h) : (l.attr(b),
                h()));
                p && (p.x = e,
                p.y = c)
            }
            ;
            c.prototype.destroyItem = function(a) {
                var d = a.checkbox;
                ["legendItem", "legendLine", "legendSymbol", "legendGroup"].forEach(function(e) {
                    a[e] && (a[e] = a[e].destroy())
                });
                d && x(a.checkbox)
            }
            ;
            c.prototype.destroy = function() {
                function a(a) {
                    this[a] && (this[a] = this[a].destroy())
                }
                this.getAllItems().forEach(function(d) {
                    ["legendItem", "legendGroup"].forEach(a, d)
                });
                "clipRect up down pager nav box title group".split(" ").forEach(a, this);
                this.display = null
            }
            ;
            c.prototype.positionCheckboxes = function() {
                var a = this.group && this.group.alignAttr
                  , d = this.clipHeight || this.legendHeight
                  , e = this.titleHeight;
                if (a) {
                    var b = a.translateY;
                    this.allItems.forEach(function(h) {
                        var k = h.checkbox;
                        if (k) {
                            var c = b + e + k.y + (this.scrollOffset || 0) + 3;
                            m(k, {
                                left: a.translateX + h.checkboxOffset + k.x - 20 + "px",
                                top: c + "px",
                                display: this.proximate || c > b - 6 && c < b + d - 6 ? "" : "none"
                            })
                        }
                    }, this)
                }
            }
            ;
            c.prototype.renderTitle = function() {
                var a = this.options
                  , d = this.padding
                  , e = a.title
                  , b = 0;
                e.text && (this.title || (this.title = this.chart.renderer.label(e.text, d - 3, d - 4, void 0, void 0, void 0, a.useHTML, void 0, "legend-title").attr({
                    zIndex: 1
                }),
                this.chart.styledMode || this.title.css(e.style),
                this.title.add(this.group)),
                e.width || this.title.css({
                    width: this.maxLegendWidth + "px"
                }),
                a = this.title.getBBox(),
                b = a.height,
                this.offsetWidth = a.width,
                this.contentGroup.attr({
                    translateY: b
                }));
                this.titleHeight = b
            }
            ;
            c.prototype.setText = function(a) {
                var d = this.options;
                a.legendItem.attr({
                    text: d.labelFormat ? t(d.labelFormat, a, this.chart) : d.labelFormatter.call(a)
                })
            }
            ;
            c.prototype.renderItem = function(a) {
                var d = this.chart
                  , e = d.renderer
                  , b = this.options
                  , h = this.symbolWidth
                  , c = b.symbolPadding || 0
                  , p = this.itemStyle
                  , g = this.itemHiddenStyle
                  , l = "horizontal" === b.layout ? C(b.itemDistance, 20) : 0
                  , n = !b.rtl
                  , m = !a.series
                  , q = !m && a.series.drawLegendSymbol ? a.series : a
                  , u = q.options
                  , f = this.createCheckboxForItem && u && u.showCheckbox
                  , r = b.useHTML
                  , x = a.options.className
                  , N = a.legendItem;
                u = h + c + l + (f ? 20 : 0);
                N || (a.legendGroup = e.g("legend-item").addClass("highcharts-" + q.type + "-series highcharts-color-" + a.colorIndex + (x ? " " + x : "") + (m ? " highcharts-series-" + a.index : "")).attr({
                    zIndex: 1
                }).add(this.scrollGroup),
                a.legendItem = N = e.text("", n ? h + c : -c, this.baseline || 0, r),
                d.styledMode || N.css(K(a.visible ? p : g)),
                N.attr({
                    align: n ? "left" : "right",
                    zIndex: 2
                }).add(a.legendGroup),
                this.baseline || (this.fontMetrics = e.fontMetrics(d.styledMode ? 12 : p.fontSize, N),
                this.baseline = this.fontMetrics.f + 3 + this.itemMarginTop,
                N.attr("y", this.baseline),
                this.symbolHeight = b.symbolHeight || this.fontMetrics.f,
                b.squareSymbol && (this.symbolWidth = C(b.symbolWidth, Math.max(this.symbolHeight, 16)),
                u = this.symbolWidth + c + l + (f ? 20 : 0),
                n && N.attr("x", this.symbolWidth + c))),
                q.drawLegendSymbol(this, a),
                this.setItemEvents && this.setItemEvents(a, N, r));
                f && !a.checkbox && this.createCheckboxForItem && this.createCheckboxForItem(a);
                this.colorizeItem(a, a.visible);
                !d.styledMode && p.width || N.css({
                    width: (b.itemWidth || this.widthOption || d.spacingBox.width) - u + "px"
                });
                this.setText(a);
                d = N.getBBox();
                e = this.fontMetrics && this.fontMetrics.h || 0;
                a.itemWidth = a.checkboxOffset = b.itemWidth || a.legendItemWidth || d.width + u;
                this.maxItemWidth = Math.max(this.maxItemWidth, a.itemWidth);
                this.totalItemWidth += a.itemWidth;
                this.itemHeight = a.itemHeight = Math.round(a.legendItemHeight || (d.height > 1.5 * e ? d.height : e))
            }
            ;
            c.prototype.layoutItem = function(a) {
                var d = this.options
                  , e = this.padding
                  , b = "horizontal" === d.layout
                  , h = a.itemHeight
                  , c = this.itemMarginBottom
                  , p = this.itemMarginTop
                  , g = b ? C(d.itemDistance, 20) : 0
                  , l = this.maxLegendWidth;
                d = d.alignColumns && this.totalItemWidth > l ? this.maxItemWidth : a.itemWidth;
                b && this.itemX - e + d > l && (this.itemX = e,
                this.lastLineHeight && (this.itemY += p + this.lastLineHeight + c),
                this.lastLineHeight = 0);
                this.lastItemY = p + this.itemY + c;
                this.lastLineHeight = Math.max(h, this.lastLineHeight);
                a._legendItemPos = [this.itemX, this.itemY];
                b ? this.itemX += d : (this.itemY += p + h + c,
                this.lastLineHeight = h);
                this.offsetWidth = this.widthOption || Math.max((b ? this.itemX - e - (a.checkbox ? 0 : g) : d) + e, this.offsetWidth)
            }
            ;
            c.prototype.getAllItems = function() {
                var a = [];
                this.chart.series.forEach(function(d) {
                    var e = d && d.options;
                    d && C(e.showInLegend, q(e.linkedTo) ? !1 : void 0, !0) && (a = a.concat(d.legendItems || ("point" === e.legendType ? d.data : d)))
                });
                I(this, "afterGetAllItems", {
                    allItems: a
                });
                return a
            }
            ;
            c.prototype.getAlignment = function() {
                var a = this.options;
                return this.proximate ? a.align.charAt(0) + "tv" : a.floating ? "" : a.align.charAt(0) + a.verticalAlign.charAt(0) + a.layout.charAt(0)
            }
            ;
            c.prototype.adjustMargins = function(a, d) {
                var e = this.chart
                  , b = this.options
                  , h = this.getAlignment();
                h && [/(lth|ct|rth)/, /(rtv|rm|rbv)/, /(rbh|cb|lbh)/, /(lbv|lm|ltv)/].forEach(function(c, k) {
                    c.test(h) && !q(a[k]) && (e[r[k]] = Math.max(e[r[k]], e.legend[(k + 1) % 2 ? "legendHeight" : "legendWidth"] + [1, -1, -1, 1][k] * b[k % 2 ? "x" : "y"] + C(b.margin, 12) + d[k] + (e.titleOffset[k] || 0)))
                })
            }
            ;
            c.prototype.proximatePositions = function() {
                var d = this.chart
                  , c = []
                  , e = "left" === this.options.align;
                this.allItems.forEach(function(a) {
                    var b;
                    var k = e;
                    if (a.yAxis) {
                        a.xAxis.options.reversed && (k = !k);
                        a.points && (b = J(k ? a.points : a.points.slice(0).reverse(), function(a) {
                            return M(a.plotY)
                        }));
                        k = this.itemMarginTop + a.legendItem.getBBox().height + this.itemMarginBottom;
                        var p = a.yAxis.top - d.plotTop;
                        a.visible ? (b = b ? b.plotY : a.yAxis.height,
                        b += p - .3 * k) : b = p + a.yAxis.height;
                        c.push({
                            target: b,
                            size: k,
                            item: a
                        })
                    }
                }, this);
                a(c, d.plotHeight).forEach(function(a) {
                    a.item._legendItemPos && a.pos && (a.item._legendItemPos[1] = d.plotTop - d.spacing[0] + a.pos)
                })
            }
            ;
            c.prototype.render = function() {
                var a = this.chart
                  , d = a.renderer
                  , e = this.options
                  , b = this.padding
                  , h = this.getAllItems()
                  , c = this.group
                  , p = this.box;
                this.itemX = b;
                this.itemY = this.initialItemY;
                this.lastItemY = this.offsetWidth = 0;
                this.widthOption = A(e.width, a.spacingBox.width - b);
                var g = a.spacingBox.width - 2 * b - e.x;
                -1 < ["rm", "lm"].indexOf(this.getAlignment().substring(0, 2)) && (g /= 2);
                this.maxLegendWidth = this.widthOption || g;
                c || (this.group = c = d.g("legend").addClass(e.className || "").attr({
                    zIndex: 7
                }).add(),
                this.contentGroup = d.g().attr({
                    zIndex: 1
                }).add(c),
                this.scrollGroup = d.g().add(this.contentGroup));
                this.renderTitle();
                y(h, function(a, b) {
                    return (a.options && a.options.legendIndex || 0) - (b.options && b.options.legendIndex || 0)
                });
                e.reversed && h.reverse();
                this.allItems = h;
                this.display = g = !!h.length;
                this.itemHeight = this.totalItemWidth = this.maxItemWidth = this.lastLineHeight = 0;
                h.forEach(this.renderItem, this);
                h.forEach(this.layoutItem, this);
                h = (this.widthOption || this.offsetWidth) + b;
                var n = this.lastItemY + this.lastLineHeight + this.titleHeight;
                n = this.handleOverflow(n);
                n += b;
                p || (this.box = p = d.rect().addClass("highcharts-legend-box").attr({
                    r: e.borderRadius
                }).add(c));
                a.styledMode || p.attr({
                    stroke: e.borderColor,
                    "stroke-width": e.borderWidth || 0,
                    fill: e.backgroundColor || "none"
                }).shadow(e.shadow);
                if (0 < h && 0 < n)
                    p[p.placed ? "animate" : "attr"](p.crisp.call({}, {
                        x: 0,
                        y: 0,
                        width: h,
                        height: n
                    }, p.strokeWidth()));
                c[g ? "show" : "hide"]();
                a.styledMode && "none" === c.getStyle("display") && (h = n = 0);
                this.legendWidth = h;
                this.legendHeight = n;
                g && this.align();
                this.proximate || this.positionItems();
                I(this, "afterRender")
            }
            ;
            c.prototype.align = function(a) {
                void 0 === a && (a = this.chart.spacingBox);
                var d = this.chart
                  , e = this.options
                  , b = a.y;
                /(lth|ct|rth)/.test(this.getAlignment()) && 0 < d.titleOffset[0] ? b += d.titleOffset[0] : /(lbh|cb|rbh)/.test(this.getAlignment()) && 0 < d.titleOffset[2] && (b -= d.titleOffset[2]);
                b !== a.y && (a = K(a, {
                    y: b
                }));
                d.hasRendered || (this.group.placed = !1);
                this.group.align(K(e, {
                    width: this.legendWidth,
                    height: this.legendHeight,
                    verticalAlign: this.proximate ? "top" : e.verticalAlign
                }), !0, a)
            }
            ;
            c.prototype.handleOverflow = function(a) {
                var d = this, e = this.chart, b = e.renderer, h = this.options, c = h.y, p = "top" === h.verticalAlign, g = this.padding, l = h.maxHeight, n = h.navigation, m = C(n.animation, !0), u = n.arrowSize || 12, q = this.pages, f = this.allItems, r = function(a) {
                    "number" === typeof a ? A.attr({
                        height: a
                    }) : A && (d.clipRect = A.destroy(),
                    d.contentGroup.clip());
                    d.contentGroup.div && (d.contentGroup.div.style.clip = a ? "rect(" + g + "px,9999px," + (g + a) + "px,0)" : "auto")
                }, x = function(a) {
                    d[a] = b.circle(0, 0, 1.3 * u).translate(u / 2, u / 2).add(y);
                    e.styledMode || d[a].attr("fill", "rgba(0,0,0,0.0001)");
                    return d[a]
                }, N, t;
                c = e.spacingBox.height + (p ? -c : c) - g;
                var y = this.nav
                  , A = this.clipRect;
                "horizontal" !== h.layout || "middle" === h.verticalAlign || h.floating || (c /= 2);
                l && (c = Math.min(c, l));
                q.length = 0;
                a && 0 < c && a > c && !1 !== n.enabled ? (this.clipHeight = N = Math.max(c - 20 - this.titleHeight - g, 0),
                this.currentPage = C(this.currentPage, 1),
                this.fullHeight = a,
                f.forEach(function(a, b) {
                    var e = a._legendItemPos[1]
                      , d = Math.round(a.legendItem.getBBox().height)
                      , h = q.length;
                    if (!h || e - q[h - 1] > N && (t || e) !== q[h - 1])
                        q.push(t || e),
                        h++;
                    a.pageIx = h - 1;
                    t && (f[b - 1].pageIx = h - 1);
                    b === f.length - 1 && e + d - q[h - 1] > N && d <= N && (q.push(e),
                    a.pageIx = h);
                    e !== t && (t = e)
                }),
                A || (A = d.clipRect = b.clipRect(0, g, 9999, 0),
                d.contentGroup.clip(A)),
                r(N),
                y || (this.nav = y = b.g().attr({
                    zIndex: 1
                }).add(this.group),
                this.up = b.symbol("triangle", 0, 0, u, u).add(y),
                x("upTracker").on("click", function() {
                    d.scroll(-1, m)
                }),
                this.pager = b.text("", 15, 10).addClass("highcharts-legend-navigation"),
                !e.styledMode && n.style && this.pager.css(n.style),
                this.pager.add(y),
                this.down = b.symbol("triangle-down", 0, 0, u, u).add(y),
                x("downTracker").on("click", function() {
                    d.scroll(1, m)
                })),
                d.scroll(0),
                a = c) : y && (r(),
                this.nav = y.destroy(),
                this.scrollGroup.attr({
                    translateY: 1
                }),
                this.clipHeight = 0);
                return a
            }
            ;
            c.prototype.scroll = function(a, d) {
                var e = this
                  , b = this.chart
                  , h = this.pages
                  , c = h.length
                  , k = this.clipHeight
                  , g = this.options.navigation
                  , l = this.pager
                  , m = this.padding
                  , u = this.currentPage + a;
                u > c && (u = c);
                0 < u && ("undefined" !== typeof d && w(d, b),
                this.nav.attr({
                    translateX: m,
                    translateY: k + this.padding + 7 + this.titleHeight,
                    visibility: "inherit"
                }),
                [this.up, this.upTracker].forEach(function(a) {
                    a.attr({
                        "class": 1 === u ? "highcharts-legend-nav-inactive" : "highcharts-legend-nav-active"
                    })
                }),
                l.attr({
                    text: u + "/" + c
                }),
                [this.down, this.downTracker].forEach(function(a) {
                    a.attr({
                        x: 18 + this.pager.getBBox().width,
                        "class": u === c ? "highcharts-legend-nav-inactive" : "highcharts-legend-nav-active"
                    })
                }, this),
                b.styledMode || (this.up.attr({
                    fill: 1 === u ? g.inactiveColor : g.activeColor
                }),
                this.upTracker.css({
                    cursor: 1 === u ? "default" : "pointer"
                }),
                this.down.attr({
                    fill: u === c ? g.inactiveColor : g.activeColor
                }),
                this.downTracker.css({
                    cursor: u === c ? "default" : "pointer"
                })),
                this.scrollOffset = -h[u - 1] + this.initialItemY,
                this.scrollGroup.animate({
                    translateY: this.scrollOffset
                }),
                this.currentPage = u,
                this.positionCheckboxes(),
                a = D(C(d, b.renderer.globalAnimation, !0)),
                n(function() {
                    I(e, "afterScroll", {
                        currentPage: u
                    })
                }, a.duration))
            }
            ;
            c.prototype.setItemEvents = function(a, d, e) {
                var b = this
                  , h = b.chart.renderer.boxWrapper
                  , c = a instanceof F
                  , k = "highcharts-legend-" + (c ? "point" : "series") + "-active"
                  , g = b.chart.styledMode
                  , l = function(e) {
                    b.allItems.forEach(function(b) {
                        a !== b && [b].concat(b.linkedSeries || []).forEach(function(a) {
                            a.setState(e, !c)
                        })
                    })
                };
                (e ? [d, a.legendSymbol] : [a.legendGroup]).forEach(function(e) {
                    if (e)
                        e.on("mouseover", function() {
                            a.visible && l("inactive");
                            a.setState("hover");
                            a.visible && h.addClass(k);
                            g || d.css(b.options.itemHoverStyle)
                        }).on("mouseout", function() {
                            b.chart.styledMode || d.css(K(a.visible ? b.itemStyle : b.itemHiddenStyle));
                            l("");
                            h.removeClass(k);
                            a.setState()
                        }).on("click", function(b) {
                            var e = function() {
                                a.setVisible && a.setVisible();
                                l(a.visible ? "inactive" : "")
                            };
                            h.removeClass(k);
                            b = {
                                browserEvent: b
                            };
                            a.firePointEvent ? a.firePointEvent("legendItemClick", b, e) : I(a, "legendItemClick", b, e)
                        })
                })
            }
            ;
            c.prototype.createCheckboxForItem = function(a) {
                a.checkbox = g("input", {
                    type: "checkbox",
                    className: "highcharts-legend-checkbox",
                    checked: a.selected,
                    defaultChecked: a.selected
                }, this.options.itemCheckboxStyle, this.chart.container);
                d(a.checkbox, "click", function(d) {
                    I(a.series || a, "checkboxClick", {
                        checked: d.target.checked,
                        item: a
                    }, function() {
                        a.select()
                    })
                })
            }
            ;
            return c
        }();
        (/Trident\/7\.0/.test(B.navigator && B.navigator.userAgent) || c) && z(E.prototype, "positionItem", function(a, d) {
            var c = this
              , e = function() {
                d._legendItemPos && a.call(c, d)
            };
            e();
            c.bubbleLegend || setTimeout(e)
        });
        "";
        return E
    });
    O(f, "Core/Series/SeriesRegistry.js", [f["Core/Globals.js"], f["Core/DefaultOptions.js"], f["Core/Series/Point.js"], f["Core/Utilities.js"]], function(c, f, B, F) {
        var z = f.defaultOptions, E = F.extendClass, D = F.merge, w;
        (function(f) {
            function r(a, d) {
                var c = z.plotOptions || {}
                  , m = d.defaultOptions
                  , q = d.prototype;
                q.type = a;
                q.pointClass || (q.pointClass = B);
                m && (c[a] = m);
                f.seriesTypes[a] = d
            }
            f.seriesTypes = c.seriesTypes;
            f.registerSeriesType = r;
            f.seriesType = function(a, d, c, m, q) {
                var g = z.plotOptions || {};
                d = d || "";
                g[a] = D(g[d], c);
                r(a, E(f.seriesTypes[d] || function() {}
                , m));
                f.seriesTypes[a].prototype.type = a;
                q && (f.seriesTypes[a].prototype.pointClass = E(B, q));
                return f.seriesTypes[a]
            }
        }
        )(w || (w = {}));
        return w
    });
    O(f, "Core/Chart/Chart.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/Axis/Axis.js"], f["Core/FormatUtilities.js"], f["Core/Foundation.js"], f["Core/Globals.js"], f["Core/Legend/Legend.js"], f["Core/MSPointer.js"], f["Core/DefaultOptions.js"], f["Core/Pointer.js"], f["Core/Renderer/RendererRegistry.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Renderer/SVG/SVGRenderer.js"], f["Core/Time.js"], f["Core/Utilities.js"], f["Core/Renderer/HTML/AST.js"]], function(c, f, B, F, z, E, H, w, t, r, a, d, g, m, q) {
        var x = c.animate
          , J = c.animObject
          , I = c.setAnimation
          , M = B.numberFormat
          , K = F.registerEventOptions
          , C = z.charts
          , A = z.doc
          , y = z.marginNames
          , n = z.svg
          , u = z.win
          , l = w.defaultOptions
          , k = w.defaultTime
          , e = a.seriesTypes
          , b = m.addEvent
          , h = m.attr
          , v = m.cleanRecursively
          , p = m.createElement
          , G = m.css
          , Q = m.defined
          , S = m.discardElement
          , L = m.erase
          , P = m.error
          , X = m.extend
          , aa = m.find
          , D = m.fireEvent
          , ba = m.getStyle
          , N = m.isArray
          , ca = m.isNumber
          , T = m.isObject
          , U = m.isString
          , W = m.merge
          , Y = m.objectEach
          , R = m.pick
          , da = m.pInt
          , ha = m.relativeLength
          , O = m.removeEvent
          , ea = m.splat
          , Z = m.syncTimeout
          , ia = m.uniqueKey;
        c = function() {
            function a(a, b, e) {
                this.series = this.renderTo = this.renderer = this.pointer = this.pointCount = this.plotWidth = this.plotTop = this.plotLeft = this.plotHeight = this.plotBox = this.options = this.numberFormatter = this.margin = this.legend = this.labelCollectors = this.isResizing = this.index = this.eventOptions = this.container = this.colorCounter = this.clipBox = this.chartWidth = this.chartHeight = this.bounds = this.axisOffset = this.axes = void 0;
                this.sharedClips = {};
                this.yAxis = this.xAxis = this.userOptions = this.titleOffset = this.time = this.symbolCounter = this.spacingBox = this.spacing = void 0;
                this.getArgs(a, b, e)
            }
            a.chart = function(b, e, d) {
                return new a(b,e,d)
            }
            ;
            a.prototype.getArgs = function(a, b, e) {
                U(a) || a.nodeName ? (this.renderTo = a,
                this.init(b, e)) : this.init(a, b)
            }
            ;
            a.prototype.init = function(a, b) {
                var e = a.plotOptions || {};
                D(this, "init", {
                    args: arguments
                }, function() {
                    var d = W(l, a)
                      , h = d.chart;
                    Y(d.plotOptions, function(a, b) {
                        T(a) && (a.tooltip = e[b] && W(e[b].tooltip) || void 0)
                    });
                    d.tooltip.userOptions = a.chart && a.chart.forExport && a.tooltip.userOptions || a.tooltip;
                    this.userOptions = a;
                    this.margin = [];
                    this.spacing = [];
                    this.bounds = {
                        h: {},
                        v: {}
                    };
                    this.labelCollectors = [];
                    this.callback = b;
                    this.isResizing = 0;
                    var c = h.zooming = h.zooming || {};
                    a.chart && !a.chart.zooming && (c.resetButton = h.resetZoomButton);
                    c.key = R(c.key, h.zoomKey);
                    c.pinchType = R(c.pinchType, h.pinchType);
                    c.singleTouch = R(c.singleTouch, h.zoomBySingleTouch);
                    c.type = R(c.type, h.zoomType);
                    this.options = d;
                    this.axes = [];
                    this.series = [];
                    this.time = a.time && Object.keys(a.time).length ? new g(a.time) : z.time;
                    this.numberFormatter = h.numberFormatter || M;
                    this.styledMode = h.styledMode;
                    this.hasCartesianSeries = h.showAxes;
                    this.index = C.length;
                    C.push(this);
                    z.chartCount++;
                    K(this, h);
                    this.xAxis = [];
                    this.yAxis = [];
                    this.pointCount = this.colorCounter = this.symbolCounter = 0;
                    D(this, "afterInit");
                    this.firstRender()
                })
            }
            ;
            a.prototype.initSeries = function(a) {
                var b = this.options.chart;
                b = a.type || b.type || b.defaultSeriesType;
                var d = e[b];
                d || P(17, !0, this, {
                    missingModuleFor: b
                });
                b = new d;
                "function" === typeof b.init && b.init(this, a);
                return b
            }
            ;
            a.prototype.setSeriesData = function() {
                this.getSeriesOrderByLinks().forEach(function(a) {
                    a.points || a.data || !a.enabledDataSorting || a.setData(a.options.data, !1)
                })
            }
            ;
            a.prototype.getSeriesOrderByLinks = function() {
                return this.series.concat().sort(function(a, b) {
                    return a.linkedSeries.length || b.linkedSeries.length ? b.linkedSeries.length - a.linkedSeries.length : 0
                })
            }
            ;
            a.prototype.orderSeries = function(a) {
                var b = this.series;
                a = a || 0;
                for (var e = b.length; a < e; ++a)
                    b[a] && (b[a].index = a,
                    b[a].name = b[a].getName())
            }
            ;
            a.prototype.isInsidePlot = function(a, b, e) {
                void 0 === e && (e = {});
                var d = this.inverted
                  , h = this.plotBox
                  , c = this.plotLeft
                  , k = this.plotTop
                  , p = this.scrollablePlotBox
                  , g = 0;
                var l = 0;
                e.visiblePlotOnly && this.scrollingContainer && (l = this.scrollingContainer,
                g = l.scrollLeft,
                l = l.scrollTop);
                var n = e.series;
                h = e.visiblePlotOnly && p || h;
                p = e.inverted ? b : a;
                b = e.inverted ? a : b;
                a = {
                    x: p,
                    y: b,
                    isInsidePlot: !0
                };
                if (!e.ignoreX) {
                    var m = n && (d ? n.yAxis : n.xAxis) || {
                        pos: c,
                        len: Infinity
                    };
                    p = e.paneCoordinates ? m.pos + p : c + p;
                    p >= Math.max(g + c, m.pos) && p <= Math.min(g + c + h.width, m.pos + m.len) || (a.isInsidePlot = !1)
                }
                !e.ignoreY && a.isInsidePlot && (d = n && (d ? n.xAxis : n.yAxis) || {
                    pos: k,
                    len: Infinity
                },
                e = e.paneCoordinates ? d.pos + b : k + b,
                e >= Math.max(l + k, d.pos) && e <= Math.min(l + k + h.height, d.pos + d.len) || (a.isInsidePlot = !1));
                D(this, "afterIsInsidePlot", a);
                return a.isInsidePlot
            }
            ;
            a.prototype.redraw = function(a) {
                D(this, "beforeRedraw");
                var b = this.hasCartesianSeries ? this.axes : this.colorAxis || []
                  , e = this.series
                  , d = this.pointer
                  , h = this.legend
                  , c = this.userOptions.legend
                  , k = this.renderer
                  , p = k.isHidden()
                  , g = []
                  , l = this.isDirtyBox
                  , n = this.isDirtyLegend;
                this.setResponsive && this.setResponsive(!1);
                I(this.hasRendered ? a : !1, this);
                p && this.temporaryDisplay();
                this.layOutTitles();
                for (a = e.length; a--; ) {
                    var m = e[a];
                    if (m.options.stacking || m.options.centerInCategory) {
                        var v = !0;
                        if (m.isDirty) {
                            var u = !0;
                            break
                        }
                    }
                }
                if (u)
                    for (a = e.length; a--; )
                        m = e[a],
                        m.options.stacking && (m.isDirty = !0);
                e.forEach(function(a) {
                    a.isDirty && ("point" === a.options.legendType ? ("function" === typeof a.updateTotals && a.updateTotals(),
                    n = !0) : c && (c.labelFormatter || c.labelFormat) && (n = !0));
                    a.isDirtyData && D(a, "updatedData")
                });
                n && h && h.options.enabled && (h.render(),
                this.isDirtyLegend = !1);
                v && this.getStacks();
                b.forEach(function(a) {
                    a.updateNames();
                    a.setScale()
                });
                this.getMargins();
                b.forEach(function(a) {
                    a.isDirty && (l = !0)
                });
                b.forEach(function(a) {
                    var b = a.min + "," + a.max;
                    a.extKey !== b && (a.extKey = b,
                    g.push(function() {
                        D(a, "afterSetExtremes", X(a.eventArgs, a.getExtremes()));
                        delete a.eventArgs
                    }));
                    (l || v) && a.redraw()
                });
                l && this.drawChartBox();
                D(this, "predraw");
                e.forEach(function(a) {
                    (l || a.isDirty) && a.visible && a.redraw();
                    a.isDirtyData = !1
                });
                d && d.reset(!0);
                k.draw();
                D(this, "redraw");
                D(this, "render");
                p && this.temporaryDisplay(!0);
                g.forEach(function(a) {
                    a.call()
                })
            }
            ;
            a.prototype.get = function(a) {
                function b(b) {
                    return b.id === a || b.options && b.options.id === a
                }
                for (var e = this.series, d = aa(this.axes, b) || aa(this.series, b), h = 0; !d && h < e.length; h++)
                    d = aa(e[h].points || [], b);
                return d
            }
            ;
            a.prototype.getAxes = function() {
                var a = this
                  , b = this.options
                  , e = b.xAxis = ea(b.xAxis || {});
                b = b.yAxis = ea(b.yAxis || {});
                D(this, "getAxes");
                e.forEach(function(a, b) {
                    a.index = b;
                    a.isX = !0
                });
                b.forEach(function(a, b) {
                    a.index = b
                });
                e.concat(b).forEach(function(b) {
                    new f(a,b)
                });
                D(this, "afterGetAxes")
            }
            ;
            a.prototype.getSelectedPoints = function() {
                return this.series.reduce(function(a, b) {
                    b.getPointsCollection().forEach(function(b) {
                        R(b.selectedStaging, b.selected) && a.push(b)
                    });
                    return a
                }, [])
            }
            ;
            a.prototype.getSelectedSeries = function() {
                return this.series.filter(function(a) {
                    return a.selected
                })
            }
            ;
            a.prototype.setTitle = function(a, b, e) {
                this.applyDescription("title", a);
                this.applyDescription("subtitle", b);
                this.applyDescription("caption", void 0);
                this.layOutTitles(e)
            }
            ;
            a.prototype.applyDescription = function(a, b) {
                var e = this
                  , d = "title" === a ? {
                    color: "#333333",
                    fontSize: this.options.isStock ? "1em" : "1.125em"
                } : {
                    color: "#666666"
                };
                d = this.options[a] = W(!this.styledMode && {
                    style: d
                }, this.options[a], b);
                var h = this[a];
                h && b && (this[a] = h = h.destroy());
                d && !h && (h = this.renderer.text(d.text, 0, 0, d.useHTML).attr({
                    align: d.align,
                    "class": "highcharts-" + a,
                    zIndex: d.zIndex || 4
                }).add(),
                h.update = function(b) {
                    e[{
                        title: "setTitle",
                        subtitle: "setSubtitle",
                        caption: "setCaption"
                    }[a]](b)
                }
                ,
                this.styledMode || h.css(d.style),
                this[a] = h)
            }
            ;
            a.prototype.layOutTitles = function(a) {
                var b = [0, 0, 0]
                  , e = this.renderer
                  , d = this.spacingBox;
                ["title", "subtitle", "caption"].forEach(function(a) {
                    var h = this[a]
                      , c = this.options[a]
                      , k = c.verticalAlign || "top";
                    a = "title" === a ? "top" === k ? -3 : 0 : "top" === k ? b[0] + 2 : 0;
                    var p;
                    if (h) {
                        this.styledMode || (p = c.style && c.style.fontSize);
                        p = e.fontMetrics(p, h).b;
                        h.css({
                            width: (c.width || d.width + (c.widthAdjust || 0)) + "px"
                        });
                        var g = Math.round(h.getBBox(c.useHTML).height);
                        h.align(X({
                            y: "bottom" === k ? p : a + p,
                            height: g
                        }, c), !1, "spacingBox");
                        c.floating || ("top" === k ? b[0] = Math.ceil(b[0] + g) : "bottom" === k && (b[2] = Math.ceil(b[2] + g)))
                    }
                }, this);
                b[0] && "top" === (this.options.title.verticalAlign || "top") && (b[0] += this.options.title.margin);
                b[2] && "bottom" === this.options.caption.verticalAlign && (b[2] += this.options.caption.margin);
                var h = !this.titleOffset || this.titleOffset.join(",") !== b.join(",");
                this.titleOffset = b;
                D(this, "afterLayOutTitles");
                !this.isDirtyBox && h && (this.isDirtyBox = this.isDirtyLegend = h,
                this.hasRendered && R(a, !0) && this.isDirtyBox && this.redraw())
            }
            ;
            a.prototype.getChartSize = function() {
                var a = this.options.chart
                  , b = a.width;
                a = a.height;
                var e = this.renderTo;
                Q(b) || (this.containerWidth = ba(e, "width"));
                Q(a) || (this.containerHeight = ba(e, "height"));
                this.chartWidth = Math.max(0, b || this.containerWidth || 600);
                this.chartHeight = Math.max(0, ha(a, this.chartWidth) || (1 < this.containerHeight ? this.containerHeight : 400))
            }
            ;
            a.prototype.temporaryDisplay = function(a) {
                var b = this.renderTo;
                if (a)
                    for (; b && b.style; )
                        b.hcOrigStyle && (G(b, b.hcOrigStyle),
                        delete b.hcOrigStyle),
                        b.hcOrigDetached && (A.body.removeChild(b),
                        b.hcOrigDetached = !1),
                        b = b.parentNode;
                else
                    for (; b && b.style; ) {
                        A.body.contains(b) || b.parentNode || (b.hcOrigDetached = !0,
                        A.body.appendChild(b));
                        if ("none" === ba(b, "display", !1) || b.hcOricDetached)
                            b.hcOrigStyle = {
                                display: b.style.display,
                                height: b.style.height,
                                overflow: b.style.overflow
                            },
                            a = {
                                display: "block",
                                overflow: "hidden"
                            },
                            b !== this.renderTo && (a.height = 0),
                            G(b, a),
                            b.offsetWidth || b.style.setProperty("display", "block", "important");
                        b = b.parentNode;
                        if (b === A.body)
                            break
                    }
            }
            ;
            a.prototype.setClassName = function(a) {
                this.container.className = "highcharts-container " + (a || "")
            }
            ;
            a.prototype.getContainer = function() {
                var a = this.options, b = a.chart, e = ia(), c, k = this.renderTo;
                k || (this.renderTo = k = b.renderTo);
                U(k) && (this.renderTo = k = A.getElementById(k));
                k || P(13, !0, this);
                var g = da(h(k, "data-highcharts-chart"));
                ca(g) && C[g] && C[g].hasRendered && C[g].destroy();
                h(k, "data-highcharts-chart", this.index);
                k.innerHTML = q.emptyHTML;
                b.skipClone || k.offsetWidth || this.temporaryDisplay();
                this.getChartSize();
                g = this.chartWidth;
                var l = this.chartHeight;
                G(k, {
                    overflow: "hidden"
                });
                this.styledMode || (c = X({
                    position: "relative",
                    overflow: "hidden",
                    width: g + "px",
                    height: l + "px",
                    textAlign: "left",
                    lineHeight: "normal",
                    zIndex: 0,
                    "-webkit-tap-highlight-color": "rgba(0,0,0,0)",
                    userSelect: "none",
                    "touch-action": "manipulation",
                    outline: "none"
                }, b.style || {}));
                this.container = e = p("div", {
                    id: e
                }, c, k);
                this._cursor = e.style.cursor;
                this.renderer = new (b.renderer || !n ? r.getRendererType(b.renderer) : d)(e,g,l,void 0,b.forExport,a.exporting && a.exporting.allowHTML,this.styledMode);
                I(void 0, this);
                this.setClassName(b.className);
                if (this.styledMode)
                    for (var m in a.defs)
                        this.renderer.definition(a.defs[m]);
                else
                    this.renderer.setStyle(b.style);
                this.renderer.chartIndex = this.index;
                D(this, "afterGetContainer")
            }
            ;
            a.prototype.getMargins = function(a) {
                var b = this.spacing
                  , e = this.margin
                  , d = this.titleOffset;
                this.resetMargins();
                d[0] && !Q(e[0]) && (this.plotTop = Math.max(this.plotTop, d[0] + b[0]));
                d[2] && !Q(e[2]) && (this.marginBottom = Math.max(this.marginBottom, d[2] + b[2]));
                this.legend && this.legend.display && this.legend.adjustMargins(e, b);
                D(this, "getMargins");
                a || this.getAxisMargins()
            }
            ;
            a.prototype.getAxisMargins = function() {
                var a = this
                  , b = a.axisOffset = [0, 0, 0, 0]
                  , e = a.colorAxis
                  , d = a.margin
                  , h = function(a) {
                    a.forEach(function(a) {
                        a.visible && a.getOffset()
                    })
                };
                a.hasCartesianSeries ? h(a.axes) : e && e.length && h(e);
                y.forEach(function(e, h) {
                    Q(d[h]) || (a[e] += b[h])
                });
                a.setChartSize()
            }
            ;
            a.prototype.reflow = function(a) {
                var b = this
                  , e = b.options.chart
                  , d = b.renderTo
                  , h = Q(e.width) && Q(e.height)
                  , c = e.width || ba(d, "width");
                e = e.height || ba(d, "height");
                d = a ? a.target : u;
                delete b.pointer.chartPosition;
                if (!h && !b.isPrinting && c && e && (d === u || d === A)) {
                    if (c !== b.containerWidth || e !== b.containerHeight)
                        m.clearTimeout(b.reflowTimeout),
                        b.reflowTimeout = Z(function() {
                            b.container && b.setSize(void 0, void 0, !1)
                        }, a ? 100 : 0);
                    b.containerWidth = c;
                    b.containerHeight = e
                }
            }
            ;
            a.prototype.setReflow = function(a) {
                var e = this;
                !1 === a || this.unbindReflow ? !1 === a && this.unbindReflow && (this.unbindReflow = this.unbindReflow()) : (this.unbindReflow = b(u, "resize", function(a) {
                    e.options && e.reflow(a)
                }),
                b(this, "destroy", this.unbindReflow))
            }
            ;
            a.prototype.setSize = function(a, b, e) {
                var d = this
                  , h = d.renderer;
                d.isResizing += 1;
                I(e, d);
                e = h.globalAnimation;
                d.oldChartHeight = d.chartHeight;
                d.oldChartWidth = d.chartWidth;
                "undefined" !== typeof a && (d.options.chart.width = a);
                "undefined" !== typeof b && (d.options.chart.height = b);
                d.getChartSize();
                d.styledMode || (e ? x : G)(d.container, {
                    width: d.chartWidth + "px",
                    height: d.chartHeight + "px"
                }, e);
                d.setChartSize(!0);
                h.setSize(d.chartWidth, d.chartHeight, e);
                d.axes.forEach(function(a) {
                    a.isDirty = !0;
                    a.setScale()
                });
                d.isDirtyLegend = !0;
                d.isDirtyBox = !0;
                d.layOutTitles();
                d.getMargins();
                d.redraw(e);
                d.oldChartHeight = null;
                D(d, "resize");
                Z(function() {
                    d && D(d, "endResize", null, function() {
                        --d.isResizing
                    })
                }, J(e).duration)
            }
            ;
            a.prototype.setChartSize = function(a) {
                var b = this.inverted, e = this.renderer, d = this.chartWidth, h = this.chartHeight, c = this.options.chart, k = this.spacing, p = this.clipOffset, g, l, n, m;
                this.plotLeft = g = Math.round(this.plotLeft);
                this.plotTop = l = Math.round(this.plotTop);
                this.plotWidth = n = Math.max(0, Math.round(d - g - this.marginRight));
                this.plotHeight = m = Math.max(0, Math.round(h - l - this.marginBottom));
                this.plotSizeX = b ? m : n;
                this.plotSizeY = b ? n : m;
                this.plotBorderWidth = c.plotBorderWidth || 0;
                this.spacingBox = e.spacingBox = {
                    x: k[3],
                    y: k[0],
                    width: d - k[3] - k[1],
                    height: h - k[0] - k[2]
                };
                this.plotBox = e.plotBox = {
                    x: g,
                    y: l,
                    width: n,
                    height: m
                };
                b = 2 * Math.floor(this.plotBorderWidth / 2);
                d = Math.ceil(Math.max(b, p[3]) / 2);
                h = Math.ceil(Math.max(b, p[0]) / 2);
                this.clipBox = {
                    x: d,
                    y: h,
                    width: Math.floor(this.plotSizeX - Math.max(b, p[1]) / 2 - d),
                    height: Math.max(0, Math.floor(this.plotSizeY - Math.max(b, p[2]) / 2 - h))
                };
                a || (this.axes.forEach(function(a) {
                    a.setAxisSize();
                    a.setAxisTranslation()
                }),
                e.alignElements());
                D(this, "afterSetChartSize", {
                    skipAxes: a
                })
            }
            ;
            a.prototype.resetMargins = function() {
                D(this, "resetMargins");
                var a = this
                  , b = a.options.chart;
                ["margin", "spacing"].forEach(function(e) {
                    var d = b[e]
                      , h = T(d) ? d : [d, d, d, d];
                    ["Top", "Right", "Bottom", "Left"].forEach(function(d, c) {
                        a[e][c] = R(b[e + d], h[c])
                    })
                });
                y.forEach(function(b, e) {
                    a[b] = R(a.margin[e], a.spacing[e])
                });
                a.axisOffset = [0, 0, 0, 0];
                a.clipOffset = [0, 0, 0, 0]
            }
            ;
            a.prototype.drawChartBox = function() {
                var a = this.options.chart, b = this.renderer, e = this.chartWidth, d = this.chartHeight, h = this.styledMode, c = this.plotBGImage, k = a.backgroundColor, p = a.plotBackgroundColor, g = a.plotBackgroundImage, l = this.plotLeft, n = this.plotTop, m = this.plotWidth, v = this.plotHeight, u = this.plotBox, q = this.clipRect, f = this.clipBox, G = this.chartBackground, r = this.plotBackground, x = this.plotBorder, N, t = "animate";
                G || (this.chartBackground = G = b.rect().addClass("highcharts-background").add(),
                t = "attr");
                if (h)
                    var y = N = G.strokeWidth();
                else {
                    y = a.borderWidth || 0;
                    N = y + (a.shadow ? 8 : 0);
                    k = {
                        fill: k || "none"
                    };
                    if (y || G["stroke-width"])
                        k.stroke = a.borderColor,
                        k["stroke-width"] = y;
                    G.attr(k).shadow(a.shadow)
                }
                G[t]({
                    x: N / 2,
                    y: N / 2,
                    width: e - N - y % 2,
                    height: d - N - y % 2,
                    r: a.borderRadius
                });
                t = "animate";
                r || (t = "attr",
                this.plotBackground = r = b.rect().addClass("highcharts-plot-background").add());
                r[t](u);
                h || (r.attr({
                    fill: p || "none"
                }).shadow(a.plotShadow),
                g && (c ? (g !== c.attr("href") && c.attr("href", g),
                c.animate(u)) : this.plotBGImage = b.image(g, l, n, m, v).add()));
                q ? q.animate({
                    width: f.width,
                    height: f.height
                }) : this.clipRect = b.clipRect(f);
                t = "animate";
                x || (t = "attr",
                this.plotBorder = x = b.rect().addClass("highcharts-plot-border").attr({
                    zIndex: 1
                }).add());
                h || x.attr({
                    stroke: a.plotBorderColor,
                    "stroke-width": a.plotBorderWidth || 0,
                    fill: "none"
                });
                x[t](x.crisp({
                    x: l,
                    y: n,
                    width: m,
                    height: v
                }, -x.strokeWidth()));
                this.isDirtyBox = !1;
                D(this, "afterDrawChartBox")
            }
            ;
            a.prototype.propFromSeries = function() {
                var a = this, b = a.options.chart, d = a.options.series, h, c, k;
                ["inverted", "angular", "polar"].forEach(function(p) {
                    c = e[b.type || b.defaultSeriesType];
                    k = b[p] || c && c.prototype[p];
                    for (h = d && d.length; !k && h--; )
                        (c = e[d[h].type]) && c.prototype[p] && (k = !0);
                    a[p] = k
                })
            }
            ;
            a.prototype.linkSeries = function() {
                var a = this
                  , b = a.series;
                b.forEach(function(a) {
                    a.linkedSeries.length = 0
                });
                b.forEach(function(b) {
                    var e = b.options.linkedTo;
                    U(e) && (e = ":previous" === e ? a.series[b.index - 1] : a.get(e)) && e.linkedParent !== b && (e.linkedSeries.push(b),
                    b.linkedParent = e,
                    e.enabledDataSorting && b.setDataSortingOptions(),
                    b.visible = R(b.options.visible, e.options.visible, b.visible))
                });
                D(this, "afterLinkSeries")
            }
            ;
            a.prototype.renderSeries = function() {
                this.series.forEach(function(a) {
                    a.translate();
                    a.render()
                })
            }
            ;
            a.prototype.renderLabels = function() {
                var a = this
                  , b = a.options.labels;
                b.items && b.items.forEach(function(e) {
                    var d = X(b.style, e.style)
                      , h = da(d.left) + a.plotLeft
                      , c = da(d.top) + a.plotTop + 12;
                    delete d.left;
                    delete d.top;
                    a.renderer.text(e.html, h, c).attr({
                        zIndex: 2
                    }).css(d).add()
                })
            }
            ;
            a.prototype.render = function() {
                var a = this.axes
                  , b = this.colorAxis
                  , e = this.renderer
                  , d = this.options
                  , h = function(a) {
                    a.forEach(function(a) {
                        a.visible && a.render()
                    })
                }
                  , c = 0;
                this.setTitle();
                this.legend = new E(this,d.legend);
                this.getStacks && this.getStacks();
                this.getMargins(!0);
                this.setChartSize();
                d = this.plotWidth;
                a.some(function(a) {
                    if (a.horiz && a.visible && a.options.labels.enabled && a.series.length)
                        return c = 21,
                        !0
                });
                var k = this.plotHeight = Math.max(this.plotHeight - c, 0);
                a.forEach(function(a) {
                    a.setScale()
                });
                this.getAxisMargins();
                var p = 1.1 < d / this.plotWidth
                  , g = 1.05 < k / this.plotHeight;
                if (p || g)
                    a.forEach(function(a) {
                        (a.horiz && p || !a.horiz && g) && a.setTickInterval(!0)
                    }),
                    this.getMargins();
                this.drawChartBox();
                this.hasCartesianSeries ? h(a) : b && b.length && h(b);
                this.seriesGroup || (this.seriesGroup = e.g("series-group").attr({
                    zIndex: 3
                }).add());
                this.renderSeries();
                this.renderLabels();
                this.addCredits();
                this.setResponsive && this.setResponsive();
                this.hasRendered = !0
            }
            ;
            a.prototype.addCredits = function(a) {
                var b = this
                  , e = W(!0, this.options.credits, a);
                e.enabled && !this.credits && (this.credits = this.renderer.text(e.text + (this.mapCredits || ""), 0, 0).addClass("highcharts-credits").on("click", function() {
                    e.href && (u.location.href = e.href)
                }).attr({
                    align: e.position.align,
                    zIndex: 8
                }),
                b.styledMode || this.credits.css(e.style),
                this.credits.add().align(e.position),
                this.credits.update = function(a) {
                    b.credits = b.credits.destroy();
                    b.addCredits(a)
                }
                )
            }
            ;
            a.prototype.destroy = function() {
                var a = this, b = a.axes, e = a.series, d = a.container, h = d && d.parentNode, c;
                D(a, "destroy");
                a.renderer.forExport ? L(C, a) : C[a.index] = void 0;
                z.chartCount--;
                a.renderTo.removeAttribute("data-highcharts-chart");
                O(a);
                for (c = b.length; c--; )
                    b[c] = b[c].destroy();
                this.scroller && this.scroller.destroy && this.scroller.destroy();
                for (c = e.length; c--; )
                    e[c] = e[c].destroy();
                "title subtitle chartBackground plotBackground plotBGImage plotBorder seriesGroup clipRect credits pointer rangeSelector legend resetZoomButton tooltip renderer".split(" ").forEach(function(b) {
                    var e = a[b];
                    e && e.destroy && (a[b] = e.destroy())
                });
                d && (d.innerHTML = q.emptyHTML,
                O(d),
                h && S(d));
                Y(a, function(b, e) {
                    delete a[e]
                })
            }
            ;
            a.prototype.firstRender = function() {
                var a = this
                  , b = a.options;
                if (!a.isReadyToRender || a.isReadyToRender()) {
                    a.getContainer();
                    a.resetMargins();
                    a.setChartSize();
                    a.propFromSeries();
                    a.getAxes();
                    (N(b.series) ? b.series : []).forEach(function(b) {
                        a.initSeries(b)
                    });
                    a.linkSeries();
                    a.setSeriesData();
                    D(a, "beforeRender");
                    t && (H.isRequired() ? a.pointer = new H(a,b) : a.pointer = new t(a,b));
                    a.render();
                    a.pointer.getChartPosition();
                    if (!a.renderer.imgCount && !a.hasLoaded)
                        a.onload();
                    a.temporaryDisplay(!0)
                }
            }
            ;
            a.prototype.onload = function() {
                this.callbacks.concat([this.callback]).forEach(function(a) {
                    a && "undefined" !== typeof this.index && a.apply(this, [this])
                }, this);
                D(this, "load");
                D(this, "render");
                Q(this.index) && this.setReflow(this.options.chart.reflow);
                this.warnIfA11yModuleNotLoaded();
                this.hasLoaded = !0
            }
            ;
            a.prototype.warnIfA11yModuleNotLoaded = function() {
                var a = this.options
                  , b = this.title;
                a && !this.accessibility && (this.renderer.boxWrapper.attr({
                    role: "img",
                    "aria-label": b && b.element.textContent || ""
                }),
                a.accessibility && !1 === a.accessibility.enabled || P('Highcharts warning: Consider including the "accessibility.js" module to make your chart more usable for people with disabilities. Set the "accessibility.enabled" option to false to remove this warning. See https://www.highcharts.com/docs/accessibility/accessibility-module.', !1, this))
            }
            ;
            a.prototype.addSeries = function(a, b, e) {
                var d = this, h;
                a && (b = R(b, !0),
                D(d, "addSeries", {
                    options: a
                }, function() {
                    h = d.initSeries(a);
                    d.isDirtyLegend = !0;
                    d.linkSeries();
                    h.enabledDataSorting && h.setData(a.data, !1);
                    D(d, "afterAddSeries", {
                        series: h
                    });
                    b && d.redraw(e)
                }));
                return h
            }
            ;
            a.prototype.addAxis = function(a, b, e, d) {
                return this.createAxis(b ? "xAxis" : "yAxis", {
                    axis: a,
                    redraw: e,
                    animation: d
                })
            }
            ;
            a.prototype.addColorAxis = function(a, b, e) {
                return this.createAxis("colorAxis", {
                    axis: a,
                    redraw: b,
                    animation: e
                })
            }
            ;
            a.prototype.createAxis = function(a, b) {
                a = new f(this,W(b.axis, {
                    index: this[a].length,
                    isX: "xAxis" === a
                }));
                R(b.redraw, !0) && this.redraw(b.animation);
                return a
            }
            ;
            a.prototype.showLoading = function(a) {
                var e = this
                  , d = e.options
                  , h = d.loading
                  , c = function() {
                    k && G(k, {
                        left: e.plotLeft + "px",
                        top: e.plotTop + "px",
                        width: e.plotWidth + "px",
                        height: e.plotHeight + "px"
                    })
                }
                  , k = e.loadingDiv
                  , g = e.loadingSpan;
                k || (e.loadingDiv = k = p("div", {
                    className: "highcharts-loading highcharts-loading-hidden"
                }, null, e.container));
                g || (e.loadingSpan = g = p("span", {
                    className: "highcharts-loading-inner"
                }, null, k),
                b(e, "redraw", c));
                k.className = "highcharts-loading";
                q.setElementHTML(g, R(a, d.lang.loading, ""));
                e.styledMode || (G(k, X(h.style, {
                    zIndex: 10
                })),
                G(g, h.labelStyle),
                e.loadingShown || (G(k, {
                    opacity: 0,
                    display: ""
                }),
                x(k, {
                    opacity: h.style.opacity || .5
                }, {
                    duration: h.showDuration || 0
                })));
                e.loadingShown = !0;
                c()
            }
            ;
            a.prototype.hideLoading = function() {
                var a = this.options
                  , b = this.loadingDiv;
                b && (b.className = "highcharts-loading highcharts-loading-hidden",
                this.styledMode || x(b, {
                    opacity: 0
                }, {
                    duration: a.loading.hideDuration || 100,
                    complete: function() {
                        G(b, {
                            display: "none"
                        })
                    }
                }));
                this.loadingShown = !1
            }
            ;
            a.prototype.update = function(a, b, e, d) {
                var h = this, c = {
                    credits: "addCredits",
                    title: "setTitle",
                    subtitle: "setSubtitle",
                    caption: "setCaption"
                }, p = a.isResponsiveOptions, l = [], n, m;
                D(h, "update", {
                    options: a
                });
                p || h.setResponsive(!1, !0);
                a = v(a, h.options);
                h.userOptions = W(h.userOptions, a);
                var u = a.chart;
                if (u) {
                    W(!0, h.options.chart, u);
                    "className"in u && h.setClassName(u.className);
                    "reflow"in u && h.setReflow(u.reflow);
                    if ("inverted"in u || "polar"in u || "type"in u) {
                        h.propFromSeries();
                        var q = !0
                    }
                    "alignTicks"in u && (q = !0);
                    "events"in u && K(this, u);
                    Y(u, function(a, b) {
                        -1 !== h.propsRequireUpdateSeries.indexOf("chart." + b) && (n = !0);
                        -1 !== h.propsRequireDirtyBox.indexOf(b) && (h.isDirtyBox = !0);
                        -1 !== h.propsRequireReflow.indexOf(b) && (p ? h.isDirtyBox = !0 : m = !0)
                    });
                    !h.styledMode && u.style && h.renderer.setStyle(h.options.chart.style || {})
                }
                !h.styledMode && a.colors && (this.options.colors = a.colors);
                a.time && (this.time === k && (this.time = new g(a.time)),
                W(!0, h.options.time, a.time));
                Y(a, function(b, e) {
                    if (h[e] && "function" === typeof h[e].update)
                        h[e].update(b, !1);
                    else if ("function" === typeof h[c[e]])
                        h[c[e]](b);
                    else
                        "colors" !== e && -1 === h.collectionsWithUpdate.indexOf(e) && W(!0, h.options[e], a[e]);
                    "chart" !== e && -1 !== h.propsRequireUpdateSeries.indexOf(e) && (n = !0)
                });
                this.collectionsWithUpdate.forEach(function(b) {
                    if (a[b]) {
                        var d = [];
                        h[b].forEach(function(a, b) {
                            a.options.isInternal || d.push(R(a.options.index, b))
                        });
                        ea(a[b]).forEach(function(a, c) {
                            var k = Q(a.id), p;
                            k && (p = h.get(a.id));
                            !p && h[b] && (p = h[b][d ? d[c] : c]) && k && Q(p.options.id) && (p = void 0);
                            p && p.coll === b && (p.update(a, !1),
                            e && (p.touched = !0));
                            !p && e && h.collectionsWithInit[b] && (h.collectionsWithInit[b][0].apply(h, [a].concat(h.collectionsWithInit[b][1] || []).concat([!1])).touched = !0)
                        });
                        e && h[b].forEach(function(a) {
                            a.touched || a.options.isInternal ? delete a.touched : l.push(a)
                        })
                    }
                });
                l.forEach(function(a) {
                    a.chart && a.remove && a.remove(!1)
                });
                q && h.axes.forEach(function(a) {
                    a.update({}, !1)
                });
                n && h.getSeriesOrderByLinks().forEach(function(a) {
                    a.chart && a.update({}, !1)
                }, this);
                q = u && u.width;
                u = u && (U(u.height) ? ha(u.height, q || h.chartWidth) : u.height);
                m || ca(q) && q !== h.chartWidth || ca(u) && u !== h.chartHeight ? h.setSize(q, u, d) : R(b, !0) && h.redraw(d);
                D(h, "afterUpdate", {
                    options: a,
                    redraw: b,
                    animation: d
                })
            }
            ;
            a.prototype.setSubtitle = function(a, b) {
                this.applyDescription("subtitle", a);
                this.layOutTitles(b)
            }
            ;
            a.prototype.setCaption = function(a, b) {
                this.applyDescription("caption", a);
                this.layOutTitles(b)
            }
            ;
            a.prototype.showResetZoom = function() {
                function a() {
                    b.zoomOut()
                }
                var b = this
                  , e = l.lang
                  , d = b.options.chart.zooming.resetButton
                  , h = d.theme
                  , c = "chart" === d.relativeTo || "spacingBox" === d.relativeTo ? null : "scrollablePlotBox";
                D(this, "beforeShowResetZoom", null, function() {
                    b.resetZoomButton = b.renderer.button(e.resetZoom, null, null, a, h).attr({
                        align: d.position.align,
                        title: e.resetZoomTitle
                    }).addClass("highcharts-reset-zoom").add().align(d.position, !1, c)
                });
                D(this, "afterShowResetZoom")
            }
            ;
            a.prototype.zoomOut = function() {
                D(this, "selection", {
                    resetSelection: !0
                }, this.zoom)
            }
            ;
            a.prototype.zoom = function(a) {
                var b = this, e = b.pointer, d = b.inverted ? e.mouseDownX : e.mouseDownY, h = !1, c;
                !a || a.resetSelection ? (b.axes.forEach(function(a) {
                    c = a.zoom()
                }),
                e.initiated = !1) : a.xAxis.concat(a.yAxis).forEach(function(a) {
                    var k = a.axis
                      , p = b.inverted ? k.left : k.top
                      , g = b.inverted ? p + k.width : p + k.height
                      , l = k.isXAxis
                      , n = !1;
                    if (!l && d >= p && d <= g || l || !Q(d))
                        n = !0;
                    e[l ? "zoomX" : "zoomY"] && n && (c = k.zoom(a.min, a.max),
                    k.displayBtn && (h = !0))
                });
                var k = b.resetZoomButton;
                h && !k ? b.showResetZoom() : !h && T(k) && (b.resetZoomButton = k.destroy());
                c && b.redraw(R(b.options.chart.animation, a && a.animation, 100 > b.pointCount))
            }
            ;
            a.prototype.pan = function(a, b) {
                var e = this
                  , d = e.hoverPoints;
                b = "object" === typeof b ? b : {
                    enabled: b,
                    type: "x"
                };
                var h = e.options.chart;
                h && h.panning && (h.panning = b);
                var c = b.type, k;
                D(this, "pan", {
                    originalEvent: a
                }, function() {
                    d && d.forEach(function(a) {
                        a.setState()
                    });
                    var b = e.xAxis;
                    "xy" === c ? b = b.concat(e.yAxis) : "y" === c && (b = e.yAxis);
                    var h = {};
                    b.forEach(function(b) {
                        if (b.options.panningEnabled && !b.options.isInternal) {
                            var d = b.horiz
                              , p = a[d ? "chartX" : "chartY"];
                            d = d ? "mouseDownX" : "mouseDownY";
                            var g = e[d]
                              , l = b.minPointOffset || 0
                              , n = b.reversed && !e.inverted || !b.reversed && e.inverted ? -1 : 1
                              , m = b.getExtremes()
                              , v = b.toValue(g - p, !0) + l * n
                              , u = b.toValue(g + b.len - p, !0) - (l * n || b.isXAxis && b.pointRangePadding || 0)
                              , q = u < v;
                            n = b.hasVerticalPanning();
                            g = q ? u : v;
                            v = q ? v : u;
                            var f = b.panningState;
                            !n || b.isXAxis || f && !f.isDirty || b.series.forEach(function(a) {
                                var b = a.getProcessedData(!0);
                                b = a.getExtremes(b.yData, !0);
                                f || (f = {
                                    startMin: Number.MAX_VALUE,
                                    startMax: -Number.MAX_VALUE
                                });
                                ca(b.dataMin) && ca(b.dataMax) && (f.startMin = Math.min(R(a.options.threshold, Infinity), b.dataMin, f.startMin),
                                f.startMax = Math.max(R(a.options.threshold, -Infinity), b.dataMax, f.startMax))
                            });
                            n = Math.min(R(f && f.startMin, m.dataMin), l ? m.min : b.toValue(b.toPixels(m.min) - b.minPixelPadding));
                            u = Math.max(R(f && f.startMax, m.dataMax), l ? m.max : b.toValue(b.toPixels(m.max) + b.minPixelPadding));
                            b.panningState = f;
                            b.isOrdinal || (l = n - g,
                            0 < l && (v += l,
                            g = n),
                            l = v - u,
                            0 < l && (v = u,
                            g -= l),
                            b.series.length && g !== m.min && v !== m.max && g >= n && v <= u && (b.setExtremes(g, v, !1, !1, {
                                trigger: "pan"
                            }),
                            !e.resetZoomButton && g !== n && v !== u && c.match("y") && (e.showResetZoom(),
                            b.displayBtn = !1),
                            k = !0),
                            h[d] = p)
                        }
                    });
                    Y(h, function(a, b) {
                        e[b] = a
                    });
                    k && e.redraw(!1);
                    G(e.container, {
                        cursor: "move"
                    })
                })
            }
            ;
            return a
        }();
        X(c.prototype, {
            callbacks: [],
            collectionsWithInit: {
                xAxis: [c.prototype.addAxis, [!0]],
                yAxis: [c.prototype.addAxis, [!1]],
                series: [c.prototype.addSeries]
            },
            collectionsWithUpdate: ["xAxis", "yAxis", "series"],
            propsRequireDirtyBox: "backgroundColor borderColor borderWidth borderRadius plotBackgroundColor plotBackgroundImage plotBorderColor plotBorderWidth plotShadow shadow".split(" "),
            propsRequireReflow: "margin marginTop marginRight marginBottom marginLeft spacing spacingTop spacingRight spacingBottom spacingLeft".split(" "),
            propsRequireUpdateSeries: "chart.inverted chart.polar chart.ignoreHiddenSeries chart.type colors plotOptions time tooltip".split(" ")
        });
        "";
        return c
    });
    O(f, "Core/Legend/LegendSymbol.js", [f["Core/Utilities.js"]], function(c) {
        var f = c.merge, B = c.pick, F;
        (function(c) {
            c.drawLineMarker = function(c) {
                var z = this.options
                  , w = c.symbolWidth
                  , t = c.symbolHeight
                  , r = t / 2
                  , a = this.chart.renderer
                  , d = this.legendGroup;
                c = c.baseline - Math.round(.3 * c.fontMetrics.b);
                var g = {}
                  , m = z.marker;
                this.chart.styledMode || (g = {
                    "stroke-width": z.lineWidth || 0
                },
                z.dashStyle && (g.dashstyle = z.dashStyle));
                this.legendLine = a.path([["M", 0, c], ["L", w, c]]).addClass("highcharts-graph").attr(g).add(d);
                m && !1 !== m.enabled && w && (z = Math.min(B(m.radius, r), r),
                0 === this.symbol.indexOf("url") && (m = f(m, {
                    width: t,
                    height: t
                }),
                z = 0),
                this.legendSymbol = w = a.symbol(this.symbol, w / 2 - z, c - z, 2 * z, 2 * z, m).addClass("highcharts-point").add(d),
                w.isMarker = !0)
            }
            ;
            c.drawRectangle = function(c, f) {
                var w = c.symbolHeight
                  , t = c.options.squareSymbol;
                f.legendSymbol = this.chart.renderer.rect(t ? (c.symbolWidth - w) / 2 : 0, c.baseline - w + 1, t ? w : c.symbolWidth, w, B(c.options.symbolRadius, w / 2)).addClass("highcharts-point").attr({
                    zIndex: 3
                }).add(f.legendGroup)
            }
        }
        )(F || (F = {}));
        return F
    });
    O(f, "Core/Series/SeriesDefaults.js", [], function() {
        return {
            lineWidth: 2,
            allowPointSelect: !1,
            crisp: !0,
            showCheckbox: !1,
            animation: {
                duration: 1E3
            },
            events: {},
            marker: {
                enabledThreshold: 2,
                lineColor: "#ffffff",
                lineWidth: 0,
                radius: 4,
                states: {
                    normal: {
                        animation: !0
                    },
                    hover: {
                        animation: {
                            duration: 50
                        },
                        enabled: !0,
                        radiusPlus: 2,
                        lineWidthPlus: 1
                    },
                    select: {
                        fillColor: "#cccccc",
                        lineColor: "#000000",
                        lineWidth: 2
                    }
                }
            },
            point: {
                events: {}
            },
            dataLabels: {
                animation: {},
                align: "center",
                defer: !0,
                formatter: function() {
                    var c = this.series.chart.numberFormatter;
                    return "number" !== typeof this.y ? "" : c(this.y, -1)
                },
                padding: 5,
                style: {
                    fontSize: "0.688em",
                    fontWeight: "bold",
                    color: "contrast",
                    textOutline: "0.063em contrast"
                },
                verticalAlign: "bottom",
                x: 0,
                y: 0
            },
            cropThreshold: 300,
            opacity: 1,
            pointRange: 0,
            softThreshold: !0,
            states: {
                normal: {
                    animation: !0
                },
                hover: {
                    animation: {
                        duration: 50
                    },
                    lineWidthPlus: 1,
                    marker: {},
                    halo: {
                        size: 10,
                        opacity: .25
                    }
                },
                select: {
                    animation: {
                        duration: 0
                    }
                },
                inactive: {
                    animation: {
                        duration: 50
                    },
                    opacity: .2
                }
            },
            stickyTracking: !0,
            turboThreshold: 1E3,
            findNearestPointBy: "x"
        }
    });
    O(f, "Core/Series/Series.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/DefaultOptions.js"], f["Core/Foundation.js"], f["Core/Globals.js"], f["Core/Legend/LegendSymbol.js"], f["Core/Series/Point.js"], f["Core/Series/SeriesDefaults.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Renderer/SVG/SVGElement.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H, w, t, r) {
        var a = c.animObject
          , d = c.setAnimation
          , g = f.defaultOptions
          , m = B.registerEventOptions
          , q = F.hasTouch
          , x = F.svg
          , J = F.win
          , I = w.seriesTypes
          , D = r.addEvent
          , K = r.arrayMax
          , C = r.arrayMin
          , A = r.clamp
          , y = r.cleanRecursively
          , n = r.correctFloat
          , u = r.defined
          , l = r.erase
          , k = r.error
          , e = r.extend
          , b = r.find
          , h = r.fireEvent
          , v = r.getNestedProperty
          , p = r.isArray
          , G = r.isNumber
          , Q = r.isString
          , S = r.merge
          , L = r.objectEach
          , P = r.pick
          , X = r.removeEvent
          , aa = r.splat
          , fa = r.syncTimeout;
        c = function() {
            function c() {
                this.zones = this.yAxis = this.xAxis = this.userOptions = this.tooltipOptions = this.processedYData = this.processedXData = this.points = this.options = this.linkedSeries = this.index = this.eventsToUnbind = this.eventOptions = this.data = this.chart = this._i = void 0
            }
            c.prototype.init = function(a, b) {
                h(this, "init", {
                    options: b
                });
                var d = this
                  , c = a.series;
                this.eventsToUnbind = [];
                d.chart = a;
                d.options = d.setOptions(b);
                b = d.options;
                d.linkedSeries = [];
                d.bindAxes();
                e(d, {
                    name: b.name,
                    state: "",
                    visible: !1 !== b.visible,
                    selected: !0 === b.selected
                });
                m(this, b);
                var k = b.events;
                if (k && k.click || b.point && b.point.events && b.point.events.click || b.allowPointSelect)
                    a.runTrackerClick = !0;
                d.getColor();
                d.getSymbol();
                d.parallelArrays.forEach(function(a) {
                    d[a + "Data"] || (d[a + "Data"] = [])
                });
                d.isCartesian && (a.hasCartesianSeries = !0);
                var p;
                c.length && (p = c[c.length - 1]);
                d._i = P(p && p._i, -1) + 1;
                d.opacity = d.options.opacity;
                a.orderSeries(this.insert(c));
                b.dataSorting && b.dataSorting.enabled ? d.setDataSortingOptions() : d.points || d.data || d.setData(b.data, !1);
                h(this, "afterInit")
            }
            ;
            c.prototype.is = function(a) {
                return I[a] && this instanceof I[a]
            }
            ;
            c.prototype.insert = function(a) {
                var b = this.options.index, e;
                if (G(b)) {
                    for (e = a.length; e--; )
                        if (b >= P(a[e].options.index, a[e]._i)) {
                            a.splice(e + 1, 0, this);
                            break
                        }
                    -1 === e && a.unshift(this);
                    e += 1
                } else
                    a.push(this);
                return P(e, a.length - 1)
            }
            ;
            c.prototype.bindAxes = function() {
                var a = this, b = a.options, e = a.chart, d;
                h(this, "bindAxes", null, function() {
                    (a.axisTypes || []).forEach(function(h) {
                        var c = 0;
                        e[h].forEach(function(e) {
                            d = e.options;
                            if (b[h] === c && !d.isInternal || "undefined" !== typeof b[h] && b[h] === d.id || "undefined" === typeof b[h] && 0 === d.index)
                                a.insert(e.series),
                                a[h] = e,
                                e.isDirty = !0;
                            d.isInternal || c++
                        });
                        a[h] || a.optionalAxis === h || k(18, !0, e)
                    })
                });
                h(this, "afterBindAxes")
            }
            ;
            c.prototype.updateParallelArrays = function(a, b) {
                var e = a.series
                  , d = arguments
                  , h = G(b) ? function(d) {
                    var h = "y" === d && e.toYData ? e.toYData(a) : a[d];
                    e[d + "Data"][b] = h
                }
                : function(a) {
                    Array.prototype[b].apply(e[a + "Data"], Array.prototype.slice.call(d, 2))
                }
                ;
                e.parallelArrays.forEach(h)
            }
            ;
            c.prototype.hasData = function() {
                return this.visible && "undefined" !== typeof this.dataMax && "undefined" !== typeof this.dataMin || this.visible && this.yData && 0 < this.yData.length
            }
            ;
            c.prototype.autoIncrement = function(a) {
                var b = this.options, e = b.pointIntervalUnit, d = b.relativeXValue, h = this.chart.time, c = this.xIncrement, k;
                c = P(c, b.pointStart, 0);
                this.pointInterval = k = P(this.pointInterval, b.pointInterval, 1);
                d && G(a) && (k *= a);
                e && (b = new h.Date(c),
                "day" === e ? h.set("Date", b, h.get("Date", b) + k) : "month" === e ? h.set("Month", b, h.get("Month", b) + k) : "year" === e && h.set("FullYear", b, h.get("FullYear", b) + k),
                k = b.getTime() - c);
                if (d && G(a))
                    return c + k;
                this.xIncrement = c + k;
                return c
            }
            ;
            c.prototype.setDataSortingOptions = function() {
                var a = this.options;
                e(this, {
                    requireSorting: !1,
                    sorted: !1,
                    enabledDataSorting: !0,
                    allowDG: !1
                });
                u(a.pointRange) || (a.pointRange = 1)
            }
            ;
            c.prototype.setOptions = function(a) {
                var b = this.chart
                  , e = b.options
                  , d = e.plotOptions
                  , c = b.userOptions || {};
                a = S(a);
                b = b.styledMode;
                var k = {
                    plotOptions: d,
                    userOptions: a
                };
                h(this, "setOptions", k);
                var p = k.plotOptions[this.type]
                  , l = c.plotOptions || {};
                this.userOptions = k.userOptions;
                c = S(p, d.series, c.plotOptions && c.plotOptions[this.type], a);
                this.tooltipOptions = S(g.tooltip, g.plotOptions.series && g.plotOptions.series.tooltip, g.plotOptions[this.type].tooltip, e.tooltip.userOptions, d.series && d.series.tooltip, d[this.type].tooltip, a.tooltip);
                this.stickyTracking = P(a.stickyTracking, l[this.type] && l[this.type].stickyTracking, l.series && l.series.stickyTracking, this.tooltipOptions.shared && !this.noSharedTooltip ? !0 : c.stickyTracking);
                null === p.marker && delete c.marker;
                this.zoneAxis = c.zoneAxis;
                d = this.zones = (c.zones || []).slice();
                !c.negativeColor && !c.negativeFillColor || c.zones || (e = {
                    value: c[this.zoneAxis + "Threshold"] || c.threshold || 0,
                    className: "highcharts-negative"
                },
                b || (e.color = c.negativeColor,
                e.fillColor = c.negativeFillColor),
                d.push(e));
                d.length && u(d[d.length - 1].value) && d.push(b ? {} : {
                    color: this.color,
                    fillColor: this.fillColor
                });
                h(this, "afterSetOptions", {
                    options: c
                });
                return c
            }
            ;
            c.prototype.getName = function() {
                return P(this.options.name, "Series " + (this.index + 1))
            }
            ;
            c.prototype.getCyclic = function(a, b, e) {
                var d = this.chart
                  , h = this.userOptions
                  , c = a + "Index"
                  , k = a + "Counter"
                  , p = e ? e.length : P(d.options.chart[a + "Count"], d[a + "Count"]);
                if (!b) {
                    var g = P(h[c], h["_" + c]);
                    u(g) || (d.series.length || (d[k] = 0),
                    h["_" + c] = g = d[k] % p,
                    d[k] += 1);
                    e && (b = e[g])
                }
                "undefined" !== typeof g && (this[c] = g);
                this[a] = b
            }
            ;
            c.prototype.getColor = function() {
                this.chart.styledMode ? this.getCyclic("color") : this.options.colorByPoint ? this.color = "#cccccc" : this.getCyclic("color", this.options.color || g.plotOptions[this.type].color, this.chart.options.colors)
            }
            ;
            c.prototype.getPointsCollection = function() {
                return (this.hasGroupedData ? this.points : this.data) || []
            }
            ;
            c.prototype.getSymbol = function() {
                this.getCyclic("symbol", this.options.marker.symbol, this.chart.options.symbols)
            }
            ;
            c.prototype.findPointIndex = function(a, e) {
                var d = a.id, h = a.x, c = this.points, k = this.options.dataSorting, p, g;
                if (d)
                    k = this.chart.get(d),
                    k instanceof E && (p = k);
                else if (this.linkedParent || this.enabledDataSorting || this.options.relativeXValue)
                    if (p = function(b) {
                        return !b.touched && b.index === a.index
                    }
                    ,
                    k && k.matchByName ? p = function(b) {
                        return !b.touched && b.name === a.name
                    }
                    : this.options.relativeXValue && (p = function(b) {
                        return !b.touched && b.options.x === a.x
                    }
                    ),
                    p = b(c, p),
                    !p)
                        return;
                if (p) {
                    var l = p && p.index;
                    "undefined" !== typeof l && (g = !0)
                }
                "undefined" === typeof l && G(h) && (l = this.xData.indexOf(h, e));
                -1 !== l && "undefined" !== typeof l && this.cropped && (l = l >= this.cropStart ? l - this.cropStart : l);
                !g && G(l) && c[l] && c[l].touched && (l = void 0);
                return l
            }
            ;
            c.prototype.updateData = function(a, b) {
                var e = this.options, d = e.dataSorting, h = this.points, c = [], k = this.requireSorting, p = a.length === h.length, g, l, n, m = !0;
                this.xIncrement = null;
                a.forEach(function(a, b) {
                    var l = u(a) && this.pointClass.prototype.optionsToObject.call({
                        series: this
                    }, a) || {}
                      , m = l.x;
                    if (l.id || G(m)) {
                        if (l = this.findPointIndex(l, n),
                        -1 === l || "undefined" === typeof l ? c.push(a) : h[l] && a !== e.data[l] ? (h[l].update(a, !1, null, !1),
                        h[l].touched = !0,
                        k && (n = l + 1)) : h[l] && (h[l].touched = !0),
                        !p || b !== l || d && d.enabled || this.hasDerivedData)
                            g = !0
                    } else
                        c.push(a)
                }, this);
                if (g)
                    for (a = h.length; a--; )
                        (l = h[a]) && !l.touched && l.remove && l.remove(!1, b);
                else
                    !p || d && d.enabled ? m = !1 : (a.forEach(function(a, b) {
                        a !== h[b].y && h[b].update && h[b].update(a, !1, null, !1)
                    }),
                    c.length = 0);
                h.forEach(function(a) {
                    a && (a.touched = !1)
                });
                if (!m)
                    return !1;
                c.forEach(function(a) {
                    this.addPoint(a, !1, null, null, !1)
                }, this);
                null === this.xIncrement && this.xData && this.xData.length && (this.xIncrement = K(this.xData),
                this.autoIncrement());
                return !0
            }
            ;
            c.prototype.setData = function(a, b, e, d) {
                void 0 === b && (b = !0);
                var h = this
                  , c = h.points
                  , g = c && c.length || 0
                  , l = h.options
                  , n = h.chart
                  , m = l.dataSorting
                  , v = h.xAxis
                  , u = l.turboThreshold
                  , f = this.xData
                  , q = this.yData
                  , r = h.pointArrayMap;
                r = r && r.length;
                var x = l.keys, t, y = 0, N = 1, A = null;
                if (!n.options.chart.allowMutatingData) {
                    l.data && delete h.options.data;
                    h.userOptions.data && delete h.userOptions.data;
                    var C = S(!0, a)
                }
                a = C || a || [];
                C = a.length;
                m && m.enabled && (a = this.sortData(a));
                n.options.chart.allowMutatingData && !1 !== d && C && g && !h.cropped && !h.hasGroupedData && h.visible && !h.boosted && (t = this.updateData(a, e));
                if (!t) {
                    h.xIncrement = null;
                    h.colorCounter = 0;
                    this.parallelArrays.forEach(function(a) {
                        h[a + "Data"].length = 0
                    });
                    if (u && C > u)
                        if (A = h.getFirstValidPoint(a),
                        G(A))
                            for (e = 0; e < C; e++)
                                f[e] = this.autoIncrement(),
                                q[e] = a[e];
                        else if (p(A))
                            if (r)
                                if (A.length === r)
                                    for (e = 0; e < C; e++)
                                        f[e] = this.autoIncrement(),
                                        q[e] = a[e];
                                else
                                    for (e = 0; e < C; e++)
                                        d = a[e],
                                        f[e] = d[0],
                                        q[e] = d.slice(1, r + 1);
                            else if (x && (y = x.indexOf("x"),
                            N = x.indexOf("y"),
                            y = 0 <= y ? y : 0,
                            N = 0 <= N ? N : 1),
                            1 === A.length && (N = 0),
                            y === N)
                                for (e = 0; e < C; e++)
                                    f[e] = this.autoIncrement(),
                                    q[e] = a[e][N];
                            else
                                for (e = 0; e < C; e++)
                                    d = a[e],
                                    f[e] = d[y],
                                    q[e] = d[N];
                        else
                            k(12, !1, n);
                    else
                        for (e = 0; e < C; e++)
                            "undefined" !== typeof a[e] && (d = {
                                series: h
                            },
                            h.pointClass.prototype.applyOptions.apply(d, [a[e]]),
                            h.updateParallelArrays(d, e));
                    q && Q(q[0]) && k(14, !0, n);
                    h.data = [];
                    h.options.data = h.userOptions.data = a;
                    for (e = g; e--; )
                        c[e] && c[e].destroy && c[e].destroy();
                    v && (v.minRange = v.userMinRange);
                    h.isDirty = n.isDirtyBox = !0;
                    h.isDirtyData = !!c;
                    e = !1
                }
                "point" === l.legendType && (this.processData(),
                this.generatePoints());
                b && n.redraw(e)
            }
            ;
            c.prototype.sortData = function(a) {
                var b = this
                  , e = b.options.dataSorting.sortKey || "y"
                  , d = function(a, b) {
                    return u(b) && a.pointClass.prototype.optionsToObject.call({
                        series: a
                    }, b) || {}
                };
                a.forEach(function(e, h) {
                    a[h] = d(b, e);
                    a[h].index = h
                }, this);
                a.concat().sort(function(a, b) {
                    a = v(e, a);
                    b = v(e, b);
                    return b < a ? -1 : b > a ? 1 : 0
                }).forEach(function(a, b) {
                    a.x = b
                }, this);
                b.linkedSeries && b.linkedSeries.forEach(function(b) {
                    var e = b.options
                      , h = e.data;
                    e.dataSorting && e.dataSorting.enabled || !h || (h.forEach(function(e, c) {
                        h[c] = d(b, e);
                        a[c] && (h[c].x = a[c].x,
                        h[c].index = c)
                    }),
                    b.setData(h, !1))
                });
                return a
            }
            ;
            c.prototype.getProcessedData = function(a) {
                var b = this.xAxis
                  , e = this.options
                  , d = e.cropThreshold
                  , h = a || this.getExtremesFromAll || e.getExtremesFromAll
                  , c = this.isCartesian;
                a = b && b.val2lin;
                e = !(!b || !b.logarithmic);
                var p = 0
                  , g = this.xData
                  , l = this.yData
                  , n = this.requireSorting;
                var m = !1;
                var v = g.length;
                if (b) {
                    m = b.getExtremes();
                    var u = m.min;
                    var f = m.max;
                    m = !(!b.categories || b.names.length)
                }
                if (c && this.sorted && !h && (!d || v > d || this.forceCrop))
                    if (g[v - 1] < u || g[0] > f)
                        g = [],
                        l = [];
                    else if (this.yData && (g[0] < u || g[v - 1] > f)) {
                        var q = this.cropData(this.xData, this.yData, u, f);
                        g = q.xData;
                        l = q.yData;
                        p = q.start;
                        q = !0
                    }
                for (d = g.length || 1; --d; )
                    if (b = e ? a(g[d]) - a(g[d - 1]) : g[d] - g[d - 1],
                    0 < b && ("undefined" === typeof G || b < G))
                        var G = b;
                    else
                        0 > b && n && !m && (k(15, !1, this.chart),
                        n = !1);
                return {
                    xData: g,
                    yData: l,
                    cropped: q,
                    cropStart: p,
                    closestPointRange: G
                }
            }
            ;
            c.prototype.processData = function(a) {
                var b = this.xAxis;
                if (this.isCartesian && !this.isDirty && !b.isDirty && !this.yAxis.isDirty && !a)
                    return !1;
                a = this.getProcessedData();
                this.cropped = a.cropped;
                this.cropStart = a.cropStart;
                this.processedXData = a.xData;
                this.processedYData = a.yData;
                this.closestPointRange = this.basePointRange = a.closestPointRange;
                h(this, "afterProcessData")
            }
            ;
            c.prototype.cropData = function(a, b, e, d, h) {
                var c = a.length, k, p = 0, g = c;
                h = P(h, this.cropShoulder);
                for (k = 0; k < c; k++)
                    if (a[k] >= e) {
                        p = Math.max(0, k - h);
                        break
                    }
                for (e = k; e < c; e++)
                    if (a[e] > d) {
                        g = e + h;
                        break
                    }
                return {
                    xData: a.slice(p, g),
                    yData: b.slice(p, g),
                    start: p,
                    end: g
                }
            }
            ;
            c.prototype.generatePoints = function() {
                var a = this.options
                  , b = this.processedData || a.data
                  , d = this.processedXData
                  , c = this.processedYData
                  , k = this.pointClass
                  , p = d.length
                  , g = this.cropStart || 0
                  , l = this.hasGroupedData
                  , n = a.keys
                  , m = [];
                a = a.dataGrouping && a.dataGrouping.groupAll ? g : 0;
                var v, u, q = this.data;
                if (!q && !l) {
                    var f = [];
                    f.length = b.length;
                    q = this.data = f
                }
                n && l && (this.options.keys = !1);
                for (u = 0; u < p; u++) {
                    f = g + u;
                    if (l) {
                        var G = (new k).init(this, [d[u]].concat(aa(c[u])));
                        G.dataGroup = this.groupMap[a + u];
                        G.dataGroup.options && (G.options = G.dataGroup.options,
                        e(G, G.dataGroup.options),
                        delete G.dataLabels)
                    } else
                        (G = q[f]) || "undefined" === typeof b[f] || (q[f] = G = (new k).init(this, b[f], d[u]));
                    G && (G.index = l ? a + u : f,
                    m[u] = G)
                }
                this.options.keys = n;
                if (q && (p !== (v = q.length) || l))
                    for (u = 0; u < v; u++)
                        u !== g || l || (u += p),
                        q[u] && (q[u].destroyElements(),
                        q[u].plotX = void 0);
                this.data = q;
                this.points = m;
                h(this, "afterGeneratePoints")
            }
            ;
            c.prototype.getXExtremes = function(a) {
                return {
                    min: C(a),
                    max: K(a)
                }
            }
            ;
            c.prototype.getExtremes = function(a, b) {
                var e = this.xAxis
                  , d = this.yAxis
                  , c = this.processedXData || this.xData
                  , k = []
                  , g = this.requireSorting ? this.cropShoulder : 0;
                d = d ? d.positiveValuesOnly : !1;
                var l, n = 0, m = 0, v = 0;
                a = a || this.stackedYData || this.processedYData || [];
                var u = a.length;
                if (e) {
                    var q = e.getExtremes();
                    n = q.min;
                    m = q.max
                }
                for (l = 0; l < u; l++) {
                    var f = c[l];
                    q = a[l];
                    var r = (G(q) || p(q)) && (q.length || 0 < q || !d);
                    f = b || this.getExtremesFromAll || this.options.getExtremesFromAll || this.cropped || !e || (c[l + g] || f) >= n && (c[l - g] || f) <= m;
                    if (r && f)
                        if (r = q.length)
                            for (; r--; )
                                G(q[r]) && (k[v++] = q[r]);
                        else
                            k[v++] = q
                }
                a = {
                    activeYData: k,
                    dataMin: C(k),
                    dataMax: K(k)
                };
                h(this, "afterGetExtremes", {
                    dataExtremes: a
                });
                return a
            }
            ;
            c.prototype.applyExtremes = function() {
                var a = this.getExtremes();
                this.dataMin = a.dataMin;
                this.dataMax = a.dataMax;
                return a
            }
            ;
            c.prototype.getFirstValidPoint = function(a) {
                for (var b = a.length, e = 0, d = null; null === d && e < b; )
                    d = a[e],
                    e++;
                return d
            }
            ;
            c.prototype.translate = function() {
                this.processedXData || this.processData();
                this.generatePoints();
                var a = this.options, b = a.stacking, e = this.xAxis, d = e.categories, c = this.enabledDataSorting, k = this.yAxis, g = this.points, l = g.length, m = this.pointPlacementToXValue(), v = !!m, q = a.threshold, f = a.startFromThreshold ? q : 0, r = this.zoneAxis || "y", x, t, y = Number.MAX_VALUE;
                for (x = 0; x < l; x++) {
                    var C = g[x]
                      , Q = C.x
                      , L = void 0
                      , J = void 0
                      , I = C.y
                      , w = C.low
                      , K = b && k.stacking && k.stacking.stacks[(this.negStacks && I < (f ? 0 : q) ? "-" : "") + this.stackKey];
                    if (k.positiveValuesOnly && !k.validatePositiveValue(I) || e.positiveValuesOnly && !e.validatePositiveValue(Q))
                        C.isNull = !0;
                    C.plotX = t = n(A(e.translate(Q, 0, 0, 0, 1, m, "flags" === this.type), -1E5, 1E5));
                    if (b && this.visible && K && K[Q]) {
                        var z = this.getStackIndicator(z, Q, this.index);
                        C.isNull || (L = K[Q],
                        J = L.points[z.key])
                    }
                    p(J) && (w = J[0],
                    I = J[1],
                    w === f && z.key === K[Q].base && (w = P(G(q) && q, k.min)),
                    k.positiveValuesOnly && 0 >= w && (w = null),
                    C.total = C.stackTotal = L.total,
                    C.percentage = L.total && C.y / L.total * 100,
                    C.stackY = I,
                    this.irregularWidths || L.setOffset(this.pointXOffset || 0, this.barW || 0));
                    C.yBottom = u(w) ? A(k.translate(w, 0, 1, 0, 1), -1E5, 1E5) : null;
                    this.dataModify && (I = this.dataModify.modifyValue(I, x));
                    C.plotY = void 0;
                    G(I) && (L = k.translate(I, !1, !0, !1, !0),
                    "undefined" !== typeof L && (C.plotY = A(L, -1E5, 1E5)));
                    C.isInside = this.isPointInside(C);
                    C.clientX = v ? n(e.translate(Q, 0, 0, 0, 1, m)) : t;
                    C.negative = C[r] < (a[r + "Threshold"] || q || 0);
                    C.category = P(d && d[C.x], C.x);
                    if (!C.isNull && !1 !== C.visible) {
                        "undefined" !== typeof S && (y = Math.min(y, Math.abs(t - S)));
                        var S = t
                    }
                    C.zone = this.zones.length ? C.getZone() : void 0;
                    !C.graphic && this.group && c && (C.isNew = !0)
                }
                this.closestPointRangePx = y;
                h(this, "afterTranslate")
            }
            ;
            c.prototype.getValidPoints = function(a, b, e) {
                var d = this.chart;
                return (a || this.points || []).filter(function(a) {
                    return b && !d.isInsidePlot(a.plotX, a.plotY, {
                        inverted: d.inverted
                    }) ? !1 : !1 !== a.visible && (e || !a.isNull)
                })
            }
            ;
            c.prototype.getClipBox = function() {
                var a = this.chart
                  , b = this.xAxis
                  , e = this.yAxis
                  , d = S(a.clipBox);
                b && b.len !== a.plotSizeX && (d.width = b.len);
                e && e.len !== a.plotSizeY && (d.height = e.len);
                return d
            }
            ;
            c.prototype.getSharedClipKey = function() {
                return this.sharedClipKey = (this.options.xAxis || 0) + "," + (this.options.yAxis || 0)
            }
            ;
            c.prototype.setClip = function() {
                var a = this.chart
                  , b = this.group
                  , e = this.markerGroup
                  , d = a.sharedClips;
                a = a.renderer;
                var h = this.getClipBox()
                  , c = this.getSharedClipKey()
                  , k = d[c];
                k ? k.animate(h) : d[c] = k = a.clipRect(h);
                b && b.clip(!1 === this.options.clip ? void 0 : k);
                e && e.clip()
            }
            ;
            c.prototype.animate = function(b) {
                var e = this.chart
                  , d = this.group
                  , h = this.markerGroup
                  , c = e.inverted
                  , k = a(this.options.animation)
                  , p = [this.getSharedClipKey(), k.duration, k.easing, k.defer].join()
                  , g = e.sharedClips[p]
                  , l = e.sharedClips[p + "m"];
                if (b && d)
                    k = this.getClipBox(),
                    g ? g.attr("height", k.height) : (k.width = 0,
                    c && (k.x = e.plotHeight),
                    g = e.renderer.clipRect(k),
                    e.sharedClips[p] = g,
                    l = e.renderer.clipRect({
                        x: c ? (e.plotSizeX || 0) + 99 : -99,
                        y: c ? -e.plotLeft : -e.plotTop,
                        width: 99,
                        height: c ? e.chartWidth : e.chartHeight
                    }),
                    e.sharedClips[p + "m"] = l),
                    d.clip(g),
                    h && h.clip(l);
                else if (g && !g.hasClass("highcharts-animating")) {
                    e = this.getClipBox();
                    var n = k.step;
                    h && h.element.childNodes.length && (k.step = function(a, b) {
                        n && n.apply(b, arguments);
                        l && l.element && l.attr(b.prop, "width" === b.prop ? a + 99 : a)
                    }
                    );
                    g.addClass("highcharts-animating").animate(e, k)
                }
            }
            ;
            c.prototype.afterAnimate = function() {
                var a = this;
                this.setClip();
                L(this.chart.sharedClips, function(b, e, d) {
                    b && !a.chart.container.querySelector('[clip-path="url(#'.concat(b.id, ')"]')) && (b.destroy(),
                    delete d[e])
                });
                this.finishedAnimating = !0;
                h(this, "afterAnimate")
            }
            ;
            c.prototype.drawPoints = function() {
                var a = this.points, b = this.chart, e = this.options.marker, d = this[this.specialGroup] || this.markerGroup, h = this.xAxis, c = P(e.enabled, !h || h.isRadial ? !0 : null, this.closestPointRangePx >= e.enabledThreshold * e.radius), k, p;
                if (!1 !== e.enabled || this._hasPointMarkers)
                    for (k = 0; k < a.length; k++) {
                        var g = a[k];
                        var l = (p = g.graphic) ? "animate" : "attr";
                        var n = g.marker || {};
                        var m = !!g.marker;
                        if ((c && "undefined" === typeof n.enabled || n.enabled) && !g.isNull && !1 !== g.visible) {
                            var v = P(n.symbol, this.symbol, "rect");
                            var u = this.markerAttribs(g, g.selected && "select");
                            this.enabledDataSorting && (g.startXPos = h.reversed ? -(u.width || 0) : h.width);
                            var q = !1 !== g.isInside;
                            p ? p[q ? "show" : "hide"](q).animate(u) : q && (0 < (u.width || 0) || g.hasImage) && (g.graphic = p = b.renderer.symbol(v, u.x, u.y, u.width, u.height, m ? n : e).add(d),
                            this.enabledDataSorting && b.hasRendered && (p.attr({
                                x: g.startXPos
                            }),
                            l = "animate"));
                            p && "animate" === l && p[q ? "show" : "hide"](q).animate(u);
                            if (p && !b.styledMode)
                                p[l](this.pointAttribs(g, g.selected && "select"));
                            p && p.addClass(g.getClassName(), !0)
                        } else
                            p && (g.graphic = p.destroy())
                    }
            }
            ;
            c.prototype.markerAttribs = function(a, b) {
                var e = this.options
                  , d = e.marker
                  , h = a.marker || {}
                  , c = h.symbol || d.symbol
                  , k = P(h.radius, d && d.radius);
                b && (d = d.states[b],
                b = h.states && h.states[b],
                k = P(b && b.radius, d && d.radius, k && k + (d && d.radiusPlus || 0)));
                a.hasImage = c && 0 === c.indexOf("url");
                a.hasImage && (k = 0);
                a = G(k) ? {
                    x: e.crisp ? Math.floor(a.plotX - k) : a.plotX - k,
                    y: a.plotY - k
                } : {};
                k && (a.width = a.height = 2 * k);
                return a
            }
            ;
            c.prototype.pointAttribs = function(a, b) {
                var e = this.options.marker
                  , d = a && a.options
                  , h = d && d.marker || {}
                  , c = d && d.color
                  , k = a && a.color
                  , p = a && a.zone && a.zone.color
                  , g = this.color;
                a = P(h.lineWidth, e.lineWidth);
                d = 1;
                g = c || p || k || g;
                c = h.fillColor || e.fillColor || g;
                k = h.lineColor || e.lineColor || g;
                b = b || "normal";
                e = e.states[b] || {};
                b = h.states && h.states[b] || {};
                a = P(b.lineWidth, e.lineWidth, a + P(b.lineWidthPlus, e.lineWidthPlus, 0));
                c = b.fillColor || e.fillColor || c;
                k = b.lineColor || e.lineColor || k;
                d = P(b.opacity, e.opacity, d);
                return {
                    stroke: k,
                    "stroke-width": a,
                    fill: c,
                    opacity: d
                }
            }
            ;
            c.prototype.destroy = function(a) {
                var b = this, e = b.chart, d = /AppleWebKit\/533/.test(J.navigator.userAgent), c = b.data || [], k, p, g, n;
                h(b, "destroy", {
                    keepEventsForUpdate: a
                });
                this.removeEvents(a);
                (b.axisTypes || []).forEach(function(a) {
                    (n = b[a]) && n.series && (l(n.series, b),
                    n.isDirty = n.forceRedraw = !0)
                });
                b.legendItem && b.chart.legend.destroyItem(b);
                for (p = c.length; p--; )
                    (g = c[p]) && g.destroy && g.destroy();
                b.clips && b.clips.forEach(function(a) {
                    return a.destroy()
                });
                r.clearTimeout(b.animationTimeout);
                L(b, function(a, b) {
                    a instanceof t && !a.survive && (k = d && "group" === b ? "hide" : "destroy",
                    a[k]())
                });
                e.hoverSeries === b && (e.hoverSeries = void 0);
                l(e.series, b);
                e.orderSeries();
                L(b, function(e, d) {
                    a && "hcEvents" === d || delete b[d]
                })
            }
            ;
            c.prototype.applyZones = function() {
                var a = this, b = this.chart, e = b.renderer, d = this.zones, h = this.clips || [], c = this.graph, k = this.area, p = Math.max(b.plotWidth, b.plotHeight), g = this[(this.zoneAxis || "y") + "Axis"], l = b.inverted, n, m, v, u, q, f, G, r, x = !1;
                if (d.length && (c || k) && g && "undefined" !== typeof g.min) {
                    var t = g.reversed;
                    var y = g.horiz;
                    c && !this.showLine && c.hide();
                    k && k.hide();
                    var C = g.getExtremes();
                    d.forEach(function(d, Q) {
                        n = t ? y ? b.plotWidth : 0 : y ? 0 : g.toPixels(C.min) || 0;
                        n = A(P(m, n), 0, p);
                        m = A(Math.round(g.toPixels(P(d.value, C.max), !0) || 0), 0, p);
                        x && (n = m = g.toPixels(C.max));
                        u = Math.abs(n - m);
                        q = Math.min(n, m);
                        f = Math.max(n, m);
                        g.isXAxis ? (v = {
                            x: l ? f : q,
                            y: 0,
                            width: u,
                            height: p
                        },
                        y || (v.x = b.plotHeight - v.x)) : (v = {
                            x: 0,
                            y: l ? f : q,
                            width: p,
                            height: u
                        },
                        y && (v.y = b.plotWidth - v.y));
                        l && e.isVML && (v = g.isXAxis ? {
                            x: 0,
                            y: t ? q : f,
                            height: v.width,
                            width: b.chartWidth
                        } : {
                            x: v.y - b.plotLeft - b.spacingBox.x,
                            y: 0,
                            width: v.height,
                            height: b.chartHeight
                        });
                        h[Q] ? h[Q].animate(v) : h[Q] = e.clipRect(v);
                        G = a["zone-area-" + Q];
                        r = a["zone-graph-" + Q];
                        c && r && r.clip(h[Q]);
                        k && G && G.clip(h[Q]);
                        x = d.value > C.max;
                        a.resetZones && 0 === m && (m = void 0)
                    });
                    this.clips = h
                } else
                    a.visible && (c && c.show(),
                    k && k.show())
            }
            ;
            c.prototype.invertGroups = function(a) {
                function b() {
                    ["group", "markerGroup"].forEach(function(b) {
                        e[b] && (d.renderer.isVML && e[b].attr({
                            width: e.yAxis.len,
                            height: e.xAxis.len
                        }),
                        e[b].width = e.yAxis.len,
                        e[b].height = e.xAxis.len,
                        e[b].invert(e.isRadialSeries ? !1 : a))
                    })
                }
                var e = this
                  , d = e.chart;
                e.xAxis && (e.eventsToUnbind.push(D(d, "resize", b)),
                b(),
                e.invertGroups = b)
            }
            ;
            c.prototype.plotGroup = function(a, b, e, d, h) {
                var c = this[a]
                  , k = !c;
                e = {
                    visibility: e,
                    zIndex: d || .1
                };
                "undefined" === typeof this.opacity || this.chart.styledMode || "inactive" === this.state || (e.opacity = this.opacity);
                k && (this[a] = c = this.chart.renderer.g().add(h));
                c.addClass("highcharts-" + b + " highcharts-series-" + this.index + " highcharts-" + this.type + "-series " + (u(this.colorIndex) ? "highcharts-color-" + this.colorIndex + " " : "") + (this.options.className || "") + (c.hasClass("highcharts-tracker") ? " highcharts-tracker" : ""), !0);
                c.attr(e)[k ? "attr" : "animate"](this.getPlotBox());
                return c
            }
            ;
            c.prototype.getPlotBox = function() {
                var a = this.chart
                  , b = this.xAxis
                  , e = this.yAxis;
                a.inverted && (b = e,
                e = this.xAxis);
                return {
                    translateX: b ? b.left : a.plotLeft,
                    translateY: e ? e.top : a.plotTop,
                    scaleX: 1,
                    scaleY: 1
                }
            }
            ;
            c.prototype.removeEvents = function(a) {
                a || X(this);
                this.eventsToUnbind.length && (this.eventsToUnbind.forEach(function(a) {
                    a()
                }),
                this.eventsToUnbind.length = 0)
            }
            ;
            c.prototype.render = function() {
                var b = this
                  , e = b.chart
                  , d = b.options
                  , c = a(d.animation)
                  , k = b.visible ? "inherit" : "hidden"
                  , p = d.zIndex
                  , g = b.hasRendered
                  , l = e.seriesGroup
                  , n = e.inverted;
                e = !b.finishedAnimating && e.renderer.isSVG ? c.duration : 0;
                h(this, "render");
                var m = b.plotGroup("group", "series", k, p, l);
                b.markerGroup = b.plotGroup("markerGroup", "markers", k, p, l);
                !1 !== d.clip && b.setClip();
                b.animate && e && b.animate(!0);
                m.inverted = P(b.invertible, b.isCartesian) ? n : !1;
                b.drawGraph && (b.drawGraph(),
                b.applyZones());
                b.visible && b.drawPoints();
                b.drawDataLabels && b.drawDataLabels();
                b.redrawPoints && b.redrawPoints();
                b.drawTracker && !1 !== b.options.enableMouseTracking && b.drawTracker();
                b.invertGroups(n);
                b.animate && e && b.animate();
                g || (e && c.defer && (e += c.defer),
                b.animationTimeout = fa(function() {
                    b.afterAnimate()
                }, e || 0));
                b.isDirty = !1;
                b.hasRendered = !0;
                h(b, "afterRender")
            }
            ;
            c.prototype.redraw = function() {
                var a = this.chart
                  , b = this.isDirty || this.isDirtyData
                  , e = this.group
                  , d = this.xAxis
                  , h = this.yAxis;
                e && (a.inverted && e.attr({
                    width: a.plotWidth,
                    height: a.plotHeight
                }),
                e.animate({
                    translateX: P(d && d.left, a.plotLeft),
                    translateY: P(h && h.top, a.plotTop)
                }));
                this.translate();
                this.render();
                b && delete this.kdTree
            }
            ;
            c.prototype.searchPoint = function(a, b) {
                var e = this.xAxis
                  , d = this.yAxis
                  , h = this.chart.inverted;
                return this.searchKDTree({
                    clientX: h ? e.len - a.chartY + e.pos : a.chartX - e.pos,
                    plotY: h ? d.len - a.chartX + d.pos : a.chartY - d.pos
                }, b, a)
            }
            ;
            c.prototype.buildKDTree = function(a) {
                function b(a, d, h) {
                    var c = a && a.length;
                    if (c) {
                        var k = e.kdAxisArray[d % h];
                        a.sort(function(a, b) {
                            return a[k] - b[k]
                        });
                        c = Math.floor(c / 2);
                        return {
                            point: a[c],
                            left: b(a.slice(0, c), d + 1, h),
                            right: b(a.slice(c + 1), d + 1, h)
                        }
                    }
                }
                this.buildingKdTree = !0;
                var e = this
                  , d = -1 < e.options.findNearestPointBy.indexOf("y") ? 2 : 1;
                delete e.kdTree;
                fa(function() {
                    e.kdTree = b(e.getValidPoints(null, !e.directTouch), d, d);
                    e.buildingKdTree = !1
                }, e.options.kdNow || a && "touchstart" === a.type ? 0 : 1)
            }
            ;
            c.prototype.searchKDTree = function(a, b, e) {
                function d(a, b, e, g) {
                    var l = b.point
                      , n = h.kdAxisArray[e % g]
                      , m = l
                      , v = u(a[c]) && u(l[c]) ? Math.pow(a[c] - l[c], 2) : null;
                    var q = u(a[k]) && u(l[k]) ? Math.pow(a[k] - l[k], 2) : null;
                    q = (v || 0) + (q || 0);
                    l.dist = u(q) ? Math.sqrt(q) : Number.MAX_VALUE;
                    l.distX = u(v) ? Math.sqrt(v) : Number.MAX_VALUE;
                    n = a[n] - l[n];
                    q = 0 > n ? "left" : "right";
                    v = 0 > n ? "right" : "left";
                    b[q] && (q = d(a, b[q], e + 1, g),
                    m = q[p] < m[p] ? q : l);
                    b[v] && Math.sqrt(n * n) < m[p] && (a = d(a, b[v], e + 1, g),
                    m = a[p] < m[p] ? a : m);
                    return m
                }
                var h = this
                  , c = this.kdAxisArray[0]
                  , k = this.kdAxisArray[1]
                  , p = b ? "distX" : "dist";
                b = -1 < h.options.findNearestPointBy.indexOf("y") ? 2 : 1;
                this.kdTree || this.buildingKdTree || this.buildKDTree(e);
                if (this.kdTree)
                    return d(a, this.kdTree, b, b)
            }
            ;
            c.prototype.pointPlacementToXValue = function() {
                var a = this.options
                  , b = a.pointRange
                  , e = this.xAxis;
                a = a.pointPlacement;
                "between" === a && (a = e.reversed ? -.5 : .5);
                return G(a) ? a * (b || e.pointRange) : 0
            }
            ;
            c.prototype.isPointInside = function(a) {
                var b = this.chart
                  , e = this.xAxis
                  , d = this.yAxis;
                return "undefined" !== typeof a.plotY && "undefined" !== typeof a.plotX && 0 <= a.plotY && a.plotY <= (d ? d.len : b.plotHeight) && 0 <= a.plotX && a.plotX <= (e ? e.len : b.plotWidth)
            }
            ;
            c.prototype.drawTracker = function() {
                var a = this
                  , b = a.options
                  , e = b.trackByArea
                  , d = [].concat(e ? a.areaPath : a.graphPath)
                  , c = a.chart
                  , k = c.pointer
                  , p = c.renderer
                  , g = c.options.tooltip.snap
                  , l = a.tracker
                  , n = function(b) {
                    if (c.hoverSeries !== a)
                        a.onMouseOver()
                }
                  , m = "rgba(192,192,192," + (x ? .0001 : .002) + ")";
                l ? l.attr({
                    d: d
                }) : a.graph && (a.tracker = p.path(d).attr({
                    visibility: a.visible ? "inherit" : "hidden",
                    zIndex: 2
                }).addClass(e ? "highcharts-tracker-area" : "highcharts-tracker-line").add(a.group),
                c.styledMode || a.tracker.attr({
                    "stroke-linecap": "round",
                    "stroke-linejoin": "round",
                    stroke: m,
                    fill: e ? m : "none",
                    "stroke-width": a.graph.strokeWidth() + (e ? 0 : 2 * g)
                }),
                [a.tracker, a.markerGroup, a.dataLabelsGroup].forEach(function(a) {
                    if (a && (a.addClass("highcharts-tracker").on("mouseover", n).on("mouseout", function(a) {
                        k.onTrackerMouseOut(a)
                    }),
                    b.cursor && !c.styledMode && a.css({
                        cursor: b.cursor
                    }),
                    q))
                        a.on("touchstart", n)
                }));
                h(this, "afterDrawTracker")
            }
            ;
            c.prototype.addPoint = function(a, b, e, d, c) {
                var k = this.options
                  , p = this.data
                  , g = this.chart
                  , l = this.xAxis;
                l = l && l.hasNames && l.names;
                var n = k.data, m = this.xData, v;
                b = P(b, !0);
                var u = {
                    series: this
                };
                this.pointClass.prototype.applyOptions.apply(u, [a]);
                var q = u.x;
                var f = m.length;
                if (this.requireSorting && q < m[f - 1])
                    for (v = !0; f && m[f - 1] > q; )
                        f--;
                this.updateParallelArrays(u, "splice", f, 0, 0);
                this.updateParallelArrays(u, f);
                l && u.name && (l[q] = u.name);
                n.splice(f, 0, a);
                if (v || this.processedData)
                    this.data.splice(f, 0, null),
                    this.processData();
                "point" === k.legendType && this.generatePoints();
                e && (p[0] && p[0].remove ? p[0].remove(!1) : (p.shift(),
                this.updateParallelArrays(u, "shift"),
                n.shift()));
                !1 !== c && h(this, "addPoint", {
                    point: u
                });
                this.isDirtyData = this.isDirty = !0;
                b && g.redraw(d)
            }
            ;
            c.prototype.removePoint = function(a, b, e) {
                var h = this
                  , c = h.data
                  , k = c[a]
                  , p = h.points
                  , g = h.chart
                  , l = function() {
                    p && p.length === c.length && p.splice(a, 1);
                    c.splice(a, 1);
                    h.options.data.splice(a, 1);
                    h.updateParallelArrays(k || {
                        series: h
                    }, "splice", a, 1);
                    k && k.destroy();
                    h.isDirty = !0;
                    h.isDirtyData = !0;
                    b && g.redraw()
                };
                d(e, g);
                b = P(b, !0);
                k ? k.firePointEvent("remove", null, l) : l()
            }
            ;
            c.prototype.remove = function(a, b, e, d) {
                function c() {
                    k.destroy(d);
                    p.isDirtyLegend = p.isDirtyBox = !0;
                    p.linkSeries();
                    P(a, !0) && p.redraw(b)
                }
                var k = this
                  , p = k.chart;
                !1 !== e ? h(k, "remove", null, c) : c()
            }
            ;
            c.prototype.update = function(a, b) {
                a = y(a, this.userOptions);
                h(this, "update", {
                    options: a
                });
                var d = this, c = d.chart, p = d.userOptions, g = d.initialType || d.type, l = c.options.plotOptions, n = I[g].prototype, m = d.finishedAnimating && {
                    animation: !1
                }, v = {}, u, q = ["eventOptions", "navigatorSeries", "baseSeries"], f = a.type || p.type || c.options.chart.type, G = !(this.hasDerivedData || f && f !== this.type || "undefined" !== typeof a.pointStart || "undefined" !== typeof a.pointInterval || "undefined" !== typeof a.relativeXValue || a.joinBy || a.mapData || d.hasOptionChanged("dataGrouping") || d.hasOptionChanged("pointStart") || d.hasOptionChanged("pointInterval") || d.hasOptionChanged("pointIntervalUnit") || d.hasOptionChanged("keys"));
                f = f || g;
                G && (q.push("data", "isDirtyData", "points", "processedData", "processedXData", "processedYData", "xIncrement", "cropped", "_hasPointMarkers", "_hasPointLabels", "clips", "nodes", "layout", "level", "mapMap", "mapData", "minY", "maxY", "minX", "maxX"),
                !1 !== a.visible && q.push("area", "graph"),
                d.parallelArrays.forEach(function(a) {
                    q.push(a + "Data")
                }),
                a.data && (a.dataSorting && e(d.options.dataSorting, a.dataSorting),
                this.setData(a.data, !1)));
                a = S(p, m, {
                    index: "undefined" === typeof p.index ? d.index : p.index,
                    pointStart: P(l && l.series && l.series.pointStart, p.pointStart, d.xData[0])
                }, !G && {
                    data: d.options.data
                }, a);
                G && a.data && (a.data = d.options.data);
                q = ["group", "markerGroup", "dataLabelsGroup", "transformGroup"].concat(q);
                q.forEach(function(a) {
                    q[a] = d[a];
                    delete d[a]
                });
                l = !1;
                if (I[f]) {
                    if (l = f !== d.type,
                    d.remove(!1, !1, !1, !0),
                    l)
                        if (Object.setPrototypeOf)
                            Object.setPrototypeOf(d, I[f].prototype);
                        else {
                            m = Object.hasOwnProperty.call(d, "hcEvents") && d.hcEvents;
                            for (u in n)
                                d[u] = void 0;
                            e(d, I[f].prototype);
                            m ? d.hcEvents = m : delete d.hcEvents
                        }
                } else
                    k(17, !0, c, {
                        missingModuleFor: f
                    });
                q.forEach(function(a) {
                    d[a] = q[a]
                });
                d.init(c, a);
                if (G && this.points) {
                    var r = d.options;
                    !1 === r.visible ? (v.graphic = 1,
                    v.dataLabel = 1) : d._hasPointLabels || (a = r.marker,
                    n = r.dataLabels,
                    !a || !1 !== a.enabled && (p.marker && p.marker.symbol) === a.symbol || (v.graphic = 1),
                    n && !1 === n.enabled && (v.dataLabel = 1));
                    this.points.forEach(function(a) {
                        a && a.series && (a.resolveColor(),
                        Object.keys(v).length && a.destroyElements(v),
                        !1 === r.showInLegend && a.legendItem && c.legend.destroyItem(a))
                    }, this)
                }
                d.initialType = g;
                c.linkSeries();
                l && d.linkedSeries.length && (d.isDirtyData = !0);
                h(this, "afterUpdate");
                P(b, !0) && c.redraw(G ? void 0 : !1)
            }
            ;
            c.prototype.setName = function(a) {
                this.name = this.options.name = this.userOptions.name = a;
                this.chart.isDirtyLegend = !0
            }
            ;
            c.prototype.hasOptionChanged = function(a) {
                var b = this.options[a]
                  , e = this.chart.options.plotOptions
                  , d = this.userOptions[a];
                return d ? b !== d : b !== P(e && e[this.type] && e[this.type][a], e && e.series && e.series[a], b)
            }
            ;
            c.prototype.onMouseOver = function() {
                var a = this.chart
                  , b = a.hoverSeries;
                a.pointer.setHoverChartIndex();
                if (b && b !== this)
                    b.onMouseOut();
                this.options.events.mouseOver && h(this, "mouseOver");
                this.setState("hover");
                a.hoverSeries = this
            }
            ;
            c.prototype.onMouseOut = function() {
                var a = this.options
                  , b = this.chart
                  , e = b.tooltip
                  , d = b.hoverPoint;
                b.hoverSeries = null;
                if (d)
                    d.onMouseOut();
                this && a.events.mouseOut && h(this, "mouseOut");
                !e || this.stickyTracking || e.shared && !this.noSharedTooltip || e.hide();
                b.series.forEach(function(a) {
                    a.setState("", !0)
                })
            }
            ;
            c.prototype.setState = function(a, b) {
                var e = this
                  , d = e.options
                  , h = e.graph
                  , c = d.inactiveOtherPoints
                  , k = d.states
                  , p = P(k[a || "normal"] && k[a || "normal"].animation, e.chart.options.chart.animation)
                  , g = d.lineWidth
                  , l = 0
                  , n = d.opacity;
                a = a || "";
                if (e.state !== a && ([e.group, e.markerGroup, e.dataLabelsGroup].forEach(function(b) {
                    b && (e.state && b.removeClass("highcharts-series-" + e.state),
                    a && b.addClass("highcharts-series-" + a))
                }),
                e.state = a,
                !e.chart.styledMode)) {
                    if (k[a] && !1 === k[a].enabled)
                        return;
                    a && (g = k[a].lineWidth || g + (k[a].lineWidthPlus || 0),
                    n = P(k[a].opacity, n));
                    if (h && !h.dashstyle)
                        for (d = {
                            "stroke-width": g
                        },
                        h.animate(d, p); e["zone-graph-" + l]; )
                            e["zone-graph-" + l].animate(d, p),
                            l += 1;
                    c || [e.group, e.markerGroup, e.dataLabelsGroup, e.labelBySeries].forEach(function(a) {
                        a && a.animate({
                            opacity: n
                        }, p)
                    })
                }
                b && c && e.points && e.setAllPointsToState(a || void 0)
            }
            ;
            c.prototype.setAllPointsToState = function(a) {
                this.points.forEach(function(b) {
                    b.setState && b.setState(a)
                })
            }
            ;
            c.prototype.setVisible = function(a, b) {
                var e = this
                  , d = e.chart
                  , c = e.legendItem
                  , k = d.options.chart.ignoreHiddenSeries
                  , p = e.visible
                  , g = (e.visible = a = e.options.visible = e.userOptions.visible = "undefined" === typeof a ? !p : a) ? "show" : "hide";
                ["group", "dataLabelsGroup", "markerGroup", "tracker", "tt"].forEach(function(a) {
                    if (e[a])
                        e[a][g]()
                });
                if (d.hoverSeries === e || (d.hoverPoint && d.hoverPoint.series) === e)
                    e.onMouseOut();
                c && d.legend.colorizeItem(e, a);
                e.isDirty = !0;
                e.options.stacking && d.series.forEach(function(a) {
                    a.options.stacking && a.visible && (a.isDirty = !0)
                });
                e.linkedSeries.forEach(function(b) {
                    b.setVisible(a, !1)
                });
                k && (d.isDirtyBox = !0);
                h(e, g);
                !1 !== b && d.redraw()
            }
            ;
            c.prototype.show = function() {
                this.setVisible(!0)
            }
            ;
            c.prototype.hide = function() {
                this.setVisible(!1)
            }
            ;
            c.prototype.select = function(a) {
                this.selected = a = this.options.selected = "undefined" === typeof a ? !this.selected : a;
                this.checkbox && (this.checkbox.checked = a);
                h(this, a ? "select" : "unselect")
            }
            ;
            c.prototype.shouldShowTooltip = function(a, b, e) {
                void 0 === e && (e = {});
                e.series = this;
                e.visiblePlotOnly = !0;
                return this.chart.isInsidePlot(a, b, e)
            }
            ;
            c.defaultOptions = H;
            c.types = w.seriesTypes;
            c.registerType = w.registerSeriesType;
            return c
        }();
        e(c.prototype, {
            axisTypes: ["xAxis", "yAxis"],
            coll: "series",
            colorCounter: 0,
            cropShoulder: 1,
            directTouch: !1,
            drawLegendSymbol: z.drawLineMarker,
            isCartesian: !0,
            kdAxisArray: ["clientX", "plotY"],
            parallelArrays: ["x", "y"],
            pointClass: E,
            requireSorting: !0,
            sorted: !0
        });
        w.series = c;
        "";
        "";
        return c
    });
    O(f, "Extensions/ScrollablePlotArea.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/Axis/Axis.js"], f["Core/Chart/Chart.js"], f["Core/Series/Series.js"], f["Core/Renderer/RendererRegistry.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E) {
        var D = c.stop
          , w = E.addEvent
          , t = E.createElement
          , r = E.defined
          , a = E.merge
          , d = E.pick;
        w(B, "afterSetChartSize", function(d) {
            var c = this.options.chart.scrollablePlotArea
              , g = c && c.minWidth;
            c = c && c.minHeight;
            if (!this.renderer.forExport) {
                if (g) {
                    if (this.scrollablePixelsX = g = Math.max(0, g - this.chartWidth)) {
                        this.scrollablePlotBox = this.renderer.scrollablePlotBox = a(this.plotBox);
                        this.plotBox.width = this.plotWidth += g;
                        this.inverted ? this.clipBox.height += g : this.clipBox.width += g;
                        var x = {
                            1: {
                                name: "right",
                                value: g
                            }
                        }
                    }
                } else
                    c && (this.scrollablePixelsY = g = Math.max(0, c - this.chartHeight),
                    r(g) && (this.scrollablePlotBox = this.renderer.scrollablePlotBox = a(this.plotBox),
                    this.plotBox.height = this.plotHeight += g,
                    this.inverted ? this.clipBox.width += g : this.clipBox.height += g,
                    x = {
                        2: {
                            name: "bottom",
                            value: g
                        }
                    }));
                x && !d.skipAxes && this.axes.forEach(function(a) {
                    x[a.side] ? a.getPlotLinePath = function() {
                        var d = x[a.side].name
                          , c = this[d];
                        this[d] = c - x[a.side].value;
                        var g = f.prototype.getPlotLinePath.apply(this, arguments);
                        this[d] = c;
                        return g
                    }
                    : (a.setAxisSize(),
                    a.setAxisTranslation())
                })
            }
        });
        w(B, "render", function() {
            this.scrollablePixelsX || this.scrollablePixelsY ? (this.setUpScrolling && this.setUpScrolling(),
            this.applyFixed()) : this.fixedDiv && this.applyFixed()
        });
        B.prototype.setUpScrolling = function() {
            var a = this
              , d = {
                WebkitOverflowScrolling: "touch",
                overflowX: "hidden",
                overflowY: "hidden"
            };
            this.scrollablePixelsX && (d.overflowX = "auto");
            this.scrollablePixelsY && (d.overflowY = "auto");
            this.scrollingParent = t("div", {
                className: "highcharts-scrolling-parent"
            }, {
                position: "relative"
            }, this.renderTo);
            this.scrollingContainer = t("div", {
                className: "highcharts-scrolling"
            }, d, this.scrollingParent);
            w(this.scrollingContainer, "scroll", function() {
                a.pointer && delete a.pointer.chartPosition
            });
            this.innerContainer = t("div", {
                className: "highcharts-inner-container"
            }, null, this.scrollingContainer);
            this.innerContainer.appendChild(this.container);
            this.setUpScrolling = null
        }
        ;
        B.prototype.moveFixedElements = function() {
            var a = this.container, d = this.fixedRenderer, c = ".highcharts-contextbutton .highcharts-credits .highcharts-legend .highcharts-legend-checkbox .highcharts-navigator-series .highcharts-navigator-xaxis .highcharts-navigator-yaxis .highcharts-navigator .highcharts-reset-zoom .highcharts-drillup-button .highcharts-scrollbar .highcharts-subtitle .highcharts-title".split(" "), f;
            this.scrollablePixelsX && !this.inverted ? f = ".highcharts-yaxis" : this.scrollablePixelsX && this.inverted ? f = ".highcharts-xaxis" : this.scrollablePixelsY && !this.inverted ? f = ".highcharts-xaxis" : this.scrollablePixelsY && this.inverted && (f = ".highcharts-yaxis");
            f && c.push("" + f + ":not(.highcharts-radial-axis)", "" + f + "-labels:not(.highcharts-radial-axis-labels)");
            c.forEach(function(c) {
                [].forEach.call(a.querySelectorAll(c), function(a) {
                    (a.namespaceURI === d.SVG_NS ? d.box : d.box.parentNode).appendChild(a);
                    a.style.pointerEvents = "auto"
                })
            })
        }
        ;
        B.prototype.applyFixed = function() {
            var a = !this.fixedDiv
              , c = this.options.chart
              , f = c.scrollablePlotArea
              , r = z.getRendererType();
            a ? (this.fixedDiv = t("div", {
                className: "highcharts-fixed"
            }, {
                position: "absolute",
                overflow: "hidden",
                pointerEvents: "none",
                zIndex: (c.style && c.style.zIndex || 0) + 2,
                top: 0
            }, null, !0),
            this.scrollingContainer && this.scrollingContainer.parentNode.insertBefore(this.fixedDiv, this.scrollingContainer),
            this.renderTo.style.overflow = "visible",
            this.fixedRenderer = c = new r(this.fixedDiv,this.chartWidth,this.chartHeight,this.options.chart.style),
            this.scrollableMask = c.path().attr({
                fill: this.options.chart.backgroundColor || "#fff",
                "fill-opacity": d(f.opacity, .85),
                zIndex: -1
            }).addClass("highcharts-scrollable-mask").add(),
            w(this, "afterShowResetZoom", this.moveFixedElements),
            w(this, "afterApplyDrilldown", this.moveFixedElements),
            w(this, "afterLayOutTitles", this.moveFixedElements)) : this.fixedRenderer.setSize(this.chartWidth, this.chartHeight);
            if (this.scrollableDirty || a)
                this.scrollableDirty = !1,
                this.moveFixedElements();
            c = this.chartWidth + (this.scrollablePixelsX || 0);
            r = this.chartHeight + (this.scrollablePixelsY || 0);
            D(this.container);
            this.container.style.width = c + "px";
            this.container.style.height = r + "px";
            this.renderer.boxWrapper.attr({
                width: c,
                height: r,
                viewBox: [0, 0, c, r].join(" ")
            });
            this.chartBackground.attr({
                width: c,
                height: r
            });
            this.scrollingContainer.style.height = this.chartHeight + "px";
            a && (f.scrollPositionX && (this.scrollingContainer.scrollLeft = this.scrollablePixelsX * f.scrollPositionX),
            f.scrollPositionY && (this.scrollingContainer.scrollTop = this.scrollablePixelsY * f.scrollPositionY));
            r = this.axisOffset;
            a = this.plotTop - r[0] - 1;
            f = this.plotLeft - r[3] - 1;
            c = this.plotTop + this.plotHeight + r[2] + 1;
            r = this.plotLeft + this.plotWidth + r[1] + 1;
            var J = this.plotLeft + this.plotWidth - (this.scrollablePixelsX || 0)
              , I = this.plotTop + this.plotHeight - (this.scrollablePixelsY || 0);
            a = this.scrollablePixelsX ? [["M", 0, a], ["L", this.plotLeft - 1, a], ["L", this.plotLeft - 1, c], ["L", 0, c], ["Z"], ["M", J, a], ["L", this.chartWidth, a], ["L", this.chartWidth, c], ["L", J, c], ["Z"]] : this.scrollablePixelsY ? [["M", f, 0], ["L", f, this.plotTop - 1], ["L", r, this.plotTop - 1], ["L", r, 0], ["Z"], ["M", f, I], ["L", f, this.chartHeight], ["L", r, this.chartHeight], ["L", r, I], ["Z"]] : [["M", 0, 0]];
            "adjustHeight" !== this.redrawTrigger && this.scrollableMask.attr({
                d: a
            })
        }
        ;
        w(f, "afterInit", function() {
            this.chart.scrollableDirty = !0
        });
        w(F, "show", function() {
            this.chart.scrollableDirty = !0
        });
        ""
    });
    O(f, "Core/Axis/Stacking/StackItem.js", [f["Core/FormatUtilities.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = c.format
          , z = f.series
          , E = B.defined
          , H = B.destroyObjectProperties
          , w = B.isNumber
          , t = B.pick;
        c = function() {
            function c(a, d, c, m, f) {
                var g = a.chart.inverted;
                this.axis = a;
                this.isNegative = c;
                this.options = d = d || {};
                this.x = m;
                this.cumulative = this.total = null;
                this.points = {};
                this.hasValidPoints = !1;
                this.stack = f;
                this.rightCliff = this.leftCliff = 0;
                this.alignOptions = {
                    align: d.align || (g ? c ? "left" : "right" : "center"),
                    verticalAlign: d.verticalAlign || (g ? "middle" : c ? "bottom" : "top"),
                    y: d.y,
                    x: d.x
                };
                this.textAlign = d.textAlign || (g ? c ? "right" : "left" : "center")
            }
            c.prototype.destroy = function() {
                H(this, this.axis)
            }
            ;
            c.prototype.render = function(a) {
                var d = this.axis.chart
                  , c = this.options
                  , m = c.format;
                m = m ? D(m, this, d) : c.formatter.call(this);
                this.label ? this.label.attr({
                    text: m,
                    visibility: "hidden"
                }) : (this.label = d.renderer.label(m, null, null, c.shape, null, null, c.useHTML, !1, "stack-labels"),
                m = {
                    r: c.borderRadius || 0,
                    text: m,
                    rotation: c.rotation,
                    padding: t(c.padding, 5),
                    visibility: "hidden"
                },
                d.styledMode || (m.fill = c.backgroundColor,
                m.stroke = c.borderColor,
                m["stroke-width"] = c.borderWidth,
                this.label.css(c.style)),
                this.label.attr(m),
                this.label.added || this.label.add(a));
                this.label.labelrank = d.plotSizeY
            }
            ;
            c.prototype.setOffset = function(a, d, c, m, f) {
                var g = this.axis
                  , q = g.chart;
                m = g.translate(g.stacking.usePercentage ? 100 : m ? m : this.total, 0, 0, 0, 1);
                c = g.translate(c ? c : 0);
                a = t(f, q.xAxis[0].translate(this.x)) + a;
                g = E(m) && this.getStackBox(q, this, a, m, d, Math.abs(m - c), g);
                d = this.label;
                c = this.isNegative;
                var r = this.textAlign;
                d && g && (a = d.getBBox(),
                f = d.padding,
                m = "justify" === t(this.options.overflow, "justify"),
                r = "left" === r ? q.inverted ? -f : f : "right" === r ? a.width : q.inverted && "center" === r ? a.width / 2 : q.inverted ? c ? a.width + f : -f : a.width / 2,
                c = q.inverted ? a.height / 2 : c ? -f : a.height,
                this.alignOptions.x = t(this.options.x, 0),
                this.alignOptions.y = t(this.options.y, 0),
                g.x -= r,
                g.y -= c,
                d.align(this.alignOptions, null, g),
                q.isInsidePlot(d.alignAttr.x + r - this.alignOptions.x, d.alignAttr.y + c - this.alignOptions.y) ? d.show() : (d.hide(),
                m = !1),
                m && z.prototype.justifyDataLabel.call(this.axis, d, this.alignOptions, d.alignAttr, a, g),
                d.attr({
                    x: d.alignAttr.x,
                    y: d.alignAttr.y
                }),
                t(!m && this.options.crop, !0) && ((q = w(d.x) && w(d.y) && q.isInsidePlot(d.x - f + d.width, d.y) && q.isInsidePlot(d.x + f, d.y)) || d.hide()))
            }
            ;
            c.prototype.getStackBox = function(a, d, c, m, f, r, t) {
                var g = d.axis.reversed
                  , q = a.inverted
                  , x = t.height + t.pos - (q ? a.plotLeft : a.plotTop);
                d = d.isNegative && !g || !d.isNegative && g;
                return {
                    x: q ? d ? m - t.right : m - r + t.pos - a.plotLeft : c + a.xAxis[0].transB - a.plotLeft,
                    y: q ? t.height - c - f : d ? x - m - r : x - m,
                    width: q ? r : f,
                    height: q ? f : r
                }
            }
            ;
            return c
        }();
        "";
        return c
    });
    O(f, "Core/Axis/Stacking/StackingAxis.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/Axis/Axis.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Axis/Stacking/StackItem.js"], f["Core/Utilities.js"]], function(c, f, B, F, z) {
        function D() {
            var a = this
              , e = a.inverted;
            a.yAxis.forEach(function(a) {
                a.stacking && a.stacking.stacks && a.hasVisibleSeries && (a.stacking.oldStacks = a.stacking.stacks)
            });
            a.series.forEach(function(b) {
                var d = b.xAxis && b.xAxis.options || {};
                !b.options.stacking || !0 !== b.visible && !1 !== a.options.chart.ignoreHiddenSeries || (b.stackKey = [b.type, n(b.options.stack, ""), e ? d.top : d.left, e ? d.height : d.width].join())
            })
        }
        function H() {
            var a = this.stacking;
            if (a) {
                var e = a.stacks;
                y(e, function(a, d) {
                    M(a);
                    e[d] = null
                });
                a && a.stackTotalGroup && a.stackTotalGroup.destroy()
            }
        }
        function w() {
            this.stacking || (this.stacking = new u(this))
        }
        function t(a, e, b, d) {
            !I(a) || a.x !== e || d && a.stackKey !== d ? a = {
                x: e,
                index: 0,
                key: d,
                stackKey: d
            } : a.index++;
            a.key = [b, e, a.index].join();
            return a
        }
        function r() {
            var a = this, e = a.stackKey, b = a.yAxis.stacking.stacks, d = a.processedXData, c = a[a.options.stacking + "Stacker"], p;
            c && [e, "-" + e].forEach(function(e) {
                for (var h = d.length, k, g; h--; )
                    k = d[h],
                    p = a.getStackIndicator(p, k, a.index, e),
                    (g = (k = b[e] && b[e][k]) && k.points[p.key]) && c.call(a, g, k, h)
            })
        }
        function a(a, e, b) {
            e = e.total ? 100 / e.total : 0;
            a[0] = J(a[0] * e);
            a[1] = J(a[1] * e);
            this.stackedYData[b] = a[1]
        }
        function d() {
            var a = this.yAxis.stacking;
            this.options.centerInCategory && (this.is("column") || this.is("columnrange")) && !this.options.stacking && 1 < this.chart.series.length ? q.setStackedPoints.call(this, "group") : a && y(a.stacks, function(e, b) {
                "group" === b.slice(-5) && (y(e, function(a) {
                    return a.destroy()
                }),
                delete a.stacks[b])
            })
        }
        function g(a) {
            var e = a || this.options.stacking;
            if (e && (!0 === this.visible || !1 === this.chart.options.chart.ignoreHiddenSeries)) {
                var b = this.processedXData
                  , d = this.processedYData
                  , c = []
                  , k = d.length
                  , g = this.options
                  , l = g.threshold
                  , m = n(g.startFromThreshold && l, 0);
                g = g.stack;
                a = a ? "" + this.type + ",".concat(e) : this.stackKey;
                var f = "-" + a, u = this.negStacks, q = this.yAxis, r = q.stacking.stacks, t = q.stacking.oldStacks, x, y;
                q.stacking.stacksTouched += 1;
                for (y = 0; y < k; y++) {
                    var A = b[y];
                    var w = d[y];
                    var z = this.getStackIndicator(z, A, this.index);
                    var K = z.key;
                    var D = (x = u && w < (m ? 0 : l)) ? f : a;
                    r[D] || (r[D] = {});
                    r[D][A] || (t[D] && t[D][A] ? (r[D][A] = t[D][A],
                    r[D][A].total = null) : r[D][A] = new F(q,q.options.stackLabels,!!x,A,g));
                    D = r[D][A];
                    null !== w ? (D.points[K] = D.points[this.index] = [n(D.cumulative, m)],
                    I(D.cumulative) || (D.base = K),
                    D.touched = q.stacking.stacksTouched,
                    0 < z.index && !1 === this.singleStacks && (D.points[K][0] = D.points[this.index + "," + A + ",0"][0])) : D.points[K] = D.points[this.index] = null;
                    "percent" === e ? (x = x ? a : f,
                    u && r[x] && r[x][A] ? (x = r[x][A],
                    D.total = x.total = Math.max(x.total, D.total) + Math.abs(w) || 0) : D.total = J(D.total + (Math.abs(w) || 0))) : "group" === e ? (C(w) && (w = w[0]),
                    null !== w && (D.total = (D.total || 0) + 1)) : D.total = J(D.total + (w || 0));
                    D.cumulative = "group" === e ? (D.total || 1) - 1 : n(D.cumulative, m) + (w || 0);
                    null !== w && (D.points[K].push(D.cumulative),
                    c[y] = D.cumulative,
                    D.hasValidPoints = !0)
                }
                "percent" === e && (q.stacking.usePercentage = !0);
                "group" !== e && (this.stackedYData = c);
                q.stacking.oldStacks = {}
            }
        }
        var m = c.getDeferredAnimation, q = B.series.prototype, x = z.addEvent, J = z.correctFloat, I = z.defined, M = z.destroyObjectProperties, K = z.fireEvent, C = z.isArray, A = z.isNumber, y = z.objectEach, n = z.pick, u = function() {
            function a(a) {
                this.oldStacks = {};
                this.stacks = {};
                this.stacksTouched = 0;
                this.axis = a
            }
            a.prototype.buildStacks = function() {
                var a = this.axis, b = a.series, d = a.options.reversedStacks, c = b.length, k;
                if (!a.isXAxis) {
                    this.usePercentage = !1;
                    for (k = c; k--; ) {
                        var g = b[d ? k : c - k - 1];
                        g.setStackedPoints();
                        g.setGroupedPoints()
                    }
                    for (k = 0; k < c; k++)
                        b[k].modifyStacks();
                    K(a, "afterBuildStacks")
                }
            }
            ;
            a.prototype.cleanStacks = function() {
                if (!this.axis.isXAxis) {
                    if (this.oldStacks)
                        var a = this.stacks = this.oldStacks;
                    y(a, function(a) {
                        y(a, function(a) {
                            a.cumulative = a.total
                        })
                    })
                }
            }
            ;
            a.prototype.resetStacks = function() {
                var a = this
                  , b = a.stacks;
                a.axis.isXAxis || y(b, function(b) {
                    y(b, function(e, d) {
                        A(e.touched) && e.touched < a.stacksTouched ? (e.destroy(),
                        delete b[d]) : (e.total = null,
                        e.cumulative = null)
                    })
                })
            }
            ;
            a.prototype.renderStackTotals = function() {
                var a = this.axis
                  , b = a.chart
                  , d = b.renderer
                  , c = this.stacks;
                a = m(b, a.options.stackLabels && a.options.stackLabels.animation || !1);
                var k = this.stackTotalGroup = this.stackTotalGroup || d.g("stack-labels").attr({
                    zIndex: 6,
                    opacity: 0
                }).add();
                k.translate(b.plotLeft, b.plotTop);
                y(c, function(a) {
                    y(a, function(a) {
                        a.render(k)
                    })
                });
                k.animate({
                    opacity: 1
                }, a)
            }
            ;
            return a
        }(), l;
        (function(c) {
            var e = [];
            c.compose = function(b, c, k) {
                -1 === e.indexOf(b) && (e.push(b),
                x(b, "init", w),
                x(b, "destroy", H));
                -1 === e.indexOf(c) && (e.push(c),
                c.prototype.getStacks = D);
                -1 === e.indexOf(k) && (e.push(k),
                b = k.prototype,
                b.getStackIndicator = t,
                b.modifyStacks = r,
                b.percentStacker = a,
                b.setGroupedPoints = d,
                b.setStackedPoints = g)
            }
        }
        )(l || (l = {}));
        return l
    });
    O(f, "Series/Line/LineSeries.js", [f["Core/Series/Series.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = this && this.__extends || function() {
            var c = function(f, t) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(c, a) {
                    c.__proto__ = a
                }
                || function(c, a) {
                    for (var d in a)
                        a.hasOwnProperty(d) && (c[d] = a[d])
                }
                ;
                return c(f, t)
            };
            return function(f, t) {
                function r() {
                    this.constructor = f
                }
                c(f, t);
                f.prototype = null === t ? Object.create(t) : (r.prototype = t.prototype,
                new r)
            }
        }()
          , z = B.defined
          , E = B.merge;
        B = function(f) {
            function w() {
                var c = null !== f && f.apply(this, arguments) || this;
                c.data = void 0;
                c.options = void 0;
                c.points = void 0;
                return c
            }
            D(w, f);
            w.prototype.drawGraph = function() {
                var c = this
                  , f = this.options
                  , a = (this.gappedPath || this.getGraphPath).call(this)
                  , d = this.chart.styledMode
                  , g = [["graph", "highcharts-graph"]];
                d || g[0].push(f.lineColor || this.color || "#cccccc", f.dashStyle);
                g = c.getZonesGraphs(g);
                g.forEach(function(g, q) {
                    var m = g[0]
                      , r = c[m]
                      , t = r ? "animate" : "attr";
                    r ? (r.endX = c.preventGraphAnimation ? null : a.xMap,
                    r.animate({
                        d: a
                    })) : a.length && (c[m] = r = c.chart.renderer.path(a).addClass(g[1]).attr({
                        zIndex: 1
                    }).add(c.group));
                    r && !d && (m = {
                        stroke: g[2],
                        "stroke-width": f.lineWidth,
                        fill: c.fillGraph && c.color || "none"
                    },
                    g[3] ? m.dashstyle = g[3] : "square" !== f.linecap && (m["stroke-linecap"] = m["stroke-linejoin"] = "round"),
                    r[t](m).shadow(2 > q && f.shadow));
                    r && (r.startX = a.xMap,
                    r.isArea = a.isArea)
                })
            }
            ;
            w.prototype.getGraphPath = function(c, f, a) {
                var d = this, g = d.options, m = [], q = [], r, t = g.step;
                c = c || d.points;
                var w = c.reversed;
                w && c.reverse();
                (t = {
                    right: 1,
                    center: 2
                }[t] || t && 3) && w && (t = 4 - t);
                c = this.getValidPoints(c, !1, !(g.connectNulls && !f && !a));
                c.forEach(function(x, w) {
                    var C = x.plotX
                      , A = x.plotY
                      , y = c[w - 1];
                    (x.leftCliff || y && y.rightCliff) && !a && (r = !0);
                    x.isNull && !z(f) && 0 < w ? r = !g.connectNulls : x.isNull && !f ? r = !0 : (0 === w || r ? w = [["M", x.plotX, x.plotY]] : d.getPointSpline ? w = [d.getPointSpline(c, x, w)] : t ? (w = 1 === t ? [["L", y.plotX, A]] : 2 === t ? [["L", (y.plotX + C) / 2, y.plotY], ["L", (y.plotX + C) / 2, A]] : [["L", C, y.plotY]],
                    w.push(["L", C, A])) : w = [["L", C, A]],
                    q.push(x.x),
                    t && (q.push(x.x),
                    2 === t && q.push(x.x)),
                    m.push.apply(m, w),
                    r = !1)
                });
                m.xMap = q;
                return d.graphPath = m
            }
            ;
            w.prototype.getZonesGraphs = function(c) {
                this.zones.forEach(function(f, a) {
                    a = ["zone-graph-" + a, "highcharts-graph highcharts-zone-graph-" + a + " " + (f.className || "")];
                    this.chart.styledMode || a.push(f.color || this.color, f.dashStyle || this.options.dashStyle);
                    c.push(a)
                }, this);
                return c
            }
            ;
            w.defaultOptions = E(c.defaultOptions, {});
            return w
        }(c);
        f.registerSeriesType("line", B);
        "";
        return B
    });
    O(f, "Series/Area/AreaSeries.js", [f["Core/Color/Color.js"], f["Core/Legend/LegendSymbol.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B, F) {
        var D = this && this.__extends || function() {
            var a = function(d, c) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return a(d, c)
            };
            return function(d, c) {
                function g() {
                    this.constructor = d
                }
                a(d, c);
                d.prototype = null === c ? Object.create(c) : (g.prototype = c.prototype,
                new g)
            }
        }()
          , E = c.parse
          , H = B.seriesTypes.line;
        c = F.extend;
        var w = F.merge
          , t = F.objectEach
          , r = F.pick;
        F = function(a) {
            function d() {
                var d = null !== a && a.apply(this, arguments) || this;
                d.data = void 0;
                d.options = void 0;
                d.points = void 0;
                return d
            }
            D(d, a);
            d.prototype.drawGraph = function() {
                this.areaPath = [];
                a.prototype.drawGraph.apply(this);
                var d = this
                  , c = this.areaPath
                  , f = this.options
                  , t = [["area", "highcharts-area", this.color, f.fillColor]];
                this.zones.forEach(function(a, c) {
                    t.push(["zone-area-" + c, "highcharts-area highcharts-zone-area-" + c + " " + a.className, a.color || d.color, a.fillColor || f.fillColor])
                });
                t.forEach(function(a) {
                    var g = a[0]
                      , m = {}
                      , q = d[g]
                      , t = q ? "animate" : "attr";
                    q ? (q.endX = d.preventGraphAnimation ? null : c.xMap,
                    q.animate({
                        d: c
                    })) : (m.zIndex = 0,
                    q = d[g] = d.chart.renderer.path(c).addClass(a[1]).add(d.group),
                    q.isArea = !0);
                    d.chart.styledMode || (m.fill = r(a[3], E(a[2]).setOpacity(r(f.fillOpacity, .75)).get()));
                    q[t](m);
                    q.startX = c.xMap;
                    q.shiftUnit = f.step ? 2 : 1
                })
            }
            ;
            d.prototype.getGraphPath = function(a) {
                var d = H.prototype.getGraphPath
                  , c = this.options
                  , g = c.stacking
                  , f = this.yAxis
                  , t = []
                  , w = []
                  , D = this.index
                  , C = f.stacking.stacks[this.stackKey]
                  , A = c.threshold
                  , y = Math.round(f.getThreshold(c.threshold));
                c = r(c.connectNulls, "percent" === g);
                var n = function(b, d, c) {
                    var h = a[b];
                    b = g && C[h.x].points[D];
                    var k = h[c + "Null"] || 0;
                    c = h[c + "Cliff"] || 0;
                    h = !0;
                    if (c || k) {
                        var p = (k ? b[0] : b[1]) + c;
                        var l = b[0] + c;
                        h = !!k
                    } else
                        !g && a[d] && a[d].isNull && (p = l = A);
                    "undefined" !== typeof p && (w.push({
                        plotX: e,
                        plotY: null === p ? y : f.getThreshold(p),
                        isNull: h,
                        isCliff: !0
                    }),
                    t.push({
                        plotX: e,
                        plotY: null === l ? y : f.getThreshold(l),
                        doCurve: !1
                    }))
                };
                a = a || this.points;
                g && (a = this.getStackPoints(a));
                for (var u = 0, l = a.length; u < l; ++u) {
                    g || (a[u].leftCliff = a[u].rightCliff = a[u].leftNull = a[u].rightNull = void 0);
                    var k = a[u].isNull;
                    var e = r(a[u].rectPlotX, a[u].plotX);
                    var b = g ? r(a[u].yBottom, y) : y;
                    if (!k || c)
                        c || n(u, u - 1, "left"),
                        k && !g && c || (w.push(a[u]),
                        t.push({
                            x: u,
                            plotX: e,
                            plotY: b
                        })),
                        c || n(u, u + 1, "right")
                }
                n = d.call(this, w, !0, !0);
                t.reversed = !0;
                k = d.call(this, t, !0, !0);
                (b = k[0]) && "M" === b[0] && (k[0] = ["L", b[1], b[2]]);
                k = n.concat(k);
                k.length && k.push(["Z"]);
                d = d.call(this, w, !1, c);
                k.xMap = n.xMap;
                this.areaPath = k;
                return d
            }
            ;
            d.prototype.getStackPoints = function(a) {
                var d = this
                  , c = []
                  , g = []
                  , f = this.xAxis
                  , w = this.yAxis
                  , D = w.stacking.stacks[this.stackKey]
                  , z = {}
                  , C = w.series
                  , A = C.length
                  , y = w.options.reversedStacks ? 1 : -1
                  , n = C.indexOf(d);
                a = a || this.points;
                if (this.options.stacking) {
                    for (var u = 0; u < a.length; u++)
                        a[u].leftNull = a[u].rightNull = void 0,
                        z[a[u].x] = a[u];
                    t(D, function(a, e) {
                        null !== a.total && g.push(e)
                    });
                    g.sort(function(a, e) {
                        return a - e
                    });
                    var l = C.map(function(a) {
                        return a.visible
                    });
                    g.forEach(function(a, e) {
                        var b = 0, h, k;
                        if (z[a] && !z[a].isNull)
                            c.push(z[a]),
                            [-1, 1].forEach(function(b) {
                                var c = 1 === b ? "rightNull" : "leftNull"
                                  , p = D[g[e + b]]
                                  , m = 0;
                                if (p)
                                    for (var f = n; 0 <= f && f < A; ) {
                                        var v = C[f].index;
                                        h = p.points[v];
                                        h || (v === d.index ? z[a][c] = !0 : l[f] && (k = D[a].points[v]) && (m -= k[1] - k[0]));
                                        f += y
                                    }
                                z[a][1 === b ? "rightCliff" : "leftCliff"] = m
                            });
                        else {
                            for (var p = n; 0 <= p && p < A; ) {
                                if (h = D[a].points[C[p].index]) {
                                    b = h[1];
                                    break
                                }
                                p += y
                            }
                            b = r(b, 0);
                            b = w.translate(b, 0, 1, 0, 1);
                            c.push({
                                isNull: !0,
                                plotX: f.translate(a, 0, 0, 0, 1),
                                x: a,
                                plotY: b,
                                yBottom: b
                            })
                        }
                    })
                }
                return c
            }
            ;
            d.defaultOptions = w(H.defaultOptions, {
                threshold: 0
            });
            return d
        }(H);
        c(F.prototype, {
            singleStacks: !1,
            drawLegendSymbol: f.drawRectangle
        });
        B.registerSeriesType("area", F);
        "";
        return F
    });
    O(f, "Series/Spline/SplineSeries.js", [f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f) {
        var D = this && this.__extends || function() {
            var c = function(f, t) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(c, a) {
                    c.__proto__ = a
                }
                || function(c, a) {
                    for (var d in a)
                        a.hasOwnProperty(d) && (c[d] = a[d])
                }
                ;
                return c(f, t)
            };
            return function(f, t) {
                function r() {
                    this.constructor = f
                }
                c(f, t);
                f.prototype = null === t ? Object.create(t) : (r.prototype = t.prototype,
                new r)
            }
        }()
          , F = c.seriesTypes.line
          , z = f.merge
          , E = f.pick;
        f = function(c) {
            function f() {
                var f = null !== c && c.apply(this, arguments) || this;
                f.data = void 0;
                f.options = void 0;
                f.points = void 0;
                return f
            }
            D(f, c);
            f.prototype.getPointSpline = function(c, f, a) {
                var d = f.plotX || 0
                  , g = f.plotY || 0
                  , m = c[a - 1];
                a = c[a + 1];
                if (m && !m.isNull && !1 !== m.doCurve && !f.isCliff && a && !a.isNull && !1 !== a.doCurve && !f.isCliff) {
                    c = m.plotY || 0;
                    var q = a.plotX || 0;
                    a = a.plotY || 0;
                    var r = 0;
                    var t = (1.5 * d + (m.plotX || 0)) / 2.5;
                    var w = (1.5 * g + c) / 2.5;
                    q = (1.5 * d + q) / 2.5;
                    var D = (1.5 * g + a) / 2.5;
                    q !== t && (r = (D - w) * (q - d) / (q - t) + g - D);
                    w += r;
                    D += r;
                    w > c && w > g ? (w = Math.max(c, g),
                    D = 2 * g - w) : w < c && w < g && (w = Math.min(c, g),
                    D = 2 * g - w);
                    D > a && D > g ? (D = Math.max(a, g),
                    w = 2 * g - D) : D < a && D < g && (D = Math.min(a, g),
                    w = 2 * g - D);
                    f.rightContX = q;
                    f.rightContY = D
                }
                f = ["C", E(m.rightContX, m.plotX, 0), E(m.rightContY, m.plotY, 0), E(t, d, 0), E(w, g, 0), d, g];
                m.rightContX = m.rightContY = void 0;
                return f
            }
            ;
            f.defaultOptions = z(F.defaultOptions);
            return f
        }(F);
        c.registerSeriesType("spline", f);
        "";
        return f
    });
    O(f, "Series/AreaSpline/AreaSplineSeries.js", [f["Series/Spline/SplineSeries.js"], f["Core/Legend/LegendSymbol.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B, F) {
        var D = this && this.__extends || function() {
            var c = function(a, d) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return c(a, d)
            };
            return function(a, d) {
                function g() {
                    this.constructor = a
                }
                c(a, d);
                a.prototype = null === d ? Object.create(d) : (g.prototype = d.prototype,
                new g)
            }
        }()
          , E = B.seriesTypes
          , H = E.area;
        E = E.area.prototype;
        var w = F.extend
          , t = F.merge;
        F = function(f) {
            function a() {
                var a = null !== f && f.apply(this, arguments) || this;
                a.data = void 0;
                a.points = void 0;
                a.options = void 0;
                return a
            }
            D(a, f);
            a.defaultOptions = t(c.defaultOptions, H.defaultOptions);
            return a
        }(c);
        w(F.prototype, {
            getGraphPath: E.getGraphPath,
            getStackPoints: E.getStackPoints,
            drawGraph: E.drawGraph,
            drawLegendSymbol: f.drawRectangle
        });
        B.registerSeriesType("areaspline", F);
        "";
        return F
    });
    O(f, "Series/Column/ColumnSeries.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/Color/Color.js"], f["Core/Globals.js"], f["Core/Legend/LegendSymbol.js"], f["Core/Series/Series.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H) {
        var w = this && this.__extends || function() {
            var a = function(d, c) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return a(d, c)
            };
            return function(d, c) {
                function g() {
                    this.constructor = d
                }
                a(d, c);
                d.prototype = null === c ? Object.create(c) : (g.prototype = c.prototype,
                new g)
            }
        }()
          , t = c.animObject
          , r = f.parse
          , a = B.hasTouch;
        c = B.noop;
        var d = H.clamp
          , g = H.css
          , m = H.defined
          , q = H.extend
          , x = H.fireEvent
          , D = H.isArray
          , I = H.isNumber
          , M = H.merge
          , K = H.pick
          , C = H.objectEach;
        H = function(c) {
            function f() {
                var a = null !== c && c.apply(this, arguments) || this;
                a.borderWidth = void 0;
                a.data = void 0;
                a.group = void 0;
                a.options = void 0;
                a.points = void 0;
                return a
            }
            w(f, c);
            f.prototype.animate = function(a) {
                var c = this
                  , g = this.yAxis
                  , k = c.options
                  , e = this.chart.inverted
                  , b = {}
                  , h = e ? "translateX" : "translateY";
                if (a)
                    b.scaleY = .001,
                    a = d(g.toPixels(k.threshold), g.pos, g.pos + g.len),
                    e ? b.translateX = a - g.len : b.translateY = a,
                    c.clipBox && c.setClip(),
                    c.group.attr(b);
                else {
                    var n = Number(c.group.attr(h));
                    c.group.animate({
                        scaleY: 1
                    }, q(t(c.options.animation), {
                        step: function(a, e) {
                            c.group && (b[h] = n + e.pos * (g.pos - n),
                            c.group.attr(b))
                        }
                    }))
                }
            }
            ;
            f.prototype.init = function(a, d) {
                c.prototype.init.apply(this, arguments);
                var g = this;
                a = g.chart;
                a.hasRendered && a.series.forEach(function(a) {
                    a.type === g.type && (a.isDirty = !0)
                })
            }
            ;
            f.prototype.getColumnMetrics = function() {
                var a = this
                  , d = a.options
                  , c = a.xAxis
                  , k = a.yAxis
                  , e = c.options.reversedStacks;
                e = c.reversed && !e || !c.reversed && e;
                var b = {}, h, g = 0;
                !1 === d.grouping ? g = 1 : a.chart.series.forEach(function(e) {
                    var d = e.yAxis
                      , c = e.options;
                    if (e.type === a.type && (e.visible || !a.chart.options.chart.ignoreHiddenSeries) && k.len === d.len && k.pos === d.pos) {
                        if (c.stacking && "group" !== c.stacking) {
                            h = e.stackKey;
                            "undefined" === typeof b[h] && (b[h] = g++);
                            var p = b[h]
                        } else
                            !1 !== c.grouping && (p = g++);
                        e.columnIndex = p
                    }
                });
                var p = Math.min(Math.abs(c.transA) * (c.ordinal && c.ordinal.slope || d.pointRange || c.closestPointRange || c.tickInterval || 1), c.len)
                  , f = p * d.groupPadding
                  , m = (p - 2 * f) / (g || 1);
                d = Math.min(d.maxPointWidth || c.len, K(d.pointWidth, m * (1 - 2 * d.pointPadding)));
                a.columnMetrics = {
                    width: d,
                    offset: (m - d) / 2 + (f + ((a.columnIndex || 0) + (e ? 1 : 0)) * m - p / 2) * (e ? -1 : 1),
                    paddedWidth: m,
                    columnCount: g
                };
                return a.columnMetrics
            }
            ;
            f.prototype.crispCol = function(a, d, c, k) {
                var e = this.chart
                  , b = this.borderWidth
                  , h = -(b % 2 ? .5 : 0);
                b = b % 2 ? .5 : 1;
                e.inverted && e.renderer.isVML && (b += 1);
                this.options.crisp && (c = Math.round(a + c) + h,
                a = Math.round(a) + h,
                c -= a);
                k = Math.round(d + k) + b;
                h = .5 >= Math.abs(d) && .5 < k;
                d = Math.round(d) + b;
                k -= d;
                h && k && (--d,
                k += 1);
                return {
                    x: a,
                    y: d,
                    width: c,
                    height: k
                }
            }
            ;
            f.prototype.adjustForMissingColumns = function(a, d, c, k) {
                var e = this
                  , b = this.options.stacking;
                if (!c.isNull && 1 < k.columnCount) {
                    var h = this.yAxis.options.reversedStacks
                      , g = 0
                      , p = h ? 0 : -k.columnCount;
                    C(this.yAxis.stacking && this.yAxis.stacking.stacks, function(a) {
                        if ("number" === typeof c.x && (a = a[c.x.toString()])) {
                            var d = a.points[e.index]
                              , k = a.total;
                            b ? (d && (g = p),
                            a.hasValidPoints && (h ? p++ : p--)) : D(d) && (g = d[1],
                            p = k || 0)
                        }
                    });
                    a = (c.plotX || 0) + ((p - 1) * k.paddedWidth + d) / 2 - d - g * k.paddedWidth
                }
                return a
            }
            ;
            f.prototype.translate = function() {
                var a = this
                  , c = a.chart
                  , g = a.options
                  , k = a.dense = 2 > a.closestPointRange * a.xAxis.transA;
                k = a.borderWidth = K(g.borderWidth, k ? 0 : 1);
                var e = a.xAxis
                  , b = a.yAxis
                  , h = g.threshold
                  , f = a.translatedThreshold = b.getThreshold(h)
                  , p = K(g.minPointLength, 5)
                  , q = a.getColumnMetrics()
                  , r = q.width
                  , t = a.pointXOffset = q.offset
                  , x = a.dataMin
                  , y = a.dataMax
                  , A = a.barW = Math.max(r, 1 + 2 * k);
                c.inverted && (f -= .5);
                g.pointPadding && (A = Math.ceil(A));
                z.prototype.translate.apply(a);
                a.points.forEach(function(k) {
                    var l = K(k.yBottom, f)
                      , n = 999 + Math.abs(l)
                      , v = k.plotX || 0;
                    n = d(k.plotY, -n, b.len + n);
                    var u = Math.min(n, l)
                      , G = Math.max(n, l) - u
                      , C = r
                      , Q = v + t
                      , L = A;
                    p && Math.abs(G) < p && (G = p,
                    v = !b.reversed && !k.negative || b.reversed && k.negative,
                    I(h) && I(y) && k.y === h && y <= h && (b.min || 0) < h && (x !== y || (b.max || 0) <= h) && (v = !v),
                    u = Math.abs(u - f) > p ? l - p : f - (v ? p : 0));
                    m(k.options.pointWidth) && (C = L = Math.ceil(k.options.pointWidth),
                    Q -= Math.round((C - r) / 2));
                    g.centerInCategory && (Q = a.adjustForMissingColumns(Q, C, k, q));
                    k.barX = Q;
                    k.pointWidth = C;
                    k.tooltipPos = c.inverted ? [d(b.len + b.pos - c.plotLeft - n, b.pos - c.plotLeft, b.len + b.pos - c.plotLeft), e.len + e.pos - c.plotTop - Q - L / 2, G] : [e.left - c.plotLeft + Q + L / 2, d(n + b.pos - c.plotTop, b.pos - c.plotTop, b.len + b.pos - c.plotTop), G];
                    k.shapeType = a.pointClass.prototype.shapeType || "rect";
                    k.shapeArgs = a.crispCol.apply(a, k.isNull ? [Q, f, L, 0] : [Q, u, L, G])
                })
            }
            ;
            f.prototype.drawGraph = function() {
                this.group[this.dense ? "addClass" : "removeClass"]("highcharts-dense-data")
            }
            ;
            f.prototype.pointAttribs = function(a, d) {
                var c = this.options
                  , k = this.pointAttrToOptions || {}
                  , e = k.stroke || "borderColor"
                  , b = k["stroke-width"] || "borderWidth"
                  , h = a && a.color || this.color
                  , g = a && a[e] || c[e] || h;
                k = a && a.options.dashStyle || c.dashStyle;
                var p = a && a[b] || c[b] || this[b] || 0
                  , f = K(a && a.opacity, c.opacity, 1);
                if (a && this.zones.length) {
                    var n = a.getZone();
                    h = a.options.color || n && (n.color || a.nonZonedColor) || this.color;
                    n && (g = n.borderColor || g,
                    k = n.dashStyle || k,
                    p = n.borderWidth || p)
                }
                d && a && (a = M(c.states[d], a.options.states && a.options.states[d] || {}),
                d = a.brightness,
                h = a.color || "undefined" !== typeof d && r(h).brighten(a.brightness).get() || h,
                g = a[e] || g,
                p = a[b] || p,
                k = a.dashStyle || k,
                f = K(a.opacity, f));
                e = {
                    fill: h,
                    stroke: g,
                    "stroke-width": p,
                    opacity: f
                };
                k && (e.dashstyle = k);
                return e
            }
            ;
            f.prototype.drawPoints = function() {
                var a = this, d = this.chart, c = a.options, k = d.renderer, e = c.animationLimit || 250, b;
                a.points.forEach(function(h) {
                    var g = h.graphic
                      , p = !!g
                      , l = g && d.pointCount < e ? "animate" : "attr";
                    if (I(h.plotY) && null !== h.y) {
                        b = h.shapeArgs;
                        g && h.hasNewShapeType() && (g = g.destroy());
                        a.enabledDataSorting && (h.startXPos = a.xAxis.reversed ? -(b ? b.width || 0 : 0) : a.xAxis.width);
                        g || (h.graphic = g = k[h.shapeType](b).add(h.group || a.group)) && a.enabledDataSorting && d.hasRendered && d.pointCount < e && (g.attr({
                            x: h.startXPos
                        }),
                        p = !0,
                        l = "animate");
                        if (g && p)
                            g[l](M(b));
                        if (c.borderRadius)
                            g[l]({
                                r: c.borderRadius
                            });
                        d.styledMode || g[l](a.pointAttribs(h, h.selected && "select")).shadow(!1 !== h.allowShadow && c.shadow, null, c.stacking && !c.borderRadius);
                        g && (g.addClass(h.getClassName(), !0),
                        g.attr({
                            visibility: h.visible ? "inherit" : "hidden"
                        }))
                    } else
                        g && (h.graphic = g.destroy())
                })
            }
            ;
            f.prototype.drawTracker = function() {
                var d = this, c = d.chart, l = c.pointer, k = function(a) {
                    var b = l.getPointFromEvent(a);
                    "undefined" !== typeof b && (l.isDirectTouch = !0,
                    b.onMouseOver(a))
                }, e;
                d.points.forEach(function(a) {
                    e = D(a.dataLabels) ? a.dataLabels : a.dataLabel ? [a.dataLabel] : [];
                    a.graphic && (a.graphic.element.point = a);
                    e.forEach(function(b) {
                        b.div ? b.div.point = a : b.element.point = a
                    })
                });
                d._hasTracking || (d.trackerGroups.forEach(function(b) {
                    if (d[b]) {
                        d[b].addClass("highcharts-tracker").on("mouseover", k).on("mouseout", function(a) {
                            l.onTrackerMouseOut(a)
                        });
                        if (a)
                            d[b].on("touchstart", k);
                        !c.styledMode && d.options.cursor && d[b].css(g).css({
                            cursor: d.options.cursor
                        })
                    }
                }),
                d._hasTracking = !0);
                x(this, "afterDrawTracker")
            }
            ;
            f.prototype.remove = function() {
                var a = this
                  , d = a.chart;
                d.hasRendered && d.series.forEach(function(d) {
                    d.type === a.type && (d.isDirty = !0)
                });
                z.prototype.remove.apply(a, arguments)
            }
            ;
            f.defaultOptions = M(z.defaultOptions, {
                borderRadius: 0,
                centerInCategory: !1,
                groupPadding: .2,
                marker: null,
                pointPadding: .1,
                minPointLength: 0,
                cropThreshold: 50,
                pointRange: null,
                states: {
                    hover: {
                        halo: !1,
                        brightness: .1
                    },
                    select: {
                        color: "#cccccc",
                        borderColor: "#000000"
                    }
                },
                dataLabels: {
                    align: void 0,
                    verticalAlign: void 0,
                    y: void 0
                },
                startFromThreshold: !0,
                stickyTracking: !1,
                tooltip: {
                    distance: 6
                },
                threshold: 0,
                borderColor: "#ffffff"
            });
            return f
        }(z);
        q(H.prototype, {
            cropShoulder: 0,
            directTouch: !0,
            drawLegendSymbol: F.drawRectangle,
            getSymbol: c,
            negStacks: !0,
            trackerGroups: ["group", "dataLabelsGroup"]
        });
        E.registerSeriesType("column", H);
        "";
        "";
        return H
    });
    O(f, "Core/Series/DataLabel.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/FormatUtilities.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = c.getDeferredAnimation, z = f.format, E = B.defined, H = B.extend, w = B.fireEvent, t = B.isArray, r = B.isString, a = B.merge, d = B.objectEach, g = B.pick, m = B.splat, q;
        (function(c) {
            function f(a, d, c, k, e) {
                var b = this
                  , h = this.chart
                  , l = this.isCartesian && h.inverted
                  , p = this.enabledDataSorting
                  , f = g(a.dlBox && a.dlBox.centerX, a.plotX)
                  , m = a.plotY
                  , n = c.rotation
                  , q = c.align
                  , u = E(f) && E(m) && h.isInsidePlot(f, Math.round(m), {
                    inverted: l,
                    paneCoordinates: !0,
                    series: b
                })
                  , r = function(c) {
                    p && b.xAxis && !t && b.setDataLabelStartPos(a, d, e, u, c)
                }
                  , t = "justify" === g(c.overflow, p ? "none" : "justify")
                  , x = this.visible && !1 !== a.visible && (a.series.forceDL || p && !t || u || g(c.inside, !!this.options.stacking) && k && h.isInsidePlot(f, l ? k.x + 1 : k.y + k.height - 1, {
                    inverted: l,
                    paneCoordinates: !0,
                    series: b
                }));
                if (x && E(f) && E(m)) {
                    n && d.attr({
                        align: q
                    });
                    q = d.getBBox(!0);
                    var y = [0, 0];
                    var A = h.renderer.fontMetrics(h.styledMode ? void 0 : c.style.fontSize, d).b;
                    k = H({
                        x: l ? this.yAxis.len - m : f,
                        y: Math.round(l ? this.xAxis.len - f : m),
                        width: 0,
                        height: 0
                    }, k);
                    H(c, {
                        width: q.width,
                        height: q.height
                    });
                    n ? (t = !1,
                    y = h.renderer.rotCorr(A, n),
                    f = {
                        x: k.x + (c.x || 0) + k.width / 2 + y.x,
                        y: k.y + (c.y || 0) + {
                            top: 0,
                            middle: .5,
                            bottom: 1
                        }[c.verticalAlign] * k.height
                    },
                    y = [q.x - Number(d.attr("x")), q.y - Number(d.attr("y"))],
                    r(f),
                    d[e ? "attr" : "animate"](f)) : (r(k),
                    d.align(c, void 0, k),
                    f = d.alignAttr);
                    t && 0 <= k.height ? this.justifyDataLabel(d, c, f, q, k, e) : g(c.crop, !0) && (k = f.x,
                    r = f.y,
                    k += y[0],
                    r += y[1],
                    x = h.isInsidePlot(k, r, {
                        paneCoordinates: !0,
                        series: b
                    }) && h.isInsidePlot(k + q.width, r + q.height, {
                        paneCoordinates: !0,
                        series: b
                    }));
                    if (c.shape && !n)
                        d[e ? "attr" : "animate"]({
                            anchorX: l ? h.plotWidth - a.plotY : a.plotX,
                            anchorY: l ? h.plotHeight - a.plotX : a.plotY
                        })
                }
                e && p && (d.placed = !1);
                x || p && !t ? d.show() : (d.hide(),
                d.placed = !1)
            }
            function q(a, d) {
                var c = d.filter;
                return c ? (d = c.operator,
                a = a[c.property],
                c = c.value,
                ">" === d && a > c || "<" === d && a < c || ">=" === d && a >= c || "<=" === d && a <= c || "==" === d && a == c || "===" === d && a === c ? !0 : !1) : !0
            }
            function x() {
                var a = this
                  , c = a.chart
                  , l = a.options
                  , k = a.points
                  , e = a.hasRendered || 0
                  , b = c.renderer
                  , h = c.options.chart
                  , f = h.backgroundColor;
                h = h.plotBackgroundColor;
                var p = b.getContrast(r(h) && h || r(f) && f || "#000000"), G = l.dataLabels, x;
                f = G.animation;
                f = G.defer ? D(c, f, a) : {
                    defer: 0,
                    duration: 0
                };
                G = C(C(c.options.plotOptions && c.options.plotOptions.series && c.options.plotOptions.series.dataLabels, c.options.plotOptions && c.options.plotOptions[a.type] && c.options.plotOptions[a.type].dataLabels), G);
                w(this, "drawDataLabels");
                if (t(G) || G.enabled || a._hasPointLabels) {
                    var y = a.plotGroup("dataLabelsGroup", "data-labels", e ? "inherit" : "hidden", G.zIndex || 6);
                    y.attr({
                        opacity: +e
                    });
                    !e && (e = a.dataLabelsGroup) && (a.visible && y.show(),
                    e[l.animation ? "animate" : "attr"]({
                        opacity: 1
                    }, f));
                    k.forEach(function(e) {
                        x = m(C(G, e.dlOptions || e.options && e.options.dataLabels));
                        x.forEach(function(h, k) {
                            var f = h.enabled && (!e.isNull || e.dataLabelOnNull) && q(e, h)
                              , m = e.connectors ? e.connectors[k] : e.connector
                              , n = e.dataLabels ? e.dataLabels[k] : e.dataLabel
                              , v = !n
                              , u = g(h.distance, e.labelDistance);
                            if (f) {
                                var r = e.getLabelConfig();
                                var G = g(h[e.formatPrefix + "Format"], h.format);
                                r = E(G) ? z(G, r, c) : (h[e.formatPrefix + "Formatter"] || h.formatter).call(r, h);
                                G = h.style;
                                var t = h.rotation;
                                c.styledMode || (G.color = g(h.color, G.color, a.color, "#000000"),
                                "contrast" === G.color ? (e.contrastColor = b.getContrast(e.color || a.color),
                                G.color = !E(u) && h.inside || 0 > u || l.stacking ? e.contrastColor : p) : delete e.contrastColor,
                                l.cursor && (G.cursor = l.cursor));
                                var x = {
                                    r: h.borderRadius || 0,
                                    rotation: t,
                                    padding: h.padding,
                                    zIndex: 1
                                };
                                c.styledMode || (x.fill = h.backgroundColor,
                                x.stroke = h.borderColor,
                                x["stroke-width"] = h.borderWidth);
                                d(x, function(a, b) {
                                    "undefined" === typeof a && delete x[b]
                                })
                            }
                            !n || f && E(r) && !!n.div === !!h.useHTML && (n.rotation && h.rotation || n.rotation === h.rotation) || (v = !0,
                            e.dataLabel = n = e.dataLabel && e.dataLabel.destroy(),
                            e.dataLabels && (1 === e.dataLabels.length ? delete e.dataLabels : delete e.dataLabels[k]),
                            k || delete e.dataLabel,
                            m && (e.connector = e.connector.destroy(),
                            e.connectors && (1 === e.connectors.length ? delete e.connectors : delete e.connectors[k])));
                            f && E(r) ? (n ? x.text = r : (e.dataLabels = e.dataLabels || [],
                            n = e.dataLabels[k] = t ? b.text(r, 0, 0, h.useHTML).addClass("highcharts-data-label") : b.label(r, 0, 0, h.shape, null, null, h.useHTML, null, "data-label"),
                            k || (e.dataLabel = n),
                            n.addClass(" highcharts-data-label-color-" + e.colorIndex + " " + (h.className || "") + (h.useHTML ? " highcharts-tracker" : ""))),
                            n.options = h,
                            n.attr(x),
                            c.styledMode || n.css(G).shadow(h.shadow),
                            h.textPath && !h.useHTML && (n.setTextPath(e.getDataLabelPath && e.getDataLabelPath(n) || e.graphic, h.textPath),
                            e.dataLabelPath && !h.textPath.enabled && (e.dataLabelPath = e.dataLabelPath.destroy())),
                            n.added || n.add(y),
                            a.alignDataLabel(e, n, h, null, v)) : n && n.hide()
                        })
                    })
                }
                w(this, "afterDrawDataLabels")
            }
            function K(a, d, c, k, e, b) {
                var h = this.chart
                  , g = d.align
                  , p = d.verticalAlign
                  , l = a.box ? 0 : a.padding || 0
                  , f = d.x;
                f = void 0 === f ? 0 : f;
                var m = d.y;
                m = void 0 === m ? 0 : m;
                var n = (c.x || 0) + l;
                if (0 > n) {
                    "right" === g && 0 <= f ? (d.align = "left",
                    d.inside = !0) : f -= n;
                    var q = !0
                }
                n = (c.x || 0) + k.width - l;
                n > h.plotWidth && ("left" === g && 0 >= f ? (d.align = "right",
                d.inside = !0) : f += h.plotWidth - n,
                q = !0);
                n = c.y + l;
                0 > n && ("bottom" === p && 0 <= m ? (d.verticalAlign = "top",
                d.inside = !0) : m -= n,
                q = !0);
                n = (c.y || 0) + k.height - l;
                n > h.plotHeight && ("top" === p && 0 >= m ? (d.verticalAlign = "bottom",
                d.inside = !0) : m += h.plotHeight - n,
                q = !0);
                q && (d.x = f,
                d.y = m,
                a.placed = !b,
                a.align(d, void 0, e));
                return q
            }
            function C(d, c) {
                var g = [], k;
                if (t(d) && !t(c))
                    g = d.map(function(e) {
                        return a(e, c)
                    });
                else if (t(c) && !t(d))
                    g = c.map(function(e) {
                        return a(d, e)
                    });
                else if (t(d) || t(c))
                    for (k = Math.max(d.length, c.length); k--; )
                        g[k] = a(d[k], c[k]);
                else
                    g = a(d, c);
                return g
            }
            function A(a, d, c, k, e) {
                var b = this.chart
                  , h = b.inverted
                  , g = this.xAxis
                  , p = g.reversed
                  , l = h ? d.height / 2 : d.width / 2;
                a = (a = a.pointWidth) ? a / 2 : 0;
                d.startXPos = h ? e.x : p ? -l - a : g.width - l + a;
                d.startYPos = h ? p ? this.yAxis.height - l + a : -l - a : e.y;
                k ? "hidden" === d.visibility && (d.show(),
                d.attr({
                    opacity: 0
                }).animate({
                    opacity: 1
                })) : d.attr({
                    opacity: 1
                }).animate({
                    opacity: 0
                }, void 0, d.hide);
                b.hasRendered && (c && d.attr({
                    x: d.startXPos,
                    y: d.startYPos
                }),
                d.placed = !0)
            }
            var y = [];
            c.compose = function(a) {
                if (-1 === y.indexOf(a)) {
                    var d = a.prototype;
                    y.push(a);
                    d.alignDataLabel = f;
                    d.drawDataLabels = x;
                    d.justifyDataLabel = K;
                    d.setDataLabelStartPos = A
                }
            }
        }
        )(q || (q = {}));
        "";
        return q
    });
    O(f, "Series/Column/ColumnDataLabel.js", [f["Core/Series/DataLabel.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = f.series, z = B.merge, E = B.pick, H;
        (function(f) {
            function t(a, d, c, f, q) {
                var g = this.chart.inverted
                  , m = a.series
                  , r = (m.xAxis ? m.xAxis.len : this.chart.plotSizeX) || 0;
                m = (m.yAxis ? m.yAxis.len : this.chart.plotSizeY) || 0;
                var t = a.dlBox || a.shapeArgs
                  , w = E(a.below, a.plotY > E(this.translatedThreshold, m))
                  , C = E(c.inside, !!this.options.stacking);
                t && (f = z(t),
                0 > f.y && (f.height += f.y,
                f.y = 0),
                t = f.y + f.height - m,
                0 < t && t < f.height && (f.height -= t),
                g && (f = {
                    x: m - f.y - f.height,
                    y: r - f.x - f.width,
                    width: f.height,
                    height: f.width
                }),
                C || (g ? (f.x += w ? 0 : f.width,
                f.width = 0) : (f.y += w ? f.height : 0,
                f.height = 0)));
                c.align = E(c.align, !g || C ? "center" : w ? "right" : "left");
                c.verticalAlign = E(c.verticalAlign, g || C ? "middle" : w ? "top" : "bottom");
                D.prototype.alignDataLabel.call(this, a, d, c, f, q);
                c.inside && a.contrastColor && d.css({
                    color: a.contrastColor
                })
            }
            var r = [];
            f.compose = function(a) {
                c.compose(D);
                -1 === r.indexOf(a) && (r.push(a),
                a.prototype.alignDataLabel = t)
            }
        }
        )(H || (H = {}));
        return H
    });
    O(f, "Series/Bar/BarSeries.js", [f["Series/Column/ColumnSeries.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = this && this.__extends || function() {
            var c = function(f, t) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(c, a) {
                    c.__proto__ = a
                }
                || function(c, a) {
                    for (var d in a)
                        a.hasOwnProperty(d) && (c[d] = a[d])
                }
                ;
                return c(f, t)
            };
            return function(f, t) {
                function r() {
                    this.constructor = f
                }
                c(f, t);
                f.prototype = null === t ? Object.create(t) : (r.prototype = t.prototype,
                new r)
            }
        }()
          , z = B.extend
          , E = B.merge;
        B = function(f) {
            function w() {
                var c = null !== f && f.apply(this, arguments) || this;
                c.data = void 0;
                c.options = void 0;
                c.points = void 0;
                return c
            }
            D(w, f);
            w.defaultOptions = E(c.defaultOptions, {});
            return w
        }(c);
        z(B.prototype, {
            inverted: !0
        });
        f.registerSeriesType("bar", B);
        "";
        return B
    });
    O(f, "Series/Scatter/ScatterSeries.js", [f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f) {
        var D = this && this.__extends || function() {
            var c = function(f, a) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, c) {
                    a.__proto__ = c
                }
                || function(a, c) {
                    for (var d in c)
                        c.hasOwnProperty(d) && (a[d] = c[d])
                }
                ;
                return c(f, a)
            };
            return function(f, a) {
                function d() {
                    this.constructor = f
                }
                c(f, a);
                f.prototype = null === a ? Object.create(a) : (d.prototype = a.prototype,
                new d)
            }
        }()
          , F = c.seriesTypes
          , z = F.column
          , E = F.line;
        F = f.addEvent;
        var H = f.extend
          , w = f.merge;
        f = function(c) {
            function f() {
                var a = null !== c && c.apply(this, arguments) || this;
                a.data = void 0;
                a.options = void 0;
                a.points = void 0;
                return a
            }
            D(f, c);
            f.prototype.applyJitter = function() {
                var a = this
                  , d = this.options.jitter
                  , c = this.points.length;
                d && this.points.forEach(function(g, f) {
                    ["x", "y"].forEach(function(m, q) {
                        var r = "plot" + m.toUpperCase();
                        if (d[m] && !g.isNull) {
                            var t = a[m + "Axis"];
                            var x = d[m] * t.transA;
                            if (t && !t.isLog) {
                                var C = Math.max(0, g[r] - x);
                                t = Math.min(t.len, g[r] + x);
                                q = 1E4 * Math.sin(f + q * c);
                                g[r] = C + (t - C) * (q - Math.floor(q));
                                "x" === m && (g.clientX = g.plotX)
                            }
                        }
                    })
                })
            }
            ;
            f.prototype.drawGraph = function() {
                this.options.lineWidth ? c.prototype.drawGraph.call(this) : this.graph && (this.graph = this.graph.destroy())
            }
            ;
            f.defaultOptions = w(E.defaultOptions, {
                lineWidth: 0,
                findNearestPointBy: "xy",
                jitter: {
                    x: 0,
                    y: 0
                },
                marker: {
                    enabled: !0
                },
                tooltip: {
                    headerFormat: '<span style="color:{point.color}">\u25cf</span> <span style="font-size: 0.63em"> {series.name}</span><br/>',
                    pointFormat: "x: <b>{point.x}</b><br/>y: <b>{point.y}</b><br/>"
                }
            });
            return f
        }(E);
        H(f.prototype, {
            drawTracker: z.prototype.drawTracker,
            sorted: !1,
            requireSorting: !1,
            noSharedTooltip: !0,
            trackerGroups: ["group", "markerGroup", "dataLabelsGroup"],
            takeOrdinalPosition: !1
        });
        F(f, "afterTranslate", function() {
            this.applyJitter()
        });
        c.registerSeriesType("scatter", f);
        "";
        return f
    });
    O(f, "Series/CenteredUtilities.js", [f["Core/Globals.js"], f["Core/Series/Series.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = c.deg2rad, z = B.fireEvent, E = B.isNumber, H = B.pick, w = B.relativeLength, t;
        (function(c) {
            c.getCenter = function() {
                var a = this.options
                  , d = this.chart
                  , c = 2 * (a.slicedOffset || 0)
                  , m = d.plotWidth - 2 * c
                  , q = d.plotHeight - 2 * c
                  , r = a.center
                  , t = Math.min(m, q)
                  , D = a.thickness
                  , B = a.size
                  , K = a.innerSize || 0;
                "string" === typeof B && (B = parseFloat(B));
                "string" === typeof K && (K = parseFloat(K));
                a = [H(r[0], "50%"), H(r[1], "50%"), H(B && 0 > B ? void 0 : a.size, "100%"), H(K && 0 > K ? void 0 : a.innerSize || 0, "0%")];
                !d.angular || this instanceof f || (a[3] = 0);
                for (r = 0; 4 > r; ++r)
                    B = a[r],
                    d = 2 > r || 2 === r && /%$/.test(B),
                    a[r] = w(B, [m, q, t, a[2]][r]) + (d ? c : 0);
                a[3] > a[2] && (a[3] = a[2]);
                E(D) && 2 * D < a[2] && 0 < D && (a[3] = a[2] - 2 * D);
                z(this, "afterGetCenter", {
                    positions: a
                });
                return a
            }
            ;
            c.getStartAndEndRadians = function(a, d) {
                a = E(a) ? a : 0;
                d = E(d) && d > a && 360 > d - a ? d : a + 360;
                return {
                    start: D * (a + -90),
                    end: D * (d + -90)
                }
            }
        }
        )(t || (t = {}));
        "";
        return t
    });
    O(f, "Series/Pie/PiePoint.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/Series/Point.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = this && this.__extends || function() {
            var a = function(d, c) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return a(d, c)
            };
            return function(d, c) {
                function g() {
                    this.constructor = d
                }
                a(d, c);
                d.prototype = null === c ? Object.create(c) : (g.prototype = c.prototype,
                new g)
            }
        }()
          , z = c.setAnimation
          , E = B.addEvent
          , H = B.defined;
        c = B.extend;
        var w = B.isNumber
          , t = B.pick
          , r = B.relativeLength;
        f = function(a) {
            function d() {
                var d = null !== a && a.apply(this, arguments) || this;
                d.labelDistance = void 0;
                d.options = void 0;
                d.series = void 0;
                return d
            }
            D(d, a);
            d.prototype.getConnectorPath = function() {
                var a = this.labelPosition
                  , d = this.series.options.dataLabels
                  , c = this.connectorShapes
                  , f = d.connectorShape;
                c[f] && (f = c[f]);
                return f.call(this, {
                    x: a.final.x,
                    y: a.final.y,
                    alignment: a.alignment
                }, a.connectorPosition, d)
            }
            ;
            d.prototype.getTranslate = function() {
                return this.sliced ? this.slicedTranslation : {
                    translateX: 0,
                    translateY: 0
                }
            }
            ;
            d.prototype.haloPath = function(a) {
                var d = this.shapeArgs;
                return this.sliced || !this.visible ? [] : this.series.chart.renderer.symbols.arc(d.x, d.y, d.r + a, d.r + a, {
                    innerR: d.r - 1,
                    start: d.start,
                    end: d.end
                })
            }
            ;
            d.prototype.init = function() {
                var d = this;
                a.prototype.init.apply(this, arguments);
                this.name = t(this.name, "Slice");
                var c = function(a) {
                    d.slice("select" === a.type)
                };
                E(this, "select", c);
                E(this, "unselect", c);
                return this
            }
            ;
            d.prototype.isValid = function() {
                return w(this.y) && 0 <= this.y
            }
            ;
            d.prototype.setVisible = function(a, d) {
                var c = this
                  , g = this.series
                  , f = g.chart
                  , m = g.options.ignoreHiddenPoint;
                d = t(d, m);
                a !== this.visible && (this.visible = this.options.visible = a = "undefined" === typeof a ? !this.visible : a,
                g.options.data[g.data.indexOf(this)] = this.options,
                ["graphic", "dataLabel", "connector", "shadowGroup"].forEach(function(d) {
                    if (c[d])
                        c[d][a ? "show" : "hide"](a)
                }),
                this.legendItem && f.legend.colorizeItem(this, a),
                a || "hover" !== this.state || this.setState(""),
                m && (g.isDirty = !0),
                d && f.redraw())
            }
            ;
            d.prototype.slice = function(a, d, c) {
                var g = this.series;
                z(c, g.chart);
                t(d, !0);
                this.sliced = this.options.sliced = H(a) ? a : !this.sliced;
                g.options.data[g.data.indexOf(this)] = this.options;
                this.graphic && this.graphic.animate(this.getTranslate());
                this.shadowGroup && this.shadowGroup.animate(this.getTranslate())
            }
            ;
            return d
        }(f);
        c(f.prototype, {
            connectorShapes: {
                fixedOffset: function(a, d, c) {
                    var g = d.breakAt;
                    d = d.touchingSliceAt;
                    return [["M", a.x, a.y], c.softConnector ? ["C", a.x + ("left" === a.alignment ? -5 : 5), a.y, 2 * g.x - d.x, 2 * g.y - d.y, g.x, g.y] : ["L", g.x, g.y], ["L", d.x, d.y]]
                },
                straight: function(a, d) {
                    d = d.touchingSliceAt;
                    return [["M", a.x, a.y], ["L", d.x, d.y]]
                },
                crookedLine: function(a, d, c) {
                    d = d.touchingSliceAt;
                    var g = this.series
                      , f = g.center[0]
                      , t = g.chart.plotWidth
                      , w = g.chart.plotLeft;
                    g = a.alignment;
                    var D = this.shapeArgs.r;
                    c = r(c.crookDistance, 1);
                    t = "left" === g ? f + D + (t + w - f - D) * (1 - c) : w + (f - D) * c;
                    c = ["L", t, a.y];
                    f = !0;
                    if ("left" === g ? t > a.x || t < d.x : t < a.x || t > d.x)
                        f = !1;
                    a = [["M", a.x, a.y]];
                    f && a.push(c);
                    a.push(["L", d.x, d.y]);
                    return a
                }
            }
        });
        return f
    });
    O(f, "Series/Pie/PieSeries.js", [f["Series/CenteredUtilities.js"], f["Series/Column/ColumnSeries.js"], f["Core/Globals.js"], f["Core/Legend/LegendSymbol.js"], f["Series/Pie/PiePoint.js"], f["Core/Series/Series.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Renderer/SVG/Symbols.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H, w, t) {
        var r = this && this.__extends || function() {
            var a = function(d, c) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return a(d, c)
            };
            return function(d, c) {
                function g() {
                    this.constructor = d
                }
                a(d, c);
                d.prototype = null === c ? Object.create(c) : (g.prototype = c.prototype,
                new g)
            }
        }()
          , a = c.getStartAndEndRadians;
        B = B.noop;
        var d = t.clamp
          , g = t.extend
          , m = t.fireEvent
          , q = t.merge
          , x = t.pick
          , D = t.relativeLength;
        t = function(c) {
            function g() {
                var a = null !== c && c.apply(this, arguments) || this;
                a.center = void 0;
                a.data = void 0;
                a.maxLabelDistance = void 0;
                a.options = void 0;
                a.points = void 0;
                return a
            }
            r(g, c);
            g.prototype.animate = function(a) {
                var d = this
                  , c = d.points
                  , g = d.startAngleRad;
                a || c.forEach(function(a) {
                    var c = a.graphic
                      , f = a.shapeArgs;
                    c && f && (c.attr({
                        r: x(a.startR, d.center && d.center[3] / 2),
                        start: g,
                        end: g
                    }),
                    c.animate({
                        r: f.r,
                        start: f.start,
                        end: f.end
                    }, d.options.animation))
                })
            }
            ;
            g.prototype.drawEmpty = function() {
                var a = this.startAngleRad
                  , d = this.endAngleRad
                  , c = this.options;
                if (0 === this.total && this.center) {
                    var g = this.center[0];
                    var f = this.center[1];
                    this.graph || (this.graph = this.chart.renderer.arc(g, f, this.center[1] / 2, 0, a, d).addClass("highcharts-empty-series").add(this.group));
                    this.graph.attr({
                        d: w.arc(g, f, this.center[2] / 2, 0, {
                            start: a,
                            end: d,
                            innerR: this.center[3] / 2
                        })
                    });
                    this.chart.styledMode || this.graph.attr({
                        "stroke-width": c.borderWidth,
                        fill: c.fillColor || "none",
                        stroke: c.color || "#cccccc"
                    })
                } else
                    this.graph && (this.graph = this.graph.destroy())
            }
            ;
            g.prototype.drawPoints = function() {
                var a = this.chart.renderer;
                this.points.forEach(function(d) {
                    d.graphic && d.hasNewShapeType() && (d.graphic = d.graphic.destroy());
                    d.graphic || (d.graphic = a[d.shapeType](d.shapeArgs).add(d.series.group),
                    d.delayedRendering = !0)
                })
            }
            ;
            g.prototype.generatePoints = function() {
                c.prototype.generatePoints.call(this);
                this.updateTotals()
            }
            ;
            g.prototype.getX = function(a, c, g) {
                var f = this.center
                  , m = this.radii ? this.radii[g.index] || 0 : f[2] / 2;
                a = Math.asin(d((a - f[1]) / (m + g.labelDistance), -1, 1));
                return f[0] + (c ? -1 : 1) * Math.cos(a) * (m + g.labelDistance) + (0 < g.labelDistance ? (c ? -1 : 1) * this.options.dataLabels.padding : 0)
            }
            ;
            g.prototype.hasData = function() {
                return !!this.processedXData.length
            }
            ;
            g.prototype.redrawPoints = function() {
                var a = this, d = a.chart, c = d.renderer, g = a.options.shadow, f, m, l, k;
                this.drawEmpty();
                !g || a.shadowGroup || d.styledMode || (a.shadowGroup = c.g("shadow").attr({
                    zIndex: -1
                }).add(a.group));
                a.points.forEach(function(e) {
                    var b = {};
                    m = e.graphic;
                    if (!e.isNull && m) {
                        var h = void 0;
                        k = e.shapeArgs;
                        f = e.getTranslate();
                        d.styledMode || (h = e.shadowGroup,
                        g && !h && (h = e.shadowGroup = c.g("shadow").add(a.shadowGroup)),
                        h && h.attr(f),
                        l = a.pointAttribs(e, e.selected && "select"));
                        e.delayedRendering ? (m.setRadialReference(a.center).attr(k).attr(f),
                        d.styledMode || m.attr(l).attr({
                            "stroke-linejoin": "round"
                        }).shadow(g, h),
                        e.delayedRendering = !1) : (m.setRadialReference(a.center),
                        d.styledMode || q(!0, b, l),
                        q(!0, b, k, f),
                        m.animate(b));
                        m.attr({
                            visibility: e.visible ? "inherit" : "hidden"
                        });
                        m.addClass(e.getClassName(), !0)
                    } else
                        m && (e.graphic = m.destroy())
                })
            }
            ;
            g.prototype.sortByAngle = function(a, d) {
                a.sort(function(a, c) {
                    return "undefined" !== typeof a.angle && (c.angle - a.angle) * d
                })
            }
            ;
            g.prototype.translate = function(d) {
                m(this, "translate");
                this.generatePoints();
                var c = this.options
                  , g = c.slicedOffset
                  , f = g + (c.borderWidth || 0)
                  , n = a(c.startAngle, c.endAngle)
                  , q = this.startAngleRad = n.start;
                n = (this.endAngleRad = n.end) - q;
                var l = this.points
                  , k = c.dataLabels.distance;
                c = c.ignoreHiddenPoint;
                var e = l.length, b, h = 0;
                d || (this.center = d = this.getCenter());
                for (b = 0; b < e; b++) {
                    var v = l[b];
                    var p = q + h * n;
                    !v.isValid() || c && !v.visible || (h += v.percentage / 100);
                    var r = q + h * n;
                    var t = {
                        x: d[0],
                        y: d[1],
                        r: d[2] / 2,
                        innerR: d[3] / 2,
                        start: Math.round(1E3 * p) / 1E3,
                        end: Math.round(1E3 * r) / 1E3
                    };
                    v.shapeType = "arc";
                    v.shapeArgs = t;
                    v.labelDistance = x(v.options.dataLabels && v.options.dataLabels.distance, k);
                    v.labelDistance = D(v.labelDistance, t.r);
                    this.maxLabelDistance = Math.max(this.maxLabelDistance || 0, v.labelDistance);
                    r = (r + p) / 2;
                    r > 1.5 * Math.PI ? r -= 2 * Math.PI : r < -Math.PI / 2 && (r += 2 * Math.PI);
                    v.slicedTranslation = {
                        translateX: Math.round(Math.cos(r) * g),
                        translateY: Math.round(Math.sin(r) * g)
                    };
                    t = Math.cos(r) * d[2] / 2;
                    var w = Math.sin(r) * d[2] / 2;
                    v.tooltipPos = [d[0] + .7 * t, d[1] + .7 * w];
                    v.half = r < -Math.PI / 2 || r > Math.PI / 2 ? 1 : 0;
                    v.angle = r;
                    p = Math.min(f, v.labelDistance / 5);
                    v.labelPosition = {
                        natural: {
                            x: d[0] + t + Math.cos(r) * v.labelDistance,
                            y: d[1] + w + Math.sin(r) * v.labelDistance
                        },
                        "final": {},
                        alignment: 0 > v.labelDistance ? "center" : v.half ? "right" : "left",
                        connectorPosition: {
                            breakAt: {
                                x: d[0] + t + Math.cos(r) * p,
                                y: d[1] + w + Math.sin(r) * p
                            },
                            touchingSliceAt: {
                                x: d[0] + t,
                                y: d[1] + w
                            }
                        }
                    }
                }
                m(this, "afterTranslate")
            }
            ;
            g.prototype.updateTotals = function() {
                var a = this.points, d = a.length, c = this.options.ignoreHiddenPoint, g, f = 0;
                for (g = 0; g < d; g++) {
                    var m = a[g];
                    !m.isValid() || c && !m.visible || (f += m.y)
                }
                this.total = f;
                for (g = 0; g < d; g++)
                    m = a[g],
                    m.percentage = 0 < f && (m.visible || !c) ? m.y / f * 100 : 0,
                    m.total = f
            }
            ;
            g.defaultOptions = q(E.defaultOptions, {
                center: [null, null],
                clip: !1,
                colorByPoint: !0,
                dataLabels: {
                    allowOverlap: !0,
                    connectorPadding: 5,
                    connectorShape: "fixedOffset",
                    crookDistance: "70%",
                    distance: 30,
                    enabled: !0,
                    formatter: function() {
                        return this.point.isNull ? void 0 : this.point.name
                    },
                    softConnector: !0,
                    x: 0
                },
                fillColor: void 0,
                ignoreHiddenPoint: !0,
                inactiveOtherPoints: !0,
                legendType: "point",
                marker: null,
                size: null,
                showInLegend: !1,
                slicedOffset: 10,
                stickyTracking: !1,
                tooltip: {
                    followPointer: !0
                },
                borderColor: "#ffffff",
                borderWidth: 1,
                lineWidth: void 0,
                states: {
                    hover: {
                        brightness: .1
                    }
                }
            });
            return g
        }(E);
        g(t.prototype, {
            axisTypes: [],
            directTouch: !0,
            drawGraph: void 0,
            drawLegendSymbol: F.drawRectangle,
            drawTracker: f.prototype.drawTracker,
            getCenter: c.getCenter,
            getSymbol: B,
            isCartesian: !1,
            noSharedTooltip: !0,
            pointAttribs: f.prototype.pointAttribs,
            pointClass: z,
            requireSorting: !1,
            searchPoint: B,
            trackerGroups: ["group", "dataLabelsGroup"]
        });
        H.registerSeriesType("pie", t);
        "";
        return t
    });
    O(f, "Series/Pie/PieDataLabel.js", [f["Core/Series/DataLabel.js"], f["Core/Globals.js"], f["Core/Renderer/RendererUtilities.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B, F, z) {
        var D = f.noop, H = B.distribute, w = F.series, t = z.arrayMax, r = z.clamp, a = z.defined, d = z.merge, g = z.pick, m = z.relativeLength, q;
        (function(f) {
            function q() {
                var c = this, f = c.data, m = c.chart, q = c.options.dataLabels || {}, l = q.connectorPadding, k = m.plotWidth, e = m.plotHeight, b = m.plotLeft, h = Math.round(m.chartWidth / 3), v = c.center, p = v[2] / 2, r = v[1], x = [[], []], C = [0, 0, 0, 0], D = c.dataLabelPositioners, z, B, J, I, E, F, K, M, U, O, Y, R;
                c.visible && (q.enabled || c._hasPointLabels) && (f.forEach(function(a) {
                    a.dataLabel && a.visible && a.dataLabel.shortened && (a.dataLabel.attr({
                        width: "auto"
                    }).css({
                        width: "auto",
                        textOverflow: "clip"
                    }),
                    a.dataLabel.shortened = !1)
                }),
                w.prototype.drawDataLabels.apply(c),
                f.forEach(function(b) {
                    b.dataLabel && (b.visible ? (x[b.half].push(b),
                    b.dataLabel._pos = null,
                    !a(q.style.width) && !a(b.options.dataLabels && b.options.dataLabels.style && b.options.dataLabels.style.width) && b.dataLabel.getBBox().width > h && (b.dataLabel.css({
                        width: Math.round(.7 * h) + "px"
                    }),
                    b.dataLabel.shortened = !0)) : (b.dataLabel = b.dataLabel.destroy(),
                    b.dataLabels && 1 === b.dataLabels.length && delete b.dataLabels))
                }),
                x.forEach(function(d, h) {
                    var f = d.length, n = [], u;
                    if (f) {
                        c.sortByAngle(d, h - .5);
                        if (0 < c.maxLabelDistance) {
                            var t = Math.max(0, r - p - c.maxLabelDistance);
                            var G = Math.min(r + p + c.maxLabelDistance, m.plotHeight);
                            d.forEach(function(a) {
                                0 < a.labelDistance && a.dataLabel && (a.top = Math.max(0, r - p - a.labelDistance),
                                a.bottom = Math.min(r + p + a.labelDistance, m.plotHeight),
                                u = a.dataLabel.getBBox().height || 21,
                                a.distributeBox = {
                                    target: a.labelPosition.natural.y - a.top + u / 2,
                                    size: u,
                                    rank: a.y
                                },
                                n.push(a.distributeBox))
                            });
                            t = G + u - t;
                            H(n, t, t / 5)
                        }
                        for (Y = 0; Y < f; Y++) {
                            z = d[Y];
                            F = z.labelPosition;
                            I = z.dataLabel;
                            O = !1 === z.visible ? "hidden" : "inherit";
                            U = t = F.natural.y;
                            n && a(z.distributeBox) && ("undefined" === typeof z.distributeBox.pos ? O = "hidden" : (K = z.distributeBox.size,
                            U = D.radialDistributionY(z)));
                            delete z.positionIndex;
                            if (q.justify)
                                M = D.justify(z, p, v);
                            else
                                switch (q.alignTo) {
                                case "connectors":
                                    M = D.alignToConnectors(d, h, k, b);
                                    break;
                                case "plotEdges":
                                    M = D.alignToPlotEdges(I, h, k, b);
                                    break;
                                default:
                                    M = D.radialDistributionX(c, z, U, t)
                                }
                            I._attr = {
                                visibility: O,
                                align: F.alignment
                            };
                            R = z.options.dataLabels || {};
                            I._pos = {
                                x: M + g(R.x, q.x) + ({
                                    left: l,
                                    right: -l
                                }[F.alignment] || 0),
                                y: U + g(R.y, q.y) - 10
                            };
                            F.final.x = M;
                            F.final.y = U;
                            g(q.crop, !0) && (E = I.getBBox().width,
                            t = null,
                            M - E < l && 1 === h ? (t = Math.round(E - M + l),
                            C[3] = Math.max(t, C[3])) : M + E > k - l && 0 === h && (t = Math.round(M + E - k + l),
                            C[1] = Math.max(t, C[1])),
                            0 > U - K / 2 ? C[0] = Math.max(Math.round(-U + K / 2), C[0]) : U + K / 2 > e && (C[2] = Math.max(Math.round(U + K / 2 - e), C[2])),
                            I.sideOverflow = t)
                        }
                    }
                }),
                0 === t(C) || this.verifyDataLabelOverflow(C)) && (this.placeDataLabels(),
                this.points.forEach(function(a) {
                    R = d(q, a.options.dataLabels);
                    if (B = g(R.connectorWidth, 1)) {
                        var b;
                        J = a.connector;
                        if ((I = a.dataLabel) && I._pos && a.visible && 0 < a.labelDistance) {
                            O = I._attr.visibility;
                            if (b = !J)
                                a.connector = J = m.renderer.path().addClass("highcharts-data-label-connector  highcharts-color-" + a.colorIndex + (a.className ? " " + a.className : "")).add(c.dataLabelsGroup),
                                m.styledMode || J.attr({
                                    "stroke-width": B,
                                    stroke: R.connectorColor || a.color || "#666666"
                                });
                            J[b ? "attr" : "animate"]({
                                d: a.getConnectorPath()
                            });
                            J.attr("visibility", O)
                        } else
                            J && (a.connector = J.destroy())
                    }
                }))
            }
            function x() {
                this.points.forEach(function(a) {
                    var d = a.dataLabel, c;
                    d && a.visible && ((c = d._pos) ? (d.sideOverflow && (d._attr.width = Math.max(d.getBBox().width - d.sideOverflow, 0),
                    d.css({
                        width: d._attr.width + "px",
                        textOverflow: (this.options.dataLabels.style || {}).textOverflow || "ellipsis"
                    }),
                    d.shortened = !0),
                    d.attr(d._attr),
                    d[d.moved ? "animate" : "attr"](c),
                    d.moved = !0) : d && d.attr({
                        y: -9999
                    }));
                    delete a.distributeBox
                }, this)
            }
            function z(a) {
                var d = this.center
                  , c = this.options
                  , g = c.center
                  , f = c.minSize || 80
                  , k = null !== c.size;
                if (!k) {
                    if (null !== g[0])
                        var e = Math.max(d[2] - Math.max(a[1], a[3]), f);
                    else
                        e = Math.max(d[2] - a[1] - a[3], f),
                        d[0] += (a[3] - a[1]) / 2;
                    null !== g[1] ? e = r(e, f, d[2] - Math.max(a[0], a[2])) : (e = r(e, f, d[2] - a[0] - a[2]),
                    d[1] += (a[0] - a[2]) / 2);
                    e < d[2] ? (d[2] = e,
                    d[3] = Math.min(c.thickness ? Math.max(0, e - 2 * c.thickness) : Math.max(0, m(c.innerSize || 0, e)), e),
                    this.translate(d),
                    this.drawDataLabels && this.drawDataLabels()) : k = !0
                }
                return k
            }
            var B = []
              , C = {
                radialDistributionY: function(a) {
                    return a.top + a.distributeBox.pos
                },
                radialDistributionX: function(a, d, c, g) {
                    return a.getX(c < d.top + 2 || c > d.bottom - 2 ? g : c, d.half, d)
                },
                justify: function(a, d, c) {
                    return c[0] + (a.half ? -1 : 1) * (d + a.labelDistance)
                },
                alignToPlotEdges: function(a, d, c, g) {
                    a = a.getBBox().width;
                    return d ? a + g : c - a - g
                },
                alignToConnectors: function(a, d, c, g) {
                    var f = 0, k;
                    a.forEach(function(a) {
                        k = a.dataLabel.getBBox().width;
                        k > f && (f = k)
                    });
                    return d ? f + g : c - f - g
                }
            };
            f.compose = function(a) {
                c.compose(w);
                -1 === B.indexOf(a) && (B.push(a),
                a = a.prototype,
                a.dataLabelPositioners = C,
                a.alignDataLabel = D,
                a.drawDataLabels = q,
                a.placeDataLabels = x,
                a.verifyDataLabelOverflow = z)
            }
        }
        )(q || (q = {}));
        return q
    });
    O(f, "Extensions/OverlappingDataLabels.js", [f["Core/Chart/Chart.js"], f["Core/Utilities.js"]], function(c, f) {
        function D(c, a) {
            var d = !1;
            if (c) {
                var g = c.newOpacity;
                c.oldOpacity !== g && (c.alignAttr && c.placed ? (c[g ? "removeClass" : "addClass"]("highcharts-data-label-hidden"),
                d = !0,
                c.alignAttr.opacity = g,
                c[c.isOld ? "animate" : "attr"](c.alignAttr, null, function() {
                    a.styledMode || c.css({
                        pointerEvents: g ? "auto" : "none"
                    })
                }),
                z(a, "afterHideOverlappingLabel")) : c.attr({
                    opacity: g
                }));
                c.isOld = !0
            }
            return d
        }
        var F = f.addEvent
          , z = f.fireEvent
          , E = f.isArray
          , H = f.isNumber
          , w = f.objectEach
          , t = f.pick;
        F(c, "render", function() {
            var c = this
              , a = [];
            (this.labelCollectors || []).forEach(function(d) {
                a = a.concat(d())
            });
            (this.yAxis || []).forEach(function(d) {
                d.stacking && d.options.stackLabels && !d.options.stackLabels.allowOverlap && w(d.stacking.stacks, function(d) {
                    w(d, function(d) {
                        d.label && a.push(d.label)
                    })
                })
            });
            (this.series || []).forEach(function(d) {
                var g = d.options.dataLabels;
                d.visible && (!1 !== g.enabled || d._hasPointLabels) && (g = function(d) {
                    return d.forEach(function(d) {
                        d.visible && (E(d.dataLabels) ? d.dataLabels : d.dataLabel ? [d.dataLabel] : []).forEach(function(g) {
                            var f = g.options;
                            g.labelrank = t(f.labelrank, d.labelrank, d.shapeArgs && d.shapeArgs.height);
                            f.allowOverlap ? (g.oldOpacity = g.opacity,
                            g.newOpacity = 1,
                            D(g, c)) : a.push(g)
                        })
                    })
                }
                ,
                g(d.nodes || []),
                g(d.points))
            });
            this.hideOverlappingLabels(a)
        });
        c.prototype.hideOverlappingLabels = function(c) {
            var a = this, d = c.length, g = a.renderer, f, q, r, t = !1;
            var w = function(a) {
                var d, c = a.box ? 0 : a.padding || 0, f = d = 0, m;
                if (a && (!a.alignAttr || a.placed)) {
                    var l = a.alignAttr || {
                        x: a.attr("x"),
                        y: a.attr("y")
                    };
                    var k = a.parentGroup;
                    a.width || (d = a.getBBox(),
                    a.width = d.width,
                    a.height = d.height,
                    d = g.fontMetrics(null, a.element).h);
                    var e = a.width - 2 * c;
                    (m = {
                        left: "0",
                        center: "0.5",
                        right: "1"
                    }[a.alignValue]) ? f = +m * e : H(a.x) && Math.round(a.x) !== a.translateX && (f = a.x - a.translateX);
                    return {
                        x: l.x + (k.translateX || 0) + c - (f || 0),
                        y: l.y + (k.translateY || 0) + c - d,
                        width: a.width - 2 * c,
                        height: a.height - 2 * c
                    }
                }
            };
            for (q = 0; q < d; q++)
                if (f = c[q])
                    f.oldOpacity = f.opacity,
                    f.newOpacity = 1,
                    f.absoluteBox = w(f);
            c.sort(function(a, d) {
                return (d.labelrank || 0) - (a.labelrank || 0)
            });
            for (q = 0; q < d; q++) {
                var B = (w = c[q]) && w.absoluteBox;
                for (f = q + 1; f < d; ++f) {
                    var E = (r = c[f]) && r.absoluteBox;
                    !B || !E || w === r || 0 === w.newOpacity || 0 === r.newOpacity || "hidden" === w.visibility || "hidden" === r.visibility || E.x >= B.x + B.width || E.x + E.width <= B.x || E.y >= B.y + B.height || E.y + E.height <= B.y || ((w.labelrank < r.labelrank ? w : r).newOpacity = 0)
                }
            }
            c.forEach(function(d) {
                D(d, a) && (t = !0)
            });
            t && z(a, "afterHideAllOverlappingLabels")
        }
    });
    O(f, "Core/Responsive.js", [f["Core/Utilities.js"]], function(c) {
        var f = c.extend, B = c.find, F = c.isArray, z = c.isObject, E = c.merge, H = c.objectEach, w = c.pick, t = c.splat, r = c.uniqueKey, a;
        (function(a) {
            var d = [];
            a.compose = function(a) {
                -1 === d.indexOf(a) && (d.push(a),
                f(a.prototype, c.prototype));
                return a
            }
            ;
            var c = function() {
                function a() {}
                a.prototype.currentOptions = function(a) {
                    function d(a, g, f, m) {
                        var n;
                        H(a, function(a, l) {
                            if (!m && -1 < c.collectionsWithUpdate.indexOf(l) && g[l])
                                for (a = t(a),
                                f[l] = [],
                                n = 0; n < Math.max(a.length, g[l].length); n++)
                                    g[l][n] && (void 0 === a[n] ? f[l][n] = g[l][n] : (f[l][n] = {},
                                    d(a[n], g[l][n], f[l][n], m + 1)));
                            else
                                z(a) ? (f[l] = F(a) ? [] : {},
                                d(a, g[l] || {}, f[l], m + 1)) : f[l] = "undefined" === typeof g[l] ? null : g[l]
                        })
                    }
                    var c = this
                      , g = {};
                    d(a, this.options, g, 0);
                    return g
                }
                ;
                a.prototype.matchResponsiveRule = function(a, d) {
                    var c = a.condition;
                    (c.callback || function() {
                        return this.chartWidth <= w(c.maxWidth, Number.MAX_VALUE) && this.chartHeight <= w(c.maxHeight, Number.MAX_VALUE) && this.chartWidth >= w(c.minWidth, 0) && this.chartHeight >= w(c.minHeight, 0)
                    }
                    ).call(this) && d.push(a._id)
                }
                ;
                a.prototype.setResponsive = function(a, d) {
                    var c = this
                      , g = this.options.responsive
                      , f = this.currentResponsive
                      , m = [];
                    !d && g && g.rules && g.rules.forEach(function(a) {
                        "undefined" === typeof a._id && (a._id = r());
                        c.matchResponsiveRule(a, m)
                    }, this);
                    d = E.apply(void 0, m.map(function(a) {
                        return B((g || {}).rules || [], function(d) {
                            return d._id === a
                        })
                    }).map(function(a) {
                        return a && a.chartOptions
                    }));
                    d.isResponsiveOptions = !0;
                    m = m.toString() || void 0;
                    m !== (f && f.ruleIds) && (f && this.update(f.undoOptions, a, !0),
                    m ? (f = this.currentOptions(d),
                    f.isResponsiveOptions = !0,
                    this.currentResponsive = {
                        ruleIds: m,
                        mergedOptions: d,
                        undoOptions: f
                    },
                    this.update(d, a, !0)) : this.currentResponsive = void 0)
                }
                ;
                return a
            }()
        }
        )(a || (a = {}));
        "";
        "";
        return a
    });
    O(f, "masters/highcharts.src.js", [f["Core/Globals.js"], f["Core/Utilities.js"], f["Core/DefaultOptions.js"], f["Core/Animation/Fx.js"], f["Core/Animation/AnimationUtilities.js"], f["Core/Renderer/HTML/AST.js"], f["Core/FormatUtilities.js"], f["Core/Renderer/RendererUtilities.js"], f["Core/Renderer/SVG/SVGElement.js"], f["Core/Renderer/SVG/SVGRenderer.js"], f["Core/Renderer/HTML/HTMLElement.js"], f["Core/Renderer/HTML/HTMLRenderer.js"], f["Core/Axis/Axis.js"], f["Core/Axis/DateTimeAxis.js"], f["Core/Axis/LogarithmicAxis.js"], f["Core/Axis/PlotLineOrBand/PlotLineOrBand.js"], f["Core/Axis/Tick.js"], f["Core/Tooltip.js"], f["Core/Series/Point.js"], f["Core/Pointer.js"], f["Core/MSPointer.js"], f["Core/Legend/Legend.js"], f["Core/Chart/Chart.js"], f["Core/Axis/Stacking/StackingAxis.js"], f["Core/Axis/Stacking/StackItem.js"], f["Core/Series/Series.js"], f["Core/Series/SeriesRegistry.js"], f["Series/Column/ColumnSeries.js"], f["Series/Column/ColumnDataLabel.js"], f["Series/Pie/PieSeries.js"], f["Series/Pie/PieDataLabel.js"], f["Core/Series/DataLabel.js"], f["Core/Responsive.js"], f["Core/Color/Color.js"], f["Core/Time.js"]], function(c, f, B, F, z, E, H, w, t, r, a, d, g, m, q, x, J, I, M, K, C, A, y, n, u, l, k, e, b, h, v, p, G, Q, S) {
        c.animate = z.animate;
        c.animObject = z.animObject;
        c.getDeferredAnimation = z.getDeferredAnimation;
        c.setAnimation = z.setAnimation;
        c.stop = z.stop;
        c.timers = F.timers;
        c.AST = E;
        c.Axis = g;
        c.Chart = y;
        c.chart = y.chart;
        c.Fx = F;
        c.Legend = A;
        c.PlotLineOrBand = x;
        c.Point = M;
        c.Pointer = C.isRequired() ? C : K;
        c.Series = l;
        c.StackItem = u;
        c.SVGElement = t;
        c.SVGRenderer = r;
        c.Tick = J;
        c.Time = S;
        c.Tooltip = I;
        c.Color = Q;
        c.color = Q.parse;
        d.compose(r);
        a.compose(t);
        c.defaultOptions = B.defaultOptions;
        c.getOptions = B.getOptions;
        c.time = B.defaultTime;
        c.setOptions = B.setOptions;
        c.dateFormat = H.dateFormat;
        c.format = H.format;
        c.numberFormat = H.numberFormat;
        c.addEvent = f.addEvent;
        c.arrayMax = f.arrayMax;
        c.arrayMin = f.arrayMin;
        c.attr = f.attr;
        c.clearTimeout = f.clearTimeout;
        c.correctFloat = f.correctFloat;
        c.createElement = f.createElement;
        c.css = f.css;
        c.defined = f.defined;
        c.destroyObjectProperties = f.destroyObjectProperties;
        c.discardElement = f.discardElement;
        c.distribute = w.distribute;
        c.erase = f.erase;
        c.error = f.error;
        c.extend = f.extend;
        c.extendClass = f.extendClass;
        c.find = f.find;
        c.fireEvent = f.fireEvent;
        c.getMagnitude = f.getMagnitude;
        c.getStyle = f.getStyle;
        c.inArray = f.inArray;
        c.isArray = f.isArray;
        c.isClass = f.isClass;
        c.isDOMElement = f.isDOMElement;
        c.isFunction = f.isFunction;
        c.isNumber = f.isNumber;
        c.isObject = f.isObject;
        c.isString = f.isString;
        c.keys = f.keys;
        c.merge = f.merge;
        c.normalizeTickInterval = f.normalizeTickInterval;
        c.objectEach = f.objectEach;
        c.offset = f.offset;
        c.pad = f.pad;
        c.pick = f.pick;
        c.pInt = f.pInt;
        c.relativeLength = f.relativeLength;
        c.removeEvent = f.removeEvent;
        c.seriesType = k.seriesType;
        c.splat = f.splat;
        c.stableSort = f.stableSort;
        c.syncTimeout = f.syncTimeout;
        c.timeUnits = f.timeUnits;
        c.uniqueKey = f.uniqueKey;
        c.useSerialIds = f.useSerialIds;
        c.wrap = f.wrap;
        b.compose(e);
        p.compose(l);
        m.compose(g);
        q.compose(g);
        v.compose(h);
        x.compose(g);
        G.compose(y);
        n.compose(g, y, l);
        return c
    });
    O(f, "Core/Axis/OrdinalAxis.js", [f["Core/Axis/Axis.js"], f["Core/Globals.js"], f["Core/Series/Series.js"], f["Core/Utilities.js"]], function(c, f, B, F) {
        var z = F.addEvent, D = F.correctFloat, H = F.css, w = F.defined, t = F.error, r = F.pick, a = F.timeUnits, d = [], g;
        (function(c) {
            function g(d, e, b, c, g, p, f) {
                void 0 === g && (g = []);
                void 0 === p && (p = 0);
                var h = {}, k = this.options.tickPixelInterval, l = this.chart.time, m = [], n, v, q = 0, r = [], u = -Number.MAX_VALUE;
                if (!this.options.ordinal && !this.options.breaks || !g || 3 > g.length || "undefined" === typeof e)
                    return l.getTimeTicks.apply(l, arguments);
                var G = g.length;
                for (n = 0; n < G; n++) {
                    var x = n && g[n - 1] > b;
                    g[n] < e && (q = n);
                    if (n === G - 1 || g[n + 1] - g[n] > 5 * p || x) {
                        if (g[n] > u) {
                            for (v = l.getTimeTicks(d, g[q], g[n], c); v.length && v[0] <= u; )
                                v.shift();
                            v.length && (u = v[v.length - 1]);
                            m.push(r.length);
                            r = r.concat(v)
                        }
                        q = n + 1
                    }
                    if (x)
                        break
                }
                if (v) {
                    v = v.info;
                    if (f && v.unitRange <= a.hour) {
                        n = r.length - 1;
                        for (q = 1; q < n; q++)
                            if (l.dateFormat("%d", r[q]) !== l.dateFormat("%d", r[q - 1])) {
                                h[r[q]] = "day";
                                var y = !0
                            }
                        y && (h[r[0]] = "day");
                        v.higherRanks = h
                    }
                    v.segmentStarts = m;
                    r.info = v
                } else
                    t(12, !1, this.chart);
                if (f && w(k)) {
                    v = r.length;
                    l = [];
                    q = [];
                    n = void 0;
                    for (y = v; y--; )
                        m = this.translate(r[y]),
                        n && (q[y] = n - m),
                        l[y] = n = m;
                    q.sort();
                    q = q[Math.floor(q.length / 2)];
                    q < .6 * k && (q = null);
                    y = r[v - 1] > b ? v - 1 : v;
                    for (n = void 0; y--; )
                        m = l[y],
                        v = Math.abs(n - m),
                        n && v < .8 * k && (null === q || v < .8 * q) ? (h[r[y]] && !h[r[y + 1]] ? (v = y + 1,
                        n = m) : v = y,
                        r.splice(v, 1)) : n = m
                }
                return r
            }
            function m(a) {
                var e = this.ordinal.positions;
                if (!e)
                    return a;
                var b = e.length - 1;
                if (0 > a)
                    a = e[0];
                else if (a > b)
                    a = e[b];
                else {
                    b = Math.floor(a);
                    var d = a - b
                }
                return "undefined" !== typeof d && "undefined" !== typeof e[b] ? e[b] + (d ? d * (e[b + 1] - e[b]) : 0) : a
            }
            function J(a) {
                var e = this.ordinal
                  , b = e.positions;
                if (!b)
                    return a;
                var d = (a - (this.old ? this.old.min : this.min)) * (this.old ? this.old.transA : this.transA) + this.minPixelPadding;
                0 < d && d < this.left + this.len || (e.extendedOrdinalPositions || (e.extendedOrdinalPositions = e.getExtendedPositions()),
                b = e.extendedOrdinalPositions);
                if (b && b.length) {
                    a = e.getIndexOfPoint(d, b);
                    e = D(a % 1);
                    if (0 <= a && a < b.length - 1)
                        return b[Math.floor(a)] + e * (b[Math.ceil(a)] - b[Math.floor(a)]);
                    e = b.length;
                    d = b[0];
                    b = b[e - 1];
                    var c = (b - d) / (e - 1);
                    return 0 > a ? d + c * a : b + c * (a - e)
                }
                return a
            }
            function E(a, e) {
                var b = c.Additions.findIndexOf(a, e, !0);
                return a[b] === e ? b : b + (e - a[b]) / (a[b + 1] - a[b])
            }
            function F() {
                this.ordinal || (this.ordinal = new c.Additions(this))
            }
            function K() {
                this.isXAxis && w(this.options.overscroll) && this.max === this.dataMax && (!this.chart.mouseIsDown || this.isInternal) && (!this.eventArgs || this.eventArgs && "navigator" !== this.eventArgs.trigger) && (this.max += this.options.overscroll,
                !this.isInternal && w(this.userMin) && (this.min += this.options.overscroll))
            }
            function C() {
                this.horiz && !this.isDirty && (this.isDirty = this.isOrdinal && this.chart.navigator && !this.chart.navigator.adaptToUpdatedData)
            }
            function A() {
                this.ordinal && (this.ordinal.beforeSetTickPositions(),
                this.tickInterval = this.ordinal.postProcessTickInterval(this.tickInterval))
            }
            function y(a) {
                var e = this.xAxis[0]
                  , b = e.options.overscroll
                  , d = a.originalEvent.chartX
                  , c = this.options.chart.panning
                  , k = !1;
                if (c && "y" !== c.type && e.options.ordinal && e.series.length) {
                    var g = this.mouseDownX
                      , f = e.getExtremes()
                      , l = f.dataMax
                      , m = f.min
                      , n = f.max
                      , q = this.hoverPoints
                      , r = e.closestPointRange || e.ordinal && e.ordinal.overscrollPointsRange;
                    g = (g - d) / (e.translationSlope * (e.ordinal.slope || r));
                    r = e.ordinal.getExtendedPositions();
                    r = {
                        ordinal: {
                            positions: r,
                            extendedOrdinalPositions: r
                        }
                    };
                    var t = e.index2val
                      , u = e.val2lin
                      , x = void 0
                      , y = x = void 0
                      , C = void 0;
                    r.ordinal.positions ? 1 < Math.abs(g) && (q && q.forEach(function(a) {
                        a.setState()
                    }),
                    0 > g ? (y = r,
                    C = e.ordinal.positions ? e : r) : (y = e.ordinal.positions ? e : r,
                    C = r),
                    x = C.ordinal.positions,
                    l > x[x.length - 1] && x.push(l),
                    this.fixedRange = n - m,
                    x = e.navigatorAxis.toFixedRange(void 0, void 0, t.apply(y, [u.apply(y, [m, !0]) + g]), t.apply(C, [u.apply(C, [n, !0]) + g])),
                    x.min >= Math.min(f.dataMin, m) && x.max <= Math.max(l, n) + b && e.setExtremes(x.min, x.max, !0, !1, {
                        trigger: "pan"
                    }),
                    this.mouseDownX = d,
                    H(this.container, {
                        cursor: "move"
                    })) : k = !0
                } else
                    k = !0;
                k || c && /y/.test(c.type) ? b && (e.max = e.dataMax + b) : a.preventDefault()
            }
            function n() {
                var a = this.xAxis;
                a && a.options.ordinal && (delete a.ordinal.index,
                delete a.ordinal.extendedOrdinalPositions)
            }
            function u(a, e) {
                var b = this.ordinal
                  , d = b.positions
                  , c = b.slope
                  , k = b.extendedOrdinalPositions;
                if (!d)
                    return a;
                var g = d.length;
                if (d[0] <= a && d[g - 1] >= a)
                    a = E(d, a);
                else {
                    k || (k = b.getExtendedPositions && b.getExtendedPositions(),
                    b.extendedOrdinalPositions = k);
                    if (!k || !k.length)
                        return a;
                    g = k.length;
                    c || (c = (k[g - 1] - k[0]) / g);
                    d = E(k, d[0]);
                    a >= k[0] && a <= k[g - 1] ? a = E(k, a) - d : a < k[0] ? (a = k[0] - a,
                    a = -d - a / c) : (a -= k[g - 1],
                    a = a / c + g - d)
                }
                return e ? a : c * (a || 0) + b.offset
            }
            c.compose = function(a, e, b) {
                if (-1 === d.indexOf(a)) {
                    d.push(a);
                    var c = a.prototype;
                    c.getTimeTicks = g;
                    c.index2val = m;
                    c.lin2val = J;
                    c.val2lin = u;
                    c.ordinal2lin = c.val2lin;
                    z(a, "afterInit", F);
                    z(a, "foundExtremes", K);
                    z(a, "afterSetScale", C);
                    z(a, "initialAxisTranslation", A)
                }
                -1 === d.indexOf(b) && (d.push(b),
                z(b, "pan", y));
                -1 === d.indexOf(e) && (d.push(e),
                z(e, "updatedData", n));
                return a
            }
            ;
            var l = function() {
                function a(a) {
                    this.index = {};
                    this.axis = a
                }
                a.prototype.beforeSetTickPositions = function() {
                    var a = this.axis
                      , b = a.ordinal
                      , d = a.getExtremes()
                      , c = d.min
                      , k = d.max
                      , g = a.isXAxis && !!a.options.breaks;
                    d = a.options.ordinal;
                    var f = a.chart.options.chart.ignoreHiddenSeries, l, m, n = [], q = Number.MAX_VALUE, t = !1, u = !1, x = !1;
                    if (d || g) {
                        var y = 0;
                        a.series.forEach(function(a, b) {
                            l = [];
                            0 < b && "highcharts-navigator-series" !== a.options.id && (u = y !== a.processedXData[1] - a.processedXData[0]);
                            y = a.processedXData[1] - a.processedXData[0];
                            a.boosted && (x = a.boosted);
                            if (!(f && !1 === a.visible || !1 === a.takeOrdinalPosition && !g) && (n = n.concat(a.processedXData),
                            C = n.length,
                            n.sort(function(a, b) {
                                return a - b
                            }),
                            q = Math.min(q, r(a.closestPointRange, q)),
                            C)) {
                                for (b = 0; b < C - 1; )
                                    n[b] !== n[b + 1] && l.push(n[b + 1]),
                                    b++;
                                l[0] !== n[0] && l.unshift(n[0]);
                                n = l
                            }
                        });
                        u && x && (n.pop(),
                        n.shift());
                        var C = n.length;
                        if (2 < C) {
                            var A = n[1] - n[0];
                            for (m = C - 1; m-- && !t; )
                                n[m + 1] - n[m] !== A && (t = !0);
                            !a.options.keepOrdinalPadding && (n[0] - c > A || k - n[n.length - 1] > A) && (t = !0)
                        } else
                            a.options.overscroll && (2 === C ? q = n[1] - n[0] : 1 === C ? (q = a.options.overscroll,
                            n = [n[0], n[0] + q]) : q = b.overscrollPointsRange);
                        t || a.forceOrdinal ? (a.options.overscroll && (b.overscrollPointsRange = q,
                        n = n.concat(b.getOverscrollPositions())),
                        b.positions = n,
                        A = a.ordinal2lin(Math.max(c, n[0]), !0),
                        m = Math.max(a.ordinal2lin(Math.min(k, n[n.length - 1]), !0), 1),
                        b.slope = k = (k - c) / (m - A),
                        b.offset = c - A * k) : (b.overscrollPointsRange = r(a.closestPointRange, b.overscrollPointsRange),
                        b.positions = a.ordinal.slope = b.offset = void 0)
                    }
                    a.isOrdinal = d && t;
                    b.groupIntervalFactor = null
                }
                ;
                a.findIndexOf = function(a, b, d) {
                    for (var e = 0, c = a.length - 1, h; e < c; )
                        h = Math.ceil((e + c) / 2),
                        a[h] <= b ? e = h : c = h - 1;
                    return a[e] === b ? e : d ? e : -1
                }
                ;
                a.prototype.getExtendedPositions = function() {
                    var a = this
                      , b = a.axis
                      , d = b.constructor.prototype
                      , c = b.chart
                      , k = b.series[0].currentDataGrouping
                      , g = k ? k.count + k.unitName : "raw"
                      , l = b.options.overscroll
                      , m = b.getExtremes()
                      , n = void 0
                      , q = a.index;
                    q || (q = a.index = {});
                    if (!q[g]) {
                        var r = {
                            series: [],
                            chart: c,
                            forceOrdinal: !1,
                            getExtremes: function() {
                                return {
                                    min: m.dataMin,
                                    max: m.dataMax + l
                                }
                            },
                            getGroupPixelWidth: d.getGroupPixelWidth,
                            getTimeTicks: d.getTimeTicks,
                            options: {
                                ordinal: !0
                            },
                            ordinal: {
                                getGroupIntervalFactor: this.getGroupIntervalFactor
                            },
                            ordinal2lin: d.ordinal2lin,
                            getIndexOfPoint: d.getIndexOfPoint,
                            val2lin: d.val2lin
                        };
                        r.ordinal.axis = r;
                        b.series.forEach(function(b) {
                            n = {
                                xAxis: r,
                                xData: b.xData.slice(),
                                chart: c,
                                destroyGroupedData: f.noop,
                                getProcessedData: B.prototype.getProcessedData,
                                applyGrouping: B.prototype.applyGrouping
                            };
                            n.xData = n.xData.concat(a.getOverscrollPositions());
                            n.options = {
                                dataGrouping: k ? {
                                    firstAnchor: "firstPoint",
                                    anchor: "middle",
                                    lastAnchor: "lastPoint",
                                    enabled: !0,
                                    forced: !0,
                                    approximation: "open",
                                    units: [[k.unitName, [k.count]]]
                                } : {
                                    enabled: !1
                                }
                            };
                            r.series.push(n);
                            b.processData.apply(n)
                        });
                        n.closestPointRange !== n.basePointRange && n.currentDataGrouping && (r.forceOrdinal = !0);
                        b.ordinal.beforeSetTickPositions.apply({
                            axis: r
                        });
                        q[g] = r.ordinal.positions
                    }
                    return q[g]
                }
                ;
                a.prototype.getGroupIntervalFactor = function(a, b, d) {
                    d = d.processedXData;
                    var e = d.length
                      , c = [];
                    var h = this.groupIntervalFactor;
                    if (!h) {
                        for (h = 0; h < e - 1; h++)
                            c[h] = d[h + 1] - d[h];
                        c.sort(function(a, b) {
                            return a - b
                        });
                        c = c[Math.floor(e / 2)];
                        a = Math.max(a, d[0]);
                        b = Math.min(b, d[e - 1]);
                        this.groupIntervalFactor = h = e * c / (b - a)
                    }
                    return h
                }
                ;
                a.prototype.getIndexOfPoint = function(e, b) {
                    var d = this.axis
                      , c = this.positions ? this.positions[0] : 0
                      , k = d.series[0].points && d.series[0].points[0] && d.series[0].points[0].plotX || d.minPixelPadding;
                    1 < d.series.length && d.series.forEach(function(a) {
                        a.points && w(a.points[0]) && w(a.points[0].plotX) && a.points[0].plotX < k && (k = a.points[0].plotX)
                    });
                    e = (e - k) / (d.translationSlope * (this.slope || d.closestPointRange || this.overscrollPointsRange));
                    return a.findIndexOf(b, c) + e
                }
                ;
                a.prototype.getOverscrollPositions = function() {
                    var a = this.axis
                      , b = a.options.overscroll
                      , d = this.overscrollPointsRange
                      , c = []
                      , k = a.dataMax;
                    if (w(d))
                        for (; k <= a.dataMax + b; )
                            k += d,
                            c.push(k);
                    return c
                }
                ;
                a.prototype.postProcessTickInterval = function(a) {
                    var b = this.axis
                      , e = this.slope;
                    return e ? b.options.breaks ? b.closestPointRange || a : a / (e / b.closestPointRange) : a
                }
                ;
                return a
            }();
            c.Additions = l
        }
        )(g || (g = {}));
        return g
    });
    O(f, "Series/DataModifyComposition.js", [f["Core/Axis/Axis.js"], f["Core/Series/Point.js"], f["Core/Series/Series.js"], f["Core/Utilities.js"]], function(c, f, B, F) {
        var z = f.prototype.tooltipFormatter, D = F.addEvent, H = F.arrayMax, w = F.arrayMin, t = F.correctFloat, r = F.defined, a = F.isArray, d = F.isNumber, g = F.isString, m = F.pick, q;
        (function(c) {
            function f(a, b, d) {
                this.isXAxis || (this.series.forEach(function(e) {
                    "compare" === a && "boolean" !== typeof b ? e.setCompare(b, !1) : "cumulative" !== a || g(b) || e.setCumulative(b, !1)
                }),
                m(d, !0) && this.chart.redraw())
            }
            function q(a) {
                var b = this
                  , e = b.series.chart.numberFormatter
                  , d = function(d) {
                    a = a.replace("{point." + d + "}", (0 < b[d] && "change" === d ? "+" : "") + e(b[d], m(b.series.tooltipOptions.changeDecimals, 2)))
                };
                r(b.change) && d("change");
                r(b.cumulativeSum) && d("cumulativeSum");
                return z.apply(this, [a])
            }
            function x() {
                var a = this.options.compare;
                if ("percent" === a || "value" === a || this.options.cumulative) {
                    var b = new k(this);
                    "percent" === a || "value" === a ? b.initCompare(a) : b.initCumulative()
                }
                this.dataModify = b
            }
            function B(e) {
                e = e.dataExtremes;
                var b = e.activeYData;
                if (this.dataModify && e) {
                    var d = void 0;
                    this.options.compare ? d = [this.dataModify.modifyValue(e.dataMin), this.dataModify.modifyValue(e.dataMax)] : this.options.cumulative && a(b) && 2 <= b.length && (d = k.getCumulativeExtremes(b));
                    d && (e.dataMin = w(d),
                    e.dataMax = H(d))
                }
            }
            function C(a, b) {
                this.options.compare = this.userOptions.compare = a;
                this.update({}, m(b, !0));
                !this.dataModify || "value" !== a && "percent" !== a ? this.points.forEach(function(a) {
                    delete a.change
                }) : this.dataModify.initCompare(a)
            }
            function A() {
                if (this.xAxis && this.processedYData && this.dataModify) {
                    var a = this.processedXData, b = this.processedYData, c = b.length, k = !0 === this.options.compareStart ? 0 : 1, g = -1, f;
                    this.pointArrayMap && (g = this.pointArrayMap.indexOf(this.options.pointValKey || this.pointValKey || "y"));
                    for (f = 0; f < c - k; f++) {
                        var l = b[f] && -1 < g ? b[f][g] : b[f];
                        if (d(l) && 0 !== l && a[f + k] >= (this.xAxis.min || 0)) {
                            this.dataModify.compareValue = l;
                            break
                        }
                    }
                }
            }
            function y(a, b) {
                this.setModifier("compare", a, b)
            }
            function n(a, b) {
                a = m(a, !1);
                this.options.cumulative = this.userOptions.cumulative = a;
                this.update({}, m(b, !0));
                this.dataModify ? this.dataModify.initCumulative() : this.points.forEach(function(a) {
                    delete a.cumulativeSum
                })
            }
            function u(a, b) {
                this.setModifier("cumulative", a, b)
            }
            var l = [];
            c.compose = function(a, b, d) {
                if (-1 === l.indexOf(a)) {
                    l.push(a);
                    var e = a.prototype;
                    e.setCompare = C;
                    e.setCumulative = n;
                    D(a, "afterInit", x);
                    D(a, "afterGetExtremes", B);
                    D(a, "afterProcessData", A)
                }
                -1 === l.indexOf(b) && (l.push(b),
                b = b.prototype,
                b.setCompare = y,
                b.setModifier = f,
                b.setCumulative = u);
                -1 === l.indexOf(d) && (l.push(d),
                d.prototype.tooltipFormatter = q);
                return a
            }
            ;
            var k = function() {
                function a(a) {
                    this.series = a
                }
                a.prototype.modifyValue = function() {
                    return 0
                }
                ;
                a.getCumulativeExtremes = function(a) {
                    var b = Infinity
                      , e = -Infinity;
                    a.reduce(function(a, d) {
                        d = a + d;
                        b = Math.min(b, d, a);
                        e = Math.max(e, d, a);
                        return d
                    });
                    return [b, e]
                }
                ;
                a.prototype.initCompare = function(a) {
                    this.modifyValue = function(b, e) {
                        null === b && (b = 0);
                        var d = this.compareValue;
                        return "undefined" !== typeof b && "undefined" !== typeof d ? (b = "value" === a ? b - d : b / d * 100 - (100 === this.series.options.compareBase ? 0 : 100),
                        "undefined" !== typeof e && (e = this.series.points[e]) && (e.change = b),
                        b) : 0
                    }
                }
                ;
                a.prototype.initCumulative = function() {
                    this.modifyValue = function(a, e) {
                        null === a && (a = 0);
                        if (void 0 !== a && void 0 !== e) {
                            var b = 0 < e ? this.series.points[e - 1] : null;
                            b && b.cumulativeSum && (a = t(b.cumulativeSum + a));
                            if (e = this.series.points[e])
                                e.cumulativeSum = a;
                            return a
                        }
                        return 0
                    }
                }
                ;
                return a
            }();
            c.Additions = k
        }
        )(q || (q = {}));
        "";
        return q
    });
    O(f, "Core/Axis/BrokenAxis.js", [f["Core/Axis/Stacking/StackItem.js"], f["Core/Utilities.js"]], function(c, f) {
        var D = f.addEvent, F = f.find, z = f.fireEvent, E = f.isArray, H = f.isNumber, w = f.pick, t;
        (function(f) {
            function a() {
                "undefined" !== typeof this.brokenAxis && this.brokenAxis.setBreaks(this.options.breaks, !1)
            }
            function d() {
                this.brokenAxis && this.brokenAxis.hasBreaks && (this.options.ordinal = !1)
            }
            function g() {
                var a = this.brokenAxis;
                if (a && a.hasBreaks) {
                    for (var d = this.tickPositions, c = this.tickPositions.info, g = [], f = 0; f < d.length; f++)
                        a.isInAnyBreak(d[f]) || g.push(d[f]);
                    this.tickPositions = g;
                    this.tickPositions.info = c
                }
            }
            function m() {
                this.brokenAxis || (this.brokenAxis = new K(this))
            }
            function q() {
                var a = this.options.connectNulls
                  , d = this.points
                  , c = this.xAxis
                  , g = this.yAxis;
                if (this.isDirty)
                    for (var f = d.length; f--; ) {
                        var l = d[f]
                          , k = !(null === l.y && !1 === a) && (c && c.brokenAxis && c.brokenAxis.isInAnyBreak(l.x, !0) || g && g.brokenAxis && g.brokenAxis.isInAnyBreak(l.y, !0));
                        l.visible = k ? !1 : !1 !== l.options.visible
                    }
            }
            function r() {
                this.drawBreaks(this.xAxis, ["x"]);
                this.drawBreaks(this.yAxis, w(this.pointArrayMap, ["y"]))
            }
            function t(a, d) {
                var c = this, g = c.points, f, l, k, e;
                if (a && a.brokenAxis && a.brokenAxis.hasBreaks) {
                    var b = a.brokenAxis;
                    d.forEach(function(d) {
                        f = b && b.breakArray || [];
                        l = a.isXAxis ? a.min : w(c.options.threshold, a.min);
                        g.forEach(function(b) {
                            e = w(b["stack" + d.toUpperCase()], b[d]);
                            f.forEach(function(d) {
                                if (H(l) && H(e)) {
                                    k = !1;
                                    if (l < d.from && e > d.to || l > d.from && e < d.from)
                                        k = "pointBreak";
                                    else if (l < d.from && e > d.from && e < d.to || l > d.from && e > d.to && e < d.from)
                                        k = "pointInBreak";
                                    k && z(a, k, {
                                        point: b,
                                        brk: d
                                    })
                                }
                            })
                        })
                    })
                }
            }
            function B() {
                var a = this.currentDataGrouping
                  , d = a && a.gapSize;
                a = this.points.slice();
                var g = this.yAxis, f = this.options.gapSize, m = a.length - 1, l;
                if (f && 0 < m)
                    for ("value" !== this.options.gapUnit && (f *= this.basePointRange),
                    d && d > f && d >= this.basePointRange && (f = d),
                    l = void 0; m--; )
                        l && !1 !== l.visible || (l = a[m + 1]),
                        d = a[m],
                        !1 !== l.visible && !1 !== d.visible && (l.x - d.x > f && (l = (d.x + l.x) / 2,
                        a.splice(m + 1, 0, {
                            isNull: !0,
                            x: l
                        }),
                        g.stacking && this.options.stacking && (l = g.stacking.stacks[this.stackKey][l] = new c(g,g.options.stackLabels,!1,l,this.stack),
                        l.total = 0)),
                        l = d);
                return this.getGraphPath(a)
            }
            var M = [];
            f.compose = function(c, f) {
                -1 === M.indexOf(c) && (M.push(c),
                c.keepProps.push("brokenAxis"),
                D(c, "init", m),
                D(c, "afterInit", a),
                D(c, "afterSetTickPositions", g),
                D(c, "afterSetOptions", d));
                if (-1 === M.indexOf(f)) {
                    M.push(f);
                    var x = f.prototype;
                    x.drawBreaks = t;
                    x.gappedPath = B;
                    D(f, "afterGeneratePoints", q);
                    D(f, "afterRender", r)
                }
                return c
            }
            ;
            var K = function() {
                function a(a) {
                    this.hasBreaks = !1;
                    this.axis = a
                }
                a.isInBreak = function(a, d) {
                    var c = a.repeat || Infinity
                      , g = a.from
                      , f = a.to - a.from;
                    d = d >= g ? (d - g) % c : c - (g - d) % c;
                    return a.inclusive ? d <= f : d < f && 0 !== d
                }
                ;
                a.lin2Val = function(d) {
                    var c = this.brokenAxis;
                    c = c && c.breakArray;
                    if (!c || !H(d))
                        return d;
                    var g;
                    for (g = 0; g < c.length; g++) {
                        var f = c[g];
                        if (f.from >= d)
                            break;
                        else
                            f.to < d ? d += f.len : a.isInBreak(f, d) && (d += f.len)
                    }
                    return d
                }
                ;
                a.val2Lin = function(d) {
                    var c = this.brokenAxis;
                    c = c && c.breakArray;
                    if (!c || !H(d))
                        return d;
                    var g = d, f;
                    for (f = 0; f < c.length; f++) {
                        var l = c[f];
                        if (l.to <= d)
                            g -= l.len;
                        else if (l.from >= d)
                            break;
                        else if (a.isInBreak(l, d)) {
                            g -= d - l.from;
                            break
                        }
                    }
                    return g
                }
                ;
                a.prototype.findBreakAt = function(a, d) {
                    return F(d, function(d) {
                        return d.from < a && a < d.to
                    })
                }
                ;
                a.prototype.isInAnyBreak = function(d, c) {
                    var g = this.axis, f = g.options.breaks || [], l = f.length, k;
                    if (l && H(d)) {
                        for (; l--; )
                            if (a.isInBreak(f[l], d)) {
                                var e = !0;
                                k || (k = w(f[l].showPoints, !g.isXAxis))
                            }
                        var b = e && c ? e && !k : e
                    }
                    return b
                }
                ;
                a.prototype.setBreaks = function(d, c) {
                    var g = this
                      , f = g.axis
                      , l = E(d) && !!d.length;
                    f.isDirty = g.hasBreaks !== l;
                    g.hasBreaks = l;
                    f.options.breaks = f.userOptions.breaks = d;
                    f.forceRedraw = !0;
                    f.series.forEach(function(a) {
                        a.isDirty = !0
                    });
                    l || f.val2lin !== a.val2Lin || (delete f.val2lin,
                    delete f.lin2val);
                    l && (f.userOptions.ordinal = !1,
                    f.lin2val = a.lin2Val,
                    f.val2lin = a.val2Lin,
                    f.setExtremes = function(a, e, b, d, c) {
                        if (g.hasBreaks) {
                            for (var h = this.options.breaks || [], k; k = g.findBreakAt(a, h); )
                                a = k.to;
                            for (; k = g.findBreakAt(e, h); )
                                e = k.from;
                            e < a && (e = a)
                        }
                        f.constructor.prototype.setExtremes.call(this, a, e, b, d, c)
                    }
                    ,
                    f.setAxisTranslation = function() {
                        f.constructor.prototype.setAxisTranslation.call(this);
                        g.unitLength = void 0;
                        if (g.hasBreaks) {
                            var d = f.options.breaks || [], e = [], b = [], c = w(f.pointRangePadding, 0), l = 0, p, m = f.userMin || f.min, n = f.userMax || f.max, q;
                            d.forEach(function(b) {
                                p = b.repeat || Infinity;
                                H(m) && H(n) && (a.isInBreak(b, m) && (m += b.to % p - m % p),
                                a.isInBreak(b, n) && (n -= n % p - b.from % p))
                            });
                            d.forEach(function(a) {
                                t = a.from;
                                p = a.repeat || Infinity;
                                if (H(m) && H(n)) {
                                    for (; t - p > m; )
                                        t -= p;
                                    for (; t < m; )
                                        t += p;
                                    for (q = t; q < n; q += p)
                                        e.push({
                                            value: q,
                                            move: "in"
                                        }),
                                        e.push({
                                            value: q + a.to - a.from,
                                            move: "out",
                                            size: a.breakSize
                                        })
                                }
                            });
                            e.sort(function(a, b) {
                                return a.value === b.value ? ("in" === a.move ? 0 : 1) - ("in" === b.move ? 0 : 1) : a.value - b.value
                            });
                            var r = 0;
                            var t = m;
                            e.forEach(function(a) {
                                r += "in" === a.move ? 1 : -1;
                                1 === r && "in" === a.move && (t = a.value);
                                0 === r && H(t) && (b.push({
                                    from: t,
                                    to: a.value,
                                    len: a.value - t - (a.size || 0)
                                }),
                                l += a.value - t - (a.size || 0))
                            });
                            g.breakArray = b;
                            H(m) && H(n) && H(f.min) && (g.unitLength = n - m - l + c,
                            z(f, "afterBreaks"),
                            f.staticScale ? f.transA = f.staticScale : g.unitLength && (f.transA *= (n - f.min + c) / g.unitLength),
                            c && (f.minPixelPadding = f.transA * (f.minPointOffset || 0)),
                            f.min = m,
                            f.max = n)
                        }
                    }
                    );
                    w(c, !0) && f.chart.redraw()
                }
                ;
                return a
            }();
            f.Additions = K
        }
        )(t || (t = {}));
        return t
    });
    O(f, "masters/modules/broken-axis.src.js", [f["Core/Globals.js"], f["Core/Axis/BrokenAxis.js"]], function(c, f) {
        f.compose(c.Axis, c.Series)
    });
    O(f, "Extensions/DataGrouping.js", [f["Core/Axis/Axis.js"], f["Core/Axis/DateTimeAxis.js"], f["Core/FormatUtilities.js"], f["Core/Globals.js"], f["Core/Series/Point.js"], f["Core/Series/Series.js"], f["Core/Tooltip.js"], f["Core/DefaultOptions.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H, w, t) {
        var r = B.format
          , a = E.prototype;
        B = t.addEvent;
        var d = t.arrayMax
          , g = t.arrayMin
          , m = t.correctFloat
          , q = t.defined
          , x = t.error
          , D = t.extend
          , I = t.isNumber
          , M = t.merge
          , K = t.pick
          , C = F.approximations = {
            sum: function(a) {
                var e = a.length;
                if (!e && a.hasNulls)
                    var b = null;
                else if (e)
                    for (b = 0; e--; )
                        b += a[e];
                return b
            },
            average: function(a) {
                var e = a.length;
                a = C.sum(a);
                I(a) && e && (a = m(a / e));
                return a
            },
            averages: function() {
                var a = [];
                [].forEach.call(arguments, function(e) {
                    a.push(C.average(e))
                });
                return "undefined" === typeof a[0] ? void 0 : a
            },
            open: function(a) {
                return a.length ? a[0] : a.hasNulls ? null : void 0
            },
            high: function(a) {
                return a.length ? d(a) : a.hasNulls ? null : void 0
            },
            low: function(a) {
                return a.length ? g(a) : a.hasNulls ? null : void 0
            },
            close: function(a) {
                return a.length ? a[a.length - 1] : a.hasNulls ? null : void 0
            },
            hlc: function(a, e, b) {
                a = C.high(a);
                e = C.low(e);
                b = C.close(b);
                if (I(a) || I(e) || I(b))
                    return [a, e, b]
            },
            ohlc: function(a, e, b, d) {
                a = C.open(a);
                e = C.high(e);
                b = C.low(b);
                d = C.close(d);
                if (I(a) || I(e) || I(b) || I(d))
                    return [a, e, b, d]
            },
            range: function(a, e) {
                a = C.low(a);
                e = C.high(e);
                if (I(a) || I(e))
                    return [a, e];
                if (null === a && null === e)
                    return null
            }
        };
        t = function(a, e, b, d) {
            var c = this, h = c.data, g = c.options && c.options.data, f = [], k = [], l = [], m = a.length, n = !!e, r = [], t = c.pointArrayMap, u = t && t.length, x = ["x"].concat(t || ["y"]), y = this.options.dataGrouping && this.options.dataGrouping.groupAll, w = 0, z = 0, A;
            d = "function" === typeof d ? d : C[d] ? C[d] : C[c.getDGApproximation && c.getDGApproximation() || "average"];
            u ? t.forEach(function() {
                r.push([])
            }) : r.push([]);
            var D = u || 1;
            for (A = 0; A <= m && !(a[A] >= b[0]); A++)
                ;
            for (A; A <= m; A++) {
                for (; "undefined" !== typeof b[w + 1] && a[A] >= b[w + 1] || A === m; ) {
                    var B = b[w];
                    c.dataGroupInfo = {
                        start: y ? z : c.cropStart + z,
                        length: r[0].length
                    };
                    var E = d.apply(c, r);
                    c.pointClass && !q(c.dataGroupInfo.options) && (c.dataGroupInfo.options = M(c.pointClass.prototype.optionsToObject.call({
                        series: c
                    }, c.options.data[c.cropStart + z])),
                    x.forEach(function(a) {
                        delete c.dataGroupInfo.options[a]
                    }));
                    "undefined" !== typeof E && (f.push(B),
                    k.push(E),
                    l.push(c.dataGroupInfo));
                    z = A;
                    for (B = 0; B < D; B++)
                        r[B].length = 0,
                        r[B].hasNulls = !1;
                    w += 1;
                    if (A === m)
                        break
                }
                if (A === m)
                    break;
                if (t) {
                    B = c.options.dataGrouping && c.options.dataGrouping.groupAll ? A : c.cropStart + A;
                    E = h && h[B] || c.pointClass.prototype.applyOptions.apply({
                        series: c
                    }, [g[B]]);
                    var J = void 0;
                    for (B = 0; B < u; B++)
                        J = E[t[B]],
                        I(J) ? r[B].push(J) : null === J && (r[B].hasNulls = !0)
                } else
                    B = n ? e[A] : null,
                    I(B) ? r[0].push(B) : null === B && (r[0].hasNulls = !0)
            }
            return {
                groupedXData: f,
                groupedYData: k,
                groupMap: l
            }
        }
        ;
        var A = {
            approximations: C,
            groupData: t
        }
          , y = a.generatePoints
          , n = {
            groupPixelWidth: 2,
            dateTimeLabelFormats: {
                millisecond: ["%A, %b %e, %H:%M:%S.%L", "%A, %b %e, %H:%M:%S.%L", "-%H:%M:%S.%L"],
                second: ["%A, %b %e, %H:%M:%S", "%A, %b %e, %H:%M:%S", "-%H:%M:%S"],
                minute: ["%A, %b %e, %H:%M", "%A, %b %e, %H:%M", "-%H:%M"],
                hour: ["%A, %b %e, %H:%M", "%A, %b %e, %H:%M", "-%H:%M"],
                day: ["%A, %b %e, %Y", "%A, %b %e", "-%A, %b %e, %Y"],
                week: ["Week from %A, %b %e, %Y", "%A, %b %e", "-%A, %b %e, %Y"],
                month: ["%B %Y", "%B", "-%B %Y"],
                year: ["%Y", "%Y", "-%Y"]
            }
        }
          , u = {
            line: {},
            spline: {},
            area: {},
            areaspline: {},
            arearange: {},
            column: {
                groupPixelWidth: 10
            },
            columnrange: {
                groupPixelWidth: 10
            },
            candlestick: {
                groupPixelWidth: 10
            },
            ohlc: {
                groupPixelWidth: 5
            },
            hlc: {
                groupPixelWidth: 5
            },
            heikinashi: {
                groupPixelWidth: 10
            }
        }
          , l = F.defaultDataGroupingUnits = [["millisecond", [1, 2, 5, 10, 20, 25, 50, 100, 200, 500]], ["second", [1, 2, 5, 10, 15, 30]], ["minute", [1, 2, 5, 10, 15, 30]], ["hour", [1, 2, 3, 4, 6, 8, 12]], ["day", [1]], ["week", [1]], ["month", [1, 3, 6]], ["year", null]];
        a.getDGApproximation = function() {
            return this.is("arearange") ? "range" : this.is("ohlc") ? "ohlc" : this.is("hlc") ? "hlc" : this.is("column") ? "sum" : "average"
        }
        ;
        a.groupData = t;
        a.applyGrouping = function(d) {
            var e = this.chart, b = this.options.dataGrouping, c = !1 !== this.allowDG && b && K(b.enabled, e.options.isStock), g = this.visible || !e.options.chart.ignoreHiddenSeries, k, m = this.currentDataGrouping, n = !1;
            c && !this.requireSorting && (this.requireSorting = n = !0);
            d = !1 === !(this.isCartesian && !this.isDirty && !this.xAxis.isDirty && !this.yAxis.isDirty && !d) || !c;
            n && (this.requireSorting = !1);
            if (!d) {
                this.destroyGroupedData();
                c = b.groupAll ? this.xData : this.processedXData;
                var r = b.groupAll ? this.yData : this.processedYData;
                d = e.plotSizeX;
                n = this.xAxis;
                var t = n.options.ordinal
                  , u = this.groupPixelWidth;
                if (u && c && c.length) {
                    this.isDirty = k = !0;
                    this.points = null;
                    var y = n.getExtremes();
                    var w = y.min;
                    y = y.max;
                    t = t && n.ordinal && n.ordinal.getGroupIntervalFactor(w, y, this) || 1;
                    d = n.getTimeTicks(f.Additions.prototype.normalizeTimeTickInterval(u * (y - w) / d * t, b.units || l), Math.min(w, c[0]), Math.max(y, c[c.length - 1]), n.options.startOfWeek, c, this.closestPointRange);
                    u = a.groupData.apply(this, [c, r, d, b.approximation]);
                    c = u.groupedXData;
                    r = u.groupedYData;
                    t = 0;
                    b && b.smoothed && c.length && (b.firstAnchor = "firstPoint",
                    b.anchor = "middle",
                    b.lastAnchor = "lastPoint",
                    x(32, !1, e, {
                        "dataGrouping.smoothed": "use dataGrouping.anchor"
                    }));
                    e = c;
                    var C = this.options.dataGrouping;
                    w = this.currentDataGrouping && this.currentDataGrouping.gapSize;
                    if (C && this.xData && w && this.groupMap) {
                        var A = e.length - 1;
                        var z = C.anchor;
                        var B = K(C.firstAnchor, z);
                        C = K(C.lastAnchor, z);
                        if (z && "start" !== z) {
                            var D = w * {
                                middle: .5,
                                end: 1
                            }[z];
                            for (z = e.length - 1; z-- && 0 < z; )
                                e[z] += D
                        }
                        if (B && "start" !== B && this.xData[0] >= e[0]) {
                            z = this.groupMap[0].start;
                            D = this.groupMap[0].length;
                            var E = void 0;
                            I(z) && I(D) && (E = z + (D - 1));
                            e[0] = {
                                middle: e[0] + .5 * w,
                                end: e[0] + w,
                                firstPoint: this.xData[0],
                                lastPoint: E && this.xData[E]
                            }[B]
                        }
                        C && "start" !== C && w && e[A] >= y - w && (y = this.groupMap[this.groupMap.length - 1].start,
                        e[A] = {
                            middle: e[A] + .5 * w,
                            end: e[A] + w,
                            firstPoint: y && this.xData[y],
                            lastPoint: this.xData[this.xData.length - 1]
                        }[C])
                    }
                    for (y = 1; y < d.length; y++)
                        d.info.segmentStarts && -1 !== d.info.segmentStarts.indexOf(y) || (t = Math.max(d[y] - d[y - 1], t));
                    y = d.info;
                    y.gapSize = t;
                    this.closestPointRange = d.info.totalRange;
                    this.groupMap = u.groupMap;
                    if (g) {
                        g = c;
                        if (q(g[0]) && I(n.min) && I(n.dataMin) && g[0] < n.min) {
                            if (!q(n.options.min) && n.min <= n.dataMin || n.min === n.dataMin)
                                n.min = Math.min(g[0], n.min);
                            n.dataMin = Math.min(g[0], n.dataMin)
                        }
                        if (q(g[g.length - 1]) && I(n.max) && I(n.dataMax) && g[g.length - 1] > n.max) {
                            if (!q(n.options.max) && I(n.dataMax) && n.max >= n.dataMax || n.max === n.dataMax)
                                n.max = Math.max(g[g.length - 1], n.max);
                            n.dataMax = Math.max(g[g.length - 1], n.dataMax)
                        }
                    }
                    b.groupAll && (this.allGroupedData = r,
                    b = this.cropData(c, r, n.min, n.max, 1),
                    c = b.xData,
                    r = b.yData,
                    this.cropStart = b.start);
                    this.processedXData = c;
                    this.processedYData = r
                } else
                    this.groupMap = null;
                this.hasGroupedData = k;
                this.currentDataGrouping = y;
                this.preventGraphAnimation = (m && m.totalRange) !== (y && y.totalRange)
            }
        }
        ;
        a.destroyGroupedData = function() {
            this.groupedData && (this.groupedData.forEach(function(a, e) {
                a && (this.groupedData[e] = a.destroy ? a.destroy() : null)
            }, this),
            this.groupedData.length = 0)
        }
        ;
        a.generatePoints = function() {
            y.apply(this);
            this.destroyGroupedData();
            this.groupedData = this.hasGroupedData ? this.points : null
        }
        ;
        c.prototype.applyGrouping = function(a) {
            var e = this
              , b = e.series;
            b.forEach(function(a) {
                a.groupPixelWidth = void 0
            });
            b.forEach(function(b) {
                b.groupPixelWidth = e.getGroupPixelWidth && e.getGroupPixelWidth();
                b.groupPixelWidth && (b.hasProcessed = !0);
                b.applyGrouping(!!a.hasExtemesChanged)
            })
        }
        ;
        c.prototype.getGroupPixelWidth = function() {
            var a = this.series, e = a.length, b, d = 0, c = !1, g;
            for (b = e; b--; )
                (g = a[b].options.dataGrouping) && (d = Math.max(d, K(g.groupPixelWidth, n.groupPixelWidth)));
            for (b = e; b--; )
                if (g = a[b].options.dataGrouping)
                    if (e = (a[b].processedXData || a[b].data).length,
                    a[b].groupPixelWidth || e > this.chart.plotSizeX / d || e && g.forced)
                        c = !0;
            return c ? d : 0
        }
        ;
        c.prototype.setDataGrouping = function(a, e) {
            var b;
            e = K(e, !0);
            a || (a = {
                forced: !1,
                units: null
            });
            if (this instanceof c)
                for (b = this.series.length; b--; )
                    this.series[b].update({
                        dataGrouping: a
                    }, !1);
            else
                this.chart.options.series.forEach(function(b) {
                    b.dataGrouping = "boolean" === typeof a ? a : M(a, b.dataGrouping)
                });
            this.ordinal && (this.ordinal.slope = void 0);
            e && this.chart.redraw()
        }
        ;
        B(c, "postProcessData", c.prototype.applyGrouping);
        B(z, "update", function() {
            if (this.dataGroup)
                return x(24, !1, this.series.chart),
                !1
        });
        B(H, "headerFormatter", function(a) {
            var e = this.chart
              , b = e.time
              , d = a.labelConfig
              , c = d.series
              , g = c.tooltipOptions
              , f = c.options.dataGrouping
              , k = g.xDateFormat
              , l = c.xAxis
              , m = g[a.isFooter ? "footerFormat" : "headerFormat"];
            if (l && "datetime" === l.options.type && f && I(d.key)) {
                var q = c.currentDataGrouping;
                f = f.dateTimeLabelFormats || n.dateTimeLabelFormats;
                if (q)
                    if (g = f[q.unitName],
                    1 === q.count)
                        k = g[0];
                    else {
                        k = g[1];
                        var t = g[2]
                    }
                else
                    !k && f && l.dateTime && (k = l.dateTime.getXDateFormat(d.x, g.dateTimeLabelFormats));
                k = b.dateFormat(k, d.key);
                t && (k += b.dateFormat(t, d.key + q.totalRange - 1));
                c.chart.styledMode && (m = this.styledModeFormat(m));
                a.text = r(m, {
                    point: D(d.point, {
                        key: k
                    }),
                    series: c
                }, e);
                a.preventDefault()
            }
        });
        B(E, "destroy", a.destroyGroupedData);
        B(E, "afterSetOptions", function(a) {
            a = a.options;
            var e = this.type
              , b = this.chart.options.plotOptions
              , d = w.defaultOptions.plotOptions[e].dataGrouping
              , c = this.useCommonDataGrouping && n;
            if (b && (u[e] || c)) {
                d || (d = M(n, u[e]));
                var g = this.chart.rangeSelector;
                a.dataGrouping = M(c, d, b.series && b.series.dataGrouping, b[e].dataGrouping, this.userOptions.dataGrouping, !a.isInternal && g && I(g.selected) && g.buttonOptions[g.selected].dataGrouping)
            }
        });
        B(c, "afterSetScale", function() {
            this.series.forEach(function(a) {
                a.hasProcessed = !1
            })
        });
        F.dataGrouping = A;
        "";
        "";
        return A
    });
    O(f, "Series/HLC/HLCPoint.js", [f["Core/Series/SeriesRegistry.js"]], function(c) {
        var f = this && this.__extends || function() {
            var c = function(f, z) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(c, f) {
                    c.__proto__ = f
                }
                || function(c, f) {
                    for (var w in f)
                        f.hasOwnProperty(w) && (c[w] = f[w])
                }
                ;
                return c(f, z)
            };
            return function(f, z) {
                function B() {
                    this.constructor = f
                }
                c(f, z);
                f.prototype = null === z ? Object.create(z) : (B.prototype = z.prototype,
                new B)
            }
        }();
        return function(c) {
            function B() {
                var f = null !== c && c.apply(this, arguments) || this;
                f.close = void 0;
                f.high = void 0;
                f.low = void 0;
                f.options = void 0;
                f.plotClose = void 0;
                f.series = void 0;
                return f
            }
            f(B, c);
            return B
        }(c.seriesTypes.column.prototype.pointClass)
    });
    O(f, "Series/HLC/HLCSeries.js", [f["Series/HLC/HLCPoint.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = this && this.__extends || function() {
            var c = function(f, r) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return c(f, r)
            };
            return function(f, r) {
                function a() {
                    this.constructor = f
                }
                c(f, r);
                f.prototype = null === r ? Object.create(r) : (a.prototype = r.prototype,
                new a)
            }
        }()
          , z = f.seriesTypes.column
          , E = B.extend
          , H = B.merge;
        B = function(c) {
            function f() {
                var f = null !== c && c.apply(this, arguments) || this;
                f.data = void 0;
                f.options = void 0;
                f.points = void 0;
                f.yData = void 0;
                return f
            }
            D(f, c);
            f.prototype.extendStem = function(c, a, d) {
                var g = c[0];
                c = c[1];
                "number" === typeof g[2] && (g[2] = Math.max(d + a, g[2]));
                "number" === typeof c[2] && (c[2] = Math.min(d - a, c[2]))
            }
            ;
            f.prototype.getPointPath = function(c, a) {
                a = a.strokeWidth();
                var d = c.series
                  , g = a % 2 / 2
                  , f = Math.round(c.plotX) - g
                  , q = Math.round(c.shapeArgs.width / 2);
                var r = [["M", f, Math.round(c.yBottom)], ["L", f, Math.round(c.plotHigh)]];
                null !== c.close && (c = Math.round(c.plotClose) + g,
                r.push(["M", f, c], ["L", f + q, c]),
                d.extendStem(r, a / 2, c));
                return r
            }
            ;
            f.prototype.drawSinglePoint = function(c) {
                var a = c.series
                  , d = a.chart
                  , g = c.graphic
                  , f = !g;
                "undefined" !== typeof c.plotY && (g || (c.graphic = g = d.renderer.path().add(a.group)),
                d.styledMode || g.attr(a.pointAttribs(c, c.selected && "select")),
                a = a.getPointPath(c, g),
                g[f ? "attr" : "animate"]({
                    d: a
                }).addClass(c.getClassName(), !0))
            }
            ;
            f.prototype.drawPoints = function() {
                this.points.forEach(this.drawSinglePoint)
            }
            ;
            f.prototype.init = function() {
                c.prototype.init.apply(this, arguments);
                this.options.stacking = void 0
            }
            ;
            f.prototype.pointAttribs = function(f, a) {
                f = c.prototype.pointAttribs.call(this, f, a);
                delete f.fill;
                return f
            }
            ;
            f.prototype.toYData = function(c) {
                return [c.high, c.low, c.close]
            }
            ;
            f.prototype.translate = function() {
                var f = this
                  , a = f.yAxis
                  , d = this.pointArrayMap && this.pointArrayMap.slice() || []
                  , g = d.map(function(a) {
                    return "plot".concat(a.charAt(0).toUpperCase() + a.slice(1))
                });
                g.push("yBottom");
                d.push("low");
                c.prototype.translate.apply(f);
                f.points.forEach(function(c) {
                    d.forEach(function(d, m) {
                        d = c[d];
                        null !== d && (f.dataModify && (d = f.dataModify.modifyValue(d)),
                        c[g[m]] = a.toPixels(d, !0))
                    });
                    c.tooltipPos[1] = c.plotHigh + a.pos - f.chart.plotTop
                })
            }
            ;
            f.defaultOptions = H(z.defaultOptions, {
                lineWidth: 1,
                tooltip: {
                    pointFormat: '<span style="color:{point.color}">\u25cf</span> <b> {series.name}</b><br/>High: {point.high}<br/>Low: {point.low}<br/>Close: {point.close}<br/>'
                },
                threshold: null,
                states: {
                    hover: {
                        lineWidth: 3
                    }
                },
                stickyTracking: !0
            });
            return f
        }(z);
        E(B.prototype, {
            animate: null,
            directTouch: !1,
            pointArrayMap: ["high", "low", "close"],
            pointAttrToOptions: {
                stroke: "color",
                "stroke-width": "lineWidth"
            },
            pointValKey: "close"
        });
        B.prototype.pointClass = c;
        f.registerSeriesType("hlc", B);
        "";
        return B
    });
    O(f, "Series/OHLC/OHLCPoint.js", [f["Core/Series/SeriesRegistry.js"]], function(c) {
        var f = this && this.__extends || function() {
            var c = function(f, z) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(c, f) {
                    c.__proto__ = f
                }
                || function(c, f) {
                    for (var w in f)
                        f.hasOwnProperty(w) && (c[w] = f[w])
                }
                ;
                return c(f, z)
            };
            return function(f, z) {
                function B() {
                    this.constructor = f
                }
                c(f, z);
                f.prototype = null === z ? Object.create(z) : (B.prototype = z.prototype,
                new B)
            }
        }();
        return function(c) {
            function B() {
                var f = null !== c && c.apply(this, arguments) || this;
                f.open = void 0;
                f.options = void 0;
                f.plotOpen = void 0;
                f.series = void 0;
                return f
            }
            f(B, c);
            B.prototype.getClassName = function() {
                return c.prototype.getClassName.call(this) + (this.open < this.close ? " highcharts-point-up" : " highcharts-point-down")
            }
            ;
            B.prototype.resolveUpColor = function() {
                this.open < this.close && !this.options.color && this.series.options.upColor && (this.color = this.series.options.upColor)
            }
            ;
            B.prototype.resolveColor = function() {
                c.prototype.resolveColor.call(this);
                this.resolveUpColor()
            }
            ;
            B.prototype.getZone = function() {
                var f = c.prototype.getZone.call(this);
                this.resolveUpColor();
                return f
            }
            ;
            B.prototype.applyOptions = function() {
                c.prototype.applyOptions.apply(this, arguments);
                this.resolveColor && this.resolveColor();
                return this
            }
            ;
            return B
        }(c.seriesTypes.hlc.prototype.pointClass)
    });
    O(f, "Series/OHLC/OHLCSeries.js", [f["Series/OHLC/OHLCPoint.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = this && this.__extends || function() {
            var a = function(d, c) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return a(d, c)
            };
            return function(d, c) {
                function f() {
                    this.constructor = d
                }
                a(d, c);
                d.prototype = null === c ? Object.create(c) : (f.prototype = c.prototype,
                new f)
            }
        }()
          , z = f.series
          , E = f.seriesTypes.hlc
          , H = B.addEvent
          , w = B.extend
          , t = B.merge
          , r = function(a) {
            function d() {
                var d = null !== a && a.apply(this, arguments) || this;
                d.data = void 0;
                d.options = void 0;
                d.points = void 0;
                return d
            }
            D(d, a);
            d.prototype.getPointPath = function(d, c) {
                var f = a.prototype.getPointPath.call(this, d, c);
                c = c.strokeWidth();
                var g = c % 2 / 2
                  , m = Math.round(d.plotX) - g
                  , r = Math.round(d.shapeArgs.width / 2);
                null !== d.open && (d = Math.round(d.plotOpen) + g,
                f.push(["M", m, d], ["L", m - r, d]),
                a.prototype.extendStem.call(this, f, c / 2, d));
                return f
            }
            ;
            d.prototype.pointAttribs = function(d, c) {
                c = a.prototype.pointAttribs.call(this, d, c);
                var f = this.options;
                delete c.fill;
                !d.options.color && f.upColor && d.open < d.close && (c.stroke = f.upColor);
                return c
            }
            ;
            d.prototype.toYData = function(a) {
                return [a.open, a.high, a.low, a.close]
            }
            ;
            d.defaultOptions = t(E.defaultOptions, {
                tooltip: {
                    pointFormat: '<span style="color:{point.color}">\u25cf</span> <b> {series.name}</b><br/>Open: {point.open}<br/>High: {point.high}<br/>Low: {point.low}<br/>Close: {point.close}<br/>'
                }
            });
            return d
        }(E);
        w(r.prototype, {
            pointArrayMap: ["open", "high", "low", "close"]
        });
        r.prototype.pointClass = c;
        f.registerSeriesType("ohlc", r);
        H(z, "init", function(a) {
            a = a.options;
            a.useOhlcData && "highcharts-navigator-series" !== a.id && w(this, {
                pointValKey: r.prototype.pointValKey,
                pointArrayMap: r.prototype.pointArrayMap,
                toYData: r.prototype.toYData
            })
        });
        H(z, "afterSetOptions", function(a) {
            a = a.options;
            var d = a.dataGrouping;
            d && a.useOhlcData && "highcharts-navigator-series" !== a.id && (d.approximation = "ohlc")
        });
        "";
        return r
    });
    O(f, "Series/Candlestick/CandlestickSeries.js", [f["Core/DefaultOptions.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = this && this.__extends || function() {
            var c = function(f, a) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, c) {
                    a.__proto__ = c
                }
                || function(a, c) {
                    for (var d in c)
                        c.hasOwnProperty(d) && (a[d] = c[d])
                }
                ;
                return c(f, a)
            };
            return function(f, a) {
                function d() {
                    this.constructor = f
                }
                c(f, a);
                f.prototype = null === a ? Object.create(a) : (d.prototype = a.prototype,
                new d)
            }
        }()
          , z = c.defaultOptions;
        c = f.seriesTypes;
        var E = c.column
          , H = c.ohlc
          , w = B.merge;
        B = function(c) {
            function f() {
                var a = null !== c && c.apply(this, arguments) || this;
                a.data = void 0;
                a.options = void 0;
                a.points = void 0;
                return a
            }
            D(f, c);
            f.prototype.pointAttribs = function(a, d) {
                var c = E.prototype.pointAttribs.call(this, a, d)
                  , f = this.options
                  , q = a.open < a.close
                  , r = f.lineColor || this.color
                  , t = a.color || this.color;
                c["stroke-width"] = f.lineWidth;
                c.fill = a.options.color || (q ? f.upColor || t : t);
                c.stroke = a.options.lineColor || (q ? f.upLineColor || r : r);
                d && (a = f.states[d],
                c.fill = a.color || c.fill,
                c.stroke = a.lineColor || c.stroke,
                c["stroke-width"] = a.lineWidth || c["stroke-width"]);
                return c
            }
            ;
            f.prototype.drawPoints = function() {
                var a = this
                  , d = a.chart
                  , c = a.yAxis.reversed;
                a.points.forEach(function(f) {
                    var g = f.graphic
                      , m = !g;
                    if ("undefined" !== typeof f.plotY) {
                        g || (f.graphic = g = d.renderer.path().add(a.group));
                        a.chart.styledMode || g.attr(a.pointAttribs(f, f.selected && "select")).shadow(a.options.shadow);
                        var r = g.strokeWidth() % 2 / 2;
                        var t = Math.round(f.plotX) - r;
                        var w = f.plotOpen;
                        var z = f.plotClose;
                        var C = Math.min(w, z);
                        w = Math.max(w, z);
                        var A = Math.round(f.shapeArgs.width / 2);
                        z = c ? w !== f.yBottom : Math.round(C) !== Math.round(f.plotHigh);
                        var y = c ? Math.round(C) !== Math.round(f.plotHigh) : w !== f.yBottom;
                        C = Math.round(C) + r;
                        w = Math.round(w) + r;
                        r = [];
                        r.push(["M", t - A, w], ["L", t - A, C], ["L", t + A, C], ["L", t + A, w], ["Z"], ["M", t, C], ["L", t, z ? Math.round(c ? f.yBottom : f.plotHigh) : C], ["M", t, w], ["L", t, y ? Math.round(c ? f.plotHigh : f.yBottom) : w]);
                        g[m ? "attr" : "animate"]({
                            d: r
                        }).addClass(f.getClassName(), !0)
                    }
                })
            }
            ;
            f.defaultOptions = w(H.defaultOptions, z.plotOptions, {
                states: {
                    hover: {
                        lineWidth: 2
                    }
                },
                tooltip: z.plotOptions.ohlc.tooltip,
                threshold: null,
                lineColor: "#000000",
                lineWidth: 1,
                upColor: "#ffffff",
                stickyTracking: !0
            });
            return f
        }(H);
        f.registerSeriesType("candlestick", B);
        "";
        return B
    });
    O(f, "Series/Flags/FlagsPoint.js", [f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f) {
        var B = this && this.__extends || function() {
            var c = function(f, z) {
                c = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(c, f) {
                    c.__proto__ = f
                }
                || function(c, f) {
                    for (var r in f)
                        f.hasOwnProperty(r) && (c[r] = f[r])
                }
                ;
                return c(f, z)
            };
            return function(f, z) {
                function w() {
                    this.constructor = f
                }
                c(f, z);
                f.prototype = null === z ? Object.create(z) : (w.prototype = z.prototype,
                new w)
            }
        }()
          , D = f.isNumber;
        return function(c) {
            function f() {
                var f = null !== c && c.apply(this, arguments) || this;
                f.options = void 0;
                f.series = void 0;
                f.ttBelow = !1;
                return f
            }
            B(f, c);
            f.prototype.isValid = function() {
                return D(this.y) || "undefined" === typeof this.y
            }
            ;
            f.prototype.hasNewShapeType = function() {
                var c = this.options.shape || this.series.options.shape;
                return this.graphic && c && c !== this.graphic.symbolKey
            }
            ;
            return f
        }(c.seriesTypes.column.prototype.pointClass)
    });
    O(f, "Series/OnSeriesComposition.js", [f["Series/Column/ColumnSeries.js"], f["Core/Series/Series.js"], f["Core/Utilities.js"]], function(c, f, B) {
        var D = c.prototype, z = f.prototype, E = B.defined, H = B.stableSort, w;
        (function(c) {
            function f() {
                return z.getPlotBox.call(this.options.onSeries && this.chart.get(this.options.onSeries) || this)
            }
            function a() {
                D.translate.apply(this);
                var a = this
                  , d = a.options
                  , c = a.chart
                  , f = a.points
                  , r = d.onSeries
                  , t = (r = r && c.get(r)) && r.options.step
                  , w = r && r.points
                  , z = c.inverted
                  , C = a.xAxis
                  , A = a.yAxis;
                c = f.length - 1;
                var y;
                d = d.onKey || "y";
                var n = w && w.length, u = 0, l;
                if (r && r.visible && n) {
                    u = (r.pointXOffset || 0) + (r.barW || 0) / 2;
                    var k = r.currentDataGrouping;
                    var e = w[n - 1].x + (k ? k.totalRange : 0);
                    H(f, function(a, b) {
                        return a.x - b.x
                    });
                    for (d = "plot" + d[0].toUpperCase() + d.substr(1); n-- && f[c]; ) {
                        var b = w[n];
                        k = f[c];
                        k.y = b.y;
                        if (b.x <= k.x && "undefined" !== typeof b[d]) {
                            if (k.x <= e && (k.plotY = b[d],
                            b.x < k.x && !t && (l = w[n + 1]) && "undefined" !== typeof l[d])) {
                                var h = (k.x - b.x) / (l.x - b.x);
                                k.plotY += h * (l[d] - b[d]);
                                k.y += h * (l.y - b.y)
                            }
                            c--;
                            n++;
                            if (0 > c)
                                break
                        }
                    }
                }
                f.forEach(function(b, d) {
                    b.plotX += u;
                    if ("undefined" === typeof b.plotY || z)
                        0 <= b.plotX && b.plotX <= C.len ? z ? (b.plotY = C.translate(b.x, 0, 1, 0, 1),
                        b.plotX = E(b.y) ? A.translate(b.y, 0, 0, 0, 1) : 0) : b.plotY = (C.opposite ? 0 : a.yAxis.len) + C.offset : b.shapeArgs = {};
                    if ((y = f[d - 1]) && y.plotX === b.plotX) {
                        "undefined" === typeof y.stackIndex && (y.stackIndex = 0);
                        var e = y.stackIndex + 1
                    }
                    b.stackIndex = e
                });
                this.onSeries = r
            }
            var d = [];
            c.compose = function(c) {
                if (-1 === d.indexOf(c)) {
                    d.push(c);
                    var g = c.prototype;
                    g.getPlotBox = f;
                    g.translate = a
                }
                return c
            }
            ;
            c.getPlotBox = f;
            c.translate = a
        }
        )(w || (w = {}));
        return w
    });
    O(f, "Series/Flags/FlagsSymbols.js", [f["Core/Renderer/RendererRegistry.js"], f["Core/Renderer/SVG/SVGRenderer.js"]], function(c, f) {
        function B(c) {
            D[c + "pin"] = function(f, z, w, t, r) {
                var a = r && r.anchorX;
                r = r && r.anchorY;
                "circle" === c && t > w && (f -= Math.round((t - w) / 2),
                w = t);
                var d = D[c](f, z, w, t);
                if (a && r) {
                    var g = a;
                    "circle" === c ? g = f + w / 2 : (f = d[0],
                    w = d[1],
                    "M" === f[0] && "L" === w[0] && (g = (f[1] + w[1]) / 2));
                    d.push(["M", g, z > r ? z : z + t], ["L", a, r]);
                    d = d.concat(D.circle(a - 1, r - 1, 2, 2))
                }
                return d
            }
        }
        var D = f.prototype.symbols;
        D.flag = function(c, f, B, w, t) {
            var r = t && t.anchorX || c;
            t = t && t.anchorY || f;
            var a = D.circle(r - 1, t - 1, 2, 2);
            a.push(["M", r, t], ["L", c, f + w], ["L", c, f], ["L", c + B, f], ["L", c + B, f + w], ["L", c, f + w], ["Z"]);
            return a
        }
        ;
        B("circle");
        B("square");
        c = c.getRendererType();
        c !== f && (c.prototype.symbols.circlepin = D.circlepin,
        c.prototype.symbols.flag = D.flag,
        c.prototype.symbols.squarepin = D.squarepin);
        return D
    });
    O(f, "Series/Flags/FlagsSeries.js", [f["Series/Flags/FlagsPoint.js"], f["Core/Globals.js"], f["Series/OnSeriesComposition.js"], f["Core/Renderer/RendererUtilities.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Renderer/SVG/SVGElement.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H) {
        var w = this && this.__extends || function() {
            var a = function(d, c) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, d) {
                    a.__proto__ = d
                }
                || function(a, d) {
                    for (var c in d)
                        d.hasOwnProperty(c) && (a[c] = d[c])
                }
                ;
                return a(d, c)
            };
            return function(d, c) {
                function f() {
                    this.constructor = d
                }
                a(d, c);
                d.prototype = null === c ? Object.create(c) : (f.prototype = c.prototype,
                new f)
            }
        }();
        f = f.noop;
        var t = F.distribute
          , r = z.series
          , a = z.seriesTypes.column
          , d = H.addEvent
          , g = H.defined;
        F = H.extend;
        var m = H.merge
          , q = H.objectEach
          , x = H.wrap;
        H = function(c) {
            function f() {
                var a = null !== c && c.apply(this, arguments) || this;
                a.data = void 0;
                a.options = void 0;
                a.points = void 0;
                return a
            }
            w(f, c);
            f.prototype.animate = function(a) {
                a && this.setClip()
            }
            ;
            f.prototype.drawPoints = function() {
                var a = this.points, d = this.chart, c = d.renderer, f = d.inverted, r = this.options, n = r.y, u, l = this.yAxis, k = {}, e = [];
                for (u = a.length; u--; ) {
                    var b = a[u];
                    var h = (f ? b.plotY : b.plotX) > this.xAxis.len;
                    var v = b.plotX;
                    var p = b.stackIndex;
                    var G = b.options.shape || r.shape;
                    var w = b.plotY;
                    "undefined" !== typeof w && (w = b.plotY + n - ("undefined" !== typeof p && p * r.stackDistance));
                    b.anchorX = p ? void 0 : b.plotX;
                    var z = p ? void 0 : b.plotY;
                    var B = "flag" !== G;
                    p = b.graphic;
                    "undefined" !== typeof w && 0 <= v && !h ? (p && b.hasNewShapeType() && (p = p.destroy()),
                    p || (p = b.graphic = c.label("", null, null, G, null, null, r.useHTML).addClass("highcharts-point").add(this.markerGroup),
                    b.graphic.div && (b.graphic.div.point = b),
                    p.isNew = !0),
                    p.attr({
                        align: B ? "center" : "left",
                        width: r.width,
                        height: r.height,
                        "text-align": r.textAlign
                    }),
                    d.styledMode || p.attr(this.pointAttribs(b)).css(m(r.style, b.style)).shadow(r.shadow),
                    0 < v && (v -= p.strokeWidth() % 2),
                    G = {
                        y: w,
                        anchorY: z
                    },
                    r.allowOverlapX && (G.x = v,
                    G.anchorX = b.anchorX),
                    p.attr({
                        text: b.options.title || r.title || "A"
                    })[p.isNew ? "attr" : "animate"](G),
                    r.allowOverlapX || (k[b.plotX] ? k[b.plotX].size = Math.max(k[b.plotX].size, p.width) : k[b.plotX] = {
                        align: B ? .5 : 0,
                        size: p.width,
                        target: v,
                        anchorX: v
                    }),
                    b.tooltipPos = [v, w + l.pos - d.plotTop]) : p && (b.graphic = p.destroy())
                }
                if (!r.allowOverlapX) {
                    var D = 100;
                    q(k, function(a) {
                        a.plotX = a.anchorX;
                        e.push(a);
                        D = Math.max(a.size, D)
                    });
                    t(e, f ? l.len : this.xAxis.len, D);
                    a.forEach(function(a) {
                        var b = a.plotX
                          , d = a.graphic;
                        (b = d && k[b]) && d && (g(b.pos) ? d[d.isNew ? "attr" : "animate"]({
                            x: b.pos + (b.align || 0) * b.size,
                            anchorX: a.anchorX
                        }).show().isNew = !1 : d.hide().isNew = !0)
                    })
                }
                r.useHTML && x(this.markerGroup, "on", function(a) {
                    return E.prototype.on.apply(a.apply(this, [].slice.call(arguments, 1)), [].slice.call(arguments, 1))
                })
            }
            ;
            f.prototype.drawTracker = function() {
                var a = this.points;
                c.prototype.drawTracker.call(this);
                a.forEach(function(c) {
                    var f = c.graphic;
                    f && (c.unbindMouseOver && c.unbindMouseOver(),
                    c.unbindMouseOver = d(f.element, "mouseover", function() {
                        0 < c.stackIndex && !c.raised && (c._y = f.y,
                        f.attr({
                            y: c._y - 8
                        }),
                        c.raised = !0);
                        a.forEach(function(a) {
                            a !== c && a.raised && a.graphic && (a.graphic.attr({
                                y: a._y
                            }),
                            a.raised = !1)
                        })
                    }))
                })
            }
            ;
            f.prototype.pointAttribs = function(a, d) {
                var c = this.options
                  , f = a && a.color || this.color
                  , g = c.lineColor
                  , n = a && a.lineWidth;
                a = a && a.fillColor || c.fillColor;
                d && (a = c.states[d].fillColor,
                g = c.states[d].lineColor,
                n = c.states[d].lineWidth);
                return {
                    fill: a || f,
                    stroke: g || f,
                    "stroke-width": n || c.lineWidth || 0
                }
            }
            ;
            f.prototype.setClip = function() {
                r.prototype.setClip.apply(this, arguments);
                !1 !== this.options.clip && this.sharedClipKey && this.markerGroup && this.markerGroup.clip(this.chart.sharedClips[this.sharedClipKey])
            }
            ;
            f.defaultOptions = m(a.defaultOptions, {
                pointRange: 0,
                allowOverlapX: !1,
                shape: "flag",
                stackDistance: 12,
                textAlign: "center",
                tooltip: {
                    pointFormat: "{point.text}"
                },
                threshold: null,
                y: -30,
                fillColor: "#ffffff",
                lineWidth: 1,
                states: {
                    hover: {
                        lineColor: "#000000",
                        fillColor: "#ccd6eb"
                    }
                },
                style: {
                    fontSize: "0.688em",
                    fontWeight: "bold"
                }
            });
            return f
        }(a);
        B.compose(H);
        F(H.prototype, {
            allowDG: !1,
            forceCrop: !0,
            invertible: !1,
            noSharedTooltip: !0,
            pointClass: c,
            sorted: !1,
            takeOrdinalPosition: !1,
            trackerGroups: ["markerGroup"],
            buildKDTree: f,
            init: r.prototype.init,
            invertGroups: f
        });
        z.registerSeriesType("flags", H);
        "";
        "";
        return H
    });
    O(f, "Core/Axis/ScrollbarAxis.js", [f["Core/Utilities.js"]], function(c) {
        var f = c.addEvent
          , B = c.defined
          , F = c.pick;
        return function() {
            function c() {}
            c.compose = function(z, D) {
                if (-1 === c.composed.indexOf(z))
                    c.composed.push(z);
                else
                    return z;
                var w = function(c) {
                    var f = F(c.options && c.options.min, c.min)
                      , a = F(c.options && c.options.max, c.max);
                    return {
                        axisMin: f,
                        axisMax: a,
                        scrollMin: B(c.dataMin) ? Math.min(f, c.min, c.dataMin, F(c.threshold, Infinity)) : f,
                        scrollMax: B(c.dataMax) ? Math.max(a, c.max, c.dataMax, F(c.threshold, -Infinity)) : a
                    }
                };
                f(z, "afterInit", function() {
                    var c = this;
                    c.options && c.options.scrollbar && c.options.scrollbar.enabled && (c.options.scrollbar.vertical = !c.horiz,
                    c.options.startOnTick = c.options.endOnTick = !1,
                    c.scrollbar = new D(c.chart.renderer,c.options.scrollbar,c.chart),
                    f(c.scrollbar, "changed", function(f) {
                        var a = w(c)
                          , d = a.axisMax
                          , g = a.scrollMin
                          , m = a.scrollMax - g;
                        B(a.axisMin) && B(d) && (c.horiz && !c.reversed || !c.horiz && c.reversed ? (a = g + m * this.to,
                        g += m * this.from) : (a = g + m * (1 - this.from),
                        g += m * (1 - this.to)),
                        this.shouldUpdateExtremes(f.DOMType) ? c.setExtremes(g, a, !0, "mousemove" !== f.DOMType && "touchmove" !== f.DOMType, f) : this.setRange(this.from, this.to))
                    }))
                });
                f(z, "afterRender", function() {
                    var c = w(this)
                      , f = c.scrollMin
                      , a = c.scrollMax;
                    c = this.scrollbar;
                    var d = this.axisTitleMargin + (this.titleOffset || 0)
                      , g = this.chart.scrollbarsOffsets
                      , m = this.options.margin || 0;
                    c && (this.horiz ? (this.opposite || (g[1] += d),
                    c.position(this.left, this.top + this.height + 2 + g[1] - (this.opposite ? m : 0), this.width, this.height),
                    this.opposite || (g[1] += m),
                    d = 1) : (this.opposite && (g[0] += d),
                    c.position(c.options.opposite ? this.left + this.width + 2 + g[0] - (this.opposite ? 0 : m) : this.opposite ? 0 : m, this.top, this.width, this.height),
                    this.opposite && (g[0] += m),
                    d = 0),
                    g[d] += c.size + c.options.margin,
                    isNaN(f) || isNaN(a) || !B(this.min) || !B(this.max) || this.min === this.max ? c.setRange(0, 1) : (g = (this.min - f) / (a - f),
                    f = (this.max - f) / (a - f),
                    this.horiz && !this.reversed || !this.horiz && this.reversed ? c.setRange(g, f) : c.setRange(1 - f, 1 - g)))
                });
                f(z, "afterGetOffset", function() {
                    var c = this.scrollbar && !this.scrollbar.options.opposite;
                    c = this.horiz ? 2 : c ? 3 : 1;
                    var f = this.scrollbar;
                    f && (this.chart.scrollbarsOffsets = [0, 0],
                    this.chart.axisOffset[c] += f.size + f.options.margin)
                });
                return z
            }
            ;
            c.composed = [];
            return c
        }()
    });
    O(f, "Core/ScrollbarDefaults.js", [f["Core/Globals.js"]], function(c) {
        return {
            height: c.isTouchDevice ? 20 : 14,
            barBorderRadius: 0,
            buttonBorderRadius: 0,
            liveRedraw: void 0,
            margin: 10,
            minWidth: 6,
            opposite: !0,
            step: .2,
            zIndex: 3,
            barBackgroundColor: "#cccccc",
            barBorderWidth: 1,
            barBorderColor: "#cccccc",
            buttonArrowColor: "#333333",
            buttonBackgroundColor: "#e6e6e6",
            buttonBorderColor: "#cccccc",
            buttonBorderWidth: 1,
            rifleColor: "#333333",
            trackBackgroundColor: "#f2f2f2",
            trackBorderColor: "#f2f2f2",
            trackBorderWidth: 1
        }
    });
    O(f, "Core/Scrollbar.js", [f["Core/DefaultOptions.js"], f["Core/Globals.js"], f["Core/Axis/ScrollbarAxis.js"], f["Core/ScrollbarDefaults.js"], f["Core/Utilities.js"]], function(c, f, B, F, z) {
        var D = c.defaultOptions
          , H = z.addEvent
          , w = z.correctFloat
          , t = z.defined
          , r = z.destroyObjectProperties
          , a = z.fireEvent
          , d = z.merge
          , g = z.pick
          , m = z.removeEvent;
        c = function() {
            function c(a, c, d) {
                this._events = [];
                this.chart = void 0;
                this.from = this.chartY = this.chartX = 0;
                this.scrollbar = this.renderer = this.options = this.group = void 0;
                this.scrollbarButtons = [];
                this.scrollbarGroup = void 0;
                this.scrollbarLeft = 0;
                this.scrollbarRifles = void 0;
                this.scrollbarStrokeWidth = 1;
                this.to = this.size = this.scrollbarTop = 0;
                this.track = void 0;
                this.trackBorderWidth = 1;
                this.userOptions = void 0;
                this.y = this.x = 0;
                this.init(a, c, d)
            }
            c.compose = function(a) {
                B.compose(a, c)
            }
            ;
            c.swapXY = function(a, c) {
                c && a.forEach(function(a) {
                    for (var c = a.length, d, f = 0; f < c; f += 2)
                        d = a[f + 1],
                        "number" === typeof d && (a[f + 1] = a[f + 2],
                        a[f + 2] = d)
                });
                return a
            }
            ;
            c.prototype.addEvents = function() {
                var a = this.options.inverted ? [1, 0] : [0, 1]
                  , c = this.scrollbarButtons
                  , d = this.scrollbarGroup.element
                  , g = this.track.element
                  , m = this.mouseDownHandler.bind(this)
                  , q = this.mouseMoveHandler.bind(this)
                  , r = this.mouseUpHandler.bind(this);
                a = [[c[a[0]].element, "click", this.buttonToMinClick.bind(this)], [c[a[1]].element, "click", this.buttonToMaxClick.bind(this)], [g, "click", this.trackClick.bind(this)], [d, "mousedown", m], [d.ownerDocument, "mousemove", q], [d.ownerDocument, "mouseup", r]];
                f.hasTouch && a.push([d, "touchstart", m], [d.ownerDocument, "touchmove", q], [d.ownerDocument, "touchend", r]);
                a.forEach(function(a) {
                    H.apply(null, a)
                });
                this._events = a
            }
            ;
            c.prototype.buttonToMaxClick = function(c) {
                var d = (this.to - this.from) * g(this.options.step, .2);
                this.updatePosition(this.from + d, this.to + d);
                a(this, "changed", {
                    from: this.from,
                    to: this.to,
                    trigger: "scrollbar",
                    DOMEvent: c
                })
            }
            ;
            c.prototype.buttonToMinClick = function(c) {
                var d = w(this.to - this.from) * g(this.options.step, .2);
                this.updatePosition(w(this.from - d), w(this.to - d));
                a(this, "changed", {
                    from: this.from,
                    to: this.to,
                    trigger: "scrollbar",
                    DOMEvent: c
                })
            }
            ;
            c.prototype.cursorToScrollbarPosition = function(a) {
                var c = this.options;
                c = c.minWidth > this.calculatedWidth ? c.minWidth : 0;
                return {
                    chartX: (a.chartX - this.x - this.xOffset) / (this.barWidth - c),
                    chartY: (a.chartY - this.y - this.yOffset) / (this.barWidth - c)
                }
            }
            ;
            c.prototype.destroy = function() {
                var a = this
                  , c = a.chart.scroller;
                a.removeEvents();
                ["track", "scrollbarRifles", "scrollbar", "scrollbarGroup", "group"].forEach(function(c) {
                    a[c] && a[c].destroy && (a[c] = a[c].destroy())
                });
                c && a === c.scrollbar && (c.scrollbar = null,
                r(c.scrollbarButtons))
            }
            ;
            c.prototype.drawScrollbarButton = function(a) {
                var d = this.renderer
                  , f = this.scrollbarButtons
                  , g = this.options
                  , m = this.size
                  , q = d.g().add(this.group);
                f.push(q);
                q = d.rect().addClass("highcharts-scrollbar-button").add(q);
                this.chart.styledMode || q.attr({
                    stroke: g.buttonBorderColor,
                    "stroke-width": g.buttonBorderWidth,
                    fill: g.buttonBackgroundColor
                });
                q.attr(q.crisp({
                    x: -.5,
                    y: -.5,
                    width: m + 1,
                    height: m + 1,
                    r: g.buttonBorderRadius
                }, q.strokeWidth()));
                q = d.path(c.swapXY([["M", m / 2 + (a ? -1 : 1), m / 2 - 3], ["L", m / 2 + (a ? -1 : 1), m / 2 + 3], ["L", m / 2 + (a ? 2 : -2), m / 2]], g.vertical)).addClass("highcharts-scrollbar-arrow").add(f[a]);
                this.chart.styledMode || q.attr({
                    fill: g.buttonArrowColor
                })
            }
            ;
            c.prototype.init = function(a, c, f) {
                this.scrollbarButtons = [];
                this.renderer = a;
                this.userOptions = c;
                this.options = d(F, D.scrollbar, c);
                this.chart = f;
                this.size = g(this.options.size, this.options.height);
                c.enabled && (this.render(),
                this.addEvents())
            }
            ;
            c.prototype.mouseDownHandler = function(a) {
                a = this.chart.pointer.normalize(a);
                a = this.cursorToScrollbarPosition(a);
                this.chartX = a.chartX;
                this.chartY = a.chartY;
                this.initPositions = [this.from, this.to];
                this.grabbedCenter = !0
            }
            ;
            c.prototype.mouseMoveHandler = function(c) {
                var d = this.chart.pointer.normalize(c)
                  , f = this.options.vertical ? "chartY" : "chartX"
                  , g = this.initPositions || [];
                !this.grabbedCenter || c.touches && 0 === c.touches[0][f] || (d = this.cursorToScrollbarPosition(d)[f],
                f = this[f],
                f = d - f,
                this.hasDragged = !0,
                this.updatePosition(g[0] + f, g[1] + f),
                this.hasDragged && a(this, "changed", {
                    from: this.from,
                    to: this.to,
                    trigger: "scrollbar",
                    DOMType: c.type,
                    DOMEvent: c
                }))
            }
            ;
            c.prototype.mouseUpHandler = function(c) {
                this.hasDragged && a(this, "changed", {
                    from: this.from,
                    to: this.to,
                    trigger: "scrollbar",
                    DOMType: c.type,
                    DOMEvent: c
                });
                this.grabbedCenter = this.hasDragged = this.chartX = this.chartY = null
            }
            ;
            c.prototype.position = function(a, c, d, f) {
                var g = this.options.vertical
                  , m = this.rendered ? "animate" : "attr"
                  , q = f
                  , r = 0;
                this.group.show();
                this.x = a;
                this.y = c + this.trackBorderWidth;
                this.width = d;
                this.height = f;
                this.xOffset = q;
                this.yOffset = r;
                g ? (this.width = this.yOffset = d = r = this.size,
                this.xOffset = q = 0,
                this.barWidth = f - 2 * d,
                this.x = a += this.options.margin) : (this.height = this.xOffset = f = q = this.size,
                this.barWidth = d - 2 * f,
                this.y += this.options.margin);
                this.group[m]({
                    translateX: a,
                    translateY: this.y
                });
                this.track[m]({
                    width: d,
                    height: f
                });
                this.scrollbarButtons[1][m]({
                    translateX: g ? 0 : d - q,
                    translateY: g ? f - r : 0
                })
            }
            ;
            c.prototype.removeEvents = function() {
                this._events.forEach(function(a) {
                    m.apply(null, a)
                });
                this._events.length = 0
            }
            ;
            c.prototype.render = function() {
                var a = this.renderer
                  , d = this.options
                  , f = this.size
                  , g = this.chart.styledMode
                  , m = a.g("scrollbar").attr({
                    zIndex: d.zIndex
                }).hide().add();
                this.group = m;
                this.track = a.rect().addClass("highcharts-scrollbar-track").attr({
                    x: 0,
                    r: d.trackBorderRadius || 0,
                    height: f,
                    width: f
                }).add(m);
                g || this.track.attr({
                    fill: d.trackBackgroundColor,
                    stroke: d.trackBorderColor,
                    "stroke-width": d.trackBorderWidth
                });
                this.trackBorderWidth = this.track.strokeWidth();
                this.track.attr({
                    y: -this.trackBorderWidth % 2 / 2
                });
                this.scrollbarGroup = a.g().add(m);
                this.scrollbar = a.rect().addClass("highcharts-scrollbar-thumb").attr({
                    height: f,
                    width: f,
                    r: d.barBorderRadius || 0
                }).add(this.scrollbarGroup);
                this.scrollbarRifles = a.path(c.swapXY([["M", -3, f / 4], ["L", -3, 2 * f / 3], ["M", 0, f / 4], ["L", 0, 2 * f / 3], ["M", 3, f / 4], ["L", 3, 2 * f / 3]], d.vertical)).addClass("highcharts-scrollbar-rifles").add(this.scrollbarGroup);
                g || (this.scrollbar.attr({
                    fill: d.barBackgroundColor,
                    stroke: d.barBorderColor,
                    "stroke-width": d.barBorderWidth
                }),
                this.scrollbarRifles.attr({
                    stroke: d.rifleColor,
                    "stroke-width": 1
                }));
                this.scrollbarStrokeWidth = this.scrollbar.strokeWidth();
                this.scrollbarGroup.translate(-this.scrollbarStrokeWidth % 2 / 2, -this.scrollbarStrokeWidth % 2 / 2);
                this.drawScrollbarButton(0);
                this.drawScrollbarButton(1)
            }
            ;
            c.prototype.setRange = function(a, c) {
                var d = this.options
                  , f = d.vertical
                  , g = d.minWidth
                  , m = this.barWidth
                  , q = !this.rendered || this.hasDragged || this.chart.navigator && this.chart.navigator.hasDragged ? "attr" : "animate";
                if (t(m)) {
                    var r = m * Math.min(c, 1);
                    a = Math.max(a, 0);
                    var n = Math.ceil(m * a);
                    this.calculatedWidth = r = w(r - n);
                    r < g && (n = (m - g + r) * a,
                    r = g);
                    g = Math.floor(n + this.xOffset + this.yOffset);
                    m = r / 2 - .5;
                    this.from = a;
                    this.to = c;
                    f ? (this.scrollbarGroup[q]({
                        translateY: g
                    }),
                    this.scrollbar[q]({
                        height: r
                    }),
                    this.scrollbarRifles[q]({
                        translateY: m
                    }),
                    this.scrollbarTop = g,
                    this.scrollbarLeft = 0) : (this.scrollbarGroup[q]({
                        translateX: g
                    }),
                    this.scrollbar[q]({
                        width: r
                    }),
                    this.scrollbarRifles[q]({
                        translateX: m
                    }),
                    this.scrollbarLeft = g,
                    this.scrollbarTop = 0);
                    12 >= r ? this.scrollbarRifles.hide() : this.scrollbarRifles.show();
                    !1 === d.showFull && (0 >= a && 1 <= c ? this.group.hide() : this.group.show());
                    this.rendered = !0
                }
            }
            ;
            c.prototype.shouldUpdateExtremes = function(a) {
                return g(this.options.liveRedraw, f.svg && !f.isTouchDevice && !this.chart.boosted) || "mouseup" === a || "touchend" === a || !t(a)
            }
            ;
            c.prototype.trackClick = function(c) {
                var d = this.chart.pointer.normalize(c)
                  , f = this.to - this.from
                  , g = this.y + this.scrollbarTop
                  , m = this.x + this.scrollbarLeft;
                this.options.vertical && d.chartY > g || !this.options.vertical && d.chartX > m ? this.updatePosition(this.from + f, this.to + f) : this.updatePosition(this.from - f, this.to - f);
                a(this, "changed", {
                    from: this.from,
                    to: this.to,
                    trigger: "scrollbar",
                    DOMEvent: c
                })
            }
            ;
            c.prototype.update = function(a) {
                this.destroy();
                this.init(this.chart.renderer, d(!0, this.options, a), this.chart)
            }
            ;
            c.prototype.updatePosition = function(a, c) {
                1 < c && (a = w(1 - w(c - a)),
                c = 1);
                0 > a && (c = w(c - a),
                a = 0);
                this.from = a;
                this.to = c
            }
            ;
            c.defaultOptions = F;
            return c
        }();
        D.scrollbar = d(!0, c.defaultOptions, D.scrollbar);
        return c
    });
    O(f, "Core/Axis/NavigatorAxis.js", [f["Core/Globals.js"], f["Core/Utilities.js"]], function(c, f) {
        var B = c.isTouchDevice
          , D = f.addEvent
          , z = f.correctFloat
          , E = f.defined
          , H = f.isNumber
          , w = f.pick
          , t = function() {
            function c(a) {
                this.axis = a
            }
            c.prototype.destroy = function() {
                this.axis = void 0
            }
            ;
            c.prototype.toFixedRange = function(a, c, f, m) {
                var d = this.axis
                  , g = d.chart;
                g = g && g.fixedRange;
                var r = (d.pointRange || 0) / 2;
                a = w(f, d.translate(a, !0, !d.horiz));
                c = w(m, d.translate(c, !0, !d.horiz));
                d = g && (c - a) / g;
                E(f) || (a = z(a + r));
                E(m) || (c = z(c - r));
                .7 < d && 1.3 > d && (m ? a = c - g : c = a + g);
                H(a) && H(c) || (a = c = void 0);
                return {
                    min: a,
                    max: c
                }
            }
            ;
            return c
        }();
        return function() {
            function c() {}
            c.compose = function(a) {
                a.keepProps.push("navigatorAxis");
                D(a, "init", function() {
                    this.navigatorAxis || (this.navigatorAxis = new t(this))
                });
                D(a, "zoom", function(a) {
                    var c = this.chart.options
                      , d = c.navigator
                      , f = this.navigatorAxis
                      , r = c.chart.zooming.pinchType
                      , t = c.rangeSelector;
                    c = c.chart.zooming.type;
                    this.isXAxis && (d && d.enabled || t && t.enabled) && ("y" === c ? a.zoomed = !1 : (!B && "xy" === c || B && "xy" === r) && this.options.range && (d = f.previousZoom,
                    E(a.newMin) ? f.previousZoom = [this.min, this.max] : d && (a.newMin = d[0],
                    a.newMax = d[1],
                    f.previousZoom = void 0)));
                    "undefined" !== typeof a.zoomed && a.preventDefault()
                })
            }
            ;
            c.AdditionsClass = t;
            return c
        }()
    });
    O(f, "Core/Navigator.js", [f["Core/Axis/Axis.js"], f["Core/Chart/Chart.js"], f["Core/Color/Color.js"], f["Core/Globals.js"], f["Core/Axis/NavigatorAxis.js"], f["Core/DefaultOptions.js"], f["Core/Renderer/RendererRegistry.js"], f["Core/Scrollbar.js"], f["Core/Series/Series.js"], f["Core/Series/SeriesRegistry.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H, w, t, r, a) {
        B = B.parse;
        var d = F.hasTouch
          , g = F.isTouchDevice
          , m = E.defaultOptions
          , q = a.addEvent
          , x = a.clamp
          , D = a.correctFloat
          , I = a.defined
          , M = a.destroyObjectProperties
          , K = a.erase
          , C = a.extend
          , A = a.find
          , y = a.isArray
          , n = a.isNumber
          , u = a.merge
          , l = a.pick
          , k = a.removeEvent
          , e = a.splat
          , b = function(a) {
            for (var b = [], c = 1; c < arguments.length; c++)
                b[c - 1] = arguments[c];
            b = [].filter.call(b, n);
            if (b.length)
                return Math[a].apply(0, b)
        };
        E = "undefined" === typeof r.seriesTypes.areaspline ? "line" : "areaspline";
        C(m, {
            navigator: {
                height: 40,
                margin: 25,
                maskInside: !0,
                handles: {
                    width: 7,
                    height: 15,
                    symbols: ["navigator-handle", "navigator-handle"],
                    enabled: !0,
                    lineWidth: 1,
                    backgroundColor: "#f2f2f2",
                    borderColor: "#999999"
                },
                maskFill: B("#6685c2").setOpacity(.3).get(),
                outlineColor: "#cccccc",
                outlineWidth: 1,
                series: {
                    type: E,
                    fillOpacity: .05,
                    lineWidth: 1,
                    compare: null,
                    dataGrouping: {
                        approximation: "average",
                        enabled: !0,
                        groupPixelWidth: 2,
                        firstAnchor: "firstPoint",
                        anchor: "middle",
                        lastAnchor: "lastPoint",
                        units: [["millisecond", [1, 2, 5, 10, 20, 25, 50, 100, 200, 500]], ["second", [1, 2, 5, 10, 15, 30]], ["minute", [1, 2, 5, 10, 15, 30]], ["hour", [1, 2, 3, 4, 6, 8, 12]], ["day", [1, 2, 3, 4]], ["week", [1, 2, 3]], ["month", [1, 3, 6]], ["year", null]]
                    },
                    dataLabels: {
                        enabled: !1,
                        zIndex: 2
                    },
                    id: "highcharts-navigator-series",
                    className: "highcharts-navigator-series",
                    lineColor: null,
                    marker: {
                        enabled: !1
                    },
                    threshold: null
                },
                xAxis: {
                    overscroll: 0,
                    className: "highcharts-navigator-xaxis",
                    tickLength: 0,
                    lineWidth: 0,
                    gridLineColor: "#e6e6e6",
                    gridLineWidth: 1,
                    tickPixelInterval: 200,
                    labels: {
                        align: "left",
                        style: {
                            color: "#999999"
                        },
                        x: 3,
                        y: -4
                    },
                    crosshair: !1
                },
                yAxis: {
                    className: "highcharts-navigator-yaxis",
                    gridLineWidth: 0,
                    startOnTick: !1,
                    endOnTick: !1,
                    minPadding: .1,
                    maxPadding: .1,
                    labels: {
                        enabled: !1
                    },
                    crosshair: !1,
                    title: {
                        text: null
                    },
                    tickLength: 0,
                    tickWidth: 0
                }
            }
        });
        H.getRendererType().prototype.symbols["navigator-handle"] = function(a, b, c, d, e) {
            a = (e && e.width || 0) / 2;
            b = Math.round(a / 3) + .5;
            e = e && e.height || 0;
            return [["M", -a - 1, .5], ["L", a, .5], ["L", a, e + .5], ["L", -a - 1, e + .5], ["L", -a - 1, .5], ["M", -b, 4], ["L", -b, e - 3], ["M", b - 1, 4], ["L", b - 1, e - 3]]
        }
        ;
        var h = function() {
            function a(a) {
                this.zoomedMin = this.zoomedMax = this.yAxis = this.xAxis = this.top = this.size = this.shades = this.rendered = this.range = this.outlineHeight = this.outline = this.opposite = this.navigatorSize = this.navigatorSeries = this.navigatorOptions = this.navigatorGroup = this.navigatorEnabled = this.left = this.height = this.handles = this.chart = this.baseSeries = void 0;
                this.init(a)
            }
            a.prototype.drawHandle = function(a, b, c, d) {
                var e = this.navigatorOptions.handles.height;
                this.handles[b][d](c ? {
                    translateX: Math.round(this.left + this.height / 2),
                    translateY: Math.round(this.top + parseInt(a, 10) + .5 - e)
                } : {
                    translateX: Math.round(this.left + parseInt(a, 10)),
                    translateY: Math.round(this.top + this.height / 2 - e / 2 - 1)
                })
            }
            ;
            a.prototype.drawOutline = function(a, b, c, d) {
                var e = this.navigatorOptions.maskInside
                  , f = this.outline.strokeWidth()
                  , h = f / 2
                  , g = f % 2 / 2;
                f = this.outlineHeight;
                var k = this.scrollbarHeight || 0
                  , p = this.size
                  , l = this.left - k
                  , m = this.top;
                c ? (l -= h,
                c = m + b + g,
                b = m + a + g,
                g = [["M", l + f, m - k - g], ["L", l + f, c], ["L", l, c], ["L", l, b], ["L", l + f, b], ["L", l + f, m + p + k]],
                e && g.push(["M", l + f, c - h], ["L", l + f, b + h])) : (a += l + k - g,
                b += l + k - g,
                m += h,
                g = [["M", l, m], ["L", a, m], ["L", a, m + f], ["L", b, m + f], ["L", b, m], ["L", l + p + 2 * k, m]],
                e && g.push(["M", a - h, m], ["L", b + h, m]));
                this.outline[d]({
                    d: g
                })
            }
            ;
            a.prototype.drawMasks = function(a, b, c, d) {
                var e = this.left
                  , f = this.top
                  , h = this.height;
                if (c) {
                    var g = [e, e, e];
                    var k = [f, f + a, f + b];
                    var p = [h, h, h];
                    var l = [a, b - a, this.size - b]
                } else
                    g = [e, e + a, e + b],
                    k = [f, f, f],
                    p = [a, b - a, this.size - b],
                    l = [h, h, h];
                this.shades.forEach(function(a, b) {
                    a[d]({
                        x: g[b],
                        y: k[b],
                        width: p[b],
                        height: l[b]
                    })
                })
            }
            ;
            a.prototype.renderElements = function() {
                var a = this, b = a.navigatorOptions, c = b.maskInside, d = a.chart, e = d.renderer, f, h = {
                    cursor: d.inverted ? "ns-resize" : "ew-resize"
                };
                a.navigatorGroup = f = e.g("navigator").attr({
                    zIndex: 8,
                    visibility: "hidden"
                }).add();
                [!c, c, !c].forEach(function(c, g) {
                    var k = e.rect().addClass("highcharts-navigator-mask" + (1 === g ? "-inside" : "-outside")).add(f);
                    d.styledMode || (k.attr({
                        fill: c ? b.maskFill : "rgba(0,0,0,0)"
                    }),
                    1 === g && k.css(h));
                    a.shades[g] = k
                });
                a.outline = e.path().addClass("highcharts-navigator-outline").add(f);
                d.styledMode || a.outline.attr({
                    "stroke-width": b.outlineWidth,
                    stroke: b.outlineColor
                });
                b.handles.enabled && [0, 1].forEach(function(c) {
                    b.handles.inverted = d.inverted;
                    a.handles[c] = e.symbol(b.handles.symbols[c], -b.handles.width / 2 - 1, 0, b.handles.width, b.handles.height, b.handles);
                    a.handles[c].attr({
                        zIndex: 7 - c
                    }).addClass("highcharts-navigator-handle highcharts-navigator-handle-" + ["left", "right"][c]).add(f);
                    if (!d.styledMode) {
                        var g = b.handles;
                        a.handles[c].attr({
                            fill: g.backgroundColor,
                            stroke: g.borderColor,
                            "stroke-width": g.lineWidth
                        }).css(h)
                    }
                })
            }
            ;
            a.prototype.update = function(a) {
                (this.series || []).forEach(function(a) {
                    a.baseSeries && delete a.baseSeries.navigatorSeries
                });
                this.destroy();
                u(!0, this.chart.options.navigator, this.options, a);
                this.init(this.chart)
            }
            ;
            a.prototype.render = function(a, b, c, d) {
                var e = this.chart, f = this.scrollbarHeight, h, g = this.xAxis, k = g.pointRange || 0;
                var p = g.navigatorAxis.fake ? e.xAxis[0] : g;
                var m = this.navigatorEnabled, q, r = this.rendered;
                var v = e.inverted;
                var t = e.xAxis[0].minRange
                  , u = e.xAxis[0].options.maxRange;
                if (!this.hasDragged || I(c)) {
                    a = D(a - k / 2);
                    b = D(b + k / 2);
                    if (!n(a) || !n(b))
                        if (r)
                            c = 0,
                            d = l(g.width, p.width);
                        else
                            return;
                    this.left = l(g.left, e.plotLeft + f + (v ? e.plotWidth : 0));
                    this.size = q = h = l(g.len, (v ? e.plotHeight : e.plotWidth) - 2 * f);
                    e = v ? f : h + 2 * f;
                    c = l(c, g.toPixels(a, !0));
                    d = l(d, g.toPixels(b, !0));
                    n(c) && Infinity !== Math.abs(c) || (c = 0,
                    d = e);
                    a = g.toValue(c, !0);
                    b = g.toValue(d, !0);
                    var G = Math.abs(D(b - a));
                    G < t ? this.grabbedLeft ? c = g.toPixels(b - t - k, !0) : this.grabbedRight && (d = g.toPixels(a + t + k, !0)) : I(u) && D(G - k) > u && (this.grabbedLeft ? c = g.toPixels(b - u - k, !0) : this.grabbedRight && (d = g.toPixels(a + u + k, !0)));
                    this.zoomedMax = x(Math.max(c, d), 0, q);
                    this.zoomedMin = x(this.fixedWidth ? this.zoomedMax - this.fixedWidth : Math.min(c, d), 0, q);
                    this.range = this.zoomedMax - this.zoomedMin;
                    q = Math.round(this.zoomedMax);
                    c = Math.round(this.zoomedMin);
                    m && (this.navigatorGroup.attr({
                        visibility: "inherit"
                    }),
                    r = r && !this.hasDragged ? "animate" : "attr",
                    this.drawMasks(c, q, v, r),
                    this.drawOutline(c, q, v, r),
                    this.navigatorOptions.handles.enabled && (this.drawHandle(c, 0, v, r),
                    this.drawHandle(q, 1, v, r)));
                    this.scrollbar && (v ? (v = this.top - f,
                    p = this.left - f + (m || !p.opposite ? 0 : (p.titleOffset || 0) + p.axisTitleMargin),
                    f = h + 2 * f) : (v = this.top + (m ? this.height : -f),
                    p = this.left - f),
                    this.scrollbar.position(p, v, e, f),
                    this.scrollbar.setRange(this.zoomedMin / (h || 1), this.zoomedMax / (h || 1)));
                    this.rendered = !0
                }
            }
            ;
            a.prototype.addMouseEvents = function() {
                var a = this, b = a.chart, c = b.container, e = [], f, h;
                a.mouseMoveHandler = f = function(b) {
                    a.onMouseMove(b)
                }
                ;
                a.mouseUpHandler = h = function(b) {
                    a.onMouseUp(b)
                }
                ;
                e = a.getPartsEvents("mousedown");
                e.push(q(b.renderTo, "mousemove", f), q(c.ownerDocument, "mouseup", h));
                d && (e.push(q(b.renderTo, "touchmove", f), q(c.ownerDocument, "touchend", h)),
                e.concat(a.getPartsEvents("touchstart")));
                a.eventsToUnbind = e;
                a.series && a.series[0] && e.push(q(a.series[0].xAxis, "foundExtremes", function() {
                    b.navigator.modifyNavigatorAxisExtremes()
                }))
            }
            ;
            a.prototype.getPartsEvents = function(a) {
                var b = this
                  , c = [];
                ["shades", "handles"].forEach(function(d) {
                    b[d].forEach(function(e, f) {
                        c.push(q(e.element, a, function(a) {
                            b[d + "Mousedown"](a, f)
                        }))
                    })
                });
                return c
            }
            ;
            a.prototype.shadesMousedown = function(a, b) {
                a = this.chart.pointer.normalize(a);
                var c = this.chart
                  , d = this.xAxis
                  , e = this.zoomedMin
                  , f = this.left
                  , h = this.size
                  , g = this.range
                  , k = a.chartX;
                c.inverted && (k = a.chartY,
                f = this.top);
                if (1 === b)
                    this.grabbedCenter = k,
                    this.fixedWidth = g,
                    this.dragOffset = k - e;
                else {
                    a = k - f - g / 2;
                    if (0 === b)
                        a = Math.max(0, a);
                    else if (2 === b && a + g >= h)
                        if (a = h - g,
                        this.reversedExtremes) {
                            a -= g;
                            var p = this.getUnionExtremes().dataMin
                        } else
                            var l = this.getUnionExtremes().dataMax;
                    a !== e && (this.fixedWidth = g,
                    b = d.navigatorAxis.toFixedRange(a, a + g, p, l),
                    I(b.min) && c.xAxis[0].setExtremes(Math.min(b.min, b.max), Math.max(b.min, b.max), !0, null, {
                        trigger: "navigator"
                    }))
                }
            }
            ;
            a.prototype.handlesMousedown = function(a, b) {
                this.chart.pointer.normalize(a);
                a = this.chart;
                var c = a.xAxis[0]
                  , d = this.reversedExtremes;
                0 === b ? (this.grabbedLeft = !0,
                this.otherHandlePos = this.zoomedMax,
                this.fixedExtreme = d ? c.min : c.max) : (this.grabbedRight = !0,
                this.otherHandlePos = this.zoomedMin,
                this.fixedExtreme = d ? c.max : c.min);
                a.fixedRange = null
            }
            ;
            a.prototype.onMouseMove = function(a) {
                var b = this
                  , c = b.chart
                  , d = b.left
                  , e = b.navigatorSize
                  , f = b.range
                  , h = b.dragOffset
                  , k = c.inverted;
                a.touches && 0 === a.touches[0].pageX || (a = c.pointer.normalize(a),
                c = a.chartX,
                k && (d = b.top,
                c = a.chartY),
                b.grabbedLeft ? (b.hasDragged = !0,
                b.render(0, 0, c - d, b.otherHandlePos)) : b.grabbedRight ? (b.hasDragged = !0,
                b.render(0, 0, b.otherHandlePos, c - d)) : b.grabbedCenter && (b.hasDragged = !0,
                c < h ? c = h : c > e + h - f && (c = e + h - f),
                b.render(0, 0, c - h, c - h + f)),
                b.hasDragged && b.scrollbar && l(b.scrollbar.options.liveRedraw, F.svg && !g && !this.chart.boosted) && (a.DOMType = a.type,
                setTimeout(function() {
                    b.onMouseUp(a)
                }, 0)))
            }
            ;
            a.prototype.onMouseUp = function(a) {
                var b = this.chart
                  , c = this.xAxis
                  , d = this.scrollbar
                  , e = a.DOMEvent || a
                  , f = b.inverted
                  , h = this.rendered && !this.hasDragged ? "animate" : "attr";
                if (this.hasDragged && (!d || !d.hasDragged) || "scrollbar" === a.trigger) {
                    d = this.getUnionExtremes();
                    if (this.zoomedMin === this.otherHandlePos)
                        var g = this.fixedExtreme;
                    else if (this.zoomedMax === this.otherHandlePos)
                        var k = this.fixedExtreme;
                    this.zoomedMax === this.size && (k = this.reversedExtremes ? d.dataMin : d.dataMax);
                    0 === this.zoomedMin && (g = this.reversedExtremes ? d.dataMax : d.dataMin);
                    c = c.navigatorAxis.toFixedRange(this.zoomedMin, this.zoomedMax, g, k);
                    I(c.min) && b.xAxis[0].setExtremes(Math.min(c.min, c.max), Math.max(c.min, c.max), !0, this.hasDragged ? !1 : null, {
                        trigger: "navigator",
                        triggerOp: "navigator-drag",
                        DOMEvent: e
                    })
                }
                "mousemove" !== a.DOMType && "touchmove" !== a.DOMType && (this.grabbedLeft = this.grabbedRight = this.grabbedCenter = this.fixedWidth = this.fixedExtreme = this.otherHandlePos = this.hasDragged = this.dragOffset = null);
                this.navigatorEnabled && n(this.zoomedMin) && n(this.zoomedMax) && (b = Math.round(this.zoomedMin),
                a = Math.round(this.zoomedMax),
                this.shades && this.drawMasks(b, a, f, h),
                this.outline && this.drawOutline(b, a, f, h),
                this.navigatorOptions.handles.enabled && Object.keys(this.handles).length === this.handles.length && (this.drawHandle(b, 0, f, h),
                this.drawHandle(a, 1, f, h)))
            }
            ;
            a.prototype.removeEvents = function() {
                this.eventsToUnbind && (this.eventsToUnbind.forEach(function(a) {
                    a()
                }),
                this.eventsToUnbind = void 0);
                this.removeBaseSeriesEvents()
            }
            ;
            a.prototype.removeBaseSeriesEvents = function() {
                var a = this.baseSeries || [];
                this.navigatorEnabled && a[0] && (!1 !== this.navigatorOptions.adaptToUpdatedData && a.forEach(function(a) {
                    k(a, "updatedData", this.updatedDataHandler)
                }, this),
                a[0].xAxis && k(a[0].xAxis, "foundExtremes", this.modifyBaseAxisExtremes))
            }
            ;
            a.prototype.init = function(a) {
                var d = a.options
                  , e = d.navigator
                  , f = e.enabled
                  , h = d.scrollbar
                  , g = h.enabled;
                d = f ? e.height : 0;
                var k = g ? h.height : 0;
                this.handles = [];
                this.shades = [];
                this.chart = a;
                this.setBaseSeries();
                this.height = d;
                this.scrollbarHeight = k;
                this.scrollbarEnabled = g;
                this.navigatorEnabled = f;
                this.navigatorOptions = e;
                this.scrollbarOptions = h;
                this.outlineHeight = d + k;
                this.opposite = l(e.opposite, !(f || !a.inverted));
                var p = this;
                f = p.baseSeries;
                h = a.xAxis.length;
                g = a.yAxis.length;
                var m = f && f[0] && f[0].xAxis || a.xAxis[0] || {
                    options: {}
                };
                a.isDirtyBox = !0;
                p.navigatorEnabled ? (p.xAxis = new c(a,u({
                    breaks: m.options.breaks,
                    ordinal: m.options.ordinal
                }, e.xAxis, {
                    id: "navigator-x-axis",
                    yAxis: "navigator-y-axis",
                    isX: !0,
                    type: "datetime",
                    index: h,
                    isInternal: !0,
                    offset: 0,
                    keepOrdinalPadding: !0,
                    startOnTick: !1,
                    endOnTick: !1,
                    minPadding: 0,
                    maxPadding: 0,
                    zoomEnabled: !1
                }, a.inverted ? {
                    offsets: [k, 0, -k, 0],
                    width: d
                } : {
                    offsets: [0, -k, 0, k],
                    height: d
                })),
                p.yAxis = new c(a,u(e.yAxis, {
                    id: "navigator-y-axis",
                    alignTicks: !1,
                    offset: 0,
                    index: g,
                    isInternal: !0,
                    reversed: l(e.yAxis && e.yAxis.reversed, a.yAxis[0] && a.yAxis[0].reversed, !1),
                    zoomEnabled: !1
                }, a.inverted ? {
                    width: d
                } : {
                    height: d
                })),
                f || e.series.data ? p.updateNavigatorSeries(!1) : 0 === a.series.length && (p.unbindRedraw = q(a, "beforeRedraw", function() {
                    0 < a.series.length && !p.series && (p.setBaseSeries(),
                    p.unbindRedraw())
                })),
                p.reversedExtremes = a.inverted && !p.xAxis.reversed || !a.inverted && p.xAxis.reversed,
                p.renderElements(),
                p.addMouseEvents()) : (p.xAxis = {
                    chart: a,
                    navigatorAxis: {
                        fake: !0
                    },
                    translate: function(c, d) {
                        var e = a.xAxis[0]
                          , f = e.getExtremes()
                          , h = e.len - 2 * k
                          , g = b("min", e.options.min, f.dataMin);
                        e = b("max", e.options.max, f.dataMax) - g;
                        return d ? c * e / h + g : h * (c - g) / e
                    },
                    toPixels: function(a) {
                        return this.translate(a)
                    },
                    toValue: function(a) {
                        return this.translate(a, !0)
                    }
                },
                p.xAxis.navigatorAxis.axis = p.xAxis,
                p.xAxis.navigatorAxis.toFixedRange = z.AdditionsClass.prototype.toFixedRange.bind(p.xAxis.navigatorAxis));
                a.options.scrollbar.enabled && (a.scrollbar = p.scrollbar = new w(a.renderer,u(a.options.scrollbar, {
                    margin: p.navigatorEnabled ? 0 : 10,
                    vertical: a.inverted
                }),a),
                q(p.scrollbar, "changed", function(a) {
                    var b = p.size
                      , c = b * this.to;
                    b *= this.from;
                    p.hasDragged = p.scrollbar.hasDragged;
                    p.render(0, 0, b, c);
                    this.shouldUpdateExtremes(a.DOMType) && setTimeout(function() {
                        p.onMouseUp(a)
                    })
                }));
                p.addBaseSeriesEvents();
                p.addChartEvents()
            }
            ;
            a.prototype.getUnionExtremes = function(a) {
                var c = this.chart.xAxis[0], d = this.xAxis, e = d.options, f = c.options, h;
                a && null === c.dataMin || (h = {
                    dataMin: l(e && e.min, b("min", f.min, c.dataMin, d.dataMin, d.min)),
                    dataMax: l(e && e.max, b("max", f.max, c.dataMax, d.dataMax, d.max))
                });
                return h
            }
            ;
            a.prototype.setBaseSeries = function(a, b) {
                var c = this.chart
                  , d = this.baseSeries = [];
                a = a || c.options && c.options.navigator.baseSeries || (c.series.length ? A(c.series, function(a) {
                    return !a.options.isInternal
                }).index : 0);
                (c.series || []).forEach(function(b, c) {
                    b.options.isInternal || !b.options.showInNavigator && (c !== a && b.options.id !== a || !1 === b.options.showInNavigator) || d.push(b)
                });
                this.xAxis && !this.xAxis.navigatorAxis.fake && this.updateNavigatorSeries(!0, b)
            }
            ;
            a.prototype.updateNavigatorSeries = function(a, b) {
                var c = this, d = c.chart, f = c.baseSeries, h, g, p = c.navigatorOptions.series, n, q = {
                    enableMouseTracking: !1,
                    index: null,
                    linkedTo: null,
                    group: "nav",
                    padXAxis: !1,
                    xAxis: "navigator-x-axis",
                    yAxis: "navigator-y-axis",
                    showInLegend: !1,
                    stacking: void 0,
                    isInternal: !0,
                    states: {
                        inactive: {
                            opacity: 1
                        }
                    }
                }, r = c.series = (c.series || []).filter(function(a) {
                    var b = a.baseSeries;
                    return 0 > f.indexOf(b) ? (b && (k(b, "updatedData", c.updatedDataHandler),
                    delete b.navigatorSeries),
                    a.chart && a.destroy(),
                    !1) : !0
                });
                f && f.length && f.forEach(function(a) {
                    var k = a.navigatorSeries
                      , v = C({
                        color: a.color,
                        visible: a.visible
                    }, y(p) ? m.navigator.series : p);
                    k && !1 === c.navigatorOptions.adaptToUpdatedData || (q.name = "Navigator " + f.length,
                    h = a.options || {},
                    n = h.navigatorOptions || {},
                    v.dataLabels = e(v.dataLabels),
                    g = u(h, q, v, n),
                    g.pointRange = l(v.pointRange, n.pointRange, m.plotOptions[g.type || "line"].pointRange),
                    v = n.data || v.data,
                    c.hasNavigatorData = c.hasNavigatorData || !!v,
                    g.data = v || h.data && h.data.slice(0),
                    k && k.options ? k.update(g, b) : (a.navigatorSeries = d.initSeries(g),
                    a.navigatorSeries.baseSeries = a,
                    r.push(a.navigatorSeries)))
                });
                if (p.data && (!f || !f.length) || y(p))
                    c.hasNavigatorData = !1,
                    p = e(p),
                    p.forEach(function(a, b) {
                        q.name = "Navigator " + (r.length + 1);
                        g = u(m.navigator.series, {
                            color: d.series[b] && !d.series[b].options.isInternal && d.series[b].color || d.options.colors[b] || d.options.colors[0]
                        }, q, a);
                        g.data = a.data;
                        g.data && (c.hasNavigatorData = !0,
                        r.push(d.initSeries(g)))
                    });
                a && this.addBaseSeriesEvents()
            }
            ;
            a.prototype.addBaseSeriesEvents = function() {
                var a = this
                  , b = a.baseSeries || [];
                b[0] && b[0].xAxis && b[0].eventsToUnbind.push(q(b[0].xAxis, "foundExtremes", this.modifyBaseAxisExtremes));
                b.forEach(function(b) {
                    b.eventsToUnbind.push(q(b, "show", function() {
                        this.navigatorSeries && this.navigatorSeries.setVisible(!0, !1)
                    }));
                    b.eventsToUnbind.push(q(b, "hide", function() {
                        this.navigatorSeries && this.navigatorSeries.setVisible(!1, !1)
                    }));
                    !1 !== this.navigatorOptions.adaptToUpdatedData && b.xAxis && b.eventsToUnbind.push(q(b, "updatedData", this.updatedDataHandler));
                    b.eventsToUnbind.push(q(b, "remove", function() {
                        this.navigatorSeries && (K(a.series, this.navigatorSeries),
                        I(this.navigatorSeries.options) && this.navigatorSeries.remove(!1),
                        delete this.navigatorSeries)
                    }))
                }, this)
            }
            ;
            a.prototype.getBaseSeriesMin = function(a) {
                return this.baseSeries.reduce(function(a, b) {
                    return Math.min(a, b.xData && b.xData.length ? b.xData[0] : a)
                }, a)
            }
            ;
            a.prototype.modifyNavigatorAxisExtremes = function() {
                var a = this.xAxis, b;
                "undefined" !== typeof a.getExtremes && (!(b = this.getUnionExtremes(!0)) || b.dataMin === a.min && b.dataMax === a.max || (a.min = b.dataMin,
                a.max = b.dataMax))
            }
            ;
            a.prototype.modifyBaseAxisExtremes = function() {
                var a = this.chart.navigator
                  , b = this.getExtremes()
                  , c = b.dataMin
                  , d = b.dataMax;
                b = b.max - b.min;
                var e = a.stickToMin
                  , f = a.stickToMax
                  , h = l(this.options.overscroll, 0)
                  , g = a.series && a.series[0]
                  , k = !!this.setExtremes;
                if (!this.eventArgs || "rangeSelectorButton" !== this.eventArgs.trigger) {
                    if (e) {
                        var m = c;
                        var q = m + b
                    }
                    f && (q = d + h,
                    e || (m = Math.max(c, q - b, a.getBaseSeriesMin(g && g.xData ? g.xData[0] : -Number.MAX_VALUE))));
                    k && (e || f) && n(m) && (this.min = this.userMin = m,
                    this.max = this.userMax = q)
                }
                a.stickToMin = a.stickToMax = null
            }
            ;
            a.prototype.updatedDataHandler = function() {
                var a = this.chart.navigator
                  , b = this.navigatorSeries;
                a.stickToMax = l(this.chart.options.navigator && this.chart.options.navigator.stickToMax, a.reversedExtremes ? 0 === Math.round(a.zoomedMin) : Math.round(a.zoomedMax) >= Math.round(a.size));
                a.stickToMin = a.shouldStickToMin(this, a);
                b && !a.hasNavigatorData && (b.options.pointStart = this.xData[0],
                b.setData(this.options.data, !1, null, !1))
            }
            ;
            a.prototype.shouldStickToMin = function(a, b) {
                b = b.getBaseSeriesMin(a.xData[0]);
                var c = a.xAxis;
                a = c.max;
                var d = c.min;
                c = c.options.range;
                return n(a) && n(d) ? c && 0 < a - b ? a - b < c : d <= b : !1
            }
            ;
            a.prototype.addChartEvents = function() {
                this.eventsToUnbind || (this.eventsToUnbind = []);
                this.eventsToUnbind.push(q(this.chart, "redraw", function() {
                    var a = this.navigator
                      , b = a && (a.baseSeries && a.baseSeries[0] && a.baseSeries[0].xAxis || this.xAxis[0]);
                    b && a.render(b.min, b.max)
                }), q(this.chart, "getMargins", function() {
                    var a = this.navigator
                      , b = a.opposite ? "plotTop" : "marginBottom";
                    this.inverted && (b = a.opposite ? "marginRight" : "plotLeft");
                    this[b] = (this[b] || 0) + (a.navigatorEnabled || !this.inverted ? a.outlineHeight : 0) + a.navigatorOptions.margin
                }))
            }
            ;
            a.prototype.destroy = function() {
                this.removeEvents();
                this.xAxis && (K(this.chart.xAxis, this.xAxis),
                K(this.chart.axes, this.xAxis));
                this.yAxis && (K(this.chart.yAxis, this.yAxis),
                K(this.chart.axes, this.yAxis));
                (this.series || []).forEach(function(a) {
                    a.destroy && a.destroy()
                });
                "series xAxis yAxis shades outline scrollbarTrack scrollbarRifles scrollbarGroup scrollbar navigatorGroup rendered".split(" ").forEach(function(a) {
                    this[a] && this[a].destroy && this[a].destroy();
                    this[a] = null
                }, this);
                [this.handles].forEach(function(a) {
                    M(a)
                }, this)
            }
            ;
            return a
        }();
        F.Navigator || (F.Navigator = h,
        z.compose(c),
        q(f, "beforeShowResetZoom", function() {
            var a = this.options
              , b = a.navigator
              , c = a.rangeSelector;
            if ((b && b.enabled || c && c.enabled) && (!g && "x" === a.chart.zooming.type || g && "x" === a.chart.zooming.pinchType))
                return !1
        }),
        q(f, "beforeRender", function() {
            var a = this.options;
            if (a.navigator.enabled || a.scrollbar.enabled)
                this.scroller = this.navigator = new h(this)
        }),
        q(f, "afterSetChartSize", function() {
            var a = this.legend
              , b = this.navigator;
            if (b) {
                var c = a && a.options;
                var d = b.xAxis;
                var e = b.yAxis;
                var f = b.scrollbarHeight;
                this.inverted ? (b.left = b.opposite ? this.chartWidth - f - b.height : this.spacing[3] + f,
                b.top = this.plotTop + f) : (b.left = l(d.left, this.plotLeft + f),
                b.top = b.navigatorOptions.top || this.chartHeight - b.height - f - this.spacing[2] - (this.rangeSelector && this.extraBottomMargin ? this.rangeSelector.getHeight() : 0) - (c && "bottom" === c.verticalAlign && "proximate" !== c.layout && c.enabled && !c.floating ? a.legendHeight + l(c.margin, 10) : 0) - (this.titleOffset ? this.titleOffset[2] : 0));
                d && e && (this.inverted ? d.options.left = e.options.left = b.left : d.options.top = e.options.top = b.top,
                d.setAxisSize(),
                e.setAxisSize())
            }
        }),
        q(f, "update", function(a) {
            var b = a.options.navigator || {}
              , c = a.options.scrollbar || {};
            this.navigator || this.scroller || !b.enabled && !c.enabled || (u(!0, this.options.navigator, b),
            u(!0, this.options.scrollbar, c),
            delete a.options.navigator,
            delete a.options.scrollbar)
        }),
        q(f, "afterUpdate", function(a) {
            this.navigator || this.scroller || !this.options.navigator.enabled && !this.options.scrollbar.enabled || (this.scroller = this.navigator = new h(this),
            l(a.redraw, !0) && this.redraw(a.animation))
        }),
        q(f, "afterAddSeries", function() {
            this.navigator && this.navigator.setBaseSeries(null, !1)
        }),
        q(t, "afterUpdate", function() {
            this.chart.navigator && !this.options.isInternal && this.chart.navigator.setBaseSeries(null, !1)
        }),
        f.prototype.callbacks.push(function(a) {
            var b = a.navigator;
            b && a.xAxis[0] && (a = a.xAxis[0].getExtremes(),
            b.render(a.min, a.max))
        }));
        F.Navigator = h;
        return F.Navigator
    });
    O(f, "Extensions/RangeSelector.js", [f["Core/Axis/Axis.js"], f["Core/Chart/Chart.js"], f["Core/Globals.js"], f["Core/DefaultOptions.js"], f["Core/Renderer/SVG/SVGElement.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E) {
        function D(a) {
            if (-1 !== a.indexOf("%L"))
                return "text";
            var b = "aAdewbBmoyY".split("").some(function(b) {
                return -1 !== a.indexOf("%" + b)
            })
              , c = "HkIlMS".split("").some(function(b) {
                return -1 !== a.indexOf("%" + b)
            });
            return b && c ? "datetime-local" : b ? "date" : c ? "time" : "text"
        }
        var w = F.defaultOptions
          , t = E.addEvent
          , r = E.createElement
          , a = E.css
          , d = E.defined
          , g = E.destroyObjectProperties
          , m = E.discardElement
          , q = E.extend
          , x = E.find
          , J = E.fireEvent
          , I = E.isNumber
          , M = E.merge
          , K = E.objectEach
          , C = E.pad
          , A = E.pick
          , y = E.pInt
          , n = E.splat;
        q(w, {
            rangeSelector: {
                allButtonsEnabled: !1,
                buttons: void 0,
                buttonSpacing: 5,
                dropdown: "responsive",
                enabled: void 0,
                verticalAlign: "top",
                buttonTheme: {
                    width: 28,
                    height: 18,
                    padding: 2,
                    zIndex: 7
                },
                floating: !1,
                x: 0,
                y: 0,
                height: void 0,
                inputBoxBorderColor: "none",
                inputBoxHeight: 17,
                inputBoxWidth: void 0,
                inputDateFormat: "%b %e, %Y",
                inputDateParser: void 0,
                inputEditDateFormat: "%Y-%m-%d",
                inputEnabled: !0,
                inputPosition: {
                    align: "right",
                    x: 0,
                    y: 0
                },
                inputSpacing: 5,
                selected: void 0,
                buttonPosition: {
                    align: "left",
                    x: 0,
                    y: 0
                },
                inputStyle: {
                    color: "#335cad",
                    cursor: "pointer"
                },
                labelStyle: {
                    color: "#666666"
                }
            }
        });
        q(w.lang, {
            rangeSelectorZoom: "Zoom",
            rangeSelectorFrom: "",
            rangeSelectorTo: "\u2192"
        });
        var u = function() {
            function e(a) {
                this.buttons = void 0;
                this.buttonOptions = e.prototype.defaultButtons;
                this.initialButtonGroupWidth = 0;
                this.options = void 0;
                this.chart = a;
                this.init(a)
            }
            e.prototype.clickButton = function(a, e) {
                var b = this.chart
                  , f = this.buttonOptions[a]
                  , h = b.xAxis[0]
                  , g = b.scroller && b.scroller.getUnionExtremes() || h || {}
                  , k = g.dataMin
                  , l = g.dataMax
                  , m = h && Math.round(Math.min(h.max, A(l, h.max)))
                  , q = f.type;
                g = f._range;
                var r, u = f.dataGrouping;
                var y = !0;
                if (null !== k && null !== l) {
                    b.fixedRange = g;
                    this.setSelected(a);
                    u && (this.forcedDataGrouping = !0,
                    c.prototype.setDataGrouping.call(h || {
                        chart: this.chart
                    }, u, !1),
                    this.frozenStates = f.preserveDataGrouping);
                    if ("month" === q || "year" === q)
                        if (h) {
                            y = {
                                range: f,
                                max: m,
                                chart: b,
                                dataMin: k,
                                dataMax: l
                            };
                            var w = h.minFromRange.call(y);
                            I(y.newMax) && (m = y.newMax);
                            y = !1
                        } else
                            g = f;
                    else if (g)
                        w = Math.max(m - g, k),
                        m = Math.min(w + g, l),
                        y = !1;
                    else if ("ytd" === q)
                        if (h) {
                            if ("undefined" === typeof l || "undefined" === typeof k)
                                k = Number.MAX_VALUE,
                                l = Number.MIN_VALUE,
                                b.series.forEach(function(a) {
                                    if (a = a.xData)
                                        k = Math.min(a[0], k),
                                        l = Math.max(a[a.length - 1], l)
                                }),
                                e = !1;
                            m = this.getYTDExtremes(l, k, b.time.useUTC);
                            w = r = m.min;
                            m = m.max
                        } else {
                            this.deferredYTDClick = a;
                            return
                        }
                    else
                        "all" === q && h && (b.navigator && b.navigator.baseSeries[0] && (b.navigator.baseSeries[0].xAxis.options.range = void 0),
                        w = k,
                        m = l);
                    y && f._offsetMin && d(w) && (w += f._offsetMin);
                    f._offsetMax && d(m) && (m += f._offsetMax);
                    this.dropdown && (this.dropdown.selectedIndex = a + 1);
                    if (h)
                        h.setExtremes(w, m, A(e, !0), void 0, {
                            trigger: "rangeSelectorButton",
                            rangeSelectorButton: f
                        });
                    else {
                        var x = n(b.options.xAxis)[0];
                        var z = x.range;
                        x.range = g;
                        var B = x.min;
                        x.min = r;
                        t(b, "load", function() {
                            x.range = z;
                            x.min = B
                        })
                    }
                    J(this, "afterBtnClick")
                }
            }
            ;
            e.prototype.setSelected = function(a) {
                this.selected = this.options.selected = a
            }
            ;
            e.prototype.init = function(a) {
                var b = this
                  , c = a.options.rangeSelector
                  , d = c.buttons || b.defaultButtons.slice()
                  , e = c.selected
                  , f = function() {
                    var a = b.minInput
                      , c = b.maxInput;
                    a && a.blur && J(a, "blur");
                    c && c.blur && J(c, "blur")
                };
                b.chart = a;
                b.options = c;
                b.buttons = [];
                b.buttonOptions = d;
                this.eventsToUnbind = [];
                this.eventsToUnbind.push(t(a.container, "mousedown", f));
                this.eventsToUnbind.push(t(a, "resize", f));
                d.forEach(b.computeButtonRange);
                "undefined" !== typeof e && d[e] && this.clickButton(e, !1);
                this.eventsToUnbind.push(t(a, "load", function() {
                    a.xAxis && a.xAxis[0] && t(a.xAxis[0], "setExtremes", function(c) {
                        this.max - this.min !== a.fixedRange && "rangeSelectorButton" !== c.trigger && "updatedData" !== c.trigger && b.forcedDataGrouping && !b.frozenStates && this.setDataGrouping(!1, !1)
                    })
                }))
            }
            ;
            e.prototype.updateButtonStates = function() {
                var a = this
                  , c = this.chart
                  , d = this.dropdown
                  , e = c.xAxis[0]
                  , f = Math.round(e.max - e.min)
                  , g = !e.hasVisibleSeries
                  , k = c.scroller && c.scroller.getUnionExtremes() || e
                  , l = k.dataMin
                  , m = k.dataMax;
                c = a.getYTDExtremes(m, l, c.time.useUTC);
                var n = c.min
                  , q = c.max
                  , r = a.selected
                  , t = I(r)
                  , u = a.options.allButtonsEnabled
                  , y = a.buttons;
                a.buttonOptions.forEach(function(b, c) {
                    var h = b._range
                      , k = b.type
                      , p = b.count || 1
                      , v = y[c]
                      , w = 0
                      , x = b._offsetMax - b._offsetMin;
                    b = c === r;
                    var z = h > m - l
                      , G = h < e.minRange
                      , B = !1
                      , A = !1;
                    h = h === f;
                    ("month" === k || "year" === k) && f + 36E5 >= 864E5 * {
                        month: 28,
                        year: 365
                    }[k] * p - x && f - 36E5 <= 864E5 * {
                        month: 31,
                        year: 366
                    }[k] * p + x ? h = !0 : "ytd" === k ? (h = q - n + x === f,
                    B = !b) : "all" === k && (h = e.max - e.min >= m - l,
                    A = !b && t && h);
                    k = !u && (z || G || A || g);
                    p = b && h || h && !t && !B || b && a.frozenStates;
                    k ? w = 3 : p && (t = !0,
                    w = 2);
                    v.state !== w && (v.setState(w),
                    d && (d.options[c + 1].disabled = k,
                    2 === w && (d.selectedIndex = c + 1)),
                    0 === w && r === c && a.setSelected())
                })
            }
            ;
            e.prototype.computeButtonRange = function(a) {
                var b = a.type
                  , c = a.count || 1
                  , d = {
                    millisecond: 1,
                    second: 1E3,
                    minute: 6E4,
                    hour: 36E5,
                    day: 864E5,
                    week: 6048E5
                };
                if (d[b])
                    a._range = d[b] * c;
                else if ("month" === b || "year" === b)
                    a._range = 864E5 * {
                        month: 30,
                        year: 365
                    }[b] * c;
                a._offsetMin = A(a.offsetMin, 0);
                a._offsetMax = A(a.offsetMax, 0);
                a._range += a._offsetMax - a._offsetMin
            }
            ;
            e.prototype.getInputValue = function(a) {
                a = "min" === a ? this.minInput : this.maxInput;
                var b = this.chart.options.rangeSelector
                  , c = this.chart.time;
                return a ? ("text" === a.type && b.inputDateParser || this.defaultInputDateParser)(a.value, c.useUTC, c) : 0
            }
            ;
            e.prototype.setInputValue = function(a, c) {
                var b = this.options
                  , e = this.chart.time
                  , f = "min" === a ? this.minInput : this.maxInput;
                a = "min" === a ? this.minDateBox : this.maxDateBox;
                if (f) {
                    var h = f.getAttribute("data-hc-time");
                    h = d(h) ? Number(h) : void 0;
                    d(c) && (d(h) && f.setAttribute("data-hc-time-previous", h),
                    f.setAttribute("data-hc-time", c),
                    h = c);
                    f.value = e.dateFormat(this.inputTypeFormats[f.type] || b.inputEditDateFormat, h);
                    a && a.attr({
                        text: e.dateFormat(b.inputDateFormat, h)
                    })
                }
            }
            ;
            e.prototype.setInputExtremes = function(a, c, d) {
                if (a = "min" === a ? this.minInput : this.maxInput) {
                    var b = this.inputTypeFormats[a.type]
                      , e = this.chart.time;
                    b && (c = e.dateFormat(b, c),
                    a.min !== c && (a.min = c),
                    d = e.dateFormat(b, d),
                    a.max !== d && (a.max = d))
                }
            }
            ;
            e.prototype.showInput = function(b) {
                var c = "min" === b ? this.minDateBox : this.maxDateBox;
                if ((b = "min" === b ? this.minInput : this.maxInput) && c && this.inputGroup) {
                    var d = "text" === b.type
                      , e = this.inputGroup
                      , f = e.translateX;
                    e = e.translateY;
                    var g = this.options.inputBoxWidth;
                    a(b, {
                        width: d ? c.width + (g ? -2 : 20) + "px" : "auto",
                        height: d ? c.height - 2 + "px" : "auto",
                        border: "0.125em solid silver"
                    });
                    d && g ? a(b, {
                        left: f + c.x + "px",
                        top: e + "px"
                    }) : a(b, {
                        left: Math.min(Math.round(c.x + f - (b.offsetWidth - c.width) / 2), this.chart.chartWidth - b.offsetWidth) + "px",
                        top: e - (b.offsetHeight - c.height) / 2 + "px"
                    })
                }
            }
            ;
            e.prototype.hideInput = function(b) {
                (b = "min" === b ? this.minInput : this.maxInput) && a(b, {
                    top: "-9999em",
                    border: 0,
                    width: "0.063em",
                    height: "0.063em"
                })
            }
            ;
            e.prototype.defaultInputDateParser = function(a, c, d) {
                var b = a.split("/").join("-").split(" ").join("T");
                -1 === b.indexOf("T") && (b += "T00:00");
                if (c)
                    b += "Z";
                else {
                    var e;
                    if (e = B.isSafari)
                        e = b,
                        e = !(6 < e.length && (e.lastIndexOf("-") === e.length - 6 || e.lastIndexOf("+") === e.length - 6));
                    e && (e = (new Date(b)).getTimezoneOffset() / 60,
                    b += 0 >= e ? "+".concat(C(-e), ":00") : "-".concat(C(e), ":00"))
                }
                b = Date.parse(b);
                I(b) || (a = a.split("-"),
                b = Date.UTC(y(a[0]), y(a[1]) - 1, y(a[2])));
                d && c && I(b) && (b += d.getTimezoneOffset(b));
                return b
            }
            ;
            e.prototype.drawInput = function(b) {
                function c() {
                    var a = g.getInputValue(b)
                      , c = d.xAxis[0]
                      , e = d.scroller && d.scroller.xAxis ? d.scroller.xAxis : c
                      , f = e.dataMin;
                    e = e.dataMax;
                    var h = g.maxInput
                      , k = g.minInput;
                    a !== Number(u.getAttribute("data-hc-time-previous")) && I(a) && (u.setAttribute("data-hc-time-previous", a),
                    n && h && I(f) ? a > Number(h.getAttribute("data-hc-time")) ? a = void 0 : a < f && (a = f) : k && I(e) && (a < Number(k.getAttribute("data-hc-time")) ? a = void 0 : a > e && (a = e)),
                    "undefined" !== typeof a && c.setExtremes(n ? a : c.min, n ? c.max : a, void 0, void 0, {
                        trigger: "rangeSelectorInput"
                    }))
                }
                var d = this.chart
                  , e = this.div
                  , f = this.inputGroup
                  , g = this
                  , k = d.renderer.style || {}
                  , l = d.renderer
                  , m = d.options.rangeSelector
                  , n = "min" === b
                  , t = w.lang[n ? "rangeSelectorFrom" : "rangeSelectorTo"] || "";
                t = l.label(t, 0).addClass("highcharts-range-label").attr({
                    padding: t ? 2 : 0,
                    height: t ? m.inputBoxHeight : 0
                }).add(f);
                l = l.label("", 0).addClass("highcharts-range-input").attr({
                    padding: 2,
                    width: m.inputBoxWidth,
                    height: m.inputBoxHeight,
                    "text-align": "center"
                }).on("click", function() {
                    g.showInput(b);
                    g[b + "Input"].focus()
                });
                d.styledMode || l.attr({
                    stroke: m.inputBoxBorderColor,
                    "stroke-width": 1
                });
                l.add(f);
                var u = r("input", {
                    name: b,
                    className: "highcharts-range-selector"
                }, void 0, e);
                u.setAttribute("type", D(m.inputDateFormat || "%b %e, %Y"));
                d.styledMode || (t.css(M(k, m.labelStyle)),
                l.css(M({
                    color: "#333333"
                }, k, m.inputStyle)),
                a(u, q({
                    position: "absolute",
                    border: 0,
                    boxShadow: "0 0 0.938em rgba(0,0,0,0.3)",
                    width: "0.063em",
                    height: "0.063em",
                    padding: 0,
                    textAlign: "center",
                    fontSize: k.fontSize,
                    fontFamily: k.fontFamily,
                    top: "-9999em"
                }, m.inputStyle)));
                u.onfocus = function() {
                    g.showInput(b)
                }
                ;
                u.onblur = function() {
                    u === B.doc.activeElement && c();
                    g.hideInput(b);
                    g.setInputValue(b);
                    u.blur()
                }
                ;
                var y = !1;
                u.onchange = function() {
                    y || (c(),
                    g.hideInput(b),
                    u.blur())
                }
                ;
                u.onkeypress = function(a) {
                    13 === a.keyCode && c()
                }
                ;
                u.onkeydown = function(a) {
                    y = !0;
                    38 !== a.keyCode && 40 !== a.keyCode || c()
                }
                ;
                u.onkeyup = function() {
                    y = !1
                }
                ;
                return {
                    dateBox: l,
                    input: u,
                    label: t
                }
            }
            ;
            e.prototype.getPosition = function() {
                var a = this.chart
                  , c = a.options.rangeSelector;
                a = "top" === c.verticalAlign ? a.plotTop - a.axisOffset[0] : 0;
                return {
                    buttonTop: a + c.buttonPosition.y,
                    inputTop: a + c.inputPosition.y - 10
                }
            }
            ;
            e.prototype.getYTDExtremes = function(a, c, d) {
                var b = this.chart.time
                  , e = new b.Date(a)
                  , f = b.get("FullYear", e);
                d = d ? b.Date.UTC(f, 0, 1) : +new b.Date(f,0,1);
                c = Math.max(c, d);
                e = e.getTime();
                return {
                    max: Math.min(a || e, e),
                    min: c
                }
            }
            ;
            e.prototype.render = function(a, c) {
                var b = this.chart
                  , e = b.renderer
                  , f = b.container
                  , h = b.options
                  , g = h.rangeSelector
                  , k = A(h.chart.style && h.chart.style.zIndex, 0) + 1;
                h = g.inputEnabled;
                if (!1 !== g.enabled) {
                    this.rendered || (this.group = e.g("range-selector-group").attr({
                        zIndex: 7
                    }).add(),
                    this.div = r("div", void 0, {
                        position: "relative",
                        height: 0,
                        zIndex: k
                    }),
                    this.buttonOptions.length && this.renderButtons(),
                    f.parentNode && f.parentNode.insertBefore(this.div, f),
                    h && (this.inputGroup = e.g("input-group").add(this.group),
                    e = this.drawInput("min"),
                    this.minDateBox = e.dateBox,
                    this.minLabel = e.label,
                    this.minInput = e.input,
                    e = this.drawInput("max"),
                    this.maxDateBox = e.dateBox,
                    this.maxLabel = e.label,
                    this.maxInput = e.input));
                    if (h && (this.setInputValue("min", a),
                    this.setInputValue("max", c),
                    a = b.scroller && b.scroller.getUnionExtremes() || b.xAxis[0] || {},
                    d(a.dataMin) && d(a.dataMax) && (b = b.xAxis[0].minRange || 0,
                    this.setInputExtremes("min", a.dataMin, Math.min(a.dataMax, this.getInputValue("max")) - b),
                    this.setInputExtremes("max", Math.max(a.dataMin, this.getInputValue("min")) + b, a.dataMax)),
                    this.inputGroup)) {
                        var l = 0;
                        [this.minLabel, this.minDateBox, this.maxLabel, this.maxDateBox].forEach(function(a) {
                            if (a) {
                                var b = a.getBBox().width;
                                b && (a.attr({
                                    x: l
                                }),
                                l += b + g.inputSpacing)
                            }
                        })
                    }
                    this.alignElements();
                    this.rendered = !0
                }
            }
            ;
            e.prototype.renderButtons = function() {
                var a = this
                  , c = this.buttons
                  , d = this.options
                  , e = w.lang
                  , f = this.chart.renderer
                  , g = M(d.buttonTheme)
                  , k = g && g.states
                  , l = g.width || 28;
                delete g.width;
                delete g.states;
                this.buttonGroup = f.g("range-selector-buttons").add(this.group);
                var m = this.dropdown = r("select", void 0, {
                    position: "absolute",
                    width: "0.063em",
                    height: "0.063em",
                    padding: 0,
                    border: 0,
                    top: "-9999em",
                    cursor: "pointer",
                    opacity: .0001
                }, this.div);
                t(m, "touchstart", function() {
                    m.style.fontSize = "1em"
                });
                [[B.isMS ? "mouseover" : "mouseenter"], [B.isMS ? "mouseout" : "mouseleave"], ["change", "click"]].forEach(function(b) {
                    var d = b[0]
                      , e = b[1];
                    t(m, d, function() {
                        var b = c[a.currentButtonIndex()];
                        b && J(b.element, e || d)
                    })
                });
                this.zoomText = f.label(e && e.rangeSelectorZoom || "", 0).attr({
                    padding: d.buttonTheme.padding,
                    height: d.buttonTheme.height,
                    paddingLeft: 0,
                    paddingRight: 0
                }).add(this.buttonGroup);
                this.chart.styledMode || (this.zoomText.css(d.labelStyle),
                g["stroke-width"] = A(g["stroke-width"], 0));
                r("option", {
                    textContent: this.zoomText.textStr,
                    disabled: !0
                }, void 0, m);
                this.buttonOptions.forEach(function(b, d) {
                    r("option", {
                        textContent: b.title || b.text
                    }, void 0, m);
                    c[d] = f.button(b.text, 0, 0, function(c) {
                        var e = b.events && b.events.click, f;
                        e && (f = e.call(b, c));
                        !1 !== f && a.clickButton(d);
                        a.isActive = !0
                    }, g, k && k.hover, k && k.select, k && k.disabled).attr({
                        "text-align": "center",
                        width: l
                    }).add(a.buttonGroup);
                    b.title && c[d].attr("title", b.title)
                })
            }
            ;
            e.prototype.alignElements = function() {
                var a = this
                  , c = this.buttonGroup
                  , d = this.buttons
                  , e = this.chart
                  , f = this.group
                  , g = this.inputGroup
                  , k = this.options
                  , l = this.zoomText
                  , m = e.options
                  , n = m.exporting && !1 !== m.exporting.enabled && m.navigation && m.navigation.buttonOptions;
                m = k.buttonPosition;
                var q = k.inputPosition
                  , r = k.verticalAlign
                  , t = function(b, c) {
                    return n && a.titleCollision(e) && "top" === r && "right" === c.align && c.y - b.getBBox().height - 12 < (n.y || 0) + (n.height || 0) + e.spacing[0] ? -40 : 0
                }
                  , u = e.plotLeft;
                if (f && m && q) {
                    var y = m.x - e.spacing[3];
                    if (c) {
                        this.positionButtons();
                        if (!this.initialButtonGroupWidth) {
                            var w = 0;
                            l && (w += l.getBBox().width + 5);
                            d.forEach(function(a, b) {
                                w += a.width;
                                b !== d.length - 1 && (w += k.buttonSpacing)
                            });
                            this.initialButtonGroupWidth = w
                        }
                        u -= e.spacing[3];
                        this.updateButtonStates();
                        l = t(c, m);
                        this.alignButtonGroup(l);
                        f.placed = c.placed = e.hasLoaded
                    }
                    c = 0;
                    g && (c = t(g, q),
                    "left" === q.align ? y = u : "right" === q.align && (y = -Math.max(e.axisOffset[1], -c)),
                    g.align({
                        y: q.y,
                        width: g.getBBox().width,
                        align: q.align,
                        x: q.x + y - 2
                    }, !0, e.spacingBox),
                    g.placed = e.hasLoaded);
                    this.handleCollision(c);
                    f.align({
                        verticalAlign: r
                    }, !0, e.spacingBox);
                    g = f.alignAttr.translateY;
                    c = f.getBBox().height + 20;
                    t = 0;
                    "bottom" === r && (t = (t = e.legend && e.legend.options) && "bottom" === t.verticalAlign && t.enabled && !t.floating ? e.legend.legendHeight + A(t.margin, 10) : 0,
                    c = c + t - 20,
                    t = g - c - (k.floating ? 0 : k.y) - (e.titleOffset ? e.titleOffset[2] : 0) - 10);
                    if ("top" === r)
                        k.floating && (t = 0),
                        e.titleOffset && e.titleOffset[0] && (t = e.titleOffset[0]),
                        t += e.margin[0] - e.spacing[0] || 0;
                    else if ("middle" === r)
                        if (q.y === m.y)
                            t = g;
                        else if (q.y || m.y)
                            t = 0 > q.y || 0 > m.y ? t - Math.min(q.y, m.y) : g - c;
                    f.translate(k.x, k.y + Math.floor(t));
                    m = this.minInput;
                    q = this.maxInput;
                    g = this.dropdown;
                    k.inputEnabled && m && q && (m.style.marginTop = f.translateY + "px",
                    q.style.marginTop = f.translateY + "px");
                    g && (g.style.marginTop = f.translateY + "px")
                }
            }
            ;
            e.prototype.alignButtonGroup = function(a, c) {
                var b = this.chart
                  , d = this.buttonGroup
                  , e = this.options.buttonPosition
                  , f = b.plotLeft - b.spacing[3]
                  , g = e.x - b.spacing[3];
                "right" === e.align ? g += a - f : "center" === e.align && (g -= f / 2);
                d && d.align({
                    y: e.y,
                    width: A(c, this.initialButtonGroupWidth),
                    align: e.align,
                    x: g
                }, !0, b.spacingBox)
            }
            ;
            e.prototype.positionButtons = function() {
                var a = this.buttons
                  , c = this.chart
                  , d = this.options
                  , e = this.zoomText
                  , f = c.hasLoaded ? "animate" : "attr"
                  , g = d.buttonPosition
                  , k = c.plotLeft
                  , l = k;
                e && "hidden" !== e.visibility && (e[f]({
                    x: A(k + g.x, k)
                }),
                l += g.x + e.getBBox().width + 5);
                this.buttonOptions.forEach(function(b, c) {
                    if ("hidden" !== a[c].visibility)
                        a[c][f]({
                            x: l
                        }),
                        l += a[c].width + d.buttonSpacing;
                    else
                        a[c][f]({
                            x: k
                        })
                })
            }
            ;
            e.prototype.handleCollision = function(a) {
                var b = this
                  , c = this.chart
                  , d = this.buttonGroup
                  , e = this.inputGroup
                  , f = this.options
                  , g = f.buttonPosition
                  , k = f.dropdown
                  , l = f.inputPosition;
                f = function() {
                    var a = 0;
                    b.buttons.forEach(function(b) {
                        b = b.getBBox();
                        b.width > a && (a = b.width)
                    });
                    return a
                }
                ;
                var m = function(b) {
                    if (e && d) {
                        var c = e.alignAttr.translateX + e.alignOptions.x - a + e.getBBox().x + 2
                          , f = e.alignOptions.width
                          , h = d.alignAttr.translateX + d.getBBox().x;
                        return h + b > c && c + f > h && g.y < l.y + e.getBBox().height
                    }
                    return !1
                }
                  , n = function() {
                    e && d && e.attr({
                        translateX: e.alignAttr.translateX + (c.axisOffset[1] >= -a ? 0 : -a),
                        translateY: e.alignAttr.translateY + d.getBBox().height + 10
                    })
                };
                if (d) {
                    if ("always" === k) {
                        this.collapseButtons(a);
                        m(f()) && n();
                        return
                    }
                    "never" === k && this.expandButtons()
                }
                e && d ? l.align === g.align || m(this.initialButtonGroupWidth + 20) ? "responsive" === k ? (this.collapseButtons(a),
                m(f()) && n()) : n() : "responsive" === k && this.expandButtons() : d && "responsive" === k && (this.initialButtonGroupWidth > c.plotWidth ? this.collapseButtons(a) : this.expandButtons())
            }
            ;
            e.prototype.collapseButtons = function(a) {
                var b = this.buttons
                  , c = this.buttonOptions
                  , d = this.chart
                  , e = this.dropdown
                  , f = this.options
                  , g = this.zoomText
                  , k = d.userOptions.rangeSelector && d.userOptions.rangeSelector.buttonTheme || {}
                  , l = function(a) {
                    return {
                        text: a ? "" + a + " \u25be" : "\u25be",
                        width: "auto",
                        paddingLeft: A(f.buttonTheme.paddingLeft, k.padding, 8),
                        paddingRight: A(f.buttonTheme.paddingRight, k.padding, 8)
                    }
                };
                g && g.hide();
                var m = !1;
                c.forEach(function(a, c) {
                    c = b[c];
                    2 !== c.state ? c.hide() : (c.show(),
                    c.attr(l(a.text)),
                    m = !0)
                });
                m || (e && (e.selectedIndex = 0),
                b[0].show(),
                b[0].attr(l(this.zoomText && this.zoomText.textStr)));
                c = f.buttonPosition.align;
                this.positionButtons();
                "right" !== c && "center" !== c || this.alignButtonGroup(a, b[this.currentButtonIndex()].getBBox().width);
                this.showDropdown()
            }
            ;
            e.prototype.expandButtons = function() {
                var a = this.buttons
                  , c = this.buttonOptions
                  , d = this.options
                  , e = this.zoomText;
                this.hideDropdown();
                e && e.show();
                c.forEach(function(b, c) {
                    c = a[c];
                    c.show();
                    c.attr({
                        text: b.text,
                        width: d.buttonTheme.width || 28,
                        paddingLeft: A(d.buttonTheme.paddingLeft, "unset"),
                        paddingRight: A(d.buttonTheme.paddingRight, "unset")
                    });
                    2 > c.state && c.setState(0)
                });
                this.positionButtons()
            }
            ;
            e.prototype.currentButtonIndex = function() {
                var a = this.dropdown;
                return a && 0 < a.selectedIndex ? a.selectedIndex - 1 : 0
            }
            ;
            e.prototype.showDropdown = function() {
                var b = this.buttonGroup
                  , c = this.buttons
                  , d = this.chart
                  , e = this.dropdown;
                if (b && e) {
                    var f = b.translateX;
                    b = b.translateY;
                    c = c[this.currentButtonIndex()].getBBox();
                    a(e, {
                        left: d.plotLeft + f + "px",
                        top: b + .5 + "px",
                        width: c.width + "px",
                        height: c.height + "px"
                    });
                    this.hasVisibleDropdown = !0
                }
            }
            ;
            e.prototype.hideDropdown = function() {
                var b = this.dropdown;
                b && (a(b, {
                    top: "-9999em",
                    width: "0.063em",
                    height: "0.063em"
                }),
                this.hasVisibleDropdown = !1)
            }
            ;
            e.prototype.getHeight = function() {
                var a = this.options
                  , c = this.group
                  , d = a.y
                  , e = a.buttonPosition.y
                  , f = a.inputPosition.y;
                if (a.height)
                    return a.height;
                this.alignElements();
                a = c ? c.getBBox(!0).height + 13 + d : 0;
                c = Math.min(f, e);
                if (0 > f && 0 > e || 0 < f && 0 < e)
                    a += Math.abs(c);
                return a
            }
            ;
            e.prototype.titleCollision = function(a) {
                return !(a.options.title.text || a.options.subtitle.text)
            }
            ;
            e.prototype.update = function(a) {
                var b = this.chart;
                M(!0, b.options.rangeSelector, a);
                this.destroy();
                this.init(b);
                this.render()
            }
            ;
            e.prototype.destroy = function() {
                var a = this
                  , c = a.minInput
                  , d = a.maxInput;
                a.eventsToUnbind && (a.eventsToUnbind.forEach(function(a) {
                    return a()
                }),
                a.eventsToUnbind = void 0);
                g(a.buttons);
                c && (c.onfocus = c.onblur = c.onchange = null);
                d && (d.onfocus = d.onblur = d.onchange = null);
                K(a, function(b, c) {
                    b && "chart" !== c && (b instanceof z ? b.destroy() : b instanceof V.HTMLElement && m(b));
                    b !== e.prototype[c] && (a[c] = null)
                }, this)
            }
            ;
            return e
        }();
        u.prototype.defaultButtons = [{
            type: "month",
            count: 1,
            text: "1m",
            title: "View 1 month"
        }, {
            type: "month",
            count: 3,
            text: "3m",
            title: "View 3 months"
        }, {
            type: "month",
            count: 6,
            text: "6m",
            title: "View 6 months"
        }, {
            type: "ytd",
            text: "YTD",
            title: "View year to date"
        }, {
            type: "year",
            count: 1,
            text: "1y",
            title: "View 1 year"
        }, {
            type: "all",
            text: "All",
            title: "View all"
        }];
        u.prototype.inputTypeFormats = {
            "datetime-local": "%Y-%m-%dT%H:%M:%S",
            date: "%Y-%m-%d",
            time: "%H:%M:%S"
        };
        c.prototype.minFromRange = function() {
            var a = this.range
              , b = a.type
              , c = this.max
              , d = this.chart.time
              , f = function(a, c) {
                var e = "year" === b ? "FullYear" : "Month"
                  , f = new d.Date(a)
                  , g = d.get(e, f);
                d.set(e, f, g + c);
                g === d.get(e, f) && d.set("Date", f, 0);
                return f.getTime() - a
            };
            if (I(a)) {
                var g = c - a;
                var k = a
            } else
                a && (g = c + f(c, -(a.count || 1)),
                this.chart && (this.chart.fixedRange = c - g));
            var l = A(this.dataMin, Number.MIN_VALUE);
            I(g) || (g = l);
            g <= l && (g = l,
            "undefined" === typeof k && (k = f(g, a.count)),
            this.newMax = Math.min(g + k, A(this.dataMax, Number.MAX_VALUE)));
            I(c) ? !I(a) && a && a._offsetMin && (g += a._offsetMin) : g = void 0;
            return g
        }
        ;
        if (!B.RangeSelector) {
            var l = []
              , k = function(a) {
                function b() {
                    d && (c = a.xAxis[0].getExtremes(),
                    e = a.legend,
                    g = d && d.options.verticalAlign,
                    I(c.min) && d.render(c.min, c.max),
                    e.display && "top" === g && g === e.options.verticalAlign && (f = M(a.spacingBox),
                    f.y = "vertical" === e.options.layout ? a.plotTop : f.y + d.getHeight(),
                    e.group.placed = !1,
                    e.align(f)))
                }
                var c, d = a.rangeSelector, e, f, g;
                d && (x(l, function(b) {
                    return b[0] === a
                }) || l.push([a, [t(a.xAxis[0], "afterSetExtremes", function(a) {
                    d && d.render(a.min, a.max)
                }), t(a, "redraw", b)]]),
                b())
            };
            t(f, "afterGetContainer", function() {
                this.options.rangeSelector && this.options.rangeSelector.enabled && (this.rangeSelector = new u(this))
            });
            t(f, "beforeRender", function() {
                var a = this.axes
                  , b = this.rangeSelector;
                b && (I(b.deferredYTDClick) && (b.clickButton(b.deferredYTDClick),
                delete b.deferredYTDClick),
                a.forEach(function(a) {
                    a.updateNames();
                    a.setScale()
                }),
                this.getAxisMargins(),
                b.render(),
                a = b.options.verticalAlign,
                b.options.floating || ("bottom" === a ? this.extraBottomMargin = !0 : "middle" !== a && (this.extraTopMargin = !0)))
            });
            t(f, "update", function(a) {
                var b = a.options.rangeSelector;
                a = this.rangeSelector;
                var c = this.extraBottomMargin
                  , e = this.extraTopMargin;
                b && b.enabled && !d(a) && this.options.rangeSelector && (this.options.rangeSelector.enabled = !0,
                this.rangeSelector = a = new u(this));
                this.extraTopMargin = this.extraBottomMargin = !1;
                a && (k(this),
                b = b && b.verticalAlign || a.options && a.options.verticalAlign,
                a.options.floating || ("bottom" === b ? this.extraBottomMargin = !0 : "middle" !== b && (this.extraTopMargin = !0)),
                this.extraBottomMargin !== c || this.extraTopMargin !== e) && (this.isDirtyBox = !0)
            });
            t(f, "render", function() {
                var a = this.rangeSelector;
                a && !a.options.floating && (a.render(),
                a = a.options.verticalAlign,
                "bottom" === a ? this.extraBottomMargin = !0 : "middle" !== a && (this.extraTopMargin = !0))
            });
            t(f, "getMargins", function() {
                var a = this.rangeSelector;
                a && (a = a.getHeight(),
                this.extraTopMargin && (this.plotTop += a),
                this.extraBottomMargin && (this.marginBottom += a))
            });
            f.prototype.callbacks.push(k);
            t(f, "destroy", function() {
                for (var a = 0; a < l.length; a++) {
                    var b = l[a];
                    if (b[0] === this) {
                        b[1].forEach(function(a) {
                            return a()
                        });
                        l.splice(a, 1);
                        break
                    }
                }
            });
            B.RangeSelector = u
        }
        return u
    });
    O(f, "Core/Chart/StockChart.js", [f["Core/Animation/AnimationUtilities.js"], f["Core/Axis/Axis.js"], f["Core/Chart/Chart.js"], f["Core/FormatUtilities.js"], f["Core/DefaultOptions.js"], f["Core/Series/Series.js"], f["Core/Renderer/SVG/SVGRenderer.js"], f["Core/Utilities.js"]], function(c, f, B, F, z, E, H, w) {
        function t(a, c) {
            return "xAxis" === a ? {
                minPadding: 0,
                maxPadding: 0,
                overscroll: 0,
                ordinal: !0,
                title: {
                    text: null
                },
                labels: {
                    overflow: "justify"
                },
                showLastLabel: !0
            } : "yAxis" === a ? {
                labels: {
                    y: -2
                },
                opposite: C(c.opposite, !0),
                showLastLabel: !(!c.categories && "category" !== c.type),
                title: {
                    text: null
                }
            } : {}
        }
        function r(a, c) {
            if ("xAxis" === a) {
                a = g();
                var d = {
                    type: "datetime",
                    categories: void 0
                };
                C(c.navigator && c.navigator.enabled, a.navigator.enabled, !0) && (d.startOnTick = !1,
                d.endOnTick = !1);
                return d
            }
            return {}
        }
        var a = this && this.__extends || function() {
            var a = function(c, d) {
                a = Object.setPrototypeOf || {
                    __proto__: []
                }instanceof Array && function(a, c) {
                    a.__proto__ = c
                }
                || function(a, c) {
                    for (var d in c)
                        c.hasOwnProperty(d) && (a[d] = c[d])
                }
                ;
                return a(c, d)
            };
            return function(c, d) {
                function f() {
                    this.constructor = c
                }
                a(c, d);
                c.prototype = null === d ? Object.create(d) : (f.prototype = d.prototype,
                new f)
            }
        }()
          , d = F.format
          , g = z.getOptions;
        c = w.addEvent;
        var m = w.clamp
          , q = w.defined
          , x = w.extend
          , D = w.find
          , I = w.isNumber
          , M = w.isString
          , K = w.merge
          , C = w.pick
          , A = w.splat;
        w = function(c) {
            function d() {
                return null !== c && c.apply(this, arguments) || this
            }
            a(d, c);
            d.prototype.init = function(a, d) {
                var f = g()
                  , e = a.xAxis
                  , b = a.yAxis
                  , h = C(a.navigator && a.navigator.enabled, f.navigator.enabled, !0);
                a.xAxis = a.yAxis = void 0;
                h = K({
                    chart: {
                        panning: {
                            enabled: !0,
                            type: "x"
                        },
                        zooming: {
                            pinchType: "x"
                        }
                    },
                    navigator: {
                        enabled: h
                    },
                    scrollbar: {
                        enabled: C(f.scrollbar && f.scrollbar.enabled, !0)
                    },
                    rangeSelector: {
                        enabled: C(f.rangeSelector.enabled, !0)
                    },
                    title: {
                        text: null
                    },
                    tooltip: {
                        split: C(f.tooltip.split, !0),
                        crosshairs: !0
                    },
                    legend: {
                        enabled: !1
                    }
                }, a, {
                    isStock: !0
                });
                a.xAxis = e;
                a.yAxis = b;
                h.xAxis = A(a.xAxis || {}).map(function(b, c) {
                    return K(t("xAxis", b), f.xAxis, f.xAxis && f.xAxis[c], b, r("xAxis", a))
                });
                h.yAxis = A(a.yAxis || {}).map(function(a, b) {
                    return K(t("yAxis", a), f.yAxis, f.yAxis && f.yAxis[b], a)
                });
                c.prototype.init.call(this, h, d)
            }
            ;
            d.prototype.createAxis = function(a, d) {
                d.axis = K(t(a, d.axis), d.axis, r(a, this.userOptions));
                return c.prototype.createAxis.call(this, a, d)
            }
            ;
            return d
        }(B);
        (function(a) {
            a.stockChart = function(c, d, f) {
                return new a(c,d,f)
            }
        }
        )(w || (w = {}));
        c(E, "setOptions", function(a) {
            var c;
            this.chart.options.isStock && (this.is("column") || this.is("columnrange") ? c = {
                borderWidth: 0,
                shadow: !1
            } : this.is("scatter") || this.is("sma") || (c = {
                marker: {
                    enabled: !1,
                    radius: 2
                }
            }),
            c && (a.plotOptions[this.type] = K(a.plotOptions[this.type], c)))
        });
        c(f, "autoLabelAlign", function(a) {
            var c = this.chart
              , d = this.options;
            c = c._labelPanes = c._labelPanes || {};
            var f = this.options.labels;
            this.chart.options.isStock && "yAxis" === this.coll && (d = d.top + "," + d.height,
            !c[d] && f.enabled && (15 === f.x && (f.x = 0),
            "undefined" === typeof f.align && (f.align = "right"),
            c[d] = this,
            a.align = "right",
            a.preventDefault()))
        });
        c(f, "destroy", function() {
            var a = this.chart
              , c = this.options && this.options.top + "," + this.options.height;
            c && a._labelPanes && a._labelPanes[c] === this && delete a._labelPanes[c]
        });
        c(f, "getPlotLinePath", function(a) {
            function c(a) {
                var b = "xAxis" === a ? "yAxis" : "xAxis";
                a = d.options[b];
                return I(a) ? [g[b][a]] : M(a) ? [g.get(a)] : f.map(function(a) {
                    return a[b]
                })
            }
            var d = this, f = this.isLinked && !this.series ? this.linkedParent.series : this.series, g = d.chart, e = g.renderer, b = d.left, h = d.top, r, p, t, w, y = [], x = [], z = a.translatedValue, B = a.value, A = a.force;
            if (g.options.isStock && !1 !== a.acrossPanes && "xAxis" === d.coll || "yAxis" === d.coll) {
                a.preventDefault();
                x = c(d.coll);
                var E = d.isXAxis ? g.yAxis : g.xAxis;
                E.forEach(function(a) {
                    if (q(a.options.id) ? -1 === a.options.id.indexOf("navigator") : 1) {
                        var b = a.isXAxis ? "yAxis" : "xAxis";
                        b = q(a.options[b]) ? g[b][a.options[b]] : g[b][0];
                        d === b && x.push(a)
                    }
                });
                var F = x.length ? [] : [d.isXAxis ? g.yAxis[0] : g.xAxis[0]];
                x.forEach(function(a) {
                    -1 !== F.indexOf(a) || D(F, function(b) {
                        return b.pos === a.pos && b.len === a.len
                    }) || F.push(a)
                });
                var H = C(z, d.translate(B, void 0, void 0, a.old));
                I(H) && (d.horiz ? F.forEach(function(a) {
                    var c;
                    p = a.pos;
                    w = p + a.len;
                    r = t = Math.round(H + d.transB);
                    "pass" !== A && (r < b || r > b + d.width) && (A ? r = t = m(r, b, b + d.width) : c = !0);
                    c || y.push(["M", r, p], ["L", t, w])
                }) : F.forEach(function(a) {
                    var b;
                    r = a.pos;
                    t = r + a.len;
                    p = w = Math.round(h + d.height - H);
                    "pass" !== A && (p < h || p > h + d.height) && (A ? p = w = m(p, h, h + d.height) : b = !0);
                    b || y.push(["M", r, p], ["L", t, w])
                }));
                a.path = 0 < y.length ? e.crispPolyLine(y, a.lineWidth || 1) : null
            }
        });
        H.prototype.crispPolyLine = function(a, c) {
            for (var d = 0; d < a.length; d += 2) {
                var f = a[d]
                  , g = a[d + 1];
                f[1] === g[1] && (f[1] = g[1] = Math.round(f[1]) - c % 2 / 2);
                f[2] === g[2] && (f[2] = g[2] = Math.round(f[2]) + c % 2 / 2)
            }
            return a
        }
        ;
        c(f, "afterHideCrosshair", function() {
            this.crossLabel && (this.crossLabel = this.crossLabel.hide())
        });
        c(f, "afterDrawCrosshair", function(a) {
            var c, f;
            if (this.crosshair && this.crosshair.label && this.crosshair.label.enabled && this.cross && I(this.min) && I(this.max)) {
                var g = this.chart
                  , k = this.logarithmic
                  , e = this.crosshair.label
                  , b = this.horiz
                  , h = this.opposite
                  , m = this.left
                  , p = this.top
                  , q = this.crossLabel
                  , r = e.format
                  , t = ""
                  , w = "inside" === this.options.tickPosition
                  , y = !1 !== this.crosshair.snap
                  , z = 0
                  , A = a.e || this.cross && this.cross.e;
                a = a.point;
                var B = this.min
                  , D = this.max;
                k && (B = k.lin2log(B),
                D = k.lin2log(D));
                k = b ? "center" : h ? "right" === this.labelAlign ? "right" : "left" : "left" === this.labelAlign ? "left" : "center";
                q || (q = this.crossLabel = g.renderer.label("", 0, void 0, e.shape || "callout").addClass("highcharts-crosshair-label highcharts-color-" + (a && a.series ? a.series.colorIndex : this.series[0] && this.series[0].colorIndex)).attr({
                    align: e.align || k,
                    padding: C(e.padding, 8),
                    r: C(e.borderRadius, 3),
                    zIndex: 2
                }).add(this.labelGroup),
                g.styledMode || q.attr({
                    fill: e.backgroundColor || a && a.series && a.series.color || "#666666",
                    stroke: e.borderColor || "",
                    "stroke-width": e.borderWidth || 0
                }).css(x({
                    color: "#ffffff",
                    fontWeight: "normal",
                    fontSize: "0.688em",
                    textAlign: "center"
                }, e.style || {})));
                b ? (k = y ? (a.plotX || 0) + m : A.chartX,
                p += h ? 0 : this.height) : (k = h ? this.width + m : 0,
                p = y ? (a.plotY || 0) + p : A.chartY);
                r || e.formatter || (this.dateTime && (t = "%b %d, %Y"),
                r = "{value" + (t ? ":" + t : "") + "}");
                t = y ? this.isXAxis ? a.x : a.y : this.toValue(b ? A.chartX : A.chartY);
                y = a && a.series ? a.series.isPointInside(a) : I(t) && t > B && t < D;
                A = "";
                r ? A = d(r, {
                    value: t
                }, g) : e.formatter && I(t) && (A = e.formatter.call(this, t));
                q.attr({
                    text: A,
                    x: k,
                    y: p,
                    visibility: y ? "inherit" : "hidden"
                });
                e = q.getBBox();
                if (I(q.y))
                    if (b) {
                        if (w && !h || !w && h)
                            p = q.y - e.height
                    } else
                        p = q.y - e.height / 2;
                b ? (c = m - e.x,
                f = m + this.width - e.x) : (c = "left" === this.labelAlign ? m : 0,
                f = "right" === this.labelAlign ? m + this.width : g.chartWidth);
                q.translateX < c && (z = c - q.translateX);
                q.translateX + e.width >= f && (z = -(q.translateX + e.width - f));
                q.attr({
                    x: k + z,
                    y: p,
                    anchorX: b ? k : this.opposite ? 0 : g.chartWidth,
                    anchorY: b ? this.opposite ? g.chartHeight : 0 : p + e.height / 2
                })
            }
        });
        E.prototype.forceCropping = function() {
            var a = this.chart
              , c = this.options.dataGrouping;
            return !1 !== this.allowDG && c && C(c.enabled, a.options.isStock)
        }
        ;
        c(B, "update", function(a) {
            a = a.options;
            "scrollbar"in a && this.navigator && (K(!0, this.options.scrollbar, a.scrollbar),
            this.navigator.update({}, !1),
            delete a.scrollbar)
        });
        return w
    });
    O(f, "masters/modules/stock.src.js", [f["Core/Globals.js"], f["Core/Axis/OrdinalAxis.js"], f["Series/DataModifyComposition.js"], f["Core/Scrollbar.js"], f["Core/Chart/StockChart.js"]], function(c, f, B, F, z) {
        c.Scrollbar = F;
        c.StockChart = c.stockChart = z.stockChart;
        F.compose(c.Axis);
        f.compose(c.Axis, c.Series, c.Chart);
        B.compose(c.Series, c.Axis, c.Point)
    });
    O(f, "masters/highstock.src.js", [f["masters/highcharts.src.js"]], function(c) {
        c.product = "Highstock";
        return c
    });
    f["masters/highstock.src.js"]._modules = f;
    return f["masters/highstock.src.js"]
});
//# sourceMappingURL=highstock.js.map
