---
{"category_name":"hard","problem_code":"HULL","problem_name":"Magic Hull","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"shangjingbo","problem_tester":"anton_lunyov","date_added":"29-03-2012","tags":{"0":"june12","1":"medium","2":"polygons","3":"shangjingbo","4":"vectors"},"editorial_url":"http://discuss.codechef.com/problems/HULL","time":{"view_start_date":1339403837,"submit_start_date":1339403837,"visible_start_date":1339407000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>You are given a set of <b>N</b> two-dimensional non-zero vectors (<b>X<sub>1</sub></b>, <b>Y<sub>1</sub></b>), (<b>X<sub>2</sub></b>, <b>Y<sub>2</sub></b>), ..., (<b>X<sub>N</sub></b>, <b>Y<sub>N</sub></b>) with integer coordinates. You can choose no more than <b>6</b> vectors from this set to form a <b>non-strictly convex polygon</b> that have sides equal to these vectors (see paragraph below for more detailed explanation). Non-strictly convex polygon is the polygon that can have flat angles (angles of <b>180</b> degrees). You can select each vector several times if needed. Your goal is to maximize the area of this polygon. It is guaranteed that at least one such convex polygon can be constructed.</p>

<p>How exactly we construct a polygon from the given sequence of vectors? Suppose you've chosen the sequence of vectors (<b>U<sub>1</sub></b>, <b>V<sub>1</sub></b>), (<b>U<sub>2</sub></b>, <b>V<sub>2</sub></b>), ..., (<b>U<sub>K</sub></b>, <b>V<sub>K</sub></b>), where <b>3</b> ≤ <b>K</b> ≤ <b>6</b>. Each vector here should be equal to one of the given <b>N</b> vectors but some vectors in this sequence can coincide. At first, you take some point (<b>A<sub>1</sub></b>, <b>B<sub>1</sub></b>) at the plane as the first vertex of your polygon. Then you put your first vector (<b>U<sub>1</sub></b>, <b>V<sub>1</sub></b>) to this point to obtain the second vertex (<b>A<sub>2</sub></b>, <b>B<sub>2</sub></b>) = (<b>A<sub>1</sub></b> + <b>U<sub>1</sub></b>, <b>B<sub>1</sub></b> + <b>V<sub>1</sub></b>). Next you take the second vector and put it to the second vertex to obtain the third vertex and so on. Finally, at the last step you put vector (<b>U<sub>K</sub></b>, <b>V<sub>K</sub></b>) to the <b>K</b><sup>th</sup> vertex (<b>A<sub>K</sub></b>, <b>B<sub>K</sub></b>) to obtain the point (<b>A<sub>K + 1</sub></b>, <b>B<sub>K + 1</sub></b>) = (<b>A<sub>K</sub></b> + <b>U<sub>K</sub></b>, <b>B<sub>K</sub></b> + <b>V<sub>K</sub></b>) that should coincide with the first vertex (<b>A<sub>1</sub></b>, <b>B<sub>1</sub></b>), otherwise we should reject this sequence of vectors. Hence in the end we obtain a polygon with vertexes (<b>A<sub>1</sub></b>, <b>B<sub>1</sub></b>), (<b>A<sub>2</sub></b>, <b>B<sub>2</sub></b>), ..., (<b>A<sub>K</sub></b>, <b>B<sub>K</sub></b>). If this polygon is simple (without self-intersections) and non-strictly convex, we should consider its area as the candidate for the answer. By self-intersection we mean that either some non-consecutive sides (considered with their ends) have common point or two consecutive sides have more than one common point.</p>

<h3>Input</h3>
<p>The first line of the input file contains an integer <b>N</b>, the number of the given vectors. Each of the following <b>N</b> lines contains two space separated integers <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>, coordinates of the corresponding vector.

<h3>Output</h3>
</p><p>In the only line of the output file print the maximal possible area of the convex polygon that can be constructed by the rules described in the problem statement with exactly one digit after the decimal point.

<h3>Constraints</h3>
</p><p><b>3</b> ≤ <b>N</b> ≤ <b>150</b></p>
<p><b>|X<sub>i</sub>|</b>, <b>|Y<sub>i</sub>|</b> ≤ <b>1000000</b></p>
<p>All vectors are non-zero: <b>|X<sub>i</sub>|</b> + <b>|Y<sub>i</sub>|</b> &gt; 0</p>
<p>There exists at least one sequence of at most <b>6</b> vectors from this set that forms a convex polygon.</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
4
3 0
-1 1
-1 0
-1 -1

<b>Output:</b>
2.0
</pre>

<h3>Explanation</h3>
The only non-strictly convex polygon you can construct from these vectors by the rules described in the problem statement is the <a href="http://en.wikipedia.org/wiki/Isosceles_trapezoid">isosceles trapezoid</a> that has height of length <b>1</b> and bases of length <b>1</b> and <b>3</b>. It has area <b>2.0</b>.