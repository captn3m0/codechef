---
{"category_name":"challenge","problem_code":"DX","problem_name":"Pack the balls in a box!","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"kotlin","41":"TEXT","42":"SCM chicken","43":"CLOJ","44":"COB","45":"FS"},"max_timelimit":0.704286,"source_sizelimit":50000,"problem_author":"admin","problem_tester":null,"date_added":"5-05-2009","tags":{"0":"admin"},"time":{"view_start_date":1244985518,"submit_start_date":1244985518,"visible_start_date":1244985274,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Suppose we have a set of balls and a large cuboid box, with a rectangle as its base. The box has a fixed size at the base, but we can choose its height. We would like to place all the balls within the box, and at the same time try to minimize its height.

<h3>Input</h3>
</p><p>First, 2 integers, 10 ≤ a,b ≤ 100 - the dimensions of the rectangular base of the box. Then, an integer 1 ≤ n ≤ 10000, representing the number of balls. The following  n  values 1 ≤ r<sub>i</sub> ≤ 5 are the radii of the respective balls.

<h3>Output</h3>
</p><p>You should write to output n triples of floating-point numbers, the ith triple being the x,y, and z coordinates of the center of the ith ball.

</p><p>If we want to be precise, the coordinates of the points written to output must fulfill the following constraints for the i-th point: 
x<sub>i</sub>-r<sub>i</sub> ≥ 0,
y<sub>i</sub>-r<sub>i</sub> ≥ 0,
z<sub>i</sub>-r<sub>i</sub> ≥ 0,
x<sub>i</sub>+r<sub>i</sub> ≤ a,
y<sub>i</sub>+r<sub>i</sub> ≤ b. Moreover, for each i ≠ j,
(x<sub>i</sub> - x<sub>j</sub>)<sup>2</sup> + (y<sub>i</sub> - y<sub>j</sub>)<sup>2</sup> + 
(z<sub>i</sub> - z<sub>j</sub>)<sup>2</sup> ≥ (r<sub>i</sub> + r<sub>j</sub>)<sup>2</sup> (no two balls are allowed to overlap).
<h3>Scoring</h3>
</p><p> The goal is to minimize the height h of the box, where h = max<sub>i</sub> (z<sub>i</sub>+r<sub>i</sub>).
For each data set, your program will be scored by the proportion of the box volume actually used by the balls:
</p><p><i>score</i> = 4/3*π*(r<sub>1</sub><sup>3</sup>+..+r<sub>n</sub><sup>3</sup>)/(a*b*h).
</p><p>
The program is run independently for a number of data sets, and the displayed score is the mean of scores obtained for individual data sets.

<h3>Example</h3>

<pre>
<b>Input:</b>
5 5
2
1.0
2.0

<b>Output:</b>
4.0 4.0 3.0
2.0 2.0 2.0

<b>Score:</b>
37.6991118/100.0 = 0.376991118
</pre></p>