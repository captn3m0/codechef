---
{"category_name":"easy","problem_code":"CHEFZOT","problem_name":"Chef and Subarray","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"shiplu","date_added":"18-03-2014","tags":{"0":"ad","1":"berezin","2":"cakewalk","3":"june14"},"editorial_url":"http://discuss.codechef.com/problems/CHEFZOT","time":{"view_start_date":1402911000,"submit_start_date":1402911000,"visible_start_date":1402911000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in  <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/CHEFZOT1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/CHEFZOT.pdf">Russian</a>.</h3>

<p>Chef loves research! Now he is looking for subarray of maximal length with non-zero product.</p>
<p>Chef has an array <b>A</b> with <b>N</b> elements: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>. </p>
<p>Subarray <b>A<sub>ij</sub></b> of array <b>A</b> is elements from index <b>i</b> to index <b>j</b>: <b>A<sub>i</sub></b>, <b>A<sub>i+1</sub></b>, ..., <b>A<sub>j</sub></b>. </p>
<p>Product of subarray <b>A<sub>ij</sub></b> is product of all its elements (from <b>i<sub>th</sub></b> to <b>j<sub>th</sub></b>). </p>

<h3>Input</h3>
<ul>
<li>First line contains sinlge integer <b>N</b> denoting the number of elements.</li>
<li>Second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the elements of array. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>In a single line print single integer - the maximal length of subarray with non-zero product. </li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6
1 0 2 3 0 4

<b>Output:</b>
2

<b>Input:</b>
1
0

<b>Output:</b>
0

<b>Input:</b>
3
1 0 1

<b>Output:</b>
1
</pre><p> </p>
<h3>Explanation</h3>
<p>For the first sample subarray is: {2, 3}. </p>
<p>For the second sample there are no subbarays with non-zero product. </p>
<p>For the third sample subbarays is {1}, (the first element, or the third one). </p>
