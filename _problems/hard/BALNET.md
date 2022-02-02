---
{"category_name":"hard","problem_code":"BALNET","problem_name":"Balancing Network Revisited","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":null,"date_added":"7-01-2020","tags":{"0":"alex_2oo8","1":"feb20","2":"hard","3":"observation","4":"tmwilliamlin"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BALNET","time":{"view_start_date":1581931802,"submit_start_date":1581931802,"visible_start_date":1581931802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BALNET","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/FEB20/hindi/BALNET.pdf), [Bengali](https://www.codechef.com/download/translated/FEB20/bengali/BALNET.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/FEB20/mandarin/BALNET.pdf), [Russian](https://www.codechef.com/download/translated/FEB20/russian/BALNET.pdf), and [Vietnamese](https://www.codechef.com/download/translated/FEB20/vietnamese/BALNET.pdf) as well.

Consider $N$ parallel wires running from left to right. The wires are numbered $1$ through $N$ from top to bottom. There are $M$ devices called *balancers*, numbered $1$ through $M$ from left to right. For each valid $i$, balancer $i$ connects wires $x_i$ and $y_i$ ($x_i \lt y_i$). Let's call such a structure of wires and balancers a *balancing network*.

<center><img src="https://codechef_shared.s3.amazonaws.com/download/Images/FEB20/BALNET/netw.png" /></center>

Each balancer can be directed either upwards or downwards. The directions of all balancers define the state of the balancing network.

Consider a token that starts moving to the right along some wire, from a point on that wire which is to the left of all balancers. During this process, the token encounters each balancer exactly once. Whenever the token encounters a balancer $i$, the following happens:
- if the token is moving along the wire $x_i$ and balancer $i$ is directed downwards, the token moves down to the wire $y_i$
- otherwise, if the token is moving along the wire $y_i$ and balancer $i$ is directed upwards, the token moves up to the wire $x_i$
- in all other cases, the token does not move to a different wire
- afterwards, the token keeps moving to the right

We say that a state of the balancing network:
- *transforms* a wire $i$ into a wire $j$, if a token that starts moving along the wire $i$ ends up on the wire $j$ after passing through all $M$ balancers
- *unifies* wires $i$ and $j$, if it transforms both of these wires into the same wire (possibly different from each of them)
- is $k$*-non-unifying*, if there is a set of $k$ distinct wires such that this state does not unify any pair of wires from this set

For a given balancing network, please find any $\left\lceil \frac{N}{2} \right\rceil$-non-unifying state or determine that there is no such state.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains two space-separated integers $x_i$ and $y_i$.

### Output
For each test case:
- If there is no $\left\lceil \frac{N}{2} \right\rceil$-non-unifying state for the given balancing network, print a single line containing the string `"failure"` (without quotes).
- Otherwise, print a single line containing a string with length $M$. This string should describe some $\left\lceil \frac{N}{2} \right\rceil$-non-unifying state. For each valid $i$, its $i$-th character should be either '^' if the $i$-th balancer is directed upwards or 'v' if the $i$-th balancer is directed downwards.

### Constraints
- $1 \le T \le 10^3$
- $2 \le N \le 10^6$
- $1 \le M \le 10^6$
- $1 \le x_i \lt y_i \le N$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$
- the sum of $M$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (7 points):** $M \le 10$

**Subtask #2 (14 points):**
- $N \le 10$
- $M \le 10^3$
- the sum of $M$ over all test cases does not exceed $10^4$

**Subtask #3 (29 points):** $N, M \le 100$

**Subtask #4 (50 points):** original constraints

### Example Input
```
2
3 3
1 2
2 3
1 3
5 6
1 2
3 4
1 3
2 4
2 3
1 4
```

### Example Output
```
^^^
v^vv^v
```
	
### Explanation
**Example case 1:** The state where all balancers are directed upwards ("^^^") transforms wire $1$ into itself, wire $2$ into wire $1$ and wire $3$ into wire $2$. We can see that this state does not unify wires $1$ and $3$ (or wires $2$ and $3$), thus it is $2$-non-unifying. Another $2$-non-unifying state of this balancing network is "^^v". The remaining $6$ states are not $2$-non-unifying.

**Example case 2:**
<center><img src="https://codechef_shared.s3.amazonaws.com/download/Images/FEB20/BALNET/sample.png" /></center>

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>