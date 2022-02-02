---
{"category_name":"easy","problem_code":"SPCANDY","problem_name":"Splitting Candies","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kuruma","problem_tester":"white_king","date_added":"3-07-2013","tags":{"0":"aug13","1":"cakewalk","2":"kuruma","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/SPCANDY","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Cyael is a teacher at a very famous school in Byteland and she is known by her students for being very polite to them and also to encourage them to get good marks on their tests.</p>
<p>Then, if they get good marks she will reward them with candies :) However, she knows they are all very good at Mathematics, so she decided to split the candies evenly to all the students she considers worth of receiving them, so they don't fight with each other. </p>
<p>She has a bag which initially contains <b>N</b> candies and she intends to split the candies evenly to <b>K</b> students. To do this she will proceed as follows: while she has more than <b>K</b> candies she will give exactly 1 candy to each student until she has less than <b>K</b> candies. On this situation, as she can't split candies equally among all students she will keep the remaining candies to herself.</p>
<p>Your job is to tell how many candies will each student and the teacher<br />
receive after the splitting is performed.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>Each test case will consist of 2 space separated integers, <b>N</b> and <b>K</b> denoting the number of candies and the number of students as described above.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing two space separated integers, the first one being the number of candies each student will get, followed by the number of candies the teacher will get.</p>
<h3>Constraints</h3>
<ul>
<li> <b>T&lt;=100 in each test file</b> </li>
<li><b>0 &lt;= N,K &lt;= 2<sup>33</sup> - 1 </b></li>
</ul>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
2
10 2
100 3
</pre>
<p><b>Output:</b></p>
<pre>
5 0
33 1
</pre><h3>Explanation</h3>
<p>For the first test case, all students can get an equal number of candies and teacher receives no candies at all </p>
<p>For the second test case, teacher can give 33 candies to each student and keep 1 candy to herself</p>
<p><b>Update:</b></p>
<p> There may be multiple whitespaces before, after or between the numbers in input.</p>
