---
{"category_name":"challenge","problem_code":"CHFWAR2","problem_name":"(Challenge) Codechef War II","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"18-06-2019","tags":{"0":"alei"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1563183002,"submit_start_date":1563183002,"visible_start_date":1563183002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFWAR2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JULY19/hindi/CHFWAR2.pdf), [Bengali](https://www.codechef.com/download/translated/JULY19/bengali/CHFWAR2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY19/mandarin/CHFWAR2.pdf), [Russian](https://www.codechef.com/download/translated/JULY19/russian/CHFWAR2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY19/vietnamese/CHFWAR2.pdf) as well.

Chefland is a country with $N$ cities (numbered $1$ through $N$) and $M$ bidirectional roads (numbered from $1$ through $M$). Each road connects two different cities and no two different roads connect the same pair of cities.

Bitland declared war on Chefland and after multiple battles, all roads of Chefland have ended up in a very bad state. Moreover, the war is causing psychological damage to the citizens of Chefland — for each valid $u$, the *non-eagerness* of the inhabitants of city $u$ on day $d$ is $E_u(d) = P_u + Q_u \cdot d$.

In Chefland, there are $K$ special cities that are very important strategically. Ada, the queen of Chefland, decided to repair some roads and construct new roads in such a way that if any one of these roads is destroyed, it is still possible to reach each special city from any other special city using only the roads that were repaired or constructed.

It is allowed to work on repairing and constructing different roads simultaneously, but to keep Chefland stable, Ada ordered that on each day, the number of roads that are being repaired and/or constructed must be at most $S$. Also, whenever we start repairing or constructing a road, the work on that road cannot be paused until the road is finished.

The earliest day on which we can start repairing or constructing a road is day $1$; let's denote the last day on which we finish repairing or constructing a road by $T$. The queen does not want to wait too much, so for each day between $1$ and $T$ inclusive, there must be at least one road which is currently being constructed or repaired. Note that this means $T$ cannot exceed the time it would take to repair and construct all roads.

For each valid $i$, the $i$-th of the original roads connected cities $U_i$ and $V_i$, its length was $L_i$ kilometres and the cost of repairing it is described by two parameters $A_i$ and $B_i$. The workers of Chefland can only repair one kilometer of road per day and it is not allowed to work on different parts of a road at the same time, so it takes exactly $L_i$ days to repair this road. If we start repairing this road on day $d$, it costs $A_i + B_i \cdot d$.

For each pair of different cities $u$ and $v$, let's denote the length of the shortest path between these cities before the original roads were damaged (before Chefland's invasion) by $D_{u, v}$. Then, it takes $D_{u, v}$ days to construct a brand new road between the cities $u$ and $v$. This road does not pass through any cities other than $u$ and $v$. If we start constructing this road on day $d$, it costs $(E_u(d)+E_v(d)) \cdot D_{u, v}$. It is not allowed to construct a road between two cities if they are already directly connected by a road or if they were originally directly connected by a road.

Help Ada design a plan that minimises the total cost. Formally, determine which roads should be repaired, which ones should be constructed and for each of these roads, determine the day on which the work on this road should start. The total cost of this plan should be as small as possible, while all other constraints must be satisfied perfectly.

### Input
- The first line of the input contains four space-separated integers $N$, $M$, $K$ and $S$.
- The second line contains $K$ space-separated integers denoting the indices of the special cities.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains two space-separated integers $P_i$ and $Q_i$.
- $M$ more lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains five space-separated integers $U_i$, $V_i$, $L_i$, $A_i$ and $B_i$.

### Output
- First, print a line containing a single integer $X$ denoting the number of roads you want to repair.
- Then, print $X$ lines. Each of these lines should contain two space-separated integers $d$ and $e$ denoting that you want to start repairing road $e$ on day $d$.
- Next, print a line containing a single integer $Y$ denoting the number of new roads you want to construct.
- Then, print $Y$ lines. Each of these lines should contain three space-separated integers $d$, $u$ and $v$ denoting that you want to start building a road between cities $u$ and $v$ on day $d$.

### Constraints
- $2 \le K \le N = 2^8$
- $2^4 = S \le M \le (N \cdot (N-1))/2$
- $1 \le U_i, V_i \le N$ for each valid $i$
- $1 \le L_i \le 2^{12}$ for each valid $i$
- $1 \le A_i, B_i \le 2^8$ for each valid $i$
- $1 \le P_i, Q_i \le 2^{11}$ for each valid $i$

### Example Input
```
7 9 3 2
1 3 7
1 1
1 2
1 3
1 4
1 5
1 6
1 7
1 2 1 1 1
1 4 1 1 2
2 3 1 1 3
2 4 1 1 4
3 4 1 1 5
3 5 1 1 6
3 6 1 1 7
5 7 1 1 8
6 7 1 1 9
```

### Example Output
```
8
1 1
2 2
3 3
4 5
5 6
6 7
7 8
8 9
0
```	

### Scoring
The score of each test case (and therefore each test file) is the sum of costs of all the roads you want to repair or construct. The score of a submission is the sum of scores of all test files. Your goal is to minimise the score of your submission.

There are sixteen test files. If your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files.

### Test Generation
In all test cases, $N = 2^8$ and $S = 2^4$.

There are two types of original road networks:
- Type I: There is a road between each pair of cities and the special cities are chosen uniformly randomly.
- Type II: First, ten permutations $p_1, p_2, \ldots, p_{10}$ of integers $1$ through $K+K/2$ ($1$-indexed) are generated. For each valid $i$ and $j$, the edge between cities $p_{i, j}$ and $p_{i, j+1}$ is added if it did not exist. Then, edges are added uniformly randomly until the total number of edges reaches $\left\lfloor\frac{N \cdot (N-1)}{5} \right\rfloor$. The special cities are chosen uniformly randomly between 1 and $K+K/2$. After generating the road network, the indices of the cities are relabelled. A permutation $q$ of numbers from $1$ through $N$ is uniformly randomly chosen, the new index of city $u$ will be $q_u$. If in the original network cities $u$ and $v$ are connected, in the final network cities $q_u$ and $q_v$ are connected.

$K$ is either $N/4$ or $N/2$. Next, we choose two parameters $MIN_L$ and $MAX_L$: either $1$ and $2^{12}$ respectively or $2^{11}-10$ and $2^{11}+10$ respectively. Next, we choose two more parameters $MIN_A$ and $MAX_A$: either $1$ and $2^8$ respectively or $2^7 - 20$ and $2^7 + 20$ respectively.

The lengths of all roads are chosen uniformly randomly between $MIN_L$ and $MAX_L$ inclusive. All parameters $A_i$ and $B_i$ are chosen uniformly randomly between $MIN_A$ and $MAX_A$ inclusive. All parameters $P_i$ and $Q_i$ are chosen uniformly randomly between $8 \cdot MIN_A$ and $8 \cdot MAX_A$ inclusive.

There is a test file for each unique combination of the following four parameters: road network type, $K$, the pair $(MIN_L, MAX_L)$ and the pair $(MIN_A, MAX_A)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>