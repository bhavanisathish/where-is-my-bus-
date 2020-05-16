<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the h1 element */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: flex;
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width:100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>BUS LINE</h1>
  <p>To make people comfort.</p>
</div>

<div class="navbar">
  <a href="startpage.php">home</a>
  <a href="contact.php">contact</a>
  <a href="login.php" class="right">User</a>
  <a href="adminlogin.php" class="right">Admin</a>
</div>

<div class="row">
  <div class="side">
    <h2>Bus</h2>
    <h5>State Bus</h5>
    
    <div class="fakeimg" style="height:400px;"><img src="bus3.png"  style="height:350px; width: 300px" ></div>
    
    <h3>Olden Bus</h3>
   
    <div class="fakeimg" style="height:400px;"><img src="bus1.png"  style="height:350px; width: 310px" ></div><br>
    
  </div>
  <div class="main">
    <h2>Government Bus</h2>
    <div class="fakeimg" style="height:400px;"><img src="bus2.png"  style="height:350px; width: 800px" ></div>
   
    <p>TNSTC is fully owned and operated by the Government of Tamil Nadu. TNSTC has started online booking facilities [1] to book bus tickets between major cities served by TNSTC. It caters to all the districts within Tamil Nadu and also operates services to neighboring states of Andhra Pradesh, Karnataka, Kerala and union territory of Puduchery. Until 1997, transport corporation was bifurcated into 21 divisions which was later merged to form 8 divisions. TNSTC owns 321 depots and five workshops. TNSTC also offers contract and tourist services. Every bus owned by the corporation displays a portrait of Tamil poet Thiruvalluvar along with a two line verse from Thirukkural inside the bus. TNSTC is the largest government bus transport corporation in India also biggest corporation in the world after bifurcation of APSRTC.</p>
    <br>
    <h2>TNSTC operates buses of various classes to cater to different sections of the public:</h2>
 
    <p>

Town buses and low floor buses operated on intercity routes.
Moffussil buses, largest in its stable, ply on inter-town routes and cater to a majority of the traffic
Deluxe buses operated between major Cities.
Ultra deluxe coaches with recliner seats, operated between important commercial centres to major cities.
Air-conditioned buses operated in intracity routes operated by MTC.
Air-conditioned busses with 3*2 seat configuration named as Economy AC seater services were introduced in 2019 connecting all district headquarters to major towns.
SETC operates Air-conditioned buses from all district headquarters to Chennai.
A/C Seater cum Sleeper and A/C Sleeper buses are operated between major cities and towns to Chennai and Bengaluru as well as other major cites and interstate.
Non-A/C Seater cum Sleeper and Non-A/C Sleeper are also operated.

TNSTC AC bus operated by Coimbatore division
TNSTC and SETC use custom made buses built on Ashok Leyland and TATA supplied chassis. All divisions have individual own coach building units..</p>
  </div>
</div>

<div class="footer">
  <h2>A bus is a vehicle that runs twice as fast when you are after it as when you are in it.     
</h2>
</div>

</body>
</html>