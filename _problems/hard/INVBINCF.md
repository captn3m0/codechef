---
{"category_name":"hard","problem_code":"INVBINCF","problem_name":"Inverse Binomial Coefficient","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"anton_lunyov","problem_tester":"laycurse","date_added":"11-03-2013","tags":{"0":"anton_lunyov","1":"april13","2":"factorial","3":"hard","4":"modulo"},"editorial_url":"http://discuss.codechef.com/problems/INVBINCF","time":{"view_start_date":1366018200,"submit_start_date":1366018200,"visible_start_date":1366018200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The binomial coefficient <b>C(N, K)</b> is defined as <b>N! / K! / (N − K)!</b> for <b>0 ≤ K ≤ N</b>.<br/> Here <b>N! = 1 * 2 * ... * N</b> for <b>N ≥ 1</b>, and <b>0! = 1</b>.</br/></p>
<p>You are given integers <b>n</b> and <b>R</b>.<br/> You need to find the smallest <b>K</b> in the range <b>{0, 1, ..., 2<sup>n</sup> − 1}</b>, for which <b>C(2<sup>n</sup> − 1, K) mod 2<sup>n</sup> = R</b>.<br/> Here <b>A mod B</b> denotes the remainder of the division of <b>A</b> by <b>B</b>. If no such <b>K</b> exists output <b>-1</b>.</br/></br/></p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases.<br/> The description of <b>T</b> test cases follows.<br/> The only line of each test case contains two space-separated integers <b>n</b> and <b>R</b>.</br/></br/></p>
<h3>Output</h3>
<p>For each test case output the answer on the separate line.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>120</b></li>
<li><b>0</b> ≤ <b>R</b> &lt; <b>2<sup>n</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1 0
1 1
3 7
4 3

<b>Output:</b>
-1
0
1
7
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> We have <b>C(1, 0) = C(1, 1) = 1</b>. Hence <b>C(1, K) mod 2 ≠ 0</b> for all <b>K</b>. Therefore, the answer is <b>-1</b>.</p>
<p><b>Example case 2.</b> Since <b>C(1, 0) mod 2 = 1</b>, the answer is <b>0</b>.</p>
<p><b>Example case 3.</b> Since <b>C(7, 0) mod 8 = 1 ≠ 7</b> and <b>C(7, 1) mod 8 = 7 mod 8 = 7</b>, the answer is <b>1</b>.</p>
<p><b>Example case 4.</b> Here <b>C(15, 7) mod 16 = 15! / 7! / 8! mod 16 = 6435 mod 16 = 3</b>. It can be shown that for all smaller values of <b>K</b> we have <b>C(15, K) mod 16 ≠ 3</b>. Therefore, the answer is <b>7</b>.</p>
