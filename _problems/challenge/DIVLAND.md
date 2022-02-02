---
{"category_name":"challenge","problem_code":"DIVLAND","problem_name":"Division of Lands","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":"xcwgf666","date_added":"23-02-2015","tags":{"0":"april15","1":"challenge","2":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/DIVLAND","time":{"view_start_date":1428917400,"submit_start_date":1428917400,"visible_start_date":1428917400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/DIVLAND.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/DIVLAND.pdf">Russian</a>.</h3>
<p>Time flies fast, Chef’s sons are getting older, stronger and higher. Chef has got two sons and they don’t go well with each other. Their relations are getting worse day by day. Concerned Chef has now decided to separate them. Chef is very rich and he has got <b>N</b> cities (<b>N</b> is even). His sons are all he has and he must divide the cities into his sons equally.  There are some roads running between the cities. Chef has to destruct all the roads between cities of first and second sons. The destruction of road costis a lot of money. So Chef wants to save as much as he can. So you have to help Chef in finding out minimal cost to split cities to his sons.</p>
<h3>Input</h3>
<p>First line contains two space separated integers <b>N</b>, <b>M</b> denoting the number of cities and the number of the roads respectively. </p>
<p>Each <b>i<sup>th</sup></b> of the following <b>M</b> lines contains three integers <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b> and <b>c<sub>i</sub></b> denoting the road between the city with the number <b>a<sub>i</sub></b> and the city with the number <b>b<sub>i</sub></b>. The cost for it's destruction is <b>c<sub>i</sub></b>.  </p>
<h3>Output</h3>
<p>In a single line, output <b>N / 2</b> numbers – the numbers of cities that will belong to the first son after the partition.</p>
<h3>Scoring</h3>
<p>Your score will be sum of all <b>c<sub>i</sub></b> of all edges that would be destroyed by Chef. Your score for the problem will be sum of scores for each test files.</p>
<p>Your solution will be tested against only on <b>20%</b> of the test files during the contest and will be rejudged against <b>100%</b> after the end of competition.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>0</b> ≤ <b>a<sub>i</sub>, b<sub>i</sub></b> &lt; <b>N</b></li>
<li><b>1</b> ≤ <b>c<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
</p>
<h3>Subtasks</h3>
<p>Subtask 1:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
</ul>

<p>Subtask 2:</p>
<ul>
<li><b>100</b> ≤ <b>N</b> ≤ <b>2*10<sup>4</sup></b></li>
<li><b>1000</b> ≤ <b>M</b> ≤ <b>2*10<sup>5</sup></b></li>
</ul>

<p>Subtask 3:</p>
<ul>
<li><b>2*10<sup>4</sup></b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>2*10<sup>5</sup></b> ≤ <b>M</b> ≤ <b>4*10<sup>5</sup></b></li>
</ul>

<p>Subtask 4:</p>
<ul>
<li><b>10<sup>5</sup></b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>4*10<sup>5</sup></b> ≤ <b>M</b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 4
0 1 1 
1 2 2
2 3 3
3 0 4

<b>Output:</b>
1 2
</pre><h3>Test data generation</h3>
<p>
Four plans are used:</p>
<ul>
<li>Complete graph with random edge weights</li>
<li>Complete bipartite graph with random edge weights</li>
<li>Random tree</li>
<li>Fully random graph</li>
</ul>

<p>
The first two sections subtasks are generated with the usage of all <b>4</b> of them, third section is generated with the usage only of the fourth plan, and fourth section is generated with the plans number <b>3</b> and <b>4</b>.
</p>
