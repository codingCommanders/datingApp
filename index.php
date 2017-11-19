<!DOCTYPE html>
<html>
 <head>
  <title>Dateability Score</title>
 </head>
 <body>
   <form method="post" action="main.php">
     <h1>What is your Dateability Score?</h1>
     <!-- Text Input-->
     <label>First Name:</label><br>
     <input type="text" name="first" placeholder
      ="First Name" required><br>
     <label>Last Name:</label><br>
     <input type="text" name="last" placeholder=
     "Last Name"><br>
     <label>Email:</label><br>
     <input type="email" name="email" placeholder=
     "youremail@email.com" required><br>
     <!-- q1-->
     <label>How well can you program?</label><br>
     <select name="q1">
       <option for="q1" value="1">Expert</option>
       <option for="q1" value="2">Average</option>
       <option for="q1" value="3">Below Average/No Experience</option>
     </select><br> 
     <!-- q2-->
     <label>What is your ideal first date?</label><br>
     <select name="q2">
       <option for="q2" value="1">Coffee Shop</option>
       <option for="q2" value="2">Dinner and Computer Programming</option>
       <option for="q2" value="3">Your House</option>
       <option for="q2" value="4">Dinner and a Movie</option>
       <option for="q2" value="5">Slipknot Concert</option>
     </select><br>
     <!-- q3-->
     <label>What is your highest level of education?</label><br>
     <select name="q3">
       <option for="q3" value="1">No College Degree</option>
       <option for="q3" value="2">BA/BS</option>
       <option for="q3" value="3">Graduate Degree</option>
     </select><br>
     <!-- q4-->
     <label>What is your idea of a romantic evening?</label><br>
     <select name="q4">
       <option for="q4" value="1">Romantic Comedy</option>
       <option for="q4" value="2">PluralSight and Chill</option>
       <option for="q4" value="3">"Hey baby, do you wanna come over?</option>
     </select><br>
     <!-- q5-->
     <label>Do you like sci-fi?</label><br>
     <input type="radio" name="q5" value="1">Yes</input><br>
     <input type="radio" name="q5" value="2">No</input><br>
     <!-- q6-->
     <label>Do you know embedded systems?</label><br>
     <input type="radio" name="q6" value="1">Yes</input><br>
     <input type="radio" name="q6" value="2">No</label><br>
     <!-- q7-->
     <label>We are coding at your house.  You order in dinner.  When the dinner arrives, my order is wrong.  What do you do?</label><br>
     <select name="q7">
       <option for="q7" value="1">Call and have my order corrected</option>
       <option for="q7" value="2">Call and get a get a free meal the next time you order.</option>
       <option for="q7" value="3">Ask me how to proceed</option>
       <option for="q7" value="4">Tell me to suck it up.</option>
    </select><br><br>
    <!-- q8--> 
    <label>Would you play tag with me?</label><br>
    <input type="radio" name="q8" value="1">Yes</input><br>
    <input type="radio" name="q8" value="2">No</input><br>
    <!-- Submit button-->
    <input type="submit" name="submit">       
   </form>
 </body>
</html>


