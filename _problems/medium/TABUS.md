---
{"category_name":"medium","problem_code":"TABUS","problem_name":"Traveling Plan","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":"anton_lunyov","date_added":"26-01-2013","tags":{"0":"binary","1":"cook32","2":"dynamic","3":"easy","4":"graph","5":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TABUS","time":{"view_start_date":1364150220,"submit_start_date":1364150220,"visible_start_date":1364150220,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
According to many researches, people can stand on a bus for several hours, but waiting for a bus for more than 30 minutes at a bus station can make us exhausted. The Chef is a perfect example for this fact. He always tries to reduce the longest period of time of waiting for a bus. Therefore, optimizing the traveling plan for him is far from an easy task.
</p>
<p>
Let's consider the bus system with <b>N</b> bus stations (numbered from <b>1</b> to <b>N</b>) and <b>M</b> buses (numbered from <b>1</b> to <b>M</b>). Each bus is represented by 4 integer numbers <b>U, V, S, E</b> which means it will start at the bus station <b>U</b> at the time <b>S</b> and arrive at the bus station <b>V</b> at the time <b>E</b> with no intermediate bus stations. If passenger arrives at the bus station <b>U</b> at the time <b>X</b> ≤ <b>S</b>, he has to wait for <b>S − X</b> units of time to catch this bus. Note, that if he arrives at the bus station <b>U</b> exactly at time <b>S</b> he can catch this bus with no waiting time.
</p>
<p>
The Chef starts at the time <b>0</b> in the bus station <b>1</b>, and he wants to arrive at the bus station <b>N</b> in a way that the longest period that he spends for waiting for a bus is as small as possible. Besides, he must be at the bus station <b>N</b> before or at the time <b>T</b> for a specially important meeting. Note, that he may wait for a meeting if he arrives at the bus station <b>N</b> early but that period is not our concern here, since he doesn't wait for any bus at that time.
</p>
<h3>Input</h3>
<p>
The first line of the input contains three space-separated integers <b>N</b>, <b>T</b> and <b>M</b>, denoting the number of bus stations, the deadline for coming to bus station <b>N</b> and the number of buses, respectively. Each of the following <b>M</b> lines contains four space-separated integers <b>U</b>, <b>V</b>, <b>S</b>, <b>E</b>, the parameters of the current bus as described in the problem statement.
</p>
<h3>Output</h3>
<p>
If Chef cannot arrive at the bus station <b>N</b> before or at the time <b>T</b>, output <b>-1</b>. Otherwise, output the maximum period of time he has to wait for a bus in the optimal traveling plan.
</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>50000</b></li>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100000</b> (<b>10<sup>5</sup></b>)</li>
<li><b>1</b> ≤ <b>U</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>V</b> ≤ <b>N</b></li>
<li><b>U</b> ≠ <b>V</b></li>
<li><b>0</b> ≤ <b>S</b> &lt; <b>E</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 10 5
1 2 1 2
1 5 3 4
2 4 4 5
2 5 5 6
4 5 6 7

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>
There are three different traveling plans:
<ul>
<li><b>bus 1 → bus 3 → bus 5</b>. His waiting time for each bus is 1, 2, 1, respectively.</li>
<li><b>bus 2</b>. His waiting time is 3.</li>
<li><b>bus 1 → bus 4</b>. His waiting time for each bus is 1, 3, respectively.</li>
</ul>
</p>
<p>
For each traveling plan Chef arrives at the bus station <b>N = 5</b> before the time <b>T = 10</b>. But only the first traveling plan is optimal, since the longest period of time his has to wait is 2.
</p>
