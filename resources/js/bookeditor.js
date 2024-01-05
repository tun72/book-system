import jQuery from "jquery";
window.$ = jQuery;
// function detectAllCheck() {
//     let isAllCheck = $(".book-checkbox").each(function () {
//         return $(this).is(":checked") ? true : false;
//     });

//     console.log(isAllCheck);

//     if (!isAllCheck) {
//         $(".all-check").check = false;
//     }
// }

$(".all-check").on("click", function () {
    let allckeck = $(this).is(":checked");

    $(".book-checkbox").each(function () {
        if (allckeck) {
            if (!$(this).is(":checked")) {
                $(this).click();
            }
        } else {
            if ($(this).is(":checked")) {
                $(this).click();
            }
        }
    });
});

$(".book-checkbox").each(function () {
    $(this).on("change", function () {
        if ($(this).is(":checked"))
            $(".delete-form").append(
                `<input type="hidden" name="book[]" value="${$(
                    this
                ).val()}" id="${$(this).val()}" />`
            );
        else
            $(".delete-form")
                .children(`#${$(this).val()}`)
                .remove();
        // detectAllCheck();
    });
});