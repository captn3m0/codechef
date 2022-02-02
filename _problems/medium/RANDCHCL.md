---
{"category_name":"medium","problem_code":"RANDCHCL","problem_name":"Random Chocolates","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3\r\n1 2 3\r\n4\r\n2 2 2 2","output":"887328320\r\n15","explanation":"**Example case 2:**\r\n- When $k = 1$, the score is $1^2 \\cdot 2 = 2$.\r\n- When $k = 2$, the score is $2^2 \\cdot 2 = 8$.\r\n- When $k = 3$, the score is $3^2 \\cdot 2 = 18$.\r\n- When $k = 4$, the score is $4^2 \\cdot 2 = 32$.\r\n\r\nThe expected score is $\\frac{2+8+18+32}{4} = 15$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"imanik","problem_tester":null,"date_added":"14-03-2020","tags":{"0":"combinatorics","1":"cook116","2":"imanik","3":"medium","4":"tmwilliamlin"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RANDCHCL","time":{"view_start_date":1584901802,"submit_start_date":1584901802,"visible_start_date":1584901802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RANDCHCL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK116/hindi/RANDCHCL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK116/mandarin/RANDCHCL.pdf), [Russian](https://www.codechef.com/download/translated/COOK116/russian/RANDCHCL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK116/vietnamese/RANDCHCL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK116/bengali/RANDCHCL.pdf) as well.

We all know that Chef got a box of $N$ chocolates (numbered $1$ through $N$) as his birthday present. For each valid $i$, the $i$-th chocolate has a sweetness value $W_i$. Chef is going to play the following randomised game for fun with his brother:
- First, an integer $k$ between $1$ and $N$ (inclusive) is chosen uniformly randomly.
- Then, $k$ times, Chef chooses a chocolate from the box uniformly randomly and independently (each chocolate may be chosen multiple times). For each $i$ ($1 \le i \le k$), let's denote the sweetness of the $i$-th chocolate chosen by Chef by $A_i$.
- Chef's brother does the same thing ― $k$ times, he also chooses a chocolate from the box uniformly randomly and independently from each other or Chef's choices (so each chocolate may still be chosen multiple times). For each $i$ ($1 \le i \le k$), let's denote the sweetness of the $i$-th chocolate chosen by Chef's brother by $B_i$.
- The score of the game is $\sum_{i=1}^k \sum_{j=1}^k \mathrm{gcd}(A_i, B_j)$.

Find the expected value of the score. It can be proved that this expected value can be expressed as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are positive integers and $Q$ is coprime with $998,244,353$. You should compute $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $W_1, W_2, \ldots, W_N$.

### Output
For each test case, print a single line containing one integer $P \cdot Q^{-1}$ modulo $998,244,353$.

### Constraints
- $1 \le T \le 5$
- $1 \le N \le 3 \cdot 10^5$
- $1 \le W_i \le 5 \cdot 10^5$ for each valid $i$

### Example Input
```
2
3
1 2 3
4
2 2 2 2
```

### Example Output
```
887328320
15
```

### Explanation
**Example case 2:**
- When $k = 1$, the score is $1^2 \cdot 2 = 2$.
- When $k = 2$, the score is $2^2 \cdot 2 = 8$.
- When $k = 3$, the score is $3^2 \cdot 2 = 18$.
- When $k = 4$, the score is $4^2 \cdot 2 = 32$.

The expected score is $\frac{2+8+18+32}{4} = 15$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>