---
{"category_name":"medium","problem_code":"ANKMARKS","problem_name":"VS and his marking scheme","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"code_master01","problem_tester":"rubanenko","date_added":"8-06-2015","tags":{"0":"code_master01","1":"cook59","2":"matrix","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/ANKMARKS","time":{"view_start_date":1434911400,"submit_start_date":1434911400,"visible_start_date":1434911400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/mandarin/ANKMARKS.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK59/russian/ANKMARKS.pdf">Russian</a> as well.</h3>


<p>Chef VS recently conducted an exam on the subject of Computer Science. Being biased as well as lazy, he awards marks looking at only the students' roll numbers, and not their actual answers on the exam. Students have roll numbers ranging from 1 to <b>N</b>, where <b>N</b> is the number of students in his class. For a student with roll number <b>i</b>, chef VS's <em>favouritism</em> value is given by <b>fav<sub>i</sub></b>.</p>

<p>For any two students with roll numbers next to each other, VS ensures that the one with the higher <em>favouritism</em> value gets <b>strictly</b> more than <em>twice</em> the marks received by the less favourite student.</p>

<p>The paper consisted of many problems and each problem must be graded with either the full score allotted to that problem, or zero score.</p>

<p>Since he does not want to get caught, VS must make sure that the number of marks awarded to any student must be expressible as a sum of maximum possible scores of problems, repeated any number of times. For example, 
suppose that the problems in the problem set carry marks from the set {2,5,7}.
Clearly, no student can be awarded 1 mark.
7 marks may be awarded, as 7 = 2 + 5.
4 marks may also be handed out, as 4 = 2 + 2.
Note that 0 marks can be awarded as well.
</p>

<p>One of the students, Sahil, aspires to top the class, and is therefore very concerned about the marks he would get. While Sahil topping the class could have really been possible if the exam was on <em>The Harry Potter</em> series, his chances are rather bleak on a Computer Science test. So, he finds out the <b>fav</b> array by breaking into VS's office, and uses this information to find the <b>minimum possible average</b> of marks obtained by the class and judge the ground reality. It is certain that VS never violates the conditions mentioned in the earlier paragraphs.
Print the minimum possible average. Please note that test data is generated so as to ensure that every answer is always less than 2<sup>52</sup></p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b>, denoting the number of test cases to follow.<br />
Each test cases contains 4 lines.<br />
The first line contains <b>N</b>, the number of students in the class.<br />
The second line contains <b>N</b> space-separated integers, denoting the favouritism value for each student.<br />
The third line contains the number of distinct marks in the set, <b>K</b>.<br />
The fourth line contains <b>K</b> distinct numbers separated by a single space. These numbers represent the set of marks allotted to problems.</p>

<h3>Output</h3>
<p>Output exactly <b>T</b> lines, each containing the answer for the corresponding test case. Absolute error of the output should be less than 1e-6. Please note that test data is generated so as to ensure that every answer is always less than 2<sup>52</sup>.

</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <strong>T</strong> ≤ 10</li>
<li>1 ≤ <strong>N</strong> ≤ 1000</li>
<li>0 ≤ <strong>fav<sub>i</sub></strong> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>K</b> ≤ 50 </li>
<li>1 ≤ marks allotted to a problem ≤ 50</li>
</ul>


<h3>Example:</h3>
<p><b>Sample Input:</b></p>
<pre>
2
3
1 2 3
3
2 5 7
4
1 2 2 3
3
2 4 8

</pre>
<p><b>Sample Output:</b></p>
<pre>
2.333333
1.000000
</pre>

<p><b>Explanation:</b>  
</p>
<p><b>Test 1:</b><br />
Award 0 to student 1, 2 to student 2 and 5 to student 3.<br />
Total score of the class = 7<br />
Average = 7 / 3 = 2.333333</p>
<p>Note that 4 is also a possible total score for the class, but the condition that student 3 should get <b>strictly</b> more that twice the marks obtained by student 2 would have been violated.</p>
<p><b>Test 2:</b><br />
Award 0 to students 1 and 3. Award 2 to students 2 and 4.<br />
Total score of the class = 4<br />
Average = 4 / 4 = 1.000000</p>
<p>Here, you must notice that, despite the fact that student 2 and 3 are favoured equally by VS, they will not necessarily get the same number of marks.</p>