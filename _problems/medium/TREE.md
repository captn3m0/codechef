---
{"category_name":"medium","problem_code":"TREE","problem_name":"Tree Counting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":"pieguy","date_added":"5-11-2012","tags":{"0":"easy","1":"kirchhoff","2":"maths","3":"may13","4":"shangjingbo"},"editorial_url":"http://discuss.codechef.com/problems/TREE","time":{"view_start_date":1368441297,"submit_start_date":1368441297,"visible_start_date":1368441000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Let's define a good tree:
<ol>
<li>It is a tree with <b>k * n</b> nodes labeled from <b>0</b> to <b>k * n - 1</b></li>
<li>Node <b>i</b> and node <b>j</b> are not adjacent, for all <b>0 &lt;= i, j &lt; k * n</b> such that <b>i div k = j div k</b> (here <b>div</b> means integer division.  E.g. 7 <b>div</b> 2 = 3)</li>
</ol>
</p><p>
Given <b>n</b> and <b>k</b>, how many different good trees are there?</p>
<h3>Input</h3>
<p>Two integers <b>n(1 &lt;= n &lt;= 10^5), k(1&lt;= k &lt;=3)</b></p>
<h3>Output</h3>
<p>Output the number of different good trees. As the result may be very large, just output the remainder when divided by (10^9 + 7).</p>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
2 2

<b>Output 1:</b>
4

<b>Input 2:</b>
1 2

<b>Output 2:</b>
0

<b>Input 3:</b>
4 1

<b>Output 3:</b>
16

</pre>