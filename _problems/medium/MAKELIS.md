---
{"category_name":"medium","problem_code":"MAKELIS","problem_name":"Longest Increasing Subsequences","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"xcwgf666,antoniuk1","date_added":"30-05-2016","tags":{"0":"dynamic","1":"kevinsogo","2":"lis","3":"medium","4":"snckpa16","5":"subsequence"},"editorial_url":"http://discuss.codechef.com/problems/MAKELIS","time":{"view_start_date":1465140600,"submit_start_date":1465140600,"visible_start_date":1465140600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="/download/translated/SNCKPA16/mandarin/MAKELIS.pdf">Mandarin Chinese</a>, <a target="_blank" href="/download/translated/SNCKPA16/russian/MAKELIS.pdf">Russian</a> and <a target="_blank" href="/download/translated/SNCKPA16/vietnamese/MAKELIS.pdf">Vietnamese</a> as well.</h3>
<p>Chef recently learned about the classic <b>Longest Increasing Subsequence</b> problem. However, Chef found out that while the <i>length</i> of the longest increasing subsequence is unique, the longest increasing subsequence itself is not necessarily unique; for example, in the array <b>[1, 3, 2, 4]</b>, there are two longest increasing subsequences: <b>[1, 3, 4]</b> and <b>[1, 2, 4]</b>.</p>
<p>Chef decided to investigate on this more, and now he has sufficient mastery in it that he was able to come up with a problem:</p>
<p>Given an integer <b>K</b>, output an integer <b>N</b> and a <i>permutation</i> of the array <b>[1, 2, ..., N]</b> such that there are <b>exactly</b> <b>K</b> longest increasing subsequences. Chef also requires that <b>1</b> ≤ <b>N</b> ≤ <b>100</b>, otherwise he found the problem is too easy.</p>
<p>In case there are multiple possible answers, any one will be accepted.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of a single line containing a single integer <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case, output two lines. The first line contains a single integer, <b>N</b>. The second line contains <b>N</b> space separated integers denoting the permutation of <b>[1,2,...,N]</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>2×10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
1
2
</tt>
<b>Output:</b>
<tt>5
1 2 3 4 5
4
1 3 2 4
</tt></pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Here, <b>K</b> = 1. The array <b>[1, 2, 3, 4, 5]</b> indeed contains exactly one longest increasing subsequence: the whole sequence itself.</p>
<p><b>Example case 2.</b> Here, <b>K</b> = 2. As explained in the problem statement, the array <b>[1, 3, 2, 4]</b> contains exactly two longest increasing subsequences: <b>[1, 3, 4]</b> and <b>[1, 2, 4]</b>.</p>