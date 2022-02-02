---
{"category_name":"hard","problem_code":"TRIPWAYS","problem_name":"A Leisurely Journey","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4 4 4\r\n2 6 6 7\r\n1 2\r\n1 3\r\n2 4\r\n3 4\r\n1 2 3 4","output":"0\r\n2\r\n30\r\n314","explanation":"Since there is no road directly connecting city $1$ to city $4$, there are no valid vacations that only last 1 day, so the answer to the first query is $0$.\r\n\r\nThere are two ways to get to city $4$ in 2 days ? either travel from city $1$ to city $2$ on the first day and from city $2$ to city $4$ on the second day, or travel from city $1$ to city $3$ on the first day and from city $3$ to city $4$ on the second day. Neither option gives Chef any time for sightseeing, though.\r\n\r\nWith 3 days, Chef can spend one day at a tourist attraction and the other two days travelling, with 30 possible trips in total.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"david_adm","problem_tester":"","date_added":"17-02-2020","tags":{"0":"april20","1":"david_adm","2":"generating","3":"hard","4":"recurrence","5":"taran_1407"},"problem_difficulty_level":"Hard","best_tag":"Generating Functions","editorial_url":"https://discuss.codechef.com/problems/TRIPWAYS","time":{"view_start_date":1586779202,"submit_start_date":1586779202,"visible_start_date":1586779202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRIPWAYS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/APRIL20/hindi/TRIPWAYS.pdf), [Bengali](https://www.codechef.com/download/translated/APRIL20/bengali/TRIPWAYS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/APRIL20/mandarin/TRIPWAYS.pdf), and [Russian](https://www.codechef.com/download/translated/APRIL20/russian/TRIPWAYS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/APRIL20/vietnamese/TRIPWAYS.pdf) as well. 

Chef recently accepted a teaching fellowship at a prestigious culinary institution. The fellowship does not begin for a while yet, so Chef wants to use the remaining free time for a nice vacation. There are $N$ cities (numbered $1$ through $N$) connected by $M$ roads. For each valid $i$, there are $L_i$ tourist attractions in city $i$. Chef is initially in city $1$ and he will teach in city $N$. On each day of his vacation, Chef wants to perform one of the following actions:
- Travel to a city with a higher number than his current city which is directly connected to his current city by a road. At the end of his vacation, Chef must be in city $N$.
- Visit a tourist attraction in his current city. Chef may visit each tourist attraction repeatedly (on different days).

Chef has not yet decided for how many days the vacation should last. He has $Q$ queries described by a sequence $D_1, D_2, \ldots, D_Q$. For each query, i.e. for each $i$ ($1 \le i \le Q$), he would like to know the number of different vacation plans if he wants his vacation to last exactly $D_i$ days. Since these numbers may be large, compute them modulo $1,000,000,007$.

Two vacation plans (for a fixed duration of the vacation) are considered different if there is at least one day such that Chef performs different actions in the two plans on that day. Visiting different tourist attractions also counts as different actions.

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $Q$.
- The second line contains $N$ space-separated integers $L_1, L_2, \ldots, L_N$.
- Each of the next $M$ lines contains two space-separated integers $u$ and $v$ denoting that cities $u$ and $v$ are connected by a road.
- The last line contains $Q$ space-separated integers $D_1, D_2, \ldots, D_Q$.

### Output
For each query, print a single line containing one integer ― the number of possible vacations modulo $1,000,000,007$.

### Constraints
- $1 \le N \le 4,000$
- $1 \le M \le 10^5$
- $1 \le Q \le 500$
- $1 \le L_i \le 10^5$ for each valid $i$
- $1 \le u \lt v \le N$
- $1 \le D_i \le 10^{18}$ for each valid $i$

### Subtasks
**Subtask #1 (5 points):** $D_i \le 2,000$ for each valid $i$

**Subtask #2 (10 points):** $N \le 10$

**Subtask #3 (20 points):**
- $N \le 1,500$
- $D_i \le 50,000$ for each valid $i$

**Subtask #4 (20 points):** $N \le 100$

**Subtask #5 (45 points):** original constraints

### Example Input
```
4 4 4
2 6 6 7
1 2
1 3
2 4
3 4
1 2 3 4
```

### Example Output
```
0
2
30
314
```

### Explanation
Since there is no road directly connecting city $1$ to city $4$, there are no valid vacations that only last 1 day, so the answer to the first query is $0$.

There are two ways to get to city $4$ in 2 days ― either travel from city $1$ to city $2$ on the first day and from city $2$ to city $4$ on the second day, or travel from city $1$ to city $3$ on the first day and from city $3$ to city $4$ on the second day. Neither option gives Chef any time for sightseeing, though.

With 3 days, Chef can spend one day at a tourist attraction and the other two days travelling, with 30 possible trips in total.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>