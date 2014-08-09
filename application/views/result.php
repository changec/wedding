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
				<div class="col-lg-10 col-lg-offset-1 text-center">
					<h2>女方</h2>
					<hr class="small">
				</div>
				<div class="col-lg-10 col-lg-offset-1">
					<table class="table table-striped">
						<tr>
							<th class="col-md-1">編號</th>
							<th class="col-md-2">姓名</th>
							<th class="col-md-1">是否參加</th>
							<th class="col-md-1">人數</th>
							<th>留言</th>
						</tr>
						<?$i=1;?>
						<?foreach($result as $val){?>
							<?if ($val->change_or_wendy=='1'){?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $val->name?></td>
								<td><?php echo ($val->is_join=='0'?'參加':'不參加')?></td>
								<td><?php echo $val->big?>大 <?php echo ($val->small=='0'?'':$val->small.'小')?></td>
								<td><?php echo $val->say_something?></td>
							</tr>
							<?$i++;}?>
						<?}?>
					</table>
				</div>
				<div class="col-lg-10 col-lg-offset-1 text-center">
					<h2>男方</h2>
					<hr class="small">
				</div>
				<div class="col-lg-10 col-lg-offset-1">
					<table class="table table-striped">
						<tr>
							<th class="col-md-1">編號</th>
							<th class="col-md-2">姓名</th>
							<th class="col-md-1">是否參加</th>
							<th class="col-md-1">人數</th>
							<th>留言</th>
						</tr>
						<?$j=1;?>
						<?foreach($result as $val){?>
							<?if ($val->change_or_wendy=='0'){?>
							<tr>
								<td><?php echo $j;?></td>
								<td><?php echo $val->name?></td>
								<td><?php echo ($val->is_join=='0'?'參加':'不參加')?></td>
								<td><?php echo $val->big?>大 <?php echo ($val->small=='0'?'':$val->small.'小')?></td>
								<td><?php echo $val->say_something?></td>
							</tr>
							<?$j++;?>
							<?}?>
						<?}?>
					</table>
				</div>
			</div>
		</div>
	</div>
       <!-- /.row -->
</div>