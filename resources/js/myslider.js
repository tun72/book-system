let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 100;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.5)
        defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next?.addEventListener("click", goNext);

function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 100;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev?.addEventListener("click", goPrev);

let defaultTransformTrend = 0;
function goNextTrend() {
    defaultTransformTrend = defaultTransformTrend - 250;
    var slider = document.getElementById("slider-trend");
    if (Math.abs(defaultTransformTrend) >= slider.scrollWidth / 1.4)
        defaultTransformTrend = 0;
    slider.style.transform = "translateX(" + defaultTransformTrend + "px)";
}
next_trend?.addEventListener("click", goNextTrend);

function goPrevTrend() {
    var slider = document.getElementById("slider-trend");
    if (Math.abs(defaultTransformTrend) === 0) defaultTransformTrend = 0;
    else defaultTransformTrend = defaultTransformTrend + 250;
    slider.style.transform = "translateX(" + defaultTransformTrend + "px)";
}
prev_trend?.addEventListener("click", goPrevTrend);

let defaultTransformNew = 0;
function goNextNew() {
    defaultTransformNew = defaultTransformNew - 250;
    var slider = document.getElementById("slider-new");
    if (Math.abs(defaultTransformNew) >= slider.scrollWidth / 2.4)
        defaultTransformNew = 0;
    slider.style.transform = "translateX(" + defaultTransformNew + "px)";
}
next_new?.addEventListener("click", goNextNew);

function goPrevNew() {
    var slider = document.getElementById("slider-new");
    if (Math.abs(defaultTransformNew) === 0) defaultTransformNew = 0;
    else defaultTransformNew = defaultTransformNew + 250;
    slider.style.transform = "translateX(" + defaultTransformNew + "px)";
}
prev_new?.addEventListener("click", goPrevNew);
