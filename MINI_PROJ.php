<!doctype html>
<html>
    <head>
        <title>Expert system</title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            .content{
                height: 100vh;
                width: 100%;
                background-image: url(img.jpg);
                background-size: cover;
                background-position: relative;
                justify-content: center;
                display: flex;
                align-items: center;
                
            }
            .great{
                width: 800px;
                height: 650px;
                background-color: black;
                align-items: center;
                text-align: center;
                padding-top: 17%;
                opacity: 70%;
                
            }
            .great.form{
                text-align: center;
                align-items: center;
            }
            .name{
                height: 55px;
                width: 400px;
                text-align: center;
                margin-bottom: 8%;
                font-size: 20px;
                border-radius: 30px;
                border: none;
                transition: .4s;
                

            }
            .name:hover{
                transform: scale(1.2);

            }
            .Button{
                height: 55px;
                width: 400px;
                font-size: 20px;
                background-color:green;
                opacity: 100%;
                color: white;
                border-radius: 30px;
                transition: .4s;
                border: none;

            }
            .Button:hover{
                background-color: green;
                transform: scale(1.2);
                opacity: 100%;
               

            }
            .dignosis{
                background-color: #222;
                height: 2500px;
                width: 100%;
                text-align: center;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .card{
                text-align: center;
                height: 150px;
                width:600px;
                background-color:#111;
                font-size: 25px;
                padding: 3%;
                color: green;

            }
            .Submit{
                width: 250px;
                margin-top: 10px;
                height: 55px;
                border: 2px solid green;
                border-radius: 30px;
                background-color: transparent;
                font-size: 25px;
                color: white;
                text-transform: uppercase;
                
            }
            .Submit:hover{
                background-color: green;

            }
            .head{
                height :200px;
                background-color:#111;
                color:white;
                text-align:center;
                justify-content:center;
                padding-top:60px;
                font-size:40px
            }
            
            
           

        </style>




    </head>
    <body>
        <section class="content">
            <div class="great">
        <form class="form" method="post" action="#head">
            <input class="name" type="text" name="name"  placeholder="Enter your name"><br>
            <input class="Button" type="submit" name="Subs" value="Start My Diagnosis !" >
        </form>
       
    </div>
    </section>
    <section class="head" id="head">
    <h1>Hi!
<?php
if(isset($_POST['Subs'])){
$name=$_POST["name"];
echo $name ;
}
?>

 Start Your Diagnosis 
        </h1>
    </section>
    <section class="dignosis"id="dignosis">
        
        <form method="post" action="">
            <div class="card">
            <label>Do You Experience Headache ?</label> <br>
            <input type="radio" name="Headache" value="yes" required>
            <label for="yes">Yes</label><br>
            
            <input type="radio" name="Headache" value="no" required>
            <label for="no">No</label>
        </div>
            <br>
            <div class="card">
            <label>Do You Experience back pain ?</label> <br>
            <input type="radio" name="back_pain" value="yes" required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="back_pain" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience chest pain ?</label> <br>
            <input type="radio" name="chest_pain" value="yes" required>
            <label for="yes">Yes</label><br>
            <input type="radio" name="chest_pain" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience cough ?</label> <br>
            <input type="radio" name="cough" value="yes"required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="cough" value="no"required >
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience fainting ?</label> <br>
            <input type="radio" name="fainting" value="yes" required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="fainting" value="no" required >
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience sore throat ?</label> <br>
            <input type="radio" name="sore_throat" value="yes" required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="sore_throat" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience fatigue ?</label> <br>
            <input type="radio" name="fatigue" value="yes" required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="fatigue" value="no" required >
            <label for="no">No</label>
            </div>

            <br>
            <div class="card">
            <label>Do You Experience restlessness ?</label> <br>
            <input type="radio" name="restlessness" value="yes" required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="restlessness" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience low body temp ?</label> <br>
            <input type="radio" name="low_body_temp" value="yes" required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="low_body_temp" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience fever ?</label> <br>
            <input type="radio" name="fever" value="yes" required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="fever" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience sunken eyes ?</label> <br>
            <input type="radio" name="sunken_eyes" value="yes" required>
            <label for="yes">Yes</label><br>
            <input type="radio" name="sunken_eyes" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience nausea ?</label> <br>
            <input type="radio" name="nausea" value="yes" required>
            <label for="yes">Yes</label><br>
            <input type="radio" name="nausea" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            <div class="card">
            <label>Do You Experience blurred vision ?</label> <br>
            <input type="radio" name="blurred_vision" value="yes"required >
            <label for="yes">Yes</label><br>
            <input type="radio" name="blurred_vision" value="no" required>
            <label for="no">No</label>
            </div>
            <br>
            
            <input class="Submit"type="submit" name="Sub" value="submit">
        
            </form>
    </section>
    </body>
</html>

<?php
if(isset($_POST["Sub"])){

$a=$_POST["Headache"];
$b=$_POST["back_pain"];
$c=$_POST["chest_pain"];
$d=$_POST["cough"];
$e=$_POST["fainting"];
$f=$_POST["sore_throat"];
$g=$_POST["fatigue"];
$h=$_POST["restlessness"];
$i=$_POST["low_body_temp"];
$j=$_POST["fever"];
$k=$_POST["sunken_eyes"];
$l=$_POST["nausea"];
$m=$_POST["blurred_vision"];

$z=$a.$b.$c.$d.$e.$f.$g.$h.$i.$j.$k.$l.$m;

if($z=='nonononononoyesnonoyesnoyesno'){
   
    echo'<script>alert("You are likely to suffer from Jaundice ")</script>';
}
elseif($z=='nononononononoyesnonononono'){
    echo"Alzheimers";
    echo'<script>alert("You are likely to suffer from Alzheimers")</script>';
}
elseif($z=='noyesnonononoyesnononononono'){
    echo"Arthritiss";
    echo'<script>alert("You are likely to suffer from Arthritiss")</script>';
}
elseif($z=='nonoyesyesnononononoyesnonono'){
    echo"Tuberculosis";
    echo'<script>alert("You are likely to suffer from Tuberculosis")</script>';
}
elseif($z=='nonoyesyesnononoyesnonononono'){
    echo"Asthma";
    echo'<script>alert("You are likely to suffer from Asthma")</script>';
}
elseif($z=='yesnonoyesnoyesnononoyesnonono'){
    echo"Sinusitis";
    echo'<script>alert("You are likely to suffer from Sinusitis")</script>';
}
elseif($z=='nonononononoyesnononononono'){
    echo"Epilepsy";
    echo'<script>alert("You are likely to suffer from Epilepsy")</script>';
}
elseif($z=='nonoyesnonononononononoyesno'){
    echo"Heart Disease";
    echo'<script>alert("You are likely to suffer from Heart Disease")</script>';
}
elseif($z=='nonononononoyesnonononoyesyes'){
    echo"Diabetes";
    echo'<script>alert("You are likely to suffer from Diabetes")</script>';
}
elseif($z=='yesnonononononononononoyesyes'){
    echo"Glaucoma";
    echo'<script>alert("You are likely to suffer from Glaucoma")</script>';
}
elseif($z=='nonononononoyesnonononoyesno'){
    echo"Hyperthyroidism";
    echo'<script>alert("You are likely to suffer from Hyperthyroidism")</script>';
}
elseif($z=='yesnonononononononoyesnoyesno'){
    echo"Heat Stroke";
    echo'<script>alert("You are likely to suffer from Heat Stroke")</script>';
}
elseif($z=='nonononononononononononono'){
   echo"You are fine";
   echo'<script>alert("You are fine")</script>';

}
elseif($z=='yesyesyesyesyesyesyesyesyesyesyesyesyes'){
    echo"You need to consider immediate medical attention";
    echo'<script>alert("You need to consider immediate medical attention")</script>';
 
 }
 else{
     echo"you don't have any disease from above list";
     echo'<script>alert("you dont have any disease from above list")</script>';
 }
}

?>