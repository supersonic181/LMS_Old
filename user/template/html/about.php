<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(!$_SESSION['loggedin']){
    header('Location: /');
} ?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
      About Us
    </title>
    <link rel="stylesheet" href="../css/about.css">

</head>
<body>
    <div class="about-section">
      <h1>About Us</h1>
      <p>Some text about who we are and what we do.</p>
      <p>Resize the browser window to see that this page is responsive by the way.</p>
    </div>
    <div class="contactInfo">
      <div class="developerTeam">
        <h2>DeveloperS Team</h2>
        <div class="row">
          <div class="column">
            <div class="card">
              <div class="container">
                <h2>Prof. Koushik Chatterjee</h2>
                <p class="title">CEO & Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>koushikchatterjee@example.com</p>
                <p><button class="button">Contact</button></p>
              </div>
            </div>
        </div>

      <div class="column">
        <div class="card">
          <div class="container">
            <h2>Subham Shaw</h2>
            <p class="title">Team Leader</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>subhamshaw@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
      
      <div class="column">
        <div class="card">
          <div class="container">
            <h2>Chayan Bag</h2>
            <p class="title">Assistance Team Leader</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>chayanbag@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
    </div>
      </div>

      <div class="librarianTeam">
        <h2>librarian team</h2>
        <div class="row">
      <div class="column">
        <div class="card">
          <div class="container">
            <h2>Prof. Koushik Chatterjee</h2>
            <p class="title">CEO & Founder</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>koushikchatterjee@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>

      <div class="column">
        <div class="card">
          <div class="container">
            <h2>Subham Shaw</h2>
            <p class="title">Team Leader</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>subhamshaw@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
      
      <div class="column">
        <div class="card">
          <div class="container">
            <h2>Chayan Bag</h2>
            <p class="title">Assistance Team Leader</p>
            <p>Some text that describes me lorem ipsum ipsum lorem.</p>
            <p>chayanbag@example.com</p>
            <p><button class="button">Contact</button></p>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
    </body>
    </html>