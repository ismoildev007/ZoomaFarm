VueBus.resourceReady(function () {
    document.querySelectorAll(".investornews-wrapper").forEach(function (e) {
        e.__vue__ ||
            new Vue({
                el: e,
                data: {},
                mixins: [utilitiesMixin],
                methods: {
                    downloadPDF: function (b, a, c) {
                        b = window.btoa(encodeURIComponent(b));
                        var d = document.getElementById("gnw_attachments_section-items");
                        a = c
                            ? c
                            : d && d.getElementsByTagName("a")[0]
                            ? d.getElementsByTagName("a")[0].href
                            : a
                            ? "/bin/nncorp/news-pdf?id\x3d" + new URL(location.href).searchParams.get("id") + "\x26title\x3d" + b + "\x26attachmentID\x3d" + a
                            : "/bin/nncorp/news-pdf?id\x3d" + new URL(location.href).searchParams.get("id") + "\x26title\x3d" + b;
                        this.addAnalytics("Click", "File Download", { download: { filename: a } });
                        window.open(a, "_blank");
                    },
                    tableDisplay: function () {
                        var b = this,
                            a = document.getElementsByClassName("introtextsection");
                        Array.from(a[0].getElementsByTagName("TABLE")).forEach(function (c) {
                            var d = document.createElement("div");
                            d.classList.add("table-wrapper");
                            b.checkIfTableHasTwoColumns(c) ? b.styleTwoColumnTable(d, c) : b.styleTable(d, c);
                        });
                    },
                    checkIfTableHasTwoColumns: function (b) {
                        var a = b.firstChild.firstChild;
                        b = b.firstChild.children[1];
                        return "TR" === a.tagName
                            ? ((a = Array.from(a.childNodes).filter(function (c) {
                                  return "TD" === c.tagName;
                              }).length),
                              b
                                  ? ((b = Array.from(b.childNodes).filter(function (c) {
                                        return "TD" === c.tagName;
                                    }).length),
                                    2 >= a && 2 >= b)
                                  : 2 >= a)
                            : !1;
                    },
                    styleTwoColumnTable: function (b, a) {
                        b.classList.add("two-column");
                        a.parentNode.insertBefore(b, a);
                        b.appendChild(a);
                        this.findTableHeaderForTwoColumnTable(a);
                    },
                    styleTable: function (b, a) {
                        a.parentNode.insertBefore(b, a);
                        b.appendChild(a);
                        b.querySelector("tbody").firstChild.classList.add("table-header");
                    },
                    findTableHeaderForTwoColumnTable: function (b) {
                        Array.from(b.firstChild.children).forEach(function (a) {
                            1 === a.childElementCount
                                ? (a.classList.add("one-column-title"), a.children[0].classList.add("title"))
                                : 2 === a.childElementCount && 0 === a.children[0].childElementCount && 0 === a.children[1].childElementCount
                                ? (a.children[0].classList.add("table-header"),
                                  (a.children[0].innerHTML = "\x3ch3\x3e" + a.children[0].innerHTML + "\x3c/h3\x3e"),
                                  a.children[1].classList.add("empty-cell"))
                                : Array.from(a.children).forEach(function (c) {
                                      var d = c.innerHTML;
                                      if (-1 !== d.indexOf("\x3cbr\x3e")) {
                                          var f = d.indexOf("\x3cbr\x3e"),
                                              g = d.slice(0, f);
                                          d = d.slice(f + 4);
                                          c.innerHTML = "\x3ch4\x3e" + g + "\x3c/h4\x3e" + d;
                                      }
                                  });
                        });
                    },
                },
                mounted: function () {
                    this.tableDisplay();
                    var b = document.getElementById("news_time"),
                        a = document.getElementById("news_date"),
                        c = a.innerHTML;
                    b.innerHTML = moment(c).format("hh:mm ");
                    a.innerHTML = moment(c).format("D MMMM YYYY");
                },
            });
    });
});
