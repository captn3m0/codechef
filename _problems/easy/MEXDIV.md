---
{"category_name":"easy","problem_code":"MEXDIV","problem_name":"Mex division","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gomelfk","problem_tester":null,"date_added":"2-06-2017","tags":{"0":"gomelfk"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/MEXDIV.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/MEXDIV.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/MEXDIV.pdf">Vietnamese</a> as well.</h3>

<p>Given an array <b>A</b> of <b>n</b> non-negative integers. Find the number of ways to partition/divide the array into subarrays, such that <b><a href="https://en.wikipedia.org/wiki/Mex_(mathematics)"> mex</a></b> in each subarray is not more than <b>k</b>. For example, mex of the arrays [1, 2] will be 0, and that of [0, 2] will be 1, and that of [0, 1, 2] will be 3. Due to the fact that the answer can turn out to be quite large, calculate it modulo <b>10<sup>9</sup> + 7</b>.</p>


<h3>Input</h3>
<ul>
<li>The first line of the input contains two integers <b>n, k</b> denoting the number of elements and limit of mex.</li>
<li>The second line contains <b>n</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ... , A<sub>n</sub> </b>.</li>
</ul>

<h3>Output</h3>
<ul>
<li>Output a single integer corresponding to the answer of the problem.</li>
</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ n ≤ 5 * 10<sup>5</sup></b></li>
<li><b>0 ≤ k, A[i] ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3 1
0 1 2

<b>Output:</b>
2

</pre>

<pre><b>Input:</b>
10 3
0 1 2 3 4 0 1 2 5 3

<b>Output:</b>
379
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. The valid ways of partitioning will be [[0], [1, 2]] (mex of first subarray is 1, while that of the second is zero), and [[0], [1], [2]] (mex of first subarray is 1, and that of others is 0). There is no other way to partition the array such that mex is less than or equal to 1. For example, [[0, 1], [2]] is not a valid partitioning as mex of first subarray is 2 which is more than 1.</p>
