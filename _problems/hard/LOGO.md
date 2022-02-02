---
{"category_name":"hard","problem_code":"LOGO","problem_name":"McHefs 3D Logo","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"vinayak garg","problem_tester":"gerald","date_added":"23-02-2013","tags":{"0":"cook45","1":"geometry","2":"implementation","3":"medium","4":"vinayak"},"editorial_url":"http://discuss.codechef.com/problems/LOGO","time":{"view_start_date":1398018600,"submit_start_date":1398018600,"visible_start_date":1398018600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/LOGO.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/LOGO.pdf">Russian</a> as well.</h3>
<p></p><p>Chef has opened a new fast food chain - <b>McHefs</b>. He engaged the best logo designers of country to build a cool 3D logo for the new restaurants. Later he realised that he can't print 3D logo on menu, neon signboard, website etc. So he has asked you to make a 2D version of the 3D logo. You will be using a 320px × 240px (columns × lines) canvas to produce the 2D logo.</p>
<p>The logo is made using only triangles and quadrilaterals (convex and concave, but not self-intersecting). These polygons meet the following rules:</p>
<p>1) They may be tilted in any direction.<br/>2) They have a solid colour. There are 9 colours numbered from 1 to 9.<br/>3) They are allowed to intersect.</br/></br/></p>
<p>One logo which appeared during designing:<br/><br/><img src="//www.codechef.com/download/x2yqVkc.png" /><br/>Notice the "jaggies"(jagged edges) in image; they are unavoidable hence acceptable in solution.<br/>The XYZ axis are oriented as:<br/><img src="//www.codechef.com/download/Xb82VFH.png" /><br/>Note that +Z axis is coming out.</br/></br/></br/></br/></br/></br/></p>
<p><b>Important points:</b><br />1. If <X, Y, Z> value of 2 polygons are exactly same, then the greater color value of two will be visible. Example at end (in Notes)<br />2. The edges of triangle or quadrilateral should be as accurate as if drawn by <a href="http://en.wikipedia.org/wiki/Bresenham%27s_line_algorithm">Bresenham's algorithm</a>. Note that you don't have to implement Bresenham's algorithm, any approach which doesn't suffers from floating point error is acceptable. Also when rounding off <b>X or Y</b> whose decimal part is exactly <b>0.5</b>, you have to round up. Like 21.5 becomes 22.</x,></p>
<h3>Input</h3>
<p>First line contains <b>N</b>, the number of polygons (triangles and quadrilaterals). Then <b>N</b> lines follow, each consists of <b>T</b> the type of polygon, <b>C</b> the color of polygon and 3D coordinates of polygon &lt;<b>X, Y, Z</b>>.</p>
<p>When <b>T</b> is 1, the polygon is Triangle and 3 coordinates are given for the triangle's vertices. When <b>T</b> is 2, the polygon is Quadrilateral and 4 coordinates are given for the quadrilateral's vertices.</p>
<h3>Output</h3>
<p>Output 240 lines, each containing 320 characters to describe the canvas. The background color of canvas is '0'. The i<sup>th</sup>(i starts from 0) character on j<sup>th</sup>(j starts from 0) line should have color value visible at &lt;<b>i, j</b>></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 1000</li>
<li>1 ≤ <b>T</b> ≤ 2</li>
<li>1 ≤ <b>C</b> ≤ 9</li>
<li>0 ≤ <b>X</b> ≤ 319</li>
<li>0 ≤ <b>Y</b> ≤ 239</li>
<li>-1000 ≤ <b>Z</b> ≤ 1000</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 1 120 50 10 50 130 20 180 140 -10
1 2 200 45 10 55 70 -20 140 150 15
2 5 20 20 0 200 20 0 200 200 0 20 200 0
2 8 30 30 1 50 50 1 70 30 1 50 90 1

<b>Output:</b>
<a href="/download/sample.out">Download the output</a>
</pre><h3>Notes</h3>
<p>If &lt;<b>X, Y, Z</b>> value of 2 polygons are exactly same, then the greater color value of two will be visible. Example, for the following input:<br/></br/></p>
<pre>2
2 1 10 10 0 10 110 0 110 110 0 110 10 0
2 2 50 50 0 50 150 0 150 150 0 150 50 0</pre><p><br/>The (pictorial) output will be:<br/><img src="//www.codechef.com/download/hR8s1dO.png" /><br/>assuming color '0' is black, color '1' is red, color '2' is blue.</br/></br/></br/></p>
