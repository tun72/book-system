import axios from "axios";
import jQuery from "jquery";
import { URL } from "./help";

import { initFlowbite, Accordion } from "flowbite";

initFlowbite();

window.$ = jQuery;
function addNewReadList({ title, id, index }) {
    $(`.readlists`).each(function () {
        let new_item = $(`<li>
        <div class="flex items-center rounded hover:bg-gray-100 dark:hover:bg-gray-600 p-1">
                            <label for="checkbox-item-{{ $readlist->id }}-{{ $index }}"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"><i
                                    class="fas fa-clone mr-2"></i>${title}}</label>
                            <input id="checkbox-item-${id}-${index}" type="checkbox"
                                value="${id}" name="readlist[]"
                                class="checkbox-item-${index} w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                 />
                        </div> </li>`);

        $(this).append(new_item);
        new_item.fadeIn("slow");
    });
}

$(".newReadList")?.each((index, form) => {
    $(form).on("submit", async function (e) {
        e.preventDefault();

        let index = $(form.children[0]).val();
        let request = await axios.post(
            `${URL}/api/readlist/new`,
            {
                title: $(`.newreadlist-${index}`).val(),
                user_id: $(`.userId-${index}`).val(),
            },
            {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }
        );
        request = { ...request.data, index };
        $(`.newreadlist-${index}`).val("");

        addNewReadList(request);
    });
});

$(".addReadList")?.each((_, form) => {
    $(form).on("submit", async function (e) {
        e.preventDefault();
        let tits = [];
        let index = $(form.children[0]).val();
        let book = $(form.children[1]).val();

        $(`.checkbox-item-${index}:checked`).each(function () {
            tits.push(+this.value);
        });

        console.log(book);

        let request = await axios.post(
            `${URL}/api/readlist/add`,
            { lists: tits, book_id: book },
            {
                headers: {
                    "Content-Type": "multipart/form-data",
                },
            }
        );
    });
});
