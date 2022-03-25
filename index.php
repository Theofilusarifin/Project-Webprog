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
            width: 170px;
        }
        .container{
            border: solid black 1px;
            padding: 30px 70px;
        }
        .button{
            width: 200px; 
            cursor:pointer;
            background-color: white; 
            color: black; 
            border: 2px solid #4CAF50;
            font-weight: 800;
            border-radius: 0.25rem;
        }
        .button:hover {
            background-color: #4CAF50;
            color: white;
        }
        .button_hasil{
            <?php
            // is there any POST?
                if(isset($_POST)){
                    foreach ($_POST as $key => $value) {
                        // Is value an array?
                        if (is_array($value))
                        {   // Is key contain "_size" ?
                            if (strpos($key,"_size") !== false){
                                // Make sure it is not empty
                                if($value[0] != ""){
                                    // width_size -> [0] width [1] size
                                    echo (explode("_",$key)[0].": ".$value[0].$value[1]."; \n");
                                }
                            }
                        }
                        // value Not array
                        else{
                            // Is key contain "_color" ?
                            if (strpos($key,"_color") !== false){
                                // Make sure it is not empty
                                if($value != ""){
                                    // background-color_color -> [0] background-color [1] color
                                    echo (explode("_",$key)[0].": #".$value."; \n");
                                } 
                            }
                            // Normal input
                            else {
                                // Make sure it is not empty
                                if($value != "") {
                                    echo "$key: $value; \n";
                                }
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
        <hr>
        <h3 style="color: #0d6efd; font-weight: 600;">Properties:</h3>
        <form action="index.php" method="POST" style="margin-bottom: 30px;">

            <!-- Width -->
            <div class="prop">
                <div class="prop-sentence">
                    Width : 
                </div>
                <div>
                    <input type="number" name="width_size[]" placeholder=" input a number here"> &nbsp; 
                    <select name="width_size[]">
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
                    <input type="number" name="height_size[]" placeholder=" input a number here"> &nbsp; 
                    <select name="height_size[]">
                        <option value="px">px</option>
                        <option value="em">em</option>
                        <option value="rem">rem</option>
                    </select> 
                </div>
            </div>

            <!-- Padding -->
            <div class="prop">
                <div class="prop-sentence">
                    Padding: 
                </div>
                <div>
                    <input type="number" name="padding_size[]" placeholder=" input a number here"> &nbsp; 
                    <select name="padding_size[]">
                        <option value="px">px</option>
                        <option value="em">em</option>
                        <option value="rem">rem</option>
                    </select>
                </div> 
            </div>

            <!-- Margin -->
            <div class="prop">
                <div class="prop-sentence">
                    Margin: 
                </div>
                <div>
                    <input type="number" name="margin_size[]" placeholder=" input a number here"> &nbsp; 
                    <select name="margin_size[]">
                        <option value="px">px</option>
                        <option value="em">em</option>
                        <option value="rem">rem</option>
                    </select>  &nbsp;
                </div> 
            </div>

            <!-- Text-align -->
            <div class="prop">
                <div class="prop-sentence">
                    Text-align :
                </div>
                <div>
                    <select name="text-align">
                        <option disabled selected value="">select here</option>
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
                        <option disabled selected value="">select here</option>
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
                <div style="margin-left:-20px; margin-right:10px;">
                    #
                </div>
                <div>
                    <input type="text" name="color_color" placeholder=" input a hex color code">
                </div> 
            </div>   

            <!-- Font-size -->
            <div class="prop">
                <div class="prop-sentence">
                    Font-size : 
                </div>
                <div>
                    <input type="number" name="font-size_size[]" placeholder=" input a number here">&nbsp;
                    <select name="font-size_size[]">
                        <option value="px">px</option>
                        <option value="em">em</option>
                        <option value="rem">rem</option>
                    </select> 
                </div> 
            </div>

            <!-- Background-color -->
            <div class="prop">
                <div class="prop-sentence">
                    Background-color :
                </div>
                <div style="margin-left:-20px; margin-right:10px;">
                    #
                </div>
                <div>
                    <input type="text" name="background-color_color"  placeholder=" input a hex color code">
                </div> 
            </div>       

            <!-- Border Radius -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-radius: 
                </div>
                <div>
                    <input type="number" name="border-radius_size[]" placeholder=" input a number here"> &nbsp; 
                    <select name="border-radius_size[]">
                        <option value="px">px</option>
                        <option value="em">em</option>
                        <option value="rem">rem</option>
                    </select>
                </div> 
            </div>

            <!-- Border Color -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-color:
                </div>
                <div style="margin-left:-20px; margin-right:10px;">
                    #
                </div>
                <div>
                    <input type="text" name="border-color_color"  placeholder=" input a hex color code"> &nbsp; 
                </div> 
            </div>

            <!-- Border-width -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-width:
                </div>
                <div>
                    <select name="border-width">
                        <option disabled selected value="">select here</option>
                        <option value="thin">thin</option>
                        <option value="medium">medium</option>
                        <option value="thick">thick</option>
                    </select>
                </div>
            </div>

            <!-- Float -->
            <div class="prop">
                <div class="prop-sentence">
                    Float:
                </div>
                <div>
                    <select name="float">
                        <option disabled selected value="">select here</option>
                        <option value="left">left</option>
                        <option value="right">right</option>
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
                        <option disabled selected value="">select here</option>
                        <option value="pointer">pointer</option>
                        <option value="not-allowed">not-allowed</option>
                    </select>
                </div>
            </div>
            
            <!-- Opacity -->
            <div class="prop">
                <div class="prop-sentence">
                    Opacity: 
                </div>
                <div>
                    <input type="number" max="1" min="0" step="0.1" name="opacity" style="width:160px;" placeholder=" input a number here"> &nbsp;
                </div> 
            </div>

            <div class="prop" style="height: 40px; margin-top:30px;">
                <input type="submit" class="button button_submit"> &nbsp; &nbsp; &nbsp; 
            </div>
        </form>
        <h3 style="color: #0d6efd; font-weight: 600;">CSS:</h3>
        <div style="border: solid black 1px;">
            <?php
                if(isset($_POST)){
                    echo '<pre style="color:#da3f3d">';
                    echo htmlspecialchars('    .button_hasil {');
                    echo "<br>";
                    foreach ($_POST as $key => $value) {
                        if (is_array($value)){
                            if (strpos($key,"_size") !== false){
                                if($value[0] != ""){
                                    echo ("             ".explode("_",$key)[0].": ".$value[0].$value[1]."; \n");
                                }
                            }
                        }
                        else{
                            if (strpos($key,"_color") !== false){
                                if($value != ""){
                                    echo ("             ".explode("_",$key)[0].": #".$value."; \n");
                                } 
                            }
                            else {
                                if($value != "") {
                                    echo "             $key: $value; \n";
                                }
                            }
                        }
                    }
                    echo htmlspecialchars('    }');
                    echo '</pre>';
                }
            ?>
        </div>
        <br>


        <h3 style="color: #0d6efd; font-weight: 600;">Hasil Button:</h3>
        <button class="button_hasil">Button</button>
        <div style="height:30px; width:auto;"></div>
    </div>
</body>
</html>