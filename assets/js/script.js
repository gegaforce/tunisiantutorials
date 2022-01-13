			$('#create_file').click(function(){
				var title = $('#title').val();
				
				$.ajax({
					url:'<?php echo base_url()?>index.php/writer/createArticle',
					type:'post',
					data: {'html': $('#editeur').html(),
							'title': title
							},
					success: function(response){
						console.log(response);
					},
					error:function(){
						
					}
				});
			});
			$('.image_editeur').bind("mouseover", function(){
				console.log('cursor');
				$(this).addClass('cursor');
			});
			$('.image_editeur').on('click',function(){
				
				$('#afficheImage').modal('show');
				
				var source_img = $(this).attr('src');
				$('#content-image').html('<img src="'+source_img+'"/>');
				console.log(source_img);
			});
			$('.code_mirror').on('click',function(){
				//console.log('this code_mirror');
				//$(this).attr('contenteditable','true');
				$(this).select();
				
			});
			$( window ).scroll(function() {
			  
			     if($(window).scrollTop() + $(window).height() == $(document).height()) {
					   //alert("bottom!");
					   $( "#tableOfContent" ).removeClass( "scrollable" );
					   // getData();
				   }else{
					   $( "#tableOfContent" ).addClass( "scrollable" );
				   }
				   //if($(window).height() - $(window).scrollTop() == 738 )
					 //  console.log($(window).height()-$(window).scrollTop())

			});
			//$('html,body').animate({ scrollTop: 99 }, 'slow');
			