---
{"category_name":"hard","problem_code":"IRONISL","problem_name":"Iron Islands","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"stzgd","date_added":"27-07-2014","tags":{"0":"bfs","1":"bitmasking","2":"graph","3":"kostya_by","4":"ltime15","5":"medium"},"editorial_url":"http://discuss.codechef.com/problems/IRONISL","time":{"view_start_date":1409473800,"submit_start_date":1409473800,"visible_start_date":1409473800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME15/mandarin/IRONISL.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME15/russian/IRONISL.pdf">Russian</a>.</h3>

<p><i>The Iron Islands is one of the constituent regions of the Seven Kingdoms, and it was formerly a sovereign nation under the same name, until the War of Conquest. The Iron Islands are home to a fierce people who call themselves the ironborn and are ruled by House Greyjoy from the castle of Pyke.</i></p>
<p align="right">(c) A Wiki of Ice and Fire</p>

<p><img src="https://codechef_shared.s3.amazonaws.com/download/LTIME15/ironisland.jpg" height="250"></p>

<p>The main problem of the Iron Islands is that there are a lot of them and it's not that easy to get from one island to another.</p>

<p>In this problem we assume, that the Iron Islands can be described as an unweighted directed graph <b>G</b>, which consists <b>N</b> vertices</i>. <b>G</b> doesn't have self-loops and multiple arcs.</p>

<p>The Ironborns(the people of the Iron Islands) are trying to improve the arc infastructure. They have a big project, which is splited into <b>Q</b> phases. Each phase starts with changing <b>M</b> arcs(adding/deleting some of the arcs of <b>G</b>). After that, in order to collect some statistics, the phase continues with caculating the sum of the minimal distances for all reachable vertices from some vertex <b>V</b>.</p>

<p>Your task is pretty simple: write an algorithm to perform all the phases, correctly and quickly.</p>

<h3>Note</h3>
<p>
Maybe, some of you aren't familiar with definitions from the statement. Here're some articles that could help you to understand the problem correctly:
<ul>
    <li>Directed graph: <a href="http://en.wikipedia.org/wiki/Directed_graph">http://en.wikipedia.org/wiki/Directed_graph</a></li>
</ul>
</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of testcases. The description of <b>T</b> testcases follows.</p>
<p></p>
<p>The first line of each testcase contains an integer <b>N</b>, denoting the number of vertices in <b>G</b>.</p>
<p>Each of the next <b>N</b> lines contains a string <b>E<sub>i</sub></b>, consisting of <b>N</b> symbols(only <i>'0'</i> and <i>'1'</i> are allowed). If <b>j</b>'th symbol of <b>E<sub>i</sub></b> equals to <i>'1'</i>, then the arc from vertex <b>i</b> to vertex <b>j</b> belongs to <b>G</b>, otherwise there's no such arc.</p>
<p>The next line contains an integer <b>Q</b>, denoting the number of phases of the big project. The description of the phases follows.</p>
<p>The first line of a phase desription contains two integers <b>V</b> and <b>M</b>, denoting the vertex for caculating the sum of the minimal distances for all reachable vertices and the number of arcs to change.</p>
<p>The next <b>M</b> lines of a phase desription contains two integers <b>A</b> and <b>B</b> each, denoting the next arc <b>A -> B</b> to change(it means, that if there's no <b>A -> B</b> arc in <b>G</b> by that moment, then you should add it; if there's <b>A -> B</b> arc in <b>G</b>, then you should delete it).</p>
<p><b>IMPORTANT:</b> you should not roll back all the edges after each of the phases. It's ok for the graph to be changed during the big project.</p>

<h3>Output</h3>
<p>The output of each testcase should contain <b>Q</b> lines, <b>i</b>'th should contain one integer: the sum of the minimal distances for all reachable vertices from the corresponding vertex <b>V</b>.</p>
<p>Do not add any newlines between different testcases.</p>

<h3>Constraints</h3>

<ul>
<li>0 ≤ sum of <b>M</b> ≤ 250000, for each testcase.</li>
<li>1 ≤ <b>V</b>, <b>A</b>, <b>B</b> ≤ <b>N</b></li>
<li>Subtask 1(20 points): 1 ≤ <b>T</b> ≤ 4, 1 ≤ <b>N</b> ≤ 100, 1 ≤ <b>Q</b> ≤ 100;</li>
<li>Subtask 2(30 points): 1 ≤ <b>T</b> ≤ 3, 1 ≤ <b>N</b> ≤ 500, 1 ≤ <b>Q</b> ≤ 1000;</li>
<li>Subtask 3(50 points): <b>T</b> = 1, 1 ≤ <b>N</b> ≤ 1000, 1 ≤ <b>Q</b> ≤ 10000.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2
01
00
2
1 0
2 0
5
00101
00111
11011
11001
10100
5
1 3
1 4
2 5
5 3
2 1
1 2
3 1
2 1
4 1
1 2
5 3
2 4
4 2
2 4

<b>Output:</b>
1
0
5
6
4
5
8

</pre>
