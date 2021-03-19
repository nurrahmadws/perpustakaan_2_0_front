$(document).ready(function () {
    $('body').on('click', '#Checkbox_2', function(){
        if(document.getElementById('Checkbox_2').checked){
            var alamat_identitas = $('.tt_identitas').val();
            var prov_id = $('.prov').val();
            $('.tt_saat_ini').val(alamat_identitas);
            $('.prov_now').val(prov_id).trigger('change');

            var cit_id = $('.cit').val();
            var kec_id = $('.kec').val();
            var vill_id = $('.vill').val();
            var postal = $(".postal").val();
            if(prov_id != '' && cit_id != '' && kec_id != '' && vill_id != ''){
                $.ajax({
                    url: '/cities/' + prov_id,
                    beforeSend: function (request) {
                        $('.cit_now option').remove();
                        $('.cit_now').append('<option value="">Loading...</option>');
                    },
                    success: function(data){
                        let option = '<option value="{id}">{name}</option>';

                        $('.cit_now option').remove();
                        $('.cit_now').append('<option value="">- Pilih Kabupaten/Kota -</option>');
                        data.forEach(function(item){
                            $('.cit_now').append(
                                option.replace(/{id}/g, item.id).replace(/{name}/g, item.name)
                            );

                            if(cit_id == item.id){
                                $(".cit_now").val(cit_id).trigger("change");
                            }
                        });
                    }
                });

                $.ajax({
                    url: '/districts/' + cit_id,
                    beforeSend: function (request) {
                        $('.kec_now option').remove();
                        $('.kec_now').append('<option value="">Loading...</option>');
                    },
                    success: function(data){
                        let option = '<option value="{id}">{name}</option>';

                        $('.kec_now option').remove();
                        $('.kec_now').append('<option value="">- Pilih Kecamatan -</option>');
                        data.forEach(function(item1){
                            $('.kec_now').append(
                                option.replace(/{id}/g, item1.id).replace(/{name}/g, item1.name)
                            );

                            if(kec_id == item1.id){
                                $(".kec_now").val(kec_id).trigger("change");
                            }
                        });
                    }
                });

                $.ajax({
                    url: '/villages/' + kec_id,
                    beforeSend: function (request) {
                        $('.vill_now option').remove();
                        $('.vill_now').append('<option value="">Loading...</option>');
                    },
                    success: function(data){
                        let option = '<option value="{id}">{name}</option>';

                        $('.vill_now option').remove();
                        $('.vill_now').append('<option value="">- Pilih Kelurahan/Desa -</option>');
                        data.forEach(function(item2){
                            $('.vill_now').append(
                                option.replace(/{id}/g, item2.id).replace(/{name}/g, item2.name)
                            );
                            if(vill_id == item2.id){
                                $(".vill_now").val(vill_id).trigger("change");
                            }
                        });
                    }
                });
            }

            $('.postal_now').val(postal);
        }else{
            $('.tt_saat_ini').val('');
            $('.prov_now').val('').trigger('change');
            $('.cit_now').val('').trigger('change');
            $('.kec_now').val('').trigger('change');
            $('.vill_now').val('').trigger('change');
            $('.postal_now').val('');

            // console.log('prov: '+$('.prov_now').val());
            // console.log('cit: '+$('.cit_now').val());
            // console.log('kec: '+$('.kec_now').val());
            // console.log('vill: '+$('.vill_now').val());
            if($('.prov_now').val() != '' && $('.cit_now').val() != '' && $('.kec_now').val() != '' && $('.vill_now').val() != ''){
                // alert('ini kah yang jalan?');
                $('body').on('change', '.provv', function(){
                    let id = $(this).val();
                    $.ajax({
                        url: '/cities/' + id,
                        beforeSend: function (request) {
                            $('.citt option').remove();
                            $('.citt').append('<option value="">Loading...</option>');
                        },
                        success: function(data){
                            let option = '<option value="{id}">{name}</option>';

                            $('.citt option').remove();
                            $('.citt').append('<option value="">- Pilih Kabupaten/Kota -</option>');
                            data.forEach(function(item){
                                $('.citt').append(
                                    option.replace(/{id}/g, item.id).replace(/{name}/g, item.name)
                                );
                            });
                        }
                    });
                });

                $('body').on('change', '.citt', function(){
                    let id = $(this).val();
                    $.ajax({
                        url: '/districts/' + id,
                        beforeSend: function (request) {
                            $('.kecc option').remove();
                            $('.kecc').append('<option value="">Loading...</option>');
                        },
                        success: function(data){
                            let option = '<option value="{id}">{name}</option>';

                            $('.kecc option').remove();
                            $('.kecc').append('<option value="">- Pilih Kecamatan -</option>');
                            data.forEach(function(item){
                                $('.kecc').append(
                                    option.replace(/{id}/g, item.id).replace(/{name}/g, item.name)
                                );
                            });
                        }
                    });
                });

                $('body').on('change', '.kecc', function(){
                    let id = $(this).val();
                    $.ajax({
                        url: '/villages/' + id,
                        beforeSend: function (request) {
                            $('.villl option').remove();
                            $('.villl').append('<option value="">Loading...</option>');
                        },
                        success: function(data){
                            let option = '<option value="{id}">{name}</option>';

                            $('.villl option').remove();
                            $('.villl').append('<option value="">- Pilih Kelurahan/Desa -</option>');
                            data.forEach(function(item){
                                $('.villl').append(
                                    option.replace(/{id}/g, item.id).replace(/{name}/g, item.name)
                                );
                            });
                        }
                    });
                });
            }
        }
    });
});
