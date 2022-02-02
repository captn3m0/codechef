---
{"category_name":"hard","problem_code":"ADJLEAF","problem_name":"Adjacent leaves","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"amrmahmoud","date_added":"17-11-2017","tags":{"0":"cook88","1":"dynamic","2":"hard","3":"kingofnumbers"},"time":{"view_start_date":1511116200,"submit_start_date":1511116200,"visible_start_date":1511116200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/russian/ADJLEAF.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/vietnamese/ADJLEAF.pdf">Vietnamese</a> as well.</h3>

<p>
beauty of a rooted tree is defined as the number of good subsets of leaves.
</p>

<p>
a leaf in rooted tree is a node that doesn't have children.
</p>

<p>
suppose you do dfs from the root, whenever you visit a leaf you write down the label of the leaf in a sequence, leaves are written in order of visiting. consider all possible sequences that can created using dfs traversal (different sequences can come from different order of visiting children of some node), we call subset of leaves good iff it's not empty and there's at least one sequence such that leaves of that subset appear consecutively (next to each other, any order is fine) in that sequence.
</p>

<p>
Given a tree of <b>N</b> nodes, nodes are numbered from 1 to <b>N</b>, for every node <b>i</b> find the beauty of the tree if node <b>i</b> was the root of the tree. since the answer is large output it modulo <b>10<sup>9</sup>+7</b>
</p>
<p> </p>


<h3>Input</h3>
<p>First line of input contains one integer <b>T</b> denoting the number of test-cases</p>

<p>First line of each test-case contains <b>N</b> denoting number of nodes </p>

<p>Each of the following <b>N</b> - 1 lines contains two integers <b>u v</b> denoting that there's an edge between nodes <b>u</b> and <b>v</b>

<h3>Output</h3>
<p>For each test-case output <b>N</b> lines, in i-th line output a single integer denoting the beauty of the tree if node <b>i</b> was the root modulo  <b>10<sup>9</sup>+7</b></p>

<p> </p>

<h3>Constraints</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1,000</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>300,000</b></li>
<li><b>2</b> ≤ sum of <b>N</b> in all test-cases ≤ <b>300,000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
1 2
2 3
2 4
1 5
10
1 2
1 3
1 4
2 5
2 6
3 7
3 8
4 9
4 10


<b>Output:</b>
7
7
3
3
3
55
51
51
51
27
27
27
27
27
27
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> all subsets of leaves are good whatever the root is, so the answer is 7 when there are 3  leaves and 3 when there are 2 leaves</p>

<p><b>Example case 2.</b> when the root is node 1 all subsets of leaves are good except:
<ul>
<li>5, 7, 9</li>
<li>5, 7, 10</li>
<li>5, 8, 9</li>
<li>5, 8, 10</li>
<li>6, 7, 9</li>
<li>6, 7, 10</li>
<li>6, 8, 9</li>
<li>6, 8, 10</li>
</ul>
<br>

so the answer is 63 - 8 = 55

</p>

