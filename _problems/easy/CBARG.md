---
{"category_name":"easy","problem_code":"CBARG","problem_name":"Chef and Memory Limit","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"witalij_hq ","problem_tester":null,"date_added":"22-02-2015","tags":{"0":"cakewalk","1":"june15","2":"simulation","3":"witalij_hq"},"editorial_url":"http://discuss.codechef.com/problems/CBARG","time":{"view_start_date":1434360600,"submit_start_date":1434360600,"visible_start_date":1434360600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/mandarin/CBARG.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE15/russian/CBARG.pdf">Russian</a>.</h3>
<p>Recently Chef has decided to make some changes in our beloved <b>Codechef</b>. As you know, each problem at Codechef has its memory and time limits. To make problems even more challenging, he decided to measure allocated memory in a different way. Now judge program will be calculating not the maximum memory usage during the execution of all test files, but all the memory ever allocated by the solution program. But as Chef is not that good in algorithms, so he asks you to write a program that will calculate total memory usage of a solution.</p>
<p>So, you are given <b>N</b> numbers <b>M<sub>1</sub>, , ,M<sub>N</sub></b> representing the measurements of consumed memory (in MBs) for <b>N</b> test files. In other terms, it means that on i-th test file, program took <b>M<sub>i</sub></b> MBs of memory. Initially, there is no memory allocated for your program. Before running your program on each test file, if the currently allocated memory is more than memory needed for the current test file, then there will be a deallocation of the memory to fit the current program. Also, if there is less than needed memory available, then allocation of memory will happen so as to fit the current program. e.g. Let us say that our program took 10 MBs on current test file. So, assuming if there was 12 MBs memory allocated before running the program on current test file, then there will happen a deallocation of 2 MBs. Assuming if there was 8 MBs memory allocated before running the program on current test file, then there will happen a allocation of 2 MBs.
</p>
<p>
Calculate the total memory <b>allocated</b> for running the solution program on all the <b>N</b> test files. Please see third sample for more clarity.</p>
<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b> denoting the  number of test cases. First line of each test case contains a single integer <b>N</b> denoting the number of measurements. Second line of each test case contains <b>N</b> space separated integers, where <b>i<sup>th</sup></b> integer denotes the consumption of memory for <b>i<sup>th</sup></b> i-th test file.</p>
<h3>Output</h3>
<p>For each test case, print total memory allocated for running the solution program.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>M<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li> sum of <b>N</b> over all test cases does not exceed <b>10<sup>5</sup></b></li>
</ul>
<h3>Subtasks</h3>
<p><b>
<p>Subtask 1 (30 points):<br/></br/></p>
<ul>
<li>1 ≤ T ≤ 100</li>
<li>1 ≤ N ≤ 100</li>
<li>1 ≤ M<sub>i</sub> ≤ 100</li>
</ul>
</b></p>
<p>Subtask 3 (70 points): <br/></br/></p>
<ul>
<li>Original constraints.</li>
</ul>

<p></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
1 1
5
1 2 3 4 5
3
1 3 2

<b>Output:</b>
1
5
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Initially, there was no memory allocated. For running first test file, there was a memory allocation of 1 MBs. There was no allocation/ deallocation for running your program on second test file. </p>
<p><b>Example case 2.</b> On running on each test file, there was a further allocation of 1 MBs from previous one. So, there are total 5 MBs of memory allocated while running the program.</p>
<p><b>Example case 3.</b> Initially, there was no memory allocated. For running first test file, there was a memory allocation of 1 MBs. For running second test file, there was a further memory allocation of 2 MBs to have 3 MBs of memory needed, then in the last file, there was a deallocation of 1 MB of memory so as to get 2 MBs of memory needed for running the program. So, overall, there was 1 + 2 = 3 MBs of memory ever allocated in the program. Note that we are only counting allocated memory, not allocated + unallocated.</p>
