---
{"category_name":"hard","problem_code":"GERALD2","problem_name":"Black and White Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"gerald","problem_tester":null,"date_added":"8-10-2013","tags":{"0":"data","1":"gerald","2":"hard","3":"heavy","4":"nov13"},"editorial_url":"http://discuss.codechef.com/problems/GERALD2","time":{"view_start_date":1384162200,"submit_start_date":1384162200,"visible_start_date":1384162200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/GERALD2.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/GERALD2.PDF"> Russian</a>.</h3>
<p>Chef has a rooted tree, consisting of <b>N</b> vertexes. Each tree vertex has a unique index (integer from <b>1</b> to <b>N</b>), and also has a color (black or white).<br />
The root of Chef's tree has index <b>1</b>.</p>
<p>Initially, all vertexes of the tree are colored white. Then Chef start playing with the tree. He writes out a sequence of<br />
<b>M</b> vertexes of the tree <b>V<sub>1</sub></b>, <b>V<sub>2</sub></b>, ..., <b>V<sub>M</sub></b>. And now he wants to make <b>M</b> operations with the tree, each of them is:</p>
<p><ol>
<li>During <b>i</b>-th operation Chef picks vertex <b>V<sub>i</sub></b>.</li>
<li>If vertex <b>V<sub>i</sub></b> is black, then he colors it white.</li>
<li>Chef finds the farthest white vertex from vertex <b>V<sub>i</sub></b>, in case of tie he picks the one with largest index. This vertex is the result of current operation.</li>
<li>If vertex <b>V<sub>i</sub></b> wasn't recolored on step 2 of current operation (therefore before the operation it is white), Chef colors it black.</li>
</ol>
</p>
<p>Chef gives to you the tree and sequence <b>V</b>. Help him to make all the operations. So, print the index of resulting vertex for each operation.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two integers <b>N</b>, <b>M</b> - the number of vertexes of the tree and the number of operations.<br />
The second line contains <b>N-1</b> integers <b>P<sub>2</sub></b>, <b>P<sub>3</sub></b>, ..., <b>P<sub>N</sub></b> - description of Chef's tree.<br />
Integer <b>P<sub>i</sub></b> denotes the index of vertex that is parent of the vertex <b>i</b> in the tree.<br />
Each of the next <b>M</b> lines contains the description of operations, <b>i</b>-th of them contains integer <b>V<sub>i</sub></b>.</p>
<p>It is guaranteed that the given graph is a tree.</p>

<h3>Output</h3>
<p>For each operation of each test case print the index of resulting vertex on the separate line.</p>
<h3>Constraints</h3>
<p></p><p><b>1</b> ≤ <b>T</b> ≤ <b>1000</b>,</p>
<p><b>2</b> ≤ <b>N</b> ≤ <b>200000</b>,</p>
<p><b>1</b> ≤ <b>M</b> ≤ <b>200000</b>,</p>
<p><b>1</b> ≤ <b>P<sub>i</sub></b>, <b>V<sub>i</sub></b> ≤ <b>N</b>;</p>
<p>Sum of all <b>N</b> values for test cases is not greater than <b>200000</b>.</p>
<p>Sum of all <b>M</b> values for test cases is not greater than <b>200000</b>.</p>

<h3>Example</h3>
<pre><b>Input:</b>
2
6 7
3 1 3 4 4
1
5
6
1
3
5
2
2 2
1
2
1

<b>Output:</b>
6
2
2
4
4
2
5
1
1
</pre>