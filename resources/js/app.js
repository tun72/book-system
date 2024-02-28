// import "./darkmode";
import "./bookeditor";

import ClassicEditor from "./ckeditor";

import axios from "axios";
import jQuery from "jquery";
import { URL } from "./help";

import { initFlowbite, Accordion } from "flowbite";

initFlowbite();

window.$ = jQuery;


$("#toggle-readlist").on("click", function () {
    $("#toggle-readlist").toggleClass("hidden");
    $("#edit-toggle").toggleClass("hidden");
});



ClassicEditor
    // Note that you do not have to specify the plugin and toolbar configuration — using defaults from the build.
    .create(document.querySelector("#editortext"))
    .then((editor) => {
        console.log("Editor was initialized", editor);
    })
    .catch((error) => {
        // console.error(error.stack);
    });

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
    });
});



async function getBooks(value) {
    const books = await axios.get(`${URL}/api/book/search/${value}`);
    return books.data;
}

const spinner = `
<div role="status">
    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
    </svg>
    <span class="sr-only">Loading...</span>
</div>
`;

function clear() {
    $(".search-book-body").empty();
    // $(".search-book-body").append(spinner);
}

function intro() {
    $(".search-book-body").append(`
       <p class="items-center">Start Typing to search book</p>
    `);
}

function notfound() {
    $(".search-book-body").append(`
       <p class="items-center">Your search result not found!</p>
    `);
}

let GLOBAL_BOOKS = [];
$(".search-book")?.keyup(async function () {
    // clear();
    if (this.value === "") {
        clear();
        intro();
        GLOBAL_BOOKS = [];
        return;
    }
    const books = await getBooks(this.value);

    if (books.toString() === GLOBAL_BOOKS.toString()) {
        return;
    }

    GLOBAL_BOOKS = books;
    clear();

    console.log(books);
    if (books.length === 0) {
        notfound();
        return;
    }
    books.forEach((book, ind) => {
        if (ind < 5) {
            let new_item = $(`
            <div class="grid grid-cols-1 bg-white dark:bg-gray-900  mb-6 lg:grid-cols-[1fr,70%]   gap-4">
            <div>
                <img src="${book.image}" alt=""
                    class="object-cover w-full rounded-md h-80 lg:h-44">
            </div>
            <div class="px-4 py-4 lg:px-0">
                <a href="/book-details/${book.slug}">
                    <h2
                        class="mt-3 mb-3 text-xl font-semibold text-gray-600 hover:text-blue-600 dark:text-gray-400">${
                            ind + 1
                        }. ${book.title} </h2>
                </a>
                <p class="mb-3 text-sm text-gray-500 dark:text-gray-400">
                ${book.body}
                </p>
                <span class="text-xs font-medium text-gray-700 dark:text-gray-400">10th
                    october,2022</span>
            </div>
        </div>
            `).hide();

            $(".search-book-body").append(new_item);

            new_item.fadeIn("slow");
        }
    });

    if (books.length > 5) {
        $(".search-book-body").append(
            `<p class="text-end" ><a href="/search-books/?search=${this.value}">show more</a></p>`
        );
    }
});

