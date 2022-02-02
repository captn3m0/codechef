---
{"category_name":"hard","problem_code":"MINDEG","problem_name":"Minimum of Degrees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.75,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":null,"date_added":"21-06-2017","tags":{"0":"errichto"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/MINDEG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/MINDEG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/MINDEG.pdf">Vietnamese</a> as well.</h3>

<p>There is a graph with <b>N</b> vertices and no edges.
Chef is going to add all <b>N</b>*(<b>N</b>-1)/2 possible undirected edges to the graph, in a random order.
The cost of adding an edge between vertices x and y is equal to min(degree(x), degree(y)).
Here, degree(x) denotes the number of edges incident on x before adding the new edge (between x and y).</p>

<p>Find the expected total cost of adding all the edges and print it modulo 998244353.
See more details in the output section below.</p>


<h3>Input</h3>

<p>The input contains a single integer <b>N</b>, denoting the number of vertices.</p>



<h3>Output</h3>

<p>For the constraints given below, it can be proved that the answer (the expected value of the total cost) can be expressed as a rational P/Q for some integers P and Q, where Q isn't divisible by 998244353.
Print one integer: P*Q<sup>-1</sup> modulo 998244353.
Here, Q<sup>-1</sup> denotes the modular inverse with respect to 998244353.</p>



<h3>Constraints</h3>

<ul>
<li>2 ≤ <b>N</b> ≤ 300,000</li>
</ul>



<h3>Example</h3>
<pre><b>Input1:</b>
3

<b>Output1:</b>
1

<b>Input2:</b>
4

<b>Output2:</b>
199648875

</pre>


<h3>Explanation</h3>

<p><b>Example #1.</b> The graph contains 3 vertices and Chef will add 3 edges.
No matter what the order of adding edges is, the cost of adding the first edge is 0 because degrees of vertices are 0 initially.
Similarly, the cost of adding the second edge is 0 because at least one of two vertices connected with a new edge has degree 0.
Finally, the third edge connects vertices that both have degree 1 after adding first two edges, so the cost is min(1, 1) = 1.
The total cost is always 1, so its expected value is 1 as well.</p>

<p><b>Example #2.</b> There are 4 vertices and Chef will add 6 edges. The answer is 22/5, so you should print 22 * 5<sup>-1</sup> = 22 * 598946612 = 13176825464 = 199648875 (modulo 998244353).
Let's analyze one possible scenario:</p>

<ol>
<li>Initially, all degrees are equal to 0. Add the edge 2-3 (an edge between vertices 2 and 3) with cost min(0, 0) = 0.</li>
<li>Degrees of vertices 1, 2, 3, 4 are 0, 1, 1, 0 respectively. Add the edge 1-3 with cost min(0, 1) = 0.</li>
<li>Degrees are 1, 1, 2, 0. Add the edge 1-4 with cost min(1, 0) = 0.</li>
<li>Degrees are 2, 1, 2, 1. Add the edge 1-2 with cost min(2, 1) = 1.</li>
<li>Degrees are 3, 2, 2, 1. Add the edge 2-4 with cost min(2, 1) = 1.</li>
<li>Degrees are 3, 3, 2, 2. Add the edge 3-4 with cost min(2, 2) = 2.</li>
</ol>

<p>The total cost in the analyzed scenario is 1 + 1 + 2 = 4.</p>