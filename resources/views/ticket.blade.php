<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        @page {
            margin: 0;
            /* sin márgenes */
        }

        body {
            margin: 0;
            padding: 0;
            width: 80mm;
            height: 60mm;
            font-family: sans-serif;
            font-size: 11px;

        }

        h1,
        h3 {
            text-align: center;
        }

        span.code {
            display: block;
            text-align: center;
            font-size: 40px;
            font-weight: bold;
            margin: 3px 0;
        }

        .content {

        }

        span {
            display: block;
            font-size: 40px;
            text-align: center;
        }

        p {
            font-size: 15px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            width: 80mm;
        }
        label{
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>SPEEDY.COM S.A</h1>
        <hr>
        <h3>ATENCION AL CLIENTE</h3>
        <hr>
        <p><strong style="margin-right: 5px">Creacion :</strong> 2025-07-07 08:30 AM</p>
        <hr>
        <span>ABC-123</span>
        <hr>
       <p><strong style="margin-right: 5px">Usuario</strong>: {{ $usuario }}</p>
<p><strong style="margin-right: 8px">Cédula</strong>: {{ $cedula }}</p>
    </div>
</body>

</html>
