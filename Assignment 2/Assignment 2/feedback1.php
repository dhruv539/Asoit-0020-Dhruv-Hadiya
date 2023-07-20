<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <style>
        #maindiv{
            margin: auto;
       width: 450px;
       min-height: 260px;
       margin-top: 25px;
            /* text-align: center;
            justify-content: center; */
            /* width: 490px; */
            /* box-shadow: 2px solid black; */
            border: 2px solid black;
            
           
        }

        #input1,#input2{ 
            width: auto;
            border-radius: 5px;
            border: 2px solid white;
            background-color: bisque;
            box-sizing: border-box;
            z-index: -1;
            padding: 8px;
        }

        #textview{
            width: 180px;
            border-radius: 5px;
            border: 2px solid white;
            background-color: bisque;
            box-sizing: border-box;
            margin-right: 78px;
            min-width: 181px;
            min-height: 20px;
            padding: 9px;
        }

    </style>

</head>
<body >
        
        <div id="maindiv" style="background-color: bisque;">
        <form method="post" action="feedbackphp.php" style=" text-align: center; flex-direction: column; display: flex;">
        <h3 style="  text-decoration: dotted; position: relative;" >Give Your FeedBack</h3>
        <div><input id="input1" type="text" name="name" placeholder="Enter your name" required style="margin-bottom: 10px;" ></div>
        <div><input id="input2" type="email" name="gmaill" placeholder="Enter your Gmail" required style="margin-bottom: 10px;" class="validate[required,custom[email]] feedback-input"></div>
        <!-- <input type="password" name="password" placeholder="enter password" style="margin-bottom: 10px;"><br> -->
        <!-- <label for="fb">Feedback</label> -->
        <div><textarea name="feedback" id="textview"  placeholder="Write Your Feedback" style="margin-bottom: 10px; margin-left: 75px;"></textarea></div>
       <div> <input type="submit" name="submit" style="color: red;"> </div>
        

    </form>
    </div>
    
</body>
</html>