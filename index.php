<!DOCTYPE html>
<html>
   <head>
      <!-- Metadata -->
      <meta charset="utf-8">
      <meta name="description" content="For Loops, with PHP">
      <meta name="keywords" content="immaculata, ics2o">
      <meta name="author" content="Marcus Wehbi">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Link for favicon -->
      <link rel="icon" href="./fav_index/favicon.ico">
      <link rel="manifest" href="./fav_index/site.webmanifest">
      <!-- Link for stylesheet -->
      <link rel="stylesheet" href="./css/style.css">
      <!-- Webpage title -->
      <title>Product Of Numbers Display</title>
   </head>
   <body>
      <!-- Webpage headers -->
      <h1>Product Of Numbers Display, in PHP</h1>
      <h3>This program will display the product of two numbers, using addition.</h3>
      <!-- Table to format page (form, image, etc.) -->
      <table>
         <tr align = "center">
            <td valign="top" align="right">
               <!-- Form to retrieve information (Users two integers of choice) -->
               <form action="./display.php" method="post" target="result">
                  <label for="int-one">Number 1:</label>
                  <input type="number" step="1" name="int-one" id="int-one"><br><br>
                  <label for="int-two">Number 2:</label>
                  <input type="number" step="1" name="int-two" id="int-two"><br><br>
                  <br><br>
                  <input type="submit" value="Display Even #'s">
               </form>
            </td>
            <!-- Image (multiplication) -->
            <td valign="top" align="left">
               <img src="./images/mmh.jpeg" alt="Numbers" width="40%">
            </td>
         </tr>
      </table>
      <!-- Iframe for results -->
      <iframe id="result" name="result">
      </iframe>
   </body>
</html>