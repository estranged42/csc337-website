<!doctype html>
<html>
<head>
  <title>php/forms2.php</title>
  <link rel="stylesheet" type="text/css" href="tables.css" />
</head>
<body>
  <h1>Form HTML Elements</h1>
  <form action="forms1.php" method="POST">
    <table>
      <tr>
        <th>HTML Element</th>
        <th>attributes</th>
        <th>Example</th>
      </tr>

      <tr>
        <td>input</td>
        <td>type="text"</td>
        <td><input type="text" name="input" size="20"></td>
      </tr>
      
      <tr>
        <td>input</td>
        <td>type="checkbox"</td>
        <td><input type="checkbox" name="check" checked></td>
      </tr>

      <tr>
        <td>input</td>
        <td>type="radio"</td>
        <td><input type="radio" name="radioset"></td>
      </tr>

      <tr>
        <td>input</td>
        <td>type="submit"</td>
        <td><input type="submit" value="A Submit Button"></td>
      </tr>

      <tr>
        <td>input</td>
        <td>type="color"</td>
        <td><input type="color" value="A Submit Button"></td>
      </tr>

      <tr>
        <td>input</td>
        <td>type="date"</td>
        <td><input type="date" value="A Submit Button"></td>
      </tr>

      <tr>
        <td>input</td>
        <td>type="file"</td>
        <td><input type="file"></td>
      </tr>

      <tr>
        <td>input</td>
        <td>type="range"</td>
        <td><input type="range" min="0" max="100" value="75" name="slider"></td>
      </tr>

      <tr>
        <td>textarea</td>
        <td>&nbsp;</td>
        <td><textarea rows="3" cols="15" name="desc"></textarea></td>
      </tr>

      <tr>
        <td>select</td>
        <td>&nbsp;</td>
        <td>
          <select>
              <option value="1">Option One</option>
              <option value="2">Option Two</option>
          </select>
        </td>
      </tr>
 
       <tr>
        <td>select</td>
        <td>size="4"</td>
        <td>
          <select size="4">
              <option value="1">Option One</option>
              <option value="2">Option Two</option>
              <option value="2">Option Three</option>
              <option value="2">Option Four</option>
          </select>
        </td>
      </tr>
 
       <tr>
        <td>meter</td>
        <td>&nbsp;</td>
        <td><meter min="0" max="100" value="90" low="25" high="75" optimum="60" form="slider"></td>
      </tr>
  
    </table>
  </form>
</body>
</html>
