---
{"category_name":"easy","problem_code":"RAINBOW","problem_name":"Rainbow Graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lg5293","problem_tester":"errichto","date_added":"13-03-2017","tags":{"0":"cook80","1":"easy","2":"graph","3":"greedy","4":"lg5293"},"editorial_url":"https://discuss.codechef.com/problems/RAINBOW","time":{"view_start_date":1489949100,"submit_start_date":1489949100,"visible_start_date":1489949100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/mandarin/RAINBOW.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/russian/RAINBOW.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/vietnamese/RAINBOW.pdf">Vietnamese</a> as well.</h3>

<p>
You are given an undirected <a href="http://mathworld.wolfram.com/CompleteGraph.html">compete graph</a> with <b>n</b> nodes.
Each edge can be one of <b>n</b>*(<b>n</b>-1)/2 +1 different colors.
These colors are labeled from 0 to <b>n</b>*(<b>n</b>-1)/2, inclusive. But not all these <b>n</b>*(<b>n</b>-1)/2 +1 colors need to be used. ie. it is possible that two different edges could have the same color.
Formally, let <b>c</b><sub>i,j</sub> denote the color between the i-th and j-th nodes.
(Note that these edges are undirected, so <b>c</b><sub>i,j</sub> = <b>c</b><sub>j,i</sub>).
We will define <b>c</b><sub>i,i</sub> to be zero, although there is no such  edge present. i.e. the graph does not contain self-loops.
</p>

<p>
A subset of nodes is called <i>interesting</i> if every node in the subset has at least two edges of different colors, connecting it to vertices in the subset.
</p>
<p>
Your task is to determine the maximum possible size of an interesting subset of nodes.
</p>

<p>
Note that, by definition, the empty subset of nodes is an interesting subset, and so the answer is always at least zero.
</p>


<h3>Input</h3>
<p>
The first line of input will contain an integer <b>T</b>, the number of test cases.
</p>

<p>
Each test case will be formatted as follows:</p>

<p>
The first line will contain a single integer <b>n</b>.
</p>

<p>
The next <b>n</b> lines will contain <b>n</b> integers each. The j-th integer on the i-th line will denote <b>c</b><sub>i,j</sub>.
</p>


<h3>Output</h3>
<p>
For each test case, output the maximum possible size of an interesting subset, in a new line.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>n</b> ≤ 50</li>
<li>0 ≤ <b>c</b><sub>i,j</sub> ≤ <b>n</b>*(<b>n</b>-1)/2 </li>
<li>if i = j then <b>c</b><sub>i,j</sub> = 0</li>
<li><b>c</b><sub>i,j</sub> = <b>c</b><sub>j,i</sub>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
4
3
0 1 2
1 0 3
2 3 0
3
0 1 1
1 0 3
1 3 0
2
0 1
1 0
6
0 9 2 4 7 8
9 0 9 9 7 9
2 9 0 3 7 6
4 9 3 0 7 1
7 7 7 7 0 7
8 9 6 1 7 0
<b>Output:</b>
3
0
0
4
</pre>

<h3>Explanation</h3>
<p>
In the first case, the set of all nodes is an interesting subset.
</p>

<p>
In the second and third cases, no non-empty subset of nodes is interesting.
</p>

<p>
In the last case, an interesting subset of nodes is {1,3,4,6}. There is no larger interesting subset.
</p>