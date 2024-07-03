<!-- obrazac.php -->
<form action="process_login.php" method="post">
    <div>
        <label for="ime">Ime:</label>
        <input type="text" id="ime" name="ime" required>
    </div>
    <div>
        <label for="prezime">Prezime:</label>
        <input type="text" id="prezime" name="prezime" required>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
    </div>
    <div>
        <label for="password">Lozinka:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <div>
        <input type="submit" value="Prijava">
    </div>
</form>
