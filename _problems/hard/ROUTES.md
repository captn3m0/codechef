---
{"category_name":"hard","problem_code":"ROUTES","problem_name":"Safe Routes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko","date_added":"22-07-2013","tags":{"0":"dynamic","1":"ltime03","2":"medium","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/ROUTES","time":{"view_start_date":1377419555,"submit_start_date":1377419555,"visible_start_date":1377419423,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Alice is the queen of ChefLand. She has initiated a road reform recently. The reform will last for <b>M</b> days.</p>
<p>Initially, there are <b>N</b> towns and no roads in ChefLand. Every day one bidirectional road will be built. On the <b>i</b>-th day, the road connecting the towns <b>A<sub>i</sub></b> and <b>B<sub>i</sub></b> will be built.</p>
<p>Nevertheless, Alice worries that if there is a road that will occur in <b>every</b> route from the town <b>A</b> to the town <b>B</b> for some pair of towns <b>A</b> and <b>B</b>, criminals might attack everyone who is traveling from the town <b>A</b> to the town <b>B</b> (or vice versa) for sure. So she calls such an unordered pair (<b>A</b>, <b>B</b>) <i>unsafe</i>.</p>
<p>You are given a plan of the road reform. Please, output the number of unsafe unordered pairs of towns, after each of <b>M</b> days.</p>
<h3>Input</h3>
<p>The first line of input consists of the numbers <b>N</b> and <b>M</b> - the number of towns and the number of days.<br /><br />
The following <b>M</b> lines will describe the road reform. The <b>i</b>-th line will contain two integers <b>X</b> <b>Y</b>. That means that the bidirectional road, connecting the towns <b>X</b> and <b>Y</b> will be built during the <b>i</b>-th day. </p>
<h3>Output</h3>
<p>Output <b>M</b> lines. The <b>i</b>-th line should contain the number of unsafe pairs of towns after the <b>i</b>-th day.</p>
<h3>Example</h3>
<pre><b>Input:</b>
10 10
6 7
1 10
8 4
9 7
10 4
5 7
1 3
5 2
6 1
8 6

<b>Output:</b>
1
2
3
5
9
12
16
20
45
35

</pre><h3>Scoring</h3>
<p>Subtask 1 (22 points): 1 &lt;= <b>N</b> &lt;= 5, 1 &lt;= <b>M</b> &lt;= 5.<br /><br />
Subtask 2 (13 points): 1 &lt;= <b>N</b> &lt;= 100, 1 &lt;= <b>M</b> &lt;= 100.<br /><br />
Subtask 3 (20 points): 1 &lt;= <b>N</b> &lt;= 5000, 1 &lt;= <b>M</b> &lt;= 5000.<br /><br />
Subtask 4 (45 points): 1 &lt;= <b>N</b> &lt;= 5*10<sup>5</sup>, 1 &lt;= <b>M</b> &lt;= 5*10<sup>5</sup>.<br /></p>
