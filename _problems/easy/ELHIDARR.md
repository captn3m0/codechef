---
{"category_name":"easy","problem_code":"ELHIDARR","problem_name":"Find an element in hidden array","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"25-11-2017","tags":{"0":"acm17chn","1":"admin2","2":"binary","3":"chn17rol","4":"easy"},"editorial_url":"https://discuss.codechef.com/problems/ELHIDARR","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>There is an array of length <b>N</b> consisting of non-negative integers. The array is sorted in non-decreasing order. Each number in the array appears exactly <b>K</b> times, except one element, which appears at least once, but less than <b>K</b> times. Your task is to identify that element.</p>

<p>This is an interactive problem. You are only given the integer <b>N</b> in the input. Both the array and the value of <b>K</b> are hidden. You are allowed to ask the judge the following queries: What is the value of the element at index <b>i</b> of the array? Identify the value of the element with frequency less than <b>K</b> by asking at most 60 such queries.</p>

<h3>Input and Output</h3>
<p>The first line of the input contains a single integer <b>T</b> denoting the number of test cases.</p>
<p>For each test case, you should start by reading a single line containing one integer <b>N</b> from the input.</p>
<p>You can interact with the judge using the standard input and output. There are two types of operations: to perform one operation, you should print to the standard output a line containing two space-separated integers <b>type</b> and <b>val</b>.
<ul>
	<li>If <b>type</b> = 1, you are asking the judge a query for the value of the element of the array at index <b>val</b>. After printing this line, the judge will print to the standard input a line containing one integer corresponding to the value of the element at index <b>val</b>. </li>
	<li>If <b>type</b> = 2, you are telling the judge that the element with frequency less than <b>K</b> is <b>val</b>. For each test case, you should perform this operation exactly once at the end. This is not counted towards the 60 queries.</li>
</ul></p>

<h3>Note</h3>
<p>Don't forget to flush the standard output after printing each line. It can be done using fflush(stdout) in C/C++, System.out.flush() in Java and sys.out.flush() in Python.</p>
<p>If you ask more than 60 queries, your program will get the verdict Wrong Answer.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10<sup>4</sup></li>
<li>3 ≤ <b>N</b> ≤ 10<sup>5</sup></li>
<li>2 ≤ K</b> ≤ <b>N - 1</b></li>
<li>each element of the array lies between 1 and 10<sup>9</sup> inclusive</li>
</ul>

<h3>Example</h3>
<pre>Input / judge feedback	your output
1
3
						1 2
1
						1 3
5
						1 1
1
						2 5
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> Suppose the array is [1, 1, 5]. Note that the value of <b>K</b> is 2, but it is hidden from you.</p>
<p>In the first query, you request the value of the 2nd element and the judge answers 1. Then you request the value of the 3rd element and the judge answers 5, then the value of the first element and the judge answers 1.</p>
<p>Now, you tell the judge that the answer is 5. You made a total of 3 queries.</p>
