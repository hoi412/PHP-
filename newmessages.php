<?php

session_start();


//smiley

if($_POST)
{
	$swear=array('aardappels afgieten','achter het raam zitten afberen','aflebberen','afrossen','afrukken',	'aftrekken','afwerkplaats','afzeiken','afzuigen',
	'anderhalve man en een paardekop','anita','asbak','aso','bagger','schijten','balen','bedonderen','befborstel','beffen','bekken','belazeren','besodemieterd zijn','besodemieteren',
	'beurt','boemelen','boerelul','boerenpummel','bokkelul','botergeil','broekhoesten','brugpieper','buffelen','buiten de pot piesen','das kloten van de bok','de ballen','de hoer spelen',
	'de koffer in duiken','del','de pijp uit gaan','dombo','draaikont','driehoog achter wonen','drolg','drooggeiler','droogkloot','een beurt geven','een nummertje maken','een wip maken',
	'eikel','engerd','flamoes','flikken','flikker','gadverdamme','galbak','gat','gedoogzone','geilneef','gesodemieter','godverdomme','graftak','grasmaaien','gratenkut','greppeldel',
	'griet','hoempert','hoer','hoerenbuurt','hoerenloper','hoerig','hol','hufter','huisdealer','johny','kanen','kettingzeug','klaarkomen','klerebeer','klojo','klooien','klootjesvolk',
	'klootoog','klootzak','kloten','knor','kont','kontneuken','krentekakker','kut','kuttelikkertje','kwakkie','liefdesgrot','lul','lul-de-behanger','lulhannes','lummel','mafketel',
	'matennaaier','matje','mof','muts','naaien','naakt','neuken','neukstier','nicht','oetlul','opgeilen','opkankeren','oprotten','opsodemieteren','op zn hondjes','op zn sodemieter geven',
	'opzouten','ouwehoer','ouwehoeren','ouwerukker','paal','paardelul','palen','penoze','pijpbekkig','pijpen','pik','pleurislaaier','poep','portiekslet','pot','potverdorie',
	'publiciteitsgeil','raaskallen','reet','reetridder','remsporen','reutelen','rothoer','rotzak','rukhond','rukken','schijt','schijten','schoft','schuinsmarcheerder','shit','slempen',
	'slet','sletterig','slik mijn zaad','snol','spuiten','standje','standje-69','stoephoer','stootje','stront','sufferd','tapijtnek','teef','temeier','teringlijer','toeter','tongzoen',
	'triootje','trottoirprostituée','trottoirteef','vergallen','verkloten','verneuken','viespeuk','vingeren','vleesroos','voor jan lul','voor jan-met-de-korte-achternaam','watje',
	'welzijnsmafia','wijf','wippen','wuftje','zaadje','zakkenwasser','zeiken','zeiker','zuigen','zuiplap','Aardappels afgieten','Achter het raam zitten afberen','Aflebberen','Afrossen',
	'Afrukken','Aftrekken','Afwerkplaats','Afzeiken','Afzuigen','Anderhalve man en een paardekop','Anita','Asbak','Aso','Bagger','Schijten','Balen','Bedonderen','Befborstel','Beffen',
	'Bekken','Belazeren','Besodemieterd zijn','Besodemieteren','Beurt','Boemelen','Boerelul','Boerenpummel','Bokkelul','Botergeil',	'Broekhoesten','Brugpieper','Buffelen',
	'Buiten de pot piesen','Das kloten van de bok','De ballen','De hoer spelen','De koffer induiken','Del','De pijp uitgaan','Dombo','Draaikont','Driehoog achter wonen','Drol',
	'Drooggeiler','Droogkloot',	'Een beurt geven','Een nummertje maken','Een wip maken','Eikel','Engerd','Elamoes','Flikken','Flikker','Gadverdamme','Galbak','Gat','Gedoogzone',
	'Geilneef','Gesodemieter','Godverdomme','Graftak','Grasmaaien','Gratenkut','Greppeldel','Griet','Hoempert','Hoer','Hoerenbuurt','Hoerenloper','Hoerig','Hol','Hufter','Huisdealer',
	'Johny','Kanen','Kettingzeug','Klaarkomen','Klerebeer','Klojo','Klooien','Klootjesvolk','Klootoog','Klootzak','Kloten','Knor','Kont','Kontneuken','Krentekakker','Kut',
	'Kuttelikkertje','Kwakkie','Liefdesgrot','Lul','Lul-de-behanger','Lulhannes','Lummel','Mafketel','Matennaaier','Matje','Mof','Muts','Naaien','Naakt','Neuken','Neukstier',
	'Nicht','Oetlul','Opgeilen','Opkankeren','Oprotten','Opsodemieteren','Op zn hondjes','Op zn sodemieter geven','Opzouten','Ouwehoer','Ouwehoeren','Ouwerukker','Paal','Paardelul',
	'Palen','Penoze','Pijpbekkig','Pijpen','Pik','Pleurislaaier','Poep','Portiekslet','Pot','Potverdorie','Publiciteitsgeil','Raaskallen','Reet','Reetridder','Remsporen','Reutelen',
	'Rothoer','Rotzak','Rukhond','Rukken','Schijt','Schijten','Schoft','Schuinsmarcheerder','Shit','Slempen','Slet','Sletterig','Slik mijn zaad','Snol','Spuiten','Standje',
	'Standje-69','Stoephoer','Stootje','Stront','Sufferd','Tapijtnek','Teef','Temeier','Teringlijer','Toeter','Tongzoen','Triootje','Trottoirprostituée','Trottoirteef','Vergallen',
	'Verkloten','Verneuken','Viespeuk','Vingeren','Vleesroos','Voor jan lul','Voor jan-met-de-korte-achternaam','Watje','Welzijnsmafia','Wijf','Wippen','Wuftje','Zaadje',
	'Zakkenwasser','Zeiken','Zeiker','Zuigen','Zuiplap',);
$filter= str_replace($swear,'bobba',$_POST['message']);
	 
}

if (ISSET($_POST['message']))
{

$link = mysqli_connect('localhost', 'root', 'usbw', 'im');
if (!$link)
{     die('Could not connect:'.mysqli_error()); }
else
{
  //echo 'were good';
}



$message= mysqli_real_escape_string($link, $filter);
$username = mysqli_real_escape_string($link, $_SESSION['username']);


$sql = "INSERT INTO messages (message, username)
VALUES ('$message', '$username')";

$result = mysqli_query($link, $sql);

/*close connection*/
mysqli_close($link);
}

?>

<!DOCTYPE html>
<html>
 <head><style>
.button {
  background-color: #ffffff; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  cursor: pointer;
}

.submit{
	background-color: #ff0000;
}

.message{
	background-color: #ff9900;
}


</style></head>
 
	<body>
			<form action="newmessage.php" method ="POST">
			<input class= "message" type="text" id="idtest" name="message" />
			<input class= "submit" type="submit" name="Send" value="hi" />
					</form>
			

		<button class = "button" onclick="smile()">&#x1F600 </button>
		<button class = "button" onclick="smileclosedeyes()">&#x1F604 </button>
		<button class = "button" onclick="smileteeth()">&#x1F601 </button>
		<button class = "button" onclick="smiletears()">&#x1F602 </button>
		<button class = "button" onclick="smileclosedeyes()">&#x1F604 </button>
		<button class = "button" onclick="smiledroplet()">&#x1F605 </button>
		<button class = "button" onclick="smilecrossedeyes()">&#x1F606 </button>
		<button class = "button" onclick="smilehalo()">&#x1F607 </button>
		<button class = "button" onclick="smilewink()">&#x1F609 </button>
		<button class = "button" onclick="smileblush()">&#x1F60A </button>
		<button class = "button" onclick="smiletongue()">&#x1F60B </button>
		<button class = "button" onclick="smileglasses()">&#x1F60E </button>
		<button class = "button" onclick="smilehearteyes()">&#x1F60D </button>
		<button class = "button" onclick="devil()">&#x1F608 </button>
		<button class = "button" onclick="smirk()">&#x1F60F </button>
		<button class = "button" onclick="neutral()">&#x1F610 </button>
		<button class = "button" onclick="expressionless()">&#x1F611 </button>
		<button class = "button" onclick="unamused()">&#x1F612 </button>
		<button class = "button" onclick="coldsweat()">&#x1F613 </button>
		<button class = "button" onclick="cringe()">&#x1F616 </button>
		<button class = "button" onclick="kissy()">&#x1F617 </button>
		<button class = "button" onclick="tongue()">&#x1F61B </button>
		<button class = "button" onclick="tonguewink()">&#x1F61C </button>
		<button class = "button" onclick="tonguesmile()">&#x1F61D </button>
		<button class = "button" onclick="disapponted()">&#x1F61E </button>
		<button class = "button" onclick="worried()">&#x1F61F </button>
		<button class = "button" onclick="angry()">&#x1F620 </button>
		<button class = "button" onclick="realyangry()">&#x1F621 </button>
		<button class = "button" onclick="crying()">&#x1F622 </button>
		<button class = "button" onclick="persevering()">&#x1F623 </button>
		<button class = "button" onclick="disappointed tear()">&#x1F625 </button>
		<button class = "button" onclick="anguished()">&#x1F626 </button>
		<button class = "button" onclick="anguished brows()">&#x1F627 </button>
		<button class = "button" onclick="fear()">&#x1F628 </button>
		<button class = "button" onclick="sleepy()">&#x1F62A </button>
		<button class = "button" onclick="grimacing()">&#x1F62B </button>
		<button class = "button" onclick="loudly crying()">&#x1F62D </button>
		<button class = "button" onclick="o-face()">&#x1F62E </button>
		<button class = "button" onclick="o-face brows()">&#x1F62F </button>
		<button class = "button" onclick="coldsweat fear()">&#x1F630 </button>
		<button class = "button" onclick="scream()">&#x1F631 </button>
		<button class = "button" onclick="astonished()">&#x1F632 </button>
		<button class = "button" onclick="flushed()">&#x1F633 </button>
		<button class = "button" onclick="sleeping()">&#x1F634 </button>
		<button class = "button" onclick="dizzy()">&#x1F635 </button>
		<button class = "button" onclick="nomouth()">&#x1F636 </button>
		<button class = "button" onclick="medicalmask()">&#x1F637 </button>
		<button class = "button" onclick="upsidedown()">&#x1F643 </button>
		<button class = "button" onclick="rollingeyes()">&#x1F644 </button>
		<button class = "button" onclick="zipper()">&#x1F910 </button>
		<button class = "button" onclick="money()">&#x1F911 </button>
		<button class = "button" onclick="sick()">&#x1F912 </button>
		<button class = "button" onclick="nerd()">&#x1F913 </button>
		<button class = "button" onclick="hmmmm()">&#x1F914 </button>
		<button class = "button" onclick="bandage()">&#x1F915 </button>
		<button class = "button" onclick="lol()">&#x1F922 </button>
		<button class = "button" onclick="vomit()">&#x1F923 </button>
		<button class = "button" onclick="drooling()">&#x1F924 </button>
		<button class = "button" onclick="lying()">&#x1F925 </button>
		<button class = "button" onclick="sneese()">&#x1F927 </button>
		<button class = "button" onclick="huh()">&#x1F928 </button>
		<button class = "button" onclick="stareyed()">&#x1F929 </button>
		<button class = "button" onclick="crazy()">&#x1F92A </button>
		<button class = "button" onclick="ssst()">&#x1F92B </button>
		<button class = "button" onclick="hihi()">&#x1F92D </button>
		<button class = "button" onclick="mindblown()">&#x1F92F </button>
		<button class = "button" onclick="monocle()">&#x1F9D0 </button>
		
		
		
		
		
  
		


<script>
function smile() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F600);
}
function smileteeth() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F601);
}
function smiletears() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F602);
	}
function smileclosedeyes() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F604);
	}
function smiledroplet() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F605);
}
function smilecrossedeyes() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F606);
}
function smilehalo() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F607);
}
function smilewink() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F609);
}
function smileblush() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F60A);
}
function smiletongue() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F60B);
}
function smilehearteyes() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F60D);
}
function smileglasses() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F60E);
}
function devil() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F608);
}
function smirk() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F60F);
}
function neutral() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F610);
}
function expressionless() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F611);
}
function unamused() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F612);
}
function coldsweat() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F613);
}
function pesive() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F614);
}
function confused() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F615);
}
function cringe() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F616);
}
function kissy() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F618);
}
function tongue() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F61B);
}
function tonguewink() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F61C);
}
function tonguesmile() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F61D);
}
function disapponted() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F61E);
}
function worried() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F61F);
}
function angry() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F620);
}
function realyangry() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F621);
}
function crying() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F622);
}
function persevering() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F623);
}
function noseblow() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F624);
}
function disappointed tear() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F625);
}
function anguished() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F626);
}
function anguished brows() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F627);
}
function sleepy() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F62A);
}
function grimacing() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F62C);
}
function loudly crying() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F62D);
}
function o-face() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F62E);
}
function o-face brows() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F62F);
}
function coldsweat fear() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F630);
}
function scream() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F631);
}
function astonished() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F632);
}
function flushed() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F633);
}
function sleeping() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F634);
}
function dizzy() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F635);
}
function nomouth() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F636);
}
function medicalmask() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F637);
}
function upsidedown() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F643);
}function rollingeyes() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F644);
}function zipper() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F910);
}function money() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F911);
}function sick() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F912);
}function nerd() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F913);
}function hmmmm() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F914);
}function bandage() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F915);
}function vomit() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F914);
}function lol() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F923);
}function drooling() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F924);
}function lying() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F927);
}function sneese() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F927);
}function huh() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F928);
}function stareyed() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F929);
}function crazy() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F92A);
}function ssst() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F92B);
}function hihi() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F92D);
}function mindblown() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F92F);
}function monocle() {
	document.getElementById("idtest").value += String.fromCodePoint(0x1F9D0);
	}
 
</script>

	</body>
 </html>
