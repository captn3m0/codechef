---
{"category_name":"hard","problem_code":"CHEFPOL","problem_name":"Chef and Polyhedron","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"mugurelionut","date_added":"21-06-2016","tags":{"0":"burnside","1":"hard","2":"july16","3":"mgch"},"editorial_url":"http://discuss.codechef.com/problems/CHEFPOL","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/CHEFPOL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/CHEFPOL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/CHEFPOL.pdf">Vietnamese</a> as well.</h3>

<p>
Chef likes <a href="https://en.wikipedia.org/wiki/Solid_geometry">stereometry</a> a lot. Recently he learned about <a href="https://en.wikipedia.org/wiki/Polyhedron">polyhedrons</a>. During his assignments, he found a problem which he couldn't solve. Can you please help him in solving the problem?
</p>

<p>
You are given a <a href="http://mathworld.wolfram.com/ConvexPolyhedron.html">convex polyhedron</a>. Each face of polyhedron is a <a href="https://en.wikipedia.org/wiki/Regular_polygon">regular polygon</a>. All <a href="https://en.wikipedia.org/wiki/Vertex_angle">polyhedral angles</a> are equal. You have to find number of different ways to paint all the faces of the polyhedron in one of the <b>C</b> colors. Note that two painting of the polyhedron are said to be same, if one can be reached from other by a sequence of rotations or mirror reflections of the polyhedron. As this value could be large, output it by modulo <b>10<sup>9</sup>+7</b>.
</p>


<h3>Input</h3>
<p>There is a single test case.</p>
<p>First line of the input contains two positive integers - <b>N</b> (number faces of the polyhedron) and <b>C</b> (number of possible colors) </p>
<p>Next <b>N</b> lines contain information about the faces of polyhedron: </p>
<p>First number of each line contains an integer <b>k<sub>i</sub></b> denoting number of faces adjacent to <b>i</b>-th face. Next <b>k<sub>i</sub></b> integers in the same line denote the faces adjacent to <b>i</b>-th face. </p>

<h3>Output</h3>
<p>Output a single integer in a line denoting number of ways to color polyhedron in different ways modulo <b>10<sup>9</sup>+7</b>
</p>

<h3>Constraints</h3>
<ul>
<li><b>4</b> ≤ <b>N</b> ≤ <b>25</b></li>
<li><b>1</b> ≤ <b>C</b> ≤ <b>10<sup>9</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask 1:</b> Polyhedron is regular. <b>Points - 20</b></li>
 <li><b>Subtask 2:</b> Original constraints. <b>Points - 80</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
6 2
4 2 3 4 5
4 1 3 5 6
4 1 2 4 6
4 1 3 5 6
4 1 2 4 6
4 2 3 4 5

<b>Output:</b>
10

</pre>

<pre><b>Input:</b>
4 4
3 2 3 4
3 1 3 4
3 1 2 4
3 1 2 3

<b>Output:</b>
35
</pre>
