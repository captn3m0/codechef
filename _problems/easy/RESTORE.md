---
{"category_name":"easy","problem_code":"RESTORE","problem_name":"Restore Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/kmLS8R5rdJI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vasyl_protsiv","problem_tester":"","date_added":"30-09-2020","tags":{"0":"constructive","1":"nov20","2":"simple","3":"vasyl_protsiv"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RESTORE","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RESTORE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/NOV20/hindi/RESTORE.pdf), [Bengali](https://www.codechef.com/download/translated/NOV20/bengali/RESTORE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/NOV20/mandarin/RESTORE.pdf), [Russian](https://www.codechef.com/download/translated/NOV20/russian/RESTORE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/NOV20/vietnamese/RESTORE.pdf) as well.

Alice has a very complex machine ― when fed with a sequence $A_1, A_2, \ldots, A_N$, it produces a sequence $B_1, B_2, \ldots, B_N$, where for each valid $i$, $B_i$ is the largest index $j$ such that $A_i$ divides $A_j$ (since $A_i$ divides itself, such an index always exist). For example, if the machine is fed with $A = [2, 6, 5, 3, 4]$, it produces $B = [5, 2, 3, 4, 5]$.

Alice gave you a sequence $B$ that was produced by the machine. Find an integer sequence $A$ such that when it is fed into the machine, then the machine produces the sequence $B$. Alice does not like huge integers, so make sure that $1 \le A_i \le 4 \cdot 10^6$ holds for each valid $i$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
For each test case, print a single line containing $N$ space-separated integers $A_1, A_2, \ldots, A_N$. For each valid $i$, $1 \le A_i \le 4 \cdot 10^6$ should hold.

If there are multiple solutions, you may print any of them. It is guaranteed that at least one solution exists.

### Constraints
- $1 \le T \le 2 \cdot 10^4$
- $1 \le N \le 10^5$
- $1 \le B_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (20 points):** $B_1, B_2, \ldots, B_N$ are pairwise distinct

**Subtask #2 (80 points):** original constraints

### Example Input
```
2
5
5 2 3 4 5
4
4 4 4 4
```

### Example Output
```
2 6 5 3 4
2 6 3 12
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>