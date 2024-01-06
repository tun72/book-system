import "./darkmode";
import "./bookeditor";

import ClassicEditor from "./ckeditor";

import jQuery from "jquery";
window.$ = jQuery;

// ClassicEditor
//     // Note that you do not have to specify the plugin and toolbar configuration — using defaults from the build.
//     .create(document.querySelector("#editortext"))
//     .then((editor) => {
//         console.log("Editor was initialized", editor);
//     })
//     .catch((error) => {
//         console.error(error.stack);
//     });

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
        if ($(this).is(":checked")) {
            $(".delete-form").append(
                `<input type="hidden" name="book[]" value="${$(
                    this
                ).val()}" id="${$(this).val()}" />`
            );
            console.log($(".delete-form"));
        } else {
            $(".delete-form")
                .children(`#${$(this).val()}`)
                .remove();
        }

        // detectAllCheck();
    });
});
