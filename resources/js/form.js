import jQuery from "jquery";
window.$ = jQuery;

// $("#edit").on("click", function () {
//     $(".comment").toggleClass("hidden");

//     $(".editForm").toggleClass("hidden");
// });

$("#user-comment").on("click", function (e) {
    if (e.target.closest(".edit-comment")) {
        let index = e.target.closest(".edit-comment").dataset.id;
        console.log($(".comment")[index]);
        $($(".comment")[index]).toggleClass("hidden");
        $($(".editForm")[index]).toggleClass("hidden");
    } else if (e.target.closest(".close-comment")) {
        let index = e.target.closest(".close-comment").dataset.id;
        $($(".comment")[index]).toggleClass("hidden");
        $($(".editForm")[index]).toggleClass("hidden");
    }
});
