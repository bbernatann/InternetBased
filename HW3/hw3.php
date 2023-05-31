<!DOCTYPE html>
<html>
<head>
    <title>Input Types in HTML5</title>
</head>
<body>
<h1>Input Types in HTML5</h1>

<label for="hidden">Hidden:</label>
<input type="hidden" id="hidden" name="hidden" value="Hidden Value"><br><br>

<label for="tel">Tel:</label>
<input type="tel" id="tel" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890"><br><br>

<label for="email">Email:</label>
<input type="email" id="email" name="email" required><br><br>

<label for="number">Number:</label>
<input type="number" id="number" name="number" min="1" max="100" step="1"><br><br>

<label for="range">Range:</label>
<input type="range" id="range" name="range" min="0" max="10" step="1"><br><br>

<label for="search">Search:</label>
<input type="search" id="search" name="search"><br><br>

<label for="image">Image:</label>
<input type="image" id="image" name="image" src="https://picsum.photos/id/128/400/400" alt="Submit"><br><br>

<label for="week">Week:</label>
<input type="week" id="week" name="week"><br><br>

<label for="url">URL:</label>
<input type="url" id="url" name="url" placeholder="https://www.example.com"><br><br>

<label for="datetime-local">DateTime-Local:</label>
<input type="datetime-local" id="datetime-local" name="datetime-local"><br><br>

<label for="month">Month:</label>
<input type="month" id="month" name="month"><br><br>

<label for="time">Time:</label>
<input type="time" id="time" name="time"><br><br>

<input type="submit" value="Submit">
</body>
</html>

