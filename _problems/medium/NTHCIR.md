---
{"category_name":"medium","problem_code":"NTHCIR","problem_name":"Rohith and Circles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"adurysk","problem_tester":"mugurelionut","date_added":"16-04-2015","tags":{"0":"adurysk","1":"geometry","2":"july15","3":"maths","4":"medium","5":"recurrence"},"editorial_url":"http://discuss.codechef.com/problems/NTHCIR","time":{"view_start_date":1436779800,"submit_start_date":1436779800,"visible_start_date":1436779800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY15/mandarin/NTHCIR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY15/russian/NTHCIR.pdf">Russian</a>.</h3>
<p> Chef has a friend named Rohith who is very good at geometry. One day Chef came across an interesting problem on the topic of circles and shared it with Rohith.</p>
<p> Next day Rohith also came up to chef with a problem he just created. When our chef couldn't solve it thinking that it uses some advanced geometry, Rohith took the pleasure saying that the solution of this problem uses exactly the same concept which was used to solve the problem that they have discussed the day before. This came as a shock to our chef and he became desperate to solve this problem, but even as he tried a lot, he couldn't solve it. Rohith doesn't want to share his solution, so can you help our chef in solving the problem?</p>
<p>Take a deep breath! You are going to draw a lot of circles.</p>
<p> The problem goes like this:</p>
<ul>
<li>First draw a circle of radius <b>R</b><sub>1</sub> on a sheet of paper, let us call it <b>C</b><sub>1</sub>.</li>
<li>Draw another circle of radius <b>R<sub>2</sub></b> touching the circle <b>C</b><sub>1</sub> from the inside (it is given that <b>R</b><sub>2</sub> ≤ <b>R</b><sub>1</sub>), let's call this circle as <b>C</b><sub>2</sub>.</li>
<li>Draw another circle of radius <b>R<sub>3</sub></b> such that it touches the circle <b>C</b><sub>1</sub> from inside and the circle <b>C</b><sub>2</sub> from outside (it is given that <b>R</b><sub>3</sub> + <b>R</b><sub>2</sub> ≤ <b>R</b><sub>1</sub>), let's call this circle as <b>C</b><sub>3</sub>.</li>
<li>Draw another circle of radius <b>R<sub>4</sub></b> which will touch the circles <b>C</b><sub>2</sub> and <b>C</b><sub>3</sub> externally and the circle <b>C1</b> internally, let's call it as <b>C</b><sub>4</sub>. It is guaranteed that such a set of circles can be drawn.</li>
<p>After drawing the four circles, the figure may look something like this:  </p>
<p><img src="http://www.codechef.com/download/JULY15/NTHCIR1.png" /></p>
<li>Now try to draw a circle <b>C<sub>5</sub></b> which will touch the circles <b>C</b><sub>2</sub> and <b>C</b><sub>4</sub> externally and the circle <b>C</b><sub>1</sub> internally. Note that circles <b>C</b><sub>5</sub> and <b>C</b><sub>3</sub> are not the same (see the picture below for more clarification). Let its radius be <b>R</b><sub>5</sub></li>
<li>Now try to draw a circle <b>C</b><sub>6</sub> which will touch the circles <b>C</b><sub>2</sub> and <b>C</b><sub>5</sub> externally and the circle <b>C</b><sub>1</sub> internally. Let its radius be <b>C</b><sub>6</sub>.</li>
<li>And so on, like this, draw <b>N</b> circles such that the circle <b>C</b><sub>N</sub> will touch circles <b>C</b><sub>2</sub>, <b>C</b><sub>N - 1</sub> externally and the circle <b>C</b><sub>1</sub> internally. Let its radius be <b>R<sub>N</sub></b></li>
</ul>
<p>After drawing all the circles the figure may look like this  </p>
<p><img src="http://www.codechef.com/download/JULY15/NTHCIR2.png" /></p>
<p>You are given <b>N</b>, <b>R</b><sub>1</sub>, <b>R</b><sub>2</sub>, <b>R</b><sub>3</sub> and <b>R</b><sub>4</sub>, you need to find the radius of the circle <b>C</b><sub>N</sub>, i.e, <b>R</b><sub>N</sub>.</p>
<p>You are given four integers <b>N</b><sub>0</sub>, <b>P</b>, <b>M</b>, <b>B</b>. There are <b>T</b> test cases in total. Test cases are numbered from 1 to <b>T</b>. The value of <b>N</b> for the <b>t</b><sup>th</sup> test case, i.e, <b>N</b><sub>t</sub> = (<b>P</b> * <b>N</b><sub>t - 1</sub>) % <b>M</b> + <b>B</b>. The values of <b>R</b><sub>1</sub>, <b>R</b><sub>2</sub>, <b>R</b><sub>3</sub> and <b>R</b><sub>4</sub> remain constant over all the test cases.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The next line contains four integers <b>N</b><sub>0</sub>, <b>P</b>, <b>M</b> and <b>B</b> separated by a single space.</p>
<p>The next line contains four real valued numbers <b>R</b><sub>1</sub>, <b>R</b><sub>2</sub>, <b>R</b><sub>3</sub> and <b>R</b><sub>4</sub> separated by a single space.</p>
<h3>Output</h3>
<p>As the number of test cases can be huge, you need to output a single line containing the sum of values of <b>R</b><sub><b>N</b></sub> over all test cases exactly up to 6 decimal places.</p>
<h3>Constraints and Subtasks</h3>
<p><b>Subtask 1: 25 points</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>R</b><sub>i</sub> ≤ <b>10<sup>3</sup></b></li>
<li><b>1</b> ≤ <b>N</b><sub>0</sub>, <b>P, M, B</b> ≤ <b>10<sup>3</sup></b></li>
</ul>
<p><b>Subtask 2: 75 points</b></p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>7</sup></b></li>
<li><b>1</b> ≤ <b>R</b><sub>i</sub> ≤ <b>10<sup>12</sup></b></li>
<li><b>1</b> ≤ <b>N</b><sub>0</sub>, <b>P, M, B</b> ≤ <b>10<sup>9</sup> </b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
1 2 1 5
6 3 3 2

<b>Output:</b>
1.000000

<h3>Explanation</h3>
<p>After drawing 5 circles the figure looks like this.</p>
<img src="http://www.codechef.com/download/JULY15/NTHCIR3.png" height="245" width="250" />
The radius of the circle <b>C</b><sub>5</sub> here is <b>R</b><sub>5</sub> = 1.</pre>