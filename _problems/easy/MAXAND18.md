---
{"category_name":"easy","problem_code":"MAXAND18","problem_name":"Maximum AND","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n4 1\r\n3 4 5 1","output":4,"explanation":"**Example case 1:** Exactly one bit in $X$ should be $1$. Our options are:\r\n- If $X = 1$, $S = 1+0+1+1 = 3$.\r\n- If $X = 2$, $S = 2+0+0+0 = 2$.\r\n- If $X = 4$, $S = 0+4+4+0 = 8$.\r\n- For any greater valid $X$, $S = 0$.\r\n\r\nThe maximum value of $S$ is $8$, so the answer is the only value of $X$ where we get $S = 8$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dean_student","problem_tester":null,"date_added":"18-04-2020","tags":{"0":"dean_student","1":"greedy","2":"ltime85","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MAXAND18","time":{"view_start_date":1593277202,"submit_start_date":1593277202,"visible_start_date":1593277202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MAXAND18","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME85/hindi/MAXAND18.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME85/bengali/MAXAND18.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME85/mandarin/MAXAND18.pdf), [Russian](https://www.codechef.com/download/translated/LTIME85/russian/MAXAND18.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME85/vietnamese/MAXAND18.pdf) as well.

Chef's good friend Shubham has an assignment to complete, but he is too lazy to do it, so he asked Chef to help him. On the other hand, Chef was busy in the kitchen, so he in turn asked you to help Shubham.

You are given a sequence of positive integers $A_1, A_2, \ldots, A_N$ and an integer $K$. For any positive integer $X$ such that exactly $K$ bits in the binary representation of $X$ are equal to $1$, consider the sum $S = \sum_{i=1}^N (X \wedge A_i)$; here, $\wedge$ denotes bitwise AND. You should choose $X$ in such a way that $S$ is maximum possible. If there is more than one such value of $X$, you should find the smallest one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the smallest possible value of $X$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le K \le 30$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (50 points):** $K \le 2$

**Subtask #2 (50 points):** original constraints

### Example Input
```
1
4 1
3 4 5 1
```

### Example Output
```
4
```

### Explanation
**Example case 1:** Exactly one bit in $X$ should be $1$. Our options are:
- If $X = 1$, $S = 1+0+1+1 = 3$.
- If $X = 2$, $S = 2+0+0+0 = 2$.
- If $X = 4$, $S = 0+4+4+0 = 8$.
- For any greater valid $X$, $S = 0$.

The maximum value of $S$ is $8$, so the answer is the only value of $X$ where we get $S = 8$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>