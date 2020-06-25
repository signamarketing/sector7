/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-webp-setclasses !*/
!(function (e, A, n) {
  function o(e, A) {
    return typeof e === A;
  }
  function a(e) {
    var A = u.className,
      n = l._config.classPrefix || "";
    if ((c && (A = A.baseVal), l._config.enableJSClass)) {
      var o = new RegExp("(^|\\s)" + n + "no-js(\\s|$)");
      A = A.replace(o, "$1" + n + "js$2");
    }
    l._config.enableClasses &&
      ((A += " " + n + e.join(" " + n)),
      c ? (u.className.baseVal = A) : (u.className = A));
  }
  function t(e, A) {
    if ("object" == typeof e) for (var n in e) f(e, n) && t(n, e[n]);
    else {
      var o = (e = e.toLowerCase()).split("."),
        i = l[o[0]];
      if ((2 == o.length && (i = i[o[1]]), void 0 !== i)) return l;
      (A = "function" == typeof A ? A() : A),
        1 == o.length
          ? (l[o[0]] = A)
          : (!l[o[0]] ||
              l[o[0]] instanceof Boolean ||
              (l[o[0]] = new Boolean(l[o[0]])),
            (l[o[0]][o[1]] = A)),
        a([(A && 0 != A ? "" : "no-") + o.join("-")]),
        l._trigger(e, A);
    }
    return l;
  }
  var i = [],
    s = [],
    r = {
      _version: "3.6.0",
      _config: {
        classPrefix: "",
        enableClasses: !0,
        enableJSClass: !0,
        usePrefixes: !0,
      },
      _q: [],
      on: function (e, A) {
        var n = this;
        setTimeout(function () {
          A(n[e]);
        }, 0);
      },
      addTest: function (e, A, n) {
        s.push({ name: e, fn: A, options: n });
      },
      addAsyncTest: function (e) {
        s.push({ name: null, fn: e });
      },
    },
    l = function () {};
  (l.prototype = r), (l = new l());
  var f,
    u = A.documentElement,
    c = "svg" === u.nodeName.toLowerCase();
  !(function () {
    var e = {}.hasOwnProperty;
    f =
      o(e, "undefined") || o(e.call, "undefined")
        ? function (e, A) {
            return A in e && o(e.constructor.prototype[A], "undefined");
          }
        : function (A, n) {
            return e.call(A, n);
          };
  })(),
    (r._l = {}),
    (r.on = function (e, A) {
      this._l[e] || (this._l[e] = []),
        this._l[e].push(A),
        l.hasOwnProperty(e) &&
          setTimeout(function () {
            l._trigger(e, l[e]);
          }, 0);
    }),
    (r._trigger = function (e, A) {
      if (this._l[e]) {
        var n = this._l[e];
        setTimeout(function () {
          var e;
          for (e = 0; e < n.length; e++) (0, n[e])(A);
        }, 0),
          delete this._l[e];
      }
    }),
    l._q.push(function () {
      r.addTest = t;
    }),
    l.addAsyncTest(function () {
      function e(e, A, n) {
        function o(A) {
          var o = !(!A || "load" !== A.type) && 1 == a.width;
          t(e, "webp" === e && o ? new Boolean(o) : o), n && n(A);
        }
        var a = new Image();
        (a.onerror = o), (a.onload = o), (a.src = A);
      }
      var A = [
          {
            uri:
              "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",
            name: "webp",
          },
          {
            uri:
              "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",
            name: "webp.alpha",
          },
          {
            uri:
              "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",
            name: "webp.animation",
          },
          {
            uri:
              "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",
            name: "webp.lossless",
          },
        ],
        n = A.shift();
      e(n.name, n.uri, function (n) {
        if (n && "load" === n.type)
          for (var o = 0; o < A.length; o++) e(A[o].name, A[o].uri);
      });
    }),
    (function () {
      var e, A, n, a, t, r;
      for (var f in s)
        if (s.hasOwnProperty(f)) {
          if (
            ((e = []),
            (A = s[f]).name &&
              (e.push(A.name.toLowerCase()),
              A.options && A.options.aliases && A.options.aliases.length))
          )
            for (n = 0; n < A.options.aliases.length; n++)
              e.push(A.options.aliases[n].toLowerCase());
          for (
            a = o(A.fn, "function") ? A.fn() : A.fn, t = 0;
            t < e.length;
            t++
          )
            1 === (r = e[t].split(".")).length
              ? (l[r[0]] = a)
              : (!l[r[0]] ||
                  l[r[0]] instanceof Boolean ||
                  (l[r[0]] = new Boolean(l[r[0]])),
                (l[r[0]][r[1]] = a)),
              i.push((a ? "" : "no-") + r.join("-"));
        }
    })(),
    a(i),
    delete r.addTest,
    delete r.addAsyncTest;
  for (var p = 0; p < l._q.length; p++) l._q[p]();
  e.Modernizr = l;
})(window, document);
