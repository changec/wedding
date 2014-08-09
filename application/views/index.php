    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Change &amp; Wendy </h1>
            <h3>我們要結婚了</h3>
            <br>
            <a href="#write" class="btn btn-dark btn-lg">問卷填寫</a>
        </div>
    </header>
    <!-- Write -->
	<section id="write" class="services bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
					<h2 class="text-center">問卷填寫</h2>
					<hr class="small">
					<div class="container">
						<div class="row">
							<div class="col-lg-4">
								<h3>訂婚</h3>
								<h4>時間：<u>2014年10月18日</u> 星期六中午</h4>
								<h4>地點：<u>新北市新莊區中正路465號</u> 海大王海鮮餐廳</h4>
							</div>
							<div class="col-lg-4">
								<h3>結婚</h3>
								<h4>時間：<u>2014年11月23日</u> 星期日中午</h4>
								<h4>地點：<u>新北市三峽區正義街11-3號</u> 金帝王海鮮餐廳</h4>
							</div>
						</div>
					</div>
					
                    <form id="wedding-form" role="form" action="<?php echo base_url()?>cw/insertData" method="post">
						<div class="form-group">
							<label class="wedding" for="name">1.您的大名</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="請告訴我們您的大名，讓我們知道你是誰唷～">
						</div>
						<div class="form-group" style="padding-bottom:15px;">
							<label class="wedding" for="changewendy">2.您是男方還是女方的朋友呢?</label>
							<select class="form-control" id="changewendy" name="changewendy">
								<option value="0">男方(承致)</option>
								<option value="1">女方(惠雅)</option>
							</select>
						</div>
						
						<div class="form-group">
							<label class="wedding" for="is_join">3.當天是否會出席婚宴呢?</label>
							<select class="form-control" id="is_join" name="is_join">
								<option value="0">會喔～排除萬難也要到場！</option>
								<option value="1">抱歉拉～抽不出時間！</option>
							</select>

						</div>
						<div class="form-group">
							<label class="wedding" for="big">4.需要為您保留幾個位置呢(大人喔)?</label>
							<select class="form-control" id="big" name="big">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<div class="form-group">
							<label class="wedding" for="small">5.需要為您準備幾張兒童座椅呢?</label>
							<select class="form-control" id="small" name="small">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</div>
						<div class="form-group">
							<label class="wedding" for="when_su">6.需要幫您準備素食嗎?</label>
							<select class="form-control" id="when_su" name="when_su">
								<option value="0">不用喔～請幫我準備葷食</option>
								<option value="1">我需要～請幫我準備素食</option>
							</select>
						</div>
						<div class="form-group">
							<label class="wedding" for="tel">7.您的手機號碼?</label>
							<input type="text" class="form-control" id="tel" name="tel" placeholder="請留下您的電話，這樣才能聯絡到您唷～">
						</div>
						<div class="form-group">
							<label class="wedding" for="addr">8.您的喜帖寄送地址?</label>
							<input type="text" class="form-control" id="addr" name="addr" placeholder="請留下您的地址，讓我們寄喜(ㄓㄚˋ)帖(ㄉㄢˋ)給您～">
						</div>
						<div class="form-group">
							<label class="wedding" for="say_something">9.說點什麼吧！</label>
							<textarea class="form-control" rows="3"  id="say_something" name="say_something" placeholder="有甚麼想說的都可以留在這邊唷～"></textarea>
						</div>
						<button id="submitForm" type="submit" class="btn btn-dark">寫好就送出吧！</button>
					</form>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
	<aside id="path">
        <div class="container">
            <div class="row">
                <h2 class="text-center">宴客地點</h2>
				<hr class="small">
            </div>
        </div>
    </aside>

    <!-- Call to Action -->
    <section class="">
	<div class="container well well-lg">
		<div class="row">
			<div class="col-lg-4">
				<div id="path-form">
				<div class="form-group" style="padding-bottom:15px;">
					<label class="wedding" for="which">請選擇你要參加的場次</label>
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
				</div>
				<div id="direction-panel" style="background-color:white"></div>
			</div>
			<div class="col-lg-8">
				<div id="map"></div>
			</div>
		</div>
	</div>
</section>
 <section id="portfolio" class="portfolio bg-primary">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 text-center">
				<h2>婚紗照</h2>
				<hr class="small">
			</div>
		</div>
		<div class="row">
			<div class="container">
				<div id="container" class="row">
					<?php for($i=1;$i<25;$i++){?>
					<div class="col-sm-6 itemm">
						<div style="margin-bottom: 30px;">
							<img class="img-responsive" src="<?echo base_url()?>assets/img/<?echo $i?>.jpg">
						</div>
					</div>
					<?}?>
				</div>
			</div>
		</div>
        <!-- /.row -->
	</div>
    <!-- /.container -->
</section>
	
	<!-- Modal -->
	<div class="modal fade" id="done" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" onclick="location.href = '#path'"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel">　</h4>
				</div>
				<div class="modal-body">
					感謝您的填寫，期待當天您的到來唷，往下還有路線圖以及我們的婚紗照喔～
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-dark" data-dismiss="modal" onclick="location.href = '#path'">確定</button>
				</div>
			</div>
		</div>
	</div>