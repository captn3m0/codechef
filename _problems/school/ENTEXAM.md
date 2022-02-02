---
{"category_name":"school","problem_code":"ENTEXAM","problem_name":"Entrance Exam","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"kevinsogo, xcwgf666","date_added":"13-05-2015","tags":{"0":"loop","1":"simple","2":"snckpb16","3":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/ENTEXAM","time":{"view_start_date":1465831800,"submit_start_date":1465831800,"visible_start_date":1465831800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/mandarin/ENTEXAM.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/russian/ENTEXAM.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKPB16/vietnamese/ENTEXAM.pdf">Vietnamese</a> as well.</h3>
<p>The faculty of application management and consulting services (FAMCS) of the Berland State University (BSU) has always been popular among Berland's enrollees. This year, <b>N</b> students attended the entrance exams, but no more than <b>K</b> will enter the university. In order to decide who are these students, there are series of entrance exams. All the students with score strictly greater than at least <b>(N-K)</b> students' total score gets enrolled.</p>
<p>In total there are <b>E</b> entrance exams, in each of them one can score between <b>0</b> and <b>M</b> points, inclusively. The first <b>E-1</b> exams had already been conducted, and now it's time for the last tribulation.</p>
<p>Sergey is the student who wants very hard to enter the university, so he had collected the information about the first <b>E-1</b> from all <b>N-1</b> enrollees (i.e., everyone except him). Of course, he knows his own scores as well.</p>
<p>In order to estimate his chances to enter the University after the last exam, Sergey went to a fortune teller. From the visit, he learnt about scores that everyone except him will get at the last exam. Now he wants to calculate the minimum score he needs to score in order to enter to the university. But now he's still very busy with minimizing the amount of change he gets in the shops, so he asks you to help him.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains four space separated integers <b>N, K, E, M</b> denoting the number of students, the maximal number of students who'll get enrolled, the total number of entrance exams and maximal number of points for a single exam, respectively.</p>
<p>The following <b>N-1</b> lines will contain <b>E</b> integers each, where the first <b>E-1</b> integers correspond to the scores of the exams conducted. The last integer corresponds to the score at the last exam, that was predicted by the fortune-teller.</p>
<p>The last line contains <b>E-1</b> integers denoting Sergey's score for the first <b>E-1</b> exams.</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the minimum score Sergey should get in the last exam in order to be enrolled. If Sergey doesn't have a chance to be enrolled, output "Impossible" (without quotes).
</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>K</b> &lt; <b>N</b> ≤ <b>10<sup>4</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>E</b> ≤ <b>4</b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>1
4 2 3 10
7 7 7
4 6 10
7 10 9
9 9</tt>

<b>Output:</b>
<tt>4</tt>
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> If Sergey gets 4 points at the last exam, his score will be equal to 9+9+4=22. This will be the second score among all the enrollees - the first one will get 21, the second one will get 20 and the third will have the total of 26. Thus, Sergey will enter the university.</p>
