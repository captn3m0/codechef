---
{"category_name":"school","problem_code":"SIMPSTAT","problem_name":"Simple Statistics","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"zedthirtyeight","date_added":"21-02-2016","tags":{"0":"cakewalk","1":"ltime34","2":"sorting","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SIMPSTAT","time":{"view_start_date":1459011600,"submit_start_date":1459011600,"visible_start_date":1459011600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/mandarin/SIMPSTAT.pdf">Mandarin Chinese </a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/russian/SIMPSTAT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME33/vietnamese/SIMPSTAT.pdf">Vietnamese</a> as well.</h3>


<p>Sergey has made <b>N</b> measurements. Now, he wants to know the average value of the measurements made.</p>

<p>In order to make the average value a better representative of the measurements, before calculating the average, he wants first to remove the highest <b>K</b> and the lowest <b>K</b> measurements. After that, he will calculate the average value among the remaining <b>N - 2K</b> measurements.</p>

<p>Could you help Sergey to find the average value he will get after these manipulations?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b> denoting the number of measurements and the number of the greatest and the lowest values that will be removed.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the measurements. </p>

<h3>Output</h3>
<p>For each test case, output a single line containing the average value after removing <b>K</b> lowest and <b>K</b> greatest measurements.</p>
<p>Your answer will be considered correct, in case it has absolute or relative error, not exceeding <b>10<sup>-6</sup></b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>0</b> ≤ <b>2K</b> < <b>N</b></li>
<li><b>-10<sup>6</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (50 points): <b>K = 0</b></li>
<li>Subtask #2 (50 points): <b>no additional constraints</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
5 1
2 9 -10 25 1
5 0
2 9 -10 25 1
3 1
1 1 1

<b>Output:</b>
4.000000
5.400000
1.000000
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> After removing <b>1</b> greatest and <b>1</b> lowest measurement, we get the set <b>{2, 9, 1}</b>. The average value in this set is <b>(2+9+1)/3=4</b>.</p>
<p><b>Example case 2.</b> The average value in the set <b>{2, 9, -10, 25, 1}</b> is <b>(2+9-10+25+1)/5=5.4</b>.</p>
<p><b>Example case 3.</b> After removing the <b>1</b> largest and smallest measurements, Sergey will be left with only one measurement, i.e. <b>1</b>. Average of this is <b>1</b> itself.</p>

