---
{"category_name":"hard","problem_code":"CHEFKC","problem_name":"Chef and Cut","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":7.7,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"dpraveen","date_added":"12-08-2016","tags":{"0":"hard","1":"mgch","2":"mincut","3":"sept16"},"time":{"view_start_date":1473931800,"submit_start_date":1473931800,"visible_start_date":1473931800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/mandarin/CHEFKC.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/russian/CHEFKC.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT16/vietnamese/CHEFKC.pdf">Vietnamese</a> as well.</h3>


<p>
Chef likes Graphs Theory a lot. Recently he learned about <a href="https://en.wikipedia.org/wiki/Minimum_cut">minimum cut</a>. During his assignments, he found a problem which he couldn't solve. Can you please help him in solving the problem?
</p>

<p>
You are given an oriented weighted graph <b>G</b> with two chosen nodes <b>s</b> and <b>t</b>. Let's order all distinct cuts between <b>s</b> and <b>t</b> cuts between <b>s</b> and <b>t</b> by weight. You have to find the weight of <b>k</b>-th minimum cut. Two cuts (U1, V1) and (U2, V2) are said to be distinct if the U1 != U2 or V1 != V2. In total, there will be total 2^(n-2) such cuts. 
</p>


<h3>Input</h3>
<p>There is a single test case.</p>
<p>First line of the input contains three positive integers - <b>N</b> (number nodes of the graph) and <b>M</b> (number of edges)  and <b>k</b> </p>
<p>Second line of the input contains two integers - <b>s</b> and <b>t</b> </p>
<p>Next <b>M</b> lines contain information about edges </p>
<p>First two integers of each of the next <b>M</b> lines denoting nodes connected by edge, third integer denoting weight of this edge <b>c</b>.  </p>

<h3>Output</h3>
<p>Output a single integer in a line - weight of <b>k</b>-th minimum cut of graph <b>G</b></b>
</p>

<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>77</b></li>
<li><b>2</b> ≤ <b>M</b> ≤ <b>777</b></li>
<li><b>2</b> ≤ <b>k</b> ≤ <b>777</b></li>
<li><b>1</b> ≤ <b>s</b>, <b>t</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>c</b> ≤ <b>10<sup>6</sup></b></li>
<li>It is guaranteed that <b>K</b> won't exceed number of distinct cuts, i.e. <b>1 ≤ K ≤ 2<sup>(n-2)</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
 <li><b>Subtask 1:</b> <b> N ≤ 10. </b> <b>Points - 20</b></li>
 <li><b>Subtask 2:</b> Original constraints. <b>Points - 80</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 8 2
1 4
1 2 4
1 4 1
2 3 4
2 4 7
3 2 10
3 4 1
4 1 7
4 3 2

<b>Output:</b>
9

</pre>

<pre><b>Input:</b>
5 19 6
1 5
1 2 1
1 3 4
1 4 9
1 5 8
2 1 7
2 3 2
2 4 5
2 5 1
3 2 4
3 4 1
3 5 5
4 1 4
4 2 5
4 3 1
4 5 7
5 1 8
5 2 7
5 3 2
5 4 6

<b>Output:</b>
29


</pre>
