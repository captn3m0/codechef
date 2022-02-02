---
{"category_name":"medium","problem_code":"WORKCHEF","problem_name":"Chef and special numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"omelyanenko","problem_tester":"mugurelionut","date_added":"9-05-2016","tags":{"0":"digit","1":"july16","2":"maths","3":"medium","4":"omelyanenko"},"editorial_url":"http://discuss.codechef.com/problems/WORKCHEF","time":{"view_start_date":1468402200,"submit_start_date":1468402200,"visible_start_date":1468402200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/mandarin/WORKCHEF.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/russian/WORKCHEF.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY16/vietnamese/WORKCHEF.pdf">Vietnamese</a> as well.</h3>
<p>Chef's team is going to participate in the legendary math battles. This time the main task of the competition is to calculate number of <b>K</b>-special numbers in the range <b>[L, R]</b> (i.e. <b>L</b>, <b>L + 1</b>, <b>L + 2</b>, ..., <b>R</b>).</p>
<p>
A number <b>X</b> is said to be <b>K</b>-special if there exist <b>K</b> or more different digits, such that <b>X</b> is divisible by those digits and those digits are present in the decimal representation of the number. For example, number 48 is both <b>1</b> and <b>2</b> special, as it is divisible by digits 4 and 8. Note that no positive integer is divisible by number 0.
</p>
<p>
Chef asked you to help him with this task. There will be <b>Q</b> questions of forms <b>L, R, K</b>. For each of these questions, you have to tell How many <b>K</b>-special numbers are the range <b>[L, R]</b> ?".
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer <b>Q</b> that denotes number of questions Chef was asked.
</p>
<p>
In the next <b>Q</b> lines follow the questions, i-th of the line will denote the i-th question represented by three space separated integer <b>L, R, K</b> respectively.
</p>
<h3>Output</h3>
<p>
For each question, output an integer in a separate line containing the answer of the question.
</p>
<h3>Constraints and Subtasks</h3>
<ul>
<b>Subtask 1 : [10 points] </b> 
<li><b>1</b> ≤ <b>Q</b> ≤ <b>3</b> </li>
<li><b>1</b> ≤ <b> L </b> ≤ <b> R </b> ≤ <b>10<sup>6</sup> </b> </li>
<li><b>0</b> ≤ <b> K </b> ≤ <b> 9 </b> </li>
</ul>
<p> </p>
<p><b>Subtask 2 : [20 points] </b> </p>
<ul>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>3</b> </li>
<li><b>1</b> ≤ <b> L </b> ≤ <b> R </b> ≤ <b>10<sup>9</sup> </b> </li>
<li><b>0</b> ≤ <b> K </b> ≤ <b> 9 </b> </li>
</ul>
<p> </p>
<p><b>Subtask 3 : [70 points]</b></p>
<ul>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>3</b> </li>
<li><b>1</b> ≤ <b> L </b> ≤ <b> R </b> ≤ <b>10<sup>18</sup> </b> </li>
<li><b>0</b> ≤ <b> K </b> ≤ <b> 9 </b> </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
48 48 1
48 48 2
5 15 1

<b>Output:</b>
1
1
11
</pre><h3>Explanation</h3>
<p>
<b>Example case 1 and 2</b>. 48 is both <b>1</b> and <b>2</b> special as explained in the problem statement. Hence answer is 1.
</p>
