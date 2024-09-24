<?php
session_start();

// Check if name is passed in the query string
if (!isset($_GET['name'])) {
    // If no name, redirect back to login
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rock, Paper, Scissors Game</title>
</head>
<body>
    <h2>Welcome to Rock, Paper, Scissors, <?php echo htmlentities($_GET['name']); ?>!</h2>
    <!-- The game form would go here -->
    <p>Start the game by choosing Rock, Paper, or Scissors!</p>

    <form method="POST" action="game_logic.php">
        <input type="radio" id="rock" name="choice" value="rock" required>
        <label for="rock">Rock</label><br>
        <input type="radio" id="paper" name="choice" value="paper">
        <label for="paper">Paper</label><br>
        <input type="radio" id="scissors" name="choice" value="scissors">
        <label for="scissors">Scissors</label><br><br>
        <button type="submit">Play</button>
    </form>
</body>
</html>
