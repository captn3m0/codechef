---
{"category_name":"hard","problem_code":"CHEFTRE","problem_name":"Chef and Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":9,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"xcwgf666","date_added":"13-07-2016","tags":{"0":"aug16","1":"decomposition","2":"hard","3":"heavy","4":"mgch","5":"segment"},"editorial_url":"http://discuss.codechef.com/problems/CHEFTRE","time":{"view_start_date":1471253400,"submit_start_date":1471253400,"visible_start_date":1471253400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/mandarin/CHEFTRE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/russian/CHEFTRE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG16/vietnamese/CHEFTRE.pdf">Vietnamese</a> as well.</h3>



<p>Chef likes trees a lot. Now he thinking about one interesting problem on trees. He finds the following problem interesting, and you? 
</p>

<p>
Given a tree <b>T</b> and <b>Q</b> queries to it. Tree <b>T</b> has <b>N</b> nodes numbered from 1 to <b>N</b>. Each node <b>v</b> has a value <b>A<sub>v</sub></b> associated with it. Queries can be one of three types.
<ul>
<li><b>1 u v</b> - reverse the values on the path between vertices <b>u</b> and <b>v</b>.</li>
<li><b>2 u<sub>l</sub> u<sub>r</sub> v<sub>l</sub> v<sub>r</sub></b> - print "Yes" if all the values on the path from <b>u<sub>l</sub></b> to  <b>u<sub>r</sub></b> are exactly same as that of path from  <b>v<sub>l</sub></b> to <b>v<sub>r</sub></b>, and "No" otherwise. It is ensured that length of both the paths are same.</li>
<li><b>3 u<sub>l</sub> u<sub>r</sub> v<sub>l</sub> v<sub>r</sub></b> - Copy all values on path from <b>u<sub>l</sub></b> to  <b>u<sub>r</sub></b> and insert them into the path from <b>v<sub>l</sub></b> to <b>v<sub>r</sub></b>. It is ensured that length of both the paths are same.</li>
</ul>
</p>

<h3>Input</h3>
<p>The first line contains two integers <b>N</b> and <b>Q</b>. </p>
<p>The second line contains <b>N</b> space-separeted integers denoting <b>A<sub>v</sub></b> - the values associated with nodes.</p>
<p>Next <b>N-1</b> lines contains two space-separeted integers <b>u</b>, <b>v</b> denoting the nodes connected by an edge.</p>
<p>Next <b>Q</b> lines contains queries as described above.</p>


<h3>Output</h3>
<p>For each query of second type output your answer in a single line.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>3</sup></b>
<li><b>1</b> ≤ <b>u, v, u<sub>l</sub>, u<sub>r</sub>, v<sub>l</sub>, v<sub>r</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1: (21 pts)</b> <b>N, Q</b> ≤ 25000.
</li>
<li><b>Subtask 2: (79 pts)</b> Original constraints. 
</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>5 8
1 2 3 4 5
1 2
1 3
2 4
2 5
2 1 3 1 2
3 1 1 2 2
3 1 1 3 3
2 1 3 1 2
1 2 5
2 1 3 1 2
1 2 5
2 1 3 1 2</tt>

<b>Output:</b>
<tt>No
Yes
No
Yes</tt>
</pre>
