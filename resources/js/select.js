import jQuery, { valHooks } from "jquery";
window.$ = jQuery;

function clear(element) {
    console.log(element);
    $(element).html("");
    $(element).removeClass("justify-between");
}

console.log();

let arr = $("#genArr").val().split(",");
let flag = arr.length <= 1;
console.log(arr.length);

$("#checkboxList input[type=checkbox]").change(function () {
    if (flag) {
        clear($("#drop-down-section button")[0]);
    }
    flag = false;

    let title = $(this).data("title");

    if (arr.includes(title)) {
        arr = arr.filter((item) => item !== title);
        console.log(arr);
        $(`.${title}`).fadeOut();
        if (arr.length === 0) {
            $("#drop-down-section button")[0].innerHTML = `Choose Genres`;
            flag = true;
        }

        return console.log("yes");
    }
    arr.push($(this).data("title"));

    $("#drop-down-section button")[0].insertAdjacentHTML(
        "beforeend",
        `<span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 ${title}">${title}</span>`
    );
});
