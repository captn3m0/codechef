---
{"category_name":"medium","problem_code":"LIGHT","problem_name":"Lights","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":"laycurse","date_added":"29-03-2012","tags":{"0":"binary","1":"geometry","2":"line","3":"sep12","4":"shangjingbo"},"editorial_url":"http://discuss.codechef.com/problems/LIGHT","time":{"view_start_date":1347355963,"submit_start_date":1347355963,"visible_start_date":1347355800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
There are <strong>N</strong> lights above a road along the X-axis.
The <b>i</b>-th light has <b>X<sub>i</sub></b> as its X-coordinate, and it is hung <b>Y<sub>i</sub></b> above the road.
The <b>i</b>-th light illuminates a triangular area, which is an isosceles triangle and its bottom edge is on the X-axis.
The half of the top angle of the triangle is <b>Z<sub>i</sub></b> degrees. (See the below figure)
</p>

<p>
You have an aircraft which can fly on a fixed height.
Because of some unknown reasons, this aircraft can fly only under the light.
Your task is to find the maximum possible height for your flight from <b>X</b>=<b>L</b> to <b>X</b>=<b>R</b>.
</p>

<p>
The lights do not block the aircraft, e.g. the aircraft can safely fly through a light.
</p>


<img src="http://www.codechef.com/download/light.png" width="490" height="194" />


<h3>Input</h3>
<p>
The first line contains three parameters <b>N</b>, <b>L</b> and <b>R</b>.
</p>

<p>
The next <strong>N</strong> lines give the infomation about each light.
The <b>i</b>-th line contains three numbers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> and <b>Z<sub>i</sub></b>.
</p>

<h3>Output</h3>
<p>
Output the maximum height you can reach.
The value must have an absolute error less than or equal to 0.000001 (10<sup>-6</sup>).
It is guarenteed that you can make the flight with the positive height.
</p>

<h3>Constraints</h3>
<p>
1 ≤ <b>N</b> ≤ 50000<br />
-1000 ≤ <b>L</b> &lt; <b>R</b> ≤ 1000<br />
-1000 ≤ <b>X<sub>i</sub></b> ≤ 1000<br />
0 &lt; <b>Y<sub>i</sub></b> ≤ 1000<br />
15 ≤ <b>Z<sub>i</sub></b> ≤ 75<br />
<b>N</b> is an integer, but all other input values can be non-integers.<br />
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
2 3.2 7.3
3.2 4.7 28
7.3 4.2 75

<b>Output:</b>
3.300759642

</pre>