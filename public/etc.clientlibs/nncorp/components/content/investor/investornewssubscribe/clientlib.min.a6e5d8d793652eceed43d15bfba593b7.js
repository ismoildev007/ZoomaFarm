function _extends() {
    _extends =
        Object.assign ||
        function (c) {
            for (var a = 1; a < arguments.length; a++) {
                var d = arguments[a],
                    b;
                for (b in d) Object.prototype.hasOwnProperty.call(d, b) && (c[b] = d[b]);
            }
            return c;
        };
    return _extends.apply(this, arguments);
}
var baseHttp = function () {
    var c = { baseURL: "", headers: { Authorization: "" } };
    return {
        defaultConfig: c,
        get: function (a, d) {
            return axios.get(a, _extends(c, d));
        },
        post: function (a, d, b) {
            return axios.post(a, d, _extends(c, b));
        },
        postFile: function (a, d, b) {
            return axios.post(a, d, _extends(c, b, { headers: { "Content-Type": "multipart/form-data" } }));
        },
    };
};
function _extends() {
    _extends =
        Object.assign ||
        function (c) {
            for (var a = 1; a < arguments.length; a++) {
                var d = arguments[a],
                    b;
                for (b in d) Object.prototype.hasOwnProperty.call(d, b) && (c[b] = d[b]);
            }
            return c;
        };
    return _extends.apply(this, arguments);
}
var baseHttpSerivce = baseHttp(),
    newsSubscriptionService = _extends(
        {},
        (function () {
            return {
                subscribe: function (c) {
                    return this.post("/bin/nncorp/investor/news-subscribe", c).then(function (a) {
                        return a.data;
                    });
                },
            };
        })(),
        baseHttpSerivce
    );
baseHttpSerivce = {};
VueBus.resourceReady(function () {
    Vue.use(window.vuelidate["default"]);
    var c = window.validators,
        a = c.required,
        d = c.email;
    Array.from(document.getElementsByClassName("investornewssubscribe-wrapper")).forEach(function (b) {
        b.__vue__ ||
            new Vue({
                el: b,
                components: { VueRecaptcha: VueRecaptcha },
                data: {
                    baseHref: "",
                    email: "",
                    pressRelease: { value: "press_release", selected: !0 },
                    tradingShare: { value: "trading_share", selected: !0 },
                    companyAnnouncement: { value: "company_announcement", selected: !0 },
                    privacy: !1,
                    selectedSubscriptionList: [],
                    recaptchaVerified: !1,
                },
                validations: {
                    email: { required: a, email: d },
                    privacy: {
                        required: function () {
                            return this.privacyCheck ? !0 : !1;
                        },
                    },
                    recaptcha: {
                        required: function () {
                            return this.recaptchaCheck;
                        },
                    },
                },
                computed: {
                    privacyCheck: function () {
                        return this.privacy;
                    },
                    recaptchaCheck: function () {
                        return this.recaptchaVerified;
                    },
                },
                mixins: [utilitiesMixin],
                methods: {
                    subscribe: function () {
                        this.$v.privacy.$touch();
                        this.$v.email.$touch();
                        this.$v.recaptcha.$touch();
                        this.$v.email.$anyError ||
                            this.$v.privacy.$anyError ||
                            !this.recaptchaVerified ||
                            (this.pressRelease.selected && this.selectedSubscriptionList.push(this.pressRelease.value),
                            this.tradingShare.selected && this.selectedSubscriptionList.push(this.tradingShare.value),
                            this.companyAnnouncement.selected && this.selectedSubscriptionList.push(this.companyAnnouncement.value),
                            this.addAnalytics("Click", "Subscribe"),
                            newsSubscriptionService
                                .subscribe({ email: this.email, baseHref: this.baseHref, selectedSubscriptionList: this.selectedSubscriptionList })
                                .then(function (e) {
                                    200 === e.status &&
                                        (301 <= e.data.statusCode && 302 >= e.data.statusCode ? (window.location.href = e.data.redirectUrl) : alert(JSON.stringify(data)));
                                }));
                    },
                    onVerify: function (e) {
                        e && (this.recaptchaVerified = !0);
                    },
                    onExpired: function () {
                        this.recaptchaVerified = !1;
                    },
                },
                mounted: function () {
                    this.$refs.baseHref && (this.baseHref = this.$refs.baseHref.value || "");
                },
            });
    });
});
