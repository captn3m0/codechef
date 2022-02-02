---
{"category_name":"challenge","problem_code":"BX","problem_name":"Bubbles","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"kotlin","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"COB","45":"FS"},"max_timelimit":0.117647,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"22-03-2009","tags":{"0":"admin"},"time":{"view_start_date":1240484339,"submit_start_date":1240484339,"visible_start_date":1240484210,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p><b>This problem was part of the <a href="http://www.codechef.com/APRIL09/">CodeChef April Challenge</a>.  All user submissions for this contest problem are publicly available <a href="http://www.codechef.com/APRIL09/status/BX/">here</a>.</b></p>

<p><strong>The following a tie breaker problem.  The best solution will receive one point.  All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.</strong></p>

<p>Let's have some fun with soap bubbles... We drive several sticks vertically into a flat surface (so that they look like points from above), and spread a thin film of soap over all of them. The soap film tends to minimize the area of its surface, and eventually becomes very thin, with surfaces turning into lines spread over all points. When everything has settled down, we can assume that the "bubble" we have is in fact a set of line segments, which connect all of our sticks into one network (possibly via some intermediate points which can also be the endpoints of lines).

<h3>Input</h3>
<p>First, 1<=<var>n</var><=1000, the number of starting points to connect. Then, <var>n</var> pairs of numbers follow, representing the coordinates of sticks which the soap film will connect.

<h3>Output</h3>
<p>First, you should output the number <var>m</var> of intermediate points you create. Then, the next <var>m</var> pairs of numbers are coordinates of intermediate points.
Then, you should output <var>e</var>, the number of soap-bubble lines you create. Then, the next 2*<var>e</var> numbers represent the indexes of points which are connected by the given line. Each index <var>i</var> should be a number 0<=<var>i</var> < <var>n</var>+<var>m</var>. If <var>i</var> < n, then it represents the <var>i</var>-th input point (stick). If <var>i</var>>=n, then it corresponds to the (<var>i</var>-<var>n</var>)-th intermediate point.



<h3>Scoring</h3>
<p>
Your goal is to minimize the score obtained in this problem.

<p>
As longer lines tends to get thinner, for each line segment of length t, you will receive t / max(1, ln(t)) penalty points, where "ln" is the logarithm in the natural base.
You will additionally receive ln(m+1) penalty points if your solution uses <var>m</var> intermediate points.
<p>
If the soap film given at output does not span  all the input points (connecting them into a network), your solution will be judged as incorrect.

<h3>Example</h3>

<pre>
<b>Input:</b>
3
0.0 0.0
0.0 3.0
4.0 0.0

<b>Output:</b>
1
1.0 1.0
3
0 3
1 3
2 3

<b>Score:</b>
7.090148
</pre>
