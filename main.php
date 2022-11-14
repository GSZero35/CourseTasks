<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style1.css" />
</head>
<body>
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>
               <div class="break"></div>
               <?php include 'menu.inc.php' ?>	   
        </div>       
        
        <div class="about_me">
         
        <div class="data2">
                <h1>  <?php  echo $p  ?> </h1>
                <div class="myImg">
                    <?php  echo '<img src="img/200w.gif">'; ?>                    
                </div>
        </div>

            <div class="data">

                <div class="presentation"> 
                    <p> Это блог
                    <?php echo $name, ' ', $surname, ' из ', $city; ?>                                      
                    </p> 
           
                    <p> Автор ведёт блог уже
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Здесь я рассказываю о самых важных событиях города </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'statistics.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 5010;
                        $c = $b - $a;
                        echo "$c подписчиков с золотым статусом";
                    ?>   <br>                
                     <?php
                        echo $d;
                    ?> 

            </div>
        </div>
        <div class="article">
                <p class="text">
                    Все события и герои текстов этого блога вымышлены. Любые совпадения с реальными личностями случайны.
                </p>
            </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>