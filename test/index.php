<html>
<head>
<link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="jquery-3.2.1.min.js"></script>
<script
    src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
    font-family: arial;
}
#demo-modal {
	text-align: center;
	padding: 20px;
}

#demo-modal-target {
	background: url(default-bg.jpg) no-repeat top left fixed;
	max-width: 550px;
	text-align: center;
	color: #FFF;
    padding: 60px 0px;
}

.demo-title {
	font-size: 2em;
    margin-bottom: 200px;
}

.btn-modal-target {
	padding: 10px 20px;
	color: #F0F0F0;
	margin: 5px;
	border-radius: 15px;
	cursor: pointer;
	display: inline-block;
}

#btn-jquery {
	background: #e85545;
}

#btn-bootstrap {
	background: #43cb83;
}

#btn-responsive {
	background: #ff9e8f;
}

.modal-text {
	margin-top: 15px;
	line-height: 25px;
	font-size: 1.0em;
	font-family: arial;
}
</style>
<title>Modal</title>
</head>
<body>
    <div id="demo-modal-target">
        <div class="demo-title">Bootstrap Dynamic Modal Window</div>
        <div onclick="loadDynamicContentModal('bootstrap')"
            class="btn-modal-target" id="btn-bootstrap">Bootstrap</div>
        <div onclick="loadDynamicContentModal('jquery')"
            class="btn-modal-target" id="btn-jquery">jQuery</div>
        <div onclick="loadDynamicContentModal('responsive')"
            class="btn-modal-target" id="btn-responsive">Responsive</div>
    </div>

    <div class="modal fade" id="bootstrap-modal" role="dialog">
    
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Bootstrap Dynamic Modal Content</h4>
            </div>
        <div id="demo-modal"></div>
        <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
    </div>
    <script>
function loadDynamicContentModal(modal){
	var options = {
			modal: true,
			height:300,
			width:500
		};
	$('#demo-modal').load('get-dynamic-data.php?modal='+modal, function() {
		$('#bootstrap-modal').modal({show:true});
    });    
}
</script>
</body>
</html>