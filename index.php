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
            margin-bottom: 10px;
        }
        .prop{
            display: flex;
        }
        .prop-sentence{
            width: 100px;
        }
        .container{
            border: solid black 1px;
            padding: 30px 70px;
        }
    </style>

</head>
<?php
    if(isset($_POST['submit'])){
        $style = "Test";
    }
?>

<body>
    <div class="container">
        <h1>Project Webprog</h1>
        <h4>Theofilus Arifin - 160420046</h4>
        <h4>Valencia - 160820016</h4>
        <br><br>
        <form action="index.php" method="POST">

            <!-- Width -->
            <div class="prop">
                <div class="prop-sentence">
                    Width : 
                </div>
                <div>
                    <input type="number"> &nbsp; 
                    <select name="" id="">
                        <option value="px">px</option>
                        <option value="em">em</option>
                        <option value="rem">rem</option>
                    </select>
                </div>
            </div>

            <!-- Height -->
            <div class="prop">
                <div class="prop-sentence">
                    Height : 
                </div>
                <div>
                    <input type="number"> &nbsp; 
                    <select name="" id="">
                        <option value="px">px</option>
                        <option value="em">em</option>
                        <option value="rem">rem</option>
                    </select>
                </div>
            </div>

            <!-- Text-align -->
            <div class="prop">
                <div class="prop-sentence">
                    Text-align :
                </div>
                <div>
                    <select name="" id="">
                        <option value="right">right</option>
                        <option value="left">left</option>
                    </select>
                </div>
            </div>

            <!-- Text Decoration -->
            <div class="prop">
                <div class="prop-sentence">
                    Text-decoration:
                </div>
                <div>
                    <select name="" id="">
                        <option value="none">none</option>
                        <option value="underline">underline</option>
                        <option value="overline">overline</option>
                        <option value="line-through">line-through</option>
                    </select>
                </div>
            </div>

            <!-- Font-color -->
            <div class="prop">
                <div class="prop-sentence">
                    Font-color : 
                </div>
                <div>
                    <input type="text">
                </div> 
            </div>

            <!-- Font-size -->
            <div class="prop">
                <div class="prop-sentence">
                    Font-size : 
                </div>
                <div>
                    <input type="number">
                    <label>px</label> &nbsp; 
                </div> 
            </div>


            <!-- Background-color -->
            <div class="prop">
                <div class="prop-sentence">
                    Background-color : 
                </div>
                <div>
                    <input type="text">
                </div> 
            </div>

            <!-- Box Shadow -->
            <div class="prop">
                <div class="prop-sentence">
                    Box-Shadow: 
                </div>
                <div>
                    <input type="number"> &nbsp; 
                    <input type="number"> &nbsp; 
                    <input type="number"> &nbsp; 
                    <label>px</label> &nbsp; 
                </div> 
                <div>
                    <input type="text">
                    <label>color</label>
                </div>
            </div>

            

            <!-- Border Radius -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-radius: 
                </div>
                <div>
                    <input type="number"> &nbsp; 
                    <label>px</label> &nbsp; 
                </div> 
            </div>

             <!-- Border Color -->
             <div class="prop">
                <div class="prop-sentence">
                    Border-color: 
                </div>
                <div>
                    <input type="text"> &nbsp; 
                </div> 
            </div>

            <!-- Border-Width -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-width:
                </div>
                <div>
                    <select name="" id="">
                        <option value="thin">thin</option>
                        <option value="medium">medium</option>
                        <option value="thick">thick</option>
                    </select>
                </div>
            </div>
            





            <br>
            <input type="submit" name="submit">
        </form>

        <p>CSS:</p>
        <textarea name="css_textarea" id="" cols="30" rows="10" readonly>

        </textarea>

        <p>Hasil Button:</p>
        <button></button>
    </div>
</body>
</html>