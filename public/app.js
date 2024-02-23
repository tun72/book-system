document.querySelector("body").addEventListener("click", function (e) {
    if (e.target.closest(".toggle-btn"))
        document.querySelector(".drop-down-form").classList.toggle("show_form");
    else if (
        document
            .querySelector(".drop-down-form")
            ?.classList.contains("show_form")
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

// function buycoin(e, amount) {
//     console.log(e.target, amount);
//     e.target.classList.toggle("active");

//     if (e.target.classList.contain("active")) {
//         document.querySelector(".payment-coin").value = amount;
//     }

//     // document.querySelector(".checkout").textContent = `Pay ${amount} mmk`;
//     // document.getElementById("coin-amount").value = amount;s
// }

const dropzone = document.getElementById("dropzone");
const fileInput = document.getElementById("fileInput");
const imagePreview = document.getElementById("imagePreview");

dropzone?.addEventListener("click", () => {
    fileInput.click();
});

dropzone?.addEventListener("dragover", (e) => {
    e.preventDefault();
    dropzone.classList.add("dragover");
});

dropzone?.addEventListener("dragleave", () => {
    dropzone.classList.remove("dragover");
});

dropzone?.addEventListener("drop", (e) => {
    e.preventDefault();
    dropzone.classList.remove("dragover");
    const file = e.dataTransfer.files[0];
    handleFile(file);
});

fileInput?.addEventListener("change", () => {
    const file = fileInput.files[0];
    handleFile(file);
});

function handleFile(file) {
    if (file) {
        const reader = new FileReader();

        reader.onload = (e) => {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove("hidden");
        };

        reader.readAsDataURL(file);
    }
}
