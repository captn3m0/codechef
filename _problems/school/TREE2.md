---
{"category_name":"school","problem_code":"TREE2","problem_name":"A Problem on Sticks","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3\r\n1 2 3","output":3,"explanation":"**Example case 1:** Birbal may perform the following three operations:\r\n- Fix the cutter at $H = 2$. The heights of the sticks after this operation are $[1, 2, 2]$.\r\n- Fix the cutter at $H = 1$. The heights of the sticks after this operation are $[1, 1, 1]$.\r\n- Fix the cutter at $H = 0$. After this operation, all sticks are completely cut.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/sYyVq9uQDaM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahi1422","problem_tester":"","date_added":"13-06-2020","tags":{"0":"math","1":"sahi1422","2":"sahi1422","3":"sept20","4":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TREE2","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREE2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/TREE2.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/TREE2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/TREE2.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/TREE2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/TREE2.pdf) as well.

On a sunny day, Akbar and Birbal were taking a leisurely walk in palace gardens. Suddenly, Akbar noticed a bunch of sticks on the ground and decided to test Birbal's wits.

There are $N$ stick holders with negligible size (numbered $1$ through $N$) in a row on the ground. Akbar places all the sticks in them vertically; for each valid $i$, the initial height of the stick in the $i$-th holder is $A_i$. Birbal has a stick cutter and his task is to completely cut all these sticks, i.e. reduce the heights of all sticks to $0$. He may perform zero or more operations; in each operation, he should do the following:
- Choose an integer $H$ and fix the cutter at the height $H$ above the ground.
- The cutter moves from the $1$-st to the $N$-th stick holder. Whenever it encounters a stick whose current height is greater than $H$, it cuts this stick down to height $H$ (i.e. for a stick with height $h \gt H$, it removes its upper part with length $h-H$).
- All the upper parts of sticks that are cut in one operation must have equal lengths. Otherwise, the operation may not be performed.

For example, if the heights of sticks are initially $[5, 3, 5]$, then some valid values for $H$ in the first operation are $3$ and $4$ ― the cutter cuts the upper parts of two sticks and their lengths are $[2, 2]$ and $[1, 1]$ respectively. $H = 2$ is an invalid choice because it would cut the upper parts of all three sticks with lengths $[3, 1, 3]$, which are not all equal.

Akbar wants Birbal to completely cut all sticks in the minimum possible number of operations. If you want to be friends with Birbal, help him solve the problem.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the minimum number of operations needed to completely cut all the sticks.

### Constraints
- $1 \le T \le 50$
- $1 \le N \le 10^5$
- $0 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (20 points):** $N \le 50$

**Subtask #2 (80 points):** original constraints

### Example Input
```
1
3
1 2 3
```

### Example Output
```
3
```

### Explanation
**Example case 1:** Birbal may perform the following three operations:
- Fix the cutter at $H = 2$. The heights of the sticks after this operation are $[1, 2, 2]$.
- Fix the cutter at $H = 1$. The heights of the sticks after this operation are $[1, 1, 1]$.
- Fix the cutter at $H = 0$. After this operation, all sticks are completely cut.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>