---
{"category_name":"school","problem_code":"CHEFSTUD","problem_name":"Chef and his Students","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"animesh_f","date_added":"22-11-2016","tags":{"0":"admin2","1":"cakewalk","2":"ltime42"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSTUD","time":{"view_start_date":1480181400,"submit_start_date":1480181400,"visible_start_date":1480181400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/mandarin/CHEFSTUD.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/russian/CHEFSTUD.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME42/vietnamese/CHEFSTUD.pdf">Vietnamese</a> as well.</h3>

<p>Chef is instructor of the famous course "Introduction to Algorithms" in a famous univerisity. There are <b>n</b> students in his class. There is not enough space in the class room, so students sit in a long hallway in a linear fashion.</p>

<p>One day Chef was late to class. As a result, some of the students have formed pairs and are talking to each other, while the others are busy studying. This information is given to you by a string <b>s</b> of length <b>n</b>, consisting of characters '*', <' and '>', where '*' denotes that the student is studying, '>' denotes that the corresponding student is talking to the student to the right, and '<' denotes that the corresponding student is talking to the student to the left.</p>

<p>For example, consider a sample configuration of students - <b>*><*</b>. Here students numbered 1 and 4 are busy studying, while the student 2 and 3 are talking to each other. In this example, <b>><><</b>, student 1 and 2 are talking to each other, and 3 and 4 are also talking to each other. You are guaranteed that the given input is a valid configuration, i.e. <b><></b> can not be a valid string <b>s</b>, as here student 1 is shown to be talking to left, but there is no student to the left. Same is the case for right. Similarly, <b>>><<</b> is also not a valid configuration, as students 2 and 3 are talking to each other, so student 1 won't be able to talk to student 2.</p>

<p>When the students see their teacher coming, those who were talking get afraid and immediately turn around, i.e. students talking to left have now turned to the right, and the one talking to right have turned to the left. When Chef sees two students facing each other, he will assume that they were talking. A student who is busy studying will continue doing so. Chef will call each pair of students who were talking and punish them. Can you find out how many pairs of students will get punished?
</p>

<p>For example, in case <b>*><*</b>, when students see Chef, their new configuration will be <b>*<>*</b>. Chef sees that no students are talking to each other. So no one is punished. While in case <b>><><</b>, the new configuration of students will be <b><><></b>, Chef sees that student 2 and 3 are talking to each other and they will be punished.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of the test cases.</p>
<p>Each test case contains a string <b>s</b> denoting the activities of students before students see Chef entering the class.</p>

<h3>Output</h3>
<p>For each test case, output a single integer denoting the number of pairs of students that will be punished.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>|s|</b> ≤ <b>10<sup>5</sup></b></li>
</ul>

<h3>Subtasks</h3>

<b>Subtask #1: (30 points)</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>|s|</b> ≤ <b>10<sup>5</sup></b></li>
<li>No student is studying.</li>
</ul> <br>

<b>Subtask #2: (70 points)</b>
<ul>
<li>Original Constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
><
*><*
><><
*><><><*

<b>Output:</b>
0
0
1
2
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The updated configuration will be <b><></b>. No students are talking to each other, so no one will be punished.</p>
<p><b>Example case 2 and 3.</b> These examples are already explained in the problem statement.</p>