var app = app || {};
! function(e) {
    "use strict";
    var t, n, o;
    t = function(t) {
        var n = new XMLHttpRequest;
        n.addEventListener("readystatechange", function() { 4 === this.readyState && (200 === this.status ? e.options.finished(this.response) : e.options.error()) }), n.upload.addEventListener("progress", function(e) { var t;!0 === e.lengthComputable && (t = Math.round(event.loaded / event.total * 100), o(t)) }), n.open("post", e.options.processor), n.send(t)
    }, n = function(e) { var t, n = new FormData; for (t = 0; t < e.length; t += 1) n.append("files[]", e[t]); return n.append("_token", $('meta[name="csrf-token"]').attr("content")), n }, o = function(t) { void 0 !== e.options.progressBar && (e.options.progressBar.style.width = t ? t + "%" : "0"), void 0 !== e.options.progressText && (e.options.progressText.textContent = t ? t + "%" : "0") }, e.uploader = function(o) { e.options = o, void 0 !== e.options.files && t(n(e.options.files)) }
}(app), $(function() {
    "use strict";
    var e = document.getElementById("drop-zone"),
        t = (document.getElementById("bar"), document.getElementById("bar-fill")),
        n = document.getElementById("bar-fill-text"),
        o = function(e) {
            if (e.length) {
                $("#bar").removeClass("hidden"), $("#bar-fill").css("width", "0");
                var o = $("#type-upload-files").val();
                app.uploader({
                    files: e,
                    progress: $("#bar"),
                    progressBar: t,
                    progressText: n,
                    processor: admin_ajax_url + "?action=async_upload&retype=" + o,
                    finished: function(e) {
                        var modal = $('#uploadMediaModal .close', window.parent.document);
                        modal.click();
                        window.parent.location.reload();
                        var t = $.parseJSON(e);
                        "thickbox" == o ? (console.log(t.success), console.log(t.html), $(".media-attachments-thickbox").prepend(t.html), $(".creative-media-upload-sidemenu a").removeClass("current"), $(".creative-media-upload-sidemenu a.library").addClass("current"), $(".content-tab").addClass("hidden"), $(".content-library").removeClass("hidden")) : $("#media-items .media-attachments").append(t.html), $("#bar").addClass("hidden")
                    },
                    error: function() {}
                })
            }
        };
    e.ondrop = function(e) { e.preventDefault(), this.className = "upload-console-drop", o(e.dataTransfer.files) }, e.ondragover = function() { return this.className = "upload-console-drop drop", !1 }, e.ondragleave = function() { return this.className = "upload-console-drop", !1 }, $("#plupload-browse-button").on("click", function(e) { $("#standard-upload-files").click() }), $("#html-upload").on("click", function(e) { return o(""), !1 }), $("#standard-upload-files").on("change", function(e) {
        var t = document.getElementById("standard-upload-files").files;
        e.preventDefault(), o(t)
    })
});