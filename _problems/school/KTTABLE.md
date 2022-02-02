---
{"category_name":"school","problem_code":"KTTABLE","problem_name":"Kitchen Timetable","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo,xcwgf666,antoniuk1","date_added":"24-05-2016","tags":{"0":"array","1":"cakewalk","2":"loop","3":"snckql16","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/KTTABLE","time":{"view_start_date":1464708600,"submit_start_date":1464708600,"visible_start_date":1464708600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/mandarin/KTTABLE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/russian/KTTABLE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL16/vietnamese/KTTABLE.pdf">Vietnamese</a> as well.</h3>
<p>There are <b>N</b> students living in the dormitory of Berland State University. Each of them sometimes wants to use the kitchen, so the head of the dormitory came up with a timetable for kitchen's usage in order to avoid the conflicts:</p>
<ul>
<li>The first student starts to use the kitchen at the time <b>0</b> and should finish the cooking not later than at the time <b>A<sub>1</sub></b>.</li>
<li>The second student starts to use the kitchen at the time <b>A<sub>1</sub></b> and should finish the cooking not later than at the time <b>A<sub>2</sub></b>.</li>
<li>And so on.</li>
<li>The <b>N</b>-th student starts to use the kitchen at the time <b>A<sub>N-1</sub></b> and should finish the cooking not later than at the time <b>A<sub>N</sub></b></li>
</ul>

<p>The holidays in Berland are approaching, so today each of these <b>N</b> students wants to cook some pancakes. The <b>i</b>-th student needs <b>B<sub>i</sub></b> units of time to cook.</p>
<p>The students have understood that probably not all of them will be able to cook everything they want. How many students will be able to cook without violating the schedule?</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of students.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the moments of time by when the corresponding student should finish cooking. </p>
<p>The third line contains <b>N</b> space-separated integers <b>B<sub>1</sub></b>, <b>B<sub>2</sub></b>, ..., <b>B<sub>N</sub></b> denoting the time required for each of the students to cook.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of students that will be able to finish the cooking.</p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>0</b> &lt; <b>A<sub>1</sub></b> &lt;  <b>A<sub>2</sub></b> &lt; ... &lt; <b>A<sub>N</sub></b> &lt; <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>10<sup>9</sup></b>
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
3
1 10 15
1 10 3
3
10 20 30
15 5 20</tt>

<b>Output:</b>
<tt>2
1</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> The first student has <b>1</b> unit of time - the moment <b>0</b>. It will be enough for her to cook. The second student has <b>9</b> units of time, but wants to cook for <b>10</b> units of time, and won't fit in time. The third student has <b>5</b> units of time and will fit in time, because needs to cook only for <b>3</b> units of time.</p>
<p><b>Example case 2.</b> Each of students has <b>10</b> units of time, but only the second one will be able to fit in time.</p>
