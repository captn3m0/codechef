---
{"category_name":"easy","problem_code":"PALHAM","problem_name":"Hasan and boring classes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"CPP 4.3.2","9":"CPP 6.3","10":"CPP14","11":"CS2","12":"D","13":"ERL","14":"FORT","15":"FS","16":"GO","17":"HASK","18":"ICK","19":"ICON","20":"JAVA","21":"JS","22":"LISP clisp","23":"LISP sbcl","24":"LUA","25":"NEM","26":"NICE","27":"NODEJS","28":"PAS fpc","29":"PAS gpc","30":"PERL","31":"PERL6","32":"PHP","33":"PIKE","34":"PRLG","35":"PYPY","36":"PYTH","37":"PYTH 3.5","38":"RUBY","39":"SCALA","40":"SCM chicken","41":"SCM guile","42":"SCM qobi","43":"ST","44":"TCL","45":"TEXT","46":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"amrmahmoud","date_added":"26-05-2017","tags":{"0":"combinatorics","1":"cook88","2":"kingofnumbers","3":"kingofnumbers","4":"likecs","5":"medium"},"editorial_url":"https://discuss.codechef.com/problems/PALHAM","time":{"view_start_date":1511116200,"submit_start_date":1511116200,"visible_start_date":1511116200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in  <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/mandarin/PALHAM.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/russian/PALHAM.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK88/vietnamese/PALHAM.pdf">Vietnamese</a> as well.</h3>
<p>
Hasan is a computer science student, he likes his study field, especially programming and algorithms, but he doesn’t like attending classes at all since they are very boring, especially that the quality of education in his college is extremely low, but sometimes he is forced to attend in order to maintain his attendance rate otherwise he will be prevented from doing final exams!<br> <br>

Currently Hasan is attending `communication skills` class and he is now feeling very bored especially that he thinks such course should not belong to a computer science program, luckily he remembered a problem that one of his friends has given him so he decided to spend the time thinking about it, the problem states:<br><br>

Given a string S of length N of lower English letters, find how many strings T exists of length N of lower English letters such that T is palindrome and hamming distance between T and S is at most K. since the answer is large find the remainder modulo 10<sup>9</sup> + 7<br><br>

Since you also don’t like `communication skills` classes you decided to solve this problem too.


</p>
<p> </p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br><br>

each test-case is described with two lines, the first line of each test-case contains two integers <b>N</b> and <b>K</b>.<br><br>

The second line of each test-case will contains the string S of length N.</p>

<p> </p>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the test-case.</p>

<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10,000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>300,000</b></li>
<li><b>1</b> ≤ sum of <b>N</b> in all test-cases ≤ <b>1,000,000</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>N</b></li>
<li>String S will consist of English lower letters.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 2
abc
3 1
abc

<b>Output:</b>
76
2

</pre>
<p> </p>
<h3>Explanation</h3>
<p>in second test-case the only possible strings are "aba" and "cbc"</p>