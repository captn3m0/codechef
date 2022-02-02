---
{"category_name":"easy","problem_code":"WTBTR","problem_name":"Where to Build the Roads","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"deepanshuvaid7","problem_tester":null,"date_added":"25-04-2019","tags":{"0":"deepanshuvaid7"},"time":{"view_start_date":1557739980,"submit_start_date":1557739980,"visible_start_date":1557739980,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>### Read problem statements in [Hindi](http://www.codechef.com/download/translated/MAY19/hindi/WTBTR.pdf), [Bengali](http://www.codechef.com/download/translated/MAY19/bengali/WTBTR.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/MAY19/mandarin/WTBTR.pdf), [Russian](http://www.codechef.com/download/translated/MAY19/russian/WTBTR.pdf), and [Vietnamese](http://www.codechef.com/download/translated/MAY19/vietnamese/WTBTR.pdf) as well.

Chef bought a huge (effectively infinite) planar island and built $N$ restaurants (numbered $1$ through $N$) on it. For each valid $i$, the Cartesian coordinates of restaurant $i$ are $(X_i, Y_i)$.

Now, Chef wants to build $N-1$ straight narrow roads (line segments) on the island. The roads may have arbitrary lengths; restaurants do not have to lie on the roads. The slope of each road must be $1$ or $-1$, i.e. for any two points $(x_1, y_1)$ and $(x_2, y_2)$ on the same road, $|x_1-x_2| = |y_1-y_2|$ must hold.

Let's denote the minimum distance Chef has to walk from restaurant $i$ to reach a road by $D_i$. Then, let's denote $a = \mathrm{max}\,(D_1, D_2, \ldots, D_N)$; Chef wants this distance to be minimum possible.

Chef is a busy person, so he decided to give you the job of building the roads. You should find a way to build them that minimises $a$ and compute $a \cdot \sqrt{2}$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.

### Output
For each test case, print a single line containing one real number — the minimum distance $a$ multiplied by $\sqrt{2}$. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Constraints 
- $1 \le T \le 100$
- $2 \le N \le 10^4$
- $|X_i|, |Y_i| \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (10 points):**
- $1 \le T \le 10$
- $2 \le N \le 5$
- $|X_i|, |Y_i| \le 10$ for each valid $i$
- $a \cdot \sqrt{2}$ is an integer

**Subtask #2 (90 points):** original constraints

### Example Input
```
2
3
0 0
0 1
0 -1
3
0 1
1 0
-1 0
```

### Example Output
```
0.5
0
```

### Explanation
**Example case 1:** We should build roads described by equations $y-x+0.5 = 0$ and $y-x-0.5 = 0$.

**Example case 2:** We should build roads described by equations $y-x-1 = 0$ and $y+x-1 = 0$.
