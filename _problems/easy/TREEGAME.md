---
{"category_name":"easy","problem_code":"TREEGAME","problem_name":"Tree Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"xcwgf666","date_added":"14-04-2014","tags":{"0":"cook49","1":"easy","2":"games","3":"greedy","4":"pointers","5":"witua"},"editorial_url":"http://discuss.codechef.com/problems/TREEGAME","time":{"view_start_date":1408906200,"submit_start_date":1408906200,"visible_start_date":1408906200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/mandarin2/TREEGAME.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/russian/TREEGAME.pdf">Russian</a> as well.</h3>
<p>
Alice and Bob are playing the game. Initially, there is a single rooted tree. Players take turns alternately, Alice starts.
</p>
<p>
In a single turn, Alice should choose any non-empty subset of roots of tree (or trees) and remove them. On the other hand, Bob should choose any non-empty subset of leafs and remove them from the tree (or trees). (<b>Please note</b> that Bob always takes some of the <b>deepest</b> in the original tree leafs.) It's not allowed to skip the turn. The game ends when a player can't take a turn.
</p>
<p>
The Alice's goal is to minimize the number of turns made by the both players, while Bob wants this number to be the maximal. Considering they both play optimally, what is the number of turns eventually made?
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of nodes of the tree. </p>
<p>The next <b>N-1</b> lines contain pairs of nodes' numbers <b>U<sub>i</sub></b> and <b>V<sub>i</sub></b> (one pair per line), denoting the edges of the tree.</p>
<p>
The nodes are numbered from <b>1</b> to <b>N</b>, inclusive, and the node with the index <b>1</b> is the root of the tree.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>40</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>U<sub>i</sub>, V<sub>i</sub></b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
1 2
7
1 3
1 4
4 2
4 5
4 6
6 7
1

<b>Output:</b>
2
5
1
</pre>