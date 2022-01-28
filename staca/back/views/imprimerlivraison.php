        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>

        <script type="text/javascript">
            
            var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content2').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});

        </script>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="content2" style="visibility: hidden;">
     <h3>Hello, this is a H3 tag</h3>

    <p>a pararaph</p>
</div>
<div id="editor"></div>
</body>
</html>
