$(function(){

	$('.menu_master').each(function(index){
	    var length = 0;
	    $(this).nextUntil('.menu_konten').each(function(){
	        ++length;
	    });

	    if(length == 0) {
	        $(this).hide();
	    }
	    console.log(length);
	});


	$('.modalButtons').click(function(){
		var linkfoto = $(this).parents('tr').find('#linkfoto').val();
		//alert(linkfoto);
		$('.modal .modal-dialog  .modal-content .modal-body').html(linkfoto);
		$('.modal').modal('show')
			//.find('.modalContent')
			//.load($(this).attr('value'))
			;
	});

	$('.modalAbsensi').click(function(){		
		// $(this).parents('tr').find('#linkfoto').css('transform', 'rotate(0deg)');
		// var linkFoto = $(this).parents('tr').find('#linkfoto').val();		
		var linkfoto = $(this).parents('tr').find('#linkfoto').val();		
		// alert(linkfoto);
		$('.modalContent').html(linkfoto);		
		$('.img-responsive').css('width', '400');
		$('.img-responsive').css('height', '400');
		$('#absensi').modal('show')
			//.find('.modalContent')
			//.load($(this).attr('value'))
			;
	});

	$('.rotate-left').click(function(){
		var degree_state = $('.img-absensi').attr('rotate');		
		degree_state--;		
		degree = degree_state * 90;
		$('.img-absensi').css('transform', 'rotate('+degree+'deg)');
		$('.img-absensi').attr('rotate', degree_state);		
	});

	$('.rotate-right').click(function(){
		var degree_state = $('.img-absensi').attr('rotate');
		degree_state++;		
		degree = degree_state * 90;
		$('.img-absensi').css('transform', 'rotate('+degree+'deg)');
		$('.img-absensi').attr('rotate', degree_state);		
	});

	$("#add_item_pekerja").on('click','.btn-add-item',function(ev){
		ev.preventDefault();
		$('select').select2('destroy');
		var trElem = $(this).parents('tr').clone();
		trElem.find('.my-image-manager').removeClass('hidden');
		trElem.find('.IM-my-box').remove();
		trElem.find('input').val('');
		trElem.find('select').val('base_image');
		trElem.find('.hdn').val('new');
		$("#add_item_pekerja").append(trElem);
		$('select').select2();
	}).on('click','.btn-del-item',function(ev){
		ev.preventDefault();
		if($("#add_item_pekerja tr").length <= 1)
			return false;
		$(this).parents('tr').remove();
		var id = $(this).find(".id_pekerja_div").val();
		var deleted = $("#deleted_pekerja").val();
		var arr_deleted = [];
		arr_deleted.push(deleted);
		arr_deleted.push(id);
		$("#deleted_pekerja").val(arr_deleted);
	});

	//rapp material
	$("#add_item_bahan").on('change','.material_id', function(ev){
		ev.preventDefault();
		
	});
	$("#add_item_bahan").on('click','.btn-add-item',function(ev){
		ev.preventDefault();
		$('select').select2('destroy');
		var trElem = $(this).parents('tr').clone();
		trElem.find('.my-image-manager').removeClass('hidden');
		trElem.find('.IM-my-box').remove();
		trElem.find('input').val('');
		trElem.find('select').val('base_image');
		trElem.find('.hdn').val('new');
		var key = trElem.find('select').data('indexx');
		trElem.find('select').removeAttr("data-indexx");
		trElem.find('select').attr("data-indexx", (parseInt(key) + 1) );
		$("#add_item_bahan").append(trElem);
		$('select').select2();
	}).on('click','.btn-del-item',function(ev){
		ev.preventDefault();
		if($("#add_item_bahan tr").length <= 1)
			return false;
		$(this).parents('tr').remove();
		var id = $(this).find(".id_item_div").val();
		//alert(id);
		var deleted = $("#deleted_item").val();
		var arr_deleted = [];
		arr_deleted.push(deleted);
		arr_deleted.push(id);
		$("#deleted_item").val(arr_deleted);
	});
	//rapp biaya upah
	$("#add_item_bahan_upah").on('click','.btn-add-item',function(ev){
		ev.preventDefault();
		$('select').select2('destroy');
		var trElem = $(this).parents('tr').clone();
		trElem.find('.my-image-manager').removeClass('hidden');
		trElem.find('.IM-my-box').remove();
		trElem.find('input').val('');
		trElem.find('select').val('base_image');
		trElem.find('.hdn').val('new');
		$("#add_item_bahan_upah").append(trElem);
		$('select').select2();
	}).on('click','.btn-del-item',function(ev){
		ev.preventDefault();
		if($("#add_item_bahan_upah tr").length <= 1)
			return false;
		$(this).parents('tr').remove();
		var id = $(this).find(".id_item_div").val();
		//alert(id);
		var deleted = $("#deleted_item_upah").val();
		var arr_deleted = [];
		arr_deleted.push(deleted);
		arr_deleted.push(id);
		$("#deleted_item_upah").val(arr_deleted);
	});

	$("#add_item_peralatan").on('click','.btn-add-item',function(ev){
		ev.preventDefault();
		$('select').select2('destroy');
		var trElem = $(this).parents('tr').clone();
		trElem.find('.my-image-manager').removeClass('hidden');
		trElem.find('.IM-my-box').remove();
		trElem.find('input').val('');
		trElem.find('select').val('base_image');
		trElem.find('.hdn').val('new');
		$("#add_item_peralatan").append(trElem);
		$('select').select2();
	}).on('click','.btn-del-item',function(ev){
		ev.preventDefault();
		if($("#add_item_peralatan tr").length <= 1)
			return false;
		$(this).parents('tr').remove();
		var id = $(this).find(".id_item_div").val();
		//alert(id);
		var deleted = $("#deleted_item_peralatan").val();
		var arr_deleted = [];
		arr_deleted.push(deleted);
		arr_deleted.push(id);
		$("#deleted_item_peralatan").val(arr_deleted);
	});

	$("#add_item_perlengkapan").on('click','.btn-add-item',function(ev){
		ev.preventDefault();
		$('select').select2('destroy');
		var trElem = $(this).parents('tr').clone();
		trElem.find('.my-image-manager').removeClass('hidden');
		trElem.find('.IM-my-box').remove();
		trElem.find('input').val('');
		trElem.find('select').val('base_image');
		trElem.find('.hdn').val('new');
		$("#add_item_perlengkapan").append(trElem);
		$('select').select2();
	}).on('click','.btn-del-item',function(ev){
		ev.preventDefault();
		if($("#add_item_perlengkapan tr").length <= 1)
			return false;
		$(this).parents('tr').remove();
		var id = $(this).find(".id_item_div").val();
		//alert(id);
		var deleted = $("#deleted_item_perlengkapan").val();
		var arr_deleted = [];
		arr_deleted.push(deleted);
		arr_deleted.push(id);
		$("#deleted_item_perlengkapan").val(arr_deleted);
	});

	$("#add_item_gaji").on('click','.btn-add-item',function(ev){
		ev.preventDefault();
		$('select').select2('destroy');
		var trElem = $(this).parents('tr').clone();
		trElem.find('.my-image-manager').removeClass('hidden');
		trElem.find('.IM-my-box').remove();
		trElem.find('input').val('');
		trElem.find('select').val('base_image');
		trElem.find('.hdn').val('new');
		$("#add_item_gaji").append(trElem);
		$('select').select2();
	}).on('click','.btn-del-item',function(ev){
		ev.preventDefault();
		if($("#add_item_gaji tr").length <= 1)
			return false;
		$(this).parents('tr').remove();
		var id = $(this).find(".id_item_div").val();
		//alert(id);
		var deleted = $("#deleted_item_gaji").val();
		var arr_deleted = [];
		arr_deleted.push(deleted);
		arr_deleted.push(id);
		$("#deleted_item_gaji").val(arr_deleted);
	});

	$("#add_item_operasional").on('click','.btn-add-item',function(ev){
		ev.preventDefault();
		$('select').select2('destroy');
		var trElem = $(this).parents('tr').clone();
		trElem.find('.my-image-manager').removeClass('hidden');
		trElem.find('.IM-my-box').remove();
		trElem.find('input').val('');
		trElem.find('select').val('base_image');
		trElem.find('.hdn').val('new');
		$("#add_item_operasional").append(trElem);
		$('select').select2();
	}).on('click','.btn-del-item',function(ev){
		ev.preventDefault();
		if($("#add_item_operasional tr").length <= 1)
			return false;
		$(this).parents('tr').remove();
		var id = $(this).find(".id_item_div").val();
		//alert(id);
		var deleted = $("#deleted_item_operasional").val();
		var arr_deleted = [];
		arr_deleted.push(deleted);
		arr_deleted.push(id);
		$("#deleted_item_operasional").val(arr_deleted);
	});
	// create opname
	$('.modalButton').click(function (){

		$('#modal').modal('show')
			.find('#modalContent')
			.load($(this).attr('value'));
	});

	// create fpm
	$('#modalFpm').click(function (){

		$('#modal_fpm').modal('show')
			.find('#modalContent_fpm')
			.load($(this).attr('value'));
	});

	// upload bukti tranfer petty cash
	$('#modalVerifikasi').click(function (){

		$('#modal_bukti').modal('show')
			.find('#modalContent_bukti')
			.load($(this).attr('value'));
	});

	// upload bukti tranfer opname
	$('#modalVerifikasiOpname').click(function (){

		$('#modal_bukti_opname').modal('show')
			.find('#modalContent_bukti_opname')
			.load($(this).attr('value'));
	});

	// upload bukti tranfer kasbon
	$('#modalVerifikasiKasBon').click(function (){

		$('#modal_bukti_kas_bon').modal('show')
			.find('#modalContent_bukti_kas_bon')
			.load($(this).attr('value'));
	});

	// upload bukti petty cash tiap transaksi
	$('.modalPettyCashBukti').click(function (){

		$('#modal_bukti_petty_cash').modal('show')
			.find('#modalContent_bukti_petty_cash')
			.load($(this).attr('value'));
	});

	// upload bukti opname tiap transaksi
	$('.modalOpnameBukti').click(function (){

		$('#modal_transaksi_opname').modal('show')
			.find('#modalContent_transaksi_opname')
			.load($(this).attr('value'));
	});

	// verifikasi kas bon
	$('#modalVerifikasiPengajuanKasBon').click(function (){

		$('#modal_verifikasi_pengajuan_kas_bon').modal('show')
			.find('#modalContent_verifikasi_pengajuan_kas_bon')
			.load($(this).attr('value'));
	});
    //rfq end


	//po
	$('.jenis').on('change', function(){
       // alert($(this).val());
       var value= $(this).val();
       $.ajax({
            url : "../berita-acara-item/show?id="+value,
            dataType : "html",
            type : "post"
        }).done(function(data){
           $("#kredit").html(data);
        });

       // if (value==1) {
       // 	$("#kredit").html(
       // 		'<label class=control-label>Kredit</label><input type="text" id="beritaacaraitem-kredit" class="form-control" name="Kredit">');
       // }else{
       // 	$('#kredit').html('');
       // }
    });
    //end PO

    //item
    $('.umum').on('change',function(){
    	// alert($(this).val());
        $.ajax({
            url : "../m-item/lists?id="+$(this).val(),
            dataType : "html",
            type : "post"
        }).done(function(data){
           $("select#mitem-id_kategori_khusus").html(data);
        });
    });
    //end item


    //pengeluaran_item
    $('.gudang-asal').on('change',function(ev){
        $.ajax({
            url : "../pengeluaran-item/item?id="+$(this).val(),
            dataType : 'html',
            type : "post",
            success:function(data) {

      			$(".panel-barang").css("display","block");
      			$("#pengeluaran-item").html(data);
      			$("pre").css("display","none");
            	// dependDropdownTujuan();
           		// $("#pengeluaran-item").html(data.data);

    		},
    		error: function(XMLHttpRequest, textStatus, errorThrown) {
                // alert("Status: " + textStatus); alert("Error: " + errorThrown);
           		$("#pengeluaran-item").html('');

            }
        });

        $.ajax({
            url : "../ajax/depen-gudang-tujuan?id="+$(this).val(),
            dataType : 'html',
            type : "post",
            success:function(data) {
            	$('#gudang-tujuan').html(data);

    		},
    		error: function(XMLHttpRequest, textStatus, errorThrown) {
                // alert("Status: " + textStatus); alert("Error: " + errorThrown);
           		// $("#pengeluaran-item").html('');
           		console.log(textStatus);
            }
        })
    });

    // function dependDropdownTujuan(){

    // }

    //end

	//kasbon
	$(".kas-bon-form table tbody").on('click','.js-input-remove',function(ev){
		ev.preventDefault();
		var trElem = $(this).parents('tr');
		var ID_KAS_BON = trElem.find('input[type=hidden]').val();
		var deleted = $("#deleted_kas_bon").val();
		var arr_deleted = [];
		arr_deleted.push(deleted);
		arr_deleted.push(ID_KAS_BON);
		$("#deleted_kas_bon").val(arr_deleted);
		console.log(arr_deleted);
	});
	//sas



	//list pmbayaran
	//$("input:checkbox.myClass")



	// bukti datang PO dan Gudang
	$("#ret-gudang").on('change',function(ev){
		ev.preventDefault();
		var limit = $(this).val();
		$("#clone-bukti-datang-gudang div").remove();
		for (var i = 1 ; i <= limit-1; i++) {
			$("#clone-bukti-datang-gudang").append("<div class=\"col-md-3  input\"><div class=\"form-group\"><label class=\"control-label\">Bukti Nota</label><input type=\"file\" name=\"GambarBuktiItemDatang[fileNota]["+i+"][]\" multiple=\"\"></div></div>");
			$("#clone-bukti-datang-gudang").append("<div class=\"col-md-3  input\"><div class=\"form-group\"><label class=\"control-label\">Bukti STNK</label><input type=\"file\" name=\"GambarBuktiItemDatang[fileStnk]["+i+"][]\" multiple=\"\"></div></div>");
			$("#clone-bukti-datang-gudang").append("<div class=\"col-md-3  input\"><div class=\"form-group\"><label class=\"control-label\">Bukti Memo</label><input type=\"file\" name=\"GambarBuktiItemDatang[fileMemo]["+i+"][]\" multiple=\"\"></div></div>");
			$("#clone-bukti-datang-gudang").append("<div class=\"col-md-3  input\"><div class=\"form-group\"><label class=\"control-label\">Bukti Surat Jalan</label><input type=\"file\" name=\"GambarBuktiItemDatang[fileSuratJalan]["+i+"][]\" multiple=\"\"></div></div>");
			// $("#clone-bukti-datang-gudang").append("<div class=\"col-md-2  input\"><div class=\"form-group\"><label class=\"control-label\">Bukti Memo</label><input type=\"text\" name=\"GambarBuktiItemDatang[ID_PLAT]["+i+"]\" multiple=\"\"></div></div>");
		}
	});

	$("#ret-po").on('change',function(ev){
		ev.preventDefault();
		var limit = $(this).val();
		$("#clone-bukti-datang-po div").remove();
		for (var i = 1 ; i <= limit-1; i++) {
			$("#clone-bukti-datang-po").append("<div class=\"col-md-2 input\" style='margin-left: 2%'><div class=\"form-group\"><label class=\"control-label\">Bukti Nota</label><input type=\"file\" name=\"GambarBuktiItemDatang[fileNota]["+i+"][]\" multiple=\"\"></div></div>");
			$("#clone-bukti-datang-po").append("<div class=\"col-md-2 input\" style='margin-left: 2%'><div class=\"form-group\"><label class=\"control-label\">Bukti STNK</label><input type=\"file\" name=\"GambarBuktiItemDatang[fileStnk]["+i+"][]\" multiple=\"\"></div></div>");
			$("#clone-bukti-datang-po").append("<div class=\"col-md-2 input\" style='margin-left: 2%'><div class=\"form-group\"><label class=\"control-label\">Bukti Memo</label><input type=\"file\" name=\"GambarBuktiItemDatang[fileMemo]["+i+"][]\" multiple=\"\"></div></div>");
			$("#clone-bukti-datang-po").append("<div class=\"col-md-2 input\" style='margin-left: 2%'><div class=\"form-group\"><label class=\"control-label\">Bukti Surat Jalan</label><input type=\"file\" name=\"GambarBuktiItemDatang[fileSuratJalan]["+i+"][]\" multiple=\"\"></div></div>");
			$("#clone-bukti-datang-po").append("<div class=\"col-md-2  input\" style='margin-left: 2%'><div class=\"form-group\"><label class=\"control-label\">Plat Nomer</label><input type=\"text\" name=\"GambarBuktiItemDatang[ID_PLAT]["+i+"]\" multiple=\"\"></div></div>");
		}
	});

});

//create fpm
// $('.user').on('change', function(){
$('#pekerjaan_opt').on('change', function(){
//    alert('coba '+$(this).val());
	if($(this).val() == "Pilih Pekerjaan.."){
		//do nothing
	}else{
		$.ajax({
			url : "../fpm/info-opname",
			data : {
				// id_user : $(this).val(),
				id_user : $('#mandor').val(),
				id_pekerjaan : $(this).val(),
				id_proyek : $('#id_proyek').val(),
			},
			dataType : "html",
			type : "post"
		}).done(function(data){
			$('.info-opname').html(data);
		});
	}
});




    //rfq end

//tab
$(function(){
	var hash = window.location.hash;
		hash && $('ul.nav a[href="' + hash + '"]').tab('show');

});

//lb

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});



$(function(){
	$('.editable').dblclick(function () {
		// alert('test');
		var OriginalContent = $(this).find('.debit_value').val();
		var is_editable = $(this).find('.is_editable').val();
		var debitEdited = $('#debit-ajukan').val();
		var arrDebitEdited = [];
		arrDebitEdited.push(debitEdited);
		if(is_editable === "false") {
			return false;
		}
		var debit = OriginalContent;
		var pattern = "\\d*";
		var cur_Element = $(this).html();
		//alert(parseFloat(debit).toFixed(2));
		$(this).addClass("cellEditing");

		$(this).html(cur_Element + "<input type='text' value='" + OriginalContent + "' class='form-control editan' pattern='"+pattern+"'/>");
		$(this).find('input[type=text]').focus();
		$(this).find('.span_value_debit').css("display","none");

		$(this).find('input[type=text]').keypress(function (e)
		{
			if (e.which == 13) {
 			     var newContent = $(this).val();
 			     debit = newContent;
 			     // console.log(debit);

 			     var newValCOnverted = parseInt(debit).toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	 			 $(this).parent().find('.span_value_debit').text("Rp. " + newValCOnverted);
	 			 $(this).parent().find('.span_value_debit').css("display","block");
	 			 $(this).parent().find('input[type=text]').css("display","block");
	 			 $(this).parent().find('.debit_value').val(debit);
	 			 
	 			 var iD = $(this).parent().find('.debit_value').data('id');
	 			 var str = debit + '|' + iD;
	 			 var strCheck = '|'+iD;
	 			 if(arrDebitEdited[0].indexOf(strCheck) != -1){
	 			 	arrDebitEdited[0] = arrDebitEdited[0].replace(OriginalContent+'|'+iD, str);
	 			 	$('#debit-ajukan').val(arrDebitEdited);
	 			 	console.log($('#debit-ajukan').val());
	 			 }else{
	 			 	arrDebitEdited.push(str);
	 			 	$('#debit-ajukan').val(arrDebitEdited);
	 			 	console.log($('#debit-ajukan').val());
	 			 }
	 			 $(this).remove();
	 			 $(this).parent().removeClass("cellEditing");

		 	} 
		 }); 
		$(this).find('input[type=text]').blur(function(){
			var newValCOnverted = parseInt(debit).toFixed(0).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
			 $(this).parent().find('.span_value_debit').text("Rp. "+newValCOnverted);
 			 $(this).parent().find('.span_value_debit').css("display","block");
 			 $(this).remove();
 			 $(this).parent().find('.debit_value').val(debit);
 			 $(this).parent().removeClass("cellEditing");
		});
	});

});

//petty cash laporan type
    $('.tipe').on('change',function(){
    	// alert($(this).val());
        $.ajax({
            url : "../petty-cash/lists?id="+$(this).val(),
            dataType : "html",
            type : "post"
        }).done(function(data){
           $("select#tempat").html(data);
        });
    });
//petty cash
