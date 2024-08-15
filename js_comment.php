<?php include ('./tutorialsheader.php');?>

	<div class="java_table">
        <table style="width:17%">
        <tr>
            <th style="color:#ffffff">
            <a href="java_introduction.php">
             JAVA TUTORIALS</a></th>
        </tr>
    
       <tr>
             <td><a href="java_introduction.php">JAVA Introduction</a></td>
             </tr>
       <tr>
            <td><a href="java_history.php"> JAVA History</a></td>
       </tr><tr>
            <td><a href="java_feature.php"> JAVA Feature</a></td>
       </tr>
       <tr>
            <td><a href="java_syntax.php">JAVA syntax</a> </td>
</tr>
            <tr>
            <td> <a href="js_comment.php">JAVA Comments</a></td>
       </tr><tr>
       <td> <a href="js_variables.php">JS Variables</a></td>
       </tr><tr>
            <td>JAVA Data Type</td>
       </tr><tr>
            <td>JAVA Type Casting</td>
       </tr><tr>
            <td>JAVA Operators</td>
       </tr><tr>
            <td>JAVA Strings</td>
       </tr><tr>
            <td>JAVA Math </td>
       </tr><tr>
            <td>JAVA Booleans</td>
       </tr><tr>
            <td>JAVA If...Else</td>
       </tr><tr>
            <td>JAVA Switch</td>
       </tr><tr>
            <td>JAVA While Loops </td>
       </tr><tr>
            <td>JAVA For Loops</td>
       </tr><tr>
            <td>JAVA Break/Continue</td>
       </tr><tr>
            <td>JAVA Arrays</td>
       </tr>
<tr><H3>
          JAVA METHODS</H3></tr>
           <tr> <td>JAVA Methods</td>
       </tr><tr>
            <td>JAVA Methods Parameters </td>
       </tr><tr>
            <td> JAVA Methods Overloading</td>
       </tr><tr>
            <td>JAVA Scope</td>
       </tr><tr>
            <td>JAVA Recursion</td>
       </tr>       
</div> 
<div class="content">
    <h1>JavaScript Comments</h1>
    <p>JavaScript comments can be used to explain JavaScript code, and to make it more readable.
    </p>
    <p>JavaScript comments can also be used to prevent execution, when testing alternative code</p>
    <h1>Types Of Comments In JavaScript :</h1>
    <h2>1. Single Line Comments :-</h2>
    <p>Single line comments start with //.</p>
    <p>Any text between // and the end of the line will be ignored by JavaScript (will not be executed).</p>
    <p>his example uses a single-line comment before each code line:</p>
    <h3>Example :</h3>
    <pre>// Change heading:
        document.getElementById("myH").innerHTML = "My First Page";
        
        // Change paragraph:
        document.getElementById("myP").innerHTML = "My first paragraph.";</pre>
        <p>This example uses a single line comment at the end of each line to explain the code:</p>
        <h1>Multi-line Comments</h1>
        <p>Multi-line comments start with /* and end with */.</p>
        <p>Any text between /* and */ will be ignored by JavaScript.</p>
        <p>This example uses a multi-line comment (a comment block) to explain the code:</p>
        <h3>Example :</h3>
        <pre>/*
            The code below will change
            the heading with id = "myH"
            and the paragraph with id = "myP"
            in my web page:
            */
            document.getElementById("myH").innerHTML = "My First Page";
            document.getElementById("myP").innerHTML = "My first paragraph.";</pre>
            <h1>Using Comments to Prevent Execution</h1>
            <p>Using comments to prevent execution of code is suitable for code testing.</p>
            <p>Adding // in front of a code line changes the code lines from an executable line to a comment.</p>
            <p>This example uses // to prevent execution of one of the code lines:</p>
            <h3>Example :</h3>
        <pre>//document.getElementById("myH").innerHTML = "My First Page";
                document.getElementById("myP").innerHTML = "My first paragraph.";
                </pre>
                <p>This example uses a comment block to prevent execution of multiple lines:</p>
                <h3>Example :</h3>
                <pre>/*
                    document.getElementById("myH").innerHTML = "My First Page";
                    document.getElementById("myP").innerHTML = "My first paragraph.";
                    */</pre>

</body>
</html>