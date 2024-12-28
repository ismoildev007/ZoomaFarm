Vue.component("contact-info", {
    props: { phoneNumber: String, emailAddress: String },
    mixins: [utilitiesMixin],
    methods: {
        getString: function (a) {
            return Granite.I18n.get(a);
        },
        openMailClient: function (a) {
            this.addAnalytics("Click", "Click Email");
            document.location = "mailto:" + a;
        },
        openPhoneCall: function (a) {
            this.addAnalytics("Click", "Click Phone");
            document.location = "tel:" + a;
        },
        getDisplayingEmail: function (a) {
            a = this.stripHtmlTags(a);
            return '\x3cspan class\x3d"email-label"\x3e'
                .concat(this.getString("Mail"), ':\x26nbsp;\x3c/span\x3e\x3ca class\x3d"link link-animation color-blue" href\x3d"javascript:void(0)"\x3e')
                .concat(a.replace("@", "\x3cspan\x3e@\x3c/span\x3e"), "\x3c/a\x3e");
        },
    },
    template:
        '\n        \x3cdiv class\x3d"contact-info-wrapper"\x3e\n            \x3cp v-if\x3d"phoneNumber" class\x3d"color-blue phone infotext pointer" v-on:click\x3d"openPhoneCall(phoneNumber)"\x3e\n                \x3cspan class\x3d"phone-label"\x3e{{getString(\'Tel\')}}:\x26nbsp;\x3c/span\x3e\x3cspan class\x3d"phone-number"\x3e{{phoneNumber}}\x3c/span\x3e\n            \x3c/p\x3e\n            \x3cp v-if\x3d"emailAddress" class\x3d"color-blue email infotext pointer" v-on:click\x3d"openMailClient(emailAddress)" v-html\x3d"getDisplayingEmail(emailAddress)"\x3e\x3c/p\x3e\n        \x3c/div\x3e\n    ',
});
VueBus.resourceReady(function () {
    Array.from(document.getElementsByClassName("layout-container-grid")).forEach(function (a) {
        a.__vue__ ||
            new Vue({
                el: a,
                mixins: [utilitiesMixin],
                data: { afterpageload: "" },
                mounted: function () {
                    var a = this,
                        b = Array.from(this.$el.getElementsByTagName("iframe"));
                    if (0 < b.length) {
                        var e = 0;
                        b.forEach(function (c) {
                            c.onload = function () {
                                ++e === b.length && a.alignmentHandler();
                            };
                        });
                    } else
                        this.$nextTick(function () {
                            this.alignmentHandler();
                        });
                },
                created: function () {
                    window.addEventListener("resize", this.alignmentHandler);
                },
                destroyed: function () {
                    window.removeEventListener("resize", this.alignmentHandler);
                },
                methods: {
                    alignmentHandler: function (a) {
                        a = this.$el.getElementsByClassName("contentgrid_row");
                        for (var b = 0; b < a.length; b++) {
                            for (var e = [], c = a[b].getElementsByClassName("column bottom_align"), d = 0; d < c.length; d++)
                                for (var g = Array.from(c[d].getElementsByTagName("img")).concat(Array.from(c[d].getElementsByTagName("iframe"))), f = 0; f < g.length; f++)
                                    e.push(g[f].clientHeight);
                            if (0 !== e.length)
                                for (e = Math.max.apply(Math, e), c = a[b].getElementsByClassName("image-video-content-wrapper"), d = 0; d < c.length; d++)
                                    c[d].style.height = e + "px";
                        }
                    },
                },
            });
    });
});
