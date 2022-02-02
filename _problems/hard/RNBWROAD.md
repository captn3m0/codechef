---
{"category_name":"hard","problem_code":"RNBWROAD","problem_name":"Chef and Rainbow Road","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"shisuko","problem_tester":null,"date_added":"29-03-2020","tags":{"0":"fast","1":"generating","2":"hard","3":"math","4":"may20","5":"polynomial","6":"shisuko","7":"shisuko"},"problem_difficulty_level":"Hard","best_tag":"Generating Functions","editorial_url":"https://discuss.codechef.com/problems/RNBWROAD","time":{"view_start_date":1589189402,"submit_start_date":1589189402,"visible_start_date":1589189402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RNBWROAD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/MAY20/hindi/RNBWROAD.pdf), [Bengali](https://www.codechef.com/download/translated/MAY20/bengali/RNBWROAD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/MAY20/mandarin/RNBWROAD.pdf), [Russian](https://www.codechef.com/download/translated/MAY20/russian/RNBWROAD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/MAY20/vietnamese/RNBWROAD.pdf) as well.

Chef was relaxing outdoors after a poor performance during his university varsity's yearly week-long training retreat in the mountains. He was looking for a sign that he should continue competitive programming, even though at times, it can feel insurmountably difficult. Then, he looked up and saw a dazzling rainbow in the sky. He was so moved by the beauty of nature that he decided to continue programming and even created this problem about a mathematical Rainbow Road.

Let the Rainbow Road be a grid with $M$ rows (numbered $1$ through $M$ from top to bottom) and $N$ columns (numbered $1$ through $N$ from left to right). Let's denote a cell in row $i$ and column $j$ by $(i,j)$, i.e. $(1,1)$ is the cell in the top left corner and $(M,N)$ is the cell in the bottom right corner. Chef selected $N$ distinct positive integers $a_1, a_2, \ldots, a_N$ and instead of using colours, he "painted" stripes on the road with these numbers. For each valid $j$, each cell in column $j$ has the same value $a_j$.

You should answer $Q$ queries. In each query:
- You are given an integer $K$. Chef wants to travel from the cell $(1,1)$ to the cell $(K,N)$.
- It is only possible to travel from any cell to the cell directly below it or to the cell directly to the right (if they exist). Formally, if Chef is in a cell $(i,j)$, he may only travel to $(i+1,j)$ or $(i,j+1)$.
- Let's define a *path* as a sequence of cells $c_1, c_2, \ldots, c_s$ such that for each $i$ ($1 \le i \lt s$), Chef can travel from the cell $c_i$ to the cell $c_{i+1}$.
- The *weight* of a path is the product of the values of all cells in that path.
- Chef wants you to find the sum of the weights of all possible paths that start in the cell $(1,1)$ and end in the cell $(K,N)$. Since this number can be quite large, compute it modulo $998,244,353 = 7 \cdot 17 \cdot 2^{23}+1$ (a prime number).

### Input
- The first line of the input contains three space-separated integers $M$, $N$ and $Q$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.
- $Q$ lines follow. Each of these lines contains a single integer $K$ describing a query.

### Output
For each query, print a single line containing one integer ― the sum of weights of paths modulo $998,244,353$.

### Constraints
- $1 \le M \le 10^{18}$
- $1 \le N \le 10^5$ 
- $1 \le Q \le 10^5$
- $1 \le a_i \lt 998,244,353$ for each valid $i$
- $a_1, a_2, \ldots, a_N$ are pairwise distinct
- $1 \le K \le M$

### Subtasks
**Subtask 1 (10 points):** $M, N \le 2,000$

**Subtask 2 (25 points):** $M \le 10^5$

**Subtask 3 (15 points):**
- $Q \le 10$
- $N \le 2,000$

**Subtask 4 (50 points):** $Q \le 10$

### Example Input 1
```
2 3 2
1 3 5
1
2
```

### Example Output 1
```
15
135
```

### Explanation
In the first query, there is only one path from $(1,1)$ to $(1,3)$: $(1,1) \rightarrow (1,2) \rightarrow (1,3)$. This path has weight $1 \cdot 3 \cdot 5 = 15$.

In the second query, there are three paths from $(1,1)$ to $(2,3)$:
- $(1,1) \rightarrow (1,2) \rightarrow (1,3) \rightarrow (2,3)$ with weight $1 \cdot 3 \cdot 5 \cdot 5 = 75$.
- $(1,1) \rightarrow (1,2) \rightarrow (2,2) \rightarrow (2,3)$ with weight $1 \cdot 3 \cdot 3 \cdot 5 = 45$.
- $(1,1) \rightarrow (2,1) \rightarrow (2,2) \rightarrow (2,3)$ with weight $1 \cdot 1 \cdot 3 \cdot 5 = 15$.

### Example Input 2
```
5 2 5
1 2
1
2
3
4
5
```

### Example Output 2
```
2
6
14
30
62
```

### Explanation
In the last query, there are five paths from $(1,1)$ to $(5,2)$. Their weights are $2$, $4$, $8$, $16$ and $32$, which sum up to $62$.

### Example Input 3
```
3 3 3
215 228 229
1
2
3
```

### Example Output 3
```
11225580
555879289
157593602
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>