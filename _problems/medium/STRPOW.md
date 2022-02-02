---
{"category_name":"medium","problem_code":"STRPOW","problem_name":"String Power","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1 1 0\r\n2 2 1\r\n2\r\n1\r\n3","output":"2\r\n855638022","explanation":"In the first query, we can only generate the one-character string $c_2$. Therefore, the expected power is $2$.\r\n\r\nIn the second query, we can generate the following strings:\r\n- $c_1c_1c_2$ with power $4$ and probability $2/14$\r\n- $c_1c_2c_1$ with power $4$ and probability $2/14$\r\n- $c_2c_1c_1$ with power $4$ and probability $2/14$\r\n- $c_2c_2c_2$ with power $6$ and probability $8/14$\r\n\r\nThe expected power is therefore $\\frac{2 \\cdot 4 + 2 \\cdot 4 + 2 \\cdot 4 + 8 \\cdot 6}{2+2+2+8} = \\frac{36}{7} = 855,638,022$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/bHldNXbzyWM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 2.5","source_sizelimit":50000,"problem_author":"samarth2017","problem_tester":"","date_added":"24-03-2021","tags":{"0":"april21","1":"dynamic","2":"expected","3":"generating","4":"hard","5":"samarth2017"},"problem_difficulty_level":"Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/STRPOW","time":{"view_start_date":1618219800,"submit_start_date":1618219800,"visible_start_date":1618219800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=STRPOW","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/APRIL21/bengali/STRPOW.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL21/mandarin/STRPOW.pdf), [Russian](https://www.codechef.com/download/translated/APRIL21/russian/STRPOW.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL21/vietnamese/STRPOW.pdf) as well.

Chef has been recently studying strings and probabilities and he came up with a problem for you.

Consider an alphabet with $N$ characters (denoted by $c_1, c_2, \ldots, c_N$). For each valid $i$, the character $c_i$ has a *power* $a_i$; the power of a string that contains only characters from this alphabet is the sum of their powers (if a character occurs multiple times, its power also occurs in the sum multiple times). For example, the power of a string $c_1c_2c_3$ is $a_1+a_2+a_3$ and the power of a string $c_1c_2c_1$ is $2 \cdot a_1 + a_2$.

Also, for each valid $i$, you are given two parameters $p_i$ and $B_i$, where $p_i$ is a non-negative integer and $B_i \in \{0,1\}$. For an integer $K$, we can construct a random string $S$ with length $K$ in the following way:
- Define $R = \sum\limits_{i=1}^N p_i$.
- First, each of the $K$ characters of $S$ is chosen independently. For each valid $i$ and $j$, the $i$-th character of $S$ is $c_j$ with probability $p_j/R$.
- Then, for each valid $i$, we compute the number of occurrences of $c_i$ in $S$ and if the parity of this number of occurrences (i.e. its remainder modulo $2$) is different from $B_i$, we discard the string $S$ and try to construct a new random string $S$ from the beginning.
- Otherwise (if the parities of occurrences of all characters match the sequence $B$), we have constructed the random string $S$.
- All parameters are chosen in such a way that there is at least one string we can generate without discarding it. In particular, $R \gt 0$.

What is the expected value of the power of the constructed string $S$? You need to answer $Q$ queries. In each query, you are given a different value of $K$ and you should find the expected power.

For each query, it can be proved that the expected power can be represented as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are non-negative integers and $Q$ is coprime with $998,244,353$. You need to compute $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains three space-separated integers $a_i$, $p_i$ and $B_i$.
- The next line contains a single integer $Q$.
- $Q$ lines follow. Each of these lines contains a single integer $K$ describing a query.

### Output
For each query, print a single line containing one integer $P \cdot Q^{-1}$ modulo $998,244,353$.

### Constraints
- $1 \leq N \leq 2,000$
- $1 \leq a_i \leq 4 \cdot 10^8$ for each valid $i$
- $0 \leq p_i \leq 2,000$ for each valid $i$
- $1 \leq R \leq 2,000$
- $B_i \in \{0,1\}$ for each valid $i$
- $1 \leq Q \leq 2 \cdot 10^4$
- $1 \leq K \leq 4 \cdot 10^8$

### Subtasks
**Subtask #1 (2 points, time limit 1 second):** $N, K \leq 15$

**Subtask #2 (8 points, time limit 1.5 seconds):**
- $K \leq 2,000$
- $Q \leq 10^4$

**Subtask #3 (10 points, time limit 1.5 seconds):** $N, R \leq 400$

**Subtask #4 (80 points, time limit 2.5 seconds):** original constraints

### Example Input
```
2
1 1 0
2 2 1
2
1
3
```

### Example Output
```
2
855638022
```
	
### Explanation
In the first query, we can only generate the one-character string $c_2$. Therefore, the expected power is $2$.

In the second query, we can generate the following strings:
- $c_1c_1c_2$ with power $4$ and probability $2/14$
- $c_1c_2c_1$ with power $4$ and probability $2/14$
- $c_2c_1c_1$ with power $4$ and probability $2/14$
- $c_2c_2c_2$ with power $6$ and probability $8/14$

The expected power is therefore $\frac{2 \cdot 4 + 2 \cdot 4 + 2 \cdot 4 + 8 \cdot 6}{2+2+2+8} = \frac{36}{7} = 855,638,022$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>