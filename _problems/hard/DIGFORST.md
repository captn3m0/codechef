---
{"category_name":"hard","problem_code":"DIGFORST","problem_name":"Digits Forest","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"anhdq","problem_tester":"subra","date_added":"22-08-2011","tags":{"0":"anhdq","1":"hard","2":"may12"},"editorial_url":"http://discuss.codechef.com/problems/DIGFORST","time":{"view_start_date":1336723152,"submit_start_date":1336723152,"visible_start_date":1336728600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Given a simple undirected graph containing N vertices numbered 1 to N, each vertex containing a digit from {1,2,..7}. Starting at the vertex 1 with an empty string S, we travel through some vertices (with no limitations) to the vertex N. For every vertex on the way, we add the respective digit to the right of the string S. At last we get S as a decimal integer. You are requested to find such a way satisfying S is divisible by all of its digits, and the sum of digits of S must be as small as possible.
</p>

<h3>Input</h3>
<p>There are several test cases (fifteen at most), each formed as follows:
<ul>
<li>The first line contains a positive integer N (N ≤ 100).</li>
<li>The second line contains N digits (separated by spaces), the i-th digit is the value of the i-th vertex.</li>
<li>N last lines, each contains N values of {0, 1} (separated by spaces), the j-th value of the i-th line is equal to 1 if there is an edge connecting two vertices (i, j), otherwise 0.</li>
</ul>
The input is ended with N = 0.
</p>

<h3>Output</h3>
<p>For each test case, output on a line the minimum sum of digits found, or <b>-1</b> if there's no solution.
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
4
1 2 1 4
0 1 1 1
1 0 0 1
1 0 0 1
1 1 1 0
0

<b>Output:</b>
7
</pre>