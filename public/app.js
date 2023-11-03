

document.querySelector("body").addEventListener("click", function (e) {
    if (e.target.closest(".toggle-btn"))
        document.querySelector(".drop-down-form").classList.toggle("show");
    else if (
        document.querySelector(".drop-down-form").classList.contains("show")
    )
        document.querySelector(".drop-down-form").classList.remove("show");
});
