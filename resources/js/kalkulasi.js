const formKalkulasi = document.getElementById('formKalkulasi');

if (formKalkulasi) {

    let biayaTambahan = [];
    let totalBiaya = 0;
    let quantity = 0;
    let feeUndername = 0;

    document.getElementById('btnTambahBiaya').addEventListener('click', function () {

        const select = document.getElementById('biaya_id');
        const option = select.options[select.selectedIndex];

        const biayaId = select.value;
        const namaBiaya = option.dataset.nama;
        const jenisBiaya = option.dataset.jenis;
        const nilai = Number(option.dataset.nilai);

        if (!biayaId) {
            alert('Silakan pilih biaya.');
            return;
        }

        const biayaAda = biayaTambahan.find(
            item => item.biaya_id === biayaId
        );

        if (biayaAda) {
            biayaAda.jumlah += 1;
            biayaAda.subtotal += nilai;
        } else {
            biayaTambahan.push({
                biaya_id: biayaId,
                nama_biaya: namaBiaya,
                jenis_biaya: jenisBiaya,
                nilai: nilai,
                jumlah: 1,
                subtotal: nilai
            });
        }

        renderTabelBiaya();
        hitungTotalBiaya();
        hitungHargaJual(quantity);
    });


    function renderTabelBiaya() {

        const tbody = document.getElementById('tabelBiayaTambahan');
        const totalBiayaTambahan =
            document.getElementById('totalBiayaTambahan');

        tbody.innerHTML = '';

        if (biayaTambahan.length === 0) {

            tbody.innerHTML = `
                <tr>
                    <td colspan="6"
                        class="text-center py-4 text-gray-500">
                        Tidak ada biaya tambahan
                    </td>
                </tr>
            `;

            totalBiayaTambahan.textContent = 'Rp 0';

            return;
        }

        let total = 0;

        biayaTambahan.forEach((item, index) => {

            total += item.subtotal;

            tbody.innerHTML += `
                <tr class="border-b dark:border-gray-700">

                    <th class="px-4 py-3 font-medium">
                        ${item.nama_biaya}
                    </th>

                    <td class="px-4 py-3">
                        ${item.jenis_biaya}
                    </td>

                    <td class="px-4 py-3">
                        ${item.nilai}
                    </td>

                    <td class="px-4 py-3">
                        ${item.jumlah}
                    </td>

                    <td class="px-4 py-3">
                        ${item.subtotal}
                    </td>

                    <td class="px-4 py-3 flex justify-end">
                        <button
                            type="button"
                            onclick="hapusBiaya(${index})"
                            class="rounded-lg bg-red-500 px-3 py-2 text-xs text-white">
                            X
                        </button>
                    </td>

                </tr>
            `;
        });

        totalBiayaTambahan.textContent =
            'Rp ' + total.toLocaleString('id-ID');
    }


    window.hapusBiaya = function (index) {

        biayaTambahan.splice(index, 1);

        renderTabelBiaya();
        hitungTotalBiaya();
        hitungHargaJual(quantity);
    };


    function hitungTotalBiaya() {

        const totalInput =
            document.getElementById('total').value;

        const totalHarga =
            totalInput === ''
                ? null
                : Number(totalInput);

        const totalBiayaTambahan =
            biayaTambahan.reduce(
                (total, item) =>
                    total + Number(item.subtotal),
                0
            );

        if (totalHarga === null && totalBiayaTambahan === 0) {
            totalBiaya = 0;

        } else if (totalHarga === null) {
            totalBiaya = totalBiayaTambahan;

        } else if (totalBiayaTambahan === 0) {
            totalBiaya = totalHarga;

        } else {
            totalBiaya =
                totalHarga + totalBiayaTambahan;
        }

        document.getElementById('totalBiaya').textContent =
            'Rp ' + totalBiaya.toLocaleString('id-ID');
    }


    document
        .getElementById('btnHitungBiaya')
        .addEventListener('click', function () {

            quantity =
                Number(
                    document.getElementById('quantity').value
                ) || 0;

            const hargaBeli =
                Number(
                    document.getElementById('harga_beli').value
                ) || 0;

            const totalHarga =
                quantity * hargaBeli;

            document.getElementById('total').value =
                totalHarga;

            hitungTotalBiaya();
            hitungHargaJual(quantity);
        });


    function hitungHargaJual(quantity) {

        const margin =
            Number(
                document.getElementById('margin').value
            ) || 0;

        const keuntungan =
            totalBiaya * (margin / 100);

        const hargaJualTotal =
            totalBiaya + keuntungan;

        const nilaiFeeUndername =
            hargaJualTotal * (feeUndername / 100);

        const keuntunganBersih =
            keuntungan - nilaiFeeUndername;

        document.getElementById('targetKeuntungan').textContent =
            'Rp ' + keuntungan.toLocaleString('id-ID');

        document.getElementById('hargaJualTotal').textContent =
            'Rp ' + hargaJualTotal.toLocaleString('id-ID');

        document.getElementById('feeUndername').textContent =
            'Rp ' + nilaiFeeUndername.toLocaleString('id-ID');

        document.getElementById('keuntunganBersih').textContent =
            'Rp ' + keuntunganBersih.toLocaleString('id-ID');

        let hargaJualPerKg = 0;

        if (quantity > 0) {
            hargaJualPerKg =
                hargaJualTotal / quantity;
        }

        document.getElementById('hargaJualPerKg').textContent =
            'Rp ' + hargaJualPerKg.toLocaleString('id-ID');

        document.getElementById('total_biaya').value =
            totalBiaya;

        document.getElementById('hargaJual').value =
            hargaJualTotal;

        document.getElementById('estimasiKeuntungan').value =
            keuntunganBersih;

        document.getElementById('hargaJualPerUnit').value =
            hargaJualPerKg;
    }


    document
        .getElementById('undername')
        .addEventListener('change', function () {

            const selectedOption =
                this.options[this.selectedIndex];

            feeUndername =
                Number(selectedOption.dataset.fee) || 0;

            // Kalau undername berubah,
            // langsung hitung ulang harga jual
            hitungTotalBiaya();
            hitungHargaJual(quantity);
        });


    document
        .getElementById('btnReset')
        .addEventListener('click', function () {

            quantity = 0;
            totalBiaya = 0;
            biayaTambahan = [];
            feeUndername = 0;

            document.getElementById('quantity').value = '';
            document.getElementById('harga_beli').value = '';
            document.getElementById('total').value = '';
            document.getElementById('margin').value = '';

            renderTabelBiaya();

            document.getElementById('totalBiaya').textContent = 'Rp 0';
            document.getElementById('targetKeuntungan').textContent = 'Rp 0';
            document.getElementById('hargaJualTotal').textContent = 'Rp 0';
            document.getElementById('hargaJualPerKg').textContent = 'Rp 0';
            document.getElementById('feeUndername').textContent = 'Rp 0';
            document.getElementById('keuntunganBersih').textContent = 'Rp 0';
        });


    formKalkulasi.addEventListener('submit', function () {

        document.getElementById('detail_biaya').value =
            JSON.stringify(biayaTambahan);

    });

}