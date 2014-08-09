<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2>婚禮調查</h2>
			<hr class="small">
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div id="container" class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<table class="table table-striped">
						<tr><th>name</th><th>是否參加</th><th>人數</th><th>留言</th><th>男女方</th></tr>
						<?foreach($result as $val){?>
							<tr>
								<td><?php echo $val->name?></td>
								<td><?php echo ($val->is_join=='0'?'參加':'不參加')?></td>
								<td><?php echo $val->big?>大 <?php echo ($val->small=='0'?'':$val->small.'小')?></td>
								<td><?php echo $val->say_something?></td>
								<td><?php echo ($val->change_or_wendy=='0'?'男方':'女方')?></td>
							</tr>
						<?}?>
					</table>
				</div>
			</div>
		</div>
	</div>
       <!-- /.row -->
</div>