import jQuery, { valHooks } from "jquery";
import axios from "axios";
import { URL } from "./help";
window.$ = jQuery;

let TIMEOUT;
function countdown(elementName, minutes, seconds) {
    var element, endTime, hours, mins, msLeft, time;
    function twoDigits(n) {
        return n <= 9 ? "0" + n : n;
    }
    async function updateTimer() {
        msLeft = endTime - +new Date();
        if (msLeft < 1000) {
            element.innerHTML = "Sending...";
            const { status } = await resentOTP();
            if (status === "success") {
                element.innerHTML = "Successfully Send";
                clearTimeout(TIMEOUT);
            } else {
                countdown("timer-countdown", 1, 0);
            }
        } else {
            time = new Date(msLeft);
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML =
                "OTP resent after " +
                (hours ? hours + ":" + twoDigits(mins) : mins) +
                ":" +
                twoDigits(time.getUTCSeconds());
            TIMEOUT = setTimeout(updateTimer, time.getUTCMilliseconds() + 500);
        }
    }
    element = document.getElementById(elementName);
    endTime = +new Date() + 1000 * (60 * minutes + seconds) + 500;
    updateTimer();
}

$("#resend").on("click", function () {
    $("#timer-countdown").removeClass("hidden");
    if (TIMEOUT) {
        clearTimeout(TIMEOUT);
    }
    countdown("timer-countdown", 1, 0);
});

async function resentOTP() {
    let request = await axios.post(
        `${URL}/api/otpcode/restart`,
        {
            email: $("#email").val(),
        },
        {
            headers: {
                "Content-Type": "multipart/form-data",
            },
        }
    );

    return await request.data;
}

// resentOTP();
