<?php include ('./tutorialsheader.php');?>

	<div class="js_table">
          <br>
        <table style="width:17%">
        <tr>
            <th style="color:#ffffff">
            <a href="js_intoduction.php">
             JAVA SCRIPT TUTORIALS</a></th>
</tr>
       <tr>
            <td><a href="js_introduction.php">JS Introduction</a> </td>
</tr>
            <tr>
            <td><a href="js_history.php">Js history</a></td>
</tr>
<tr>
<td><a href="js_syntax.php">JS Syntex</a> </td>
       </tr><tr>
       <td> <a href="js_comment.php">JAVA Comments</a></td>
       </tr><tr>
            <td> <a href="js_variables.php">JS Variables</a></td>
       </tr><tr>
            <td>JS Let</td>
       </tr><tr>
            <td>JS Const</td>
       </tr><tr>
            <td>JS Operators</td>
       </tr><tr>
            <td>JS Arithmetric</td>
       </tr><tr>
            <td>JS Assignment</td>
       </tr><tr>
            <td>JS Data Type</td>
       </tr><tr>
            <td>JS Functions</td>
       </tr><tr>
            <td>JS Objects</td>
       </tr><tr>
            <td>JS Events</td>
       </tr><tr>
            <td>JS Strings</td>
       </tr><tr>
            <td>JS String Methods</td>
       </tr><tr>
            <td>JS String Search</td>
       </tr><tr>
            <td>JS String Tamplates</td>
       </tr><tr>
            <td>JS Numbers</td>
       </tr><tr>
            <td>JS Biglnt</td>
       </tr><tr>
            <td>JS Number Methods</td>
       </tr><tr>
            <td>JS Number Properties</td>
       </tr><tr>
            <td>JS Arrays</td>
       </tr><tr>
            <td>JS Array sort</td>
       </tr><tr>
            <td>JS Array Iteration</td>
       </tr><tr>
            <td>JS Array Const</td>
       </tr><tr>
            <td>JS Dates</td>
       </tr><tr>
            <td>JS Date Formats</td>
       </tr><tr>
            <td>JS Date Get Methods</td>
       </tr><tr>
            <td>JS Date set Methods</td>
       </tr><tr>
            <td>JS Math</td>
       </tr><tr>
            <td>JS Random</td>
       </tr><tr>
            <td>JS Booleans</td>
       </tr><tr>
            <td>JS Comparisons</td>
       </tr><tr>
            <td>JS If Else</td>
       </tr><tr>
            <td>JS Switch</td>
       </tr><tr>
            <td>JS Loop For</td>
       </tr><tr>
            <td>JS Loop  For In</td>
       </tr><tr>
            <td>JS Loop For Of</td>
       </tr><tr>
            <td>JS Loop While</td>
       </tr><tr>
            <td>JS Break</td>
       </tr><tr>
            <td>JS Iterables</td>
       </tr>
       <tr>
            <td>JS Sets</td>
       </tr>
       <tr>
            <td>JS Maps</td>
       </tr>
       <tr>
            <td>JS TypeOf</td>
       </tr>
       <tr>
            <td>JS Type Conversion</td>
       </tr>
       <tr>
            <td>JS Bitwise</td>
       </tr>
       <tr>
            <td>JS RegExp</td>
       </tr>
       <tr>
            <td>JS Precedence</td>
       </tr>
       <tr>
            <td>JS Errors</td>
       </tr>
       <tr>
            <td>JS Scope</td>
       </tr>
       <tr>
            <td>JS Hoisting</td>
       </tr>
       <tr>
            <td>JS Strict Mode</td>
       </tr>
       <tr>
            <td>JS this Keyword</td>
       </tr>
       <tr>
            <td>JS Arrows Function</td>
       </tr>
       <tr>
            <td>JS Classes</td>
       </tr>
       <tr>
            <td>JS Modules</td>
       </tr>
       <tr>
            <td>JS JSON</td>
       </tr>
       <tr>
            <td>JS Debugging</td>
       </tr>
       <tr>
            <td>JS Style Guide</td>
       </tr>
       <tr>
            <td>JS Best Practices</td>
       </tr>
       <tr>
            <td>JS Mistakes</td>
       </tr>
       <tr>
            <td>JS Performance</td>
       </tr>
       <tr>
            <td>JS Reserved Words</td>
       </tr>
</div>      
	<div class="content">
    <h1>JavaScript Variables</h1>
    <h3>4 Ways to Declare a JavaScript Variable:</h3>
    <p>1. Using var</p>
    <p>2. Using let</p>
    <p>3. Using const</p>
    <p>4. Using nothing</p>
    <h1>What are Variables?</h1>
    <p>Variables are containers for storing data (storing data values).</p>
    <p>In this example, x, y, and z, are variables, declared with the var keyword:</p>
    <h3>Example :</h3>
    <pre>
         var x = 5;
         var y = 6;
         var z = x + y;</pre>
        <p>In this example, x, y, and z, are variables, declared with the let keyword:</p>
    <pre>
         let x = 5;
         let y = 6;
         let z = x + y;
            </pre>
            <p>In this example, x, y, and z, are undeclared variables:</p>
    <pre>
         x = 5;
         y = 6;
         z = x + y;</pre>
                <p>From all the examples above, you can guess:</p>
    <pre>
         x stores the value 5
         y stores the value 6
         z stores the value 11</pre>
         <h1>When to Use JavaScript var?</h1>
         <p>Always declare JavaScript variables with var,let, orconst.</p>
         <p>The var keyword is used in all JavaScript code from 1995 to 2015.</p>
         <p>The let and const keywords were added to JavaScript in 2015. </p>
         <p>If you want your code to run in older browsers, you must use var.</p>
         <h1>When to Use JavaScript const?</h1>
         <p>If you want a general rule: always declare variables with const.</p>
         <p>If you think the value of the variable can change, use let.</p>
         <p>In this example, price1, price2, and total, are variables:</p>
         <h3>Example :</h3>
    <pre>
         const price1 = 5;
         const price2 = 6;
         let total = price1 + price2;</pre>
            <p>The two variables price1 and price2 are declared with the const keyword.</p>
            <p>These are constant values and cannot be changed.</p>
            <p>The variable total is declared with the let keyword.</p>
            <p>This is a value that can be changed. </p>
            <h1>Just Like Algebra </h1>
            <p>Just like in algebra, variables hold values:</p>
    <pre>
         let x = 5;
         let y = 6;</pre>
         <p>Just like in algebra, variables are used in expressions:</p>
    <pre>
         let z = x + y;</pre>
</div>
</table>