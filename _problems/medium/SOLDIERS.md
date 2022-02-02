---
{"category_name":"medium","problem_code":"SOLDIERS","problem_name":"Chef and Reordering","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/UZIoLmkpCu8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shishyando","problem_tester":"","date_added":"23-02-2021","tags":{"0":"hashing","1":"ltime93","2":"medium","3":"shishyando"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SOLDIERS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SOLDIERS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME93/bengali/SOLDIERS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME93/mandarin/SOLDIERS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME93/russian/SOLDIERS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME93/vietnamese/SOLDIERS.pdf) as well.

There are $N$ cells (numbered $1$ through $N$). Initially, each cell contains a single Chef.

You are given $Q$ pairs of cell ranges $[L_1, R_1], [L_2, R_2], \ldots, [L_Q, R_Q]$. Consider a sequence of integers $a_1, a_2, \ldots, a_N$, where $1 \le a_i \le N$ for each valid $i$. For each $k$ from $1$ to $Q$, the following process is performed:
- For each $i$ ($L_k \le i \le R_k$), the Chef from cell $i$ moves to cell $a_i$. All Chefs move at the same time.
- We check if each cell contains exactly one Chef afterwards. If there is a cell which does not contain exactly one Chef, the sequence $a$ is *invalid* and we stop.

You should find a sequence $a$ which is not invalid. (Note that for such a sequence, each cell contains exactly one Chef at any point.) In addition, you are given an integer $p$ with the following meaning:
- If $p = 0$, you should find the lexicographically smallest sequence $a$.
- If $p = 1$, you should find the lexicographically largest sequence $a$.

### Input
- The first line of the input contains two space-separated integers $T$ and $p$, where $T$ denotes the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- $Q$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
For each test case, print a single line containing $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- If $p = 0$, the sequence $a_1, a_2, \ldots, a_N$ should be the lexicographically smallest valid sequence.
- If $p = 1$, the sequence $a_1, a_2, \ldots, a_N$ should be the lexicographically largest valid sequence.

### Constraints
- $1 \le T \le 10^3$
- $0 \le p \le 1$
- $1 \le N, Q \le 2 \cdot 10^5$
- $1 \le L_i \le R_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$
- the sum of $Q$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (15 points):** $p = 0$

**Subtask #2 (35 points):**
- $p = 1$
- the sum of $N$ over all test cases does not exceed $10^3$
- the sum of $Q$ over all test cases does not exceed $10^3$

**Subtask #3 (50 points):** $p = 1$

### Example Input 1
```
2 0
7 3
2 5
7 7
3 4
1 2
1 1
1 1
```

### Example Output 1
```
1 2 3 4 5 1 7 
1
```

### Explanation
**Example case 1:** Whenever a Chef should move from some cell $i$, we have $a_i = i$, so the Chefs do not move. That means the sequence $[1, 2, 3, 4, 5, 1, 7]$ is valid and it can be proved that it is lexicographically smallest, too.

### Example Input 2
```
2 1
7 3
2 5
7 7
3 4
1 2
1 1
1 1
```

### Example Output 2
```
7 5 4 3 2 7 7 
1
```

### Explanation
**Example case 1:** The Chefs move like this:
- first, $2 \rightarrow 5, 3 \rightarrow 4, 4 \rightarrow 3, 5 \rightarrow 2$; then, there is still exactly one Chef in each cell
- next, Chef $7$ stays in his cell
- finally, the Chefs in cells $3$ and $4$ swap places

There is no point when there are two Chefs in a single cell at the same time, so the sequence $[7, 5, 4, 3, 2, 7, 7]$ is valid and it can be proved that it is lexicographically largest, too.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>