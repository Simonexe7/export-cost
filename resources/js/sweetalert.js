import Swal from "sweetalert2";

document.addEventListener("DOMContentLoaded", () => {

    const forms = document.querySelectorAll(".delete-form");

    forms.forEach(form => {

        form.addEventListener("submit", function (e) {

            e.preventDefault();

            Swal.fire({
                title: "Yakin ingin menghapus?",
                text: "Data yang dihapus tidak dapat dikembalikan.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc2626",
                cancelButtonColor: "#6b7280",
                confirmButtonText: "Ya, hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {

                if (result.isConfirmed) {
                    form.submit();
                }

            });

        });

    });

});