define(["jquery", "infiniteGrid", "serviceModule", "eg", "service/common/utility", "service/common/layerUtil"], function ($, InfiniteGrid, serviceModule, eg, wUtility, layerUtil) {
    function init(e) {
        e && ($htOption = e), infinite = new InfiniteGrid($grid, $htOption), lazyFitmode && $(window).on("scroll", function (e) {
            infinite.fit($window.scrollTop(), windowHeight)
        }), $(window).on("scroll", scrollHandler), $grid.addClass("NO_TAP_HIGHLIGHT").on("click", "a", function (e) {
            $.persist("shoppingwInfinite", {
                infinite: infinite.store(),
                requestParamMap: requestParamMap,
                requestParam: requestParam,
                scrollPos: $window.scrollTop()
            });
            var t = serviceModule.getModule("service/navigation");
            t && t.persist()
        });
        var t = $.persist("shoppingwInfinite");
        if (t && t.infinite) infinite.restore(t.infinite), requestParamMap = t.requestParamMap, requestParam = t.requestParam, changeRecycleMode(!0), window.scrollTo(0, t.scrollPos), $.persist("shoppingwInfinite", {
            restore: !0
        });
        else {
            var n = $grid.children("li");
            n.length > 0 && (infinite.init(1), requestParamMap[1] = requestParam)
        }
    }

    function scrollHandler(e) {
        if (requestParam.size == 0) return;
        if (!isProcessing && !infinite.isProcessing()) {
            var t = infinite.getGroupKey(),
                n = $window.scrollTop();
            if (t == undefined || n == 0) return;
            $more_append.is(":visible") && $more_append.get(0).getBoundingClientRect().top - windowHeight / 2 < windowHeight - windowHeight / 20 ? getContents("append", t[1] + 1) : infinite.isRecycle() && n < windowHeight / 2 && (t[0] - 1 > 0 ? (getContents("prepend", t[0] - 1), hideAppend(!1)) : $more_prepend.hide()), changeRecycleMode()
        }
    }

    function changeRecycleMode(e) {
        var t = infinite.isRecycle();
        if (t !== beforeRecycleMode) {
            var n = 0;
            t ? (n = $home.outerHeight(!0), $more_prepend.show(), $home.hide(), !e && window.scrollBy(0, $more_prepend.outerHeight(!0) - n)) : (n = $more_prepend.outerHeight(!0), $more_prepend.hide(), $home.show(), !e && window.scrollBy(0, $home.outerHeight(!0) - n))
        }
        beforeRecycleMode = infinite.isRecycle()
    }

    function setPaging(e) {
        pagingMap = e
    }

    function setMoreUrl(e) {
        moreUrlMap = e
    }

    function setClickCodeArea(e) {
        clickCodeArea = e
    }

    function loadFirstPage() {
        var e = $.persist("shoppingwInfinite");
        !e || !e.restore ? getContents("append", 1) : $.persist("shoppingwInfinite", {})
    }

    function getContents(e, t) {
        try {
            isProcessing = !0;
            var n = url,
                r = null;
            e == "append" ? (requestParamMap[t] == undefined && requestParamMap[t - 1] != undefined ? r = $.extend(!0, {}, requestParamMap[t - 1]) : (r = $.extend(!0, {}, requestParam), changeMapValue(r, "moreCount", !0)), changeMapValue(r, "current", t)) : r = $.extend(!0, {}, requestParamMap[t]);
            var i = $.extend(!0, {}, r, {
                    sType: e,
                    current: t,
                    clickCodeArea: clickCodeArea
                }),
                s = $.post(n, covertParameter(i));
            s.done(function (e, t, n) {
                success(i, e, t, n);
                try {
                    nclkF(clickCodeArea + ".more", "", "", null)
                } catch (r) {}
            }), s.fail(error), s.always(always)
        } catch (o) {
            isProcessing = !1
        }
    }

    function success(oParams, data, textStatus, jqXHR) {
        var listData = shuffle(data);
        requestParamMap[oParams["current"]] == undefined && (requestParamMap[oParams.current] = oParams), listData && listData.length > 0 ? oParams["sType"] == "append" ? infinite.append(listData, oParams.current) : oParams["sType"] == "prepend" && infinite.prepend(listData, oParams.current) : oParams.current <= 1 && ($grid.hide(), $($htOption.noListView).show(), isProcessing = !0), $(data).filter("script").each(function (index, value) {
            eval($(value).text())
        })
    }

    function shuffle(e) {
        var t = requestParam.arrangeConfig;
        if (t && !$.isEmptyObject(t)) {
            var n, r = {},
                i = {};
            $.each(t, function (t, r) {
                if (r == 0) n = $(e).filter("li._" + t).toArray();
                else {
                    var s = $(e).filter("li._" + t).toArray();
                    for (var o = 0; o < s.length; o++) i[(o + 1) * r] = s[o]
                }
            }), $.each(i, function (e, t) {
                n.length > e ? n.splice(e, 0, t) : n.push(t)
            })
        }
        return n == undefined && (n = $(e).filter("li").toArray()), n
    }

    function error(e, t) {}

    function always() {
        isProcessing = !1
    }

    function covertParameter(e) {
        var t = $.param(e).replace(/\%5B/g, ".").replace(/\%5D/g, "").split("&"),
            n = {};
        return $.each(t, function (e, t) {
            var r = t.split("=");
            n[r[0]] = decodeURIComponent(r[1]).replace(/\+/g, " ");
            var i = $("#orgKeyword");
            r[0] == "keyword" && i.length > 0 && (n[r[0]] = i.val())
        }), n
    }

    function changeMapValue(e, t, n) {
        var r = !1;
        return $.each(e, function (i, s) {
            if (t == i) e[i] = n, r = !0;
            else if ($.type(s) == "object") {
                var o = changeMapValue(s, t, n);
                !r && o && (r = !0)
            }
        }), r
    }

    function removeKey(e, t) {
        $.each(e, function (t, n) {
            removeKeyStartsWith(e, t), $.type(n) == "object" && removeKey(n, t)
        })
    }

    function removeKeyStartsWith(e, t) {
        $.each(e, function (n) {
            n == t && delete e[n]
        })
    }

    function changeCustomMapValue(e, t) {
        $.each(e, function (n, r) {
            t == n ? $.type(r) == "object" && r["id"] != undefined && (e[n] = r.id) : $.type(r) == "object" && changeCustomMapValue(r, t)
        })
    }

    function setRequestParam(e) {
        changeCustomMapValue(e, "rootStoreCategory"), changeCustomMapValue(e, "storeCategory"), changeCustomMapValue(e, "displayCategory"), changeCustomMapValue(e, "productCategory"), changeCustomMapValue(e, "brand"), requestParam = e
    }

    function setUrl(e) {
        url = e
    }

    function getParam() {
        return requestParam
    }

    function changeSortType(e) {
        changeMapValue(requestParam, "sort", e), reload()
    }

    function changeProductCategory(e) {
        removeKeyStartsWith(requestParam, "dispCatgId"), removeKeyStartsWith(requestParam, "stoCatgId");
        var t = changeMapValue(requestParam, "productCategory", e);
        t || (requestParam.prodCatgId = e), reload()
    }

    function changeDisplayCategory(e) {
        removeKeyStartsWith(requestParam, "productCategory"), removeKeyStartsWith(requestParam, "stoCatgId"), requestParam.dispCatgId = e, reload()
    }

    function changeStoreCategory(e) {
        removeKeyStartsWith(requestParam, "productCategory"), removeKeyStartsWith(requestParam, "dispCatgId"), requestParam.stoCatgId = e, reload()
    }

    function changeBrand(e) {
        requestParam.brandId = e, requestParam.stoCatgId = "", reload()
    }

    function reload(e) {
        e && (requestParam = e), changeMapValue(requestParam, "current", 1), requestParamMap = {}, infinite.clear(), loadFirstPage()
    }

    function changeParam(e, t) {
        var n = changeMapValue(requestParam, e, t);
        n || (requestParam[e] = t)
    }

    function setPagingResult(e, t) {
        requestParamMap[e] != undefined && (requestParamMap[e] = $.extend(!0, requestParamMap[e], t))
    }

    function hideAppend(e) {
        e == 0 ? $more_append.hide() : $more_append.show()
    }

    function goKeywordUrl(e) {
        var t = $(e.target).parent().attr("stoCat"),
            n = encodeURIComponent($(e.target).parent().attr("keyword"));
        window.location.href = t + "/search/item?keyword=" + n
    }

    function goDetailUrl(e, t, n) {
        if (n && n == "true") {
            var r = "layer=true";
            layerUtil.showLayer(t + (t.indexOf("?") > -1 ? "&" : "?") + r)
        } else window.location.href = t
    }
    var isProcessing = !1,
        requestParam = {},
        url, requestParamMap = {},
        $window = $(window),
        clickCodeArea = "",
        $grid = $("#grid"),
        $more_append = $("#more_append"),
        $more_prepend = $("#more_prepend"),
        $home = $(".sw_homespot"),
        lazyFitmode = !1;
    beforeRecycleMode = !1, windowHeight = $window.height(), infinite = null;
    var $htOption = {
        itemSelector: ".sw_list_item",
        noListView: ".sw_list_none"
    };
    return {
        setClickCodeArea: setClickCodeArea,
        setMoreUrl: setMoreUrl,
        setPaging: setPaging,
        loadFirstPage: loadFirstPage,
        setRequestParam: setRequestParam,
        setUrl: setUrl,
        getParam: getParam,
        changeParam: changeParam,
        changeSortType: changeSortType,
        changeProductCategory: changeProductCategory,
        changeDisplayCategory: changeDisplayCategory,
        changeStoreCategory: changeStoreCategory,
        changeBrand: changeBrand,
        setPagingResult: setPagingResult,
        reload: reload,
        hideAppend: hideAppend,
        goKeywordUrl: goKeywordUrl,
        goDetailUrl: goDetailUrl,
        init: init
    }
});