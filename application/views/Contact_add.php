<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        *{
            font: 15px arial, sans-serif;
            font-weight: bold;
            color: #4e4a4a;
        }
        #container {

            border: 1px solid #D0D0D0;
            width: 400pt;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 8px #D0D0D0;

        }
        p{
            margin-left: 15pt;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 10px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 10px;
        }
        label {
            display: inline-block;
            margin-left: 15pt;

        }
        input {
            border-radius: 2pt;
            border: 1px solid black;
            padding: 5pt;
        }
        a{
            margin: 20pt 0 10pt 10pt;
            background-color: #2cc36b;
            border: 1px solid #D0D0D0;
            padding: 5pt;
            text-decoration: none;

        }
        button{
            background-color: #995300;
            text-decoration: none;
            color: black;
            padding: 4px;
            margin: 10pt 10pt 10pt 10pt;
        }

        .footer{
            text-align: right;
            font-weight: normal;
            font-size: small;
        }

    </style>
</head>
<body>
<div id="container">
    <p>Thêm mới danh bạ</p>
    <hr>
    <form method="post" action="<?=base_url()?>/contact/save">
        <div class="input">
            <div class="row">
            <div class="col-25">
            <label for="">Tên</label>
            </div>
            <div class="col-75">
            <input type="text" name="name">
                <div>
                </div>
        </div>

        <div class="input">
            <div class="row">
            <div class="col-25">
            <label for="">Số điện thoại 1</label>
            </div>
                <div class="col-75">
            <input type="text" name="phone1">
                </div>
            </div>
        </div>

        <div class="input">
            <div class="row">
            <div class="col-25">
            <label for="">Số điện thoại 2</label>
            </div>
                <div class="col-75">
            <input type="text" name="phone2">
                </div>
            </div>
        </div>

        <div class="input">
            <div class="row">
            <div class="col-25">
            <label for="">Email</label>
            </div>
                <div class="col-75">
            <input type="text" name="email">
                </div>
            </div>
        </div>

        <div class="input">
            <div class="row">
            <div class="col-25">
            <label for="">Facebook</label>
            </div>
                <div class="col-75">
            <input type="text" name="fb">
                </div>
            </div>
        </div>

        <div class="input">
            <div class="row">
            <div class="col-25">
            <label for="">Company</label>
            </div>
                <div class="col-75">
            <input type="text" name="company">
                </div>
            </div>
        </div>
                <button>Thêm mới</button>
    </form>
    </div>
    <hr>
    <p class="footer">Website được thiết kế bởi OWS Việt Nam</p>

</body>
</html>

