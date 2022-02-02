---
{"category_name":"easy","problem_code":"CENTREE","problem_name":"Centeroid","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"deadwing97","date_added":"30-05-2017","tags":{"0":"ad","1":"alei","2":"constructive","3":"cook83","4":"graph","5":"tree"},"editorial_url":"https://discuss.codechef.com/problems/CENTREE","time":{"view_start_date":1497812400,"submit_start_date":1497812400,"visible_start_date":1497812400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/mandarin/CENTREE.pdf">mandarin chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/russian/CENTREE.pdf">russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK83/vietnamese/CENTREE.pdf">vietnamese</a> as well.</h3>

<p>
Chef Ada loves trees, she thinks that the beauty of a tree is determined by the distance between its center and centroid. If the tree has multiple centers or centroids, then the beauty is the maximum among every possible pair.
</p>
<p>
As a reward for her delicious dishes (and awesome coding skills), CodeChef is going to give a present to Chef Ada, and of course it must be a tree! But not any tree, we want to give her one with <b>n</b> nodes, and beauty <b>b</b>. Help find such a tree.
</p>

<h3>Input</h3>
<p>
The first line of input contains one number <b>T</b>, the number of test cases.
</p>
<p>
Each test case contains two integers <b>n</b> and <b>b</b>, the desired number of vertices and beauty.
</p>
<h3>Output</h3>
<p>
For each test case, if no tree satisfies the conditions print "NO" in a new line.
</p>
<p>
Otherwise, print "YES" in a new line and describe any valid tree. Print <b>n-1</b> more lines, each with two integers <b>u<sub>i</sub></b>, <b>v<sub>i</sub></b> (1 ≤ <b>u<sub>i</sub></b>, <b>v<sub>i</sub></b> ≤ <b>n</b>) denoting the indices of the vertices connected by an edge in the tree.
</p>

<h3>Constraints</h3>

<li>1 ≤ <b>T</b> ≤ 10<sup>4</sup></li>
<li>2 ≤ <b>n</b> ≤ 100</li>
<li>0 ≤ <b>b</b> ≤ n-1</li>

<h3>Notes</h3>
<p>
A vertex <b>u</b> is a centroid if after removing <b>u</b> from the tree, the size of any of the resulting connected components is at most <b>n/2</b>.
</p>
<p>
Lef <b>f(x)</b> be the greatest distance from <b>u</b> to any other vertex of the tree. A vertex <b>u</b> is a center if <b>f(u) ≤ f(v) </b> for any other vertex <b>v</b>.
</p>

<h3>Example</h3>
<pre>
<b>Input:</b>
1
4 0

<b>Output:</b>
YES
1 2
1 3
1 4
</pre>
<h3>Explanation</h3>
<p>
Vertex 1 is the center and centroid of the tree.
</p>
