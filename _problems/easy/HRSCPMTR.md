---
{"category_name":"easy","problem_code":"HRSCPMTR","problem_name":"Horoscope Matrix","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/ogUj9L6D8CU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"nikhil_medam","problem_tester":"","date_added":"24-12-2020","tags":{"0":"ltime91","1":"nikhil_medam","2":"simple","3":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/HRSCPMTR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=HRSCPMTR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME91/hindi/HRSCPMTR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME91/bengali/HRSCPMTR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME91/mandarin/HRSCPMTR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME91/russian/HRSCPMTR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME91/vietnamese/HRSCPMTR.pdf) as well.

Bhavyesh is a love guru. He helps people out by telling them whether their current partner is their true soulmate based on their partner's Horoscope Matrix. Bhavyesh is busy with his own partner today, so he has asked you to fill in for him.

A Horoscope Matrix is said to be *good* if each of its diagonals directed from the top left to the bottom right contains only equal elements, i.e. the same value repeated one or more times. This value may be different for different diagonals.

You are given a Horoscope Matrix with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$). For each valid $i$ and $j$, let's denote the element in the $i$-th row and $j$-th column by $A_{i,j}$.

You should process $Q$ queries. In each query:
- You are given three integers $X$, $Y$ and $V$. Change the value of $A_{X,Y}$ to $V$.
- Then, determine if the current Horoscope Matrix is good.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$. 
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $A_{i,1}, A_{i,2}, \ldots, A_{i,M}$ describing the initial matrix.
- The next line contains a single integer $Q$.
- Each of the next $Q$ lines contains three space-separated integers $X$, $Y$ and $V$ describing a query.

### Output
For each query, print a single line containing the string `"Yes"` if the matrix is good or `"No"` if it is not good (without quotes).

### Constraints
- $1 \leq T \leq 100$
- $1 \leq N, M \leq 500$
- $|A_{i,j}| \leq 10^9$ for each valid $i,j$
- $1 \leq Q \leq 2 \cdot 10^5$
- $1 \leq X \leq N$
- $1 \leq Y \leq M$
- $|V| \leq 10^9$
- the sum of $N \cdot M$ over all test cases does not exceed $5 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (10 points):**
- $T \leq 50$
- $N, M \leq 100$
- $Q = 1$

**Subtask #2 (30 points):**
- $T \leq 50$
- $N, M, Q \leq 100$

**Subtask #3 (60 points):** original constraints 

### Example Input
```
1
2 3
1 4 3
7 1 4
3
1 2 4
1 1 5
2 2 5
```

### Example Output
```
Yes
No
Yes
```

### Explanation
**Example case 1:** The first query does not change the Horoscope Matrix. After this query, the matrix is good because all diagonals contain only equal elements (in the order from the top right diagonal to the bottom left diagonal, they are $3$, $4$, $1$ and $7$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>