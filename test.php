<!DOCTYPE html> 
<html lang="en-us">

<!-- Typical layout format for css and screen layout -->  
<head>
  <link rel="stylesheet" type="text/css" href="test.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="js/tabs.js"></script>
  <title>Art by Karina Padgett</title>
</head>

<!-- Random PHP code pre body idk if it works -->
<body>
  <h1>
    <?php echo $_SERVER['HTTP_USER_AGENT']; ?>
    <?php echo '<p>This is a test example of what the website would look like</p>'; ?>
  </h1> 

<!-- Tab Links -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')">Home</button>
  <button class="tablinks" onclick="openCity(event, 'Artwork')">Artwork</button>
  <button class="tablinks" onclick="openCity(event, 'Support')">Support</button>
  <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
</div>


<!-- Load an icon library -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Tabs -->
<div class="navbar">
  <a class="active" href="#Home"><i class="fa fa-fw fa-Home"></i>Home</a>
  <a href="#Artwork"><i class="fa fa-fw fa-Artwork"></i>Artwork</a>
  <a href="#Support"><i class="fa fa-fw fa-Support"></i>Support</a>
  <a href="#Contact"><i class="fa fa-fw fa-Contact"></i>Contact</a>
</div>

<!-- Start of the info within tabs -->
<div class="tab content">
  <div id="Home" class="tab-pane fade in active">
  <h2>Home</h2>
  <p>This is going to be the the sample sheet where we talk about how amazing karina is
  and the inspiration for her art</p>
  </div>
  
  <div id="Artwork" class="tab-pane fade">
  <h3>Artwork</h3>
  <p>This will be the placement for the artwork display</p>
  </div>

  <div id="Support" class="tab-pane fade">
  <h4>Support</h4>
  <p>We will put multiple links to different areas that can reach out to you; maybe a donate link?</p>
  </div>

  <div id="Contact" class="tab-pane fade">
  <h5>Contact</h5>
  <p>This will be email contact information and phone number, however much is needed</p>
  </div> 


</body>

</html>