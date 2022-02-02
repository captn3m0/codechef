---
{"category_name":"hard","problem_code":"CHEFARMY","problem_name":"Chefland Army","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"22-12-2019","tags":{"0":"alei","1":"alei","2":"breadth","3":"depth","4":"hashing","5":"jan20","6":"linear","7":"linear","8":"vijju123"},"problem_difficulty_level":"Hard","best_tag":"Linear Programming","editorial_url":"https://discuss.codechef.com/problems/CHEFARMY","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFARMY","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/CHEFARMY.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/CHEFARMY.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/CHEFARMY.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/CHEFARMY.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/CHEFARMY.pdf) as well.

**This is not intended to be the tie-break problem.**

In the Chefland army, there are $M$ generals (numbered $1$ through $M$) and $N$ soldiers (numbered $1$ through $N$).

The Army has a vertical hierarchy ― a soldier may command many other soldiers (including zero), but each soldier has at most one commander. A soldier $y$ is a *subordinate* of a soldier $x$ if soldier $x$ is the commander of soldier $y$ or there is a soldier $z$ commanded by soldier $x$ such that soldier $y$ is a subordinate of soldier $z$. No soldier is commanded by one of their subordinates because every soldier is feared by all of his subordinates. Moreover, all soldiers are subordinates of soldier $1$. Let's denote the commander of soldier $i$ by $p_i$ ($p_1 = 0$ since soldier $1$ cannot have a commander).

As in any organisation, the generals have some soldiers they hate. If a general meets a soldier whom he hates, this general becomes angry for the rest of the day.

The soldiers should be paid some wages over one or more days. For each valid $i$, soldier $i$ should be paid $S_i$ chefcoins. Shyam is in charge of this; he should choose an integer $D$ ($0 \le D \le N^2$) and during each of the next $D$ days, perform the following process:
- Choose an integer $K$ and $K$ soldiers, then call these soldiers to report their feats to the generals. Shyam is very careful ― on each day, he chooses these soldiers in such a way that there are no two called soldiers where one is afraid of the other (in other words, no called soldier is a subordinate of another called soldier).
- Choose a positive real number $R$ and give each of the called soldiers $R$ chefcoins.
- For each soldier $v$ and general $u$, if soldier $v$ was called and is hated by general $u$, then general $u$ becomes angry. Let $G$ be the total number of angry generals on this day. Then, the total angriness of the generals increases by $G \cdot R$.
- Before the start of the next day, the generals that were angry calm down and are not angry anymore (so they can become angry again).

Help Shyam pay the soldiers while minimising the total angriness of the generals over all $D$ days.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $M$ and $N$.
- Each of the next $M$ lines contains a binary string $B$ with length $N$. For each valid $i$ and $j$, the $j$-th character in the $i$-th of these strings is '1' if general $i$ hates soldier $j$ or '0' otherwise.
- The next line contains $N$ space-separated integers $S_1, S_2, \ldots, S_N$.
- The last line contains $N$ space-separated integers $p_1, p_2, \ldots, p_N$.

### Output
For each test case:
- First, print a line containing a single integer $D$ ($0 \le D \le N^2$) ― the number of days during which the soldiers are paid.
- Then, print $D$ lines. In each of these lines, print an integer $K$, a space, a real number $R$, a space and $K$ space-separated integers $x_1, x_2, \ldots, x_K$ ― the numbers of the called soldiers.
- For each valid $i$, let the total amount of money received by soldier $i$ be $W_i$; your answer will be considered correct if $|W_i - S_i| \le 10^{-6}$.

### Constraints
- $T = 50$
- $M = 16$ 
- $N = 128$
- $0 \le p_i \le N$ for each valid $i$
- $1 \le S_i \le 100$ for each valid $i$

### Test generation
For each test case:
- $S_1, S_2, \ldots, S_N$ are chosen uniformly randomly and independently between $1$ and $100$.
- For each valid $i$, $p_i$ is chosen uniformly randomly between $1$ and $i-1$.
- For each test case, a real number $p$ is chosen manually. There are $10$ test cases for each $p \in \{0.1, 0.2, 0.5, 0.7, 0.8\}$.
- For each valid $i$ and $j$, $B_{i,j}$ is chosen to be '1' with probability $p$ or '0' with probability $1-p$.

### Scoring
The score of each test case is the sum of $R \cdot G$ over all $D$ days. The score of a submission is equal to the sum of its scores over all test cases.

The goal is to minimise the score of your submission. However, this problem is solvable optimally ― there is a solution which is guaranteed to score 100 points.

### Example Input
```
1
3 4
0000
1111
0101
1 2 3 4
0 1 1 3
```

### Example Output
```
5
2 1 2 4
2 1 2 3
1 2 3
1 3 4
1 1 1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>