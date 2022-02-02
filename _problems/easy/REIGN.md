---
{"category_name":"easy","problem_code":"REIGN","problem_name":"Reign","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"white_king","date_added":"6-11-2013","tags":{"0":"dec13","1":"easy","2":"kostya_by"},"editorial_url":"http://discuss.codechef.com/problems/REIGN","time":{"view_start_date":1387186200,"submit_start_date":1387186200,"visible_start_date":1387186200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/mandarin/REIGN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC13/russian/REIGN.pdf">Russian</a>.</h3>
<p>The Baratheons have been ruling in the Seven Kingdoms for many years. They have seen a lot: prosperity and hunger, tranquility and rebellions, live and death. But nevertheless, they still hold the throne.</p>
<p>King Joffrey Baratheon's reign is running now. As a wise man, he honors the history of his family. So, he commanded to build up <b>two</b> monuments, that will remind about some historical periods of the Baratheons.</p>
<p>Formally, the Baratheons have been ruling for <b>N</b> years. Every year is described by an integer <b>A<sub>i</sub></b>, the level of prosperity in <b>i</b>-th year. If <b>i</b>-th year was a great year, then <b>A<sub>i</sub></b> might be a positive integer. Otherwise, if <b>i</b>-th year was a horrible year, then <b>A<sub>i</sub></b> might be a negative integer.</p>
<p>Each historical period can be described as two integers <b>S</b> and <b>F</b>, the start and the finish of the period respectively. Of course, <b>S</b> is not greater than <b>F</b> for each period, that we consider in this task.</p>
<p>You are to pick two historical periods, but there are some rules:</p>
<ul>
<li>Two periods shouldn't have common years. I.e. a period [1, 5] has no common years with a period [6, 7];</li>
<li>The first period should start earlier than the second one. I.e. a period [1, 5] starts earlier than [6, 7];</li>
<li>Two periods shouldn't be too close to each other. There must be at least <b>K</b> years between the finish of the first period and the start of the second period. I.e. periods [1, 5] and [10, 10] can be chosen in case <b>K</b> equals to 4, while they can't in case <b>K</b> equals to 5.</li>
<li>The sum of the levels of prosperity in chosen years should be as big as possible.</li>
</ul>
<p>Afterwards, you should report the sum of the levels of prosperity in chosen years to your King. Make everything right, otherwise King Joffrey won't be merciful!</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of each test case contains two integers <b>N</b> and <b>K</b> denoting the length of the Baratheons' reign and the minimal amount of years between two chosen periods.<br /><br />
The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the levels of prosperity in corresponding years.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the required integer.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5;</li>
<li>2 ≤ <b>N</b> ≤ 10<sup>5</sup>;</li>
<li>0 ≤ <b>K</b> ≤ 10<sup>5</sup>;</li>
<li>-10<sup>9</sup> ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> for every 1 ≤ <b>i</b> ≤ <b>N</b>;</li>
<li><b>K</b> + 2 ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
5 3
-1 1 2 3 -1
8 3
5 5 -1 -2 3 -1 2 -2
6 0
5 -1 5 0 -1 9

<b>Output:</b>
-2
12
18
</pre><p> </p>
<h3>Explanation</h3>
<p>There are <b>T</b> = 3 test cases the input.</p>
<p>The first test case: <b>N</b> equals to 5, <b>K</b> equals to 3, A[] equals to {-1, 1, 2, 3, -1}. There is the only option: we have to choose [1, 1] and [5, 5] periods.</p>
<p>The second test case: <b>N</b> equals to 8, <b>K</b> equals to 3, A[] equals to {5, 5, -1, -2, 3, -1, 2, -2}. It is optimal to choose [1, 2] and [7, 7] periods. That is the only optimal choice that you can make.</p>
<p>The second test case: <b>N</b> equals to 6, <b>K</b> equals to 0, A[] equals to {5, -1, 5, 0, -1, 9}. It is optimal to choose [1, 3] and [6, 6] periods. But that is not the only optimal choice that you can make.</p>
