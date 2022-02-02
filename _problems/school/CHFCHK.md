---
{"category_name":"school","problem_code":"CHFCHK","problem_name":"Chef Chick","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2\r\n2 3","output":2,"explanation":"**Example case 1:** The sequence of coordinates on which Chef Chick would jump starts with $(0, 2, 3, 4, 6, \\ldots)$. A longest jump is e.g. from $4$ to $6$, with length $2$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/yel_RsaBlNU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adarshag","problem_tester":"","date_added":"2-01-2020","tags":{"0":"adarshag","1":"cook114"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFCHK","time":{"view_start_date":1579458602,"submit_start_date":1579458602,"visible_start_date":1579458602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFCHK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK114/hindi/CHFCHK.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK114/mandarin/CHFCHK.pdf), [Russian](https://www.codechef.com/download/translated/COOK114/russian/CHFCHK.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK114/vietnamese/CHFCHK.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK114/bengali/CHFCHK.pdf) as well.

Chef Chick loves to jump a lot. Once, it realised that it was on an infinitely long road, and decided to travel along this road by jumping.

Let's view the road as the $x$-axis in a 1D coordinate system. Initially, Chef Chick is at the coordinate $x=0$, and it wants to move only in the positive $x$-direction. Moreover, Chef Chick has $N$ favourite integers $a_1, a_2, \ldots, a_N$, and it wants to jump on the coordinates that are multiples of these favourite numbers — when its current position is $x$, it jumps to the smallest coordinate $y \gt x$ such that $y$ is an integer multiple of at least one of the values $a_1, a_2, \ldots, a_N$; the length of such a jump is $y-x$.

This way, Chef Chick keeps jumping along the road forever in the positive $x$-direction. You need to find the length of the longest jump it will make, i.e. the largest integer $d$ such that Chef Chick makes at least one jump with length $d$ and never makes any jump with a greater length. It can be proved that such an integer always exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
For each test case, print a single line containing one integer — the length of the longest jump that Chick will make.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 100$
- $1 \le a_i \le 10^5$ for each valid $i$
- $a_1, a_2, \ldots, a_N$ are pairwise distinct

### Example Input
```
1
2
2 3
```

### Example Output
```
2
```

### Explanation
**Example case 1:** The sequence of coordinates on which Chef Chick would jump starts with $(0, 2, 3, 4, 6, \ldots)$. A longest jump is e.g. from $4$ to $6$, with length $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>