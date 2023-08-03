<!DOCTYPE html>
<html>
<head>
    <title>Patient Registration Form</title>
</head>
<body>
    <h1>Patient Registration Form</h1>
    <form action="submit_form.php" method="post">
        <label for="telephone">Telephone:</label>
        <input type="tel" id="telephone" name="telephone" required><br><br>
        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        
        <label for="idNumber">ID Number:</label>
        <input type="text" id="idNumber" name="idNumber" required><br><br>
        
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" required></textarea><br><br>
        
        <label for="county">County:</label>
        <input type="text" id="county" name="county" required><br><br>
        
        <label for="subCounty">Sub County:</label>
        <input type="text" id="subCounty" name="subCounty" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label><br><br>
        
        <label for="maritalStatus">Marital Status:</label>
        <select id="maritalStatus" name="maritalStatus" required>
            <option value="single">Single</option>
            <option value="married">Married</option>
            <option value="divorced">Divorced</option>
            <option value="widowed">Widowed</option>
        </select><br><br>
        
        <h2>Next of Kin</h2>
        
        <label for="nextOfKinName">Name:</label>
        <input type="text" id="nextOfKinName" name="nextOfKinName" required><br><br>
        
        <label for="nextOfKinDob">Date of Birth:</label>
        <input type="date" id="nextOfKinDob" name="nextOfKinDob" required><br><br>
        
        <label for="nextOfKinId">ID Number:</label>
        <input type="text" id="nextOfKinId" name="nextOfKinId" required><br><br>
        
        <label for="nextOfKinGender">Gender:</label>
        <input type="radio" id="nextOfKinMale" name="nextOfKinGender" value="male" required>
        <label for="nextOfKinMale">Male</label>
        <input type="radio" id="nextOfKinFemale" name="nextOfKinGender" value="female" required>
        <label for="nextOfKinFemale">Female</label><br><br>
        
        <label for="relationship">Relationship:</label>
        <input type="text" id="relationship" name="relationship" required><br><br>
        
        <label for="nextOfKinTelephone">Telephone:</label>
        <input type="tel" id="nextOfKinTelephone" name="nextOfKinTelephone" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
