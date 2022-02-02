---
{"category_name":"easy","problem_code":"RIGHTTRI","problem_name":"Right Triangle","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"mgch","date_added":"27-05-2016","tags":{"0":"binary","1":"cook71","2":"easy","3":"kingofnumbers"},"editorial_url":"http://discuss.codechef.com/problems/RIGHTTRI","time":{"view_start_date":1466965800,"submit_start_date":1466965800,"visible_start_date":1466965800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/mandarin/RIGHTTRI.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/russian/RIGHTTRI.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK71/vietnamese/RIGHTTRI.pdf">Vietnamese</a> as well.</h3>
<p>Chef taught his brother Chefu about right angled triangle and its properties. Chefu says that he has understood everything about right angled triangles. Chef wants to check learning of his brother by asking the following question "Can you find a right angled triangle whose length of hypotenuse  is <b>H</b> and its area is <b>S</b>?"</p>
<p>Chefu is confused how to solve it. I hope you are not. Please solve this by finding a right angled triangle with hypotenuse <b>H</b> and area <b>S</b>. If it not possible to do so, then output -1.</p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of test-cases. <b>T</b> test cases follow.</p>
<p>For each test case, there will be a single line containing two space separated integers <b>H</b> and <b>S</b>.</p>
<h3>Output</h3>
<p>Output the answer for each test-case in a single line. If it is not possible to find such a triangle, output -1. Otherwise print 3 real numbers corresponding to the lengths of the sides of the triangle sorted in non-decreasing order. Please note that the length of the triangle sides should not differ by more than <b>0.01</b> in absolute value from the correct lengths.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>H</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>S</b> ≤ <b>10<sup>12</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>4
5 6
6 10
258303 89837245228
616153 77878145466
</tt>
<b>Output:</b>
<tt>3.00000 4.00000 5.00000
-1
-1
285168.817674 546189.769984 616153.000000
</tt>
</pre>