---
{"category_name":"easy","problem_code":"SECRETMI","problem_name":"Secret Mission","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3 3 6\r\n1 2 3 1 2 3\r\n1 2 1\r\n2 3 1\r\n3 1 1\r\n4 4 9\r\n1 2 3 4 1 2 3 4 1\r\n1 2 1\r\n2 3 1\r\n3 4 1\r\n4 1 1\r\n3 3 2\r\n1 2\r\n1 2 3\r\n2 3 1\r\n3 1 1","output":"6\r\n5\r\n-1","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"28-02-2020","tags":{"0":"admin3","1":"easy","2":"graphs","3":"greedy","4":"ltime81","5":"shortest","6":"tmwilliamlin"},"problem_difficulty_level":"Easy","best_tag":"Shortest Path","editorial_url":"https://discuss.codechef.com/problems/SECRETMI","time":{"view_start_date":1582995602,"submit_start_date":1582995602,"visible_start_date":1582995602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SECRETMI","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME81/hindi/SECRETMI.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME81/bengali/SECRETMI.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME81/mandarin/SECRETMI.pdf), [Russian](https://www.codechef.com/download/translated/LTIME81/russian/SECRETMI.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME81/vietnamese/SECRETMI.pdf) as well.

Chefland is a country with $N$ cities (numbered $1$ through $N$) connected by $M$ bidirectional roads. Chef is on a mission to spread a secret recipe of a Rogan Josh dish. Chef has a sequence $A_1, A_2, \ldots, A_K$ and he must visit cities in the following way: he starts in the city $A_1$, travels to the city $A_2$, then travels from there to the city $A_3$ and so on until he reaches the city $A_K$. Note that a city may appear in $A$ multiple times, but $A_i \neq A_{i+1}$ for each valid $i$. When travelling between two cities, Chef always follows one of the shortest paths between them (but not necessarily the same one if he travels between them again).

The government is trying to track which cities are targeted by Chef. However, they do not know the sequence $A$. Instead, they have tracked Chef's movement as a sequence $B_1, B_2, \ldots, B_L$ of cities visited by Chef during his mission. Formally, $B_1 = A_1$ is the city where Chef starts, then for each valid $i$, he moves from the city $B_i$ to the city $B_{i+1}$ using the direct road between them and finally, he ends his mission in the city $B_L = A_K$; Chef's sequence $A$ is a subsequence of $B$, since the sequence $B$ also contains all shortest paths which Chef followed. It is guaranteed that there is a direct road between cities $B_i$ and $B_{i+1}$ for each valid $i$.

Help the government of Chefland find the minimum possible number of targeted cities, i.e. the minimum possible value of $K$ for a sequence $A$ that corresponds to the given sequence $B$, or determine that no such sequence $A$ exists.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $L$.
- The second line contains $L$ space-separated integers $B_1, B_2, \ldots, B_L$.
- Each of the following $M$ lines contains three space-separated integers $u$, $v$ and $w$ describing a road between cities $u$ and $v$ with length $w$.

### Output
For each test case, print a single line containing one integer ― the minimum possible $K$, or $-1$ if a valid sequence $A$ does not exist.

### Constraints
- $1 \le T \le 10$
- $2 \le N \le 200$
- $1 \le M \le N \cdot (N-1)/2$
- $2 \le L \le 10,000$
- $1 \le u, v \le N$
- $u \neq v$
- $1 \le w \le 10^6$
- there is at most one direct road between each pair of cities
- for each valid $i$, there is a direct road between cities $B_i$ and $B_{i+1}$

### Subtasks
**Subtask #1 (50 points):** $w = 1$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
3 3 6
1 2 3 1 2 3
1 2 1
2 3 1
3 1 1
4 4 9
1 2 3 4 1 2 3 4 1
1 2 1
2 3 1
3 4 1
4 1 1
3 3 2
1 2
1 2 3
2 3 1
3 1 1
```

### Example Output
```
6
5
-1
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>