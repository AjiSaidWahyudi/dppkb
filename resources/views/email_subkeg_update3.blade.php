<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
	<meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS 7-9 -->
	<meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS 7-9 -->
	<title>Informasi Masuknya Program</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			-ms-text-size-adjust: 100%;
			-webkit-text-size-adjust: 100%;
		}
		table {
			border-spacing: 0;
		}
		table td {
			border-collapse: collapse;
		}
		.ExternalClass {
			width: 100%;
		}
		.ExternalClass,
		.ExternalClass p,
		.ExternalClass span,
		.ExternalClass font,
		.ExternalClass td,
		.ExternalClass div {
			line-height: 100%;
		}
		.ReadMsgBody {
			width: 100%;
			background-color: #ebebeb;
		}
		table {
			mso-table-lspace: 0pt;
			mso-table-rspace: 0pt;
		}
		img {
			-ms-interpolation-mode: bicubic;
		}
		.yshortcuts a {
			border-bottom: none !important;
		}
		@media screen and (max-width: 599px) {
			.force-row,
			.container {
				width: 100% !important;
				max-width: 100% !important;
			}
		}
		@media screen and (max-width: 400px) {
			.container-padding {
				padding-left: 12px !important;
				padding-right: 12px !important;
			}
		}
		.ios-footer a {
			color: #aaaaaa !important;
			text-decoration: underline;
		}
		.header,
		.title,
		.subtitle,
		.footer-text {
			font-family: Helvetica, Arial, sans-serif;
		}
		.header {
			font-size: 24px;
			font-weight: bold;
			padding-bottom: 12px;
			color: #DF4726;
		}
		.footer-text {
			font-size: 12px;
			line-height: 16px;
			color: #aaaaaa;
		}
		.footer-text a {
			color: #aaaaaa;
		}
		.container {
			width: 600px;
			max-width: 600px;
		}
		.container-padding {
			padding-left: 24px;
			padding-right: 24px;
		}
		.content {
			padding-top: 12px;
			padding-bottom: 12px;
			background-color: #ffffff;
		}
		code {
			background-color: #eee;
			padding: 0 4px;
			font-family: Menlo, Courier, monospace;
			font-size: 12px;
		}
		hr {
			border: 0;
			border-bottom: 1px solid #cccccc;
		}
		.hr {
			height: 1px;
			border-bottom: 1px solid #cccccc;
		}
		.title {
			font-size: 18px;
			font-weight: 600;
			color: #374550;
		}
		.subtitle {
			font-size: 16px;
			font-weight: 600;
			color: #2469A0;
		}
		.subtitle span {
			font-weight: 400;
			color: #999999;
		}
		.body-text {
			font-family: Helvetica, Arial, sans-serif;
			font-size: 14px;
			line-height: 20px;
			text-align: left;
			color: #333333;
		}
	</style>
</head>
<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
	<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
		<tr>
			<td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">
				<br>
				<table border="0" width="600" cellpadding="0" cellspacing="0" class="container">
					<tr>
						<td class="container-padding header" align="left">
							<a href="#">
								<img src="{{asset('web/dppkb.jpg')}}" alt="logo" width="150">
							</a>
						</td>
					</tr>
					<tr>
						<td class="container-padding content" align="left">
							<br>
							<div class="title">Hai, {{ $data->name }} </div>
							<br>
							<div class="body-text">
								Subkegiatan Anda:
								<br>
								<center><label class="label label-info text-center"><strong>{{ $subkeg->nama }}</strong></label></center>
								<br><br>
								<br>
								Telah selesai dijalankan.
								<br>
								<br>
								<strong>Terima kasih</strong>
								<br>
								<br>
								<br>
								Hormat Kami,
								<br>
								Dinas Pengendalian Penduduk dan Keluarga Berencana Kota Samarinda
								<br>
								<br>
							</div>
						</td>
					</tr>
					<tr>
						<td class="container-padding footer-text" align="left">
							<br><br>
							<strong>Dinas Pengendalian Penduduk dan Keluarga Berencana Kota Samarinda</strong><br>
							<span class="ios-footer">
								Jl. Perjuangan
							</span>
							<br>
							Hak Cipta &copy; 2019 Dinas Komunikasi dan Informatika
							<br><br>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>