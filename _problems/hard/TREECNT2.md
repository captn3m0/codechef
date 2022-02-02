---
{"category_name":"hard","problem_code":"TREECNT2","problem_name":"Counting on a Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"laycurse","date_added":"9-02-2015","tags":{"0":"hard","1":"march15","2":"mobius_function","3":"union","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/TREECNT2","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/TREECNT2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/TREECNT2.pdf">Russian</a>.</h3>
<p>You are given an unrooted tree with <b>N</b> nodes, numbered from <b>1</b> to <b>N</b>. Each edge of the tree has a positive integer, associated with it. Your goal is to calculate the number of unordered pairs <b>(S, T)</b> of tree's nodes such that the greatest common divisor of all the integers associated with the edges of the path between <b>S</b> and <b>T</b> is equal to one. Of course, we consider only the pairs where <b>S</b> isn't equal to <b>T</b>.</p>
<p>You are also given <b>Q</b> queries, where the <b>i</b><sup>th</sup> query is described by two integer <b>A<sub>i</sub></b> and <b>C<sub>i</sub></b>. In the <b>i</b><sup>th</sup> query, the number associated with the <b>A<sub>i</sub></b><sup>th</sup> edge will be changed <b>C<sub>i</sub></b>. You also want to calculate the answer for the tree after each query.</p>
<h3>Input</h3>
<p>There is only one test case in one test file.</p>
<p>The first line of input contains an integer <b>N</b>, denoting the number of nodes in the tree. The <b>i</b><sup>th</sup> line of the next <b>N−1</b> lines contains the description of <b>i</b><sup>th</sup> edge, where the line has three space-separated integers <b>X</b>, <b>Y</b> and <b>Z</b>. It means that <b>i</b><sup>th</sup> edge connect nodes <b>X</b> and <b>Y</b>, and the associated integer is <b>Z</b>. Then the next line contains an integer <b>Q</b>, denoting the number of queries. The <b>i</b><sup>th</sup> line of the next <b>Q</b> lines has two space-separated integers <b>A<sub>i</sub></b> and <b>C<sub>i</sub></b>.</p>
<h3>Output</h3>
<p>In the first line, print the answer for the initial tree. Then print the answer for the tree after each query. Here the answer means that the number of unordered pairs <b>(S, T)</b> of the nodes such that the greatest common divisor of all the integers associated with the edges of the path between <b>S</b> and <b>T</b> is equal to one.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ X, Y ≤ N</b>, and <b>X ≠ Y</b></li>
<li><b>1 ≤ Z ≤ 10<sup>6</sup></b></li>
<li><b>0 ≤ Q ≤ 100</b></li>
<li><b>1 ≤ A<sub>i</sub> ≤ N − 1</b></li>
<li><b>1 ≤ C<sub>i</sub> ≤ 10<sup>6</sup></b></li>
<li>The graph given in the input denotes a tree</li>
</ul>
<p></p>
<p><b>Subtask 1 (27 points)</b></p>
<ul>
<li><b>1 ≤ N ≤ 10<sup>3</sup></b></li>
</ul>
<p></p>
<p><b>Subtask 2 (73 points)</b></p>
<ul>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 10
1 3 6
3 4 15
3 5 15
2
4 5
1 7

<b>Output:</b>
2
3
4
</pre><h3>Explanation</h3>
<p>The below figure shows the initial graph and the graph after each query.</p>
<p><b>The initial tree.</b> The sought pairs are <b>(2, 4)</b> and <b>(2, 5)</b>. For example, in the path between nodes <b>2</b> and <b>4</b>, there are three integers <b>10, 6, 15</b> associated edges, and <b>GCD(10, 6, 15) = 1</b>.</p>
<p><b>After query 1.</b> The sought pairs are <b>(1, 5)</b>, <b>(2, 4)</b> and <b>(2, 5)</b>.</p>
<p><b>After query 2.</b> The sought pairs are <b>(1, 5)</b>, <b>(2, 3)</b>, <b>(2, 4)</b> and <b>(2, 5)</b>.</p>
<p><img width="501" height="217" src="/download/extimages/99ba58eb796a1f68072bef90d1814da4.png" alt="" /></p>
