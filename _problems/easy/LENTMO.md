---
{"category_name":"easy","problem_code":"LENTMO","problem_name":"Lent Money","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5\r\n1 2 3 4 5\r\n2\r\n4\r\n7\r\n10 15 20 13 2 1 44\r\n4\r\n14","output":"23\r\n129","explanation":"**Example case 1:** Chef can perform two operations.\r\n1. Pick the bags $1$ and $4$, change the amount of money in bag $1$ to $1 \\oplus 4 = 5$ and the amount of money in bag $4$ to $4 \\oplus 4 = 0$. After this operation, the sequence $A = (5, 2, 3, 0, 5)$.\r\n2. Pick the bags $2$ and $3$, change the amount of money in bag $2$ to $2 \\oplus 4 = 6$ and the amount of money in bag $3$ to $3 \\oplus 4 = 7$. After this operation, $A = (5, 6, 7, 0, 5)$.\r\n\r\nAt the end, the total amount of money is $5+6+7+0+5 = 23$, which is maximum possible.\r\n\r\n**Example case 2:** Chef can pick the bags $1$, $3$, $5$ and $6$, change the amount of money in bag $1$ to $10 \\oplus 14 = 4$, the amount of money in bag $3$ to $20 \\oplus 14 = 26$, the amount of money in bag $5$ to $2 \\oplus 14 = 12$ and the amount of money in bag $6$ to $1 \\oplus 14 = 15$. Afterwards, $A = (4, 15, 26, 13, 12, 15, 44)$ and the total amount of money is $129$, which is maximum possible.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SCM guile","38":"PERL6","39":"ERL","40":"CLPS","41":"ICK","42":"NICE","43":"PRLG","44":"ICON","45":"COB","46":"SCM chicken","47":"PIKE","48":"SCM qobi","49":"ST","50":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ucntstopme","problem_tester":null,"date_added":"24-04-2019","tags":{"0":"june19","1":"junechallenge","2":"ucntstopme"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LENTMO","time":{"view_start_date":1560763800,"submit_start_date":1560763800,"visible_start_date":1560763800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LENTMO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE19/hindi/LENTMO.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE19/bengali/LENTMO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE19/mandarin/LENTMO.pdf), [Russian](https://www.codechef.com/download/translated/JUNE19/russian/LENTMO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE19/vietnamese/LENTMO.pdf) as well.

Chef lent some money to Chefexim. He has been asking for his money back for a long time, but Chefexim always comes up with an excuse. This time, Chef got really angry, since he needed the money to buy some ingredients for his ladoos, and Chefexim decided to return the money he borrowed. Knowing Chef's love of challenges, Chefexim gave Chef a challenge along with the money in order to keep him calm and happy.

Chefexim divided the money he borrowed from Chef into $N$ bags (numbered $1$ through $N$); for each valid $i$, the $i$-th bag contains $A_i$ units of money. Then, he gave all $N$ bags to Chef along with two integers $K$ and $X$. Now, Chef may perform the following operation any number of times (including zero):
- Pick exactly $K$ different bags with numbers $i_1, i_2, \ldots, i_K$ ($1 \le i_j \le N$ for each valid $j$).
- Change the amounts of money inside the selected bags. For each $j$ ($1 \le j \le K$), the amount of money inside the $i_j$-th bag is changed from $A_{i_j}$ to $A_{i_j} \oplus X$. Here, $\oplus$ denotes the bitwise XOR operation.

Each bag may be picked any number of times in different operations.

Find the maximum total amount of money (sum of amounts of money in all the bags) Chef can have at the end if he performs the operations optimally.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$ denoting the initial amounts of money inside the bags.
- The third line contains a single integer $K$.
- The fourth line contains a single integer $X$.

### Output
For each test case, print a single line containing one integer — the maximum amount of money Chef can have.

### Constraints 
- $1 \le T \le 100$
- $1 \le N \le 10^4$
- $1 \le K \le N$
- $0 \le A_i \le 10^9$ for each valid $i$
- $0 \le X \le 10^9$

### Subtasks
**Subtask #1 (10 points):** $1 \le N \le 10$

**Subtask #2 (10 points):**
- $1 \le N \le 100$
- $0 \le A_i \le 1$ for each valid $i$
- $0 \le X \le 1$

**Subtask #3 (80 points):** original constraints

### Example Input
```
2
5
1 2 3 4 5
2
4
7
10 15 20 13 2 1 44
4
14
```

### Example Output
```
23
129
```

### Explanation
**Example case 1:** Chef can perform two operations.
1. Pick the bags $1$ and $4$, change the amount of money in bag $1$ to $1 \oplus 4 = 5$ and the amount of money in bag $4$ to $4 \oplus 4 = 0$. After this operation, the sequence $A = (5, 2, 3, 0, 5)$.
2. Pick the bags $2$ and $3$, change the amount of money in bag $2$ to $2 \oplus 4 = 6$ and the amount of money in bag $3$ to $3 \oplus 4 = 7$. After this operation, $A = (5, 6, 7, 0, 5)$.

At the end, the total amount of money is $5+6+7+0+5 = 23$, which is maximum possible.

**Example case 2:** Chef can pick the bags $1$, $3$, $5$ and $6$, change the amount of money in bag $1$ to $10 \oplus 14 = 4$, the amount of money in bag $3$ to $20 \oplus 14 = 26$, the amount of money in bag $5$ to $2 \oplus 14 = 12$ and the amount of money in bag $6$ to $1 \oplus 14 = 15$. Afterwards, $A = (4, 15, 26, 13, 12, 15, 44)$ and the total amount of money is $129$, which is maximum possible.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>