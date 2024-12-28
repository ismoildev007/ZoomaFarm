VueBus.resourceReady(function () {
    Array.from(document.getElementsByClassName("links-overview-wrapper")).forEach(function (a) {
        a.__vue__ || new Vue({ el: a, mixins: [utilitiesMixin] });
    });
});
