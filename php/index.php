<html>
<head>
    <script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="wrapper">
    <h1>Create Issue</h1>
    <form id="create-form">
        Summary: <input type="text" name="summary" id="summary" value=""/>
        Description: <input type="text" name="description" id="description" value="" />
        Issue Type: <input type="text" name="type" id="type" value=""/>
        Username: <input type="text" name="user" id="user" value=""/>
        Password: <input type="password" name="pass" id="pass" value=""/>
        <input type="button" id="button" value="Create Issue"/>
    </form>
</div>
<script>
    $('#button').click(function() {
        $.ajax({
            type: "POST",
            url: "jiraapi.php",
            data: $('#create-form').serialize(),
            success: function(data){
                alert(data);
            },
            dataType: "html"
        });
    });
</script>
</body>
</html>