---
{"category_name":"hard","problem_code":"ISOARRAY","problem_name":"Chef and Isomorphic Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"chemthan","problem_tester":"kingofnumbers","date_added":"29-06-2017","tags":{"0":"chemthan","1":"chemthan","2":"cook89","3":"hashing","4":"likecs","5":"medium","6":"sqrt"},"editorial_url":"https://discuss.codechef.com/problems/ISOARRAY","time":{"view_start_date":1514140200,"submit_start_date":1514140200,"visible_start_date":1514140200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in  <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/mandarin/ISOARRAY.pdf">Mandarin</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/russian/ISOARRAY.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK89/vietnamese/ISOARRAY.pdf">Vietnamese</a> as well.</h3>

<p>Today, Chef came up with the following problem:

<p>Consider two arrays <b>a</b> and <b>b</b> with the same size. Denote the multisets of all elements of arrays <b>a</b> and <b>b</b> by 
<b>MA</b> and <b>MB</b> respectively.</p>

<p>The arrays <b>a</b>, <b>b</b> are <i>isomorphic</i> if it's possible to find a bijective function <b>f</b>: Z → Z which satisfies the following rules:
<ul>
<li>Let's construct a new multiset <b>MF</b>. For each element <b>x</b> of <b>MA</b>, we should insert <b>f</b>(<b>x</b>) into <b>MF</b>.</li>
<li>The multisets <b>MF</b> and <b>MB</b> should be identical.</li>
</ul>
</p>

<p>For example, if <b>MA</b> = {1, 1, 2, 2, 2, 3} and <b>MB</b> = {3, 3, 4, 9, 9, 9}, we can choose the function <b>f</b> in the following way: <b>f</b>(1) = 3, <b>f</b>(2) = 9, <b>f</b>(3) = 4. After applying <b>f</b>() on each element of <b>MA</b>, we obtain the multiset {3, 3, 9, 9, 9, 4} = <b>MB</b>. Therefore, <b>a</b> and <b>b</b> are isomorphic.</p>

</p>

<p>Now, Chef has an array <b>a</b> with size <b>n</b>; he wants to ask you <b>q</b> queries. For each query, you are given two subarrays <b>a<sub>x</sub>, a<sub>x+1</sub>, ..., a<sub>y</sub></b> and <b>a<sub>z</sub>, a<sub>z+1</sub>, ..., a<sub>t</sub></b> (1 ≤ <b>x</b> ≤ <b>y</b> ≤ <b>n</b>, 1 ≤ <b>z</b> ≤ <b>t</b> ≤ <b>n</b>, <b>y</b> - <b>x</b> = <b>t</b> - <b>z</b>); you should determine if the subarrays are isomorphic.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>n</b> denoting the size of the array <b>a</b>.</li>
<li>The second line contains <b>n</b> space-separated integers <b>a<sub>1</sub>, a<sub>2</sub>, ..., a<sub>n</sub></b>.</li>
<li>The next line contains a single integer <b>q</b> denoting the number of queries you must answer.</li>
<li>Each of the following <b>q</b> lines contains four space-separated integers <b>x</b>, <b>z</b>, <b>c</b>, <b>d</b> describing one query. The indices <b>y</b> and <b>t</b> are generated in the following way:
<ul>
<li>Let <b>k</b> = min(<b>n</b> − <b>x</b>, <b>n</b> − <b>z</b>) + 1.</li>
<li>Let <b>last</b> be equal to the index of the last query for which its answer was <tt>"YES"</tt> (queries are indexed from 1), or <b>last</b> = 0 if there isn't such query yet.</li>
<li><b>y</b> = <b>x</b> + (<b>c</b> + <b>d</b> · <b>last</b>) % <b>k</b></li>
<li><b>t</b> = <b>z</b> + (<b>c</b> + <b>d</b> · <b>last</b>) % <b>k</b></li>
</ul>
</li>
</ul></p>

<h3>Output</h3>
<p>For each query, print a single line containing the string <tt>"YES"</tt> (without quotes) if the two subarrays are isomorphic or <tt>"NO"</tt> otherwise.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>n</b> ≤ 75000</li>
<li>1 ≤ <b>q</b> ≤ 2 · 10<sup>5</sup></li>
<li>1 ≤ <b>a<sub>i</sub></b> ≤ <b>n</b></li>
<li>1 ≤ <b>x</b>, <b>z</b> ≤ <b>n</b></li>
<li>0 ≤ <b>c</b>, <b>d</b> ≤ 10<sup>9</sup></li>
<li>sum of <b>n</b> over all test cases ≤ 150000</li>
<li>sum of <b>q</b> over all test cases ≤ 4 · 10<sup>5</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>

1
5
2 1 2 3 3
5
2 1 3 0
1 2 2 0
2 4 2 4
3 5 1 3
2 5 2 5

<b>Output:</b>

YES
NO
YES
YES
YES
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b>
<ul>
<li>query 1: <b>last</b> = 0, <b>x</b> = 2, <b>y</b> = 5, <b>z</b> = 1, <b>t</b> = 4</li>
<li>query 2: <b>last</b> = 1, <b>x</b> = 1, <b>y</b> = 3, <b>z</b> = 2, <b>t</b> = 4</li>
<li>query 3: <b>last</b> = 1, <b>x</b> = 2, <b>y</b> = 2, <b>z</b> = 4, <b>t</b> = 4</li>
<li>query 4: <b>last</b> = 3, <b>x</b> = 3, <b>y</b> = 3, <b>z</b> = 5, <b>t</b> = 5</li>
<li>query 5: <b>last</b> = 4, <b>x</b> = 2, <b>y</b> = 2, <b>z</b> = 5, <b>t</b> = 5</li>
</ul>
</p>