---
{"category_name":"medium","problem_code":"CORTREE","problem_name":"Coronavirus","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4\r\n1 2\r\n2 3\r\n2 4\r\n6\r\n1 2\r\n1 3\r\n1 4\r\n4 5\r\n4 6","output":"5\r\n7","explanation":"**Example case 1:** For any $k \\gt 1$, we can cure all cities by giving just one unit of medicine to people in the city $1$, but for $k = 1$, we need at least two units of medicine (for the cities $1$ and $4$).","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"24-02-2020","tags":{"0":"admin3","1":"dfs","2":"ltime81","3":"medium","4":"segment","5":"tmwilliamlin","6":"trees"},"problem_difficulty_level":"Medium-Hard","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/CORTREE","time":{"view_start_date":1582995602,"submit_start_date":1582995602,"visible_start_date":1582995602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CORTREE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME81/hindi/CORTREE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME81/bengali/CORTREE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME81/mandarin/CORTREE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME81/russian/CORTREE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME81/vietnamese/CORTREE.pdf) as well.

Arya is a country with $N$ cities (numbered $1$ through $N$). We may assume that the map of Arya is a tree with $N$ vertices corresponding to the cities, rooted at the city number $1$. The coronavirus has spread all over the world and unfortunately, Arya is infected too.

The government is trying to defeat this virus. Their scientists made a medicine which can be used to cure parts of the country. We know that there is an integer $k$ with the following meaning: for each city $v$, if we give the medicine to people in this city, then this city and all cities in its subtree such that their distance from $v$ is at most $k$ become cured. When a city is cured, it never becomes infected again.

Clearly, to cure the whole tree, this procedure has to be repeated one or more times; let's say when we give medicine to people in one city, we need to spend one unit of medicine. Now, for each possible $k$, the government wants to know the minimum number of units of medicine that need to be produced in order to cure all cities, and they told the National Olympiad in Informatics Committee to solve this critical problem.

For each possible value of $k$ ($1 \le k \le N$), let's denote the minimum required number of units of medicine by $a_k$. Can you find $S = \sum_{i=1}^N a_i$?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- Each of the next $N-1$ lines contains two space-separated integers $u$ and $v$ denoting that cities $u$ and $v$ are connected by an edge.

### Output
For each test case, print a single line containing one integer $S$.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 100,000$
- $1 \le u, v \le N$
- the graph described on the input is a tree
- the sum of $N$ over all test cases does not exceed $100,000$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 5,000$
- the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
4
1 2
2 3
2 4
6
1 2
1 3
1 4
4 5
4 6
```

### Example Output
```
5
7
```

### Explanation
**Example case 1:** For any $k \gt 1$, we can cure all cities by giving just one unit of medicine to people in the city $1$, but for $k = 1$, we need at least two units of medicine (for the cities $1$ and $4$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>