---
{"category_name":"medium","problem_code":"CONVAIR","problem_name":"Convenient Airports","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"arthurfn","problem_tester":null,"date_added":"15-05-2020","tags":{"0":"arthurfn","1":"graphs"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CONVAIR","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CONVAIR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/CONVAIR.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/CONVAIR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/CONVAIR.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/CONVAIR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/CONVAIR.pdf) as well.

Chefland is a big nation which relies on its airport system to guarantee fast travel. Currently, there are $N$ airports (numbered $1$ through $N$) and $M$ bidirectional flights in Chefland. Each flight connects two distinct airports, but there may be any number of flights between each pair of airports. We say that a system of flights is connected if it is possible to travel from each airport to all other airports using these flights. For each airport $i$, we also define its degree $d_i$ as the number of flights that have $i$ as one of their endpoints.

Unfortunately, it turns out that the current flight system is not necessarily connected. This is unacceptable, so the mayor asked you to propose a new flight system. Formally, this means that you can remove some of the existing flights (possibly none) and arbitrarily create some new flights (possibly none). You may even create multiple flights between the same pairs of airports.

However, the infrastructure and number of employees at each airport is optimised for its current degree $d_i$, so it would be inconvenient if the new degrees of airports differ too much from the old ones. For each airport $i$, let's define $x_i$ as the degree of airport $i$ in the new proposed system of flights. We define the *inconvenience* of this system as $\sum_{i=1}^N |d_i-x_i|$.

You should propose a connected system of flights such that its inconvenience is the smallest possible. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. Each of these lines contains two space-separated integers $a$ and $b$ describing a flight that connects airports $a$ and $b$.

### Output
For each test case:
- First, print a line containing two space-separated integers ― the minimum inconvenience and the number of flights $F$ in your new system.
- Then, print $F$ lines. Each of these lines should contain two space-separated integers $a$ and $b$ describing a flight that connects airports $a$ and $b$.

### Constraints
- $T \le 100$
- $1 \le N \le 100,000$
- $1 \le M \le 200,000$
- $1 \le a, b \le N$
- $a \neq b$
- the sum of $N$ over all test cases does not exceed $400,000$
- the sum of $M$ over all test cases does not exceed $600,000$

### Subtasks
**Subtask #1 (30 points):** you only have to find the minimum incovenience ― the system of flights you output may be arbitrary as long as it follows the output format (in particular, $F = 0$ is allowed)

**Subtask #2 (30 points):**
- $1 \le N \le 1,000$
- $1 \le M \le 2,000$
- the sum of $N$ over all test cases does not exceed $4,000$
- the sum of $M$ over all test cases does not exceed $6,000$

**Subtask #3 (40 points):** original constraints

### Example Input
```
3
3 3
1 2
1 3
2 3
3 1
1 2
3 1
1 2
```

### Example Output
```
0 3
1 2
1 3
2 3
2 2
1 2
2 3
2 0
```

### Explanation
**Example case 1:** The system is already connected, so we can leave it as it is.

**Example case 2:** The optimal solution is to add a new flight between airports $2$ and $3$.

**Example case 3:** Identical to example case $2$, but the flight system we output is disconnected. This is an example of an output that would be accepted only in the first subtask.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>