---
{"category_name":"medium","problem_code":"WEASELTX","problem_name":"Weasel does Xor on Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"bciobanu","problem_tester":"jingbo_adm","date_added":"9-08-2017","tags":{"0":"bciobanu","1":"binomial","2":"lucas","3":"medium","4":"sept17"},"editorial_url":"https://discuss.codechef.com/problems/WEASELTX","time":{"view_start_date":1505122200,"submit_start_date":1505122200,"visible_start_date":1505122200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/WEASELTX.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/WEASELTX.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/WEASELTX.pdf">vietnamese</a> as well.</h3>

<p>A tree is an undirected graph in which each pair of vertices is connected to each other by exactly one path. Weasel has a tree with <b>N</b> nodes. The indexing of the nodes is <b>0</b>-based and the tree is rooted at node <b>0</b>. Every node <b>i</b> has an initial value <b>X<sub>0<sub>i</sub></sub></b>.</p>

<p>Every day <b>d > 0</b>, he performs the following operations, starting from the root:</p>
<ul>
<li>Weasel computes <b>X<sub>d<sub>u</sub></sub></b> as the bitwise-xor sum of all the values <b>X<sub>d − 1<sub>v</sub></sub></b> for a node <b>v</b> in <b>u</b>'s subtree.</li>
<li>He recursively proceeds to perform the operation for every child of <b>u</b>.
</ul>
</p>

<p>For <b>Q</b> values of <b>Δ</b>, Weasel wants to compute <b>X<sub>Δ<sub>0</sub></sub></b>.</p>

<h3>Input</h3>
<p>The first line of the input contains two integers <b>N</b> and <b>Q</b>.</p>
<p>Each of the following <b>N − 1</b> lines contains two integers, <b>u</b> and <b>v</b>, an edge in the tree.</p>
<p>On the following line there are <b>N</b> integers, representing the <b>X<sub>0</sub></b> array.</p>
<p>Each of the next <b>Q</b> lines contains values for <b>Δ</b> as noted in the statement.</p>

<h3>Output</h3>
<p>You should print <b>Q</b> lines, each containing <b>X<sub>Δ<sub>0</sub></sub></b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>2 * 10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>X<sub>0<sub>i</sub></sub></b> ≤ <b>10<sup>18</sup></b> for every <b>0</b> ≤ <b>i</b> ≤ <b>N − 1</b>.</li>
<li><b>0</b> ≤ <b>Δ</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>0</b> ≤ <b>u, v</b> ≤ <b>N − 1</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (20 points): <b>1</b> ≤ <b>N</b> ≤ <b>500</b> and <b>Δ</b> ≤ <b>500</b></li>
<li><b>Subtask 2</b> (20 points): <b>1</b> ≤ <b>N</b> ≤ <b>1000</b> and <b>1</b> ≤ <b>N × Q</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>Subtask 3</b> (10 points): <b>1</b> ≤ <b>N</b> ≤ <b>5000</b></li>
<li><b>Subtask 4</b> (50 points): original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4 3
0 1
1 2
0 3
1 5 8 7
1
2
3

<b>Output:</b>
11
9
3
</pre>

<h3>Explanation</h3>
<p>Initially <b>X<sub>0</sub> = [1, 5, 8, 7]</b>.</p>
<p>Weasel performs his operation on node <b>0</b>:
 <b>X<sub>1<sub>0</sub></sub></b> = <b>X<sub>0<sub>0</sub></sub></b> xor <b>X<sub>0<sub>1</sub></sub></b> xor <b>X<sub>0<sub>2</sub></sub></b> xor <b>X<sub>0<sub>3</sub></sub></b> = <b>1</b> xor <b>5</b> xor <b>8</b> xor <b>7</b> = <b>11</b>. </p>
<p><b>X<sub>1<sub>1</sub></sub></b> = <b>X<sub>0<sub>1</sub></sub></b> xor <b>X<sub>0<sub>2</sub></sub></b>  = <b>5</b> xor <b>8</b> = <b>13</b>.</p>
<p>
<b>X<sub>1<sub>2</sub></sub></b> and <b>X<sub>1<sub>3</sub></sub></b> remain equal to <b>X<sub>0<sub>2</sub></sub></b>, respectively <b>X<sub>0<sub>3</sub></sub></b>.</p>
</p>