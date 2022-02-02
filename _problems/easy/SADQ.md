---
{"category_name":"easy","problem_code":"SADQ","problem_name":"SAD Queries","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"architk","problem_tester":null,"date_added":"8-12-2017","tags":{"0":"acm17kgp","1":"ad","2":"architk","3":"heavy","4":"kgp17rol","5":"medium"},"editorial_url":"https://discuss.codechef.com/problems/SADQ","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>"The Mean Absolute Difference is a measure of statistical dispersion equal to the average absolute difference of two independent values drawn from a probability distribution." - Wikipedia </p>
<p> In this problem we are concerned not with Mean Absolute Difference (MAD) of two distributions but rather with the Summed Absolute Difference (SAD) of two arrays. Given arrays (1-indexed) <b>P</b> and <b>Q</b> of lengths <b>p</b> and <b>q</b>, define</p>

<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/upload/ACM17KGP/SADQ.png" height="50"/></p>

<p> Given a collection of <b>K</b> arrays <b>A<sub>1</sub></b>, ..., <b>A<sub>K</sub></b>, report SAD(<b>A<sub>i</sub></b>, <b>A<sub>j</sub></b>) for several queries (<b>i</b>, <b>j</b>). </p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single positive integer <b>K</b>.</li>
<li>Each of the next <b>K</b> lines starts with a positive integer <b>s<sub>i</sub></b>, the size of <b>A<sub>i</sub></b>, followed by <b>s<sub>i</sub></b> space-separated integers <b>A<sub>i,1</sub></b>, ..., <b>A<sub>i,s<sub>i</sub></sub></b> which denotes the array <b>A<sub>i</sub></b>. </li>
<li> The next line of input consists of a single positive integer <b>M</b>. </li>
<li> Each of the next <b>M</b> lines consists of 2 positive integers <b>i</b> and <b>j</b> which lie between 1 and <b>K</b> (inclusive), specifying the indices of the arrays for which the SAD value must be reported.
</ul>

<h3>Output</h3>
<p>Output <b>M</b> lines. Line <b>i</b> should contain the answer to query <b>i</b>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>K</b>, <b>M</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>s<sub>1</sub></b> + ... + <b>s<sub><b>K</b></sub></b> ≤  10<sup>5</sup></li>
<li>-10<sup>9</sup> ≤ <b>A<sub>i,j</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>i</b>, <b>j</b> ≤ <b>K</b> in each of the queries
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
4 0 3 1 -2 
2 0 4 
2 2 4 
4 4 -3 -4 4 
3
3 4
4 2
1 4

<b>Output:</b>
30
30
60
</pre>

<h3>Explanation:</h3>
<p><b>Query 1:</b> The arrays in question are <b>A<sub>3</sub></b> = [2, 4] and <b>A<sub>4</sub></b> = [4, -3, -4, 4].

<pre>
SAD(<b>A<sub>3</sub></b>, <b>A<sub>4</sub></b>) = |2 - 4| + | 2 - (-3) | + |2 - (-4) | + | 2 - 4 | + | 4 - 4 | + | 4 - (-3) | + | 4 - (-4) | + | 4 - 4 | 
                       = 2 + 5 + 6 + 2 + 0 + 7 + 8 + 0 
                       = 30
</pre>
</p>