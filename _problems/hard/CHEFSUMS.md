---
{"category_name":"hard","problem_code":"CHEFSUMS","problem_name":"Chef and Sums","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 2 1 1\r\n2 3 4","output":2414,"explanation":"**Example case 1:** We have $N^K = 3^2 = 9$ possible pairs $T$ of indices. The corresponding summands are:\r\n- $T = (1, 1)$: $\\mathrm{gcd}(2, 2) \\cdot (2^1 + 2^1) \\cdot (2 \\cdot 2)^1 \\cdot 2 = 64$\r\n- $T = (1, 2)$: $\\mathrm{gcd}(2, 3) \\cdot (2^1 + 3^1) \\cdot (2 \\cdot 3)^1 \\cdot 2 = 60$\r\n- $T = (1, 3)$: $\\mathrm{gcd}(2, 4) \\cdot (2^1 + 4^1) \\cdot (2 \\cdot 4)^1 \\cdot 2 = 192$\r\n- $T = (2, 1)$: $\\mathrm{gcd}(3, 2) \\cdot (3^1 + 2^1) \\cdot (3 \\cdot 2)^1 \\cdot 2 = 60$\r\n- $T = (2, 2)$: $\\mathrm{gcd}(3, 3) \\cdot (3^1 + 3^1) \\cdot (3 \\cdot 3)^1 \\cdot 3 = 486$\r\n- $T = (2, 3)$: $\\mathrm{gcd}(3, 4) \\cdot (3^1 + 4^1) \\cdot (3 \\cdot 4)^1 \\cdot 2 = 168$\r\n- $T = (3, 1)$: $\\mathrm{gcd}(4, 2) \\cdot (4^1 + 2^1) \\cdot (4 \\cdot 2)^1 \\cdot 2 = 192$\r\n- $T = (3, 2)$: $\\mathrm{gcd}(4, 3) \\cdot (4^1 + 3^1) \\cdot (4 \\cdot 3)^1 \\cdot 2 = 168$\r\n- $T = (3, 3)$: $\\mathrm{gcd}(4, 4) \\cdot (4^1 + 4^1) \\cdot (4 \\cdot 4)^1 \\cdot 2 = 1024$\r\n\r\nTheir sum modulo $10^9+7$ is $2414$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wm101","problem_tester":"","date_added":"22-07-2020","tags":{"0":"dynamic","1":"hard","2":"math","3":"sept20","4":"wm101","5":"wm101"},"problem_difficulty_level":"Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CHEFSUMS","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFSUMS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/CHEFSUMS.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/CHEFSUMS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/CHEFSUMS.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/CHEFSUMS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/CHEFSUMS.pdf) as well.

Chef gave you a sequence of integers $a_1, a_2, \dots, a_N$ and $3$ integers $K$, $m$ and $x$. Let's define the following functions:
$$G(i_1, \ldots, i_K) = \mathrm{gcd}\left(a_{i_1}, \dots, a_{i_K}\right)$$
$$S_x(i_1, \ldots, i_K) = a_{i_1}^x + a_{i_2}^x + \ldots + a_{i_K}^x$$
$$P_m(i_1, \ldots, i_K) = \left(a_{i_1} \cdot a_{i_2} \cdot \ldots \cdot a_{i_K}\right)^m$$
$$W(T) = \mathrm{smallest\,\, prime\,\, divisor\,\, of\,\, } P_1(T)$$

Chef wants you to compute the sum of $G(T) \cdot W(T) \cdot S_x(T) \cdot P_m(T)$ over all $K$-tuples of indices $T = (i_1, i_2, \ldots, i_K)$ such that $i_j \in \{1, 2, \ldots, N\}$ for each valid $j$ (there are $N^K$ of these $K$-tuples). Since this sum could be enormous, compute it modulo $10^9 + 7$.

### Input
- The first line of the input contains four space-separated integers $N$, $K$, $m$ and $x$.
- The second line contains $N$ space-separated integers $a_1, a_2, \ldots, a_N$.

### Output
Print a single line containing one integer $\sum_T G(T) \cdot W(T) \cdot S_x(T) \cdot P_m(T)$ modulo $10^9+7$.

### Constraints
- $1 \le N \le 10^6$
- $1 \le K, m, x \le 10^{18}$
- $2 \le a_i \le 10^6$ for each valid $i$

### Subtasks
**Subtask #1 (5 points):**
- $N \le 10$
- $K \le 6$

**Subtask #2 (20 points):** for each valid $i$, $a_i$ is even

**Subtask #3 (75 points):** original constraints

### Example Input
```
3 2 1 1
2 3 4
```

### Example Output
```
2414
```

### Explanation
**Example case 1:** We have $N^K = 3^2 = 9$ possible pairs $T$ of indices. The corresponding summands are:
- $T = (1, 1)$: $\mathrm{gcd}(2, 2) \cdot (2^1 + 2^1) \cdot (2 \cdot 2)^1 \cdot 2 = 64$
- $T = (1, 2)$: $\mathrm{gcd}(2, 3) \cdot (2^1 + 3^1) \cdot (2 \cdot 3)^1 \cdot 2 = 60$
- $T = (1, 3)$: $\mathrm{gcd}(2, 4) \cdot (2^1 + 4^1) \cdot (2 \cdot 4)^1 \cdot 2 = 192$
- $T = (2, 1)$: $\mathrm{gcd}(3, 2) \cdot (3^1 + 2^1) \cdot (3 \cdot 2)^1 \cdot 2 = 60$
- $T = (2, 2)$: $\mathrm{gcd}(3, 3) \cdot (3^1 + 3^1) \cdot (3 \cdot 3)^1 \cdot 3 = 486$
- $T = (2, 3)$: $\mathrm{gcd}(3, 4) \cdot (3^1 + 4^1) \cdot (3 \cdot 4)^1 \cdot 2 = 168$
- $T = (3, 1)$: $\mathrm{gcd}(4, 2) \cdot (4^1 + 2^1) \cdot (4 \cdot 2)^1 \cdot 2 = 192$
- $T = (3, 2)$: $\mathrm{gcd}(4, 3) \cdot (4^1 + 3^1) \cdot (4 \cdot 3)^1 \cdot 2 = 168$
- $T = (3, 3)$: $\mathrm{gcd}(4, 4) \cdot (4^1 + 4^1) \cdot (4 \cdot 4)^1 \cdot 2 = 1024$

Their sum modulo $10^9+7$ is $2414$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>