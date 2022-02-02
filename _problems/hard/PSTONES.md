---
{"category_name":"hard","problem_code":"PSTONES","problem_name":"Precious Stones ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 2\r\n1 2 1\r\n2 3 2\r\n3 1\r\n1 2 1\r\n2 3 1","output":"0111\r\n0110\r\n1000\r\n01\r\n01\r\n10","explanation":"**Example case 1:**\r\nFor $M = 1$, there are three subtrees:\r\n- only vertex $1$: we obtain the set $\\{1\\}$ with bitmask $1$\r\n- only vertex $2$: we obtain the set $\\{1, 2\\}$ with bitmask $3$\r\n- only vertex $3$: we obtain the set $\\{2\\}$ with bitmask $2$\r\n\r\nFor $M = 2$, there are two possible subtrees:\r\n- vertices $\\{1, 2\\}$: we obtain the set $\\{2\\}$ with bitmask $2$\r\n- vertices $\\{2, 3\\}$: we obtain the set $\\{1\\}$ with bitmask $1$\r\n\r\nFor $M = 3$, we can only choose the whole tree, which generates the empty set (with bitmask $0$).","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"arthurfn","problem_tester":"","date_added":"13-07-2020","tags":{"0":"arthurfn","1":"arthurfn","2":"aug20","3":"daniel_1999","4":"dp","5":"dynamic","6":"hard","7":"rishup_nitdgp","8":"walsh"},"problem_difficulty_level":"Hard","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/PSTONES","time":{"view_start_date":1597656602,"submit_start_date":1597656602,"visible_start_date":1597656602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PSTONES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/AUG20/hindi/PSTONES.pdf), [Bengali](https://www.codechef.com/download/translated/AUG20/bengali/PSTONES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG20/mandarin/PSTONES.pdf), [Russian](https://www.codechef.com/download/translated/AUG20/russian/PSTONES.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG20/vietnamese/PSTONES.pdf) as well.

Chefland consists of $N$ villages connected by $N-1$ roads in such a way that the road network is a tree, i.e. there are no cycles and each village is reachable from any other village. A well known legend says that in the middle of each road, there is a hidden precious stone. There are $K$ different colours of stones, conveniently numbered $1$ through $K$, and for each road, we also know the colour of the stone hidden there.

King Chef wants a new beautiful crown, so he organises an expedition to find some stones in the following way:
- Chef chooses a set of $M$ villages to be the *expedition basis*, in such a way that they form a connected subgraph of Chefland, i.e. for any two villages in the basis, the path between them must not visit any village that is not in the basis.
- The expedition gathers the stones in all roads which lie on the "frontier" of the expedition basis, i.e. all edges for which one endpoint lies in the basis and the other endpoint does not.

For each of the $2^K$ possible sets of colours, Chef wants to know if it is possible that the expedition will return with exactly this set, i.e. there is a basis such that the expedition returns with at least one stone of each colour in this set and no stones with colours that are not in this set.

Since Chef is not sure about the size of the expedition crew, he also wants you to find these answers for each possible value of $M$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- Each of the following $N-1$ lines contains three space-separated integers $u$, $v$ and $c$, denoting that villages $u$ and $v$ are connected by a road and in this road, there is a stone with colour $c$.

### Output
Let's associate a set $S$ of colours with a bitmask $\sum_{c \in S} 2^{c-1}$.

For each test case, print $N$ lines. For each $i$ ($1 \le i \le N$), the $i$-th of these lines should contain $2^K$ integers but not separated by spaces; for each $j$ ($0 \le j < 2^K$), the $j+1$-th integer should be $1$ if it is possible to obtain the set with bitmask $j$ for $M=i$ or $0$ if it is impossible.

### Constraints
- $1 \le T \le 500$
- $1 \le N \le 100$
- $1 \le K \le 12$
- $1 \le u, v \le N$
- $1 \le c \le K$
- the graph described on the input is a tree
- the sum of $N$ over all test cases does not exceed $500$

### Subtasks
**Subtask #1 (10 points):** for each valid $i$, the $i$-th edge connects vertices $i$ and $i+1$ (in other words, the tree is a line)

**Subtask #2 (15 points):** $K \le 4$

**Subtask #3 (25 points):** $K \le 8$

**Subtask #4 (50 points):** original constraints

### Example Input
```
2
3 2
1 2 1
2 3 2
3 1
1 2 1
2 3 1
```

### Example Output
```
0111
0110
1000
01
01
10
```

### Explanation
**Example case 1:**
For $M = 1$, there are three subtrees:
- only vertex $1$: we obtain the set $\{1\}$ with bitmask $1$
- only vertex $2$: we obtain the set $\{1, 2\}$ with bitmask $3$
- only vertex $3$: we obtain the set $\{2\}$ with bitmask $2$

For $M = 2$, there are two possible subtrees:
- vertices $\{1, 2\}$: we obtain the set $\{2\}$ with bitmask $2$
- vertices $\{2, 3\}$: we obtain the set $\{1\}$ with bitmask $1$

For $M = 3$, we can only choose the whole tree, which generates the empty set (with bitmask $0$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>