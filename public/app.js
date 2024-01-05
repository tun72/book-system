document.querySelector("body").addEventListener("click", function (e) {
    if (e.target.closest(".toggle-btn"))
        document.querySelector(".drop-down-form").classList.toggle("show_form");
    else if (
        document
            .querySelector(".drop-down-form")
            .classList.contains("show_form")
    )
        document.querySelector(".drop-down-form").classList.remove("show_form");
});

document.querySelector(".slide-btn")?.addEventListener("click", function () {
    document.querySelector(".slide-bar-1").classList.toggle("slide-bar-hide");
    document.querySelector(".slide-bar-2").classList.toggle("slide-bar-hide");

    // document
    //     .querySelectorAll(".trend-book")
    //     ?.forEach((book) => book.classList.toggle("trend-book-six"));
});

function buycoin(e, amount) {
    console.log(e.target, amount);
    document.querySelector(".checkout").textContent = `Pay ${amount} mmk`;
    document.getElementById("coin-amount").value = amount;
}

