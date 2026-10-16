import { DataTable } from "simple-datatables";
// import 'flowbite';
import "simple-datatables/dist/style.css";  
// import { DataTable } from "simple-datatables";

document.addEventListener("DOMContentLoaded", () => {

    const tables = document.querySelectorAll(".datatable");

    tables.forEach(table => {

        if (table.dataset.initialized) return;

        new DataTable(table, {

            searchable: true,

            paging: true,

            sortable: true,

            perPage: 10,

            perPageSelect: [5, 10, 20, 50],

            firstLast: true,

            nextPrev: true,

            labels: {
                placeholder: "Cari...",
                perPage: " data per halaman",
                // noRows: "Data tidak ditemukan",
                info: "Menampilkan {start} - {end} dari {rows} data"
            }

        });

        table.dataset.initialized = true;
    });

});