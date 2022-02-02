---
{"category_name":"easy","problem_code":"WIPL","problem_name":"Watching CPL","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n8 38\r\n7 8 19 7 8 7 10 20\r\n4 5\r\n2 10 4 9","output":"7\r\n2","explanation":"**Example case 1:** The first tower can be built with boxes $8 + 10 + 20 = 38$ and the second tower with boxes $7 + 7 + 8 + 19 = 41$. In this case, the box with height $7$ is left unused.\r\n\r\n**Example case 2:** We only need the box with height $10$ for one tower and the box with height $9$ for the other tower.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/j-xUftWL-Rw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"shivam51","problem_tester":"","date_added":"12-12-2020","tags":{"0":"bitmasking","1":"dynamic","2":"easy","3":"jan21","4":"shivam51","5":"sorting"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/WIPL","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=WIPL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/WIPL.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/WIPL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/WIPL.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/WIPL.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/WIPL.pdf) as well.

Get excited, folks, because it is time for the final match of Codechef Premier League (CPL)!

Mike and Tracy also want to watch the grand finale, but unfortunately, they could not get tickets to the match. However, Mike is not someone who gives up so easily — he has a plan to watch the match.

The field where the match is played is surrounded by a wall with height $K$. Outside, there are $N$ boxes (numbered $1$ through $N$). For each valid $i$, the $i$-th box has a height $H_i$.

Mike wants to take some boxes and stack them on top of each other to build two towers. The height of each tower is the sum of heights of all the boxes that form it. Of course, no box may be in both towers. The height of each tower should be at least $K$. Then Mike can climb on top of one tower and Tracy on top of the other, and they can watch the match uninterrupted!

While Mike is busy stacking the boxes, Tracy would like to know the smallest number of boxes required to build two towers such that each of them has height at least $K$, or at least that it is impossible to build such towers. Can you help Tracy?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $H_1, H_2, \ldots, H_N$.

### Output
For each test case, print a single line containing one integer — the smallest number of boxes required to build two towers, or $-1$ if it is impossible.

### Constraints
- $1 \leq T \leq 5$
- $1 \leq N, K \leq 4,000$
- $1 \leq H_i \leq 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (30 points):**
- $1 \leq N, K \leq 100$
- $1 \leq H_i \leq 100$ for each valid $i$

**Subtask #2 (70 points):** original constraints

### Example Input
```
2
8 38
7 8 19 7 8 7 10 20
4 5
2 10 4 9
```

### Example Output
```
7
2
```

### Explanation
**Example case 1:** The first tower can be built with boxes $8 + 10 + 20 = 38$ and the second tower with boxes $7 + 7 + 8 + 19 = 41$. In this case, the box with height $7$ is left unused.

**Example case 2:** We only need the box with height $10$ for one tower and the box with height $9$ for the other tower.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>