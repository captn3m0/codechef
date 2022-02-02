---
{"category_name":"hard","problem_code":"ARRAYSUM","problem_name":"Arrays Sum","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"zedthirtyeight","date_added":"21-02-2016","tags":{"0":"data","1":"dynamic","2":"ltime34","3":"medium","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/ARRAYSUM","time":{"view_start_date":1459011600,"submit_start_date":1459011600,"visible_start_date":1459011600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/mandarin/ARRAYSUM.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/russian/ARRAYSUM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/vietnamese/ARRAYSUM.pdf">Vietnamese</a> as well.</h3>
<p>You are given an array <b>A</b>, consisting of <b>N</b> integers and an array <b>B</b>, consisting of <b>M</b> integers.</p>
<p>The subsequence of <b>A</b> is the array that can be obtained by picking the elements at the arbitrary sorted set of positions from <b>A</b>.</p>
<p>Your task is to count the number of such subsequences <b>C</b> of <b>A</b> that:</p>
<ul>
<li><b>C</b> contains exactly <b>M</b> elements.</li>
<li>The array <b>(C+B)</b> is non-decreasing. Here by <b>+</b> operation, we mean element-wise sum. <br />
For example, the array <b>(4, 8, 5)</b> plus the array <b>(10, 20, 30)</b> is <b>(14, 28, 35)</b>.<br />
Formally, <b>(C+B)</b> is an array of size <b>M</b> such that <b>(C+B)<sub>i</sub></b> = <b>C<sub>i</sub></b> + <b>B<sub>i</sub></b>.</li>
</ul>

<p>In case some subsequence appears more that once, you should counts it as many times as it appears.<br />
Formally, two subarrays of an array <b>a</b>, (<b>a<sub>i_1</sub></b>, <b>a<sub>i_2</sub></b>, ... ,<b>a<sub>i_n</sub></b>) and (<b>a<sub>j_1</sub></b>, <b>a<sub>j_2</sub></b>, ... ,<b>a<sub>j_m</sub></b>) will be considered different if either their lengths are different i.e. <b>n != m</b> or there exists an index <b>k</b> such that such that <b>i_k</b> <b> != j_k</b>.
</p>
<p>Since the answer can be very large, we ask you to calculate it, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>
<p>The first line of input contains a pair of space separated integers <b>N</b> and <b>M</b>, denoting the number of elements in the array <b>A</b> and the number of elements in the array <b>B</b>.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>i</sub></b>, denoting the array <b>A</b>.</p>
<p>The third line contains <b>M</b> space-separated integers <b>B<sub>j</sub></b>, denoting the array <b>B</b>.</p>
<h3>Output</h3>
<p>Output a single line containing the number of subsequences <b>C</b> as asked in the problem, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (33 points): <b>1</b> ≤ <b>N</b> ≤ <b>50</b>, <b>1</b> ≤ <b>M</b> ≤ <b>5</b></li>
<li>Subtask #2 (33 points): <b>1</b> ≤ <b>N</b> ≤ <b>500</b>, <b>1</b> ≤ <b>M</b> ≤ <b>50</b></li>
<li>Subtask #3 (34 points): <b>1</b> ≤ <b>N</b> ≤ <b>2000</b>, <b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input #1:</b>
5 3
1 5 2 4 7
7 9 6

<b>Output #1:</b>
4

<b>Input #2:</b>
4 2
7 7 7 7
3 4

<b>Output #2:</b>
6
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The suitable subsequences are (1, 2, 7), (1, 4, 7), (5, 4, 7), (2, 4, 7).</p>
<p><b>Example case 2.</b> The suitable subsequence is <b>(7, 7)</b>, and it appears 6 times:</p>
<ul>
<li>at indices <b>(1, 2)</b></li>
<li>at indices <b>(1, 3)</b></li>
<li>at indices <b>(1, 4)</b></li>
<li>at indices <b>(2, 3)</b></li>
<li>at indices <b>(2, 4)</b></li>
<li>at indices <b>(3, 4)</b></li>
</ul>

<p>So, the answer is 6.</p>
