---
{"category_name":"easy","problem_code":"CLIQUED","problem_name":"Bear and Clique Distances","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"3-04-2017","tags":{"0":"april17","1":"errichto"},"editorial_url":"https://discuss.codechef.com/problems/CLIQUED","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/CLIQUED.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/CLIQUED.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/CLIQUED.pdf">Vietnamese</a> as well.</h3>

<p>Bearland consists of <b>N</b> cities, numbered 1 through <b>N</b>.
Cities are connected with bidirectional roads.</p>

<p>Cities 1 through <b>K</b> were built a long time ago, when citizens liked order and regularity.
Each pair of those old cities is connected with a road of length <b>X</b>.
Note that this description generates <b>K</b>*(<b>K</b>-1)/2 roads.</p>

<p>There are <b>M</b> newer roads, not necessarily of the same lengths.
The i-th of them connects cities <b>a</b><sub>i</sub> and <b>b</b><sub>i</sub> and has length <b>c</b><sub>i</sub>.</p>

<p>There is no road that connects a city to itself.
All <b>M</b>+<b>K</b>*(<b>K</b>-1)/2 roads are distinct (ie. no two of them connects the same pair of cities).
It's guaranteed that it's possible to get from every city to every other city, using one or more roads.</p>

<p>Limak, a bear, lives in the city <b>S</b>.
In order to plan a trip to some other city, for every city he wants to know how quickly he can get there.
Can you help him and find the distance from <b>S</b> to every city?</p>

<p>The distance between two cities is the minimum total length of a path (sequence of roads) between the two cities.</p>


<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>
The first line of each test case contains five integers <b>N</b>, <b>K</b>, <b>X</b>, <b>M</b> and <b>S</b>, denoting the number of cities, the number of old cities, the length of a road between every two old cities, the number of newer roads, and the city where Limak lives, respectively.
</p>

<p>Each of the following <b>M</b> lines contains three integers <b>a</b><sub>i</sub>, <b>b</b><sub>i</sub> and <b>c</b><sub>i</sub>, denoting a road of length <b>c</b><sub>i</sub> between cities <b>a</b><sub>i</sub> and <b>b</b><sub>i</sub>.</p>

<p>As guaranteed above: no two cities are connected with more than one road, no road connects a city to itself, and it's possible to get from every city to every other city.</p>



<h3>Output</h3>

<p>For each test case, output a single line containing <b>N</b> integers.
The i-th of them should denote the distance from the city <b>S</b> to the city i.
The distance from <b>S</b> to <b>S</b> is simply 0.</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 3</li>
<li>2 ≤ <b>K</b> ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>0 ≤ <b>M</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>S</b>, <b>a</b><sub>i</sub>, <b>b</b><sub>i</sub> ≤ <b>N</b></li>
<li>1 ≤ <b>X</b>, <b>c</b><sub>i</sub> ≤ 10<sup>9</sup></li>
</ul>



<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (45 points): 2 ≤ <b>K</b> ≤ 500</li>
<li>Subtask #2 (55 points): Original constraints.</li>
</ul>




<h3>Example</h3>

<pre><b>Input:</b>
3
5 4 100 2 3
1 5 50
5 3 160
5 4 100 2 3
1 5 50
5 3 140
8 3 15 7 5
3 4 10
4 5 20
5 6 10
6 1 7
3 7 1000
7 8 50
3 5 1000000000

<b>Output:</b>
100 100 0 100 150 
100 100 0 100 140 
17 32 30 20 0 10 1030 1080
</pre>


<h3>Explanation</h3>

<p><b>Test case 1.</b> There are <b>N</b> = 5 cities. The first <b>K</b> = 4 of them are all connected with each other with roads of length <b>X</b> = 100. There are <b>M</b> = 2 extra roads:</p>

<ul>
<li>Cities 1 and 5 are connected with a road of length 50.</li>
<li>Cities 5 and 3 are connected with a road of length 160.</li>
</ul>

<p>We are asked to compute distances to all cities from the city <b>S</b> = 3.
Note that the distance from a city to itself is 0, and this is why the third number in the ouput is 0.</p>