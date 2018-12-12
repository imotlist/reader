$(function(){

	var base = $("#base").val();
	$.ajaxSetup({
		type:"POST",
		url: base+"/penjualan/ambil_data",
		cache: false,
	});
		// Element 0
		$("#barang_id0").change(function(){
			var value=$(this).val();
			if(value>0){
				$.ajax({
				data:{mod:"harga",id:value},
					success: function(respond){
							$("#harga0").val(respond);								
							$("#qty0").attr("type","text");
					}
				});
				$.ajax({
				data:{mod:"stok",id:value},
					success: function(respond){
							$("#stok0").val(respond);
					}
				})
			}
		});

		$("#qty0").keyup(function(){
			var stok = $("#stok0").val();
			var qty  = $(this).val();
				var jml = $("#harga0").val() * $("#qty0").val();
				$("#sub0").val(jml);
				
				
				var total = 0;
				for (var i = 0; i < 5; i++) {
					if($("#sub"+i).val())
					total = total + parseInt($("#sub"+i).val());
				}			
				$("#total").val(total);

				$.ajax({
					data:{mod:"sub",id:jml},
						success: function(respond){
								$("#jml0").html(respond);
						}
				});
				$.ajax({
					data:{mod:"sub",id:total},
						success: function(res){
								$("#showTotal").html(res);
						}
				});

		});

		// End Element 0

		// Element 1
		$("#barang_id1").change(function(){
			var value=$(this).val();
			if(value>0){
				$.ajax({
				data:{mod:"harga",id:value},
					success: function(respond){
							$("#harga1").val(respond);								
							$("#qty1").attr("type","text");
					}
				});
				$.ajax({
				data:{mod:"stok",id:value},
					success: function(respond){
							$("#stok1").val(respond);
					}
				})
			}
		});

		$("#qty1").keyup(function(){
			var stok = $("#stok1").val();
			var qty  = $(this).val();
			
			var jml = $("#harga1").val() * $("#qty1").val();
			$("#sub1").val(jml);

			var total = 0;
			for (var i = 0; i < 5; i++) {
				if($("#sub"+i).val())
				total = total + parseInt($("#sub"+i).val());
			}			
			$("#total").val(total);

			$.ajax({
				data:{mod:"sub",id:jml},
					success: function(respond){
							$("#jml1").html(respond);
					}
			});
			$.ajax({
				data:{mod:"sub",id:total},
					success: function(res){
							$("#showTotal").html(res);
					}
			});
		});

		// End Element 1
		// Element 2
		$("#barang_id2").change(function(){
			var value=$(this).val();
			if(value>0){
				$.ajax({
				data:{mod:"harga",id:value},
					success: function(respond){
							$("#harga2").val(respond);								
							$("#qty2").attr("type","text");
					}
				});
				$.ajax({
				data:{mod:"stok",id:value},
					success: function(respond){
							$("#stok2").val(respond);
					}
				})
			}
		});

		$("#qty2").keyup(function(){
			var stok = $("#stok2").val();
			var qty  = $(this).val();
			
			var jml = $("#harga2").val() * $("#qty2").val();
			$("#sub2").val(jml);

			var total = 0;
			for (var i = 0; i < 5; i++) {
				if($("#sub"+i).val())
				total = total + parseInt($("#sub"+i).val());
			}			
			$("#total").val(total);

			$.ajax({
				data:{mod:"sub",id:jml},
					success: function(respond){
							$("#jml2").html(respond);
					}
			});
			$.ajax({
				data:{mod:"sub",id:total},
					success: function(res){
							$("#showTota2").html(res);
					}
			});
		});

		// End Element 2

		// Element 3
		$("#barang_id3").change(function(){
			var value=$(this).val();
			if(value>0){
				$.ajax({
				data:{mod:"harga",id:value},
					success: function(respond){
							$("#harga3").val(respond);								
							$("#qty3").attr("type","text");
					}
				});
				$.ajax({
				data:{mod:"stok",id:value},
					success: function(respond){
							$("#stok3").val(respond);
					}
				})
			}
		});

		$("#qty3").keyup(function(){
			var stok = $("#stok3").val();
			var qty  = $(this).val();
			
			var jml = $("#harga3").val() * $("#qty3").val();
			$("#sub3").val(jml);

			var total = 0;
			for (var i = 0; i < 5; i++) {
				if($("#sub"+i).val())
				total = total + parseInt($("#sub"+i).val());
			}			
			$("#total").val(total);

			$.ajax({
				data:{mod:"sub",id:jml},
					success: function(respond){
							$("#jml3").html(respond);
					}
			});
			$.ajax({
				data:{mod:"sub",id:total},
					success: function(res){
							$("#showTotal").html(res);
					}
			});
		});

		// End Element 3

		// Element 4
		$("#barang_id4").change(function(){
			var value=$(this).val();
			if(value>0){
				$.ajax({
				data:{mod:"harga",id:value},
					success: function(respond){
							$("#harga4").val(respond);								
							$("#qty4").attr("type","text");
					}
				});
				$.ajax({
				data:{mod:"stok",id:value},
					success: function(respond){
							$("#stok4").val(respond);
					}
				})
			}
		});

		$("#qty4").keyup(function(){
			var stok = $("#stok4").val();
			var qty  = $(this).val();
			
			var jml = $("#harga4").val() * $("#qty4").val();
			$("#sub4").val(jml);

			var total = 0;
			for (var i = 0; i < 5; i++) {
				if($("#sub"+i).val())
				total = total + parseInt($("#sub"+i).val());
			}			
			$("#total").val(total);

			$.ajax({
				data:{mod:"sub",id:jml},
					success: function(respond){
							$("#jml4").html(respond);
					}
			});
			$.ajax({
				data:{mod:"sub",id:total},
					success: function(res){
							$("#showTotal").html(res);
					}
			});
		});

		// End Element 4



})