<?php
// Simple PHP To-Do Application

// Initialize an array to hold to-do items (in a real app, you might store this in a database)
$todos = ["Buy groceries", "Finish PHP project", "Read a book"];

// Display the list of to-do items
echo "<h1>My To-Do List</h1>";
echo "<ul>";

foreach ($todos as $todo) {
    echo "<li>" . htmlspecialchars($todo) . "</li>";
}
echo "</ul>";

// Simple form to add a new to-do item (form handling would be added in a more complex setup)
echo '<form method="POST" action="index.php">';
echo '<input type="text" name="new_todo" placeholder="Add new to-do" required>';
echo '<button type="submit">Add</button>';
echo '</form>';

// Handle new to-do submission (for demonstration purposes; this won’t persist beyond the session)
if($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["new_todo"])){
    $newTodo = htmlspecialchars($_POST["new_todo"]);
    $todos[] = $newTodo;
    echo "<p>Added: " . $newTodo . "</p>";
}

?>