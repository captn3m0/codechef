---
{"category_name":"easy","problem_code":"CARRAY","problem_name":"Chef and Line","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"wwwwodddd","date_added":"3-02-2018","tags":{"0":"cook91","1":"greedy","2":"mgch","3":"simple","4":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/CARRAY","time":{"view_start_date":1518978600,"submit_start_date":1518978600,"visible_start_date":1518978600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/mandarin/CARRAY.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/russian/CARRAY.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK91/vietnamese/CARRAY.pdf">Vietnamese</a> as well.</h3>

<p>Chef has a sequence <b>A</b> with length <b>N</b> and a line given by the equation <b>y</b>(<b>x</b>) = <b>k · x + b</b>. Let us say that an element <b>A<sub>j</sub></b> is <i>reachable</i> from another element <b>A<sub>i</sub></b> if the point (<b>A<sub>i</sub></b>, <b>A<sub>j</sub></b>) is lying above or on the line <b>y</b>(<b>x</b>), i.e. if <b>A<sub>j</sub></b> ≥  <b>k · A<sub>i</sub> + b</b>.</p>

<p>Consider an arbitrary subsequence of <b>A</b>; let's denote it by <b>B</b>. Subsequence <b>B</b> is called <i>good</i> if its elements can be reordered in such a way that for each valid <b>i</b>, <b>B<sub>i+1</sub></b> is reachable from <b>B<sub>i</sub></b>.</p>

<p>Chef asked you to compute the maximum possible length of a good subsequence. Can you help him?</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains three space-separated integers <b>N</b>, <b>k</b> and <b>b</b>.</li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the length of the longest good subsequence of <b>A</b>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5000</li>
<li>1 ≤ <b>N</b> ≤ 100000</li>
<li>0 ≤ <b>k</b>, <b>b</b> ≤ 10<sup>9</sup></li>
<li>0 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> for each valid <b>i</b></li>
<li>1 ≤ sum of <b>N</b> over all test cases ≤ 200000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

1
5 4 1
100 2 4 17 8

<b>Output:</b>

3
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> We can choose the subsequence (100, 4, 17) and reorder it to get the sequence (4, 17, 100). In this sequence, 17 is reachable from 4 because 4 · 4 + 1 = 17 ≤ 17 and 100 is reachable from 17 because 4 · 17 + 1 = 69 ≤ 100. Hence, (100, 4, 17) is a good subsequence; there is no good subsequence of <b>A</b> with length 4 or more, so the answer is 3.</p>
