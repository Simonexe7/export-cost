import Toastify from "toastify-js";
import "toastify-js/src/toastify.css";

function showToast(message, type = "success") {

    let color = "#16a34a";

    switch (type) {
        case "error":
            color = "#dc2626";
            break;

        case "warning":
            color = "#f59e0b";
            break;

        case "info":
            color = "#2563eb";
            break;
    }

    Toastify({
        text: message,
        duration: 3000,
        gravity: "top",
        position: "right",
        close: true,
        stopOnFocus: true,
        style: {
            background: color
        }
    }).showToast();
}

const flash = document.getElementById("flash-message");

if (flash) {

    if (flash.dataset.success) {
        showToast(flash.dataset.success, "success");
    }

    if (flash.dataset.error) {
        showToast(flash.dataset.error, "error");
    }

    if (flash.dataset.validation) {

        const errors = JSON.parse(flash.dataset.validation);

        errors.forEach(error => {
            showToast(error, "warning");
        });

    }

}