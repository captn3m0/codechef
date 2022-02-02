---
{"category_name":"easy","problem_code":"TIMEASR","problem_name":"Time measure","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kaizer","problem_tester":null,"date_added":"29-05-2015","tags":{"0":"ad","1":"kaizer","2":"oct15","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/TIMEASR","time":{"view_start_date":1444642200,"submit_start_date":1444642200,"visible_start_date":1444642200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/mandarin/TIMEASR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT15/russian/TIMEASR.pdf">Russian</a> </h3>
<p> Chef is sitting in a very boring lecture, waiting for it to end. He has recently asked his friend about the time, and instead of the straightforward answer, his friend, being an absolute jerk, told him the absolute value of angle between hour and minute hands.
</p>
<p>
But that is obviously not what he wanted to know, so he asks you to help him, by writing down all valid values of time (in hours and minutes, both non-negative integers) from <b>midnight</b> (inclusive) to <b>noon</b> (not inclusive) which satisfy the information Chef's friend has provided. Keep in mind that a time value is considered valid if the angle between the clock's hands for that value and the angle Chef's friend has described differ by <b>less</b> than <b>1/120 degrees.</b></p>
<p>
Note that the <b>movement of the minute hand influences the hour hand</b>. That is, every minute, it moves by 1/60<sup>th</sup> of the angular distance between two consecutive hour marks.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The only line of each test case contain a single real number <b>A</b> in decimal notation, denoting the angle between minute and hour hands. The fractional part won't contain more than <b>4</b> digits.</p>
<h3>Output</h3>
<p>For each test case print all valid values of time as described in the statement in the format "<b>hh:mm</b>" (without quotes), where <b>hh</b> means number of hours, and <b>mm</b> the number of minutes. Times should be printed in <b>chronological</b> order.
</p>
<h3>Constraints and Subtasks</h3>

<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A</b> ≤ <b>180</b></li>
<li>Output won't exceed <b>1 MB</b>.</li>
</ul>

<p><b>Subtask 1: (30 points)</b></p>
<ul>
<li><b>A</b> is an integer from the set {<b>0</b>, <b>90</b>, <b>180</b>}.</li>
</ul>

<p><b>Subtask 2: (30 points)</b></p>
<ul>
<li><b>A</b> is an integer.</li>
</ul>

<p><b>Subtask 3: (40 points)</b></p>
<ul>
<li>No additional constraints.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
0
30</tt>

<b>Output:</b>
<tt>00:00
01:00
11:00</tt></pre>