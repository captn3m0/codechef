---
{"category_name":"hard","problem_code":"RUBBER","problem_name":"Rubber Band","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jcpaik","problem_tester":null,"date_added":"1-05-2018","tags":{"0":"jcpaik"},"editorial_url":"https://discuss.codechef.com/problems/RUBBER","time":{"view_start_date":1526290200,"submit_start_date":1526290200,"visible_start_date":1526290200,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a href="http://www.codechef.com/download/translated/MAY18/mandarin/RUBBER.pdf" target="_blank">Mandarin chinese</a>, <a href="http://www.codechef.com/download/translated/MAY18/russian/RUBBER.pdf" target="_blank">Russian</a> and <a href="http://www.codechef.com/download/translated/MAY18/vietnamese/RUBBER.pdf" target="_blank">Vietnamese</a> as well.</h3>

James has a board (a two-dimensional plane) with $N$ nails sticking out of it and a rubber band tangled up between these nails. The rubber band can be viewed as a closed curve made up of $M$ line segments (a closed polyline with $M$ vertices). None of the nails intersect the rubber band, but the rubber band may intersect itself.

James wants to move the rubber band away from the nails. Specifically, the rubber band is *removed* if there is a line which does not intersect the rubber band or any of the nails and splits the board into two half-planes such that one half-plane contains all nails and the other half-plane contains the whole rubber band.

James can deform, stretch and shrink the rubber band in any way he wants, as long as it does not intersect with any nail (no point of the rubber band coincides with any nail) at any time during performing the deformations. However, he is not allowed to pick up the rubber band from the board (all deformations must occur in the given 2D plane).

Given the positions of the nails and the shape of the rubber band, determine if James will be able to remove the rubber band.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the following $N$ lines contains two space-separated real numbers $x$ and $y$ denoting the coordinates of one nail.
- The next line contains a single integer $M$.
- Each of the following $M$ lines contains two space-separated real numbers $x$ and $y$ denoting the coordinates of one vertex of the polyline. The rubber band is formed by connecting each pair of consecutive vertices by a line segment and connecting the first and last vertex by a line segment.

All real numbers on the input are given with up to 6 decimal digits.

### Output
For each test case, print a single line containing the string `"YES"` if James can remove the rubber band or `"NO"` if he can not (without quotes).

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 1,000$
- $3 \le M \le 3,000$
- $|x|, |y| \le 100$
- it is guaranteed that the distance of any point on the rubber band from any nail is at least $10^{-4}$

### Subtasks
**Subtask #1 (10 points):** time limit 1 second
- $N \le 10$
- $M \le 20$

**Subtask #2 (90 points):** time limit 5 seconds, original constraints

### Example Input
```
2
1
90 90
3
0 0
10 0
5 5
1
0.6 0
6
-2 2
2 -1
-1 1
-1 -1
2 1
-2 -2
```

### Example Output
```
YES
NO
```

### Explanation
**Example case 1:** The rubber band is already separated from the only nail at position $(90, 90)$.

**Example case 2:** The input corresponds to the image below.
![](https://codechef_shared.s3.amazonaws.com/download/upload/jineon/RUBBER.png)
