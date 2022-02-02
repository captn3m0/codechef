---
{"category_name":"medium","problem_code":"HCLEAN","problem_name":"House Cleaning","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"karanaggarwal","date_added":"21-03-2015","tags":{"0":"easy","1":"hypercube","2":"ltime23","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/HCLEAN","time":{"view_start_date":1430037000,"submit_start_date":1430037000,"visible_start_date":1430037000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME23/mandarin/HCLEAN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME23/russian/HCLEAN.pdf">Russian</a>.</h3>
<p>Jane lives in <b>N</b>-dimensional space. Her house is a <b>N</b>-dimensional <a href="http://en.wikipedia.org/wiki/Hypercube"> hypercube</a>, with the centre located in the origin, with each edge having length equal to <b>2</b>. There is a room in every vertex of the hypercube. The room can be denoted with <b>N</b> it's coordinates. For any two rooms, there is a corridor between them if the square of the euclidean distance is no more than <b>D</b> units. </p>
<p>Sometimes, Jane wants to make a clean-up in her house. In order to do that, she needs to visit all the rooms. She starts with a room with the coordinates <b>(S<sub>1</sub>, S<sub>2</sub>, ... S<sub>N</sub>)</b> and then wants to move through all the rooms via corridors in such a way that she will visit all the rooms, and, at the same time, won't visit any room twice (she does not want to step on a floor which is not dried yet).</p>
<p>Please find such a route for Jane or state that it's impossible to find one.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers <b>N</b> and <b>D</b> denoting the number of dimensions of the space Jane lives in and the square of the maximal euclidean distance between two rooms, connected via corridor.</p>
<p>The second line contains <b>N</b> space-separated integers <b>S<sub>1</sub></b>, <b>S<sub>2</sub></b>, ..., <b>S<sub>N</sub></b> denoting the coordinates of the room where Jane starts the cleaning.</p>
<h3>Output</h3>
<p>For each test case output:</p>
<ul>
<li>if the a route exists output <b>2<sup>N</sup></b> lines, each containing <b>N</b> space separated integers, denoting the coordinates of the corresponding room in the route. For every test case, the coordinates of the first room in the route should coincide with the given location. If there is more than one solution, you can print any one of them.</li>
<li>if such a route doesn't exist, output just <b>-2</b> on the separate line.</li>
</ul>

<h3>Constraints</h3>
<p>Subtask 1 (7 points):</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>4</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>14</b></li>
<li><b>D</b> = <b>4N</b></li>
</ul>

<p>Subtask 2 (9 points):</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>3</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>16N</b></li>
</ul>

<p>Subtask 3 (13 points):</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>4</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>16N</b></li>
</ul>

<p>Subtask 4 (71 point):</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>4</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>14</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>16N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2 5
-1 -1
4 3
1 -1 1 -1

<b>Output:</b>
-1 -1
1 -1
1 1
-1 1
-2

</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> It is easy to see that the square of the euclidean distance between any two adjacent rooms in the route will not exceed <b>D = 5</b>.</p>
<p><b>Example case 2.</b> It is clearly impossible to accomplish the task.</p>
