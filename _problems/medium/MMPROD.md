---
{"category_name":"medium","problem_code":"MMPROD","problem_name":"Best Maximum Product","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"kevinsogo,xcwgf666","date_added":"7-06-2016","tags":{"0":"greedy","1":"kevinsogo","2":"simple","3":"snckpb16"},"editorial_url":"http://discuss.codechef.com/problems/MMPROD","time":{"view_start_date":1465831800,"submit_start_date":1465831800,"visible_start_date":1465831800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/mandarin/MMPROD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/russian/MMPROD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/vietnamese/MMPROD.pdf">Vietnamese</a> as well.</h3>
<p>After learning to solve <a href="https://www.codechef.com/problems/MMSUM/">maximum sum subarray</a> problem, it's time for you to solve the <b>maximum product subsequence</b>.</p>
<p>You're given an array of <b>N</b> integers, and a number <b>K</b>. </p>
<p>The <b>maximum K-product</b> of the array is the maximum product of any <b>K</b> length subsequence of the array. For example, the maximum 2-product of the array  <b>[-5, 3, 4, -6]</b> is <b>30</b> because the product of the subsequence <b>[-5, -6]</b> is <b>30</b> and it is impossible to achieve larger subsequence product.</p>
<p>What is the <b>maximum <b>K</b>-product</b> you can achieve? Since the answer can be very large, output it modulo <b>10<sup>9</sup> + 7</b>.</p>
<p><i>Note:</i>  Recall that the result of a modulo operation is always non-negative. For example, <b>-8 mod 5 = 2</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers <b>N</b> and <b>K</b>.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, denoting the elements of the array. </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the <b>maximum K-product</b> of the array.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>The sum of the <b>N</b>s over all the test cases in a single test file is ≤ <b>5×10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>4
4 2
5 -3 -4 6
4 2
-5 3 4 -6
3 2
10000 100000 100000
2 1
-1 -2</tt>

<b>Output:</b>
<tt>30
30
999999937
1000000006</tt>
</pre><h3>Explanation</h3>
</p><p><b>Example case 1.</b> The maximum 2-product of the array <b>[5, -3, -4, 6]</b> is <b>30</b> and is achieved by the subsequence <b>[5, 6]</b>.</p>
<p><b>Example case 2.</b> The maximum 2-product of the array <b>[-5, 3, 4, -6]</b> is <b>30</b> and is achieved by the subsequence <b>[-5, -6]</b>.</p>
<p><b>Example case 3.</b> The maximum 2-product of the array <b>[10000, 100000, 100000]</b> is <b>10000000000</b> and is achieved by the subsequence <b>[100000,100000]</b>. Modulo <b>10<sup>9</sup> + 7</b>, this is <b>999999937</b>.</p>
<p><b>Example case 4.</b> The maximum 1-product of the array <b>[-1, -2]</b> is <b>-1</b> and is achieved by the subsequence <b>[-1]</b>. Modulo <b>10<sup>9</sup> + 7</b>, this is <b>1000000006</b>.</p>
<p>The reason why <b>-1 mod (10<sup>9</sup> + 7) = 1000000006</b> is that for positive <b>m</b>, <b>a mod m</b> is defined as the smallest nonnegative integer <b>b</b> such that <b>a - b</b> is divisible by <b>m</b>.</p>
