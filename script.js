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

      $('#guest-form').on('click', function() {
          
          $('#exampleModal').modal('show');
            $('body').css('padding-right', '0px');
            $('body').css('overflow', 'auto');
        })

        $('#tujuan').on('click', function() {
            $('.dropdown-menu').addClass('show')
            $('.dropdown-menu').on('click mouseenter', function() {
                $('.dropdown-menu').addClass('show')
            })
        })


        $('#tujuan').on('focusout', function () {
            $('.dropdown-menu').removeClass('show')
        })

        $('#save').on('click', function() {
            $('#exampleModal').modal('hide');
            console.log($('#room').val());
            console.log($('#guest').val());
            $('#guest-form').attr('placeholder', $('#room').val() + ' room ' + $('#guest').val() + ' guests');
         })

   
});