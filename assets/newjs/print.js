$(document).ready(function() {
    $(document).find("#btn-print").on("click", function() {
        $("#btn-print>span").text("Loading....");
        html2canvas($("#print-area"), {
            onrendered: function(canvas) {
                canvas.toBlob(function(blob) {
                    saveAs(blob, "Dashboard.png");
                });
                setTimeout(
                    function() {
                        $("#btn-print>span").text("Print This Page");
                    }, 2000
                );
                alert("Download dashboard berhasil");
            }
        });
    });



    $(document).find("#btn-prints1").on("click", function() {
        $("#btn-prints1>span").text("Loading....");
        html2canvas($("#print-area"), {
            onrendered: function(canvas) {
                canvas.toBlob(function(blob) {
                    saveAs(blob, "Dashboard.png");
                });
                setTimeout(
                    function() {
                        $("#btn-prints1>span").text("Print This Page");
                    }, 2000
                );
                alert("Download dashboard berhasil");
            }
        });
    });
});