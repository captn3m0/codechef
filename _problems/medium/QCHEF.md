---
{"category_name":"medium","problem_code":"QCHEF","problem_name":"Chef and Problems","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"gomelfk","problem_tester":"laycurse","date_added":"30-10-2014","tags":{"0":"gomelfk","1":"march15","2":"medium","3":"sqrt"},"editorial_url":"http://discuss.codechef.com/problems/QCHEF","time":{"view_start_date":1426498200,"submit_start_date":1426498200,"visible_start_date":1426498200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/mandarin/QCHEF.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH15/russian/QCHEF.pdf">Russian</a>.</h3>
<p>Chef was invited to the party of <b>N</b> people numbered from <b>1</b> to <b>N</b>. Chef knows the growth of all the people, i.e. he knows the growth of the <b>i</b><sup>th</sup> person is denoted by an integer <b>A<sub>i</sub></b> not exceeding <b>M</b>.</p>
<p>Chef decided to have some fun. At first, he forms <b>K</b> groups of people. The <b>i</b><sup>th</sup> group consists of all the people numbered from <b>L<sub>i</sub></b> to <b>R<sub>i</sub></b>. Groups may overlap too.
</p>
<p>
For each group, Chef wants to know the following information: the maximum difference between the numberings of two people having same growth.  Formally, Chef wants to know the following:<br /><br />
<div style="margin-left: 3em;"><b>max{|x − y| : L<sub>i</sub> ≤ x, y ≤ R<sub>i</sub></b> and <b>A<sub>x</sub> = A<sub>y</sub>}</b></div>
</p>
<p>Please help Chef to have fun.</p>
<h3>Input</h3>
<p>There is only one test case in one test file.</p>
<p>The first line of input contains three space-separated integers <b>N</b>, <b>M</b> and <b>K</b>, denoting the number of people, the maximum growth and number of groups respectively. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the growth of people. Then the <b>i</b><sup>th</sup> line of the next <b>K</b> lines contains two space-separated integers <b>L<sub>i</sub></b>, <b>R<sub>i</sub></b>, denoting the <b>i</b><sup>th</sup> group.</p>
<h3>Output</h3>
<p>For each group, output the integer denoting the maximum difference between numbering of two people having same growth in a single line.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li><b>1 ≤ A<sub>i</sub> ≤ M</b></li>
<li><b>1 ≤ L<sub>i</sub> ≤ R<sub>i</sub> ≤ N</b></li>
</ul>
<p> </p>
<p><b>Subtask 1: 20 points</b></p>
<ul>
<li><b>1 ≤ N, M, K ≤ 1000 = 10<sup>3</sup></b></li>
</ul>
<p> </p>
<p><b>Subtask 2: 80 points</b></p>
<ul>
<li><b>1 ≤ N, M, K ≤ 100000 = 10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
7 7 5
4 5 6 6 5 7 4
6 6
5 6
3 5
3 7
1 7

<b>Output:</b>
0
0
1
1
6
</pre><h3>Explanation</h3>
<p><b>Group 1.</b> There is only one person in the group. Thus the maximum difference of numbers should be <b>0</b>.</p>
<p><b>Group 2.</b> There are two persons in the group. Their growth are <b>A<sub>5</sub> = 5</b> and <b>A<sub>6</sub> = 7</b>. Thus there is no pair of persons who have the same growth. Thus the answer for this group will also be <b>0</b>.</p>
<p><b>Group 3.</b> There are three persons in the group. Their growth are <b>A<sub>3</sub> = 6</b>, <b>A<sub>4</sub> = 6</b> and <b>A<sub>5</sub> = 5</b>. Here person <b>3</b> and person <b>4</b> has the same growth. Thus the answer is <b>|4 − 3| = 1</b>.</p>
<p><b>Group 4.</b> There are more persons than the group <b>3</b>. But they has different growth, other than person <b>3</b> and person <b>4</b>.Thus the answer is also <b>|4 − 3| = 1</b>.</p>
<p><b>Group 5.</b> This group contains all the people, and person <b>1</b> and person <b>7</b> has the same growth <b>A<sub>1</sub> = A<sub>7</sub> = 4</b>. So the answer is <b>|7 − 1| = 6</b>.</p>
