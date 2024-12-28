/*

*/
VueBus.resourceReady(function () {
    for (var q = document.querySelectorAll(".cmp-accordion"), l = 0; l < q.length; l++) {
        var A = q[l];
        A.__vue__ ||
            new Vue({
                el: A,
                data: function () {
                    return { panelHeight: [], open: [], singleExpan: !1, lastKnownFrameWidth: {} };
                },
                mounted: function () {
                    var r = this;
                    this.getExpandedItems();
                    this.singleExpan = this.$refs.singleExpansion ? "true" === this.$refs.singleExpansion.value.toLowerCase() : !1;
                    this.reloadIframes();
                    window.addEventListener("resize", function () {
                        setTimeout(function () {
                            r.reloadIframes();
                        }, 0);
                    });
                },
                mixins: [utilitiesMixin],
                methods: {
                    reloadIframes: function () {
                        var r = this,
                            u = window.document.querySelectorAll(".cmp-accordion iframe");
                        Array.from(u).forEach(function (c, n) {
                            n += c.src;
                            c.style.width = c.closest(".tb-GridColumn").offsetWidth + "px";
                            r.lastKnownFrameWidth[n] !== c.style.width && (c.src = c.src);
                            0 !== c.clientHeight && (r.lastKnownFrameWidth[n] = c.style.width);
                        });
                    },
                    background: function (r) {
                        return this.open[r] ? "white" : "none";
                    },
                    recalculateHeight: function (r, u) {
                        r || (r = this.$refs["panel-".concat(u)]);
                        r && 0 < r.scrollHeight && this.$set(this.panelHeight, u, r.scrollHeight + "px");
                    },
                    toggleOpen: function (r) {
                        var u = this;
                        this.singleExpan
                            ? (this.open.forEach(function (c, n) {
                                  u.$set(u.open, n, !1);
                              }),
                              this.$set(this.open, r, !0))
                            : this.$set(this.open, r, !this.open[r]);
                    },
                    handleClick: function (r) {
                        var u = this,
                            c = this.$refs["panel-".concat(r)];
                        c && this.recalculateHeight(c, r);
                        this.$nextTick(function () {
                            u.open[r]
                                ? setTimeout(function () {
                                      u.toggleOpen(r);
                                  }, 300)
                                : u.toggleOpen(r);
                        });
                    },
                    getExpandedItems: function () {
                        var r = this,
                            u = this.$el.getElementsByClassName("cmp-accordion__item"),
                            c = this;
                        Array.from(u).forEach(function (n, m) {
                            n.hasAttribute("data-cmp-expanded") && c.$set(r.open, m, !0);
                        });
                    },
                    onItemHover: function (r) {
                        (this.panelHeight[r] && 0 !== this.panelHeight[r] && "0px" !== this.panelHeight[r]) || this.recalculateHeight(null, r);
                    },
                },
                updated: function () {
                    VueBus.$emit("reRenderedView");
                },
            });
    }
});
Element.prototype.matches || (Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector);
Element.prototype.closest ||
    (Element.prototype.closest = function (q) {
        var l = this;
        if (!document.documentElement.contains(l)) return null;
        do {
            if (l.matches(q)) return l;
            l = l.parentElement || l.parentNode;
        } while (null !== l && 1 === l.nodeType);
        return null;
    });
VueBus.resourceReady(function () {
    (function () {
        function q(b) {
            function d(e) {
                k._config = e;
                e.element.removeAttribute("data-cmp-is");
                y(e.options);
                f(e.element);
                if (k._elements.item) {
                    k._elements.item = Array.isArray(k._elements.item) ? k._elements.item : [k._elements.item];
                    k._elements.button = Array.isArray(k._elements.button) ? k._elements.button : [k._elements.button];
                    k._elements.panel = Array.isArray(k._elements.panel) ? k._elements.panel : [k._elements.panel];
                    (e = CQ.CoreComponents.container.utils.getDeepLinkItem(k, "item")) && !e.hasAttribute(g.item.expanded) && z(e, !0);
                    if (k._properties.singleExpansion)
                        if (e)
                            for (var t = 0; t < k._elements.item.length; t++)
                                k._elements.item[t].id !== e.id && k._elements.item[t].hasAttribute(g.item.expanded) && z(k._elements.item[t], !1);
                        else (e = K()), 0 === e.length && B(0), 1 < e.length && B(e.length - 1);
                    h();
                    I();
                    window.Granite &&
                        window.Granite.author &&
                        window.Granite.author.MessageChannel &&
                        ((CQ.CoreComponents.MESSAGE_CHANNEL = CQ.CoreComponents.MESSAGE_CHANNEL || new window.Granite.author.MessageChannel("cqauthor", window)),
                        CQ.CoreComponents.MESSAGE_CHANNEL.subscribeRequestMessage("cmp.panelcontainer", function (C) {
                            if (C.data && "cmp-accordion" === C.data.type && C.data.id === k._elements.self.dataset.cmpPanelcontainerId && "navigate" === C.data.operation) {
                                var H = k._properties.singleExpansion;
                                k._properties.singleExpansion = !0;
                                B(C.data.index);
                                k._properties.singleExpansion = H;
                            }
                        }));
                }
            }
            function f(e) {
                k._elements = {};
                k._elements.self = e;
                e = k._elements.self.querySelectorAll("[data-cmp-hook-accordion]");
                for (var t = 0; t < e.length; t++) {
                    var C = e[t];
                    if (C.closest(".cmp-accordion") === k._elements.self) {
                        var H = "accordion";
                        H = H.charAt(0).toUpperCase() + H.slice(1);
                        H = C.dataset["cmpHook" + H];
                        k._elements[H] ? (Array.isArray(k._elements[H]) || (k._elements[H] = [k._elements[H]]), k._elements[H].push(C)) : (k._elements[H] = C);
                    }
                }
            }
            function y(e) {
                k._properties = {};
                for (var t in a)
                    if (a.hasOwnProperty(t)) {
                        var C = a[t],
                            H = null;
                        e && null != e[t] && ((H = e[t]), C && "function" === typeof C.transform && (H = C.transform(H)));
                        null === H && (H = a[t]["default"]);
                        k._properties[t] = H;
                    }
            }
            function I() {
                var e = k._elements.button;
                if (e)
                    for (var t = 0; t < e.length; t++)
                        (function (C) {
                            e[t].addEventListener("click", function (H) {
                                B(C);
                                x(C);
                            });
                            e[t].addEventListener("keydown", function (H) {
                                var p = k._elements.button.length - 1;
                                switch (H.keyCode) {
                                    case c.ARROW_LEFT:
                                    case c.ARROW_UP:
                                        H.preventDefault();
                                        0 < C && x(C - 1);
                                        break;
                                    case c.ARROW_RIGHT:
                                    case c.ARROW_DOWN:
                                        H.preventDefault();
                                        C < p && x(C + 1);
                                        break;
                                    case c.HOME:
                                        H.preventDefault();
                                        x(0);
                                        break;
                                    case c.END:
                                        H.preventDefault();
                                        x(p);
                                        break;
                                    case c.ENTER:
                                    case c.SPACE:
                                        H.preventDefault(), B(C), x(C);
                                }
                            });
                        })(t);
            }
            function B(e) {
                if ((e = k._elements.item[e])) {
                    if (k._properties.singleExpansion) {
                        for (var t = 0; t < k._elements.item.length; t++) k._elements.item[t] !== e && D(k._elements.item[t]) && z(k._elements.item[t], !1);
                        z(e, !0);
                    } else z(e, !D(e));
                    if (r) {
                        e = k._elements.self.id;
                        var C = K().map(function (H) {
                            return Object.keys(JSON.parse(H.dataset.cmpDataLayer))[0];
                        });
                        t = { component: {} };
                        t.component[e] = { shownItems: C };
                        C = { component: {} };
                        C.component[e] = { shownItems: void 0 };
                        u.push(C);
                        u.push(t);
                    }
                }
            }
            function z(e, t) {
                t
                    ? (e.setAttribute(g.item.expanded, ""),
                      r && u.push({ event: "cmp:show", eventInfo: { path: "component." + Object.keys(JSON.parse(e.dataset.cmpDataLayer))[0] } }))
                    : (e.removeAttribute(g.item.expanded),
                      r && u.push({ event: "cmp:hide", eventInfo: { path: "component." + Object.keys(JSON.parse(e.dataset.cmpDataLayer))[0] } }));
                E(e);
            }
            function D(e) {
                return e && e.dataset && void 0 !== e.dataset.cmpExpanded;
            }
            function E(e) {
                if (D(e)) v(e);
                else {
                    var t = k._elements.item.indexOf(e);
                    -1 < t &&
                        ((e = k._elements.button[t]),
                        (t = k._elements.panel[t]),
                        e.classList.remove(m.button.disabled),
                        e.classList.remove(m.button.expanded),
                        e.removeAttribute("aria-disabled"),
                        e.setAttribute("aria-expanded", !1),
                        t.classList.add(m.panel.hidden),
                        t.classList.remove(m.panel.expanded),
                        t.setAttribute("aria-hidden", !0));
                }
            }
            function h() {
                for (var e = k._elements.item.length, t = 0; t < e; t++) {
                    var C = k._elements.item[t];
                    1 == e && C.classList.contains("edit-mode") ? (C.setAttribute(g.item.expanded, ""), v(C)) : E(C);
                }
            }
            function K() {
                for (var e = [], t = 0; t < k._elements.item.length; t++) {
                    var C = k._elements.item[t];
                    D(C) && e.push(C);
                }
                return e;
            }
            function v(e) {
                var t = k._elements.item.indexOf(e);
                -1 < t &&
                    ((e = k._elements.button[t]),
                    (t = k._elements.panel[t]),
                    e.classList.add(m.button.expanded),
                    e.setAttribute("aria-expanded", !0),
                    t.classList.add(m.panel.expanded),
                    t.classList.remove(m.panel.hidden),
                    t.setAttribute("aria-hidden", !1),
                    k._properties.singleExpansion && (e.classList.add(m.button.disabled), e.setAttribute("aria-disabled", !0)));
            }
            function x(e) {
                k._elements.button[e].focus();
            }
            var k = this;
            b && b.element && d(b);
        }
        function l(b) {
            b = b.dataset;
            var d = [],
                f = "accordion";
            f = f.charAt(0).toUpperCase() + f.slice(1);
            f = ["is", "hook" + f];
            for (var y in b)
                if (b.hasOwnProperty(y)) {
                    var I = b[y];
                    0 === y.indexOf("cmp") && ((y = y.slice(3)), (y = y.charAt(0).toLowerCase() + y.substring(1)), -1 === f.indexOf(y) && (d[y] = I));
                }
            return d;
        }
        function A() {
            u = (r = document.body.hasAttribute("data-cmp-data-layer-enabled")) ? (window.adobeDataLayer = window.adobeDataLayer || []) : void 0;
            for (var b = document.querySelectorAll(n.self), d = 0; d < b.length; d++) new q({ element: b[d], options: l(b[d]) });
            b = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
            d = document.querySelector("body");
            new b(function (f) {
                f.forEach(function (y) {
                    y = [].slice.call(y.addedNodes);
                    0 < y.length &&
                        y.forEach(function (I) {
                            I.querySelectorAll &&
                                [].slice.call(I.querySelectorAll(n.self)).forEach(function (B) {
                                    new q({ element: B, options: l(B) });
                                });
                        });
                });
            }).observe(d, { subtree: !0, childList: !0, characterData: !0 });
        }
        var r,
            u,
            c = { ENTER: 13, SPACE: 32, END: 35, HOME: 36, ARROW_LEFT: 37, ARROW_UP: 38, ARROW_RIGHT: 39, ARROW_DOWN: 40 },
            n = { self: '[data-cmp-is\x3d"accordion"]' },
            m = {
                button: { disabled: "cmp-accordion__button--disabled", expanded: "cmp-accordion__button--expanded" },
                panel: { hidden: "cmp-accordion__panel--hidden", expanded: "cmp-accordion__panel--expanded" },
            },
            g = { item: { expanded: "data-cmp-expanded" } },
            a = {
                singleExpansion: {
                    default: !1,
                    transform: function (b) {
                        return !(null === b || "undefined" === typeof b);
                    },
                },
            };
        "loading" !== document.readyState ? A() : document.addEventListener("DOMContentLoaded", A);
        VueBus.$on("accordionBinded", function () {
            A();
        });
    })();
});
Element.prototype.matches || (Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector);
Element.prototype.closest ||
    (Element.prototype.closest = function (q) {
        var l = this;
        if (!document.documentElement.contains(l)) return null;
        do {
            if (l.matches(q)) return l;
            l = l.parentElement || l.parentNode;
        } while (null !== l && 1 === l.nodeType);
        return null;
    });
(function () {
    function q(g) {
        function a(z) {
            B._config = z;
            z.element.removeAttribute("data-cmp-is");
            d(z.element);
            B._active = b(B._elements.tab);
            B._elements.tabpanel && (y(), f());
            if ((z = CQ.CoreComponents.container.utils.getDeepLinkItemIdx(B, "tab")) && -1 !== z) {
                var D = B._elements.tab[z];
                D && B._elements.tab[B._active].id !== D.id && I(z);
            }
            window.Granite &&
                window.Granite.author &&
                window.Granite.author.MessageChannel &&
                ((CQ.CoreComponents.MESSAGE_CHANNEL = CQ.CoreComponents.MESSAGE_CHANNEL || new window.Granite.author.MessageChannel("cqauthor", window)),
                CQ.CoreComponents.MESSAGE_CHANNEL.subscribeRequestMessage("cmp.panelcontainer", function (E) {
                    E.data &&
                        "cmp-tabs" === E.data.type &&
                        E.data.id === B._elements.self.dataset.cmpPanelcontainerId &&
                        "navigate" === E.data.operation &&
                        ((B._active = E.data.index), y());
                }));
        }
        function b(z) {
            if (z) for (var D = 0; D < z.length; D++) if (z[D].classList.contains(m.active.tab)) return D;
            return 0;
        }
        function d(z) {
            B._elements = {};
            B._elements.self = z;
            z = B._elements.self.querySelectorAll("[data-cmp-hook-tabs]");
            for (var D = 0; D < z.length; D++) {
                var E = z[D];
                if (E.closest(".cmp-tabs") === B._elements.self) {
                    var h = "tabs";
                    h = h.charAt(0).toUpperCase() + h.slice(1);
                    h = E.dataset["cmpHook" + h];
                    B._elements[h] ? (Array.isArray(B._elements[h]) || (B._elements[h] = [B._elements[h]]), B._elements[h].push(E)) : (B._elements[h] = E);
                }
            }
        }
        function f() {
            var z = B._elements.tab;
            if (z)
                for (var D = 0; D < z.length; D++)
                    (function (E) {
                        z[D].addEventListener("click", function (h) {
                            I(E);
                        });
                        z[D].addEventListener("keydown", function (h) {
                            var K = B._active,
                                v = B._elements.tab.length - 1;
                            switch (h.keyCode) {
                                case n.ARROW_LEFT:
                                case n.ARROW_UP:
                                    h.preventDefault();
                                    0 < K && I(K - 1);
                                    break;
                                case n.ARROW_RIGHT:
                                case n.ARROW_DOWN:
                                    h.preventDefault();
                                    K < v && I(K + 1);
                                    break;
                                case n.HOME:
                                    h.preventDefault();
                                    I(0);
                                    break;
                                case n.END:
                                    h.preventDefault(), I(v);
                            }
                        });
                    })(D);
        }
        function y() {
            var z = B._elements.tabpanel,
                D = B._elements.tab;
            if (z)
                if (Array.isArray(z))
                    for (var E = 0; E < z.length; E++)
                        E === parseInt(B._active)
                            ? (z[E].classList.add(m.active.tabpanel),
                              z[E].removeAttribute("aria-hidden"),
                              D[E].classList.add(m.active.tab),
                              D[E].setAttribute("aria-selected", !0),
                              D[E].setAttribute("tabindex", "0"))
                            : (z[E].classList.remove(m.active.tabpanel),
                              z[E].setAttribute("aria-hidden", !0),
                              D[E].classList.remove(m.active.tab),
                              D[E].setAttribute("aria-selected", !1),
                              D[E].setAttribute("tabindex", "-1"));
                else z.classList.add(m.active.tabpanel), D.classList.add(m.active.tab);
        }
        function I(z) {
            var D = B._active;
            B._active = z;
            y();
            var E = window.scrollX || window.pageXOffset,
                h = window.scrollY || window.pageYOffset;
            B._elements.tab[z].focus();
            window.scrollTo(E, h);
            u &&
                ((z = A(B._elements.tabpanel[z])),
                (D = A(B._elements.tabpanel[D])),
                c.push({ event: "cmp:show", eventInfo: { path: "component." + z } }),
                c.push({ event: "cmp:hide", eventInfo: { path: "component." + D } }),
                (D = B._elements.self.id),
                (E = { component: {} }),
                (E.component[D] = { shownItems: [z] }),
                (z = { component: {} }),
                (z.component[D] = { shownItems: void 0 }),
                c.push(z),
                c.push(E));
        }
        var B = this;
        g && g.element && a(g);
    }
    function l(g) {
        g = g.dataset;
        var a = [],
            b = "tabs";
        b = b.charAt(0).toUpperCase() + b.slice(1);
        b = ["is", "hook" + b];
        for (var d in g)
            if (g.hasOwnProperty(d)) {
                var f = g[d];
                0 === d.indexOf("cmp") && ((d = d.slice(3)), (d = d.charAt(0).toLowerCase() + d.substring(1)), -1 === b.indexOf(d) && (a[d] = f));
            }
        return a;
    }
    function A(g) {
        return g && g.dataset.cmpDataLayer ? Object.keys(JSON.parse(g.dataset.cmpDataLayer))[0] : g.id;
    }
    function r() {
        c = (u = document.body.hasAttribute("data-cmp-data-layer-enabled")) ? (window.adobeDataLayer = window.adobeDataLayer || []) : void 0;
        for (var g = document.querySelectorAll(m.self), a = 0; a < g.length; a++) new q({ element: g[a], options: l(g[a]) });
        g = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
        a = document.querySelector("body");
        new g(function (b) {
            b.forEach(function (d) {
                d = [].slice.call(d.addedNodes);
                0 < d.length &&
                    d.forEach(function (f) {
                        f.querySelectorAll &&
                            [].slice.call(f.querySelectorAll(m.self)).forEach(function (y) {
                                new q({ element: y, options: l(y) });
                            });
                    });
            });
        }).observe(a, { subtree: !0, childList: !0, characterData: !0 });
    }
    var u,
        c,
        n = { END: 35, HOME: 36, ARROW_LEFT: 37, ARROW_UP: 38, ARROW_RIGHT: 39, ARROW_DOWN: 40 },
        m = { self: '[data-cmp-is\x3d"tabs"]', active: { tab: "cmp-tabs__tab--active", tabpanel: "cmp-tabs__tabpanel--active" } };
    "loading" !== document.readyState ? r() : document.addEventListener("DOMContentLoaded", r);
    window.addEventListener("load", window.CQ.CoreComponents.container.utils.scrollToAnchor, !1);
    window.addEventListener(
        "hashchange",
        function () {
            if (location.hash && "#" !== location.hash) {
                var g = decodeURIComponent(location.hash);
                (g = document.querySelector(g)) && g.classList.contains("cmp-tabs__tab") && !g.classList.contains("cmp-tabs__tab--active") && g.click();
            }
        },
        !1
    );
})();
(function () {
    function q(a) {
        function b(w) {
            w.element.removeAttribute("data-cmp-is");
            f(w.options);
            d(w.element);
            p._active = 0;
            p._paused = !1;
            p._elements.item && (v(), y(), t(), K());
            window.Granite &&
                window.Granite.author &&
                window.Granite.author.MessageChannel &&
                ((window.CQ = window.CQ || {}),
                (window.CQ.CoreComponents = window.CQ.CoreComponents || {}),
                (window.CQ.CoreComponents.MESSAGE_CHANNEL = window.CQ.CoreComponents.MESSAGE_CHANNEL || new window.Granite.author.MessageChannel("cqauthor", window)),
                window.CQ.CoreComponents.MESSAGE_CHANNEL.subscribeRequestMessage("cmp.panelcontainer", function (F) {
                    F.data && "cmp-carousel" === F.data.type && F.data.id === p._elements.self.dataset.cmpPanelcontainerId && "navigate" === F.data.operation && k(F.data.index);
                }));
        }
        function d(w) {
            p._elements = {};
            p._elements.self = w;
            w = p._elements.self.querySelectorAll("[data-cmp-hook-carousel]");
            for (var F = 0; F < w.length; F++) {
                var G = w[F],
                    J = "carousel";
                J = J.charAt(0).toUpperCase() + J.slice(1);
                J = G.dataset["cmpHook" + J];
                p._elements[J] ? (Array.isArray(p._elements[J]) || (p._elements[J] = [p._elements[J]]), p._elements[J].push(G)) : (p._elements[J] = G);
            }
        }
        function f(w) {
            p._properties = {};
            for (var F in g)
                if (g.hasOwnProperty(F)) {
                    var G = g[F],
                        J = null;
                    w && null != w[F] && ((J = w[F]), G && "function" === typeof G.transform && (J = G.transform(J)));
                    null === J && (J = g[F]["default"]);
                    p._properties[F] = J;
                }
        }
        function y() {
            p._elements.previous &&
                p._elements.previous.addEventListener("click", function () {
                    var L = 0 === p._active ? p._elements.item.length - 1 : p._active - 1;
                    k(L);
                    u && c.push({ event: "cmp:show", eventInfo: { path: "component." + A(p._elements.item[L]) } });
                });
            p._elements.next &&
                p._elements.next.addEventListener("click", function () {
                    var L = x();
                    k(L);
                    u && c.push({ event: "cmp:show", eventInfo: { path: "component." + A(p._elements.item[L]) } });
                });
            var w = p._elements.indicator;
            if (w)
                for (var F = 0; F < w.length; F++)
                    (function (L) {
                        w[F].addEventListener("click", function (M) {
                            e(L);
                        });
                    })(F);
            p._elements.pause && p._properties.autoplay && p._elements.pause.addEventListener("click", D);
            p._elements.play && p._properties.autoplay && p._elements.play.addEventListener("click", E);
            p._elements.self.addEventListener("keydown", I);
            p._properties.autopauseDisabled || (p._elements.self.addEventListener("mouseenter", B), p._elements.self.addEventListener("mouseleave", z));
            var G = p._elements.item;
            if (G) for (var J = 0; J < G.length; J++) G[J].addEventListener("focusin", B), G[J].addEventListener("focusout", z);
        }
        function I(w) {
            var F = p._active,
                G = p._elements.indicator.length - 1;
            switch (w.keyCode) {
                case n.ARROW_LEFT:
                case n.ARROW_UP:
                    w.preventDefault();
                    0 < F && e(F - 1);
                    break;
                case n.ARROW_RIGHT:
                case n.ARROW_DOWN:
                    w.preventDefault();
                    F < G && e(F + 1);
                    break;
                case n.HOME:
                    w.preventDefault();
                    e(0);
                    break;
                case n.END:
                    w.preventDefault();
                    e(G);
                    break;
                case n.SPACE:
                    p._properties.autoplay &&
                        w.target !== p._elements.previous &&
                        w.target !== p._elements.next &&
                        (w.preventDefault(), p._paused ? h() : ((p._paused = !0), C(), K())),
                        w.target === p._elements.pause && p._elements.play.focus(),
                        w.target === p._elements.play && p._elements.pause.focus();
            }
        }
        function B(w) {
            C();
        }
        function z(w) {
            t();
        }
        function D(w) {
            p._paused = !0;
            C();
            K();
            p._elements.play.focus();
        }
        function E() {
            h();
            p._elements.pause.focus();
        }
        function h() {
            var w = (p._paused = !1);
            p._elements.self.parentElement && (w = p._elements.self.parentElement.querySelector(":hover") === p._elements.self);
            (!p._properties.autopauseDisabled && w) || t();
            K();
        }
        function K() {
            H(p._elements.pause, p._paused);
            H(p._elements.play, !p._paused);
        }
        function v() {
            var w = p._elements.item,
                F = p._elements.indicator;
            if (w)
                if (Array.isArray(w))
                    for (var G = 0; G < w.length; G++)
                        G === parseInt(p._active)
                            ? (w[G].classList.add("cmp-carousel__item--active"),
                              w[G].removeAttribute("aria-hidden"),
                              F[G].classList.add("cmp-carousel__indicator--active"),
                              F[G].setAttribute("aria-selected", !0),
                              F[G].setAttribute("tabindex", "0"))
                            : (w[G].classList.remove("cmp-carousel__item--active"),
                              w[G].setAttribute("aria-hidden", !0),
                              F[G].classList.remove("cmp-carousel__indicator--active"),
                              F[G].setAttribute("aria-selected", !1),
                              F[G].setAttribute("tabindex", "-1"));
                else w.classList.add("cmp-carousel__item--active"), F.classList.add("cmp-carousel__indicator--active");
        }
        function x() {
            return p._active === p._elements.item.length - 1 ? 0 : p._active + 1;
        }
        function k(w) {
            if (!(0 > w || w > p._elements.item.length - 1)) {
                p._active = w;
                v();
                if (u) {
                    var F = p._elements.self.id,
                        G = A(p._elements.item[w]);
                    w = { component: {} };
                    w.component[F] = { shownItems: [G] };
                    G = { component: {} };
                    G.component[F] = { shownItems: void 0 };
                    c.push(G);
                    c.push(w);
                }
                p._elements.self.parentElement && p._elements.self.parentElement.querySelector(":hover") !== p._elements.self && t();
            }
        }
        function e(w) {
            k(w);
            var F = window.scrollX || window.pageXOffset,
                G = window.scrollY || window.pageYOffset;
            p._elements.indicator[w].focus();
            window.scrollTo(F, G);
            u && c.push({ event: "cmp:show", eventInfo: { path: "component." + A(p._elements.item[w]) } });
        }
        function t() {
            !p._paused &&
                p._properties.autoplay &&
                (C(),
                (p._autoplayIntervalId = window.setInterval(function () {
                    if (!document.visibilityState || !document.hidden) {
                        var w = p._elements.indicators;
                        w !== document.activeElement && w.contains(document.activeElement) ? e(x()) : k(x());
                    }
                }, p._properties.delay)));
        }
        function C() {
            window.clearInterval(p._autoplayIntervalId);
            p._autoplayIntervalId = null;
        }
        function H(w, F) {
            w && (!1 !== F ? ((w.disabled = !0), w.classList.add("cmp-carousel__action--disabled")) : ((w.disabled = !1), w.classList.remove("cmp-carousel__action--disabled")));
        }
        var p = this;
        a && a.element && b(a);
    }
    function l(a) {
        a = a.dataset;
        var b = [],
            d = "carousel";
        d = d.charAt(0).toUpperCase() + d.slice(1);
        d = ["is", "hook" + d];
        for (var f in a)
            if (a.hasOwnProperty(f)) {
                var y = a[f];
                0 === f.indexOf("cmp") && ((f = f.slice(3)), (f = f.charAt(0).toLowerCase() + f.substring(1)), -1 === d.indexOf(f) && (b[f] = y));
            }
        return b;
    }
    function A(a) {
        return a && a.dataset.cmpDataLayer ? Object.keys(JSON.parse(a.dataset.cmpDataLayer))[0] : a.id;
    }
    function r() {
        c = (u = document.body.hasAttribute("data-cmp-data-layer-enabled")) ? (window.adobeDataLayer = window.adobeDataLayer || []) : void 0;
        for (var a = document.querySelectorAll(m.self), b = 0; b < a.length; b++) new q({ element: a[b], options: l(a[b]) });
        a = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
        b = document.querySelector("body");
        new a(function (d) {
            d.forEach(function (f) {
                f = [].slice.call(f.addedNodes);
                0 < f.length &&
                    f.forEach(function (y) {
                        y.querySelectorAll &&
                            [].slice.call(y.querySelectorAll(m.self)).forEach(function (I) {
                                new q({ element: I, options: l(I) });
                            });
                    });
            });
        }).observe(b, { subtree: !0, childList: !0, characterData: !0 });
    }
    var u,
        c,
        n = { SPACE: 32, END: 35, HOME: 36, ARROW_LEFT: 37, ARROW_UP: 38, ARROW_RIGHT: 39, ARROW_DOWN: 40 },
        m = { self: '[data-cmp-is\x3d"carousel"]' },
        g = {
            autoplay: {
                default: !1,
                transform: function (a) {
                    return !(null === a || "undefined" === typeof a);
                },
            },
            delay: {
                default: 5e3,
                transform: function (a) {
                    a = parseFloat(a);
                    return isNaN(a) ? null : a;
                },
            },
            autopauseDisabled: {
                default: !1,
                transform: function (a) {
                    return !(null === a || "undefined" === typeof a);
                },
            },
        };
    "loading" !== document.readyState ? r() : document.addEventListener("DOMContentLoaded", r);
})();
window.Element &&
    !Element.prototype.closest &&
    (Element.prototype.closest = function (q) {
        q = (this.document || this.ownerDocument).querySelectorAll(q);
        var l = this,
            A;
        do for (A = q.length; 0 <= --A && q.item(A) !== l; );
        while (0 > A && (l = l.parentElement));
        return l;
    });
window.Element &&
    !Element.prototype.matches &&
    (Element.prototype.matches =
        Element.prototype.matchesSelector ||
        Element.prototype.mozMatchesSelector ||
        Element.prototype.msMatchesSelector ||
        Element.prototype.oMatchesSelector ||
        Element.prototype.webkitMatchesSelector ||
        function (q) {
            q = (this.document || this.ownerDocument).querySelectorAll(q);
            for (var l = q.length; 0 <= --l && q.item(l) !== this; );
            return -1 < l;
        });
Object.assign ||
    (Object.assign = function (q, l) {
        if (null === q) throw new TypeError("Cannot convert undefined or null to object");
        for (var A = Object(q), r = 1; r < arguments.length; r++) {
            var u = arguments[r];
            if (null !== u) for (var c in u) Object.prototype.hasOwnProperty.call(u, c) && (A[c] = u[c]);
        }
        return A;
    });
(function (q) {
    q.forEach(function (l) {
        l.hasOwnProperty("remove") ||
            Object.defineProperty(l, "remove", {
                configurable: !0,
                enumerable: !0,
                writable: !0,
                value: function () {
                    this.parentNode.removeChild(this);
                },
            });
    });
})([Element.prototype, CharacterData.prototype, DocumentType.prototype]);
(function () {
    function q(m) {
        m = m.dataset;
        var g = [],
            a = "image";
        a = a.charAt(0).toUpperCase() + a.slice(1);
        a = ["is", "hook" + a];
        for (var b in m)
            if (m.hasOwnProperty(b)) {
                var d = m[b];
                0 === b.indexOf("cmp") && ((b = b.slice(3)), (b = b.charAt(0).toLowerCase() + b.substring(1)), -1 === a.indexOf(b) && (g[b] = d));
            }
        return g;
    }
    function l(m) {
        function g(v) {
            v.element.removeAttribute("data-cmp-is");
            z(v.options);
            B(v.element);
            if (v.options.src && v.options.hasOwnProperty("dmimage") && "SmartCrop:Auto" === v.options.smartcroprendition) {
                var x = new XMLHttpRequest();
                v = decodeURIComponent(v.options.src).split("{.width}")[0] + "?req\x3dset,json";
                x.open("GET", v, !1);
                x.onload = function () {
                    if (200 <= x.status && 400 > x.status) {
                        var k = new RegExp(/^{[\s\S]*}$/gim),
                            e = new RegExp(/^(?:\/\*jsonp\*\/)?\s*([^()]+)\(([\s\S]+),\s*"[0-9]*"\);?$/gim).exec(x.responseText),
                            t;
                        e && ((e = e[2]), k.test(e) && (t = JSON.parse(e)));
                        if (t && t.set.relation && 0 < t.set.relation.length)
                            for (k = 0; k < t.set.relation.length; k++) K[parseInt(t.set.relation[k].userdata.SmartCropWidth)] = ":" + t.set.relation[k].userdata.SmartCropDef;
                    }
                };
                x.send();
            }
            h._elements.noscript &&
                ((h._elements.container = h._elements.link ? h._elements.link : h._elements.self),
                f(),
                h._properties.lazy && d(),
                h._elements.map && h._elements.image.addEventListener("load", E),
                window.addEventListener("resize", D),
                "focus click load transitionend animationend scroll".split(" ").forEach(function (k) {
                    document.addEventListener(k, h.update);
                }),
                h._elements.image.addEventListener("cmp-image-redraw", h.update),
                h.update());
        }
        function a() {
            var v = (h._properties.widths && 0 < h._properties.widths.length) || 0 < Object.keys(K).length;
            if (0 < Object.keys(K).length) {
                var x = b(Object.keys(K));
                x = K[x];
            } else x = v ? (h._properties.dmimage ? "" : ".") + b(h._properties.widths) : "";
            x = h._properties.src.replace("{.width}", x);
            var k = h._elements.image.getAttribute("src");
            if (x !== k)
                if (null === k || "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" === k) h._elements.image.setAttribute("src", x);
                else {
                    var e = h._properties.src.split("{.width}"),
                        t = k.startsWith(e[0]);
                    t && 1 < e.length && (t = k.endsWith(e[e.length - 1]));
                    t && (h._elements.image.setAttribute("src", x), v || window.removeEventListener("scroll", h.update));
                }
            h._lazyLoaderShowing && h._elements.image.addEventListener("load", y);
        }
        function b(v) {
            for (var x = h._elements.self, k = x.clientWidth; 0 === k && x.parentNode; ) (x = x.parentNode), (k = x.clientWidth);
            x = k * n;
            k = v.length;
            for (var e = 0; e < k - 1 && v[e] < x; ) e++;
            return v[e].toString();
        }
        function d() {
            var v = h._elements.image.getAttribute("width"),
                x = h._elements.image.getAttribute("height");
            if (v && x) {
                var k = u.style;
                k["padding-bottom"] = (x / v) * 100 + "%";
                for (var e in k) k.hasOwnProperty(e) && (h._elements.image.style[e] = k[e]);
            }
            h._elements.image.setAttribute("src", "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
            h._elements.image.classList.add(u.cssClass);
            h._lazyLoaderShowing = !0;
        }
        function f() {
            var v = h._elements.noscript.textContent.trim();
            v = v.replace(/&(amp;)*lt;/g, "\x3c");
            v = v.replace(/&(amp;)*gt;/g, "\x3e");
            v = new DOMParser().parseFromString(v, "text/html");
            var x = v.querySelector(r.image);
            x.removeAttribute("src");
            h._elements.container.insertBefore(x, h._elements.noscript);
            (v = v.querySelector(r.map)) && h._elements.container.insertBefore(v, h._elements.noscript);
            h._elements.noscript.parentNode.removeChild(h._elements.noscript);
            h._elements.container.matches(r.image) ? (h._elements.image = h._elements.container) : (h._elements.image = h._elements.container.querySelector(r.image));
            h._elements.map = h._elements.container.querySelector(r.map);
            h._elements.areas = h._elements.container.querySelectorAll(r.area);
        }
        function y() {
            h._elements.image.classList.remove(u.cssClass);
            for (var v in u.style) u.style.hasOwnProperty(v) && (h._elements.image.style[v] = "");
            h._elements.image.removeEventListener("load", y);
            h._lazyLoaderShowing = !1;
        }
        function I() {
            if (h._elements.areas && 0 < h._elements.areas.length)
                for (var v = 0; v < h._elements.areas.length; v++) {
                    var x = h._elements.image.width,
                        k = h._elements.image.height;
                    if (x && k) {
                        var e = h._elements.areas[v].dataset.cmpRelcoords;
                        if (e) {
                            e = e.split(",");
                            for (var t = Array(e.length), C = 0; C < t.length; C++) t[C] = 0 === C % 2 ? parseInt(e[C] * x) : parseInt(e[C] * k);
                            h._elements.areas[v].coords = t;
                        }
                    }
                }
        }
        function B(v) {
            h._elements = {};
            h._elements.self = v;
            v = h._elements.self.querySelectorAll("[data-cmp-hook-image]");
            for (var x = 0; x < v.length; x++) {
                var k = v[x],
                    e = "image";
                e = e.charAt(0).toUpperCase() + e.slice(1);
                h._elements[k.dataset["cmpHook" + e]] = k;
            }
        }
        function z(v) {
            h._properties = {};
            for (var x in c)
                if (c.hasOwnProperty(x)) {
                    var k = c[x];
                    h._properties[x] = v && null != v[x] ? (k && "function" === typeof k.transform ? k.transform(v[x]) : v[x]) : c[x]["default"];
                }
        }
        function D() {
            h.update();
            I();
        }
        function E() {
            I();
        }
        var h = this,
            K = {};
        h.update = function () {
            if (h._properties.lazy) {
                if (null === h._elements.container.offsetParent) var v = !1;
                else {
                    v = window.pageYOffset;
                    var x = v + document.documentElement.clientHeight,
                        k = h._elements.container.getBoundingClientRect().top + v;
                    v = k + h._elements.container.clientHeight >= v - h._properties.lazythreshold && k <= x + h._properties.lazythreshold;
                }
                v && a();
            } else a();
        };
        m && m.element && g(m);
    }
    function A() {
        for (var m = document.querySelectorAll(r.self), g = 0; g < m.length; g++) new l({ element: m[g], options: q(m[g]) });
        m = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
        g = document.querySelector("body");
        new m(function (a) {
            a.forEach(function (b) {
                b = [].slice.call(b.addedNodes);
                0 < b.length &&
                    b.forEach(function (d) {
                        d.querySelectorAll &&
                            [].slice.call(d.querySelectorAll(r.self)).forEach(function (f) {
                                new l({ element: f, options: q(f) });
                            });
                    });
            });
        }).observe(g, { subtree: !0, childList: !0, characterData: !0 });
    }
    var r = { self: '[data-cmp-is\x3d"image"]', image: '[data-cmp-hook-image\x3d"image"]', map: '[data-cmp-hook-image\x3d"map"]', area: '[data-cmp-hook-image\x3d"area"]' },
        u = { cssClass: "cmp-image__image--is-loading", style: { height: 0, "padding-bottom": "" } },
        c = {
            widths: {
                default: [],
                transform: function (m) {
                    var g = [];
                    m.split(",").forEach(function (a) {
                        a = parseFloat(a);
                        isNaN(a) || g.push(a);
                    });
                    return g;
                },
            },
            lazy: {
                default: !1,
                transform: function (m) {
                    return !(null === m || "undefined" === typeof m);
                },
            },
            dmimage: {
                default: !1,
                transform: function (m) {
                    return !(null === m || "undefined" === typeof m);
                },
            },
            lazythreshold: {
                default: 0,
                transform: function (m) {
                    m = parseInt(m);
                    return isNaN(m) ? 0 : m;
                },
            },
            src: {
                transform: function (m) {
                    return decodeURIComponent(m);
                },
            },
        },
        n = window.devicePixelRatio || 1;
    "loading" !== document.readyState ? A() : document.addEventListener("DOMContentLoaded", A);
})();
(function () {
    function q(a) {
        a = a.dataset;
        var b = [],
            d = "search";
        d = d.charAt(0).toUpperCase() + d.slice(1);
        d = ["is", "hook" + d];
        for (var f in a)
            if (a.hasOwnProperty(f)) {
                var y = a[f];
                0 === f.indexOf("cmp") && ((f = f.slice(3)), (f = f.charAt(0).toLowerCase() + f.substring(1)), -1 === d.indexOf(f) && (b[f] = y));
            }
        return b;
    }
    function l(a, b) {
        a && (!1 !== b ? ((a.style.display = "block"), a.setAttribute("aria-hidden", !1)) : ((a.style.display = "none"), a.setAttribute("aria-hidden", !0)));
    }
    function A(a) {
        var b = [];
        if (a && a.elements)
            for (var d = 0; d < a.elements.length; d++) {
                var f = a.elements[d];
                !f.disabled && f.name && ((f = [f.name, encodeURIComponent(f.value)]), b.push(f.join("\x3d")));
            }
        return b.join("\x26");
    }
    function r(a, b) {
        if (a && b)
            if (3 === a.nodeType) {
                var d = a.nodeValue;
                b = b.exec(d);
                if (d && b) {
                    d = document.createElement("mark");
                    d.className = "cmp-search__item-mark";
                    d.appendChild(document.createTextNode(b[0]));
                    var f = a.splitText(b.index);
                    f.nodeValue = f.nodeValue.substring(b[0].length);
                    a.parentNode.insertBefore(d, f);
                }
            } else if (a.hasChildNodes()) for (d = 0; d < a.childNodes.length; d++) r(a.childNodes[d], b);
    }
    function u(a) {
        a.element && a.element.removeAttribute("data-cmp-is");
        this._cacheElements(a.element);
        this._setupProperties(a.options);
        this._action = this._elements.form.getAttribute("action");
        this._resultsOffset = 0;
        this._hasMoreResults = !0;
        this._elements.input.addEventListener("input", this._onInput.bind(this));
        this._elements.input.addEventListener("focus", this._onInput.bind(this));
        this._elements.input.addEventListener("keydown", this._onKeydown.bind(this));
        this._elements.clear.addEventListener("click", this._onClearClick.bind(this));
        document.addEventListener("click", this._onDocumentClick.bind(this));
        this._elements.results.addEventListener("scroll", this._onScroll.bind(this));
        this._makeAccessible();
    }
    function c() {
        for (var a = document.querySelectorAll(n.self), b = 0; b < a.length; b++) new u({ element: a[b], options: q(a[b]) });
        a = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
        b = document.querySelector("body");
        new a(function (d) {
            d.forEach(function (f) {
                f = [].slice.call(f.addedNodes);
                0 < f.length &&
                    f.forEach(function (y) {
                        y.querySelectorAll &&
                            [].slice.call(y.querySelectorAll(n.self)).forEach(function (I) {
                                new u({ element: I, options: q(I) });
                            });
                    });
            });
        }).observe(b, { subtree: !0, childList: !0, characterData: !0 });
    }
    var n = {
            self: '[data-cmp-is\x3d"search"]',
            item: { self: '[data-cmp-hook-search\x3d"item"]', title: '[data-cmp-hook-search\x3d"itemTitle"]', focused: ".cmp-search__item--is-focused" },
        },
        m = {
            minLength: {
                default: 3,
                transform: function (a) {
                    a = parseFloat(a);
                    return isNaN(a) ? null : a;
                },
            },
            resultsSize: {
                default: 10,
                transform: function (a) {
                    a = parseFloat(a);
                    return isNaN(a) ? null : a;
                },
            },
        },
        g = 0;
    u.prototype._displayResults = function () {
        0 === this._elements.input.value.length
            ? (l(this._elements.clear, !1), this._cancelResults())
            : (this._elements.input.value.length < this._properties.minLength || this._updateResults(), l(this._elements.clear, !0));
    };
    u.prototype._onScroll = function (a) {
        this._elements.results.scrollTop + 2 * this._elements.results.clientHeight >= this._elements.results.scrollHeight &&
            ((this._resultsOffset += this._properties.resultsSize), this._displayResults());
    };
    u.prototype._onInput = function (a) {
        var b = this;
        b._cancelResults();
        this._timeout = setTimeout(function () {
            b._displayResults();
        }, 300);
    };
    u.prototype._onKeydown = function (a) {
        switch (a.keyCode) {
            case 9:
                this._resultsOpen() && (l(this._elements.results, !1), this._elements.input.setAttribute("aria-expanded", "false"));
                break;
            case 13:
                a.preventDefault();
                this._resultsOpen() && (a = this._elements.results.querySelector(n.item.focused)) && a.click();
                break;
            case 27:
                this._cancelResults();
                break;
            case 38:
                this._resultsOpen() && (a.preventDefault(), this._stepResultFocus(!0));
                break;
            case 40:
                this._resultsOpen() ? (a.preventDefault(), this._stepResultFocus()) : this._onInput();
        }
    };
    u.prototype._onClearClick = function (a) {
        a.preventDefault();
        this._elements.input.value = "";
        l(this._elements.clear, !1);
        l(this._elements.results, !1);
        this._elements.input.setAttribute("aria-expanded", "false");
    };
    u.prototype._onDocumentClick = function (a) {
        var b = this._elements.input.contains(a.target);
        a = this._elements.results.contains(a.target);
        b || a || (l(this._elements.results, !1), this._elements.input.setAttribute("aria-expanded", "false"));
    };
    u.prototype._resultsOpen = function () {
        return "none" !== this._elements.results.style.display;
    };
    u.prototype._makeAccessible = function () {
        var a = "cmp-search-results-" + g;
        this._elements.input.setAttribute("aria-owns", a);
        this._elements.results.id = a;
        g++;
    };
    u.prototype._generateItems = function (a, b) {
        var d = this;
        a.forEach(function (f) {
            var y = document.createElement("span");
            y.innerHTML = d._elements.itemTemplate.innerHTML;
            y.querySelectorAll(n.item.title)[0].appendChild(document.createTextNode(f.title));
            y.querySelectorAll(n.item.self)[0].setAttribute("href", f.url);
            b.innerHTML += y.innerHTML;
        });
    };
    u.prototype._markResults = function () {
        var a = this._elements.results.querySelectorAll(n.item.self),
            b = this._elements.input.value.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$\x26");
        b = new RegExp("(" + b + ")", "gi");
        for (var d = this._resultsOffset - 1; d < a.length; ++d) r(a[d], b);
    };
    u.prototype._stepResultFocus = function (a) {
        var b = this._elements.results.querySelectorAll(n.item.self),
            d = this._elements.results.querySelector(n.item.focused);
        d = Array.prototype.indexOf.call(b, d);
        if (0 < b.length)
            if (a) {
                if (
                    (1 <= d &&
                        (b[d].classList.remove("cmp-search__item--is-focused"),
                        b[d].setAttribute("aria-selected", "false"),
                        b[d - 1].classList.add("cmp-search__item--is-focused"),
                        b[d - 1].setAttribute("aria-selected", "true")),
                    (a = this._elements.results.querySelector(n.item.focused)))
                )
                    (a = this._elements.results.scrollTop - a.offsetTop), 0 < a && (this._elements.results.scrollTop -= a);
            } else if (
                (0 > d
                    ? (b[0].classList.add("cmp-search__item--is-focused"), b[0].setAttribute("aria-selected", "true"))
                    : d + 1 < b.length &&
                      (b[d].classList.remove("cmp-search__item--is-focused"),
                      b[d].setAttribute("aria-selected", "false"),
                      b[d + 1].classList.add("cmp-search__item--is-focused"),
                      b[d + 1].setAttribute("aria-selected", "true")),
                (a = this._elements.results.querySelector(n.item.focused)))
            )
                (a = a.offsetTop + a.offsetHeight - this._elements.results.scrollTop - this._elements.results.clientHeight),
                    0 < a ? (this._elements.results.scrollTop += a) : this._onScroll();
    };
    u.prototype._updateResults = function () {
        var a = this;
        if (a._hasMoreResults) {
            var b = new XMLHttpRequest(),
                d = a._action + "?" + A(a._elements.form) + "\x26resultsOffset\x3d" + a._resultsOffset;
            b.open("GET", d, !0);
            b.onload = function () {
                setTimeout(function () {
                    l(a._elements.loadingIndicator, !1);
                    l(a._elements.icon, !0);
                }, 300);
                if (200 <= b.status && 400 > b.status) {
                    var f = JSON.parse(b.responseText);
                    0 < f.length
                        ? (a._generateItems(f, a._elements.results), a._markResults(), l(a._elements.results, !0), a._elements.input.setAttribute("aria-expanded", "true"))
                        : (a._hasMoreResults = !1);
                    0 < a._elements.results.querySelectorAll(n.item.self).length % a._properties.resultsSize && (a._hasMoreResults = !1);
                }
            };
            l(a._elements.loadingIndicator, !0);
            l(a._elements.icon, !1);
            b.send();
        }
    };
    u.prototype._cancelResults = function () {
        clearTimeout(this._timeout);
        this._resultsOffset = this._elements.results.scrollTop = 0;
        this._hasMoreResults = !0;
        this._elements.results.innerHTML = "";
        this._elements.input.setAttribute("aria-expanded", "false");
    };
    u.prototype._cacheElements = function (a) {
        this._elements = {};
        this._elements.self = a;
        a = this._elements.self.querySelectorAll("[data-cmp-hook-search]");
        for (var b = 0; b < a.length; b++) {
            var d = a[b],
                f = "search";
            f = f.charAt(0).toUpperCase() + f.slice(1);
            this._elements[d.dataset["cmpHook" + f]] = d;
        }
    };
    u.prototype._setupProperties = function (a) {
        this._properties = {};
        for (var b in m)
            if (m.hasOwnProperty(b)) {
                var d = m[b];
                this._properties[b] = a && null != a[b] ? (d && "function" === typeof d.transform ? d.transform(a[b]) : a[b]) : m[b]["default"];
            }
    };
    "loading" !== document.readyState ? c() : document.addEventListener("DOMContentLoaded", c);
})();
(function () {
    function q(c) {
        c = c.dataset;
        var n = [],
            m = "formText";
        m = m.charAt(0).toUpperCase() + m.slice(1);
        m = ["is", "hook" + m];
        for (var g in c)
            if (c.hasOwnProperty(g)) {
                var a = c[g];
                0 === g.indexOf("cmp") && ((g = g.slice(3)), (g = g.charAt(0).toLowerCase() + g.substring(1)), -1 === m.indexOf(g) && (n[g] = a));
            }
        return n;
    }
    function l(c) {
        c.element && c.element.removeAttribute("data-cmp-is");
        this._cacheElements(c.element);
        this._setupProperties(c.options);
        this._elements.input.addEventListener("invalid", this._onInvalid.bind(this));
        this._elements.input.addEventListener("input", this._onInput.bind(this));
    }
    function A() {
        for (var c = document.querySelectorAll(r.self), n = 0; n < c.length; n++) new l({ element: c[n], options: q(c[n]) });
        c = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
        n = document.querySelector("body");
        new c(function (m) {
            m.forEach(function (g) {
                g = [].slice.call(g.addedNodes);
                0 < g.length &&
                    g.forEach(function (a) {
                        a.querySelectorAll &&
                            [].slice.call(a.querySelectorAll(r.self)).forEach(function (b) {
                                new l({ element: b, options: q(b) });
                            });
                    });
            });
        }).observe(n, { subtree: !0, childList: !0, characterData: !0 });
    }
    var r = { self: '[data-cmp-is\x3d"formText"]' },
        u = { constraintMessage: "", requiredMessage: "" };
    l.prototype._onInvalid = function (c) {
        c.target.setCustomValidity("");
        c.target.validity.typeMismatch
            ? this._properties.constraintMessage && c.target.setCustomValidity(this._properties.constraintMessage)
            : c.target.validity.valueMissing && this._properties.requiredMessage && c.target.setCustomValidity(this._properties.requiredMessage);
    };
    l.prototype._onInput = function (c) {
        c.target.setCustomValidity("");
    };
    l.prototype._cacheElements = function (c) {
        this._elements = {};
        this._elements.self = c;
        c = this._elements.self.querySelectorAll("[data-cmp-hook-form-text]");
        for (var n = 0; n < c.length; n++) {
            var m = c[n],
                g = "formText";
            g = g.charAt(0).toUpperCase() + g.slice(1);
            this._elements[m.dataset["cmpHook" + g]] = m;
        }
    };
    l.prototype._setupProperties = function (c) {
        this._properties = {};
        for (var n in u)
            if (u.hasOwnProperty(n)) {
                var m = u[n];
                this._properties[n] = c && null != c[n] ? (m && "function" === typeof m.transform ? m.transform(c[n]) : c[n]) : u[n]["default"];
            }
    };
    "loading" !== document.readyState ? A() : document.addEventListener("DOMContentLoaded", A);
})();
(function () {
    function q(c) {
        c = c.dataset;
        var n = [],
            m = "formText";
        m = m.charAt(0).toUpperCase() + m.slice(1);
        m = ["is", "hook" + m];
        for (var g in c)
            if (Object.prototype.hasOwnProperty.call(c, g)) {
                var a = c[g];
                0 === g.indexOf("cmp") && ((g = g.slice(3)), (g = g.charAt(0).toLowerCase() + g.substring(1)), -1 === m.indexOf(g) && (n[g] = a));
            }
        return n;
    }
    function l(c) {
        c.element && c.element.removeAttribute("data-cmp-is");
        this._cacheElements(c.element);
        this._setupProperties(c.options);
        this._elements.input.addEventListener("invalid", this._onInvalid.bind(this));
        this._elements.input.addEventListener("input", this._onInput.bind(this));
    }
    function A() {
        for (var c = document.querySelectorAll(r.self), n = 0; n < c.length; n++) new l({ element: c[n], options: q(c[n]) });
        c = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
        n = document.querySelector("body");
        new c(function (m) {
            m.forEach(function (g) {
                g = [].slice.call(g.addedNodes);
                0 < g.length &&
                    g.forEach(function (a) {
                        a.querySelectorAll &&
                            [].slice.call(a.querySelectorAll(r.self)).forEach(function (b) {
                                new l({ element: b, options: q(b) });
                            });
                    });
            });
        }).observe(n, { subtree: !0, childList: !0, characterData: !0 });
    }
    var r = { self: '[data-cmp-is\x3d"formText"]' },
        u = { constraintMessage: "", requiredMessage: "" };
    l.prototype._onInvalid = function (c) {
        c.target.setCustomValidity("");
        c.target.validity.typeMismatch
            ? this._properties.constraintMessage && c.target.setCustomValidity(this._properties.constraintMessage)
            : c.target.validity.valueMissing && this._properties.requiredMessage && c.target.setCustomValidity(this._properties.requiredMessage);
    };
    l.prototype._onInput = function (c) {
        c.target.setCustomValidity("");
    };
    l.prototype._cacheElements = function (c) {
        this._elements = {};
        this._elements.self = c;
        c = this._elements.self.querySelectorAll("[data-cmp-hook-form-text]");
        for (var n = 0; n < c.length; n++) {
            var m = c[n],
                g = "formText";
            g = g.charAt(0).toUpperCase() + g.slice(1);
            this._elements[m.dataset["cmpHook" + g]] = m;
        }
    };
    l.prototype._setupProperties = function (c) {
        this._properties = {};
        for (var n in u)
            if (Object.prototype.hasOwnProperty.call(u, n)) {
                var m = u[n];
                this._properties[n] = c && null != c[n] ? (m && "function" === typeof m.transform ? m.transform(c[n]) : c[n]) : u[n]["default"];
            }
    };
    "loading" !== document.readyState ? A() : document.addEventListener("DOMContentLoaded", A);
})();
VueBus.resourceReady(function () {
    new Vue({
        data: { globalInfo: {} },
        el: "#pagesettings",
        mounted: function () {
            var q = this;
            this.globalInfo.currentPagePath = this.$refs.currentPagePath.value;
            this.globalInfo.currentLanguage = this.$refs.currentLanguage.value;
            this.globalInfo.currentCountry = this.$refs.currentCountry.value;
            this.globalInfo.currentCountryPath = this.$refs.currentCountryPath.value;
            this.globalInfo.searchPagePath = this.$refs.searchPagePath.value;
            this.globalInfo.countryListPath = this.$refs.countryListPath.value;
            this.globalInfo.rootPagePath = this.$refs.rootPagePath.value;
            this.globalInfo.structureDepth = this.$refs.structureDepth.value;
            this.globalInfo.navRootShiftDepth = this.$refs.navRootShiftDepth.value;
            this.globalInfo.navigationColorInverted = this.$refs.navigationColorInverted.value;
            this.globalInfo.topMargin = this.$refs.topMargin.value;
            this.globalInfo.digitalDataAsJSON = this.$refs.digitalDataAsJSON.value;
            digitalData.push(JSON.parse(this.globalInfo && this.globalInfo.digitalDataAsJSON));
            VueBus.$emit("globalInfo", this.globalInfo);
            VueBus.$on("sendGlobalInfo", function () {
                VueBus.$emit("globalInfo", q.globalInfo);
            });
        },
    });
});
VueBus.resourceReady(function () {
    new Vue({ el: "#modals" });
});
VueBus.resourceReady(function () {
    new Vue({
        el: "#left-side-header",
        data: { showLeftHeader: "", rootPathUrl: "" },
        mixins: [utilitiesMixin],
        methods: {
            handleScroll: function () {
                this.showLeftHeader = 0 === (this.isEdge ? window.pageYOffset : this.isIE ? window.scrollY : document.documentElement.scrollTop) ? "show" : "hide";
            },
            getGlobalInfo: function (q) {
                this.rootPathUrl = q.rootPagePath;
                VueBus.$off("globalInfo");
            },
            navItemsOnScroll: function (q) {
                this.showLeftHeader = 0 === q.target.scrollTop ? "show" : "hide";
            },
        },
        mounted: function () {
            window.addEventListener("scroll", this.handleScroll);
            VueBus.$on("globalInfo", this.getGlobalInfo);
            VueBus.register("left-side-header");
            VueBus.$on("navItemsOnScroll", this.navItemsOnScroll);
        },
    });
});
VueBus.resourceReady(function () {
    new Vue({
        data: function () {
            return { exitRampConfig: {}, externalLinks: [] };
        },
        el: "#headersettings",
        methods: {
            isWhileListed: function (q) {
                return this.exitRampConfig.whitelistedURLs
                    ? this.exitRampConfig.whitelistedURLs.split(",").some(function (l) {
                          return -1 !== q.indexOf(l);
                      })
                    : !1;
            },
            buildExitRampConfirmation: function () {
                var q = this,
                    l = null != this.externalLinks && 0 < this.externalLinks.length ? this.externalLinks.length : 0,
                    A = Array.from(document.getElementsByTagName("a")).filter(function (r) {
                        return -1 === r.href.indexOf(location.hostname) && -1 !== r.href.indexOf("http");
                    });
                this.exitRampConfig = this.$refs.exitRampConfig && JSON.parse(this.$refs.exitRampConfig.value);
                this.getBoolean(this.exitRampConfig.exitRamp) &&
                    setTimeout(function () {
                        for (var r = 0; r < A.length; r++)
                            q.externalLinks.push(A[r].href),
                                q.isWhileListed(A[r].href) ||
                                    (A[r].removeAttribute("href"),
                                    A[r].setAttribute(
                                        "onClick",
                                        "(function() {\n                                    VueBus.$emit('setContentConfirmDialog', {\n                                        content: \""
                                            .concat(q.exitRampConfig.exitRampMessage, '",\n                                        id: "exitRamp-')
                                            .concat(l + r, '",\n                                        title: "')
                                            .concat(
                                                q.exitRampConfig.exitrampTitle,
                                                "\"\n                                    })\n                                   VueBus.$emit('showConfirmDialog') \n                                })()"
                                            )
                                    ));
                    });
            },
        },
        mixins: [utilitiesMixin],
        mounted: function () {
            var q = this;
            setTimeout(function () {
                q.buildExitRampConfirmation();
            });
            VueBus.$on("reRenderedView", function () {
                q.buildExitRampConfirmation();
            });
            VueBus.$on("confirm", function (l) {
                if ("exitRamp" === l.id.split("-")[0]) {
                    var A = q.getBoolean(q.exitRampConfig.openExitRampTarget) ? "_blank" : "_self";
                    window.open(q.externalLinks[Number(l.id.split("-")[1])], A);
                }
            });
        },
    });
});
var _this2 = this;
VueBus.resourceReady(function () {
    Array.from(document.getElementsByClassName("ft-wrapper")).forEach(function (q) {
        q.__vue__ ||
            new Vue({
                el: "#".concat(q.id),
                data: { fontSize: 14, lineHeight: _this2.fontSize, stopProcess: !1 },
                computed: {
                    waterMarkStyles: function () {
                        return { fontSize: this.fontSize + "px", lineHeight: this.fontSize + "px", position: "relative", bottom: (this.lineHeight / 3.5) * -1 + "px" };
                    },
                },
                mounted: function () {
                    var l = this;
                    setTimeout(function () {
                        l.$nextTick(l.checkAndIncrease);
                    }, 300);
                    window.addEventListener("resize", function () {
                        l.stopProcess = !1;
                        l.checkAndIncrease();
                    });
                },
                updated: function () {
                    this.$nextTick(this.checkAndIncrease);
                },
                destroyed: function () {
                    window.removeEventListener("resize", this.checkAndIncrease);
                },
                methods: {
                    getOffsets: function () {
                        return this.$refs["watermark-text"] && this.$refs["water-mark-container"]
                            ? { textOffsetWidth: this.$refs["watermark-text"].offsetWidth, containerWidth: this.$refs["water-mark-container"].offsetWidth }
                            : null;
                    },
                    checkAndIncrease: function () {
                        var l = this.getOffsets();
                        l && l.textOffsetWidth < l.containerWidth && !this.stopProcess
                            ? (this.lineHeight = this.fontSize += 1)
                            : ((this.stopProcess = !0), this.checkAndDecrease());
                    },
                    checkAndDecrease: function () {
                        var l = this.getOffsets();
                        l && l.textOffsetWidth > l.containerWidth && --this.fontSize;
                        this.lineHeight = this.fontSize;
                    },
                },
            });
    });
});
(function (q) {
    var l = { reCalcOnWindowResize: !0, throttleDuration: 17 },
        A = function (a) {
            var b = a.find("img").attr("src");
            a.data("imageSrc", b);
            r(b, function (d, f) {
                a.data({ imageW: f.width, imageH: f.height });
                n(a);
            });
        },
        r = function (a, b) {
            q("\x3cimg /\x3e")
                .one("load", function () {
                    b(null, { width: this.width, height: this.height });
                })
                .attr("src", a);
        },
        u = function (a, b) {
            var d = !1;
            return function () {
                var f = Array.prototype.slice.call(arguments, 0);
                if (d) return !1;
                d = !0;
                setTimeout(function () {
                    d = !1;
                    a.apply(null, f);
                }, b);
            };
        },
        c = function (a, b, d, f, y) {
            var I = Math.floor(b / 2);
            a = Math.floor(d / a);
            f = Math.floor(((f + 1) / 2) * a);
            y && (f = a - f);
            y = f - I;
            f = a - f;
            I = b - I;
            f < I && (y -= I - f);
            0 > y && (y = 0);
            return (-100 * y) / b + "%";
        },
        n = function (a) {
            var b = a.data("imageW"),
                d = a.data("imageH"),
                f = a.data("imageSrc");
            if (!b && !d && !f) return A(a);
            f = a.width();
            var y = a.height(),
                I = parseFloat(a.data("focusX")),
                B = parseFloat(a.data("focusY"));
            a = a.find("img").first();
            var z = 0,
                D = 0;
            if (!(0 < f && 0 < y && 0 < b && 0 < d)) return !1;
            var E = b / f,
                h = d / y;
            a.css({ "max-width": "", "max-height": "" });
            b > f && d > y && a.css(E > h ? "max-height" : "max-width", "100%");
            E > h ? (z = c(h, f, b, I)) : E < h && (D = c(E, y, d, B, !0));
            a.css({ top: D, left: z });
        },
        m = q(window),
        g = function (a, b) {
            var d = b.throttleDuration
                    ? u(function () {
                          n(a);
                      }, b.throttleDuration)
                    : function () {
                          n(a);
                      },
                f = !1;
            n(a);
            return {
                adjustFocus: function () {
                    return n(a);
                },
                windowOn: function () {
                    if (!f) return m.on("resize", d), (f = !0);
                },
                windowOff: function () {
                    if (f) return m.off("resize", d), (f = !1), !0;
                },
            };
        };
    q.fn.focusPoint = function (a) {
        if ("string" === typeof a)
            return this.each(function () {
                q(this).data("focusPoint")[a]();
            });
        var b = q.extend({}, l, a);
        return this.each(function () {
            var d = q(this),
                f = g(d, b);
            d.data("focusPoint") && d.data("focusPoint").windowOff();
            d.data("focusPoint", f);
            b.reCalcOnWindowResize && f.windowOn();
        });
    };
    q.fn.adjustFocus = function () {
        return this.each(function () {
            n(q(this));
        });
    };
})(jQuery);
VueBus.resourceReady(function () {
    function q(u) {
        $.each(u, function (c, n) {
            c = $(n);
            c.attr("data-image-w", c.width());
            c.attr("data-image-h", c.height());
            c.focusPoint();
        });
    }
    var l = [],
        A = null,
        r = $(".x-focuspoint-container");
    r.focusPoint();
    q(r);
    r.css("visibility", "visible");
    setTimeout(function () {
        $(".x-focuspoint-container").each(function (u) {
            $(this).find("img").attr("style");
        });
    }, 50);
    window.addEventListener("scroll", function (u) {
        var c = 0;
        A && clearInterval(A);
        A = setInterval(function () {
            if (0 === $(this).scrollTop()) {
                var n = $(".x-focuspoint-container");
                n.focusPoint();
                q(n);
            } else
                $(".x-focuspoint-container").each(function (m) {
                    var g = $(this).find("img"),
                        a = { width: g.width(), height: g.height() };
                    if (0 === l.length || (l[m] && (l[m].width !== a.width || l.height !== a.height)))
                        $(this).attr("data-image-w", g.width()), $(this).attr("data-image-h", g.height()), (l[m] = a), $(this).focusPoint();
                });
            c++;
            310 === c && (clearInterval(A), (c = 0));
        }, 1);
    });
    window.addEventListener("resize", function (u) {
        setTimeout(function () {
            var c = $(".x-focuspoint-container");
            c.focusPoint();
            q(c);
        }, 0);
    });
});
VueBus.resourceReady(function () {
    Array.from(document.getElementsByClassName("image-video-wrapper")).forEach(function (q) {
        q.__vue__ || new Vue({ el: q, mixins: [utilitiesMixin] });
    });
});
