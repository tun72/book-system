import "tinymce/tinymce";
import "tinymce/skins/ui/oxide/skin.min.css";
import "tinymce/skins/content/default/content.min.css";
import "tinymce/skins/content/default/content.css";
import "tinymce/icons/default/icons";
import "tinymce/themes/silver/theme";
import "tinymce/models/dom/model";

import jQuery from "jquery";
window.$ = jQuery;

let themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
let themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

let themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});

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

tinymce.init({
    selector: "#editor",
    plugins: "advlist code emoticons link lists table",
    toolbar: "bold italic | bullist numlist | link emoticons",
    skin_url: "default",
    content_css: "default",
});
