---
{"category_name":"easy","problem_code":"DEVSTR","problem_name":"Devu and binary String","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"9-02-2015","tags":{"0":"admin","1":"admin2","2":"basic","3":"easy","4":"may15"},"editorial_url":"http://discuss.codechef.com/problems/DEVSTR","time":{"view_start_date":1431941400,"submit_start_date":1431941400,"visible_start_date":1431941400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/mandarin/DEVSTR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY15/russian/DEVSTR.pdf">Russian</a>.</h3>
<p> Devu loves to play with binary strings a lot. One day he borrowed a binary string <b>s</b> of size <b>n</b> from his friend Churu. Before starting to play with it, he wants to make sure that string does not contain more than <b> k</b> consecutive equal characters. For achieving that, only kind of operation he is allowed to perform is to flip any <b>i<sup>th</sup></b> character of the string.
</p>
<p>
As Devu is always in hurry to meet his girlfriend, he wants you to help him in finding out the minimum number of operations he will need. Also he wants you to print one of the possible modified string too.</p>
<h3>Input</h3>
<ul>
<li>First line of input contains an integer <b>T</b> denoting the number of test cases. </li>
<li>For each test case, there are two lines. </li>
<li>First line contains two space separated integers <b>n, k</b> as defined in the problem. </li>
<li>Next line contains string <b>s</b> of size <b>n</b>.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, print two lines.</li>
<li>First line should contain an integer corresponding to minimum number of operations Devu needs.</li>
<li>In second line, print one of the possible modified strings.</li>
</ul>
<h3>Constraints</h3>
<p>
<b>Subtask #1: 20 points</b></p>
<ul>
<li><b>1 ≤ T ≤ 100</b>, <b>1 ≤ n ≤ 20</b>, <b>1 ≤ k ≤ n</b></li>
</ul>

<p>
<b>Subtask #2: 35 points</b></p>
<ul>
<li><b>1 ≤ T ≤ 10<sup>2</sup></b>, <b>1 ≤ n ≤ 10<sup>3</sup></b>, <b>1 ≤ k ≤ n</b></li>
</ul>

<p>
<b>Subtask #3: 45 points</b></p>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b>, <b>1 ≤ n ≤ 10<sup>5</sup></b>, <b>1 ≤ k ≤ n</b></li>
<li>Sum of <b>n</b> over all the test cases is ≤ <b>10<sup>6</sup> </b>
</li></ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
2 1
11
2 2
11
4 1
1001

<b>Output:</b>
1
10
0
11
2
1010
</pre><h3>Explanation</h3>
<p><b>Example case 1:</b> As 1 is occurring twice consecutively, we can convert 11 to 10 in a single operation.</p>
<p><b>Example case 2:</b> You don't need to modify the string as it does not have more than 2 equal consecutive character.</p>
<p><b>Example case 3:</b> As 0 is occurring twice consecutively, we can convert 1001 to 1010 in a two operations (Flip third and fourth character).</p>
