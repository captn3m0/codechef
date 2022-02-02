---
{"category_name":"medium","problem_code":"CHEFKO","problem_name":"Chef and K Segments","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":null,"date_added":"27-10-2018","tags":{"0":"easy","1":"mgch","2":"segments","3":"snck1b19","4":"sorting","5":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/CHEFKO","time":{"view_start_date":1540827000,"submit_start_date":1540827000,"visible_start_date":1540827000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Russian](http://www.codechef.com/download/translated/S191BTST/russian/CHEFKO.pdf) , [Vietnamese](http://www.codechef.com/download/translated/S191BTST/vietnamese/CHEFKO.pdf) , [Hindi](http://www.codechef.com/download/translated/S191BTST/hindi/CHEFKO.pdf), [Mandarin chinese](http://www.codechef.com/download/translated/S191BTST/mandarin/CHEFKO.pdf) and [Bengali](http://www.codechef.com/download/translated/S191BTST/bengali/CHEFKO.pdf) as well.

Chef has a difficult problem to solve. He has $N$ segments $[l_1, r_1], [l_2, r_2], \dots, [l_N, r_N]$ on the $x$-axis. A $K$-subset of these $N$ segments consists of any $K$ of these segments. For each $K$-subset, consider the common intersection of all the $K$ segments, i.e. the set of points which belong to each of the $K$ segments. The intersection of segments is also a segment; the length of a segment $[l, r]$ is $r-l$. Chef is asking you to find the maximum of lengths of the common intersections in all $K$-subsets.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $l_i$ and $r_i$.

### Output
For each test case, print a single line containing one integer — the maximum length of a common intersection.

### Constraints 
- $1 \le T \le 1,000$
- $1 \le K \le N \le 10^5$
- $1 \le l_i \le r_i \le 10^9$
- the sum of $N$ over all test cases does not exceed $5 \cdot 10^5$

### Subtasks
**Subtask #1 (50 points):** the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
3 2
1 6
2 4
3 6
```

### Example Output
```
3
```

### Explanation
**Example case 1:** A $2$-subset is a pair of segments. The common intersections of all pairs are:
- for the first and second segment, the intersection is the segment $[2, 4]$ with length $2$
- for the second and third segment, the intersection is the segment $[3, 4]$ with length $1$
- for the first and third segment, the intersection is the segment $[3, 6]$ with length $3$
