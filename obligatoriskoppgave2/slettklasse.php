<?php include ("index.html"); 
include ("dbtil.php"); 
?>
 
<script src="funksjoner.js"> </script>
 
 
 
<h3>Slett Klassekode</h3>
 
 
 
<form method="post" action="" id="slettKlassekodeSkjema" name="slettKlassekodeSkjema" onSubmit="return bekreft()">
 
    Klassekoder <br/>
 
    <?php include("dynafunksjoner.php"); sjekkbokserKlassekode(); ?>
 
  <input type="submit" value="Slett klassekode" name="slettKlassekodeKnapp" id="slettKlassekodeKnapp" />
 
</form>
<?php
  if (isset($_POST ["slettKlassekodeKnapp"]))
    {
      $klassekode=$_POST ["klassekode"];
      $antall=count($klassekode);
 
      if ($antall==0)
        {
          print ("Ingen klasse ble valgt <br />");
        }
      else
        {
          include("dbtil.php");
          for ($r=0;$r<$antall;$r++)
            {
              $sqlSetning="DELETE FROM klasse_table WHERE klassekode='$klassekode[$r]';";
              mysqli_query($db,$sqlSetning) or die ("ikke mulig &aring; slette data i databasen". mysqli_error($db));
            }
          print ("De valgte klassene er n&aring; slettet <br />");
        }
    }
    include("slutt.php")
?>
