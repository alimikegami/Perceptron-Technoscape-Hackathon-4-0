$(document).ready(function(){
	
    // slider filter harga
	$( "#slider-harga" ).slider({
        range: true,
        min: 0,
        max: 15000000,
        values: [ 0, 15000000 ],
        step: 50000,
        slide: function( event, ui ) {
          $( "#minHarga" ).html(formatRupiah(ui.values[ 0 ].toString()));
          $( "#maxHarga" ).html(formatRupiah(ui.values[ 1 ].toString()));
          $( "#amount1" ).val(ui.values[ 0 ]);
          $( "#amount2" ).val(ui.values[ 1 ]);
        }
      });

    //   ubah format mata uang
      function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
          split = number_string.split(","),
          sisa = split[0].length % 3,
          rupiah = split[0].substr(0, sisa),
          ribuan = split[0].substr(sisa).match(/\d{3}/gi);
      
        if (ribuan) {
          separator = sisa ? "." : "";
          rupiah += separator + ribuan.join(".");
        }
      
        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
      }

    //   ambil filter area
    //   $("#area").change(function() {
    //     var provinsi = $(this).children("option:selected").val();
    //     $(".scroll").append(`<div class="form-check all-penginapan">
    //                         <input class="form-check-input" type="checkbox" value="${provinsi}" id="flexCheckDefault" name="areaBadung">
    //                         <label class="form-check-label" for="flexCheckDefault">
    //                         ${provinsi}
    //                         </label>
    //                         </div>`)
    //   });

});