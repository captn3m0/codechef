---
{"category_name":"hard","problem_code":"TUZTRN","problem_name":"Puppy and Triangles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pavel1996","problem_tester":"kostya_by","date_added":"22-01-2016","tags":{"0":"cook67","1":"geometry","2":"implementation","3":"maths","4":"pavel1996"},"editorial_url":"http://discuss.codechef.com/problems/TUZTRN","time":{"view_start_date":1456081200,"submit_start_date":1456081200,"visible_start_date":1456081200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/mandarin/TUZTRN.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/russian/TUZTRN.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK67/vietnamese/TUZTRN.pdf">Vietnamese</a> as well.</h3>


<p>Puppy Tuzik has recently found two triangles and a quadrilateral cut out from a large sheet of paper. Being a curious puppy, Tuzik started thinking of a game with these three geometric figures. All of a sudden, a thrilling idea crossed his mind! He wonders whether it's possible to combine these triangles by moving, flipping and/or rotating them, and cover exactly the quadrilateral with no overlap between the two triangles. Giving the coordinates of the triangles and the quadrilateral, your task is to answer the question: whether it's possible to combine the triangles to cover exactly the given quadrilateral?</p>

<h3>Input</h3>

<p>The first line contains one integer <b>T</b> denoting the number of test cases.</p>
<p>The description of each test case consists of <b>ten</b> lines, each containing two integers denoting the coordinates of a point on the Cartesian plane. The first <b>three</b> lines of the test case description contain the points forming the first triangle. The next <b>three</b> lines describe the points forming the second triangle. The last <b>four</b> give the points forming the quadrilateral and are given in either a clockwise order, or a counterclockwise order.</p>
<p>It's guaranted that all the figures have a non-zero area and do not self-intersect or self-touch.</p>

<h3>Output</h3>
<p>For each test case, output a line with the string <b>Yes</b> or <b>No</b>, denoting the answer to the question.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>600</b></li>
<li><b>-20000</b> ≤ <b>x, y</b> ≤ <b>20000</b> for each point in the input</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
0 0 
1 0
1 1 
3 3 
2 2 
3 2 
5 5 
5 4 
4 4 
4 5 
0 0
2 2
2 0
1 1 
1 2
2 2
0 0
0 1
1 1
1 0

<b>Output:</b>
Yes
No
</pre>

<h3>Explanation</h3>
<p>The figures from the first test case of the sample:</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/COOK67/1.png" width="400"></p>
<p>The figures from the second test case of the sample:</p>
<p><img src="https://s3.amazonaws.com/codechef_shared/download/COOK67/3.png" width="400"></p>