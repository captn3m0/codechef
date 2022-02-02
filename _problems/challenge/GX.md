---
{"category_name":"challenge","problem_code":"GX","problem_name":"Mosaic","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"kotlin","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"COB","45":"FS"},"max_timelimit":1.47059,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"15-08-2009","tags":{"0":"admin"},"time":{"view_start_date":1252672785,"submit_start_date":1252672785,"visible_start_date":1252672785,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Imagine a large mosaic made of glass.  It has the form of a large square, of size n x n, made up from unit squares of different types of glass. Different types of glass have different physical parameters, such as the speed of light in the material. 

</p><p>
We have a source of light in corner (0,0) and a light detector in corner (n,n). We would like to estimate as accurately as possible the path taken by a ray of light which is directed from the source and reaches the detector, knowing that of all the possible routes, the one chosen by light will be the one with the shortest travel time. 
</p><p>
Each type of glass has 3 defining parameters, denoted o<sub>1</sub>,o<sub>2</sub>, and ang. In order to calculate the travel time of light along some straight line segment in one specific type of glass, we calculate the lengths l<sub>1</sub> and l<sub>2</sub> of the projections of this segment onto two perpendicular lines: onto the axis forming angle ang with the horizontal direction (X axis), and onto the axis perpendicular to it. Then, the travel time of light along the given segment is given as sqrt((l<sub>1</sub>*o<sub>1</sub>)<sup>2</sup>+(l<sub>2</sub>*o<sub>2</sub>)<sup>2</sup>).

<h3>Input</h3>
</p><p>First, 1500 ≤ n ≤ 2000, the size of mosaic. Then, n rows, n numbers in each, describing the o<sub>1</sub> values for each square, with the x-th number in the y-th line corresponding to the square with its top left-hand corner at (x,y). Then, in the same way, come n rows of n numbers defining values of parameter o<sub>2</sub>, and n rows of n numbers defining values of parameter ang. The angle is given in radians, and for each square we have, 0.1 ≤ o<sub>1</sub>,o<sub>2</sub> ≤ 100, 0 ≤ ang ≤ 2pi</p>
<h3>Output</h3>
<p>You should describe describe the route from (0,0) to (n,n) by outputting k (k ≤ 10<sup>6</sup>) and then the coordinates of k midpoints of the route (the points (0,0) and (n,n) should not be output). The route must follow the following rules: each segment between successive points of the route starts on a side of some unit square and ends on a side of this square, and the segment between them lies entirely within this unit square. Successive midpoints must be different from each other, route segments may not run along edges of unit squares, and are not allowed to lead outside of the mosaic.</p>
<h3>Scoring</h3>
<p>Your score is equal to the travel time of light along the fictional route defined by your solution (summed over all data sets). The goal is to minimize the obtained score.

<h3>Example</h3>
<pre><strong>Input:</strong>
2
1.0 2.0
3.0 1.0
1.0 1.0
1.0 1.0
0 0.785398
0.785398 0

<strong>Output:</strong>
2
0.5 1
1 1.5

<strong>Score:</strong>
3.650282

</pre></p>