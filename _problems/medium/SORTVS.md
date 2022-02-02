---
{"category_name":"medium","problem_code":"SORTVS","problem_name":"Sorting Vases","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 1\r\n2 3 1\r\n2 3\r\n5 10\r\n2 4 5 1 3\r\n1 2\r\n1 3\r\n1 4\r\n1 5\r\n2 3\r\n2 4\r\n2 5\r\n3 4\r\n3 5\r\n4 5\r\n4 1\r\n3 1 4 2\r\n1 2","output":"1\r\n0\r\n2","explanation":"**Example case 1:** Chef can ask the robot to swap the vases at the positions $2$ and $3$, and then he can swap the vases at the positions $1$ and $2$.\r\n\r\n**Example case 2:** The robot can swap each pair of vases, so the answer is $0$.\r\n\r\n**Example case 3:** Chef can swap the vases at the positions $1$ and $4$, then ask the robot to swap the vases at the positions $1$ and $2$, and then swap the vases at the positions $3$ and $4$, taking a total of two minutes.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arthurfn","problem_tester":null,"date_added":"9-03-2020","tags":{"0":"arthurfn","1":"arthurfn","2":"may20","3":"medium"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SORTVS","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SORTVS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/SORTVS.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/SORTVS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/SORTVS.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/SORTVS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/SORTVS.pdf) as well.

Chef has $N$ vases in a row (numbered $1$ through $N$, initially from left to right). He wants to sort them in a particular order which he finds the most beautiful. You are given a permutation $p_1, p_2, \ldots, p_N$ of the integers $1$ through $N$; for each valid $i$, Chef wants the $i$-th vase to end up as the $p_i$-th vase from the left.

In order to achieve this, Chef can swap vases. Any two vases can be swapped in $1$ minute. Chef also has a very efficient, but limited, robot at his disposal. You are given $M$ pairs $(X_1,Y_1), (X_2,Y_2), \ldots, (X_M,Y_M)$. For each valid $i$, the robot can instantly swap two vases whenever one of them is at the position $X_i$ and the other at the position $Y_i$. Note that the initial positions of the vases are irrelevant to the robot.

Formally, Chef, at any moment, may choose to perform one of the following actions, until the vases are sorted in the desired order:
- Choose two indices $i$ and $j$ ($1 \le i, j \le N$) and swap the vases that are currently at the positions $i$ and $j$. It takes $1$ minute to perform this action.
- Choose an integer $k$ ($1 \le k \le M$) and order the robot to swap the vases that are currently at the positions $X_k$ and $Y_k$. It takes $0$ minutes to perform this action.

Chef cannot perform multiple operations at the same time ― if he chooses to perform some operation of the first type, he has to wait for $1$ minute before performing any further operations.

What is the minimum number of minutes that Chef needs to sort the vases?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $p_1, p_2, \ldots, p_N$.
- $M$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.

### Output
For each test case, print a single line containing one integer ― the minimum number of minutes Chef needs to sort the vases.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 18$
- $0 \le M \le 18$
- $1 \le p_i \le N$ for each valid $i$
- $1 \le X_i, Y_i \le N$ for each valid $i$
- $X_i \neq Y_i$ for each valid $i$
- $N \gt 10$ holds in at most one test case

### Subtasks
**Subtask #1 (20 points):** $M = 0$

**Subtask #2 (20 points):** $N \le 5$

**Subtask #3 (60 points):** original constraints

### Example Input
```
3
3 1
2 3 1
2 3
5 10
2 4 5 1 3
1 2
1 3
1 4
1 5
2 3
2 4
2 5
3 4
3 5
4 5
4 1
3 1 4 2
1 2
```

### Example Output
```
1
0
2
```

### Explanation
**Example case 1:** Chef can ask the robot to swap the vases at the positions $2$ and $3$, and then he can swap the vases at the positions $1$ and $2$.

**Example case 2:** The robot can swap each pair of vases, so the answer is $0$.

**Example case 3:** Chef can swap the vases at the positions $1$ and $4$, then ask the robot to swap the vases at the positions $1$ and $2$, and then swap the vases at the positions $3$ and $4$, taking a total of two minutes.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>