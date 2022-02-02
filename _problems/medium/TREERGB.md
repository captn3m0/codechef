---
{"category_name":"medium","problem_code":"TREERGB","problem_name":"Paint the Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"xcwgf666","date_added":"13-08-2014","tags":{"0":"cook49","1":"dynamic","2":"easy","3":"tree","4":"witua"},"editorial_url":"http://discuss.codechef.com/problems/TREERGB","time":{"view_start_date":1408906200,"submit_start_date":1408906200,"visible_start_date":1408906200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/mandarin2/TREERGB.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/russian/TREERGB.pdf">Russian</a> as well.</h3>
<p>You are given a rooted tree with <b>N</b> nodes. You would like to paint each node of the tree in one of three possible colors: red, green, and blue. The following conditions must be fulfilled:</p>
<ul>
<li>
For each node painted red, there must be no more than <b>R</b> red nodes in its subtree (including this node).
</li>
<li>
For each node painted green, there must be no more than <b>G</b> green nodes in its subtree (including this node).
</li>
<li>
For each node painted blue, there must be no more than <b>B</b> blue nodes in it's subtree (including this node).
</li>
</ul>

<p>
Find the number of ways to paint the tree and output it modulo <b>1000000007</b>.
</p>
<h3>Input</h3>
<p>The first line contains four integers <b>N</b>, <b>R</b>, <b>G</b> and <b>B</b>. </p>
<p>The following <b>N-1</b> lines contain pairs of the nodes' numbers <b>U<sub>i</sub></b> and <b>V<sub>i</sub></b> (one pair per line), describing the edges of the tree.</p>
<p>
The nodes are numbered from <b>1</b> to <b>N</b>, inclusive, and the node with the index <b>1</b> is the root of the tree.
</p>
<h3>Output</h3>
<p>Output the answer to the problem on the first line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>300</b></li>
<li><b>0</b> ≤ <b>R</b>, <b>G</b>, <b>B</b> ≤ <b>300</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input #1:</b>
3 1 1 1
1 2
3 1

<b>Output #1:</b>
12
</pre>
<pre><b>Input #2:</b>
8 2 1 3
1 2
1 4
5 4
7 4
3 2
4 6
8 6

<b>Output #2:</b>
613
</pre>