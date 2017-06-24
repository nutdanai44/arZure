
<html>
	<title></title>
	<body>
		<link rel="stylesheet" href="main.css" type="text/css">
		$(document).ready(function () {

	$('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
      $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
		<div class="container">
	<div class="row">

		<section class="content">
			<h1>PROJE LİSTESİ</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group">
							    <button type="button" class="btn btn-default btn-filter" data-target="all">Tüm Teklifler</button>
								<button type="button" class="btn btn-success btn-filter" data-target="onaylanan">Onaylanmış</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="bekleyen">Onay Bekleyen</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="iptal">İptal / Red Edilen</button>
								
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr data-status="onaylanan">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox1">
												<label for="checkbox1"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://pbs.twimg.com/profile_images/462946345255317505/UUGiYSqY_reasonably_small.jpeg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">Mayıs 4, 2017</span>
													<h4 class="title">
														Hüstad
														<span class="pull-right onaylanan">(onaylanan)</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="bekleyen">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox3">
												<label for="checkbox3"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://pbs.twimg.com/profile_images/462946345255317505/UUGiYSqY_reasonably_small.jpeg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">Mayıs 4, 2017</span>
													<h4 class="title">
														Hüstad
														<span class="pull-right bekleyen">(bekleyen)</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="iptal">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox2">
												<label for="checkbox2"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://pbs.twimg.com/profile_images/462946345255317505/UUGiYSqY_reasonably_small.jpeg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">Mayıs 4, 2017</span>
													<h4 class="title">
														Hüstad
														<span class="pull-right iptal">(iptal)</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="onaylanan" class="selected">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox4" checked>
												<label for="checkbox4"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star star-checked">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://pbs.twimg.com/profile_images/462946345255317505/UUGiYSqY_reasonably_small.jpeg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">Mayıs 4, 2017</span>
													<h4 class="title">
														Hüstad
														<span class="pull-right onaylanan">(onaylanan)</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
									<tr data-status="bekleyen">
										<td>
											<div class="ckbox">
												<input type="checkbox" id="checkbox5">
												<label for="checkbox5"></label>
											</div>
										</td>
										<td>
											<a href="javascript:;" class="star">
												<i class="glyphicon glyphicon-star"></i>
											</a>
										</td>
										<td>
											<div class="media">
												<a href="#" class="pull-left">
													<img src="https://pbs.twimg.com/profile_images/462946345255317505/UUGiYSqY_reasonably_small.jpeg" class="media-photo">
												</a>
												<div class="media-body">
													<span class="media-meta pull-right">Mayıs 4, 2017</span>
													<h4 class="title">
														Hüstad
														<span class="pull-right bekleyen">(bekleyen)</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="content-footer">
					<p>
						Page © - 2017 <br>
						Powered By <a href="https://www.facebook.com/okantiktas" target="_blank">OKAN TİKTAŞ</a>
					</p>
				</div>
			</div>
		</section>
		
	</div>
</div>
	</body>
</html>
