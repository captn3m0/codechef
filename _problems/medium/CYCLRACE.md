---
{"category_name":"medium","problem_code":"CYCLRACE","problem_name":"Cyclist Race","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"antoniuk1","date_added":"19-09-2015","tags":{"0":"cenadar","1":"convex","2":"jan16","3":"med"},"editorial_url":"http://discuss.codechef.com/problems/CYCLRACE","time":{"view_start_date":1452504600,"submit_start_date":1452504600,"visible_start_date":1452504600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/mandarin/CYCLRACE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/russian/CYCLRACE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN16/vietnamese/CYCLRACE.pdf">Vietnamese</a> as well.</h3>
<p>Chef has been invited to be a judge for a cycling race.</p>
<p>You may think about cyclists in the race as points on a line. All the cyclists start at the same point with an initial speed of zero. All of them move in the same direction. Some cyclists may force their cycles to speed up. The change of speed takes place immediately. The rest of the time, they move with a constant speed. There are <b>N</b> cyclists in total, numbered from <b>1</b> to <b>N</b>.</p>
<p>In order to award points to the participants, Chef wants to know how far the cyclists have reached at certain points of time.</p>
<p>Corresponding to the above two, there will be two types of queries.</p>
<ol>
<li>Change the speed of cyclist <b>i</b> at some time.</li>
<li>Ask for the position of the race leader at some time.</li>
</ol>
<p>There are <b>Q</b> queries. Each query of first type is described by the type of the query (1), the time <b>Time</b>, the cyclist number <b>cyclist</b>, and the new speed <b>NewSpeed</b>. Each query of second type is described by the type of the query (2), and the time <b>Time</b>.</p>
<p>Initial speed of all the cyclists is 0.</p>
<h3>Input</h3>
<p>The first line of input contains two space-separated integers, <b>N</b> and <b>Q</b>.</p>
<p>Next <b>Q</b> lines contain queries, one per line. Each line constists of several space-separated integers. First integer is <b>Type</b>, it is either <b>1</b> or <b>2</b> denoting the type of the query. If the type of the query is <b>1</b>, then three integers follow: <b>Time</b>, <b>cyclist</b> and <b>NewSpeed</b>. If the type of the query is <b>2</b>, then one integer follows: <b>Time</b>. All the queries are sorted by time, e.g., value <b>Time</b> of the next query is greater or equeal than value <b>Time</b> for current query.</p>
<h3>Output</h3>
<p>Output integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, … , <b>A<sub>R</sub></b> each in a separate line. Here <b>A<sub>i</sub></b> is the answer for the <b>i</b><sup>th</sup> query of type <b>2</b> in the current test case and <b>R</b> is the total number of queries of this type in the test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>Time</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>NewSpeed</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>cyclist</b> ≤ <b>N</b></li>
<li><b>The speed of any cyclist cannot decrease.</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 [25 points]: N ≤ 5000 and Q ≤ 10000</b></li>
<li><b>Subtask #2 [75 points]: No additional constraints</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 14
1 1 1 2
1 1 2 5
1 2 3 4
1 2 4 7
2 3
2 4
1 5 5 4
2 5
2 6
1 7 5 8
2 7
2 8
2 9
2 10

<b>Output:</b>
10
15
21
28
35
42
49
56
</pre>