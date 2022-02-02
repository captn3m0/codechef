---
{"category_name":"easy","problem_code":"CHEFBEST","problem_name":"Chef and his Best Friend","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"mgch","date_added":"1-02-2017","tags":{"0":"admin2"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/CHEFBEST.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/CHEFBEST.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/CHEFBEST.pdf">Vietnamese</a> as well.</h3>

<p>Chef and Chhotu are best friends. Chef knows that Chhotu is very intelligent. So, Chef gives Chhotu a simple problem and wants him to solve this problem by today. The problem is as follows.</p>

<p>There are <b>N</b> students in a classroom. The students are sitting in a single row. Chef wants that all the girls should sit in left side of the row and all the boys should sit in right side of the row. You are provided the initial row of the students by <b>N</b> binary integers, where if <b>i</b>-th integer is zero, then it means that at the <b>i</b>-th position, there is a boy, where <b>1</b> will mean girl. For example, if the initial arrangement be <b>[0 1 0 1 1]</b>, then final arrangement should be <b>[1 1 1 0 0]</b>.</p>

<p>In a single second, if a boy finds that a girl is sitting to his immediate right i.e. if a boy is sitting at i<sup>th</sup> position and a girl is sitting at (i+1)<sup>th</sup> position then they swap their positions. For example, let the initial arrangement be <b>[0 1 0 1 1]</b>. Boys are sitting at positions <b>1, 3</b> (1-based indexing) and girls are sitting at positions <b>2, 4, 5</b>. In a single second, boy at position 1 swaps his seat with girl at position <b>2</b>, and similarly boy at position <b>3</b> swaps his seat with girl at position 4. So, after one second, the arrangement becomes <b>[1 0 1 0 1]</b>.</p> For detailed explanation, please see the explanation of the sample provided at the end of this statement.</

<p>Now Chef wants to determine the total time after which all the girls move to the left side of the row and all the boys towards the right side of the row.</p>
<p>Chhotu can solve this problem very easily but today he is very busy. Please help Chhotu to solve this problem.</p>

<h3>Input</h3>
<p>The first line of the input contains <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains an integer <b>N</b> denoting the number of students in the row.</p>
<p>The second line contains <b>N</b> space-separated integers - <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N </sub></b>denoting the initial arrangement of the students.</p>

<h3>Output</h3>
<p>For each test case, output a single integer on a new line corresponding to the number of seconds required such that all girls are to the left of boys.</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b>	</li>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
<li><b>0 ≤ A<sub>i </sub> ≤ 1</b></li>
</ul>

<h3>Subtasks</h3>
<p><b>Subtask #1 (30 points):</b></p>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 10<sup>3</sup></b></li>
</ul>
<p><b>Subtask #2 (70 points):</b></p>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
2
10
0 1 1 1 0 1 1 0 1 1
5
0 1 0 1 1
</pre>

<p><b>Output:</b></p>
<pre>
7
3
</pre>

<h3>Explanation</h3>
<p><b>Test case 1:</b></p>
<p>Initially, student's arrangement is <b>[0 1 1 1 0 1 1 0 1 1]</b></p>
<p>After1<sup>st</sup> second <b>[1 0 1 1 1 0 1 1 0 1]</b></p>
<p>After 2<sup>nd</sup> second <b>[1 1 0 1 1 1 0 1 1 0]</b></p>
<p>After 3<sup>rd</sup> second <b>[1 1 1 0 1 1 1 0 1 0]</b></p>
<p>After 4<sup>th</sup> second <b>[1 1 1 1 0 1 1 1 0 0]</b></p>
<p>After 5<sup>th</sup> second <b>[1 1 1 1 1 0 1 1 0 0]</b></p>
<p>After 6<sup>th</sup> second <b>[1 1 1 1 1 1 0 1 0 0]</b></p>
<p>After 7<sup>th</sup> second <b>[1 1 1 1 1 1 1 0 0 0]</b></p>
<p>Total time taken = <b>7</b> seconds</p>

<p><b>Test case 2:</b></p>
<p>Initially, student's arrangement is <b>[0 1 0 1 1]</b></p>
<p>After 1<sup>st</sup> second <b>[1 0 1 0 1]</b></p>
<p>After 2<sup>nd</sup> second <b>[1 1 0 1 0]</b></p>
<p>After 3<sup>rd</sup> second <b>[1 1 1 0 0]</b></p>
<p>Total time taken = <b>3</b> seconds</p>
