(function () {
    var docElement = document.documentElement;
    var classRE = new RegExp("(^|\\s)no-js(\\s|$)");
    var className = docElement.className;
    docElement.className = className.replace(classRE, "$1js$2");
  })();

  (function () {
    if (
      "PerformanceObserver" in window &&
      "PerformancePaintTiming" in window
    ) {
      window.__bufferedPerformance = [];
      var ob = new PerformanceObserver(function (e) {
        window.__bufferedPerformance.push.apply(
          window.__bufferedPerformance,
          e.getEntries()
        );
      });
      ob.observe({ entryTypes: ["paint"] });
    }

    window.__bufferedErrors = [];
    window.onerror = function (message, url, line, column, error) {
      window.__bufferedErrors.push({
        message: message,
        url: url,
        line: line,
        column: column,
        error: error,
      });
      return false;
    };
    window.__initialData = {
      pending: true,
      waiting: [],
    };
    function asyncFetchSharedData(extra) {
      var sharedDataReq = new XMLHttpRequest();
      sharedDataReq.onreadystatechange = function () {
        if (sharedDataReq.readyState === 4) {
          if (sharedDataReq.status === 200) {
            var sharedData = JSON.parse(sharedDataReq.responseText);
            window.__initialDataLoaded(sharedData, extra);
          }
        }
      };
      sharedDataReq.open("GET", "/data/shared_data/", true);
      sharedDataReq.send(null);
    }
    function notifyLoaded(item, data) {
      item.pending = false;
      item.data = data;
      for (var i = 0; i < item.waiting.length; ++i) {
        item.waiting[i].resolve(item.data);
      }
      item.waiting = [];
    }
    function notifyError(item, msg) {
      item.pending = false;
      item.error = new Error(msg);
      for (var i = 0; i < item.waiting.length; ++i) {
        item.waiting[i].reject(item.error);
      }
      item.waiting = [];
    }
    window.__initialDataLoaded = function (initialData, extraData) {
      if (extraData) {
        for (var key in extraData) {
          initialData[key] = extraData[key];
        }
      }
      notifyLoaded(window.__initialData, initialData);
    };
    window.__initialDataError = function (msg) {
      notifyError(window.__initialData, msg);
    };
    window.__additionalData = {};
    window.__pendingAdditionalData = function (paths) {
      for (var i = 0; i < paths.length; ++i) {
        window.__additionalData[paths[i]] = {
          pending: true,
          waiting: [],
        };
      }
    };
    window.__additionalDataLoaded = function (path, data) {
      if (path in window.__additionalData) {
        notifyLoaded(window.__additionalData[path], data);
      } else {
        console.error('Unexpected additional data loaded "' + path + '"');
      }
    };
    window.__additionalDataError = function (path, msg) {
      if (path in window.__additionalData) {
        notifyError(window.__additionalData[path], msg);
      } else {
        console.error(
          'Unexpected additional data encountered an error "' +
            path +
            '": ' +
            msg
        );
      }
    };
  })();

  const inputName=document.querySelector(".inputName"),inputTel=document.querySelector(".inputTel")
    
  inputName.addEventListener('keydown', (event) => {
    if (event.target.value.length > 0) {
      
      event.target.previousSibling.style.transform = "scale(.83333) translateY(-10px)";
      document.querySelector(".inputName").style.padding  = "14px 0 1px 8px";
  
    }
    else if (event.target.value.length == 0 && event.keyCode == 8) {
      
      event.target.previousSibling.style.transform = "";
      document.querySelector(".inputName").style.padding  = "9px 0 7px 8px;";
  
      
  
    }
  
    else {
      event.target.previousSibling.style.transform = "scale(.83333) translateY(-10px)";
      document.querySelector(".inputName").style.padding  = "14px 0 1px 8px";
  
    }
  });
  
  
  inputTel.addEventListener('keydown', (event) => {
    console.log(event.keyCode , event.target.value.length)
    if (event.target.value.length > 0) {
      
      event.target.previousSibling.style.transform = "scale(.83333) translateY(-10px)";
      document.querySelector(".sqdOP").disabled = false;
      document.querySelector(".inputName").style.padding  = "14px 0 1px 8px";
  
    }
    else if (event.target.value.length == 0 && event.keyCode == 8) {
      
      event.target.previousSibling.style.transform = "";
      document.querySelector(".sqdOP").disabled = true;
      document.querySelector(".inputName").style.padding  = "9px 0 7px 8px;";
  
    }
  
    else {
      event.target.previousSibling.style.transform = "scale(.83333) translateY(-10px)";
      document.querySelector(".sqdOP").disabled = false;
      document.querySelector(".inputName").style.padding  = "14px 0 1px 8px";
  
    }
  });


  (function () {
    function g(a, c) {
      b ||
        ((b = a),
        (f = c),
        h.forEach(function (a) {
          removeEventListener(a, l, e);
        }),
        m());
    }
    function m() {
      b &&
        f &&
        0 < d.length &&
        (d.forEach(function (a) {
          a(b, f);
        }),
        (d = []));
    }
    function n(a, c) {
      function k() {
        g(a, c);
        d();
      }
      function b() {
        d();
      }
      function d() {
        removeEventListener("pointerup", k, e);
        removeEventListener("pointercancel", b, e);
      }
      addEventListener("pointerup", k, e);
      addEventListener("pointercancel", b, e);
    }
    function l(a) {
      if (a.cancelable) {
        var c = performance.now(),
          b = a.timeStamp;
        b > c && (c = +new Date());
        c -= b;
        "pointerdown" == a.type ? n(c, a) : g(c, a);
      }
    }
    var e = { passive: !0, capture: !0 },
      h = ["click", "mousedown", "keydown", "touchstart", "pointerdown"],
      b,
      f,
      d = [];
    h.forEach(function (a) {
      addEventListener(a, l, e);
    });
    window.perfMetrics = window.perfMetrics || {};
    window.perfMetrics.onFirstInputDelay = function (a) {
      d.push(a);
      m();
    };
  })();


(function () {
    function normalizeError(err) {
      var errorInfo = err.error || {};
      var getConfigProp = function (propName, defaultValueIfNotTruthy) {
        var propValue = window._sharedData && window._sharedData[propName];
        return propValue ? propValue : defaultValueIfNotTruthy;
      };
      var windowUrl = window.location.href;
      var errUrl = err.url || windowUrl;
      return {
        line: err.line || errorInfo.message || 0,
        column: err.column || 0,
        name: "InitError",
        message: err.message || errorInfo.message || "",
        script: errorInfo.script || "",
        stack: errorInfo.stackTrace || errorInfo.stack || "",
        timestamp: Date.now(),
        ref: windowUrl.indexOf("direct") >= 0 ? "direct" : windowUrl,
        deployment_stage: getConfigProp("deployment_stage", ""),
        frontend_env: getConfigProp("frontend_env", "prod"),
        rollout_hash: getConfigProp("rollout_hash", ""),
        is_prerelease: window.__PRERELEASE__ || false,
        bundle_variant: getConfigProp("bundle_variant", null),
        request_url: errUrl.indexOf("direct") >= 0 ? "direct" : errUrl,
        response_status_code: errorInfo.statusCode || 0,
      };
    }
    window.addEventListener("load", function () {
      if (window.__bufferedErrors && window.__bufferedErrors.length) {
        if (window.caches && window.caches.keys && window.caches.delete) {
          window.caches.keys().then(function (keys) {
            keys.forEach(function (key) {
              window.caches.delete(key);
            });
          });
        }
        window.__bufferedErrors
          .map(function (error) {
            return normalizeError(error);
          })
          .forEach(function (normalizedError) {
            var request = new XMLHttpRequest();
            request.open("POST", "/client_error/", true);
            request.setRequestHeader(
              "Content-Type",
              "application/json; charset=utf-8"
            );
            request.send(JSON.stringify(normalizedError));
          });
      }
    });
  })();

const img = ["./image/d6bf0c928b5a.jpg", "./image/6f03eb85463c.jpg", "./image/f0c687aa6ec2.jpg", "./image/842fe5699220.jpg", "./image/0a2d3016f375.jpg"]
let count = 0

setInterval(() => {
  document.querySelector('.crs').src=img[count];
  count++

  if (count > 4) { count = 0}
}, 1500);