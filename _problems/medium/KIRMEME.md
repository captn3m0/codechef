---
{"category_name":"medium","problem_code":"KIRMEME","problem_name":"Kirito in Memeland","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"maestr0","problem_tester":"xcwgf666","date_added":"4-07-2016","tags":{"0":"divide","1":"maestr0","2":"medium","3":"nov16","4":"tree"},"editorial_url":"http://discuss.codechef.com/problems/KIRMEME","time":{"view_start_date":1479115800,"submit_start_date":1479115800,"visible_start_date":1479115800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/mandarin/KIRMEME.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/russian/KIRMEME.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV16/vietnamese/KIRMEME.pdf">Vietnamese</a> as well.</h3>


<p>
Memeland is a country consisting of <b>N</b> cities. There are exactly <b>N - 1</b> undirected roads connecting pairs of cities and there is exactly one path between each pair of cities (a path is a sequence of distinct cities where consecutive cities in the sequence are connected by a road).
</p>

<p>
As the country is located in mountains, cities may be at different heights. The heigh of <b>i-th</b> city is <b>a<sub>i</sub></b>.
</p>

<p>
Kirito is going to travel around Memeland. Kirito is an unusual man, thus he wants to travel only interesting routes. He calls a sequence of cities <b>i<sub>1</sub>, i<sub>2</sub>, ..., i<sub>K</sub></b> an <i>interesting route</i> if:
<ul>
<li> no two cities in the sequence are the same: i.e. <b>i</sub>j</sub></b> ≠ <b>i<sub>j'</sub></b> for any two <b>j</b> ≠ <b>j'</b>.
<li> cities <b>i<sub>j</sub></b> and <b>i<sub>j+1</sub></b> are connected by a road for each <b>1</b> ≤ <b>j</b> &lt; <b>K</b>.
<li> the number of indices <b>j</b> with <b>1</b> &lt; <b>j</b> &lt; <b>K</b> with <b>a<sub>i<sub>j-1</sub></sub></b> &lt; <b>a<sub>i<sub>j</sub></sub></b> > <b>a<sub>i<sub>j+1</sub></sub></b> is at least <b>L</b> and at most <b>R</b> for some given <b>L</b> and <b>R</b>.
</ul>
</p>

<p>
Help Kirito count the number of interesting routes in Memeland.
</p>

<p></p>


<h3>Input</h3>

<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases.
</p>

<p>
The first line of each test case contains one integer <b>N</b> denoting the number of cities in Memeland.
The second line of each test case contains two integers: <b>L</b> and <b>R</b> described in the statement.
</p>

<p>The third line of each test case contains <b>N</b> integers where <b>i-th</b> integer is <b>a<sub>i</sub></b>, the height of <b>i-th</b> city. The final <b>N - 1</b> lines contain two integers denoting pairs of cities that are connected by roads.</p>

<p></p>

<h3>Output</h3>

<p>
For each test case, output a single line containing one integer denoting amount of interesting routes.
</p>

<p></p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5*10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10<sup>7</sup></b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>7</sup></b></li>
</ul>


<h3>Subtasks</h3>
<p>
<ul>
<li><b>Subtask 1:</b>  <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b> - <b>20 points</b></li>
<li><b>Subtask 2:</b> <b>Original constraints</b> - <b>80 points</b></li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
3
1 2
1 3 1
1 2
2 3
7
2 2
1 8 2 3 4 8 1
1 2
2 3
3 4
3 5
3 6
6 7
9
1 7
5 1 1 1 1 1 1 1 1
1 2
2 3
1 4
4 5
1 6
6 7
1 8
8 9</tt>
<b>Output:</b>
<tt>1
1
24</tt>
</pre>
