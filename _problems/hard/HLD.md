---
{"category_name":"hard","problem_code":"HLD","problem_name":"Heavy-Light Decomposition","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cgy4ever","problem_tester":null,"date_added":"3-04-2017","tags":{"0":"april17","1":"cgy4ever"},"editorial_url":"https://discuss.codechef.com/problems/HLD","time":{"view_start_date":1492421400,"submit_start_date":1492421400,"visible_start_date":1492421400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/mandarin/HLD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/russian/HLD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL17/vietnamese/HLD.pdf">Vietnamese</a> as well.</h3>

<p>
You are given a rooted tree with <b>N</b> nodes. The nodes are numbered from 1 to <b>N</b>, and the root is the node numbered 1. For each node X which is not a leaf, you must choose a node Y which is a child of X and mark the edge between X and Y as heavy (red in the picture below).
</p>
<p>
Once this has been done, we calculate the cost of each path from the root to a leaf. For this, we decompose the path into segments, where each segment has all light edges or all heavy edges, and each segment is maximal (ie. each segment is as long as possible). So, a path will start with a heavy segment or a light segment, but the segment types will alternate between heavy and light.</p>

<p>The length of a segment is the number of edges in it. The cost of a light segment with length L is L, and the cost of a heavy segment with length L is (ceiling[log<sub>2</sub>L]+1). The cost of a path from the root to a leaf will be the sum of costs of all the segments.</p> 

<p>The decomposition into segments is done independently for each path.</p>

<p> For example:</p>

<p></p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/APRIL17/hld.png" height="300"/>
<p></p>

<ul>
<li>The path 1 → 9 contains one heavy segment (1 → 2) with length 1 and one light segment (2 → 9) with length 2, so the cost is (ceiling[log<sub>2</sub>1]+1) + 2 = (0 + 1) + 2 = 3.</li>
<p></p>
<li>The path 1 → 17 contains one light segment (1 → 3) with length 1 and one segment (3 → 17) with length 5, so the cost is 1 + (ceiling[log<sub>2</sub>5]+1) = 1 + (3 + 1) = 5.</li>
<p></p>
<li>The path 1 → 15 has cost 1 + (ceiling[log<sub>2</sub>2]+1) + 1 = 1 + (1 + 1) + 1 = 4.</li>
</ul>
<p></p>
<p>Consider all the paths from the root to leaves. The maximum cost among all these paths, is defined to be the 'cost' of the tree.
Different ways of choosing heavy edges can lead to different ‘costs' of the tree.</p>

<p>
Please find the minimum ‘cost' of the tree achievable. 
</p>


<h3>Input</h3>
<ul>
<li>The first line contains one integer, <b>T</b>, the number of test cases. The description of each test case follows:</li>
<li>The first line of each test case contains one integer, <b>N</b>.</li>
<li><b>N</b>-1 lines follow, each of which contains two integers <b>a</b>, <b>b</b>. This signifies that there is an edge between nodes <b>a</b> and <b>b</b>.</li>
</ul>

<h3>Output</h3>
<p>The output should have only one integer in a new line, the minimum 'cost' achievable.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>2 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points): 2 ≤ <b>N</b> ≤ 1000</li>
<li>Subtask #2 (70 points): Original constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b><tt>
2
12
1 2
2 4
4 5
5 6
4 7
1 3
3 8
8 9
3 10
10 11
10 12
2
1 2
</tt>

<b>Output:</b><tt>
3
1</tt>
</pre>


<h3>Explanation</h3>
<p>
For first input: one solution is to mark these edges as heavy and the other edges as light: {1-2, 2-4, 4-5, 5-6, 3-8, 8-9, 10-11}
</p>