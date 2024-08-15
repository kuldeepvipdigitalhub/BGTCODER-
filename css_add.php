<?php include ('./tutorialsheader.php');?>

	<div class="CSS_table">
          <br>
        <table style="width:17%">
        <tr>
            <th style="color:#ffffff">
            <a href="css_introduction.php"> CSS TUTORIALS</a></th>
        </tr>
       <tr>
            <td><a href="css_introduction.php"> CSS Introduction</a></td>
</tr>
            <tr>
            <td><a href="css_syntex.php">CSS Syntex</a> </td>
</tr>
                <tr>
            <td><a href="css_selectors.php"> CSS Selectors</a></td>
</tr>
<tr>
<td><a href="css_comments.php"> CSS Comments</a></td>
       </tr><tr>
       <td><a href="css_add.php">CSS Add</a> </td>
       </tr><tr>
            <td>CSS Color</td>
       </tr><tr>
            <td>CSS Backgrounds</td>
       </tr><tr>
            <td>CSS Borders</td>
       </tr><tr>
            <td>CSS Margins</td>
       </tr><tr>
            <td>CSS Padding</td>
       </tr><tr>
            <td>CSS Height/width</td>
       </tr><tr>
            <td>CSS Box Model</td>
       </tr><tr>
            <td>CSS Outline</td>
       </tr><tr>
            <td>CSS Text</td>
       </tr><tr>
            <td>CSS Fonts</td>
       </tr><tr>
            <td>CSS Icons</td>
       </tr><tr>
            <td>CSS Links</td>
       </tr><tr>
            <td>CSSLists </td>
       </tr><tr>
            <td>CSS Tables</td>
       </tr><tr>
            <td>CSS Display</td>
       </tr><tr>
            <td>CSS Max-Width</td>
       </tr><tr>
            <td>CSS Position</td>
       </tr><tr>
            <td>CSS Z-index</td>
       </tr><tr>
            <td>CSS Overflow</td>
       </tr><tr>
            <td>CSS Float</td>
       </tr><tr>
            <td>CSS Inline-block</td>
       </tr><tr>
            <td>CSS Align</td>
       </tr><tr>
            <td>CSS Combinators</td>
       </tr><tr>
            <td>CSS Pseudo-Class</td>
       </tr><tr>
            <td>CSS Pseudo-element</td>
       </tr><tr>
            <td>CSS Opacity</td>
       </tr><tr>
            <td>CSS Navigation Bar</td>
       </tr><tr>
            <td>CSS Dropdowns</td>
       </tr><tr>
            <td>CSS Image Gallery</td>
       </tr><tr>
            <td>CSS Image Sprites</td>
       </tr><tr>
            <td>CSS Attr Selectors</td>
       </tr><tr>
            <td>CSS Forms</td>
       </tr><tr>
            <td>CSS Counters</td>
       </tr><tr>
            <td>CSS Website Layout</td>
       </tr><tr>
            <td>CSS Units</td>
       </tr>
       <tr>
            <td>CSS Specificity</td>
       </tr><tr>
            <td>CSS !important</td>
       </tr><tr>
            <td>CSS Math Functions</td>
       </tr>
</div>      
<div class="content">
<h1>How To Add CSS</h1>
    <P>When a browser reads a style sheet, it will format the HTML document according to the information in the style sheet</P>
    <h2>Three Ways To Insert CSS</h2>
    <P>There are three ways of inserting a style sheet:</P>
    <P>1. External CSS</P>
    <p>2. Internal CSS</p>
    <p>3. Inline CSS</p>
    <h2>External CSS</h2>
    <P>With an external style sheet, you can change the look of an entire website by changing just one file!</P>
    <P>Each HTML page must include a reference to the external style sheet file inside the <link> element, inside the head section</P>
    <textarea><!DOCTYPE html>
        <html>
        <head>
        <link rel="stylesheet" href="mystyle.css">
        </head>
        <body>
        
        <h1>This is a heading</h1>
        <p>This is a paragraph.</p>
        
        </body>
        </html>
        </textarea>
        <P>An external style sheet can be written in any text editor, and must be saved with a .css extension.</P>
        <P>The external .css file should not contain any HTML tags.</P>
        <h2>Internal CSS</h2>
        <P>An internal style sheet may be used if one single HTML page has a unique style.</P>
        <p>The internal style is defined inside the style element, inside the head section.</p>
        <textarea><!DOCTYPE html>
            <html>
            <head>
            <style>
            body {
              background-color: linen;
            }
            
            h1 {
              color: maroon;
              margin-left: 40px;
            }
            </style>
            </head>
            <body>
            
            <h1>This is a heading</h1>
            <p>This is a paragraph.</p>
            
            </body>
            </html></textarea>
            <h2>Inline CSS</h2>
            <p>An inline style may be used to apply a unique style for a single element.</p>
            <p>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
            <textarea><!DOCTYPE html>
                <html>
                <body>
                
                <h1 style="color:blue;text-align:center;">This is a heading</h1>
                <p style="color:red;">This is a paragraph.</p>
                <h2>Inline CSS</h2>
                <p>An inline style may be used to apply a unique style for a single element.</p>
                <p>To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.</p>
                <textarea><!DOCTYPE html>
                    <html>
                    <body>
                    
                    <h1 style="color:blue;text-align:center;">This is a heading</h1>
                    <p style="color:red;">This is a paragraph.</p>
                    
                    </body>
                    </html></textarea>
                
                </body>
                </html></textarea>
</div>
</table>
