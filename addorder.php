<html>
<head>
    <title>New Express Order</title>
    <link href="css/stylesheet.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="fire">
    <main>
        <a href="http://www.pekoe.com" alt="Pekoe Homepage"><img class="logo" src="images/pekoelogo.png" alt="Pekoe Logo" ></a>
        <form action="http://creative.colorado.edu/~dosm6711/web/projects/pekoeexpress/orderadded.php" method="post">

        <h1><strong>EXPRESS ORDER</strong></h1>
            
        <div class="name">
            <p id="nametag"><b>Name:</b>
                <input type="text" name="first_name" size="30"  />
            </p>
        </div>
        
        <div class="choice"> 
            
            <label class="coffee" >
            <input type="radio" name="choice" value="coffee" /><img class="fish" src="images/coffee.png">
            </label>
            
            <label class="tea">
            <input type="radio" name="choice" value="tea" /><img class="fish" src="images/tea.png">
            </label>
            
        </div> 
        
        <div class="sizes">
            <h2><p>Size</p></h2>
            
            
                <label >
                <input type="radio" name="size"  value="S" /><img class="button" src="images/s.png">
                </label>

                <label >
                <input type="radio" name="size"  value="M" /><img class="button" src="images/m.png">
                </label> 

                <label >
                <input  type="radio" name="size"  value="L" /><img class="button" src="images/l.png">
                </label> 
        </div>
            
        
        <div class="cream">
            <h2><p>Cream</p></h2>
            
            <label >
            <input type="radio" name="cream"  value="YES" /><img class="button" src="images/yes.png">
            </label>
            
            <label >
            <input type="radio" name="cream"  value="NO" /><img  class="button" src="images/no.png">
            </label>
            
        </div>
            
        
        <div class="sugar">
            <h2><p>Sugar</p></h2>
            
            <label >
            <input type="radio" name="sugar"  value="YES" /><img class="button" src="images/yes.png">
            </label>
            
            <label >
            <input  type="radio" name="sugar"  value="NO" /><img class="button" src="images/no.png">
            </label>
            
        </div>
        
        <div class="submit">
        <p>
        <input type="submit" name="submit" value="Send it!" />
        </p>
        </div>

        </form>
    </main>
    </div>
</body>
</html>