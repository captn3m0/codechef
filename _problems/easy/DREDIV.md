---
{"category_name":"easy","problem_code":"DREDIV","problem_name":"Dreams of Divisibility","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n\t3 2\r\n\t3 4 3\r\n\t5 6\r\n\t6 6 8 7 3","output":"YES\r\n\tNO","explanation":"*Example case 1:* We can make everything divisible by $2$ in $2$ steps. In the first step, choose $i = 1, j = 1$, which gives the array $6$ $4$ $3$. Then, choose $i = 3, j = 3$ which gives the array $6$ $4$ $6$.\r\n\r\n*Example case 2:* It is not possible to make everything divisible by $6$ through any sequence of moves.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/MS4SxXEJG5I","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"theoneyouwant","problem_tester":"","date_added":"29-01-2021","tags":{"0":"divisibility","1":"easy","2":"ltime92","3":"theoneyouwant"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/DREDIV","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DREDIV","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/DREDIV.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/DREDIV.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/DREDIV.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/DREDIV.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/DREDIV.pdf) as well.

Every night, Mario dreams of divisibility problems. In one such dream, Mario is given an array $a$ of length $n$, and a number $k$. He performs as many operations as he wants to this array; in the end, he wants to make every element divisible by $k$.

In a single operation, Mario selects two indices $i$ and $j$ (in particular, he can choose $i = j$), and does $a[i] = a[i] + a[j]$.

Help Mario decide if he can make everything divisible by $k$ eventually, thus ending his dream.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $n$ and $k$.
- The second line contains $n$ space-separated integers $A_1, A_2, \ldots, A_n$.

### Output
For each test case, print a single line containing "YES" if everything can be made divisible by $k$ eventually, and "NO" if not.

### Constraints
- $1 \leq T \leq 10^3$
- $1 \leq n \leq 10^5$
- $1 \leq k \leq 10^9$
- $1 \leq A_i \leq 10^9$ for each valid $i$
- Sum of $n$ across all testcases is $\leq 10^6$

### Subtasks
- 30 points: Sum of $n$ across all testcases is $\leq 10^4$
- 70 points: Original constraints

### Example Input
	2
	3 2
	3 4 3
	5 6
	6 6 8 7 3

### Example Output
	YES
	NO

### Explanation
*Example case 1:* We can make everything divisible by $2$ in $2$ steps. In the first step, choose $i = 1, j = 1$, which gives the array $6$ $4$ $3$. Then, choose $i = 3, j = 3$ which gives the array $6$ $4$ $6$.

*Example case 2:* It is not possible to make everything divisible by $6$ through any sequence of moves.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>