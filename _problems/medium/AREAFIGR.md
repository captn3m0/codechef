---
{"category_name":"medium","problem_code":"AREAFIGR","problem_name":"Area of an amazing figure","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"25-11-2017","tags":{"0":"acm17chn","1":"admin2","2":"chn17rol","3":"geometry","4":"medium","5":"monte"},"editorial_url":"https://discuss.codechef.com/problems/AREAFIGR","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>There is an equilateral triangle ABC with side length <b>2*a</b>. The coordinates of the triangle's vertices are A = <b>(-a, 0)</b>, B = <b>(a, 0)</b> and C = <b>(0, sqrt(3) * a)</b>. Next, there are three circles with centers at the midpoints of sides AB, BC and AC respectively and radii <b>r<sub>1</sub></b>, <b>r<sub>2</sub></b> and <b>r<sub>3</sub></b> respectively. Compute the area of the intersection of the triangle and the three circles.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first and only line of each test case contains four space-separated integers <b>a, r<sub>1</sub>, r<sub>2</sub>, r<sub>3</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line containing one real number corresponding to the area of the intersection. Your answer will be considered correct if it has an absolute or relative error ≤ 5 * 10<sup>-2</sup>.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 20</li>
<li>1 ≤ <b>a</b> ≤ 50</li>
<li>1 ≤ <b>r<sub>1</sub>, r<sub>2</sub>, r<sub>3</sub></b> ≤ 200</li> 
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>

5
10 5 5 5
10 6 6 7
10 12 13 14
10 15 15 15
10 19 20 18

<b>Output</b>

0.0000000
1.417303000
138.1789
163.712
173.2064190
</pre>

<h3>Explanation</h3>
<p><b>Example case 2:</b> The black colored area shown in the figure is the intersection between the triangle and the three circles. </p>

<p><img height="450" src="https://discuss.codechef.com/upfiles/triangle_semi_circles.png"/></p>
	