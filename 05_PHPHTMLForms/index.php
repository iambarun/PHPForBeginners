<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    var_dump($_POST);
}
?>
<?php require 'includes/header.php'; ?>
<form method="post">
    <div style="background-color: aliceblue">
        <label for="id">uname :</label><input id="id" name="uname">
    </div>
    <div style="background-color: aquamarine">
        <label for="pwd">pword</label>: <input id="pwd" name="pword" type="password">
    </div>
    <fieldset>
        <legend>Contact Information</legend>
        <div>
            <label for="phone">phone</label>: <input id="phone" name="telephone" type="tel" placeholder="enter you phone number">
        </div>
        <div style="background-color: aquamarine">
            <label for="email">email</label>: <input id="email" name="email" type="email" placeholder="enter your email address">
        </div>
        <div>
            <label for="url">url</label>: <input id="url" name="url" type="url" placeholder="enter your url">
        </div>
        <div>
            <label>Postal : <input name="postal" pattern="[0-9]{6}" title="Please Enter a valid postal code"></label>
        </div>
    </fieldset>

    <div style="background-color: aquamarine">
        <label for="dt">time</label>: <input id="dt" name="datetime" type="datetime-local">
    </div>
    <div>
        <label for="content">content:</label> <textarea id="content" name="content" rows="7" cols="50">Enter you content here</textarea>
    </div>
    <fieldset>
        <legend>Likes</legend>
        <div style="background-color: aquamarine">
            <p>Which colour do you like?</p>
            <div>
                <input type="checkbox" name="colour[]" value="red" id="redcolor"><label for="redcolor">Red</label>
            </div>
            <div>
                <input type="checkbox" name="colour[]" value="green" id="greencolor"><label for="greencolor">Green</label>
            </div>
            <div>
                <input type="checkbox" name="colour[]" value="blue" id="bluecolor"><label for="bluecolor">Blue</label>
            </div>
        </div>
        <div>
            <p>Which colour is your favourite?</p>
            <label>
                <input type="radio" name="color" value="red" checked>Red
            </label><br>
            <label>
                <input type="radio" name="color" value="green">Green
            </label><br>
            <label>
                <input type="radio" name="color" value="blue">Blue
            </label>
        </div>
    </fieldset>

    <div style="background-color: aquamarine">
        <select name="marque[]">
            <optgroup label="India">
                <option value="tata" >TATA</option>
                <option value="ashok">ASHOK</option>
                <option value="mahendra" selected>MAHENDRA</option>
            </optgroup>
            <optgroup label="Outside India">
                <option value="bmw">BMW</option>
                <option value="ford">FORD</option>
                <option value="kia">KIA</option>
            </optgroup>
        </select>
    </div>
    <div style="background-color: aquamarine">
        <input id="agreement" type="checkbox" name="terms" value="yes" checked><label for="agreement">I agree with terms</label>
    </div>

    <div>
        <button>send</button>
    </div>
</form>
<?php require 'includes/footer.php'; ?>
