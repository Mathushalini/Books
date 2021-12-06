<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <title>
            Html
        </title>
        <style>
            input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
        </style>
    </head>
    <body>
       <div class="main">

            <nav class="navbar">
                <img class="logo" src="book3.jpg">
                <ul>
                    <li class="item"> <a href="#home">Home</a></li>
                    <li class="item"> <a href="#about">About</a></li>
                    <li class="item"> <a href="#contact">Contactus</a></li>
                </ul>
            </nav>
            <div class="content" style="margin-left:20%";>
                <h1 font-size:"80px">A World belongs to those Who read</h1><br>
                <p>Reading is by far the most successful pursuit of happiness.</p>
                <button class="button1"><a href="page.php">NEXT</a></button>
                
            </div>
        </div>
        <section id="about"  style="text-align:center;background-color:	lightpink;height:70vh;">
            <h1 style="font-family:cursive;padding-top:5px;">About</h1><hr>
            <p style="font-size:1.5rem;padding:5px 5px;"><p>A book is a medium for recording information in the form of writing or images, typically composed of many pages (made of papyrus, parchment, vellum, or paper) bound together and protected by a cover.[1] The technical term for this physical arrangement is codex (plural, codices). In the history of hand-held physical supports for extended written compositions or records, the codex replaces its predecessor, the scroll. A single sheet in a codex is a leaf and each side of a leaf is a page.</p>
        </section>
        <section id="contact">
        <div style=" border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;">
  <form action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Phone Number</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Contact US">
  </form>
</div>
        </section>
      </body>
</html>