---
{"category_name":"medium","problem_code":"ANCESTOR","problem_name":"Ancestors in Two Trees","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"1-06-2017","tags":{"0":"kingofnumbers"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/ANCESTOR.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/ANCESTOR.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/ANCESTOR.pdf">Vietnamese</a> as well.</h3>

<p>You are given two rooted trees, each with <b>N</b> nodes. The nodes in each tree are labeled from 1 to <b>N</b>. The root of each tree is the node labeled 1 in that tree.</p>

<p>Your task is simple: For each i, find the number of j's (j ≠ i), such that node j is an ancestor of node i in both the trees.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</li>

<li>First line of each test-case contains <b>N</b>, the number of nodes in each tree.</li>

<li>The i-th of the next <b>N</b> - 1 lines contains two integers, <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>, which denotes that there is an edge between node <b>u<sub>i</sub></b> and node <b>v<sub>i</sub></b> in the first tree.</li>

<li>The i-th of the next <b>N</b> - 1 lines contains two integers, <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b>, which denotes that there is an edge between node <b>u<sub>i</sub></b> and node <b>v<sub>i</sub></b> in the second tree.</li>
</ul>


<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> integers, i-th integer is the number of nodes which are ancestors of node i in both the trees.</p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10000</li>
<li>2 ≤ <b>N</b> ≤ 500,000</li>
<li>1 ≤ sum of  <b>N</b> in all test-cases ≤ 500,000</li>
<li>1 ≤ <b>u<sub>i</sub></b>, <b>v<sub>i</sub></b> ≤ <b>N</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
5
1 3
1 2
3 5
3 4
1 5
1 2
2 3
3 4

<b>Output:</b>
0 1 1 2 1
</pre>

<h3>Explanation</h3>
<p>Because node 1 is the root in both the trees, there is no node above them. So first output is 0.</p>
<p>Node 1 is the only node which is an ancestor of Node 2 in both the trees. So the second output is 1.</p>
<p>Node 1 is the only node which is an ancestor of Node 3 in both the trees. So the third output is 1.</p>
<p>Node 1 and node 3 are the only nodes which are ancestors of Node 4 in both the trees. So the fourth output is 2.</p>
<p>Node 1 is the only node which is an ancestor of Node 5 in both the trees. So the fifth output is 1.</p>