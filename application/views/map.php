<section id="services" class="services bg-primary">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="margin-bottom:30px">
				<h2 class="text-center">路徑規劃</h2>
			</div>
			<div class="col-lg-4">
				<div class="form-group" style="padding-bottom:15px;">
					<label class="wedding" for="which">請輸入要參加的場次</label>
					<div class="radio">
						<label>
							<input type="radio" name="which" id="change" value="新北市三峽區正義街11-3號" checked="checked"> 男方 金帝王海鮮餐廳 新北市三峽區正義街11-3號
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="which" id="wendy" value="新北市新莊區中正路456號"> 女方 海大王海鮮餐廳 新北市新莊區中正路456號
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="wedding" for="start">請輸入您的起點</label>
					<input type="text" class="form-control" id="start" name="start" placeholder="ex:新北市板橋區文化路一段">
				</div>
				<button type="button" class="btn btn-dark" data-map-layer="" data-map-control="direction">路徑規劃</button>
				<div id="direction-panel"></div>
			</div>
			<div class="col-lg-8">
				<div id="map"></div>
			</div>
		</div>
	</div>
</section>