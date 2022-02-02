---
{"category_name":"challenge","problem_code":"CHORCKIT","problem_name":"(Challenge) Chef with Orchestra in the Kitchen","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"deluxurous","problem_tester":null,"date_added":"27-01-2019","tags":{"0":"deluxurous"},"time":{"view_start_date":1550050202,"submit_start_date":1550050202,"visible_start_date":1550050202,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Chef has a large orchestra in his kitchen and he is preparing for a concert next week. He also has a music score, which is represented by a string $S$ with length $N$. Each note in the music score is represented by a lowercase or uppercase English letter; the values of lowercase letters 'a' through 'z' are $1$ through $26$ and the values of uppercase letters 'A' through 'Z' are $27$ through $52$.

There are $M$ melodies (numbered $1$ through $M$) which Chef considers *pretty melodies*. For each valid $i$, the $i$-th pretty melody is represented by a string $T_i$ and it has a *pretty value* $C_i$.

There are also $A$ *good melodies*. For each valid $i$, the $i$-th good melody is represented by a string $P_i$ and it has a *cost* $Q_i$.

To modify Chef's music score (the string $S$), there are three types of operations you may apply:
1. Choose one note (one character in $S$) and replace it by another note. The cost of this operation is the absolute difference between the original value and the new value of the replaced note. For example, the cost of replacing 'b' by 'e' is $|5 - 2| = 3$, and the cost of replacing 'B' by 'x' is $|24 - 28| = 4$.
2. Choose a non-empty substring of $S$ and replace it by a good melody (not necessarily with the same length). For each valid $i$, the cost of replacing a substring by a good melody $P_i$ is $Q_i$.
3. Duplicate a substring ― choose a non-empty substring of $S$ (let's denote it by $s$) and insert a copy of $s$ into $S$, immediately after the chosen occurrence of $s$. For example, after applying this operation on the substring "Dc" in the string "AcbDcb", the resulting string is "AcbDc**Dc**b". The cost of this operation is $R$.

You may apply any of these operations in any order, but you must satisfy the following restrictions:
- You must apply at most $10^5$ operations.
- You must apply an operation of type 3 **at most once**.
- You have $X$ coins. The total cost (sum of costs) of all operations you apply must not exceed $X$.
- The length of the string $S$ must not exceed $10^6$ at any time.

Let's define the *pretty value* of Chef's music score $V = \sum_{i=1}^M K_i \cdot C_i$, where $K_i$ denotes the number of times the $i$-th pretty melody occurs in Chef's music score as a substring (these occurrences may overlap). Your goal is to maximise the pretty value of Chef's music score.

### Input
- The first line of the input contains five space-separated integers $N$, $M$, $A$, $X$ and $R$.
- The second line contains a single string $S$ with length $N$ denoting Chef's initial music score.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains a string $T_i$, followed by a space and an integer $C_i$.
- $A$ more lines follow. For each $i$ ($1 \le i \le A$), the $i$-th of these lines contains a string $P_i$, followed by a space and an integer $Q_i$.

### Output
- First, you should print a line containing a single integer $L$ ― the number of operations you want to apply.
- Then, you should print $L$ lines describing these operations in the order in which they should be applied, in the following format depending on their types:
    - `1 x c`, if you want to replace the $x$-th note (indexed from $1$) in the current music score by the character $c$ ($c$ must be a lowercase or uppercase English letter)
    - `2 l r i`, if you want to replace the substring between the $l$-th and $r$-th note (inclusive; $1 \le l \le r$) in the current music score by the $i$-th good melody
    - `3 l r`, if you want to duplicate the substring between the $l$-th and $r$-th note (inclusive; $1 \le l \le r$) in the current music score

### Constraints
- $100 \le N \le 20,000$
- $1 \le M \le 100$
- $0 \le A \le 10,000$
- $0 \le X, R \le 10^5$
- $1 \le |T_i| \le 50$ for each valid $i$
- $0 \le |C_i| \le 10^3$ for each valid $i$
- $1 \le |P_i| \le 20$ for each valid $i$
- $0 \le Q_i \le 10^5$ for each valid $i$
- for each valid $i$, $T_i$ contains only lowercase and uppercase English letters
- for each valid $i$, $P_i$ contains only lowercase and uppercase English letters

### Example Input
```
6 3 2 13 3
AFBBet
BBc 6
cp 4
A 3
EE 3
Bc 1
```

### Example Output
```
4
1 2 A
3 1 3
2 7 8 2
1 9 p
```

### Explanation
Note that this is just one possible sequence of operations.
- Initially, Chef's music score is "AFBBet" and its pretty value is $3$.
- After the first operation (with cost $|27-32| = 5$), the music score becomes "AABBet" and its pretty value becomes $6$.
- After the second operation (with cost $3$), it becomes "AABAABBet" and its pretty value becomes $12$.
- After the third operation (with cost $1$), it becomes "AABAABBct" and its pretty value becomes $18$.
- After the fourth operation (with cost $4$), it becomes "AABAABBcp" and its pretty value becomes $22$.
- At the end, the pretty value of the music score is $22$ and the total cost is $13$.

### Scoring
The score of each test file is $\mathrm{max}(0, V) / 100$, where $V$ is the pretty value of Chef's music score after applying all the chosen operations. The score of a submission is the sum of scores of all test files. For example, if your final pretty value is $2333$, then you will get $23.33$ points; if your final pretty value is $-666$, then you will get $0$ points. However, If your output is invalid or your sequence of operations violates any of the given conditions, the verdict of your submission will be Wrong Answer.

There are twenty test cases. During the contest, the displayed score will account for exactly five test files, i.e. your score reflects your submission's performance on 25% (5/20) of the test files, one for each of the types described below. However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other fifteen test files.

### Test Generation Process
There are five types of test files. All strings are generated uniformly randomly, unless noted otherwise. Specifically, a uniformly random string with length in the range $[a, b]$ is generated by first choosing its length uniformly randomly in this range and then choosing each of its characters uniformly randomly; all such choices are independent. You may assume that $M$ and $A$ are chosen manually.

**Type 1:**
- $N = 100$
- $Q_1, Q_2, \ldots, Q_A, R$ are generated uniformly randomly in the range $[0, 100]$
- all the pretty values are generated uniformly randomly in the range $[-50, 100]$
- $X$ is generated uniformly randomly in the range $[500, 1000]$

**Type 2:**
- $N = 2,000$
- $|T_i| \gt 2$ for each valid $i$
- $Q_1, Q_2, \ldots, Q_A, R$ are generated uniformly randomly in $[0, 300]$
- all the pretty values are generated uniformly randomly in $[0, 10^3]$
- $X$ is generated uniformly randomly in the range $[10^4, 10^6]$

**Type 3:**
- $N = 5,000$
- each string contains only letters 'a' through 'e'
- $|T_i| \gt 4$ for each valid $i$
- $Q_1, Q_2, \ldots, Q_A, R$ are generated uniformly randomly in $[0, 5]$
- all the pretty values are generated uniformly randomly in $[-10^3, 10^3]$
- $X$ is generated uniformly randomly in the range $[100, 2000]$

**Type 4:**
- $N = 20,000$
- $S$ contains only the letter 'z'
- $|T_i| \le 10$ for each valid $i$
- $Q_1, Q_2, \ldots, Q_A, R$ are generated uniformly randomly in the range $[1, 200]$
- all the pretty values are generated uniformly randomly in the range $[-10^2, 10^3]$
- $X$ is generated uniformly randomly in the range $[10^3, 10^5]$

**Type 5:**
- $N = 20,000$
- $|T_i| \gt 2$ for each valid $i$
- $Q_1, Q_2, \ldots, Q_A$ are generated uniformly randomly in the range $[0, 200]$
- $R$ is generated uniformly randomly in the range $[10^3, 5 \cdot 10^4]$
- all the pretty values are generated uniformly randomly in the range $[-500, 10^3]$
- $X$ is generated uniformly randomly in the range $[5 \cdot 10^3, 10^5]$
