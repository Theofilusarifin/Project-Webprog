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
        .prop-input{
            color: #da3f3d;
            font-size: 16px;
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
                <?php
                    $width = "";
                    $width_px = "";
                    $width_em = "";
                    $width_rem = "";
                    if(isset($_POST['width_size'])){
                        $width = $_POST['width_size'][0];
                        
                        $width_size = $_POST['width_size'][1];
                        if ($width_size == "px") $width_px = "selected";
                        if ($width_size == "em") $width_em = "selected";
                        if ($width_size == "rem") $width_rem = "selected";
                    }
                ?>
                <div>
                    <input type="number" class="prop-input" name="width_size[]" placeholder=" input a number here" value="<?php echo $width ?>" > &nbsp; 
                    <select name="width_size[]" class="prop-input">
                        <option <?php echo $width_px ?> value="px">px</option>
                        <option <?php echo $width_em ?> value="em">em</option>
                        <option <?php echo $width_rem ?> value="rem">rem</option>
                    </select> 
                </div>
            </div>

            <!-- Height -->
            <div class="prop">
                <div class="prop-sentence">
                    Height : 
                </div>
                <?php
                    $height = "";
                    $height_px = "";
                    $height_em = "";
                    $height_rem = "";
                    if(isset($_POST['height_size'])){
                        $height = $_POST['height_size'][0];
                        
                        $height_size = $_POST['height_size'][1];
                        if ($height_size == "px") $height_px = "selected";
                        if ($height_size == "em") $height_em = "selected";
                        if ($height_size == "rem") $height_rem = "selected";
                    }
                ?>
                <div>
                    <input type="number" class="prop-input" name="height_size[]" placeholder=" input a number here" value="<?php echo $height ?>" > &nbsp; 
                    <select name="height_size[]" class="prop-input">
                        <option <?php echo $height_px ?> value="px">px</option>
                        <option <?php echo $height_em ?> value="em">em</option>
                        <option <?php echo $height_rem ?> value="rem">rem</option>
                    </select> 
                </div>
            </div>

            <!-- Padding -->
            <div class="prop">
                <div class="prop-sentence">
                    Padding: 
                </div>
                <?php
                    $padding = "";
                    $padding_px = "";
                    $padding_em = "";
                    $padding_rem = "";
                    if(isset($_POST['padding_size'])){
                        $padding = $_POST['padding_size'][0];
                        
                        $padding_size = $_POST['padding_size'][1];
                        if ($padding_size == "px") $padding_px = "selected";
                        if ($padding_size == "em") $padding_em = "selected";
                        if ($padding_size == "rem") $padding_rem = "selected";
                    }
                ?>
                <div>
                    <input type="number" class="prop-input" name="padding_size[]" placeholder=" input a number here" value="<?php echo $padding ?>" > &nbsp; 
                    <select name="padding_size[]" class="prop-input">
                        <option <?php echo $padding_px ?> value="px">px</option>
                        <option <?php echo $padding_em ?> value="em">em</option>
                        <option <?php echo $padding_rem ?> value="rem">rem</option>
                    </select>
                </div> 
            </div>

            <!-- Margin -->
            <div class="prop">
                <div class="prop-sentence">
                    Margin: 
                </div>
                <?php
                    $margin = "";
                    $margin_px = "";
                    $margin_em = "";
                    $margin_rem = "";
                    if(isset($_POST['margin_size'])){
                        $margin = $_POST['margin_size'][0];
                        
                        $margin_size = $_POST['margin_size'][1];
                        if ($margin_size == "px") $margin_px = "selected";
                        if ($margin_size == "em") $margin_em = "selected";
                        if ($margin_size == "rem") $margin_rem = "selected";
                    }
                ?>
                <div>
                    <input type="number" class="prop-input" name="margin_size[]" placeholder=" input a number here" value="<?php echo $margin ?>" > &nbsp; 
                    <select name="margin_size[]" class="prop-input">
                        <option <?php echo $margin_px ?> value="px">px</option>
                        <option <?php echo $margin_em ?> value="em">em</option>
                        <option <?php echo $margin_rem ?> value="rem">rem</option>
                    </select>  &nbsp;
                </div> 
            </div>

            <!-- Text-align -->
            <div class="prop">
                <div class="prop-sentence">
                    Text-align :
                </div>
                <?php
                    $center = "";
                    $right = "";
                    $left = "";
                    if (isset($_POST['text-align'])){
                        $text_align = $_POST['text-align'];
                        if ($text_align == "center") $center = "selected";
                        if ($text_align == "right") $right = "selected";
                        if ($text_align == "left") $left = "selected";
                    }
                ?>
                <div>
                    <select name="text-align" class="prop-input">
                        <option disabled selected value="">select here</option>
                        <option <?php echo $center ?> value="center">center</option>
                        <option <?php echo $right ?> value="right">right</option>
                        <option <?php echo $left ?> value="left">left</option>
                    </select>
                </div>
            </div>

            <!-- Text Decoration -->
            <div class="prop">
                <div class="prop-sentence">
                    Text-decoration:
                </div>
                <?php
                    $none = "";
                    $underline = "";
                    $overline = "";
                    $line_through = "";
                    if (isset($_POST['text-decoration'])){
                        $text_decoration = $_POST['text-decoration'];
                        if ($text_decoration == "none") $none = "selected";
                        if ($text_decoration == "underline") $underline = "selected";
                        if ($text_decoration == "overline") $overline = "selected";
                        if ($text_decoration == "line-through") $line_through = "selected";
                    }
                ?>
                <div>
                    <select name="text-decoration" class="prop-input">
                        <option disabled selected value="">select here</option>
                        <option <?php echo $none ?> value="none">none</option>
                        <option <?php echo $underline ?> value="underline">underline</option>
                        <option <?php echo $overline ?> value="overline">overline</option>
                        <option <?php echo $line_through ?> value="line-through">line-through</option>
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
                <?php
                    $color = "";
                    if (isset($_POST['color_color'])){
                        $color = $_POST['color_color'];
                    }
                ?>
                <div>
                    <input type="text" class="prop-input" name="color_color" placeholder=" input a hex color code" value="<?php echo $color ?>" >
                </div> 
            </div>   

            <!-- Font-size -->
            <div class="prop">
                <div class="prop-sentence">
                    Font-size : 
                </div>
                <?php
                    $font_size = "";
                    $font_size_px = "";
                    $font_size_em = "";
                    $font_size_rem = "";
                    if(isset($_POST['font-size_size'])){
                        $font_size = $_POST['font-size_size'][0];
                        
                        $font_size_size = $_POST['font-size_size'][1];
                        if ($font_size_size == "px") $font_size_px = "selected";
                        if ($font_size_size == "em") $font_size_em = "selected";
                        if ($font_size_size == "rem") $font_size_rem = "selected";
                    }
                ?>
                <div>
                    <input type="number" class="prop-input" name="font-size_size[]" placeholder=" input a number here" value="<?php echo $font_size ?>" >&nbsp;
                    <select name="font-size_size[]" class="prop-input">
                        <option <?php echo $font_size_px ?> value="px">px</option>
                        <option <?php echo $font_size_em ?> value="em">em</option>
                        <option <?php echo $font_size_rem ?> value="rem">rem</option>
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
                <?php
                    $background_color = "";
                    if (isset($_POST['background-color_color'])){
                        $background_color = $_POST['background-color_color'];
                    }
                ?>
                <div>
                    <input type="text" class="prop-input" name="background-color_color" placeholder=" input a hex color code" value="<?php echo $background_color ?>" >
                </div> 
            </div>       

            <!-- Border Radius -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-radius: 
                </div>
                <?php
                    $border_radius = "";
                    $border_radius_px = "";
                    $border_radius_em = "";
                    $border_radius_rem = "";
                    if(isset($_POST['border-radius_size'])){
                        $border_radius = $_POST['border-radius_size'][0];
                        
                        $border_radius_size = $_POST['border-radius_size'][1];
                        if ($border_radius_size == "px") $border_radius_px = "selected";
                        if ($border_radius_size == "em") $border_radius_em = "selected";
                        if ($border_radius_size == "rem") $border_radius_rem = "selected";
                    }
                ?>
                <div>
                    <input type="number" class="prop-input" name="border-radius_size[]" placeholder=" input a number here" value="<?php echo $border_radius ?>"> &nbsp; 
                    <select name="border-radius_size[]" class="prop-input">
                        <option <?php echo $border_radius_px ?> value="px">px</option>
                        <option <?php echo $border_radius_em ?> value="em">em</option>
                        <option <?php echo $border_radius_rem ?> value="rem">rem</option>
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
                <?php
                    $border_color = "";
                    if (isset($_POST['border-color_color'])){
                        $border_color = $_POST['border-color_color'];
                    }
                ?>
                <div>
                    <input type="text" class="prop-input" name="border-color_color" placeholder=" input a hex color code" value="<?php echo $border_color ?>" > &nbsp; 
                </div> 
            </div>

            <!-- Border-width -->
            <div class="prop">
                <div class="prop-sentence">
                    Border-width:
                </div>
                <?php
                    $thin = "";
                    $medium = "";
                    $thick = "";
                    if (isset($_POST['border-width'])){
                        $border_width = $_POST['border-width'];
                        if ($border_width == "thin") $thin = "selected";
                        if ($border_width == "medium") $medium = "selected";
                        if ($border_width == "thick") $thick = "selected";
                    }
                ?>
                <div>
                    <select name="border-width" class="prop-input">
                        <option disabled selected value="">select here</option>
                        <option <?php echo $thin ?> value="thin">thin</option>
                        <option <?php echo $medium ?> value="medium">medium</option>
                        <option <?php echo $thick ?> value="thick">thick</option>
                    </select>
                </div>
            </div>

            <!-- Float -->
            <div class="prop">
                <div class="prop-sentence">
                    Float:
                </div>
                <?php
                    $left = "";
                    $right = "";
                    if (isset($_POST['float'])){
                        $float = $_POST['float'];
                        if ($float == "left") $left = "selected";
                        if ($float == "right") $right = "selected";
                    }
                ?>
                <div>
                    <select name="float" class="prop-input">
                        <option disabled selected value="">select here</option>
                        <option <?php echo $left ?> value="left">left</option>
                        <option <?php echo $right ?> value="right">right</option>
                    </select>
                </div>
            </div>

            <!-- Cursor -->
            <div class="prop">
                <div class="prop-sentence">
                    Cursor:
                </div>
                <?php
                    $pointer = "";
                    $not_allowed = "";
                    if (isset($_POST['cursor'])){
                        $cursor = $_POST['cursor'];
                        if ($cursor == "pointer") $pointer = "selected";
                        if ($cursor == "not-allowed") $not_allowed = "selected";
                    }
                ?>
                <div>
                    <select name="cursor" class="prop-input">
                        <option disabled selected value="">select here</option>
                        <option <?php echo $pointer ?> value="pointer">pointer</option>
                        <option <?php echo $not_allowed ?> value="not-allowed">not-allowed</option>
                    </select>
                </div>
            </div>
            
            <!-- Opacity -->
            <div class="prop">
                <div class="prop-sentence">
                    Opacity: 
                </div>
                <div>
                    <?php
                        $opacity = "";
                        if (isset($_POST['opacity'])){
                            $opacity = $_POST['opacity'];
                        }
                    ?>
                    <input type="number" class="prop-input" max="1" min="0" step="0.1" name="opacity" style="width:160px;" placeholder=" input a number here" value="<?php echo $opacity ?>" > &nbsp;
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
<script>
    $(document).ready(function(){
        $('#clear_button').click(function(){
            <?php
                unset($_POST);
            ?>
        });
    });
</script>
</html>