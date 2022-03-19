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
            width: 150px;
        }
        .container{
            border: solid black 1px;
            padding: 30px 70px;
        }
        .button_hasil{
            <?php
                if(isset($_POST)){
                    foreach ($_POST as $key => $value) {
                        if($value != ""){
                            if($key == "box-shadow"){
                                $shadow = $_POST["box-shadow"];
                                if (count($shadow) == 3 && $shadow[0] != "" && $shadow[1] != "" && $shadow[2] == "") {
                                    echo "$key: $shadow[0]px $shadow[1]px;";
                                }
                                if (count($shadow) == 3 && $shadow[0] != "" && $shadow[1] != "" && $shadow[2] != "") {
                                    echo "$key: $shadow[0]px $shadow[1]px $shadow[2];";
                                }
                                echo "\n";
                            }
                            else{
                                if(is_numeric($value)) $px = "px";
                                else $px = "";
                                echo "$key: $value$px; \n";
                            }
                        }
                    }
                }
            ?>
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Project Webprog</h1>
        <h4>Theofilus Arifin - 160420046</h4>
        <h4>Valencia - 160820016</h4>
        <br><br>
        <form action="index.php" method="POST" style="margin-bottom: 30px;">

            <!-- Width -->
            <div class="prop">
                <div class="prop-sentence">
                    Width : 
                </div>
                <div>
                    <input type="number" name="width"> &nbsp; 
                    <label>px</label>
                </div>
            </div>

            <!-- Height -->
            <div class="prop">
                <div class="prop-sentence">
                    Height : 
                </div>
                <div>
                    <input type="number" name="height"> &nbsp; 
                    <label>px</label>
                </div>
            </div>

            <!-- Padding -->
            <div class="prop">
                <div class="prop-sentence">
                    Padding: 
                </div>
                <div>
                    <input type="number" name="padding"> &nbsp; 
                    <label>px</label> &nbsp;
                </div> 
            </div>

            <!-- Margin -->
            <div class="prop">
                <div class="prop-sentence">
                    Margin: 
                </div>
                <div>
                    <input type="number" name="margin"> &nbsp; 
                    <label>px</label> &nbsp;
                </div> 
            </div>

            <!-- Text-align -->
            <div class="prop">
                <div class="prop-sentence">
                    Text-align :
                </div>
                <div>
                    <select name="text-align">
                        <option value="center">center</option>
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
                    <select name="text-decoration">
                        <option value="none">none</option>
                        <option value="underline">underline</option>
                        <option value="overline">overline</option>
                        <option value="line-through">line-through</option>
                    </select>
                </div>
            </div>

            <!-- Color -->
            <div class="prop">
                <div class="prop-sentence">
                    Color : 
                </div>
                <div>
                    <input type="text" name="color">
                </div> 
            </div>   

            <!-- Font-size -->
            <div class="prop">
                <div class="prop-sentence">
                    Font-size : 
                </div>
                <div>
                    <input type="number" name="font-size">
                    <label>px</label> &nbsp; 
                </div> 
            </div>

            <!-- Background-color -->
            <div class="prop">
                <div class="prop-sentence">
                    Background-color : 
                </div>
                <div>
                    <input type="text" name="background-color">
                </div> 
            </div>        

            <!-- Box Shadow -->
            <div class="prop">
                <div class="prop-sentence">
                    Box-Shadow: 
                </div>
                <div>
                    <input type="number" name="box-shadow[]"> &nbsp; 
                    <input type="number" name="box-shadow[]"> &nbsp; 
                    <label>px</label> &nbsp; 
                </div> 
                <div>
                    <input type="text" name="box-shadow[]">
                    <label>color</label>
                </div>
            </div>

            

            <!-- Border Radius -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-radius: 
                </div>
                <div>
                    <input type="number" name="border-radius"> &nbsp; 
                    <label>px</label> &nbsp; 
                </div> 
            </div>

            <!-- Border Color -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-color: 
                </div>
                <div>
                    <input type="text" name="border-color"> &nbsp; 
                </div> 
            </div>

            <!-- Border-width -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-width:
                </div>
                <div>
                    <select name="border-width">
                        <option value="thin">thin</option>
                        <option value="medium">medium</option>
                        <option value="thick">thick</option>
                    </select>
                </div>
            </div>

            <!-- Cursor -->
            <div class="prop">
                <div class="prop-sentence">
                    Cursor:
                </div>
                <div>
                    <select name="cursor">
                        <option value="pointer">pointer</option>
                        <option value="not-allowed">not-allowed</option>
                    </select>
                </div>
            </div>            

            <div class="prop">
                <input type="submit"> &nbsp; &nbsp; &nbsp; 
                <button onclick="location.reload()">Reset CSS</button>
            </div>
        </form>
        <p>CSS:</p>
        <div style="border: solid black 1px;">
            <?php
                if(isset($_POST)){
                    echo '<pre>';
                    echo htmlspecialchars('   <style>');
                    echo "<br>";
                    foreach ($_POST as $key => $value) {
                        if($value != ""){
                            if($key == "box-shadow"){
                                $shadow = $_POST["box-shadow"];
                                if (count($shadow) == 2 && $shadow[0] != "" && $shadow[1] != "" && $shadow[2] == "") {
                                    echo "          $key: $shadow[0]px $shadow[1]px;";
                                    echo "<br>";
                                }
                                if (count($shadow) == 3 && $shadow[0] != "" && $shadow[1] != "" && $shadow[2] != "") {
                                    echo "          $key: $shadow[0]px $shadow[1]px $shadow[2];";
                                    echo "<br>";
                                }                            
                            }
                            else{
                                if(is_numeric($value)) $px = " px";
                                else $px = "";
                                echo "          $key: $value$px;";
                                echo "<br>";
                            }
                        }
                    }
                    echo htmlspecialchars('   </style>');
                    echo '</pre>';
                }
            ?>
        </div>


        <p>Hasil Button:</p>
        <button class="button_hasil">Button</button>
    </div>
</body>
</html>