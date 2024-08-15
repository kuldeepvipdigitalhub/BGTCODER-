<?php include ('./tutorialsheader.php');?>

	<div class="python_table">
          <br>
        <table style="width:17%">
        <tr>
            <th style="color:#ffffff">
            <a href="python_introduction.php">
             PYTHON TUTORIALS</a></th>
        </tr>
        <tr>
            <td><a href="python_introduction.php">Python introduction</a></td>
       </tr>
       <tr>
            <td><a href="python_features.php">Python Features</a></td>
       </tr><tr>
            <td><a href="python_syntax.php">Python syntax</a></td>
       </tr><tr>
            <td><a href="python_comment.php"> Python Comments</a></td>
       </tr>
	   <tr>
            <td>Python Variables</td>
       </tr><tr>
            <td>Python Data Type </td>
       </tr><tr>
            <td>Python  Numbers</td>
       </tr><tr>
            <td>Python Casting</td>
       </tr><tr>
            <td>Python Strings </td>
       </tr><tr>
            <td>Python Booleans </td>
       </tr><tr>
            <td>Python Operators </td>
       </tr><tr>
            <td>Python List</td>
       </tr><tr>
            <td>Python Tuples</td>
       </tr><tr>
            <td>Python Sets </td>
       </tr><tr>
            <td>Python  Dictionaries</td>
       </tr><tr>
            <td>Python If...Else  </td>
       </tr><tr>
            <td>Python While Loops </td>
       </tr><tr>
            <td>Python For Loops </td>
       </tr><tr>
            <td>Python Functions</td>
       </tr><tr>
            <td>Python Lambda</td>
       </tr><tr>
            <td>Python Arrays </td>
       </tr><tr>
            <td>Python Classes/Objects </td>
       </tr><tr>
            <td>Python Inheritance </td>
       </tr><tr>
            <td>Python Iterators </td>
       </tr><tr>
            <td>Python Scope </td>
       </tr><tr>
            <td>Python Modules </td>
       </tr><tr>
            <td>Python Dates </td>
       </tr><tr>
            <td>Python Math </td>
       </tr><tr>
            <td>Python JSON</td>
       </tr><tr>
            <td>Python RegEx </td>
       </tr><tr>
            <td>Python PIP </td>
       </tr><tr>
            <td>Python Try...Except</td>
       </tr><tr>
            <td>Python User Input </td>
       </tr><tr>
            <td>Python String Formatting </td>
       </tr>      
</div>  
<div class="content">
<h1>Python Comments</h1>
<p> Python Program में लिखे गए वह लाइन जिसे Program एग्जीक्यूशन के दौरान Interpreter के द्वारा Ignored( अनदेखा ) किया जाता है | 
     अर्थात Program में लिखे गए कमेंट को इंटरप्रेटर एग्जीक्यूट नहीं करता है| उसे कमेंट करते हैं|</p>

<p>दरअसल Comments का उपयोग Program में लिखे गए सेक्शन, Formula, algorithm, Logic, variables , Function , class, objects इत्यादि को explain करने के लिए किया जा जाता है|</p>

<p>बड़े तथा कांप्लेक्स Program को लिखते समय Commnets का उपयोग किया जाता है| जिससे बाद में वह प्रोग्रामर उस Program को आसानी से समझ पाता है कि यह code यहां क्यों लिखा गया है | 
     या फिर कोई अन्य व्यक्ति भी उस Program को समझना चाहे तो उस में लिखे गए कमैंट्स को पढ़कर आसानी से उस Program को समझ सकता है|</p>
<h2>Comments का उपयोग क्यों किया जाता है</h2>
<pre>प्रोग्रामिंग लैंग्वेज में Comments का उपयोग निम्न कारणों से किया जाता है:-

1.Code को Explain करने के लिए
2.Program के code को अधिक पठनीय (readable) बनाने के लिए
3.Program की टेस्टिंग के समय कुछ कोड को non executable बनाने के लिए
<h2>Python Comments के प्रकार</h2>
<pre>पाइथन तीन तरह के कॉमेंट होते हैं-

1.Single Line Comment (एक लाइन का कमेंट)
2.Multi Line Comments (एक से ज्यादा लाइन का कमेंट)
3.Docstring (डॉक्स्ट्रिंग)</pre>
<h3>Single Line Comment </h3>
<p>Python Program में Single Line Comment को # (hash) sign साइन का यूज करके लिखा जाता है| Comments वाले लाइन का पहला Charecter # होता है | 
     Python कंपाइलर को जैसे ही किसी लाइन का पहला Character # मिलता है, वह उस लाइन को छोड़ (Ignore) कर आगे बढ़ जाता है</p>
<pre># program to display Hello World!

print(“Hello World!”)</pre>

<h3>Multi Line Comments</h3>
<p>Python Programming Language में Multi Line Comment  के लिए कोई अलग Syntax नहीं है| Multi Line Comment  को हम दो तरह से लिख सकते हैं| 
     पहला तरीका यह है कि हम Multi Line Comment लिखने के लिए हर लाइन का पहला charecter # sign का उपयोग करें| जैसे-</p>
<pre>
# First linecomment
# Second line comment
#This is third line comment
print(“Hello, World!”)</pre>
<p>
दूसरे तरीके में हम Multi Line Comment को लिखने के लिए ट्रिपल कोट्स(“””) का उपयोग कर सकते हैं| 
क्योंकि Python Programming Language में अगर किसी string को Variable में Asign नहीं करते हैं, तब Python इंटरप्रेटर उसे ignore कर देता है, अर्थात इसे एग्जीक्यूट नहीं करता है |</p>
<pre>
“””
This is a multi-line comment
written using triple quotes and
more than just one line
“””
print(“Hello, World!”)<pre>

<h3>Docstring (डॉक्स्ट्रिंग)</h3>
<p>डॉक्स्ट्रिंग पाइथन में एक Buit-in concept है, जिसका उपयोग करके Module, Function, classes तथा methods का description लिखा जाता है| 
     डॉक्स्ट्रिंग को एक comments के तरह किसी भी function, module,class पहले लाइन के बाद लिखा जाता है|</p>

<p>Docstring एक Line या एक से ज्यादा Line  का होता है | Docstring को ट्रिपल कोट्स के अंदर लिखा जाता है|</p>
<pre>
Example :-

def sum(x, y):
“””Calculate the sum of two numbers.”””
return x + y
</pre>
<p>ऊपर दिए गए Example में “ ”Calculate the sum of two numbers.””” एक docstring है | जो इस Function के बारे में डिस्क्राइब करता है| 
     docstring में लिखे गए comment को __doc__ attribute का Use करके Print कराया जा सकता है|</p>
</body>
</html>