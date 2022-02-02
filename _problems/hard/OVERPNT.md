---
{"category_name":"hard","problem_code":"OVERPNT","problem_name":"Bear and Oveflow Points","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"errichto","date_added":"23-02-2017","tags":{"0":"errichto","1":"ltime45","2":"medium"},"editorial_url":"https://discuss.codechef.com/problems/OVERPNT","time":{"view_start_date":1488042300,"submit_start_date":1488042300,"visible_start_date":1488042300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/mandarin/OVERPNT
.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/russian/OVERPNT
.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/vietnamese/OVERPNT
.pdf">Vietnamese</a> as well.</h3>

<p>In competitive programming, one of the common mistakes is using a variable type that stores too few bits, which leads to overflows and underflows.
We will focus on the "unsigned int" type, which makes all calculations modulo 2<sup>32</sup>, always giving a non-negative result between 0 and 2<sup>32</sup> - 1, inclusive.
Sample calculations on type "unsigned int" are:</p>

<pre>7 - 5 = 2,        5 - 7 = 4294967294,        5 * 1,000,000,000 = 705032704</pre>
<br>
<p>Limak wants to become a great coder.
Right now he learns the computional geometry.
He already knows that three points (ax, ay), (bx, by), (cx, cy) are collinear if and only if:</p>

<p>(bx - ax) * (cy - ay) = (by - ay) * (cx - ax)</p>

<p>Without thinking which type to use, Limak wrote the following C++ function:</p>

<pre>
<code>
	typedef unsigned int UI;
	bool areCollinear(UI ax, UI ay, UI bx, UI by, UI cx, UI cy) {
		return (bx - ax) * (cy - ay) == (by - ay) * (cx - ax);
	}
</code>
</pre>
<br>

<p>If you are more familiar with Python, you can assume that he wrote:</p>

<pre>
<code>
    M = 2 ** 32
    def subtract(a, b):
        ans = a - b
        if ans < 0:
            ans += M
        return ans
    def mul(a, b):
        return a * b % M
    def areCollinear(ax, ay, bx, by, cx, cy):
        return mul(sub(bx, ax), sub(cy, ay)) == mul(sub(by, ay), sub(cx, ax))
</pre>
</code>
<br>

<p>To show Limak how important it is to watch for overflows, you must find any set of <b>N</b> distinct points that:</b>

<ul>
<li>Any three distinct points in any order would be treated as collinear by Limak's function.</li>
<li>None three points are collinear (what implies that points are distinct).</li>
<li>Coordinates are non-negative integers not exceeding 10<sup>6</sup>.</li>
</ul>

<br>

<p>If there are many solutions (valid sets of points), you can print any of them.
There exists at least one solution for every <b>N</b> allowed by the constraints.</p>







<h3>Input</h3>

<p>The only line of the input contains an integer <b>N</b> denoting the required number of points.</p>

<h3>Output</h3>

<p>Print <b>N</b> lines.
The i-th of them should contain two space-separated integers x<sub>i</sub> and y<sub>i</sub>, denoting coordinates of the i-th point.
If there are many solutions, you can print any of them.</p>

<p>Remember that one of requirements is 0 ≤ x<sub>i</sub>, y<sub>i</sub> ≤ 10<sup>6</sup>.</p>



<h3>Constraints</h3>

<ul>
<li>3 ≤ <b>N</b> ≤ 10</li>
</ul>

<h3>Subtasks</h3>

<ul>
<li>Subtask #1 (50 points) 3 ≤ <b>N</b> ≤ 5</li>
<li>Subtask #2 (50 points) original constraints</li>
</ul>



<h3>Example</h3>

<pre><b>Input1:</b>
3

<b>Output2:</b>
106732 139820
210379 490375
42 483426

<b>Input2:</b>
4

<b>Output2:</b>
580981 431795
914958 554338
518360 23016
441824 483616</pre>




<h3>Explanation</h3>

<p><b>Test case 1.</b> The provided function areCollinear() should return True for the found three points given in any order (there are 3! = 6 possible orders of 3 points).
Let's analyze the evaluation of areCollinear(42, 483426, 106732, 139820, 210379, 490375):</p>

<p>Without any overflow errors, the calculations would be:</p>

<p> (bx - ax) * (cy - ay) = (106732 - 42) * (490375 - 483426) = 741388810</p>

<p>(by - ay) * (cx - ax) = (139820 - 483426) * (210379 - 42) = -72273055222</p>

<p>And indeed numbers 741388810 and -72273055222 are equal modulo 2<sup>32</sup>. Hence areCollinear would think that they are collinear.</p>