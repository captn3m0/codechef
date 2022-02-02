---
{"category_name":"easy","problem_code":"CHEFSUM","problem_name":"Little Chef and Sums","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n1 2 3\r\n4\r\n2 1 3 1","output":"1\r\n2","explanation":"\u003Cp\u003E\u003Cb\u003EExample case 1.\u003C/b\u003E Let\u0027s calculate prefixSum(i) + suffixSum(i) for all indexes \u003Cb\u003Ei\u003C/b\u003E in the sample case.\r\n\u003Cpre\u003E\r\nprefixSum(1) + suffixSum(1) = 1 + 6 = 7\r\nprefixSum(2) + suffixSum(2) = 3 + 5 = 8\r\nprefixSum(3) + suffixSum(3) = 6 + 3 = 9\r\n\u003C/pre\u003E\r\n\u003C/p\u003E\r\n\r\n\u003Cp\u003EThe minimum value of the function is 7, which is attained at index 1, so the answer would be 1.\u003C/p\u003E\r\n\r\n\u003Cp\u003E\u003Cb\u003EExample case 2.\u003C/b\u003E Let\u0027s calculate prefixSum(i) + suffixSum(i) for all indexes \u003Cb\u003Ei\u003C/b\u003E in the sample case.\r\n\u003Cpre\u003E\r\nprefixSum(1) + suffixSum(1) = 2 + 7 = 9\r\nprefixSum(2) + suffixSum(2) = 3 + 5 = 8\r\nprefixSum(3) + suffixSum(3) = 6 + 4 = 10\r\nprefixSum(4) + suffixSum(4) = 7 + 1 = 8\r\n\u003C/pre\u003E\r\n\u003C/p\u003E\r\n\r\n\u003Cp\u003EThe minimum value of the function is 8, which is achieved for indices 2 and 4. The minimum of these two indices 2, 4 is index 2. Hence, the answer will be 2. \u003C/p\u003E","isDeleted":false}}},"video_editorial_url":"https://youtu.be/EvCOVn15pt8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"D","29":"CAML","30":"FORT","31":"ASM","32":"swift","33":"FS","34":"WSPC","35":"LISP clisp","36":"SCM guile","37":"PERL6","38":"ERL","39":"CLPS","40":"ICK","41":"NICE","42":"PRLG","43":"ICON","44":"SCM chicken","45":"PIKE","46":"SCM qobi","47":"ST","48":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":"jingbo_adm","date_added":"27-08-2017","tags":{"0":"cakewalk","1":"prateekg603","2":"sept17"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFSUM","time":{"view_start_date":1105165800,"submit_start_date":1105165800,"visible_start_date":1105165800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFSUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
<h3>Read problems statements in <a target="_blank" 
href="https://www.codechef.com/download/translated/SEPT17/mandarin/CHEFSUM.pdf">mandarin chinese</a>, <a target="_blank" 
href="https://www.codechef.com/download/translated/SEPT17/russian/CHEFSUM.pdf">russian</a> and <a target="_blank" 
href="https://www.codechef.com/download/translated/SEPT17/vietnamese/CHEFSUM.pdf">vietnamese</a> as well.</h3>

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

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>