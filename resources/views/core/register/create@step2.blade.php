<h6>Alamat Pendaftar</h6>
<section>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Alamat Tinggal Sesuai Identitas : <span class="danger">*</span> </label>
                <textarea name="address_identity" class="form-control tt_identitas" cols="30" rows="10"></textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Provinsi : <span class="danger">*</span> </label>
                        <select data-placeholder="- Pilih Provinsi -" class="form-control select2 prov" style="width: 100%;">
                            <option value=""></option>
                            @foreach ($provinces as $province)
                                <option value="{{$province->id}}">{{$province->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kota/Kabupaten : <span class="danger">*</span> </label>
                        <select class="form-control select2 cit" style="width: 100%;">
                            <option value="">- Pilih Provinsi Dahulu -</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kecamatan : <span class="danger">*</span> </label>
                        <select class="form-control select2 kec" style="width: 100%;">
                            <option value="">- Pilih Kota/Kabupaten Dahulu -</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kelurahan/Desa : <span class="danger">*</span> </label>
                        <select class="form-control select2 vill" name="village_id" style="width: 100%;">
                            <option value="">- Pilih Kecamatan Dahulu -</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Kode Pos : <span class="danger">*</span> </label>
                <input type="number" class="form-control postal" name="postal_code">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group" style="margin-bottom: 27px;">
                <label>Alamat Tinggal Saat Ini : <span class="danger">*</span> </label>
                <div class="checkbox">
                    <input type="checkbox" id="Checkbox_2">
                    <label for="Checkbox_2">Centang jika sama dengan alamat identitas</label>
                </div>
                <textarea name="address_now" class="form-control tt_saat_ini" cols="30" rows="8"></textarea>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Provinsi : <span class="danger">*</span> </label>
                        <select class="form-control select2 prov_now provv" style="width: 100%;">
                            <option value="">- Pilih Provinsi -</option>
                            @foreach ($provinces as $province)
                                <option value="{{$province->id}}">{{$province->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kota/Kabupaten : <span class="danger">*</span> </label>
                        <select class="form-control select2 cit_now citt" style="width: 100%;">
                            <option value="">- Pilih Provinsi Dahulu -</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kecamatan : <span class="danger">*</span> </label>
                        <select class="form-control select2 kec_now kecc" style="width: 100%;">
                            <option value="">- Pilih Kabupate/Kota Dahulu -</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kelurahan/Desa : <span class="danger">*</span> </label>
                        <select class="form-control select2 vill_now villl" name="village_id_now" style="width: 100%;">
                            <option value="">- Pilih Kecamatan Dahulu -</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Kode Pos : <span class="danger">*</span> </label>
                <input type="number" class="form-control postal_now" name="postal_code_now">
            </div>
        </div>
    </div>
</section>
