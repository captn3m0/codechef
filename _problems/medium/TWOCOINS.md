---
{"category_name":"medium","problem_code":"TWOCOINS","problem_name":"Two Coins","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"5-07-2017","tags":{"0":"admin3","1":"dynamic","2":"easy","3":"july17","4":"tree"},"editorial_url":"https://discuss.codechef.com/problems/TWOCOINS","time":{"view_start_date":1500283800,"submit_start_date":1500283800,"visible_start_date":1500283800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JULY17/mandarin/TWOCOINS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/russian/TWOCOINS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY17/vietnamese/TWOCOINS.pdf">Vietnamese</a> as well.</h3>


<p>You are given a rooted tree consisting of <b>N</b> nodes. The nodes are numbered from 1 to <b>N</b>, and node 1 is the root. At each node of the tree, you can put zero or one coin such that the following property is satisfied for the tree:</p>

<ul>
  <li>For each node of the tree, starting from the original configuration, we should be able to get two coins on the node by applying at most two operations of the following kind:</li>
  <ul>
    <li>Take a coin from a node and move it to an adjacent node.</li>
  </ul>
  <li>While trying to get to a particular node, if the same coin is moved in two operations, both those operations should either be towards the root, or both of them should be away from the root. That is, you cannot move a coin to its parent in one operation and then take it to another child of the parent in the second operation.</li>
</ul>

<p>Find the minimum total number of coins which can be used to get a valid configuration.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>.</p>
<p>For each test case, the first line contains an integer <b>N</b>.</p>
<p>Each of the next <b>N</b> - 1 lines, contains two space separated integers <b>u, v</b>, denoting that there is an edge between node <b>u</b> and node <b>v</b> of the tree.</p>

<h3>Output</h3>
<p>For each test case, output a single integer corresponding to the minimum number of coins that can be used. If it's not possible to achieve this, output -1.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>1 ≤  <b>u</b>, <b>v</b> ≤ <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (40 points)</b>
<ul>
<li>1 ≤ <b>N</b> ≤ 1000</li>
</ul>
</p>

<p><b>Subtask #2 (60 points)</b>
<ul>
<li>Original constraints</li>
</ul>
</p>

<h3>Example</h3>
<pre>
<b>Input</b>
2
3
1 2
1 3
5
1 2
1 3
3 4
3 5

<b>Output</b>
3
4
</pre>

<h3>Explanation</h3>
<p><b>Example case 1</b>. </p>
<p><img src="https://discuss.codechef.com/upfiles/twocoins_first_sample.jpg" height="150"/></p>
<p>The nodes which have a coin in them are shown by blue color. You can see that each node satisfies the desired property.</p>

<p><b>Example case 2</b>.</p>
<p><img src="https://discuss.codechef.com/upfiles/twocoins_2.jpg" height="200"/></p>
