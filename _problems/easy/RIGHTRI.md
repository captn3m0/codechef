---
{"category_name":"easy","problem_code":"RIGHTRI","problem_name":"Chef and The Right Triangles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rustinpiece","problem_tester":"Rubanenko","date_added":"8-08-2013","tags":{"0":"cook37","1":"easy","2":"geometry","3":"rustinpiece"},"editorial_url":"http://discuss.codechef.com/problems/RIGHTRI","time":{"view_start_date":1376852100,"submit_start_date":1376852100,"visible_start_date":1376852100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Chef is given a list of <b>N triangles</b>. Each triangle is identfied by the coordinates of its three corners in the 2-D cartesian plane. His job is to figure out <b>how many
of the given triangles are right triangles</b>. A right triangle is a triangle in which one angle is a 90 degree angle. The vertices
of the triangles have integer coordinates and all the triangles given are valid( three points aren't colinear ).  </p>
<p> </p>

<h3>Input</h3>
The first line of the input contains an integer <b>N</b> denoting the number of triangles. Each of the following <b>N</b>
lines contain six space separated integers <b>x1 y1 x2 y2 x3 y3</b> where <b>(x1, y1)</b>,
<b>(x2, y2)</b> and <b>(x3, y3)</b> are the vertices of a triangle.
<p> </p>
<h3>Output</h3>
Output one integer, the number of right triangles among the given triangles.
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000  (10<sup>5</sup>)</b></li>
<li> <b>0</b> ≤ <b>x1, y1, x2, y2, x3, y3</b> ≤ <b>20</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
0 5 19 5 0 0
17 19 12 16 19 0
5 14 6 13 8 7
0 4 0 14 3 14
0 2 0 14 9 2

<b>Output:</b>
3
</pre>
<p> </p>
<h3>Explanation</h3>
<p>The first triangle and the last two triangles of the example are right triangles.</p>