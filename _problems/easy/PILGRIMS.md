---
{"category_name":"easy","problem_code":"PILGRIMS","problem_name":"D - Pilgrims Destination","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"adikr_singh","problem_tester":"","date_added":"6-04-2021","tags":{"0":"adikr_singh","1":"breadth","2":"depth","3":"easy","4":"greedy","5":"sorting","6":"spyb2021","7":"trees"},"problem_difficulty_level":"Easy","best_tag":"Breadth First Search","editorial_url":"https://discuss.codechef.com/problems/PILGRIMS","time":{"view_start_date":1618509602,"submit_start_date":1618509602,"visible_start_date":1618509602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PILGRIMS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There is a planet named “Ruizland” having $N$ cities, These cities are connected in the form of a tree by a bidirectional path of specified length(in miles). Cities are numbered from $1$ to $N$. City number $1$ is the capital city.

$M$ pilgrims started their journey from the capital city having initial energy $E_1, E_2, \ldots, E_M$ respectively which reduces on moving from one city to another by a certain amount$(A)$.
$A$ is calculated as follows:-
- Consider two cities $U$ and $V$ having an edge length of $K$ miles.
The total number of distinct cities from the capital city to the city $U$ is $D$ (city $U$ and capital city both are inclusive).
- If a pilgrim moves from city $U$ to $V$, then $A=K*D$.

Out of $N$ cities, There are some special cities (except the capital city) that are connected to only one city. All pilgrims want to reach any of the special cities. A pilgrim will stop his journey as soon as the energy of the pilgrims becomes $0$ or reaches any of the special cities.

Initially, all cities have $0$ pilgrims except the capital city.

Find the maximum count of special cities that is non-empty (at least one pilgrim is present) after the end of the journey of all the pilgrims given that pilgrims are allowed to take any path during their journey.

###Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two integers $N$ and $M$ separated by space, where $N$ is the number of cities and $M$ is the number of pilgrims.
- The second line contains $M$ integers separated by spaces, denoting the initial energy of the pilgrims.
- Next, $N-1$ lines consists of three integers $U$, $V$ and $K$ separated by space where city $U$ and $V$ are connected by a bidirectional path whose length is $K$ miles

### Output
- For each test case, Print the maximum count of special cities that is non-empty (at least one pilgrim is present) after the end of the journey of all the pilgrims.

### Constraints
- $1 \leq T \leq 50$
- $2 \leq N \leq 10^5$
- $1 \leq M \leq 10^5$
- $1 \leq E_i \leq 10^{18}$
- $1 \leq U, V \leq N$
- $1 \leq K \leq 10^6$
- It is guaranteed that the sum of $N$ over all test cases does not exceed $10^5$.
- It is guaranteed that the sum of $M$ over all test cases does not exceed $10^5$.

### Example Input
```
1
6 4
100 20 10 50
1 2 10
2 3 20
2 4 30
4 5 40
1 6 50
```

### Example Output
```
2
```

### Explanation
There are $3$ special cities namely $3, 5$ and $6$. The energy expected to reach these special cities are $50, 190$ and $50$ respectively. Special city $5$ cannot be reached by any pilgrim. If Pilgrim $1$ goes to the special city $3$ and pilgrim $4$ goes to the special city $6$, then the maximum number of non-empty special cities is $2$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>