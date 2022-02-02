---
{"category_name":"medium","problem_code":"XOR","problem_name":"Xor it","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"anton_lunyov","date_added":"4-02-2012","tags":{"0":"march12","1":"medium","2":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/XOR","time":{"view_start_date":1331461067,"submit_start_date":1331461067,"visible_start_date":1331458200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef has given you a sequence <b>A[1], A[2], ..., A[N]</b> composed of <b>N</b> nonnegative integer numbers. Then, for each pair (<b>i</b>; <b>j</b>) such that <b>1 &lt;= i &lt; j &lt;= N</b>, we have written a number that equals to <b>A[i] xor A[j]</b> (xor is exclusive or, "xor" in Pascal, "^" in C++). Thus, we have obtained <b>N*(N-1)/2</b> numbers. Your task is to find <b>K</b> minimal numbers among them.

<h3>Input</h3>
</p><p>The first line of the input contains two space separated integers <b>N</b> and <b>K</b>. Each of the next <b>N</b> lines contains one integer, <b>i</b><sup>th</sup> line contains number <b>A[i]</b>.

<h3>Output</h3>
</p><p>In the only line of output print space separated sequence of  <b>K</b> numbers, the answer to the problem. Numbers should be in non-decreasing order.

<h3>Constraints</h3>
</p><p> 2 ≤ <b>N</b> ≤ 100000
</p><p> 1 ≤ <b>K</b> ≤ <b>min{250000, N*(N-1)/2}</b>
</p><p> 0 ≤ <b>A[i]</b> &lt; 2<sup>31</sup>
 
<h3>Example</h3>

<pre>
<b>Input:</b>
4 5
1
1
3
4

<b>Output:</b>
0 2 2 5 5
</pre>

<h3>Explanation</h3>

In the sample input we have <b>4</b> numbers: <b>1, 1, 3, 4</b>. Therefore, there are <b>(4*3)/2 = 6</b> pairwise XOR's. These XOR's are:<br />
<b>1</b> xor <b>1</b> = <b>0</b> (<b>A[1]</b> xor <b>A[2]</b>)<br />
<b>1</b> xor <b>3</b> = <b>2</b> (<b>A[1]</b> xor <b>A[3]</b>)<br />
<b>1</b> xor <b>4</b> = <b>5</b> (<b>A[1]</b> xor <b>A[4]</b>)<br />
<b>1</b> xor <b>3</b> = <b>2</b> (<b>A[2]</b> xor <b>A[3]</b>)<br />
<b>1</b> xor <b>4</b> = <b>5</b> (<b>A[2]</b> xor <b>A[4]</b>)<br />
<b>3</b> xor <b>4</b> = <b>7</b> (<b>A[3]</b> xor <b>A[4]</b>)<br />
If we sort these numbers we will obtain: <b>0, 2, 2, 5, 5, 7</b>. The first <b>5</b> minimal numbers are: <b>0, 2, 2, 5, 5</b>.</p>