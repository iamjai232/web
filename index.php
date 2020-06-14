
<?php
session_start(); 
if (!isset($_SESSION['username'])) { 
    $_SESSION['msg'] = "You have to log in first"; 
    header('location: login.php'); 
} 
if (isset($_GET['logout'])) { 
    session_destroy(); 
    unset($_SESSION['username']); 
    header("location: login.php"); 
} 
?> 
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="def.css">
	<link rel="stylesheet" href="login.php">
	<link rel="stylesheet" href="style.css">

	<title>Defence Forces</title>
</head>
<div id="q">
<body>
	<?php if (isset($_SESSION['success'])) : ?> 
            <div class="error success" > 
                <h3> 
                    <?php
                        echo $_SESSION['success'];  
                        unset($_SESSION['success']); 
                    ?> 
                </h3> 
            </div> 
        <?php endif ?> 
   
        <!-- information of the user logged in -->
        <!-- welcome message for the logged in user -->
        <?php  if (isset($_SESSION['username'])) : ?> 
            <p> 
            	<style>
            		p{
            			text-align: left;
            		}
            	</style>
                Welcome  
                <strong> 
                    <?php echo $_SESSION['username']; ?> 
                </strong> 
            </p>
            <p>  
                <a href="index.php?logout='1'" style="color: red;"> 
                    Click here to Logout 
                </a> 
            </p> 
        <?php endif ?> 
    
<style>
	body {
  font-size: 18px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: black;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: black;
}
</style>
</head>
<body>


	
	<div id="A">
	<h1 style="color: black;"> DEFENCE FORCES</h1>
</div>
<br>
<br>
<div class="B">
	<a href="https://joinindianarmy.nic.in/" target="_blank">
	<img src="https://govtjobguru.in/wp-content/uploads/2019/11/indian-army-recruitment-rally-tezpur-aro-shillong.jpg" height="250" width="350" hspace="60" target="_blank">
	<a href="https://indianairforce.nic.in/" target="_blank">
	<img src="https://www.careerindia.com/img/600x40/2018/10/1-1538984817.jpg" height="250" width="350" hspace="100" target="_blank">
	<a href="https://www.joinindiannavy.gov.in/" target="_blank">
	<img src="https://yoyosarkari.com/wp-content/uploads/2019/06/Join-Indian-Navy-Jobs-2019.png" height="250" width="300" hspace="20" target="_blank">
</a>
</a>
</a>
</div>
<br>
<br>
<br>
<h1 style="color: black;">CHIEF OF INDIAN ARMY</h1>
<p>General Manoj Mukund Naravane (born 22 April 1960) PVSM, AVSM, SM, VSM, ADC is a Four Star general of the Indian Army and the 28th Chief of the Army Staff (COAS).[4] He took over from General Bipin Rawat on 31 December 2019 after the latter completed his term as the COAS. Prior to his appointment as the COAS, the general has served as the 40th Vice Chief of Army Staff (VCOAS) of the Indian Army, General Officer Commanding-in-Chief (GOC-in-C) of Eastern Command and General Officer Commanding-in-Chief of Army Training Command.Naravane hails from a Marathi Brahmin family.[7][8] His father, Mukund Naravane, is a former officer in the Indian Air Force who retired in the rank of Wing Commander and his mother Sudha was an announcer with the All India Radio.[9][10] He completed his schooling at the Jnana Prabodhini Prashala in Pune.

Naravane is an alumnus of National Defence Academy, Pune and Indian Military Academy, Dehradun. He also holds a master's degree in Defence Studies from University of Madras, Chennai and an M.Phil. in Defence and Management Studies from Devi Ahilya Vishwavidyalaya, Indore. Naravane has attended the Defence Services Staff College, Wellington and the Army War College, Mhow.</p>
<style>
	p{
		text-align: center;
		color: white;
	}
</style>
<div class= "container">
<div class="image">
<img src="https://upload.wikimedia.org/wikipedia/commons/2/26/General_Manoj_Mukund_Naravane%2C_PVSM%2C_AVSM%2C_SM%2C_VSM%2C_ADC_takes_over_as_the_Chief_of_Army_Staff_COAS_of_the_Indian_Army.jpg"class="image">
<div class="overlay">
<div class="text">GENERAL MANOJ MUKUND NARAVANE</div>
</div>
</div>
</div>
<br>
<br>
<br>
<h1 style="color: black;">CHIEF OF INDIAN AIRFORCE</h1>
<p>Air Chief Marshal Rakesh Kumar Singh Bhadauria, PVSM, AVSM, VM, ADC is the current Chief of the Air Staff of the Indian Air Force and assumed office on 30 September 2019 after superannuation of Air Chief Marshal Birender Singh Dhanoa.
Bhadauria was commissioned into the fighter stream of the Indian Air Force on 15 June 1980 with the Sword of Honour. He has clocked over 4250 hours of flying and has experience on 26 different types of fighter jets and transport aircraft. He held several key operational and administrative appointments at various stages of his service including Commander of a Jaguar Squadron at a front line base in South-Western sector; Commanding Officer of Flight Test Squadron at Aircraft and System Testing Establishment; Chief Test Pilot and Project Director of National Flight Test Centre on the Tejas LCA project; Air Attache in Moscow;assistant Chief of the Air Staff (Projects); Commandant of the National Defence Academy; Senior Air Staff Officer at Central Air Command and Deputy Chief of the Air Staff (1 January 2016 - 28 February 2017). He is also an experimental Test Pilot, a Category A qualified Flying Instructor and a Pilot Attack Instructor</p>
<style>
	p{
		font-weight: bolder;
		text-align: center;
		color:black;
}
</style>
<div class="container">
<div class="image">
<img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201909/Untitled-1_0-770x433.jpeg?oouoaGCDO6oC8VVpxbWpF_8RvWnZ9wKs" class="image">
<div class="overlay">

	<div class="text">MARSHAL RAKESH KUMAR SINGH BHADAURIA</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<h1 style="color:black;">CHIEF OF INDIAN NAVY</h1>
<p>Admiral Karambir Singh, PVSM, AVSM, ADC, is the 24th and current Chief of the Naval Staff (CNS) of the Indian Navy. The "Grey Eagle" (senior-most serving naval aviator)[2] of the Navy, he replaced Admiral Sunil Lanba as the CNS after Admiral Lanba's retirement on 31 May 2019. Prior to his ascension, Admiral Singh served as the Vice Chief of the Naval Staff and Flag Officer Commanding-in-Chief of India's Eastern Naval Command.Born to an IAF officer in Jalandhar, Punjab, Admiral Singh is a second generation military officer.[1] He attended the Barnes School in Deolali, before joining the 56th course of the National Defence Academy, where he was in the Hunter Squadron.[5][6] He is an alumnus of the Defence Services Staff College, Wellington and the College of Naval Warfare, Mumbai.He was commissioned into the Indian Navy in July 1980 and earned his wings as a helicopter pilot in 1982. He has extensive experience with the HAL Chetak, Kamov Ka-25 and Kamov Ka-28 helicopters.[3]

The Admiral has commanded the Coast Guard ship ICGS Chand Bibi, the corvette INS Vijaydurg, and the guided missile destroyers INS Rana and INS Delhi. He also served as the Fleet Operations Officer of the Western Fleet. Ashore, he served at Naval Headquarters as the Joint Director Naval Air Staff, and as Captain Air and Officer-in-Charge of the Naval Air Station at Mumbai. He was also a member of the Aircrew Instrument Rating and Categorisation Board (AIRCATS).</p>
<style>
	h1{
		text-align: center;
	}
	p{
		font-weight: bolder;
		text-align: center;
		color: black;
	}
</style>
<div class="container">
	<div class="image">
	 
<img src="https://bsmedia.business-standard.com/_media/bs/img/article/2019-03/23/full/1553347522-2827.jpg" class="image">
	<div class="overlay">
		<div class="text">ADMIRAL KARAMBIR SINGH</div>
	</div>
</div>
</div>
<br>
<br>
<br>
<br>

<h1 style="color:black;">CHIEF OF DEFENCE STAFF</h1>
<p>General Bipin Rawat, PVSM, UYSM, AVSM, YSM, SM, VSM, ADC (born 16 March 1958)[3] is a four star general and the current Chief of Defence Staff of India. On 30 December 2019, he was appointed as the first Chief of Defence Staff (CDS) of India and assumed office from 1 January 2020.[4][5][6][7] Prior to CDS, he served as Chairman of the Chiefs of Staff Committee as well as 27th Chief of Army Staff of the Indian Army.General Bipin Rawat was born in Pauri, Uttarakhand, India.[9] His family had been serving in the Indian Army for multiple generations, and his father was Lieutenant General Laxman Singh Rawat.[10][11][12] Rawat attended Cambrian Hall School, Dehradun and the St Edward’s School in Shimla. He then joined the National Defence Academy, Khadakwasla and the Indian Military Academy, Dehradun, where he was awarded the 'Sword of Honour'.

He is also a graduate of the Defence Services Staff College (DSSC), Wellington and the Higher Command Course at the United States Army Command and General Staff College at Fort Leavenworth, Kansas.[13][14][15] From his tenure at the DSSC, he has a MPhil degree i Defence Studies as well as diplomas in Management and Computer Studies from Madras University. In 2011, he was awarded a Doctorate of Philosophy by Chaudhary Charan Singh University, Meerut for his research on military-media strategic studies.</p>
<style>
	p{

	text-align:center;
	color:black;
}
</style>
<div class="container">
	<div class="image">

<img src="https://images.news18.com/ibnlive/uploads/2019/12/Bipin-Rawat.jpg" class="image">
<div class="overlay">
<div class="text">GENERAL BIPIN RAWAT</div>
	</div>
</div>
</div>
<br>
<br>
<br>
<br>

<footer style="font-weight: bolder;"><marquee>WANT TO KNOW ABOUT INDIAN INTELLIGENCE AGENCIES</marquee></footer>
<br>
<br>
<br>

 <a href="intel.html"><p style="text-align:center">Click here</p></a>
 
	</div>
</div>
</body>
</html>
