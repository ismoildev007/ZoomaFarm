(function (a, h) {
    "object" === typeof exports && "object" === typeof module
        ? (module.exports = h())
        : "function" === typeof define && define.amd
        ? define([], h)
        : "object" === typeof exports
        ? (exports.axios = h())
        : (a.axios = h());
})(this, function () {
    return (function (a) {
        function h(c) {
            if (b[c]) return b[c].exports;
            var d = (b[c] = { exports: {}, id: c, loaded: !1 });
            a[c].call(d.exports, d, d.exports, h);
            d.loaded = !0;
            return d.exports;
        }
        var b = {};
        h.m = a;
        h.c = b;
        h.p = "";
        return h(0);
    })([
        function (a, h, b) {
            a.exports = b(1);
        },
        function (a, h, b) {
            function c(m) {
                m = new e(m);
                var n = g(e.prototype.request, m);
                d.extend(n, e.prototype, m);
                d.extend(n, m);
                return n;
            }
            var d = b(2),
                g = b(3),
                e = b(4),
                k = b(22);
            h = b(10);
            var f = c(h);
            f.Axios = e;
            f.create = function (m) {
                return c(k(f.defaults, m));
            };
            f.Cancel = b(23);
            f.CancelToken = b(24);
            f.isCancel = b(9);
            f.all = function (m) {
                return Promise.all(m);
            };
            f.spread = b(25);
            a.exports = f;
            a.exports.default = f;
        },
        function (a, h, b) {
            function c(l) {
                return "[object Array]" === p.call(l);
            }
            function d(l) {
                return "undefined" === typeof l;
            }
            function g(l) {
                return null !== l && "object" === typeof l;
            }
            function e(l) {
                return "[object Function]" === p.call(l);
            }
            function k(l, t) {
                if (null !== l && "undefined" !== typeof l)
                    if (("object" !== typeof l && (l = [l]), c(l))) for (var r = 0, q = l.length; r < q; r++) t.call(null, l[r], r, l);
                    else for (r in l) Object.prototype.hasOwnProperty.call(l, r) && t.call(null, l[r], r, l);
            }
            function f() {
                function l(u, w) {
                    t[w] = "object" === typeof t[w] && "object" === typeof u ? f(t[w], u) : u;
                }
                for (var t = {}, r = 0, q = arguments.length; r < q; r++) k(arguments[r], l);
                return t;
            }
            function m() {
                function l(u, w) {
                    t[w] = "object" === typeof t[w] && "object" === typeof u ? m(t[w], u) : "object" === typeof u ? m({}, u) : u;
                }
                for (var t = {}, r = 0, q = arguments.length; r < q; r++) k(arguments[r], l);
                return t;
            }
            var n = b(3),
                p = Object.prototype.toString;
            a.exports = {
                isArray: c,
                isArrayBuffer: function (l) {
                    return "[object ArrayBuffer]" === p.call(l);
                },
                isBuffer: function (l) {
                    return null !== l && !d(l) && null !== l.constructor && !d(l.constructor) && "function" === typeof l.constructor.isBuffer && l.constructor.isBuffer(l);
                },
                isFormData: function (l) {
                    return "undefined" !== typeof FormData && l instanceof FormData;
                },
                isArrayBufferView: function (l) {
                    return "undefined" !== typeof ArrayBuffer && ArrayBuffer.isView ? ArrayBuffer.isView(l) : l && l.buffer && l.buffer instanceof ArrayBuffer;
                },
                isString: function (l) {
                    return "string" === typeof l;
                },
                isNumber: function (l) {
                    return "number" === typeof l;
                },
                isObject: g,
                isUndefined: d,
                isDate: function (l) {
                    return "[object Date]" === p.call(l);
                },
                isFile: function (l) {
                    return "[object File]" === p.call(l);
                },
                isBlob: function (l) {
                    return "[object Blob]" === p.call(l);
                },
                isFunction: e,
                isStream: function (l) {
                    return g(l) && e(l.pipe);
                },
                isURLSearchParams: function (l) {
                    return "undefined" !== typeof URLSearchParams && l instanceof URLSearchParams;
                },
                isStandardBrowserEnv: function () {
                    return "undefined" === typeof navigator || ("ReactNative" !== navigator.product && "NativeScript" !== navigator.product && "NS" !== navigator.product)
                        ? "undefined" !== typeof window && "undefined" !== typeof document
                        : !1;
                },
                forEach: k,
                merge: f,
                deepMerge: m,
                extend: function (l, t, r) {
                    k(t, function (q, u) {
                        l[u] = r && "function" === typeof q ? n(q, r) : q;
                    });
                    return l;
                },
                trim: function (l) {
                    return l.replace(/^\s*/, "").replace(/\s*$/, "");
                },
            };
        },
        function (a, h) {
            a.exports = function (b, c) {
                return function () {
                    for (var d = Array(arguments.length), g = 0; g < d.length; g++) d[g] = arguments[g];
                    return b.apply(c, d);
                };
            };
        },
        function (a, h, b) {
            function c(m) {
                this.defaults = m;
                this.interceptors = { request: new e(), response: new e() };
            }
            var d = b(2),
                g = b(5),
                e = b(6),
                k = b(7),
                f = b(22);
            c.prototype.request = function (m, n) {
                "string" === typeof m ? ((m = n || {}), (m.url = m)) : (m = m || {});
                m = f(this.defaults, m);
                m.method = m.method ? m.method.toLowerCase() : this.defaults.method ? this.defaults.method.toLowerCase() : "get";
                var p = [k, void 0];
                m = Promise.resolve(m);
                this.interceptors.request.forEach(function (l) {
                    p.unshift(l.fulfilled, l.rejected);
                });
                for (
                    this.interceptors.response.forEach(function (l) {
                        p.push(l.fulfilled, l.rejected);
                    });
                    p.length;

                )
                    m = m.then(p.shift(), p.shift());
                return m;
            };
            c.prototype.getUri = function (m) {
                m = f(this.defaults, m);
                return g(m.url, m.params, m.paramsSerializer).replace(/^\?/, "");
            };
            d.forEach(["delete", "get", "head", "options"], function (m) {
                c.prototype[m] = function (n, p) {
                    return this.request(d.merge(p || {}, { method: m, url: n }));
                };
            });
            d.forEach(["post", "put", "patch"], function (m) {
                c.prototype[m] = function (n, p, l) {
                    return this.request(d.merge(l || {}, { method: m, url: n, data: p }));
                };
            });
            a.exports = c;
        },
        function (a, h, b) {
            function c(g) {
                return encodeURIComponent(g).replace(/%40/gi, "@").replace(/%3A/gi, ":").replace(/%24/g, "$").replace(/%2C/gi, ",").replace(/%20/g, "+").replace(/%5B/gi, "[").replace(/%5D/gi, "]");
            }
            var d = b(2);
            a.exports = function (g, e, k) {
                if (!e) return g;
                if (k) e = k(e);
                else if (d.isURLSearchParams(e)) e = e.toString();
                else {
                    var f = [];
                    d.forEach(e, function (m, n) {
                        null !== m &&
                            "undefined" !== typeof m &&
                            (d.isArray(m) ? (n += "[]") : (m = [m]),
                            d.forEach(m, function (p) {
                                d.isDate(p) ? (p = p.toISOString()) : d.isObject(p) && (p = JSON.stringify(p));
                                f.push(c(n) + "\x3d" + c(p));
                            }));
                    });
                    e = f.join("\x26");
                }
                e && ((k = g.indexOf("#")), -1 !== k && (g = g.slice(0, k)), (g += (-1 === g.indexOf("?") ? "?" : "\x26") + e));
                return g;
            };
        },
        function (a, h, b) {
            function c() {
                this.handlers = [];
            }
            var d = b(2);
            c.prototype.use = function (g, e) {
                this.handlers.push({ fulfilled: g, rejected: e });
                return this.handlers.length - 1;
            };
            c.prototype.eject = function (g) {
                this.handlers[g] && (this.handlers[g] = null);
            };
            c.prototype.forEach = function (g) {
                d.forEach(this.handlers, function (e) {
                    null !== e && g(e);
                });
            };
            a.exports = c;
        },
        function (a, h, b) {
            var c = b(2),
                d = b(8),
                g = b(9),
                e = b(10);
            a.exports = function (k) {
                k.cancelToken && k.cancelToken.throwIfRequested();
                k.headers = k.headers || {};
                k.data = d(k.data, k.headers, k.transformRequest);
                k.headers = c.merge(k.headers.common || {}, k.headers[k.method] || {}, k.headers);
                c.forEach("delete get head post put patch common".split(" "), function (f) {
                    delete k.headers[f];
                });
                return (k.adapter || e.adapter)(k).then(
                    function (f) {
                        k.cancelToken && k.cancelToken.throwIfRequested();
                        f.data = d(f.data, f.headers, k.transformResponse);
                        return f;
                    },
                    function (f) {
                        g(f) || (k.cancelToken && k.cancelToken.throwIfRequested(), f && f.response && (f.response.data = d(f.response.data, f.response.headers, k.transformResponse)));
                        return Promise.reject(f);
                    }
                );
            };
        },
        function (a, h, b) {
            var c = b(2);
            a.exports = function (d, g, e) {
                c.forEach(e, function (k) {
                    d = k(d, g);
                });
                return d;
            };
        },
        function (a, h) {
            a.exports = function (b) {
                return !(!b || !b.__CANCEL__);
            };
        },
        function (a, h, b) {
            function c(f, m) {
                !d.isUndefined(f) && d.isUndefined(f["Content-Type"]) && (f["Content-Type"] = m);
            }
            var d = b(2),
                g = b(11),
                e = { "Content-Type": "application/x-www-form-urlencoded" },
                k = {
                    adapter: (function () {
                        var f;
                        "undefined" !== typeof XMLHttpRequest ? (f = b(12)) : "undefined" !== typeof process && "[object process]" === Object.prototype.toString.call(process) && (f = b(12));
                        return f;
                    })(),
                    transformRequest: [
                        function (f, m) {
                            g(m, "Accept");
                            g(m, "Content-Type");
                            return d.isFormData(f) || d.isArrayBuffer(f) || d.isBuffer(f) || d.isStream(f) || d.isFile(f) || d.isBlob(f)
                                ? f
                                : d.isArrayBufferView(f)
                                ? f.buffer
                                : d.isURLSearchParams(f)
                                ? (c(m, "application/x-www-form-urlencoded;charset\x3dutf-8"), f.toString())
                                : d.isObject(f)
                                ? (c(m, "application/json;charset\x3dutf-8"), JSON.stringify(f))
                                : f;
                        },
                    ],
                    transformResponse: [
                        function (f) {
                            if ("string" === typeof f)
                                try {
                                    f = JSON.parse(f);
                                } catch (m) {}
                            return f;
                        },
                    ],
                    timeout: 0,
                    xsrfCookieName: "XSRF-TOKEN",
                    xsrfHeaderName: "X-XSRF-TOKEN",
                    maxContentLength: -1,
                    validateStatus: function (f) {
                        return 200 <= f && 300 > f;
                    },
                    headers: { common: { Accept: "application/json, text/plain, */*" } },
                };
            d.forEach(["delete", "get", "head"], function (f) {
                k.headers[f] = {};
            });
            d.forEach(["post", "put", "patch"], function (f) {
                k.headers[f] = d.merge(e);
            });
            a.exports = k;
        },
        function (a, h, b) {
            var c = b(2);
            a.exports = function (d, g) {
                c.forEach(d, function (e, k) {
                    k !== g && k.toUpperCase() === g.toUpperCase() && ((d[g] = e), delete d[k]);
                });
            };
        },
        function (a, h, b) {
            var c = b(2),
                d = b(13),
                g = b(5),
                e = b(16),
                k = b(19),
                f = b(20),
                m = b(14);
            a.exports = function (n) {
                return new Promise(function (p, l) {
                    var t = n.data,
                        r = n.headers;
                    c.isFormData(t) && delete r["Content-Type"];
                    var q = new XMLHttpRequest();
                    n.auth && (r.Authorization = "Basic " + btoa((n.auth.username || "") + ":" + (n.auth.password || "")));
                    var u = e(n.baseURL, n.url);
                    q.open(n.method.toUpperCase(), g(u, n.params, n.paramsSerializer), !0);
                    q.timeout = n.timeout;
                    q.onreadystatechange = function () {
                        if (q && 4 === q.readyState && (0 !== q.status || (q.responseURL && 0 === q.responseURL.indexOf("file:")))) {
                            var v = "getAllResponseHeaders" in q ? k(q.getAllResponseHeaders()) : null;
                            d(p, l, { data: n.responseType && "text" !== n.responseType ? q.response : q.responseText, status: q.status, statusText: q.statusText, headers: v, config: n, request: q });
                            q = null;
                        }
                    };
                    q.onabort = function () {
                        q && (l(m("Request aborted", n, "ECONNABORTED", q)), (q = null));
                    };
                    q.onerror = function () {
                        l(m("Network Error", n, null, q));
                        q = null;
                    };
                    q.ontimeout = function () {
                        var v = "timeout of " + n.timeout + "ms exceeded";
                        n.timeoutErrorMessage && (v = n.timeoutErrorMessage);
                        l(m(v, n, "ECONNABORTED", q));
                        q = null;
                    };
                    if (c.isStandardBrowserEnv()) {
                        var w = b(21);
                        (u = (n.withCredentials || f(u)) && n.xsrfCookieName ? w.read(n.xsrfCookieName) : void 0) && (r[n.xsrfHeaderName] = u);
                    }
                    "setRequestHeader" in q &&
                        c.forEach(r, function (v, x) {
                            "undefined" === typeof t && "content-type" === x.toLowerCase() ? delete r[x] : q.setRequestHeader(x, v);
                        });
                    c.isUndefined(n.withCredentials) || (q.withCredentials = !!n.withCredentials);
                    if (n.responseType)
                        try {
                            q.responseType = n.responseType;
                        } catch (v) {
                            if ("json" !== n.responseType) throw v;
                        }
                    "function" === typeof n.onDownloadProgress && q.addEventListener("progress", n.onDownloadProgress);
                    "function" === typeof n.onUploadProgress && q.upload && q.upload.addEventListener("progress", n.onUploadProgress);
                    n.cancelToken &&
                        n.cancelToken.promise.then(function (v) {
                            q && (q.abort(), l(v), (q = null));
                        });
                    void 0 === t && (t = null);
                    q.send(t);
                });
            };
        },
        function (a, h, b) {
            var c = b(14);
            a.exports = function (d, g, e) {
                var k = e.config.validateStatus;
                !k || k(e.status) ? d(e) : g(c("Request failed with status code " + e.status, e.config, null, e.request, e));
            };
        },
        function (a, h, b) {
            var c = b(15);
            a.exports = function (d, g, e, k, f) {
                return c(Error(d), g, e, k, f);
            };
        },
        function (a, h) {
            a.exports = function (b, c, d, g, e) {
                b.config = c;
                d && (b.code = d);
                b.request = g;
                b.response = e;
                b.isAxiosError = !0;
                b.toJSON = function () {
                    return {
                        message: this.message,
                        name: this.name,
                        description: this.description,
                        number: this.number,
                        fileName: this.fileName,
                        lineNumber: this.lineNumber,
                        columnNumber: this.columnNumber,
                        stack: this.stack,
                        config: this.config,
                        code: this.code,
                    };
                };
                return b;
            };
        },
        function (a, h, b) {
            var c = b(17),
                d = b(18);
            a.exports = function (g, e) {
                return g && !c(e) ? d(g, e) : e;
            };
        },
        function (a, h) {
            a.exports = function (b) {
                return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(b);
            };
        },
        function (a, h) {
            a.exports = function (b, c) {
                return c ? b.replace(/\/+$/, "") + "/" + c.replace(/^\/+/, "") : b;
            };
        },
        function (a, h, b) {
            var c = b(2),
                d =
                    "age authorization content-length content-type etag expires from host if-modified-since if-unmodified-since last-modified location max-forwards proxy-authorization referer retry-after user-agent".split(
                        " "
                    );
            a.exports = function (g) {
                var e = {},
                    k,
                    f,
                    m;
                if (!g) return e;
                c.forEach(g.split("\n"), function (n) {
                    m = n.indexOf(":");
                    k = c.trim(n.substr(0, m)).toLowerCase();
                    f = c.trim(n.substr(m + 1));
                    !k || (e[k] && 0 <= d.indexOf(k)) || (e[k] = "set-cookie" === k ? (e[k] ? e[k] : []).concat([f]) : e[k] ? e[k] + ", " + f : f);
                });
                return e;
            };
        },
        function (a, h, b) {
            var c = b(2);
            a.exports = c.isStandardBrowserEnv()
                ? (function () {
                      function d(f) {
                          g && (e.setAttribute("href", f), (f = e.href));
                          e.setAttribute("href", f);
                          return {
                              href: e.href,
                              protocol: e.protocol ? e.protocol.replace(/:$/, "") : "",
                              host: e.host,
                              search: e.search ? e.search.replace(/^\?/, "") : "",
                              hash: e.hash ? e.hash.replace(/^#/, "") : "",
                              hostname: e.hostname,
                              port: e.port,
                              pathname: "/" === e.pathname.charAt(0) ? e.pathname : "/" + e.pathname,
                          };
                      }
                      var g = /(msie|trident)/i.test(navigator.userAgent),
                          e = document.createElement("a");
                      var k = d(window.location.href);
                      return function (f) {
                          f = c.isString(f) ? d(f) : f;
                          return f.protocol === k.protocol && f.host === k.host;
                      };
                  })()
                : (function () {
                      return function () {
                          return !0;
                      };
                  })();
        },
        function (a, h, b) {
            var c = b(2);
            a.exports = c.isStandardBrowserEnv()
                ? (function () {
                      return {
                          write: function (d, g, e, k, f, m) {
                              var n = [];
                              n.push(d + "\x3d" + encodeURIComponent(g));
                              c.isNumber(e) && n.push("expires\x3d" + new Date(e).toGMTString());
                              c.isString(k) && n.push("path\x3d" + k);
                              c.isString(f) && n.push("domain\x3d" + f);
                              !0 === m && n.push("secure");
                              document.cookie = n.join("; ");
                          },
                          read: function (d) {
                              return (d = document.cookie.match(new RegExp("(^|;\\s*)(" + d + ")\x3d([^;]*)"))) ? decodeURIComponent(d[3]) : null;
                          },
                          remove: function (d) {
                              this.write(d, "", Date.now() - 864e5);
                          },
                      };
                  })()
                : (function () {
                      return {
                          write: function () {},
                          read: function () {
                              return null;
                          },
                          remove: function () {},
                      };
                  })();
        },
        function (a, h, b) {
            var c = b(2);
            a.exports = function (d, g) {
                g = g || {};
                var e = {},
                    k = ["url", "method", "params", "data"],
                    f = ["headers", "auth", "proxy"],
                    m =
                        "baseURL url transformRequest transformResponse paramsSerializer timeout withCredentials adapter responseType xsrfCookieName xsrfHeaderName onUploadProgress onDownloadProgress maxContentLength validateStatus maxRedirects httpAgent httpsAgent cancelToken socketPath".split(
                            " "
                        );
                c.forEach(k, function (p) {
                    "undefined" !== typeof g[p] && (e[p] = g[p]);
                });
                c.forEach(f, function (p) {
                    c.isObject(g[p])
                        ? (e[p] = c.deepMerge(d[p], g[p]))
                        : "undefined" !== typeof g[p]
                        ? (e[p] = g[p])
                        : c.isObject(d[p])
                        ? (e[p] = c.deepMerge(d[p]))
                        : "undefined" !== typeof d[p] && (e[p] = d[p]);
                });
                c.forEach(m, function (p) {
                    "undefined" !== typeof g[p] ? (e[p] = g[p]) : "undefined" !== typeof d[p] && (e[p] = d[p]);
                });
                var n = k.concat(f).concat(m);
                k = Object.keys(g).filter(function (p) {
                    return -1 === n.indexOf(p);
                });
                c.forEach(k, function (p) {
                    "undefined" !== typeof g[p] ? (e[p] = g[p]) : "undefined" !== typeof d[p] && (e[p] = d[p]);
                });
                return e;
            };
        },
        function (a, h) {
            function b(c) {
                this.message = c;
            }
            b.prototype.toString = function () {
                return "Cancel" + (this.message ? ": " + this.message : "");
            };
            b.prototype.__CANCEL__ = !0;
            a.exports = b;
        },
        function (a, h, b) {
            function c(g) {
                if ("function" !== typeof g) throw new TypeError("executor must be a function.");
                var e;
                this.promise = new Promise(function (f) {
                    e = f;
                });
                var k = this;
                g(function (f) {
                    k.reason || ((k.reason = new d(f)), e(k.reason));
                });
            }
            var d = b(23);
            c.prototype.throwIfRequested = function () {
                if (this.reason) throw this.reason;
            };
            c.source = function () {
                var g;
                return {
                    token: new c(function (e) {
                        g = e;
                    }),
                    cancel: g,
                };
            };
            a.exports = c;
        },
        function (a, h) {
            a.exports = function (b) {
                return function (c) {
                    return b.apply(null, c);
                };
            };
        },
    ]);
});
function _extends() {
    _extends =
        Object.assign ||
        function (a) {
            for (var h = 1; h < arguments.length; h++) {
                var b = arguments[h],
                    c;
                for (c in b) Object.prototype.hasOwnProperty.call(b, c) && (a[c] = b[c]);
            }
            return a;
        };
    return _extends.apply(this, arguments);
}
var baseHttp = function () {
    var a = { baseURL: "", headers: { Authorization: "" } };
    return {
        defaultConfig: a,
        get: function (h, b) {
            return axios.get(h, _extends(a, b));
        },
        post: function (h, b, c) {
            return axios.post(h, b, _extends(a, c));
        },
        postFile: function (h, b, c) {
            return axios.post(h, b, _extends(a, c, { headers: { "Content-Type": "multipart/form-data" } }));
        },
    };
};
function _extends() {
    _extends =
        Object.assign ||
        function (a) {
            for (var h = 1; h < arguments.length; h++) {
                var b = arguments[h],
                    c;
                for (c in b) Object.prototype.hasOwnProperty.call(b, c) && (a[c] = b[c]);
            }
            return a;
        };
    return _extends.apply(this, arguments);
}
var baseHttpSerivce = baseHttp(),
    navigationService = _extends(
        {},
        (function () {
            return {
                getNavigation: function (a, h, b) {
                    return this.get("/bin/nncorp/getnavigationitems?currentPage\x3d".concat(a, "\x26depth\x3d").concat(h, "\x26navRootShiftDepth\x3d").concat(b)).then(function (c) {
                        return c.data;
                    });
                },
            };
        })(),
        baseHttpSerivce
    );
baseHttpSerivce = {};
function _extends() {
    _extends =
        Object.assign ||
        function (a) {
            for (var h = 1; h < arguments.length; h++) {
                var b = arguments[h],
                    c;
                for (c in b) Object.prototype.hasOwnProperty.call(b, c) && (a[c] = b[c]);
            }
            return a;
        };
    return _extends.apply(this, arguments);
}
baseHttpSerivce = baseHttp();
var languagesService = _extends(
    {},
    (function () {
        return {
            getLanguages: function (a) {
                var h = 1 < arguments.length && void 0 !== arguments[1] ? arguments[1] : 3;
                return this.get("/bin/nncorp/getlanguagenavigation?currentPage\x3d".concat(a, "\x26depth\x3d").concat(h)).then(function (b) {
                    return b.data;
                });
            },
        };
    })(),
    baseHttpSerivce
);
baseHttpSerivce = {};
Vue.filter("htmlExtension", function (a) {
    return a ? (-1 !== a.indexOf(".html") || /\/$/.test(a) ? a : a + ".html") : "";
});
Vue.component("highlighted-nav", {
    template:
        '\x3ca class\x3d"highlighted-nav right-arrow-animation" v-if\x3d"navItem" :href\x3d"navItem.path | htmlExtension" :aria-label\x3d"getString(\'Highlighted feature\') + \' \' + navItem.title"\x3e\n                    \x3cdiv class\x3d"highlighted-container"\x3e\n                        \x3ch4 class\x3d"h4"\x3e\x3cb\x3e{{navItem.title}}\x3c/b\x3e\x3c/h4\x3e\n                        \x3cp v-if\x3d"navItem.featuredHeadline || navItem.headline" class\x3d"infotext"\x3e{{navItem.featuredHeadline || navItem.headline}}\x3c/p\x3e\n                        \x3cdiv class\x3d"link-arrow"\x3e\n                            \x3cspan class\x3d"icon icon-right-arrow-white"\x3e\x3c/span\x3e\n                        \x3c/div\x3e\n                    \x3c/div\x3e\n                \x3c/a\x3e ',
    methods: {
        getString: function (a) {
            return Granite.I18n.get(a);
        },
    },
    mounted: function () {},
    props: { navItem: Object },
});
Vue.component("lang-selector", {
    data: function () {
        return { currentPagePath: "", languages: [], depth: 0 };
    },
    template:
        '\x3cdiv class\x3d"lang-selector"\x3e                       \n                    \x3ca class\x3d"lang-item" :class\x3d"{\'active\': lang.active}" :aria-label\x3d"lang.title" :href\x3d"lang.path | htmlExtension" v-for\x3d"(lang, index) in languages"\x3e{{lang.navigationTitle}}\x3c/a\x3e\n                \x3c/div\x3e',
    props: { depthInput: Number, languagesInput: Array },
    methods: {
        getGlobalInfo: function (a) {
            VueBus.$off("globalInfo");
            this.currentPagePath = a.currentPagePath;
            this.depth = this.depth || 0 === this.depth ? a.structureDepth : this.depth;
        },
    },
    created: function () {
        this.languages = this.languagesInput;
        this.depth = this.depthInput;
        VueBus.$on("globalInfo", this.getGlobalInfo);
    },
    mounted: function () {
        VueBus.register("lang-selector");
    },
    destroyed: function () {
        VueBus.$off("globalInfo");
    },
});
Vue.component("country-selector", {
    data: function () {
        return { currentCountry: "", countryListPath: "" };
    },
    template:
        '\x3ca v-if\x3d"currentCountry \x26\x26 countryListPath" :href\x3d"countryListPath | htmlExtension" class\x3d"country-selector" :aria-label\x3d"\'Novo Nordisk\' + currentCountry"\x3e                       \n                    \x3cspan class\x3d"icon" :class\x3d"\'icon-location-\' + getColor"\x3e\x3cspan class\x3d"path1"\x3e\x3c/span\x3e\x3cspan class\x3d"path2"\x3e\x3c/span\x3e\x3cspan class\x3d"path3"\x3e\x3c/span\x3e\x3cspan class\x3d"path4"\x3e\x3c/span\x3e\x3c/span\x3e\n                    \x3cspan class\x3d"text" :class\x3d"\'color-\' + color"\x3eNovo Nordisk {{currentCountry}}\x3c/span\x3e       \n                \x3c/a\x3e',
    methods: {
        getGlobalInfo: function (a) {
            this.currentCountry = a.currentCountry;
            this.countryListPath = a.countryListPath;
            VueBus.$off("globalInfo");
        },
    },
    props: { color: { type: String, default: "white" } },
    computed: {
        getColor: function () {
            return "blue" === this.color || "blue-edge" === this.color ? "blue-edge" : this.color;
        },
    },
    created: function () {
        VueBus.$on("globalInfo", this.getGlobalInfo);
    },
    mounted: function () {
        VueBus.register("country-selector");
    },
    destroyed: function () {
        VueBus.$off("globalInfo");
    },
});
function _extends() {
    _extends =
        Object.assign ||
        function (a) {
            for (var h = 1; h < arguments.length; h++) {
                var b = arguments[h],
                    c;
                for (c in b) Object.prototype.hasOwnProperty.call(b, c) && (a[c] = b[c]);
            }
            return a;
        };
    return _extends.apply(this, arguments);
}
Vue.component("overlay-navigation", {
    props: { removeCountrySelector: { type: Boolean }, removeLanguageNavigation: { type: Boolean } },
    data: function () {
        return {
            isSafari: !1,
            isSafariVersionIsLowerThan14_1: !1,
            isOpen: !1,
            searchPath: "",
            globalInfo: {},
            highlightedItem: {},
            mainNavigationItems: [],
            utilityNavigationItems: [],
            allNavigationItems: [],
            selectedNavigationItem: [],
            selectedSubNavigationItems: [],
            animationEvents: [],
            languages: [],
            currentTitle: "",
            tabletView: !1,
            isOverflowed: !1,
        };
    },
    template:
        '\n                \x3cdiv v-if\x3d"allNavigationItems.length \x3e 0" v-show\x3d"isOpen" class\x3d"overlay-navigation custom-scrollbar" v-bind:class\x3d"setAction"\x3e\n                    \x3cdiv class\x3d"tb-Grid tb-Grid--24 tb-Grid--l--24" v-bind:class\x3d"{\'gutters\':!tabletView}"\x3e\n                        \x3cdiv class\x3d"tb-GridColumn tb-GridColumn--l--22 tb-GridColumn--s--23 tb-GridColumn--offset--l--1 tb-GridColumn--offset--s--1"\x3e\n                            \x3cdiv class\x3d"top-controls" :class\x3d"{\'move-cross\': removeLanguageNavigation}"\x3e\n                                \x3cdiv v-if\x3d"!removeLanguageNavigation" class\x3d"left"\x3e\n                                    \x3cbutton class\x3d"search-button btn" role\x3d"button" aria-label\x3d"getString(\'Search button\')"\x3e     \n                                        \x3ca :href\x3d"searchPath | htmlExtension"\x3e\x3cspan class\x3d"icon icon-search-white"\x3e\x3c/span\x3e\x3c/a\x3e\n                                    \x3c/button\x3e   \n                                    \x3cdiv class\x3d"lang-selector-wrapper desktop"\x3e\n                                        \x3clang-selector :depth-input\x3d"3" :languages-input\x3d"languages" \x3e\x3c/lang-selector\x3e\n                                    \x3c/div\x3e                \n                                \x3c/div\x3e\n                                \x3cdiv v-if\x3d"!removeLanguageNavigation" class\x3d"lang-selector-wrapper mobile"\x3e\n                                    \x3clang-selector :depth-input\x3d"3" :languages-input\x3d"languages"\x3e\x3c/lang-selector\x3e\n                                \x3c/div\x3e\n                                \x3cdiv class\x3d"right"\x3e\n                                    \x3cbutton class\x3d"close-button btn" @click\x3d"closeOverlay" role\x3d"button" aria-label\x3d"getString(\'Close button\')"\x3e\n                                        \x3cspan class\x3d"icon icon-times-white"\x3e\x3cspan class\x3d"path1"\x3e\x3c/span\x3e\x3cspan class\x3d"path2"\x3e\x3c/span\x3e\x3cspan class\x3d"path3"\x3e\x3c/span\x3e\x3cspan class\x3d"path4"\x3e\x3c/span\x3e\x3c/span\x3e\n                                    \x3c/button\x3e\n                                \x3c/div\x3e                        \n                            \x3c/div\x3e\n                        \x3c/div\x3e\n                        \x3cdiv class\x3d"tb-GridColumn tb-GridColumn--l--20 tb-GridColumn--m--16 tb-GridColumn--s--20 tb-GridColumn--offset--m--4 tb-GridColumn--offset--s--4 tb-GridColumn--offset--xs--2" v-bind:class\x3d"{\'gutters\':tabletView, \'sub-gutters\': !tabletView}"\x3e                        \n                            \x3cdiv class\x3d"sub-nav-list navigation"\x3e\n                                \x3cspan class\x3d"tagline hyphenate" v-html\x3d"selectedNavigationItem.title"\x3e\x3c/span\x3e\n                                \x3ca class\x3d"item m-s-bottom" v-for\x3d"(subNavItem, index) in selectedSubNavigationItems" :href\x3d"subNavItem.path | htmlExtension" :aria-label\x3d"subNavItem.title" :ref\x3d"\'desktop-\' + index + subNavItem.title" :key\x3d"index"\x3e\n                                    \x3cspan class\x3d"text hyphenate" :style\x3d"this.isSafariVersionIsLowerThan14_1 ? \'margin-left:92px\' :\'\'" v-html\x3d"subNavItem.title"\x3e\x3c/span\x3e\n                                \x3c/a\x3e\n                                \x3cdiv class\x3d"highlighted-nav-wrapper"\x3e\n                                    \x3chighlighted-nav v-if\x3d"selectedNavigationItem.featuredPage" :nav-item\x3d"selectedNavigationItem.featuredPage" /\x3e\n                                \x3c/div\x3e                        \n                            \x3c/div\x3e   \n                            \x3cdiv class\x3d"full-nav"\x3e\n                                \x3cul class\x3d"main-nav"\x3e\n                                    \x3cli class\x3d"nav-item" v-for\x3d"(navItem, index) in allNavigationItems" :ref\x3d"index+navItem.title" :key\x3d"index"\x3e\n                                        \x3ctemplate v-if\x3d"navItem.hasChildren"\x3e\n                                            \x3cspan class\x3d"text hyphenate" v-on:click\x3d"toggleNav(navItem, index)" v-html\x3d"navItem.title"\x3e\x3c/span\x3e \n                                            \x3cli class\x3d"sub-nav-item animate" v-if\x3d"navItem.featuredPage"\x3e\n                                                \x3cdiv class\x3d"highlighted-nav-wrapper"\x3e\n                                                    \x3chighlighted-nav :nav-item\x3d"navItem.featuredPage" /\x3e\n                                                \x3c/div\x3e\n                                            \x3c/li\x3e                               \n                                            \x3cul class\x3d"sub-nav"\x3e                                        \n                                                \x3cli class\x3d"sub-nav-item" v-for\x3d"(subNavItem, index) in navItem.children" :key\x3d"index"  :ref\x3d"navItem.title + index + subNavItem.title" \x3e\n                                                    \x3ca class\x3d"text lnk-text hyphenate" :href\x3d"subNavItem.path | htmlExtension" :aria-label\x3d"subNavItem.title" v-html\x3d"subNavItem.title"\x3e\x3c/a\x3e\n                                                \x3c/li\x3e                                        \n                                            \x3c/ul\x3e\n                                        \x3c/template\x3e\n                                        \x3ctemplate v-else\x3e\n                                            \x3ca class\x3d"text lnk-text hyphenate" :href\x3d"navItem.path | htmlExtension" :aria-label\x3d"navItem.title" v-html\x3d"navItem.title"\x3e\x3c/a\x3e\n                                        \x3c/template\x3e                                \n                                    \x3c/li\x3e                            \n                                \x3c/ul\x3e\n                                \x3cdiv v-if\x3d"!removeCountrySelector" class\x3d"country-selector-wrapper"\x3e\n                                    \x3ccountry-selector /\x3e\n                                \x3c/div\x3e\n                            \x3c/div\x3e \n                        \x3c/div\x3e\n                    \x3c/div\x3e    \n                    \x3cbutton class\x3d"close-button desktop btn" @click\x3d"closeOverlay" role\x3d"button" aria-label\x3d"getString(\'Close button\')"\x3e\n                        \x3cspan class\x3d"icon icon-times-white"\x3e\x3cspan class\x3d"path1"\x3e\x3c/span\x3e\x3cspan class\x3d"path2"\x3e\x3c/span\x3e\x3cspan class\x3d"path3"\x3e\x3c/span\x3e\x3cspan class\x3d"path4"\x3e\x3c/span\x3e\x3c/span\x3e\n                    \x3c/button\x3e                                                       \n                \x3c/div\x3e\n                \n                ',
    methods: {
        safariSpecification: function () {
            if ((this.isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent))) {
                var a = "",
                    h = "",
                    b = navigator.userAgent;
                -1 !== b.indexOf("Safari/") &&
                    b.split("/").forEach(function (c) {
                        -1 !== c.indexOf("Safari") && ((a = c.split(" ")[0]), (h = parseInt(a.replaceAll(".", "").substring(0, 3))), 141 > h && (this.isSafariVersionIsLowerThan14_1 = !0));
                    });
            }
        },
        addAnimateForArray: function (a, h) {
            var b = this,
                c = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : 100,
                d = 3 < arguments.length && void 0 !== arguments[3] ? arguments[3] : "";
            h.map(function (g, e) {
                b.animationEvents.push(
                    setTimeout(function () {
                        return b.$refs[d + a + e + g.title][0].classList.add("animate");
                    }, c * (e + 1))
                );
            });
        },
        addAnimateForArrayDesktop: function (a, h) {
            var b = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : 100,
                c = 3 < arguments.length && void 0 !== arguments[3] ? arguments[3] : "",
                d = 1;
            setTimeout(
                function () {
                    var g = this;
                    h.map(function (e, k) {
                        d = 5 > k ? k + 1 : k - 3;
                        g.animationEvents.push(
                            setTimeout(function () {
                                return g.$refs[c + a + k + e.title][0].classList.add("animate");
                            }, b * (d + 1))
                        );
                    });
                }.bind(this),
                200
            );
        },
        removeAnimateForArray: function (a, h) {
            var b = this,
                c = 2 < arguments.length && void 0 !== arguments[2] ? arguments[2] : "";
            this.animationEvents.forEach(function (d) {
                clearTimeout(d);
            });
            this.animationEvents = this.animationEvents.splice(0, 0);
            h.map(function (d, g) {
                (d = b.$refs[c + a + g + d.title]) && d[0].classList.remove("animate");
            });
        },
        turnOnAnimation: function (a) {
            a &&
                ((this.selectedSubNavigationItems = (this.selectedNavigationItem = this.allNavigationItems.find(function (h) {
                    return h.title.trim() === a.trim();
                }))
                    ? this.selectedNavigationItem.children
                    : []),
                this.addAnimateForArrayDesktop("", this.selectedSubNavigationItems, 100, "desktop-"));
            this.addAnimateForArray("", this.allNavigationItems);
        },
        turnOffAnimation: function () {
            this.removeAnimateForArray("", this.selectedSubNavigationItems, "desktop-");
            this.removeAnimateForArray("", this.allNavigationItems);
        },
        showOverlay: function (a) {
            this.isOpen = !0;
            this.currentTitle = this.currentTitle === a ? this.currentTitle : a;
            this.turnOnAnimation(a);
            VueBus.preventBodyScroll();
        },
        closeOverlay: function () {
            this.turnOffAnimation();
            this.isOpen = !1;
            VueBus.$emit("closeOverlay");
            VueBus.allowBodyScroll();
        },
        toggleNav: function (a, h) {
            var b = this,
                c = a.children;
            a.active
                ? (this.$refs[h + a.title][0].classList.remove("open"), this.removeAnimateForArray(a.title, c))
                : (this.$refs[h + a.title][0].classList.add("open"),
                  setTimeout(function () {
                      b.addAnimateForArray(a.title, c);
                  }, 150));
            this.$set(a, "active", !a.active);
        },
        getGlobalInfo: function (a) {
            this.globalInfo = _extends({}, a);
            this.initializeNav();
            VueBus.$off("globalInfo");
        },
        initializeNav: function () {
            var a = this,
                h = [];
            h.push(navigationService.getNavigation(this.globalInfo.currentPagePath, this.globalInfo.structureDepth, this.globalInfo.navRootShiftDepth));
            h.push(languagesService.getLanguages(this.globalInfo.currentPagePath, this.globalInfo.structureDepth));
            Promise.all(h).then(function (b) {
                var c = b[0];
                if (200 === c.status) {
                    c = c.data;
                    a.mainNavigationItems = c.mainNavigationItems;
                    a.utilityNavigationItems = c.utilityNavigationItems;
                    a.allNavigationItems = a.mainNavigationItems.concat(a.utilityNavigationItems).filter(function (g) {
                        return !g.search;
                    });
                    var d = c.mainNavigationItems.find(function (g) {
                        return !0 === g.search;
                    });
                    a.searchPath = d
                        ? c.mainNavigationItems.find(function (g) {
                              return !0 === g.search;
                          }).path
                        : "";
                }
                b = b[1];
                200 === b.status && (a.languages = b.data.languageNavigationItems);
            });
        },
        getString: function (a) {
            return Granite.I18n.get(a);
        },
        handlingResize: function () {
            var a = window.innerWidth;
            1280 >= a
                ? (this.removeAnimateForArray("", this.selectedSubNavigationItems, "desktop-"), this.turnOnAnimation(this.currentTitle))
                : 1280 < a && (this.removeAnimateForArray("", this.allNavigationItems), this.turnOnAnimation(this.currentTitle));
        },
        pageshow: function () {
            this.closeOverlay();
        },
        handleTabletView: function () {
            var a = window.innerWidth;
            1280 >= a
                ? (this.isOpen && (this.isOpen = this.tabletView), (this.tabletView = !0))
                : 1280 < a && (this.handleOverflowed(), (this.tabletView = this.isOverflowed), this.isOpen && (this.isOpen = this.isOverflowed));
        },
        handleOverflowed: function () {
            var a = document.querySelector("#cmp-navigation__top-bar"),
                h = document.querySelector("#cmp-navigation__bottom-bar");
            a && h && (this.isOverflowed = a.scrollHeight + h.scrollHeight + 64 > window.innerHeight ? !0 : !1);
        },
    },
    computed: {
        setAction: function () {
            var a = [];
            this.tabletView && a.push("tablet");
            this.isOverflowed && a.push("overflowed");
            this.isOpen ? a.push("open") : (a.push("close-overlay"), this.closeOverlay());
            return a.join(" ");
        },
    },
    created: function () {
        VueBus.$on("openSubNav", this.showOverlay);
        VueBus.$on("globalInfo", this.getGlobalInfo);
        window.addEventListener("pageshow", this.pageshow);
    },
    mounted: function () {
        var a = this;
        VueBus.register("overlay-navigation");
        window.addEventListener("resize", function () {
            a.handlingResize();
            a.handleTabletView();
        });
        this.handleTabletView();
        this.safariSpecification();
    },
    destroyed: function () {
        VueBus.$off("globalInfo");
        VueBus.$off("openSubNav");
        window.removeEventListener("pageshow", this.pageshow);
    },
});
VueBus.resourceReady(function () {
    new Vue({
        el: "#cmp-navigation",
        data: { isTop: !0, isDelay: null, isOpen: null, tabletView: !1, burgerTouched: null, navHoveredItems: [], isOverflowed: !1 },
        mixins: [utilitiesMixin],
        methods: {
            handleScroll: function () {
                var a = this.isTop;
                if ((this.isTop = 0 === (this.isEdge ? window.pageYOffset : this.isIE ? window.scrollY : document.documentElement.scrollTop))) this.burgerTouched = !1;
                (!a && null !== a) || this.isTop || (this.isDelay = !0);
            },
            handleBurger: function () {
                this.isOpen = !this.isOpen;
                this.isDelay = !1;
                this.burgerTouched = !0;
            },
            openSubNav: function (a) {
                VueBus.$emit("openSubNav", a);
                this.isOpen = !1;
            },
            getValueFromRef: function (a) {
                return this.$refs[a].value;
            },
            onLinkHover: function (a) {
                -1 === this.navHoveredItems.indexOf(a) && this.navHoveredItems.push(a);
            },
            handleOverflowed: function () {
                var a = document.querySelector("#cmp-navigation__top-bar"),
                    h = document.querySelector("#cmp-navigation__bottom-bar");
                a && h && (this.tabletView = a.scrollHeight + h.scrollHeight + 64 > window.innerHeight ? (this.isOverflowed = !0) : (this.isOverflowed = !1));
            },
            handleTabletView: function () {
                1280 >= window.innerWidth ? (this.tabletView = !0) : this.handleOverflowed();
            },
            checkIfTop: function () {
                this.isTop = 0 === window.pageYOffset;
            },
        },
        computed: {
            handleNavAction: function () {
                var a = [];
                null === this.isTop && (this.handleScroll(), this.$forceUpdate());
                this.tabletView && a.push("tablet");
                this.isOverflowed && a.push("overflowed");
                this.isTop
                    ? ((a = []), this.tabletView && a.push("tablet"), this.isOverflowed && a.push("overflowed"), (this.isOpen = !1), a.push("top"))
                    : this.isOpen
                    ? a.push("open")
                    : a.push("close-main-nav");
                this.isDelay && a.push("delay-animation");
                this.burgerTouched && a.push("touched");
                return a.join(" ");
            },
        },
        mounted: function () {
            this.checkIfTop();
            this.handleTabletView();
            window.addEventListener("scroll", this.handleScroll);
            window.addEventListener("resize", this.handleTabletView);
        },
        updated: function () {
            this.isTop || (this.$refs["cmp-navigation"] && this.$refs["cmp-navigation"].classList.remove("top"));
        },
        destroyed: function () {
            window.removeEventListener("scroll", this.handleScroll);
        },
    });
});
