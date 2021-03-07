<!DOCTYPE html>
<html>
  <head>
  <title>Hello, document</title>
  </head>
  <body>
  <a href="contact.html">Refresh</a>
  <div>
  <ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="projects.html">Projects</a></li>
  </ul>
  </div>
  <h1>A heading</h1>
  <p>a lead paragraph</p>
  <section>
  <ul>
  <?php include("contact_process.php"); ?>
  <form method="get" action="#">
  <?php foreach ($errors as $value){
	  echo "<li>$value</li>";
  } ?>
  </ul>
  <form>
  <label>name</label> <input type="text" required name="name" /><br />
  <label>email</label> <input type="text" required name="email" /><br />
  <input type="radio" name="reason" value="feedback" /> <label>
feedback</label><br />
  <input type="radio" name="reason" value="bug" /> <label>bug</label><br />
  <input type="radio" name="reason" value="question" /> <label>
question</label><br />
  <label>message</label><br />
  <textarea cols="120" rows="5" name="message"></textarea><br />
  <input type="submit" value="send" />
  </form>
  </section>
  <footer>
  <p>A copyright notice</p>
  <ul>
  <li><a href="">link1</a></li>
  <li><a href="">link2</a></li>
  <li><a href="">link3</a></li>
  </ul>
  </footer>
  </body>
</html>
