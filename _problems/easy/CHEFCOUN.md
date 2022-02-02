---
{"category_name":"easy","problem_code":"CHEFCOUN","problem_name":"Counter Test For CHEFSUM","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"alex_2oo8","date_added":"1-09-2017","tags":{"0":"admin2","1":"oct17","2":"simple"},"editorial_url":"https://discuss.codechef.com/problems/CHEFCOUN","time":{"view_start_date":1508146200,"submit_start_date":1508146200,"visible_start_date":1508146200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/mandarin/CHEFCOUN.pdf">mandarin chinese</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/OCT17/vietnamese/CHEFCOUN.pdf">vietnamese</a> as well.</h3>

<p>Once Chef was writing test data for the problem <a href="https://codechef.com/problems/CHEFSUM"> CHEFSUM </a>. For your convenience, the summary of this problem is provided as below.</p>

<p>You are given an array <b>a</b> of size <b>n</b>. Let <b>prefSum[i]</b> denote the sum of first <b>i</b> elements and <b>sufSum[i]</b> denote the sum of last <b>n - i + 1</b> elements of the array <b>a</b>. You have to find the least index <b>i</b> such that value of <b>prefSum[i] + sufSum[i]</b> is the minimum possible. The bounds/constraints on <b>n</b> could be as large as 10<sup>5</sup>.

<p>A newbie programmer was trying to solve this problem. He didn't take care of the fact that the values of <b>prefSum[i] + sufSum[i]</b> might not fit into <em>unsigned int</em> data type. He wrote the following C++ code to solve the problem.</p>

<p>
<code>
<pre>int wrongSolver(std::vector &lt;unsigned int> a) {
	int n = a.size();
	std::vector&lt;unsigned int> prefSum(n), sufSum(n);
	prefSum[0] = a[0];
	for (int i = 1; i < n; i++) {
		prefSum[i] = prefSum[i - 1] + a[i];
	}
	sufSum[n - 1] = a[n - 1];
	for (int i = n - 2; i >= 0; i--) {
		sufSum[i] = sufSum[i + 1] + a[i];
	}
	unsigned int mn = prefSum[0] + sufSum[0];
	int where = 1;
	for (int i = 1; i < n; i++) {
		unsigned int val = prefSum[i] + sufSum[i];
		if (val < mn) {
			mn = val;
			where = i + 1;
		}
	}
	return where;
}</pre>
</code>
</p>

<p>Assume that an <em>unsigned int</em> is 4 bytes long, i.e. it stores values from <b>0</b> up to <b>2<sup>32</sup> - 1</b>. Addition of two unsigned int's <b>x</b> and <b>y</b> is done as <b>(x + y) modulo 2<sup>32</sup></b>. This way, you can see that whenever the value of an unsigned int exceeds the maximum possible value (<b>2<sup>32</sup> - 1</b>), it wraps around.</p>

<p>Chef as a problem setter knows that the above program should not get an AC. Hence, he wants to generate a counter case to fail this solution. He asks your help in generating such a counter case.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<p>
<p>The only line of each test case contains a single integer <b>n</b> denoting the number of integers in the array <b>a</b>.</p>

<h3>Output</h3>
<p>For each test case, output <b>n</b> space separated integers in a line denoting the content of array <b>a</b> for which the above program will give a wrong answer.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
	<li><b>Subtask #1 : (50 points) </b> <b>99991</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b>, <b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>2 * 10<sup>9</sup></b></li>
	<li><b>Subtask #2 : (50 points) </b> <b>99991</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b>, <b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>