---
{"category_name":"school","problem_code":"CHFM","problem_name":"Chef and Mean  ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5\r\n1 2 3 4 5\r\n4\r\n5 4 3 6\r\n10\r\n1000000000 1000000000 1000000000 1000000000 1000000000 1000000000 1000000000 1000000000 1000000000 1000000000","output":"3\r\nImpossible\r\n1","explanation":"**Example case 1:** Stealing the third coin does not change the mean. Initially, it is $(1+2+3+4+5)/5 = 3$ and after stealing this coin, it is still $(1+2+4+5)/4 = 3$.\r\n\r\n**Example case 2:** It is not possible to steal any coin without changing the mean.\r\n\r\n**Example case 3:** The mean is always $10^9$, both initially and after removing any coin, so each coin can be stolen. In that case, we should choose the first coin.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"mishra_tanay_","problem_tester":null,"date_added":"21-06-2019","tags":{"0":"cakewalk","1":"july19","2":"mishra_tanay_"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFM","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/CHFM.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/CHFM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/CHFM.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/CHFM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/CHFM.pdf) as well.

Chef has invested his savings into $N$ coins (numbered $1$ through $N$). For each valid $i$, the $i$-th coin has value $A_i$. Chef does not want to know how much money he has, so he remembers the mean value of the coins instead of the sum of their values.

A waiter from Chef's restaurant plans to steal exactly one of Chef's coins, but he does not want Chef to know about this, so he can only steal a coin if the arithmetic mean of all remaining coins is the same as the original arithmetic mean of all coins. Since the waiter is not good at mathematics, can you help him complete his plan?

You have to determine whether it is possible to steal some coin and if it is possible, choose the coin the waiter should steal. If there are multiple coins that can be stolen, choose the one with the smallest number.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line. If the waiter cannot steal any coin, this line should contain the string `"Impossible"` (without quotes). Otherwise, it should contain the number of the coin he should steal.

### Constraints
- $1 \le T \le 10$
- $2 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):**
- $2 \le N \le 10^3$
- $1 \le A_i \le 10^3$ for each valid $i$
- $A_1 + A_2 + \ldots + A_N \le 10^9$

**Subtask #2 (70 points):** original constraints

### Example Input
```
3
5
1 2 3 4 5
4
5 4 3 6
10
1000000000 1000000000 1000000000 1000000000 1000000000 1000000000 1000000000 1000000000 1000000000 1000000000

```

### Example Output
```
3
Impossible
1
```

### Explanation
**Example case 1:** Stealing the third coin does not change the mean. Initially, it is $(1+2+3+4+5)/5 = 3$ and after stealing this coin, it is still $(1+2+4+5)/4 = 3$.

**Example case 2:** It is not possible to steal any coin without changing the mean.

**Example case 3:** The mean is always $10^9$, both initially and after removing any coin, so each coin can be stolen. In that case, we should choose the first coin.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>