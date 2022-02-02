---
{"category_name":"school","problem_code":"CHEFSUM","problem_name":"Little Chef and Sums","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":"jingbo_adm","date_added":"27-08-2017","tags":{"0":"cakewalk","1":"prateekg603","2":"sept17"},"editorial_url":"https://discuss.codechef.com/problems/CHEFSUM","time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/mandarin/CHEFSUM.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/russian/CHEFSUM.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SEPT17/vietnamese/CHEFSUM.pdf">vietnamese</a> as well.</h3>

<p>
Our little chef is fond of doing additions/sums in his free time. Today, he has an array <b>A</b> consisting of <b>N</b> positive integers and he will compute prefix and suffix sums over this array.</p>

<p>He first defines two functions <b>prefixSum(i)</b> and <b>suffixSum(i)</b> for the array as follows. The function <b>prefixSum(i)</b> denotes the sum of first <b>i</b> numbers of the array. Similarly, he defines <b>suffixSum(i)</b> as the sum of last <b>N - i + 1</b> numbers of the array.</p> 


<p>Little Chef is interested in finding the minimum index <b>i</b> for which the value <b>prefixSum(i) + suffixSum(i)</b> is the minimum. In other words, first you should minimize the value of <b>prefixSum(i) + suffixSum(i)</b>, and then find the least index <b>i</b> for which this value is attained.</p>


<p>Since, he is very busy preparing the dishes for the guests, can you help him solve this problem?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of integers in the array <b>A</b>.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the array <b>A</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N, A[i]</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
	<li><b>Subtask #1 : (20 points) </b> <b>1 ≤ N ≤ 100</b></li>
	<li><b>Subtask #2 : (80 points) </b> Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
4
2 1 3 1

<b>Output:</b>
1
2
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Let's calculate prefixSum(i) + suffixSum(i) for all indexes <b>i</b> in the sample case.
<pre>
prefixSum(1) + suffixSum(1) = 1 + 6 = 7
prefixSum(2) + suffixSum(2) = 3 + 5 = 8
prefixSum(3) + suffixSum(3) = 6 + 3 = 9
</pre>
</p>

<p>The minimum value of the function is 7, which is attained at index 1, so the answer would be 1.</p>

<p><b>Example case 2.</b> Let's calculate prefixSum(i) + suffixSum(i) for all indexes <b>i</b> in the sample case.
<pre>
prefixSum(1) + suffixSum(1) = 2 + 7 = 9
prefixSum(2) + suffixSum(2) = 3 + 5 = 8
prefixSum(3) + suffixSum(3) = 6 + 4 = 10
prefixSum(4) + suffixSum(4) = 7 + 1 = 8
</pre>
</p>

<p>The minimum value of the function is 8, which is achieved for indices 2 and 4. The minimum of these two indices 2, 4 is index 2. Hence, the answer will be 2. </p>
