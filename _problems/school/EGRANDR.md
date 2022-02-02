---
{"category_name":"school","problem_code":"EGRANDR","problem_name":"Andrash and Stipendium","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"egor_bobyk","problem_tester":"mugurelionut","date_added":"19-02-2015","tags":{"0":"basic","1":"cakewalk","2":"egor_bobyk","3":"july16"},"editorial_url":"http://discuss.codechef.com/problems/EGRANDR","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/EGRANDR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/EGRANDR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/EGRANDR.pdf">Vietnamese</a> as well.</h3>
<p>Andrash study in Uzhland National University. Now is the time of exam results. Andrash similar to other students, hopes that this scores in the exam could fetch him a scholarship/stipendium for his studies.</p>
<p>There are following simple rules to receive stipendium:</p>
<ul>
<li>University follows <b>5</b> point grading system. In an exam, a student can receive any score from 2 to 5. 2 is called an F grade, meaning that student has failed that exam.</li>
<li>Student should not have fail any of the exams.</li>
<li>Student must obtain a full score in some of his/her exams to show that he/she is excellent in some of the subjects.</li>
<li>He/She must have a grade point average not less than <b>4.0</b></li>
</ul>

<p>You are given information regarding the exams and how Andrash performed in those. Can you help him figure out whether he will receive the stipendium or not!!
</p>
<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b> denoting the number of test cases. This will be followed by <b>T</b> test cases.</p>
<p>The first line of each test case contains an integer <b>N</b> denoting the number of examinations.</p>
<p>The next line of each test case contains <b>N</b> space separated integers denoting Andrash's score for each exam.</p>
<h3>Output</h3>
<p>For each of the <b>T</b> test cases, output a single line - <tt>"Yes"</tt> (without quotes) if Andrash will receive stipendium, or <tt>"No"</tt> (without quotes) - otherwise.</p>
<h3>Constraints and Subtasks</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b>  ≤ <b>40</b> </li>
<li> Let <b>A[i]</b> denote Andrash's score for <b>i</b>-th exam </li>
</ul>
<p> </p>
<p><b>Subtask #1: 20 points</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b> </li>
<li><b>2</b> ≤ <b>A[i]</b>  ≤ <b>5</b></li>
</ul>
<p> </p>
<p><b>Subtask #2: 20 points</b></p>
<ul>
<li> <b>1</b> ≤ <b>N</b>  ≤ <b>10<sup>5</sup></b> </li>
<li> <b>3</b> ≤ <b>A[i]</b> ≤ <b>5</b> </li>
</ul>
<p> </p>
<p><b>Subtask #3: 60 points</b></p>
<ul>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> </li>
<li> <b>2</b> ≤ <b>A[i]</b> ≤ <b>5</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
3 5 4 4 3
5
3 4 4 4 5

<b>Output:</b>
No
Yes
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Student's average grade point score is 3.8 which makes him/her unqualified for obtaining the stipend.</p>
<p><b>Example case 2.</b> Student satisfies all the criteria for getting stipend.</p>
