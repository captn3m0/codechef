---
{"category_name":"easy","problem_code":"DAKIMAKU","problem_name":"Dakimakura Distribition","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"fairy_winx","problem_tester":"","date_added":"29-06-2021","tags":{"0":"binary","1":"dynamic","2":"easy","3":"fairy_winx","4":"july21"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/DAKIMAKU","time":{"view_start_date":1626082200,"submit_start_date":1626082200,"visible_start_date":1626082200,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DAKIMAKU","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/JULY21/bengali/DAKIMAKU.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JULY21/mandarin/DAKIMAKU.pdf), [Russian](https://www.codechef.com/download/translated/JULY21/russian/DAKIMAKU.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JULY21/vietnamese/DAKIMAKU.pdf) as well.

Only a few centuries later, the Berland government realized what was necessary for the country's prosperity. That's right, a dakimakura for every resident of Berland!

It is known that Berland consists of $N$ cities, where $C_i$ people live in city $i$ and it takes $T_i$ hours to get from city $i$ to city $i + 1$.

The government is ready to allocate $x$ tugriks for the implementation of the project to give out dakimakuras. They also agreed with local producers, so the dakimakuras themselves are free.

To implement the project, the government can open a branch for issuing dakimakuras free of charge in several cities. For each city with an open branch for issuing dakimakuras, the government can pay $1$ tugrik to increase its productivity by $1$ unit. It can be increased any number of times, so that a productivity of $k$ units costs $k$ tugriks.

Then the issuance of dakimakuras begins. For each resident of the country that is located in city $i$, he/she will travel to the first city with index greater or equal to $i$ that has a branch. Recall, it takes $T_i$ hours to travel from city $i$ to $i+1$. After arrival, he/she enters the queue in the branch.

For each branch, it handles the queue as follows.

- Let the productivity of this branch be $p$. If there are less than $p$ people in the queue, then the branch issues dakimakuras to everyone in the queue. Otherwise, it starts with the first $p$ people, and gives them dakimakuras. A branch can only give dakimakuras every hour (that is, integer times since the start). Also, a resident cannot receive a dakimakura at the same moment he/she enters the queue.

You must find the minimum amount of time required for the government to issue dakimakuras to all residents of Berland, spending no more than $x$ tugriks in total. Assume all the residents start travelling at the same time, and the branches also opened at hour $0$.

### Input

- The first line contains a single integer $t$ - the number of test cases. Then $t$ test cases follow.
- The first line of each test case contains two integers $N$ and $x$ - the number of cities in Berland and the maximum amount of tugriks that the government can spend.
- The second line contains $N$ integers $C_1, \ldots, C_n$.
- The third line contains $N - 1$ integers $T_1, \ldots, T_{n-1}$.

### Output
For each test case, print in a single line the answer to the problem.

### Constraints
- $1 \leq t \leq 5$
- $2 \leq N \leq 100$
- $1 \leq x \leq 10^9$
- $0 \leq C_i \leq 10^9$
- $1 \leq T_i \leq 10^9$

### Subtasks
- **Subtask 1 (20 points):** $2 \leq N \leq 8$, $1 \leq x, T_i \leq 8$ and $0 \leq C_i \leq 8$
- **Subtask 2 (20 points):** $x = 1$
- **Subtask 3 (40 points):** $2 \leq N \leq 40$
- **Subtask 4 (20 points):** Original constraints

### Sample Input
```
2
5 6
8 3 1 5 0
1 1 1 1
5 1
2 8 0 0 1
7 3 1 2
```

### Sample Output
```
3
16
```

### Explanation
The first test case:

Let's open a branch in city $1$ with productivity $3$ and one in city $4$ with productivity $3$.

Then in the $0$-th hour, $8$ people in city $1$ and $5$ people in city $4$ will enter the queues in their respective cities. Meanwhile, the people in cities $2$ and $3$ will travel to the next city.

Then in the $1$-st hour, $3$ people in city $1$ and $3$ people in city $4$ will receive dakimakuras. Now the numbers of remaining people in each city are $[5,0,3,3,0]$.

Then in the $2$-nd hour, $3$ people in city $1$ and $3$ people in city $4$ will receive dakimakuras. Now the numbers of remaining people in each city are $[2, 0, 0, 3, 0]$.

Then in the $3$-rd hour, $2$ people in city $1$ and $3$ people in city $4$ will receive dakimakuras. Now, every resident in Berland has received a dakimakura, so the process took $3$ hours.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>