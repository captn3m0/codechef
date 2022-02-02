---
{"category_name":"medium","problem_code":"ANGLE","problem_name":"Nearest Angle","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"23-05-2018","tags":{"0":"binary","1":"easy","2":"kingofnumbers","3":"snckpe19","4":"taran_1407","5":"trigonometry"},"editorial_url":"https://discuss.codechef.com/problems/ANGLE","time":{"view_start_date":1541269800,"submit_start_date":1541269800,"visible_start_date":1541269800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S19PETST/russian/ANGLE.pdf), [Vietnamese](http://www.codechef.com/download/translated/S19PETST/vietnamese/ANGLE.pdf), [Hindi](http://www.codechef.com/download/translated/S19PETST/hindi/ANGLE.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S19PETST/mandarin/ANGLE.pdf) and [Bengali](http://www.codechef.com/download/translated/S19PETST/bengali/ANGLE.pdf) as well.

You are given a sequence of positive integers $A_1, A_2, \ldots, A_N$. You must choose three elements $A_x, A_y, A_z$ ($x$, $y$, $z$ should be pairwise distinct) such that there is a non-degenerate triangle $\mathsf{XYZ}$ with the following properties:
- $|\mathsf{XY}| = A_z$, $|\mathsf{XZ}| = A_y$, $|\mathsf{YZ}| = A_x$
- the angle $|\angle \mathsf{YXZ}| = \theta$ satisfies $\cos\theta \ge P/Q$

In addition, the angle $\theta$ should be maximum possible. Find any such triangle or determine that it does not exist.
 
### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $P$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
If there is no solution, print a single line containing one integer $-1$. Otherwise, print a single line containing three space-separated integers $x$, $y$ and $z$.

If there are multiple possible solutions, you may output any one.

### Constraints 
- $1 \le T \le 5$
- $1 \le N \le 1,000$
- $1 \le A_i \le 10,000$ for each valid $i$
- $1 \le Q \le 10,000$
- $|P| \lt Q$

### Example Input
```
2
4 1 2
6 6 6 7
3 5 7
1 3 8
```

### Example Output
```
1 2 3
-1
```