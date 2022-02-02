---
{"category_name":"challenge","problem_code":"SEAND2","problem_name":"Sereja and Number Division 2","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"SCALA","15":"D","16":"PERL","17":"FORT","18":"WSPC","19":"ADA","20":"CAML","21":"ICK","22":"BF","23":"ASM","24":"CLPS","25":"PRLG","26":"ICON","27":"SCM qobi","28":"PIKE","29":"ST","30":"NICE","31":"LUA","32":"BASH","33":"NEM","34":"LISP sbcl","35":"LISP clisp","36":"SCM guile","37":"JS","38":"ERL","39":"TCL","40":"PERL6","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"shiplu","date_added":"10-09-2014","tags":{"0":"challenge","1":"jan15","2":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEAND2","time":{"view_start_date":1421055000,"submit_start_date":1421055000,"visible_start_date":1421055000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/SEAND2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/SEAND2.pdf">Russian</a>.</h3>
<p>
Sereja has an integer number <b>A</b> that doesn't contain zeroes in its decimal form.<br />
Also he has <b>N</b> integers <b>B[1], B[2], ..., B[N]</b>.
</p>
<p>
Let us first define function <b>f</b> for a number <b>A</b> as follows. <br />
<img src= "https://codechef_shared.s3.amazonaws.com/download/JAN15/SEAND2.equation.png" />.
</p>
<p>
Now he has to reorder the digits of <b>A</b> such that <b>f(A)</b> is minimum.<br />
Please help him in finding most optimal <b>A</b>.
 </p>
<h3>Input</h3>
<ul>
<li>First line contain a single integer <b>T</b> denoting number of test cases. Then <b>T</b> tests follow.  </li>
<li>First line of each test case contains an integer <b>A</b>. </li>
<li>Next line contains an integer <b>N</b>. </li>
<li>Next line contains <b>N</b> integers <b>B[1], B[2], ..., B[N]</b>.  </li>
</ul>
<h3>Output</h3>
<p>For each test case, output optimal value of <b>A</b> after reordering digits in a single line.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A</b> ≤ <b>10<sup>1000</sup></b></li>
<li><b>N</b> = <b>100</b></li>
<li><b>1</b> ≤ <b>B[i]</b> ≤ <b>10<sup>6</sup></b></li>

<h3>Example</h3>
<pre><b>Input:</b>
2
123
2
2 3
123457
1
10

<b>Output:</b>
312
754312

</pre><h3>Scoring</h3>
<p>
Let <b>Y</b> denotes your score for the problem. <b>Y</b> is defined as sum of <b>f(optimal A))</b> for all test cases.<br />
You objective is to make <b>Y</b> as small as possible.
</p>
<h3>Tests generation Plan</h3>
<p>
Test set contains <b>five</b> official test cases.<br />
During the contest, your solution will be tested only on the first test. After the end of contest, it will be re-judged on the full test set.
</p>
<p>
Length of number <b>A</b> is generated randomly. All digits of it are also chosen randomly.
</p>
<p>
In all test cases <b>N</b> is equal to <b>100</b>.
</p>
<p>
To generate array <b>B</b>, first we chose an integer <b>R</b> between <b>1</b> and <b>10<sup>6</sup></b> inclusive. Note that <b>R</b> is<br />
not randomly generated, it will be manually selected. </p>
<p>Then all elements of array <b>B</b> are chosen in range <b>1..R</b> randomly.
</p>
