import jQuery, { valHooks } from "jquery";
window.$ = jQuery;

let flag = true;
function clear(element) {
    console.log(element);
    $(element).html("");
    $(element).removeClass("justify-between");
}

$("#checkboxList input[type=checkbox]").change(function () {
    if (flag) {
        clear($("#drop-down-section button")[0]);
    }
    flag = false;

    $("#drop-down-section button")[0].insertAdjacentHTML(
        "beforeend",
        `<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">${$(
            this
        ).data("title")}</span>`
    );
});
