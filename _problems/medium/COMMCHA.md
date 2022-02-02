---
{"category_name":"medium","problem_code":"COMMCHA","problem_name":"Communication Channel","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/-OfadfAIFGw","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shaanknight","problem_tester":"","date_added":"20-11-2020","tags":{"0":"cook124","1":"dynamic","2":"expected","3":"medium","4":"shaanknight"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/COMMCHA","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COMMCHA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK124/hindi/COMMCHA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK124/mandarin/COMMCHA.pdf), [Russian](https://www.codechef.com/download/translated/COOK124/russian/COMMCHA.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK124/vietnamese/COMMCHA.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK124/bengali/COMMCHA.pdf) as well.

There is a communication channel with $N+1$ stations (numbered $0$ through $N$). Station $0$ wants to send a message to station $N$. You may install memory disks at up to $K$ of the stations $1, 2, \ldots, N-1$. Let's denote the increasing sequence of stations at which memory disks are installed by $(v_1, v_2, \ldots, v_k)$, where $k \le K$ is the number of such stations, and let $v_0 = 0$ and $v_{k+1} = N$. In stations other than $v_0, v_1, \ldots, v_{k+1}$, it is only possible to send the message forward without storing it for later.

For each $i$ ($0 \le i \lt N$), if the message is currently at the station $i$, this station can send the message to the station $i + 1$. This transfer takes one second regardless of its success or failure. With probability $p_i$, the transfer succeeds and the message reaches the station $i + 1$. Otherwise, the transfer fails and the message instantly goes back to the station $v_j$, where $j$ is the unique index such that $v_j \le i \lt v_{j+1}$ (if $i = v_j$, the message simply stays in the station $v_j$), and this station has to send it forward again.

Your task is to choose stations where memory disks should be installed, in such a way that the expected value of time needed for the message to reach station $N$ is the smallest possible. Find this smallest expected time.

You are not given the probabilities directly. Instead, you are given a non-increasing integer sequence $F_0, F_1, \ldots, F_N$. For each valid $i$, $p_i = F_{i+1} / F_i$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N + 1$ space-separated integers $F_0, F_1, \ldots, F_N$.

### Output
For each test case, print a single line containing one real number — the smallest possible expected time needed for the message to reach station $N$. Your answer will be considered correct if its absolute or relative error does not exceed $10^{-6}$.

### Constraints 
- $1 \le T \le 10^5$
- $1 \le N \le 10^5$
- $0 \le K \le \min(50, N-1)$
- $10^{12} \ge F_0 \ge F_1 \ge \ldots \ge F_N \ge 1$
- the sum of $N$ over all test cases does not exceed $10^5$

### Example Input
```
1
2 1
4 2 1
```

### Example Output
```
4.0000000000
```

### Explanation
**Example case 1:** The probabilities of success are $p_0 = p_1 = 1/2$. If no memory disks are installed, the expected amount of time the message needs to reach station $2$ is $6$ seconds.

If a memory disk is installed at station $1$, the expected time is $4$ seconds ($2$ seconds to transfer from station $0$ to station $1$ and further $2$ seconds to transfer from station $1$ to station $2$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>