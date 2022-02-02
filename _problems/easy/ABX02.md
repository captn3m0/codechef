---
{"category_name":"easy","problem_code":"ABX02","problem_name":"Too Much Sweetness","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"abx_2109","problem_tester":"kingofnumbers","date_added":"31-10-2017","tags":{"0":"abx_2109","1":"dynamic","2":"ltime55","3":"medium","4":"programming"},"editorial_url":"https://discuss.codechef.com/problems/ABX02","time":{"view_start_date":1514653200,"submit_start_date":1514653200,"visible_start_date":1514653200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/mandarin/ABX02.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/russian/ABX02.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME55/vietnamese/ABX02.pdf">Vietnamese</a> as well.</h3>


<p>Raghav studies in NSIT and is bored of the regular hostel mess food. For a change he went to a sweet shop at City Centre near the college to have some sweets. There he found only two boxes containing sweets; box 1 contains <b>p</b> sweets and box 2 contains <b>q</b> sweets.</p>

<p>Initially, both boxes are closed. Raghav wants to eat exactly <b>N</b> sweets in total during the following process:
<ul>
<li>Choose an index <b>i</b> (1 ≤ <b>i</b> ≤ 2) of one box and a number <b>s</b> (0 &lt; <b>s</b> ≤ number of sweets in box <b>i</b>).</li>
<li>Open box <b>i</b>, take out <b>s</b> sweets, eat them and then close box <b>i</b>.</li>
<li>Write down number <b>i</b> exactly <b>s</b> times.</li>
<li>If less than <b>N</b> sweets have been eaten in total, repeat from the first step.</li>
</ul>
</p>
<p>The index <b>i</b> of the box chosen at each step should always be different from the index of the previously selected box. In the beginning, either box can be chosen.</p>

<p>
At the end, Raghav will have written down a sequence <b>P<sub>1</sub>, P<sub>2</sub>, P<sub>3</sub>, ..., P<sub>N</sub></b> (1 ≤ <b>P<sub>i</sub></b> ≤ 2 for each valid <b>i</b>) describing the boxes containing the sweets he ate, in the given order. For example, if he has to eat <b>N</b> = 7 sweets, so he opens box 1 and takes out 3 sweets and then opens box 2 and takes out 4 sweets, then the sequence <b>P<sub>1..N</sub></b> will be 1112222.</p>

<p>In addition, Raghav cannot eat more than <b>S<sub>i</sub></b> sweets from box <b>i</b> in one step (<b>s</b> ≤ <b>S<sub>i</sub></b>). Also, box <b>i</b> cannot be opened more than <b>B<sub>i</sub></b> times in total.

<p>Can you help Raghav determine the total number of possible sequences  <b>P<sub>1..N</sub></b> satisfying the given constraints? Since this number can be large, compute it <b>modulo 10<sup>9</sup> + 7</b>.</p>


<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each testcase contains three space-separated integers <b>p</b>, <b>q</b> and <b>N</b>.</li>
<li>The second line contains two space-separated integers <b>B<sub>1</sub></b> and <b>B<sub>2</sub></b>.</li>
<li>The third line contains two space-separated integers <b>S<sub>1</sub></b> and <b>S<sub>2</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing one integer — the number of possible sequences modulo 10<sup>9</sup> + 7.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10</li>
<li>1 ≤ <b>p</b>, <b>q</b> ≤ 50</li>
<li>1 ≤ <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, <b>S<sub>1</sub></b>, <b>S<sub>2</sub></b> ≤ 200</li>
<li>1 ≤ <b>N</b> ≤ <b>p+q</b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (10 points):</b> 1 ≤ <b>N</b> ≤ 15</p>

<p><b>Subtask #2 (20 points):</b> 1 ≤ <b>p</b>, <b>q</b> ≤ 20</p>

<p><b>Subtask #3 (70 points):</b> original constraints</p>

<h3>Example</h3>
<pre><b>Input:</b>

2
2 2 4
2 2
1 1
10 10 10
10 10
10 10

<b>Output:</b>

2
1024
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> We have 2 sweets in box 1 and 2 sweets in box 2. All possible sequences <b>P<sub>1..4</sub></b> are: 1122, 2211, 1212, 2121, 1221 and 2112. Out of them, only 1212 and 2121 are valid, since <b>S<sub>1</sub></b> = <b>S<sub>2</sub></b> = 1.</p>
<p><b>Example case 2:</b> All possible 2<sup>10</sup> sequences are valid.</p>
