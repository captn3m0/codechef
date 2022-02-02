---
{"category_name":"hard","problem_code":"JIIT","problem_name":"Queries on Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2 2 2 0\r\n2 2 2 4","output":"8\r\n8","explanation":"**Example case 1:** If we start by choosing the cell $(1, 1)$, the matrix becomes\r\n```\r\n2 1\r\n1 0\r\n```\r\n\r\nNow we have two options ? we can choose either even-valued cell. If we choose $(1, 1)$ again, the matrix becomes \r\n```\r\n4 2\r\n2 0\r\n```\r\n\r\nIf we choose $(2, 2)$ instead, it becomes\r\n```\r\n2 2\r\n2 2\r\n```\r\n\r\nFor each of the other three possible initial cells, there are also two cells we can choose in the second operation, which is $4 \\cdot 2 = 8$ ways in total.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"iamabjain","problem_tester":null,"date_added":"11-07-2017","tags":{"0":"fast","1":"hard","2":"iamabjain","3":"maths","4":"oct19","5":"r_64"},"problem_difficulty_level":"Hard","best_tag":"Fast Fourier Transform","editorial_url":"https://discuss.codechef.com/problems/JIIT","time":{"view_start_date":1571045400,"submit_start_date":1571045400,"visible_start_date":1571045400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=JIIT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT19/hindi/JIIT.pdf), [Bengali](https://www.codechef.com/download/translated/OCT19/bengali/JIIT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT19/mandarin/JIIT.pdf), [Russian](https://www.codechef.com/download/translated/OCT19/russian/JIIT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT19/vietnamese/JIIT.pdf) as well.

"But I’m no longer the troublemaker you think I am!" - Naruto Uzumaki

Sakshi had a matrix with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). Initially, all cells of this matrix contained $0$-s. Let's denote a cell in row $r$ and column $c$ by $(r, c)$.

Sakshi is well-known for troubling others. This time, her friends Nikki and Mansi planned to take revenge and teach her a lesson, so they changed her matrix by performing the following operation $Q$ times:
- Choose any valid cell $(x, y)$.
- Add $1$ to all the cells in row $x$.
- Add $1$ to all the cells in column $y$.

Then, Nikki and Mansi challenged Sakshi to find the total number of ways to perform a sequence of $Q$ operations on the initial matrix such that at the end, exactly $Z$ cells in the matrix contain odd integers. Sakshi is not good at math, since she has spent all her life troubling others, so this time, she really needs your help. Help Sakshi count the number of ways. Since the answer may be large, compute it modulo $998,244,353$.

Note: Two ways to perform a sequence of operations are considered different if there is a valid $i$ such that the cell chosen in the $i$-th operation in one sequence is different from the cell chosen in the $i$-th operation in the other sequence. For example, if we choose the cells $(1,1)$ and $(2,2)$ in this order, it is different from choosing the cells $(2,2)$ and $(1,1)$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains four space-separated integers $N$, $M$, $Q$ and $Z$.

### Output
For each test case, print a single line containing one integer ― the number of ways to perform a sequence of operations modulo $998,244,353$.

### Constraints
- $1 \le T \le 50$
- $1 \le N, M \le 2,000$
- $0 \le Z \le N \cdot M$
- $1 \le Q \le 10^{18}$

### Subtasks
**Subtask #1 (10 points):** $1 \le N, M, Q \le 300$

**Subtask #2 (40 points):** $1 \le N, M \le 300$

**Subtask #3 (10 points):** $1 \le N, M \le 500$

**Subtask #4 (10 points):** $1 \le N, M \le 600$

**Subtask #5 (10 points):** $1 \le N, M \le 700$

**Subtask #6 (10 points):** $1 \le N, M \le 800$

**Subtask #7 (10 points):** original constraints

### Example Input
```
2
2 2 2 0
2 2 2 4
```

### Example Output
```
8
8
```

### Explanation
**Example case 1:** If we start by choosing the cell $(1, 1)$, the matrix becomes
```
2 1
1 0
```

Now we have two options ― we can choose either even-valued cell. If we choose $(1, 1)$ again, the matrix becomes 
```
4 2
2 0
```

If we choose $(2, 2)$ instead, it becomes
```
2 2
2 2
```

For each of the other three possible initial cells, there are also two cells we can choose in the second operation, which is $4 \cdot 2 = 8$ ways in total.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>