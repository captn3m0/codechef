---
{"category_name":"easy","problem_code":"CHEFMATH","problem_name":"Chef and math","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"omelyanenko","problem_tester":"kevinsogo","date_added":"9-02-2016","tags":{"0":"dynamic","1":"easy","2":"may16","3":"meet","4":"omelyanenko","5":"recursion"},"editorial_url":"http://discuss.codechef.com/problems/CHEFMATH","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/CHEFMATH.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/CHEFMATH.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/vietnamese/CHEFMATH.pdf">Vietnamese</a> as well.</h3>
<p>
Chef's team is going to participate at the legendary math battles. One of the main task in the competition is to calculate the number of ways to create a number by adding some Chefonacci numbers. A number is called a Chefonacci number if it is an element of Chefonacci sequence defined as follows.</p>
<pre>
<code>
f(0) = 1; 
f(1) = 2; 
For i > 1 : f(i) = f(i - 1) + f(i - 2)
</code>
</pre>
<p>
Chef asked you to help him with this task. There will be <b>Q</b> question of form <b>X, K</b> : How many different ways are there to create <b>X</b> by adding <b>K</b> Chefonacci numbers. Note that the order of numbers in the addition does not matter, i.e. (f(i) + f(j) + f(k)) and (f(j) + f(i) + f(k)) will not be counted as distinct ways. Also note that you are allowed to use a Chefonacci number any number of times (zero or more).
</p>
<p>
As the answer could be large, print your answer modulo <b>10<sup>9</sup> + 7 (1000000007)</b>.
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer <b>Q</b> denoting number of questions Chef was asked.
</p>
<p>
In the next <b>Q</b> lines follow the questions, i-th of the line will denote the i-th question represented by two space separated integer <b>X, K</b> respectively.
</p>
<h3>Output</h3>
<p>
For each question, output a separate line containing the answer of the question.
</p>
<h3>Constraints and Subtasks</h3>
<ul>
<b>Subtask 1 : [10 points] </b> 
<li><b>1</b> ≤ <b>Q</b> ≤ <b>50</b> </li>
<li><b>1</b> ≤ <b> X </b> ≤ <b>10<sup>9</sup> </b> </li>
<li><b>1</b> ≤ <b> K </b> ≤ <b> 4 </b> </li>
<p><br /><br />
<b>Subtask 2 : [20 points] </b> </p>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100</b> </li>
<li><b>1</b> ≤ <b> X </b> ≤ <b>10<sup>9</sup> </b> </li>
<li><b>1</b> ≤ <b> K </b> ≤ <b> 5 </b> </li>
<p><br /><br />
<b>Subtask 3 : [20 points]</b></p>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100</b> </li>
<li><b>1</b> ≤ <b> X </b> ≤ <b>10<sup>2</sup> </b> </li>
<li><b>1</b> ≤ <b> K </b> ≤ <b> 10 </b> </li>
<p><br /><br />
<b>Subtask 4 : [50 points]</b></p>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>100</b> </li>
<li><b>1</b> ≤ <b> X </b> ≤ <b>10<sup>9</sup></b> </li>
<li><b>1</b> ≤ <b> K </b> ≤ <b> 10 </b> </li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
12 1
13 1
13 2
13 3
13 4

<b>Output:</b>
0
1
1
2
4
</pre><h3>Explanation</h3>
<p>
<b>Example case 1.</b><br />
There is no way to create 12 by adding one Chefonacci number, as 12 is not a Chefonacci number.
</p>
<p>
<b>Example case 2.</b><br />
There is only one way to create 13 by adding one Chefonacci number, i.e. 13.
</p>
<p>
<b>Example case 3.</b><br />
There is one way to create 13 by adding two Chefonacci numbers, i.e. 5 + 8.
</p>
<p>
<b>Example case 4.</b><br />
There are two ways to create 13 by adding three Chefonacci numbers: 2 + 3 + 8, 3 + 5 + 5.
</p>
<p>
<b>Example case 5.</b><br />
There are four ways to create 13 by adding four Chefonacci numbers: 1 + 1 + 3 + 8, 1 + 2 + 2 + 8, 1 + 2 + 5 + 5, 2 + 3 + 3 + 5
</p>
