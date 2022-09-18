$(function () {
    $(".delete").on("click", function () {
        $(".pop").addClass("show");
    });
    $(".closepop").on("click", function () {
        $(".pop").removeClass("show");
    });

    $(".delete_comp").on("click", function () {
        var id = $(this).data("id");
        $.ajax({
            url: "review_delete",
            type: "GET",
            datatype: "json",
            data: { id: id },
        })
            .done(function (response) {
                alert("削除完了");
                window.location.href = "review_top";
            })
            .fail(function () {
                alert("削除失敗");
            });
    });
});
