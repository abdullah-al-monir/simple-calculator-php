<?php

declare(strict_types=1);
include("includes/class.autoload.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Calculator</title>
</head>

<body>
  <form action="includes/calc.inc.php" method="post" class="max-w-sm mx-auto mt-8 p-4 bg-gray-100 rounded shadow-md">
    <div class="mb-4">
      <label for="num1" class="block text-gray-700 text-sm font-bold mb-2">First number</label>
      <input type="number" name="num1" id="num1" placeholder="Enter first number" class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-blue">
    </div>

    <div class="mb-4">
      <label for="operator" class="block text-gray-700 text-sm font-bold mb-2">Operator</label>
      <select name="operator" id="operator" class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-blue">
        <option value="add">Addition</option>
        <option value="sub">Subtraction</option>
        <option value="div">Division</option>
        <option value="mul">Multiplication</option>
      </select>
    </div>

    <div class="mb-4">
      <label for="num2" class="block text-gray-700 text-sm font-bold mb-2">Second number</label>
      <input type="number" name="num2" id="num2" placeholder="Enter second number" class="w-full px-3 py-2 border rounded shadow appearance-none focus:outline-none focus:shadow-outline-blue">
    </div>

    <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline-blue">Calculate</button>
  </form>

</body>

</html>