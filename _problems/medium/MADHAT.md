---
{"category_name":"medium","problem_code":"MADHAT","problem_name":"Math Hatter","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"kingofnumbers","date_added":"21-07-2016","tags":{"0":"alei","1":"combinatorics","2":"cook73","3":"easy","4":"maths"},"editorial_url":"http://discuss.codechef.com/problems/MADHAT","time":{"view_start_date":1471804200,"submit_start_date":1471804200,"visible_start_date":1471804200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/mandarin/MADHAT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/russian/MADHAT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/vietnamese/MADHAT.pdf">Vietnamese</a> as well.</h3>

<p>The education system of Wonderland was designed by the great psychologist Math Hatter. In Wonderland there are <b>n</b> kids attending school. For simplicity they are numbered from <b>1</b> to <b>n</b>. 
Math Hatter noticed that all of them are very smart, so he measured their Intellectual Quotient (IQ), it turned out that no two students had the same IQ and that all IQs were integers in the range from <b>1</b> to <b>n</b>.
</p>

<p>In the Math Hatter's education system, one kid can be the teacher of many other kids, and also be the pupil of many others.</p>

<p>Let <b>j</b> be the smallest integer greater than <b>i</b> such that the IQ of kid <b>j</b> is greater than the IQ of kid <b>i</b>, the pupils of kid <b>i</b> are all the kids numbered from <b>i + 1</b> to <b>j - 1</b>. If no such <b>j</b> exist we consider <b>j</b> to be equal to <b>n + 1</b>, note that kid number <b>i</b> will not have any pupils when <b>j = i + 1</b> or when <b>i = n</b>.</p>

<p>
Math hatter doesn't remember the IQ of each kid, however he remembers their number of pupils. Using this information Math Hatter is trying to recover the IQ of each kid. Help him calculating the number of IQ assignations that he can find. As the answer could be large, output it modulo <b>10<sup>9</sup> + 7</b>.</p>

<h3>Input</h3>
<p>The first line of the input contains one integer <b>T</b> the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case consists of two lines.</p>
<p>The first line contains one integer <b>n</b> the number of kids, the second line contains <b>n</b> space separated integers <b>c<sub>i</sub></b> denoting the number of pupils of kid <b>i</b>.</p>

<h3>Output</h3>
<p>For each test case, output the answer to the problem modulo <b>10<sup>9</sup>+7</b>.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b>, the sum of <b>n</b> over all test cases is at most <b>10<sup>6</sup></b> </li>
<li><b>0</b> ≤ <b>c<sub>i</sub></b> < <b>n</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b><tt>
2
4
0 2 1 0
4
0 2 1 1
</tt>
<b>Output:</b><tt>
3
0</tt>
</pre>

<h3>Explanation</h3>
<p>
In the <b>first example</b>, the possible students IQs are the following:
<ul>
<li>[1, 4, 3, 2]</li>
<li>[2, 4, 3, 1]</li>
<li>[3, 4, 2, 1]</li>
</ul>
</p>

<p>In the <b>second example</b>, there are no possible assignments because the last student can't have one pupil.</p>
