---
{"category_name":"hard","problem_code":"CNTDIGIT","problem_name":"Count Digits","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"witua","problem_tester":"xcwgf666","date_added":"14-08-2014","tags":{"0":"cook49","1":"dynamic","2":"medium","3":"witua"},"editorial_url":"http://discuss.codechef.com/problems/CNTDIGIT","time":{"view_start_date":1408906200,"submit_start_date":1408906200,"visible_start_date":1408906200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/mandarin2/CNTDIGIT.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/russian/CNTDIGIT.pdf">Russian</a> as well.</h3>
<p>You are given an integer <b>N</b>. For each pair of integers (<b>L</b>, <b>R</b>), where <b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b> you can find the number of distinct digits that appear in the decimal representation of at least one of the numbers <b>L L+1</b> ... <b>R</b>.</p>
<p>
Find the sum of all that numbers. Since the answer can be large, output it modulo <b>1000000007</b>.
</p>
<h3>Input</h3>
<p>The only line of the input contains a single integer <b>N</b> without leading zeros.</p>
<h3>Output</h3>
<p>Output the answer to the problem on the first line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>100</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
7

<b>Output:</b>
84
</pre>