---
{"category_name":"medium","problem_code":"LISLDS","problem_name":"LIS and LDS","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2.5,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"kevinsogo,xcwgf666","date_added":"7-06-2016","tags":{"0":"kevinsogo","1":"lis","2":"medium","3":"snckpb16"},"editorial_url":"http://discuss.codechef.com/problems/LISLDS","time":{"view_start_date":1465831800,"submit_start_date":1465831800,"visible_start_date":1465831800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/mandarin/LISLDS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/russian/LISLDS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/vietnamese/LISLDS.pdf">Vietnamese</a> as well.</h3>
<p>Chef is very fascinated by the <b>Longest Increasing Subsequence</b> problem. He continues to find many interesting things about them. Along the way he also learned about <b>Longest Decreasing Subsequence</b> problem.</p>
<p>Once again, Chef has come up with another problem involving them:</p>
<p>Given three integers <b>A</b>, <b>B</b> and <b>N</b>, output a <i>permutation</i> of <b>[1,2,...,N]</b> such that length of the longest increasing subsequence in the permutation is <b>A</b> and the length of the longest decreasing subsequence is <b>B</b>.</p>
<p>In case there are multiple possible answers, any one of them will be accepted.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of a single line containing three space separated integers <b>N</b>, <b>A</b> and <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> space separated integers, denoting the permutation of <b>[1, 2, ..., N]</b>. If no such permutation exists, output <b>-1</b> instead.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li>The sum of the <b>N</b>s over all the test cases in a single test file is ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>A</b>, <b>B</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
6 3 2
4 3 3</tt>

<b>Output:</b>
<tt>3 5 1 6 2 4
-1</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> In the array <b>[3, 5, 1, 6, 2, 4]</b>, the longest increasing subsequence has length <b>3</b> (e.g. <b>[3,5,6]</b>), and the longest decreasing subsequence has length <b>2</b> (e.g. <b>[3, 2]</b>). </p>
<p><b>Example case 2.</b> You can check that no permutation of <b>[1, 2, 3, 4]</b> has longest increasing subsequence and longest decreasing subsequence of length <b>3</b> at the same time.</p>
