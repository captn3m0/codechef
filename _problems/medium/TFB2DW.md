---
{"category_name":"medium","problem_code":"TFB2DW","problem_name":"The Frictionless Bisected 2-Dimensional World","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"17-03-2019","tags":{"0":"cook104","1":"erfaniaa","2":"geometry","3":"hard","4":"physics"},"editorial_url":"https://discuss.codechef.com/problems/TFB2DW","time":{"view_start_date":1553452200,"submit_start_date":1553452200,"visible_start_date":1553452200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/COOK104/hindi/TFB2DW.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/COOK104/mandarin/TFB2DW.pdf), [Russian](http://www.codechef.com/download/translated/COOK104/russian/TFB2DW.pdf), [Vietnamese](http://www.codechef.com/download/translated/COOK104/vietnamese/TFB2DW.pdf) and [Bengali](http://www.codechef.com/download/translated/COOK104/bengali/TFB2DW.pdf) as well.

Colonel and Erfan were walking in the Frictionless Bisected Two-Dimensional World, talking about this contest’s hardest problem. As the name implies, this world is a plane (with a Cartesian coordinate system with axes $x$, $y$) divided by an impassable infinite straight wall. The wall is infinitely thin, immovable and all collisions with it are perfectly elastic collisions.

Colonel and Erfan are holding two-dimensional tennis balls (tennis discs). They decided to throw the discs, wondering if they will collide at some point. After being thrown, each disc is moving in the two-dimensional world with a constant velocity. A disc with radius $r$ collides with the wall if the distance of its centre from the wall is $r$. In an elastic collision with the wall, the component of velocity of the disc perpendicular to the wall flips its sign and the disc continues moving with a constant velocity afterwards.

Since just finding out whether the discs will collide is boring, let's define the *maximum overlap* between the thrown discs in the following way: Assume that the discs can freely pass through each other without affecting each other's trajectory. At each (not necessarily integer) moment in time after the discs are thrown, calculate the area of their intersection; the maximum overlap is the maximum value of this area. (Clearly, if the discs would never collide or only touch each other, the maximum overlap is zero.) We are asking you to tell Colonel and Erfan the maximum overlap between the discs.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $s_{1, x}$ and $s_{1, y}$ denoting the initial coordinates of the centre of the first disc.
- The second line contains two space-separated integers $v_{1, x}$ and $v_{1, y}$ denoting the $x$- and $y$-components of the initial velocity of the first disc.
- The third line contains a single integer $r_1$ denoting the radius of the first disc.
- The following three lines describe the second disc in the same format ― the first of these lines contains two space-separated integers $s_{2, x}$ and $s_{2, y}$, the second line contains two space-separated integers $v_{2, x}$ and $v_{2, y}$, and the third line contains a single integer $r_2$.
- The last two lines describe the wall as a line passing through two points. Each of these lines contains two space-separated integers $w_x$ and $w_y$ denoting the coordinates of a point on the wall.

### Constraints
- $1 \le T \le 100$
- $|s_{i, x}|, |s_{i, y}|, |v_{i, x}|, |v_{i, y}| \le 10^4$ for each valid $i$
- $|w_x|, |w_y| \le 10^4$
- $1 \le r_i \le 10^4$ for each valid $i$
- the velocity of each disc is non-zero
- initially, the discs do not intersect or touch the wall or each other
- initially, the discs are located at the same side of the wall
- the two given points on the wall are distinct

### Output
For each test case, print a single line containing one real number ― the maximum overlap between the discs. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Example Input
```
2
0 -100
0 1
10
180 -100
-1 0
5
1 0
0 0
0 -100
0 1
10
180 -100
1 0
10
1 0
0 0
```

### Example Output
```
78.539816339745
0.000000000000
```
