<!DOCTYPE html>
<html>
<body>
<form action="data.php" method="POST">
<div class="inputBox">
Name: <input type="text" name="firstName" value=""><br>
City: <input type="text" name="cityName" value=""><br>
State: <input type="text" name="stateNmae" value=""><br>
Zipcode: <input type="text" name="zipCode" value=""><br>
No. in Party: <input type="text" name="noInParty" value=""><br>

</div>
<div class="containerTravelingFor">
  <p>Traveling for :</p>
    <label class="radio-inline">
      <input type="radio" name="TravelingFor" Value="Business" checked >Business
    </label>
    <label class="radio-inline">
      <input type="radio" name="TravelingFor" value="Pleasure" >Pleasure
    </label>
    <label class="radio-inline">
      <input type="radio" name="TravelingFor" value="convention" Checked>Convention
    </label>
    <label class ="radio-inline">
    <input type ="radio" name="TravelingFor" value="Other" >Other
    </label>
</div>
<div class="containerHowDid">
<p> How did you hear about the Monroe West Monroe CVB?</p>
<label class="check-inline">
      <input type="checkbox" name="HowDidYouHear" Value="Billboard">Billboard
    </label>
    <label class="check-inline">
      <input type="checkbox" name="HowDidYouHear" value="Pleasure" >Interstate Sings
    </label>
    <label class="check-inline">
      Others: <input type="text" name="HowDidYouHear" value="">
    </label>
</div>

<div class="DidYouStay">
<p> Did you stay in a Monroe-West Monroe hotel? </p>
<input type="checkbox" name="DidYouStay" value="Yes" checked > Yes
  <input type="checkbox" name="DidYouStay" value="No" /> No
</div>

<input type="submit" value="Submit">
</form>

</body>
</html>
