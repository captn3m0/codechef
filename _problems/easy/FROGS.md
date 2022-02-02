---
{"category_name":"easy","problem_code":"FROGS","problem_name":"Frog Sort","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n3 1 2\r\n1 4 5\r\n3\r\n3 2 1\r\n1 1 1\r\n4\r\n2 1 4 3\r\n4 1 2 4","output":"3\r\n6\r\n5","explanation":"**Example case 1:** We can hit the back of the first frog three times.\r\n\r\n**Example case 2:** We can hit the back of the first frog four times, then hit the back of the second frog two times.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/rk3go3Fa_r4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"1-11-2020","tags":{"0":"alei","1":"feb21","2":"simple","3":"sorting","4":"vichitr"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/FROGS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FROGS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB21/hindi/FROGS.pdf), [Bengali](https://www.codechef.com/download/translated/FEB21/bengali/FROGS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB21/mandarin/FROGS.pdf), [Russian](https://www.codechef.com/download/translated/FEB21/russian/FROGS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB21/vietnamese/FROGS.pdf) as well.

There are $N$ frogs (numbered $1$ through $N$) in a line. For each valid $i$, the $i$-th frog is initially at the position $i$, it has weight $W_i$, and whenever you hit its back, it jumps a distance $L_i$ to the right, i.e. its position increases by $L_i$. The weights of the frogs are pairwise distinct.

You can hit the back of each frog any number of times (possibly zero, not necessarily the same for all frogs) in any order. The frogs do not intefere with each other, so there can be any number of frogs at the same time at each position.

Your task is to sort the frogs in the increasing order of weight using the smallest possible number of hits. In other words, after all the hits are performed, then for each pair of frogs $(i, j)$ such that $W_i \lt W_j$, the position of the $i$-th frog should be strictly smaller than the position of the $j$-th frog. Find the smallest number of hits needed to achieve such a state.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $W_1, W_2, \ldots, W_N$.
- The third line contains $N$ space-separated integers $L_1, L_2, \ldots, L_N$.

### Output
For each test case, print a single line containing one integer ― the smallest number of times you need to hit the backs of the frogs.

### Constraints
- $1 \leq T \leq 2 \cdot 10^4$
- $2 \leq N \leq 4$
- $1 \leq W_i \leq N$ for each valid $i$
- $1 \leq L_i \leq 5$ for each valid $i$
- no two frogs have the same weight

### Subtasks
**Subtask #1 (50 points):**
- $T = 50$
- $N = 2$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
3
3 1 2
1 4 5
3
3 2 1
1 1 1
4
2 1 4 3
4 1 2 4
```

### Example Output
```
3
6
5
```

### Explanation
**Example case 1:** We can hit the back of the first frog three times.

**Example case 2:** We can hit the back of the first frog four times, then hit the back of the second frog two times.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>