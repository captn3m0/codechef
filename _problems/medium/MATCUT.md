---
{"category_name":"medium","problem_code":"MATCUT","problem_name":"Mathison and the cubic tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":"1 - 4.5","source_sizelimit":50000,"problem_author":"alexvaleanu","problem_tester":"kingofnumbers","date_added":"23-08-2017","tags":{"0":"alexvaleanu","1":"hard","2":"hashing","3":"ltime51"},"editorial_url":"https://discuss.codechef.com/problems/MATCUT","time":{"view_start_date":1503768600,"submit_start_date":1503768600,"visible_start_date":1503768600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/mandarin/MATCUT.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/russian/MATCUT.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME51/vietnamese/MATCUT.pdf">vietnamese</a> as well.</h3>

<p>
  After playing board games, buying letters, and shuffling decks, Mathison has finally decided to study. He opens his favorite book,
  <a href="https://mitpress.mit.edu/books/introduction-algorithms">CLRS</a>, and decides to solve a graph problem. The problem is described below and you can find it by its number, 25.1-11, on page 693 (3<sup>rd</sup> edition only).
</p>

<p>
  You are given a <abbr title="a tree is an undirected graph in which any two vertices are connected by exactly one path">tree</abbr>
  with <b>N</b> nodes where each node has a value associated with it.
</p>

<p>
  Define <b>PROD</b>(<b>u</b>, <b>v</b>) to be the product of all values on the path from node <b>u</b> to node <b>v</b>.
</p>

<p>
  The problem is to find the <abbr title="the one with the highest number of nodes"><b>longest path</b></abbr> (<b>u</b>, <b>v</b>) such that <b>PROD</b>(<b>u</b>, <b>v</b>) is a
  <abbr title="A cubic number is a figurate number of the form n^3 with n a positive integer."><b>cubic number</b></abbr>
  (i.e. there is some natural number k such that k<sup>3</sup> = <b>PROD</b>(<b>u</b>, <b>v</b>)).
</p>

<p>
  Mathison has no idea how to solve this problem so he asks you for help! <br />
  Given <b>T</b> instances of this task, can you find the answer for each one of them so Mathison can proceed to the next chapter?
</p>

<h3>Input</h3>
<p>
  The first line contains the number of tests, <b>T</b>.
</p>

<p>
  The description of a test starts with one line that contains the number of nodes, <b>N</b>.
</p>

<p>
  The second line contains <b>N</b> space-separated integers, representing the values of the nodes.
</p>

<p>
  Each of the following <b>N-1</b> lines contain a single pair of integers <b>u</b>, <b>v</b>, representing an edge from <b>u</b> to <b>v</b>.
</p>


<h3>Output</h3>
<p>
  The output file must contain <b>T</b> lines, each one containing the answer (i.e. the longest path that generates a cubic number) for the corresponding test. If there's no such path then output <b>-1</b> instead.
</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5000</li>
<li>1 ≤ <b>N</b> ≤ 100,000 (i.e. 10<sup>5</sup>)</li>
<li>1 ≤ <b>value<sub>x</sub></b> ≤ 1,000,000 (i.e. 10<sup>6</sup>)</li>
</ul>

<h3>Subtaks</h3>
<p><b>Subtask #1</b> (10 points):
<ul>
<li>1 ≤ <b>T</b> ≤ 5000</li>
<li>1 ≤ <b>N</b> ≤ 10</li>
<li>All <b>values</b> are ≤ 50</li>
<li><b>TL</b> = 1s</li>
</ul>
</p>

<p><b>Subtask #2</b> (25 points):
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>1 ≤ <b>N</b> ≤ 300</li>
<li><b>TL</b> = 2s</li>
</ul>
</p>

<p><b>Subtask #3</b> (25 points):
<ul>
<li>The <b>sum</b> of all <b>N</b>s is ≤ 300,000</li>
<li>All <b>values</b> are ≤ 150</li>
<li><b>TL</b> = 3.5s</li>
</ul>
</p>

<p><b>Subtask #4</b> (40 points):
<ul>
<li>The <b>sum</b> of all <b>N</b>s is ≤ 300,000</li>
<li>Original constraints for <b>N</b> and <b>value<sub>x</sub>.</b></li>
<li><b>TL</b> = 4.5s</li>
</ul>
</p>

<h3>Example</h3>
<pre><b>Input:</b>
4
10
525 1210 15 6 40 22 441 35 220 121
2 1
1 3
7 3
2 5
2 4
5 8
6 5
9 5
9 10
3
2 3 5
1 2
2 3
5
2 4 2 2 8
1 2
1 3
3 4
5 4
2
125 3
1 2

<b>Output:</b>
3
-1
4
1
</pre>

<h3>Explanation</h3>
<pre>
First test
<img src="https://image.ibb.co/eSkERk/tree.png" width="70%" height="70%"/>

There is only one path that generates a cubic number: 2 → 5 → 9; 1210 × 40 × 220 = 10648000 = 220<sup>3</sup>
There are 3 nodes in this path so the answer is 3.

Second test
There is no path that generates a cubic number so the answer is -1.

Third test
There are two paths that generate a cubic number: 1 → 2 and 1 → 3 → 4 → 5.
The second one is longer so the answer is 4.

Fourth test
There is only one path that generates a cubic number and it contains only one node.
</pre>
