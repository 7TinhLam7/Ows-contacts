<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
    <title> Contact </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        *{
            font: 15px arial, sans-serif;
            color: #4e4a4a;
        }
        #container{
            border: 1px solid #D0D0D0;
            width: 600pt;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 0 8px #D0D0D0;
        }
        h1{
            font-weight: bold;
            margin-left: 15pt;
        }
        th{
            background-color: #00CC00;
            padding: 3px;
            color: white;
            font-weight: bold;
        }
        tr {
            color:#666B85;
        }
        tr:nth-child(odd) td {
            background:#EBEBEB;
        }
        td.center{
            text-align: center;
        }
        table{
            width: 90%;
            margin-left: 15pt;
            margin-bottom: 10pt;
        }
        a.btn{
            background-color: #995300;
            text-decoration: none;
            color: black;
            padding: 4px;
            margin-left: 20pt;
            font-weight: bold;
        }
        .footer{
            text-align: right;
            font-size: small;

        }

    </style>
</head>
<body>
<div id="container">
    <h1>Danh bạ</h1>
    <hr>
    <div id="body">
        <table>
            <tr>
                <th>#</th>
                <th>Tên</th>
                <th>Số điện thoại</th>
                <th></th>
            </tr>
            <?php foreach ($contacts as $idx => $item): ?>
                <tr class="<?= ($idx % 2) ? 'odd' : 'even' ?>" >
                    <td class="center"><?= $idx+1 ?></td>
                    <td><?= $item->name ?></td>
                    <td><?= $item->phone1 ?></td>
                    <td class="center"><a href="<?=base_url()?>contact/edit/<?= $item->id ?>">Chi tiết</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <a href="<?=base_url()?>contact/add" class="btn">Thêm mới</a>
    </div>
     <hr>

    <p class="footer">Website được thiết kế bởi OWS Việt Nam</p>
</div>
</body>
</html>
