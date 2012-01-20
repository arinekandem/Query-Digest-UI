<!DOCTYPE html>
<html>
    <head>
        <title>Query Digest UI</title>

		<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>

        <script src="js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/cupertino/jquery-ui-1.8.16.custom.css" type="text/css" media="all" >

		<script src="js/DataTables/media/js/jquery.dataTables.js" type="text/javascript"></script>
		<script src="js/DataTables/extras/jquery-datatables-column-filter/media/js/jquery.dataTables.columnFilter.js" type="text/javascript"></script>

		<script src="js/DataTables/extras/ColVis-1.0.6/media/js/ColVis.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="js/DataTables/extras/ColVis-1.0.6/media/css/ColVis.css" media="screen" >

		<script src="js/DataTables/extras/ColReorder-1.0.4/media/js/ColReorder.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="js/DataTables/extras/ColReorder-1.0.4/media/css/ColReorder.css" media="screen" >

		<link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" >
		<script src="js/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
		<script src="js/fancybox/jquery.easing-1.3.pack.js" type="text/javascript"></script>

		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" >
        <link rel="stylesheet" href="css/syntax.css" type="text/css" media="all" >

		<script src="js/explain.js" type="text/javascript"></script>
        <script src="js/doc.js" type="text/javascript"></script>

        <script>
           $(document).ready(function() {
                $("a.details").fancybox({
                    type:           'iframe',
                    width:          '98%',
                    height:         '98%',
                    centerOnScroll: true,
                    padding:        0,
                    margin:         10
                });
           });
       </script>

	</head>
	<body>

	<div id="content">
