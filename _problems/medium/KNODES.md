---
{"category_name":"medium","problem_code":"KNODES","problem_name":"Path containing K Nodes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"devuy11","problem_tester":"adurysk","date_added":"20-05-2015","tags":{"0":"bfs","1":"cook60","2":"devuy11","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/KNODES","time":{"view_start_date":1437330600,"submit_start_date":1437330600,"visible_start_date":1437330600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK60/mandarin/KNODES.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK60/russian/KNODES.pdf">Russian</a> as well.</h3>
<p>You are given a tree.</p>
<p>You have to execute numerous queries on this tree. In a query, you will be given <b>K</b> nodes and you need to find if there is a path in the tree which contains all these <b>K</b> nodes.</p>
<p>If there is a path containing these <b>K</b> nodes, then output <b>Yes</b>. Otherwise, output <b>No</b>.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, number of test cases to follow.</p>
<p>First line of each test case contains an integer <b>N</b> which represents the number of nodes in the tree.</p>
<p>Next <b>N-1</b> lines contain the description of the tree. Each line contains 2 space separated integers implying that there is an edge between these two nodes.</p>
<p>Next line contains <b>Q</b>, number of path queries to follow.</p>
<p>First line of each query contains an integer <b>K</b>.</p>
<p>Second line contains <b>K</b> space separated nodes.</p>
<h3>Output</h3>
<p>
For each query, output <b>Yes</b> if there is a path containing the <b>K</b> query nodes. Otherwise, output <b>No</b>.
</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ Sum of <b>N</b> over all test cases ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>T</b> ≤ 500 </li>
<li>3 ≤ <b>K</b> ≤ N</li>
<li>1 ≤ Sum of <b>K</b> over all test cases and queries ≤ 10<sup>6</sup></li>
<li>Nodes are numbered from 1</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>

1
10
3 1
5 7
4 6
10 4
8 9
2 1
3 4
8 5
5 3
4
3
8 10 3
4
8 7 9 6
3
2 1 6
3
6 2 5

<b>Output:</b>

Yes
No
Yes
No

</pre><h3>Explanation: </h3>
<p>
Query 1: The path corresponding to it is 8->5->3->4->10.</p>
<p>
Query 2: There does not exists any path joining all 4.
</p>
