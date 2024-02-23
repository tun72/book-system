import jQuery from "jquery";
import { URL } from "./help";
window.$ = jQuery;

$("#browse-form").on("click", function (e) {
    e.preventDefault();
    let genres = $.map($("input[name='genres']:checked"), function (el) {
        return $(el).val();
    });

    let author = $.map($("input[name='author']:checked"), function (el) {
        return $(el).val();
    });
    let ggcoin = $("input[name='ggcoin").val();

    console.log(ggcoin);

    let filter_URL = `${URL}/search-books/?genres=${genres.join(
        ","
    )}&author=${author.join(",")}&ggcoin=${ggcoin}`;

    location.href = filter_URL;

});
