<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customize Your Mug</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/my.css">
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/my.js"></script>
    </head>

    <body>
        <div id="main-container" class="w3-card-4 test"> 
            <header class="w3-container w3-blue">
                <h1><center>Customize Your Mug</center></h1>
            </header>
            <div class="w3-container" id="mug-image">
                <div id="mug-image-container" background="images/white.png"><div id="mug-text-container"></div></div>
            </div>
            <footer class="w3-container w3-blue">
                <h5>
                    <select class="w3-select" name="option" id="mug-color">
                        <option value="white">White</option>
                        <option value="blue">Blue</option>
                        <option value="cyan">Cyan</option>
                        <option value="green">Green</option>
                        <option value="magenta">Magenta</option>
                        <option value="red">Red</option>
                        <option value="yellow">Yellow</option>
                    </select>
                </h5>
                <h5>
                    <input class="w3-input w3-border" type="text" id="mug-text" placeholder="Text" value="I'm a Mug!">
                </h5>
                <h5>
                    <center><button class="w3-button w3-white w3-border" id="submit-button">Submit</button></center>
                </h5>
            </footer>
        </div>
    </body>

</html>