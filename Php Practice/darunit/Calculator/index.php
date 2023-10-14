<!DOCTYPE html>
<html>
<head>
  <title>Simple Calculator</title>
</head>
<body>
  <h1>Simple Calculator</h1>
  <form action="calculator.php" method="post">
    <label for="num1">First Number:</label>
    <input type="number" id="num1" name="num1" required>

    <label for="operator">Operator:</label>
    <select id="operator" name="operator" required>
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>

    <label for="num2">Second Number:</label>
    <input type="number" id="num2" name="num2" required>

    <input type="submit" value="Calculate">
  </form>
</body>
</html>