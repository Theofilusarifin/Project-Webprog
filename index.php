<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
        *{
            font-family: 'Open Sans', sans-serif;
        }
        div{
            font-weight: bold;
            margin-bottom: 20px;
        }
        .container{
            border: solid black 1px;
            padding: 30px 70px;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Project Webprog</h1>
        <h4>Theofilus Arifin - 160420046</h4>
        <h4>Valencia - 160820016</h4>
        <br><br>
        <form action="POST">
            <div>Width : <input type="number"> &nbsp; 
                <select name="" id="">
                    <option value="px">px</option>
                    <option value="em">em</option>
                    <option value="rem">rem</option>
                </select>
            </div>
            <div>Text-align : 
                <select name="" id="">
                    <option value="right">right</option>
                    <option value="left">left</option>
                </select>
            </div>
            <div>Background : <input type="text"></div>
            <br>
            <input type="submit">
        </form>

        <p>CSS:</p>
        <textarea name="css_textarea" id="" cols="30" rows="10" readonly>

        </textarea>

        <p>Hasil Button:</p>
        <button></button>
    </div>
</body>
</html>