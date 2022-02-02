---
{"category_name":"medium","problem_code":"PDSNUM","problem_name":"PDS Number","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":20,"source_sizelimit":50000,"problem_author":"anhdq","problem_tester":"laycurse","date_added":"23-08-2011","tags":{"0":"anhdq","1":"april12","2":"medium"},"editorial_url":"http://discuss.codechef.com/problems/PDSNUM","time":{"view_start_date":1334137623,"submit_start_date":1334137623,"visible_start_date":1334136600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>A positive integer is called a "PDS Number" if the product of its digits is divisible by the sum of its digits. Let PDS(N) be the N-th PDS Number (indexed from 1), you are requested to calculate it.
</p>

<h3>Input</h3>
<p>There are several test cases (at most 10000), each formed as follows:
<ul>
<li>The first and only line contains a positive integer N (N ≤  10<sup>9</sup>).</li>
</ul>
The input is ended by N = 0.
</p>

<h3>Output</h3>
<p>For each test case, output on a line the respective PDS(N) calculated.
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
1
20
0

<b>Output:</b>
1
66
</pre>