"use strict";
let assetsPath = document.documentElement.getAttribute("data-assets-path"),
    templateName = document.documentElement.getAttribute("data-template"),
    rtlSupport = !0;
"undefined" != typeof TemplateCustomizer &&
    (window.templateCustomizer = new TemplateCustomizer({
        cssPath: assetsPath + "vendor/css" + (rtlSupport ? "/rtl" : "") + "/",
        themesPath:
            assetsPath + "vendor/css" + (rtlSupport ? "/rtl" : "") + "/",
        displayCustomizer: !0,
        controls: ["rtl", "style"],
    }));
