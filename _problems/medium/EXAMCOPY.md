---
{"category_name":"medium","problem_code":"EXAMCOPY","problem_name":"Exam Copy","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":null,"date_added":"23-06-2016","tags":{"0":"wittyceaser"},"time":{"view_start_date":1467052140,"submit_start_date":1467052140,"visible_start_date":1467052140,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><b>N</b> students were giving an examination. The students were sitting in a line from <b>1</b> to <b>N</b> in order. The <b>i<sup>th</sup></b> student had knowledge <b>k<sub>i</sub></b> in the subject on which the exam was being conducted. Every student is not confident about his own preparation, so each student wants to find some students (possibly zero), from whom they can copy the answers. Student <b>i</b> can copy from student <b>j</b> only if <b>k<sub>j</sub></b> > <b>k<sub>i</sub></b>.There are <b>M</b> teachers who are the exam checkers - <b>j<sup>th</sup></b> checker will check the answer-sheets of some continuosly sitting students from the index <b>L<sub>i</sub></b> to <b>R<sub>i</sub></b> inclusive. All the students got this information before hand, so they decided that they won't copy the solutions from a person whose answer-sheet is being checked by the same checker as that of himself. Also, each student can see only up to distance <b>D</b>, so a student at index <b>i</b>, can copy solutions of students in the range <b>i - D</b> to <b>i + D</b>, both inclusive. From all the candidate students from which a student can copy, the student will copy from the most knowledgeable students.</p>
<p>For each student, print the knowledge of the student(s) from whom he can copy, as well as the number of such students.<br />
If a certain student can not copy, print <b>"-1"</b>.</p>
<h3>Input</h3>
<p>First line contains 2 space-separated positive integers - <b>N</b> and <b>M</b> - the total number of students and the number of exam checkers respectively.<br/><br />
Second line contains <b>N</b> space-separated integers, where the <b>i<sup>th</sup></b> integer represents the knowledge of the <b>i<sup>th</sup></b> student.<br/><br />
<b>M</b> lines follow - each line contains 2 space-separated integers - <b>L<sub>j</sub></b> and <b>R<sub>j</sub></b>, representing the continuous range of indexes whose answer sheet will be checked by the <b>j<sup>th</sup></b> checker.<br/><br />
The <b>(M + 3)<sup>th</sup></b> line contains a single integer <b>D</b> - the distance upto which each student can see for copying answers.</br/></br/></br/></p>
<h3>Output</h3>
<p>Print <b>N</b> lines, where <b>i<sup>th</sup></b> line represents the answer for <b>i<sup>th</sup></b> student.<br/><br />
On each line, print the knowledge of the student(s) from whom the <b>i<sup>th</sup></b> student can copy as per the rule mentioned in the statement, and the number of such students, separated by a space.<br/><br />
If the student can not copy from any student, print <b>"-1"</b> (without the quotes).</br/></br/></p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 10^5<br/><br />
1 ≤ <b>M</b> ≤ <b>N</b> <br/><br />
1 ≤ <b>k<sub>i</sub></b> ≤ 10^8<br/><br />
1 ≤ <b>L<sub>j</sub></b> ≤ <b>R<sub>j</sub></b> ≤ <b>N</b><br/><br />
1 ≤ <b>D</b> ≤ <b>N</b><br/></br/></br/></br/></br/></br/></p>
<h3>Subtasks</h3>
<p>Subtask 1: 20 points<br/><br />
<b>N</b> ≤ 100<br/><br />
<br/><br />
Subtask 2: 20 points<br/><br />
<b>N</b> ≤ 1000 <br/><br />
<br/><br />
Subtask 3: 60 points<br/><br />
No additional constraint<br/></br/></br/></br/></br/></br/></br/></br/></br/></p>
<h3>Example</h3>
<p><b>Input</b><br/></br/></p>
<pre>
10 5
1 2 1 2 1 2 2 1 2 3
1 2
3 4
5 6
7 8
9 10
2
</pre><p><br/><br />
<b>Output</b><br/></br/></br/></p>
<pre>
-1
-1
2 1
-1
2 2
-1
-1
3 1
-1
-1
</pre>