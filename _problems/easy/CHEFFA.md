---
{"category_name":"easy","problem_code":"CHEFFA","problem_name":"Chef And Fibonacci Array","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.5","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":null,"date_added":"10-09-2014","tags":{"0":"aug17","1":"berezin","2":"dynamic","3":"easy"},"editorial_url":"https://discuss.codechef.com/problems/CHEFFA","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/CHEFFA.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/CHEFFA.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/vietnamese/CHEFFA.pdf">vietnamese</a> as well.</h3>

<p>Chef has an array <b>A</b> = (<b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>), which has <b>N</b> integers in it initially. Chef found that for i ≥ 1, if <b>A<sub>i</sub></b> > 0, <b>A<sub>i+1</sub></b> > 0, and <b>A<sub>i+2</sub></b> exists, then he can decrease both <b>A<sub>i</sub></b>, and <b>A<sub>i+1</sub></b> by one and increase <b>A<sub>i+2</sub></b> by one. If <b>A<sub>i+2</sub></b> doesn't exist, but <b>A<sub>i</sub></b> > 0, and <b>A<sub>i+1</sub></b> > 0, then he can decrease both <b>A<sub>i</sub></b>, and <b>A<sub>i+1</sub></b> (which will be the currently last two elements of the array) by one and add a new element at the end, whose value is 1.</p>

<p>Now Chef wants to know the number of different arrays that he can make from <b>A</b> using this operation as many times as he wishes. Help him find this, and because the answer could be very large, he is fine with you reporting the answer modulo 10<sup>9</sup>+7.</p>

<p>Two arrays are same if they have the same number of elements and if each corresponding element is the same. For example arrays <b>(2,1,1)</b> and <b>(1,1,2)</b> are different. 
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases.</li>
<li>The first line contains a single integer <b>N</b> denoting the initial number of elements in <b>A</b>.</li>
<li>The second line contains <b>N</b> space-separated integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ... , <b>A<sub>N</sub></b>. </li>
</ul>

<h3>Output</h3>
<p>For each test case, output answer modulo 10<sup>9</sup>+7 in a single line. </p>


<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N</b> ≤ 50</li>
<li>0 ≤ <b>A<sub>i</sub></b> ≤ 50</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1</b> (20 points) : 1 ≤ <b>N</b> ≤ 8, 0 ≤ <b>A<sub>i</sub></b> ≤ 4</li>
<li><b>Subtask 2</b> (80 points) : Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
3
2 3 1
2
2 2
3
1 2 3

<b>Output:</b>
9
4
9
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
<p>We'll list the various single steps that you can take (ie. in one single usage of the operation):</p>
<ul>
<li>(2, 3, 1) → (2, 2, 0, 1)</li>
<li>(2, 2, 0, 1) → (1, 1, 1, 1)</li>
<li>(1, 1, 1, 1) → (1, 1, 0, 0, 1)</li>
<li>(1, 1, 0, 0, 1) → (0, 0, 1, 0, 1)</li>
<li>(1, 1, 1, 1) → (1, 0, 0, 2)</li>
<li>(1, 1, 1, 1) → (0, 0, 2, 1)</li>
<li>(2, 3, 1) → (1, 2, 2)</li>
<li>(1, 2, 2) → (0, 1, 3)</li>
</ul>
<p></p>
<p>So all the arrays you can possibly get are: </p>
<p>(2, 3, 1), (2, 2, 0, 1), (1, 1, 1, 1), (1, 1, 0, 0, 1), (0, 0, 1, 0, 1), (1, 0, 0, 2), (0, 0, 2, 1), (1, 2, 2), and (0, 1, 3)</p>
<p>Since there are 9 different arrays that you can reach, the answer is 9.</p>