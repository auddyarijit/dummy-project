<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-body">
			<div class="row-fluid">
		        <div class="span12">
			        <?php
			       /* include ("../../config.php");*/
			            $sqlfetch="SELECT * FROM contact order by id DESC ";
			            $resultfetch = mysqli_query($conn, $sqlfetch);
			            echo"
			            <table  class='table table-striped'>
			            	<thead>
			            		<tr>
			            			<th>Id</th>
			            			<th>Date</th>
			            			<th>Name</th>
			            			<th>Email</th>
			            			<th>Phone</th>
			            			<th>Message</th>
			            			<th>Action</th>
			            		</tr>
			            	</thead>
			            	<tbody>";
				                while($rowfetch = mysqli_fetch_array($resultfetch)) 
	                            {
				                    echo"
				                    <tr>
								        <td>".$rowfetch['id']."</td>
								        <td>".$rowfetch['create_time']."
								        
								        </td>											
								        <td>".$rowfetch['name']."</td>
								        <td>".$rowfetch['email']."</td>
								        <td>".$rowfetch['phone']."</td>
								        <td>".$rowfetch['msg']."</td>
								        <td><a href='contact/contact_delete.php?id=".$rowfetch['id']."' class='tooltip-error' data-rel='tooltip' title=''>
								            <i class='fa fa-trash-o text-danger' aria-hidden='true'></i></a>
							            </td>
							        </tr>";
				                }
				             
			        ?>
		        </div>
      
   </div>
		</div>
	</div>
</div>
<script>

	$(document).ready(function(){
		$('.view_message').click(function(){
			$(this).closest('tr').find('.badge-status').parent().html('<span class="badge badge-success badge-status">Read</span>')
			uni_modal("Inquiry Content","inquiries/view.php?&id="+$(this).attr('data-id'))
		})
		$('.delete_message').click(function(){
		_conf("Are you sure to delete this Testimony?","delete_message",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})
	function delete_message($id){
		start_loader()
		$.ajax({
			url:_base_url_+'classes/Content.php?f=message_delete',
			method:'POST',
			data:{id:$id},
			dataType:'json',
			success:function(resp){
				if(resp.status == 'success'){
					location.reload()
				}else{
					alert_toast(resp.err_msg,'error')
				}
				end_loader();
			}
		})
	}
</script>