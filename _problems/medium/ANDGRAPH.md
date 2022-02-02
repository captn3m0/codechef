---
{"category_name":"medium","problem_code":"ANDGRAPH","problem_name":"AND Graph","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":null,"date_added":"17-06-2017","tags":{"0":"alex_2oo8"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/ANDGRAPH.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/ANDGRAPH.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/ANDGRAPH.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a huge directed graph <b>G</b> which has a vertex for every non-negative integer. The edges of the graph follow a strict pattern: there is a directed edge from vertex <b>u</b> to vertex <b>v</b> if and only if both the following two conditions are satisfied:
<ul>
  <li><b>u</b> < <b>v</b></li>
  <li>(<b>u</b> AND <b>v</b>) = 0</b>, where AND is bitwise AND which is defined below.</a></li>
</ul>
<br />
<p>Now Chef got curious as to how many different paths there are in graph <b>G</b> from vertex <b>s</b> to vertex <b>t</b>. He has a total of <b>T</b> questions of the above form for you. As the exact numbers of paths may be extremely large, print the answers modulo 998244353.

<p><b>Note</b>: A bitwise AND takes two equal-length binary representations and performs the logical AND operation on each pair of the corresponding bits, by multiplying them. Thus, if both bits in the compared position are 1, the bit in the resulting binary representation is 1 (1 × 1 = 1); otherwise, the result is 0 (1 × 0 = 0 and 0 × 0 = 0). For example, 3 AND 5 = (011)<sub>2</sub> AND (101)<sub>2</sub> = (001)<sub>2</sub> = 1</p>

<h3>Input</h3>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. <br />
Each test case consists of two lines containing binary strings <b>s<sub>2</sub></b> and <b>t<sub>2</sub></b> that are binary representations of numbers <b>s</b> and <b>t</b> respectively.

<h3>Output</h3>
For each test case, output a single line containing one integer ― the number of different paths from <b>s</b> to <b>t</b> modulo 998244353.

<h3>Constraints</h3>
<ul>
    <li>1 ≤ <b>|s<sub>2</sub>|</b> = <b>|t<sub>2</sub>|</b> ≤ 4 000</li>
    <li>1 ≤ [sum of <b>|s<sub>2</sub>|</b> over all <b>T</b> test cases] ≤ 10 000</li>
    <li><b>s</b> < <b>t</b></li>
    <li><b>t<sub>2</sub></b> contains no leading zeroes, while <b>s<sub>2</sub></b> can contain some</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
01
10
01
11
001
100

<b>Output:</b>
1
0
2
</pre>

<h3>Explanation</h3>
<b>Example case 1:</b> There is a direct edge from vertex 1 to vertex 2 and this is the only path between these two vertices.
<p> </p>
<b>Example case 2:</b> Vertex 3 contains only one incoming edge in graph <b>G</b> and this edge is from vertex 0, but as there are no path from vertex 1 to vertex 0, thus there are no paths to vertex 3 as well.
<p> </p>
<b>Example case 3:</b> The two paths are: 1  →   2 → 4 and 1 → 4.
