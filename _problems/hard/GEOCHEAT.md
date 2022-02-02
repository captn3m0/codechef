---
{"category_name":"hard","problem_code":"GEOCHEAT","problem_name":"Bear and Shuffled Points","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"alex_2oo8","date_added":"6-10-2016","tags":{"0":"convex","1":"convex","2":"errichto","3":"geometry","4":"hard","5":"oct16","6":"random"},"editorial_url":"http://discuss.codechef.com/problems/GEOCHEAT","time":{"view_start_date":1476696600,"submit_start_date":1476696600,"visible_start_date":1476696600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/mandarin/GEOCHEAT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/russian/GEOCHEAT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT16/vietnamese/GEOCHEAT.pdf">Vietnamese</a> as well.</h3>

<p>Bear Limak loves preparing problems for algorithmic contests.
While his favorite part is inventing a story and writing the statement, he doesn't really like creating the test data.
Not only it's hard to do, but also making a mistake may spoil a problem completely, likely making a problem easier.</p>

<p>Limak prepared the following problem for you.
You start with an empty set of points on a two-dimensional plane.
There are <b>N</b> queries, each with one new point <b>(x<sub>i</sub>, y<sub>i</sub>)</b> to insert to the set.
After each query you must find the diameter of the set, i.e. the maximum distance between two points in the set.
To avoid printing floating numbers, after each query print the square of the diameter.</p>

<p>In many problems, in test generators an author should create some (possibly smart and tricky) data, and then shuffle it before printing.
Limak did the same in this problem, not noticing how crucial it may be.
You can assume that in every test the <b>N</b> points are randomly shuffled.
In other words, generators have a line "<b>random_shuffle(array with points)</b>" just before printing.
It isn't guaranteed that a problem is solvable within the time limit without this extra constraint.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>N</b> denoting the number of points.</p>
<p>The <b>i</b>-th of <b>N</b> following lines contains two space separated integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> denoting coordinates of the <b>i</b>-th point to insert.</p> 

<h3>Output</h3>
<p>Output <b>N</b> lines.
The <b>i</b>-th line should contain the square of the diameter of the set with points <b>(x<sub>1</sub>, y<sub>1</sub>), ..., (x<sub>i</sub>, y<sub>i</sub>)</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>750,000</b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>x<sub>i</sub>, y<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>Points are distinct.</li>
<li>Points are shuffled.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (20 points) <b>2 ≤ N ≤ 1000</b></li>
<li>Subtask #2 (30 points) Points are generated uniformly at random.
In more detail: in each test file organizers chose two integers <b>N</b> and <b>K</b>,
after which a generator finds <b>N</b> distinct points with coordinates generated randomly from interval <b>[-K, K]</b>.
All given original constraints are still satisfied.</li>
<li>Subtask #3 (50 points) <b>original constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
20 20
40 30
35 35
0 10
-170 1000000000

<b>Output:</b>
0
500
500
2000
999999980000029000
</pre>

<h3>Explanation</h3>
<ol>
<li>After the first query, the set contains only one point <b>(20, 20)</b>. You should print <b>0</b> because there are no two points with positive distance between them.</li>
<li>After the second query, the set contains points <b>(20, 20)</b> and <b>(40, 30)</b>.
The distance between them is <b>sqrt((40-20)^2+(30-20)^2) = sqrt(500)</b> so the squared distance is <b>500</b>.</li>
<li>After the third query, the set is <b>{(20,20), (40,30), (35,35)}</b>.
The maximum distance is <b>sqrt(500)</b>.</li>
<li>After the fourth query, the maximum distance is between <b>(0,10)</b> and <b>(40,30)</b>.
Note that the given points may be collinear.</li>
<li>After the fifth query, the set contains all five points from the input.
Watch out for overflows because the answer may be very big, as you can see here.</li>
</ol>