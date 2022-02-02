---
{"category_name":"medium","problem_code":"ALOST","problem_name":"Akhil Recovers The Lost Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"amitpandeykgp","problem_tester":"prateekg603","date_added":"19-04-2016","tags":{"0":"amitpandeykgp","1":"ltime36","2":"number"},"editorial_url":"http://discuss.codechef.com/problems/ALOST","time":{"view_start_date":1464454800,"submit_start_date":1464454800,"visible_start_date":1464454800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/mandarin/ALOST.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/russian/ALOST.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME36/vietnamese/ALOST.pdf">Vietnamese</a> as well.</h3>
<p>Akhil has an array consisting of <b>N</b> positive integers. As we know that there are <b>(N*(N+1))/2</b> non-empty contiguous subarrays in an array of size <b>N</b>. Akhil found that exactly <b>E</b> of the contiguous subarrays had even sum and remaining <b>O = (N*(N+1))/2 - E</b> have odd sum.
</p>
<p>Next day, he lost the original array. But he still remembered the <b>E</b> and <b>O</b> values correctly. Now, he wants to recreate any such array which has exactly <b>E</b> even sum continuous subarrays and <b>O</b> odd ones. If there are many such possible arrays, printing any one of them will make him happy.
</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>First line of each test case contains an integer <b>N</b> denoting the length of lost array.</li>
<li>Second line of each test case contains two space separated integers <b>E</b> and <b>O</b>, denoting number of contiguous subarrays with even and odd sums, respectively. </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing all the integers of an array separated by a space.</li>
<li>Each integer should lie between 0 and 100(both inclusive).</li>
<li>If there is no such possible array, print <b>-1</b> in a single line.</li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>0</b> ≤ <b>E, O</b> ≤ <b>N*(N+1)/2</b></li>
<li><b>E + O</b> = <b>N*(N+1)/2</b></li>
</ul>
<h3>Subtasks</h3>
<li>Subtask #1 (20 points) : <b>1</b> ≤ sum of <b>N</b> over all test cases ≤ <b>15</b></li>
<li>Subtask #2 (20 points) : <b>1</b> ≤ sum of <b>N</b> over all test cases ≤ <b>2 * 10<sup>3</sup></b></li>
<li>Subtask #3 (60 points) : <b>1</b> ≤  sum of <b>N</b> over all test cases  ≤ <b>10<sup>6</sup></b></li>

<h3>Example</h3>
<pre><b>Input:</b>
3
3
2 4
3
3 3
3
0 6

<b>Output:</b>
2 1 2
1 2 2
-1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> There are total 6 subarrays : {2},{1},{2},{2,1},{1,2},{2,1,2}. Their sums {2, 1, 2, 3, 3, 5} are respectively. As 2 of them are even and 4 of them are odd. So, this is one possible answer which satisfies Akhil's requirements.</p>
<p><b>Example case 3.</b> There is no array of length 3 whose all the subarrays have odd sum. Akhil might have remembered something incorrectly. Hence, you should print -1.</p>
