---
{"category_name":"medium","problem_code":"SUBSEG2","problem_name":"Chef and his study plans","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":0.75,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo,antoniuk1","date_added":"3-06-2016","tags":{"0":"activity","1":"binary","2":"greedy","3":"jump","4":"medium","5":"snckpa16","6":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/SUBSEG2","time":{"view_start_date":1465140600,"submit_start_date":1465140600,"visible_start_date":1465140600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="/download/translated/SNCKPA16/mandarin/SUBSEG2.pdf">Mandarin Chinese</a>, <a target="_blank" href="/download/translated/SNCKPA16/russian/SUBSEG2.pdf">Russian</a> and <a target="_blank" href="/download/translated/SNCKPA16/vietnamese/SUBSEG2.pdf">Vietnamese</a> as well.</h3>
<p>Chefland has a very famous university. The university offers <b>N</b> courses. Each course runs for some consecutive range of days. You are given starting and ending days of the <b>i</b><sup>th</sup> course by <b>start<sub>i</sub></b> and <b>end<sub>i</sub></b>, respectively.</p>
<p>Our Chef wanted to enroll himself in the university. But he is not sure about the exact time period for which he wants to study. Though he has <b>Q</b> such tentative plans in his mind. Each plan consists of a start date <b>plan_start<sub>j</sub></b> and an end date <b>plan_end<sub>j</sub></b>.</p>
<p>Chef wants your help in finding out the maximum number of courses he can complete during each of his plans. Note that at a time, Chef can not handle multiple courses, i.e. he can attend at most one course during a day. Also, a course will be considered completed only if Chef attends all the classes of the course.</p>
<h3>Input</h3>
<p>There is a single test case.</p>
<p>The first line of the input contains two space separated integers <b>N</b> and <b>Q</b> denoting the number of courses university offers and the number of plans Chef has in mind, respectively.</p>
<p>The <b>i</b><sup>th</sup> of the next <b>N</b> lines  contains two space separated integers <b>start<sub>i</sub></b> and <b>end<sub>i</sub></b> denoting the starting and the ending day of the <b>i</b><sup>th</sup> course.</p>
<p>The <b>j</b><sup>th</sup> of the next <b>Q</b> lines  contains two space separated integers <b>plan_start<sub>j</sub></b> and <b>plan_end<sub>j</sub></b>, denoting the start and the end day of Chef's plan.</p>
<h3>Output</h3>
<p>Output <b>Q</b> lines - each containing an integer corresponding to the maximum number of the courses Chef can complete in the corresponding planned visit.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>start<sub>i</sub></b> ≤ <b>end<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>plan_start<sub>j</sub></b> ≤ <b>plan_end<sub>j</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3 3
1 3
5 6
2 4
1 6
1 3
2 3
</tt>
<b>Output:</b>
<tt>2
1
0
</tt></pre>
<h3>Explanation</h3>
<p><b>Plan #1.</b> Chef stays on the campus from the first day till the sixth day. During this time, he can complete maximum two courses. He can complete either the <b>1</b><sup>st</sup> and the <b>2</b><sup>nd</sup> or the <b>2</b><sup>nd</sup> and the <b>3</b><sup>rd</sup> courses..</p>
<p><b>Plan #2.</b> Chef can complete no more than one course and this course can be only the first one.</p>
<p><b>Plan #3.</b> Chef stays for quite a small duration in this plan. He can't complete any course during this visit.</p>