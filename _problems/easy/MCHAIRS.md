---
{"category_name":"easy","problem_code":"MCHAIRS","problem_name":"Missing some chairs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kuruma","problem_tester":null,"date_added":"5-10-2013","tags":{"0":"combinatorics","1":"kuruma","2":"nov13","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/MCHAIRS","time":{"view_start_date":1384162200,"submit_start_date":1384162200,"visible_start_date":1384162200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/MCHAIRS.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/MCHAIRS.PDF"> Russian</a>.</h3>
<p>A new school in Byteland is now in the process of renewing some classrooms with new, stronger and better chairs, so that the students can stay still and pay attention to class :)</p>
<p>However, due to budget and logistic reasons, it's only possible to carry a chair at a time to the classroom, which means that for a long time, many students will be up, waiting for their chair to arrive.</p>
<p>The teacher, however, as she is very clever, decided to challenge her students with a problem: "Imagine that there are <b>N</b> students in the classroom and that there are only <b>K</b> chairs. In how many ways, can I choose <b>K</b> elements from the class to sit down, if I see them as being distinct?" </p>
<p>Lira replied immediately with the right answer, so, the teacher decided to make the game a little funnier: "Okay Lira, as you are so fast, now I want you to tell me exactly the same thing, but, with the addition that the value of <b>K</b> is changing, this is, I want you to tell me the sum of the number of ways I can sit down <b>K</b> of you, if the value of <b>K</b> goes from 1 (meaning that there are no chairs in the classroom but one) to N (meaning that all of your chairs arrived). Can you be as fast now? As the answer might get large I want you to tell me the result modulo 1000000007. (10<sup>9</sup> + 7)"</p>
<p>As you might have noticed, it's time for you to help Lira solving this variant of the problem. :D </p>
<h3>Input</h3>
<p>The first line of the input file contains an integer <b>T</b>, denoting the number of test cases on the input file.</p>
<p>Afterwards, <b>T</b> lines follow, each containing an integer <b>N</b>, the number of students that the teacher will try to sit down as the number of chairs goes from 1 to N.</p>
<h3>Output</h3>
<p>For each test case, you should output an integer, denoting the sum of the number of ways the teacher can make <b>N</b> students sit down on <b>K</b> chairs, as <b>K</b> goes from 1 to N, modulo 10<sup>9</sup> + 7.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
2

<b>Output:</b>
1
3
</pre><p> </p>
