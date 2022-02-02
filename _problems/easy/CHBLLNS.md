---
{"category_name":"easy","problem_code":"CHBLLNS","problem_name":"Chef and Ballons","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"antoniuk1","problem_tester":"xcwgf666","date_added":"13-02-2016","tags":{"0":"antoniuk1","1":"april16","2":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CHBLLNS","time":{"view_start_date":1460374200,"submit_start_date":1460374200,"visible_start_date":1460374200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/mandarin/CHBLLNS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/russian/CHBLLNS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL16/vietnamese/CHBLLNS.pdf">Vietnamese</a> as well.</h3>
<p>Today a plane was hijacked by a maniac. All the passengers of the flight are taken as hostage. Chef is also one of them.</p>
<p>He invited one of the passengers to play a game with him. If he loses the game, he will release all the passengers, otherwise he will kill all of them. A high risk affair it is.
</p>
<p>
Chef volunteered for this tough task. He was blindfolded by Hijacker. Hijacker brought a big black bag from his pockets. The contents of the bag is not visible. He tells Chef that the bag contains <b>R</b> red, <b>G</b> green and <b>B</b> blue colored balloons.
</p>
<p>
Hijacker now asked Chef to take out some balloons from the box such that there are at least <b>K</b> balloons of the same color and hand him over. If the taken out balloons does not contain at least <b>K</b> balloons of the same color, then the hijacker will shoot everybody. Chef is very scared and wants to leave this game as soon as possible, so he will draw the minimum number of balloons so as to save the passengers. Can you please help scared Chef to find out the minimum number of balloons he should take out.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br />
The first line of each test case contains a three space-separated integers <b>R</b>, <b>G</b> and <b>B</b>. <br />
The second line contains only one integer <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing one integer - the minimum number of balloons Chef need to take out from the bag.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>R, G, B</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>max{<b>R</b>, <b>G</b>, <b>B</b>}</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1 (44 points):</b> <b>1 ≤ <b>R</b>, <b>G</b>, <b>B</b> ≤ 10</b></li>
<li><b>Subtask 2 (56 points): </b> No additional constraints</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3 3
1
3 3 3
2

<b>Output:</b>
1
4
</pre><h3>Explanation</h3>
<p><b>Example case 2.</b> In the worst-case scenario first three balloons will be of the three different colors and only after fourth balloon Chef will have two balloons of the same color. So, Chef might need to fetch 4 balloons</p>
