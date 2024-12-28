window.addEventListener("load", function () {
    setTimeout(function () {
        var hrefswithanchors = Array.from(document.querySelectorAll("a[href*=\\#]"));
        hrefswithanchors.forEach(function (anchor) {
            anchor.addEventListener("click", function (e) {
                if (!e.srcElement.closest(".history-timeline")) {
                    e.preventDefault();
                    var accordionMainContainer = findParentBySelector(document.querySelector(anchor.hash), ".cmp-accordion__item-wrapper");
                    expand(accordionMainContainer);
                    document.querySelector(anchor.hash).scrollIntoView({
                        behavior: "smooth",
                    });
                }
            });
        });
        expandAccordionItemsByAnchorLink();
    }); //specific solution on anchor scroll for any pages include timeline component

    var timelineComponent = document.getElementsByClassName("history-timeline");
    var video = document.getElementsByClassName("video-wrapper") && document.getElementsByClassName("video-wrapper")[0].firstChild;

    if (video && !performance.navigation.type && timelineComponent && timelineComponent.length) {
        var stateCheck = setInterval(function () {
            if (video.readyState > 0) {
                clearInterval(stateCheck);
                var url = new URL(window.location.href);
                var anchor = url.searchParams.get("anchor");
                var hrefswithanchors = document.getElementById(anchor);
                hrefswithanchors.scrollIntoView({
                    behavior: "smooth",
                });
            }
        }, 100);
    }
});

function expand(accordionMainContainer) {
    if (accordionMainContainer) {
        var buttonElem = accordionMainContainer.querySelector("button.cmp-accordion__button");

        if (!buttonElem.classList.contains("cmp-accordion__button--expanded")) {
            buttonElem.click();
        }
    }
}

function expandAccordionItemsByAnchorLink() {
    var hash = window.location.hash;

    if (!hash) {
        return;
    }

    var anchorComponentElems = document.getElementsByClassName("anchorscrollcomponent");

    if (!anchorComponentElems || !anchorComponentElems.length) {
        return;
    }

    for (var i = 0; i < anchorComponentElems.length; i++) {
        if (anchorComponentElems[i].querySelector(".anchor-target") && anchorComponentElems[i].querySelector(".anchor-target").id === hash.replace("#", "")) {
            var accordionMainContainer = findParentBySelector(anchorComponentElems[i], ".cmp-accordion__item-wrapper");
            expand(accordionMainContainer);
        }
    }
}

function findParentBySelector(elm, selector) {
    var all = document.querySelectorAll(selector);
    var cur = elm.parentNode;

    while (cur && !collectionHas(all, cur)) {
        cur = cur.parentNode;
    }

    return cur;
}

function collectionHas(a, b) {
    for (var i = 0, len = a.length; i < len; i++) {
        if (a[i] == b) return true;
    }

    return false;
}
