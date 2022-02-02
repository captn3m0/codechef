---
{"category_name":"school","problem_code":"CASH","problem_name":"Hard Cash","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 7\r\n1 14 4 41 1\r\n3 9\r\n1 10 19","output":"5\r\n3","explanation":"**Example case 1:** One of the possible solutions is to choose $c = 4$, remove $1$, $0$, $4$ and $13$ coins from bags $1$, $2$, $3$ and $4$ respectively, and add $13$ coins to bag $5$.\r\n\r\n**Example case 2:** The optimal solution is to choose $c = 3$ and remove one coin from each bag.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/UcF-qVvI3D4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sahi1422","problem_tester":"","date_added":"28-01-2020","tags":{"0":"cakewalk","1":"feb20","2":"greedy","3":"math","4":"sahi1422","5":"tmwilliamlin"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CASH","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CASH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/CASH.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/CASH.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/CASH.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/CASH.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/CASH.pdf) as well.

Chef wants to take Chefina on a date. However, he has to complete one more task before leaving. Since he does not want to be late, he is asking you for help.

There are $N$ bags with coins in a row (numbered $1$ through $N$); for each valid $i$, the $i$-th bag contains $A_i$ coins. Chef should make the number of coins in each bag divisible by a given integer $K$ in the following way:
- choose an integer $c$ between $0$ and $N$ (inclusive)
- take some coins from the first $c$ bags ― formally, for each $i$ ($1 \le i \le c$), he may choose any number of coins between $0$ and $A_i$ inclusive and take them out of the $i$-th bag
- move some of these coins to some of the last $N-c$ bags ― formally, for each $i$ ($c+1 \le i \le N$), he may place a non-negative number of coins in the $i$-th bag

Of course, the number of coins placed in the last $N-c$ bags must not exceed the number of coins taken out from the first $c$ bags, but there may be some coins left over. Let's denote the number of these coins by $R$. You should find the smallest possible value of $R$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$. 

### Output
For each test case, print a single line containing one integer ― the smallest value of $R$.

### Constraints
- $1 \le T \le 10^3$
- $1 \le N \le 10^5$
- $0 \le A_i \le 10^9$ for each valid $i$
- $1 \le K \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
**Subtask #1 (10 points):** $K = 2$

**Subtask #2 (20 points):** $N \le 3$

**Subtask #3 (70 points):** original constraints

### Example Input
```
2
5 7
1 14 4 41 1
3 9
1 10 19
```

### Example Output
```
5
3
```

### Explanation
**Example case 1:** One of the possible solutions is to choose $c = 4$, remove $1$, $0$, $4$ and $13$ coins from bags $1$, $2$, $3$ and $4$ respectively, and add $13$ coins to bag $5$.

**Example case 2:** The optimal solution is to choose $c = 3$ and remove one coin from each bag.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>