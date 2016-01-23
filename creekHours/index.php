<!DOCTYPE html>
<html>
<head>
<title>Hours</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="jquery.js" language="javascript" type="text/javascript"></script>
<script src="datatables/media/js/jquery.dataTables.js" language="javascript" type="text/javascript"></script>
</head>
<body>
    
<div class="hours">

<div class="hoursHeader">

<div class="hoursBack" onclick="back();">
< Back
</div>

<div style="padding-top:22px;font-size:16px;padding-left:100px;"><b>ACP HOURS</b> - <b>27 MAY 2015</b></div>

</div>

<div class="sidebar">

<div class="sidebarContent" id="sb1">
<ul class="sidebarMenu">
<li class="sidebarItem" onclick="change(11);">By Teacher</li>
<li class="sidebarItem" onclick="change(12);">By Period</li>
<li class="sidebarItem" onclick="change(13);">By Study</li>
<li class="sidebarItem" onclick="display(0);">Show All</li>
</ul>
</div>

<div class="sidebarContent" id="sb11">
<ul class="sidebarMenu">
<li class="sidebarItem" onclick="display(11)">Porter</li>
<li class="sidebarItem" onclick="display(12)">Karagianes</li>
<li class="sidebarItem" onclick="display(13)">Martinez</li>
<li class="sidebarItem" onclick="display(14)">Carson</li>
<li class="sidebarItem" onclick="display(16)">Hill</li>
</ul>
</div>

<div class="sidebarContent" id="sb12">
<ul class="sidebarMenu">
<li class="sidebarItem" onclick="display(21);">Period 1</li>
<li class="sidebarItem" onclick="display(22);">Period 2</li>
<li class="sidebarItem" onclick="display(23);">Period 3</li>
<li class="sidebarItem" onclick="display(24);">Period 4</li>
<li class="sidebarItem" onclick="display(25);">Period 5</li>
<li class="sidebarItem" onclick="display(26);">Period 6</li>
</ul>
</div>

<div class="sidebarContent" id="sb13">
<ul class="sidebarMenu">
<li class="sidebarItem" onclick="display(30);">Bio Assay</li>
<li class="sidebarItem" onclick="display(31);">Bio Assessment</li>
<li class="sidebarItem" onclick="display(32);">Botany</li>
<li class="sidebarItem" onclick="display(33);">Chemistry</li>
<li class="sidebarItem" onclick="display(34);">Habitat</li>
<li class="sidebarItem" onclick="display(35);">Long Mapping</li>
<li class="sidebarItem" onclick="display(36);">Outreach</li>
<li class="sidebarItem" onclick="display(37);">Restoration</li>
<li class="sidebarItem" onclick="display(38);">Sediment</li>
<li class="sidebarItem" onclick="display(39);">Technology</li>
<li class="sidebarItem" onclick="display(310);">Vertebrates</li>
</ul>
</div>

</div>

<table class="hoursTable">
<tr class="hoursTableHeader">
<td>Last</td>
<td>First</td>
<td>Study</td>
<td>Teacher</td>
<td>Study Hours</td>
<td>Lectures</td>
<td>Conservations</td>
</tr>
</table>

<div class="hoursContent">

<table class="hoursContentTable">
</table>

</div>


<script language="javascript" type="text/javascript">

$("#sb11").hide();
$("#sb12").hide();
$("#sb13").hide();
$("#sb14").hide();

$(".hoursBack").hide();

var current = 1;

var data = [["Adams","Rose","Long Mapping","Porter P1","12","1","1"],["Adelzadeh","Kaya","Restoration","Porter P3","12","1","1"],["Aggarwal","Muskaan","Chemistry","Porter P3","13","1","1"],["Aguilar Contreras","Luis","Sediments","Carson P5","14","1","1"],["Alexis","Maya","Outreach","Carson P2","13","1","1"],["Alhadithi","Noora","Long Mapping","Martinez P6","11","1","1"],["Aliakbar","Kia","Sediments","Karagianes P5","13","1","1"],["Alizani","Gamar","Bio Assessment","Carson P5","12.25","1","1"],["Alsamman","Sana","Restoration","Karagianes P4","12","1","1"],["Amawi","Zeena","Habitat","Martinez P5","12","1","1"],["Aranda","Brandon","Long Mapping","Hill P6","7","1","1"],["Ashok","Shivaswarup","Technology","Porter P5","12","1","1"],["Ayala","Anna","Long Mapping","Karagianes P6","16.25","1","1"],["Bahm","Zacharias","Long Mapping","Karagianes P6","6","2","1"],["Balakrishna","Manu","Restoration","Porter P2","12","1","1"],["Banda","Awki","Restoration","Carson P1","18","1","1"],["Banerjee","Deveena","Chemistry","Porter P2","12.5","1","1"],["Banga","Rajkaran","Habitat","Karagianes P6","13","1","1"],["Banga","Veerkaran","Habitat","Karagianes P5","15","1","1"],["Barrera","Belle","Vertebrates","Carson P1","14","1","1"],["Basinger","Raquel","Habitat","Porter P5","15","1","1"],["Bennett","Kenji","Restoration","Karagianes P5","12","1","1"],["Bhat","Preeti","Botany","Porter P5","12.75","1","1"],["Bhat","Nikita","Vertebrates","Porter P3","15","1","1"],["Bhatti","Ammon","Long Mapping","Karagianes P5","12","1","1"],["Bi","Veronica","Bio Assessment","Karagianes P6","12","1","1"],["Biscocho","Martin","Chemistry","Carson P2","12.25","1","1"],["Bokoch","Caroline","Restoration","Karagianes P5","15","1","1"],["Bonala","Srilekha","Vertebrates","Porter P2","12","1","1"],["Boulad","Bayan","Botany","Carson P2","14.75","1","1"],["Bowlin","Chadwick","Long Mapping","Porter P3","13","1","1"],["Bresolin","Marianna","Restoration","Porter P3","12","1","1"],["Brow","Julia","Botany","Carson P6","12.75","1","1"],["Brutski","Richard","Restoration","Carson P5","14","1","1"],["Buchanan","Trent","Habitat","Carson P1","15","1","1"],["Burch","Claire","Sediments","Porter P3","13.5","1","1"],["Burlando","Julian","Outreach","Porter P5","14.5","1","1"],["Burt","Katherine","Long Mapping","Karagianes P6","19.5","1","1"],["Cai","Emily","Habitat","Porter P1","12","0","1"],["Cai","Eric","Restoration","Porter P2","12","1","1"],["Cajucom","Andrea","Vertebrates","Carson P6","12","1","1"],["Camacho","Paige","Bio Assay","Karagianes P4","29","1","1"],["Cameron","Catherine","Outreach","Porter P5","12","1","1"],["Carson","Kathleen","Vertebrates","Carson P5","13","1","1"],["Catellier","Axel","Vertebrates","Karagianes P5","23","1","1"],["Cha","Mouakong","Botany","Hill P6","15.25","1","1"],["Chaban","Adam","Long Mapping","Porter P1","7","1","1"],["Chamanara","Joseph","Restoration","Karagianes P5","27","1","1"],["Chan","Justin","Habitat","Porter P1","12","1","1"],["Chandrasekaran","Balasabapathi","Chemistry","Karagianes P4","14","1","1"],["Chang","Zachary","Bio Assessment","Carson P6","12","1","1"],["Chang","Steven","Vertebrates","Karagianes P4","15","1","1"],["Chang","Marcello","Bio Assessment","Karagianes P4","18.5","1","1"],["Chen","Aliya","Restoration","Porter P1","12","1","1"],["Chen","Felicia","Restoration","Porter P1","12","1","1"],["Chevallier","Louis","Habitat","Carson P4","14.5","1","1"],["Chhan","Kathryn","Botany","Carson P4","15.25","1","1"],["Chin","Courtney","Outreach","Carson P5","12.5","1","1"],["Chowdhury","Ayananta","Restoration","Porter P2","12","1","1"],["Christoffersen","Sydney","Habitat","Carson P2","15","1","1"],["Chu","Stanley","Botany","Porter P3","16.75","1","1"],["Citko","Anton","Technology","Porter P2","12","1","1"],["Claire-McKown","Jesse","Restoration","Carson P2","12","1","1"],["Claire-McKown","Benjamin","Vertebrates","Carson P1","12","1","1"],["Claire-McKown","Hannah","Botany","Carson P2","12.25","1","1"],["Cliff","Evelyn","Outreach","Porter P1","12","1","1"],["Cohen","Ryan","Sediments","Karagianes P4","16.5","1","1"],["Collins","Sabrina","Bio Assessment","Carson P4","12","1","1"],["Collins","Liam","Restoration","Carson P2","12","1","1"],["Conwell","Taryn","Bio Assessment","Porter P1","12","1","1"],["Cortes","Annamarie","Sediments","Porter P1","13.5","1","1"],["Cramer","Anna","Bio Assessment","Carson P1","0","1","1"],["Curry","Elizabeth","Restoration","Porter P5","27","1","1"],["Curtis","Alia","Sediments","Porter P1","12","1","1"],["Curtis","Kaya","Restoration","Carson P6","12","1","2"],["Dai","Yongjun","Bio Assessment","Carson P4","13","1","1"],["Damiano","Lily","Habitat","Carson P1","12","1","1"],["Dano","Mark","Restoration","Carson P6","12","1","1"],["Dasu","Yamini","Long Mapping","Carson P2","12","1","1"],["Davison","R'Ianna","Vertebrates","Carson P2","15","1","1"],["Debaswar","Russi","Restoration","Karagianes P4","15","1","1"],["Desai","Uma","Chemistry","Carson P4","13.25","1","1"],["Dhaliwal","Prabhman","Bio Assessment","Karagianes P6","16.5","1","1"],["Diehl","Alex","Sediments","Karagianes P5","15.5","2","1"],["Domingo","Brevin","Chemistry","Karagianes P5","14.25","1","1"],["Dsouza","Allison","Vertebrates","Karagianes P4","17","1","1"],["Eisenstadt","Max","Long Mapping","Carson P2","13","1","1"],["Escobar","Alexandra","Habitat","Carson P2","10.5","1","1"],["Eslamian","Darya","Habitat","Porter P1","12","1","1"],["Eslinger","Nichole","Bio Assessment","Carson P5","12","1","1"],["Eulberg","Rebecca","Outreach","Carson P5","12.5","1","1"],["Eyraud","Nicolas","Restoration","Carson P6","12","1","1"],["Faga","Fetalaiga","Restoration","No IB Science","13","0","1"],["Fanaian","Mina","Chemistry","Martinez P6","13.25","1","1"],["Feizi","Sam","Chemistry","Karagianes P4","12.25","1","1"],["Fortner","Jake","Sediments","Karagianes P5","13","1","1"],["Fox","Cassandra","Outreach","Martinez P6","10","1","1"],["Francisco","Kryzl","Vertebrates","Carson P5","12.5","1","1"],["Frenklak","Evan","Botany","Karagianes P4","12","1","1"],["Fuad","Abigail","Vertebrates","Carson P5","11","1","1"],["Fuad","Naomi","Vertebrates","Carson P5","12","1","1"],["Fujii","Adrianna","Habitat","Carson P1","12","1","1"],["Ganetsos","Nicole","Outreach","Carson P5","12","1","1"],["Gangaram","Vamsee","Habitat","Porter P3","11","1","1"],["Garcia","Michael","Chemistry","Porter P3","13.25","1","1"],["Gaviria","Nathan","Bio Assessment","Carson P5","15","1","1"],["Gaydarova","Cvetelina","Outreach","Carson P4","15.5","1","1"],["Gil","Hailey","Outreach","Carson P2","5","1","1"],["Gill","Saabhir","Technology","Carson P2","17.5","1","1"],["Grageda","Cinthya","Vertebrates","Carson P1","8.75","1","1"],["Grichuhin","Emily","Restoration","Carson P6","12","1","1"],["Griffith","Megan","Outreach","Carson P6","12.5","1","1"],["Gumenyuk","Solomiya","Botany","Karagianes P5","23.25","1","1"],["Gupta","Sonali","Bio Assessment","Carson P5","12","2","1"],["Gupta","Priyanka","Technology","Porter P5","13.5","1","1"],["Gurev","Jacob","Bio Assay","Porter P3","17","1","1"],["Gurev","Sarah","Bio Assay","Porter P1","28","1","1"],["Hakobian","David","Sediments","Karagianes P4","12.5","1","1"],["Hall","Caeli","Outreach","Karagianes P5","10","2","1"],["Han","Charlie","Chemistry","Martinez P5","12","1","1"],["Han","Heather","Vertebrates","Carson P1","12","1","1"],["Handa","Dipra","Technology","Karagianes P5","12","1","1"],["Hao","Samantha","Bio Assay","Karagianes P4","35","1","1"],["Hickey","Kaylah","Botany","Martinez P6","12.75","1","1"],["Ho","Daniel","Restoration","Carson P6","16","1","1"],["Hoang","Brittany","Vertebrates","Porter P2","17","1","1"],["Hogan","Mattison","Outreach","Carson P5","11.25","1","1"],["Holikatti","Maya","Bio Assessment","Porter P1","20","1","1"],["Holm","Kyle","Chemistry","Martinez P5","14.25","1","1"],["Holt","Claire","Habitat","Carson P1","12","1","1"],["Huerta","Irving","Botany","Carson P1","13.5","1","1"],["Huynh","Cynthia","Outreach","Porter P3","13.5","1","1"],["Hwang","Daniel","Restoration","Carson P4","13","1","1"],["Hyun","Joseph","Bio Assessment","Carson P2","12.5","1","1"],["Illikkal","Kavya","Sediments","Carson P6","12","1","1"],["Ivanova","Alisa","Habitat","Karagianes P5","13","2","1"],["Jacobsen","Amanda","Sediments","Carson P2","12","1","1"],["Jahja","Nicholas","Sediments","Karagianes P6","12","1","1"],["Jain","Nishita","Outreach","Porter P3","13.5","1","1"],["Jamal","Nezar","Outreach","Carson P5","15","1","1"],["Janarthanan","Naveen","Technology","Porter P3","14.75","1","1"],["Javed","Ismael","Habitat","Porter P1","13","1","1"],["Johnson","Noah","Long Mapping","Karagianes P6","17","0","1"],["Ju","Wooil","Sediments","Karagianes P5","12","1","1"],["Jung","Samuel","Long Mapping","Carson P1","8","1","1"],["Kamal","Layal","Bio Assessment","Carson P1","8.5","1","1"],["Kanuri","Aditya","Long Mapping","Porter P2","8","1","1"],["Kanuri","Sasank","Bio Assessment","Porter P1","12","1","1"],["Kao","Wesley","Botany","Karagianes P6","23.75","1","1"],["Kariuki","Dorian","Bio Assessment","Karagianes P5","13","1","1"],["Karpiuk","Kiryl","Sediments","Carson P4","14.25","1","1"],["Kathi","Harikumara","Restoration","Porter P2","12","1","1"],["Kaul","Niharika","Restoration","Carson P1","12","1","1"],["Keihani","Armin","Sediments","Porter P5","20","1","1"],["Keplinger","Krista","Vertebrates","Carson P2","18.5","1","1"],["Khachane","Noopur","Long Mapping","Karagianes P4","12","1","1"],["Khanna","Ritvik","Habitat","Karagianes P6","12","1","1"],["Khare","Nihar","Chemistry","Carson P1","12.5","1","1"],["Khillon","Sarthak","Technology","Porter P3","20","1","1"],["Khudoyberganova","Dilnoza","Restoration","Martinez P6","12","1","1"],["Kiani","Purya","Botany","Carson P5","6.5","1","1"],["Kim","Andrew","Bio Assessment","Carson P6","12","1","1"],["Koenig","Richard","Vertebrates","Carson P4","13","1","1"],["Koenig","Kimberly","Vertebrates","Carson P2","13","1","1"],["Kong","Joseph","Vertebrates","Carson P4","13","1","1"],["Konnur","Rohan","Sediments","Karagianes P4","19","1","1"],["Koshavenko","Kristina","Botany","Porter P1","14","1","1"],["Kung","Jonathan","Chemistry","Porter P1","12.5","1","1"],["Kutsar","Valeriy","Restoration","Carson P6","17","1","1"],["Kwong","Ethan","Botany","Porter P3","12.75","1","1"],["Kwong","Aaron","Long Mapping","Carson P4","14.5","1","1"],["LaBrash","Gloria","Habitat","Carson P2","12","1","1"],["Lai","Lilliann","Botany","Porter P3","14.5","1","1"],["Lalwani","Karuna","Botany","Carson P5","14","1","1"],["Le","Bryan","Vertebrates","Carson P1","12","1","1"],["Leader","Emily","Habitat","Carson P1","13","1","1"],["Learn","Julia","Vertebrates","Porter P5","12","1","1"],["Lee","Paula","Habitat","Porter P1","9.5","1","1"],["Lee","Amanda","Chemistry","Martinez P6","12","1","1"],["Lee","David","Long Mapping","Porter P1","12.5","1","1"],["Leiva","Pedro","Habitat","Porter P1","13","1","1"],["Lewis","Nicola","Restoration","Karagianes P4","15","1","1"],["Li","Vivian","Outreach","Porter P3","12","1","1"],["Li","Jeffrey","Sediments","Porter P2","13","1","1"],["Li","Steven","Chemistry","Porter P2","13.5","1","1"],["Lieberman","Joel","Bio Assessment","Porter P1","12.25","1","1"],["Link-Oberstar","Kathryn","Botany","Carson P4","13.25","1","1"],["Little","Hannah","Botany","Carson P6","13.75","1","1"],["Liu","William","Technology","Karagianes P6","12","1","1"],["Liu","Sarah","Vertebrates","Karagianes P5","13","1","1"],["Liu","Kaitlyn","Bio Assessment","Karagianes P4","14","1","1"],["Lor","Kellen","Habitat","Carson P6","12","1","1"],["Lugovskiy","Konstantin","Chemistry","Karagianes P4","12","1","1"],["Lutsuk","Alicia","Bio Assessment","Carson P1","12","1","1"],["Maheshwari","Aditya","Technology","Carson P5","21.5","1","1"],["Malott","Joshua","Bio Assessment","Carson P4","14.5","1","1"],["Malyshkin","David","Bio Assessment","Carson P6","15","1","1"],["Marcelo","Gabriel","Long Mapping","Porter P3","12","1","1"],["Marsh","Lorraine","Outreach","Carson P6","12","1","1"],["Marsh","Summer","Habitat","Carson P2","12.5","1","1"],["Marta","Patrick","Habitat","Karagianes P5","15","2","1"],["Matveev","Cristina","Bio Assessment","Carson P5","12","1","1"],["Mcarthur","Robert","Vertebrates","Karagianes P5","13","1","1"],["McCulloch","Brennan","Technology","Hill P6","12","0","1"],["McEvoy","Megan","Botany","Hill P6","7.75","1","1"],["McGee","Jack","Long Mapping","Karagianes P4","13","1","1"],["McKinstry","Hannah","Long Mapping","Porter P1","7","1","1"],["Mechineni","Srikeerthi","Restoration","Porter P5","12","1","1"],["Mehmood","Zeeshan","Botany","Carson P1","12.75","1","1"],["Mellerski","Robert","Chemistry","Karagianes P4","13.5","1","1"],["Miller","Amanda","Restoration","Martinez P5","15","1","1"],["Mills","Abigail","Botany","Porter P3","13.5","1","1"],["Mir","Moiz","Botany","Karagianes P6","42.75","2","1"],["Miura","Jasper","Botany","Karagianes P4","14.25","1","1"],["Moffat","Emma","Botany","Porter P5","14.25","1","1"],["Monterrey","Natalie","Long Mapping","Porter P2","12","1","1"],["Moore","Rebecca","Restoration","Porter P1","15","1","1"],["Moorthy","Kajan","Bio Assessment","Karagianes P6","12","1","1"],["Moskaev","Vsevolod","Long Mapping","Karagianes P6","19","1","1"],["Mukherjee","Rinita","Habitat","Carson P5","12","1","1"],["Munkhbaatar","Orgilmaa","Sediments","Karagianes P6","13.75","1","1"],["Munoz","Ariel","Vertebrates","Carson P1","12","1","1"],["Mupparaju","Abhinav","Long Mapping","Porter P1","14","1","1"],["Nagaraj","Nisha","Vertebrates","Carson P4","12","1","1"],["Nair","Shilpa","Botany","Karagianes P5","21.5","1","1"],["Natividad","Louie Dean","Restoration","Carson P2","15","1","1"],["Nedorezov","Denis","Chemistry","Carson P2","12","1","1"],["Nguyen","May","Botany","Karagianes P6","12.75","1","1"],["Nguyen","Paula","Chemistry","Porter P1","13.25","1","1"],["Olmstead","Catarina","Bio Assessment","Carson P5","15","1","1"],["Ordiales","Franco","Bio Assessment","Carson P1","10","1","1"],["Pae","Alex","Long Mapping","Porter P3","6","1","1"],["Pagan","Brittany","Botany","Carson P2","12","1","1"],["Pal","Niagara","Sediments","Carson P5","22","1","1"],["Paragas","Alyssa","Restoration","Carson P1","12","0","0"],["Park","Michaela","Bio Assessment","Porter P1","13","1","1"],["Park","Jacqueline","Bio Assessment","Carson P2","14.5","1","1"],["Parmar","Bhavin","Technology","Carson P4","17","1","1"],["Paschal","Brynne","Restoration","Karagianes P5","12","1","1"],["Paskulin","Veronica","Restoration","Carson P2","12.5","1","1"],["Patel","Sheenal","Long Mapping","Carson P4","12","1","1"],["Patel","Trishna","Long Mapping","Porter P1","14.5","1","1"],["Patrikeyeva","Alina","Restoration","Karagianes P4","16","1","1"],["Peebles","Zack","Long Mapping","Karagianes P5","6","2","1"],["Perkins","Lucas","Long Mapping","Karagianes P4","12","1","1"],["Phan","Kevin","Chemistry","Martinez P5","12.25","1","1"],["Phillips","Alexa","Outreach","Carson P6","38.5","0","1"],["Plant","Maren","Bio Assessment","Porter P5","12.5","1","1"],["Poliyenko","Darya","Vertebrates","Porter P2","13","1","1"],["Polyashenko","Yelena","Outreach","Carson P4","14.5","1","1"],["Pon","Matthew","Chemistry","Porter P2","13.25","1","1"],["Prakasam","Manu","Bio Assay","Porter P1","22.5","1","1"],["Price","Ian","Vertebrates","Carson P4","12","1","1"],["Primavera","Anabella","Bio Assessment","Carson P1","13","1","1"],["Purba","George","Restoration","Carson P6","18","1","1"],["Puttagunta","Vindhya","Restoration","Karagianes P6","12","1","1"],["Radjendirane","Bhuvaneshkumar","Habitat","Porter P3","13","1","1"],["Raju","Karthik","Bio Assay","Karagianes P5","16.25","1","1"],["Ram","Apsara","Botany","Porter P1","14","1","1"],["Ramadoss","Monish","Sediments","Porter P1","16","1","1"],["Ramakrishnan","Ruchika","Habitat","Carson P1","12","1","1"],["Ran","Ruojie","Habitat","Karagianes P5","13","1","1"],["Ran","Ruomei","Habitat","Karagianes P5","13","1","1"],["Rao","Akshay","Sediments","Porter P3","12","1","1"],["Rathor","Rohit","Outreach","Carson P2","12","1","1"],["Real","Faustin","Habitat","Karagianes P4","13","1","1"],["Rehill","Jasleen","Restoration","Porter P2","9","1","1"],["Reimanis","Ryan","Botany","Karagianes P6","13","1","1"],["Renn","Alex","Long Mapping","Karagianes P5","7","1","1"],["Resi","Abel","Technology","Porter P2","12.25","1","1"],["Rhoads","Braden","Long Mapping","Karagianes P4","12.5","1","1"],["Rios","Florencio","Vertebrates","Karagianes P6","12","1","1"],["Rizam","Hilola","Habitat","Carson P1","12","1","1"],["Roach","Dana","Restoration","Carson P5","12","1","1"],["Rodrigues","Annamarie","Bio Assessment","Porter P2","11","1","1"],["Rosenheimer","Hanna","Botany","Carson P1","13.25","1","1"],["Rudrawar","Kedar","Sediments","Porter P1","12","1","1"],["Sakurai","Catherine","Habitat","Karagianes P4","12.5","1","1"],["Sam-Luc","Lukas","Bio Assessment","Carson P2","12","1","1"],["Sandhu","Sanampreet","Habitat","Porter P2","12","1","1"],["Satyan","Lavanya","Habitat","Porter P3","12","1","1"],["Saxena","Nimish","Chemistry","Porter P2","12.25","0","1"],["Schaaf","Zachary","Restoration","Carson P4","15","1","1"],["Selton","Charlotte","Outreach","Porter P3","13","1","1"],["Sengupta","Shirsha","Vertebrates","Karagianes P4","13.5","1","1"],["Senthil Kumar","Anjanaa","Sediments","Karagianes P4","12.5","1","1"],["Seth","Divya","Chemistry","Karagianes P5","12.25","1","1"],["Shacterman","Shawn","Bio Assessment","Porter P3","12.25","1","1"],["Shartle","Jeffrey","Bio Assessment","Carson P6","12","1","1"],["Shen","Daniel","Chemistry","Karagianes P6","15","1","1"],["Showen","Maya","Sediments","Carson P1","12","1","1"],["Siddiqui","Sharene","Habitat","Karagianes P4","8","1","1"],["Simonson","Austin","Outreach","Karagianes P5","12","0","1"],["Singh","Neha","Chemistry","Martinez P6","12","1","1"],["Singh","Gaganjyot","Habitat","Porter P2","12","1","1"],["Skrinnik","Nicole","Vertebrates","Carson P6","14","1","1"],["Sood","Anchit","Sediments","Porter P2","12.75","1","1"],["Souksamlane","Jordan","Long Mapping","Karagianes P6","14","1","1"],["Souksamlane","Jalen","Long Mapping","Porter P3","14.5","1","1"],["Springer","Makayla","Habitat","Carson P2","12","1","1"],["Suh","Hoonho","Restoration","Carson P1","15","1","1"],["Sundararajan","Arvind","Sediments","Karagianes P5","13.5","1","1"],["Sysou","Dzmitrij","Long Mapping","Martinez P5","15.5","1","1"],["Taghibeik","Saba","Botany","Carson P2","14.75","1","1"],["Takahashi-Rial","Kenji","Restoration","Carson P4","18","1","1"],["Talwai","Prem","Bio Assay","Karagianes P4","16","1","1"],["Tam","Paul","Sediments","No IB Science","13","1","1"],["Tan","Bryan","Bio Assessment","Porter P2","12.75","1","1"],["Tang","Raymond","Long Mapping","Martinez P6","10","1","1"],["Tang","Vanessa","Chemistry","Carson P2","12","1","1"],["Tannous","Tanya","Outreach","Carson P1","13.5","1","1"],["Thakkar","Vyom","Chemistry","Porter P3","14.5","1","1"],["Theep","Nicole","Vertebrates","Carson P6","13","1","1"],["Thind","Roopkiran","Bio Assessment","Carson P6","12","1","1"],["Tollestrup","Krista","Bio Assessment","Carson P1","11.75","1","1"],["Towne","Elizabeth","Botany","No IB Science","22.75","1","1"],["Tran","Anh","Restoration","Porter P3","12","1","1"],["Tran","Connie","Sediments","Porter P3","13.5","1","1"],["Tran","Quynh","Botany","Porter P1","13.75","1","1"],["Tran","Claire","Technology","Karagianes P6","14.25","1","1"],["Treiterer","Ellanor","Botany","Porter P2","13","1","1"],["Trueman","Christian","Habitat","Porter P2","15","1","1"],["Truong","Brandon","Botany","Martinez P5","14","1","1"],["Tseng","Oliver","Bio Assessment","Porter P3","12","1","1"],["Ulep","Francis","Vertebrates","Carson P5","15","1","1"],["Valluvan","Dhivya","Outreach","Porter P5","13.5","1","1"],["Vangelatos","Alexandria","Long Mapping","Porter P1","12","1","1"],["Vasudevan","Varna","Outreach","Karagianes P4","14","1","1"],["Vo","Robin","Chemistry","Karagianes P5","13.25","1","1"],["Vollmann","Elisabeth","Vertebrates","Porter P2","17","1","1"],["Vuong","Tiffany","Sediments","Porter P2","12.5","1","1"],["Wang","Jiaqi","Technology","Karagianes P5","12","1","1"],["Wang","Yi","Long Mapping","Karagianes P4","13","1","1"],["Wanjiru","Doris","Habitat","Carson P1","15","1","1"],["Ward","Alyssa","Vertebrates","Carson P2","13","1","1"],["Wilkinson","Monica","Botany","Karagianes P4","25","2","1"],["Wilson","Cameron","Habitat","Carson P5","13","1","1"],["Wong","Danica","Bio Assessment","Karagianes P6","16.75","1","1"],["Woodfork","Kailyne","Restoration","Carson P4","15","1","1"],["Wu","Everett","Vertebrates","Carson P6","13","1","1"],["Wu","Florence","Restoration","Carson P2","15","1","1"],["Yakimchuk","Tammy","Vertebrates","Porter P3","13","1","1"],["Yamasaki","Keenan","Vertebrates","Carson P4","14","1","1"],["Yang","Vivian","Bio Assessment","Karagianes P4","12","1","1"],["Yang","Krista","Bio Assessment","Porter P2","12.5","1","1"],["Yi","Rebecca","Restoration","Karagianes P5","12","1","1"],["Yi","Kyle","Sediments","Porter P1","15.5","1","1"],["Young","LiLian","Habitat","Carson P1","13","1","1"],["Yu","Roger","Chemistry","Karagianes P6","12","1","1"],["Yuan","Mabel","Botany","Carson P1","13.25","1","1"],["Yuson","Erika","Restoration","Porter P3","12","1","1"],["Zhang","Patric","Bio Assessment","Karagianes P4","13","1","1"],["Zhang","Frank","Technology","Martinez P5","13","1","1"],["Zhang","Victoria","Bio Assay","Porter P2","27.5","1","1"],["Zhen","Simon","Chemistry","Karagianes P4","13.75","1","1"],["Zhu","Madeleine","Sediments","Porter P3","13.5","1","1"],["Zuber","Shaina","Chemistry","Porter P2","13.5","1","1"]];

display(0);

function change(code) {
	$("#sb"+current).toggle("slide");
	$("#sb"+code).toggle("slide");
	current = code;
	$(".hoursBack").show();
}

function back() {
	if(current != 1) {
		change(Math.floor(current/10));
	}
	if(current == 1) {
		$(".hoursBack").hide();
	}
}

function display(sort) {
	var html = "";
	var a = 0;
	for(var i = 0; i < data.length; i ++) {
		var add = false;
		switch(sort) {
		case 0: {
		add = true;
		break;
		}
		case 11: {
		if(data[i][3].indexOf("Porter") > -1) {
		add = true;
		}
		break;
		}
		case 12: {
		if(data[i][3].indexOf("Karagianes") > -1) {
		add = true;
		}
		break;
		}
		case 13: {if(data[i][3].indexOf("Martinez") > -1) {
		add = true;
		}
		break;
		}
		case 14: {
		if(data[i][3].indexOf("Carson") > -1) {
		add = true;
		}
		break;
		}
		case 15: {
		if(data[i][3].indexOf("Kelly") > -1) {
		add = true;
		}
		break;
		}
		case 16: {
		if(data[i][3].indexOf("Hill") > -1) {
		add = true;
		}
		break;
		}
		case 17: {
		if(data[i][3] === "None") {
		add = true;
		}
		break;
		}
		case 21: {
		if(data[i][3].indexOf("1") > -1) {
		add = true;
		}
		break;
		}
		case 22: {
		if(data[i][3].indexOf("2") > -1) {
		add = true;
		}
		break;
		}
		case 23: {
		if(data[i][3].indexOf("3") > -1) {
		add = true;
		}
		break;
		}
		case 24: {
		if(data[i][3].indexOf("4") > -1) {
		add = true;
		}
		break;
		}
		case 25: {
		if(data[i][3].indexOf("5") > -1) {
		add = true;
		}
		break;
		}
		case 26: {
		if(data[i][3].indexOf("6") > -1) {
		add = true;
		}
		break;
		}
		case 30: {
		if(data[i][2] === "Bio Assay") {
		add = true;
		}
		break;
		}
		case 31: {
		if(data[i][2] === "Bio Assessment") {
		add = true;
		}
		break;
		}
		case 32: {
		if(data[i][2] === "Botany") {
		add = true;
		}
		break;
		}
		case 33: {
		if(data[i][2] === "Chemistry") {
		add = true;
		}
		break;
		}
		case 34: {
		if(data[i][2] === "Habitat") {
		add = true;
		}
		break;
		}
		case 35: {
		if(data[i][2] === "Long Mapping") {
		add = true;
		}
		break;
		}
		case 36: {
		if(data[i][2] === "Outreach") {
		add = true;
		}
		break;
		}
		case 37: {
		if(data[i][2] === "Restoration") {
		add = true;
		}
		break;
		}
		case 38: {
		if(data[i][2] === "Sediments") {
		add = true;
		}
		break;
		}
		case 39: {
		if(data[i][2] === "Technology") {
		add = true;
		}
		break;
		}
		case 310: {
		if(data[i][2] === "Vertebrates") {
		add = true;
		}
		break;
        
		}
		}
		if(add) {
			html += "<tr class=\"tableContent hoursType"+(a%2+1)+"\"><td>"+data[i][0]+"</td><td>"+data[i][1]+"</td><td>"+data[i][2]+"</td><td>"+data[i][3]+"</td><td>"+data[i][4]+"</td><td>"+data[i][5]+"</td><td>"+data[i][6]+"</td></tr>";
			a ++;
		}
	}
	$(".hoursContentTable").html(html);
}

</script>

</div>

</body>
</html>