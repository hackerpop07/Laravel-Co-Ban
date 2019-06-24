<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<style>
    #content {
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h1 {
        color: navy;
    }

    label {
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input {
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    #buttons input {
        float: left;
        margin-bottom: .5em;
    }

    br {
        clear: left;
    }
</style>
<body>
<div id="content">
    <h1>Ứng dụng Từ điển đơn giản</h1>
    <form method="post">
        @csrf
        <div id="data">
            <label>English: </label>
            <input type="textbox" name="input"/><br/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Dịch"/>
        </div>
    </form>
</div>
</body>
</html>
