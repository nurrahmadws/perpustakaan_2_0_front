$(document).ready(function () {
    $('body').on('change', '.prov', function(){
        let id = $(this).val();
        $.ajax({
            url: '/cities/' + id,
            beforeSend: function (request) {
                $('.cit option').remove();
                $('.cit').append('<option value="">Loading...</option>');
            },
            success: function(data){
                let option = '<option value="{id}">{name}</option>';

                $('.cit option').remove();
                $('.cit').append('<option value="">- Pilih Kabupaten/Kota -</option>');
                data.forEach(function(item){
                    $('.cit').append(
                        option.replace(/{id}/g, item.id).replace(/{name}/g, item.name)
                    );
                });
            }
        });
    });

    $('body').on('change', '.cit', function(){
        let id = $(this).val();
        $.ajax({
            url: '/districts/' + id,
            beforeSend: function (request) {
                $('.kec option').remove();
                $('.kec').append('<option value="">Loading...</option>');
            },
            success: function(data){
                let option = '<option value="{id}">{name}</option>';

                $('.kec option').remove();
                $('.kec').append('<option value="">- Pilih Kecamatan -</option>');
                data.forEach(function(item){
                    $('.kec').append(
                        option.replace(/{id}/g, item.id).replace(/{name}/g, item.name)
                    );
                });
            }
        });
    });

    $('body').on('change', '.kec', function(){
        let id = $(this).val();
        $.ajax({
            url: '/villages/' + id,
            beforeSend: function (request) {
                $('.vill option').remove();
                $('.vill').append('<option value="">Loading...</option>');
            },
            success: function(data){
                let option = '<option value="{id}">{name}</option>';

                $('.vill option').remove();
                $('.vill').append('<option value="">- Pilih Kelurahan/Desa -</option>');
                data.forEach(function(item){
                    $('.vill').append(
                        option.replace(/{id}/g, item.id).replace(/{name}/g, item.name)
                    );
                });
            }
        });
    });

    if(document.getElementById('Checkbox_2').checked == false){
        $('body').on('change', '.provv', function(){
            let id = $(this).val();
            if(id != ''){
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
            }
        });

        $('body').on('change', '.citt', function(){
            let id = $(this).val();
            let kec_id = $('.kec').val();
            if(id != ''){
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
                            if(kec_id == item.id){
                                $(".kecc").val(kec_id).trigger("change");
                            }
                        });
                    }
                });
            }
        });

        $('body').on('change', '.kecc', function(){
            let id = $(this).val();
            let vill_id = $('.vill').val();
            if(id != ''){
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
                            if(vill_id == item.id){
                                $(".villl").val(vill_id).trigger("change");
                            }
                        });
                    }
                });
            }
        });
    }
});
