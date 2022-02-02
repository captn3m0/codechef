---
{"category_name":"medium","problem_code":"QRYLAND","problem_name":"Ivan Pesic and His World Tour","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"thesitzr","problem_tester":null,"date_added":"24-06-2019","tags":{"0":"heavy","1":"ltime73","2":"mos","3":"randomized","4":"segment","5":"taran_1407","6":"thesitzr"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"","time":{"view_start_date":1561827602,"submit_start_date":1561827602,"visible_start_date":1561827602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=QRYLAND","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME73/hindi/QRYLAND.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME73/bengali/QRYLAND.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME73/mandarin/QRYLAND.pdf), [Russian](https://www.codechef.com/download/translated/LTIME73/russian/QRYLAND.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME73/vietnamese/QRYLAND.pdf) as well.

Chef is very popular, so his friends visit him often. Chef's friend Pesic decided to come visit him in Chefland during one of Pesic's famous world tours, but he got lost along the way and ended up in Queryland. Queryland has a weird structure: it has $N$ cities (numbered $1$ through $N$) and $N-1$ bidirectional roads connecting them in such a way that it is possible to reach any city in Queryland from any other city.

Pesic visited all cities in Queryland and assigned values to them according to his experiences. Let's denote the initial value of city $i$ by $A_i$. Now that Pesic has seen all cities, he wants to play in Queryland for a bit longer. He has $Q$ queries of two types:
- `1 X Y`: Consider the shortest path between cities $X$ and $Y$. Let's denote the length (number of cities, including the endpoints) of this path by $L$. Check whether the values of cities on this path (including the endpoints) form a permutation of the integers $1$ through $L$.
- `2 X Z`: Change the value of city $X$ to $Z$.

You are a big fan of Pesic, so he lets you process these queries for him.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that cities $u$ and $v$ are connected by a road.
- The following $Q$ lines describe queries.
    - Each of these lines starts with an integer $t$ denoting the type of the current query: $t = 1$ for a query of the first type or $t = 2$ for a query of the second type.
    - If $t = 1$, it is followed by a space and two space-separated integers $X$ and $Y$ describing a query of the first type.
    - Otherwise, it is followed by a space and two space-separated integers $X$ and $Z$ describing a query of the second type.

### Output
For each query of the first type, print a single line containing the string `"Yes"` if the values on the given path are a correct permutation or `"No"` if they are not.

### Constraints
- $1 \le T \le 10$
- $1 \le N, Q \le 250,000$
- $1 \le u, v \le N$
- $1 \le X, Y, Z \le N$
- $1 \le A_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $500,000$
- the sum of $Q$ over all test cases does not exceed $500,000$

### Subtasks
**Subtask #1 (10 points):** $N, Q \le 1,000$

**Subtask #2 (40 points):** $v = u+1$ for each road

**Subtask #3 (50 points):** original constraints

### Example Input
```
1
10 5
1 2 3 4 5 6 7 8 9 10
1 2
1 3
2 4
2 5
3 9
4 10
5 6
5 7
5 8
1 4 3
1 10 3
2 10 5
1 10 3
1 5 3
```

### Example Output
```
Yes
No
Yes
No
```

### Explanation
- Query 1: The values of cities on the path between cities $4$ and $3$ are $4$, $2$, $1$ and $3$, so they form a permutation of $1, 2, 3, 4$.
- Query 2: The values of cities on the path between cities $10$ and $3$ are $10$, $4$, $2$, $1$ and $3$, so they do not form a permutation of $1, 2, 3, 4, 5$.
- Query 3: The value of city $10$ changes from $10$ to $5$.
- Query 4: The values of cities on the path between cities $10$ and $3$ are now $5$, $4$, $2$, $1$ and $3$, which is a permutation of $1, 2, 3, 4, 5$.
- Query 5: The values of cities on the path between cities $5$ and $3$ are $5$, $2$, $1$ and $3$, which is not a permutation of $1, 2, 3, 4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>