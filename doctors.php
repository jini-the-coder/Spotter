<html>
<body>
<?PHP
	$disease=$_GET['t1'];
	$location=$_GET['t2'];
	if ($disease=='hepatitis A' OR $disease=='Hepatitis B'  OR $disease=='Hepatitis C' OR $disease=='Hepatitis D' OR $disease=='Hepatitis E' OR $disease=='Alcoholic hepatitis') {
        $specialist="Hepatologist";
	} 
	elseif ($disease=='Chronic cholestasis' OR $disease=='Heartattack') {
			$specialist="Cardiologist";
	}
	elseif ($disease=='Diabetes"') {
			$specialist="Diabetologist";
	}
	elseif ($disease=='Fungal infection' OR $disease=='Allergy' OR $disease=='Acne Psoriasis Impetigo'  ) {
			$specialist="Dermatologist";
	}
	elseif ($disease=="") {
			$specialist="Psychatarist";
	}
	elseif ($disease=='Bronchial Asthma' OR $disease=='Tuberculosis' OR $disease=='Pneumonia') {
			$specialist="Pulmonologist";
	}
	elseif ($disease=='GERD' OR $disease=='Gastroenteritis' OR $disease=='Peptic ulcer diseae') {
			$specialist="Gastroenterologist";
	}
	elseif ($disease=='Hypoglycemia') {
			$specialist="Endocrinologist";
	}
	elseif ($disease=='Migraine') {
			$specialist="Neurologist";
	}
	elseif ($disease=='Cervical spondylosis' OR $disease=='Osteoarthristis' OR $disease=='Arthritis') {
			$specialist="Orthopaedist";
	}
	elseif ($disease=='Paralysis (brain hemorrhage)') {
			$specialist="Physiotherapist";
	}
	elseif ($disease=='Varicoseveins') {
			$specialist="Vascular Surgeon";
	}
	elseif ($disease=='Hypothyroidism' OR $disease=='Hyperthyroidism') {
			$specialist="Gynaec";
	}
	elseif ($disease=='(vertigo) Paroymsal  Positional Vertigo') {
			$specialist="ENT";
	}
	elseif ($disease=='Urinary tract infection') {
			$specialist="Urologist";
	}
	else {
          $specialist="General Physician";
	}
	
	$host=mysqli_connect("localhost","root","","doctorsvnps");
	$result = mysqli_query($host,"SELECT * FROM doctors WHERE Specialization = '$specialist' AND Location = '$location'");
?>
<table border="1">
<tr>
<th>Doctor Name</th>
<th>Contactno</th>
<th>Location</th>
<th>Specialization</th>
<?PHP
while($row = mysqli_fetch_assoc($result)) 
{?>
<tr>
<td>
  <?php print $row['Dname'];
		?>
 </td>
<td>
  <?php print $row['Dphno'];
		?>
 </td>
 <td>
  <?php print $row['Location'];
		?>
 </td>
 <td>
  <?php print $row['Specialization'];
		?>
 </td>
 </tr>
 <?PHP
 }?>
</table>
</body>
</html>
