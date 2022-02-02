---
{"category_name":"medium","problem_code":"CNTSOLS","problem_name":"The Number Of Solutions","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ballon_ziq","problem_tester":"white_king","date_added":"4-04-2013","tags":{"0":"aug13","1":"ballon_ziq","2":"dynamic","3":"easy","4":"exponentiation","5":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CNTSOLS","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Little Chief loves math. Most of all, he loves equations. He can solve any equation in the whole world. Recently he found one interesting and easy equation</p>
<p><b>x1<sup>d</sup>+x2<sup>d</sup>+x3<sup>d</sup> ≡ m (mod N)</b><br />
Where <b>x1, x2 and x3</b> are non negative integer numbers.</p>
<p>But, as always, this was easy enough for him and he solved it in just a few seconds. Now he wants you to do the same. Of course he understands that nobody is as good as he is, so he wants only the number of solutions of such equation which satisfies <b>0 ≤ x1, x2, x3 ≤ upper</b> for given <b>upper</b>, <b>d</b>,<b>m</b> and <b>N</b>. As the answer might be very large, he asks you to find the answer modulo <b>1000000007</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow. Each test case consists of 4 integers: <b>upper</b>, <b>d</b>, <b>m</b>, <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing number of solutions for the corresponding equation, modulo <b>1000000007</b>. You may assume that <b>0<sup>0</sup></b> is equal to 1.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ upper ≤ 1,000,000,000</b></li>
<li><b>0 ≤ d ≤ 1,000,000,000</b></li>
<li><b>1 ≤ N ≤ 40</b></li>
<li><b>0 ≤ m &lt; N</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 2 3 5
1 2013 3 31

<b>Output:</b>
4
1

</pre><h3>Explanation</h3>
<p>The first equation has 4 solutions:</p>
<ul>
<li>(0,2,2)</li>
<li>(2,2,0)</li>
<li>(2,0,2)</li>
<li>(1,1,1)</li>
</ul>

<p>The second has only one:</p>
<ul>
<li>(1,1,1)</li>
</ul>

