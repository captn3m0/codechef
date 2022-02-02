---
{"category_name":"easy","problem_code":"GENPERM","problem_name":"Generating A Permutation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"architk","problem_tester":null,"date_added":"13-12-2017","tags":{"0":"acm17kgp","1":"architk","2":"constructive","3":"easy","4":"kgp17rol"},"editorial_url":"https://discuss.codechef.com/problems/GENPERM","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>For a permutation P = (p<sub>1</sub>, p<sub>2</sub>, ..., p<sub><b>N</b></sub>) of numbers [1, 2, ..., <b>N</b>], we define the function f(P) = max(p<sub>1</sub>, p<sub>2</sub>) + max(p<sub>2</sub>, p<sub>3</sub>) + ... + max(p<sub><b>N</b>-1</sub>, p<sub><b>N</b></sub>).</p>

<p>You are given <b>N</b> and an integer <b>K</b>. Find and report a permutation P of [1, 2, ..., <b>N</b>] such that f(P) = <b>K</b>, if such a permutation exists.</p>

<p>Note f([1]) = 0.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The only line of each test case consists of two space-separated integers <b>N, K</b> respectively.</li>
</ul>

<h3>Output</h3>
<p>For each test case, if a permutation satisfying the condition exists, output a single line containing <b>N</b> space-separated integers which denotes any such permutation. If no such permutation exists, output a single integer -1 instead.</p>
<p>Use fast I/O methods since the size of the output is large.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 40</li>
<li>1 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>Sum of <b>N</b> over all test cases in each file ≤ 10<sup>6</sup></li>
<li>0 ≤ <b>K</b> ≤ 2 * 10<sup>10</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
4 12
2 2
5 14

<b>Output:</b>
-1
1 2
5 4 3 2 1
</pre>

<h3>Explanation</h3>
<p><b>Example 1.</b> There doesn't exist any permutation of numbers [1, 2, 3, 4] that can have its f value equal to 4. Hence answer is -1.</p>

<p><b>Example 2.</b> The permutations [1, 2] and [2, 1] both have their f values equal to 2. You can print any of these two permutations. </p>

<p><b>Example 3.</b> The permutation [5, 4, 3, 2, 1]
 has f value = max(5, 4) + max(4, 3) + max(3, 2) + max(2, 1) = 5 + 4 + 3 + 2 = 14.</p>

