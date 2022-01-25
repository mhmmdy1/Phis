if (typeof JSON2 !== "object") {
    JSON2 = {}
}(function() {
    function d(f) {
        return f < 10 ? "0" + f : f
    }

    function l(n, m) {
        var f = Object.prototype.toString.apply(n);
        if (f === "[object Date]") {
            return isFinite(n.valueOf()) ? n.getUTCFullYear() + "-" + d(n.getUTCMonth() + 1) + "-" + d(n.getUTCDate()) + "T" + d(n.getUTCHours()) + ":" + d(n.getUTCMinutes()) + ":" + d(n.getUTCSeconds()) + "Z" : null
        }
        if (f === "[object String]" || f === "[object Number]" || f === "[object Boolean]") {
            return n.valueOf()
        }
        if (f !== "[object Array]" && typeof n.toJSON === "function") {
            return n.toJSON(m)
        }
        return n
    }
    var c = new RegExp("[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]", "g"),
        e = '\\\\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]',
        i = new RegExp("[" + e, "g"),
        j, b, k = {
            "\b": "\\b",
            "\t": "\\t",
            "\n": "\\n",
            "\f": "\\f",
            "\r": "\\r",
            '"': '\\"',
            "\\": "\\\\"
        },
        h;

    function a(f) {
        i.lastIndex = 0;
        return i.test(f) ? '"' + f.replace(i, function(m) {
            var n = k[m];
            return typeof n === "string" ? n : "\\u" + ("0000" + m.charCodeAt(0).toString(16)).slice(-4)
        }) + '"' : '"' + f + '"'
    }

    function g(s, p) {
        var n, m, t, f, q = j,
            o, r = p[s];
        if (r && typeof r === "object") {
            r = l(r, s)
        }
        if (typeof h === "function") {
            r = h.call(p, s, r)
        }
        switch (typeof r) {
            case "string":
                return a(r);
            case "number":
                return isFinite(r) ? String(r) : "null";
            case "boolean":
            case "null":
                return String(r);
            case "object":
                if (!r) {
                    return "null"
                }
                j += b;
                o = [];
                if (Object.prototype.toString.apply(r) === "[object Array]") {
                    f = r.length;
                    for (n = 0; n < f; n += 1) {
                        o[n] = g(n, r) || "null"
                    }
                    t = o.length === 0 ? "[]" : j ? "[\n" + j + o.join(",\n" + j) + "\n" + q + "]" : "[" + o.join(",") + "]";
                    j = q;
                    return t
                }
                if (h && typeof h === "object") {
                    f = h.length;
                    for (n = 0; n < f; n += 1) {
                        if (typeof h[n] === "string") {
                            m = h[n];
                            t = g(m, r);
                            if (t) {
                                o.push(a(m) + (j ? ": " : ":") + t)
                            }
                        }
                    }
                } else {
                    for (m in r) {
                        if (Object.prototype.hasOwnProperty.call(r, m)) {
                            t = g(m, r);
                            if (t) {
                                o.push(a(m) + (j ? ": " : ":") + t)
                            }
                        }
                    }
                }
                t = o.length === 0 ? "{}" : j ? "{\n" + j + o.join(",\n" + j) + "\n" + q + "}" : "{" + o.join(",") + "}";
                j = q;
                return t
        }
    }
    if (typeof JSON2.stringify !== "function") {
        JSON2.stringify = function(o, m, n) {
            var f;
            j = "";
            b = "";
            if (typeof n === "number") {
                for (f = 0; f < n; f += 1) {
                    b += " "
                }
            } else {
                if (typeof n === "string") {
                    b = n
                }
            }
            h = m;
            if (m && typeof m !== "function" && (typeof m !== "object" || typeof m.length !== "number")) {
                throw new Error("JSON2.stringify")
            }
            return g("", {
                "": o
            })
        }
    }
    if (typeof JSON2.parse !== "function") {
        JSON2.parse = function(o, f) {
            var n;

            function m(s, r) {
                var q, p, t = s[r];
                if (t && typeof t === "object") {
                    for (q in t) {
                        if (Object.prototype.hasOwnProperty.call(t, q)) {
                            p = m(t, q);
                            if (p !== undefined) {
                                t[q] = p
                            } else {
                                delete t[q]
                            }
                        }
                    }
                }
                return f.call(s, r, t)
            }
            o = String(o);
            c.lastIndex = 0;
            if (c.test(o)) {
                o = o.replace(c, function(p) {
                    return "\\u" + ("0000" + p.charCodeAt(0).toString(16)).slice(-4)
                })
            }
            if ((new RegExp("^[\\],:{}\\s]*$")).test(o.replace(new RegExp('\\\\(?:["\\\\/bfnrt]|u[0-9a-fA-F]{4})', "g"), "@").replace(new RegExp('"[^"\\\\\n\r]*"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?', "g"), "]").replace(new RegExp("(?:^|:|,)(?:\\s*\\[)+", "g"), ""))) {
                n = eval("(" + o + ")");
                return typeof f === "function" ? m({
                    "": n
                }, "") : n
            }
            throw new SyntaxError("JSON2.parse")
        }
    }
}());
if (typeof _tvq !== "object") {
    _tvq = []
}
if (typeof TV2Track !== "object") {
    TV2Track = (function() {
        var g, a = {},
            p = document,
            c = navigator,
            D = screen,
            z = window,
            d = z.performance || z.mozPerformance || z.msPerformance || z.webkitPerformance,
            m = false,
            x = [],
            j = z.encodeURIComponent,
            y = z.decodeURIComponent,
            e = unescape,
            E, H, A;

        function r(P) {
            var i = typeof P;
            return i !== "undefined"
        }

        function n(i) {
            return typeof i === "function"
        }

        function C(i) {
            return typeof i === "object"
        }

        function k(i) {
            return typeof i === "string" || i instanceof String
        }

        function K() {
            var P, R, Q;
            for (P = 0; P < arguments.length; P += 1) {
                Q = arguments[P];
                R = Q.shift();
                if (k(R)) {
                    E[R].apply(E, Q)
                } else {
                    R.apply(E, Q)
                }
            }
        }

        function N(R, Q, P, i) {
            if (R.addEventListener) {
                R.addEventListener(Q, P, i);
                return true
            }
            if (R.attachEvent) {
                return R.attachEvent("on" + Q, P)
            }
            R["on" + Q] = P
        }

        function I(Q, T) {
            var P = "",
                S, R;
            for (S in a) {
                if (Object.prototype.hasOwnProperty.call(a, S)) {
                    R = a[S][Q];
                    if (n(R)) {
                        P += R(T)
                    }
                }
            }
            return P
        }

        function L() {
            var i;
            I("unload");
            if (g) {
                do {
                    i = new Date()
                } while (i.getTimeAlias() < g)
            }
        }

        function J() {
            var P;
            if (!m) {
                m = true;
                I("load");
                for (P = 0; P < x.length; P++) {
                    x[P]()
                }
            }
            return true
        }

        function l() {
            var P;
            if (p.addEventListener) {
                N(p, "DOMContentLoaded", function i() {
                    p.removeEventListener("DOMContentLoaded", i, false);
                    J()
                })
            } else {
                if (p.attachEvent) {
                    p.attachEvent("onreadystatechange", function i() {
                        if (p.readyState === "complete") {
                            p.detachEvent("onreadystatechange", i);
                            J()
                        }
                    });
                    if (p.documentElement.doScroll && z === z.top) {
                        (function i() {
                            if (!m) {
                                try {
                                    p.documentElement.doScroll("left")
                                } catch (Q) {
                                    setTimeout(i, 0);
                                    return
                                }
                                J()
                            }
                        }())
                    }
                }
            }
            if ((new RegExp("WebKit")).test(c.userAgent)) {
                P = setInterval(function() {
                    if (m || /loaded|complete/.test(p.readyState)) {
                        clearInterval(P);
                        J()
                    }
                }, 10)
            }
            N(z, "load", J, false)
        }

        function f(Q, P) {
            var i = p.createElement("script");
            i.type = "text/javascript";
            i.src = Q;
            if (i.readyState) {
                i.onreadystatechange = function() {
                    var R = this.readyState;
                    if (R === "loaded" || R === "complete") {
                        i.onreadystatechange = null;
                        P()
                    }
                }
            } else {
                i.onload = P
            }
            p.getElementsByTagName("head")[0].appendChild(i)
        }

        function s() {
            var i = "";
            try {
                i = z.top.document.referrer
            } catch (Q) {
                if (z.parent) {
                    try {
                        i = z.parent.document.referrer
                    } catch (P) {
                        i = ""
                    }
                }
            }
            if (i === "") {
                i = p.referrer
            }
            return i
        }

        function h(i) {
            var Q = new RegExp("^([a-z]+):"),
                P = Q.exec(i);
            return P ? P[1] : null
        }

        function b(i) {
            var Q = new RegExp("^(?:(?:https?|ftp):)/*(?:[^@]+@)?([^:/#]+)"),
                P = Q.exec(i);
            return P ? P[1] : i
        }

        function B(Q, P) {
            var i = "[\\?&#]" + P + "=([^&#]*)";
            var S = new RegExp(i);
            var R = S.exec(Q);
            return R ? y(R[1]) : ""
        }

        function o(i) {
            return e(j(i))
        }

        function M(af) {
            var R = function(W, i) {
                    return (W << i) | (W >>> (32 - i))
                },
                ag = function(am) {
                    var al = "",
                        ak, W;
                    for (ak = 7; ak >= 0; ak--) {
                        W = (am >>> (ak * 4)) & 15;
                        al += W.toString(16)
                    }
                    return al
                },
                U, ai, ah, Q = [],
                Z = 1732584193,
                X = 4023233417,
                V = 2562383102,
                T = 271733878,
                S = 3285377520,
                ae, ad, ac, ab, aa, aj, P, Y = [];
            af = o(af);
            P = af.length;
            for (ai = 0; ai < P - 3; ai += 4) {
                ah = af.charCodeAt(ai) << 24 | af.charCodeAt(ai + 1) << 16 | af.charCodeAt(ai + 2) << 8 | af.charCodeAt(ai + 3);
                Y.push(ah)
            }
            switch (P & 3) {
                case 0:
                    ai = 2147483648;
                    break;
                case 1:
                    ai = af.charCodeAt(P - 1) << 24 | 8388608;
                    break;
                case 2:
                    ai = af.charCodeAt(P - 2) << 24 | af.charCodeAt(P - 1) << 16 | 32768;
                    break;
                case 3:
                    ai = af.charCodeAt(P - 3) << 24 | af.charCodeAt(P - 2) << 16 | af.charCodeAt(P - 1) << 8 | 128;
                    break
            }
            Y.push(ai);
            while ((Y.length & 15) !== 14) {
                Y.push(0)
            }
            Y.push(P >>> 29);
            Y.push((P << 3) & 4294967295);
            for (U = 0; U < Y.length; U += 16) {
                for (ai = 0; ai < 16; ai++) {
                    Q[ai] = Y[U + ai]
                }
                for (ai = 16; ai <= 79; ai++) {
                    Q[ai] = R(Q[ai - 3] ^ Q[ai - 8] ^ Q[ai - 14] ^ Q[ai - 16], 1)
                }
                ae = Z;
                ad = X;
                ac = V;
                ab = T;
                aa = S;
                for (ai = 0; ai <= 19; ai++) {
                    aj = (R(ae, 5) + ((ad & ac) | (~ad & ab)) + aa + Q[ai] + 1518500249) & 4294967295;
                    aa = ab;
                    ab = ac;
                    ac = R(ad, 30);
                    ad = ae;
                    ae = aj
                }
                for (ai = 20; ai <= 39; ai++) {
                    aj = (R(ae, 5) + (ad ^ ac ^ ab) + aa + Q[ai] + 1859775393) & 4294967295;
                    aa = ab;
                    ab = ac;
                    ac = R(ad, 30);
                    ad = ae;
                    ae = aj
                }
                for (ai = 40; ai <= 59; ai++) {
                    aj = (R(ae, 5) + ((ad & ac) | (ad & ab) | (ac & ab)) + aa + Q[ai] + 2400959708) & 4294967295;
                    aa = ab;
                    ab = ac;
                    ac = R(ad, 30);
                    ad = ae;
                    ae = aj
                }
                for (ai = 60; ai <= 79; ai++) {
                    aj = (R(ae, 5) + (ad ^ ac ^ ab) + aa + Q[ai] + 3395469782) & 4294967295;
                    aa = ab;
                    ab = ac;
                    ac = R(ad, 30);
                    ad = ae;
                    ae = aj
                }
                Z = (Z + ae) & 4294967295;
                X = (X + ad) & 4294967295;
                V = (V + ac) & 4294967295;
                T = (T + ab) & 4294967295;
                S = (S + aa) & 4294967295
            }
            aj = ag(Z) + ag(X) + ag(V) + ag(T) + ag(S);
            return aj.toLowerCase()
        }

        function G(Q, i, P) {
            if (Q === "translate.googleusercontent.com") {
                if (P === "") {
                    P = i
                }
                i = B(i, "u");
                Q = b(i)
            } else {
                if (Q === "cc.bingj.com" || Q === "webcache.googleusercontent.com" || Q.slice(0, 5) === "74.6.") {
                    i = p.links[0].href;
                    Q = b(i)
                }
            }
            return [Q, i, P]
        }

        function t(P) {
            var i = P.length;
            if (P.charAt(--i) === ".") {
                P = P.slice(0, i)
            }
            if (P.slice(0, 2) === "*.") {
                P = P.slice(1)
            }
            return P
        }

        function O(P) {
            P = P && P.text ? P.text : P;
            if (!k(P)) {
                var i = p.getElementsByTagName("title");
                if (i && r(i[0])) {
                    P = i[0].text
                }
            }
            return P
        }

        function v(i, P) {
            if (P) {
                return P
            }
            if (i.slice(-9) === "piwik.php") {
                i = i.slice(0, i.length - 9)
            }
            return i
        }

        function u(S) {
            var i = "Piwik_Overlay";
            var V = new RegExp("index\\.php\\?module=Overlay&action=startOverlaySession&idsite=([0-9]+)&period=([^&]+)&date=([^&]+)$");
            var Q = V.exec(p.referrer);
            if (Q) {
                var R = Q[1];
                if (R !== String(S)) {
                    return false
                }
                var U = Q[2],
                    P = Q[3];
                z.name = i + "###" + U + "###" + P
            }
            z.name = z.name || "";
            var T = z.name.split("###");
            return T.length === 3 && T[0] === i
        }

        function F(P, U, R) {
            z.name = z.name || "";
            var T = z.name.split("###"),
                S = T[1],
                i = T[2],
                Q = v(P, U);
            f(Q + "plugins/Overlay/client/client.js?v=1", function() {
                Piwik_Overlay_Client.initialize(Q, R, S, i)
            })
        }

        function w(ak, aL) {
            var T = G(p.domain, z.location.href, s()),
                a5 = t(T[0]),
                bj = T[1],
                aS = T[2],
                aQ = "GET",
                S = ak || "",
                ah = "",
                aN = "",
                a9 = aL || "",
                aC, ar = p.title,
                au = "7z|aac|ar[cj]|as[fx]|avi|bin|csv|deb|dmg|docx?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|ms[ip]|od[bfgpst]|og[gv]|pdf|phps|png|pptx?|qtm?|ra[mr]?|rpm|sea|sit|tar|t?bz2?|tgz|torrent|txt|wav|wm[av]|wpd||xlsx?|xml|z|zip",
                aO = [a5],
                W = [],
                aG = [],
                aj = [],
                aM = 500,
                X, al, Y, Z, aw = ["pk_campaign", "piwik_campaign", "utm_campaign", "utm_source", "utm_medium"],
                aq = ["pk_kwd", "piwik_kwd", "utm_term"],
                bh = "_tq_",
                ac, bi, aa = false,
                bc, ay, aB, ag = 63072000000,
                ai = 1800000,
                aD = 15768000000,
                az = true,
                an = 0,
                V = false,
                aH = {},
                bd = 4000,
                aY = {},
                ba = {},
                aV = false,
                aT = false,
                aR, aI, ad, av = M,
                aU, aA;

            function a0(bs, bp, bo, br, bn, bq) {
                if (aa) {
                    return
                }
                var bm;
                if (bo) {
                    bm = new Date();
                    bm.setTime(bm.getTime() + bo)
                }
                p.cookie = bs + "=" + j(bp) + (bo ? ";expires=" + bm.toGMTString() : "") + ";path=" + (br || "/") + (bn ? ";domain=" + bn : "") + (bq ? ";secure" : "")
            }

            function af(bo) {
                if (aa) {
                    return 0
                }
                var bm = new RegExp("(^|;)[ ]*" + bo + "=([^;]*)"),
                    bn = bm.exec(p.cookie);
                return bn ? y(bn[2]) : 0
            }

            function be(bm) {
                var bn;
                if (Y) {
                    bn = new RegExp("#.*");
                    return bm.replace(bn, "")
                }
                return bm
            }

            function a4(bo, bm) {
                var bp = h(bm),
                    bn;
                if (bp) {
                    return bm
                }
                if (bm.slice(0, 1) === "/") {
                    return h(bo) + "://" + b(bo) + bm
                }
                bo = be(bo);
                if ((bn = bo.indexOf("?")) >= 0) {
                    bo = bo.slice(0, bn)
                }
                if ((bn = bo.lastIndexOf("/")) !== bo.length - 1) {
                    bo = bo.slice(0, bn + 1)
                }
                return bo + bm
            }

            function aP(bp) {
                var bn, bm, bo;
                for (bn = 0; bn < aO.length; bn++) {
                    bm = t(aO[bn].toLowerCase());
                    if (bp === bm) {
                        return true
                    }
                    if (bm.slice(0, 1) === ".") {
                        if (bp === bm.slice(1)) {
                            return true
                        }
                        bo = bp.length - bm.length;
                        if ((bo > 0) && (bp.slice(bo) === bm)) {
                            return true
                        }
                    }
                }
                return false
            }

            function bl(bm) {
                var bn = new Image(1, 1);
                bn.onload = function() {};
                bn.src = S + (S.indexOf("?") < 0 ? "?" : "&") + bm
            }

            function a1(bm) {
                try {
                    var bo = z.XMLHttpRequest ? new z.XMLHttpRequest() : z.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : null;
                    bo.open("POST", S, true);
                    bo.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status !== 200) {
                            bl(bm)
                        }
                    };
                    bo.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
                    bo.send(bm)
                } catch (bn) {
                    bl(bm)
                }
            }

            function ax(bo, bn) {
                var bm = new Date();
                if (!bc) {
                    if (aQ === "POST") {
                        a1(bo)
                    } else {
                        bl(bo)
                    }
                    g = bm.getTime() + bn
                }
            }

            function aZ(bm) {
                return bh + bm + "." + a9 + "." + aU
            }

            function U() {
                if (aa) {
                    return "0"
                }
                if (!r(c.cookieEnabled)) {
                    var bm = aZ("testcookie");
                    a0(bm, "1");
                    return af(bm) === "1" ? "1" : "0"
                }
                return c.cookieEnabled ? "1" : "0"
            }

            function aJ() {
                aU = av((ac || a5) + (bi || "/")).slice(0, 4)
            }

            function ae() {
                var bn = aZ("cvar"),
                    bm = af(bn);
                if (bm.length) {
                    bm = JSON2.parse(bm);
                    if (C(bm)) {
                        return bm
                    }
                }
                return {}
            }

            function R() {
                if (V === false) {
                    V = ae()
                }
            }

            function a8() {
                var bm = new Date();
                aR = bm.getTime()
            }

            function ab(bq, bn, bm, bp, bo, br) {
                a0(aZ("id"), bq + "." + bn + "." + bm + "." + bp + "." + bo + "." + br, ag, bi, ac)
            }

            function Q() {
                var bn = new Date(),
                    bm = Math.round(bn.getTime() / 1000),
                    bp = af(aZ("id")),
                    bo;
                if (bp) {
                    bo = bp.split(".");
                    bo.unshift("0")
                } else {
                    if (!aA) {
                        aA = av((c.userAgent || "") + (c.platform || "") + JSON2.stringify(ba) + bm).slice(0, 16)
                    }
                    bo = ["1", aA, bm, 0, bm, "", ""]
                }
                return bo
            }

            function i() {
                var bm = af(aZ("ref"));
                if (bm.length) {
                    try {
                        bm = JSON2.parse(bm);
                        if (C(bm)) {
                            return bm
                        }
                    } catch (bn) {}
                }
                return ["", "", 0, ""]
            }

            function P() {
                var bm = aa;
                aa = false;
                a0(aZ("id"), "", -86400, bi, ac);
                a0(aZ("ses"), "", -86400, bi, ac);
                a0(aZ("cvar"), "", -86400, bi, ac);
                a0(aZ("ref"), "", -86400, bi, ac);
                aa = bm
            }

            function at(bn, bD, bE, bp) {
                var bB, bm = new Date(),
                    bs = Math.round(bm.getTime() / 1000),
                    bG, bC, bq, bv, by, br, bx, bz = V,
                    bw = Q(),
                    bF = aC || bj;
                if (aa) {
                    P()
                }
                if (bc) {
                    return ""
                }
                bG = bw[0];
                bC = bw[1];
                bv = bw[2];
                bq = bw[3];
                by = bw[4];
                br = bw[5];
                if (!r(bw[6])) {
                    bw[6] = ""
                }
                bx = bw[6];
                if (!r(bp)) {
                    bp = ""
                }
                var bt = p.characterSet || p.charset;
                if (!bt || bt.toLowerCase() === "utf-8") {
                    bt = null
                }
                bn += "&idsite=" + a9 + "&rec=1&r=" + String(Math.random()).slice(2, 8) + "&h=" + bm.getHours() + "&m=" + bm.getMinutes() + "&s=" + bm.getSeconds() + "&url=" + j(be(bF)) + (aS.length ? "&urlref=" + j(be(aS)) : "") + "&_id=" + bC + "&_idts=" + bv + "&_idvc=" + bq + "&_idn=" + bG + "&_viewts=" + br + (bt ? "&cs=" + j(bt) : "");
                var bA = B(bF, "tvsheartbeat");
                if (bA) {
                    bn += "&heartbeat=" + j(bA)
                }
                var bo = JSON2.stringify(aH);
                if (bo.length > 2) {
                    bn += "&cvar=" + j(bo)
                }
                for (bB in ba) {
                    if (Object.prototype.hasOwnProperty.call(ba, bB)) {
                        bn += "&" + bB + "=" + ba[bB]
                    }
                }
                if (bD) {
                    bn += "&data=" + j(JSON2.stringify(bD))
                } else {
                    if (Z) {
                        bn += "&data=" + j(JSON2.stringify(Z))
                    }
                }
                if (V) {
                    var bu = JSON2.stringify(V);
                    if (bu.length > 2) {
                        bn += "&_cvar=" + j(bu)
                    }
                    for (bB in bz) {
                        if (Object.prototype.hasOwnProperty.call(bz, bB)) {
                            if (V[bB][0] === "" || V[bB][1] === "") {
                                delete V[bB]
                            }
                        }
                    }
                }
                if (az && an) {
                    bn += "&gt_ms=" + an
                } else {
                    if (az && d && d.timing && d.timing.requestStart && d.timing.responseEnd) {
                        bn += "&gt_ms=" + (d.timing.responseEnd - d.timing.requestStart)
                    }
                }
                ab(bC, bv, bq, bs, br, r(bp) && String(bp).length ? bp : bx);
                bn += I(bE);
                if (aN.length) {
                    bn += "&" + aN
                }
                return bn
            }

            function a3(bp, bo, bt, bq, bm, bw) {
                var br = "idgoal=0",
                    bs, bn = new Date(),
                    bu = [],
                    bv;
                if (String(bp).length) {
                    br += "&ec_id=" + j(bp);
                    bs = Math.round(bn.getTime() / 1000)
                }
                br += "&revenue=" + bo;
                if (String(bt).length) {
                    br += "&ec_st=" + bt
                }
                if (String(bq).length) {
                    br += "&ec_tx=" + bq
                }
                if (String(bm).length) {
                    br += "&ec_sh=" + bm
                }
                if (String(bw).length) {
                    br += "&ec_dt=" + bw
                }
                if (aY) {
                    for (bv in aY) {
                        if (Object.prototype.hasOwnProperty.call(aY, bv)) {
                            if (!r(aY[bv][1])) {
                                aY[bv][1] = ""
                            }
                            if (!r(aY[bv][2])) {
                                aY[bv][2] = ""
                            }
                            if (!r(aY[bv][3]) || String(aY[bv][3]).length === 0) {
                                aY[bv][3] = 0
                            }
                            if (!r(aY[bv][4]) || String(aY[bv][4]).length === 0) {
                                aY[bv][4] = 1
                            }
                            bu.push(aY[bv])
                        }
                    }
                    br += "&ec_items=" + j(JSON2.stringify(bu))
                }
                br = at(br, Z, "ecommerce", bs);
                ax(br, aM)
            }

            function a2(bm, bq, bp, bo, bn, br) {
                if (String(bm).length && r(bq)) {
                    a3(bm, bq, bp, bo, bn, br)
                }
            }

            function bg(bm) {
                if (r(bm)) {
                    a3("", bm, "", "", "", "")
                }
            }

            function aF(bp, bq) {
                var bm = new Date(),
                    bo = at("action_name=" + j(O(bp || ar)), bq, "log");
                ax(bo, aM);
                if (X && al && !aT) {
                    aT = true;
                    N(p, "click", a8);
                    N(p, "mouseup", a8);
                    N(p, "mousedown", a8);
                    N(p, "mousemove", a8);
                    N(p, "mousewheel", a8);
                    N(z, "DOMMouseScroll", a8);
                    N(z, "scroll", a8);
                    N(p, "keypress", a8);
                    N(p, "keydown", a8);
                    N(p, "keyup", a8);
                    N(z, "resize", a8);
                    N(z, "focus", a8);
                    N(z, "blur", a8);
                    aR = bm.getTime();
                    setTimeout(function bn() {
                        var br = new Date(),
                            bs;
                        if ((aR + al) > br.getTime()) {
                            if (X < br.getTime()) {
                                bs = at("ping=1", bq, "ping");
                                ax(bs, aM)
                            }
                            setTimeout(bn, al)
                        }
                    }, al)
                }
            }

            function ap(bm, bp, bn, bq) {
                var bo = at("search=" + j(bm) + (bp ? "&search_cat=" + j(bp) : "") + (r(bn) ? "&search_count=" + bn : ""), bq, "sitesearch");
                ax(bo, aM)
            }

            function aK(bm, bp, bo) {
                var bn = at("idgoal=" + bm + (bp ? "&revenue=" + bp : ""), bo, "goal");
                ax(bn, aM)
            }

            function a7(bn, bm, bp) {
                var bo = at(bm + "=" + j(be(bn)), bp, "link");
                ax(bo, aM)
            }

            function bb(bn, bm) {
                if (bn !== "") {
                    return bn + bm.charAt(0).toUpperCase() + bm.slice(1)
                }
                return bm
            }

            function ao(br) {
                var bq, bm, bp = ["", "webkit", "ms", "moz"],
                    bo;
                if (!ay) {
                    for (bm = 0; bm < bp.length; bm++) {
                        bo = bp[bm];
                        if (Object.prototype.hasOwnProperty.call(p, bb(bo, "hidden"))) {
                            if (p[bb(bo, "visibilityState")] === "prerender") {
                                bq = true
                            }
                            break
                        }
                    }
                }
                if (bq) {
                    N(p, bo + "visibilitychange", function bn() {
                        p.removeEventListener(bo + "visibilitychange", bn, false);
                        br()
                    });
                    return
                }
                br()
            }

            function am(bo, bn) {
                var bp, bm = "(^| )(piwik[_-]" + bn;
                if (bo) {
                    for (bp = 0; bp < bo.length; bp++) {
                        bm += "|" + bo[bp]
                    }
                }
                bm += ")( |$)";
                return new RegExp(bm)
            }

            function a6(bp, bm, bq) {
                var bo = am(aG, "download"),
                    bn = am(aj, "link"),
                    br = new RegExp("\\.(" + au + ")([?&#]|$)", "i");
                return bn.test(bp) ? "link" : (bo.test(bp) || br.test(bm) ? "download" : (bq ? 0 : "link"))
            }

            function aX(br) {
                var bp, bn, bm;
                while ((bp = br.parentNode) !== null && r(bp) && ((bn = br.tagName.toUpperCase()) !== "A" && bn !== "AREA")) {
                    br = bp
                }
                if (r(br.href)) {
                    var bs = br.hostname || b(br.href),
                        bt = bs.toLowerCase(),
                        bo = br.href.replace(bs, bt),
                        bq = new RegExp("^(javascript|vbscript|jscript|mocha|livescript|ecmascript|mailto):", "i");
                    if (!bq.test(bo)) {
                        bm = a6(br.className, bo, aP(bt));
                        if (bm) {
                            bo = e(bo);
                            a7(bo, bm)
                        }
                    }
                }
            }

            function bk(bm) {
                var bn, bo;
                bm = bm || z.event;
                bn = bm.which || bm.button;
                bo = bm.target || bm.srcElement;
                if (bm.type === "click") {
                    if (bo) {
                        aX(bo)
                    }
                } else {
                    if (bm.type === "mousedown") {
                        if ((bn === 1 || bn === 2) && bo) {
                            aI = bn;
                            ad = bo
                        } else {
                            aI = ad = null
                        }
                    } else {
                        if (bm.type === "mouseup") {
                            if (bn === aI && bo === ad) {
                                aX(bo)
                            }
                            aI = ad = null
                        }
                    }
                }
            }

            function aW(bn, bm) {
                if (bm) {
                    N(bn, "mouseup", bk, false);
                    N(bn, "mousedown", bk, false)
                } else {
                    N(bn, "click", bk, false)
                }
            }

            function aE(bn) {
                if (!aV) {
                    aV = true;
                    var bo, bm = am(W, "ignore"),
                        bp = p.links;
                    if (bp) {
                        for (bo = 0; bo < bp.length; bo++) {
                            if (!bm.test(bp[bo].className)) {
                                aW(bp[bo], bn)
                            }
                        }
                    }
                }
            }

            function bf() {
                var bn, bo, bp = {
                        pdf: "application/pdf",
                        qt: "video/quicktime",
                        realp: "audio/x-pn-realaudio-plugin",
                        wma: "application/x-mplayer2",
                        dir: "application/x-director",
                        fla: "application/x-shockwave-flash",
                        java: "application/x-java-vm",
                        gears: "application/x-googlegears",
                        ag: "application/x-silverlight"
                    },
                    bm = (new RegExp("Mac OS X.*Safari/")).test(c.userAgent) ? z.devicePixelRatio || 1 : 1;
                if (!((new RegExp("MSIE")).test(c.userAgent))) {
                    if (c.mimeTypes && c.mimeTypes.length) {
                        for (bn in bp) {
                            if (Object.prototype.hasOwnProperty.call(bp, bn)) {
                                bo = c.mimeTypes[bp[bn]];
                                ba[bn] = (bo && bo.enabledPlugin) ? "1" : "0"
                            }
                        }
                    }
                    if (typeof navigator.javaEnabled !== "unknown" && r(c.javaEnabled) && c.javaEnabled()) {
                        ba.java = "1"
                    }
                    if (n(z.GearsFactory)) {
                        ba.gears = "1"
                    }
                    ba.cookie = U()
                }
                ba.res = D.width * bm + "x" + D.height * bm
            }
            bf();
            aJ();
            return {
                getVisitorId: function() {
                    return (Q())[1]
                },
                getVisitorInfo: function() {
                    return Q()
                },
                getAttributionInfo: function() {
                    return i()
                },
                getAttributionCampaignName: function() {
                    return i()[0]
                },
                getAttributionCampaignKeyword: function() {
                    return i()[1]
                },
                getAttributionReferrerTimestamp: function() {
                    return i()[2]
                },
                getAttributionReferrerUrl: function() {
                    return i()[3]
                },
                setTrackerUrl: function(bm) {
                    S = bm
                },
                setSiteId: function(bm) {
                    a9 = bm
                },
                setCustomData: function(bm, bn) {
                    if (C(bm)) {
                        Z = bm
                    } else {
                        if (!Z) {
                            Z = []
                        }
                        Z[bm] = bn
                    }
                },
                appendToTrackingUrl: function(bm) {
                    aN = bm
                },
                getCustomData: function() {
                    return Z
                },
                setCustomVariable: function(bn, bm, bq, bo) {
                    var bp;
                    if (!r(bo)) {
                        bo = "visit"
                    }
                    if (bn > 0) {
                        bm = r(bm) && !k(bm) ? String(bm) : bm;
                        bq = r(bq) && !k(bq) ? String(bq) : bq;
                        bp = [bm.slice(0, bd), bq.slice(0, bd)];
                        if (bo === "visit" || bo === 2) {
                            R();
                            V[bn] = bp
                        } else {
                            if (bo === "page" || bo === 3) {
                                aH[bn] = bp
                            }
                        }
                    }
                },
                getCustomVariable: function(bn, bo) {
                    var bm;
                    if (!r(bo)) {
                        bo = "visit"
                    }
                    if (bo === "page" || bo === 3) {
                        bm = aH[bn]
                    } else {
                        if (bo === "visit" || bo === 2) {
                            R();
                            bm = V[bn]
                        }
                    }
                    if (!r(bm) || (bm && bm[0] === "")) {
                        return false
                    }
                    return bm
                },
                deleteCustomVariable: function(bm, bn) {
                    if (this.getCustomVariable(bm, bn)) {
                        this.setCustomVariable(bm, "", "", bn)
                    }
                },
                setLinkTrackingTimer: function(bm) {
                    aM = bm
                },
                setDownloadExtensions: function(bm) {
                    au = bm
                },
                addDownloadExtensions: function(bm) {
                    au += "|" + bm
                },
                setDomains: function(bm) {
                    aO = k(bm) ? [bm] : bm;
                    aO.push(a5)
                },
                setIgnoreClasses: function(bm) {
                    W = k(bm) ? [bm] : bm
                },
                setRequestMethod: function(bm) {
                    aQ = bm || "GET"
                },
                setReferrerUrl: function(bm) {
                    aS = bm
                },
                setCustomUrl: function(bm) {
                    aC = a4(bj, bm)
                },
                setDocumentTitle: function(bm) {
                    ar = bm
                },
                setAPIUrl: function(bm) {
                    ah = bm
                },
                setDownloadClasses: function(bm) {
                    aG = k(bm) ? [bm] : bm
                },
                setLinkClasses: function(bm) {
                    aj = k(bm) ? [bm] : bm
                },
                setCampaignNameKey: function(bm) {
                    aw = k(bm) ? [bm] : bm
                },
                setCampaignKeywordKey: function(bm) {
                    aq = k(bm) ? [bm] : bm
                },
                discardHashTag: function(bm) {
                    Y = bm
                },
                setCookieNamePrefix: function(bm) {
                    bh = bm;
                    V = ae()
                },
                setCookieDomain: function(bm) {
                    ac = t(bm);
                    aJ()
                },
                setCookiePath: function(bm) {
                    bi = bm;
                    aJ()
                },
                setVisitorCookieTimeout: function(bm) {
                    ag = bm * 1000
                },
                setSessionCookieTimeout: function(bm) {
                    ai = bm * 1000
                },
                setReferralCookieTimeout: function(bm) {
                    aD = bm * 1000
                },
                setConversionAttributionFirstReferrer: function(bm) {
                    aB = bm
                },
                disableCookies: function() {
                    aa = true;
                    ba.cookie = "0"
                },
                deleteCookies: function() {
                    P()
                },
                setDoNotTrack: function(bn) {
                    var bm = c.doNotTrack || c.msDoNotTrack;
                    bc = bn && (bm === "yes" || bm === "1");
                    if (bc) {
                        this.disableCookies()
                    }
                },
                addListener: function(bn, bm) {
                    aW(bn, bm)
                },
                enableLinkTracking: function(bm) {},
                disablePerformanceTracking: function() {
                    az = false
                },
                setGenerationTimeMs: function(bm) {
                    an = parseInt(bm, 10)
                },
                setHeartBeatTimer: function(bo, bn) {
                    var bm = new Date();
                    X = bm.getTime() + bo * 1000;
                    al = bn * 1000
                },
                killFrame: function() {
                    if (z.location !== z.top.location) {
                        z.top.location = z.location
                    }
                },
                redirectFile: function(bm) {
                    if (z.location.protocol === "file:") {
                        z.location = bm
                    }
                },
                setCountPreRendered: function(bm) {
                    ay = bm
                },
                trackGoal: function(bm, bo, bn) {
                    ao(function() {
                        aK(bm, bo, bn)
                    })
                },
                trackLink: function(bn, bm, bo) {
                    ao(function() {
                        a7(bn, bm, bo)
                    })
                },
                trackPageView: function(bm, bn) {
                    if (u(a9)) {
                        ao(function() {
                            F(S, ah, a9)
                        })
                    } else {
                        ao(function() {
                            aF(bm, bn)
                        })
                    }
                },
                trackSiteSearch: function(bm, bo, bn) {
                    ao(function() {
                        ap(bm, bo, bn)
                    })
                },
                setEcommerceView: function(bp, bm, bo, bn) {
                    if (!r(bo) || !bo.length) {
                        bo = ""
                    } else {
                        if (bo instanceof Array) {
                            bo = JSON2.stringify(bo)
                        }
                    }
                    aH[5] = ["_pkc", bo];
                    if (r(bn) && String(bn).length) {
                        aH[2] = ["_pkp", bn]
                    }
                    if ((!r(bp) || !bp.length) && (!r(bm) || !bm.length)) {
                        return
                    }
                    if (r(bp) && bp.length) {
                        aH[3] = ["_pks", bp]
                    }
                    if (!r(bm) || !bm.length) {
                        bm = ""
                    }
                    aH[4] = ["_pkn", bm]
                },
                addEcommerceItem: function(bq, bm, bo, bn, bp) {
                    if (bq.length) {
                        aY[bq] = [bq, bm, bo, bn, bp]
                    }
                },
                trackEcommerceOrder: function(bm, bq, bp, bo, bn, br) {
                    a2(bm, bq, bp, bo, bn, br)
                },
                trackEcommerceCartUpdate: function(bm) {
                    bg(bm)
                }
            }
        }

        function q() {
            return {
                push: K
            }
        }
        N(z, "beforeunload", L, false);
        l();
        Date.prototype.getTimeAlias = Date.prototype.getTime;
        E = new w();
        for (H = 0; H < _tvq.length; H++) {
            if (_tvq[H][0] === "setTrackerUrl" || _tvq[H][0] === "setSiteId") {
                K(_tvq[H]);
                delete _tvq[H]
            }
        }
        for (H = 0; H < _tvq.length; H++) {
            if (_tvq[H]) {
                K(_tvq[H])
            }
        }
        _tvq = new q();
        A = {
            addPlugin: function(i, P) {
                a[i] = P
            },
            getTracker: function(i, P) {
                return new w(i, P)
            },
            getAsyncTracker: function() {
                return E
            }
        };
        return A
    }())
};
return isFinite(r) ? String(r) : "null";
case "boolean":
case "null":
    return String(r);
case "object":
    if (!r) {
        return "null"
    }
    j += b;
    o = [];
    if (Object.prototype.toString.apply(r) === "[object Array]") {
        f = r.length;
        for (n = 0; n < f; n += 1) {
            o[n] = g(n, r) || "null"
        }
        t = o.length === 0 ? "[]" : j ? "[\n" + j + o.join(",\n" + j) + "\n" + q + "]" : "[" + o.join(",") + "]";
        j = q;
        return t
    }
    if (h && typeof h === "object") {
        f = h.length;
        for (n = 0; n < f; n += 1) {
            if (typeof h[n] === "string") {
                m = h[n];
                t = g(m, r);
                if (t) {
                    o.push(a(m) + (j ? ": " : ":") + t)
                }
            }
        }
    } else {
        for (m in r) {
            if (Object.prototype.hasOwnProperty.call(r, m)) {
                t = g(m, r);
                if (t) {
                    o.push(a(m) + (j ? ": " : ":") + t)
                }
            }
        }
    }
    t = o.length === 0 ? "{}" : j ? "{\n" + j + o.join(",\n" + j) + "\n" + q + "}" : "{" + o.join(",") + "}";
    j = q;
    return t
    }
    }
    if (typeof JSON2.stringify !== "function") {
        JSON2.stringify = function(o, m, n) {
            var f;
            j = "";
            b = "";
            if (typeof n === "number") {
                for (f = 0; f < n; f += 1) {
                    b += " "
                }
            } else {
                if (typeof n === "string") {
                    b = n
                }
            }
            h = m;
            if (m && typeof m !== "function" && (typeof m !== "object" || typeof m.length !== "number")) {
                throw new Error("JSON2.stringify")
            }
            return g("", {
                "": o
            })
        }
    }
    if (typeof JSON2.parse !== "function") {
        JSON2.parse = function(o, f) {
            var n;

            function m(s, r) {
                var q, p, t = s[r];
                if (t && typeof t === "object") {
                    for (q in t) {
                        if (Object.prototype.hasOwnProperty.call(t, q)) {
                            p = m(t, q);
                            if (p !== undefined) {
                                t[q] = p
                            } else {
                                delete t[q]
                            }
                        }
                    }
                }
                return f.call(s, r, t)
            }
            o = String(o);
            c.lastIndex = 0;
            if (c.test(o)) {
                o = o.replace(c, function(p) {
                    return "\\u" + ("0000" + p.charCodeAt(0).toString(16)).slice(-4)
                })
            }
            if ((new RegExp("^[\\],:{}\\s]*$")).test(o.replace(new RegExp('\\\\(?:["\\\\/bfnrt]|u[0-9a-fA-F]{4})', "g"), "@").replace(new RegExp('"[^"\\\\\n\r]*"|true|false|null|-?\\d+(?:\\.\\d*)?(?:[eE][+\\-]?\\d+)?', "g"), "]").replace(new RegExp("(?:^|:|,)(?:\\s*\\[)+", "g"), ""))) {
                n = eval("(" + o + ")");
                return typeof f === "function" ? m({
                    "": n
                }, "") : n
            }
            throw new SyntaxError("JSON2.parse")
        }
    }
    }());
    if (typeof _tvq !== "object") {
        _tvq = []
    }
    if (typeof TV2Track !== "object") {
        TV2Track = (function() {
            var g, a = {},
                p = document,
                c = navigator,
                D = screen,
                z = window,
                d = z.performance || z.mozPerformance || z.msPerformance || z.webkitPerformance,
                m = false,
                x = [],
                j = z.encodeURIComponent,
                y = z.decodeURIComponent,
                e = unescape,
                E, H, A;

            function r(P) {
                var i = typeof P;
                return i !== "undefined"
            }

            function n(i) {
                return typeof i === "function"
            }

            function C(i) {
                return typeof i === "object"
            }

            function k(i) {
                return typeof i === "string" || i instanceof String
            }

            function K() {
                var P, R, Q;
                for (P = 0; P < arguments.length; P += 1) {
                    Q = arguments[P];
                    R = Q.shift();
                    if (k(R)) {
                        E[R].apply(E, Q)
                    } else {
                        R.apply(E, Q)
                    }
                }
            }

            function N(R, Q, P, i) {
                if (R.addEventListener) {
                    R.addEventListener(Q, P, i);
                    return true
                }
                if (R.attachEvent) {
                    return R.attachEvent("on" + Q, P)
                }
                R["on" + Q] = P
            }

            function I(Q, T) {
                var P = "",
                    S, R;
                for (S in a) {
                    if (Object.prototype.hasOwnProperty.call(a, S)) {
                        R = a[S][Q];
                        if (n(R)) {
                            P += R(T)
                        }
                    }
                }
                return P
            }

            function L() {
                var i;
                I("unload");
                if (g) {
                    do {
                        i = new Date()
                    } while (i.getTimeAlias() < g)
                }
            }

            function J() {
                var P;
                if (!m) {
                    m = true;
                    I("load");
                    for (P = 0; P < x.length; P++) {
                        x[P]()
                    }
                }
                return true
            }

            function l() {
                var P;
                if (p.addEventListener) {
                    N(p, "DOMContentLoaded", function i() {
                        p.removeEventListener("DOMContentLoaded", i, false);
                        J()
                    })
                } else {
                    if (p.attachEvent) {
                        p.attachEvent("onreadystatechange", function i() {
                            if (p.readyState === "complete") {
                                p.detachEvent("onreadystatechange", i);
                                J()
                            }
                        });
                        if (p.documentElement.doScroll && z === z.top) {
                            (function i() {
                                if (!m) {
                                    try {
                                        p.documentElement.doScroll("left")
                                    } catch (Q) {
                                        setTimeout(i, 0);
                                        return
                                    }
                                    J()
                                }
                            }())
                        }
                    }
                }
                if ((new RegExp("WebKit")).test(c.userAgent)) {
                    P = setInterval(function() {
                        if (m || /loaded|complete/.test(p.readyState)) {
                            clearInterval(P);
                            J()
                        }
                    }, 10)
                }
                N(z, "load", J, false)
            }

            function f(Q, P) {
                var i = p.createElement("script");
                i.type = "text/javascript";
                i.src = Q;
                if (i.readyState) {
                    i.onreadystatechange = function() {
                        var R = this.readyState;
                        if (R === "loaded" || R === "complete") {
                            i.onreadystatechange = null;
                            P()
                        }
                    }
                } else {
                    i.onload = P
                }
                p.getElementsByTagName("head")[0].appendChild(i)
            }

            function s() {
                var i = "";
                try {
                    i = z.top.document.referrer
                } catch (Q) {
                    if (z.parent) {
                        try {
                            i = z.parent.document.referrer
                        } catch (P) {
                            i = ""
                        }
                    }
                }
                if (i === "") {
                    i = p.referrer
                }
                return i
            }

            function h(i) {
                var Q = new RegExp("^([a-z]+):"),
                    P = Q.exec(i);
                return P ? P[1] : null
            }

            function b(i) {
                var Q = new RegExp("^(?:(?:https?|ftp):)/*(?:[^@]+@)?([^:/#]+)"),
                    P = Q.exec(i);
                return P ? P[1] : i
            }

            function B(Q, P) {
                var i = "[\\?&#]" + P + "=([^&#]*)";
                var S = new RegExp(i);
                var R = S.exec(Q);
                return R ? y(R[1]) : ""
            }

            function o(i) {
                return e(j(i))
            }

            function M(af) {
                var R = function(W, i) {
                        return (W << i) | (W >>> (32 - i))
                    },
                    ag = function(am) {
                        var al = "",
                            ak, W;
                        for (ak = 7; ak >= 0; ak--) {
                            W = (am >>> (ak * 4)) & 15;
                            al += W.toString(16)
                        }
                        return al
                    },
                    U, ai, ah, Q = [],
                    Z = 1732584193,
                    X = 4023233417,
                    V = 2562383102,
                    T = 271733878,
                    S = 3285377520,
                    ae, ad, ac, ab, aa, aj, P, Y = [];
                af = o(af);
                P = af.length;
                for (ai = 0; ai < P - 3; ai += 4) {
                    ah = af.charCodeAt(ai) << 24 | af.charCodeAt(ai + 1) << 16 | af.charCodeAt(ai + 2) << 8 | af.charCodeAt(ai + 3);
                    Y.push(ah)
                }
                switch (P & 3) {
                    case 0:
                        ai = 2147483648;
                        break;
                    case 1:
                        ai = af.charCodeAt(P - 1) << 24 | 8388608;
                        break;
                    case 2:
                        ai = af.charCodeAt(P - 2) << 24 | af.charCodeAt(P - 1) << 16 | 32768;
                        break;
                    case 3:
                        ai = af.charCodeAt(P - 3) << 24 | af.charCodeAt(P - 2) << 16 | af.charCodeAt(P - 1) << 8 | 128;
                        break
                }
                Y.push(ai);
                while ((Y.length & 15) !== 14) {
                    Y.push(0)
                }
                Y.push(P >>> 29);
                Y.push((P << 3) & 4294967295);
                for (U = 0; U < Y.length; U += 16) {
                    for (ai = 0; ai < 16; ai++) {
                        Q[ai] = Y[U + ai]
                    }
                    for (ai = 16; ai <= 79; ai++) {
                        Q[ai] = R(Q[ai - 3] ^ Q[ai - 8] ^ Q[ai - 14] ^ Q[ai - 16], 1)
                    }
                    ae = Z;
                    ad = X;
                    ac = V;
                    ab = T;
                    aa = S;
                    for (ai = 0; ai <= 19; ai++) {
                        aj = (R(ae, 5) + ((ad & ac) | (~ad & ab)) + aa + Q[ai] + 1518500249) & 4294967295;
                        aa = ab;
                        ab = ac;
                        ac = R(ad, 30);
                        ad = ae;
                        ae = aj
                    }
                    for (ai = 20; ai <= 39; ai++) {
                        aj = (R(ae, 5) + (ad ^ ac ^ ab) + aa + Q[ai] + 1859775393) & 4294967295;
                        aa = ab;
                        ab = ac;
                        ac = R(ad, 30);
                        ad = ae;
                        ae = aj
                    }
                    for (ai = 40; ai <= 59; ai++) {
                        aj = (R(ae, 5) + ((ad & ac) | (ad & ab) | (ac & ab)) + aa + Q[ai] + 2400959708) & 4294967295;
                        aa = ab;
                        ab = ac;
                        ac = R(ad, 30);
                        ad = ae;
                        ae = aj
                    }
                    for (ai = 60; ai <= 79; ai++) {
                        aj = (R(ae, 5) + (ad ^ ac ^ ab) + aa + Q[ai] + 3395469782) & 4294967295;
                        aa = ab;
                        ab = ac;
                        ac = R(ad, 30);
                        ad = ae;
                        ae = aj
                    }
                    Z = (Z + ae) & 4294967295;
                    X = (X + ad) & 4294967295;
                    V = (V + ac) & 4294967295;
                    T = (T + ab) & 4294967295;
                    S = (S + aa) & 4294967295
                }
                aj = ag(Z) + ag(X) + ag(V) + ag(T) + ag(S);
                return aj.toLowerCase()
            }

            function G(Q, i, P) {
                if (Q === "translate.googleusercontent.com") {
                    if (P === "") {
                        P = i
                    }
                    i = B(i, "u");
                    Q = b(i)
                } else {
                    if (Q === "cc.bingj.com" || Q === "webcache.googleusercontent.com" || Q.slice(0, 5) === "74.6.") {
                        i = p.links[0].href;
                        Q = b(i)
                    }
                }
                return [Q, i, P]
            }

            function t(P) {
                var i = P.length;
                if (P.charAt(--i) === ".") {
                    P = P.slice(0, i)
                }
                if (P.slice(0, 2) === "*.") {
                    P = P.slice(1)
                }
                return P
            }

            function O(P) {
                P = P && P.text ? P.text : P;
                if (!k(P)) {
                    var i = p.getElementsByTagName("title");
                    if (i && r(i[0])) {
                        P = i[0].text
                    }
                }
                return P
            }

            function v(i, P) {
                if (P) {
                    return P
                }
                if (i.slice(-9) === "piwik.php") {
                    i = i.slice(0, i.length - 9)
                }
                return i
            }

            function u(S) {
                var i = "Piwik_Overlay";
                var V = new RegExp("index\\.php\\?module=Overlay&action=startOverlaySession&idsite=([0-9]+)&period=([^&]+)&date=([^&]+)$");
                var Q = V.exec(p.referrer);
                if (Q) {
                    var R = Q[1];
                    if (R !== String(S)) {
                        return false
                    }
                    var U = Q[2],
                        P = Q[3];
                    z.name = i + "###" + U + "###" + P
                }
                z.name = z.name || "";
                var T = z.name.split("###");
                return T.length === 3 && T[0] === i
            }

            function F(P, U, R) {
                z.name = z.name || "";
                var T = z.name.split("###"),
                    S = T[1],
                    i = T[2],
                    Q = v(P, U);
                f(Q + "plugins/Overlay/client/client.js?v=1", function() {
                    Piwik_Overlay_Client.initialize(Q, R, S, i)
                })
            }

            function w(ak, aL) {
                var T = G(p.domain, z.location.href, s()),
                    a5 = t(T[0]),
                    bj = T[1],
                    aS = T[2],
                    aQ = "GET",
                    S = ak || "",
                    ah = "",
                    aN = "",
                    a9 = aL || "",
                    aC, ar = p.title,
                    au = "7z|aac|ar[cj]|as[fx]|avi|bin|csv|deb|dmg|docx?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|ms[ip]|od[bfgpst]|og[gv]|pdf|phps|png|pptx?|qtm?|ra[mr]?|rpm|sea|sit|tar|t?bz2?|tgz|torrent|txt|wav|wm[av]|wpd||xlsx?|xml|z|zip",
                    aO = [a5],
                    W = [],
                    aG = [],
                    aj = [],
                    aM = 500,
                    X, al, Y, Z, aw = ["pk_campaign", "piwik_campaign", "utm_campaign", "utm_source", "utm_medium"],
                    aq = ["pk_kwd", "piwik_kwd", "utm_term"],
                    bh = "_tq_",
                    ac, bi, aa = false,
                    bc, ay, aB, ag = 63072000000,
                    ai = 1800000,
                    aD = 15768000000,
                    az = true,
                    an = 0,
                    V = false,
                    aH = {},
                    bd = 4000,
                    aY = {},
                    ba = {},
                    aV = false,
                    aT = false,
                    aR, aI, ad, av = M,
                    aU, aA;

                function a0(bs, bp, bo, br, bn, bq) {
                    if (aa) {
                        return
                    }
                    var bm;
                    if (bo) {
                        bm = new Date();
                        bm.setTime(bm.getTime() + bo)
                    }
                    p.cookie = bs + "=" + j(bp) + (bo ? ";expires=" + bm.toGMTString() : "") + ";path=" + (br || "/") + (bn ? ";domain=" + bn : "") + (bq ? ";secure" : "")
                }

                function af(bo) {
                    if (aa) {
                        return 0
                    }
                    var bm = new RegExp("(^|;)[ ]*" + bo + "=([^;]*)"),
                        bn = bm.exec(p.cookie);
                    return bn ? y(bn[2]) : 0
                }

                function be(bm) {
                    var bn;
                    if (Y) {
                        bn = new RegExp("#.*");
                        return bm.replace(bn, "")
                    }
                    return bm
                }

                function a4(bo, bm) {
                    var bp = h(bm),
                        bn;
                    if (bp) {
                        return bm
                    }
                    if (bm.slice(0, 1) === "/") {
                        return h(bo) + "://" + b(bo) + bm
                    }
                    bo = be(bo);
                    if ((bn = bo.indexOf("?")) >= 0) {
                        bo = bo.slice(0, bn)
                    }
                    if ((bn = bo.lastIndexOf("/")) !== bo.length - 1) {
                        bo = bo.slice(0, bn + 1)
                    }
                    return bo + bm
                }

                function aP(bp) {
                    var bn, bm, bo;
                    for (bn = 0; bn < aO.length; bn++) {
                        bm = t(aO[bn].toLowerCase());
                        if (bp === bm) {
                            return true
                        }
                        if (bm.slice(0, 1) === ".") {
                            if (bp === bm.slice(1)) {
                                return true
                            }
                            bo = bp.length - bm.length;
                            if ((bo > 0) && (bp.slice(bo) === bm)) {
                                return true
                            }
                        }
                    }
                    return false
                }

                function bl(bm) {
                    var bn = new Image(1, 1);
                    bn.onload = function() {};
                    bn.src = S + (S.indexOf("?") < 0 ? "?" : "&") + bm
                }

                function a1(bm) {
                    try {
                        var bo = z.XMLHttpRequest ? new z.XMLHttpRequest() : z.ActiveXObject ? new ActiveXObject("Microsoft.XMLHTTP") : null;
                        bo.open("POST", S, true);
                        bo.onreadystatechange = function() {
                            if (this.readyState === 4 && this.status !== 200) {
                                bl(bm)
                            }
                        };
                        bo.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
                        bo.send(bm)
                    } catch (bn) {
                        bl(bm)
                    }
                }

                function ax(bo, bn) {
                    var bm = new Date();
                    if (!bc) {
                        if (aQ === "POST") {
                            a1(bo)
                        } else {
                            bl(bo)
                        }
                        g = bm.getTime() + bn
                    }
                }

                function aZ(bm) {
                    return bh + bm + "." + a9 + "." + aU
                }

                function U() {
                    if (aa) {
                        return "0"
                    }
                    if (!r(c.cookieEnabled)) {
                        var bm = aZ("testcookie");
                        a0(bm, "1");
                        return af(bm) === "1" ? "1" : "0"
                    }
                    return c.cookieEnabled ? "1" : "0"
                }

                function aJ() {
                    aU = av((ac || a5) + (bi || "/")).slice(0, 4)
                }

                function ae() {
                    var bn = aZ("cvar"),
                        bm = af(bn);
                    if (bm.length) {
                        bm = JSON2.parse(bm);
                        if (C(bm)) {
                            return bm
                        }
                    }
                    return {}
                }

                function R() {
                    if (V === false) {
                        V = ae()
                    }
                }

                function a8() {
                    var bm = new Date();
                    aR = bm.getTime()
                }

                function ab(bq, bn, bm, bp, bo, br) {
                    a0(aZ("id"), bq + "." + bn + "." + bm + "." + bp + "." + bo + "." + br, ag, bi, ac)
                }

                function Q() {
                    var bn = new Date(),
                        bm = Math.round(bn.getTime() / 1000),
                        bp = af(aZ("id")),
                        bo;
                    if (bp) {
                        bo = bp.split(".");
                        bo.unshift("0")
                    } else {
                        if (!aA) {
                            aA = av((c.userAgent || "") + (c.platform || "") + JSON2.stringify(ba) + bm).slice(0, 16)
                        }
                        bo = ["1", aA, bm, 0, bm, "", ""]
                    }
                    return bo
                }

                function i() {
                    var bm = af(aZ("ref"));
                    if (bm.length) {
                        try {
                            bm = JSON2.parse(bm);
                            if (C(bm)) {
                                return bm
                            }
                        } catch (bn) {}
                    }
                    return ["", "", 0, ""]
                }

                function P() {
                    var bm = aa;
                    aa = false;
                    a0(aZ("id"), "", -86400, bi, ac);
                    a0(aZ("ses"), "", -86400, bi, ac);
                    a0(aZ("cvar"), "", -86400, bi, ac);
                    a0(aZ("ref"), "", -86400, bi, ac);
                    aa = bm
                }

                function at(bn, bD, bE, bp) {
                    var bB, bm = new Date(),
                        bs = Math.round(bm.getTime() / 1000),
                        bG, bC, bq, bv, by, br, bx, bz = V,
                        bw = Q(),
                        bF = aC || bj;
                    if (aa) {
                        P()
                    }
                    if (bc) {
                        return ""
                    }
                    bG = bw[0];
                    bC = bw[1];
                    bv = bw[2];
                    bq = bw[3];
                    by = bw[4];
                    br = bw[5];
                    if (!r(bw[6])) {
                        bw[6] = ""
                    }
                    bx = bw[6];
                    if (!r(bp)) {
                        bp = ""
                    }
                    var bt = p.characterSet || p.charset;
                    if (!bt || bt.toLowerCase() === "utf-8") {
                        bt = null
                    }
                    bn += "&idsite=" + a9 + "&rec=1&r=" + String(Math.random()).slice(2, 8) + "&h=" + bm.getHours() + "&m=" + bm.getMinutes() + "&s=" + bm.getSeconds() + "&url=" + j(be(bF)) + (aS.length ? "&urlref=" + j(be(aS)) : "") + "&_id=" + bC + "&_idts=" + bv + "&_idvc=" + bq + "&_idn=" + bG + "&_viewts=" + br + (bt ? "&cs=" + j(bt) : "");
                    var bA = B(bF, "tvsheartbeat");
                    if (bA) {
                        bn += "&heartbeat=" + j(bA)
                    }
                    var bo = JSON2.stringify(aH);
                    if (bo.length > 2) {
                        bn += "&cvar=" + j(bo)
                    }
                    for (bB in ba) {
                        if (Object.prototype.hasOwnProperty.call(ba, bB)) {
                            bn += "&" + bB + "=" + ba[bB]
                        }
                    }
                    if (bD) {
                        bn += "&data=" + j(JSON2.stringify(bD))
                    } else {
                        if (Z) {
                            bn += "&data=" + j(JSON2.stringify(Z))
                        }
                    }
                    if (V) {
                        var bu = JSON2.stringify(V);
                        if (bu.length > 2) {
                            bn += "&_cvar=" + j(bu)
                        }
                        for (bB in bz) {
                            if (Object.prototype.hasOwnProperty.call(bz, bB)) {
                                if (V[bB][0] === "" || V[bB][1] === "") {
                                    delete V[bB]
                                }
                            }
                        }
                    }
                    if (az && an) {
                        bn += "&gt_ms=" + an
                    } else {
                        if (az && d && d.timing && d.timing.requestStart && d.timing.responseEnd) {
                            bn += "&gt_ms=" + (d.timing.responseEnd - d.timing.requestStart)
                        }
                    }
                    ab(bC, bv, bq, bs, br, r(bp) && String(bp).length ? bp : bx);
                    bn += I(bE);
                    if (aN.length) {
                        bn += "&" + aN
                    }
                    return bn
                }

                function a3(bp, bo, bt, bq, bm, bw) {
                    var br = "idgoal=0",
                        bs, bn = new Date(),
                        bu = [],
                        bv;
                    if (String(bp).length) {
                        br += "&ec_id=" + j(bp);
                        bs = Math.round(bn.getTime() / 1000)
                    }
                    br += "&revenue=" + bo;
                    if (String(bt).length) {
                        br += "&ec_st=" + bt
                    }
                    if (String(bq).length) {
                        br += "&ec_tx=" + bq
                    }
                    if (String(bm).length) {
                        br += "&ec_sh=" + bm
                    }
                    if (String(bw).length) {
                        br += "&ec_dt=" + bw
                    }
                    if (aY) {
                        for (bv in aY) {
                            if (Object.prototype.hasOwnProperty.call(aY, bv)) {
                                if (!r(aY[bv][1])) {
                                    aY[bv][1] = ""
                                }
                                if (!r(aY[bv][2])) {
                                    aY[bv][2] = ""
                                }
                                if (!r(aY[bv][3]) || String(aY[bv][3]).length === 0) {
                                    aY[bv][3] = 0
                                }
                                if (!r(aY[bv][4]) || String(aY[bv][4]).length === 0) {
                                    aY[bv][4] = 1
                                }
                                bu.push(aY[bv])
                            }
                        }
                        br += "&ec_items=" + j(JSON2.stringify(bu))
                    }
                    br = at(br, Z, "ecommerce", bs);
                    ax(br, aM)
                }

                function a2(bm, bq, bp, bo, bn, br) {
                    if (String(bm).length && r(bq)) {
                        a3(bm, bq, bp, bo, bn, br)
                    }
                }

                function bg(bm) {
                    if (r(bm)) {
                        a3("", bm, "", "", "", "")
                    }
                }

                function aF(bp, bq) {
                    var bm = new Date(),
                        bo = at("action_name=" + j(O(bp || ar)), bq, "log");
                    ax(bo, aM);
                    if (X && al && !aT) {
                        aT = true;
                        N(p, "click", a8);
                        N(p, "mouseup", a8);
                        N(p, "mousedown", a8);
                        N(p, "mousemove", a8);
                        N(p, "mousewheel", a8);
                        N(z, "DOMMouseScroll", a8);
                        N(z, "scroll", a8);
                        N(p, "keypress", a8);
                        N(p, "keydown", a8);
                        N(p, "keyup", a8);
                        N(z, "resize", a8);
                        N(z, "focus", a8);
                        N(z, "blur", a8);
                        aR = bm.getTime();
                        setTimeout(function bn() {
                            var br = new Date(),
                                bs;
                            if ((aR + al) > br.getTime()) {
                                if (X < br.getTime()) {
                                    bs = at("ping=1", bq, "ping");
                                    ax(bs, aM)
                                }
                                setTimeout(bn, al)
                            }
                        }, al)
                    }
                }

                function ap(bm, bp, bn, bq) {
                    var bo = at("search=" + j(bm) + (bp ? "&search_cat=" + j(bp) : "") + (r(bn) ? "&search_count=" + bn : ""), bq, "sitesearch");
                    ax(bo, aM)
                }

                function aK(bm, bp, bo) {
                    var bn = at("idgoal=" + bm + (bp ? "&revenue=" + bp : ""), bo, "goal");
                    ax(bn, aM)
                }

                function a7(bn, bm, bp) {
                    var bo = at(bm + "=" + j(be(bn)), bp, "link");
                    ax(bo, aM)
                }

                function bb(bn, bm) {
                    if (bn !== "") {
                        return bn + bm.charAt(0).toUpperCase() + bm.slice(1)
                    }
                    return bm
                }

                function ao(br) {
                    var bq, bm, bp = ["", "webkit", "ms", "moz"],
                        bo;
                    if (!ay) {
                        for (bm = 0; bm < bp.length; bm++) {
                            bo = bp[bm];
                            if (Object.prototype.hasOwnProperty.call(p, bb(bo, "hidden"))) {
                                if (p[bb(bo, "visibilityState")] === "prerender") {
                                    bq = true
                                }
                                break
                            }
                        }
                    }
                    if (bq) {
                        N(p, bo + "visibilitychange", function bn() {
                            p.removeEventListener(bo + "visibilitychange", bn, false);
                            br()
                        });
                        return
                    }
                    br()
                }

                function am(bo, bn) {
                    var bp, bm = "(^| )(piwik[_-]" + bn;
                    if (bo) {
                        for (bp = 0; bp < bo.length; bp++) {
                            bm += "|" + bo[bp]
                        }
                    }
                    bm += ")( |$)";
                    return new RegExp(bm)
                }

                function a6(bp, bm, bq) {
                    var bo = am(aG, "download"),
                        bn = am(aj, "link"),
                        br = new RegExp("\\.(" + au + ")([?&#]|$)", "i");
                    return bn.test(bp) ? "link" : (bo.test(bp) || br.test(bm) ? "download" : (bq ? 0 : "link"))
                }

                function aX(br) {
                    var bp, bn, bm;
                    while ((bp = br.parentNode) !== null && r(bp) && ((bn = br.tagName.toUpperCase()) !== "A" && bn !== "AREA")) {
                        br = bp
                    }
                    if (r(br.href)) {
                        var bs = br.hostname || b(br.href),
                            bt = bs.toLowerCase(),
                            bo = br.href.replace(bs, bt),
                            bq = new RegExp("^(javascript|vbscript|jscript|mocha|livescript|ecmascript|mailto):", "i");
                        if (!bq.test(bo)) {
                            bm = a6(br.className, bo, aP(bt));
                            if (bm) {
                                bo = e(bo);
                                a7(bo, bm)
                            }
                        }
                    }
                }

                function bk(bm) {
                    var bn, bo;
                    bm = bm || z.event;
                    bn = bm.which || bm.button;
                    bo = bm.target || bm.srcElement;
                    if (bm.type === "click") {
                        if (bo) {
                            aX(bo)
                        }
                    } else {
                        if (bm.type === "mousedown") {
                            if ((bn === 1 || bn === 2) && bo) {
                                aI = bn;
                                ad = bo
                            } else {
                                aI = ad = null
                            }
                        } else {
                            if (bm.type === "mouseup") {
                                if (bn === aI && bo === ad) {
                                    aX(bo)
                                }
                                aI = ad = null
                            }
                        }
                    }
                }

                function aW(bn, bm) {
                    if (bm) {
                        N(bn, "mouseup", bk, false);
                        N(bn, "mousedown", bk, false)
                    } else {
                        N(bn, "click", bk, false)
                    }
                }

                function aE(bn) {
                    if (!aV) {
                        aV = true;
                        var bo, bm = am(W, "ignore"),
                            bp = p.links;
                        if (bp) {
                            for (bo = 0; bo < bp.length; bo++) {
                                if (!bm.test(bp[bo].className)) {
                                    aW(bp[bo], bn)
                                }
                            }
                        }
                    }
                }

                function bf() {
                    var bn, bo, bp = {
                            pdf: "application/pdf",
                            qt: "video/quicktime",
                            realp: "audio/x-pn-realaudio-plugin",
                            wma: "application/x-mplayer2",
                            dir: "application/x-director",
                            fla: "application/x-shockwave-flash",
                            java: "application/x-java-vm",
                            gears: "application/x-googlegears",
                            ag: "application/x-silverlight"
                        },
                        bm = (new RegExp("Mac OS X.*Safari/")).test(c.userAgent) ? z.devicePixelRatio || 1 : 1;
                    if (!((new RegExp("MSIE")).test(c.userAgent))) {
                        if (c.mimeTypes && c.mimeTypes.length) {
                            for (bn in bp) {
                                if (Object.prototype.hasOwnProperty.call(bp, bn)) {
                                    bo = c.mimeTypes[bp[bn]];
                                    ba[bn] = (bo && bo.enabledPlugin) ? "1" : "0"
                                }
                            }
                        }
                        if (typeof navigator.javaEnabled !== "unknown" && r(c.javaEnabled) && c.javaEnabled()) {
                            ba.java = "1"
                        }
                        if (n(z.GearsFactory)) {
                            ba.gears = "1"
                        }
                        ba.cookie = U()
                    }
                    ba.res = D.width * bm + "x" + D.height * bm
                }
                bf();
                aJ();
                return {
                    getVisitorId: function() {
                        return (Q())[1]
                    },
                    getVisitorInfo: function() {
                        return Q()
                    },
                    getAttributionInfo: function() {
                        return i()
                    },
                    getAttributionCampaignName: function() {
                        return i()[0]
                    },
                    getAttributionCampaignKeyword: function() {
                        return i()[1]
                    },
                    getAttributionReferrerTimestamp: function() {
                        return i()[2]
                    },
                    getAttributionReferrerUrl: function() {
                        return i()[3]
                    },
                    setTrackerUrl: function(bm) {
                        S = bm
                    },
                    setSiteId: function(bm) {
                        a9 = bm
                    },
                    setCustomData: function(bm, bn) {
                        if (C(bm)) {
                            Z = bm
                        } else {
                            if (!Z) {
                                Z = []
                            }
                            Z[bm] = bn
                        }
                    },
                    appendToTrackingUrl: function(bm) {
                        aN = bm
                    },
                    getCustomData: function() {
                        return Z
                    },
                    setCustomVariable: function(bn, bm, bq, bo) {
                        var bp;
                        if (!r(bo)) {
                            bo = "visit"
                        }
                        if (bn > 0) {
                            bm = r(bm) && !k(bm) ? String(bm) : bm;
                            bq = r(bq) && !k(bq) ? String(bq) : bq;
                            bp = [bm.slice(0, bd), bq.slice(0, bd)];
                            if (bo === "visit" || bo === 2) {
                                R();
                                V[bn] = bp
                            } else {
                                if (bo === "page" || bo === 3) {
                                    aH[bn] = bp
                                }
                            }
                        }
                    },
                    getCustomVariable: function(bn, bo) {
                        var bm;
                        if (!r(bo)) {
                            bo = "visit"
                        }
                        if (bo === "page" || bo === 3) {
                            bm = aH[bn]
                        } else {
                            if (bo === "visit" || bo === 2) {
                                R();
                                bm = V[bn]
                            }
                        }
                        if (!r(bm) || (bm && bm[0] === "")) {
                            return false
                        }
                        return bm
                    },
                    deleteCustomVariable: function(bm, bn) {
                        if (this.getCustomVariable(bm, bn)) {
                            this.setCustomVariable(bm, "", "", bn)
                        }
                    },
                    setLinkTrackingTimer: function(bm) {
                        aM = bm
                    },
                    setDownloadExtensions: function(bm) {
                        au = bm
                    },
                    addDownloadExtensions: function(bm) {
                        au += "|" + bm
                    },
                    setDomains: function(bm) {
                        aO = k(bm) ? [bm] : bm;
                        aO.push(a5)
                    },
                    setIgnoreClasses: function(bm) {
                        W = k(bm) ? [bm] : bm
                    },
                    setRequestMethod: function(bm) {
                        aQ = bm || "GET"
                    },
                    setReferrerUrl: function(bm) {
                        aS = bm
                    },
                    setCustomUrl: function(bm) {
                        aC = a4(bj, bm)
                    },
                    setDocumentTitle: function(bm) {
                        ar = bm
                    },
                    setAPIUrl: function(bm) {
                        ah = bm
                    },
                    setDownloadClasses: function(bm) {
                        aG = k(bm) ? [bm] : bm
                    },
                    setLinkClasses: function(bm) {
                        aj = k(bm) ? [bm] : bm
                    },
                    setCampaignNameKey: function(bm) {
                        aw = k(bm) ? [bm] : bm
                    },
                    setCampaignKeywordKey: function(bm) {
                        aq = k(bm) ? [bm] : bm
                    },
                    discardHashTag: function(bm) {
                        Y = bm
                    },
                    setCookieNamePrefix: function(bm) {
                        bh = bm;
                        V = ae()
                    },
                    setCookieDomain: function(bm) {
                        ac = t(bm);
                        aJ()
                    },
                    setCookiePath: function(bm) {
                        bi = bm;
                        aJ()
                    },
                    setVisitorCookieTimeout: function(bm) {
                        ag = bm * 1000
                    },
                    setSessionCookieTimeout: function(bm) {
                        ai = bm * 1000
                    },
                    setReferralCookieTimeout: function(bm) {
                        aD = bm * 1000
                    },
                    setConversionAttributionFirstReferrer: function(bm) {
                        aB = bm
                    },
                    disableCookies: function() {
                        aa = true;
                        ba.cookie = "0"
                    },
                    deleteCookies: function() {
                        P()
                    },
                    setDoNotTrack: function(bn) {
                        var bm = c.doNotTrack || c.msDoNotTrack;
                        bc = bn && (bm === "yes" || bm === "1");
                        if (bc) {
                            this.disableCookies()
                        }
                    },
                    addListener: function(bn, bm) {
                        aW(bn, bm)
                    },
                    enableLinkTracking: function(bm) {},
                    disablePerformanceTracking: function() {
                        az = false
                    },
                    setGenerationTimeMs: function(bm) {
                        an = parseInt(bm, 10)
                    },
                    setHeartBeatTimer: function(bo, bn) {
                        var bm = new Date();
                        X = bm.getTime() + bo * 1000;
                        al = bn * 1000
                    },
                    killFrame: function() {
                        if (z.location !== z.top.location) {
                            z.top.location = z.location
                        }
                    },
                    redirectFile: function(bm) {
                        if (z.location.protocol === "file:") {
                            z.location = bm
                        }
                    },
                    setCountPreRendered: function(bm) {
                        ay = bm
                    },
                    trackGoal: function(bm, bo, bn) {
                        ao(function() {
                            aK(bm, bo, bn)
                        })
                    },
                    trackLink: function(bn, bm, bo) {
                        ao(function() {
                            a7(bn, bm, bo)
                        })
                    },
                    trackPageView: function(bm, bn) {
                        if (u(a9)) {
                            ao(function() {
                                F(S, ah, a9)
                            })
                        } else {
                            ao(function() {
                                aF(bm, bn)
                            })
                        }
                    },
                    trackSiteSearch: function(bm, bo, bn) {
                        ao(function() {
                            ap(bm, bo, bn)
                        })
                    },
                    setEcommerceView: function(bp, bm, bo, bn) {
                        if (!r(bo) || !bo.length) {
                            bo = ""
                        } else {
                            if (bo instanceof Array) {
                                bo = JSON2.stringify(bo)
                            }
                        }
                        aH[5] = ["_pkc", bo];
                        if (r(bn) && String(bn).length) {
                            aH[2] = ["_pkp", bn]
                        }
                        if ((!r(bp) || !bp.length) && (!r(bm) || !bm.length)) {
                            return
                        }
                        if (r(bp) && bp.length) {
                            aH[3] = ["_pks", bp]
                        }
                        if (!r(bm) || !bm.length) {
                            bm = ""
                        }
                        aH[4] = ["_pkn", bm]
                    },
                    addEcommerceItem: function(bq, bm, bo, bn, bp) {
                        if (bq.length) {
                            aY[bq] = [bq, bm, bo, bn, bp]
                        }
                    },
                    trackEcommerceOrder: function(bm, bq, bp, bo, bn, br) {
                        a2(bm, bq, bp, bo, bn, br)
                    },
                    trackEcommerceCartUpdate: function(bm) {
                        bg(bm)
                    }
                }
            }

            function q() {
                return {
                    push: K
                }
            }
            N(z, "beforeunload", L, false);
            l();
            Date.prototype.getTimeAlias = Date.prototype.getTime;
            E = new w();
            for (H = 0; H < _tvq.length; H++) {
                if (_tvq[H][0] === "setTrackerUrl" || _tvq[H][0] === "setSiteId") {
                    K(_tvq[H]);
                    delete _tvq[H]
                }
            }
            for (H = 0; H < _tvq.length; H++) {
                if (_tvq[H]) {
                    K(_tvq[H])
                }
            }
            _tvq = new q();
            A = {
                addPlugin: function(i, P) {
                    a[i] = P
                },
                getTracker: function(i, P) {
                    return new w(i, P)
                },
                getAsyncTracker: function() {
                    return E
                }
            };
            return A
        }())
    };