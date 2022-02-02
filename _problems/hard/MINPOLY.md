---
{"category_name":"hard","problem_code":"MINPOLY","problem_name":"Devu, his sister and Rangoli","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"21-05-2015","tags":{"0":"admin2","1":"cook58","2":"geometry","3":"hard"},"editorial_url":"http://discuss.codechef.com/problems/MINPOLY","time":{"view_start_date":1432492200,"submit_start_date":1432492200,"visible_start_date":1432492200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/mandarin/MINPOLY.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK58/russian/MINPOLY.pdf">Russian</a> as well.</h3>



<p>
As you know already, it is Devu's birthday today. He wants to make a <a href="http://en.wikipedia.org/wiki/Rangoli"> Rangoli </a> to decorate his house. He created <b>n</b> points having integer coordinates on the front door of his house. He also made sure no three points are collinear in it because collinear points break beauty of it. For each point, there is parameter beauty which is a positive integer. 
</p>

<p>
Now, when Devu's little sister saw the points drawn, she thought of creating patterns by drawing a convex polygon by choosing some of the <b>n</b> point as vertices of it. Also, as she is very naughty, instead of creating most beautiful pattern, she wants to create least beautiful pattern. Beauty of a polygon is sum of beauties of all the points lying inside or on the boundary of it.
</p>

<p>
You have to help Devu's sister in finding out the least beauty of convex polygon of <b>k</b> vertices. If it is impossible to find such a convex polygon, print -1. Otherwise print the minimum weight of the convex polygon you can have. Please solve the problem for all <b>k</b>'s from 3 to <b>n</b>.
</p>

<h3>Input</h3>
<ul>
<li>There is a single test case.</li>
<li>First line contains a single integer <b>n</b> as defined in the problem.</li>
<li>Then in the next <b>n</b> lines, each line contains three space separated integers <b>x, y, b</b> denoting that there is a point
 with coordinates <b>(x, y)</b> with beauty equal to <b>b</b>. </li>
</ul>

<h3>Output</h3>
<p>Print <b>n - 2</b> space separated integers corresponding to the answer for <b>k</b> = 3 to <b>n</b> as asked in the problem. </p>

<h3>Constraints</h3>
<ul>
<li><b>3</b> ≤ <b>n</b> <b> ≤ 50</b></li>
<li><b>- 10<sup>5</sup></b> ≤ <b>x, y</b> <b> ≤ 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>b</b> <b> ≤ 10<sup>5</sup></b></li>
<li>No three or more points are collinear.</li>
<li>All the points in the input are distinct.</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
0 0 1
1 0 2
0 1 3
<b>Output:</b>
6
</pre>

<pre><b>Input:</b>
4
0 0 1
1 0 2
0 1 3
1 1 2
<b>Output:</b>
5 8
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> The triangle given in the input has beauty equal to 6.</p>
<p><b>Example case 2.</b> One of the triangles has a beauty of 5 whereas there is only one rectangle which has beauty equal to 8.</p>